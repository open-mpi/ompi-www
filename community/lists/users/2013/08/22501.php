<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 02:30:11 2013" -->
<!-- isoreceived="20130818063011" -->
<!-- sent="Sun, 18 Aug 2013 07:30:10 +0100" -->
<!-- isosent="20130818063010" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPqNE2Vptoneb5yZ+vjAL3pnvOYm-h-c1KCqK_oHJoK_B=k06g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPkf6e09HPcKX7QgXr1VSLbeebU-7WqT4vnSvaTNsSbrhjA76g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 02:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22500.php">Richard Haney: "[OMPI users] Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For information, if you use a batch system such as PbsPro or Torque it can
<br>
be configured to set up the cpuset for a job and start the job within the
<br>
cpuset. It will also destroy the cpuset at the end of a job.
<br>
Highly useful for job cpu binding as you day and also if you have a machine
<br>
running many separate jobs where cpusets help isolate jobs and help
<br>
allocate resources.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22500.php">Richard Haney: "[OMPI users] Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
