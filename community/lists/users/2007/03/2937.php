<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 28 09:57:06 2007" -->
<!-- isoreceived="20070328135706" -->
<!-- sent="Wed, 28 Mar 2007 06:56:59 -0700" -->
<!-- isosent="20070328135659" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Odd behavior with slots=4" -->
<!-- id="5B182E8E-70DE-4F84-A275-FFAA8876458E_at_apple.com" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-28 09:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2936.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2939.php">Götz Waschk: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Reply:</strong> <a href="2939.php">Götz Waschk: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Reply:</strong> <a href="2941.php">George Bosilca: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Maybe reply:</strong> <a href="2945.php">Warner Yuen: "Re: [OMPI users] Odd behavior with slots=4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Curious performance when using OpenMPI 1.2 to run Amber 9 on my  
<br>
Xserve Xeon 5100 cluster. Each cluster node is a dual socket, dual- 
<br>
core system. The cluster is also running with Myrinet 2000 with MX.  
<br>
I'm just running some tests with one of Amber's benchmarks.
<br>
<p>It seems that my hostfiles effect the performance of the application.  
<br>
I tried variations of the hostfile to see what would happen. I did a  
<br>
straight mpirun with no mca options set using: &quot;mpirun -np 32&quot;
<br>
<p>variation 1: hostname
<br>
real    0m35.391s
<br>
<p>variation 2: hostname slots=4
<br>
real    0m45.698s
<br>
<p>variation 3: hostname slots=2
<br>
real    0m38.761s
<br>
<p><p>It seems that the best performance I achieve is when I use variation  
<br>
1 with only the hostname and execute the command:
<br>
&nbsp;&nbsp;&quot;mpirun --hostfile hostfile -np 32 &lt;my_application&gt;&quot; . Its  
<br>
shockingly about 13% better performance than if I use the hostfile  
<br>
with a syntax of &quot;hostname slots=4&quot;.
<br>
<p>I also tried variations of in my mpirun command, here are the times:
<br>
<p>straight mpirun with not mca options
<br>
real    0m45.698s
<br>
<p>and....
<br>
<p>&quot;-mca mpi_yield_when_idle 0&quot;
<br>
real    0m44.912s
<br>
<p>and....
<br>
<p>&nbsp;&nbsp;&quot;-mca mtl mx -mca pml cm&quot;
<br>
real    0m45.002s
<br>
<p><p><p><p><p>Warner Yuen
<br>
Scientific Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2936.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2939.php">Götz Waschk: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Reply:</strong> <a href="2939.php">Götz Waschk: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Reply:</strong> <a href="2941.php">George Bosilca: "Re: [OMPI users] Odd behavior with slots=4"</a>
<li><strong>Maybe reply:</strong> <a href="2945.php">Warner Yuen: "Re: [OMPI users] Odd behavior with slots=4"</a>
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
