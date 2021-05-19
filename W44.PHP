<!DOCTYPE html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> 
        <!-- <link rel="stylesheet" href="C:\xampp\htdocs\W4CSS.CSS">  -->
        <meta name="viewport" content="width=device-width, initial=scale=1.0">
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            .wrapper {
                position: relative;
                width: 100%;
                height: 76vh;
                background-size: cover;
                background-position: center center; 
                background-image:linear-gradient(#a4f542,#42b6f5,#c842f5,#f5428d);
            }


            .container{
                width:400px;
                height:460px;
                background-color:white;
                border: 3px solid black;
                border-radius: 5px;
                position: absolute;
                top: 10vh;
                left:35%;
                color:black;
                font-weight:700;
            }
            @media (max-width: 990px){
                .container{
                    left:250px;
                }
            } 
            @media (max-width: 770px){
                .container{
                    left:20px;
                }
            } 

            .content{
                padding:5%;
            }

            h3{
                margin:0 0 20px 0;
            } 

            #username, #password, #Amount{
                width:100%;
                line-height: 35px;
                margin-bottom: 15px;
                border: 1px solid black;
            }

            label{
                cursor: pointer;
            }

            #login{
                margin: 30px 0;
                cursor: pointer;
                background-color: #1E88E5;
                border-radius: 10px;
                border: 1px solid #1E88E5;
                width:50%;
                margin-left:23%;
                height: 50px;
                color: white;
                text-transform: uppercase;
            }

            @media (hover:hover){
                #login:hover{
                    background-color:darkblue;
                }
            } 


            .btn:hover {
                background-color: yellow;
                color:black;
                border: 1px solid #db7598;
                } 


        </style>
        <title>TSF BANK</title>
    </head>
    <body>
        <!-- navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
              <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to go to all options page" onclick="location.href='W2.PHP'">All Options</button>
              <button type="button" class="btn btn-success btn-lg m-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to go to all customers" onclick="location.href='W3.PHP'">All Customers</button>
              <marquee  onmouseover="this.stop();" onmouseout="this.start();" style='font-size:30px;font-family:Lucida Console;' ><i class="fas fa-skull-crossbones"></i> <i> Beware of <b>frauds</b> & be wise customers!!!</i> </marquee>
              <a class="navbar-brand" href="index.PHP"><img data-bs-toggle="tooltip" data-bs-placement="right" title="Click to go to homepage" onclick="location.href=''" style='width:150px;height:80px;' src="data:image/png;base64,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" alt=""></a>              
            </div>
        </nav>
        <!-- navbar ends -->

        <!-- hero image start -->
        <div class="wrapper">
            <div class="container">
                <div class="content">
                    <h3>Money Transfer</h3>
                    <form action="W5.PHP" method="post" class="form-inline" >
                        <div class="mb-3">
                            <label for="username" class="form-label" >Transfer From</label>
                            <select name="Cfrom" class="form-select" id="username" aria-label="Default select example"  >
                                <option selected hidden value="">Choose your customer id</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="Amount" class="form-label">Amount</label>
                        <input name="Amount" type="number" class="form-control" id="Amount" placeholder="Enter amount to be transferred">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" >Transfer To</label>
                            <select name="Cto" class="form-select" id="password" aria-label="Default select example"  >
                                <option selected hidden value="">Choose receiver's customer id</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    
                        <button type="submit" class="btn btn-primary"  id="login">Transfer</button>
                        
                    </form>
                </div>
            </div>
        </div>
              

        <!-- hero image ends -->

        <!-- footer starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <div class="col-md-8 " ><footer style='color:white;margin-left:60%;'><i> <span>&#169;</span>TSF BANK (Estd:May 2021) <br>Contact: Mounil Garg (mounilgarg@gmail.com)</i></footer></div>
            </div>
        </nav>
        <!-- footer ends -->        

        <!-- piggy bank -->
        <!-- https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVqjZ8Nwdoj_gQ5H1BoBVmDFizpwagE3m58Q&usqp=CAU -->


        <!-- TSF LOGO 2 -->
        <!-- data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADgCAMAAADCMfHtAAAB11BMVEX///8AAAABBf6s/QL7/AD+AAL/aAEAAP8XFxfV1dVJSUmfn5/09PRSUlLk5OT/ZQD/XgCKiopubm4ySQDq6uql9ADCwsL5+fmo/QDb29uYmJjPz8+6urr/WwDFxcWz/wKurq6Ojo57e3uoqKgrPwGCgoJlZWUzMzMkJCRzc3NPT09aWlo5OTlFRUUjIyP/7OI1NTUZGRn+0br/9e38qwHr7P/8//eg7BteiqS7/UD/4tX+tZH/gjb+6d7/sIf/lmX/hkv/wKH/cBL+1sf/dS79/6D9yJn+/+X8/YX76QD+/sr8/Wb+lJP+/rD8/EP+UAL+oKD9jAP+IyP7yAD8/X3+s7P+/sf8/V377gH8/Dn/wcH+Pj782wH+U1T9/Zj+0dL9YGH9cHD/5OP9g4J3d9rl5zFydP9ZXMyztXn9PAOQkv5wc7TLz0y1t/4AAOzT1P5RUtKsrIBqa77CxGSJjKMvMP4+QNtDRv28vnBgY/18f6zU1jyeoZHCw/9repzflABVVf2T3ETmawKDhP7NsQGhov5yqIa34wK90QJGab+Gxl7fgwHFvgLTpALF2zjD/lrM/nnV/pLk/rpGZQE7Pf8gLwIhNNyZmv3l/77K/nCLtZj/k13/qnSmcVIkAAARRklEQVR4nO2d+X/jRhnGpRx2HCu+0NqRLTuyjY/ETnbX7qY0h+04KUsXSmgLpUApBUov6LYFdilHaaHbchXKUc7kj2U0I9kaaUaaieSVko+fX9rsSvZ89b4zz8w7o40gzDXXXHPNNddcc80111zR1+OfD7sFM9XtLyw9sVwIuxWz050vLi0tPbL8pbDbMSs9+eUlXafLVzOIuy8sIT2/vLz8lbBbE7xgeiI9BQifvmpBfPbrS1Mt6/pa2E0KVI8vWfUMJHw67EYFp9tfXcKVXr5SQcTSE+o5BHhFgvjkN+x8uhka+mbYrfMtMHkh6dQk/FbYDfQpiztgen55+UoE0Zi8EPTUlPDbYbfywppMXkhatug7Ybf0YrpNSU+kZ6yElzKITnfAFVu+1EHcfZzgDvQkXV5+MewW88kxeSHoEZxw+XthN5pDdzzSE+k1G+F3w242q3bp7oDp+WW7LkcQd8mTF4KechB+P+zGM4g2eWFJ0ssQxGfZ0hPpGSdgxIO4+4KnO2AaEwijXJNyn7yQRAKMcmHxpeIP+ADtZhj5IL4cX3jlVR5CwjijK7qFxdfjQHd/+CNWQKcZIkW3sPhGfGFhQYdkzFanGUY9iG/qhAjyrbcZBlVKkka4JvVm3ECEgfzxTzwASWZoKKqFxVsLJqEB+VPXbCWaYcSDeM9CiCDvv02FfI4OGN2a1M9wQgi58NI7ZEKKGSJFtbD4cwchDOS9X/ySZ5yJchBfJxAakL+yZyvNDA1FtCb1BpkQQb7yznNWQqoZGopmTepdKiEaW63THQ/AiAbxTRdCI1vN6Y6LGUY5iLfcCRHkW6/q052YJ+GLYdMQFfdE1CHBdOcJT8CIljPuMhDCQP76PW/CSBYW32ciBIi/WV//+LeXMYgfMBLe31hcXF+/9qDsShjFmtSHjIQfAUKdcf13rtkawSDSLR9P0muLhgDk7+nZGsEgehiiSfiHjcWp1tcXH2QoiNErZ3gbIiT84yIukK1/Jk7EI1hYXGAxxHvXFu3Ss/VPlyKI91gIP7fhIESQHzuW/dGrSTEYIjBDEqCZracYYfQKiwyGGL9PAzQMBMvWyNWkKGtgjPAjYpJi2To1kMjVpLwt32KGLpDXHpxGNIjehoiboVu2vvdaFIPIsEK0myEdchFOdyJWk7rlZYjxu4yABuSD04gVFgtehkgxQxfIv/TDhsLlYYguZkghfGw3bCSbSEVhK+FbnICfhA3kkIfle5mhHfCvYfM45W6I8YVHuQD/FjYOQe+6h5DJDCMN6GH5zGYIAf8eNgxRroYYv8sewvXF/4TNQlbBlZDdDNcX74SNQpOb5bOb4fq122GDUOXcB54CMpth9HzeopddCFnNMII+bxHdEJnNcP2/YUO4ymUfmNEML2KDBUlKKUpKlqTZF3bolm+Y4YaXOG1QrlRzXXGidqdWV2aKSV0DGyvDjX98xkOrZMmkb0sVV0WCWpslr3auUb6GJAm/lUqIzHDjs6QmMYhAWNqiX97W3AlXOL7aRkiz/DgaZ4IjTBDDZ2F0jaMPwk8ph2rubwRLWPW+pTEbQoohmmYYEKHkEUCkrZkQkovCEzMMhjDFeNMN6qjqg5Bs+RMzDIRQvsl619oMCMkHoyYrw0AIt9lvo/VFH4S3iID3FgMkrPLcRxlR/RCSYjhdGQZAyNoJkVYCJySugacrw41/8oFNNCWsOf+yk9VKiqJU6g1nAmtBE5JWiPF/TSfd1wi6U7J+YBHMo52afoGjBUVrE+Sq7W/bnoRbpO8jfjUSwRA9Voa3hYS1SUlyXplSbQRNuyNIHfyCihchdcClyFkUji+47BnCggUPoS1JSYMlfslm0IT/dhK6rAxRwYKHsIs1nzxtwaLYdqSZT0LnGtilTLr+CazI8BDibp8gXiNh1ygBEzqKwvFPqUlqFiw4CPHGtyjTsob1onrAhLfs52jpZdLJzgsHoYwR0hqnWC8idVVfhLZztPQ9w2lF5sKE1NWD9aJOwIT2FaK5MnQCTisyHIQFzKtXSKOIrlJ+KtLEzRehbR+YaoaWjQmekaaNBZFodgzyRYhbPvUAjXVjgocQL850eVtnyBchvgYmm+H6IrYxwUNYxAjFJm/zkHwR4oZINMP1x/CdFx7CBE4odsmW6CFfhNgaeLoyxABtOy88hM6Z92aKt4k+CTHLJ5mhc+eFizDpQBQ7Km8jfRFaLZ9khoSdFy5C22hqKEuam9Hli9BaFCbsGZJ2XvgISyJRWxrNHAnyR2jZB3aaIXFriY+QlKdQK977Fab8EU4PRjlXhuQTFpyEdsewqJ1kC6SVcCdHV5M4Uk8N0WmG5BMWvISCRkUEDllh2F1jrtMQx7BpUdhmhtQTFtyEgtJyaVWr6ukfzIR50t0Ty7edJrVNZHwR2paADnU8eqQ/wokh4mbocsLiIoRCqkNrFVTLdVLuj7Aw+SdArGZoFCyCIwS2sebauDUXi/RHaL4ti5mh6xGSCxKCG3OuzavOitAwRKsZuh8VvTChIEjJHZf2dYnb//4JkSFaD9B4HCHxQQhUarq00O/ODJkQFYUtZuh1ktIfoSDIdfqGG7mJPglRUXhqhuteJyn9EuofsUlrIzGK/hzf+BejzNOkDCcpAyAE0rrkRpL6opVwNeUi8iQQGqJphnSfD5oQzHQapNgEXk009oENM2QBDIwQDK0qoUcSvN8vITBEwwzZjooGRwhUcjASCnI+CQufxg0zZDwqGighYeXhnNz4JBTej8fv6mbIelQ0YEJ82wKo6LjCL+HLcWiGzEdFgya0lxyd2xt+CT+I62bIfhaWnbAgW+RyHb4N3Hasif0SfqiXSTleCWEnzFuvdFkD2oLoWBH7JXwTmKHnRIbWHldCrIeRZ1RQMm6MjqHGP+GjXK+EsBNix4VIm7uGCvj8JnDCW/c3uF4JYSeUrNv4pMmKqVkT/o/vnReOsRTbXKNXDiV81Rh4P+QVByE2SNLX8PhIs+IYdn0Q9gfj2NkR5+vJHIQVrOnUnTW8SuWctvkgPC+n0+lMeo/rJp59fDw4lGKTrSiec1zgg3A/EwPKnHPdxDOnsa10iSvUrOh1kQ/CI0iYPuO6iYfQPudcc2Rq3rH95hyR/BPOLoaCoxDcqpZkc1ompZLO7UXCXr9vwswR101chMQzwt1OM7e5mesQd08JndUHYQ8Slo+5buJbW9D31sgiHb/0TZjhu4lz9eS+YWHXTsCnLyFhesR3EydhgZiLNHlWEy9CyNkNuVfA7K+U0AqefkeazHW+m7jX+BKlNMoK6JeQN0kvUsUgvJNA0A5tWueTMLPPd8+F6jT2M/skbVIXH34J+WalF6xESe773KK47VLl8DcvTR/w3XLhWpuUdRlxyOdETFmvXOVrLCDkTlJBbmQnavAcii1UNkmHMlo51eNYTXX6hVnO8uV+mj9JfamQUqu5bTPrWp1GMS/P9HX1QTo9nuXnh69hOjMIuw2z1Vm6/FCT9OFrdNWTVDi46kkqHFz1JBXGJ+5DdUpNVpNqXatLCepcQlFVjwP4W6TDh3K2ubq63Wo6dwudWsMrqPI2rAPUXfYJJop5VGjyxWJdrOa1ZCpJeQlZFVvZZK3pZtkp4rsyJbGit7vA4IYFW6VVRh9YZXk4aYb6Bfo4raV/NHJnZbPRMJ5q8iZ8nJIgVdWqZkwtJbWupCRBTSi1ZkMDLDCGCf3eRHKrhgoxpem5EkVNlsAjUjT9B7SAkpNZ8ytkWUHr4lKylEKfJJb07ciaTijn66qRIko1W3Q8r5h3uVtCH19pC3Ktu6YfPUuKmpQ3FuOTNbkqFjV1rS3Dtnezte6O0FhpqUpptabA4lJjRxIKnXZSyaK3mRMmodTdyldq4ClU4UMUE6WWpO4UpeSK3lx1eyt3Q183yh2xUWuKCbnZuSl2t1frwnZNP7daL9XB5Li4KlTbqtx0VJNHnoDgKyGEuiKLGvhPB+SM/uxKqPa+Zm5GqCK6qiAU4U5hVZQNlIKepYWW/l5hdVv/GT2UupirNTvbqtCB5cOtImwx+DpFEdf064RWUl9Y6hnULYHHVi3o5VcN5LXRpLWcoMHHBPKrKG7rLUk5KnU9ZsKSuKqDJUTw2Jq5Wq5loDV3dsDMuQC+C/7YUgtoob4tKtm1yScoaPew2M0nEkboNLGqaZWKnEc5rK4IKxq8OF8SW/CaWhdcBD9srShswegkxdq0Sa2cgE41FMRS1Siztu3bPwz1Cwn1wwra9EqJ4JkXUop1dJQ1kJ0lFLBVbRU2RRFFrd41P2HH/GeV1Fquub0Fn7NqZGmjY1wkiYgwkTd2qWrbRnyFThKliNCFxxgkxN3JKsZndOoNo7u0bIR7DIQpk7CJfpKb1qK00fJcToVjLRj1YP8X1lZX6vkdk7CBnSCp5TDC1QlhHX6PagRcKLaMUQ6EqgIfYF1srsJrwQUpoQt6OHrSXTVppOdqFm/9PgNhCT0dNFzoWZpFjzMJx3pjk+FmrgT/tLMpJPXvqK0I7axq/AMJ4Fap2dVvL2rwYcHYam3z82Xjxx3QVVMtUSsZz6MmCiK8oSlWUjcF/eBDot42CEsrAuja6FlIolI1Y2jbEzhgIEyY/dAglOQbW5qabKGVaLZdrChqS5RUsaZld0DGFTrFfLslCe260TXRrZVuUwX/pyr54hY8s1Axd2CSLTVRz3bzoJMVG6K2VcwbhYPcTSG5U1HqrexWQ6jmKpsgokl9vBVu1JRWXWjnhNROsaRW12rCphHDlRrW+H7m0JuwUIcek0JWI9fAmF+vZpNmR0xp2VwuCcxPBH6I/rBU1NfslZRiLMeN/6oguEp2M1tBZKWGOUuQtUaxrv+gaMWUoGmFKsrfBHi0qUYTfFUROH4qWQcfn4JPJ99sauDp1vWyAWgLgEsY3UDFZz/Hp8HNSpM3A/uoADUoM7gFo8yUjJZGARKqUSTsxwJcHRY4Xid8aDouc25vXzrtZ9InYbdhthqmYwxri8us8cMuBz9s9cuxIIeaCOr4InuHl0oX2v+9VIInvvh3ni6R9KEUKOxmzFAH6Quch7pUGqMYXuEgIr6rbBgGYYzz/Owl0oRwfFWnbmY/vMBpjEuiUXoSxdGliWJht7DL/Os0BhPCWPqEoSQVgvrXD/f2jo/2B+fD4dnZaHRwcKLrYDQ6G54Pjo496r3obKmBmA7DFvvX9457vd4RQBicQwio8/3eYX/v6PzsIFYun56elsuZTNqpDFDsZDToUTH1tcVU5dFDCGMBMOlAoPFj0HqL0rGTg7PBUe/4EO8w/b1eb1+/GkLGHNJJy7HzHrmbjbA70pnhTBgB1eFxDyQabGdZf/IZIwJlPQZDEDKQbh6dCzyZwdlYv9NJqbc9NiTthPbKtuvSZ8HV3vp7x8dHg+HZ6ER//tM008HKmfHBEARs73qfa4jrX+8NTsoZMmR5SLhjZL82nUkPKQFn5QJJONCjhaKE9Zp0egwzcc/XyN3vDWOkUKZJhIekxM6UTwZHh8yN6Pdh39ofDEewaxlYRh+BYOOT0Zn3wMej4/MTRyTJL43Y89TMVtB5D85g/zi83sd7SB+O4GAMBOPFcDjSo4VhITI9F9PjkZGKgZFNVTgeZjJ4q8mHLnplYlJPmgme1Hh8YtF4bCagmYK2O/RONoKpOOtfBNTfT1sDSVtB7J1kCHgO2ImojyIGcnG43+sdPsxf4HU0njLSqxX7MfLg5I2NUvHgbAg7WTgTP8BoEtLnLP0j2ghMjKY53J8N9o+AP4c9o+0PjI6WcT0adHg0AoNoxpGH1gmS/reA6/zI73AftA4P0KtNnsvcw2MwExyBscQAAzeBQQZOckG09GE1UlxW7cMUZDUj3d8Mgf+N8O/9s+p4fOVPc/dHp3xviV5CHc3+9/DNNddcc80111xzzTXXXJj+D1n3banCSD8uAAAAAElFTkSuQmCC -->
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    
    
    </body>
</html>

