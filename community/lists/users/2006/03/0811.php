<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 22:17:25 2006" -->
<!-- isoreceived="20060310031725" -->
<!-- sent="Thu, 9 Mar 2006 22:17:18 -0500" -->
<!-- isosent="20060310031718" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="F7138DEA-2A8B-4DE6-9009-494B97131B1F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44108724.9050301_at_reachone.com" -->
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
<strong>Date:</strong> 2006-03-09 22:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0810.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 2:51 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install OPENMPI on a Linux cluster with 22 dual  
</span><br>
<span class="quotelev1">&gt; Opteron nodes
</span><br>
<span class="quotelev1">&gt; and a Myrinet interconnect.  I am having trouble with the build  
</span><br>
<span class="quotelev1">&gt; with the GM
</span><br>
<span class="quotelev1">&gt; libraries.  I configured with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix-/users/rosmond/ompi --with-gm=/usr/lib64 -- 
</span><br>
<span class="quotelev1">&gt; enable-mpi2-one-sided
</span><br>
<p>Can you try configuring with --with-gm (no argument) and send the  
<br>
output from configure and make again?  The --with-gm flag takes as an  
<br>
argument the installation prefix, not the library prefix.  So in this  
<br>
case, it would be --with-gm=/usr, which is kind of pointless, as  
<br>
that's a default search location anyway.  Open MPI's configure script  
<br>
should automatically look in /usr/lib64.  In fact, it looks like  
<br>
configure looked there and found the right libgm, but something went  
<br>
amuck later in the process.
<br>
<p>Also, you really don't want to configure with the --enable-mpi2-one- 
<br>
sided flag.  It will not do anything useful and will likely cause  
<br>
very bad things to happen.  Open MPI 1.0.x does not have any MPI-2  
<br>
onesided support.  Open MPI 1.1 should have a complete implementation  
<br>
of the onesided chapter.
<br>
<p><span class="quotelev1">&gt; and the environmental variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv FC pgf90
</span><br>
<span class="quotelev1">&gt; setenv F77 pgf90
</span><br>
<span class="quotelev1">&gt; setenv CCPFLAGS /usr/include/gm       ! (note this non-standard  
</span><br>
<span class="quotelev1">&gt; location)
</span><br>
<p>I assume you mean CPPFLAGS=-I/usr/include/gm, which shouldn't cause  
<br>
any problems.
<br>
<p><span class="quotelev1">&gt; The configure seemed to go OK, but the make failed.  As you see at  
</span><br>
<span class="quotelev1">&gt; the end of the
</span><br>
<span class="quotelev1">&gt; make output, it doesn't like the format of libgm.so.  It looks to  
</span><br>
<span class="quotelev1">&gt; me that it is using
</span><br>
<span class="quotelev1">&gt; a path (/usr/lib/.....) to 32 bit libraries, rather than 64 bit (/ 
</span><br>
<span class="quotelev1">&gt; usr/lib64/....).   Is this
</span><br>
<span class="quotelev1">&gt; correct?  What's the solution?
</span><br>
<p>I'm not sure at this point, but I need a build without the incorrect  
<br>
flag to be able to determine what went wrong.  We've built Open MPI  
<br>
with 64 bit builds of GM before, so I'm surprised there were any  
<br>
problems...
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0810.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
