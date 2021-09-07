<div>
   
    @foreach ($listDetail as $list)
        <section id="save">
            <section class="sheet" data-page-number="1">
                <aside style="background-color:rgb(128,255,128);">
                    <section class="contact">
                        <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;">Contact</h6>
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker-alt" title="Location"></i> {{$list->adresse}}</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone" title="Cell phone"></i> <a href="#">{{$list->telephone1}}</a></p>
                            </li>
                            @if (empty($list->telephone2))
                            
                            @else
                            <li>
                                <p><i class="fa fa-phone" title="Cell phone"></i> <a href="#">{{$list->telephone2}}</a></p>
                            </li>
                            @endif
                            <li>
                                <p><i class="fa fa-envelope" title="Email"></i> <a href="#">{{$list->email}}</a></p>
                            </li>
                            @if (empty($list->date_naissance))
                            
                            @else
                            <li>
                                <p><i class="fa fa-globe-americas" title="Website"></i> né le {{$list->date_naissance}}</p>
                            </li>
                            @endif

                            @if (empty($list->lieu_naissance))
                            
                            @else
                            <li>
                                <p><i class="fab fa-github" title="GitHub"></i>lieu de naissance: {{$list->lieu_naissance}}</p>
                            </li>
                            @endif
                        </ul>
                    </section>
                    @if (count($list->langue)>0)
                    <section class="skills">
                        <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;">Langues</h6>
                    @foreach ($list->langue as $lan)
                    <ul>
                            <li><span>{{$lan->nom}}: {{$lan->niveau}}</span></li>
                        </ul>
                    @endforeach
                    </section>
                    @else

                    @endif
                   
                    @if(count($list->competence)>0)
                    <section class="skills">
                        <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;">Competences</h6>
                    @foreach ($list->competence as $comp)
                        <ul>
                            <li><span>{{$comp->nom_competence}}</span></li>
                        </ul>
                    @endforeach
                        
                    </section>
                    @else

                    @endif
                    
                @if (count($list->technologieoutil)>0)
                <section class="skills">
                        <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;">{{$titre["formation"]}}</h6>
                    @foreach ($list->technologieoutil as $tech)
                        <ul>
                            @if (empty($tech->description))
                                
                            @else
                                <li><span>{{$tech->nom}}  {{$tech->description}}</span></li>
                            @endif
                            
                                
                        </ul>
                    @endforeach
                    </section>
                @else
                    
                @endif
                @if (count($list->centreinteret)>0)
                <section class="references">
                        <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;">{{$titre["centre"]}}</h6>
                        @foreach ($list->centreinteret as $cen)
                            <p>{{$cen->nom}}</p>
                        @endforeach
                            
                    </section>
                @else

                @endif
                    
                </aside>
               
                    
               
                <section>
                <div style="text-align: center;">
                <div style="position:relative; left:20px;">
                            <img src="{{ asset('storage/'. $list->photo) }}" style="width:150px;height: 150px; border:3px solid #fff; box-shadow: 0px 0px 10px #777;border-radius:50%;" >
                </div>
                    <header class="name" aria-label="Joe Smith">
                        
                            {{-- <svg width="257px" height="35px" viewBox="0 0 257 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-family="Montserrat-Regular, Montserrat" font-size="30" font-weight="normal">
                                    <g id="Letter" transform="translate(-54.000000, -140.000000)" fill="#484848">
                                    
                                        
                                 
                                        <text>
                                            <tspan x="54.728" y="174">{{$list->nom}} </tspan>
                                            
                                        </text>
                                    </g>
                                    
                                </g>
                            </svg> --}}
                            <h3 >{{$list->nom}} {{$list->prenoms}}</h3>
                            {{-- <h3 ></h3> --}}
                        <h6>{{$list->type_profil}}</h6>
                        <hr>
                   
                    </header>
                </div>
                    
                   
                    <section>
                        @if (count($list->experienceprofressionnelle)>0)
                        <section class="experience">
                            <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;background-color:rgb(128,255,128);">Experience</h6>
                            <ol>
                            @foreach ($list->experienceprofressionnelle as $exp)
                                <li>
                                    <header>
                                        <p class="sanserif" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 15px;">{{$exp->employeur}}</p>
                                        <time>{{$exp->date_debut}} - {{$exp->date_fin}}</time>
                                    </header>
                                    <span>{{$exp->poste}}</span>
                                    <ul>
                                        @if (empty($exp->description))
                                            
                                        @else
                                        <li>{{$exp->description}}</li>
                                        @endif
                                        
                                        
                                    </ul>
                                </li>
                                
                                
                             @endforeach    
                            </ol>
                        </section>
                        @endif

                        @if (count($list->experienceextraprofressionnelle)>0)
                        <section class="experience">
                            <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;background-color:rgb(128,255,128);">Experience Extra Porfessionnelle</h6>
                            <ol>
                            @foreach ($list->experienceextraprofressionnelle as $expExtra)
                                <li>
                                    <header>
                                        <p class="sanserif" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 15px;">{{$expExtra->employeur}}</p>
                                        <time>{{$expExtra->date_debut}} - {{$expExtra->date_fin}}</time>
                                    </header>
                                    <span>{{$expExtra->poste}}</span>
                                    <ul>
                                        @if (empty($expExtra->description))
                                            
                                        @else
                                        <li>{{$expExtra->description}}</li>
                                        @endif
                                        
                                        
                                    </ul>
                                </li>
                                
                                
                             @endforeach    
                            </ol>
                        </section>
                        @endif
                        
                        @if (count($list->formation)>0)
                        <section class="education">
                            <h6 style="color:gray;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 25px;background-color:rgb(128,255,128);">Formations</h6>
                            <ol>
                               @foreach ($list->formation as $form)   
                                <li>
                                    <div>
                                        <p class="sanserif" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 15px;">{{$form->etablissement}}</p>
                                        <time>{{$form->date_debut}} - {{$form->date_fin}}</time>
                                    </div>
                                    <div>
                                        <span>{{$form->formation}}</span>
                                        <span>{{$form->ville}}</span>
                                    </div>
                                    @if (empty($form->description))
                                        
                                    @else
                                    <p>{{$form->description}}<br></p>
                                    @endif
                                    
                                </li>
                                @endforeach
                            </ol>
                        </section>
                        @else

                        @endif
                        
                    </section>
                </section>
            </section>
        </section>
        @endforeach
        <div >
                <button style="background-color: #008CBA; /* BLUE */
  border: none;color: white;padding: 10px;text-align: center;text-decoration: none;display: inline-block;font-size:16px;margin: 4px 2px;cursor: pointer;border-radius: 8px;float:right;" wire:click="Telecharger">Telecharger</button>
        </div>
        <div id="github-link">     
                <span></span>
        <style type="text/css">body{margin:0}a{text-decoration:none;outline:0}.widget{display:inline-block;overflow:hidden;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif;font-size:0;line-height:0;white-space:nowrap}.btn,.social-count{position:relative;display:inline-block;display:inline-flex;height:14px;padding:2px 5px;font-size:11px;font-weight:600;line-height:14px;vertical-align:bottom;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-repeat:repeat-x;background-position:-1px -1px;background-size:110% 110%;border:1px solid}.btn{border-radius:.25em}.btn:not(:last-child){border-radius:.25em 0 0 .25em}.social-count{border-left:0;border-radius:0 .25em .25em 0}.widget-lg .btn,.widget-lg .social-count{height:16px;padding:5px 10px;font-size:12px;line-height:16px}.octicon{display:inline-block;vertical-align:text-top;fill:currentColor;overflow:visible}.btn{color:#24292e;background-color:#eff3f6;border-color:#cfd3d6;border-color:rgba(27,31,35,.15);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg'%3e%3clinearGradient id='o' x2='0' y2='1'%3e%3cstop stop-color='%23fafbfc'/%3e%3cstop offset='90%25' stop-color='%23eff3f6'/%3e%3c/linearGradient%3e%3crect width='100%25' height='100%25' fill='url(%23o)'/%3e%3c/svg%3e");background-image:-moz-linear-gradient(top, #fafbfc, #eff3f6 90%);background-image:linear-gradient(180deg, #fafbfc, #eff3f6 90%);filter:progid:DXImageTransform.Microsoft.Gradient(startColorstr='#FFFAFBFC', endColorstr='#FFEEF2F5')}:root .btn{filter:none}.btn:focus,.btn:hover{background-color:#e9ebef;background-position:0 -0.5em;border-color:#caccd0;border-color:rgba(27,31,35,.15);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg'%3e%3clinearGradient id='o' x2='0' y2='1'%3e%3cstop stop-color='%23f3f4f6'/%3e%3cstop offset='90%25' stop-color='%23e9ebef'/%3e%3c/linearGradient%3e%3crect width='100%25' height='100%25' fill='url(%23o)'/%3e%3c/svg%3e");background-image:-moz-linear-gradient(top, #f3f4f6, #e9ebef 90%);background-image:linear-gradient(180deg, #f3f4f6, #e9ebef 90%);filter:progid:DXImageTransform.Microsoft.Gradient(startColorstr='#FFF3F4F6', endColorstr='#FFE8EAEE')}:root .btn:focus,:root .btn:hover{filter:none}.btn:active{background-color:#e9ecef;border-color:#cacdd0;border-color:rgba(27,31,35,.15);box-shadow:inset 0 .15em .3em rgba(27,31,35,.15);background-image:none;filter:none}.social-count{color:#24292e;background-color:#fff;border-color:#ddddde;border-color:rgba(27,31,35,.15)}.social-count:focus,.social-count:hover{color:#0366d6}.octicon-heart{color:#ea4aaa}</style>
        </div>

</div>
