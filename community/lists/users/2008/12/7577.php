<?
$subject_val = "[OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 05:50:01 2008" -->
<!-- isoreceived="20081223105001" -->
<!-- sent="Tue, 23 Dec 2008 10:48:39 +0000" -->
<!-- isosent="20081223104839" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with openmpi and infiniband" -->
<!-- id="4950C207.7050408_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 05:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7576.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am new to this list, where I hope to find a solution for a problem 
<br>
that I have been having for quite a longtime.
<br>
<p>I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster 
<br>
with Infiniband interconnects that I use and administer at the same 
<br>
time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and 
<br>
Intel. The queue manager is SGE 6.0u8.
<br>
<p>The trouble is with an MPI code that runs fine with an openmpi 1.1.2 
<br>
library compiled without infiniband support (I have tested the 
<br>
scalability of the code up to 64 cores, the nodes are 4 or 8 cores, the 
<br>
results are exactly what I expect), but if I try to use a version 
<br>
compiled for infiniband, then only a subset of comunications (the ones 
<br>
connecting cores in the same node) are enabled, and because of this the 
<br>
program fails (gets stuck in a perennial waiting phase, in particular). 
<br>
This happens with any combination of compilers/library releases (1.1.2, 
<br>
1.2.7, 1.2.8) I have tried. On other codes, and in particular on 
<br>
benchmarks downloaded from the net, openmpi over infiniband seems to 
<br>
work (I compared the latency with the tcp btl, so I am pretty sure that 
<br>
infiniband works). The two variables I kept fixed are SGE and the OFED 
<br>
module stack. I would like not to touch them, if possible, because the 
<br>
cluster seems to run fine for other purposes.
<br>
<p>My question is: does anyone has a suggestion on what I could try next?
<br>
I'm pretty sure that to get an answer I need to provide more details, 
<br>
which I am willing to do, but in more than two months of 
<br>
testing/trying/hoping/praying I have accumulated so much material and 
<br>
information that if I post everything in this e-mail I am likely to 
<br>
confuse a potential helper, more than helping him to understand the problem.
<br>
<p>Thank you in advance,
<br>
Biagio Lucini
<br>
<p><pre>
-- 
=========================================================
Dr. Biagio Lucini
Department of Physics, Swansea University
Singleton Park, SA2 8PP Swansea (UK)
Tel. +44 (0)1792 602284
=========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7576.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
