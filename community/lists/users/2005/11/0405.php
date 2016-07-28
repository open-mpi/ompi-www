<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 09:52:30 2005" -->
<!-- isoreceived="20051129145230" -->
<!-- sent="Tue, 29 Nov 2005 09:52:19 -0500" -->
<!-- isosent="20051129145219" -->
<!-- name="John Ouellette" -->
<!-- email="ouellet_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problems with bproc cluster" -->
<!-- id="200511290952.19206.ouellet_at_amnh.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[O-MPI users] problems with bproc cluster" -->
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
<strong>From:</strong> John Ouellette (<em>ouellet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 09:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Hmmmm, nope.  I recompiled OpenMPI to produce the static libs, and even 
<br>
recompiled my app statically, and received the same error messages.
<br>
<p>If orted isn't starting on the compute nodes, is there any way I can debug 
<br>
this to find out where it is failing?  
<br>
<p>Actually, I just tried your suggestion of running ldd on one of the compute 
<br>
nodes (should've tried this before recompiling, I guess...).  I get a strange 
<br>
error, which probably indicates a problem with bproc:
<br>
<p>ldd /usr/local/intel-libs/9.0/bin/orted
<br>
/proc/self/fd/3: line 125: cat: command not found
<br>
<p>I know I've run ldd on a node before without problems before....  I don't know 
<br>
if this is related to my OpenMPI problems, but I'm going to have to look into 
<br>
it.
<br>
<p>John
<br>
<p><span class="quotelev1">&gt;Hello John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You need to specify both --enable-static and --disable-shared to do a static
</span><br>
<span class="quotelev1">&gt;build (not sure why, perhaps someone else can fill us in on that)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The logs indicate the launch is failing trying to start orted on the backend
</span><br>
<span class="quotelev1">&gt;node... probably due to shared library dependencies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You might try doing a bpsh &lt;node&gt; ldd orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;And check that the libraries resolve / and or rebuild with the indicated
</span><br>
<span class="quotelev1">&gt;configure option.
</span><br>
<p><span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<pre>
-- 
+++++++++++++++++++++++++++++++++++
John Ouellette
Department of Astrophysics
American Museum of Natural History
Ph: 212-313-7919 Fax: 212-769-5007
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Greg Lindahl: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
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
