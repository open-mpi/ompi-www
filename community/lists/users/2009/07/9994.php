<?
$subject_val = "[OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 13:15:32 2009" -->
<!-- isoreceived="20090716171532" -->
<!-- sent="Thu, 16 Jul 2009 13:15:33 -0400" -->
<!-- isosent="20090716171533" -->
<!-- name="Steven Dale" -->
<!-- email="steven_dale_at_[hidden]" -->
<!-- subject="[OMPI users] Possible openmpi bug?" -->
<!-- id="OFF4B7E892.2910B2B4-ON852575F5.005D35E8-852575F5.005ECC44_at_hc-sc.gc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Possible openmpi bug?<br>
<strong>From:</strong> Steven Dale (<em>steven_dale_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 13:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9995.php">Brad Benton: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9993.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is my situation:
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9994/bugrep.tar.bz2">bugrep.tar.bz2</a>
</ul>
<!-- attachment="bugrep.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9995.php">Brad Benton: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9993.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
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
