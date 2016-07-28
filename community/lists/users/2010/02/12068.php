<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 08:21:41 2010" -->
<!-- isoreceived="20100210132141" -->
<!-- sent="Wed, 10 Feb 2010 08:21:35 -0500" -->
<!-- isosent="20100210132135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="556E21B6-1BE3-400E-A4A0-0B3FB262DB72_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1265806029.17090.149.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 08:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12067.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12067.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 7:47 AM, Ake Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; According to people who knows asm statements fairly well (compiler
</span><br>
<span class="quotelev1">&gt; developers), it should be
</span><br>
<p><span class="quotelev1">&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt;                                          int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     unsigned char ret;
</span><br>
<span class="quotelev1">&gt;     __asm__ __volatile__ (
</span><br>
<span class="quotelev1">&gt;                         SMPLOCK &quot;cmpxchgl %3,%2   \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                                 &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev1">&gt;                         : &quot;q&quot;(newval), &quot;2&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev1">&gt;                         : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return (int)ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Disclaimer: I know almost nothing about assembly.
<br>
<p>I know that OMPI's asm is a carefully crafted set of assembly that works across a broad range of compilers.  So what might not be &quot;quite right&quot; for one compiler may actually be there because another compiler needs it.
<br>
<p>That being said, if the changes above are for correctness, not neatness/style/etc., I can't speak for that...
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
<li><strong>Next message:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12067.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12067.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
