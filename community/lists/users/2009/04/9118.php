<?
$subject_val = "[OMPI users] sharing memory between processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 09:28:19 2009" -->
<!-- isoreceived="20090428132819" -->
<!-- sent="Tue, 28 Apr 2009 15:28:14 +0200" -->
<!-- isosent="20090428132814" -->
<!-- name="Barnabas Debreczeni" -->
<!-- email="keo_at_[hidden]" -->
<!-- subject="[OMPI users] sharing memory between processes" -->
<!-- id="60110f460904280628k5e43dd3bk6fd888f99352a2cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] sharing memory between processes<br>
<strong>From:</strong> Barnabas Debreczeni (<em>keo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 09:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I am new to this list and to parallel programming in general. I am
<br>
writing a trading simulator for the forex market and I am using
<br>
genetic algorithms to breed trading parameters.
<br>
<p>I am using PGAPack as a GA library, and it uses MPI to parallelize
<br>
optimization runs. This is how I got to Open MPI.
<br>
<p>I am stuck at some point mainly because my lack of parallel
<br>
programming knowledge. What I'd like to achieve is: (I am doing it the
<br>
serial way right now)
<br>
<p>- Load price data from files, and compute a few tables (right now this
<br>
takes up ~4 GB of memory)
<br>
- Repeat...
<br>
-- Create new offsprings in the master process for the GA
<br>
-- Evaluate them in parallel (on 4 local CPUs but maybe more on LAN if
<br>
i need it)
<br>
- Until I get a satisfactory result.
<br>
<p><p>My problem is, I'd like to share that 2 GB table (computed once at the
<br>
beginning, and is read-only after) between processes so I don't have
<br>
to use up 16 gigs of memory.
<br>
<p>How do you share data between processes locally?
<br>
<p>Later I will need to use other hosts too in the calculation. Will the
<br>
slaves on other hosts need to calculate their own tables on go on from
<br>
there and share them locally, or can I share these tables on the
<br>
master host with them?
<br>
<p>How do you usually solve these kinds of problems?
<br>
<p>Can you point me to some docs or keywords what should I learn about?
<br>
<p>Thank you very much.
<br>
<p>Regards,
<br>
<p>Barnabas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
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
