<?
$subject_val = "Re: [OMPI users] How to allocate more memory to java OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 09:49:30 2016" -->
<!-- isoreceived="20160120144930" -->
<!-- sent="Wed, 20 Jan 2016 14:49:28 +0000" -->
<!-- isosent="20160120144928" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to allocate more memory to java OpenMPI" -->
<!-- id="DUB125-W11CCA9F04F1668EA7C41497C20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAF1Cqj7V2_jOps2jNOBGhT1DUBRkKSeWjQAjHdfS56gEJ65pxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to allocate more memory to java OpenMPI<br>
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-20 09:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28307.php">Siegmar Gross: "Re: [OMPI users] problemwithexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>I use 64bit JVM. The problem is not in the code, because I am still getting the same error when I run the Hello.java from examples folder.
<br>
Any other suggestion?
<br>
<p>Ibrahim 
<br>
<p>Date: Tue, 19 Jan 2016 09:48:24 -0700
<br>
From: hppritcha_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to allocate more memory to java OpenMPI
<br>
<p>HI Ibrahim,
<br>
Are you using a 32bit or 64bit JVM?
<br>
I don't think this is an Open MPI issue, but likely something owing to your app or your java setup.You may want to checkout 
<br>
<a href="http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html">http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html</a>
<br>
<p>If you'd like to post the java code to the list, I can try it out on some of the servers I use.
<br>
Howard
<br>
<p>2016-01-19 8:03 GMT-07:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
<br>
<p>Hallo,
<br>
<p>I'm working with  java OpenMPI on a server with 64GB memory. But when I run the java class I can only run it on until 15 processes (with this command: mpirun -np 15 java Multiplikation). Although there is 64GB memory, only about 3 GB will be used(with top command can I see that, the first two lines are below). When I run more than 15 processes I get this error:
<br>
<p>Error occurred during initialization of VM
<br>
java.lang.OutOfMemoryError: unable to create new native thread
<br>
<p><p>But I want to run it on more than 15 processes and use more than 3 GB. In Addition, after searching in google I have tried to run it with this command:
<br>
<p>mpirun -np 20 java -Xmx2096M -Xms1048M Multiplikation
<br>
<p>but I still get the same error.
<br>
<p>My question: How can I allocate java more memory, so that I run my program with more than 15 processes and more than 3GB memory?
<br>
<p>thanks in advance 
<br>
Ibrahim
<br>
<p>PS:
<br>
It may help, these are the first two lines from the top command:
<br>
<p>PID       PRI      VIRT    RES    SHR   S  CPU%  MEM%
<br>
23255   20   0 20.7G  103M 11916 S  2.0       0.2  0:52.14 java 
<br>
23559   20   0 20.7G 33772 11916 S  1.0       0.1  0:50.82 java 
<br>
<p><p><p><p><p><p><p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
_______________________________________________
<br>
<p><p><p><p><p><p>_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28302.php">http://www.open-mpi.org/community/lists/users/2016/01/28302.php</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28308/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28307.php">Siegmar Gross: "Re: [OMPI users] problemwithexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28309.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
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
