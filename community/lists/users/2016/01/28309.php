<?
$subject_val = "Re: [OMPI users] How to allocate more memory to java OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 11:27:13 2016" -->
<!-- isoreceived="20160120162713" -->
<!-- sent="Wed, 20 Jan 2016 11:27:02 -0500" -->
<!-- isosent="20160120162702" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to allocate more memory to java OpenMPI" -->
<!-- id="CA+ssbKWhOAy1J-e1Abpn2J_rfSQTCjGm-zuHBMx+fKJVAukDig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W11CCA9F04F1668EA7C41497C20_at_phx.gbl" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-20 11:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ibrahim,
<br>
<p>This is most likely due to a ulimit setting. Check with *ulimit -a*
<br>
and set *ulimit
<br>
-n unlimited* and *ulimit -l unlimited*.
<br>
<p>I've experienced the same problem in the past and this was the reason.
<br>
<p>Hope this helps
<br>
<p>On Wed, Jan 20, 2016 at 9:49 AM, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use 64bit JVM. The problem is not in the code, because I am still
</span><br>
<span class="quotelev1">&gt; getting the same error when I run the Hello.java from examples folder.
</span><br>
<span class="quotelev1">&gt; Any other suggestion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Tue, 19 Jan 2016 09:48:24 -0700
</span><br>
<span class="quotelev1">&gt; From: hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to allocate more memory to java OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI Ibrahim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using a 32bit or 64bit JVM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think this is an Open MPI issue, but likely something owing to
</span><br>
<span class="quotelev1">&gt; your app or your java setup.
</span><br>
<span class="quotelev1">&gt; You may want to checkout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html">http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you'd like to post the java code to the list, I can try it out on some
</span><br>
<span class="quotelev1">&gt; of the servers I use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-19 8:03 GMT-07:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working with  java OpenMPI on a server with 64GB memory. But when I
</span><br>
<span class="quotelev1">&gt; run the java class I can only run it on until 15 processes (with this
</span><br>
<span class="quotelev1">&gt; command: mpirun -np 15 java Multiplikation). Although there is 64GB memory,
</span><br>
<span class="quotelev1">&gt; only about 3 GB will be used(with top command can I see that, the first two
</span><br>
<span class="quotelev1">&gt; lines are below). When I run more than 15 processes I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error occurred during initialization of VM
</span><br>
<span class="quotelev1">&gt; java.lang.OutOfMemoryError: unable to create new native thread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I want to run it on more than 15 processes and use more than 3 GB. In
</span><br>
<span class="quotelev1">&gt; Addition, after searching in google I have tried to run it with this
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 20 java -Xmx2096M -Xms1048M Multiplikation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I still get the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question: How can I allocate java more memory, so that I run my program
</span><br>
<span class="quotelev1">&gt; with more than 15 processes and more than 3GB memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS:
</span><br>
<span class="quotelev1">&gt; It may help, these are the first two lines from the top command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID       PRI      VIRT    RES    SHR   S  CPU%  MEM%
</span><br>
<span class="quotelev1">&gt; 23255   20   0 20.7G  103M 11916 S  2.0       0.2  0:52.14 java
</span><br>
<span class="quotelev1">&gt; 23559   20   0 20.7G 33772 11916 S  1.0       0.1  0:50.82 java
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28301.php">http://www.open-mpi.org/community/lists/users/2016/01/28301.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28302.php">http://www.open-mpi.org/community/lists/users/2016/01/28302.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28308.php">http://www.open-mpi.org/community/lists/users/2016/01/28308.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28309/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28310.php">Gilles Gouaillardet: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
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
