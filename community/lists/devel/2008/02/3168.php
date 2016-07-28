<?
$subject_val = "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 12:22:25 2008" -->
<!-- isoreceived="20080208172225" -->
<!-- sent="Fri, 8 Feb 2008 12:22:19 -0500" -->
<!-- isosent="20080208172219" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!" -->
<!-- id="7E2723F0-312B-4F44-B4B4-345AB7C510F2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200802081750.44303.christoph.niethammer_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 12:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3166.php">Christoph Niethammer: "[OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Type_size is supposed to return only the size of useful data,  
<br>
which apparently it does (MPI_SHORT_INT is 6 bytes). What I think it  
<br>
happens is that the MPI_SHORT_INT type is a predefined one, but it's a  
<br>
really strange predefined type. It's one of the few that are not  
<br>
contiguous. The problem seems to come from the fact that the  
<br>
MPI_File_write do a contiguous write for the predefined data types,  
<br>
making the assumption that they are all contiguous.
<br>
<p>I tracked the problem down in the romio/adio/common/is_contig.c file.  
<br>
For Open MPI the last #else branch is used. The first case in the  
<br>
switch check for the MPI_COMBINER_NAMED (which is what an MPI is  
<br>
supposed to return for predefined data types) and set the flag to 1  
<br>
(which means contiguous). This is obviously wrong for MPI_SHORT_INT.  
<br>
It really look like a ROMIO problem, so I guess this email should be  
<br>
redirected to their mailing list.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2008, at 12:50 PM, Christoph Niethammer wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested openMPI at HLRS for some time without detecting new  
</span><br>
<span class="quotelev1">&gt; problems in the
</span><br>
<span class="quotelev1">&gt; implementation but now I recognized some awful ones with MPI_Write  
</span><br>
<span class="quotelev1">&gt; which can
</span><br>
<span class="quotelev1">&gt; lead to data los:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When creating a struct for a mixed datatype like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct {
</span><br>
<span class="quotelev1">&gt;  short a;
</span><br>
<span class="quotelev1">&gt;  int b;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the C-compiler introduce a gap of 2 bytes in the data representation  
</span><br>
<span class="quotelev1">&gt; for this
</span><br>
<span class="quotelev1">&gt; type due to the 4byte alignment of the integer on 32bit systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I now try to use MPI_File_write to write these data to a file and  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; MPI_SHORT_INT as mpi_datatype this leads to a data los.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I located the problem at the combined use of &quot;write&quot; and  
</span><br>
<span class="quotelev1">&gt; MPI_Type_size in
</span><br>
<span class="quotelev1">&gt; MPI_File_write.
</span><br>
<span class="quotelev1">&gt; So MPI_Type_size(MPI_SHORT_INT) returns 6 bytes where the struct  
</span><br>
<span class="quotelev1">&gt; uses 8 bytes
</span><br>
<span class="quotelev1">&gt; in memory as there is a gap of 2 bytes. The write function in  
</span><br>
<span class="quotelev1">&gt; ad_write.c now
</span><br>
<span class="quotelev1">&gt; leads to the los of the data because the gaps are not within the  
</span><br>
<span class="quotelev1">&gt; calculation
</span><br>
<span class="quotelev1">&gt; of the complete data size to be written into the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem occures also in the other io functions.
</span><br>
<span class="quotelev1">&gt; As far as I could find out the problem seems not to be present with  
</span><br>
<span class="quotelev1">&gt; derived
</span><br>
<span class="quotelev1">&gt; data types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is now how to &quot;fix&quot;:
</span><br>
<span class="quotelev1">&gt; i) Either the MPI_Standard is not clear in this point and the data  
</span><br>
<span class="quotelev1">&gt; types
</span><br>
<span class="quotelev1">&gt; MPI_SHORT_INT, MPI_DOUBLE_INT, ... should be forbidden to be used with
</span><br>
<span class="quotelev1">&gt; structs of these types,
</span><br>
<span class="quotelev1">&gt; ii) Or the implementation of the MPI_Type_size function has to be  
</span><br>
<span class="quotelev1">&gt; modified to
</span><br>
<span class="quotelev1">&gt; return the value of eg. true_ub which contains the correct value
</span><br>
<span class="quotelev1">&gt; iii) Or the MPI_File_write function has not to use the write  
</span><br>
<span class="quotelev1">&gt; function in
</span><br>
<span class="quotelev1">&gt; the &quot;continues&quot; way on the data and should take care of the gaps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3168/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3166.php">Christoph Niethammer: "[OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
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
