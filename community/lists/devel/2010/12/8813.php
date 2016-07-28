<?
$subject_val = "Re: [OMPI devel] Datatype question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 14:54:48 2010" -->
<!-- isoreceived="20101221195448" -->
<!-- sent="Tue, 21 Dec 2010 14:54:42 -0500" -->
<!-- isosent="20101221195442" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype question" -->
<!-- id="75C6A527-B4A1-4A92-8966-02FE2BADFBAA_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="317FA5E1-83D9-49B3-8A8B-1436D9ECF34F_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Datatype question<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 14:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Previous message:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a big patch pending, that will map all ompi types, and therefore all OP directly into OPAL ddt. The OMPI DDT part is completed, but I have some troubles with the ops. At this point I'm looking into the .m4 files for some help with the mapping between Fortran types directly into the POSIX types (int8_t and friends) instead of C types.
<br>
<p>I tried a different approach, where I add things in the ompi_datatype_t. Unfortunately, this will break all backward compatibility because of the use of the ompi_predefined_datatype_t fixed size structure. The problem is that adding things into the ompi_datatype_t, make this structure larger than 512 bytes, and therefore force us to modify the size of the ompi_predefined_datatype_t.
<br>
<p>Anyway, back to your question. The MPI and OPAL datatypes uses the same indexes, for all the OPAL predefined types. Several MPI types map to the same underlying OPAL type: such as MPI_INT, MPI_INTEGER, MPI_INT32_T. All MPI types not supported at OPAL level, will get their indexes contiguously after the OPAL_DATATYPE_MAX_PREDEFINED upper bound (up to OMPI_DATATYPE_MPI_MAX_PREDEFINED). Moreover, the OPAL layer has been modified to support up to OPAL_DATATYPE_MAX_SUPPORTED datatypes, and this value should be modified based on the upper level requirements (today it is set to 46 as this is the total number of MPI supported datatypes, including the Fortran ones). bdt_used is currently defined as an uint32_t, so obviously there is not enough place to hold all possible MPI datatypes.
<br>
<p>Solution 1: We can change the bdt_used to uint64_t. This requires some work, and I will prefer to have some time to see exactly all the implications.
<br>
<p>Solution 2: Quick and dirty, but not the fastest one. Instead of walking the bdt_used you can walk the btypes array. If the count is not zero, then the MPI datatype corresponding to the index in the array is used.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 21, 2010, at 12:02 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to follow up on James Dinan's one-sided datatype errors e-mail and running into some datatype issues from when the datatype engine was moved to OPAL (sigh).  Accumulate needs to get at the underlying datatypes for a user-created dataype.  Before the ddt move, one just walked bdt_used and found the underlying type.  Now it appears that bdt_used refers to the opal types, not the ompi types.  And since there's not a one-to-one mapping between the two, I'm at a loss as to how one could find a MPI pre-defined datatype from the user-defined datatype.  Can someone point me in the right direction?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Previous message:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
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
