<?
$subject_val = "Re: [OMPI users] mpijavac doesn't compile any thing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 22:16:35 2015" -->
<!-- isoreceived="20151119031635" -->
<!-- sent="Wed, 18 Nov 2015 20:16:31 -0700" -->
<!-- isosent="20151119031631" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpijavac doesn't compile any thing" -->
<!-- id="CAF1Cqj5USwZ7j-R6kSHX1XNKmQnPRipKgoi80c+xrovjZECmTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W93E6AF81B5F0349C4D16A7971C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpijavac doesn't compile any thing<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-18 22:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28048.php">Erik Schnetter: "[OMPI users] Buffer allocation at startup"</a>
<li><strong>In reply to:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Reply:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ibrahim
<br>
<p>As a sanity check, could you try to compile the Hello.java in examples?
<br>
<p>mpijavac --verbose Hello.java
<br>
<p>you should see something like:
<br>
<p>/usr/bin/javac -cp
<br>
/global/homes/h/hpp/ompi_install/lib/mpi.jar:/global/homes/h/hpp/ompi_install/lib/shmem.jar
<br>
Hello.java
<br>
<p>You may also want to double check what your java env. variables, e.g.
<br>
JAVA_HOME, JAVA_ROOT, and JAVA_BINDIR
<br>
<p>are set to.
<br>
<p>Howard
<br>
<p><p><p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Nov 18, 2015 7:26 AM, &quot;Ibrahim Ikhlawi&quot; &lt;ibrahim_22s_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile java classes with mpijavac, but it doesn't compile
</span><br>
<span class="quotelev1">&gt; any class, for examle:
</span><br>
<span class="quotelev1">&gt; Usually when I write the following line (mpijavac MyClass.java) in the
</span><br>
<span class="quotelev1">&gt; console, it compiles and gives me the possible errors (e.g. missed
</span><br>
<span class="quotelev1">&gt; semicolon) and the .class file will be created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But now when I compile any class with the same command (mpijavac
</span><br>
<span class="quotelev1">&gt; AnyClass.java), it doesn't give me any error and the file AnyClass.class
</span><br>
<span class="quotelev1">&gt; will be not created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Ibrahim
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28047.php">http://www.open-mpi.org/community/lists/users/2015/11/28047.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28050.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28048.php">Erik Schnetter: "[OMPI users] Buffer allocation at startup"</a>
<li><strong>In reply to:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Reply:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
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
