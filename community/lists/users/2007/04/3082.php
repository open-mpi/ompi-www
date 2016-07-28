<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 08:44:08 2007" -->
<!-- isoreceived="20070418124408" -->
<!-- sent="Wed, 18 Apr 2007 13:44:10 +0100" -->
<!-- isosent="20070418124410" -->
<!-- name="stephen mulcahy" -->
<!-- email="smulcahy_at_[hidden]" -->
<!-- subject="[OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="4626129A.4030008_at_aplpi.com" -->
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
<strong>From:</strong> stephen mulcahy (<em>smulcahy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 08:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently conducting some testing on system with gigabit and 
<br>
infiniband interconnects. I'm keen to baseline openmpi over both the 
<br>
gigabit and infiniband interconnects.
<br>
<p>I've compiled it with defaults and run the Intel MPI Benchmarks PingPong 
<br>
as follows to get an idea of latency and bandwidth between nodes on the 
<br>
given interconnect.
<br>
<p>~/openmpi-1.2/bin/mpirun --bynode -np 2 --hostfile ~/openmpi.hosts.80 
<br>
~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
<br>
<p>For some reason, it looks like openmpi is using the infiniband 
<br>
interconnect rather than the gigabit ... or the system I'm testing on 
<br>
has an amazing latency! :)
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.63         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         1.54         0.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         1.55         1.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         1.54         2.47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         1.56         4.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.86         8.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.94        15.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.92        31.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.99        61.44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         2.25       108.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         2.70       180.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         3.64       267.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         5.60       348.89
<br>
<p>I read some of the FAQs and noted that OpenMPI prefers the faster 
<br>
available interconnect. In an effort to force it to use the gigabit 
<br>
interconnect I ran it as follows,
<br>
<p>~/openmpi-1.2/bin/mpirun --mca btl tcp,self --bynode -np 2 --hostfile 
<br>
~/openmpi.hosts.80 ~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
<br>
<p>and
<br>
<p>~/openmpi-1.2/bin/mpirun --mca btl_tcp_if_include eth0 --mca btl 
<br>
tcp,self --bynode -np 2 --hostfile ~/openmpi.hosts.80 
<br>
~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
<br>
<p>Neither one resulted in a significantly different benchmark.
<br>
<p>Am I doing something obviously wrong in how I invoke openmpi here or 
<br>
should I expect this to run over gigabit? Is there an option to mpirun 
<br>
which I can provide to tell me what interconnect it does use?
<br>
<p>I gave a look at the ompi_info output but couldn't see any indication 
<br>
that infiniband support was compiled in so I'm a little puzzled by this 
<br>
but the results speak for themselves.
<br>
<p>Any advice on how to force the use of gigabit would be welcomed (I'll 
<br>
use the infiniband interconnect aswell but I'm trying to determine the 
<br>
performance to be had from infiniband for our model so I need to run it 
<br>
with both).
<br>
<p>Thanks,
<br>
<p>-stephen
<br>
<pre>
-- 
Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business Center,
GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  <a href="http://www.aplpi.com">http://www.aplpi.com</a>
Registered in Ireland (289353) (5 Woodlands Avenue, Renmore, Galway)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3083.php">Brock Palen: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
