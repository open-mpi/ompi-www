<?
$subject_val = "Re: [OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 09:15:43 2009" -->
<!-- isoreceived="20090717131543" -->
<!-- sent="Fri, 17 Jul 2009 09:15:54 -0400" -->
<!-- isosent="20090717131554" -->
<!-- name="Steven Dale" -->
<!-- email="steven_dale_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible openmpi bug?" -->
<!-- id="OFF653CB77.D25FB665-ON852575F6.0047C83F-852575F6.0048D9F3_at_hc-sc.gc.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="981F2EFC-AF09-4295-9D17-20B51E1D0E2E_at_open-mpi.org" -->
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
<strong>From:</strong> Steven Dale (<em>steven_dale_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 09:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10002.php">Gabriele Fatigati: "[OMPI users] Possibile OpenMPI bug"</a>
<li><strong>In reply to:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it unlikely that its a time limit thing. Firstly, slurm is set up 
<br>
with no time limit on jobs, and we get the same behaviour whether or not 
<br>
slurm is in the picture.
<br>
In addition, we've run several other much larger jobs with a greater 
<br>
number of permutations and they complete fine.
<br>
<p>This job takes about 5-10 minutes to run. We've run jobs that take a week 
<br>
or more and the indivdual R process can be seen to run for days at a time 
<br>
and they run fine.
<br>
<p>In addition, I'd find it hard to believe (although I concede the 
<br>
possibility) that jobs entirely self-contained within the same box run 
<br>
slower that jobs which span 2 boxes over the network. (14 cpus vs 17 cpus 
<br>
for example).
<br>
<p><p>____________________
<br>
Steve Dale
<br>
Senior Platform Analyst
<br>
Health Canada
<br>
Phone: (613)-948-4910
<br>
E-mail: steven_dale_at_[hidden]
<br>
<p><p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
07/17/2009 01:13 AM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Possible openmpi bug?
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt;From what I can see, it looks like your job is being terminated - 
</span><br>
something is killing mpirun. Is it possible that the job runs slowly 
<br>
enough on 14 or less cpus that it simply isn't completing within your 
<br>
specified time limit?
<br>
<p>The lifeline message simply indicates that a process self-aborted because 
<br>
it lost contact with its local daemon - in this case, mpirun (as that is 
<br>
always daemon 0) - which means that the daemon was terminated for some 
<br>
reason.
<br>
<p><p>On Jul 16, 2009, at 11:15 AM, Steven Dale wrote:
<br>
<p><p>Here is my situation: 
<br>
<p>2 Dell R900's with 16 cpus each and 64 GB RAM 
<br>
OS: SuSE SLES 10 SP2 patched up to date 
<br>
R version 2.9.1 
<br>
Rmpi version 0.5-7 
<br>
snow version 0.3-3 
<br>
maanova library version 1.14.0 
<br>
openmpi version 1.3.3 
<br>
slurm version 2.0.3 
<br>
<p>With a given set of R code, we get abnormal exits when using 14 or less 
<br>
cpus. When using 15 or more, the job completes normally. 
<br>
error is a variation on: 
<br>
<p>[pdp-dev-r01:22618] [[15549,1],0] routed:binomial: Connection to lifeline 
<br>
[[15549,0],0] lost 
<br>
<p>during the array permutations. 
<br>
<p>Increasing the number of permutations above 200 also produces similar 
<br>
results. 
<br>
<p>The R code is executed with a typical command line for 14 cpus being: 
<br>
<p>sbatch -n 14 -i ./Rtest.txt --mail-type=ALL 
<br>
--mail-user=steven_dale_at_[hidden] /usr/local/bin/R --no-save 
<br>
<p><p>Config.log, ompi_info, Rscript.txt and slurm outputs are attached. Network 
<br>
is GB Ethernet copper tcp/ip. 
<br>
<p><p>I think this to be an openmpi error/bug due to the routed:binomial 
<br>
message. This also had the same results with openmpi-1.3.2, R 2.9.0, 
<br>
maanova 1.12 and slurm 2.0.1. 
<br>
<p><p>No non-default MCA parameters are set. 
<br>
<p>LD_LIBRARY_PATH=/usr/local/lib. 
<br>
<p>Configuration done with defaults. 
<br>
<p>Any ideas are welcome. 
<br>
<p><p><p><p>____________________
<br>
Steve Dale
<br>
&lt;bugrep.tar.bz2&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10002.php">Gabriele Fatigati: "[OMPI users] Possibile OpenMPI bug"</a>
<li><strong>In reply to:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10004.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
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
