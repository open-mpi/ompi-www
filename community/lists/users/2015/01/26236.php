<?
$subject_val = "[OMPI users] TCP BTL and virtual network interfaces, bug #3339";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:11:03 2015" -->
<!-- isoreceived="20150126201103" -->
<!-- sent="Mon, 26 Jan 2015 20:10:59 +0000" -->
<!-- isosent="20150126201059" -->
<!-- name="Kris Kersten" -->
<!-- email="kkersten_at_[hidden]" -->
<!-- subject="[OMPI users] TCP BTL and virtual network interfaces, bug #3339" -->
<!-- id="57EC03262F730743B98EC55F5CD407D96A61D2_at_CFWEX01.americas.cray.com" -->
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
<strong>Subject:</strong> [OMPI users] TCP BTL and virtual network interfaces, bug #3339<br>
<strong>From:</strong> Kris Kersten (<em>kkersten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-26 15:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Reply:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Maybe reply:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working on an ethernet cluster that uses virtual eth0:* interfaces on the compute nodes for IPMI and system management.  As described in Trac ticket #3339 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3339">https://svn.open-mpi.org/trac/ompi/ticket/3339</a> ), this setup confuses the TCP BTL which can't differentiate between the physical and virtual interfaces.  Verbose BTL output confirms this, showing attempted communication on both the physical and virtual IP addresses followed by a hang.
<br>
<p>Has there been any progress on this bug?  Or has anyone managed to figure out a workaround?
<br>
<p>Thanks,
<br>
Kris
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Reply:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Maybe reply:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
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
