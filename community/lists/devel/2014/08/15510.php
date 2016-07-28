<?
$subject_val = "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 03:05:03 2014" -->
<!-- isoreceived="20140805070503" -->
<!-- sent="Tue, 05 Aug 2014 09:04:54 +0200" -->
<!-- isosent="20140805070454" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [vt] --with-openmpi-inside configure argument" -->
<!-- id="53E08216.1010303_at_tu-dresden.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 03:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Previous message:</strong> <a href="15509.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/05/2014 02:40 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I noticed that Open MPI is passing
</span><br>
<span class="quotelev1">&gt;      --with-openmpi-inside=1.7
</span><br>
<span class="quotelev1">&gt; in the arguments passed to
</span><br>
<span class="quotelev1">&gt;      ompi/contrib/vt/vt/configure
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;      ompi/contrib/vt/vt/extlib/otf/configure
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
<span class="quotelev1">&gt;          AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -o x&quot;$withval&quot; = &quot;x1.7&quot;],
</span><br>
<span class="quotelev1">&gt;          [
</span><br>
<span class="quotelev1">&gt;                  inside_openmpi=&quot;$withval&quot;
</span><br>
<span class="quotelev1">&gt;                  CPPFLAGS=&quot;-DINSIDE_OPENMPI $CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  # Set FC to F77 if Open MPI version &lt; 1.7
</span><br>
<span class="quotelev1">&gt;                  AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -a x&quot;$FC&quot; = x -a x&quot;$F77&quot;
</span><br>
<span class="quotelev1">&gt; != x],
</span><br>
<span class="quotelev1">&gt;                  [FC=&quot;$F77&quot;])
</span><br>
<span class="quotelev1">&gt;          ])
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That logic looks a bit fragile with respect to any future changes.
</span><br>
<span class="quotelev1">&gt; Specifically the inner AS_IF is true for the desired condition &quot;version &lt;
</span><br>
<span class="quotelev1">&gt; 1.7&quot; only because the outer AS_IF currently ensures the only possible
</span><br>
<span class="quotelev1">&gt; values of &quot;$withval&quot; are &quot;yes&quot; and &quot;1.7&quot;.
</span><br>
<p>Noted. But this is not my field. May take some time, because Matthias is 
<br>
still in vacation.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15510/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Previous message:</strong> <a href="15509.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15511.php">Paul Hargrove: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
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
