<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 01:14:04 2007" -->
<!-- isoreceived="20071026051404" -->
<!-- sent="Fri, 26 Oct 2007 10:13:15 +0500 (PKT)" -->
<!-- isosent="20071026051315" -->
<!-- name="42aftab_at_[hidden]" -->
<!-- email="42aftab_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process 0 with different time executing the same code" -->
<!-- id="40662.202.125.157.194.1193375595.squirrel_at_webmail.niit.edu.pk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9b0da5ce0710250938j6e086f85n9425b17fd72a4dca_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-26 01:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4331.php">Neeraj Chourasia: "[OMPI users] Re :Re: Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4329.php">Tony Sheh: "Re: [OMPI users] xcode and openmpi"</a>
<li><strong>In reply to:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply,
<br>
<p>&nbsp;I used MPI_Wtime for my application but even then process 0 took longer
<br>
time executing the mentioned code segment. I might be worng, but what I
<br>
see is process 0 takes more time to access the array elements than other
<br>
processes. Now I dont see what to do because the mentioned code segment
<br>
is creating a bottleneck for the timing of my application.
<br>
<p>Can any one suggest somthing in this regard. I will be very thankful
<br>
<p>regards
<br>
<p>Aftab Hussain
<br>
<p><p>On Thu, October 25, 2007 9:38 pm, jody wrote:
<br>
<span class="quotelev1">&gt; HI
</span><br>
<span class="quotelev1">&gt; I'm not sure if that is a problem,
</span><br>
<span class="quotelev1">&gt; but in MPI applications you shoud use MPI_WTime() for time-measurements
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/25/07, 42aftab_at_[hidden] &lt;42aftab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I am a research assistant (RA) at NUST Pakistan in High Performance
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Computing Lab. I am working on the parallel
</span><br>
<span class="quotelev2">&gt;&gt; implementation of the Finitie Difference Time Domain (FDTD) method using
</span><br>
<span class="quotelev2">&gt;&gt; MPI. I am using the OpenMPI environment on a cluster of 4
</span><br>
<span class="quotelev2">&gt;&gt; SunFire v890 cluster connected through Myrinet. I am having problem
</span><br>
<span class="quotelev2">&gt;&gt; that when I run my code with let say 4 processes. Process 0 takes about 3
</span><br>
<span class="quotelev2">&gt;&gt; times more time than other three processes, executing a for loop which
</span><br>
<span class="quotelev2">&gt;&gt; is the main cause of load imbalance in my code. I am writing the code
</span><br>
<span class="quotelev2">&gt;&gt; that is causing the problem. The code is run by all the processes
</span><br>
<span class="quotelev2">&gt;&gt; simultaneously and independently and I have timed it independent of
</span><br>
<span class="quotelev2">&gt;&gt; segments of code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; start = gethrtime(); for (m = 1; m &lt; my_x ; m++){ for (n = 1; n &lt;
</span><br>
<span class="quotelev2">&gt;&gt; size_y-1; n++) { Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n)) -
</span><br>
<span class="quotelev2">&gt;&gt; (Hx(m,n) - Hx(m,n-1)));
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; stop = gethrtime(); time = (stop-start);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my implementation I used 1-D array to realize 2-D arrays.I have used
</span><br>
<span class="quotelev2">&gt;&gt;  the following macros for accesing the array elements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define Hx(I,J) hx[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt; #define Hy(I,J) hy[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt; #define Ez(I,J) ez[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can any one tell me what am I doing wrong here, or macros are creating
</span><br>
<span class="quotelev2">&gt;&gt; the problems or it can be related to any OS issue. I will be looking
</span><br>
<span class="quotelev2">&gt;&gt; forward for help because this problem has stopped my progress for the
</span><br>
<span class="quotelev2">&gt;&gt; last two weeks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards aftab hussain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RA High Performance Scientific Computing Lab
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NUST Institue of Information Technology
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; National University of Sciences and Technology Pakistan
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev2">&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt; dangerous content by MailScanner, and is believed to be clean.
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
<li><strong>Next message:</strong> <a href="4331.php">Neeraj Chourasia: "[OMPI users] Re :Re: Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4329.php">Tony Sheh: "Re: [OMPI users] xcode and openmpi"</a>
<li><strong>In reply to:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
