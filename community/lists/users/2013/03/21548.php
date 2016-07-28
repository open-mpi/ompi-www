<?
$subject_val = "[OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 17 20:52:26 2013" -->
<!-- isoreceived="20130318005226" -->
<!-- sent="Mon, 18 Mar 2013 09:52:03 +0900" -->
<!-- isosent="20130318005203" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OFBBA93B13.7AB6302A-ON49257B32.0004468C-49257B32.0004CC13_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-17 20:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi openmpi developers,
<br>
<p>I have been evaluating our FEM aplication with new openmpi-1.7rc7 under
<br>
Torque job controler.
<br>
<p>Now I encountered a trouble that &quot;-hostfile&quot; does not work properly.
<br>
Since my application is hybrid(MPI+OpenMP), I have to modify
<br>
$PBS_NODEFILE and use &quot;-hostfile&quot;.
<br>
<p>I don't add new hosts to the hostfile according to FAQ. It's just a
<br>
subset of the hosts allocated to the Torque. At leaset, this method
<br>
works well with openmpi-1.6.x.
<br>
<p>I hope this issue will be fixed in the next release of openmpi-1.7.
<br>
<p>Best Regards,
<br>
Tetsuya Mishima
<br>
<p>(1) Example of 2MPI having 4 threads:
<br>
$PBS_NODEFILE -&gt; modified hostfile
<br>
node01           node01
<br>
node01           node02
<br>
node01
<br>
node01
<br>
node02
<br>
node02
<br>
node02
<br>
node02
<br>
<p>(2) The error message I got is as follows:
<br>
--------------------------------------------------------------------------
<br>
A hostfile was provided that contains at least one node not
<br>
present in the allocation:
<br>
<p>&nbsp;&nbsp;hostfile:  pbs_hosts
<br>
&nbsp;&nbsp;node:      node01
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
<li><strong>Next message:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21547.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21549.php">Gustavo Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
