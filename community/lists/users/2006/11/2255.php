<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 16:59:49 2006" -->
<!-- isoreceived="20061129215949" -->
<!-- sent="Wed, 29 Nov 2006 14:59:41 -0700" -->
<!-- isosent="20061129215941" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="[OMPI users] For Open MPI + BPROC users" -->
<!-- id="B349CF09-CFCF-4F54-A4EB-A004099F0E74_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 16:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2256.php">Dave Grote: "[OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Reply:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have found a potential issue with BPROC that may effect Open MPI.
<br>
Open MPI by default uses PTYs for I/O forwarding, if PTYs aren't  
<br>
setup on the compute nodes, Open MPI will revert to using pipes.  
<br>
Recently (today) we found a potential issue with PTYs and BPROC. A  
<br>
simple reader/writer using PTYs causes the writer to hang in  
<br>
uninterruptible sleep. The consistency of the process table from the  
<br>
head node and the back end nodes is also effected, that is &quot;bps&quot;  
<br>
shows no writer process, while &quot;bpsh NODE ps aux&quot; shows the writer  
<br>
process in uninterruptible sleep.
<br>
<p>Since Open MPI uses PTYs by default on BPROC this results in ORTED or  
<br>
MPI processes being orphaned on compute nodes. The workaround for  
<br>
this issue is to configure Open MPI with --disable-pty-support and  
<br>
rebuild.
<br>
<p><p>- Open MPI Team
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2256.php">Dave Grote: "[OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Reply:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
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
