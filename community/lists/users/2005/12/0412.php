<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  1 15:47:25 2005" -->
<!-- isoreceived="20051201204725" -->
<!-- sent="Thu, 01 Dec 2005 13:47:22 -0700" -->
<!-- isosent="20051201204722" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problems with bproc cluster" -->
<!-- id="438F615A.3050301_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200511290952.19206.ouellet_at_amnh.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-01 15:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">sdamjad: "[O-MPI users] Make problems with open-mpi.1.0 on mac os x 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John,
<br>
<p>Any progress on this?
<br>
<p>John Ouellette wrote:
<br>
<span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmmm, nope.  I recompiled OpenMPI to produce the static libs, and even 
</span><br>
<span class="quotelev1">&gt; recompiled my app statically, and received the same error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If orted isn't starting on the compute nodes, is there any way I can debug 
</span><br>
<span class="quotelev1">&gt; this to find out where it is failing?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You could try running orted standalone to verify that it starts up correctly:
<br>
<p>bpsh &lt;node&gt; orted --debug
<br>
<p><p><p><span class="quotelev1">&gt; Actually, I just tried your suggestion of running ldd on one of the compute 
</span><br>
<span class="quotelev1">&gt; nodes (should've tried this before recompiling, I guess...).  I get a strange 
</span><br>
<span class="quotelev1">&gt; error, which probably indicates a problem with bproc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd /usr/local/intel-libs/9.0/bin/orted
</span><br>
<span class="quotelev1">&gt; /proc/self/fd/3: line 125: cat: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know I've run ldd on a node before without problems before....  I don't know 
</span><br>
<span class="quotelev1">&gt; if this is related to my OpenMPI problems, but I'm going to have to look into 
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p><p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">sdamjad: "[O-MPI users] Make problems with open-mpi.1.0 on mac os x 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
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
