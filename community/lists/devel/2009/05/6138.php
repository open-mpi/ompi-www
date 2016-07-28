<?
$subject_val = "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 03:10:54 2009" -->
<!-- isoreceived="20090528071054" -->
<!-- sent="Thu, 28 May 2009 09:10:49 +0200" -->
<!-- isosent="20090528071049" -->
<!-- name="Holger Mickler" -->
<!-- email="holger.mickler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?" -->
<!-- id="4A1E38F9.3040607_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A7E67922-1010-43FD-B411-25F58BBEE91D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?<br>
<strong>From:</strong> Holger Mickler (<em>holger.mickler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 03:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 27, 2009, at 6:49 AM, Holger Mickler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; would you mind sharing this patch? We'd like to test our current VT
</span><br>
<span class="quotelev2">&gt;&gt; version with
</span><br>
<span class="quotelev2">&gt;&gt; some MPI RMA code :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problem-o.  I've submitted this patch upstream to Intel as well. 
</span><br>
<span class="quotelev1">&gt; Note that the patch slightly changed between 3.1 and 3.2; this is the
</span><br>
<span class="quotelev1">&gt; 3.2 patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- imb/src/IMB_window.c    2008-10-21 01:17:31.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ IMB_3.2/src/IMB_window.c    2009-05-26 05:29:15.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -140,6 +140,9 @@
</span><br>
<span class="quotelev1">&gt;                           c_info-&gt;rank, 0, 1, c_info-&gt;r_data_type,
</span><br>
<span class="quotelev1">&gt; c_info-&gt;WIN);
</span><br>
<span class="quotelev1">&gt;            MPI_ERRHAND(ierr);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; +          /* JMS Added a call to MPI_WIN_FENCE, per MPI-2.1 11.2.1 */
</span><br>
<span class="quotelev1">&gt; +          ierr = MPI_Win_fence(0, c_info-&gt;WIN);
</span><br>
<span class="quotelev1">&gt; +          MPI_ERRHAND(ierr);
</span><br>
<span class="quotelev1">&gt;            ierr = MPI_Win_free(&amp;c_info-&gt;WIN);
</span><br>
<span class="quotelev1">&gt;            MPI_ERRHAND(ierr);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Great, works fine!
<br>
<p><span class="quotelev2">&gt;&gt; Does anyone know of some (small) code/benchmark that uses all
</span><br>
<span class="quotelev2">&gt;&gt; available MPI RMA
</span><br>
<span class="quotelev2">&gt;&gt; functionality? As far as I see, IMB only uses fence and
</span><br>
<span class="quotelev2">&gt;&gt; put/get/accumulate. No
</span><br>
<span class="quotelev2">&gt;&gt; locks or post/wait/start/complete...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a few one-sided tests in the ompi-test repository (which I think
</span><br>
<span class="quotelev1">&gt; Dresden has access to?), but I'm not 100% sure that they're correct...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, we do have access. We'll try the tests and see how far we can get :)
<br>
Thanks a lot!
<br>
<p>Holger
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
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
