<?
$subject_val = "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 10:32:54 2014" -->
<!-- isoreceived="20140220153254" -->
<!-- sent="Thu, 20 Feb 2014 15:32:52 +0000" -->
<!-- isosent="20140220153252" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] udcm_component_query hangs when memlock not infinite" -->
<!-- id="8DE11B2C-45B5-4C0B-AF33-4F83260AB718_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5305CC1B.5070807_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] udcm_component_query hangs when memlock not infinite<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 10:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
<li><strong>In reply to:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report; I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4290">https://svn.open-mpi.org/trac/ompi/ticket/4290</a>.
<br>
<p>On Feb 20, 2014, at 4:34 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're setting up a new cluster here. Open MPI 1.7.4 was hanging at
</span><br>
<span class="quotelev1">&gt; startup without any error message. The issue appears to be
</span><br>
<span class="quotelev1">&gt; udcm_component_query() hanging in finalize() on the sched_yield() loop
</span><br>
<span class="quotelev1">&gt; when memlock limit isn't set to unlimited as usual.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately the hangs occur before we print the usual error message
</span><br>
<span class="quotelev1">&gt; &quot;you need to set memlock limit to unlimited&quot;. If the udcm problem cannot
</span><br>
<span class="quotelev1">&gt; be fixed, it would be good to print an error message about memlock not
</span><br>
<span class="quotelev1">&gt; being unlimited much earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
<li><strong>In reply to:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
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
