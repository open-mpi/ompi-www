<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 16:34:45 2015" -->
<!-- isoreceived="20150804203445" -->
<!-- sent="Tue, 4 Aug 2015 10:34:23 -1000" -->
<!-- isosent="20150804203423" -->
<!-- name="Nate Chambers" -->
<!-- email="nchamber_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAKMpcFr1h==qc=HcemkSqi45Lyjh+t2iLvWLtUiu4Whoig6K2g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj4OVZpdmROvpJMQduj19oU-kbHk2-qMH8UCv5VSCOe_TQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-04 16:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>In reply to:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, I reran the configure with CC=gcc and then make install. I think
<br>
that's the proper way to do it. Attached is my config log. The behavior
<br>
when running our code appears to be the same. The output is the same error
<br>
I pasted in my email above. It occurs when calling MPI.init().
<br>
<p>I'm not great at debugging this sort of stuff, but happy to try things out
<br>
if you need me to.
<br>
<p>Nate
<br>
<p><p>On Tue, Aug 4, 2015 at 5:09 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a first step to addressing this, could you please try using gcc rather
</span><br>
<span class="quotelev1">&gt; than the Intel compilers to build Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've been doing a lot of work recently on the java bindings, etc. but
</span><br>
<span class="quotelev1">&gt; have never tried using any compilers other
</span><br>
<span class="quotelev1">&gt; than gcc when working with the java bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-08-03 17:36 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've been struggling with this error for a while, so hoping someone more
</span><br>
<span class="quotelev2">&gt;&gt; knowledgeable can help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our java MPI code exits with a segfault during its normal operation, *but
</span><br>
<span class="quotelev2">&gt;&gt; the segfault occurs before our code ever uses MPI functionality like
</span><br>
<span class="quotelev2">&gt;&gt; sending/receiving. *We've removed all message calls and any use of
</span><br>
<span class="quotelev2">&gt;&gt; MPI.COMM_WORLD from the code. The segfault occurs if we call MPI.init(args)
</span><br>
<span class="quotelev2">&gt;&gt; in our code, and does not if we comment that line out. Further vexing us,
</span><br>
<span class="quotelev2">&gt;&gt; the crash doesn't happen at the point of the MPI.init call, but later on in
</span><br>
<span class="quotelev2">&gt;&gt; the program. I don't have an easy-to-run example here because our non-MPI
</span><br>
<span class="quotelev2">&gt;&gt; code is so large and complicated. We have run simpler test programs with
</span><br>
<span class="quotelev2">&gt;&gt; MPI and the segfault does not occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have isolated the line where the segfault occurs. However, if we
</span><br>
<span class="quotelev2">&gt;&gt; comment that out, the program will run longer, but then randomly (but
</span><br>
<span class="quotelev2">&gt;&gt; deterministically) segfault later on in the code. Does anyone have tips on
</span><br>
<span class="quotelev2">&gt;&gt; how to debug this? We have tried several flags with mpirun, but no good
</span><br>
<span class="quotelev2">&gt;&gt; clues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have also tried several MPI versions, including stable 1.8.7 and the
</span><br>
<span class="quotelev2">&gt;&gt; most recent 1.8.8rc1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ATTACHED
</span><br>
<span class="quotelev2">&gt;&gt; - config.log from installation
</span><br>
<span class="quotelev2">&gt;&gt; - output from `ompi_info -all`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT FROM RUNNING
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 2 java -mx4g FeaturizeDay datadir/ days.txt
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; some normal output from our code
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27389.php">http://www.open-mpi.org/community/lists/users/2015/08/27389.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27391/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>In reply to:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27392.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
