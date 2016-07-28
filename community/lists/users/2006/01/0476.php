<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 17:03:56 2006" -->
<!-- isoreceived="20060104220356" -->
<!-- sent="Wed, 04 Jan 2006 14:05:11 -0800" -->
<!-- isosent="20060104220511" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] LAM vs OPENMPI performance" -->
<!-- id="43BC4697.2060602_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E6B637A-3050-486A-91E7-C984A721FE1C_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 17:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Brian Barrett: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick reply. I ran my tests with a hostfile with
<br>
cedar.reachone.com slots=4
<br>
<p>I clearly misunderstood the role of the 'slots' parameter, because
<br>
when I removed it, OPENMPI slightly outperformed LAM, which I
<br>
assume it should. Thanks for the help.
<br>
<p>Tom
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Jan 4, 2006, at 4:24 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have been using LAM-MPI for many years on PC/Linux systems and
</span><br>
<span class="quotelev2">&gt;&gt;have been quite pleased with its performance.  However, at the  
</span><br>
<span class="quotelev2">&gt;&gt;urging of the
</span><br>
<span class="quotelev2">&gt;&gt;LAM-MPI website, I have decided to switch to OPENMPI.  For much of my
</span><br>
<span class="quotelev2">&gt;&gt;preliminary testing I work on a single processor workstation (see  
</span><br>
<span class="quotelev2">&gt;&gt;the attached
</span><br>
<span class="quotelev2">&gt;&gt;'config.log' and ompi_info.log files for some of the specifics of  
</span><br>
<span class="quotelev2">&gt;&gt;my system). I
</span><br>
<span class="quotelev2">&gt;&gt;frequently run with more than one virtual mpi processor (i.e.  
</span><br>
<span class="quotelev2">&gt;&gt;oversubscribe
</span><br>
<span class="quotelev2">&gt;&gt;the real processor) to test my code.  With LAM the runtime penalty  
</span><br>
<span class="quotelev2">&gt;&gt;for this
</span><br>
<span class="quotelev2">&gt;&gt;is usually insignificant for 2-4 virtual processors, but with  
</span><br>
<span class="quotelev2">&gt;&gt;OPENMPI it has
</span><br>
<span class="quotelev2">&gt;&gt;been prohibitive.  Below is a matrix of runtimes for a simple MPI  
</span><br>
<span class="quotelev2">&gt;&gt;matrix
</span><br>
<span class="quotelev2">&gt;&gt;transpose code using mpi_sendrecv( I tried other variations of  
</span><br>
<span class="quotelev2">&gt;&gt;blocking/
</span><br>
<span class="quotelev2">&gt;&gt;non-blocking, synchronous/non-synchronous send/recv with similar  
</span><br>
<span class="quotelev2">&gt;&gt;results).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      message size=      262144  bytes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 LAM                OPENMPI
</span><br>
<span class="quotelev2">&gt;&gt;                1 proc:  .02575 secs          .02513 secs
</span><br>
<span class="quotelev2">&gt;&gt;                2 proc:  .04603 secs          10.069 secs
</span><br>
<span class="quotelev2">&gt;&gt;                4 proc:  .04903 secs          35.422 secs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am pretty sure that LAM exploits the fact that the virtual  
</span><br>
<span class="quotelev2">&gt;&gt;processors are all
</span><br>
<span class="quotelev2">&gt;&gt;sharing the same memory,  so communication is via memory and/or the  
</span><br>
<span class="quotelev2">&gt;&gt;PCI bus
</span><br>
<span class="quotelev2">&gt;&gt;of the system, while my OPENMPI configuration doesn't exploit  
</span><br>
<span class="quotelev2">&gt;&gt;this.  Is this
</span><br>
<span class="quotelev2">&gt;&gt;a reasonable diagnosis of the dramatic difference in performance?   
</span><br>
<span class="quotelev2">&gt;&gt;More
</span><br>
<span class="quotelev2">&gt;&gt;importantly, how to I reconfigure OPENMPI to match the LAM  
</span><br>
<span class="quotelev2">&gt;&gt;performance.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Based on the output of ompi_info, you should be using shared memory  
</span><br>
<span class="quotelev1">&gt;with Open MPI (as you are with LAM/MPI).  What RPI are you using with  
</span><br>
<span class="quotelev1">&gt;LAM/MPI (just so we have some idea what you are comparing to)?  And  
</span><br>
<span class="quotelev1">&gt;how are you running Open MPI (what command are you passing to mpirun,  
</span><br>
<span class="quotelev1">&gt;and if you include a hostfile, what is in that host file)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you tell Open MPI via a hostfile that a machine has 2 cpus when it  
</span><br>
<span class="quotelev1">&gt;only has 1 and try to run 2 processes on it, you will run into severe  
</span><br>
<span class="quotelev1">&gt;performance issues.  In that case, Open MPI will poll very quickly on  
</span><br>
<span class="quotelev1">&gt;the CPUs, not giving up the CPU when there is nothing to do.  If Open  
</span><br>
<span class="quotelev1">&gt;MPI is told that there is only 1 cpu and you run 2 procs of the same  
</span><br>
<span class="quotelev1">&gt;job on that node, then it will be much better about giving up the  
</span><br>
<span class="quotelev1">&gt;CPU.  That would be where I would start looking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you have some test code you could share, I'd love to see it - it  
</span><br>
<span class="quotelev1">&gt;would help in duplicating your results and finding a solution...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Brian Barrett: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Reply:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
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
