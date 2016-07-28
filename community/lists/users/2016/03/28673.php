<?
$subject_val = "[OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 11:54:48 2016" -->
<!-- isoreceived="20160310165448" -->
<!-- sent="Thu, 10 Mar 2016 11:54:47 -0500" -->
<!-- isosent="20160310165447" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] locked memory and queue pairs" -->
<!-- id="CABOsP2OFRF8QKkm71tE1CndiEJgnO5A1RqKAw-aJMSU50PndPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 11:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe reply:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
when i try to run an openmpi job with &gt;128 ranks (16 ranks per node)
<br>
using alltoall or alltoallv, i'm getting an error that the process was
<br>
unable to get a queue pair.
<br>
<p>i've checked the max locked memory settings across my machines;
<br>
<p>using ulimit -l in and outside of mpirun and they're all set to unlimited
<br>
pam modules to ensure pam_limits.so is loaded and working
<br>
the /etc/security/limits.conf is set for soft/hard mem to unlimited
<br>
<p>i tried a couple of quick mpi config settings i could think of;
<br>
<p>-mca mtl ^psm no affect
<br>
-mca btl_openib_flags 1 no affect
<br>
<p>the openmpi faq says to tweak some mtt values in /sys, but since i'm
<br>
not on mellanox that doesn't apply to me
<br>
<p>the machines are rhel 6.7, kernel 2.6.32-573.12.1(with bundled ofed),
<br>
running on qlogic single-port infiniband cards, psm is enabled
<br>
<p>other collectives seem to run okay, it seems to only be alltoall comms
<br>
that fail and only at scale
<br>
<p>i believe (but can't prove) that this worked at one point, but i can't
<br>
recall when i last tested it.  so it's reasonable to assume that some
<br>
change to the system is preventing this.
<br>
<p>the question is, where should i start poking to find it?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe reply:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
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
