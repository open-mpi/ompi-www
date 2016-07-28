<?
$subject_val = "Re: [OMPI users] mpijavac doesn't compile any thing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 08:45:45 2015" -->
<!-- isoreceived="20151119134545" -->
<!-- sent="Thu, 19 Nov 2015 13:45:40 +0000" -->
<!-- isosent="20151119134540" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpijavac doesn't compile any thing" -->
<!-- id="DUB125-W362DC9FE94F7C2451345FA971B0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAF1Cqj5USwZ7j-R6kSHX1XNKmQnPRipKgoi80c+xrovjZECmTw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 08:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Reply:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>thank you for answering.
<br>
<p>the command mpijavac --verbose Hello.java gives me the same result as yours.
<br>
JAVA_HOME ist right at me, but I don't have neither JAVA_BINDIR nor JAVA_ROOT. 
<br>
I think that the both variables don't cause the problem, because I was able to compile Hello.java before three days without any problem, but now I cann't.
<br>
<p>Ibrahim
<br>
<p><p>Date: Wed, 18 Nov 2015 20:16:31 -0700
<br>
From: hppritcha_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] mpijavac doesn't compile any thing
<br>
<p>Hello Ibrahim
<br>
<p>As a sanity check, could you try to compile the Hello.java in examples?
<br>
mpijavac --verbose Hello.java
<br>
<p>you should see something like:
<br>
/usr/bin/javac -cp /global/homes/h/hpp/ompi_install/lib/mpi.jar:/global/homes/h/hpp/ompi_install/lib/shmem.jar Hello.java
<br>
<p>You may also want to double check what your java env. variables, e.g. JAVA_HOME, JAVA_ROOT, and JAVA_BINDIR 
<br>
are set to.
<br>
Howard
<br>
<p><p><p><p><p><p><p>Hello,
<br>
<p>I am trying to compile java classes with mpijavac, but it doesn't compile any class, for examle:
<br>
Usually when I write the following line (mpijavac MyClass.java) in the console, it compiles and gives me the possible errors (e.g. missed semicolon) and the .class file will be created.
<br>
<p>But now when I compile any class with the same command (mpijavac AnyClass.java), it doesn't give me any error and the file AnyClass.class will be not created. 
<br>
<p>What could be the problem?
<br>
<p>Thanks in advance
<br>
Ibrahim
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
_______________________________________________
<br>
<p><p><p><p><p>_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28049.php">http://www.open-mpi.org/community/lists/users/2015/11/28049.php</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28056.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with	Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Reply:</strong> <a href="28058.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
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
