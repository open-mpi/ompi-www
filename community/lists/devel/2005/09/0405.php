<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 12:07:43 2005" -->
<!-- isoreceived="20050923170743" -->
<!-- sent="Fri, 23 Sep 2005 19:07:29 +0200" -->
<!-- isosent="20050923170729" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="20050923170729.GA5834_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="433427C8.8000907_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2005-09-23 12:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
<li><strong>In reply to:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>* George Bosilca wrote on Fri, Sep 23, 2005 at 06:05:28PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I still see a problem. **Just to refresh the memories, I'm the only 
</span><br>
<span class="quotelev1">&gt; complaining on a regular base about the useless dependencies**. And 
</span><br>
<span class="quotelev1">&gt; there are a lot. I know that most of the shared libraries in ompi use 
</span><br>
<span class="quotelev1">&gt; functions in the opal section. But few of them rely on any of the orte 
</span><br>
<span class="quotelev1">&gt; shared libraries. If the dependencies are set correctly then we don't 
</span><br>
<span class="quotelev1">&gt; have to add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/orte/liborte.la
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all over the Makefiles.
</span><br>
<p>This is basically what I suggested to Jeff as well.  It's more work to
<br>
keep things accurate this way, though, unless you manage to impose
<br>
strict rule this way.
<br>
<p>By the way, it might be possible to check this more-or-less with some
<br>
automatisms, on a capable platform.  I.e., on a recent GNU/Linux you
<br>
could verify whether some deplib was really needed (with comparing
<br>
DT_NEEDED with and without --as-needed); on Solaris/CC, you could
<br>
check the other way round: find any missing dependency with Libtool's
<br>
option -no-undefined.
<br>
<p>Not great, but it might suffice for a regression test.
<br>
If you like, I can think of hacking something like this up.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
<li><strong>In reply to:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
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
