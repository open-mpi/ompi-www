<?
$subject_val = "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:39:08 2009" -->
<!-- isoreceived="20090610103908" -->
<!-- sent="Wed, 10 Jun 2009 16:38:53 +0600" -->
<!-- isosent="20090610103853" -->
<!-- name="Gleb Igumnov" -->
<!-- email="crazy.sage_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine." -->
<!-- id="4A2F8D3D.9090003_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine.<br>
<strong>From:</strong> Gleb Igumnov (<em>crazy.sage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 06:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9589.php">Jacob Balthazor: "[OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Reply:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. I've got following problem. I've run MPI programm and successful
<br>
checkpointed it with BLCR.
<br>
But now, when I'm trying to restart it using ompi-restart -v
<br>
ompi_global_snapshot_7190.ckpt I'm getting following message:
<br>
<p>[umu2:07572] Checking for the existence of
<br>
(/root/ompi_global_snapshot_7190.ckpt)
<br>
[umu2:07572] Restarting from file (ompi_global_snapshot_7190.ckpt)
<br>
[umu2:07572]     Exec in self
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (ompi_global_snapshot_7190.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p>Both Open-MPI and BLCR are installed into shared NFS directory, blcr
<br>
directories are included into PATH and LD_LIBRARY_PATH variables on
<br>
restart node.
<br>
Open MPI initially configured with keys
<br>
&nbsp;&#226;&#136;&#146;&#226;&#136;&#146;with&#226;&#136;&#146;ft=cr &#226;&#136;&#146;&#226;&#136;&#146;enable&#226;&#136;&#146;ft&#226;&#136;&#146;thread &#226;&#136;&#146;&#226;&#136;&#146;enable&#226;&#136;&#146;mpi&#226;&#136;&#146;thread
<br>
&#226;&#136;&#146;&#226;&#136;&#146;with&#226;&#136;&#146;blcr=/path/to/blcr
<br>
<p>Program was run with -am ft-enable-cr.
<br>
What can cause such problem?
<br>
--------------------------------------------
<br>
With best regards
<br>
Gleb &quot;Crazy Sage&quot; Igumnov
<br>
mailto:crazy.sage_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9589.php">Jacob Balthazor: "[OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Reply:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
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
