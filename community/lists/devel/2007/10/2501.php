<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 12:04:03 2007" -->
<!-- isoreceived="20071025160403" -->
<!-- sent="Thu, 25 Oct 2007 12:03:47 -0400" -->
<!-- isosent="20071025160347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FD leak in Altix timer code?" -->
<!-- id="62799C35-9EAB-405F-B581-CC1C1490C3B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="471EB5D0.3070006_at_lbl.gov" -->
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
<strong>Date:</strong> 2007-10-25 12:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2493.php">Paul H. Hargrove: "[OMPI devel] FD leak in Altix timer code?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r16564.  Thanks Paul!
<br>
<p><p>On Oct 23, 2007, at 11:02 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I was just looking at the Altix timer code in the OMPI trunk and  
</span><br>
<span class="quotelev1">&gt; unless
</span><br>
<span class="quotelev1">&gt; I am missing something, the fd opened in opal_timer_altix_open() is
</span><br>
<span class="quotelev1">&gt; never closed.  It can be safely closed right after the mmap().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2493.php">Paul H. Hargrove: "[OMPI devel] FD leak in Altix timer code?"</a>
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
