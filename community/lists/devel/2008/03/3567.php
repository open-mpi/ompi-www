<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 07:55:30 2008" -->
<!-- isoreceived="20080331115530" -->
<!-- sent="Mon, 31 Mar 2008 07:55:21 -0400" -->
<!-- isosent="20080331115521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="28207A57-39F1-4FA4-BF10-80434B1D82A7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14CF0_at_exil.voltaire.com" -->
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
<strong>Date:</strong> 2008-03-31 07:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3566.php">Lenny Verkhovsky: "[OMPI devel] segfault on host not found error."</a>
<li><strong>In reply to:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2008, at 8:02 AM, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - I don't think we can delete the MCA param ompi_paffinity_alone; it
</span><br>
<span class="quotelev2">&gt;&gt; exists in the v1.2 series and has historical precedent.
</span><br>
<span class="quotelev1">&gt; It will not be deleted,
</span><br>
<span class="quotelev1">&gt; It will just use the same infrastructure ( slot_list parameter and
</span><br>
<span class="quotelev1">&gt; opal_base functions ). It will be transparent for the user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; User have 3 ways to setup it
</span><br>
<span class="quotelev1">&gt; 1.	mca opal_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; 	This will set paffinity as it did before
</span><br>
<span class="quotelev1">&gt; 2.	mca opal_paffinity_slot_list &quot;slot_list&quot;
</span><br>
<span class="quotelev1">&gt; 	Used to define slots that will be used for all ranks on all
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; 3.	mca rmaps_rank_file_path rankfile
</span><br>
<span class="quotelev1">&gt; 	Assigning ranks to CPUs according to the file
</span><br>
<p><p>I don't see the MCA parameter &quot;mpi_paffinity_alone&quot; anymore:
<br>
<p>-----
<br>
[4:54] svbu-mpi:~/svn/ompi2 % ompi_info --param all all | grep  
<br>
paffinity_alone
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA opal: parameter &quot;opal_paffinity_alone&quot; (current  
<br>
value: &quot;0&quot;)
<br>
[4:54] svbu-mpi:~/svn/ompi2 %
<br>
-----
<br>
<p>My point is that I don't think we should delete this parameter; there  
<br>
is historical precedence for it (and it has been documented on the web  
<br>
page for a long, long time).  Perhaps it can now simply be a synonym  
<br>
for opal_paffinity_alone (registered in the MPI layer, not opal).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3566.php">Lenny Verkhovsky: "[OMPI devel] segfault on host not found error."</a>
<li><strong>In reply to:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
