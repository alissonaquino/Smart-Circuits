import React, { useState, useEffect } from 'react';
import { useNavigate , useParams } from 'react-router-dom';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import firebaseDb from '../../config/firebase.js';
import { toast } from 'react-toastify';

const urlParams = new URLSearchParams(window.location.search);

const Criar = () => {
  var i = urlParams.get("i");
  const initialState = {
    idQuizz: "",
    idUsu: "1",
    avaliacao: "0",
    dificuldade: "Fácil",
    alt1: "",
    alt2: "",
    alt3: "",
    alt4: "",
  };

  const [state, setState] = useState(initialState);
  const [data, setData] = useState({});
  const { idUsu, tamanho, pergunta, alt1, alt2, alt3, alt4 } = state;

  const history = useNavigate();

  const { id } = useParams();
  useEffect(() => {
    firebaseDb.child("Quizz").on("value", (snapshot) => {
      if (snapshot.val() !== null) {
        setData({
          ...snapshot.val(),
        });
      } else {
        setData({});
      }
    });
    return () => {
      setData({});
    };
  }, [id]);

  const setarTamanho = (e) => {
    let { name, value } = e.target;
    setState({
      ...state,
      [name]: value,
      
    });
    console.log(tamanho);
    
    e.preventDefault();

     firebaseDb.child("Quizz").push(state, (err) => {
    
     });
     i++;
     urlParams. set('i', i);
     console.log(i);
     window.location.search = urlParams;
  };

  const handleInputChange = (e) => {
    let { name, value } = e.target;
    setState({
      ...state,
      [name]: value,
      
    });
    console.log(tamanho);
  };

  const avançar = () => {
    i++;
    console.log(i);
  }

  const handleSubmit = (e) => {
    e.preventDefault();
    if (!pergunta || !alt1 || !alt2 || !alt3 || !alt4) {
      toast.error("Por favor preencha todos os campos");
    } else {
      
        // No id mean user is adding record for the first time
        firebaseDb.child("Perguntas").push(state, (err) => {
          if (err) {
            toast.error(err);
          } else {
            toast.success("Pergunta adicionada com sucesso");
            i++;
            urlParams. set('i', i);
            console.log(i);
            window.location.search = urlParams;
           
           // window.location.href = '/quizzes/criar';
          }
        });
        
    }
  };
  
  if(i == 0)
  {
  return (
  <div className='mt-5 container card'>
    <div className='mb-3'>
    <h3 className='text-center'>Area de Quizzes</h3>
    </div>
    <div>
<form onSubmit={setarTamanho}>
      <Form.Group className="mb-3" >
        <Form.Label >Numero de perguntas: </Form.Label>
        <Form.Select id="tamanho"
          name="tamanho"
          placeholder="Numero de perguntas do quizz"
          onChange={handleInputChange} >
          <option >Escolha um numero de perguntas</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </Form.Select>
      </Form.Group>
      <Button variant="primary" type='submit'>
        Avançar
      </Button>
     
      </form>
    </div>
    
<br />
  </div>


  );
  }else{
    return(
      <div className='mt-5 container card'>
    <div className='mb-3'>
    <h3 className='text-center'>Area de Quizzes</h3>
    </div>
    <div id='formulario' className=''>
    <form id='formulario' onSubmit={handleSubmit} action='/quizzes/criar'>
      <Form.Group className="mb-3" >
        <Form.Label >Pergunta {i}</Form.Label>
        <Form.Control type="text"
          id="pergunta"
          name="pergunta"
          placeholder="Sua pergunta"
          value={pergunta || ""}
          onChange={handleInputChange} />
      </Form.Group>
      <div className='row'>
        <div className='col-6'>
      <Form.Group className="mb-3 ">
        <Form.Label className=''>Alternativa A</Form.Label>
        <Form.Control id="alt1"
          name="alt1"
          placeholder="Alternativa A"
          value={alt1 || ""}
          onChange={handleInputChange}  />
      </Form.Group>
      </div>
      <div className='col-6'>
      <Form.Group className="mb-3 " >
        <Form.Label className=''>Alternativa B</Form.Label>
        <Form.Control id="alt2"
          name="alt2"
          placeholder="Alternativa C"
          value={alt2 || ""}
          onChange={handleInputChange}  /> 
      </Form.Group>
      </div>
      </div>
      <div className='row'>
        <div className='col-6'>
      <Form.Group className="mb-3 " >
        <Form.Label className=''>Alternativa C</Form.Label>
        <Form.Control id="alt3"
          name="alt3"
          value={alt3 || ""}
          onChange={handleInputChange} 
          placeholder="Alternativa C" />
      </Form.Group>
      </div>
      <div className='col-6'>
      <Form.Group className="mb-3 " >
        <Form.Label className=''>Alternativa D</Form.Label>
        <Form.Control id="alt4"
          name="alt4"
          value={alt4 || ""}
          onChange={handleInputChange}  placeholder="Alternativa D" />
      </Form.Group>
      </div>
      </div>   
     
    


     
      
     <Button variant="primary" type="submit" >
        Avançar
      </Button>
      </form>
    </div>
    
<br />
  </div>
    );
  }
}

export default Criar;
