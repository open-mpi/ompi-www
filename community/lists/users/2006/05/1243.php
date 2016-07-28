<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 16 16:54:25 2006" -->
<!-- isoreceived="20060516205425" -->
<!-- sent="Tue, 16 May 2006 16:53:20 -0400" -->
<!-- isosent="20060516205320" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] tm interface" -->
<!-- id="43285985-0D25-4E7A-82E3-7A9408D7D39D_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-16 16:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Previous message:</strong> <a href="1242.php">Ali Eghlima: "[OMPI users] Release date for V1.1 or V1.0.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Maybe reply:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Reply:</strong> <a href="1249.php">Brock Palen: "Re: [OMPI users] tm interface"</a>
<li><strong>Maybe reply:</strong> <a href="1254.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the status of updating OMPI for use with the new  
<br>
torque-2.1.0p0 ?  Their libs were redone,  you can edit the configure  
<br>
script to replace all the -lpbs with -ltorque  and ompi will build  
<br>
but when you try to run a job under tm you get this error.  This was  
<br>
under OSX server 10.3.x
<br>
<p>[aon038.engin.umich.edu:02438] pls:tm: start_procs returned error -13
<br>
[aon038.engin.umich.edu:02438] [0,0,0] ORTE_ERROR_LOG: Not found in  
<br>
file rmgr_urm.c at line 177
<br>
[aon038.engin.umich.edu:02438] [0,0,0] ORTE_ERROR_LOG: Not found in  
<br>
file rmgr_urm.c at line 365
<br>
[aon038.engin.umich.edu:02438] mpirun: spawn failed with errno=-13
<br>
<p>Brock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Previous message:</strong> <a href="1242.php">Ali Eghlima: "[OMPI users] Release date for V1.1 or V1.0.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Maybe reply:</strong> <a href="1244.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Reply:</strong> <a href="1249.php">Brock Palen: "Re: [OMPI users] tm interface"</a>
<li><strong>Maybe reply:</strong> <a href="1254.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
