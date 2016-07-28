<?
$subject_val = "Re: [OMPI users] How to allocate more memory to java OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 11:48:25 2016" -->
<!-- isoreceived="20160119164825" -->
<!-- sent="Tue, 19 Jan 2016 09:48:24 -0700" -->
<!-- isosent="20160119164824" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to allocate more memory to java OpenMPI" -->
<!-- id="CAF1Cqj7V2_jOps2jNOBGhT1DUBRkKSeWjQAjHdfS56gEJ65pxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W33CD628A5585CDA32C1B0D97C10_at_phx.gbl" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-19 11:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28303.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28301.php">Ibrahim Ikhlawi: "[OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28301.php">Ibrahim Ikhlawi: "[OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ibrahim,
<br>
<p>Are you using a 32bit or 64bit JVM?
<br>
<p>I don't think this is an Open MPI issue, but likely something owing to your
<br>
app or your java setup.
<br>
You may want to checkout
<br>
<p><a href="http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html">http://javaeesupportpatterns.blogspot.com/2012/09/outofmemoryerror-unable-to-create-new.html</a>
<br>
<p>If you'd like to post the java code to the list, I can try it out on some
<br>
of the servers I use.
<br>
<p>Howard
<br>
<p><p>2016-01-19 8:03 GMT-07:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28303.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28301.php">Ibrahim Ikhlawi: "[OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28301.php">Ibrahim Ikhlawi: "[OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
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
