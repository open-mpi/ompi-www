<?
$subject_val = "[MTT users] Can not find my testing results in OMPI MTT DB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 05:28:09 2008" -->
<!-- isoreceived="20080521092809" -->
<!-- sent="Wed, 21 May 2008 12:28:03 +0300" -->
<!-- isosent="20080521092803" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[MTT users] Can not find my testing results in OMPI MTT DB" -->
<!-- id="4833EB23.6070007_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [MTT users] Can not find my testing results in OMPI MTT DB<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 05:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Here is test result from my last mtt run:
<br>
+-------------+----------------+------+------+----------+------+
<br>
| Phase       | Section        | Pass | Fail | Time out | Skip |
<br>
+-------------+----------------+------+------+----------+------+
<br>
| MPI install | ompi/gcc       | 1    | 0    | 0        | 0    |
<br>
| MPI install | ompi/intel-9.0 | 1    | 0    | 0        | 0    |
<br>
| Test Build  | trivial        | 1    | 0    | 0        | 0    |
<br>
| Test Build  | trivial        | 1    | 0    | 0        | 0    |
<br>
| Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
<br>
| Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
<br>
| Test Build  | imb            | 1    | 0    | 0        | 0    |
<br>
| Test Build  | imb            | 1    | 0    | 0        | 0    |
<br>
| Test Build  | presta         | 1    | 0    | 0        | 0    |
<br>
| Test Build  | presta         | 1    | 0    | 0        | 0    |
<br>
| Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
<br>
| Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
<br>
| Test Build  | netpipe        | 1    | 0    | 0        | 0    |
<br>
| Test Build  | netpipe        | 1    | 0    | 0        | 0    |
<br>
| Test Run    | trivial        | 64   | 0    | 0        | 0    |
<br>
| Test Run    | trivial        | 64   | 0    | 0        | 0    |
<br>
| Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
<br>
| Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
<br>
+-------------+----------------+------+------+----------+------+
<br>
<p>In the OMPI MTT DB (<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>) I found the follow 
<br>
&quot;test run&quot; results:
<br>
| Test Run    | trivial        | 64   | 0    | 0        | 0    |
<br>
| Test Run    | trivial        | 64   | 0    | 0        | 0    |
<br>
| Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
<br>
<p>And I can not find this one:
<br>
| Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
<br>
<p>&nbsp;From the log I see that all tests results were submitted successfully.
<br>
<p>Can you please check ?
<br>
<p>Thanks,
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
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
