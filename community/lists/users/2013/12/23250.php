<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 07:22:31 2013" -->
<!-- isoreceived="20131219122231" -->
<!-- sent="Thu, 19 Dec 2013 12:22:18 +0000" -->
<!-- isosent="20131219122218" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="878uvhxc79.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48574BAB-545A-421E-AAB2-1C708AB3C2C3_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 07:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23251.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23249.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Dec 18, 2013, at 10:32 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We specifically switched to 1.7.3 because of a bug in 1.6.4 (lock up in some 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective communication), but now I'm wondering whether I should just test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What bug, exactly?  As you mentioned vasp, is it specifically affecting
</span><br>
<span class="quotelev2">&gt;&gt; that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - I never characterized it fully, but we attached with gdb to every
</span><br>
<span class="quotelev1">&gt; single vasp running process, and all were stuck in the same
</span><br>
<span class="quotelev1">&gt; call to MPI_allreduce() every time. It's only happening on a rather large 
</span><br>
<span class="quotelev1">&gt; jobs, so it's not the easiest setup to debug.  
</span><br>
<p>Maybe that's a different problem.  I know they tried multiple versions
<br>
of vasp, which had different failures.  Actually, I just remembered that
<br>
the version I examined with padb was built with the intel compiler and
<br>
run with gcc openmpi (I know...), but builds with gcc failed too.  I
<br>
don't know if that was taken up with the developers.
<br>
<p>I guess this isn't the place to discuss vasp, unless it's helping to pin
<br>
down an ompi problem, but people might benefit from notes of problems in
<br>
the archive.
<br>
<p><span class="quotelev1">&gt; If I can reproduce the problem with 1.6.5, and I can confirm that it's always 
</span><br>
<span class="quotelev1">&gt; locking up in the same call to mpi_allreduce, and all processes are stuck 
</span><br>
<span class="quotelev1">&gt; in the same call, is there interest in looking into a possible mpi issue?  
</span><br>
<p>I'd have thought so from the point of view of those of us running 1.6
<br>
for compatibility with the RHEL6 openmpi.
<br>
<p>Thanks for the info, anyhow.
<br>
<p>Incidentally, if vasp is built with ompi's alltoallv -- I understand it
<br>
has its own implementation of that or something similar --
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2013/10/22804.php">http://www.open-mpi.org/community/lists/users/2013/10/22804.php</a>&gt; may be
<br>
relevant, if you haven't seen it.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23251.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23249.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
