<?
$subject_val = "Communication problem (on one node) when network interface is down";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 05:24:05 2016" -->
<!-- isoreceived="20160311102405" -->
<!-- sent="Fri, 11 Mar 2016 11:23:55 +0100" -->
<!-- isosent="20160311102355" -->
<!-- name="R&#195;&#169;my Gr&#195;&#188;nblatt" -->
<!-- email="remy.grunblatt_at_[hidden]" -->
<!-- subject="Communication problem (on one node) when network interface is down" -->
<!-- id="56E29CBB.7020805_at_ens-lyon.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> Communication problem (on one node) when network interface is down<br>
<strong>From:</strong> R&#195;&#169;my Gr&#195;&#188;nblatt (<em>remy.grunblatt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 05:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28682.php">Howard Pritchard: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm having communications problem between two processes (with one being
<br>
spawned by the other, on the *same* physical machine). Everything works
<br>
as expected when I have network interface such as eth0 or wlo1 up, but
<br>
as soon as they are down, I get errors (such as &#194;&#171; At least one pair of
<br>
MPI processes are unable to reach each other for MPI communications [&#226;&#128;&#166;] &#194;&#187;).
<br>
I tried to specify a set of mca parameters including the btl &quot;self&quot;
<br>
parameter and including the lo interface in btl_tcp_if_include list, as
<br>
advised by <a href="https://www.open-mpi.org/faq/?category=tcp">https://www.open-mpi.org/faq/?category=tcp</a> but I didn't reach
<br>
any working state for this code with &quot;external&quot; network interface down.
<br>
<p>Got any idea about what I might do wrong ?
<br>
<p>Example code that triggers the problem: <a href="https://ptpb.pw/YOjr.tar.gz">https://ptpb.pw/YOjr.tar.gz</a>
<br>
Ompi_info:  <a href="https://ptpb.pw/Vt_V.txt">https://ptpb.pw/Vt_V.txt</a>
<br>
Full log: <a href="https://ptpb.pw/JCXn.txt">https://ptpb.pw/JCXn.txt</a>
<br>
<p>R&#195;&#169;my
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28683/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28682.php">Howard Pritchard: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
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
