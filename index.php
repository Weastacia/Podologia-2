<?php
  session_start();
  if(!isset($_SESSION['nombre'])){
    header('Location: login.php');
  }
  //elseif(isset($_SESSION['nombre'])){
  //}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficha Clinica</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Source+Sans+Pro:ital,wght@0,300;1,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/custom.css">


</head>
<body class="bg-light bg-gradient">
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./imagenes/logo-400x140.png" alt="" width="150" height="70">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ayuda.php">Ayuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Ficha de observación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./stockProd.php">Stock de insumos</a>
          </li>
        </ul>
        <span class="navbar-text ">
            Escuela de salud
            <br>
            <p class="fst-italic">“Humanizando la atención en Salud”</p>
          </span>
      </div>
    </div>
  </nav>
  <!-- Contenido -->
  <!-- 1. Antecedentes Personales -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="input-group mb-1">
        <input class="form-control" type="text" placeholder="1. Antecedentes Personales" aria-label="Disabled input example" disabled>
        <span class="input-group-text" id="inputFecha">Fecha</span>
        <span type="text" class="form-control" aria-label="Sizing example input" name="fecha" aria-describedby="inputGroup-sizing-default" id="inputFechaAct" disabled>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese nombre de paciente" name="nombre">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Rut</label>
        <input type="text" inputmode="numeric, decimal" class="form-control" maxlength="10" id="inputRut" placeholder="Ingrese Rut" name="rut" onkeypress="return valideKey(event);">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Teléfono</label>
        <input type="text" inputmode="numeric, decimal" class="form-control" maxlength="9" id="inputTelefono" placeholder="Ingrese Telefono" name="telefono" onkeypress="return valideKey(event);">
      </div>
      <div class="col-md-3">
        <label for="inputAddress" class="form-label">Edad</label>
        <input type="text" inputmode="numeric, decimal" class="form-control" maxlength="2" id="inputEdad" placeholder="Ingrese edad" name="edad" onkeypress="return valideKey(event);"/>
      </div>
      <div class="col-md-9">
        <label for="inputAddress2" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="inputFechaN" placeholder="Escoja una fecha" name="fechaNacimiento">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Estado civil</label>
        <select id="inputEstCivil" class="form-select" name="estadoCivil">
          <option selected>Seleccione Estado Civil...</option>
          <option>Casado(a)</option>
          <option>Conviviente</option>
          <option>Anulado(a)</option>
          <option>Separado(a) de unión legal</option>
          <option>Separado(a) de unión de hecho</option>
          <option>Viudo(a)</option>
          <option>Soltero(a)</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Previsión</label>
        <select id="inputPrevision" class="form-select" name="prevision">
          <option selected>Seleccione Previsión...</option>
          <option>Fondo Nacional De Salud (Fonasa)</option>
          <option>Isapre</option>
          <option>Particular</option>
        </select>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="inputDireccion" placeholder="Ingrese Dirección" name="direccion">
      </div>
      <div class="col-12 mb-3">
        <label for="inputAddress" class="form-label">Ocupación</label>
        <input type="text" class="form-control" id="inputOcupacion" placeholder="Ingrese Ocupación" name="ocupacion">
      </div>
    </form>
  </div>
  </div>
  <!-- 2. Anamnesis Proxima -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-3">
        <input class="form-control mb-2" type="text" placeholder="2. Anamnesis Proxima" aria-label="Disabled input example" disabled>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="anamnesisProx"></textarea>
      </div>
    </form>
  </div>
  </div> 
  <!-- 3. Anamnesis Remota -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="3. Anamnesis Remota" aria-label="Disabled input example" disabled>
      </div>
      <div class="mb-3 input-group ">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Farmacología</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options1-outlined" id="primary1-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary1-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options2-outlined" id="danger1-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger1-outlined">No</label>
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Enf. Crónicas</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options3-outlined" id="primary2-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary2-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options4-outlined" id="danger2-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger2-outlined">No</label>
        </div>
      </div>      
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Enf. Respiratorias</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options5-outlined" id="primary3-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary3-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options6-outlined" id="danger3-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger3-outlined">No</label>
        </div>
      </div>      
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Diabetes</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options7-outlined" id="primary4-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary4-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options8-outlined" id="danger4-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger4-outlined">No</label>
        </div>
        <div class="d-grid gap-2 d-md-block">
          <span class="input-group-text mx-2 w-15" id="basic-addon1">Tipo</span>
        </div>
        <div class="d-grid gap-2 d-md-block">
          <select class="form-select w-10" id="Default select example">
            <option selected>Seleccione tipo...</option>
            <option value="1">Tipo 1</option>
            <option value="2">Tipo 2</option>
            <option value="3">Tipo Gestional</option>
          </select>
        </div>
      </div>      
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Enf. Cardiovasculares</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options9-outlined" id="primary5-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary5-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options10-outlined" id="danger5-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger5-outlined">No</label>
        </div> 
      </div>  
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Enf. Neurológicas</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options11-outlined" id="primary6-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary6-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options12-outlined" id="danger6-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger6-outlined">No</label>
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Habitos</span>
        <div class="d-grid gap-2 d-md-block">
          <select class="form-select" aria-label="Default select example">
            <option selected>Escoja un habito...</option>
            <option value="1">Tabaco</option>
            <option value="2">Drogas</option>
            <option value="3">Alcohol</option>
          </select>
        </div>
        <span class="input-group-text mx-2 w-15" id="basic-addon1">Otros</span>
        <input type="text" class="form-control" id="inputDireccion" placeholder="Ingrese habito">
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-30" id="basic-addon1">Altereaciones ortopédicas (especifique)</span>
        <div class="d-grid gap-2 me-5 d-md-block">
          <input type="checkbox" class="btn-check" name="options13-outlined" id="primary7-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary7-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options14-outlined" id="danger7-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger7-outlined">No</label>
        </div>
        <div class="d-grid gap-2 mt-2 w-100 d-md-block">
          <input type="text" class="form-control" id="inputDireccion" placeholder="Especifique">
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-30" id="basic-addon1">Altereaciones circulatorias (especifique)</span>
        <div class="d-grid gap-2 me-5 d-md-block">
          <input type="checkbox" class="btn-check" name="options15-outlined" id="primary8-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary8-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options16-outlined" id="danger8-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger8-outlined">No</label>
        </div>
        <div class="d-grid gap-2 mt-2 w-100 d-md-block">
          <input type="text" class="form-control" id="inputDireccion" placeholder="Especifique">
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-30" id="basic-addon1">Úlceras / Heridas (especifique)</span>
        <div class="d-grid gap-2 me-5 d-md-block">
          <input type="checkbox" class="btn-check" name="options17-outlined" id="primary9-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary9-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options18-outlined" id="danger9-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger9-outlined">No</label>
        </div>
        <div class="d-grid gap-2 mt-2 w-100 d-md-block">
          <input type="text" class="form-control" id="inputDireccion" placeholder="Especifique">
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-30" id="basic-addon1">Alergia (especifique) medicamento-metal-látex-otros</span>
        <div class="d-grid gap-2 me-5 d-md-block">
          <input type="checkbox" class="btn-check" name="options19-outlined" id="primary10-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary10-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options20-outlined" id="danger10-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger10-outlined">No</label>
        </div>
        <div class="d-grid gap-2 mt-2 w-100 d-md-block">
          <input type="text" class="form-control" id="inputDireccion" placeholder="Especifique">
        </div>
      </div>
    </form>
  </div>
  </div>
  <!-- 4. Examen fisico general y podologico -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="4. Examen fisico general y podologico" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">P/A (mm/HG)</th>
              <th scope="col">HGT (mh/dl)</th>
              <th scope="col">FC (x')</th>
              <th scope="col">Peso (kg)</th>
              <th scope="col">Talla (cm)</th>
              <th scope="col">IMC</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <input type="text" inputmode="numeric, decimal" class="w-100" onkeypress="return valideKey(event);">
              </td>
              <td>
                <input type="text" inputmode="numeric, decimal" class="w-100" onkeypress="return valideKey(event);">
              </td>
              <td>
                <input type="text" inputmode="numeric, decimal" class="w-100" onkeypress="return valideKey(event);">
              </td>
              <td>
                <input type="text" inputmode="numeric, decimal" id="peso" class="w-100" onkeypress="return valideKey(event);">
              </td>
              <td>
                <input type="text" inputmode="numeric, decimal" id="talla" class="w-100" onkeypress="return valideKey(event);">
              </td>
              <td>
                <input type="text" inputmode="numeric, decimal" id="imc" class="w-100" onkeyup="calculoImc()" onkeypress="return valideKey(event);">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Maculas Vasc. EE.II</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options21-outlined" id="primary11-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary11-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options22-outlined" id="danger11-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger11-outlined">No</label>
        </div>
        <div class="d-grid gap-2 d-md-block">
          <span class="input-group-text mx-2 w-15" id="basic-addon1">Tipo</span>
        </div>
        <div class="d-grid gap-2 d-md-block">
          <select class="form-select w-100" id="Default select example">
            <option selected>Seleccione tipo...</option>
            <option value="1">Angiomas</option>
            <option value="2">Telangiectasias</option>
          </select>
        </div>
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text me-2 w-25" id="basic-addon1">Nevos</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options23-outlined" id="primary12-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary12-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options24-outlined" id="danger12-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger12-outlined">No</label>
        </div>
        <span class="input-group-text mx-2 w-25" id="basic-addon1">Amputación</span>
        <div class="d-grid gap-2 d-md-block">
          <input type="checkbox" class="btn-check" name="options25-outlined" id="primary13-outlined" autocomplete="off">
          <label class="btn btn-outline-primary" for="primary13-outlined">Si</label>
          <input type="checkbox" class="btn-check" name="options26-outlined" id="danger13-outlined" autocomplete="off">
          <label class="btn btn-outline-danger" for="danger13-outlined">No</label>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Derecho</th>
              <th scope="col">Izquierdo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Pulso Pedio (+)(-)</th>
              <td>
                <input type="text">
              </td>
              <td>
                <input type="text">
              </td>
            </tr>
            <tr>
              <th scope="row">Pulso Tibial (+)(-)</th>
              <td>
                <input type="text">
              </td>
              <td>
                <input type="text">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fria</th>
              <th scope="col">Normal</th>
              <th scope="col">Tibia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Temperatura</th>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="option1"></td>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="option2"></td>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios3" value="option3"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Normal</th>
              <th scope="col">Seca</th>
              <th scope="col">Humeda</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Piel</th>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="option1"></td>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="option2"></td>
              <td>
                <input class="form-check-input" type="radio" name="Radios" id="Radios3" value="option3"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mb-3">
        <p class="fw-bold text-decoration-underline">Trofismo dermico</p>
        <label for="exampleFormControlTextarea1" class="form-label">Diagnostico</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
  </div>
  </div>
  <!-- 5. Simbología -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
        <div class="mb-1">
            <input class="form-control mb-2" type="text" placeholder="5. Simbología" aria-label="Disabled input example" disabled>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive">
                <thead>
                    <th><img src="./imagenes/img-simbologia.png" class="img-fluid mb-3" alt=""></th>
                </thead>
            </table>
        </div>
    </form>
  </div>
  </div>
  <!-- 6. Morfologia del antepie -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="6. Morfologia del antepie" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" >
          <thead>
            <th colspan="3"><img src="./imagenes/tipos de pies.png" class="img-fluid mb-3" alt=""></th>
          </thead>
          <tbody>
            <tr class="align-middle">
              <td>
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Egipcio</label>
              </td>
              <td>
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Cuadrado</label>
              </td>
              <td>
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Griego</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  </div>
  <!-- 7. Topografia Ungueal -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
        <div class="mb-1">
            <input class="form-control mb-2" type="text" placeholder="7. Topografia Ungueal" aria-label="Disabled input example" disabled>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive">
                <thead>
                    <th><img src="./imagenes/topografia ungueal.png" class="img-fluid mb-3" alt=""></th>
                </thead>
            </table>
        </div>
    </form>
  </div>
  </div>
  <!-- 8. Evolución -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="8. Evolución" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">
        <table class="table align-middle table-bordered">
          <thead>
            <tr>
              <th>Observaciones</th>
              <th>Tratamiento</th>
              <th>Indicaciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-top">
                <div class="mt-3 position-relative"> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Calzado adecuado
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Inadecuado
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Muy inadecuado
                    </label>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Asepsia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Fomentación
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Limpieza de surcos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Onicotomia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Despiculización
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Resecado
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Helotomia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Desbastado
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Pulido
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Asepsia final
                  </label>
                </div>
              </td>
              <td class="align-top">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
              </td>
            </tr>
            <tr>
              <td class="align-top">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
              </td>
              <td>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Otros:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
              </td>
              <td>
                <div class="col-md-9">
                  <label for="inputAddress2" class="form-label">Fecha</label>
                  <input type="date" class="form-control" id="inputFechaN" placeholder="Escoja una fecha">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Tratante</label>
                  <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese nombre del tratante">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  </div>
  <!-- Estudio de queratopatías -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="Estudio de queratopatías" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">'
        <table class="table align-middle table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>
                <img src="./imagenes/img estudios.png" class="img-fluid mb-3" alt="">
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">PD</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
            <tr>
              <th scope="row">PI</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  </div>
  <!-- Estudio Onicopatias -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="Estudio Onicopatias" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">'
        <table class="table align-middle table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>
                <img src="./imagenes/img estudios.png" class="img-fluid mb-3" alt="">
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">PD</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
            <tr>
              <th scope="row">PI</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  </div>
  <!-- Deformidades digitales -->
  <div class="container-md">
  <div class="mx-auto p-1">
    <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
      <div class="mb-1">
        <input class="form-control mb-2" type="text" placeholder="Deformidades digitales" aria-label="Disabled input example" disabled>
      </div>
      <div class="table-responsive">
        <table class="table align-middle table-bordered">
          <thead>
            <th colspan="2"><img src="./imagenes/img estudios.png" class="img-fluid mb-3" alt=""></th>
          </thead>
          <tbody>
            <tr>
              <th scope="row">PD</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
            <tr>
              <th scope="row">PI</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
          </tbody>
        </table>
      </div>      
      <div class="table-responsive">
        <table class="table align-middle table-bordered">
          <thead>
            <th colspan="2"><img src="./imagenes/img estudios.png" class="img-fluid mb-3" alt=""></th>
          </thead>
          <tbody>
            <tr>
              <th scope="row">PD</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
            <tr>
              <th scope="row">PI</th>
              <td>
                <input type="text" class="w-50">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>
</html>