<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 10:43:12 2010" -->
<!-- isoreceived="20100210154312" -->
<!-- sent="Wed, 10 Feb 2010 08:42:54 -0700" -->
<!-- isosent="20100210154254" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="FB4749F2-F9E9-48A9-B3F7-B3F911461474_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1265810640.17090.161.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 10:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding the memory and cc will certainly do no harm, and someone tried to remove them as an optimization.  I wouldn't change the input and output lines - the differences are mainly syntactic sugar.
<br>
<p>Brian
<br>
<p>On Feb 10, 2010, at 7:04 AM, Ake Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 2010-02-10 at 08:21 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2010, at 7:47 AM, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to people who knows asm statements fairly well (compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers), it should be
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    unsigned char ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    __asm__ __volatile__ (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        SMPLOCK &quot;cmpxchgl %3,%2   \n\t&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        : &quot;q&quot;(newval), &quot;2&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return (int)ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: I know almost nothing about assembly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know that OMPI's asm is a carefully crafted set of assembly that works across a broad range of compilers.  So what might not be &quot;quite right&quot; for one compiler may actually be there because another compiler needs it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, if the changes above are for correctness, not neatness/style/etc., I can't speak for that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The above should be correct for gcc style unless i misunderstood them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quoting from their reply:
</span><br>
<span class="quotelev1">&gt; 'it should be &quot;memory&quot;, &quot;cc&quot; since you also have to tell gcc you're
</span><br>
<span class="quotelev1">&gt; clobbering the EFLAGS'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And i don't know asm either so...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
