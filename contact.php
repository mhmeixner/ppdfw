<?php include('common/header.php'); ?>
	

	<div class="centered-wrapper">	

		<div class="contact-map">
			<iframe width="950" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=pronto+plumbing+3761+Dunhaven+Rd++Dallas,+TX+75220&amp;aq=&amp;sll=32.87218,-96.853387&amp;sspn=0.010218,0.021136&amp;t=m&amp;g=3761+Dunhaven+Rd++Dallas,+TX+75220&amp;ie=UTF8&amp;hq=pronto+plumbing&amp;hnear=3761+Dunhaven+Rd,+Dallas,+Texas+75220&amp;ll=32.871618,-96.853369&amp;spn=0.010218,0.021136&amp;z=14&amp;iwloc=A&amp;cid=353930938333923434&amp;output=embed"></iframe>
		</div>
	
		<div class="one-fourth">
			<aside>
				<h6>OUR OFFICE:</h6>
				<p>3761 Dunhaven Rd,<br />
					Dallas, TX 75220<br />
					www.prontoplumbingdfw.com<br />
				</p>
				
			  <div class="contact-info">
				<h6>CONTACT INFO:</h6>
				<p><span>Phone:</span>  (972) 989-5880</p>
				  <p><span>Email:</span> <a href="mailto:stoverney@yahoo.com">stoverney@yahoo.com</a> </p>
				</div>
			</aside><!--end aside-->		
		</div><!--end one-fourth-->
		
		<div class="three-fourth column-last">
			<h6>PLEASE FILL IN THE FORM TO GET IN TOUCH WITH US:</h6>
			<div id="contactform" style="background-color:#c3c3c3; padding:5px;">
				<div id="message"></div>
				<form method="post" action="php/contact.php" name="cform" id="cform">
					<fieldset class="percent-one-third">
						<label>Name <span>*</span></label>
						<input id="name" type="text" name="name"/>
					</fieldset>
					<fieldset class="percent-one-third">
						<label>Email <span>*</span></label>
						<input type="text" name="email" id="email"/>
					</fieldset>
					<fieldset class="percent-one-third column-last">
						<label>Subject <span>*</span></label>
						<input type="text" name="subject" id="subject" />
					</fieldset>
					<fieldset class="clear">
						<label>Your Message <span>*</span></label>
						<textarea name="comments" id="comments"></textarea>
					</fieldset>
					<fieldset>
						<input type="submit" name="send" value="Send Message" id="submit" class="button blue"/>
					</fieldset>
				</form>		
			</div><!--end contactform-->
		</div><!--three-fourth-->				
		
		<div class="clear"></div>
	</div><!--end centered-wrapper-->
	
</div>
<?php include('common/footer.php'); ?>