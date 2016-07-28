<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 11:29:37 2010" -->
<!-- isoreceived="20100507152937" -->
<!-- sent="Fri, 7 May 2010 11:29:27 -0400" -->
<!-- isosent="20100507152927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083" -->
<!-- id="0B7E8AC9-F2EA-4016-A2A7-3C420B285173_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201005071255.o47CtIEu031986_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 11:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>Previous message:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>Reply:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Question about this; I didn't care much before, but thinking about this more, I think I do care a bit...
<br>
<p>The OSX man page for snprintf says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;These functions return the number of characters printed (not including
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the trailing `\0' used to end output to strings) or a negative value if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;an output error occurs, except for snprintf() and vsnprintf(), which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return the number of characters that would have been printed if the n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;were unlimited (again, not including the final `\0').
<br>
<p>So if hwloc_snprintf() returns 0, how do you know if you got a zero-length string or an error?  I would think that returning -1 for errors is better because then you know that the string is invalid and should not attempt to be printed.  Whereas 0 always means &quot;a valid zero-length string&quot;.
<br>
<p>I think callers should check for whatever we document they should check for -- hwloc_snprintf() is &quot;new&quot;, so they (should) check for whatever we put in doxygen.
<br>
<p>My $0.04...
<br>
<p><p><p>On May 7, 2010, at 8:55 AM, &lt;sthibaul_at_[hidden]&gt; &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-07 08:55:18 EDT (Fri, 07 May 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2083
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2083">https://svn.open-mpi.org/trac/hwloc/changeset/2083</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; make hwloc_snprintf return 0 instead of -1, which callers may not check for.
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/src/misc.c |     3 ++-                                    
</span><br>
<span class="quotelev1">&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/misc.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/misc.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/misc.c    2010-05-07 08:55:18 EDT (Fri, 07 May 2010)
</span><br>
<span class="quotelev1">&gt; @@ -40,7 +40,8 @@
</span><br>
<span class="quotelev1">&gt;      size *= 2;
</span><br>
<span class="quotelev1">&gt;      str = malloc(size);
</span><br>
<span class="quotelev1">&gt;      if (NULL == str) {
</span><br>
<span class="quotelev1">&gt; -        return -1;
</span><br>
<span class="quotelev1">&gt; +      /* Couldn't allocate?! Let's return the least surprising value. */
</span><br>
<span class="quotelev1">&gt; +      return 0;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      va_start(ap, format);
</span><br>
<span class="quotelev1">&gt;      errno = 0;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>Previous message:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>Reply:</strong> <a href="0978.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
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
