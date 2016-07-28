<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 17 07:42:49 2006" -->
<!-- isoreceived="20060417114249" -->
<!-- sent="Mon, 17 Apr 2006 12:42:42 +0100" -->
<!-- isosent="20060417114242" -->
<!-- name="Shekhar Tyagi" -->
<!-- email="tyagis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling C++ program" -->
<!-- id="1145274162.44437f32e7cfa_at_mymail.tcd.ie" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F2D155B1-CCDC-43D8-9071-C2ABC78D0664_at_open-mpi.org" -->
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
<strong>From:</strong> Shekhar Tyagi (<em>tyagis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-17 07:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Brian
<br>
<p>I tried your command but i guess its not working, there is a warning and then
<br>
nothing much happens, the command window is shown below
<br>
<p>&nbsp;[styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc -showme
<br>
pgCC-Warning-Unknown switch: -showme
<br>
<p>Please help
<br>
Shekhar
<br>
<p><p><p><p>Quoting Brian Barrett &lt;brbarret_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Apr 16, 2006, at 11:52 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am new to MPI and prallel programming, recently i made two
</span><br>
<span class="quotelev2">&gt; &gt; programs one in C
</span><br>
<span class="quotelev2">&gt; &gt; and other in C++. The cluster on which i work is able to compile
</span><br>
<span class="quotelev2">&gt; &gt; and execute
</span><br>
<span class="quotelev2">&gt; &gt; the C program but its not able to make an executable file for C++
</span><br>
<span class="quotelev2">&gt; &gt; program.
</span><br>
<span class="quotelev2">&gt; &gt; The command i am using is mpiCC for C++ program but it looks as
</span><br>
<span class="quotelev2">&gt; &gt; though, the
</span><br>
<span class="quotelev2">&gt; &gt; wrapping compiler sends this to an infinte loop as its not able to
</span><br>
<span class="quotelev2">&gt; &gt; form an
</span><br>
<span class="quotelev2">&gt; &gt; executable file. My command window looks like this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and nothing happens afterwards. Please help me out in this regard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be surprised if this was the wrapper compiler, but it can be
</span><br>
<span class="quotelev1">&gt; pretty easy to choke a C++ compiler and make it take a long time to
</span><br>
<span class="quotelev1">&gt; compile.  An easy way to figure out which is the problem is to use
</span><br>
<span class="quotelev1">&gt; the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpiCC -o mathbyvec.out mathbyvec.cc -showme
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which will cause the wrapper compiler to show what command it is
</span><br>
<span class="quotelev1">&gt; going to execute rather than executing it.  You can then take that
</span><br>
<span class="quotelev1">&gt; command and run it.  If the underlying compiler takes a long time to
</span><br>
<span class="quotelev1">&gt; run, you know where the problem lies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
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
