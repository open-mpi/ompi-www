<?
$subject_val = "[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 14:16:52 2009" -->
<!-- isoreceived="20090406181652" -->
<!-- sent="Mon, 06 Apr 2009 12:16:18 -0600" -->
<!-- isosent="20090406181618" -->
<!-- name="Scott Collis" -->
<!-- email="sscollis_at_[hidden]" -->
<!-- subject="[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1" -->
<!-- id="B20E6603-EB8C-408F-83EF-B018D8A73660_at_me.com" -->
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
<strong>Subject:</strong> [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1<br>
<strong>From:</strong> Scott Collis (<em>sscollis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 14:16:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Maybe reply:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been a user of MPI-IO for 4+ years and have a code that has run  
<br>
correctly with MPICH, MPICH2, and OpenMPI 1.2.*
<br>
<p>I recently upgraded to OpenMPI 1.3.1 and immediately noticed that my  
<br>
MPI-IO generated output files are corrupted.  I have not yet had a  
<br>
chance to debug this in detail, but it appears that  
<br>
MPI_File_write_all() commands are not placing information correctly on  
<br>
their file_view when running with more than 1 processor (everything is  
<br>
okay with -np 1).
<br>
<p>Note that I have observed the same incorrect behavior on both Linux  
<br>
and OS-X.  I have also gone back and made sure that the same code  
<br>
works with MPICH, MPICH2, and OpenMPI 1.2.* so I'm fairly confident  
<br>
that something has been changed or broken as of OpenMPI 1.3.*.  Just  
<br>
today, I checked out the SVN repository version of OpenMPI and built  
<br>
and tested my code with that and the results are incorrect just as for  
<br>
the 1.3.1 tarball.
<br>
<p>While I plan to continue to debug this and will try to put together a  
<br>
small test that demonstrates the issue, I thought that I would first  
<br>
send out this message to see if this might trigger a thought within  
<br>
the OpenMPI development team as to where this issue might be.
<br>
<p>Please let me know if you have any ideas as I would very much  
<br>
appreciate it!
<br>
<p>Thanks in advance,
<br>
<p>Scott
<br>
<pre>
--
Scott Collis
sscollis_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Maybe reply:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
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
