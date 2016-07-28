<?
$subject_val = "[OMPI users] High CPU usage with yield_when_idle =1 on CFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 02:48:14 2011" -->
<!-- isoreceived="20110901064814" -->
<!-- sent="Wed, 31 Aug 2011 23:48:09 -0700 (PDT)" -->
<!-- isosent="20110901064809" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] High CPU usage with yield_when_idle =1 on CFS" -->
<!-- id="1314859689.30340.YahooMailNeo_at_web121018.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTi=Y=MGF59x1XYgGXvfWjxQj+41U63UuUBEx56qe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] High CPU usage with yield_when_idle =1 on CFS<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 02:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recall a discussion some time ago about yield, the Completely F%&#226;&#128;&#153;d Scheduler (CFS) and OpenMPI.

My system is currently suffering from massive CPU use while busy waiting. &#194;&#160;This gets worse as I try to bump up user concurrency.

I am running with yield_when_idle but its not enough. Is there anything else I can do to release some CPU resource?
I recall seeing one post where usleep(1) was inserted around the yields, is this still feasible? 

I'm using 1.4.1 - is there a fix to be found in upgrading?
Unfortunately I am stuck &#194;&#160;with the CFS as I need Linux. &#194;&#160;Currently its Ubuntu 10.10 with 2.6.32.14


Thanks in advance
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
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
