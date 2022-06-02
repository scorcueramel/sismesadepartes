<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa de partes virtual</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Mesa de Partes Virtual</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Paso <span class="step-number">1</span></h3>
                        <p class="step-number-content active">Ingresa información corresponddiente al documento.</p>
                        <p class="step-number-content d-none">Ingresa la información personal del solicitante.</p>
                        <p class="step-number-content d-none">Ingresa la información correspondiente para la notificación.</p>
                        <p class="step-number-content d-none">Carga el archivo necesario para su validación y atención.</p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Datos del Documento</li>
                        <li>Datos del Solicitante</li>
                        <li>Datos para Notificar</li>
                        <li>Carga de Archivo</li>
                    </ul>   
                </div>
                <div class="right-side">
                    <div class="main active">
                        <small><i class="fa fa-file"></i></small>
                        <div class="text">
                            <h2>Datos del Documento</h2>
                            <p>Ingresa información corresponddiente al documento.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select name="" class="form-control" id="centro_servicio" required require>
                                    <option value="0" style="color:#4c5b68;">Centros de Servicios</option>
                                    @foreach($servcent as $i)
                                        <option value="{{$i->censerv_id}}">{{$i->direccion_centro}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-div"> 
                                <input type="text" required>
                                <span>Last Name</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Phone number</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require>
                                <span>E-mail Address</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select>
                                    <option>Select Country</option>
                                    <option>India</option>
                                    <option>France</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                    <option>Germany</option>
                                    <option>Russia</option>
                                    <option>China</option>
                                    <option>Japan</option>
                                    <option>Pakistan</option>
                                </select>
                            
                            </div>
                            <div class="input-div">
                                
                                <select>
                                    <option>Select City</option>
                                    <option>New Delhi</option>
                                    <option>Paris</option>
                                    <option>London</option>
                                    <option>Washington D.C.</option>
                                    <option>Berlin</option>
                                    <option>Moscow</option>
                                    <option>Bejing</option>
                                    <option>Tokyo</option>
                                    <option>Islamabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Datos del Solicitante</h2>
                            <p>Ingresa la información personal del solicitante.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>School Name</span>
                            </div>
                            <div class="input-div"> 
                                <input type="text" required>
                                <span>Board Name</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>College/University name</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select>
                                    <option>Select Course</option>
                                    <option>BCA</option>
                                    <option>B-TECH</option>
                                    <option>BA</option>
                                    <option>B-COM</option>
                                    <option>B-SC</option>
                                    <option>MBA</option>
                                    <option>MCA</option>
                                    <option>M-COM</option>
                                    <option>M-TECH</option>
                                </select>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Datos para Notificar</h2>
                            <p>Ingresa la información correspondiente para la notificación.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Experience 1</span>
                            </div>
                            <div class="input-div"> 
                                <input type="text" required require>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>Experience 2</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>Experience 3</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    
                    
                    
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Carga de Archivo</h2>
                            <p>Carga el archivo necesario para su validación y atención.</p>
                        </div>
                        <div class="user_card">
                            <span></span>
                            <div class="circle">
                                <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>
                            </div>
                            <div class="social">
                                <span><i class="fa fa-share-alt"></i></span>
                                <span><i class="fa fa-heart"></i></span>
                                
                            </div>
                            <div class="user_name">
                                <h3>Peter Hawkins</h3>
                                <div class="detail">
                                    <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                    <p>17 last day . 94Apply</p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="submit_button">Submit</button>
                        </div>
                    </div>
                     <div class="main">
                         <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                             <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                         
                        <div class="text congrats">
                            <h2>Congratulations!</h2>
                            <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>