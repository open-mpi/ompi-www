<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 19:48:23 2007" -->
<!-- isoreceived="20070806234823" -->
<!-- sent="Mon, 6 Aug 2007 17:48:14 -0600" -->
<!-- isosent="20070806234814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot" -->
<!-- id="1F3F2848-4E19-448A-890A-01049E58F44B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070806204813.GA7874_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2007-08-06 19:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Previous message:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>In reply to:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention: Brian and I chatted today and we have both been  
<br>
building the 1.2 branch with AM 1.10 / AC 2.61 for a long time and  
<br>
it's been fine.
<br>
<p>So we're throwing it on the to-do list to upgrade the nightly tarball  
<br>
generation process to AM 1.10 / AC 2.61.
<br>
<p>As for upgrading the Libtool 2.1 that we use -- maybe we'll wait for  
<br>
the upcoming xlc fixes (if there's no urgent need to upgrade and the  
<br>
xlc stuff might be in within the next few weeks).  :-)
<br>
<p><p>On Aug 6, 2007, at 2:48 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Mon, Aug 06, 2007 at 04:27:59PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2007, at 3:41 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/982">https://svn.open-mpi.org/trac/ompi/ticket/982</a> is fixed by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; newer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Libtool snapshots (e.g., 1.2444 2007/04/10 is what I have installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at Cisco).
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Asking because I don't think the bug was consciously fixed in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Libtool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only a test was added to expose the issue.  I'll put it on my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things to look at.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, note that we are applying this patch to the generated
</span><br>
<span class="quotelev2">&gt;&gt; aclocal.m4 (in all versions -- it appears to apply cleanly with a
</span><br>
<span class="quotelev2">&gt;&gt; little fuzz on the exact line numbering):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh, yes, that was the patch that fixed the problem (rather than the
</span><br>
<span class="quotelev1">&gt; Autoconf upgrade), I remember now.  Thanks for searching!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- aclocal.m4.old      2007-04-20 15:18:48.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; +++ aclocal.m4  2007-04-20 15:18:59.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; @@ -5311,7 +5311,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         # Commands to make compiler produce verbose output that lists
</span><br>
<span class="quotelev2">&gt;&gt;         # what &quot;hidden&quot; libraries, object files and flags are used  
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt;         # linking a shared library.
</span><br>
<span class="quotelev2">&gt;&gt; -      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest.
</span><br>
<span class="quotelev2">&gt;&gt; $objext 2&gt;&amp;1 | $GREP &quot;\-L&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; +      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest.
</span><br>
<span class="quotelev2">&gt;&gt; $objext 2&gt;&amp;1 | $GREP &quot;\-L&quot; | tail -n 1'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       else
</span><br>
<span class="quotelev2">&gt;&gt;         GXX=no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This fixes the problem for us (we stole it from a libtool mailing
</span><br>
<span class="quotelev2">&gt;&gt; list post from a long time ago).  If this could be applied to the
</span><br>
<span class="quotelev2">&gt;&gt; Libtool development trunk, that would be great...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch has two issues.  First a simple one, it should be
</span><br>
<span class="quotelev1">&gt;   sed -n '$p'
</span><br>
<span class="quotelev1">&gt; instead of `tail -n 1', for portability.  Second, and more  
</span><br>
<span class="quotelev1">&gt; importantly,
</span><br>
<span class="quotelev1">&gt; I remember to have tested the patch on some but not all compilers  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; know do pretend to be g++ at times (icpc, pathCC?, pgCC?).  I hope  
</span><br>
<span class="quotelev1">&gt; none
</span><br>
<span class="quotelev1">&gt; of them (nor g++ either) get the idea of splitting long output  
</span><br>
<span class="quotelev1">&gt; lines of
</span><br>
<span class="quotelev1">&gt; `$CXX -v' with backslash-newline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I'll put on my list throwing out another test round for the
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Previous message:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>In reply to:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
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
