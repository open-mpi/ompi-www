<?
$subject_val = "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 03:55:41 2014" -->
<!-- isoreceived="20141205085541" -->
<!-- sent="Fri, 5 Dec 2014 08:55:37 +0000" -->
<!-- isosent="20141205085537" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="CAM2Y-dbPO-L+zR2dABUBP3g=0Ee2axeYhj7LYEPMq9Hdg9m3Pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code<br>
<strong>From:</strong> John Bray (<em>jbray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-05 03:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To run a hybrid MPI/OpenMP code on a hyperthreaded machine with 24 virtual
<br>
cores, I've been using -n 12 --cpus-per-proc 2 so I can use
<br>
OMP_NUM_THREADS=2
<br>
<p>I now see that --cpus-per-proc is deprecated in favour of --map-by, but
<br>
I've been struggling to find a conversion as the --map-by documentation is
<br>
not very clear.
<br>
<p>What should I use to bind 2 virtual cores to each process?
<br>
<p>After I use -n 12 --cpus-per-proc 2 I get
<br>
<p>A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        mic1
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>and suggests I need an override option
<br>
<p>But this doesn't to match my request for 2 cores  per process, almost the
<br>
reverse, having 2 processes per core. I don't think I'm overloading my
<br>
virtual cores anyway
<br>
<p>John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25918.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
