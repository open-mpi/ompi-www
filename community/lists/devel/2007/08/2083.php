<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 10:28:24 2007" -->
<!-- isoreceived="20070806142824" -->
<!-- sent="Mon, 6 Aug 2007 08:27:59 -0600" -->
<!-- isosent="20070806142759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot" -->
<!-- id="AD1B2E86-1370-4D2D-B585-B975EE1186FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070805214136.GC7705_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2007-08-06 10:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2007, at 3:41 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; WHAT: Upgrade to a newer Libtool 2.1 nightly snapshot (we are
</span><br>
<span class="quotelev2">&gt;&gt; currently using 1.2362 2007/01/23) for making OMPI tarballs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/982">https://svn.open-mpi.org/trac/ompi/ticket/982</a> is fixed by newer
</span><br>
<span class="quotelev2">&gt;&gt; Libtool snapshots (e.g., 1.2444 2007/04/10 is what I have installed
</span><br>
<span class="quotelev2">&gt;&gt; at Cisco).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it?  If so, then I would like to know why (config.log outputs for
</span><br>
<span class="quotelev1">&gt; both would be nice).  Could have been an Autoconf update instead.
</span><br>
<span class="quotelev1">&gt; Asking because I don't think the bug was consciously fixed in Libtool;
</span><br>
<span class="quotelev1">&gt; only a test was added to expose the issue.  I'll put it on my list of
</span><br>
<span class="quotelev1">&gt; things to look at.
</span><br>
<p>While gathering data for this reply, I realized that you are exactly  
<br>
right: it's not the difference in the versions of Libtool that is the  
<br>
problem, it's the difference in versions of Autoconf (the OMPI v1.2  
<br>
nightly tarball uses AC 2.59, the OMPI trunk nightly tarball uses AC  
<br>
2.61, I use AC 2.61 in my development copies).
<br>
<p>So I'll change my RFC and send it around again to upgrade the version  
<br>
of AC that we're using in the 1.2 tarball.  There may be some second- 
<br>
order effects of doing this; I'll chat with Brian about it (he  
<br>
watches this stuff much more closely than me).
<br>
<p>FWIW, note that we are applying this patch to the generated  
<br>
aclocal.m4 (in all versions -- it appears to apply cleanly with a  
<br>
little fuzz on the exact line numbering):
<br>
<p>--- aclocal.m4.old      2007-04-20 15:18:48.000000000 -0700
<br>
+++ aclocal.m4  2007-04-20 15:18:59.000000000 -0700
<br>
@@ -5311,7 +5311,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Commands to make compiler produce verbose output that lists
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# what &quot;hidden&quot; libraries, object files and flags are used when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# linking a shared library.
<br>
-      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest. 
<br>
$objext 2&gt;&amp;1 | $GREP &quot;\-L&quot;'
<br>
+      output_verbose_link_cmd='$CC -shared $CFLAGS -v conftest. 
<br>
$objext 2&gt;&amp;1 | $GREP &quot;\-L&quot; | tail -n 1'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GXX=no
<br>
<p>This fixes the problem for us (we stole it from a libtool mailing  
<br>
list post from a long time ago).  If this could be applied to the  
<br>
Libtool development trunk, that would be great...  :-)
<br>
<p><p><p><span class="quotelev2">&gt;&gt; Plus, it's a newer version, so it's better, right?  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, a patch applied today fixes a regression introduced on  
</span><br>
<span class="quotelev1">&gt; 2007-05-08
</span><br>
<span class="quotelev1">&gt; and reported by Brian.
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
<li><strong>Next message:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
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
