<?
$subject_val = "Re: [OMPI users] hostfile without slots";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 19:19:41 2015" -->
<!-- isoreceived="20151007231941" -->
<!-- sent="Thu, 8 Oct 2015 08:19:22 +0900" -->
<!-- isosent="20151007231922" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hostfile without slots" -->
<!-- id="OF3A6019EC.6E077D17-ON49257ED7.007F235D-49257ED7.0080260E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="561594CF.3080609_at_ssc-spc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] hostfile without slots<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20hostfile%20without%20slots"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-10-07 19:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>In reply to:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In addition to Ralph's explanation, you can change the policy of
<br>
this behavior using MCA param orte_set_default_slots.
<br>
<p>For example, by setting &quot;none&quot; you can disable the auto detection
<br>
of slots count, which means it's compatible with openmpi-1.6.X.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>In reply to:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
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
