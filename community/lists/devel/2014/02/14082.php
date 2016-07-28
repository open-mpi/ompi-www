<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 19:05:31 2014" -->
<!-- isoreceived="20140211000531" -->
<!-- sent="Mon, 10 Feb 2014 17:05:30 -0700" -->
<!-- isosent="20140211000530" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="20140211000530.GT97640_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0CC1531D-FAA1-4F29-8F18-52C947CE5EB1_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 19:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 11, 2014 at 12:29:57AM +0100, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While this sounds like an optimization for highly specific application behavior, it is justifiable under some usage scenarios. I have several issues with the patch. Here are the minor ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. It does modifications that are nor necessary to the patch itself (as an example removal of the static keyword from the mca_pml_ob1_comm_proc_t class instance).
</span><br>
<p>Yeah. Not really part of the RFC. I should have removed it from the
<br>
patch. That static modifier appears to be meaningless in that context.
<br>
<p><span class="quotelev1">&gt; 2. Moving add_fragment_to_unexpected change the meaning of the code.
</span><br>
<p>The location look wrong to me. A peruse receive event may be generated
<br>
multiple times the way it was before. Doesn't matter anymore though as
<br>
peruse is on its way out.
<br>
<p><span class="quotelev1">&gt; 3. If this change get pushed in to the trunk, the only reason for the existence of last_probed disappear. Thus, the variable should disappear as well.
</span><br>
<p>I agree. That variable should go away. I will remove it from my branch now.
<br>
<p><span class="quotelev1">&gt; 4. The last part of the patch is not related to this topic and should be pushed separately.
</span><br>
<p>Bah. That shouldn't have been there either. That is a separate issue I
<br>
can fix in another commit.
<br>
<p><span class="quotelev1">&gt; Now the most major one. With this change you alter the most performance critical piece of code, by adding a non negligible number of potential cache misses (looking for the number of elements, adding/removing an element from a queue). This deserve a careful evaluation and consideration, not only for the less likely usage pattern you describe but for the more mainstream uses.
</span><br>
<p>I agree that this should be reviewed carefully. A majority of the
<br>
changes are in the unexpected message path and not in the critical path
<br>
but due to the nature of icache misses it may still have an impact. I
<br>
verified there was no impact on one system using vader and a ping-pong
<br>
benchmark. I still need to verify there is no impact to message rate
<br>
both on and off node as well as verify there is no impact on other
<br>
architectures (AMD for example is very sensitive to changes outside the
<br>
critical path).
<br>
<p>Thanks for your comments George!
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14082/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14083.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Previous message:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
