<?
$subject_val = "Re: [OMPI users] Regarding hyperthreding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 13 12:59:13 2012" -->
<!-- isoreceived="20120813165913" -->
<!-- sent="Mon, 13 Aug 2012 16:59:01 +0000" -->
<!-- isosent="20120813165901" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding hyperthreding" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7164062D2_at_FMSMSX107.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ_xm3A_CfYiXaAR=eYQHU6Vo8Ya-TdA=Vtq_j=By0w2SVmuAQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding hyperthreding<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-13 12:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19938.php">seshendra seshu: "[OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19938.php">seshendra seshu: "[OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Seshendra,
<br>
<p>If you have implemented hyperthreading by Enabling it in the BIOS, then when you look at
<br>
cat /proc/cpuinfo output, you will see 2x the # of CPUs than the number of cores on your system.
<br>
&nbsp;If that number of CPUs showing on a node = H, and the number of nodes in your cluster with this same configuration is M,
<br>
Then you can run your program on up to N = H x M  MPI ranks,
<br>
and your Open MPI  mpirun command can use the
<br>
'-np N -npernode H'   options to indicate this.
<br>
<p>Note that with some applications, you may see very little benefit to hyperthreading.  In any case, you should also run on &quot;-np N/2&quot; ranks and add the &quot;-npernode H/2&quot; setting to not use more ranks per node than you have cores per node, and compare performance with N ranks (with H per node).
<br>
<p>-Tom
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of seshendra seshu
<br>
Sent: Monday, August 13, 2012 9:27 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Regarding hyperthreding
<br>
<p>Hi,
<br>
I have written an code mpi and an iam trying to implement hyperthreading  environment. So could any one tell me how to implement and run the program in open mpi.
<br>
<p>Kindly help me.
<br>
<p>Thanking you,
<br>
<p><p><p><pre>
--
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19938.php">seshendra seshu: "[OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19938.php">seshendra seshu: "[OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
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
