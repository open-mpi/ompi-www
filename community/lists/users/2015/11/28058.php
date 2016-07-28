<?
$subject_val = "Re: [OMPI users] mpijavac doesn't compile any thing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 09:37:50 2015" -->
<!-- isoreceived="20151119143750" -->
<!-- sent="Thu, 19 Nov 2015 07:37:47 -0700" -->
<!-- isosent="20151119143747" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpijavac doesn't compile any thing" -->
<!-- id="CAF1Cqj4n8=+Pz_ohF2KrWN-k0S82b1kv9E9NVQA8EyqNS7VxeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W362DC9FE94F7C2451345FA971B0_at_phx.gbl" -->
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
<strong>Date:</strong> 2015-11-19 09:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28059.php">Jeff Squyres (jsquyres): "[OMPI users] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<li><strong>Previous message:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>In reply to:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ibrahim,
<br>
<p>If you just try to compile with the javac do you at least see a &quot;error:
<br>
package mpi...&quot; does not exist?
<br>
Adding the &quot;-verbose&quot; option may also help with diagnosing the problem.
<br>
<p>If the javac doesn't get that far then your problem is with the java
<br>
install.
<br>
<p>Howard
<br>
<p><p><p>2015-11-19 6:45 GMT-07:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you for answering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command mpijavac --verbose Hello.java gives me the same result as
</span><br>
<span class="quotelev1">&gt; yours.
</span><br>
<span class="quotelev1">&gt; JAVA_HOME ist right at me, but I don't have neither JAVA_BINDIR nor
</span><br>
<span class="quotelev1">&gt; JAVA_ROOT.
</span><br>
<span class="quotelev1">&gt; I think that the both variables don't cause the problem, because I was
</span><br>
<span class="quotelev1">&gt; able to compile Hello.java before three days without any problem, but now I
</span><br>
<span class="quotelev1">&gt; cann't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Wed, 18 Nov 2015 20:16:31 -0700
</span><br>
<span class="quotelev1">&gt; From: hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpijavac doesn't compile any thing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a sanity check, could you try to compile the Hello.java in examples?
</span><br>
<span class="quotelev1">&gt; mpijavac --verbose Hello.java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you should see something like:
</span><br>
<span class="quotelev1">&gt; /usr/bin/javac -cp
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hpp/ompi_install/lib/mpi.jar:/global/homes/h/hpp/ompi_install/lib/shmem.jar
</span><br>
<span class="quotelev1">&gt; Hello.java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may also want to double check what your java env. variables, e.g.
</span><br>
<span class="quotelev1">&gt; JAVA_HOME, JAVA_ROOT, and JAVA_BINDIR
</span><br>
<span class="quotelev1">&gt; are set to.
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2015 7:26 AM, &quot;Ibrahim Ikhlawi&quot; &lt;ibrahim_22s_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28049.php">http://www.open-mpi.org/community/lists/users/2015/11/28049.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28057.php">http://www.open-mpi.org/community/lists/users/2015/11/28057.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28059.php">Jeff Squyres (jsquyres): "[OMPI users] Slides from the Open MPI SC'15 State of the Union BOF"</a>
<li><strong>Previous message:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>In reply to:</strong> <a href="28057.php">Ibrahim Ikhlawi: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
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
