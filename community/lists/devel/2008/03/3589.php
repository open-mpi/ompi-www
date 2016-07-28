<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 16:10:22 2008" -->
<!-- isoreceived="20080331201022" -->
<!-- sent="Mon, 31 Mar 2008 14:10:05 -0600" -->
<!-- isosent="20080331201005" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="C416A13D.CE48%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="38D9633D-98BA-4E91-A351-2EF1B24813B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Session directories in $HOME?<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 16:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3588.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the problem - the following code was changed in session_dir.c:
<br>
<p>-#ifdef __WINDOWS__
<br>
-#define OMPI_DEFAULT_TMPDIR &quot;C:\\TEMP&quot;
<br>
-#else
<br>
-#define OMPI_DEFAULT_TMPDIR &quot;/tmp&quot;
<br>
-#endif
<br>
-
<br>
&nbsp;#define OMPI_PRINTF_FIX_STRING(a) ((NULL == a) ? &quot;(null)&quot; : a)
<br>
&nbsp;
<br>
&nbsp;/****************************
<br>
@@ -262,14 +257,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if( NULL != getenv(&quot;OMPI_PREFIX_ENV&quot;) ) { /* OMPI Environment var
<br>
*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix = strdup(getenv(&quot;OMPI_PREFIX_ENV&quot;));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    else if( NULL != getenv(&quot;TMPDIR&quot;) ) { /* General Environment var */
<br>
-        prefix = strdup(getenv(&quot;TMPDIR&quot;));
<br>
-    }
<br>
-    else if( NULL != getenv(&quot;TMP&quot;) ) { /* Another general environment var
<br>
*/
<br>
-        prefix = strdup(getenv(&quot;TMP&quot;));
<br>
-    }
<br>
-    else { /* ow. just use the default tmp directory */
<br>
-        prefix = strdup(OMPI_DEFAULT_TMPDIR);
<br>
+    else { /* General Environment var */
<br>
+        prefix = strdup(opal_tmp_directory());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I believe the problem is that opal_tmp_directory doesn't have
<br>
OMPI_DEFAULT_TMPDIR - it just defaults to $HOME.
<br>
<p>This should probably be fixed.
<br>
<p><p>On 3/31/08 2:01 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nope. None of those environment variables are defined. Should they
</span><br>
<span class="quotelev1">&gt; be? It would seem that the last part of the logic should be (re-)
</span><br>
<span class="quotelev1">&gt; extended to use /tmp if it exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I looked over the code and I don't see any problems with the
</span><br>
<span class="quotelev2">&gt;&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by
</span><br>
<span class="quotelev2">&gt;&gt; opal_home_directory ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;         if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;             if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;                 if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev2">&gt;&gt;                     str = &quot;.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So does anyone know why the session directories are in $HOME instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of /tmp?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3588.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
