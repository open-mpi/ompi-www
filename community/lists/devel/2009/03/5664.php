<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 18:19:20 2009" -->
<!-- isoreceived="20090318221920" -->
<!-- sent="Wed, 18 Mar 2009 18:19:16 -0400" -->
<!-- isosent="20090318221916" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="ea86ce220903181519v7b240b75v8577a7fac87ca5dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C163B8.6080205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI vs Scali performance comparisons<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 18:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5665.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5"</a>
<li><strong>Previous message:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That might indicate the source of the bandwidth difference.
<br>
Open MPI uses the compiler supplied memcpy, which may or
<br>
may not be particularly fast for a given machine/architecture.
<br>
Scali could very well be using its own tuned memcpy.
<br>
<p>On the hulk and tank systems at IU (16 core intel shared mem machines),
<br>
I saw a factor of 2 difference in the performance of memcpy from glibc
<br>
and a simple x86 asm routine.  The asm routine was twice as fast in
<br>
some case, particularly the case where the data was larger than the L2
<br>
cache.
<br>
<p>On Wed, Mar 18, 2009 at 5:12 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I don't have access to the machine where my colleague ran. &#160;On other
</span><br>
<span class="quotelev1">&gt; machines, it appears that playing with eager or fragsize doesn't change
</span><br>
<span class="quotelev1">&gt; much... and, in any case, OMPI bandwidth is up around memcpy bandwidth. &#160;So,
</span><br>
<span class="quotelev1">&gt; maybe the first challenge is reproducing what he saw and/or getting access
</span><br>
<span class="quotelev1">&gt; to his system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something like this. We can play with the eager size too, maybe 4K is too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess I am curious why the larger buffer sizes work better? &#160;I am
</span><br>
<span class="quotelev2">&gt;&gt; curious because we ran into a similar issue on one of our platforms and it
</span><br>
<span class="quotelev2">&gt;&gt; turned out to be the non-temporal copy was not initiated until a large (64K)
</span><br>
<span class="quotelev2">&gt;&gt; memcpy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 18, 2009, at 06:43 , Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The default values for the large message fragments are not optimized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the new generation processors. This might be something to investigate,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in order to see if we can have the same bandwidth as they do or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you suggesting bumping up the btl_sm_max_send_size value from 32K to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something greater?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A colleague of mine ran some microkernels on an 8-way Barcelona box
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (Sun x2200M2 at 2.3 GHz). &#160;Here are some performance comparisons with Scali.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160;The performance tests are modified versions of the HPCC pingpong tests.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160;The OMPI version is the trunk with my &quot;single-queue&quot; fixes... otherwise,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI latency at higher np would be noticeably worse.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; latency(ns) &#160; bandwidth(MB/s)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; (8-byte msgs) &#160; (2M-byte msgs)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; ============= &#160; &#160;=============
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; np &#160; &#160;Scali &#160; &#160;OMPI &#160; &#160;Scali &#160; &#160;OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;2 &#160; &#160; &#160;327 &#160; &#160; 661 &#160; &#160; 1458 &#160; &#160;1295
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;4 &#160; &#160; &#160;369 &#160; &#160; 670 &#160; &#160; 1517 &#160; &#160;1287
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;8 &#160; &#160; &#160;414 &#160; &#160; 758 &#160; &#160; 1535 &#160; &#160;1294
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI latency is nearly 2x slower than Scali's. &#160;Presumably, &quot;fastpath&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PML latency optimizations would help us a lot here. &#160;Thankfully, our latency
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is flat with np with the recent &quot;single-queue&quot; fixes... otherwise our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; high-np latency story would be so much worse. &#160;We're behind on bandwidth as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; well, though not as pitifully so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5665.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5"</a>
<li><strong>Previous message:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
