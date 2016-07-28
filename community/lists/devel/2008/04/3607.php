<?
$subject_val = "[OMPI devel] --disable-ipv6 broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 06:36:16 2008" -->
<!-- isoreceived="20080402103616" -->
<!-- sent="Wed, 2 Apr 2008 06:36:02 -0400" -->
<!-- isosent="20080402103602" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] --disable-ipv6 broken on trunk" -->
<!-- id="3419D59C-6957-4C7D-8AEF-09C94FDCA5FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] --disable-ipv6 broken on trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 06:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3606.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk launch scaling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that builds configured with '--disable-ipv6' are broken on  
<br>
the trunk. I suspect r18055 for this break since the tarball from two  
<br>
nights ago worked fine and it is the only significant change in this  
<br>
code in the past week. The build error is:
<br>
---------------------------
<br>
oob_tcp.c: In function `mca_oob_tcp_fini':
<br>
oob_tcp.c:1364: error: structure has no member named `tcp6_listen_sd'
<br>
oob_tcp.c:1365: error: structure has no member named `tcp6_recv_event'
<br>
---------------------------
<br>
<p>Can someone take a look at this?
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3606.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk launch scaling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
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
