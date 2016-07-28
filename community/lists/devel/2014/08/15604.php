<?
$subject_val = "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 03:49:21 2014" -->
<!-- isoreceived="20140811074921" -->
<!-- sent="Mon, 11 Aug 2014 09:49:13 +0200" -->
<!-- isosent="20140811074913" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [vt] --with-openmpi-inside configure argument" -->
<!-- id="53E87579.1070308_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16gKC=FDNW66mfoHYmJPSKedEyw4TVTLZ8g_sJN-ppDeA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [vt] --with-openmpi-inside configure argument<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 03:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Paul,
<br>
<p>the only possible values for --with-openmpi-inside are &quot;yes&quot; and &quot;1.7&quot; 
<br>
where the latter value is interpreted as *since*. Prior version 1.7 the 
<br>
Open MPI configure provides both F77 and FC for specifying Fortran 
<br>
compilers. The VT configure only provides FC, so it sets FC (if not set) 
<br>
to F77.
<br>
<p>Kind regards,
<br>
Matthias Jurenz
<br>
<p><p>On 05.08.2014 02:40, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I noticed that Open MPI is passing
</span><br>
<span class="quotelev1">&gt;     --with-openmpi-inside=1.7
</span><br>
<span class="quotelev1">&gt; in the arguments passed to
</span><br>
<span class="quotelev1">&gt;     ompi/contrib/vt/vt/configure
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;     ompi/contrib/vt/vt/extlib/otf/configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The extlib/otf case just tests if the value is set, but the top-level 
</span><br>
<span class="quotelev1">&gt; vt/configure is checking for the specific string &quot;1.7&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Check whether we are inside Open MPI package
</span><br>
<span class="quotelev1">&gt; inside_openmpi=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt; AC_ARG_WITH(openmpi-inside, [],
</span><br>
<span class="quotelev1">&gt; [
</span><br>
<span class="quotelev1">&gt;         AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -o x&quot;$withval&quot; = &quot;x1.7&quot;],
</span><br>
<span class="quotelev1">&gt;         [
</span><br>
<span class="quotelev1">&gt;                 inside_openmpi=&quot;$withval&quot;
</span><br>
<span class="quotelev1">&gt;                 CPPFLAGS=&quot;-DINSIDE_OPENMPI $CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # Set FC to F77 if Open MPI version &lt; 1.7
</span><br>
<span class="quotelev1">&gt;                 AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -a x&quot;$FC&quot; = x -a 
</span><br>
<span class="quotelev1">&gt; x&quot;$F77&quot; != x],
</span><br>
<span class="quotelev1">&gt;                 [FC=&quot;$F77&quot;])
</span><br>
<span class="quotelev1">&gt;         ])
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That logic looks a bit fragile with respect to any future changes.
</span><br>
<span class="quotelev1">&gt; Specifically the inner AS_IF is true for the desired condition 
</span><br>
<span class="quotelev1">&gt; &quot;version &lt; 1.7&quot; only because the outer AS_IF currently ensures the 
</span><br>
<span class="quotelev1">&gt; only possible values of &quot;$withval&quot; are &quot;yes&quot; and &quot;1.7&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15505.php">http://www.open-mpi.org/community/lists/devel/2014/08/15505.php</a>
</span><br>
<p><pre>
-- 
Matthias Jurenz
Technische Universit&#228;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15604/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
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
