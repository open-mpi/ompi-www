<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 14:29:32 2015" -->
<!-- isoreceived="20150805182932" -->
<!-- sent="Wed, 5 Aug 2015 12:29:30 -0600" -->
<!-- isosent="20150805182930" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAF1Cqj7QsxPs0dT7c36Wi1JZFYWfT83YZYf8i4U=SaavbXHPBA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKMpcFox1iAC5Ebf2c8jfC+f37P523UjZYMgq4z6YnHMMGK2UQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-05 14:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27393.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nate,
<br>
<p>Sorry for the delay in getting back.  Thanks for the sanity check.  You may
<br>
have a point about the args string to MPI.init -
<br>
there's nothing the Open MPI is needing from this but that is a difference
<br>
with your use case - your app has an argument.
<br>
<p>Would you mind adding a
<br>
<p>System.gc()
<br>
<p>call immediately after MPI.init call and see if the gc blows up with a
<br>
segfault?
<br>
<p>Also, may be interesting to add the -verbose:jni to your command line.
<br>
<p>We'll do some experiments here with the init string arg.
<br>
<p>Is your app open source where we could download it and try to reproduce the
<br>
problem locally?
<br>
<p>thanks,
<br>
<p>Howard
<br>
<p><p>2015-08-04 18:52 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Sanity checks pass. Both Hello and Ring.java run correctly with the
</span><br>
<span class="quotelev1">&gt; expected program's output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does MPI.init(args) expect anything from those command-line args?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 4, 2015 at 12:26 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Nate,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a sanity check of your installation, could you try to compile the
</span><br>
<span class="quotelev2">&gt;&gt; examples/*.java codes using the mpijavac you've installed and see that
</span><br>
<span class="quotelev2">&gt;&gt; those run correctly?
</span><br>
<span class="quotelev2">&gt;&gt; I'd be just interested in the Hello.java and Ring.java?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-08-04 14:34 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, I reran the configure with CC=gcc and then make install. I think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's the proper way to do it. Attached is my config log. The behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when running our code appears to be the same. The output is the same error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I pasted in my email above. It occurs when calling MPI.init().
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not great at debugging this sort of stuff, but happy to try things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out if you need me to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Aug 4, 2015 at 5:09 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Nate,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a first step to addressing this, could you please try using gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rather than the Intel compilers to build Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've been doing a lot of work recently on the java bindings, etc. but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have never tried using any compilers other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than gcc when working with the java bindings.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-08-03 17:36 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We've been struggling with this error for a while, so hoping someone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more knowledgeable can help!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our java MPI code exits with a segfault during its normal operation, *but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the segfault occurs before our code ever uses MPI functionality like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sending/receiving. *We've removed all message calls and any use of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI.COMM_WORLD from the code. The segfault occurs if we call MPI.init(args)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in our code, and does not if we comment that line out. Further vexing us,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the crash doesn't happen at the point of the MPI.init call, but later on in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the program. I don't have an easy-to-run example here because our non-MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code is so large and complicated. We have run simpler test programs with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI and the segfault does not occur.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have isolated the line where the segfault occurs. However, if we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comment that out, the program will run longer, but then randomly (but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; deterministically) segfault later on in the code. Does anyone have tips on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how to debug this? We have tried several flags with mpirun, but no good
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have also tried several MPI versions, including stable 1.8.7 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the most recent 1.8.8rc1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ATTACHED
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - config.log from installation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - output from `ompi_info -all`
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OUTPUT FROM RUNNING
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; mpirun -np 2 java -mx4g FeaturizeDay datadir/ days.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some normal output from our code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27389.php">http://www.open-mpi.org/community/lists/users/2015/08/27389.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27391.php">http://www.open-mpi.org/community/lists/users/2015/08/27391.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27392.php">http://www.open-mpi.org/community/lists/users/2015/08/27392.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27393.php">http://www.open-mpi.org/community/lists/users/2015/08/27393.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27393.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
