<?
$subject_val = "[OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 13:13:19 2015" -->
<!-- isoreceived="20150724171319" -->
<!-- sent="Fri, 24 Jul 2015 20:12:58 +0300" -->
<!-- isosent="20150724171258" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo" -->
<!-- id="CAEcYPwCkqerVh7qZVkX_1BOMy=bY01X8uONwGaH=T6RXD1AS8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 13:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Previous message:</strong> <a href="17698.php">Howard Pritchard: "[OMPI devel] mca_pml_cm_component_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Reply:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why the contents of the 1.8.7 release tarball versus the v1.8.7 tag in
<br>
ompi-release repo differ? Any chance this was a mistake and the
<br>
release tarball was generated with the wrong tree?
<br>
<p>Of course I do not care about VERSION, but there are two files related
<br>
to RMA that are different. The release tarball files have a
<br>
use-after-free bug that make my tests segfault.
<br>
<p><p>$ diff -r --brief ompi-release openmpi-1.8.7 | grep -v Only
<br>
Files ompi-release/ompi/mca/osc/rdma/osc_rdma_active_target.c and
<br>
openmpi-1.8.7/ompi/mca/osc/rdma/osc_rdma_active_target.c differ
<br>
Files ompi-release/orte/mca/oob/tcp/oob_tcp_connection.c and
<br>
openmpi-1.8.7/orte/mca/oob/tcp/oob_tcp_connection.c differ
<br>
Files ompi-release/VERSION and openmpi-1.8.7/VERSION differ
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Previous message:</strong> <a href="17698.php">Howard Pritchard: "[OMPI devel] mca_pml_cm_component_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Reply:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
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
