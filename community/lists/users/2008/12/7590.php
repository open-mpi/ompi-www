<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 17:31:59 2008" -->
<!-- isoreceived="20081223223159" -->
<!-- sent="Tue, 23 Dec 2008 23:31:53 +0100" -->
<!-- isosent="20081223223153" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="495166D9.2070107_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4950C207.7050408_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 17:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Biagio Lucini wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to this list, where I hope to find a solution for a problem 
</span><br>
<span class="quotelev1">&gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster 
</span><br>
<span class="quotelev1">&gt; with Infiniband interconnects that I use and administer at the same 
</span><br>
<span class="quotelev1">&gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and 
</span><br>
<span class="quotelev1">&gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trouble is with an MPI code that runs fine with an openmpi 1.1.2 
</span><br>
<span class="quotelev1">&gt; library compiled without infiniband support (I have tested the 
</span><br>
<span class="quotelev1">&gt; scalability of the code up to 64 cores, the nodes are 4 or 8 cores, 
</span><br>
<span class="quotelev1">&gt; the results are exactly what I expect), but if I try to use a version 
</span><br>
<span class="quotelev1">&gt; compiled for infiniband, then only a subset of comunications (the ones 
</span><br>
<span class="quotelev1">&gt; connecting cores in the same node) are enabled, and because of this 
</span><br>
<span class="quotelev1">&gt; the program fails (gets stuck in a perennial waiting phase, in 
</span><br>
<span class="quotelev1">&gt; particular). This happens with any combination of compilers/library 
</span><br>
<span class="quotelev1">&gt; releases (1.1.2, 1.2.7, 1.2.8) I have tried. On other codes, and in 
</span><br>
<span class="quotelev1">&gt; particular on benchmarks downloaded from the net, openmpi over 
</span><br>
<span class="quotelev1">&gt; infiniband seems to work (I compared the latency with the tcp btl, so 
</span><br>
<span class="quotelev1">&gt; I am pretty sure that infiniband works). The two variables I kept 
</span><br>
<span class="quotelev1">&gt; fixed are SGE and the OFED module stack. I would like not to touch 
</span><br>
<span class="quotelev1">&gt; them, if possible, because the cluster seems to run fine for other 
</span><br>
<span class="quotelev1">&gt; purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: does anyone has a suggestion on what I could try next?
</span><br>
<span class="quotelev1">&gt; I'm pretty sure that to get an answer I need to provide more details, 
</span><br>
<span class="quotelev1">&gt; which I am willing to do, but in more than two months of 
</span><br>
<span class="quotelev1">&gt; testing/trying/hoping/praying I have accumulated so much material and 
</span><br>
<span class="quotelev1">&gt; information that if I post everything in this e-mail I am likely to 
</span><br>
<span class="quotelev1">&gt; confuse a potential helper, more than helping him to understand the 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>Does the problem only show up with openmpi? Did you tried to use mvapich 
<br>
(<a href="http://mvapich.cse.ohio-state.edu/">http://mvapich.cse.ohio-state.edu/</a>) to test whether it is a hardware or 
<br>
software problem? (I don't know any other open-source MPI implementation 
<br>
which supports infiniband)
<br>
<p>Dorian
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; Biagio Lucini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
