<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 08:02:18 2008" -->
<!-- isoreceived="20080327120218" -->
<!-- sent="Thu, 27 Mar 2008 14:02:09 +0200" -->
<!-- isosent="20080327120209" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14CF0_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47AA816C-A212-4DDA-BD8F-CF86BC5826BA_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 08:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 27, 2008 1:38 PM
</span><br>
<span class="quotelev1">&gt; To: Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; Cc: Ralph H Castain; Sharon Melamed; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: RMAPS rank_file component patch and modifications for
</span><br>
review
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few more comments on top of what Tim / Ralph said:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - opal_paffinity MCA params should be defined and registered in the
</span><br>
<span class="quotelev1">&gt; opal paffinity base (in the base open function so that ompi_info can
</span><br>
<span class="quotelev1">&gt; still see them), not opal/runtime/opal_params.c.
</span><br>
OK.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I don't have a problem with setting the paffinity slot list from
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init, but we should probably make the corresponding MCA
</span><br>
<span class="quotelev1">&gt; parameter be an &quot;mpi_*&quot; name; because this is functionality that is
</span><br>
<span class="quotelev1">&gt; being exported through the MPI layer.  Additionally, the name
</span><br>
<span class="quotelev1">&gt; &quot;mpi_&lt;whatever&gt;&quot; will make more sense to users; they don't know
</span><br>
<span class="quotelev1">&gt; anything about opal/orte -- &quot;mpi_&lt;whatever&gt;&quot; resonates with running
</span><br>
<span class="quotelev1">&gt; their MPI job.
</span><br>
I think in opal_paffinity_base it makes more sense and ompi_mpi_init
<br>
will look cleaner.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I don't think we can delete the MCA param ompi_paffinity_alone; it
</span><br>
<span class="quotelev1">&gt; exists in the v1.2 series and has historical precedent.
</span><br>
It will not be deleted,
<br>
It will just use the same infrastructure ( slot_list parameter and
<br>
opal_base functions ). It will be transparent for the user.
<br>
<p>User have 3 ways to setup it
<br>
1.	mca opal_paffinity_alone 1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This will set paffinity as it did before
<br>
2.	mca opal_paffinity_slot_list &quot;slot_list&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Used to define slots that will be used for all ranks on all
<br>
nodes.
<br>
3.	mca rmaps_rank_file_path rankfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assigning ranks to CPUs according to the file
<br>
<p>Rank_file_path can be used with opal_paffinity_slot_list
<br>
In this case all undefined by rankfile ranks will be assigned by
<br>
opal_paffinity_slot_list mca parameter.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Note that symbols that are static don't have to abide by the prefix
</span><br>
<span class="quotelev1">&gt; rule.  I'm not saying you need to change anything -- you don't -- I
</span><br>
<span class="quotelev1">&gt; just notice that you made some symbols both static and use the prefix
</span><br>
<span class="quotelev1">&gt; rule.  That's fine, but if you want to use shorter symbol names for
</span><br>
<span class="quotelev1">&gt; static symbols, that's fine too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2008, at 6:01 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, all
</span><br>
<span class="quotelev2">&gt; &gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev2">&gt; &gt;       mpi_debug
</span><br>
<span class="quotelev2">&gt; &gt;       opal_debug
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev2">&gt; &gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev2">&gt; &gt; 4.    opal paffinity functions moved to new file opal/mca/paffinity/
</span><br>
<span class="quotelev2">&gt; &gt; base/paffinity_base_service.c
</span><br>
<span class="quotelev2">&gt; &gt; 5.    rank_file component files were renamed according to prefix
</span><br>
<span class="quotelev2">&gt; &gt; policy
</span><br>
<span class="quotelev2">&gt; &gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev2">&gt; &gt; 7.    few bug fixes that were brought during previous discussions.
</span><br>
<span class="quotelev2">&gt; &gt; 8.    If user defines opal_paffinity_alone and rmaps_rank_file_path
</span><br>
<span class="quotelev2">&gt; &gt; or opal_paffinity_slot_list,
</span><br>
<span class="quotelev2">&gt; &gt; then he gets a Warning that only opal_paffinity_alone will be used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;rank_file.patch&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
