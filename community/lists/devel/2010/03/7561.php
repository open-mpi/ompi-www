<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 14:13:28 2010" -->
<!-- isoreceived="20100307191328" -->
<!-- sent="Sun, 7 Mar 2010 14:13:19 -0500" -->
<!-- isosent="20100307191319" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="B5F8F3C0-00C2-456D-A024-B91604F19D31_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1023930-85F4-4C38-B4A3-2103F0D7C17A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding error/verbose messages to the TCP BTL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 14:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then let's just be patient until OPAL_SOS make it in the trunk, and save us the burden of a large effort made twice.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2010, at 22:35 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 7:22 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2010, at 6:10 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree with Jeff's comments about the BTL_ERROR. How about a middle ground here? We let the BTLs use BTL_ERROR, eventually with some modifications, and we redirect the BTL_ERROR to a more advanced macro including support for orte_show_help? This will require going over all the BTLs, but on the bright side it will give us a 100% consistency on retorting errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds reasonable to me - I'm happy to help do it, assuming Jeff also concurs. I assume we would then replace all the show_help calls as well? Otherwise, I'm not sure what we gain as the direct orte_show_help dependency will remain. Or are those calls too specialized to be replaced with BTL_ERROR?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should this kind of thing wait for OPAL_SOS?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (I mention this because the OPAL_SOS RFC will be sent to devel Real Soon Now...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure - OPAL_SOS will supersede all this anyway.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
