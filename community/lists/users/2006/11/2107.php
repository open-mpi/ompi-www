<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 20:27:41 2006" -->
<!-- isoreceived="20061102012741" -->
<!-- sent="Wed, 1 Nov 2006 18:27:35 -0700 (MST)" -->
<!-- isosent="20061102012735" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error or warning message when launching job" -->
<!-- id="10347.128.165.0.81.1162430855.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BFF5205B-F4D2-497E-95C1-086AA796CCDE_at_lanl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-01 20:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2106.php">David Gunter: "[OMPI users] Error or warning message when launching job"</a>
<li><strong>In reply to:</strong> <a href="2106.php">David Gunter: "[OMPI users] Error or warning message when launching job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue is that openpty() is failing on the machine.  I think /dev/ptmx
<br>
and /dev/pts have to exist for pty support to work properly.  We're having
<br>
the same issue on Coyote, but not on Pink and Flash.  As far as I can
<br>
tell, those are the files / directories that are on the working systems
<br>
but not coyote.
<br>
<p>Brian
<br>
<p><span class="quotelev1">&gt; I'm testing out a new OpenMPI 1.1.2 build on a machine here at LANL
</span><br>
<span class="quotelev1">&gt; and get the following at launch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpirun -np 4 IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [n254:07650] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n255:07651] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n254:07650] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code then runs fine with no other errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the meaning of those 3 lines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-4: HPC Environments: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2106.php">David Gunter: "[OMPI users] Error or warning message when launching job"</a>
<li><strong>In reply to:</strong> <a href="2106.php">David Gunter: "[OMPI users] Error or warning message when launching job"</a>
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
