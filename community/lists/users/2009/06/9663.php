<?
$subject_val = "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 16:14:10 2009" -->
<!-- isoreceived="20090622201410" -->
<!-- sent="Mon, 22 Jun 2009 21:14:04 +0100" -->
<!-- isosent="20090622201404" -->
<!-- name="Si Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0" -->
<!-- id="1421239C-BD10-4C29-9433-222EF65474BC_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0<br>
<strong>From:</strong> Si Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 16:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Previous message:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Reply:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>Another little mystery for you all!
<br>
<p>I have a relatively small MPI Fortran code which I can compile  
<br>
successfully with Intel and PGI compiled OpenMPI 1.3.0 (and 1.2.5). No  
<br>
problems with this.
<br>
<p>On a separate machine I have a GNU Gfortran 4.3 OpenMPI 1.3.0  
<br>
installation and I get these errors immediately after the code starts  
<br>
running:
<br>
<p>*** An error occurred in MPI_Comm_f2c
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[***:19386] Abort before MPI_INIT completed successfully; not able to  
<br>
guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Comm_f2c
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[***:13269] Abort before MPI_INIT completed successfully; not able to  
<br>
guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Comm_f2c
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
&lt;etc&gt;
<br>
<p><p>So, it looks like there might be a bug with GFortran or do you think  
<br>
this is OpenMPI?
<br>
<p>Any help you have would be appreciated, I can't seem to find much on  
<br>
this using Google.
<br>
<p><p><p><p>Si Hammond
<br>
<p>Performance Modelling, Analysis and Optimisation Team
<br>
High Performance Systems Group
<br>
Department of Computer Science
<br>
University of Warwick, CV4 7AL, UK
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Previous message:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Reply:</strong> <a href="9664.php">Jeff Squyres: "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
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
