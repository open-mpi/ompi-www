<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 03:01:07 2007" -->
<!-- isoreceived="20071026070107" -->
<!-- sent="26 Oct 2007 06:59:29 -0000" -->
<!-- isosent="20071026065929" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re: Process 0 with different time executing the same code" -->
<!-- id="1193377231.S.5981.1876.webmail108.rediffmail.com.1193381969.19344_at_webmail.rediffmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 02:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,&amp;nbsp;&amp;nbsp;&amp;nbsp; Please ensure if following things are correct1) The array bounds are equal. Means \&quot;my_x\&quot; and \&quot;size_y\&quot; has the same value on all nodes.2) Nodes are homogenous. To check that, you could decide root to be some different node and run the program-NeerajOn Fri, 26 Oct 2007 10:13:15 +0500 (PKT) Open MPI Users  wrote  Thanks for your reply,     I used MPI_Wtime for my application but even then process 0 took longer  time executing the mentioned code segment. I might be worng, but what I  see is process 0 takes more time to access the array elements than other  processes. Now I dont see what to do because the mentioned code segment  is creating a bottleneck for the timing of my application.    Can any one suggest somthing in this regard. I will be very thankful    regards    Aftab Hussain      On Thu, October 25, 2007 9:38 pm, jody wrote:  &amp;gt; HI  &amp;gt; I\'m not sure if that is a problem,  &amp;gt; but in MPI applications you shoud use MPI_WTime() for time-measurements  &amp;gt;  &amp;gt; Jody  &amp;gt;  &amp;g<br>
t;  &amp;gt; On 10/25/07, 42aftab_at_[hidden]  wrote:  &amp;gt;  &amp;gt;&amp;gt; Hi all,  &amp;gt;&amp;gt; I am a research assistant (RA) at NUST Pakistan in High Performance  &amp;gt;&amp;gt; Scientific Computing Lab. I am working on the parallel  &amp;gt;&amp;gt; implementation of the Finitie Difference Time Domain (FDTD) method using  &amp;gt;&amp;gt; MPI. I am using the OpenMPI environment on a cluster of 4  &amp;gt;&amp;gt; SunFire v890 cluster connected through Myrinet. I am having problem  &amp;gt;&amp;gt; that when I run my code with let say 4 processes. Process 0 takes about 3  &amp;gt;&amp;gt; times more time than other three processes, executing a for loop which  &amp;gt;&amp;gt; is the main cause of load imbalance in my code. I am writing the code  &amp;gt;&amp;gt; that is causing the problem. The code is run by all the processes  &amp;gt;&amp;gt; simultaneously and independently and I have timed it independent of  &amp;gt;&amp;gt; segments of code.  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; start = gethrtime(); for (m = 1; m &amp;lt; my_x ; m++){ for (n = 1; n &amp;gt; size_y-1; n++) { Ez(m,n) = Ez(m,n) + cezh*((Hy(m,n) - Hy(m<br>
-
<br>
1,n)) -  &amp;gt;&amp;gt; (Hx(m,n) - Hx(m,n-1)));  &amp;gt;&amp;gt; }  &amp;gt;&amp;gt; }  &amp;gt;&amp;gt; stop = gethrtime(); time = (stop-start);  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; In my implementation I used 1-D array to realize 2-D arrays.I have used  &amp;gt;&amp;gt;  the following macros for accesing the array elements.  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; #define Hx(I,J) hx[(I)*(size_y) + (J)]  &amp;gt;&amp;gt; #define Hy(I,J) hy[(I)*(size_y) + (J)]  &amp;gt;&amp;gt; #define Ez(I,J) ez[(I)*(size_y) + (J)]  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; Can any one tell me what am I doing wrong here, or macros are creating  &amp;gt;&amp;gt; the problems or it can be related to any OS issue. I will be looking  &amp;gt;&amp;gt; forward for help because this problem has stopped my progress for the  &amp;gt;&amp;gt; last two weeks  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; regards aftab hussain  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; RA High Performance Scientific Computing Lab  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; NUST Institue of Information Technology  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; National University of Sciences and Technology Pakistan  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt<br>
;&amp;gt;  &amp;gt;&amp;gt; --  &amp;gt;&amp;gt; This message has been scanned for viruses and  &amp;gt;&amp;gt; dangerous content by MailScanner, and is believed to be clean.  &amp;gt;&amp;gt;  &amp;gt;&amp;gt; _______________________________________________  &amp;gt;&amp;gt; users mailing list users_at_[hidden]  &amp;gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  &amp;gt;&amp;gt;  &amp;gt;&amp;gt;  &amp;gt; _______________________________________________  &amp;gt; users mailing list users_at_[hidden]  &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  &amp;gt;  &amp;gt;  &amp;gt; --  &amp;gt; This message has been scanned for viruses and  &amp;gt; dangerous content by MailScanner, and is believed to be clean.  &amp;gt;  &amp;gt;        --   This message has been scanned for viruses and  dangerous content by MailScanner, and is  believed to be clean.    _______________________________________________  users mailing list  users_at_[hidden]  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4332.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
