<?
$subject_val = "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 12:10:20 2010" -->
<!-- isoreceived="20101202171020" -->
<!-- sent="Thu, 02 Dec 2010 12:10:11 -0500" -->
<!-- isosent="20101202171011" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't understand the mean of &amp;quot;ofud&amp;quot; in openmpi" -->
<!-- id="4CF7D2F3.5060703_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="020AF8E4-7A11-4B27-BBAA-071112523566_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 12:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I am glad this question was asked.
<br>
Thanks to whoever did it.
<br>
Acronyms are always a pain, particularly if you don't know them,
<br>
and they are in no dictionary.
<br>
OFUD, OFED, OPENIB, MCA, BTL, SM, OOB, ... the list goes on and on.
<br>
<p>Your answer makes a great start for another FAQ entry,
<br>
called, say, &quot;The OpenMPI Hacker's Dictionary&quot;.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 2, 2010, at 3:59 AM, &#233;&#152;&#154;&#229;&#156;&#163;&#229;&#147;&#178; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  When I use openmpi mpirun --mca btl &lt;arg1&gt;, I find arg1 can be ofud, self, sm, openib, but www.open-mpi.org desn't explain those args.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;BTL&quot; stands for &quot;byte transfer layer&quot; -- is the lowest networking software layer for the &quot;ob1&quot; MPI transport in Open MPI (ob1 is usually the default transport in Open MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each BTL supports a different kind of network:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ofud: experimental UD-based OpenFabrics transport.  I would not use this; it was developed as part of research and was never really finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - self: send-to-self (i.e., loopback to the same MPI process)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - sm: shared memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - openib: generalized OpenFabrics transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI will automatically pick which BTL to use on a per-communication basis, based on which MPI process peer you are communicating with.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;--mca btl ...&quot; argument to mpirun restricts which BTLs Open MPI will use at run-time.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't understand the mean of &quot;ofud&quot;, what different between &quot;ofud&quot; and &quot;openib&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;  I also can't understand the different between &quot;ibcm&quot; and &quot;rdmacm&quot;, when I use mpirun --mca btl_openib_cpc_include &lt;arg2&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are 4 different ways for openib BTL to make connections across Open Fabrics networks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - oob: the default (&quot;out of band&quot;, meaning that it uses TCP sockets)
</span><br>
<span class="quotelev1">&gt; - xoob: the default when using Mellanox XRC (&quot;out of band with XRC support&quot;)
</span><br>
<span class="quotelev1">&gt; - rdmacm: the default when using iWARP (because iWARP doesn't support OOB or XOOB)
</span><br>
<span class="quotelev1">&gt; - ibcm: not currently used; it's an IB-specific method that was never really finished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually, the right CM is just automatically picked -- you shouldn't need to manually select anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  maybe www.open-mpi.org can publish a openmpi's document to explain those args and principle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are lacking in the documentation department; contributions would be greatly appreciated...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The README file has a bunch about BTLs; that may be helpful reading.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
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
