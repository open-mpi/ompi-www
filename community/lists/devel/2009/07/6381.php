<?
$subject_val = "[OMPI devel] oob/btl tcp port range - missing htons?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:31:38 2009" -->
<!-- isoreceived="20090706143138" -->
<!-- sent="Mon, 6 Jul 2009 16:31:33 +0200" -->
<!-- isosent="20090706143133" -->
<!-- name="Mariusz Mamo&#197;&#132;ski" -->
<!-- email="mamonski_at_[hidden]" -->
<!-- subject="[OMPI devel] oob/btl tcp port range - missing htons?" -->
<!-- id="78259bca0907060731p5fa9846o2d9cf4e2a67b173f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] oob/btl tcp port range - missing htons?<br>
<strong>From:</strong> Mariusz Mamo&#197;&#132;ski (<em>mamonski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6380.php">Jeff Squyres: "[OMPI devel] review of r1302"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<li><strong>Reply:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Recently i was testing OMPI in the multi-cluster, heterogeneous
<br>
environment. Because of the firewall presence between the two test
<br>
machines i wanted to restrict port used by the OMPI daemons by setting
<br>
following mca parameters:
<br>
<p>oob_tcp_port_min_v4 = 5000
<br>
oob_tcp_port_range_v4 = 100
<br>
btl_tcp_port_min_v4 = 5000
<br>
btl_tcp_port_range_v4 = 100
<br>
<p>Unfortunately it didn't work. After looking into  source code of the
<br>
oob and btl  tcp components i noticed that the sin_port member was
<br>
initialized without the conversion from host to network byte order.
<br>
After adding of the htons call (sample patch attached), the
<br>
cross-cluster run start working.
<br>
<p>Regards,
<br>
<pre>
-- 
Mariusz

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6381/htons.patch">htons.patch</a>
</ul>
<!-- attachment="htons.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6380.php">Jeff Squyres: "[OMPI devel] review of r1302"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<li><strong>Reply:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
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
