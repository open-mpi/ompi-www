<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 21:14:00 2015" -->
<!-- isoreceived="20150804011400" -->
<!-- sent="Mon, 3 Aug 2015 15:13:39 -1000" -->
<!-- isosent="20150804011339" -->
<!-- name="Nate Chambers" -->
<!-- email="nchamber_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAKMpcFrJbo=fWtoiz3JmrgDBZvzKB+5i=VLyG4qhpG+pDjvU3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55C00BB7.8000406_at_rist.or.jp" -->
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
<strong>From:</strong> Nate Chambers (<em>nchamber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 21:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
Yes I saw that github thread, but wasn't certain this was the same issue.
<br>
Very possible that it is. Oddly enough, that github code doesn't crash for
<br>
us.
<br>
<p>Adding a sleep call doesn't help. It's actually now crashing on the
<br>
MPI.init(args) call itself, and the JVM is reporting the error. Earlier it
<br>
would get past this point. I'm not certain why this has changed all of a
<br>
sudden. We did change a bit in our unrelated java code...
<br>
<p>Below is the output. It does match more closely to that previous report.
<br>
<p><p>Nate
<br>
<p>#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0x00002b00ad2807cf, pid=28537, tid=47281916847872
<br>
#
<br>
# JRE version: 7.0_21-b11
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (23.21-b01 mixed mode
<br>
linux-amd64 compressed oops)
<br>
# Problematic frame:
<br>
# V  [libjvm.so+0x57c7cf]  jni_GetStringUTFChars+0x9f
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core
<br>
dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /gpfs/home/nchamber/hs_err_pid28537.log
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0x00002b198c15b7cf, pid=28538, tid=47388736182016
<br>
#
<br>
# JRE version: 7.0_21-b11
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (23.21-b01 mixed mode
<br>
linux-amd64 compressed oops)
<br>
# Problematic frame:
<br>
# V  [libjvm.so+0x57c7cf]#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
#
<br>
&nbsp;&nbsp;jni_GetStringUTFChars+0x9f
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core
<br>
dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /gpfs/home/nchamber/hs_err_pid28538.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
#
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 28537 on node r3n70 exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p><p><p><p><p><p><p>On Mon, Aug 3, 2015 at 2:47 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a similar issue has already been reported at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>, but we have
</span><br>
<span class="quotelev1">&gt; not yet been able to figure out what is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; right after MPI_Init(), can you add
</span><br>
<span class="quotelev1">&gt; Thread.sleep(5000);
</span><br>
<span class="quotelev1">&gt; and see if it helps ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/4/2015 8:36 AM, Nate Chambers wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've been struggling with this error for a while, so hoping someone more
</span><br>
<span class="quotelev1">&gt; knowledgeable can help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our java MPI code exits with a segfault during its normal operation, *but
</span><br>
<span class="quotelev1">&gt; the segfault occurs before our code ever uses MPI functionality like
</span><br>
<span class="quotelev1">&gt; sending/receiving. *We've removed all message calls and any use of
</span><br>
<span class="quotelev1">&gt; MPI.COMM_WORLD from the code. The segfault occurs if we call MPI.init(args)
</span><br>
<span class="quotelev1">&gt; in our code, and does not if we comment that line out. Further vexing us,
</span><br>
<span class="quotelev1">&gt; the crash doesn't happen at the point of the MPI.init call, but later on in
</span><br>
<span class="quotelev1">&gt; the program. I don't have an easy-to-run example here because our non-MPI
</span><br>
<span class="quotelev1">&gt; code is so large and complicated. We have run simpler test programs with
</span><br>
<span class="quotelev1">&gt; MPI and the segfault does not occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have isolated the line where the segfault occurs. However, if we
</span><br>
<span class="quotelev1">&gt; comment that out, the program will run longer, but then randomly (but
</span><br>
<span class="quotelev1">&gt; deterministically) segfault later on in the code. Does anyone have tips on
</span><br>
<span class="quotelev1">&gt; how to debug this? We have tried several flags with mpirun, but no good
</span><br>
<span class="quotelev1">&gt; clues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have also tried several MPI versions, including stable 1.8.7 and the
</span><br>
<span class="quotelev1">&gt; most recent 1.8.8rc1
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
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27387.php">http://www.open-mpi.org/community/lists/users/2015/08/27387.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27387.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
