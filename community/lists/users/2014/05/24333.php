<?
$subject_val = "[OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 13:18:03 2014" -->
<!-- isoreceived="20140509171803" -->
<!-- sent="Fri, 9 May 2014 13:18:02 -0400" -->
<!-- isosent="20140509171802" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="[OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAMsSzSC6fnB2RGmMSSLSRHfs4=DCf5f9mmnAE_MxhObvvf01Bg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OPENIB unknown transport errors<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 13:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters, and
<br>
periodically our jobs abort at start-up with the following error:
<br>
<p>===
<br>
Open MPI detected two different OpenFabrics transport types in the same
<br>
Infiniband network.
<br>
Such mixed network trasport configuration is not supported by Open MPI.
<br>
<p>&nbsp;&nbsp;Local host:            w4
<br>
&nbsp;&nbsp;Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
<br>
<p>&nbsp;&nbsp;Remote host:           w34
<br>
&nbsp;&nbsp;Remote Adapter:        (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
<br>
===
<br>
<p>I've done a bit of googling and not found very much. We do not see this
<br>
issue when we run with MVAPICH2 on the same sets of nodes.
<br>
<p>Any advice or thoughts would be very welcome, as I am stumped by what
<br>
causes this. The nodes are all running Scientific Linux 6 with Mellanox
<br>
drivers installed via the SL-provided RPMs.
<br>
<p>Tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
