<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 19:43:41 2014" -->
<!-- isoreceived="20140211004341" -->
<!-- sent="Tue, 11 Feb 2014 01:43:37 +0100" -->
<!-- isosent="20140211004337" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="D7D477DB-8C3D-4409-A47E-4A4D5889ADAB_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140211000530.GT97640_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 19:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2014, at 01:05 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 11, 2014 at 12:29:57AM +0100, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While this sounds like an optimization for highly specific application behavior, it is justifiable under some usage scenarios. I have several issues with the patch. Here are the minor ones:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. It does modifications that are nor necessary to the patch itself (as an example removal of the static keyword from the mca_pml_ob1_comm_proc_t class instance).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah. Not really part of the RFC. I should have removed it from the
</span><br>
<span class="quotelev1">&gt; patch. That static modifier appears to be meaningless in that context.
</span><br>
<p>The class is only usable in the context of a single .c file. As a code protection it makes perfect sense to me.
<br>
<p><span class="quotelev2">&gt;&gt; 2. Moving add_fragment_to_unexpected change the meaning of the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The location look wrong to me. A peruse receive event may be generated
</span><br>
<span class="quotelev1">&gt; multiple times the way it was before. Doesn't matter anymore though as
</span><br>
<span class="quotelev1">&gt; peruse is on its way out.
</span><br>
<p>It&#146;s not yet, and I did not notice an RFC about. The event I was referring to is only generated when the message is first noticed. In the particular instance affected by your patch it has been delayed until the communicator is created locally, but it still have to be generated once. 
<br>
<p><span class="quotelev2">&gt;&gt; 3. If this change get pushed in to the trunk, the only reason for the existence of last_probed disappear. Thus, the variable should disappear as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree. That variable should go away. I will remove it from my branch now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. The last part of the patch is not related to this topic and should be pushed separately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bah. That shouldn't have been there either. That is a separate issue I
</span><br>
<span class="quotelev1">&gt; can fix in another commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now the most major one. With this change you alter the most performance critical piece of code, by adding a non negligible number of potential cache misses (looking for the number of elements, adding/removing an element from a queue). This deserve a careful evaluation and consideration, not only for the less likely usage pattern you describe but for the more mainstream uses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that this should be reviewed carefully. A majority of the
</span><br>
<span class="quotelev1">&gt; changes are in the unexpected message path and not in the critical path
</span><br>
<span class="quotelev1">&gt; but due to the nature of cache misses it may still have an impact.
</span><br>
<p>The size check and the removal from the list is still in the critical path. At some point we were down to few hundreds of nano-sec, enough to get bugged by one extra memory reference.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; I verified there was no impact on one system using vader and a ping-pong
</span><br>
<span class="quotelev1">&gt; benchmark. I still need to verify there is no impact to message rate
</span><br>
<span class="quotelev1">&gt; both on and off node as well as verify there is no impact on other
</span><br>
<span class="quotelev1">&gt; architectures (AMD for example is very sensitive to changes outside the
</span><br>
<span class="quotelev1">&gt; critical path).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your comments George!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="14088.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
