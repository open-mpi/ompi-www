<?
$subject_val = "Re: [OMPI users] mpirun has exited due to process rank N";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 19:53:53 2016" -->
<!-- isoreceived="20160707235353" -->
<!-- sent="Fri, 8 Jul 2016 08:53:53 +0900" -->
<!-- isosent="20160707235353" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun has exited due to process rank N" -->
<!-- id="0a7c78ae-9e91-3f48-59f8-74eb3e0b15ba_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F2E7D4A-2341-4D1B-A5D5-ADBC9BF64733_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun has exited due to process rank N<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 19:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29600.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29598.php">Ralph Castain: "Re: [OMPI users] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrea,
<br>
<p><p>On top of what Ralph just wrote, you might want to upgrade OpenMPI to 
<br>
the latest stable version (1.10.3)
<br>
<p>1.6.5 is pretty antique and is no more maintained.
<br>
<p><p>the message indicates that one process died, and so many things could 
<br>
cause a process crash.
<br>
<p>(since the crash occurs only with N &gt; 25, the root cause could be an out 
<br>
of memory (just run dmesg and grep OOM),
<br>
<p>a division by zero, your application calling exit(...) instead of 
<br>
MPI_Finalize()/MPI_Abort(...) or a bug in your application)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/8/2016 7:12 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Try running one of the OMPI example codes and verify that things run 
</span><br>
<span class="quotelev1">&gt; correctly if N &gt; 25. I suspect you have an error in your code that 
</span><br>
<span class="quotelev1">&gt; causes it to fail if its rank is &gt; 25.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 7, 2016, at 2:49 PM, Alberti, Andrea &lt;alberti3_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:alberti3_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my name is Andrea and I am a new openMPI user.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a code compiled with:
</span><br>
<span class="quotelev2">&gt;&gt; intel/16.0.3
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.6.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; When I try to run my code with: mpirun -n N ./code.exe
</span><br>
<span class="quotelev2">&gt;&gt;     a) the code correctly runs and gives results if N&lt;=25
</span><br>
<span class="quotelev2">&gt;&gt;     b) the code gives the following error if N&gt;25:
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun has exited due to process rank X with PID ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; This seems to be a pretty common problem when not all the 
</span><br>
<span class="quotelev2">&gt;&gt; processes are initialized or finalized.
</span><br>
<span class="quotelev2">&gt;&gt;     However, I do init and finalize the processors.
</span><br>
<span class="quotelev2">&gt;&gt;     And, moreover, I do not understand why the problem is not there 
</span><br>
<span class="quotelev2">&gt;&gt; when N&lt;=25
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could someone, please, help me out with that or point me to some 
</span><br>
<span class="quotelev2">&gt;&gt; pages where the same problem is discussed/solved?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much in advance for the help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29596.php">http://www.open-mpi.org/community/lists/users/2016/07/29596.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29597.php">http://www.open-mpi.org/community/lists/users/2016/07/29597.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29600.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29598.php">Ralph Castain: "Re: [OMPI users] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
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
