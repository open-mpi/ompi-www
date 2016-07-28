<?
$subject_val = "[OMPI users] valgrind problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 19:03:46 2009" -->
<!-- isoreceived="20090227000346" -->
<!-- sent="Thu, 26 Feb 2009 17:03:38 -0700" -->
<!-- isosent="20090227000338" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="[OMPI users] valgrind problems" -->
<!-- id="49A72DDA.8020307_at_cs.utah.edu" -->
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
<strong>Subject:</strong> [OMPI users] valgrind problems<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 19:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to use valgrind to check if we have any memory problems in 
<br>
our code when running with parallel processors.  However,  when I run 
<br>
using mpi and valgrind I crashes in various places.  For example some of 
<br>
the times it will crash with a segfault within MPI_Allgatherv despite 
<br>
the fact that all the arguments to the all gather on all processors is 
<br>
completely valid.   If we don't use valgrind the program runs just fine. 
<br>
<p>This is on a Debian(lenny) 64 bit machine using the stock mpi package.  
<br>
The command used to launch the job is: mpirun -np 8 valgrind -v 
<br>
--log-file=valgrind.%p executable.  Are valgrind and openmpi 
<br>
compatible?  Is there any special tricks to getting them to work together?
<br>
<p>Thanks,
<br>
Justin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8220.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
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
