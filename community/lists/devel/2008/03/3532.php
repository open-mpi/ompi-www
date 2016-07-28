<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 08:50:15 2008" -->
<!-- isoreceived="20080326125015" -->
<!-- sent="Wed, 26 Mar 2008 06:50:02 -0600" -->
<!-- isosent="20080326125002" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="C40FA29A.CD14%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47EA3CF9.8090005_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RMAPS rank_file component patch and modifications for review<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 08:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3533.php">Ralph H Castain: "Re: [OMPI devel] Debug output"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Ralph H Castain: "[OMPI devel] Debug output"</a>
<li><strong>In reply to:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would tend to echo Tim's suggestions. I note that you do lookup that opal
<br>
mca param in orte as well. I know you sent me a note about that off-list - I
<br>
apologize for not getting to it yet, but was swamped yesterday.
<br>
<p>I think the solution suggested in #1 below is the right approach. Looking up
<br>
opal params in orte or ompi is probably not a good idea. We have had
<br>
problems in the past where params were looked up in multiple places as
<br>
people -do- sometimes change the names (ahem...).
<br>
<p>Also, I would suggest using the macro version of verbose OPAL_OUTPUT_VERBOSE
<br>
so that it compiles out for non-debug builds - up to you. Many of us use it
<br>
as we don't need the output from optimized builds.
<br>
<p>Other than that, I think this looks fine. I do truly appreciate the cleanup
<br>
of ompi_mpi_init.
<br>
<p>Ralph
<br>
<p><p><p>On 3/26/08 6:09 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lenny,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks good. But I have a couple of suggestions (which others may
</span><br>
<span class="quotelev1">&gt; disagree with):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. You register an opal mca parameter, but look it up in ompi, then call
</span><br>
<span class="quotelev1">&gt; a opal function with the result. What if you had a function
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_set_slots(long rank) (or some other name, I don't
</span><br>
<span class="quotelev1">&gt; care) which looked up the mca parameter and then setup the slots as you
</span><br>
<span class="quotelev1">&gt; are doing if it is fount. This would make things a bit cleaner IMHO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. the functions in the paffinety base should be prefixed with
</span><br>
<span class="quotelev1">&gt; 'opal_paffinity_base_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Why was the ompi_debug_flag added? It is not used anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. You probably do not need to add the opal debug flag. There is already
</span><br>
<span class="quotelev1">&gt; a 'paffinity_base_verbose' flag which should suit your purposes fine. So
</span><br>
<span class="quotelev1">&gt; you should just be able to replace all of the conditional output
</span><br>
<span class="quotelev1">&gt; statements in paffinity with something like
</span><br>
<span class="quotelev1">&gt; opal_output_verbose(10, opal_paffinity_base_output, ...),
</span><br>
<span class="quotelev1">&gt; where 10 is the verbosity level number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       mpi_debug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       opal_debug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4.    opal paffinity functions moved to new file
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/base/paffinity_base_service.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5.    rank_file component files were renamed according to prefix policy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 7.    few bug fixes that were brought during previous discussions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 8.    If user defines opal_paffinity_alone and rmaps_rank_file_path or
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity_slot_list,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then he gets a Warning that only opal_paffinity_alone will be used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3533.php">Ralph H Castain: "Re: [OMPI devel] Debug output"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Ralph H Castain: "[OMPI devel] Debug output"</a>
<li><strong>In reply to:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
