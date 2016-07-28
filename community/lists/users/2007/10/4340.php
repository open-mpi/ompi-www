<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 04:10:07 2007" -->
<!-- isoreceived="20071029081007" -->
<!-- sent="Mon, 29 Oct 2007 01:09:31 -0700" -->
<!-- isosent="20071029080931" -->
<!-- name="Prasun Ratn" -->
<!-- email="prasun.r_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process 0 with different time executing the same code" -->
<!-- id="4725953B.1020005_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36237.202.125.157.194.1193640452.squirrel_at_webmail.niit.edu.pk" -->
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
<strong>From:</strong> Prasun Ratn (<em>prasun.r_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-29 04:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4341.php">Siamak Riahi: "[OMPI users] Differences between hostfile in LAM-MPI and OPEN MPI."</a>
<li><strong>Previous message:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is nothing MPI specific in your code snippet.
<br>
You should try to find out what is different in your
<br>
code for node 0. You have mentioned that you have
<br>
moved the root node to other nodes, so it's not machine
<br>
specific. You might be setting up the arrays differently
<br>
on the different nodes. You should also try using other
<br>
timers such as clock_gettime, gettimeofday etc to see
<br>
if the results are consistent.
<br>
Also, are you running multiple threads on the same processor?
<br>
Did you try out blocking etc ?
<br>
<p>42aftab_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;        Thanks for the help. I think that I don't have the cache issue
</span><br>
<span class="quotelev1">&gt; because all the processes have the same amount of data, and
</span><br>
<span class="quotelev1">&gt; accessed in the same fashion. My problem is solved partially as I
</span><br>
<span class="quotelev1">&gt; was using 2, 4, 8 , 16, 32 and 64 processes for my application
</span><br>
<span class="quotelev1">&gt; code. Now what I did I used 3 processes instead of 2 and 5 instead
</span><br>
<span class="quotelev1">&gt; of 4. In other words I used one extra process than what I was using
</span><br>
<span class="quotelev1">&gt; before. I forced process 0 to do nothing but just wait for other
</span><br>
<span class="quotelev1">&gt; processes to finish. In this way I am having same time, on all the
</span><br>
<span class="quotelev1">&gt; processes except process 0, for calculating the code segment that
</span><br>
<span class="quotelev1">&gt; was taking more time on process 0. So, still I need help and I will
</span><br>
<span class="quotelev1">&gt; be thankful for further help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards Aftab Hussain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, October 26, 2007 4:13 pm, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This is not an MPI problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without looking at your code in detail, I'm guessing that you're
</span><br>
<span class="quotelev2">&gt;&gt; accessing memory without any regard to memory layout and/or caching. Such
</span><br>
<span class="quotelev2">&gt;&gt; an access pattern will therefore thrash your L1 and L2 caches and access
</span><br>
<span class="quotelev2">&gt;&gt; memory in a truly horrible pattern that guarantees abysmal performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Google around for cache effects or check out an operating systems
</span><br>
<span class="quotelev2">&gt;&gt; textbook; there's lots of material around about this kind of effect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 26, 2007, at 5:10 AM, 42aftab_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The array bounds are the same on all the nodes and also the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes are identical i.e. SunFire V890 nodes. And I have also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changed the root process to be on different nodes, but the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remains the same. I still dont understand the problem very well and my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress is in stand still situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards aftab hussain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please ensure if following things are correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) The array bounds are equal. Means &quot;my_x&quot; and &quot;size_y&quot; has the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value on all nodes. 2) Nodes are homogenous. To check that, you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide root to be some different node and run the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Neeraj
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, October 26, 2007 10:13 am, 42aftab_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I used MPI_Wtime for my application but even then process 0 took
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; longer time executing the mentioned code segment. I might be worng, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  what I see is process 0 takes more time to access the array elements
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than other processes. Now I dont see what to do because the mentioned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code segment is creating a bottleneck for the timing of my application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can any one suggest somthing in this regard. I will be very thankful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aftab Hussain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, October 25, 2007 9:38 pm, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure if that is a problem,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but in MPI applications you shoud use MPI_WTime() for time-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; measurements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 10/25/07, 42aftab_at_[hidden] &lt;42aftab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am a research assistant (RA) at NUST Pakistan in High
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Performance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Scientific Computing Lab. I am working on the parallel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; implementation of the Finitie Difference Time Domain (FDTD) method
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  using MPI. I am using the OpenMPI environment on a cluster of 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SunFire v890 cluster connected through Myrinet. I am having
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem that when I run my code with let say 4 processes. Process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0 takes about 3 times more time than other three processes,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; executing a for loop which is the main cause of load imbalance in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my code. I am writing the code that is causing the problem. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code is run by all the processes simultaneously and independently
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and I have timed it independent of segments of code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start = gethrtime(); for (m = 1; m &lt; my_x ; m++){ for (n = 1; n &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  size_y-1; n++) { Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n))
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (Hx(m,n) - Hx(m,n-1)));
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; stop = gethrtime(); time = (stop-start);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In my implementation I used 1-D array to realize 2-D arrays.I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have used the following macros for accesing the array elements.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #define Hx(I,J) hx[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #define Hy(I,J) hy[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #define Ez(I,J) ez[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can any one tell me what am I doing wrong here, or macros are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; creating the problems or it can be related to any OS issue. I will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be looking forward for help because this problem has stopped my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; progress for the last two weeks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; regards aftab hussain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RA High Performance Scientific Computing Lab
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NUST Institue of Information Technology
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; National University of Sciences and Technology Pakistan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dangerous content by MailScanner, and is believed to be clean.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
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
<span class="quotelev4">&gt;&gt;&gt;&gt;         
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4341.php">Siamak Riahi: "[OMPI users] Differences between hostfile in LAM-MPI and OPEN MPI."</a>
<li><strong>Previous message:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
