<?
$subject_val = "[OMPI users] Is this an OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 18:54:36 2009" -->
<!-- isoreceived="20090220235436" -->
<!-- sent="Fri, 20 Feb 2009 18:54:28 -0500" -->
<!-- isosent="20090220235428" -->
<!-- name="-Gim" -->
<!-- email="gimmickivek_at_[hidden]" -->
<!-- subject="[OMPI users] Is this an OpenMPI bug?" -->
<!-- id="fcfc36b90902201554r1265a60dhfed7b6e8ede5df2f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Is this an OpenMPI bug?<br>
<strong>From:</strong> -Gim (<em>gimmickivek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 18:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to use the mpi_bcast function in fortran.  I am using
<br>
open-mpi-v-1.2.7
<br>
<p>Say x is a real variable of size 100. np =100  I try to bcast this to all
<br>
the processors.
<br>
<p>I use call mpi_bcast(x,np,mpi_real,0,ierr)
<br>
<p>When I do this and try to print the value from the resultant processor,
<br>
exactly half the values gets broadcast.  In this case, I get 50 correct
<br>
values in the resultant processor and rest are junk.  Same happened when i
<br>
tried with np=20.. Exactly 10 values gets populated and rest are junk.!!
<br>
<p>ps: I am running this in a single processor. ( Just testing purposes ) I run
<br>
this with &quot;mpirun -np 4 &lt;filename&gt; &quot;
<br>
<p>Cheerio,
<br>
Gim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
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
