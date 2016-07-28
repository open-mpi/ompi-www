<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 08:15:06 2008" -->
<!-- isoreceived="20080331121506" -->
<!-- sent="Mon, 31 Mar 2008 15:14:59 +0300" -->
<!-- isosent="20080331121459" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14CF9_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47F0D20B.4000005_at_sun.com" -->
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
<strong>Date:</strong> 2008-03-31 08:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>Previous message:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, 
<br>
I am putting it back.
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Terry.Dontje_at_[hidden] [mailto:Terry.Dontje_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 31, 2008 2:59 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Cc: Lenny Verkhovsky; Sharon Melamed
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RMAPS rank_file component patch and
</span><br>
<span class="quotelev1">&gt; modifications for review
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 27, 2008, at 8:02 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - I don't think we can delete the MCA param ompi_paffinity_alone;
</span><br>
it
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; exists in the v1.2 series and has historical precedent.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It will not be deleted,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It will just use the same infrastructure ( slot_list parameter and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_base functions ). It will be transparent for the user.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; User have 3 ways to setup it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.	mca opal_paffinity_alone 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	This will set paffinity as it did before
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2.	mca opal_paffinity_slot_list &quot;slot_list&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Used to define slots that will be used for all ranks on all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3.	mca rmaps_rank_file_path rankfile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Assigning ranks to CPUs according to the file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see the MCA parameter &quot;mpi_paffinity_alone&quot; anymore:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; [4:54] svbu-mpi:~/svn/ompi2 % ompi_info --param all all | grep
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_alone
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA opal: parameter &quot;opal_paffinity_alone&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; [4:54] svbu-mpi:~/svn/ompi2 %
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My point is that I don't think we should delete this parameter;
</span><br>
there
<br>
<span class="quotelev2">&gt; &gt; is historical precedence for it (and it has been documented on the
</span><br>
web
<br>
<span class="quotelev2">&gt; &gt; page for a long, long time).  Perhaps it can now simply be a synonym
</span><br>
<span class="quotelev2">&gt; &gt; for opal_paffinity_alone (registered in the MPI layer, not opal).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I agree with Jeff on the above.  This would cause a lot of busy work
</span><br>
for
<br>
<span class="quotelev1">&gt; our customers and internal setups.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>Previous message:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
