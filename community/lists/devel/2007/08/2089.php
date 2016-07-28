<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 16:48:23 2007" -->
<!-- isoreceived="20070806204823" -->
<!-- sent="Mon, 6 Aug 2007 22:48:13 +0200" -->
<!-- isosent="20070806204813" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot" -->
<!-- id="20070806204813.GA7874_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AD1B2E86-1370-4D2D-B585-B975EE1186FD_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 16:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>* Jeff Squyres wrote on Mon, Aug 06, 2007 at 04:27:59PM CEST:
<br>
<span class="quotelev1">&gt; On Aug 5, 2007, at 3:41 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/982">https://svn.open-mpi.org/trac/ompi/ticket/982</a> is fixed by newer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Libtool snapshots (e.g., 1.2444 2007/04/10 is what I have installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at Cisco).
</span><br>
[...]
<br>
<span class="quotelev2">&gt; &gt; Asking because I don't think the bug was consciously fixed in Libtool;
</span><br>
<span class="quotelev2">&gt; &gt; only a test was added to expose the issue.  I'll put it on my list of
</span><br>
<span class="quotelev2">&gt; &gt; things to look at.
</span><br>
[...]
<br>
<span class="quotelev1">&gt; FWIW, note that we are applying this patch to the generated  
</span><br>
<span class="quotelev1">&gt; aclocal.m4 (in all versions -- it appears to apply cleanly with a  
</span><br>
<span class="quotelev1">&gt; little fuzz on the exact line numbering):
</span><br>
<p>Ahh, yes, that was the patch that fixed the problem (rather than the
<br>
Autoconf upgrade), I remember now.  Thanks for searching!
<br>
<p><span class="quotelev1">&gt; --- aclocal.m4.old      2007-04-20 15:18:48.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ aclocal.m4  2007-04-20 15:18:59.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -5311,7 +5311,7 @@
</span><br>
<span class="quotelev1">&gt;         # Commands to make compiler produce verbose output that lists
</span><br>
<span class="quotelev1">&gt;         # what &quot;hidden&quot; libraries, object files and flags are used when
</span><br>
<span class="quotelev1">&gt;         # linking a shared library.
</span><br>
<span class="quotelev1">&gt; -      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest. 
</span><br>
<span class="quotelev1">&gt; $objext 2&gt;&amp;1 | $GREP &quot;\-L&quot;'
</span><br>
<span class="quotelev1">&gt; +      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest. 
</span><br>
<span class="quotelev1">&gt; $objext 2&gt;&amp;1 | $GREP &quot;\-L&quot; | tail -n 1'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       else
</span><br>
<span class="quotelev1">&gt;         GXX=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This fixes the problem for us (we stole it from a libtool mailing  
</span><br>
<span class="quotelev1">&gt; list post from a long time ago).  If this could be applied to the  
</span><br>
<span class="quotelev1">&gt; Libtool development trunk, that would be great...  :-)
</span><br>
<p>The patch has two issues.  First a simple one, it should be 
<br>
&nbsp;&nbsp;sed -n '$p'
<br>
instead of `tail -n 1', for portability.  Second, and more importantly,
<br>
I remember to have tested the patch on some but not all compilers that I
<br>
know do pretend to be g++ at times (icpc, pathCC?, pgCC?).  I hope none
<br>
of them (nor g++ either) get the idea of splitting long output lines of
<br>
`$CXX -v' with backslash-newline.
<br>
<p>Anyway, I'll put on my list throwing out another test round for the
<br>
patch.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2092.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
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
