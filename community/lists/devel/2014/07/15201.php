<?
$subject_val = "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 14:26:03 2014" -->
<!-- isoreceived="20140718182603" -->
<!-- sent="Fri, 18 Jul 2014 11:25:05 -0700" -->
<!-- isosent="20140718182505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error" -->
<!-- id="87B5AB8D-83C9-46FE-965A-40174E0E21BC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53C76CF3.80605_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 14:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....ick, we use the old -a and -o in a number of places. I'll start slowly cleaning them up.
<br>
<p>Thanks Bert!
<br>
<p>On Jul 16, 2014, at 11:28 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 07/17/2014 06:32 AM, Kevin Buckley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; =&gt; Checking for portability problems in extracted files
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: [check-portability.awk] =&gt; Found test ... == ...:
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: [check-portability.awk] configure:  if test &quot;$enable_oshmem&quot; ==
</span><br>
<span class="quotelev2">&gt;&gt; &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Autoconf also avoids the '-a' and '-o' flag from 'test' because of portability reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hep.by/gnu/autoconf/Limitations-of-Builtins.html#index-g_t_0040command_007btest_007d-1725">http://www.hep.by/gnu/autoconf/Limitations-of-Builtins.html#index-g_t_0040command_007btest_007d-1725</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15189.php">http://www.open-mpi.org/community/lists/devel/2014/07/15189.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15200.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
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
