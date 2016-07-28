<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 17:52:34 2010" -->
<!-- isoreceived="20100305225234" -->
<!-- sent="Fri, 5 Mar 2010 17:52:17 -0500" -->
<!-- isosent="20100305225217" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="6990D50D-4318-4DF5-9A70-460C1F75C5A1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="91479305-EB12-4E19-B9F0-18F88D56DAB3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-03-05 17:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 14:59 , Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I have never found BTL_ERROR to be terribly helpful.  All it is is essentially an fprintf -- it doesn't propagate errors upward or anything.  I tend to prefer show_help because then you can provide a meaningful error message that way -- and duplicate messages are not displayed (which many people have told me that they love that feature). BTL_ERROR just guarantees that the user will have to email us to figure out what's going on because the messages aren't meaningful to anyone other than an OMPI developer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand this concern either, especially the latter one about orte dependency. There already are 5 calls to orte_show_help in this btl, along with several references to orte_process_info and other orte elements. What harm is done by adding more calls to orte_show_help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I better understand the BTL_ERROR issue, but it raises the question as to whether BTL_ERROR should be defined as an orte_show_help call. That might help reduce the flood of duplicate messages when an error occurs.
</span><br>
<p>The project where we planned to use the BTL in another context is not dead yet. We didn't had much help on progressing on that front, but we didn't give up [yet].
<br>
<p>I agree with Jeff's comments about the BTL_ERROR. How about a middle ground here? We let the BTLs use BTL_ERROR, eventually with some modifications, and we redirect the BTL_ERROR to a more advanced macro including support for orte_show_help? This will require going over all the BTLs, but on the bright side it will give us a 100% consistency on retorting errors.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7554.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
