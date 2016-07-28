<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 20:15:51 2011" -->
<!-- isoreceived="20110215011551" -->
<!-- sent="Mon, 14 Feb 2011 17:15:45 -0800 (PST)" -->
<!-- isosent="20110215011545" -->
<!-- name="Siew Yin Chan" -->
<!-- email="sychan131_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="675636.9818.qm_at_web110406.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3FF2FA49-D4BD-4D2D-907A-8E5E332E8CFB_at_cisco.com" -->
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
<strong>From:</strong> Siew Yin Chan (<em>sychan131_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 20:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres,
<br>
<p>Thank you very much for your input which makes my direction pretty clear now. Depending on the progress of my project, I may be adventurous to try the nightly tarball, or may wait until a stable version is released.
<br>
<p>I appreciate the hard work of the OMPI team, and am look forward to a more flexible binding option in OMPI's future release.
<br>
<p><p>Chan
<br>
<p><p>--- On Mon, 2/14/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?
</span><br>
<span class="quotelev1">&gt; To: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, February 14, 2011, 8:53 AM
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2011, at 9:35 AM, Siew Yin
</span><br>
<span class="quotelev1">&gt; Chan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. I tried Open MPI 1.5.1 before turning to
</span><br>
<span class="quotelev1">&gt; hwloc-bind. Yep. Open MPI 1.5.1 does provide the --bycore
</span><br>
<span class="quotelev1">&gt; and --bind-to-core option, but this option seems to bind
</span><br>
<span class="quotelev1">&gt; processes to cores on my machine according to the *physical*
</span><br>
<span class="quotelev1">&gt; indexes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, you might want to try one of the OMPI 1.5.2 nightly
</span><br>
<span class="quotelev1">&gt; tarballs -- we switched the process affinity stuff to hwloc
</span><br>
<span class="quotelev1">&gt; in 1.5.2 (the 1.5.1 stuff uses a different mechanism).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FYI, my testing environment and application imposes
</span><br>
<span class="quotelev1">&gt; these requirements for optimum performance:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i. Different binaries optimized for heterogeneous
</span><br>
<span class="quotelev1">&gt; machines. This necessitates&#160; MIMD, and can be done in
</span><br>
<span class="quotelev1">&gt; OMPI using the -app option (providing an application context
</span><br>
<span class="quotelev1">&gt; file).
</span><br>
<span class="quotelev2">&gt; &gt; ii. The application is communication-sensitive. Thus,
</span><br>
<span class="quotelev1">&gt; fine-grained process mapping on *machines* and on *cores* is
</span><br>
<span class="quotelev1">&gt; required to minimize inter-machine and inter-socket
</span><br>
<span class="quotelev1">&gt; communication costs occurring on the network and on the
</span><br>
<span class="quotelev1">&gt; system bus. Specifically, processes should be mapped onto
</span><br>
<span class="quotelev1">&gt; successive cores of one socket before the next socket is
</span><br>
<span class="quotelev1">&gt; considered, i.e., socket.0:core0-3, then socket.1:core0-3.
</span><br>
<span class="quotelev1">&gt; In this case, the communication among neighboring rank 0-3
</span><br>
<span class="quotelev1">&gt; will be confined to socket 0 without going through the
</span><br>
<span class="quotelev1">&gt; system bus. Same for rank 4-7 on socket 1. As such, the
</span><br>
<span class="quotelev1">&gt; order of the cores should follow the *logical* indexes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that OMPI 1.5.2 should do this for you -- rather
</span><br>
<span class="quotelev1">&gt; than following and logical/physical ordering, it does what
</span><br>
<span class="quotelev1">&gt; you describe: traverses successive cores on a socket before
</span><br>
<span class="quotelev1">&gt; going to the next socket (which happens to correspond to
</span><br>
<span class="quotelev1">&gt; hwloc's logical ordering, but that was not the intent).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we have a huge revamp of OMPI's affinity support on
</span><br>
<span class="quotelev1">&gt; the mpirun command line that will offer much more flexible
</span><br>
<span class="quotelev1">&gt; binding choices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Initially, I tried combining the features of rankfile
</span><br>
<span class="quotelev1">&gt; and appfile, e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ cat rankfile8np4
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=compute-0-8 slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=compute-0-8 slot=0:1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=compute-0-8 slot=0:2
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=compute-0-8 slot=0:3
</span><br>
<span class="quotelev2">&gt; &gt; $ cat rankfile9np4
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=compute-0-9 slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=compute-0-9 slot=0:1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=compute-0-9 slot=0:2
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=compute-0-9 slot=0:3
</span><br>
<span class="quotelev2">&gt; &gt; $ cat my_appfile_rankfile
</span><br>
<span class="quotelev2">&gt; &gt; --host compute-0-8 -rf rankfile8np4 -np 4 ./test1
</span><br>
<span class="quotelev2">&gt; &gt; --host compute-0-9 -rf rankfile9np4 -np 4 ./test2
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -app my_appfile_rankfile
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but found out that only the rankfile stated on the
</span><br>
<span class="quotelev1">&gt; first line took effect; the second was ignored completely.
</span><br>
<span class="quotelev1">&gt; After some time of googling and trial and error, I decided
</span><br>
<span class="quotelev1">&gt; to try an external binder, and this direction led me to
</span><br>
<span class="quotelev1">&gt; hwloc-bind.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe I should bring the issue of rankfile + appfile
</span><br>
<span class="quotelev1">&gt; to the OMPI mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.&#160; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd have to look at it more closely, but it's possible that
</span><br>
<span class="quotelev1">&gt; we only allow one rankfile per job -- i.e., that the
</span><br>
<span class="quotelev1">&gt; rankfile should specify all the procs in the job, not on a
</span><br>
<span class="quotelev1">&gt; per-host basis.&#160; But perhaps we don't warn/error if
</span><br>
<span class="quotelev1">&gt; multiple rankfiles are used; I would consider that a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
TV dinner still cooling? 
<br>
Check out &quot;Tonight's Picks&quot; on Yahoo! TV.
<br>
<a href="http://tv.yahoo.com/">http://tv.yahoo.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0283.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0285.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
