<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 21:22:27 2010" -->
<!-- isoreceived="20100306022227" -->
<!-- sent="Fri, 5 Mar 2010 21:22:15 -0500" -->
<!-- isosent="20100306022215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="D80AB7C1-92A3-4D28-B451-5CE279D11F2F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="09FE8C97-0573-4DD2-93E9-943935CE54E6_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 21:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 6:10 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I agree with Jeff's comments about the BTL_ERROR. How about a middle ground here? We let the BTLs use BTL_ERROR, eventually with some modifications, and we redirect the BTL_ERROR to a more advanced macro including support for orte_show_help? This will require going over all the BTLs, but on the bright side it will give us a 100% consistency on retorting errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds reasonable to me - I'm happy to help do it, assuming Jeff also concurs. I assume we would then replace all the show_help calls as well? Otherwise, I'm not sure what we gain as the direct orte_show_help dependency will remain. Or are those calls too specialized to be replaced with BTL_ERROR?
</span><br>
<p>Should this kind of thing wait for OPAL_SOS?
<br>
<p>(I mention this because the OPAL_SOS RFC will be sent to devel Real Soon Now...)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7559.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
