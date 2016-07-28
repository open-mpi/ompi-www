<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 11:09:56 2015" -->
<!-- isoreceived="20150804150956" -->
<!-- sent="Tue, 4 Aug 2015 09:09:51 -0600" -->
<!-- isosent="20150804150951" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAF1Cqj4OVZpdmROvpJMQduj19oU-kbHk2-qMH8UCv5VSCOe_TQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-04 11:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>Previous message:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Nate,
<br>
<p>As a first step to addressing this, could you please try using gcc rather
<br>
than the Intel compilers to build Open MPI?
<br>
<p>We've been doing a lot of work recently on the java bindings, etc. but have
<br>
never tried using any compilers other
<br>
than gcc when working with the java bindings.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2015-08-03 17:36 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; We've been struggling with this error for a while, so hoping someone more
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>Previous message:</strong> <a href="27388.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
