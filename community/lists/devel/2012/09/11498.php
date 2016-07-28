<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 16:24:25 2012" -->
<!-- isoreceived="20120911202425" -->
<!-- sent="Tue, 11 Sep 2012 13:24:02 -0700" -->
<!-- isosent="20120911202402" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="CAAvDA14t_Agpjg2pqSp7XG5dyvXyZdO3vs4MpFNrwBcLsiYtiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKPyHN1GKWCH=T5YZCj4bAiL9HmNmagLUjN8i_V9rH3-KiMn7Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 16:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Previous message:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert,
<br>
<p>Testing PASSED with the patch you provided.
<br>
<p>FWIW: I believe that PGI's licenses work such that a license for a
<br>
particular PGI version will work for all older versions.
<br>
So, if needed in the future you should probably be able to download older
<br>
PGI releases from their web site and install them (even as non-root) and
<br>
use them w/ the license you have for 11.0.
<br>
<p>-Paul
<br>
<p>On Tue, Sep 11, 2012 at 12:48 PM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 9:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Following-up as promised:
</span><br>
<span class="quotelev2">&gt; &gt; My build w/ PGI-7.2-5 has completed and produces the same error (and
</span><br>
<span class="quotelev2">&gt; &gt; warnings) as seen w/ 8.0-6 and reported in the message quoted below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks. I don't know since the PGI has support for &quot;omp
</span><br>
<span class="quotelev1">&gt; threadprivate()&quot; but I can easily disable it for all pre 9.0 PGI
</span><br>
<span class="quotelev1">&gt; compilers with this patch to vt_unify.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -51,11 +51,23 @@
</span><br>
<span class="quotelev1">&gt;           // disable OpenMP, if compiler version is less than 4.2.4
</span><br>
<span class="quotelev1">&gt;  #        if __OPENCC__ &lt; 4 || (__OPENCC__ == 4 &amp;&amp; (__OPENCC_MINOR__ &lt;
</span><br>
<span class="quotelev1">&gt; 2 || (__OPENCC_MINOR__ == 2 &amp;&amp; __OPENCC_PATCHLEVEL__ &lt; 4)))
</span><br>
<span class="quotelev1">&gt;  #           undef HAVE_OMP
</span><br>
<span class="quotelev1">&gt;  #        endif
</span><br>
<span class="quotelev1">&gt;  #     endif
</span><br>
<span class="quotelev1">&gt; -#  endif // __OPEN64__
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   // pre PGI 9.0 do not have &quot;omp threadprivate()&quot;
</span><br>
<span class="quotelev1">&gt; +#  elif defined(__PGI)
</span><br>
<span class="quotelev1">&gt; +#     if !defined(__PGIC__) || !defined(__PGIC_MINOR__) ||
</span><br>
<span class="quotelev1">&gt; !defined(__PGIC_PATCHLEVEL__)
</span><br>
<span class="quotelev1">&gt; +         // unknown compiler version; disable OpenMP to be on the safe
</span><br>
<span class="quotelev1">&gt; side
</span><br>
<span class="quotelev1">&gt; +#        undef HAVE_OMP
</span><br>
<span class="quotelev1">&gt; +#     else
</span><br>
<span class="quotelev1">&gt; +         // disable OpenMP, if compiler version is less than 9.0
</span><br>
<span class="quotelev1">&gt; +#        if __PGIC__ &lt; 9
</span><br>
<span class="quotelev1">&gt; +#           undef HAVE_OMP
</span><br>
<span class="quotelev1">&gt; +#        endif
</span><br>
<span class="quotelev1">&gt; +#     endif
</span><br>
<span class="quotelev1">&gt; +#  endif // __PGI
</span><br>
<span class="quotelev1">&gt;  #endif // HAVE_OMP
</span><br>
<span class="quotelev1">&gt;  #if defined(HAVE_OMP) &amp;&amp; HAVE_OMP
</span><br>
<span class="quotelev1">&gt;  #  include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt;  #endif // HAVE_OMP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that the predefines did not change for compilers prior version
</span><br>
<span class="quotelev1">&gt; 11.0, which is the oldest I have at hand here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great if you could test it, so that we can fast track a
</span><br>
<span class="quotelev1">&gt; patch tomorrow German time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Previous message:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
