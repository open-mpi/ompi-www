<?
$subject_val = "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 08:30:02 2016" -->
<!-- isoreceived="20160204133002" -->
<!-- sent="Thu, 4 Feb 2016 08:30:01 -0500" -->
<!-- isosent="20160204133001" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32" -->
<!-- id="CAG4F6z9s0KGAHDMEUCNDuvxAXmh_VtKXc+Gc9YKmQ1Z+CBEFFg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F6FCBD7B-7371-4541-B376-BB6287DDD3E9_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 08:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p><p>On Wed, Feb 3, 2016 at 9:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Decrease default value of mpi_add_procs_cutoff from 1024 to 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: The &quot;partial add procs&quot; behavior is supposed to be a key feature of
</span><br>
<span class="quotelev1">&gt; v2.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mpi/runtime/ompi_mpi_params.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday teleconf (9 Feb 2016)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpi_add_procs_cutoff MCA param controls the crossover to when we start
</span><br>
<span class="quotelev1">&gt; doing &quot;partial&quot; add_procs() behavior (i.e., don't just
</span><br>
<span class="quotelev1">&gt; pml.add_procs(ALL_PROCS) during MPI_INIT).  Currently, this value defaults
</span><br>
<span class="quotelev1">&gt; to 1024, meaning that we don't get the &quot;partial add_procs&quot; behavior until
</span><br>
<span class="quotelev1">&gt; you run 1025 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have an issue with reducing this value to a lower value?  I
</span><br>
<span class="quotelev1">&gt; picked 32 somewhat arbitrarily.  See the PR for master:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/pull/1340">https://github.com/open-mpi/ompi/pull/1340</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18543.php">http://www.open-mpi.org/community/lists/devel/2016/02/18543.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18551.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
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
