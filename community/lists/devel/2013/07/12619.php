<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 16:54:52 2013" -->
<!-- isoreceived="20130716205452" -->
<!-- sent="Tue, 16 Jul 2013 14:54:48 -0600" -->
<!-- isosent="20130716205448" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="20130716205448.GI18047_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6D2F3374-5115-4577-9491-7ABA45F9A0FC_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 16:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12618.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 16, 2013 at 10:22:33PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read your code and it's definitively looking good. I have however few minor issues with your patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. MPI_Aint is unsigned as it must represent the difference between two memory arbitrary locations. In your MPI_Type_get_[true_]extent_x you go through size_t possibly reducing it's extent. I would suggest you used ssize_t instead.
</span><br>
<p>Ah, yes. That is correct will fix that and update my repository now.
<br>
<p><span class="quotelev1">&gt; 2. In several other locations size_t is used as a conversion base. In some of these location there is even a comment talking about ssize_t ?
</span><br>
<p>Will fix this as well.
<br>
<p><span class="quotelev1">&gt; 3. We had a policy that we only export one single MPI level function per file in the mpi directory. You changed this as some of the files exports now two function (the original function together with the _x version).
</span><br>
<p>I was trying to avoid having too much duplicate code. If including both functions in the same file is not ok I will move the _x functions to their own .c files.
<br>
<p><span class="quotelev1">&gt; 4. In the OPAL datatype stuff sometimes you use size_t and sometimes ssize_t for the same type of logic (set and get count as an example). Why?
</span><br>
<p>I replaced uint32_t with size_t and int32_t with ssize_t to be consistent with the original code.
<br>
<p><span class="quotelev1">&gt; 5. You change the comments in the opal_datatype.h with &quot;question marks&quot;? the cache boundary must be known, it can't be somewhere between x-y bytes ago ?
</span><br>
<p>The problem is size_t can be either 4 or 8 bytes so there are two possible places for the cache boundary. If you prefer I can change those to use int64_t and uint64_t instead so we will know where the cache boundaries are. (or leave them as 32-bit if that is the correct answer).
<br>
<p><span class="quotelev1">&gt; 6. I'm not sure the change of nbElems from uint32_t to size_t (in opal/datatype/opal_datatype.h) is doing what you expect?
</span><br>
<p>Admittedly, I changed the size of nbElems early on. I left it as 64-bit (32-bit on 32-bit platforms) to allow the creation of datatypes with more than 2^32 elements. Not sure this senario will ever occur though.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, I have a question to you fellow MPI Forum attendees. I just can't remember why the MPI forum felt there was a need for the MPI_Type_get[_true]_extent_x? MPI_Count can't be bigger than MPI_Aint, so I don't see what is the benefit of extending the MPI_Type_get_true_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) and MPI_Type_get_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) with the corresponding _X versions?
</span><br>
<p>It was before my involement with the forum. Jeff knows better why this was done.
<br>
<p>Thanks for taking a look. I will let you know when I have fixed the ssize_t/size_t issue.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12618.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12615.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
