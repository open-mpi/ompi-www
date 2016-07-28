<?
$subject_val = "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  4 19:54:34 2013" -->
<!-- isoreceived="20130504235434" -->
<!-- sent="Sun, 05 May 2013 00:54:00 +0100" -->
<!-- isosent="20130504235400" -->
<!-- name="Angel de Vicente" -->
<!-- email="angelv_at_[hidden]" -->
<!-- subject="[OMPI users] Help diagnosing problem: not being able to run MPI code across computers" -->
<!-- id="yegehdmmhd3.fsf_at_carro.ll.iac.es" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Help diagnosing problem: not being able to run MPI code across computers<br>
<strong>From:</strong> Angel de Vicente (<em>angelv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-04 19:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21850.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have used OpenMPI before without any troubles, and configured MPICH,
<br>
MPICH2 and OpenMPI in many different machines before, but recently we
<br>
upgraded the OS to Fedora 17, and now I'm having trouble running an MPI
<br>
code in two of our machines connected via a switch.
<br>
<p>I thought perhaps the old installation was giving problems, so I
<br>
reinstalled OpenMPI (1.6.4) and I have no trouble when running a
<br>
parallel code in just one node. I also don't have any trouble ssh'ing
<br>
(without need for password) between these machines, but when I try to
<br>
run a parallel job spanning both machines, I get a hanged mpiexec
<br>
process in the submitting machine, and an &quot;orted&quot; process in the other
<br>
machine, but nothing moves. 
<br>
<p>I guess it is an issue with libraries and/or different MPI versions (the
<br>
machines have other site-wide MPI libraries installed), but I'm not sure
<br>
how to debug the issue. I looked in the FAQ, but I didn't find anything
<br>
relevant. Issue
<br>
<a href="http://www.open-mpi.org/faq/?category=running#intel-compilers-static">http://www.open-mpi.org/faq/?category=running#intel-compilers-static</a> is
<br>
different, since I don't get any warning or errors when running, just
<br>
all processes stuck. 
<br>
<p>Is there any way to dump details of what OpenMPI is trying to do in each
<br>
node, so I can see if it is looking for different libraries in each
<br>
node, or something similar?
<br>
<p>Thanks,
<br>
<pre>
-- 
&#195;&#129;ngel de Vicente
<a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21850.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
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
