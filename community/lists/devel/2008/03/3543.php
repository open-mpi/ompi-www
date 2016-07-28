<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 07:37:42 2008" -->
<!-- isoreceived="20080327113742" -->
<!-- sent="Thu, 27 Mar 2008 07:37:33 -0400" -->
<!-- isosent="20080327113733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="47AA816C-A212-4DDA-BD8F-CF86BC5826BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RMAPS rank_file component patch and modifications for review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 07:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3542.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>In reply to:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few more comments on top of what Tim / Ralph said:
<br>
<p>- opal_paffinity MCA params should be defined and registered in the  
<br>
opal paffinity base (in the base open function so that ompi_info can  
<br>
still see them), not opal/runtime/opal_params.c.
<br>
<p>- I don't have a problem with setting the paffinity slot list from  
<br>
ompi_mpi_init, but we should probably make the corresponding MCA  
<br>
parameter be an &quot;mpi_*&quot; name; because this is functionality that is  
<br>
being exported through the MPI layer.  Additionally, the name  
<br>
&quot;mpi_&lt;whatever&gt;&quot; will make more sense to users; they don't know  
<br>
anything about opal/orte -- &quot;mpi_&lt;whatever&gt;&quot; resonates with running  
<br>
their MPI job.
<br>
<p>- I don't think we can delete the MCA param ompi_paffinity_alone; it  
<br>
exists in the v1.2 series and has historical precedent.
<br>
<p>- Note that symbols that are static don't have to abide by the prefix  
<br>
rule.  I'm not saying you need to change anything -- you don't -- I  
<br>
just notice that you made some symbols both static and use the prefix  
<br>
rule.  That's fine, but if you want to use shorter symbol names for  
<br>
static symbols, that's fine too.
<br>
<p><p><p>On Mar 26, 2008, at 6:01 AM, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, all
</span><br>
<span class="quotelev1">&gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev1">&gt;       mpi_debug
</span><br>
<span class="quotelev1">&gt;       opal_debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev1">&gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev1">&gt; 4.    opal paffinity functions moved to new file opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; base/paffinity_base_service.c
</span><br>
<span class="quotelev1">&gt; 5.    rank_file component files were renamed according to prefix  
</span><br>
<span class="quotelev1">&gt; policy
</span><br>
<span class="quotelev1">&gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev1">&gt; 7.    few bug fixes that were brought during previous discussions.
</span><br>
<span class="quotelev1">&gt; 8.    If user defines opal_paffinity_alone and rmaps_rank_file_path  
</span><br>
<span class="quotelev1">&gt; or opal_paffinity_slot_list,
</span><br>
<span class="quotelev1">&gt; then he gets a Warning that only opal_paffinity_alone will be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;rank_file.patch&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3542.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>In reply to:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
