<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 17:38:00 2006" -->
<!-- isoreceived="20060830213800" -->
<!-- sent="Wed, 30 Aug 2006 17:37:47 -0400" -->
<!-- isosent="20060830213747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Stack trace printing" -->
<!-- id="C11B7D6B.24EFB%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1156973557.26820.46.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 17:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<li><strong>In reply to:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Reply:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as it's always 3 function calls -- do we know that it will be?
<br>
<p><p>On 8/30/06 5:32 PM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A question about stack tracing.  Currently, we have it setup so that,
</span><br>
<span class="quotelev1">&gt; say, a segfault results in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0]func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0(opal_backtrace_prin
</span><br>
<span class="quotelev1">&gt; t+0x2b) [0x2a959166ab]
</span><br>
<span class="quotelev1">&gt; [1] func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0 [0x2a959150bb]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib64/tls/libpthread.so.0 [0x345cc0c420]
</span><br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_recv+0x480) [0x2a95fd6354]
</span><br>
<span class="quotelev1">&gt; [4] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x
</span><br>
<span class="quotelev1">&gt; 46) [0x2a957a96a3]
</span><br>
<span class="quotelev1">&gt; [5] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accep
</span><br>
<span class="quotelev1">&gt; t+0x1d8) [0x2a955a29dc]
</span><br>
<span class="quotelev1">&gt; [6] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x11
</span><br>
<span class="quotelev1">&gt; 0) [0x2a955a49e0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to result in confusion from some users (not josh, I was just
</span><br>
<span class="quotelev1">&gt; reading his latest bug when I thought of this) that the error must be in
</span><br>
<span class="quotelev1">&gt; OMPI because that's where it segfaulted.  It would be fairly trivial (at
</span><br>
<span class="quotelev1">&gt; least, on Linux and OS X) to not print the last 3 lines such that the
</span><br>
<span class="quotelev1">&gt; error looked like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0] 
</span><br>
<span class="quotelev1">&gt; func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_recv+0x480) [0x2a95fd6354]
</span><br>
<span class="quotelev1">&gt; [1] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x
</span><br>
<span class="quotelev1">&gt; 46) [0x2a957a96a3]
</span><br>
<span class="quotelev1">&gt; [2] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accep
</span><br>
<span class="quotelev1">&gt; t+0x1d8) [0x2a955a29dc]
</span><br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x11
</span><br>
<span class="quotelev1">&gt; 0) [0x2a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would anyone object to such a change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<li><strong>In reply to:</strong> <a href="1019.php">Brian Barrett: "[OMPI devel] Stack trace printing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Reply:</strong> <a href="1021.php">Brian Barrett: "Re: [OMPI devel] Stack trace printing"</a>
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
