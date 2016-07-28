<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 10:38:42 2007" -->
<!-- isoreceived="20070524143842" -->
<!-- sent="Thu, 24 May 2007 09:38:40 -0500" -->
<!-- isosent="20070524143840" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="[OMPI users] ethernet bonding" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1BFAEC0_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 10:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Previous message:</strong> <a href="3313.php">Jung, Soon-wook: "[OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>Reply:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We recently got 33 new cluster nodes all of which have two onboard GigE
<br>
nics.  We also got two powerconnect 2748 48 port switches which support
<br>
IEEE 802.3ad (link aggregation).  I have configured the nodes to do
<br>
Ethernet bonding to aggregate the two nics in to one bonded device:
<br>
<p><a href="http://www.cyberciti.biz/tips/linux-bond-or-team-multiple-network-interf">http://www.cyberciti.biz/tips/linux-bond-or-team-multiple-network-interf</a>
<br>
aces-nic-into-single-interface.html
<br>
<p><a href="http://www.cyberciti.biz/howto/question/static/linux-ethernet-bonding-dr">http://www.cyberciti.biz/howto/question/static/linux-ethernet-bonding-dr</a>
<br>
iver-howto.php
<br>
<p>Now I am wondering what is the best way to configure my switches.  I
<br>
guess I could do it in two ways: use the IEEE 802.3ab on the switch,
<br>
plug both nics of a node into one switch, and have some nodes on either
<br>
switch, or perhaps for each node, plug one nic in one switch and the
<br>
second nic in the other switch.
<br>
<p>So what in your experience is the best way to set up these
<br>
interconnects?
<br>
<p>Sam Adams
<br>
General Dynamics - Network Systems
<br>
Phone: 210.536.5945
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Previous message:</strong> <a href="3313.php">Jung, Soon-wook: "[OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>Reply:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
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
