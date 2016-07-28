<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 23:58:02 2013" -->
<!-- isoreceived="20130321035802" -->
<!-- sent="Thu, 21 Mar 2013 12:57:43 +0900" -->
<!-- isosent="20130321035743" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OF1AB212EB.F4467829-ON49257B35.0014EB87-49257B35.0015C9FD_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A75DE05A-2601-4626-B800-69470AABADBA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-20 23:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21575.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21574.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Here is an output on openmpi-1.6.4, just for your information.
<br>
Small difference is obserbed. I hope this helps you.
<br>
<p>Regards,
<br>
Tetusya Mishima
<br>
<p>openmpi-1.6.4:
<br>
======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: node06.cluster  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: node05  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
<p><p>openmpi-1.7rc8 with --enable-debug:
<br>
======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: node06  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: node05  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
--------------------------------------------------------------------------
<br>
A hostfile was provided that contains at least one node not
<br>
present in the allocation:
<br>
<p>&nbsp;&nbsp;hostfile:  pbs_hosts
<br>
&nbsp;&nbsp;node:      node06
<br>
<p>If you are operating in a resource-managed environment, then only
<br>
nodes that are in the allocation can be used in the hostfile. You
<br>
may find relative node syntax to be a useful alternative to
<br>
specifying absolute node names see the orte_hosts man page for
<br>
further information.
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21575.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21574.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
