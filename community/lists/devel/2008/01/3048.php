<?
$subject_val = "[OMPI devel] Hierarchical Collectives Query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 18:34:13 2008" -->
<!-- isoreceived="20080124233413" -->
<!-- sent="Thu, 24 Jan 2008 18:34:06 -0500" -->
<!-- isosent="20080124233406" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Hierarchical Collectives Query" -->
<!-- id="4799206E.10708_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] Hierarchical Collectives Query<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 18:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3047.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Reply:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am curious if anyone is doing any work currently on the hierarchical 
<br>
collectives.  I ask this because I just did some runs on a cluster made 
<br>
up of 4 servers with 4 processors per server.  I used TCP over IB.  I 
<br>
was running with np=16 and using the IMB benchmark to test MPI_Bcast. 
<br>
What I am seeing is that the hierarchical collectives appear to boost 
<br>
performance.  The IMB test rotates the root so one could imagine that 
<br>
since the hierarchical minimizes internode communication, performance 
<br>
increases.  See the table at the end of this post with the comparison 
<br>
for MPI_Bcast between tuned and hierarchical.  This leads me to a few 
<br>
other questions.
<br>
<p>1. From what I can tell from the debug messages, we still cannot stack 
<br>
the hierarchical on top of the tuned.  I know that Brian Barrett did 
<br>
some work after the collectives meeting to allow for this, but I could 
<br>
not figure out how to get it to work.
<br>
<p>2. Enabling the hierarchical collectives causes a massive slowdown 
<br>
during MPI_Init.  I know it was discussed a little at the collectives 
<br>
meeting and it appears that this is still something we need to solve. 
<br>
For a simple hello_world, np=4, 2 node cluster, I see around 5 seconds 
<br>
to run for tuned collectives, but I see around 18 seconds for
<br>
hierarchical.
<br>
<p>3. Apart from the MPI_Init issue, is hierarchical ready to go?
<br>
<p>4. As the nodes get fatter, I assume the need for hierarchical
<br>
will increase, so this may become a larger issue for all of us?
<br>
<p>RESULTS FROM TWO RUNS OF IMB-MPI1
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Bcast
<br>
# #processes = 16             TUNED         HIERARCH
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_avg[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.11         0.22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000       205.97       319.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000       159.23       180.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000       175.32       189.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000       153.10       184.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000       170.98       192.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000       160.69       187.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000       159.75       182.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000       175.47       185.19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000       160.77       194.68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000       265.45       313.89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       185.66       215.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000       815.97       257.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000      1208.48       442.93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000      1521.23       530.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000      2357.45       813.44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000      3341.29      1455.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      6485.70      3387.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320     13488.35      5261.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160     24783.09     10747.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     50906.06     21817.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40     95466.82     41397.49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20    180759.72     81319.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    322327.71    163274.55
<br>
<p><p>=========================
<br>
rolf.vandevaart_at_[hidden]
<br>
781-442-3043
<br>
=========================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3047.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Reply:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
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
