<?
$subject_val = "[OMPI users] MPI jobs ending up in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 06:00:17 2009" -->
<!-- isoreceived="20090313100017" -->
<!-- sent="Fri, 13 Mar 2009 18:00:13 +0800" -->
<!-- isosent="20090313100013" -->
<!-- name="Peter Teoh" -->
<!-- email="htmldeveloper_at_[hidden]" -->
<!-- subject="[OMPI users] MPI jobs ending up in one node" -->
<!-- id="804dabb00903130300y4d17ee25mf3047995ab21c30_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI jobs ending up in one node<br>
<strong>From:</strong> Peter Teoh (<em>htmldeveloper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 06:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8418.php">Ralph Castain: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Reply:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I saw the following problem posed somewhere - can anyone shed some
<br>
light?   Thanks.
<br>
<p>I have a cluster of 8-sock quad core systems running Redhat 5.2. It
<br>
seems that whenever I try to run multiple MPI jobs to a single node
<br>
all the jobs end up running on the same processors. For example, if I
<br>
were to submit 4 8-way jobs to a single box they all end up in CPUs 0
<br>
to 7, leaving 8 to 31 idle.
<br>
<p>I then tried all sorts of I_MPI_PIN_PROCESSOR_LIST combinations but
<br>
short of explicitly listing out the processors at each run, they all
<br>
end up still hanging on to CPUs 0-7. Browsing through the mpiexec
<br>
script, I realise that it is doing a taskset on each run.
<br>
As my jobs are all submitted through a scheduler (PBS in this case) I
<br>
cannot possibly know at job submission time which CPUs are not used.
<br>
So is there a simple way to tell mpiexec to set the taskset affinity
<br>
correctly at each run so that it will choose only the idle processors?
<br>
Thanks.
<br>
<p><pre>
-- 
Regards,
Peter Teoh
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8418.php">Ralph Castain: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Reply:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
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
