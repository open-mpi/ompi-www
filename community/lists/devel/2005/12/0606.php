<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  8 17:39:25 2005" -->
<!-- isoreceived="20051208223925" -->
<!-- sent="Thu, 8 Dec 2005 17:39:11 -0500" -->
<!-- isosent="20051208223911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="4D8447DD-9E9E-4160-B7AC-B860652F00A4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0511292040560.2439_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-08 17:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2005, at 3:04 PM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Here's the problem: there are 3 different APIs for processor affinity
</span><br>
<span class="quotelev2">&gt;&gt; in Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please list them (at least the ones that you know about) ?
</span><br>
<p>Check out <a href="http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/">http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/</a> 
<br>
linux/paffinity_linux.h -- there's a big comment in that file about  
<br>
the problem, to include descriptions of the 3 APIs.
<br>
<p><span class="quotelev1">&gt; In the kernel source, in kernel/sched.c, the sys_sched_setaffinity
</span><br>
<span class="quotelev1">&gt; function appears only in 2.6.0 (talking about stable kernels only). I
</span><br>
<span class="quotelev1">&gt; can also see it back-ported by Red Hat in their RHEL3 (2.4.21-based)
</span><br>
<span class="quotelev1">&gt; kernels, so I would like to know if others have back-ported it as
</span><br>
<span class="quotelev1">&gt; well and if their functions differ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both the official 2.6.x and the Red Hat back-ported definition of this
</span><br>
<span class="quotelev1">&gt; function is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asmlinkage long sys_sched_setaffinity(pid_t pid, unsigned int len,
</span><br>
<span class="quotelev1">&gt;                                        unsigned long __user  
</span><br>
<span class="quotelev1">&gt; *user_mask_ptr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the back-ported RHEL3 doesn't have the __user attribute to the last
</span><br>
<span class="quotelev1">&gt; parameter, but that's cosmetic)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The glibc definitions of sched_setaffinity seem to change, I already
</span><br>
<span class="quotelev1">&gt; found 2 of them in RHEL3 and RHEL4, but they both call the same
</span><br>
<span class="quotelev1">&gt; underlying kernel function. So Open MPI could just bypass glibc and
</span><br>
<span class="quotelev1">&gt; call the kernel function directly, for example:
</span><br>
<p>The problem is that there are some 2-parameter variants out there. :-(
<br>
<p>Check out Paul Hargrove's solution: <a href="http://www.open-mpi.org/community/">http://www.open-mpi.org/community/</a> 
<br>
lists/devel/2005/11/0562.php
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
