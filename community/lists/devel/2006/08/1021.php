<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 17:43:38 2006" -->
<!-- isoreceived="20060830214338" -->
<!-- sent="Wed, 30 Aug 2006 15:43:36 -0600" -->
<!-- isosent="20060830214336" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Stack trace printing" -->
<!-- id="1156974216.26820.47.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="C11B7D6B.24EFB%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 17:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>Previous message:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>In reply to:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.  It's always the trampoline, the signal handler, and the stack
<br>
trace printer.
<br>
<p>Brian
<br>
<p><p>On Wed, 2006-08-30 at 17:37 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; As long as it's always 3 function calls -- do we know that it will be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/30/06 5:32 PM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all-
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A question about stack tracing.  Currently, we have it setup so that,
</span><br>
<span class="quotelev2">&gt; &gt; say, a segfault results in:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0]func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0(opal_backtrace_prin
</span><br>
<span class="quotelev2">&gt; &gt; t+0x2b) [0x2a959166ab]
</span><br>
<span class="quotelev2">&gt; &gt; [1] func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0 [0x2a959150bb]
</span><br>
<span class="quotelev2">&gt; &gt; [2] func:/lib64/tls/libpthread.so.0 [0x345cc0c420]
</span><br>
<span class="quotelev2">&gt; &gt; [3] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(
</span><br>
<span class="quotelev2">&gt; &gt; mca_oob_tcp_recv+0x480) [0x2a95fd6354]
</span><br>
<span class="quotelev2">&gt; &gt; [4] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x
</span><br>
<span class="quotelev2">&gt; &gt; 46) [0x2a957a96a3]
</span><br>
<span class="quotelev2">&gt; &gt; [5] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accep
</span><br>
<span class="quotelev2">&gt; &gt; t+0x1d8) [0x2a955a29dc]
</span><br>
<span class="quotelev2">&gt; &gt; [6] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x11
</span><br>
<span class="quotelev2">&gt; &gt; 0) [0x2a955a49e0]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This seems to result in confusion from some users (not josh, I was just
</span><br>
<span class="quotelev2">&gt; &gt; reading his latest bug when I thought of this) that the error must be in
</span><br>
<span class="quotelev2">&gt; &gt; OMPI because that's where it segfaulted.  It would be fairly trivial (at
</span><br>
<span class="quotelev2">&gt; &gt; least, on Linux and OS X) to not print the last 3 lines such that the
</span><br>
<span class="quotelev2">&gt; &gt; error looked like:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(
</span><br>
<span class="quotelev2">&gt; &gt; mca_oob_tcp_recv+0x480) [0x2a95fd6354]
</span><br>
<span class="quotelev2">&gt; &gt; [1] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x
</span><br>
<span class="quotelev2">&gt; &gt; 46) [0x2a957a96a3]
</span><br>
<span class="quotelev2">&gt; &gt; [2] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accep
</span><br>
<span class="quotelev2">&gt; &gt; t+0x1d8) [0x2a955a29dc]
</span><br>
<span class="quotelev2">&gt; &gt; [3] 
</span><br>
<span class="quotelev2">&gt; &gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x11
</span><br>
<span class="quotelev2">&gt; &gt; 0) [0x2a
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Would anyone object to such a change?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>Previous message:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>In reply to:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
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
