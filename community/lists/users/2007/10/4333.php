<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 07:14:07 2007" -->
<!-- isoreceived="20071026111407" -->
<!-- sent="Fri, 26 Oct 2007 07:13:57 -0400" -->
<!-- isosent="20071026111357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process 0 with different time executing the same code" -->
<!-- id="12B1E9B1-34DA-401A-AB2C-8B38113DDAE8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="40868.202.125.157.194.1193389844.squirrel_at_webmail.niit.edu.pk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 07:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4334.php">Neeraj Chourasia: "[OMPI users] MPI_Send issues with openib btl"</a>
<li><strong>Previous message:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not an MPI problem.
<br>
<p>Without looking at your code in detail, I'm guessing that you're  
<br>
accessing memory without any regard to memory layout and/or caching.   
<br>
Such an access pattern will therefore thrash your L1 and L2 caches  
<br>
and access memory in a truly horrible pattern that guarantees abysmal  
<br>
performance.
<br>
<p>Google around for cache effects or check out an operating systems  
<br>
textbook; there's lots of material around about this kind of effect.
<br>
<p>Good luck.
<br>
<p><p><p>On Oct 26, 2007, at 5:10 AM, 42aftab_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The array bounds are the same on all the nodes and also the  
</span><br>
<span class="quotelev1">&gt; compute nodes
</span><br>
<span class="quotelev1">&gt; are identical i.e. SunFire V890 nodes. And I have also changed the  
</span><br>
<span class="quotelev1">&gt; root
</span><br>
<span class="quotelev1">&gt; process to be on different nodes, but the problem remains the same. I
</span><br>
<span class="quotelev1">&gt; still dont understand the problem very well and my progress is in  
</span><br>
<span class="quotelev1">&gt; stand
</span><br>
<span class="quotelev1">&gt; still situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards aftab hussain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please ensure if following things are correct
</span><br>
<span class="quotelev1">&gt; 1) The array bounds are equal. Means &quot;my_x&quot; and &quot;size_y&quot; has the same
</span><br>
<span class="quotelev1">&gt; value on all nodes.
</span><br>
<span class="quotelev1">&gt; 2) Nodes are homogenous. To check that, you could decide root to be  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; different node and run the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, October 26, 2007 10:13 am, 42aftab_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used MPI_Wtime for my application but even then process 0 took  
</span><br>
<span class="quotelev2">&gt;&gt; longer
</span><br>
<span class="quotelev2">&gt;&gt; time executing the mentioned code segment. I might be worng, but  
</span><br>
<span class="quotelev2">&gt;&gt; what I see
</span><br>
<span class="quotelev2">&gt;&gt; is process 0 takes more time to access the array elements than other
</span><br>
<span class="quotelev2">&gt;&gt; processes. Now I dont see what to do because the mentioned code  
</span><br>
<span class="quotelev2">&gt;&gt; segment is
</span><br>
<span class="quotelev2">&gt;&gt; creating a bottleneck for the timing of my application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can any one suggest somthing in this regard. I will be very thankful
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aftab Hussain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, October 25, 2007 9:38 pm, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure if that is a problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but in MPI applications you shoud use MPI_WTime() for time- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; measurements
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/25/07, 42aftab_at_[hidden] &lt;42aftab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am a research assistant (RA) at NUST Pakistan in High Performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Computing Lab. I am working on the parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementation of the Finitie Difference Time Domain (FDTD) method
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using MPI. I am using the OpenMPI environment on a cluster of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SunFire v890 cluster connected through Myrinet. I am having problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that when I run my code with let say 4 processes. Process 0 takes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about 3 times more time than other three processes, executing a for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; loop which is the main cause of load imbalance in my code. I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; writing the code that is causing the problem. The code is run by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the processes simultaneously and independently and I have timed it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; independent of segments of code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start = gethrtime(); for (m = 1; m &lt; my_x ; m++){ for (n = 1; n &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; size_y-1; n++) { Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n)) -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Hx(m,n) - Hx(m,n-1)));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop = gethrtime(); time = (stop-start);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my implementation I used 1-D array to realize 2-D arrays.I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used the following macros for accesing the array elements.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define Hx(I,J) hx[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define Hy(I,J) hy[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define Ez(I,J) ez[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can any one tell me what am I doing wrong here, or macros are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; creating the problems or it can be related to any OS issue. I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking forward for help because this problem has stopped my  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; progress
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the last two weeks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards aftab hussain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RA High Performance Scientific Computing Lab
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NUST Institue of Information Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; National University of Sciences and Technology Pakistan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev1">&gt; believed to be clean.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4334.php">Neeraj Chourasia: "[OMPI users] MPI_Send issues with openib btl"</a>
<li><strong>Previous message:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
