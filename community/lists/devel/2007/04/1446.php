<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 12:45:44 2007" -->
<!-- isoreceived="20070419164544" -->
<!-- sent="Thu, 19 Apr 2007 13:45:07 -0400 (EDT)" -->
<!-- isosent="20070419174507" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="[OMPI devel] Need help for semaphore in BML" -->
<!-- id="3165.69.180.16.130.1177004707.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:pooja_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Need%20help%20for%20semaphore%20in%20BML"><em>pooja_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-19 13:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1447.php">Aurelien Bouteiller: "[OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1445.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Reply:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to put semaphore in bml.h--- mca_bml_send before and after calling
<br>
btl_send.
<br>
SO that when a process call btl_send it first lock a global variable X and
<br>
then proceeds.Also if an external Tcp function wants to send data it
<br>
should first lock global variable X and then proceed.
<br>
<p>Can anyone tell me only changing bml.h is enough or are there any other
<br>
files where I need to make changes.
<br>
(As I tried doing this and run mpi program it gave me ORTE time out error
<br>
also when I changed file back to normal it was not compiling and giving me
<br>
error in libmca_bml.la etc...unfortunately I deleted entire folder and
<br>
downloaded new version.)
<br>
<p>Can any one please help me and tell me how should I go about implementing
<br>
locks/semaphore  in bml layer so that all mpi process access lock(of same
<br>
priority ) and continue working while Tcp acquire only when network is
<br>
free(or there is lot of serial operation between 2 mpi sends).
<br>
<p><p>Thanks and Regards
<br>
Pooja
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1447.php">Aurelien Bouteiller: "[OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1445.php">George Bosilca: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>Reply:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
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
