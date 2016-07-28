<?
$subject_val = "Re: [OMPI devel] rch-step2 branch errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:11:50 2008" -->
<!-- isoreceived="20080221151150" -->
<!-- sent="Thu, 21 Feb 2008 08:11:33 -0700" -->
<!-- isosent="20080221151133" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rch-step2 branch errors" -->
<!-- id="C3E2E2B5.C512%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14C25_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rch-step2 branch errors<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 10:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3278.php">Lenny Verkhovsky: "[OMPI devel] rch-step2 branch errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - it is building for me, but Tim P has noted a couple of bugs (I
<br>
haven't tested it in the last few days).
<br>
<p>I'll take a look...
<br>
<p><p>On 2/21/08 8:02 AM, &quot;Lenny Verkhovsky&quot; &lt;lennyb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to make a /tmp/rank_file branch with new RMAPS component I need
</span><br>
<span class="quotelev1">&gt; /tmp/rhc-step2b branch to be based on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to download and compile it, but it failed.
</span><br>
<span class="quotelev1">&gt; (missing many defines, h files and new directories e.t.c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
</span><br>
<span class="quotelev1">&gt; .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/USERS/lenny/OMPI_ORTE_17540/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `OPAL_OUTPUT'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3278.php">Lenny Verkhovsky: "[OMPI devel] rch-step2 branch errors"</a>
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
