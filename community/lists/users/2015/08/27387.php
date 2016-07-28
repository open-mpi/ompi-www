<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 20:47:58 2015" -->
<!-- isoreceived="20150804004758" -->
<!-- sent="Tue, 4 Aug 2015 09:47:51 +0900" -->
<!-- isosent="20150804004751" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="55C00BB7.8000406_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKMpcFq=edum7tvQQEm8yYNoQ1cJa+PAqM-T7jBcePsDMWwRtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault on java binding from MPI.init()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 20:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nate,
<br>
<p>a similar issue has already been reported at 
<br>
<a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>, but we have
<br>
not yet been able to figure out what is going wrong.
<br>
<p>right after MPI_Init(), can you add
<br>
Thread.sleep(5000);
<br>
and see if it helps ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/4/2015 8:36 AM, Nate Chambers wrote:
<br>
<span class="quotelev1">&gt; We've been struggling with this error for a while, so hoping someone 
</span><br>
<span class="quotelev1">&gt; more knowledgeable can help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our java MPI code exits with a segfault during its normal operation, 
</span><br>
<span class="quotelev1">&gt; *but the segfault occurs before our code ever uses MPI functionality 
</span><br>
<span class="quotelev1">&gt; like sending/receiving. *We've removed all message calls and any use 
</span><br>
<span class="quotelev1">&gt; of MPI.COMM_WORLD from the code. The segfault occurs if we call 
</span><br>
<span class="quotelev1">&gt; MPI.init(args) in our code, and does not if we comment that line out. 
</span><br>
<span class="quotelev1">&gt; Further vexing us, the crash doesn't happen at the point of the 
</span><br>
<span class="quotelev1">&gt; MPI.init call, but later on in the program. I don't have an 
</span><br>
<span class="quotelev1">&gt; easy-to-run example here because our non-MPI code is so large and 
</span><br>
<span class="quotelev1">&gt; complicated. We have run simpler test programs with MPI and the 
</span><br>
<span class="quotelev1">&gt; segfault does not occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have isolated the line where the segfault occurs. However, if we 
</span><br>
<span class="quotelev1">&gt; comment that out, the program will run longer, but then randomly (but 
</span><br>
<span class="quotelev1">&gt; deterministically) segfault later on in the code. Does anyone have 
</span><br>
<span class="quotelev1">&gt; tips on how to debug this? We have tried several flags with mpirun, 
</span><br>
<span class="quotelev1">&gt; but no good clues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have also tried several MPI versions, including stable 1.8.7 and 
</span><br>
<span class="quotelev1">&gt; the most recent 1.8.8rc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ATTACHED
</span><br>
<span class="quotelev1">&gt; - config.log from installation
</span><br>
<span class="quotelev1">&gt; - output from `ompi_info -all`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUTPUT FROM RUNNING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 java -mx4g FeaturizeDay datadir/ days.txt
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; some normal output from our code
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited 
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27387/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
