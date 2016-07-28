<?
$subject_val = "Re: [OMPI devel] MPI_Reduce_scatter_block";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 11:36:04 2012" -->
<!-- isoreceived="20120625153604" -->
<!-- sent="Mon, 25 Jun 2012 11:35:59 -0400" -->
<!-- isosent="20120625153559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Reduce_scatter_block" -->
<!-- id="0F8B0299-3E35-4C86-A3B3-F098EE876652_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE87A0A.8070704_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Reduce_scatter_block<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 11:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>In reply to:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These should now be fixed.  Sorry about that!
<br>
<p>On Jun 25, 2012, at 10:47 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In tarball 26642, Fortran compilation no longer succeeds.  I suspect the problem might be 26641.  E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libmpi_usempif08.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `ompi_iscan_f'
</span><br>
<span class="quotelev1">&gt; libmpi_mpifh.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Reduce_scatter_block'
</span><br>
<span class="quotelev1">&gt; libmpi_mpifh.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Ireduce_scatter_block'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need further characterization, let me know.  I can isolate further.
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
<li><strong>Next message:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>In reply to:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
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
