<?php
require ('header.php');
?>
  <section class="pro-content contact-content contact-content-page">
  <div class="container"> 
      
      <div class="row">
        <div class="col-12 col-lg-4">
          <ul class="contact-info more-info pl-0 mb-0">
              <li>
                <h2>Store</h2>
                <p>
                    <span>Hakimi Collection <br>Kuwait</span>
                    
                </p>
              </li>
              <li>
                <h2>Editorial Inquiries</h2>
                  <span>+91 96608 77053</span>
              </li>
              <li>
                <h2>General Customer Inquiries</h2>
                <span>+965 9786 5291<br>sales@hakimicollection.com</span>
              </li>
              
          
            </ul>         
            <div class="pro-socials">
                <h4>
                    Follow Us
                </h4>
                <ul>
                  <li><a href="mailto:hamzajohar52@gmail.com" class="fab tw fa-google"></a></li>
                          <li><a href="https://api.whatsapp.com/send?phone=+96597865291" class="fab sk fa-whatsapp"></a></li>
                          <li><a href="https://www.instagram.com/iconichomehardware/" class="fab ig fa-instagram"></a></li>
                </ul>
            </div>
        
        </div>
          <div class="col-12 col-lg-8">
              <div class="row">
                  <div class="pro-heading-title">
                      <h1>
                          Contact
                      </h1>
                    </div>
              </div>
              <form action="contact.php" id="theForm" method="POST">
                  <div class="form-group row">
                      
                    <div class="col-sm-6">
                      <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                  </div>
                  <div class="form-group row">
                    
                      <div class="col-sm-6">
                          <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                          </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-12">
                      <textarea class="form-control" name="msg" placeholder="Message" rows="5" cols="56"></textarea>
                      </div>
                  </div>
          
              
                  <button type="submit" class="btn btn-secondary swipe-to-top" name="submit">Send</button>
                  
                  <div id="alert-box" class="alert alert-success alert-dismissible" role="alert">
                      <div id="alert-msg"></div>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
              </form>
          </div> 
          
          
        </div>
    
  </div>      
  </section>



<?php
require ('footer.php');
?>
