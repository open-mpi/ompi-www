<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 18:10:19 2010" -->
<!-- isoreceived="20100305231019" -->
<!-- sent="Fri, 5 Mar 2010 16:10:10 -0700" -->
<!-- isosent="20100305231010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="09FE8C97-0573-4DD2-93E9-943935CE54E6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6990D50D-4318-4DF5-9A70-460C1F75C5A1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 18:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 3:52 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 14:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have never found BTL_ERROR to be terribly helpful.  All it is is essentially an fprintf -- it doesn't propagate errors upward or anything.  I tend to prefer show_help because then you can provide a meaningful error message that way -- and duplicate messages are not displayed (which many people have told me that they love that feature). BTL_ERROR just guarantees that the user will have to email us to figure out what's going on because the messages aren't meaningful to anyone other than an OMPI developer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand this concern either, especially the latter one about orte dependency. There already are 5 calls to orte_show_help in this btl, along with several references to orte_process_info and other orte elements. What harm is done by adding more calls to orte_show_help?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I better understand the BTL_ERROR issue, but it raises the question as to whether BTL_ERROR should be defined as an orte_show_help call. That might help reduce the flood of duplicate messages when an error occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The project where we planned to use the BTL in another context is not dead yet. We didn't had much help on progressing on that front, but we didn't give up [yet].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Jeff's comments about the BTL_ERROR. How about a middle ground here? We let the BTLs use BTL_ERROR, eventually with some modifications, and we redirect the BTL_ERROR to a more advanced macro including support for orte_show_help? This will require going over all the BTLs, but on the bright side it will give us a 100% consistency on retorting errors.
</span><br>
<p>Sounds reasonable to me - I'm happy to help do it, assuming Jeff also concurs. I assume we would then replace all the show_help calls as well? Otherwise, I'm not sure what we gain as the direct orte_show_help dependency will remain. Or are those calls too specialized to be replaced with BTL_ERROR?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
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
<li><strong>Next message:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
