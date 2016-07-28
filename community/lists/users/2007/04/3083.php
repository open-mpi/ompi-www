<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 08:59:28 2007" -->
<!-- isoreceived="20070418125928" -->
<!-- sent="Wed, 18 Apr 2007 08:58:22 -0400" -->
<!-- isosent="20070418125822" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="1C4D8622-DBE0-4E0E-AAAB-B7A3E9EA3F36_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4626129A.4030008_at_aplpi.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 08:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look here:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
<p>General idea
<br>
<p>mpirun -np 2 --mca btl ^tcp  (to exclude ethernet)  replace with  
<br>
^openib (or ^mvapi)  to exclude infiniband.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Apr 18, 2007, at 8:44 AM, stephen mulcahy wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently conducting some testing on system with gigabit and
</span><br>
<span class="quotelev1">&gt; infiniband interconnects. I'm keen to baseline openmpi over both the
</span><br>
<span class="quotelev1">&gt; gigabit and infiniband interconnects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled it with defaults and run the Intel MPI Benchmarks  
</span><br>
<span class="quotelev1">&gt; PingPong
</span><br>
<span class="quotelev1">&gt; as follows to get an idea of latency and bandwidth between nodes on  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; given interconnect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.2/bin/mpirun --bynode -np 2 --hostfile ~/openmpi.hosts.80
</span><br>
<span class="quotelev1">&gt; ~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some reason, it looks like openmpi is using the infiniband
</span><br>
<span class="quotelev1">&gt; interconnect rather than the gigabit ... or the system I'm testing on
</span><br>
<span class="quotelev1">&gt; has an amazing latency! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;              0         1000         1.63         0.00
</span><br>
<span class="quotelev1">&gt;              1         1000         1.54         0.62
</span><br>
<span class="quotelev1">&gt;              2         1000         1.55         1.23
</span><br>
<span class="quotelev1">&gt;              4         1000         1.54         2.47
</span><br>
<span class="quotelev1">&gt;              8         1000         1.56         4.90
</span><br>
<span class="quotelev1">&gt;             16         1000         1.86         8.18
</span><br>
<span class="quotelev1">&gt;             32         1000         1.94        15.75
</span><br>
<span class="quotelev1">&gt;             64         1000         1.92        31.77
</span><br>
<span class="quotelev1">&gt;            128         1000         1.99        61.44
</span><br>
<span class="quotelev1">&gt;            256         1000         2.25       108.37
</span><br>
<span class="quotelev1">&gt;            512         1000         2.70       180.88
</span><br>
<span class="quotelev1">&gt;           1024         1000         3.64       267.99
</span><br>
<span class="quotelev1">&gt;           2048         1000         5.60       348.89
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read some of the FAQs and noted that OpenMPI prefers the faster
</span><br>
<span class="quotelev1">&gt; available interconnect. In an effort to force it to use the gigabit
</span><br>
<span class="quotelev1">&gt; interconnect I ran it as follows,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.2/bin/mpirun --mca btl tcp,self --bynode -np 2 --hostfile
</span><br>
<span class="quotelev1">&gt; ~/openmpi.hosts.80 ~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.2/bin/mpirun --mca btl_tcp_if_include eth0 --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self --bynode -np 2 --hostfile ~/openmpi.hosts.80
</span><br>
<span class="quotelev1">&gt; ~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither one resulted in a significantly different benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something obviously wrong in how I invoke openmpi here or
</span><br>
<span class="quotelev1">&gt; should I expect this to run over gigabit? Is there an option to mpirun
</span><br>
<span class="quotelev1">&gt; which I can provide to tell me what interconnect it does use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I gave a look at the ompi_info output but couldn't see any indication
</span><br>
<span class="quotelev1">&gt; that infiniband support was compiled in so I'm a little puzzled by  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; but the results speak for themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice on how to force the use of gigabit would be welcomed (I'll
</span><br>
<span class="quotelev1">&gt; use the infiniband interconnect aswell but I'm trying to determine the
</span><br>
<span class="quotelev1">&gt; performance to be had from infiniband for our model so I need to  
</span><br>
<span class="quotelev1">&gt; run it
</span><br>
<span class="quotelev1">&gt; with both).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -stephen
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business  
</span><br>
<span class="quotelev1">&gt; Center,
</span><br>
<span class="quotelev1">&gt; GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  http:// 
</span><br>
<span class="quotelev1">&gt; www.aplpi.com
</span><br>
<span class="quotelev1">&gt; Registered in Ireland (289353) (5 Woodlands Avenue, Renmore, Galway)
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
