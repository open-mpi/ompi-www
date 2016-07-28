<?
$subject_val = "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 15:48:27 2015" -->
<!-- isoreceived="20150724194827" -->
<!-- sent="Fri, 24 Jul 2015 19:48:24 +0000" -->
<!-- isosent="20150724194824" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EEB855_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 15:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27321.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm just curious, if we run an OpenMPI job and it makes use of non-local memory
<br>
(i.e. memory tied to another socket) what kind of effects are seen on performance?
<br>
<p>How would you go about testing the above? I can't think of any command line parameter that
<br>
would allow one to split an OpenMPI process across sockets.
<br>
<p>I'd imagine it would be pretty bad since you can't cache non-local memory locally,
<br>
the fact both the request and data have to flow through an IOH, the local CPU would
<br>
have to compete w/the non-local CPU for access to its own memory and that doing this
<br>
would have to implemented w/some sort of software semaphore locks (which would add
<br>
even more overhead).
<br>
<p>Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27321.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
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
