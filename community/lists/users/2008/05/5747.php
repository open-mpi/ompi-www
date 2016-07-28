<?
$subject_val = "[OMPI users] Help: Program Terminated";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 04:10:39 2008" -->
<!-- isoreceived="20080529081039" -->
<!-- sent="Thu, 29 May 2008 16:10:30 +0800" -->
<!-- isosent="20080529081030" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: Program Terminated" -->
<!-- id="289665360805290110j7e904185x8de4915c1e38f624_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help: Program Terminated<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 04:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5746.php">Matt Hughes: "[OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I use a bioinformatics software called MicroTar to do some work. But it
<br>
seems that it dosen't finish well.
<br>
<p>MicroTar parallel version was terminated after 463 minutes with following
<br>
error messages:
<br>
================================================
<br>
[gnode5:31982] [ 0] /lib64/tls/libpthread.so.0 [0x345460c430]
<br>
[gnode5:31982] [ 1] microtar(LocateNuclei+0x137) [0x403037]
<br>
[gnode5:31982] [ 2] microtar(main+0x4ac) [0x40431c]
<br>
[gnode5:31982] [ 3] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x3453b1c3fb]
<br>
[gnode5:31982] [ 4] microtar [0x402e6a]
<br>
[gnode5:31982] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 18710 on node gnode1 exited on
<br>
signal 15 (Terminated).
<br>
19 additional processes aborted (not shown)
<br>
================================================
<br>
And gnode5 is a slave node, gnode1 is the master node. I run MicroTar in
<br>
gnode1 by using Open MPI 1.2.6 mpirun.
<br>
<p>The OS is Cent OS 4. Processor is AMD Opteron 270HE.
<br>
<p>So from that what can we know? It's a MPI problem or I didn't compile
<br>
MicroTar properly?
<br>
<p>Thank you very much~
<br>
<p>Best Regards,
<br>
<p>Amy Lee
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5748.php">Leonardo Fialho: "[OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5746.php">Matt Hughes: "[OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5750.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
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
