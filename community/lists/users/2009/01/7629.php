<?
$subject_val = "[OMPI users] using ompi-server on a single node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 03:06:36 2009" -->
<!-- isoreceived="20090105080636" -->
<!-- sent="Mon, 05 Jan 2009 09:06:31 +0100" -->
<!-- isosent="20090105080631" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI users] using ompi-server on a single node" -->
<!-- id="4961BF87.6080304_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] using ompi-server on a single node<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 03:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've tried to use ompi-server to connect 2 processes belonging to
<br>
different jobs but running on the same computer. It works when the
<br>
computer has a network interface up. But if the only active network
<br>
interface is the local loop, it doesn't work.
<br>
<p>According to what I understood reading the code, it is because no btl
<br>
component can be used in this case. &quot;tcp&quot; is not used because usually
<br>
it is the &quot;sm&quot; component that is used for processes on the same host.
<br>
But in that case it doesn't work because &quot;sm&quot; is supposed to work only
<br>
for processes of the same job.
<br>
<p>I know that this use-case is not very frequent  :) 
<br>
<p>But Is there a solution to make it work ? or is it a known limitation ?
<br>
<p>Regards
<br>
<p>Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
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
