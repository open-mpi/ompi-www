<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 28 12:19:27 2007" -->
<!-- isoreceived="20070328161927" -->
<!-- sent="Wed, 28 Mar 2007 12:19:15 -0400" -->
<!-- isosent="20070328161915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd behavior with slots=4" -->
<!-- id="2A58CF38-0FC4-4289-85E1-315376540F63_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5B182E8E-70DE-4F84-A275-FFAA8876458E_at_apple.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-28 12:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2942.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2940.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2945.php">Warner Yuen: "Re: [OMPI users] Odd behavior with slots=4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are multiple answers possible here. One is related to the over- 
<br>
subscription of your cluster, but I expect that there are at least 4  
<br>
cores per node if you want to use the slots=4 option. The real  
<br>
question is what is the communication pattern in this benchmark ? and  
<br>
how this match the distribution of the processes you use ?
<br>
<p>As a matter of fact, if when you have XX processes per node, and all  
<br>
of them will try to send a message to a remote process (here remote  
<br>
means on another node), then they will have to share the physical  
<br>
Myrinet link, which of course will lead to lower global performances  
<br>
when XX increase (from 1, to 2 and then 4). And this is true without  
<br>
regard on how you use the MX driver (via the Open MPI MTL or BTL).
<br>
<p>Open MPI provide 2 options to allow you to distribute the processes  
<br>
based on different criteria. Try to use -bynode and -byslot to see if  
<br>
this affect the overall performances.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 28, 2007, at 9:56 AM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Curious performance when using OpenMPI 1.2 to run Amber 9 on my  
</span><br>
<span class="quotelev1">&gt; Xserve Xeon 5100 cluster. Each cluster node is a dual socket, dual- 
</span><br>
<span class="quotelev1">&gt; core system. The cluster is also running with Myrinet 2000 with MX.  
</span><br>
<span class="quotelev1">&gt; I'm just running some tests with one of Amber's benchmarks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that my hostfiles effect the performance of the  
</span><br>
<span class="quotelev1">&gt; application. I tried variations of the hostfile to see what would  
</span><br>
<span class="quotelev1">&gt; happen. I did a straight mpirun with no mca options set using:  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 32&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variation 1: hostname
</span><br>
<span class="quotelev1">&gt; real    0m35.391s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variation 2: hostname slots=4
</span><br>
<span class="quotelev1">&gt; real    0m45.698s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variation 3: hostname slots=2
</span><br>
<span class="quotelev1">&gt; real    0m38.761s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the best performance I achieve is when I use  
</span><br>
<span class="quotelev1">&gt; variation 1 with only the hostname and execute the command:
</span><br>
<span class="quotelev1">&gt;  &quot;mpirun --hostfile hostfile -np 32 &lt;my_application&gt;&quot; . Its  
</span><br>
<span class="quotelev1">&gt; shockingly about 13% better performance than if I use the hostfile  
</span><br>
<span class="quotelev1">&gt; with a syntax of &quot;hostname slots=4&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried variations of in my mpirun command, here are the times:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; straight mpirun with not mca options
</span><br>
<span class="quotelev1">&gt; real    0m45.698s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;-mca mpi_yield_when_idle 0&quot;
</span><br>
<span class="quotelev1">&gt; real    0m44.912s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &quot;-mca mtl mx -mca pml cm&quot;
</span><br>
<span class="quotelev1">&gt; real    0m45.002s
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
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2942.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2940.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2945.php">Warner Yuen: "Re: [OMPI users] Odd behavior with slots=4"</a>
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
