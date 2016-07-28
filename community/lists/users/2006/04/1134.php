<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 09:56:39 2006" -->
<!-- isoreceived="20060425135639" -->
<!-- sent="Tue, 25 Apr 2006 09:56:27 -0400" -->
<!-- isosent="20060425135627" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] f90 module files compile a lot faster" -->
<!-- id="ADB3881E-0CA3-4E58-ABA0-69BE5EC81FE5_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 09:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange thing, with the latest g95 and the last OpenMPI 1.1 (a3r9704)  
<br>
[on OS X 10.4.6] there does not seem to be the compilation penalty  
<br>
for using &quot;USE MPI&quot; instead of &quot;include mpi.h&quot; that there used to be.
<br>
<p>My test programs compile almost instantly.
<br>
<p><p>However, I'm still seeing:
<br>
<p>[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[a.b.c.d:20221] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
<p>as well as the other bug I reported a couple minutes ago.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe reply:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
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
