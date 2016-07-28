<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 03:45:40 2007" -->
<!-- isoreceived="20070512074540" -->
<!-- sent="Sat, 12 May 2007 03:45:36 -0400" -->
<!-- isosent="20070512074536" -->
<!-- name="anyi li" -->
<!-- email="anyili0928_at_[hidden]" -->
<!-- subject="[OMPI users] errors in stdin" -->
<!-- id="6762adfa0705120045n265d0ceh3d4182c0694b707d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> anyi li (<em>anyili0928_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 03:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Previous message:</strong> <a href="3247.php">Brock Palen: "[OMPI users] torque, and mpiBlast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Reply:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;I am currently running the code by using
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4  abc.exe &lt; test.in&gt;out
<br>
<p>&nbsp;&nbsp;&nbsp;abc.exe is my executed file, I list my input values in test.in as
<br>
<p>&nbsp;&nbsp;&nbsp;AAA value1
<br>
&nbsp;&nbsp;&nbsp;BBB value2
<br>
<p>&nbsp;&nbsp;&nbsp;I run the same code by using intel mpi, it's fine, it can read
<br>
parameters from stdin. But when I use open mpi, it's incorrect. It
<br>
seems openmpi just put some strange character into the stdin, so my
<br>
code dosen't accept that parameters and it stops.
<br>
&nbsp;&nbsp;Dose anyone has this kind of problems.
<br>
&nbsp;&nbsp;thanks
<br>
<p>brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Previous message:</strong> <a href="3247.php">Brock Palen: "[OMPI users] torque, and mpiBlast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Reply:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
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
