<?
$subject_val = "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 09:18:51 2016" -->
<!-- isoreceived="20160204141851" -->
<!-- sent="Thu, 4 Feb 2016 06:18:49 -0800" -->
<!-- isosent="20160204141849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32" -->
<!-- id="CAMD57odSDxd8M2zLMOnw0ecvN6V++tfESkLy3ODuu=2Zemj5rw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vHYE838w7BX+Cp3G0tgkXbY_g3fRch7gN6fHW=2CRp_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 09:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>In reply to:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>Reply:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1, with an addition and modification:
<br>
<p>* add the async_modex on by default
<br>
* make the change in master and let it &quot;stew&quot; for awhile before moving to
<br>
2.0. I believe only Cisco has been running MTT against that setup so far.
<br>
<p><p>On Thu, Feb 4, 2016 at 6:04 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should we also enable sparse groups by default ?
</span><br>
<span class="quotelev1">&gt; (or at least on master, and then v2.x later)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, February 4, 2016, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 3, 2016 at 9:54 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Decrease default value of mpi_add_procs_cutoff from 1024 to 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: The &quot;partial add procs&quot; behavior is supposed to be a key feature of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v2.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: ompi/mpi/runtime/ompi_mpi_params.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Next Tuesday teleconf (9 Feb 2016)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpi_add_procs_cutoff MCA param controls the crossover to when we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start doing &quot;partial&quot; add_procs() behavior (i.e., don't just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml.add_procs(ALL_PROCS) during MPI_INIT).  Currently, this value defaults
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 1024, meaning that we don't get the &quot;partial add_procs&quot; behavior until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you run 1025 processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have an issue with reducing this value to a lower value?  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; picked 32 somewhat arbitrarily.  See the PR for master:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="https://github.com/open-mpi/ompi/pull/1340">https://github.com/open-mpi/ompi/pull/1340</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18543.php">http://www.open-mpi.org/community/lists/devel/2016/02/18543.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18551.php">http://www.open-mpi.org/community/lists/devel/2016/02/18551.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>In reply to:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>Reply:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
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
