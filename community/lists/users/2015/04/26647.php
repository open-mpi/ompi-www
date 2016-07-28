<?
$subject_val = "[OMPI users] parsability of ompi_info --parsable output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:23:24 2015" -->
<!-- isoreceived="20150408142324" -->
<!-- sent="Wed, 8 Apr 2015 10:23:19 -0400" -->
<!-- isosent="20150408142319" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] parsability of ompi_info --parsable output" -->
<!-- id="20150408142319.GB4618_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] parsability of ompi_info --parsable output<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 10:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output of ompi_info --parsable is somewhat difficult to parse
<br>
programmatically because it doesn't escape or quote fields that contain colons,
<br>
e.g.,
<br>
<p>build:timestamp:Tue Dec 23 15:47:28 EST 2014
<br>
option:threads:posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
<br>
<p>Is there some way to facilitate machine parsing of the output of ompi_info
<br>
without having to special-case those options/parameters whose data fields might
<br>
contain colons ? If not, it would be nice to quote such fields in
<br>
future releases of ompi_info.
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
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
