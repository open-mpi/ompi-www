<?
$subject_val = "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 13:06:53 2009" -->
<!-- isoreceived="20090610170653" -->
<!-- sent="Wed, 10 Jun 2009 23:06:48 +0600" -->
<!-- isosent="20090610170648" -->
<!-- name="Gleb \" -->
<!-- email="crazy.sage_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine." -->
<!-- id="619552330.20090610230648_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A2F8D3D.9090003_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine.<br>
<strong>From:</strong> Gleb \ (<em>crazy.sage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 13:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9594.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
<li><strong>Reply:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed this, not all paths were in variables. Sorry.
<br>
<p><span class="quotelev1">&gt; Hello. I've got following problem. I've run MPI programm and successful
</span><br>
<span class="quotelev1">&gt; checkpointed it with BLCR.
</span><br>
<span class="quotelev1">&gt; But now, when I'm trying to restart it using ompi-restart -v
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_7190.ckpt I'm getting following message:
</span><br>
<p><span class="quotelev1">&gt; [umu2:07572] Checking for the existence of
</span><br>
<span class="quotelev1">&gt; (/root/ompi_global_snapshot_7190.ckpt)
</span><br>
<span class="quotelev1">&gt; [umu2:07572] Restarting from file (ompi_global_snapshot_7190.ckpt)
</span><br>
<span class="quotelev1">&gt; [umu2:07572]     Exec in self
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;        checkpoint file (ompi_global_snapshot_7190.ckpt). Returned -1.
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p><span class="quotelev1">&gt; Both Open-MPI and BLCR are installed into shared NFS directory, blcr
</span><br>
<span class="quotelev1">&gt; directories are included into PATH and LD_LIBRARY_PATH variables on
</span><br>
<span class="quotelev1">&gt; restart node.
</span><br>
<span class="quotelev1">&gt; Open MPI initially configured with keys
</span><br>
<span class="quotelev1">&gt;  &#226;&#136;&#146;&#226;&#136;&#146;with&#226;&#136;&#146;ft=cr &#226;&#136;&#146;&#226;&#136;&#146;enable&#226;&#136;&#146;ft&#226;&#136;&#146;thread &#226;&#136;&#146;&#226;&#136;&#146;enable&#226;&#136;&#146;mpi&#226;&#136;&#146;thread
</span><br>
<span class="quotelev1">&gt; &#226;&#136;&#146;&#226;&#136;&#146;with&#226;&#136;&#146;blcr=/path/to/blcr
</span><br>
<p><span class="quotelev1">&gt; Program was run with -am ft-enable-cr.
</span><br>
<span class="quotelev1">&gt; What can cause such problem?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; With best regards
</span><br>
<span class="quotelev1">&gt; Gleb &quot;Crazy Sage&quot; Igumnov
</span><br>
<span class="quotelev1">&gt; mailto:crazy.sage_at_[hidden]
</span><br>
<p><p><p><p><p><pre>
-- 
With best regards,
 Gleb &quot;Crazy Sage&quot; Igumnov                          mailto:crazy.sage_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9594.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
<li><strong>Reply:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
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
