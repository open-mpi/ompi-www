<?
$subject_val = "Re: [OMPI users] openib_reg_mr";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 12:34:05 2012" -->
<!-- isoreceived="20120615163405" -->
<!-- sent="Fri, 15 Jun 2012 12:33:59 -0400" -->
<!-- isosent="20120615163359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib_reg_mr" -->
<!-- id="75DCA12A-0802-4E8B-85EB-B07EBE10633F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4F98E39-46E1-4A6E-AFDF-E127E3ED3F34_at_win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib_reg_mr<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 12:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2012, at 11:26 AM, Daniels, Marcus G wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Were there any clues in /var/log/messages or dmesg?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.  I found a suggestion from Nathan Hjelm to add &quot;options mlx4_core log_mtts_per_seg=X&quot; (where X is 5 in my case).  
</span><br>
<span class="quotelev1">&gt; Offline suggestions (which also included that) were also add &quot;--mca mpi_leave_pinned 0&quot; to the mpirun line and to double check my locked memory limits.
</span><br>
<p>Setting leave_pinned to 0 will likely decrease your overall registered memory usage, but only over time.  If you're not making it through MPI_INIT, then setting leave_pinned to 0 won't help.
<br>
<p><span class="quotelev1">&gt; The only thing I find works reliably is to use &quot;-npernode 32&quot; instead of &quot;-npernode 48&quot;.  Unfortunately my system has 48 processor node.
</span><br>
<p>Well, that's a bummer.  You've somehow got some restrictions on how much registered memory you can set.  You probably want to check with your IB vendor for further advice here.
<br>
<p>One other thing you might want to try is to change Open MPI's receive queues to all be SRQ (as opposed to PP).  See this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
<br>
<p>FWIW, in my regression testing, I run this set of RQ's as one of my tests:
<br>
<p>&nbsp;&nbsp;&nbsp;--mca btl_openib_receive_queues S,128,256:S,2048,256:S,12288,256:S,65536,256
<br>
<p>You may want to tweak these values to fit your applications, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
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
