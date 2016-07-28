<?
$subject_val = "[OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 16:44:09 2011" -->
<!-- isoreceived="20110425204409" -->
<!-- sent="Mon, 25 Apr 2011 16:44:04 -0400" -->
<!-- isosent="20110425204404" -->
<!-- name="Wei Hao" -->
<!-- email="whao_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..." -->
<!-- id="4DB5DD14.7040207_at_princeton.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes...<br>
<strong>From:</strong> Wei Hao (<em>whao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 16:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16343.php">Jeff Squyres: "Re: [OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>I'm running openmpi 1.2.8. I'm working on a project where one part 
<br>
involves communicating an integer, representing the number of data 
<br>
points I'm keeping track of, to all the processors. The line is simple:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allreduce(&amp;np,&amp;geo_N,1,MPI_INT,MPI_MAX,MPI_COMM_WORLD);
<br>
<p>where np and geo_N are integers, np is the result of a local 
<br>
calculation, and geo_N has been declared on all the processors. geo_N is 
<br>
nondecreasing. This line works the first time I call it (geo_N goes from 
<br>
0 to some other integer), but if I call it later in the program, I get 
<br>
the following error:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[woodhen-039:26189] *** An error occurred in MPI_Allreduce
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[woodhen-039:26189] *** on communicator MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[woodhen-039:26189] *** MPI_ERR_TRUNCATE: message truncated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[woodhen-039:26189] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>As I understand it, MPI_ERR_TRUNCATE means that the output buffer is too 
<br>
small, but I'm not sure where I've made a mistake. It's particularly 
<br>
frustrating because it seems to work fine the first time. Does anyone 
<br>
have any thoughts?
<br>
<p>Thanks
<br>
Wei
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16343.php">Jeff Squyres: "Re: [OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
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
