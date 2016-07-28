<?
$subject_val = "[OMPI users] Open MPI CPU Binding Related Questions.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 09:55:59 2015" -->
<!-- isoreceived="20151105145559" -->
<!-- sent="Thu, 5 Nov 2015 07:55:55 -0700" -->
<!-- isosent="20151105145555" -->
<!-- name="Jason Cook" -->
<!-- email="jasoncook_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI CPU Binding Related Questions." -->
<!-- id="CAD1Bv4MXh7VcmfqmKrtbJ0n6SmdGTnVSo4U0GZmfe5KvrCd1Mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI CPU Binding Related Questions.<br>
<strong>From:</strong> Jason Cook (<em>jasoncook_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 09:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="28002.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Reply:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI community,
<br>
<p><p><p>We have a smaller Linux GPU cluster here at Boise State University which is
<br>
running the following:
<br>
<p>CentOS 6.5
<br>
<p>Bright Cluster Manager 6.1
<br>
<p>PBS Pro 11.2
<br>
<p>Openmpi Versions:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.6.5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.8.4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.8.5
<br>
<p><p>On our cluster, we allow the compute nodes to be shared with multiple jobs
<br>
if the job resource requests coincide with each other to fit on one compute
<br>
node.
<br>
<p><p>So I was observing the behavior of our Open MPI installations and noticed
<br>
the following:
<br>
<p><p>&nbsp;&nbsp;&nbsp;- 1.       When a user submits an mpirun job, the executable floats
<br>
&nbsp;&nbsp;&nbsp;between different processor cores throughout its runtime on the compute
<br>
&nbsp;&nbsp;&nbsp;node. I am sure this because of the Operating System processor scheduler,
<br>
&nbsp;&nbsp;&nbsp;but is there a way in Open MPI to prevent this by default? Certain option
<br>
&nbsp;&nbsp;&nbsp;in the build process? Or is this an Operating System configuration change?
<br>
&nbsp;&nbsp;&nbsp;Is this a good or bad thing that the Operating System interrupts the
<br>
&nbsp;&nbsp;&nbsp;executable?
<br>
&nbsp;&nbsp;&nbsp;-
<br>
&nbsp;&nbsp;&nbsp;- 2.      Since we allow sharing of the compute nodes with multiple
<br>
&nbsp;&nbsp;&nbsp;jobs, I noticed if users utilize the option bind-to-core, Open MPI starts
<br>
&nbsp;&nbsp;&nbsp;with CPU core 0 and works its way sequentially as stated in the man pages
<br>
&nbsp;&nbsp;&nbsp;for this option. Since we do allow sharing of the nodes with multiple jobs,
<br>
&nbsp;&nbsp;&nbsp;I have seen two separate jobs with binding options, overload the same CPU
<br>
&nbsp;&nbsp;&nbsp;core(s) which causes the job to run longer than expected. Is there a way to
<br>
&nbsp;&nbsp;&nbsp;configure Open MPI to observe the current binding of other jobs and
<br>
&nbsp;&nbsp;&nbsp;allocate the job bindings around previous bound jobs?
<br>
<p><p><p>Thanks in advance for any advice you may provide,
<br>
<p>Jason Cook
<br>
<p>Boise State University
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="28002.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Reply:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
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
