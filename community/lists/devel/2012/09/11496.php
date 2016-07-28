<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:48:28 2012" -->
<!-- isoreceived="20120911194828" -->
<!-- sent="Tue, 11 Sep 2012 21:48:24 +0200" -->
<!-- isosent="20120911194824" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="CAKPyHN1GKWCH=T5YZCj4bAiL9HmNmagLUjN8i_V9rH3-KiMn7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA150f+gtX+8tOTeFrfjJbw7qPzdG0bjkkPcqi4LOQjYvNA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Tue, Sep 11, 2012 at 9:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Following-up as promised:
</span><br>
<span class="quotelev1">&gt; My build w/ PGI-7.2-5 has completed and produces the same error (and
</span><br>
<span class="quotelev1">&gt; warnings) as seen w/ 8.0-6 and reported in the message quoted below.
</span><br>
<p>Thanks. I don't know since the PGI has support for &quot;omp
<br>
threadprivate()&quot; but I can easily disable it for all pre 9.0 PGI
<br>
compilers with this patch to vt_unify.h:
<br>
<p>@@ -51,11 +51,23 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// disable OpenMP, if compiler version is less than 4.2.4
<br>
&nbsp;#        if __OPENCC__ &lt; 4 || (__OPENCC__ == 4 &amp;&amp; (__OPENCC_MINOR__ &lt;
<br>
2 || (__OPENCC_MINOR__ == 2 &amp;&amp; __OPENCC_PATCHLEVEL__ &lt; 4)))
<br>
&nbsp;#           undef HAVE_OMP
<br>
&nbsp;#        endif
<br>
&nbsp;#     endif
<br>
-#  endif // __OPEN64__
<br>
+
<br>
+   // pre PGI 9.0 do not have &quot;omp threadprivate()&quot;
<br>
+#  elif defined(__PGI)
<br>
+#     if !defined(__PGIC__) || !defined(__PGIC_MINOR__) ||
<br>
!defined(__PGIC_PATCHLEVEL__)
<br>
+         // unknown compiler version; disable OpenMP to be on the safe side
<br>
+#        undef HAVE_OMP
<br>
+#     else
<br>
+         // disable OpenMP, if compiler version is less than 9.0
<br>
+#        if __PGIC__ &lt; 9
<br>
+#           undef HAVE_OMP
<br>
+#        endif
<br>
+#     endif
<br>
+#  endif // __PGI
<br>
&nbsp;#endif // HAVE_OMP
<br>
&nbsp;#if defined(HAVE_OMP) &amp;&amp; HAVE_OMP
<br>
&nbsp;#  include &lt;omp.h&gt;
<br>
&nbsp;#endif // HAVE_OMP
<br>
<p>I hope that the predefines did not change for compilers prior version
<br>
11.0, which is the oldest I have at hand here.
<br>
<p>It would be great if you could test it, so that we can fast track a
<br>
patch tomorrow German time.
<br>
<p>Thanks in advance.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
