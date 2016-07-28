<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:53:54 2011" -->
<!-- isoreceived="20110214145354" -->
<!-- sent="Mon, 14 Feb 2011 09:53:50 -0500" -->
<!-- isosent="20110214145350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="3FF2FA49-D4BD-4D2D-907A-8E5E332E8CFB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="762625.74823.qm_at_web110405.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 09:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 9:35 AM, Siew Yin Chan wrote:
<br>
<p><span class="quotelev1">&gt; 1. I tried Open MPI 1.5.1 before turning to hwloc-bind. Yep. Open MPI 1.5.1 does provide the --bycore and --bind-to-core option, but this option seems to bind processes to cores on my machine according to the *physical* indexes:
</span><br>
<p>FWIW, you might want to try one of the OMPI 1.5.2 nightly tarballs -- we switched the process affinity stuff to hwloc in 1.5.2 (the 1.5.1 stuff uses a different mechanism).
<br>
<p><span class="quotelev1">&gt; FYI, my testing environment and application imposes these requirements for optimum performance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i. Different binaries optimized for heterogeneous machines. This necessitates  MIMD, and can be done in OMPI using the -app option (providing an application context file).
</span><br>
<span class="quotelev1">&gt; ii. The application is communication-sensitive. Thus, fine-grained process mapping on *machines* and on *cores* is required to minimize inter-machine and inter-socket communication costs occurring on the network and on the system bus. Specifically, processes should be mapped onto successive cores of one socket before the next socket is considered, i.e., socket.0:core0-3, then socket.1:core0-3. In this case, the communication among neighboring rank 0-3 will be confined to socket 0 without going through the system bus. Same for rank 4-7 on socket 1. As such, the order of the cores should follow the *logical* indexes.
</span><br>
<p>I think that OMPI 1.5.2 should do this for you -- rather than following and logical/physical ordering, it does what you describe: traverses successive cores on a socket before going to the next socket (which happens to correspond to hwloc's logical ordering, but that was not the intent).
<br>
<p>FWIW, we have a huge revamp of OMPI's affinity support on the mpirun command line that will offer much more flexible binding choices.
<br>
<p><span class="quotelev1">&gt; Initially, I tried combining the features of rankfile and appfile, e.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat rankfile8np4
</span><br>
<span class="quotelev1">&gt; rank 0=compute-0-8 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=compute-0-8 slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 2=compute-0-8 slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 3=compute-0-8 slot=0:3
</span><br>
<span class="quotelev1">&gt; $ cat rankfile9np4
</span><br>
<span class="quotelev1">&gt; rank 0=compute-0-9 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=compute-0-9 slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 2=compute-0-9 slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 3=compute-0-9 slot=0:3
</span><br>
<span class="quotelev1">&gt; $ cat my_appfile_rankfile
</span><br>
<span class="quotelev1">&gt; --host compute-0-8 -rf rankfile8np4 -np 4 ./test1
</span><br>
<span class="quotelev1">&gt; --host compute-0-9 -rf rankfile9np4 -np 4 ./test2
</span><br>
<span class="quotelev1">&gt; $ mpirun -app my_appfile_rankfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but found out that only the rankfile stated on the first line took effect; the second was ignored completely. After some time of googling and trial and error, I decided to try an external binder, and this direction led me to hwloc-bind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I should bring the issue of rankfile + appfile to the OMPI mailing list.
</span><br>
<p>Yes.  
<br>
<p>I'd have to look at it more closely, but it's possible that we only allow one rankfile per job -- i.e., that the rankfile should specify all the procs in the job, not on a per-host basis.  But perhaps we don't warn/error if multiple rankfiles are used; I would consider that a bug.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0284.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
