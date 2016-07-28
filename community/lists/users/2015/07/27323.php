<?
$subject_val = "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 16:36:59 2015" -->
<!-- isoreceived="20150724203659" -->
<!-- sent="Fri, 24 Jul 2015 13:36:55 -0700" -->
<!-- isosent="20150724203655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI" -->
<!-- id="87574D76-8B81-4672-99EF-382154A2F8F4_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EEB855_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 16:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27324.php">Erik Schnetter: "[OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill
<br>
<p>You actually can get OMPI to split a process across sockets. Let&#146;s say there are 4 cores/socket and 2 sockets/node. You could run two procs on the same node, one split across sockets, by:
<br>
<p>mpirun -n 1 &#151;map-by core:pe=5 ./app : -n 1 &#151;map-by core:pe=3 ./app
<br>
<p>The first proc will run on all cores of the 1st socket plus the 1st core of the 2nd socket. The second proc will run on the remaining 3 cores of the 2nd socket.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jul 24, 2015, at 12:48 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm just curious, if we run an OpenMPI job and it makes use of non-local memory
</span><br>
<span class="quotelev1">&gt; (i.e. memory tied to another socket) what kind of effects are seen on performance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How would you go about testing the above? I can't think of any command line parameter that
</span><br>
<span class="quotelev1">&gt; would allow one to split an OpenMPI process across sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd imagine it would be pretty bad since you can't cache non-local memory locally,
</span><br>
<span class="quotelev1">&gt; the fact both the request and data have to flow through an IOH, the local CPU would
</span><br>
<span class="quotelev1">&gt; have to compete w/the non-local CPU for access to its own memory and that doing this
</span><br>
<span class="quotelev1">&gt; would have to implemented w/some sort of software semaphore locks (which would add
</span><br>
<span class="quotelev1">&gt; even more overhead).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bill L.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27324.php">Erik Schnetter: "[OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- nextthread="start" -->
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
