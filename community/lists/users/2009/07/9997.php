<?
$subject_val = "Re: [OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 01:13:19 2009" -->
<!-- isoreceived="20090717051319" -->
<!-- sent="Thu, 16 Jul 2009 23:13:05 -0600" -->
<!-- isosent="20090717051305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible openmpi bug?" -->
<!-- id="981F2EFC-AF09-4295-9D17-20B51E1D0E2E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFF4B7E892.2910B2B4-ON852575F5.005D35E8-852575F5.005ECC44_at_hc-sc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible openmpi bug?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 01:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From what I can see, it looks like your job is being terminated -  
<br>
something is killing mpirun. Is it possible that the job runs slowly  
<br>
enough on 14 or less cpus that it simply isn't completing within your  
<br>
specified time limit?
<br>
<p>The lifeline message simply indicates that a process self-aborted  
<br>
because it lost contact with its local daemon - in this case, mpirun  
<br>
(as that is always daemon 0) - which means that the daemon was  
<br>
terminated for some reason.
<br>
<p><p>On Jul 16, 2009, at 11:15 AM, Steven Dale wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 Dell R900's with 16 cpus each and 64 GB RAM
</span><br>
<span class="quotelev1">&gt; OS: SuSE SLES 10 SP2 patched up to date
</span><br>
<span class="quotelev1">&gt; R version 2.9.1
</span><br>
<span class="quotelev1">&gt; Rmpi version 0.5-7
</span><br>
<span class="quotelev1">&gt; snow version 0.3-3
</span><br>
<span class="quotelev1">&gt; maanova library version 1.14.0
</span><br>
<span class="quotelev1">&gt; openmpi version 1.3.3
</span><br>
<span class="quotelev1">&gt; slurm version 2.0.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a given set of R code, we get abnormal exits when using 14 or  
</span><br>
<span class="quotelev1">&gt; less cpus. When using 15 or more, the job completes normally.
</span><br>
<span class="quotelev1">&gt; error is a variation on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pdp-dev-r01:22618] [[15549,1],0] routed:binomial: Connection to  
</span><br>
<span class="quotelev1">&gt; lifeline [[15549,0],0] lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; during the array permutations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Increasing the number of permutations above 200 also produces  
</span><br>
<span class="quotelev1">&gt; similar results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The R code is executed with a typical command line for 14 cpus being:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sbatch -n 14 -i ./Rtest.txt --mail-type=ALL --mail-user=steven_dale_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;  /usr/local/bin/R --no-save
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config.log, ompi_info, Rscript.txt and slurm outputs are attached.  
</span><br>
<span class="quotelev1">&gt; Network is GB Ethernet copper tcp/ip.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this to be an openmpi error/bug due to the routed:binomial  
</span><br>
<span class="quotelev1">&gt; message. This also had the same results with openmpi-1.3.2, R 2.9.0,  
</span><br>
<span class="quotelev1">&gt; maanova 1.12 and slurm 2.0.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No non-default MCA parameters are set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration done with defaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; Steve Dale
</span><br>
<span class="quotelev1">&gt; &lt;bugrep.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="9994.php">Steven Dale: "[OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
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
