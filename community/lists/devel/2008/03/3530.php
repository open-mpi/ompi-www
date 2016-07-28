<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 08:09:30 2008" -->
<!-- isoreceived="20080326120930" -->
<!-- sent="Wed, 26 Mar 2008 08:09:29 -0400" -->
<!-- isosent="20080326120929" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review" -->
<!-- id="47EA3CF9.8090005_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14CE7_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 08:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3531.php">Ralph H Castain: "[OMPI devel] Debug output"</a>
<li><strong>Previous message:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lenny,
<br>
<p>This looks good. But I have a couple of suggestions (which others may 
<br>
disagree with):
<br>
<p>1. You register an opal mca parameter, but look it up in ompi, then call 
<br>
a opal function with the result. What if you had a function 
<br>
opal_paffinity_base_set_slots(long rank) (or some other name, I don't 
<br>
care) which looked up the mca parameter and then setup the slots as you 
<br>
are doing if it is fount. This would make things a bit cleaner IMHO.
<br>
<p>2. the functions in the paffinety base should be prefixed with 
<br>
'opal_paffinity_base_'
<br>
<p>3. Why was the ompi_debug_flag added? It is not used anywhere.
<br>
<p>4. You probably do not need to add the opal debug flag. There is already 
<br>
a 'paffinity_base_verbose' flag which should suit your purposes fine. So 
<br>
you should just be able to replace all of the conditional output 
<br>
statements in paffinity with something like
<br>
opal_output_verbose(10, opal_paffinity_base_output, ...),
<br>
where 10 is the verbosity level number.
<br>
<p>Tim
<br>
<p><p>Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       mpi_debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       opal_debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.    opal paffinity functions moved to new file 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/base/paffinity_base_service.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5.    rank_file component files were renamed according to prefix policy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7.    few bug fixes that were brought during previous discussions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8.    If user defines opal_paffinity_alone and rmaps_rank_file_path or 
</span><br>
<span class="quotelev1">&gt; opal_paffinity_slot_list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then he gets a Warning that only opal_paffinity_alone will be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3531.php">Ralph H Castain: "[OMPI devel] Debug output"</a>
<li><strong>Previous message:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
