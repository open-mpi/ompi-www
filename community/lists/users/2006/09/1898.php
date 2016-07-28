<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 17:48:59 2006" -->
<!-- isoreceived="20060926214859" -->
<!-- sent="Tue, 26 Sep 2006 15:48:57 -0600" -->
<!-- isosent="20060926214857" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C --&amp;gt; LOGICAL" -->
<!-- id="1159307337.15814.19.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="BBFBAB63-B7B5-4613-B1C3-38B17BB001B3_at_umich.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-26 17:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1899.php">Laurent.POREZ_at_[hidden]: "[OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<li><strong>Previous message:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>In reply to:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2006-09-26 at 14:45 -0400, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I have a code that requires that it be compiled (with the pgi  
</span><br>
<span class="quotelev1">&gt; compilers) with the -i8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the pgf90 man page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -i8    Treat default INTEGER and LOGICAL variables as eight bytes.   
</span><br>
<span class="quotelev1">&gt; For operations
</span><br>
<span class="quotelev1">&gt;                involving integers, use 64-bits for computations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But i get the following from configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 LOGICAL... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with opnempi-1.1.1
</span><br>
<span class="quotelev1">&gt; I also have the same problem with openmpi-1.1.2rc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application is vasp, you can see the notes on the problem here:
</span><br>
<span class="quotelev1">&gt; <a href="http://cms.mpi.univie.ac.at/vasp-forum/forum_viewtopic.php?2.1255">http://cms.mpi.univie.ac.at/vasp-forum/forum_viewtopic.php?2.1255</a>
</span><br>
<p>It looks like we assumed that LOGICAL would never be larger than an int,
<br>
which clearly isn't the case when that setting is used.  I've filed a
<br>
bug in our tracker about the issue and should have a fix committed this
<br>
evening.  It should be able to make the 1.1.2 release, but I can't
<br>
promise at this point.
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1899.php">Laurent.POREZ_at_[hidden]: "[OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<li><strong>Previous message:</strong> <a href="1897.php">Jeff Squyres: "Re: [OMPI users] DAPL setup/config help"</a>
<li><strong>In reply to:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<!-- nextthread="start" -->
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
