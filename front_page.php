<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Entry</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		div.arts,div.science,div.passing1
        {
            float: left;
			width: 33.1%;
			height: 80%;
			padding: 5px;
			font-size: large;
			/*opacity: 0.6;
			background-color: #ffffff;*/
			font-weight: 1000;
			color: #000000;
			background: rgba(192,192,192,0.3);
			border-style: double;
        }
		@media screen and (max-width:600px) 
		{
			div.arts,div.science,div.passing1
			{
				width: 100%;
			}
		}
		div.parent_div:after 
		{
			content: "";
			display: table;
			clear: both;
		}
		div.parent_div
		{
			display: flex;
			flex-wrap: wrap;
			align-content:flex-start;
		}
        div.year1
        {
            /*//position: fixed;
            //float: centre;
            //bottom: 420px;
            //left: 200px;*/
        }
        div.year2
        {
            /*//position: fixed;
            //float: centre;
            //left: 200px;
            //bottom: 240px;*/
        }
        div.type1
        {
            /*//position: fixed;
            //float: centre;
            //bottom: 430px;
            //left: 400px;*/
        }
        div.type2
        {
            /*//position: fixed;
            //float: centre;
            //bottom: 250px;
            //left: 400px;*/
        }
        div.passing
        {
            /*//position: fixed;
            //float: left;
            //left: 1000px;*/
        
        }
        div.passing1
        {
            /*//position: fixed;
            //float: left;
            //left: 1200px;
            //bottom: 300px;*/
			width: 29.42%;
			align-content: left;
        }
        div.numbr1
        {
            /*//position: relative;
            //float: left;
            //left: 490px;
            //bottom: 143px;*/
			padding-bottom: 5px;
			height: 20%;
        }
        div.numbr2
        {
            /*//position: relative;
            //float: left;
            //left: 580px;
            //bottom: -35px;*/
			padding-bottom: 5px;
			height: 20%;
        }
        button.addi
        {
            /*//position: fixed;
            //float: left;
            //bottom: 380px;
            //left: 1000px;*/
        }
        input.sb
        {
            /*//position: fixed;
            //float: left;*/
            left: 600px;
            bottom: 150px;
			width: 8%;
			height: 8%;
			font-size: 30px;
			font-family: cursive;
        }
        input.prm
        {
            /*//position: fixed;*/
            float: left;
            left: 630px;
            bottom: 410px;
        }
        input.prm1
        {
            /*//position: fixed;*/
            float: left;
            left: 630px;
            bottom: 230px;
        }
		body
		{
			/*//background-image: url("cdesk.jpg");*/
			background-color: peachpuff;
		}
		div.sub_added :hover
		{
			background-color: yellow;
		}
		div.first_block
		{
			font-size: large;
			background: rgba(224,224,224,0.3);
		}
		.date,.room,.ex_type
		{
			font-weight: 1000;
		}
		
		</style>
    <script>
        var val="";// Main variable   
        var c=0; // Flag bit for checking no. of clicks of add button
        var c1=0;// Flag bit for first time checking or not for year 1/2/3 of Science
        var sc="";// Science value taking year 1/2/3
        var c21=0;// Flag bit for first time checking or not for H of Science
        var c22=0;// Flag bit for first time checking or not for G of Science
        var stt123="";// Science value taking H/G
        var d=0;
        var d1=0;// Flag bit for first time checking or not for year 1/2/3 of Arts
        var d21=0;// Flag bit for first time checking or not for H of Arts
        var d22=0;// Flag bit for first time checking or not for G of Arts
        var ab="";// Arts value taking year 1/2/3
        var ab1="";// Arts value taking H/G
        var e=0;// Flag bit for first time checking or not for A/F/L of Science
        var e1=0;// Flag bit for first time checking or not for A/F/L of Arts
        var ed="";// Science value taking A/F/L
        var ed1="";// Arts value taking A/F/L
		var num_sc = 0;
		var num_arts = 0;
		var flag_sub = 0;
		var flag_sub_type = 0;
		var flag_ug = 0;
		var flag_pg = 0;
		//var afl_check = 0;
        
        function nbr1() // Function for all-sc
        {	
            if (document.getElementById("all").checked)
                {
					//afl_check = 1;
					document.getElementById("all").disabled = true;
					document.getElementById("fst").disabled = false;
					document.getElementById("lst").disabled = false;
                    document.getElementById("fst").checked=false;
                    document.getElementById("lst").checked=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    document.getElementById("prnm1").disabled=true;
                    document.getElementById("prnm1").value="";
                    if (e==0)
                        {
                            e=1;
                            ed=document.getElementById("all").value;
                            val=ed+val;
							//document.getElementById("demo").innerHTML=val;
							//document.getElementById("demoo").innerHTML=ed;
                        }
                    else if (e==1)
                        {
                            e=1;
							if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7);
									ed=document.getElementById("all").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6);
									ed=document.getElementById("all").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
                        }
                }
            else
                {
					//afl_check = 0;
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=false;
					e = 0;
					if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,7);
							//document.getElementById("demoo").innerHTML = ec;					
							val=ec;
							//document.getElementById("demo").innerHTML = val;
						}
					else if(document.getElementById("pg").checked == false)
						{
							var ec=val.substr(1,6);
							//document.getElementById("demoo").innerHTML = ec;					
							val=ec;
							//document.getElementById("demo").innerHTML = val;
						}
                }
            
        }
        function nbr2() // Function for first-sc
        {
            if (document.getElementById("fst").checked)
                {
					document.getElementById("all").disabled = false;
					document.getElementById("fst").disabled = true;
					document.getElementById("lst").disabled = false;
                    document.getElementById("all").checked=false;
                    document.getElementById("lst").checked=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    document.getElementById("prnm1").disabled=false;
                    if (e==0)
                        {
                            e=1;
                            ed=document.getElementById("fst").value;
                            val=ed+val;
							//document.getElementById("demo").innerHTML = val;
                        }
                    else if (e==1)
                        {
                            e=1;
                            if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7);
									ed=document.getElementById("fst").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6);
									ed=document.getElementById("fst").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
                        }
                }
            else
                {
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=false;
                    var ec=val.substr(1,7);
                    document.getElementById("prnm1").disabled=true;
                    val=ec;
					//document.getElementById("demo").innerHTML = val;
					//document.getElementById("demoo").innerHTML = ec;
                }
            

        }
        function nbr3() // Function for last-sc
        {
            if (document.getElementById("lst").checked)
                {
					document.getElementById("all").disabled = false;
					document.getElementById("fst").disabled = false;
					document.getElementById("lst").disabled = true;
                    document.getElementById("fst").checked=false;
                    document.getElementById("all").checked=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    document.getElementById("prnm1").disabled=false;
                    
                    if (e==0)
                        {
                            e=1;
                            ed=document.getElementById("lst").value;
							//document.getElementById("demoo").innerHTML = val;
                            val=ed+val;
							//document.getElementById("demo").innerHTML = val;
                        }
                    else if (e==1)
                        {
                            e=1;
                            if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7);
									ed=document.getElementById("lst").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6);
									ed=document.getElementById("lst").value;
									val=ed+ec;
									//document.getElementById("demoo").innerHTML = ec;
									//document.getElementById("demo").innerHTML = val;
								}
                        }
                }
            else
                {
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=false;
                    var ec=val.substring(1,7);
                    document.getElementById("prnm1").disabled=true;
                    val=ec;
					//document.getElementById("demo").innerHTML = val;
					//document.getElementById("demoo").innerHTML = ec;
                }
            

        }
        function nbr11() // Function for all-arts
        {
            if (document.getElementById("alll").checked)
                {
                    document.getElementById("fstt").checked=false;
                    document.getElementById("lstt").checked=false;
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = true;
							document.getElementById("ndd").disabled = true;
							document.getElementById("rdd").disabled = true;							
						}*/
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    document.getElementById("prnm").disabled=true;
                    document.getElementById("prnm").value="";
                    if (e1==0) // For first time checking
                        {
                            e1=1;
                            ed1=document.getElementById("alll").value; // ed1 = A
                            val=ed1+val; // val = A + Degree code + Year code + Subject code
							//document.getElementById("demo").innerHTML = val; 
							//document.getElementById("demoo").innerHTML = ed1; 
                        }
                    else if (e1==1) // For next checkings
                        {
                            //e1=1;
							if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("alll").value; // ed1 = A
									val=ed1+ec; // val = A + Degree code + Year code + Subject code
									//document.getElementById("demo").innerHTML = val;
									//document.getElementById("demoo").innerHTML = ec;		
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("alll").value; // ed1 = A
									val=ed1+ec; // val = A + Degree code + Year code + Subject code
									//document.getElementById("demo").innerHTML = val;
									//document.getElementById("demoo").innerHTML = ec;		
								}
                        }
                }
            else // For unchecked
                {
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = false;
							document.getElementById("ndd").disabled = false;
							document.getElementById("rdd").disabled = false;							
						}*/
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=false;
					if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code		
						}
					else if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code		
						}
					//document.getElementById("demo").innerHTML = val;
                } 
            

        }
        function nbr21() // Function for first-arts
        { 
            if (document.getElementById("fstt").checked)
                {
                    document.getElementById("alll").checked=false;
                    document.getElementById("lstt").checked=false;
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = true;
							document.getElementById("ndd").disabled = true;
							document.getElementById("rdd").disabled = true;							
						}*/
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    document.getElementById("prnm").disabled=false;
                    if (e1==0) // For first time checking
                        {
                            e1=1;
                            ed1=document.getElementById("fstt").value; // ed1 = F
                            val=ed1+val; // val = F + Degree code + Year code + Subject code
							//document.getElementById("demo").innerHTML = val;
							//document.getElementById("demoo").innerHTML = ed1;
                        }
                    else if (e1==1) // For next checking
                        {
                            //e1=1;
							if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("fstt").value; // ed1 = F
									val=ed1+ec; // val = F + Degree code + Year code + Subject code		
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("fstt").value; // ed1 = F
									val=ed1+ec; // val = F + Degree code + Year code + Subject code		
								}
                            
							//document.getElementById("demo").innerHTML = val;
							//document.getElementById("demoo").innerHTML = ec;
                        }
                }
            else  // For unchecked
                {
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=false;
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = false;
							document.getElementById("ndd").disabled = false;
							document.getElementById("rdd").disabled = false;							
						}*/
                    document.getElementById("prnm").disabled=true;
                   if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code		
						}
					else if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code		
						}
					//document.getElementById("demo").innerHTML = val;
                }
            

        }
        function nbr31() // Function for last-arts
        {
            if (document.getElementById("lstt").checked)
                {
                    document.getElementById("alll").checked=false;
                    document.getElementById("fstt").checked=false;
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = true;
							document.getElementById("ndd").disabled = true;
							document.getElementById("rdd").disabled = true;							
						}*/
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    document.getElementById("prnm").disabled=false;
                    if (e1==0) // For first time checking
                        {
                            e1=1;
                            ed1=document.getElementById("lstt").value; // ed1 = L
                            val=ed1+val; // val = L + Degree code + Year code + Subject code
							//document.getElementById("demo").innerHTML = val;
							//document.getElementById("demoo").innerHTML = ed1;
                        }
                    else if (e1==1) // For next checkings
                        {
                            //e1=1;
							if(document.getElementById("ug").checked == true)
								{
									var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("lstt").value; // ed1 = L
									val=ed1+ec; // val = L + Degree code + Year code + Subject code
								}
							else if(document.getElementById("pg").checked == true)
								{
									var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
									ed1=document.getElementById("lstt").value; // ed1 = L
									val=ed1+ec; // val = L + Degree code + Year code + Subject code		
								}                          
							//document.getElementById("demo").innerHTML = val;
							//document.getElementById("demoo").innerHTML = ec;
                        }
                }
            else // For unchecked
                {
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=false;
					/*if(document.getElementById("cmp").checked == true)
						{
							document.getElementById("stt").disabled = false;
							document.getElementById("ndd").disabled = false;
							document.getElementById("rdd").disabled = false;							
						}*/
					if(document.getElementById("ug").checked == true)
						{
							var ec=val.substr(1,7); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code
						}
					else if(document.getElementById("pg").checked == true)
						{
							var ec=val.substr(1,6); // ec = Degree code + Year code + Subject code
							val=ec; // val = Degree code + Year code + Subject code
						}
                    document.getElementById("prnm").disabled=true;
					//document.getElementById("demo").innerHTML = val;
                }
            

        }
        function sc0()  // Mathematics
        {
			if( flag_sub == 0 )
				{
					if(document.getElementById("pg").checked == true)
						{
							var sub = "MTM";
						}
					else if(document.getElementById("ug").checked == true)
						{
							var sub=document.f.subject[0].value; // sub = MTMA
						}
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					if(document.getElementById("pg").checked == true)
						{
							val = val[3];
							var sub = "MTM";							
						}
					else if(document.getElementById("ug").checked == true)
						{							
							val = val[4];					
							var sub=document.f.subject[0].value; // sub = INCA					
						}
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc1() // Physics
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[1].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[1].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc2() // Chemistry
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[2].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[2].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc3() // Computer Science
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[3].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[3].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc4() // Microbiology
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[4].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[4].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc5() // Industrial Chemistry & Applied Chemistry
        {
            if( flag_sub == 0 )
				{
					if(document.getElementById("pg").checked == true)
						{
							var sub = "APC";
						}
					else if(document.getElementById("ug").checked == true)
						{
							var sub=document.f.subject[5].value; // sub = INCA
						}
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					if(document.getElementById("pg").checked == true)
						{
							val = val[3];
							var sub = "APC";							
						}
					else if(document.getElementById("ug").checked == true)
						{							
							val = val[4];					
							var sub=document.f.subject[5].value; // sub = INCA					
						}
					val = val[4];					
					var sub=document.f.subject[5].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc6() // Zoology
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[6].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[6].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc7() // Economics
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[7].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[7].value; // sub = MTMA
					val = sub + val;
					document.getElementById("st").disabled=false;
					document.getElementById("nd").disabled=false;
					document.getElementById("rd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc8() // History
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[8].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[8].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc9() // Philosophy
        {
            if( flag_sub == 0 )
				{
					if(document.getElementById("pg").checked == true)
						{
							var sub = "PHI";
						}
					else if(document.getElementById("ug").checked == true)
						{
							var sub=document.f.subject[9].value; // sub = PHIA
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					if(document.getElementById("pg").checked == true)
						{
							val = val[3];
							var sub = "PHI";							
						}
					else if(document.getElementById("ug").checked == true)
						{							
							val = val[4];					
							var sub=document.f.subject[9].value; // sub = PHIA					
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc10() // Sanskrit
        {
            if( flag_sub == 0 )
				{
					if(document.getElementById("pg").checked == true)
						{
							var sub = "SAN";
						}
					else if(document.getElementById("ug").checked == true)
						{
							var sub=document.f.subject[10].value; // sub = SANA
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					//document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					if(document.getElementById("pg").checked == true)
						{
							val = val[3];
							var sub = "SAN";							
						}
					else if(document.getElementById("ug").checked == true)
						{							
							val = val[4];					
							var sub=document.f.subject[10].value; // sub = SANA					
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc11() // Bengali
        {
            if( flag_sub == 0 )
				{
					if(document.getElementById("pg").checked == true)
						{
							var sub = "BNG";
						}
					else if(document.getElementById("ug").checked == true)
						{
							var sub=document.f.subject[11].value; // sub = BNGA
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					if(document.getElementById("pg").checked == true)
						{
							val = val[3];
							var sub = "BNG";							
						}
					else if(document.getElementById("ug").checked == true)
						{							
							val = val[4];					
							var sub=document.f.subject[11].value; // sub = BNG					
						}
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc12() // Political Science
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[12].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[12].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					
				}
        }
        function sc13() // English
        {
            if( flag_sub == 0 )
				{
					var sub=document.f.subject[13].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					flag_sub = flag_sub + 1;
				}
			else
				{
					val = val[4];					
					var sub=document.f.subject[13].value; // sub = MTMA
					val = sub + val;
					document.getElementById("stt").disabled=false;
					document.getElementById("ndd").disabled=false;
					document.getElementById("rdd").disabled=false;
					document.getElementById("demo").innerHTML=val;
					
				}
        }
		/*function sc14() // Spsh
		{
			var sub=document.f.subject[14].value;
			val = sub + val;
            document.getElementById("stt").disabled=false;
            document.getElementById("ndd").disabled=false;
            document.getElementById("rdd").disabled=false;
		}
		function sc15() // Cmp English
		{
			var sub=document.f.subject[15].value;
			val = sub + val;
            document.getElementById("stt").disabled=false;
            document.getElementById("ndd").disabled=false;
            document.getElementById("rdd").disabled=false;
		}
		function sc16() // Alternative English
		{
			var sub=document.f.subject[16].value;
			val = sub + val;
            document.getElementById("stt").disabled=false;
            document.getElementById("ndd").disabled=false;
            document.getElementById("rdd").disabled=false;
		}
		function sc17() // Cmp Bengali
		{
			var sub=document.f.subject[17].value;
			val = sub + val;
            document.getElementById("stt").disabled=false;
            document.getElementById("ndd").disabled=false;
            document.getElementById("rdd").disabled=false;
		}
		function sc18() // Envs 
		{
			var sub=document.f.subject[18].value;
			val = sub + val;
			//document.getElementById("demoo").innerHTML = val;
            document.getElementById("stt").disabled=false;
            document.getElementById("ndd").disabled=false;
            document.getElementById("rdd").disabled=false;
		}*/
        function tp1() // sc-Hns
        {
            if (document.getElementById("hn").checked)
                {
					c21 = 1;
                    document.getElementById("gn").checked=false;
                    document.getElementById("st").disabled=true;
                    document.getElementById("nd").disabled=true;
                    document.getElementById("rd").disabled=true;
                    document.getElementById("all").disabled=false;
                    document.getElementById("fst").disabled=false;
                    document.getElementById("lst").disabled=false;
                    if (c22==1)
                    {
                        c22=0;
                        stt123=document.getElementById("hn").value;
						var rst = val.substr(1,4);
						var up = val.substr(6,1);
                        val=stt123 + rst + "A" + up;
						document.getElementById("demo").innerHTML = val;
						document.getElementById("demoo").innerHTML = rst;
                    }
                	else if (c21==1)
                    {
						if(document.getElementById("ug").checked == true)
							{
								//var sc2=val.substring(1,7);
								stt123=document.getElementById("hn").value;
								var rst = val.substr(0,4);
								var up = val.substr(5,1);
								val=stt123 + rst + "A" + up;
								//c2=1;
								document.getElementById("demo").innerHTML = val;
							}
						else if(document.getElementById("pg").checked == true)
							{
								stt123=document.getElementById("hn").value;
								val = stt123 + val;
								document.getElementById("demo").innerHTML = val;
							}
                    }
                }
            else
                {
                    document.getElementById("st").disabled=false;
                    document.getElementById("nd").disabled=false;
                    document.getElementById("rd").disabled=false;
                    document.getElementById("all").disabled=true;
                    document.getElementById("fst").disabled=true;
                    document.getElementById("lst").disabled=true;
					if(document.getElementById("ug").checked == true)
						{
							var sc2=val.substring(1,7);
							val=sc2;
							document.getElementById("demo").innerHTML = val;
						}
					else if(document.getElementById("pg").checked == true)
						{
							var sc2=val.substring(1,6);
							val=sc2;
							document.getElementById("demo").innerHTML = val;
						}
                    c21=0;
                }
        }
        function tp2() // sc-Gnrl
        {
            if (document.getElementById("gn").checked)
                {
					c22 = 1;
                    document.getElementById("hn").checked=false;
                    document.getElementById("st").disabled=true;
                    document.getElementById("nd").disabled=true;
                    document.getElementById("rd").disabled=true;
                    document.getElementById("all").disabled=false;
                    document.getElementById("fst").disabled=false;
                    document.getElementById("lst").disabled=false;
                    if (c21==1)
                    {
                        c21=0;
                        stt123=document.getElementById("gn").value;
                        //var val1=val.substring(0,4);
						var rst = val.substr(1,4);
						var up = val.substr(6,1);
						val=stt123 + rst + stt123 + up;
						document.getElementById("demo").innerHTML=val;
						document.getElementById("demoo").innerHTML=rst;
                        //val=val1+"G";
                    }
                else if (c22==1)
                    {
                        //var sc2=val.substring(1,7);
                        stt123=document.getElementById("gn").value;
						var rst = val.substr(0,4);
						var up = val.substr(5,1);
                        val=stt123 + rst + stt123 + up;
                        //c2=1;
						document.getElementById("demo").innerHTML=val;
						document.getElementById("demoo").innerHTML=rst;
                    }
                }
            else
                {
					c22=0;
                    document.getElementById("st").disabled=false;
                    document.getElementById("nd").disabled=false;
                    document.getElementById("rd").disabled=false;
                    document.getElementById("all").disabled=true;
                    document.getElementById("fst").disabled=true;
                    document.getElementById("lst").disabled=true;
                    var rst = val.substr(1,4);
					var up = val.substr(6,1);
					val = rst + "A" + up;
					document.getElementById("demo").innerHTML=val;
					document.getElementById("demoo").innerHTML=rst;                    
                }
        }
        function tp11() // Arts-Hns
        {
            if (document.getElementById("hn1").checked) // For Checked hns for arts
                {
					d21 = 1;
                    document.getElementById("gn1").checked=false;
                    document.getElementById("stt").disabled=true;
                    document.getElementById("ndd").disabled=true;
                    document.getElementById("rdd").disabled=true;
                    document.getElementById("alll").disabled=false;
                    document.getElementById("fstt").disabled=false;
                    document.getElementById("lstt").disabled=false;
                    if (d22==1) // For gnrl for arts clicked
                        {
                            d22=0;
                            ab1=document.getElementById("hn1").value; // ab1 = H
							//val[4] = "A";	
							//val = val.substring(1,7);
							var rst = val.substr(1,4);
							var up = val.substr(6,1);
                            val=ab1 + rst + "A" + up; // val = H + Year code + Subject code
							document.getElementById("demo").innerHTML = val;
							document.getElementById("demoo").innerHTML = rst;
                        }
                    else if (d21==1) // For hns for arts clicked
                        {
							if(document.getElementById("ug").checked == true)
								{
									//var dc1=val.substring(1,7); // dc1 = Year code + Subject code
									ab1=document.getElementById("hn1").value; // ab1 = H
									var rst = val.substr(0,4);
									var up = val.substr(5,1);
									val=ab1+ rst + "A" + up; // val = H + Year code + Subject code
									document.getElementById("demo").innerHTML = val;
									document.getElementById("demoo").innerHTML = rst;
								}
							else if(document.getElementById("pg").checked == true)
								{
									ab1 = document.getElementById("hn1").value;
									val = ab1 + val;
									document.getElementById("demo").innerHTML = val;
								}
                        }
                    }
            else // For Unchecked hns for arts
                {
					d21=0;
                    document.getElementById("stt").disabled=false;
                    document.getElementById("ndd").disabled=false;
                    document.getElementById("rdd").disabled=false;
                    document.getElementById("alll").disabled=true;
                    document.getElementById("fstt").disabled=true;
                    document.getElementById("lstt").disabled=true;
					if(document.getElementById("ug").checked == true)
						{
							var dc1=val.substring(1,7); // dc1 = Year code + Subject code
                    		val=dc1
						}
                    else if(document.getElementById("pg").checked == true)
						{
							var dc1=val.substring(1,6); // dc1 = Year code + Subject code
                    		val=dc1
						}
					document.getElementById("demo").innerHTML = val;
                    d2=1;
                }
        }
        function tp21() // Arts-Gnrl
        {
            if (document.getElementById("gn1").checked)
                {
					d22 = 1;
                    document.getElementById("hn1").checked=false;
                    document.getElementById("stt").disabled=true;
                    document.getElementById("ndd").disabled=true;
                    document.getElementById("rdd").disabled=true;
                    document.getElementById("alll").disabled=false;
                    document.getElementById("fstt").disabled=false;
                    document.getElementById("lstt").disabled=false;
                    if (d21 == 1)
                        {
                            d21=0;
                            ab1=document.getElementById("gn1").value; // ab1 = G
                            /*var val1=val.substring(0,4); // val1 = Year code + Subject code without last letter 
                            val=val1+"G";*/ // val = Year code + Subject code without last letter + G
							//val[4] = "G";
							var rst = val.substr(1,4);
							var up = val.substr(6,1);
							//val = val.substring(1,7);
                            val = ab1 + rst + ab1 + up; // val = G + Year code + Subject code without last letter + G
							document.getElementById("demo").innerHTML = val;
							document.getElementById("demoo").innerHTML = rst;
						}
                    else if (d22 == 1)
                        {
                            //var dc1=val.substring(1,7); // dc1 = Year code + Subject code without last letter + G
                            ab1=document.getElementById("gn1").value; // ab1 = G
							var rst = val.substr(0,4);
							var up = val.substr(5,1);
                            val=ab1+ rst + ab1 + up; // val = G + Year code + Subject code without last letter + G
							document.getElementById("demo").innerHTML = val;
							document.getElementById("demoo").innerHTML = rst;
                        }
                    }
            else
                {
					d22=0;
                    document.getElementById("stt").disabled=false;
                    document.getElementById("ndd").disabled=false;
                    document.getElementById("rdd").disabled=false;
                    document.getElementById("alll").disabled=true;
                    document.getElementById("fstt").disabled=true;
                    document.getElementById("lstt").disabled=true;
                    /*var dc1=val.substring(1,7); // dc1 = Year code + Subject code without last letter + G
                    val=dc1*/ // val = Year code + Subject code without last letter + G
					//val[4] = "A";
					var rst = val.substr(1,4);
					var up = val.substr(6,1);
					val = rst + "A" + up;
                    //d2=0;
					document.getElementById("demo").innerHTML = val;
					document.getElementById("demoo").innerHTML = rst;
                }
        }
        function yr1() // sc-1st yr
        {
            if (document.getElementById("st").checked)
                {
                    document.getElementById("nd").checked=false;
                    document.getElementById("rd").checked=false;
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=false;
                    document.f.subject[0].disabled=true;
                    document.f.subject[1].disabled=true;
                    document.f.subject[2].disabled=true;
                    document.f.subject[3].disabled=true;
                    document.f.subject[4].disabled=true;
                    document.f.subject[5].disabled=true;
                    document.f.subject[6].disabled=true;
                    document.f.subject[7].disabled=true;
                    if (c1==0) // For first click of 1st year
                        {
                            c1=1;
                            sc=document.getElementById("st").value; // sc = 1
                            val=sc+val; // val = "1" + subject code
                            document.getElementById("demoo").innerHTML=sc;
                            document.getElementById("demo").innerHTML= val;
                        }
                    else if (c1==1) // For second and other click of 1st year
                        {
							if(document.getElementById("ug").checked == true)
								{
									var sc1=val.substring(1,6); // sc1 = 1th element to 4th element of val(subject code)
								}
							else if(document.getElementById("pg").checked == true)
								{
									var sc1=val.substring(1,5); // sc1 = 1th element to 4th element of val(subject code)
								}                            
                            sc=document.getElementById("st").value; // sc = 1
                            val=sc+sc1; // val = "1" + subject code
                            document.getElementById("demoo").innerHTML= sc1;
							document.getElementById("demo").innerHTML= val;
                            c1=1;
                        }
                }
            else // For unchecked 
                {
                    document.f.subject[0].disabled=false;
                    document.f.subject[1].disabled=false;
                    document.f.subject[2].disabled=false;
                    document.f.subject[3].disabled=false;
                    document.f.subject[4].disabled=false;
                    document.f.subject[5].disabled=false;
                    document.f.subject[6].disabled=false;
                    document.f.subject[7].disabled=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    if(document.getElementById("ug").checked == true)
						{
							var sc1=val.substring(1,6); // sc1 = 1th element to 4th element of val(subject code)
						}
					else if(document.getElementById("pg").checked == true)
						{
							var sc1=val.substring(1,5); // sc1 = 1th element to 4th element of val(subject code)
						}
                    val=sc1; // val = subject code
                    c1=0;
					document.getElementById("demo").innerHTML=val;
                }
        }
        function yr2() // sc-2nd yr
        {
            if (document.getElementById("nd").checked)
                {
                    document.getElementById("st").checked=false;
                    document.getElementById("rd").checked=false;
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=false;
                    document.f.subject[0].disabled=true;
                    document.f.subject[1].disabled=true;
                    document.f.subject[2].disabled=true;
                    document.f.subject[3].disabled=true;
                    document.f.subject[4].disabled=true;
                    document.f.subject[5].disabled=true;
                    document.f.subject[6].disabled=true;
                    document.f.subject[7].disabled=true;
                    if (c1==0)
                        {
                            c1=1;
                            sc=document.getElementById("nd").value;
                            val=sc+val;
							document.getElementById("demoo").innerHTML=sc;
                            document.getElementById("demo").innerHTML= val;
                        }
                    else if (c1==1)
                        {
                            if(document.getElementById("ug").checked == true)
								{
									var sc1=val.substring(1,6); // sc1 = 1th element to 4th element of val(subject code)
								}
							else if(document.getElementById("pg").checked == true)
								{
									var sc1=val.substring(1,5); // sc1 = 1th element to 4th element of val(subject code)
								}
                            sc=document.getElementById("nd").value;
                            val=sc+sc1;
                            c1=1;
							document.getElementById("demoo").innerHTML= sc1;
							document.getElementById("demo").innerHTML= val;
                        }
                }
            else
                {
                    document.f.subject[0].disabled=false;
                    document.f.subject[1].disabled=false;
                    document.f.subject[2].disabled=false;
                    document.f.subject[3].disabled=false;
                    document.f.subject[4].disabled=false;
                    document.f.subject[5].disabled=false;
                    document.f.subject[6].disabled=false;
                    document.f.subject[7].disabled=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    if(document.getElementById("ug").checked == true)
						{
							var sc1=val.substring(1,6); // sc1 = 1th element to 4th element of val(subject code)
						}
					else if(document.getElementById("pg").checked == true)
						{
							var sc1=val.substring(1,5); // sc1 = 1th element to 4th element of val(subject code)
						}
                    val=sc1;
                    c1=0;
					document.getElementById("demo").innerHTML=val;
                }
        }
        function yr3() // sc-3rd yr
        {
            if (document.getElementById("rd").checked)
                {
                    document.getElementById("st").checked=false;
                    document.getElementById("nd").checked=false;
                    document.getElementById("hn").disabled=false;
                    document.getElementById("gn").disabled=true;
                    document.f.subject[0].disabled=true;
                    document.f.subject[1].disabled=true;
                    document.f.subject[2].disabled=true;
                    document.f.subject[3].disabled=true;
                    document.f.subject[4].disabled=true;
                    document.f.subject[5].disabled=true;
                    document.f.subject[6].disabled=true;
                    document.f.subject[7].disabled=true;
                    if (c1==0)
                        {
                            c1=1;
                            sc=document.getElementById("rd").value;
                            val=sc+val;
							document.getElementById("demoo").innerHTML=sc;
                            document.getElementById("demo").innerHTML= val;
                        }
                    else if (c1==1)
                        {
                            var sc1=val.substring(1,6);
                            sc=document.getElementById("rd").value;
                            val=sc+sc1;
                            c1=1;
							document.getElementById("demoo").innerHTML= sc1;
							document.getElementById("demo").innerHTML= val;
                        }
                }
            else
                {
                    document.f.subject[0].disabled=false;
                    document.f.subject[1].disabled=false;
                    document.f.subject[2].disabled=false;
                    document.f.subject[3].disabled=false;
                    document.f.subject[4].disabled=false;
                    document.f.subject[5].disabled=false;
                    document.f.subject[6].disabled=false;
                    document.f.subject[7].disabled=false;
                    document.getElementById("hn").disabled=true;
                    document.getElementById("gn").disabled=true;
                    var sc1=val.substring(1,6);
                    val=sc1;
                    c1=0;
					document.getElementById("demo").innerHTML=val;
                }
        }
        function yr11() // arts-1st yr
        {
            if (document.getElementById("stt").checked)
                {
                    document.getElementById("ndd").checked=false;
                    document.getElementById("rdd").checked=false;
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=false;
                    document.f.subject[8].disabled=true;
                    document.f.subject[9].disabled=true;
                    document.f.subject[10].disabled=true;
                    document.f.subject[11].disabled=true;
                    document.f.subject[12].disabled=true;
                    document.f.subject[13].disabled=true;
                    /*document.f.subject[14].disabled=true;
                    document.f.subject[15].disabled=true;
                    document.f.subject[16].disabled=true;
                    document.f.subject[17].disabled=true;
                    document.f.subject[18].disabled=true;
					if(document.getElementById("cmp").checked)
					{
						document.getElementById("alll").disabled=false;
						document.getElementById("fstt").disabled=false;
						document.getElementById("lstt").disabled=false;
					}
					else
					{
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;
					}*/

                    if (d1==0)
                        {
                            d1=1;
                            ab=document.getElementById("stt").value; // ab = 1
                            val=ab+val; // val = 1 + subject code
							document.getElementById("demoo").innerHTML= ab;
							document.getElementById("demo").innerHTML= val;
                        }
                    else if (d1==1)
                        {
                            if(document.getElementById("ug").checked == true)
								{
									var dc=val.substring(1,6); // dc = 1th element to 4th element of val(subject code)
								}
							else if(document.getElementById("pg").checked == true)
								{
									var dc=val.substring(1,5); // dc = 1th element to 4th element of val(subject code)
								} 
                            ab=document.getElementById("stt").value;
                            val=ab+dc;						
							document.getElementById("demoo").innerHTML = dc;
							document.getElementById("demo").innerHTML = val;
							//d1 = 2;
							//document.getElementById("demoo").value.innerHTML=val;
                        }
					/*else if (d1==2)
						{
							document.getElementById("demoo").innerHTML = "third time";
						}*/
                }
            else
                {
                    document.f.subject[8].disabled=false;
                    document.f.subject[9].disabled=false;
                    document.f.subject[10].disabled=false;
                    document.f.subject[11].disabled=false;
                    document.f.subject[12].disabled=false;
                    document.f.subject[13].disabled=false;
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    if(document.getElementById("ug").checked == true)
						{
							var dc=val.substring(1,6); // dc = 1th element to 4th element of val(subject code)
						}
					else if(document.getElementById("pg").checked == true)
						{
							var dc=val.substring(1,5); // dc = 1th element to 4th element of val(subject code)
						} 
                    val=dc;
                    d1=0;
					document.getElementById("demo").value.innerHTML = val;
					document.getElementById("demoo").value.innerHTML = dc;
                }
        }
        function yr21() // arts-2nd yr
        {
            if (document.getElementById("ndd").checked)
                {
                    document.getElementById("stt").checked=false;
                    document.getElementById("rdd").checked=false;
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=false;
                    document.f.subject[8].disabled=true;
                    document.f.subject[9].disabled=true;
                    document.f.subject[10].disabled=true;
                    document.f.subject[11].disabled=true;
                    document.f.subject[12].disabled=true;
                    document.f.subject[13].disabled=true;
					/*if(document.getElementById("cmp").checked)
					{
						document.getElementById("alll").disabled=false;
						document.getElementById("fstt").disabled=false;
						document.getElementById("lstt").disabled=false;
					}
					else
					{
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;
					}*/

                    if (d1==0)
                        {
                            d1=1;
                            ab=document.getElementById("ndd").value;
                            val=ab+val;
							document.getElementById("demoo").innerHTML= ab;
							document.getElementById("demo").innerHTML= val;
                        }
                    else if (d1==1)
                        {
                            if(document.getElementById("ug").checked == true)
								{
									var dc=val.substring(1,6); // dc = 1th element to 4th element of val(subject code)
								}
							else if(document.getElementById("pg").checked == true)
								{
									var dc=val.substring(1,5); // dc = 1th element to 4th element of val(subject code)
								} 
                            ab=document.getElementById("ndd").value;
                            val=ab+dc;
							document.getElementById("demoo").innerHTML = dc;
							document.getElementById("demo").innerHTML = val;
                        }
                }
            else
                {
                    document.f.subject[8].disabled=false;
                    document.f.subject[9].disabled=false;
                    document.f.subject[10].disabled=false;
                    document.f.subject[11].disabled=false;
                    document.f.subject[12].disabled=false;
                    document.f.subject[13].disabled=false;
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    if(document.getElementById("ug").checked == true)
						{
							var dc=val.substring(1,6); // dc = 1th element to 4th element of val(subject code)
						}
					else if(document.getElementById("pg").checked == true)
						{
							var dc=val.substring(1,5); // dc = 1th element to 4th element of val(subject code)
						} 
                    val=dc;
                    d1=0;
					document.getElementById("demo").innerHTML = val;
                }
        }
        function yr31() // arts-3rd yr
        {
            if (document.getElementById("rdd").checked)
                {
                    document.getElementById("ndd").checked=false;
                    document.getElementById("stt").checked=false;
                    document.getElementById("hn1").disabled=false;
                    document.getElementById("gn1").disabled=true;
                    document.f.subject[8].disabled=true;
                    document.f.subject[9].disabled=true;
                    document.f.subject[10].disabled=true;
                    document.f.subject[11].disabled=true;
                    document.f.subject[12].disabled=true;
                    document.f.subject[13].disabled=true;
					
				/*if(document.getElementById("cmp").checked)
					{
						document.getElementById("alll").disabled=false;
						document.getElementById("fstt").disabled=false;
						document.getElementById("lstt").disabled=false;
					}
					else
					{
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;
					}*/

                    if (d1==0)
                        {
                            d1=1;
                            ab=document.getElementById("rdd").value;
                            val=ab+val;
							document.getElementById("demoo").innerHTML= ab;
							document.getElementById("demo").innerHTML= val;
                        }
                    else if (d1==1)
                        {
                            var dc=val.substring(1,6);
                            ab=document.getElementById("rdd").value;
                            val=ab+dc;
							document.getElementById("demoo").innerHTML = dc;
							document.getElementById("demo").innerHTML = val;
                        }
                }
            else
                {
                    document.f.subject[8].disabled=false;
                    document.f.subject[9].disabled=false;
                    document.f.subject[10].disabled=false;
                    document.f.subject[11].disabled=false;
                    document.f.subject[12].disabled=false;
                    document.f.subject[13].disabled=false;
                    document.getElementById("hn1").disabled=true;
                    document.getElementById("gn1").disabled=true;
                    var dc=val.substring(1,6);
                    val=dc;
                    d1=0;
					document.getElementById("demo").innerHTML = val;
                }
        }
        function exam_type1() // Science
        {
			val="";
			if(document.getElementById("ug").checked == true)
				{
					val = document.getElementById("ug").value;
				}
			else if(document.getElementById("pg").checked == true)
				{
					val = document.getElementById("pg").value;
				}
			flag_sub = 0;
			//c=0; // Flag bit for checking no. of clicks of add button
			c1=0;// Flag bit for first time checking or not for year 1/2/3 of Science
			sc="";// Science value taking year 1/2/3
			c2=0;// Flag bit for first time checking or not for H/G of Science
			stt123="";// Science value taking H/G
			d=0;
			d1=0;// Flag bit for first time checking or not for year 1/2/3 of Arts
			d2=0;// Flag bit for first time checking or not for H/G of Arts
			ab="";// Arts value taking year 1/2/3
			ab1="";// Arts value taking H/G
			e=0;// Flag bit for first time checking or not for A/F/L of Science
			e1=0;// Flag bit for first time checking or not for A/F/L of Arts
			ed="";// Science value taking A/F/L
			ed1="";// Arts value taking A/F/L
			num_sc = 0;
			num_arts = 0;				
			/*if( flag_ug == 1 )
				{
					val = document.getElementById("ug").value;
					//flag_sub_type = 0;
				}
			else if( flag_pg == 1 )
				{
					val = document.getElementById("pg").value;
					//flag_sub_type = 0;
				}*/				
			document.getElementById("ba").disabled=false;
			document.getElementById("bsc").disabled=true;
			//document.getElementById("cmp").disabled=false;
            document.getElementById("st").disabled=true;
            document.getElementById("nd").disabled=true;
            document.getElementById("rd").disabled=true;
            document.getElementById("hn").disabled=true;
            
            document.f.subject[8].disabled=true;
            document.f.subject[9].disabled=true;
            document.f.subject[10].disabled=true;
            document.f.subject[11].disabled=true;
            document.f.subject[12].disabled=true;
            document.f.subject[13].disabled=true;
            /*document.f.subject[14].disabled=true;
            document.f.subject[15].disabled=true;
            document.f.subject[16].disabled=true;
            document.f.subject[17].disabled=true;
            document.f.subject[18].disabled=true;*/
            document.f.subject[8].checked=false;
            document.f.subject[9].checked=false;
            document.f.subject[10].checked=false;
            document.f.subject[11].checked=false;
            document.f.subject[12].checked=false;
            document.f.subject[13].checked=false;
            /*document.f.subject[14].checked=false;
            document.f.subject[15].checked=false;
            document.f.subject[16].checked=false;
            document.f.subject[17].checked=false;
            document.f.subject[18].checked=false;*/
            document.getElementById("ba").checked=false;
            //document.getElementById("cmp").checked=false;
            document.getElementById("stt").checked=false;
            document.getElementById("ndd").checked=false;
            document.getElementById("rdd").checked=false;
            document.getElementById("hn1").checked=false;
            
            document.getElementById("stt").disabled=true;
            document.getElementById("ndd").disabled=true;
            document.getElementById("rdd").disabled=true;
            document.getElementById("hn1").disabled=true;
            
            document.f.subject[0].disabled=false;
            document.f.subject[1].disabled=false;
            document.f.subject[2].disabled=false;
            document.f.subject[3].disabled=false;
            document.f.subject[4].disabled=false;
            document.f.subject[5].disabled=false;
            document.f.subject[6].disabled=false;
            document.f.subject[7].disabled=false;
            document.getElementById("alll").checked=false;
            document.getElementById("fstt").checked=false;
            document.getElementById("lstt").checked=false;
            document.getElementById("alll").disabled=true;
            document.getElementById("fstt").disabled=true;
            document.getElementById("lstt").disabled=true;
            document.getElementById("prnm1").value=""; // no. of stdnts for arts value set null
            document.getElementById("prnm1").disabled=true;
			document.getElementById("hn").style.display='inline';		
			document.getElementById("hn1").style.display='inline';			
			document.getElementById("wh1").style.display='inline';
			document.getElementById("whh1").style.display='inline';
			
			
			if(document.getElementById("pg").checked == false)
				{
					document.getElementById("gn").checked=false;
					document.getElementById("gn1").checked=false;
					document.getElementById("gn").style.display='inline';
					document.getElementById("gn1").style.display='inline';
					document.getElementById("gn").disabled=true;
					document.getElementById("gn1").disabled=true;		
					document.getElementById("wh2").style.display='inline';
					document.getElementById("whh2").style.display='inline';
				}
			else
				{
					document.getElementById("gn").checked=false;
					document.getElementById("gn1").checked=false;
					document.getElementById("gn").style.display='none';
					document.getElementById("gn1").style.display='none';
					document.getElementById("gn").disabled=true;
					document.getElementById("gn1").disabled=true;		
					document.getElementById("wh2").style.display='none';
					document.getElementById("whh2").style.display='none';
				}
			document.getElementById("demo").innerHTML=val;
        }
        function exam_type2() // Arts
        {
			val="";
			if(document.getElementById("ug").checked == true)
				{
					val = document.getElementById("ug").value;
				}
			else if(document.getElementById("pg").checked == true)
				{
					val = document.getElementById("pg").value;
				}
			flag_sub = 0;
			//c=0; // Flag bit for checking no. of clicks of add button
			c1=0;// Flag bit for first time checking or not for year 1/2/3 of Science
			sc="";// Science value taking year 1/2/3
			c2=0;// Flag bit for first time checking or not for H/G of Science
			stt123="";// Science value taking H/G
			d=0;
			d1=0;// Flag bit for first time checking or not for year 1/2/3 of Arts
			d2=0;// Flag bit for first time checking or not for H/G of Arts
			ab="";// Arts value taking year 1/2/3
			ab1="";// Arts value taking H/G
			e=0;// Flag bit for first time checking or not for A/F/L of Science
			e1=0;// Flag bit for first time checking or not for A/F/L of Arts
			ed="";// Science value taking A/F/L
			ed1="";// Arts value taking A/F/L
			num_sc = 0;
			num_arts = 0;
			/*if ( flag_sub_type == 0 )
				{
					if( flag_ug == 1 )
						{
							val = document.getElementById("ug").value;
							flag_sub_type = 1;
						}
					else if( flag_pg == 1 )
						{
							val = document.getElementById("pg").value;
							flag_sub_type = 1;
						}
				}*/
			document.getElementById("ba").disabled=true;
			document.getElementById("bsc").disabled=false;
			//document.getElementById("cmp").disabled=false;
            document.getElementById("stt").disabled=true;
            document.getElementById("ndd").disabled=true;
            document.getElementById("rdd").disabled=true;
            document.getElementById("hn1").disabled=true;
            
            document.f.subject[0].disabled=true;
            document.f.subject[1].disabled=true;
            document.f.subject[2].disabled=true;
            document.f.subject[3].disabled=true;
            document.f.subject[4].disabled=true;
            document.f.subject[5].disabled=true;
            document.f.subject[6].disabled=true;
            document.f.subject[7].disabled=true;
            /*document.f.subject[14].disabled=true;
            document.f.subject[15].disabled=true;
            document.f.subject[16].disabled=true;
            document.f.subject[17].disabled=true;
            document.f.subject[18].disabled=true;*/
            document.f.subject[0].checked=false;
            document.f.subject[1].checked=false;
            document.f.subject[2].checked=false;
            document.f.subject[3].checked=false;
            document.f.subject[4].checked=false;
            document.f.subject[5].checked=false;
            document.f.subject[6].checked=false;
            document.f.subject[7].checked=false;
            /*document.f.subject[14].checked=false;
            document.f.subject[15].checked=false;
            document.f.subject[16].checked=false;
            document.f.subject[17].checked=false;
            document.f.subject[18].checked=false;*/
            document.getElementById("bsc").checked=false;
            //document.getElementById("cmp").checked=false;
            document.getElementById("st").checked=false;
            document.getElementById("nd").checked=false;
            document.getElementById("rd").checked=false;
            document.getElementById("hn").checked=false;
           
            document.getElementById("st").disabled=true;
            document.getElementById("nd").disabled=true;
            document.getElementById("rd").disabled=true;
            document.getElementById("hn").disabled=true;
            
            document.f.subject[8].disabled=false;
            document.f.subject[9].disabled=false;
            document.f.subject[10].disabled=false;
            document.f.subject[11].disabled=false;
            document.f.subject[12].disabled=false;
            document.f.subject[13].disabled=false;
            document.getElementById("all").checked=false;
            document.getElementById("fst").checked=false;
            document.getElementById("lst").checked=false;
            document.getElementById("all").disabled=true;
            document.getElementById("fst").disabled=true;
            document.getElementById("lst").disabled=true;
            document.getElementById("prnm").value="";
            document.getElementById("prnm").disabled=true;
			document.getElementById("hn").style.display='inline';
			
			document.getElementById("hn1").style.display='inline';
			
			document.getElementById("wh1").style.display='inline';
			
			document.getElementById("whh1").style.display='inline';
			
			if(document.getElementById("pg").checked == false)
				{
					document.getElementById("gn").checked=false;
					document.getElementById("gn1").checked=false;
					document.getElementById("gn").style.display='inline';
					document.getElementById("gn1").style.display='inline';
					document.getElementById("gn").disabled=true;
					document.getElementById("gn1").disabled=true;		
					document.getElementById("wh2").style.display='inline';
					document.getElementById("whh2").style.display='inline';
				}
			else
				{
					document.getElementById("gn").checked=false;
					document.getElementById("gn1").checked=false;
					document.getElementById("gn").style.display='none';
					document.getElementById("gn1").style.display='none';
					document.getElementById("gn").disabled=true;
					document.getElementById("gn1").disabled=true;		
					document.getElementById("wh2").style.display='none';
					document.getElementById("whh2").style.display='none';
				}
			document.getElementById("demo").innerHTML = val;
        }
		/*function exam_type3() // Compulsory
		{
			//val="";
			document.getElementById("cmp").disabled=true;
			document.getElementById("bsc").disabled=false;
			document.getElementById("ba").disabled=false;
            document.getElementById("stt").disabled=true;
            document.getElementById("ndd").disabled=true;
            document.getElementById("rdd").disabled=true;
            document.getElementById("hn1").disabled=true;
            document.getElementById("gn1").disabled=true;
            document.f.subject[0].disabled=true;
            document.f.subject[1].disabled=true;
            document.f.subject[2].disabled=true;
            document.f.subject[3].disabled=true;
            document.f.subject[4].disabled=true;
            document.f.subject[5].disabled=true;
            document.f.subject[6].disabled=true;
            document.f.subject[7].disabled=true;
			document.f.subject[8].disabled=true;
            document.f.subject[9].disabled=true;
            document.f.subject[10].disabled=true;
            document.f.subject[11].disabled=true;
            document.f.subject[12].disabled=true;
            document.f.subject[13].disabled=true;
            document.f.subject[14].disabled=false;
            document.f.subject[15].disabled=false;
            document.f.subject[16].disabled=false;
            document.f.subject[17].disabled=false;
            document.f.subject[18].disabled=false;
            document.f.subject[0].checked=false;
            document.f.subject[1].checked=false;
            document.f.subject[2].checked=false;
            document.f.subject[3].checked=false;
            document.f.subject[4].checked=false;
            document.f.subject[5].checked=false;
            document.f.subject[6].checked=false;
            document.f.subject[7].checked=false;
            document.f.subject[8].checked=false;
            document.f.subject[9].checked=false;
            document.f.subject[10].checked=false;
            document.f.subject[11].checked=false;
            document.f.subject[12].checked=false;
            document.f.subject[13].checked=false;
            document.getElementById("bsc").checked=false;
            document.getElementById("ba").checked=false;
            document.getElementById("st").checked=false;
            document.getElementById("nd").checked=false;
            document.getElementById("rd").checked=false;
            document.getElementById("hn").checked=false;
            document.getElementById("gn").checked=false;
            document.getElementById("st").disabled=true;
            document.getElementById("nd").disabled=true;
            document.getElementById("rd").disabled=true;
            document.getElementById("hn").disabled=true;
            document.getElementById("gn").disabled=true;
			document.getElementById("all").checked=false;
            document.getElementById("fst").checked=false;
            document.getElementById("lst").checked=false;
            document.getElementById("all").disabled=true;
            document.getElementById("fst").disabled=true;
            document.getElementById("lst").disabled=true;
            document.getElementById("prnm").value="";
            document.getElementById("prnm").disabled=true;
			document.getElementById("hn").style.display='none';
			document.getElementById("gn").style.display='none';
			document.getElementById("hn1").style.display='none';
			document.getElementById("gn1").style.display='none';
			document.getElementById("gn1").style.display='none';
			document.getElementById("wh1").style.display='none';
			document.getElementById("wh2").style.display='none';
			document.getElementById("whh1").style.display='none';
			document.getElementById("whh2").style.display='none';
		}*/
        function hide_first_portion() // For UG click
        {
        if (document.getElementById("ug").checked)
            {
				flag_ug = 1;
				flag_pg = 0;
				val = document.getElementById("ug").value;
				document.getElementById("demo").innerHTML = val;
				/* unchecking pg */
                document.getElementById("pg").checked=false;
				/* abling sc,srts,cmp */
                document.getElementById("bsc").disabled=false;
                document.getElementById("ba").disabled=false;
				//document.getElementById("cmp").disabled=false;
				/* unchecking sc,arts,cmp */
                document.getElementById("bsc").checked=false;
                document.getElementById("ba").checked=false;
                //document.getElementById("cmp").checked=false;
				/* unchecking sc-all,frst,lst */
                document.getElementById("all").checked=false;
                document.getElementById("fst").checked=false;
                document.getElementById("lst").checked=false;
				/* unchecking arts,cmp-all,frst,lst */
                document.getElementById("alll").checked=false;
                document.getElementById("fstt").checked=false;
                document.getElementById("lstt").checked=false;
				/* unchecking sc-1st,2nd,3rd */
                document.getElementById("st").checked=false;
                document.getElementById("nd").checked=false;
                document.getElementById("rd").checked=false;
				/* unchecking sc-hns,gnrl */
                document.getElementById("hn").checked=false;
                document.getElementById("gn").checked=false;
				/* unchecking arts,cmp-1st,2nd,3rd */
                document.getElementById("stt").checked=false;
                document.getElementById("ndd").checked=false;
                document.getElementById("rdd").checked=false;
				/* unchecking arts,cmp-hns,gnrl */
                document.getElementById("hn1").checked=false;
                document.getElementById("gn1").checked=false;
				
                document.getElementById("prnm").checked=false;
                document.getElementById("prnm1").checked=false;
				/* unchecking sc subjects */
                document.f.subject[0].checked=false;
                document.f.subject[1].checked=false;
                document.f.subject[2].checked=false;
                document.f.subject[3].checked=false;
                document.f.subject[4].checked=false;
                document.f.subject[5].checked=false;
                document.f.subject[6].checked=false;
                document.f.subject[7].checked=false;
				/* unchecking arts subjects */
                document.f.subject[8].checked=false;
                document.f.subject[9].checked=false;
                document.f.subject[10].checked=false;
                document.f.subject[11].checked=false;
                document.f.subject[12].checked=false;
                document.f.subject[13].checked=false;
				/* unchecking cmp subjects 
                document.f.subject[14].checked=false;
                document.f.subject[15].checked=false;
                document.f.subject[16].checked=false;
                document.f.subject[17].checked=false;
                document.f.subject[18].checked=false;*/
				/* value setted null of arts-no. of stdnts */
                document.getElementById("prnm").value="";
				/* value setted null of sc-no. of stdnts */
                document.getElementById("prnm1").value="";
				/* disabling sc subjects */
                document.f.subject[0].disabled=true;
                document.f.subject[1].disabled=true;
                document.f.subject[2].disabled=true;
                document.f.subject[3].disabled=true;
                document.f.subject[4].disabled=true;
                document.f.subject[5].disabled=true;
                document.f.subject[6].disabled=true;
                document.f.subject[7].disabled=true;
				/* disabling arts subjects */
                document.f.subject[8].disabled=true;
                document.f.subject[9].disabled=true;
                document.f.subject[10].disabled=true;
                document.f.subject[11].disabled=true;
                document.f.subject[12].disabled=true;
                document.f.subject[13].disabled=true;
				/* disabling cmp subjects 
                document.f.subject[14].disabled=true;
                document.f.subject[15].disabled=true;
                document.f.subject[16].disabled=true;
                document.f.subject[17].disabled=true;
                document.f.subject[18].disabled=true;*/
				/* disabling sc-all,fst,lst */
                document.getElementById("all").disabled=true;
                document.getElementById("fst").disabled=true;
                document.getElementById("lst").disabled=true;
				/* disabling arts,cmp-all,fst,lst */
                document.getElementById("alll").disabled=true;
                document.getElementById("fstt").disabled=true;
                document.getElementById("lstt").disabled=true;
				/* disabling sc-1st,2nd,3rd */ 
                document.getElementById("st").disabled=true;
                document.getElementById("nd").disabled=true;
                document.getElementById("rd").disabled=true;
				/* disabling arts,cmp-hn,gnrl */
                document.getElementById("hn").disabled=true;
                document.getElementById("gn").disabled=true;
				/* disabling arts,cmp-1st,2nd,3rd */
                document.getElementById("stt").disabled=true;
                document.getElementById("ndd").disabled=true;
                document.getElementById("rdd").disabled=true;
				/* disabling arts,cmp-hns,gnrl */
                document.getElementById("hn1").disabled=true;
                document.getElementById("gn1").disabled=true;
				/* disabling arts-no. of stdnts */
                document.getElementById("prnm").disabled=true;
				/* disabling sc-no. of stdnts */
                document.getElementById("prnm1").disabled=true;
				/* displaying radio buttons for sc subjects */
                document.f.subject[1].style.display='inline';
                document.f.subject[2].style.display='inline';
                document.f.subject[3].style.display='inline';
                document.f.subject[4].style.display='inline';
                document.f.subject[6].style.display='inline';
                document.f.subject[7].style.display='inline';
				/* displaying radio buttons for arts subjects */
                document.f.subject[8].style.display='inline';
                document.f.subject[12].style.display='inline';
                document.f.subject[13].style.display='inline';
				/* displaying radio buttons for cmp subjects 
                document.f.subject[14].style.display='inline';
                document.f.subject[15].style.display='inline';
                document.f.subject[16].style.display='inline';
                document.f.subject[17].style.display='inline';
                document.f.subject[18].style.display='inline';*/
				/* displaying 'Compulsory Subject' */
				//document.getElementById("cmps").style.display='inline';
				/* displaying cmp option */
				//document.getElementById("cmp").style.display='inline';
				/* displaying subject names fo sc subjects */
                document.getElementById("sz1").style.display='inline';
                document.getElementById("sz2").style.display='inline';
                document.getElementById("sz3").style.display='inline';
                document.getElementById("sz4").style.display='inline';
                document.getElementById("sz5").style.display='inline';
                document.getElementById("sz6").style.display='inline';
				/* displaying subject names fo arts subjects */
                document.getElementById("sz7").style.display='inline';
                document.getElementById("sz8").style.display='inline';
                document.getElementById("sz9").style.display='inline';
				/* displaying subject names fo cmp subjects 
                document.getElementById("sph").style.display='inline';
                document.getElementById("sz10").style.display='inline';
                document.getElementById("sz11").style.display='inline';
                document.getElementById("sz12").style.display='inline';
                document.getElementById("sz13").style.display='inline';*/
				/* displaying '3rd yr' option for sc */
                document.getElementById("hw3").style.display='inline';
				/* displaying '3rd yr' option for arts,cmp */
                document.getElementById("hww3").style.display='inline';
				/* sc-hns,gnrl */
				document.getElementById("wh1").style.display='inline';
				document.getElementById("wh2").style.display='inline';
				/* arts-hns,gnrl */
                document.getElementById("whh1").style.display='inline';
                document.getElementById("whh2").style.display='inline';
				/* option sc-hns,gnrl */
				document.getElementById("hn").style.display='inline';
				document.getElementById("gn").style.display='inline';
				/* option arts-hns,gnrl */
                document.getElementById("hn1").style.display='inline';
                document.getElementById("gn1").style.display='inline';
				/* displaying 3rd year sc */
                document.getElementById("rd").style.display='inline';
				/* displaying 3rd year   arts */
                document.getElementById("rdd").style.display='inline';
				/* Inlining industrial chemistry */
				document.getElementById("rz2").innerText="Industrial Chemistry";
            }
        else // For 'ug' option unchecked
            {
				val = "";
				flag_ug = 0;
				/* unchecking sc,arts,cmp */
                document.getElementById("bsc").checked=false;
                document.getElementById("ba").checked=false;
				//document.getElementById("cmp").checked=false;
				/* disabling sc,arts,cmp */
                document.getElementById("bsc").disabled=true;
                document.getElementById("ba").disabled=true;
				//document.getElementById("cmp").disabled=true;
            }
        }
        function hide_first_portion1() // For PG click
        {
        if (document.getElementById("pg").checked)
            {
				flag_pg = 1;
				flag_ug = 0;
				val = document.getElementById("pg").value;
				document.getElementById("demo").innerHTML=val;
				/* unchecking sc,arts,cmp */
                document.getElementById("bsc").checked=false;
                document.getElementById("ba").checked=false;
				//document.getElementById("cmp").checked=false;
                //document.getElementById("first_portion").style.display='block';//check??
				/* abling sc,srts */
                document.getElementById("bsc").disabled=false;
                document.getElementById("ba").disabled=false;
				/* disabling cmp */
                //document.getElementById("cmp").disabled=true;
				/* no. of stdnts for arts value set null */
                document.getElementById("prnm").value="";  
				/* no. of stdnts for sc value set null */
                document.getElementById("prnm1").value="";
                /* unchecking sc subjects */
                document.f.subject[0].checked=false;
                document.f.subject[1].checked=false;
                document.f.subject[2].checked=false;
                document.f.subject[3].checked=false;
                document.f.subject[4].checked=false;
                document.f.subject[5].checked=false;
                document.f.subject[6].checked=false;
                document.f.subject[7].checked=false;
				/* unchecking arts subjects */
                document.f.subject[8].checked=false;
				document.f.subject[12].checked=false;
                document.f.subject[13].checked=false;
				/* unchecking cmp subjects */
                //document.f.subject[14].checked=false;
                document.getElementById("a1").style.display='block';
                document.getElementById("a2").style.display='block';
                document.getElementById("a3").style.display='block';
                document.getElementById("a4").style.display='block';
                document.getElementById("a5").style.display='block';
                document.getElementById("a6").style.display='block';
                document.getElementById("ug").checked=false;
                /*var lb=document.getElementById("rz2");*/
				/* inlining industrial chemistry as Applied chemistry */
                document.getElementById("rz2").innerText="Applied Chemistry";
				/* Disabling sc subjects */
                document.f.subject[0].disabled=true;
                document.f.subject[1].disabled=true;
                document.f.subject[2].disabled=true;
                document.f.subject[3].disabled=true;
                document.f.subject[4].disabled=true;
                document.f.subject[5].disable=true;
                document.f.subject[6].disable=true;
                document.f.subject[7].disable=true;
				/* Disabling arts subjects */
				document.f.subject[9].disabled=true;
                document.f.subject[10].disabled=true;
                document.f.subject[11].disabled=true;
				/* Disabling cmp subject */
                //document.f.subject[14].disabled=true;
				/* no display of sc non pg subjects */
                document.f.subject[1].style.display='none';
                document.f.subject[2].style.display='none';
                document.f.subject[3].style.display='none';
                document.f.subject[4].style.display='none';
                document.f.subject[6].style.display='none';
                document.f.subject[7].style.display='none';
				/* no display of non pg arts subjects */
                document.f.subject[8].style.display='none';
                document.f.subject[12].style.display='none';
                document.f.subject[13].style.display='none';
				/* no display of cmp subjects 
                document.f.subject[14].style.display='none';
                document.f.subject[15].style.display='none';
                document.f.subject[16].style.display='none';
                document.f.subject[17].style.display='none';
                document.f.subject[18].style.display='none';*/
				/* unchecking sc-all,fst,lst */
                document.getElementById("all").checked=false;
                document.getElementById("fst").checked=false;
                document.getElementById("lst").checked=false;
				/* unchecking arts,cmp-all,fst,lst */
                document.getElementById("alll").checked=false;
                document.getElementById("fstt").checked=false;
                document.getElementById("lstt").checked=false;
				/* unchecking sc-1st,2nd,3rd */
                document.getElementById("st").checked=false;
                document.getElementById("nd").checked=false;
                document.getElementById("rd").checked=false;
				/* uncheckinh sc-hns,gnrl */
                document.getElementById("hn").checked=false;
                document.getElementById("gn").checked=false;
				/* unchecking arts,cmp-1st,2nd,3rd */
                document.getElementById("stt").checked=false;
                document.getElementById("ndd").checked=false;
                document.getElementById("rdd").checked=false;
				/* uncheckinh arts,cmp-hns,gnrl */
                document.getElementById("hn1").checked=false;
                document.getElementById("gn1").checked=false;
                /*document.getElementById("prnm").checked=false;
                document.getElementById("prnm1").checked=false;*/
				/* no display of non pg sc subject names */
                document.getElementById("sz1").style.display='none';
                document.getElementById("sz2").style.display='none';
                document.getElementById("sz3").style.display='none';
                document.getElementById("sz4").style.display='none';
                document.getElementById("sz5").style.display='none';
                document.getElementById("sz6").style.display='none';
				/* no display of non pg arts subject names */
                document.getElementById("sz7").style.display='none';
                document.getElementById("sz8").style.display='none';
                document.getElementById("sz9").style.display='none';
				/* no display of cmp subject names 
                document.getElementById("sph").style.display='none';
                document.getElementById("sz10").style.display='none';
                document.getElementById("sz11").style.display='none';
                document.getElementById("sz12").style.display='none';
                document.getElementById("sz13").style.display='none';*/
				/* no display of compulsory option */
                //document.getElementById("cmp").style.display='none';
				/* no display 'Compulsory Subjects' */
                //document.getElementById("cmps").style.display='none';
				/* not displaying '3rd yr' option for sc */
                document.getElementById("hw3").style.display='none';
				/* not displaying '3rd yr' option for arts,cmp */
                document.getElementById("hww3").style.display='none';
				/* not displaying 'general' for sc */
                document.getElementById("wh2").style.display='none';
				/* not displaying 'general' for arts,cmp */
                document.getElementById("whh2").style.display='none';
				/* not displaying general option for sc */
                document.getElementById("gn").style.display='none';
				/* not displaying general option for arts,cmp */
                document.getElementById("gn1").style.display='none';
				/* not displaying 3rd yr option for sc */
                document.getElementById("rd").style.display='none';
				/* not displaying 3rd yr option for arts,cmp */
                document.getElementById("rdd").style.display='none';
				/* displaying hns option for sc */
                document.getElementById("hn").style.display='inline';
				/* displaying hns option for arts,cmp */
                document.getElementById("hn1").style.display='inline';
				/* displaying 'honors' for sc */
                document.getElementById("wh1").style.display='inline';
				/* displaying 'honors' for arts,cmp */
                document.getElementById("whh1").style.display='inline';
                /* disabling sc-all,fst,lst */                
                document.getElementById("all").disabled=true;
                document.getElementById("fst").disabled=true;
                document.getElementById("lst").disabled=true;
				/* disabling arts,cmp-all,fst,lst */
                document.getElementById("alll").disabled=true;
                document.getElementById("fstt").disabled=true;
                document.getElementById("lstt").disabled=true;
				/* disabling sc-1st,2nd,3rd */
                document.getElementById("st").disabled=true;
                document.getElementById("nd").disabled=true;
                document.getElementById("rd").disabled=true;
				/* disabling sc-hns,gnrl */
                document.getElementById("hn").disabled=true;
                document.getElementById("gn").disabled=true;
				/* disabling arts,cmp-1st,2nd,3rd */
                document.getElementById("stt").disabled=true;
                document.getElementById("ndd").disabled=true;
                document.getElementById("rdd").disabled=true;
				/* disabling arts,cmp-hns,gnrl */
                document.getElementById("hn1").disabled=true;
                document.getElementById("gn1").disabled=true;
				/* disabling arts,cmp-no. of stdnts */
                document.getElementById("prnm").disabled=true;
				/* disabling sc-no. of stdnts */
                document.getElementById("prnm1").disabled=true;
				
				document.getElementById("gn").disabled = true;
				document.getElementById("gn1").disabled = true;
            }
        else // for 'pg' option unchecked
            {
				flag_pg = 0;
				val = "";
				/* unchecking sc,arts,cmp */
                document.getElementById("bsc").checked=false;
                document.getElementById("ba").checked=false;
                //document.getElementById("cmp").checked=false;
				/* disabling sc,arts,cmp */
                document.getElementById("bsc").disabled=true;
                document.getElementById("ba").disabled=true;
                //document.getElementById("cmp").disabled=true;
				document.getElementById("demo").innerHTML=val;
            }
        }
		function sc_f_l()
		{
			num_sc = document.getElementById("prnm1").value;
			/*var len = num.length;
			document.getElementById("demo").innerHTML = len;
			document.getElementById("demoo").innerHTML = num;
			if(len >= 3)
			{
				num = len.substring(1,3);
				document.getElementById("demo").innerHTML = num;
				val = val + num;
			}
			else
			{
				val = val + num;
			}*/
		}
		function arts_f_l()
		{
			num_arts = document.getElementById("prnm").value;
			//val = val + num;
		}
    	function addd() // Function for Add button
        { 
        if (c==0) // Condition for clicking Add button for 1st time
            {
				if (document.getElementById("bsc").checked) // For Science Subjects
					{
						document.getElementById("ug").checked=false;
						document.getElementById("pg").checked=false;
						document.getElementById("bsc").checked=false;
						document.getElementById("ba").checked=false;
						document.getElementById("bsc").disabled=true;
						document.getElementById("ba").disabled=true;
						document.getElementById("st").checked=false;
						document.getElementById("nd").checked=false;
						document.getElementById("rd").checked=false;
						document.getElementById("hn").checked=false;
						document.getElementById("gn").checked=false;
						document.f.subject[0].checked=false;
						document.f.subject[1].checked=false;
						document.f.subject[2].checked=false;
						document.f.subject[3].checked=false;
						document.f.subject[4].checked=false;
						document.f.subject[5].checked=false;
						document.f.subject[6].checked=false;
						document.f.subject[7].checked=false;
						document.f.subject[0].disabled=false;
						document.f.subject[1].disabled=false;
						document.f.subject[2].disabled=false;
						document.f.subject[3].disabled=false;
						document.f.subject[4].disabled=false;
						document.f.subject[5].disabled=false;
						document.f.subject[6].disabled=false;
						document.f.subject[7].disabled=false;
						document.getElementById("st").disabled=true;
						document.getElementById("nd").disabled=true;
						document.getElementById("rd").disabled=true;
						document.getElementById("hn").disabled=true;
						document.getElementById("gn").disabled=true;
						document.getElementById("all").checked=false;
						document.getElementById("fst").checked=false;
						document.getElementById("lst").checked=false;
						document.getElementById("all").disabled=true;
						document.getElementById("fst").disabled=true;
						document.getElementById("lst").disabled=true;

						if (val!="")
							{
								if (document.getElementById("all").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb11").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb1").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_sc;
										num_sc = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb11").value=nw; 
										/*var tow=document.getElementById("prnm").value;
										val=tow+val;*/
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb1").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=0;
							}
					}
				else if (document.getElementById("ba").checked) // For Arts Subjects
					{
						document.getElementById("ug").checked=false;
						document.getElementById("pg").checked=false;
						document.getElementById("ba").checked=false;
						document.getElementById("bsc").checked=false;
						document.getElementById("ba").disabled=true;
						document.getElementById("bsc").disabled=true;
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;
						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;
						document.f.subject[8].checked=false;
						document.f.subject[9].checked=false;
						document.f.subject[10].checked=false;
						document.f.subject[11].checked=false;
						document.f.subject[12].checked=false;
						document.f.subject[13].checked=false;
						document.f.subject[8].disabled=false;
						document.f.subject[9].disabled=false;
						document.f.subject[10].disabled=false;
						document.f.subject[11].disabled=false;
						document.f.subject[12].disabled=false;
						document.f.subject[13].disabled=false;
						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;
						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;
						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("demoo").innerHTML=nw;
										document.getElementById("sb11").value=nw;
										val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb1").value=val;

										var holy=document.getElementById("rmname").value; // holy = no. of benches in the room
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb11").value=nw; 
										var tow=document.getElementById("prnm1").value;
										val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb1").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=0;
							}
					}
				/*else if(document.getElementById("cmp").checked) // For Compulsory Subjects
					{
					
					document.getElementById("stt").checked=false;
					document.getElementById("ndd").checked=false;
					document.getElementById("rdd").checked=false;
					
					document.getElementById("hn1").checked=false;
					document.getElementById("gn1").checked=false;
					
					document.getElementById("alll").checked=false;
					document.getElementById("fstt").checked=false;
					document.getElementById("lstt").checked=false;
					
					document.getElementById("stt").disabled=true;
					document.getElementById("ndd").disabled=true;
					document.getElementById("rdd").disabled=true;
					
					document.getElementById("hn1").disabled=true;
					document.getElementById("gn1").disabled=true;
					
					document.getElementById("alll").disabled=true;
					document.getElementById("fstt").disabled=true;
					document.getElementById("lstt").disabled=true;
					
					document.f.subject[14].checked=false;
					document.f.subject[15].checked=false;
					document.f.subject[16].checked=false;
					document.f.subject[17].checked=false;
					document.f.subject[18].checked=false;
					if (val!="")
						{
							if (document.getElementById("alll").checked)
								{
									var nw=val.substring(2,6);
									document.getElementById("sb11").value=nw;
									//val="c"+val;
									document.getElementById("demo").innerHTML=val;
									document.getElementById("demoo").innerHTML='hii';
									document.getElementById("sb1").value=val;

									var holy=document.getElementById("rmname").value; // holy = room no.
									document.getElementById("sb51").value=holy;
									document.getElementById("prnm1").value="";
									val="";
									c1=0;
									sc="";
									c2=0;
									stt123="";
									d=0;
									d1=0;
									d2=0;
									ab="";
									ab1="";
									e=0;
									e1=0;
									ed="";
									ed1="";
									c=c+1;
								}
							else
								{
									val = val + num_arts;
									num_arts = 0;
									var nw=val.substring(3,7);
									document.getElementById("sb11").value=nw; 
									var tow=document.getElementById("prnm1").value;
									val=tow+val;
									document.getElementById("demo").innerHTML=val;
									document.getElementById("sb1").value=val;

									var holy=document.getElementById("rmname").value;
									document.getElementById("sb51").value=holy;
									document.getElementById("prnm1").value="";
									val="";
									c1=0;
									sc="";
									c2=0;
									stt123="";
									d=0;
									d1=0;
									d2=0;
									ab="";
									ab1="";
									e=0;
									e1=0;
									ed="";
									ed1="";
									c=c+1;

								}
						}
					else if (val=="")
						{
							document.getElementById("demo").innerHTML="Nothing";
							c=0;
						}
					}*/
            }
        else if (c==1) // Condition for clicking Add button for 2nd time
                {
					if (document.getElementById("bsc").checked) // For Science Subjects
					{
						document.getElementById("ug").checked=false;
						document.getElementById("pg").checked=false;
						document.getElementById("bsc").checked=false;
						document.getElementById("ba").checked=false;
						document.getElementById("bsc").disabled=true;
						document.getElementById("ba").disabled=true;
						document.getElementById("st").checked=false;
						document.getElementById("nd").checked=false;
						document.getElementById("rd").checked=false;
						document.getElementById("hn").checked=false;
						document.getElementById("gn").checked=false;
						document.f.subject[0].checked=false;
						document.f.subject[1].checked=false;
						document.f.subject[2].checked=false;
						document.f.subject[3].checked=false;
						document.f.subject[4].checked=false;
						document.f.subject[5].checked=false;
						document.f.subject[6].checked=false;
						document.f.subject[7].checked=false;
						document.f.subject[0].disabled=false;
						document.f.subject[1].disabled=false;
						document.f.subject[2].disabled=false;
						document.f.subject[3].disabled=false;
						document.f.subject[4].disabled=false;
						document.f.subject[5].disabled=false;
						document.f.subject[6].disabled=false;
						document.f.subject[7].disabled=false;
						document.getElementById("st").disabled=true;
						document.getElementById("nd").disabled=true;
						document.getElementById("rd").disabled=true;
						document.getElementById("hn").disabled=true;
						document.getElementById("gn").disabled=true;
						document.getElementById("all").checked=false;
						document.getElementById("fst").checked=false;
						document.getElementById("lst").checked=false;
						document.getElementById("all").disabled=true;
						document.getElementById("fst").disabled=true;
						document.getElementById("lst").disabled=true;

						if (val!="")
							{
								if (document.getElementById("all").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb21").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb2").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_sc;
										num_sc = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb21").value=nw; 
										/*var tow=document.getElementById("prnm").value;
										val=tow+val;*/
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb2").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=1;
							}
					}
					else if (document.getElementById("ba").checked)  // For Arts Subjects 
						{
							document.getElementById("ug").checked=false;
							document.getElementById("pg").checked=false;
							document.getElementById("ba").checked=false;
							document.getElementById("bsc").checked=false;
							document.getElementById("ba").disabled=true;
							document.getElementById("bsc").disabled=true;
							document.getElementById("stt").checked=false;
							document.getElementById("ndd").checked=false;
							document.getElementById("rdd").checked=false;
							document.getElementById("hn1").checked=false;
							document.getElementById("gn1").checked=false;
							document.f.subject[8].checked=false;
							document.f.subject[9].checked=false;
							document.f.subject[10].checked=false;
							document.f.subject[11].checked=false;
							document.f.subject[12].checked=false;
							document.f.subject[13].checked=false;
							document.f.subject[8].disabled=false;
							document.f.subject[9].disabled=false;
							document.f.subject[10].disabled=false;
							document.f.subject[11].disabled=false;
							document.f.subject[12].disabled=false;
							document.f.subject[13].disabled=false;
							document.getElementById("stt").disabled=true;
							document.getElementById("ndd").disabled=true;
							document.getElementById("rdd").disabled=true;
							document.getElementById("hn1").disabled=true;
							document.getElementById("gn1").disabled=true;
							document.getElementById("alll").checked=false;
							document.getElementById("fstt").checked=false;
							document.getElementById("lstt").checked=false;
							document.getElementById("alll").disabled=true;
							document.getElementById("fstt").disabled=true;
							document.getElementById("lstt").disabled=true;

							if (val!="")
								{
									if (document.getElementById("alll").checked)
										{
											var nw=val.substring(3,7);
											document.getElementById("sb21").value=nw;
											//val="A"+val;
											document.getElementById("demo").innerHTML=val;
											document.getElementById("sb2").value=val;

											var holy=document.getElementById("rmname").value;
											document.getElementById("sb51").value=holy;
											document.getElementById("prnm1").value="";
											val="";
											c1=0;
											sc="";
											c2=0;
											stt123="";
											d=0;
											d1=0;
											d2=0;
											ab="";
											ab1="";
											e=0;
											e1=0;
											ed="";
											ed1="";
											c=c+1;
										}
									else
										{
											val = val + num_arts;
											num_arts = 0;
											var nw=val.substring(3,7);
											document.getElementById("sb21").value=nw; 
											/*var tow=document.getElementById("prnm1").value;
											val=tow+val;*/
											document.getElementById("demo").innerHTML=val;
											document.getElementById("sb2").value=val;

											var holy=document.getElementById("rmname").value;
											document.getElementById("sb51").value=holy;
											document.getElementById("prnm1").value="";
											val="";
											c1=0;
											sc="";
											c2=0;
											stt123="";
											d=0;
											d1=0;
											d2=0;
											ab="";
											ab1="";
											e=0;
											e1=0;
											ed="";
											ed1="";
											c=c+1;

										}
								}
							else if (val=="")
								{
									document.getElementById("demo").innerHTML="Nothing";
									c=1;
								}
						}
					/*else if (document.getElementById("cmp").checked)  // For compulsory Subjects 
					{
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;
						
						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;
						
						document.f.subject[14].checked=false;
						document.f.subject[15].checked=false;
						document.f.subject[16].checked=false;
						document.f.subject[17].checked=false;
						document.f.subject[18].checked=false;
			
						document.f.subject[14].disabled=false;
						document.f.subject[15].disabled=false;
						document.f.subject[16].disabled=false;
						document.f.subject[17].disabled=false;
						document.f.subject[18].disabled=false;
						
						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;
						
						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;
						
						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;
						
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb21").value=nw;
										val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb2").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb21").value=nw; 
										var tow=document.getElementById("prnm1").value;
										val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb2").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
					}
					else if (val=="")
						{
							document.getElementById("demo").innerHTML="Nothing";
							c=1;
						}
					}*/
                }
        else if (c==2) // Condition for clicking Add button for 3rd time
            {
				if (document.getElementById("bsc").checked) // For Science Subjects
					{
						document.getElementById("ug").checked=false;
						document.getElementById("pg").checked=false;
						document.getElementById("bsc").checked=false;
						document.getElementById("ba").checked=false;
						document.getElementById("bsc").disabled=true;
						document.getElementById("ba").disabled=true;
						document.getElementById("st").checked=false;
						document.getElementById("nd").checked=false;
						document.getElementById("rd").checked=false;
						document.getElementById("hn").checked=false;
						document.getElementById("gn").checked=false;
						document.f.subject[0].checked=false;
						document.f.subject[1].checked=false;
						document.f.subject[2].checked=false;
						document.f.subject[3].checked=false;
						document.f.subject[4].checked=false;
						document.f.subject[5].checked=false;
						document.f.subject[6].checked=false;
						document.f.subject[7].checked=false;
						document.f.subject[0].disabled=false;
						document.f.subject[1].disabled=false;
						document.f.subject[2].disabled=false;
						document.f.subject[3].disabled=false;
						document.f.subject[4].disabled=false;
						document.f.subject[5].disabled=false;
						document.f.subject[6].disabled=false;
						document.f.subject[7].disabled=false;
						document.getElementById("st").disabled=true;
						document.getElementById("nd").disabled=true;
						document.getElementById("rd").disabled=true;
						document.getElementById("hn").disabled=true;
						document.getElementById("gn").disabled=true;
						document.getElementById("all").checked=false;
						document.getElementById("fst").checked=false;
						document.getElementById("lst").checked=false;
						document.getElementById("all").disabled=true;
						document.getElementById("fst").disabled=true;
						document.getElementById("lst").disabled=true;

						if (val!="")
							{
								if (document.getElementById("all").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_sc;
										num_sc = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw; 
										/*var tow=document.getElementById("prnm").value;
										val=tow+val;*/
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=2;
							}
						}
				else if (document.getElementById("ba").checked) // For Arts Subjects
					{
						document.getElementById("ug").checked=false;
						document.getElementById("pg").checked=false;
						document.getElementById("ba").checked=false;
						document.getElementById("bsc").checked=false;
						document.getElementById("ba").disabled=true;
						document.getElementById("bsc").disabled=true;
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;
						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;
						document.f.subject[8].checked=false;
						document.f.subject[9].checked=false;
						document.f.subject[10].checked=false;
						document.f.subject[11].checked=false;
						document.f.subject[12].checked=false;
						document.f.subject[13].checked=false;
						document.f.subject[8].disabled=false;
						document.f.subject[9].disabled=false;
						document.f.subject[10].disabled=false;
						document.f.subject[11].disabled=false;
						document.f.subject[12].disabled=false;
						document.f.subject[13].disabled=false;
						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;
						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;
						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw; 
										/*var tow=document.getElementById("prnm1").value;
										val=tow+val;*/
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=2;
							}
					}
				/*else if (document.getElementById("cmp").checked) // For Compulsory Subjects
					{
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;

						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;

						document.f.subject[14].checked=false;
						document.f.subject[15].checked=false;
						document.f.subject[16].checked=false;
						document.f.subject[17].checked=false;
						document.f.subject[18].checked=false;

						document.f.subject[14].disabled=false;
						document.f.subject[15].disabled=false;
						document.f.subject[16].disabled=false;
						document.f.subject[17].disabled=false;
						document.f.subject[18].disabled=false;

						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;

						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;

						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;

						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw;
										val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb31").value=nw; 
										var tow=document.getElementById("prnm1").value;
										val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb3").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=2;
							}
				}*/
			}
        /*else if (c==3) // Condition for clicking Add button for 4th time
            {
				if (document.getElementById("bsc").checked) // For Science Subjects
					{
						document.getElementById("st").checked=false;
						document.getElementById("nd").checked=false;
						document.getElementById("rd").checked=false;
						document.getElementById("hn").checked=false;
						document.getElementById("gn").checked=false;
						document.f.subject[0].checked=false;
						document.f.subject[1].checked=false;
						document.f.subject[2].checked=false;
						document.f.subject[3].checked=false;
						document.f.subject[4].checked=false;
						document.f.subject[5].checked=false;
						document.f.subject[6].checked=false;
						document.f.subject[7].checked=false;
						document.f.subject[0].disabled=false;
						document.f.subject[1].disabled=false;
						document.f.subject[2].disabled=false;
						document.f.subject[3].disabled=false;
						document.f.subject[4].disabled=false;
						document.f.subject[5].disabled=false;
						document.f.subject[6].disabled=false;
						document.f.subject[7].disabled=false;
						document.getElementById("st").disabled=true;
						document.getElementById("nd").disabled=true;
						document.getElementById("rd").disabled=true;
						document.getElementById("hn").disabled=true;
						document.getElementById("gn").disabled=true;
						document.getElementById("all").checked=false;
						document.getElementById("fst").checked=false;
						document.getElementById("lst").checked=false;
						document.getElementById("all").disabled=true;
						document.getElementById("fst").disabled=true;
						document.getElementById("lst").disabled=true;

						if (val!="")
							{
								if (document.getElementById("all").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_sc;
										num_sc = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw; 
										//var tow=document.getElementById("prnm").value;
										//val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;

									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=3;
							}
					}
				else if (document.getElementById("ba").checked) // For Arts Subjects
					{
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;
						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;
						document.f.subject[8].checked=false;
						document.f.subject[9].checked=false;
						document.f.subject[10].checked=false;
						document.f.subject[11].checked=false;
						document.f.subject[12].checked=false;
						document.f.subject[13].checked=false;
						document.f.subject[8].disabled=false;
						document.f.subject[9].disabled=false;
						document.f.subject[10].disabled=false;
						document.f.subject[11].disabled=false;
						document.f.subject[12].disabled=false;
						document.f.subject[13].disabled=false;
						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;
						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;
						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;
						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw;
										//val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw; 
										//var tow=document.getElementById("prnm1").value;
										//val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;


									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=3;
							}
					}
				else if (document.getElementById("cmp").checked) // For Compulsory Subjects
					{
						document.getElementById("stt").checked=false;
						document.getElementById("ndd").checked=false;
						document.getElementById("rdd").checked=false;

						document.getElementById("hn1").checked=false;
						document.getElementById("gn1").checked=false;

						document.f.subject[14].checked=false;
						document.f.subject[15].checked=false;
						document.f.subject[16].checked=false;
						document.f.subject[17].checked=false;
						document.f.subject[18].checked=false;

						document.f.subject[14].disabled=false;
						document.f.subject[15].disabled=false;
						document.f.subject[16].disabled=false;
						document.f.subject[17].disabled=false;
						document.f.subject[18].disabled=false;

						document.getElementById("stt").disabled=true;
						document.getElementById("ndd").disabled=true;
						document.getElementById("rdd").disabled=true;

						document.getElementById("hn1").disabled=true;
						document.getElementById("gn1").disabled=true;

						document.getElementById("alll").checked=false;
						document.getElementById("fstt").checked=false;
						document.getElementById("lstt").checked=false;

						document.getElementById("alll").disabled=true;
						document.getElementById("fstt").disabled=true;
						document.getElementById("lstt").disabled=true;

						if (val!="")
							{
								if (document.getElementById("alll").checked)
									{
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw;
										val="A"+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;
									}
								else
									{
										val = val + num_arts;
										num_arts = 0;
										var nw=val.substring(3,7);
										document.getElementById("sb41").value=nw; 
										var tow=document.getElementById("prnm1").value;
										val=tow+val;
										document.getElementById("demo").innerHTML=val;
										document.getElementById("sb4").value=val;

										var holy=document.getElementById("rmname").value;
										document.getElementById("sb51").value=holy;
										document.getElementById("prnm1").value="";
										val="";
										c1=0;
										sc="";
										c2=0;
										stt123="";
										d=0;
										d1=0;
										d2=0;
										ab="";
										ab1="";
										e=0;
										e1=0;
										ed="";
										ed1="";
										c=c+1;


									}
							}
						else if (val=="")
							{
								document.getElementById("demo").innerHTML="Nothing";
								c=3;
							}
					}
            }*/
                
        }
		function submitted()
		{
			//document.getElementById("date").value = "";
			//document.getElementById("rmname").value = "";
			document.getElementById("sb11").value = "";
			document.getElementById("sb21").value = "";
			document.getElementById("sb31").value = "";
			document.getElementById("sb41").value = "";
			document.getElementById("ug").checked =false;
			document.getElementById("pg").checked =false;
			document.getElementById("bsc").checked =false;
			document.getElementById("ba").checked =false;
			document.getElementById("ba").disabled =true;
			document.getElementById("ba").disabled =true;
			document.f.subject[0].checked = false;
			document.f.subject[1].checked = false;
			document.f.subject[2].checked = false;
			document.f.subject[3].checked = false;
			document.f.subject[4].checked = false;
			document.f.subject[5].checked = false;
			document.f.subject[6].checked = false;
			document.f.subject[7].checked = false;
			document.f.subject[8].checked = false;
			document.f.subject[9].checked = false;
			document.f.subject[10].checked = false;
			document.f.subject[11].checked = false;
			document.f.subject[12].checked = false;
			document.f.subject[13].checked = false;
			document.f.subject[0].disable = true;
			document.f.subject[1].disable = true;
			document.f.subject[2].disable = true;
			document.f.subject[3].disable = true;
			document.f.subject[4].disable = true;
			document.f.subject[5].disable = true;
			document.f.subject[6].disable = true;
			document.f.subject[7].disable = true;
			document.f.subject[8].disable = true;
			document.f.subject[9].disable = true;
			document.f.subject[10].disable = true;
			document.f.subject[11].disable = true;
			document.f.subject[12].disable = true;
			document.f.subject[13].disable = true;
			document.getElementById("st").checked = false;
			document.getElementById("nd").checked = false;
			document.getElementById("rd").checked = false;
			document.getElementById("stt").checked = false;
			document.getElementById("ndd").checked = false;
			document.getElementById("rdd").checked = false;
			document.getElementById("st").disabled = true;
			document.getElementById("nd").disabled = true;
			document.getElementById("rd").disabled = true;
			document.getElementById("rdd").disabled = true;
			document.getElementById("rdd").disabled = true;
			document.getElementById("rdd").disabled = true;
			document.getElementById("hn").checked = false;
			document.getElementById("gn").checked = false;
			document.getElementById("hn1").checked = false;
			document.getElementById("gn1").checked = false;
			document.getElementById("hn").disabled = true;
			document.getElementById("gn").disabled = true;
			document.getElementById("hn1").disabled = true;
			document.getElementById("gn1").disabled = true;
			document.getElementById("all").checked = false;
			document.getElementById("fst").checked = false;
			document.getElementById("lst").checked = false;
			document.getElementById("alll").checked = false;
			document.getElementById("fstt").checked = false;
			document.getElementById("lstt").checked = false;
			document.getElementById("all").disabled = true;
			document.getElementById("fst").disabled = true;
			document.getElementById("lst").disabled = true;
			document.getElementById("alll").disabled = true;
			document.getElementById("fstt").disabled = true;
			document.getElementById("lstt").disabled = true;
			document.getElementById("prnm1").value = "";
			document.getElementById("prnm").value = "";			
			document.getElementById("prnm1").disabled = true;
			document.getElementById("prnm").disabled = true;
			var val="";// Main variable   
			var c=0; // Flag bit for checking no. of clicks of add button
			var c1=0;// Flag bit for first time checking or not for year 1/2/3 of Science
			var sc="";// Science value taking year 1/2/3
			var c2=0;// Flag bit for first time checking or not for H/G of Science
			var stt123="";// Science value taking H/G
			var d=0;
			var d1=0;// Flag bit for first time checking or not for year 1/2/3 of Arts
			var d2=0;// Flag bit for first time checking or not for H/G of Arts
			var ab="";// Arts value taking year 1/2/3
			var ab1="";// Arts value taking H/G
			var e=0;// Flag bit for first time checking or not for A/F/L of Science
			var e1=0;// Flag bit for first time checking or not for A/F/L of Arts
			var ed="";// Science value taking A/F/L
			var ed1="";// Arts value taking A/F/L
			var num_sc = 0;
			var num_arts = 0;
			var flag_sub = 0;
			var flag_sub_type = 0;
			var flag_ug = 0;
			var flag_pg = 0;
		}
    </script>
</head>
<body>
    <form action="get_general1.php" name="f" method="post" target="_blank" style="height: 1000px">
		<div class="first_block">
			<span class="date">Enter the Date :</span> <input type="date" id="date" name="date" value=""  required=""><br><br>
			<span class="room">Enter the Room :</span> <input type="text" id="rmname" name="room" value=""  required=""><br><br>
			<span class="ex_type">Select the Exam Type :</span>
			<input type="checkbox" id="ug" name="ug" value="U" onclick="hide_first_portion()">UG
			<input type="checkbox" id="pg" name="pg" value="P" onclick="hide_first_portion1()">PG
		</div>
        <div id="first_portion" class="parent_div" style="padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; height: 700px">
        <div class="science" style="float: left; padding-left: 10px; padding-right: 10px">
            
                <label class="container">
                    <input type="checkbox" id="bsc" name="stream" value="B.Sc" onclick="exam_type1()" disabled><span class="checkmark"></span>Science</label>
                <ul>
                    <input type="radio" name="subject" value="MTMA" onclick="sc0()" disabled><label id="rz1" class="s1">Mathematics</label><br>
                    <input type="radio" name="subject" value="PHSA" onclick="sc1()" disabled><label id="sz1">Physics</label><br>
                    <input type="radio" name="subject" value="CEMA" onclick="sc2()" disabled><label id="sz2">Chemistry</label><br>
                    <input type="radio" name="subject" value="CMSA" onclick="sc3()" disabled><label id="sz3">Computer Science</label><br>
                    <input type="radio" name="subject" value="MCBA" onclick="sc4()" disabled><label id="sz4">Microbiology</label><br>
                    <input type="radio" name="subject" value="INCA" onclick="sc5()" disabled><label id="rz2" class="s2">Industrial Chemistry</label><br>
                    <input type="radio" name="subject" value="ZOOA" onclick="sc6()" disabled><label id="sz5">Zoology</label><br>
                    <input type="radio" name="subject" value="ECOA" onclick="sc7()" disabled><label id="sz6">Economics</label><br><br>
                </ul>
			<div id="a2" class="year1">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="st" name="year" value="1" onclick="yr1()" disabled><label id="hw1">1<sup>st</sup> Year</label></li>
                        <li><input type="checkbox" id="nd" name="year" value="2" onclick="yr2()" disabled><label id="hw2">2<sup>nd</sup> Year</label></li>
                        <li><input type="checkbox" id="rd" name="year" value="3" onclick="yr3()" disabled><label id="hw3">3<sup>rd</sup> Year</label></li>
                    </ul>
			</div>
			<div id="a5" class="type1">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="hn" value="H" onclick="tp1()" disabled><label id="wh1">Honours</label></li>
                        <li><input type="checkbox" id="gn" value="G" onclick="tp2()" disabled><label id="wh2">General</label></li>
                    </ul>
			</div>
			<div id="a4" class="numbr1">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="all" value="A" onclick="nbr1()" disabled>All</li>
                        <li><input type="checkbox" id="fst" value="F" onclick="nbr2()" disabled>First</li>
                        <li><input type="checkbox" id="lst" value="L" onclick="nbr3()" disabled>Last</li>
                    </ul>
					<input type="number" id="prnm1" value="" class="prm1" oninput="sc_f_l()" disabled>
			</div>
        </div>
        <div class="arts" style="float: center; padding-right: 10px">
           <input type="checkbox" id="ba" name="stream" value="B.A." onclick="exam_type2()" disabled>Arts<br>
                <ul>
                    <input type="radio" name="subject" value="HISA" onclick="sc8()" disabled><label id="sz7">History</label><br>
                    <input type="radio" name="subject" value="PHIA" onclick="sc9()" disabled><label id="rz3" class="s3">Philosophy</label><br>
                    <input type="radio" name="subject" value="SANA" onclick="sc10()" disabled><label id="rz4" class="s4">Sanskrit</label><br>
                    <input type="radio" name="subject" value="BNGA" onclick="sc11()" disabled><label id="rz5" class="s5">Bengali</label><br>
                    <input type="radio" name="subject" value="PLSA" onclick="sc12()" disabled><label id="sz8">Political Science</label><br>
                    <input type="radio" name="subject" value="ENGA" onclick="sc13()" disabled><label id="sz9">English</label><br><br>
                </ul>
			<div id="a1" class="year2">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="stt" name="year" value="1" onclick="yr11()" disabled><label id="hww1">1<sup>st</sup> Year</label></li>
                        <li><input type="checkbox" id="ndd" name="year" value="2" onclick="yr21()" disabled><label id="hww2">2<sup>nd</sup> Year</label></li>
                        <li><input type="checkbox" id="rdd" name="year" value="3" onclick="yr31()" disabled><label id="hww3">3<sup>rd</sup> Year</label></li>
                    </ul>
			</div>
			<div id="a6" class="type2">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="hn1" value="H" onclick="tp11()" disabled><label id="whh1">Honours</label></li>
                        <li><input type="checkbox" id="gn1" value="G" onclick="tp21()" disabled><label id="whh2">General</label></li>
                    </ul>
			</div>
			<div id="a3" class="numbr2">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="alll" value="A" onclick="nbr11()" disabled>All</li>
                        <li><input type="checkbox" id="fstt" value="F" onclick="nbr21()" disabled>First</li>
                        <li><input type="checkbox" id="lstt" value="L" onclick="nbr31()" disabled>Last</li>
                    </ul>
					<input type="number" id="prnm" value="" class="prm" oninput="arts_f_l()" disabled>
			</div>
        </div>
		<!--<div class="compulsory">
			<input type="checkbox" id="cmp" onclick="exam_type3()" disabled><label id="cmps">Compulsory Subjects</label>
			<ul>
				<input type="radio" name="subject" value="SPSH" onclick="sc14()" disabled><label id="sph">Spiritual Heritage</label><br>
				<input type="radio" name="subject" value="ENGL" onclick="sc15()" disabled><label id="sz10">English</label><br>
				<input type="radio" name="subject" value="ANGL" onclick="sc16()" disabled><label id="sz11">Alternative English</label><br>
				<input type="radio" name="subject" value="BENL" onclick="sc17()" disabled><label id="sz12">Bengali</label><br>
				<input type="radio" name="subject" value="ENVS" onclick="sc18()" disabled><label id="sz13">Enviourmental Science</label>
			</ul>
		</div>-->
		<div class="passing1" style="padding-right: 10px; padding-left: 10px; float: right">
			<div class="sub_added">
				<h3 class="subj" style="border-style: double; width: 30%">&nbsp&nbsp Subjects Added</h3>
				<input type="text" id="sb11" name="sub11" placeholder="subject 1"><br><br>
				<input type="text" id="sb21" name="sub21" placeholder="subject 2"><br><br>
				<input type="text" id="sb31" name="sub31" placeholder="subject 3"><br><br>
				<!--<input type="text" id="sb41" name="sub41" placeholder="subject 4"><br><br>-->
				<button type="button" id="add" onclick="addd()" class="addi">Add Subject</button>
			</div>
        </div><br><input type="submit" name="Submit" value="Submit" class="sb" onclick="submitted()">
        </div>
        <!--<div id="a1" class="year2" style="border-style: dashed">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="stt" name="year" value="1" onclick="yr11()" disabled><label id="hww1">1<sup>st</sup> Year</label></li>
                        <li><input type="checkbox" id="ndd" name="year" value="2" onclick="yr21()" disabled><label id="hww2">2<sup>nd</sup> Year</label></li>
                        <li><input type="checkbox" id="rdd" name="year" value="3" onclick="yr31()" disabled><label id="hww3">3<sup>rd</sup> Year</label></li>
                    </ul>
        </div>-->
        <!--<div id="a2" class="year1" style="border-style: double">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="st" name="year" value="1" onclick="yr1()" disabled><label id="hw1">1<sup>st</sup> Year</label></li>
                        <li><input type="checkbox" id="nd" name="year" value="2" onclick="yr2()" disabled><label id="hw2">2<sup>nd</sup> Year</label></li>
                        <li><input type="checkbox" id="rd" name="year" value="3" onclick="yr3()" disabled><label id="hw3">3<sup>rd</sup> Year</label></li>
                    </ul>
        </div>-->
        <!--<div id="a3" class="numbr2" style="border-style: dotted solid">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="alll" value="A" onclick="nbr11()" disabled>All</li>
                        <li><input type="checkbox" id="fstt" value="F" onclick="nbr21()" disabled>First</li>
                        <li><input type="checkbox" id="lstt" value="L" onclick="nbr31()" disabled>Last</li>
                    </ul> 
        </div>-->
        <!--<div id="a4" class="numbr1" style="border-style: dotted solid">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="all" value="A" onclick="nbr1()" disabled>All</li>
                        <li><input type="checkbox" id="fst" value="F" onclick="nbr2()" disabled>First</li>
                        <li><input type="checkbox" id="lst" value="L" onclick="nbr3()" disabled>Last</li>
                    </ul> 
        </div>-->
        <!--<div id="a5" class="type1" style="border-style: solid">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="hn" value="H" onclick="tp1()" disabled><label id="wh1">Honours</label></li>
                        <li><input type="checkbox" id="gn" value="G" onclick="tp2()" disabled><label id="wh2">General</label></li>
                    </ul>
        </div>-->
        <!--<div id="a6" class="type2" style="border-style: solid">
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" id="hn1" value="H" onclick="tp11()" disabled><label id="whh1">Honours</label></li>
                        <li><input type="checkbox" id="gn1" value="G" onclick="tp21()" disabled><label id="whh2">General</label></li>
                    </ul>
        </div>-->
		<!--<input type="submit" name="Submit" value="Submit" class="sb" onclick="submitted()">-->
        <p id="demo" style="display: none">demo</p>
        <p id="demoo" style="display: none">demoo</p>
        <div class="passing" style="border-style: solid; display: none">
        <input type="text" id="sb1" name="sub1" value=""><br><br>
        <input type="text" id="sb2" name="sub2" value=""><br><br>
        <input type="text" id="sb3" name="sub3" value=""><br><br>
        <input type="text" id="sb4" name="sub4" value=""><br><br>
        <input type="text" id="sb51" name="sb51" value=""><br><br>
        </div>
        
        
    </form>
</body>
</html>