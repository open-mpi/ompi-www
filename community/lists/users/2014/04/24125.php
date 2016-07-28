<?
$subject_val = "[OMPI users] How to set a process on a host but not bound to any core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 12:22:55 2014" -->
<!-- isoreceived="20140409162255" -->
<!-- sent="Wed, 9 Apr 2014 16:22:47 +0000" -->
<!-- isosent="20140409162247" -->
<!-- name="Gan, Qi                    PW" -->
<!-- email="Qi.Gan2_at_[hidden]" -->
<!-- subject="[OMPI users] How to set a process on a host but not bound to any core" -->
<!-- id="BC61C7775820B1469DB38FAE0D52DCA10B9FC59E_at_UUSNWE1W.na.utcmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to set a process on a host but not bound to any core<br>
<strong>From:</strong> Gan, Qi                    PW (<em>Qi.Gan2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-09 12:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Reply:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe reply:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe reply:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem when setting the processes of a parallel job  with specified order.  Suppose a job with 6 processes (rank0 to rank5) needs to run on 3 hosts (A, B, C) with following order:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank0  -- A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank1  -- B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank2  -- B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank3  -- C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank4  -- A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank5  -- C
<br>
Specifying this order (ABBCAC) in  hostfile doesn't work because Open MPI only supports &quot;byslot&quot; (AABBCC) or &quot;bynode&quot; (ABCABC) ranking orders.
<br>
<p>However, if I use rankfile to implement this order in the format of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=A slot=&lt;slot setting&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=B slot=&lt;slot setting&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=B slot=&lt;slot setting&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=C slot=&lt;slot setting&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=A slot=&lt;slot setting&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=C slot=&lt;slot setting&gt;
<br>
I run into another problem on how to determine the &lt;slot setting&gt; for each rank. If I bind each rank to all cores/CPUs on a node (e.g. rank 0=A slot=0-n,  where n is the maximal CPU number), I run into the following errors:
<br>
<p>*** An error occurred in MPI_comm_size
<br>
*** on a NULL communicator
<br>
*** Unknown error
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
<p>If I don't select all cores, I need to identify which cores are available to my job in order to avoid CPU oversubscribing since the nodes are shared by multiple jobs.
<br>
<p>Our system is the intel based cluster (12 or 16 cores per node) and the job is submitted by LSF batch submitter.
<br>
<p>Here is my question: how to implement a specified order of processes at node level without binding at core/cpu level?
<br>
<p>Any help and suggestions would be appreciated.
<br>
<p>Thanks,
<br>
Chee
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Reply:</strong> <a href="24126.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe reply:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe reply:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
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
