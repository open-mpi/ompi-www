<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 05:11:36 2007" -->
<!-- isoreceived="20071026091136" -->
<!-- sent="Fri, 26 Oct 2007 14:10:44 +0500 (PKT)" -->
<!-- isosent="20071026091044" -->
<!-- name="42aftab_at_[hidden]" -->
<!-- email="42aftab_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process 0 with different time executing the same code" -->
<!-- id="40868.202.125.157.194.1193389844.squirrel_at_webmail.niit.edu.pk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="40662.202.125.157.194.1193375595.squirrel_at_webmail.niit.edu.pk" -->
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
<strong>From:</strong> <a href="mailto:42aftab_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Process%200%20with%20different%20time%20executing%20the%20same%20code"><em>42aftab_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-10-26 05:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4331.php">Neeraj Chourasia: "[OMPI users] Re :Re: Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
<p>&nbsp;The array bounds are the same on all the nodes and also the compute nodes
<br>
are identical i.e. SunFire V890 nodes. And I have also changed the root
<br>
process to be on different nodes, but the problem remains the same. I
<br>
still dont understand the problem very well and my progress is in stand
<br>
still situation.
<br>
<p>regards aftab hussain
<br>
<p>Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Please ensure if following things are correct
<br>
1) The array bounds are equal. Means &quot;my_x&quot; and &quot;size_y&quot; has the same
<br>
value on all nodes.
<br>
2) Nodes are homogenous. To check that, you could decide root to be some
<br>
different node and run the program
<br>
<p>-Neeraj
<br>
<p><p>On Fri, October 26, 2007 10:13 am, 42aftab_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Thanks for your reply,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used MPI_Wtime for my application but even then process 0 took longer
</span><br>
<span class="quotelev1">&gt; time executing the mentioned code segment. I might be worng, but what I see
</span><br>
<span class="quotelev1">&gt; is process 0 takes more time to access the array elements than other
</span><br>
<span class="quotelev1">&gt; processes. Now I dont see what to do because the mentioned code segment is
</span><br>
<span class="quotelev1">&gt; creating a bottleneck for the timing of my application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can any one suggest somthing in this regard. I will be very thankful
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aftab Hussain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, October 25, 2007 9:38 pm, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if that is a problem,
</span><br>
<span class="quotelev2">&gt;&gt; but in MPI applications you shoud use MPI_WTime() for time-measurements
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/25/07, 42aftab_at_[hidden] &lt;42aftab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am a research assistant (RA) at NUST Pakistan in High Performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Computing Lab. I am working on the parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation of the Finitie Difference Time Domain (FDTD) method
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using MPI. I am using the OpenMPI environment on a cluster of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SunFire v890 cluster connected through Myrinet. I am having problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that when I run my code with let say 4 processes. Process 0 takes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about 3 times more time than other three processes, executing a for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop which is the main cause of load imbalance in my code. I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; writing the code that is causing the problem. The code is run by all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the processes simultaneously and independently and I have timed it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; independent of segments of code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start = gethrtime(); for (m = 1; m &lt; my_x ; m++){ for (n = 1; n &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size_y-1; n++) { Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n)) -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Hx(m,n) - Hx(m,n-1)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop = gethrtime(); time = (stop-start);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my implementation I used 1-D array to realize 2-D arrays.I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used the following macros for accesing the array elements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define Hx(I,J) hx[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define Hy(I,J) hy[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define Ez(I,J) ez[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can any one tell me what am I doing wrong here, or macros are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creating the problems or it can be related to any OS issue. I will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking forward for help because this problem has stopped my progress
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the last two weeks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards aftab hussain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RA High Performance Scientific Computing Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUST Institue of Information Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; National University of Sciences and Technology Pakistan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev2">&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4331.php">Neeraj Chourasia: "[OMPI users] Re :Re: Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4333.php">Jeff Squyres: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
