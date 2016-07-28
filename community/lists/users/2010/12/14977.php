<?
$subject_val = "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 10:34:57 2010" -->
<!-- isoreceived="20101202153457" -->
<!-- sent="Thu, 2 Dec 2010 10:34:39 -0500" -->
<!-- isosent="20101202153439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't understand the mean of &amp;quot;ofud&amp;quot; in openmpi" -->
<!-- id="020AF8E4-7A11-4B27-BBAA-071112523566_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4412fd.b96a.12ca64e89e6.Coremail.ksz_at_sccas.cn" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 10:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14973.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Reply:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2010, at 3:59 AM, &#233;&#152;&#154;&#229;&#156;&#163;&#229;&#147;&#178; wrote:
<br>
<p><span class="quotelev1">&gt;  When I use openmpi mpirun --mca btl &lt;arg1&gt;, I find arg1 can be ofud, self, sm, openib, but www.open-mpi.org desn't explain those args.
</span><br>
<p>&quot;BTL&quot; stands for &quot;byte transfer layer&quot; -- is the lowest networking software layer for the &quot;ob1&quot; MPI transport in Open MPI (ob1 is usually the default transport in Open MPI).
<br>
<p>Each BTL supports a different kind of network:
<br>
<p>- ofud: experimental UD-based OpenFabrics transport.  I would not use this; it was developed as part of research and was never really finished.
<br>
<p>- self: send-to-self (i.e., loopback to the same MPI process)
<br>
<p>- sm: shared memory
<br>
<p>- openib: generalized OpenFabrics transport.
<br>
<p>Open MPI will automatically pick which BTL to use on a per-communication basis, based on which MPI process peer you are communicating with.  
<br>
<p>The &quot;--mca btl ...&quot; argument to mpirun restricts which BTLs Open MPI will use at run-time.  
<br>
<p><span class="quotelev1">&gt; I can't understand the mean of &quot;ofud&quot;, what different between &quot;ofud&quot; and &quot;openib&quot;,
</span><br>
<span class="quotelev1">&gt;  I also can't understand the different between &quot;ibcm&quot; and &quot;rdmacm&quot;, when I use mpirun --mca btl_openib_cpc_include &lt;arg2&gt;.
</span><br>
<p>There are 4 different ways for openib BTL to make connections across Open Fabrics networks:
<br>
<p>- oob: the default (&quot;out of band&quot;, meaning that it uses TCP sockets)
<br>
- xoob: the default when using Mellanox XRC (&quot;out of band with XRC support&quot;)
<br>
- rdmacm: the default when using iWARP (because iWARP doesn't support OOB or XOOB)
<br>
- ibcm: not currently used; it's an IB-specific method that was never really finished
<br>
<p>Usually, the right CM is just automatically picked -- you shouldn't need to manually select anything.
<br>
<p><span class="quotelev1">&gt;  maybe www.open-mpi.org can publish a openmpi's document to explain those args and principle.
</span><br>
<p>We are lacking in the documentation department; contributions would be greatly appreciated...
<br>
<p>The README file has a bunch about BTLs; that may be helpful reading.  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14973.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Reply:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
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
