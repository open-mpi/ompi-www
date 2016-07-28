<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:38:53 2013" -->
<!-- isoreceived="20131220223853" -->
<!-- sent="Fri, 20 Dec 2013 22:38:31 +0000" -->
<!-- isosent="20131220223831" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD566EFECF_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13533.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -
<br>

<br>
Any chance you could grab a stack trace from the mpi app? That's probably the fastest next step
<br>

<br>
Brian
<br>

<br>

<br>

<br>
Sent with Good (www.good.com)
<br>

<br>

<br>
-----Original Message-----
<br>
From: Paul Hargrove [phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;]
<br>
Sent: Friday, December 20, 2013 03:33 PM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] [OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs
<br>

<br>
With plenty of help from Jeff and Ralph's bug fixes in the past 24 hours, I can now build OMPI for NetBSD.  However, running even a simple example fails:
<br>

<br>
Having set PATH and LD_LIBARY_PATH:
<br>
$ mpirun -np 1 examples/ring_c
<br>
just hangs
<br>

<br>
Output from &quot;top&quot; shows idle procs:
<br>
&nbsp;&nbsp;PID USERNAME PRI NICE  SIZE   RES STATE     WAIT      TIME    CPU COMMAND
<br>
31841 phargrov  10    0 2140K 3960K sleep/1   nanosle   0:00  0.00% ring_c
<br>
13490 phargrov   2    0 2540K 4892K sleep/1   poll      0:00  0.00% orterun
<br>

<br>
Distrusting then env vars and relying instead on the auto-prefix behavior:
<br>
$ /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/bin/mpirun -np 1 examples/ring_c
<br>
also hangs
<br>

<br>
Not sure exactly what to infer from this, but a &quot;bogus&quot; btl doesn't produce any complaint, which may indicate how far startup got:
<br>
$ mpirun -mca btl bogus -np 1 examples/ring_c
<br>
Still hangs, and no complaint about the blt selection
<br>

<br>
All three cases above are singleton (-np 1) runs, but the behavior with &quot;-np 2&quot; is the same.
<br>

<br>
This does NOT appear to be an ORTE problem:
<br>
-bash-4.2$ orterun -np 1 date
<br>
Fri Dec 20 14:11:42 PST 2013
<br>
-bash-4.2$ orterun -np 2 date
<br>
Fri Dec 20 14:11:45 PST 2013
<br>
Fri Dec 20 14:11:45 PST 2013
<br>

<br>
Let me know what sort of verbose mca parameters to set and I'll collect the info.
<br>
Compressed output of &quot;ompi_info --all&quot; is attached.
<br>

<br>
-Paul
<br>

<br>
--
<br>
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
<br>
Future Technologies Group
<br>
Computer and Data Sciences Department     Tel: +1-510-495-2352
<br>
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13533.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
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
