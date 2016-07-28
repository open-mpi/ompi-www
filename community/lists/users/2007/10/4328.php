<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 12:38:33 2007" -->
<!-- isoreceived="20071025163833" -->
<!-- sent="Thu, 25 Oct 2007 18:38:28 +0200" -->
<!-- isosent="20071025163828" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process 0 with different time executing the same code" -->
<!-- id="9b0da5ce0710250938j6e086f85n9425b17fd72a4dca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="55443.202.125.157.194.1193308932.squirrel_at_webmail.niit.edu.pk" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 12:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4329.php">Tony Sheh: "Re: [OMPI users] xcode and openmpi"</a>
<li><strong>Previous message:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI
<br>
I'm not sure if that is a problem,
<br>
but in MPI applications you shoud
<br>
use MPI_WTime() for time-measurements
<br>
<p>Jody
<br>
<p>On 10/25/07, 42aftab_at_[hidden] &lt;42aftab_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;        I am a research assistant (RA) at NUST Pakistan in High Performance
</span><br>
<span class="quotelev1">&gt; Scientific Computing Lab. I am working on the parallel
</span><br>
<span class="quotelev1">&gt; implementation of the Finitie Difference Time Domain (FDTD) method
</span><br>
<span class="quotelev1">&gt; using MPI. I am using the OpenMPI environment on a cluster of 4
</span><br>
<span class="quotelev1">&gt; SunFire v890 cluster connected through Myrinet. I am having problem
</span><br>
<span class="quotelev1">&gt; that when I run my code with let say 4 processes. Process 0 takes
</span><br>
<span class="quotelev1">&gt; about 3 times more time than other three processes, executing a for
</span><br>
<span class="quotelev1">&gt; loop which is the main cause of load imbalance in my code. I am
</span><br>
<span class="quotelev1">&gt; writing the code that is causing the problem. The code is run by
</span><br>
<span class="quotelev1">&gt; all the processes simultaneously and independently and I have timed
</span><br>
<span class="quotelev1">&gt; it independent of segments of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     start = gethrtime();
</span><br>
<span class="quotelev1">&gt;     for (m = 1; m &lt; my_x ; m++){
</span><br>
<span class="quotelev1">&gt;       for (n = 1; n &lt; size_y-1; n++) {
</span><br>
<span class="quotelev1">&gt;              Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n)) -
</span><br>
<span class="quotelev1">&gt;                                     (Hx(m,n) - Hx(m,n-1)));
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      stop = gethrtime();
</span><br>
<span class="quotelev1">&gt;      time = (stop-start);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my implementation I used 1-D array to realize 2-D arrays.I have used
</span><br>
<span class="quotelev1">&gt; the following macros for accesing the array elements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #define Hx(I,J) hx[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev1">&gt;   #define Hy(I,J) hy[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev1">&gt;   #define Ez(I,J) ez[(I)*(size_y) + (J)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can any one tell me what am I doing wrong here, or macros are creating the
</span><br>
<span class="quotelev1">&gt; problems or it can be related to any OS issue. I will be looking forward
</span><br>
<span class="quotelev1">&gt; for help because this problem has stopped my progress for the last two
</span><br>
<span class="quotelev1">&gt; weeks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards aftab hussain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RA High Performance Scientific Computing Lab
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NUST Institue of Information Technology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; National University of Sciences and Technology Pakistan
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4329.php">Tony Sheh: "Re: [OMPI users] xcode and openmpi"</a>
<li><strong>Previous message:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
