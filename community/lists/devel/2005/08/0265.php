<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 30 05:45:34 2005" -->
<!-- isoreceived="20050830104534" -->
<!-- sent="Tue, 30 Aug 2005 06:45:32 -0400" -->
<!-- isosent="20050830104532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  small shell quoting issue" -->
<!-- id="9516b6c89b2a9ded51692022d03a8b31_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050829163045.GC23605_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-08-30 05:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<li><strong>Previous message:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0263.php">Ralf Wildenhues: "small shell quoting issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<li><strong>Reply:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh.  And I always thought it was the other way around (you *had* to 
<br>
put &quot;&quot; around it or they would be treated as separate words).
<br>
<p>Committed; thanks.
<br>
<p><p>On Aug 29, 2005, at 12:30 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; A small patch: On one hand, Bourne shells do not do word splitting 
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; parameter expansion and command substitution, of stuff on the right 
</span><br>
<span class="quotelev1">&gt; hand
</span><br>
<span class="quotelev1">&gt; side of an assignment.  On the other hand, nested quotes within
</span><br>
<span class="quotelev1">&gt; backquotes are not portable.  (This is also documented in the Autoconf
</span><br>
<span class="quotelev1">&gt; manual).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examples:
</span><br>
<span class="quotelev1">&gt;  foo=&quot;$bar&quot;;  baz=&quot;`ls`&quot;
</span><br>
<span class="quotelev1">&gt; is completely equivalent to
</span><br>
<span class="quotelev1">&gt;  foo=$bar;    baz=`ls`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and this:
</span><br>
<span class="quotelev1">&gt;  foo=&quot;`echo \&quot;bla\&quot;`&quot;
</span><br>
<span class="quotelev1">&gt; does not work with pdksh in posix mode, but this
</span><br>
<span class="quotelev1">&gt;  foo=`echo &quot;bla&quot;`
</span><br>
<span class="quotelev1">&gt; works everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, between the keywords &quot;case&quot; and &quot;in&quot;, word splitting is not
</span><br>
<span class="quotelev1">&gt; done either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * config/ompi_get_version.m4 (OMPI_GET_VERSION): Fix nested
</span><br>
<span class="quotelev1">&gt;         quoting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_get_version.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_get_version.m4	(Revision 7073)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_get_version.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -58,9 +58,9 @@
</span><br>
<span class="quotelev1">&gt;      if test &quot;$gv_want_svn&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt;          if test &quot;$gv_svn_r&quot; = &quot;-1&quot;; then
</span><br>
<span class="quotelev1">&gt;              if test -d &quot;$srcdir/.svn&quot;; then
</span><br>
<span class="quotelev1">&gt; -                ver=&quot;r`svnversion \&quot;$srcdir\&quot;`&quot;
</span><br>
<span class="quotelev1">&gt; +                ver=r`svnversion &quot;$srcdir&quot;`
</span><br>
<span class="quotelev1">&gt;              else
</span><br>
<span class="quotelev1">&gt; -                ver=&quot;svn`date '+%m%d%Y'`&quot;
</span><br>
<span class="quotelev1">&gt; +                ver=svn`date '+%m%d%Y'`
</span><br>
<span class="quotelev1">&gt;              fi
</span><br>
<span class="quotelev1">&gt;              gv_svn_r=&quot;$ver&quot;
</span><br>
<span class="quotelev1">&gt;          fi
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<li><strong>Previous message:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0263.php">Ralf Wildenhues: "small shell quoting issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
<li><strong>Reply:</strong> <a href="0266.php">Ralf Wildenhues: "Re:  small shell quoting issue"</a>
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
