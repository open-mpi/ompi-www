<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 09:04:14 2010" -->
<!-- isoreceived="20100210140414" -->
<!-- sent="Wed, 10 Feb 2010 15:04:00 +0100" -->
<!-- isosent="20100210140400" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="1265810640.17090.161.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="556E21B6-1BE3-400E-A4A0-0B3FB262DB72_at_cisco.com" -->
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
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 09:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12068.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-02-10 at 08:21 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2010, at 7:47 AM, Ake Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; According to people who knows asm statements fairly well (compiler
</span><br>
<span class="quotelev2">&gt; &gt; developers), it should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt; &gt;                                          int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     unsigned char ret;
</span><br>
<span class="quotelev2">&gt; &gt;     __asm__ __volatile__ (
</span><br>
<span class="quotelev2">&gt; &gt;                         SMPLOCK &quot;cmpxchgl %3,%2   \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                 &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                         : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev2">&gt; &gt;                         : &quot;q&quot;(newval), &quot;2&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev2">&gt; &gt;                         : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     return (int)ret;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Disclaimer: I know almost nothing about assembly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that OMPI's asm is a carefully crafted set of assembly that works across a broad range of compilers.  So what might not be &quot;quite right&quot; for one compiler may actually be there because another compiler needs it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, if the changes above are for correctness, not neatness/style/etc., I can't speak for that...
</span><br>
<p>The above should be correct for gcc style unless i misunderstood them.
<br>
<p>Quoting from their reply:
<br>
'it should be &quot;memory&quot;, &quot;cc&quot; since you also have to tell gcc you're
<br>
clobbering the EFLAGS'
<br>
<p>And i don't know asm either so...
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12068.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
