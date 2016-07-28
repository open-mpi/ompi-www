<?
$subject_val = "Re: [OMPI users] openib_reg_mr";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 11:26:15 2012" -->
<!-- isoreceived="20120615152615" -->
<!-- sent="Fri, 15 Jun 2012 15:26:10 +0000" -->
<!-- isosent="20120615152610" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib_reg_mr" -->
<!-- id="E4F98E39-46E1-4A6E-AFDF-E127E3ED3F34_at_win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8B3AFE89-4B63-4F6C-B574-947807628B2A_at_cisco.com" -->
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
<strong>From:</strong> Daniels, Marcus G (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 11:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2012, at 8:02 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Were there any clues in /var/log/messages or dmesg?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks.  I found a suggestion from Nathan Hjelm to add &quot;options mlx4_core log_mtts_per_seg=X&quot; (where X is 5 in my case).  
<br>
Offline suggestions (which also included that) were also add &quot;--mca mpi_leave_pinned 0&quot; to the mpirun line and to double check my locked memory limits.
<br>
<p>The only thing I find works reliably is to use &quot;-npernode 32&quot; instead of &quot;-npernode 48&quot;.  Unfortunately my system has 48 processor node.
<br>
I've got lots of headroom on real memory.
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19592.php">Ralph Castain: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
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
