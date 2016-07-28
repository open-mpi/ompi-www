<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 08:30:42 2011" -->
<!-- isoreceived="20111219133042" -->
<!-- sent="Mon, 19 Dec 2011 15:30:33 +0200" -->
<!-- isosent="20111219133033" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="4EEF3C79.5030305_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1324278400.9460.140661013376189_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 08:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Previous message:</strong> <a href="18005.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18003.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; By any chance is it a particular node (or pair of nodes) this seems to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happen with?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No.  I've got 40 nodes total with this hardware configuration, and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem has been seen on most/all nodes at one time or another.  It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't seem, based on the limited number of observable parameters I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; aware of, to be dependent on the number of nodes involved.
</span><br>
<p>What's the smallest number of nodes that are needed to reproduce this
<br>
problem? Does it happen with just two HCAs, one process per node?
<br>
<p><span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We are running a cluster that has a good number of older nodes with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; module).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; These adapters are all at firmware level 4.8.917 .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64. Jobs are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; launched/managed using Slurm 2.2.7. The IB software and drivers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in use are all from this OFED version.
</span><br>
<p>Let's get you to the latest firmware GA of this card.
<br>
Run &quot;ibv_devinfo | grep board_id&quot;, and find the latest FW GA for
<br>
your device here: <a href="http://www.mellanox.com/content/pages.php?pg=firmware_download">http://www.mellanox.com/content/pages.php?pg=firmware_download</a>
<br>
It has all the instructions how to update FW.
<br>
<p>Also, please post here some more information about your HCA
<br>
(&quot;ibv_devinfo&quot; output should do).
<br>
<p>-- YK
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Previous message:</strong> <a href="18005.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18003.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
