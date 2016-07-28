<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 16:35:04 2006" -->
<!-- isoreceived="20060104213504" -->
<!-- sent="Wed, 4 Jan 2006 16:34:57 -0500" -->
<!-- isosent="20060104213457" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] LAM vs OPENMPI performance" -->
<!-- id="1E6B637A-3050-486A-91E7-C984A721FE1C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43BC3D04.3070103_at_reachone.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 16:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2006, at 4:24 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I have been using LAM-MPI for many years on PC/Linux systems and
</span><br>
<span class="quotelev1">&gt; have been quite pleased with its performance.  However, at the  
</span><br>
<span class="quotelev1">&gt; urging of the
</span><br>
<span class="quotelev1">&gt; LAM-MPI website, I have decided to switch to OPENMPI.  For much of my
</span><br>
<span class="quotelev1">&gt; preliminary testing I work on a single processor workstation (see  
</span><br>
<span class="quotelev1">&gt; the attached
</span><br>
<span class="quotelev1">&gt; 'config.log' and ompi_info.log files for some of the specifics of  
</span><br>
<span class="quotelev1">&gt; my system). I
</span><br>
<span class="quotelev1">&gt; frequently run with more than one virtual mpi processor (i.e.  
</span><br>
<span class="quotelev1">&gt; oversubscribe
</span><br>
<span class="quotelev1">&gt; the real processor) to test my code.  With LAM the runtime penalty  
</span><br>
<span class="quotelev1">&gt; for this
</span><br>
<span class="quotelev1">&gt; is usually insignificant for 2-4 virtual processors, but with  
</span><br>
<span class="quotelev1">&gt; OPENMPI it has
</span><br>
<span class="quotelev1">&gt; been prohibitive.  Below is a matrix of runtimes for a simple MPI  
</span><br>
<span class="quotelev1">&gt; matrix
</span><br>
<span class="quotelev1">&gt; transpose code using mpi_sendrecv( I tried other variations of  
</span><br>
<span class="quotelev1">&gt; blocking/
</span><br>
<span class="quotelev1">&gt; non-blocking, synchronous/non-synchronous send/recv with similar  
</span><br>
<span class="quotelev1">&gt; results).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       message size=      262144  bytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                  LAM                OPENMPI
</span><br>
<span class="quotelev1">&gt;                 1 proc:  .02575 secs          .02513 secs
</span><br>
<span class="quotelev1">&gt;                 2 proc:  .04603 secs          10.069 secs
</span><br>
<span class="quotelev1">&gt;                 4 proc:  .04903 secs          35.422 secs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am pretty sure that LAM exploits the fact that the virtual  
</span><br>
<span class="quotelev1">&gt; processors are all
</span><br>
<span class="quotelev1">&gt; sharing the same memory,  so communication is via memory and/or the  
</span><br>
<span class="quotelev1">&gt; PCI bus
</span><br>
<span class="quotelev1">&gt; of the system, while my OPENMPI configuration doesn't exploit  
</span><br>
<span class="quotelev1">&gt; this.  Is this
</span><br>
<span class="quotelev1">&gt; a reasonable diagnosis of the dramatic difference in performance?   
</span><br>
<span class="quotelev1">&gt; More
</span><br>
<span class="quotelev1">&gt; importantly, how to I reconfigure OPENMPI to match the LAM  
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<p>Based on the output of ompi_info, you should be using shared memory  
<br>
with Open MPI (as you are with LAM/MPI).  What RPI are you using with  
<br>
LAM/MPI (just so we have some idea what you are comparing to)?  And  
<br>
how are you running Open MPI (what command are you passing to mpirun,  
<br>
and if you include a hostfile, what is in that host file)?
<br>
<p>If you tell Open MPI via a hostfile that a machine has 2 cpus when it  
<br>
only has 1 and try to run 2 processes on it, you will run into severe  
<br>
performance issues.  In that case, Open MPI will poll very quickly on  
<br>
the CPUs, not giving up the CPU when there is nothing to do.  If Open  
<br>
MPI is told that there is only 1 cpu and you run 2 procs of the same  
<br>
job on that node, then it will be much better about giving up the  
<br>
CPU.  That would be where I would start looking.
<br>
<p>If you have some test code you could share, I'd love to see it - it  
<br>
would help in duplicating your results and finding a solution...
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
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
