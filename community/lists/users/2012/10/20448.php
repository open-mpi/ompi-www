<?
$subject_val = "[OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 08:51:15 2012" -->
<!-- isoreceived="20121010125115" -->
<!-- sent="Wed, 10 Oct 2012 14:50:59 +0200" -->
<!-- isosent="20121010125059" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="201210101450.59904.niethammer_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI on Cray XE6 / Gemini<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 08:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20449.php">Thomas Evangelidis: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system. Unfortunately I 
<br>
get the following error when I run a simple HelloWorldMPI program:
<br>
<p>$ pirun HelloWorldMPI
<br>
App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
<br>
...
<br>
[unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error: Bad 
<br>
file descriptor
<br>
[nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket: Unable 
<br>
to open a TCP socket for out-of-band communications
<br>
...
<br>
<p><p>The installation was configured with the following command:
<br>
<p>./configure --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas 
<br>
--prefix=$HOME/bin/mpi/openmpi/1.7a1r27416
<br>
<p><p>I would be very happy if anybdy has an idea, what I could have missed during 
<br>
installation/runtime.
<br>
<p>Thanks in advance.
<br>
<p>Best regards
<br>
Christoph
<br>
<p><p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20449.php">Thomas Evangelidis: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
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
