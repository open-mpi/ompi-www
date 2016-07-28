<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 08:06:34 2010" -->
<!-- isoreceived="20100218130634" -->
<!-- sent="Thu, 18 Feb 2010 08:06:29 -0500" -->
<!-- isosent="20100218130629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="E7DF09BC-EA79-4C63-BBE3-07DDB2561499_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="456FEA6F-7B5A-4F7B-8CBA-76A0AAEC4A8E_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-02-18 08:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George.  I assume we need this in 1.4.2 and 1.5, right?
<br>
<p>On Feb 17, 2010, at 6:15 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I usually prefer the expanded notation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     unsigned char ret;
</span><br>
<span class="quotelev1">&gt;     __asm__ __volatile__ (
</span><br>
<span class="quotelev1">&gt;                           &quot;lock; cmpxchgl %3,%4   \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;      sete     %0      \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev1">&gt;                           : &quot;q&quot;(newval), &quot;m&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev1">&gt;                           : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return (int)ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as it shows more clearly the input and output registers. But your version does exactly the same thing. I'll commit shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2010, at 10:55 , Ake Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2010-02-10 at 08:42 -0700, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adding the memory and cc will certainly do no harm, and someone tried to remove them as an optimization.  I wouldn't change the input and output lines - the differences are mainly syntactic sugar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gcc actually didn't like the example i sent earlier.
</span><br>
<span class="quotelev2">&gt; &gt; Another iteration gave this as a working (gcc/intel/pgi/pathscale works)
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt; &gt;                                         int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    unsigned char ret;
</span><br>
<span class="quotelev2">&gt; &gt;    __asm__ __volatile__ (
</span><br>
<span class="quotelev2">&gt; &gt;                        SMPLOCK &quot;cmpxchgl %3,%2   \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                        : &quot;=qm&quot; (ret), &quot;+a&quot; (oldval), &quot;+m&quot; (*addr)
</span><br>
<span class="quotelev2">&gt; &gt;                        : &quot;q&quot;(newval)
</span><br>
<span class="quotelev2">&gt; &gt;                        : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    return (int)ret;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt; &gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev2">&gt; &gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
