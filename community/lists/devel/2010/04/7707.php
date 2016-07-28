<?
$subject_val = "Re: [OMPI devel] adding ping-pong test to examples directory?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 20:20:14 2010" -->
<!-- isoreceived="20100407002014" -->
<!-- sent="Tue, 6 Apr 2010 20:20:09 -0400" -->
<!-- isosent="20100407002009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding ping-pong test to examples directory?" -->
<!-- id="A1CB196D-6A7B-4AC0-874D-D89D4C93499B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BB528CD.3010604_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] adding ping-pong test to examples directory?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 20:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see your point, but the cons make sink the idea for me.
<br>
<p>How about a compromise -- write up a scripty-foo to automatically download and build some of the more common benchmarks?  This still makes it a trivial exercise for the user, but it avoids us needing to bundle already-popular benchmarks in OMPI (plus, they release at different schedules than us).
<br>
<p>For extra bonus points, you could make the scripty-foo be a dumb client that downloads an XML file from www.open-mpi.org that indicates where it should *really* download and build a given benchmark from.  This would allow us to &quot;release&quot; new benchmarks independent of Open MPI releases (e.g., if NetPIPE releases a new version, we can just update the XML file on www.open-mpi.org).
<br>
<p><p>On Apr 1, 2010, at 7:14 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I wanted to know what folks thought about adding a ping-pong performance
</span><br>
<span class="quotelev1">&gt; test to the examples directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pros:  This would facilitate performance sanity testing by OMPI users --
</span><br>
<span class="quotelev1">&gt; particularly MPI neophytes.  It would add something to the examples
</span><br>
<span class="quotelev1">&gt; directory with a performance orientation.  It would give us
</span><br>
<span class="quotelev1">&gt; (devel_at_ompiorg) a known quantity when trouble shooting performance with
</span><br>
<span class="quotelev1">&gt; users.  It could conceivably raise OMPI visibility in the MPI world.  It
</span><br>
<span class="quotelev1">&gt; could be a stepping stone to developing a more complete set of MPI
</span><br>
<span class="quotelev1">&gt; performance sanity tests with time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cons:  There are already many performance tests.  We shouldn't be
</span><br>
<span class="quotelev1">&gt; replicating what others do, but should be leveraging what they do. 
</span><br>
<span class="quotelev1">&gt; Other existing tests are relatively easy to use and already familiar to
</span><br>
<span class="quotelev1">&gt; many users.
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
<li><strong>Next message:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
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
