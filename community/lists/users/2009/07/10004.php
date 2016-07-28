<?
$subject_val = "Re: [OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 10:35:34 2009" -->
<!-- isoreceived="20090717143534" -->
<!-- sent="Fri, 17 Jul 2009 08:35:18 -0600" -->
<!-- isosent="20090717143518" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible openmpi bug?" -->
<!-- id="A5A9912A-94CB-4141-8CCC-90717B0E6764_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFF653CB77.D25FB665-ON852575F6.0047C83F-852575F6.0048D9F3_at_hc-sc.gc.ca" -->
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
<strong>Date:</strong> 2009-07-17 10:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, just checking the obvious. :-)
<br>
<p>We regularly run with the exact same configuration here (i.e., slurm +  
<br>
16cpus/node) without problem on jobs that are both short and long, so  
<br>
it seems doubtful that it would be an OMPI bug. However, it is  
<br>
possible as the difference could be due to configuration and/or  
<br>
parameter settings. We have seen some site-specific problems that are  
<br>
easily resolved with parameter changes.
<br>
<p>You might take a look at our (LANL's) platform files for our slurm- 
<br>
based system and see if they help. You will find them in the tarball at
<br>
<p>contrib/platform/lanl/tlcc
<br>
<p>Specifically, since you probably aren't running panasas (?), look at  
<br>
the optimized-nopanasas and optimized-nopanasas.conf (they are a pair)  
<br>
files to see how we configure the system for build, and the mca params  
<br>
we use to execute applications. If you can, I would suggest giving  
<br>
them a try (adjusting as required for your setup - e.g., you may want  
<br>
not want the -m64 flags) and see if it resolves the problem.
<br>
<p>Ralph
<br>
<p>On Jul 17, 2009, at 7:15 AM, Steven Dale wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it unlikely that its a time limit thing. Firstly, slurm is  
</span><br>
<span class="quotelev1">&gt; set up with no time limit on jobs, and we get the same behaviour  
</span><br>
<span class="quotelev1">&gt; whether or not slurm is in the picture.
</span><br>
<span class="quotelev1">&gt; In addition, we've run several other much larger jobs with a greater  
</span><br>
<span class="quotelev1">&gt; number of permutations and they complete fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This job takes about 5-10 minutes to run. We've run jobs that take a  
</span><br>
<span class="quotelev1">&gt; week or more and the indivdual R process can be seen to run for days  
</span><br>
<span class="quotelev1">&gt; at a time and they run fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, I'd find it hard to believe (although I concede the  
</span><br>
<span class="quotelev1">&gt; possibility) that jobs entirely self-contained within the same box  
</span><br>
<span class="quotelev1">&gt; run slower that jobs which span 2 boxes over the network. (14 cpus  
</span><br>
<span class="quotelev1">&gt; vs 17 cpus for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; Steve Dale
</span><br>
<span class="quotelev1">&gt; Senior Platform Analyst
</span><br>
<span class="quotelev1">&gt; Health Canada
</span><br>
<span class="quotelev1">&gt; Phone: (613)-948-4910
</span><br>
<span class="quotelev1">&gt; E-mail: steven_dale_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 07/17/2009 01:13 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Possible openmpi bug?
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
<span class="quotelev1">&gt; From what I can see, it looks like your job is being terminated -  
</span><br>
<span class="quotelev1">&gt; something is killing mpirun. Is it possible that the job runs slowly  
</span><br>
<span class="quotelev1">&gt; enough on 14 or less cpus that it simply isn't completing within  
</span><br>
<span class="quotelev1">&gt; your specified time limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lifeline message simply indicates that a process self-aborted  
</span><br>
<span class="quotelev1">&gt; because it lost contact with its local daemon - in this case, mpirun  
</span><br>
<span class="quotelev1">&gt; (as that is always daemon 0) - which means that the daemon was  
</span><br>
<span class="quotelev1">&gt; terminated for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2009, at 11:15 AM, Steven Dale wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
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
