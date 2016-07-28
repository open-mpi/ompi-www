<?
$subject_val = "[OMPI users] CPU user time vs. system time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 23:09:52 2009" -->
<!-- isoreceived="20090627030952" -->
<!-- sent="Fri, 26 Jun 2009 23:09:48 -0400" -->
<!-- isosent="20090627030948" -->
<!-- name="Qiming He" -->
<!-- email="qiming.he_at_[hidden]" -->
<!-- subject="[OMPI users] CPU user time vs. system time" -->
<!-- id="a49be6ca0906262009s4f02a003te2ddec6478638bdb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] CPU user time vs. system time<br>
<strong>From:</strong> Qiming He (<em>qiming.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 23:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I am new to OpenMPI, and have an urgent run-time question. I
<br>
have openmpi-1.3.2 compiled with Intel Fortran compiler v.11 simply by
<br>
<p>./configure --prefix=&lt;my-dir&gt; F77=ifort FC=ifort
<br>
then I set my LD_LIBRARY_PATH to include &lt;openmpi-lib&gt; and &lt;intel-lib&gt;
<br>
and compile my Fortran program properly. No compilation error.
<br>
<p>I run my program on single node. Everything looks ok. However, when I run it
<br>
on multiple nodes.
<br>
mpirun -np &lt;num&gt; --hostfile &lt;my-hosts&gt; &lt;my-program&gt;
<br>
The performance is much worse than a single node with the same size of the
<br>
problem to solve (MPICH2 has 50% improvement)
<br>
<p>I use top and saidar to find that user time (CPU user) is much lower than
<br>
system time (CPU system), i.e,
<br>
only small portion of CPU time is used by user application, while the rest
<br>
is busy with system.
<br>
No wonder I got bad performance.  I am assuming &quot;CPU system&quot; is used for MPI
<br>
communication.
<br>
I notice the total traffic (on eth0) is not that big (~5Mb/sec). What is CPU
<br>
system busy for?
<br>
<p>Can anyone help? Anything I need to tune?
<br>
<p>Thanks in advance
<br>
<p>-Qiming
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9738/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
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
