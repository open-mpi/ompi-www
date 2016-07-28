<?
$subject_val = "[OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 09:59:28 2009" -->
<!-- isoreceived="20090723135928" -->
<!-- sent="Thu, 23 Jul 2009 09:59:22 -0400" -->
<!-- isosent="20090723135922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: meaning of &amp;quot;btl_XXX_eager_limit&amp;quot;" -->
<!-- id="8576B80D-B201-43F5-8F55-95E0AB1FD394_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 09:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6511.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Reply:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: a) Clarify the actual max MPI payload size for eager messages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i.e., the exact meaning of btl_XXX_eager_limit), and b) allow
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;network administrators to shape network traffic by publishing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actual BTL max wire fragment sizes (i.e., MPI max payload size +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max PML header size + max BTL header size).
<br>
<p>WHY: Currently BTL eager_limit values actually have the PML header
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subtracted from them, meaning that the eager_limit is not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actually the largest MPI message payload size.  Terry and Jeff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at least, find this misleading. :-)  Additionally, BTLs may add
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;their own (variable-sized) headers beyond the eager_limit size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so it's not possible for a network administrator to shape network
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;traffic because they don't (can't) know what a BTL's max wire
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fragment size.
<br>
<p>WHERE: ompi/pml/{ob1,csum,dr}, and likely all BTLs
<br>
<p>TIMEOUT: COB, Friday, 31 July 2009
<br>
<p>DESCRIPTION:
<br>
<p>In trying to fix the checks for eager_limit in the OB1 PML (per
<br>
discussion on the OMPI teleconf this past Tuesday), I've come across a
<br>
couple gaps.  This RFC is to get others (mainly Brian Barrett's and
<br>
George Bosilca's) opinions on exactly what should be done for issue #1
<br>
and the ok for implementing issue #2.
<br>
<p>1. The btl_XXX_eager_limit values are the upper payload value from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;each payload, but this must include the PML header.  Hence, the max
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI data payload size is (btl_XXX_eager_limit - PML header size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;but this even depends on which flavor of PML send you are using.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Terry and Jeff find this misleading.  Specifically, if a user sets
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the eager_limit to 1024 bytes and expects their 256 MPI_INT's to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fit in an eager message, they're wrong.  Additionally, network
<br>
&nbsp;&nbsp;&nbsp;&nbsp;administrators who try to adjust the eager_limit to fit the max MTU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size of their networks are unpleasantly surprised because the BTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;may actually send (btl_XXX_eager_limit + btl_XXX_header_size) bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at a time.  Even worse, the value of btl_XXX_header_size is not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;published anywhere, so a network administrator cannot know if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;they're actually going over the MTU size or not.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Note that we only looked at eager_limit -- similar issues
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;likely also exist with btl_XXX_max_send_size, and possibly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_XXX_rdma_pipeline_send_length...?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_XXX_rdma_pipeline_frag_size (i.e., the RDMA size) should be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ok -- I *think* it's an absolute payload size already.  If you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;don't remember what these names mean, look at the pretty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;picture here:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;There are two solutions I can think of.  Which should we do?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;a. Pass the (max?) PML header size down into the BTL during
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;initialization such that the the btl_XXX_eager_limit can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;represent the max MPI data payload size (i.e., the BTL can size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;its buffers to accommodate its desired max eager payload size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;its header size, and the PML header size).  Thus, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eager_limit can truly be the MPI data payload size -- and easy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to explain to users.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;b. Stay with the current btl_XXX_eager_limit implementation (which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI has had for a long, long time) and add the code to check
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for btl_eager_limit less than the pml header size (per this past
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tuesday's discussion).  This is the minimal distance change.
<br>
<p>2. OMPI currently does not publish enough information for a user to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set eager_limit to be able to do BTL traffic shaping.  That is, one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;really needs to know the (max) BTL header length and the (max) PML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;header length values to be able to calculate the correct
<br>
&nbsp;&nbsp;&nbsp;&nbsp;eager_limit force a specific (max) BTL wire fragment size.  Our
<br>
&nbsp;&nbsp;&nbsp;&nbsp;proposed solution is to have ompi_info print out the (max) PML and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BTL header sizes.  Regardless of whether 1a) or 1b) is chosen, with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;these two pieces of information, a determined network administrator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;could calculate the max wire fragment size used by OMPI, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;therefore be able to do at least some of traffic shaping.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6511.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Reply:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
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
