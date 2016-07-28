<?
$subject_val = "Re: [OMPI devel] About Marshalling and Umarshalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 10:34:56 2012" -->
<!-- isoreceived="20121105153456" -->
<!-- sent="05 Nov 2012 15:34:52 +0000" -->
<!-- isosent="20121105153452" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] About Marshalling and Umarshalling" -->
<!-- id="Prayer.1.3.5.1211051534520.16625_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0BD4FE2F-A533-4ADE-9506-CBF5A9322345_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] About Marshalling and Umarshalling<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 10:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5 2012, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We adhere to the MPI standard, so we expect the user in such an instance 
</span><br>
<span class="quotelev1">&gt; to define a datatype that reflects the structure they are trying to send. 
</span><br>
<span class="quotelev1">&gt; We will then do the voodoo to correctly send that data in a heterogeneous 
</span><br>
<span class="quotelev1">&gt; environment, and pass the data back (in the defined datatype) to the user 
</span><br>
<span class="quotelev1">&gt; on the remote end. They can then put the various items back into their 
</span><br>
<span class="quotelev1">&gt; structure.
</span><br>
<p>There is actually a serious issue, but it is about much more advanced
<br>
aspects than the OP was asking about, and the MPI standard does not
<br>
address the general problem, as far as I know.  I do NOT think that
<br>
Open MPI would be wise to add it as an extension, of course :-)
<br>
<p>Specifically, when you have a structure that is not simple, logically
<br>
process-independent, data, you have to use explicit marshalling and
<br>
unmarshalling (which are the terms Python uses, but there have been a
<br>
zillion others over the years, including export and import).  That
<br>
can be as simple as a structure (not a C/C++/Fortran one) with internal
<br>
pointers, but can include cases where some objects are 'active' and
<br>
can be modified only by calling an auxiliary procedure.
<br>
<p>If the OP needs to do that, that's what he needs to do, and should
<br>
transfer the marshalled form using MPI_BYTE or MPI_PACKED.  But,
<br>
whether or not that is the case, he does need to look at MPI's
<br>
facilities in more detail.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11752.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
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
