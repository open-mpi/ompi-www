<?
$subject_val = "Re: [OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 10 13:52:27 2013" -->
<!-- isoreceived="20130410175227" -->
<!-- sent="Wed, 10 Apr 2013 22:22:02 +0430" -->
<!-- isosent="20130410175202" -->
<!-- name="Reza Bakhshayeshi" -->
<!-- email="reza.b2008_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="CAMGoRG2g941+uWJYMtRFPgUKz+AqdrCQ0_7nXbN2k=K1H0iwtw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="515C81D4.8080200_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with HPCC benchmark<br>
<strong>From:</strong> Reza Bakhshayeshi (<em>reza.b2008_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-10 13:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21704.php">Rodrigo Gómez Vázquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>In reply to:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus Correa,
<br>
<p>Thank you in advance for your detailed answer.
<br>
I was busy checking your steps. But unfortunately still I have the problem.
<br>
<p>1) Yes, I have sudo access to server, when I want to run the test only my
<br>
two instances are active.
<br>
<p>2) There is no problem with running hello program simultaneously on two
<br>
instances, but someone told me these programs cannot check some factors.
<br>
<p>Instances are pure installation of ubuntu server 12.04, by the way I
<br>
disabled &quot;ufw&quot;. There are two notes here, openmpi uses ssh and I can
<br>
connect with no password from master to slave. And one more odd thing i&#226;&#128;&#139;s
<br>
that&#226;&#128;&#139; the order is important in myhosts file, ie, allways the second
<br>
machine abort the process, even when I am in the master and master is
<br>
second in the file, it reports that master aborted.
<br>
<p>3,4) I checked it, actually, I did everything from the first step. Just
<br>
installing Atlas and OpenMPI from packages with 64 switch to configure.
<br>
<p>5) I used -np 4 with hello, is this sufficient?&#226;&#128;&#139;
<br>
<p>6) Yes, I checked auto-tuning (without input file) too.
<br>
<p>One thing that I noticed is that a &quot;vnet&quot; created for each instance on the
<br>
main server. I ran these two commands:
<br>
mirun -np 2 --hostfile myhosts --mca btl_tcp_if_include eth0,lo hpcc
<br>
mirun -np 2 --hostfile myhosts --mca btl_tcp_if_exclude vnet0,vnet1 hpcc
<br>
<p>in this case I didn't receive anything, ie, no error nor anything in output
<br>
file, I waited for hours but nothing happened. can these vnets cause the
<br>
problem?
<br>
<p>Really Thank you for your consideration,
<br>
Best Regards,
<br>
Reza
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21704.php">Rodrigo Gómez Vázquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>In reply to:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
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
