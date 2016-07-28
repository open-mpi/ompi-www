<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 14:46:49 2006" -->
<!-- isoreceived="20060926184649" -->
<!-- sent="Tue, 26 Sep 2006 14:45:02 -0400" -->
<!-- isosent="20060926184502" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] C --&amp;gt; LOGICAL" -->
<!-- id="BBFBAB63-B7B5-4613-B1C3-38B17BB001B3_at_umich.edu" -->
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
<strong>Date:</strong> 2006-09-26 14:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1896.php">Troy Telford: "[OMPI users] DAPL setup/config help"</a>
<li><strong>Previous message:</strong> <a href="1894.php">Jeff Squyres: "Re: [OMPI users] ompi_reduce_op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1898.php">Brian Barrett: "Re: [OMPI users] C --&gt; LOGICAL"</a>
<li><strong>Reply:</strong> <a href="1898.php">Brian Barrett: "Re: [OMPI users] C --&gt; LOGICAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a code that requires that it be compiled (with the pgi  
<br>
compilers) with the -i8
<br>
<p>&nbsp;From the pgf90 man page:
<br>
<p>-i8    Treat default INTEGER and LOGICAL variables as eight bytes.   
<br>
For operations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;involving integers, use 64-bits for computations.
<br>
<p>But i get the following from configure:
<br>
<p>checking size of Fortran 77 LOGICAL... 8
<br>
checking for C type corresponding to LOGICAL... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: error: Cannot continue
<br>
<p><p>This is with opnempi-1.1.1
<br>
I also have the same problem with openmpi-1.1.2rc1
<br>
<p>The application is vasp, you can see the notes on the problem here:
<br>
<a href="http://cms.mpi.univie.ac.at/vasp-forum/forum_viewtopic.php?2.1255">http://cms.mpi.univie.ac.at/vasp-forum/forum_viewtopic.php?2.1255</a>
<br>
<p><p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1896.php">Troy Telford: "[OMPI users] DAPL setup/config help"</a>
<li><strong>Previous message:</strong> <a href="1894.php">Jeff Squyres: "Re: [OMPI users] ompi_reduce_op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1898.php">Brian Barrett: "Re: [OMPI users] C --&gt; LOGICAL"</a>
<li><strong>Reply:</strong> <a href="1898.php">Brian Barrett: "Re: [OMPI users] C --&gt; LOGICAL"</a>
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
