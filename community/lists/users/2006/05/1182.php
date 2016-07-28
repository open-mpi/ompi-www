<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 19:16:43 2006" -->
<!-- isoreceived="20060501231643" -->
<!-- sent="Mon, 1 May 2006 17:16:19 -0600" -->
<!-- isosent="20060501231619" -->
<!-- name="Jeffrey Fox" -->
<!-- email="jfox_at_[hidden]" -->
<!-- subject="[OMPI users] fortran flags using Absoft compilers" -->
<!-- id="89DCB91F-A73C-4E13-9716-35BD3278D92F_at_euclid.colorado.edu" -->
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
<strong>From:</strong> Jeffrey Fox (<em>jfox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 19:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Reply:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Reply:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get openmpi-1.0.2 to compile on a (small) G5 cluster. The C and C++  
<br>
compilers work fine so far, but the mpif77 and mpif90  scripts  send  
<br>
the wrong flags to the f77 and f90 compilers. I've attached the  
<br>
config.log , make.out,  the error
<br>
messages, and the environment variables.
<br>
for f77 I get :Error: bad option:  -Wl,--export-dynamic
<br>
and for f90 :
<br>
cf90-78 f90fe: ERROR in command line
<br>
&nbsp;&nbsp;&nbsp;-N option has an illegal argument &quot;l,--export-dynamic&quot;.
<br>
f90fe-912: 1 Errors found in command line.  Compilation aborted.
<br>
<p>I feel I am soooo close. :-)
<br>
<p><p>



<br><p>
<p><p><p><p><p>Jeffrey S Fox
<br>
Professor
<br>
Department of Mathematics
<br>
The Center for Neuroscience
<br>
Mathematics, 235
<br>
303 492 6418
<br>
jfox_at_[hidden]
<br>
<p><p><p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1182/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1182/fortranFlags.gz">fortranFlags.gz</a>
</ul>
<!-- attachment="fortranFlags.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1182/make.out.gz">make.out.gz</a>
</ul>
<!-- attachment="make.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Reply:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Reply:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
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
