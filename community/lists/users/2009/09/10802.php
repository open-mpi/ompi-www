<?
$subject_val = "[OMPI users] use additional interface for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 16:26:48 2009" -->
<!-- isoreceived="20090928202648" -->
<!-- sent="Mon, 28 Sep 2009 23:26:43 +0300" -->
<!-- isosent="20090928202643" -->
<!-- name="worldeb_at_[hidden]" -->
<!-- email="worldeb_at_[hidden]" -->
<!-- subject="[OMPI users] use additional interface for openmpi" -->
<!-- id="E1MsMnz-000763-FO_at_ffe1.ukr.net" -->
<!-- charset="windows-1251" -->
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
<strong>Subject:</strong> [OMPI users] use additional interface for openmpi<br>
<strong>From:</strong> <a href="mailto:worldeb_at_[hidden]?Subject=Re:%20[OMPI%20users]%20use%20additional%20interface%20for%20openmpi"><em>worldeb_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-28 16:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi folks,
<br>
<p>I want to use for openmpi communication the additional ethernet interfaces on node and head node.
<br>
its is eth1 on nodes and eth4 on head node.
<br>
So how can I configure openmpi?
<br>
<p>If I add in config file
<br>
btl_base_include=tcp,sm,self.
<br>
btl_tcp_if_include=eth1
<br>
<p>will it work or not?
<br>
<p>And how is it working with torque batch system (daemons listen eth0 on all nodes).
<br>
<p>Thanx.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10803.php">Pierre-Olivier Dallaire: "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
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
