<?
$subject_val = "[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:33:31 2013" -->
<!-- isoreceived="20131220223331" -->
<!-- sent="Fri, 20 Dec 2013 14:33:29 -0800" -->
<!-- isosent="20131220223329" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
<!-- id="CAAvDA14FCqhitQ-Ru4u_9qK7Va38qGkFg9eFi7Ckk-JVO5Wcug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13532.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 testing summary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With plenty of help from Jeff and Ralph's bug fixes in the past 24 hours, I
<br>
can now build OMPI for NetBSD.  However, running even a simple example
<br>
fails:
<br>
<p>Having set PATH and LD_LIBARY_PATH:
<br>
$ mpirun -np 1 examples/ring_c
<br>
just hangs
<br>
<p>Output from &quot;top&quot; shows idle procs:
<br>
&nbsp;&nbsp;PID USERNAME PRI NICE  SIZE   RES STATE     WAIT      TIME    CPU COMMAND
<br>
31841 phargrov  10    0 2140K 3960K sleep/1   nanosle   0:00  0.00% ring_c
<br>
13490 phargrov   2    0 2540K 4892K sleep/1   poll      0:00  0.00% orterun
<br>
<p>Distrusting then env vars and relying instead on the auto-prefix behavior:
<br>
$ /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/bin/mpirun -np
<br>
1 examples/ring_c
<br>
also hangs
<br>
<p>Not sure exactly what to infer from this, but a &quot;bogus&quot; btl doesn't produce
<br>
any complaint, which may indicate how far startup got:
<br>
$ mpirun -mca btl bogus -np 1 examples/ring_c
<br>
Still hangs, and no complaint about the blt selection
<br>
<p>All three cases above are singleton (-np 1) runs, but the behavior with
<br>
&quot;-np 2&quot; is the same.
<br>
<p>This does NOT appear to be an ORTE problem:
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
<p>Let me know what sort of verbose mca parameters to set and I'll collect the
<br>
info.
<br>
Compressed output of &quot;ompi_info --all&quot; is attached.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13533/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13533/info-openbsd5-amd64.txt.bz2">info-openbsd5-amd64.txt.bz2</a>
</ul>
<!-- attachment="info-openbsd5-amd64.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13532.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 testing summary"</a>
<!-- nextthread="start" -->
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
