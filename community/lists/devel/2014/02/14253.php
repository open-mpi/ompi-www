<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 16:53:54 2014" -->
<!-- isoreceived="20140227215354" -->
<!-- sent="Thu, 27 Feb 2014 13:52:00 -0800" -->
<!-- isosent="20140227215200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="2C7B2146-86FC-463E-8FE6-98F39CF605B8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36019F2E5ED_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 16:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14254.php">Latham, Robert J.: "[OMPI devel] pulling in Open-MPI changes to ROMIO"</a>
<li><strong>Previous message:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify my point, since the 1.7 branch was mentioned in this thread. I didn't worry about USNIC calling abort because, as Jeff pointed out, we do so in other places. However, I do believe that we shouldn't be doing so (including in orte) because it isn't the role of a library to abort the process. We should report errors upward to the app and let it decide how to respond.
<br>
<p>That said, I know we initially did it because we hit places where we couldn't propagate an error code (e.g., in a void routine called by the event lib). I've been working on resolving that in orte, but it still isn't complete.
<br>
<p>Figure we should do the same to the MPI layer, recognizing that it will take time to complete
<br>
<p><p>On Feb 27, 2014, at 1:48 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It could.  I added that argument 4 years ago to support by my failover work with the BFO.  It was a way for a BTL to pass some type of string back to the PML telling the PML who it was for verbose output to understand what was happening. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, February 27, 2014 4:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in
</span><br>
<span class="quotelev2">&gt;&gt; trunk/ompi/mca: btl/usnic rte
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Speaking of which, shouldn't the OB1 error handler send the error message
</span><br>
<span class="quotelev2">&gt;&gt; string that it received as the 4th param to ompi_rte_abort() so that it can be
</span><br>
<span class="quotelev2">&gt;&gt; printed out?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/pml/ob1/pml_ob1.c
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/pml/ob1/pml_ob1.c	(revision 30877)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/pml/ob1/pml_ob1.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -780,7 +780,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        return;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; #endif /* OPAL_CUDA_SUPPORT */
</span><br>
<span class="quotelev2">&gt;&gt; -    ompi_rte_abort(-1, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +    ompi_rte_abort(-1, btlinfo);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_CR    == 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 27, 2014, at 1:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, the following BTLs all have calls to abort() or ompi_rte_abort() within
</span><br>
<span class="quotelev2">&gt;&gt; them:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - usnic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - portals4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the btl base itself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 27, 2014, at 7:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The majority of places we call abort in this commit is actually down in a
</span><br>
<span class="quotelev2">&gt;&gt; progress thread.  We didn't think it was safe to call the PML error function in a
</span><br>
<span class="quotelev2">&gt;&gt; progress thread -- is that incorrect?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not, then we probably should create some mechanism for doing so. I
</span><br>
<span class="quotelev2">&gt;&gt; agree with George that we shouldn't call abort inside a library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14254.php">Latham, Robert J.: "[OMPI devel] pulling in Open-MPI changes to ROMIO"</a>
<li><strong>Previous message:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
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
