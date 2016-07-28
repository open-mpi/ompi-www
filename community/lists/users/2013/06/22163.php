<?
$subject_val = "[OMPI users] Detecting Node Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 16:02:46 2013" -->
<!-- isoreceived="20130620200246" -->
<!-- sent="Thu, 20 Jun 2013 13:02:41 -0700 (PDT)" -->
<!-- isosent="20130620200241" -->
<!-- name="Claire Williams" -->
<!-- email="clairewilliams1994_at_[hidden]" -->
<!-- subject="[OMPI users] Detecting Node Failure" -->
<!-- id="1371758561.97943.YahooMailNeo_at_web161603.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Detecting Node Failure<br>
<strong>From:</strong> Claire Williams (<em>clairewilliams1994_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 16:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22162.php">Lorenzo Don&#224;: "[OMPI users] error running with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,

I was wondering if Open-MPI had any way to detect that a node has crashed, rebooted, etc. I am currently trying to integrate my MPI application with Amazon EC2 spot instances, and since spot instances can be terminated at any time, I would like to try to make it so that my application can detect this node failure, maybe remove the node from the machine file, and restart the application automatically. Right now, when one of the worker nodes is rebooted or terminated, the master that is waiting on the results of that node will just hang, waiting for results that will never come.&#160;

Thanks,

Claire &#160;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22162.php">Lorenzo Don&#224;: "[OMPI users] error running with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Reply:</strong> <a href="22164.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
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
