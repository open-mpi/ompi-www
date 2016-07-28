<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 19:26:59 2010" -->
<!-- isoreceived="20101117002659" -->
<!-- sent="Tue, 16 Nov 2010 19:26:53 -0500" -->
<!-- isosent="20101117002653" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047" -->
<!-- id="AANLkTikFgnV-xYkwyasOjC96fZ4pxh=14YunTekXW-R__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011122322.oACNMZxO027035_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 19:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Previous message:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Reply:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see a bug in this code fragment:
<br>
<p>+#define MEMMOVE(d, s, l)                                  \
<br>
+    do {                                                  \
<br>
+        if( (((d) &lt; (s)) &amp;&amp; (((d) + (l)) &gt; (s))) ||       \
<br>
+            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (s))) ) {      \
<br>
+            memmove( (d), (s), (l) );                     \
<br>
+        } else {                                          \
<br>
+            MEMCPY( (d), (s), (l) );                      \
<br>
+        }                                                 \
<br>
+    } while (0)
<br>
<p>Shouldn't this line
<br>
+            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (s))) ) {      \
<br>
<p>be like this instead?
<br>
+            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (d))) ) {      \
<br>
<p>On Fri, Nov 12, 2010 at 6:22 PM,  &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-12 18:22:35 EST (Fri, 12 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 24047
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24047">https://svn.open-mpi.org/trac/ompi/changeset/24047</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add a second version of the datatype copy function using memmove instead of memcpy.
</span><br>
<span class="quotelev1">&gt; As memmove is slower than memcpy, I added the required logic to only use it when
</span><br>
<span class="quotelev1">&gt; really necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No modification from developers point of view, you should always call
</span><br>
<span class="quotelev1">&gt; opal_datatype_copy_content_same_ddt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/datatype/opal_datatype_copy.h
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/datatype/Makefile.am &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 3
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/datatype/opal_datatype_copy.c &#160; | &#160; 253 +++++++--------------------------------
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/datatype/opal_datatype_memcpy.h | &#160; &#160;28 ----
</span><br>
<span class="quotelev1">&gt; &#160; 3 files changed, 48 insertions(+), 236 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/datatype/Makefile.am
</span><br>
[snip]
<br>
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&#160;timattox_at_[hidden] || tmattox_at_[hidden]
&#160; &#160; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Previous message:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>Reply:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
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
