<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 09:34:43 2005" -->
<!-- isoreceived="20051206143443" -->
<!-- sent="Tue, 6 Dec 2005 09:34:42 -0500" -->
<!-- isosent="20051206143442" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="D08730A8-E897-494A-999B-7792F94336D0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4394ABAD.4040002_at_obs.ujf-grenoble.fr" -->
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
<strong>Date:</strong> 2005-12-06 09:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2005, at 4:05 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; I tried to experiment open-mpi on our Solaris10 v40z cluster hoping  
</span><br>
<span class="quotelev1">&gt; it might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following script to compile in 64 bit mode:
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev1">&gt; I attach the log for configure+make and the config.log file.
</span><br>
<p>George spotted the problem - it looks like config.guess/config.sub  
<br>
always report i386 as the architecture when running on an Opteron.   
<br>
This isn't totally unexpected -- generally config.guess / config.sub  
<br>
reports the architecture target that is the default for the given  
<br>
platform and, as you said, Solaris on Opteron defaults to emitting 32  
<br>
bit code.  I think I have a fix for this issue, but I don't have any  
<br>
Opteron machines running Solaris to verify.  Can you grab the Open  
<br>
MPI tarball at the URL below and see if it builds properly?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a> 
<br>
openmpi-1.1a1r8384.tar.gz
<br>
<p>If that works for you, we'll push the change into Open MPI 1.0.1  
<br>
(it's a very small change).
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
<li><strong>Next message:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
