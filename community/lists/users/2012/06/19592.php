<?
$subject_val = "Re: [OMPI users] openib_reg_mr";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 11:32:56 2012" -->
<!-- isoreceived="20120615153256" -->
<!-- sent="Fri, 15 Jun 2012 09:32:49 -0600" -->
<!-- isosent="20120615153249" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib_reg_mr" -->
<!-- id="544AFE71-BAA9-4BC5-B9F9-6D1262DEAF3D_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 11:32:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcus
<br>
<p>Sounds like you might be running out of IB resources as opposed to main memory - not much we can suggest there other than trying to set queue sizes, which is a complicated option. You might look at &quot;ompi_info --param btl openib&quot; and see if adjusting some of those helps.
<br>
<p>Ralph
<br>
<p><p>On Jun 15, 2012, at 9:26 AM, Daniels, Marcus G wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 15, 2012, at 8:02 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Were there any clues in /var/log/messages or dmesg?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.  I found a suggestion from Nathan Hjelm to add &quot;options mlx4_core log_mtts_per_seg=X&quot; (where X is 5 in my case).  
</span><br>
<span class="quotelev1">&gt; Offline suggestions (which also included that) were also add &quot;--mca mpi_leave_pinned 0&quot; to the mpirun line and to double check my locked memory limits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing I find works reliably is to use &quot;-npernode 32&quot; instead of &quot;-npernode 48&quot;.  Unfortunately my system has 48 processor node.
</span><br>
<span class="quotelev1">&gt; I've got lots of headroom on real memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
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
