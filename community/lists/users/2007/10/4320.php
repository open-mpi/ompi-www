<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 06:42:49 2007" -->
<!-- isoreceived="20071025104249" -->
<!-- sent="Thu, 25 Oct 2007 15:42:12 +0500 (PKT)" -->
<!-- isosent="20071025104212" -->
<!-- name="42aftab_at_[hidden]" -->
<!-- email="42aftab_at_[hidden]" -->
<!-- subject="[OMPI users] Process 0 with different time executing the same code" -->
<!-- id="55443.202.125.157.194.1193308932.squirrel_at_webmail.niit.edu.pk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2007-10-25 06:42:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am a research assistant (RA) at NUST Pakistan in High Performance
<br>
Scientific Computing Lab. I am working on the parallel
<br>
implementation of the Finitie Difference Time Domain (FDTD) method
<br>
using MPI. I am using the OpenMPI environment on a cluster of 4
<br>
SunFire v890 cluster connected through Myrinet. I am having problem
<br>
that when I run my code with let say 4 processes. Process 0 takes
<br>
about 3 times more time than other three processes, executing a for
<br>
loop which is the main cause of load imbalance in my code. I am
<br>
writing the code that is causing the problem. The code is run by
<br>
all the processes simultaneously and independently and I have timed
<br>
it independent of segments of code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;start = gethrtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (m = 1; m &lt; my_x ; m++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (n = 1; n &lt; size_y-1; n++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m-1,n)) -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Hx(m,n) - Hx(m,n-1)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop = gethrtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = (stop-start);
<br>
<p>In my implementation I used 1-D array to realize 2-D arrays.I have used
<br>
the following macros for accesing the array elements.
<br>
<p>&nbsp;&nbsp;#define Hx(I,J) hx[(I)*(size_y) + (J)]
<br>
&nbsp;&nbsp;#define Hy(I,J) hy[(I)*(size_y) + (J)]
<br>
&nbsp;&nbsp;#define Ez(I,J) ez[(I)*(size_y) + (J)]
<br>
<p>Can any one tell me what am I doing wrong here, or macros are creating the
<br>
problems or it can be related to any OS issue. I will be looking forward
<br>
for help because this problem has stopped my progress for the last two
<br>
weeks
<br>
<p>regards aftab hussain
<br>
<p>RA High Performance Scientific Computing Lab
<br>
<p>NUST Institue of Information Technology
<br>
<p>National University of Sciences and Technology Pakistan
<br>
<p><p><p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Reply:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
