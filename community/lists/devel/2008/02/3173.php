<?
$subject_val = "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 15:37:52 2008" -->
<!-- isoreceived="20080208203752" -->
<!-- sent="Fri, 8 Feb 2008 15:37:47 -0500" -->
<!-- isosent="20080208203747" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!" -->
<!-- id="0336841F-07E7-4173-8B81-707E3CE66E85_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200802081826.55262.keller_at_hlrs.de" -->
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
<strong>Date:</strong> 2008-02-08 15:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Previous message:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch I send few minutes ago will only remove the problem for Open  
<br>
MPI. However, their generic test for contiguous data types is still  
<br>
broken. Only checking for COMBINER_NAMED is clearly not enough. A  
<br>
second test checking that the size and the extent of the data types  
<br>
are equal will make the check a lot more accurate.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2008, at 12:26 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; Good, if You come to the same conclusion with regard to romio using
</span><br>
<span class="quotelev1">&gt; MPI_Type_size internally in RomIO...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So taking iscontig.c ,-]
</span><br>
<span class="quotelev1">&gt;    /* This function needs more work. It should check for contiguity
</span><br>
<span class="quotelev1">&gt;       in other cases as well.*/
</span><br>
<span class="quotelev1">&gt; and mail to the romio list or have a specialized version of
</span><br>
<span class="quotelev1">&gt; ADIOI_Datatype_iscontig for ompi ,-]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, the mpi_test_suite in that regard is sane.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 08 February 2008 18:22, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_size is supposed to return only the size of useful data,
</span><br>
<span class="quotelev2">&gt;&gt; which apparently it does (MPI_SHORT_INT is 6 bytes). What I think it
</span><br>
<span class="quotelev2">&gt;&gt; happens is that the MPI_SHORT_INT type is a predefined one, but  
</span><br>
<span class="quotelev2">&gt;&gt; it's a
</span><br>
<span class="quotelev2">&gt;&gt; really strange predefined type. It's one of the few that are not
</span><br>
<span class="quotelev2">&gt;&gt; contiguous. The problem seems to come from the fact that the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_write do a contiguous write for the predefined data types,
</span><br>
<span class="quotelev2">&gt;&gt; making the assumption that they are all contiguous.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tracked the problem down in the romio/adio/common/is_contig.c file.
</span><br>
<span class="quotelev2">&gt;&gt; For Open MPI the last #else branch is used. The first case in the
</span><br>
<span class="quotelev2">&gt;&gt; switch check for the MPI_COMBINER_NAMED (which is what an MPI is
</span><br>
<span class="quotelev2">&gt;&gt; supposed to return for predefined data types) and set the flag to 1
</span><br>
<span class="quotelev2">&gt;&gt; (which means contiguous). This is obviously wrong for MPI_SHORT_INT.
</span><br>
<span class="quotelev2">&gt;&gt; It really look like a ROMIO problem, so I guess this email should be
</span><br>
<span class="quotelev2">&gt;&gt; redirected to their mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 8, 2008, at 12:50 PM, Christoph Niethammer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested openMPI at HLRS for some time without detecting new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation but now I recognized some awful ones with MPI_Write
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lead to data los:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When creating a struct for a mixed datatype like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; short a;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int b;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the C-compiler introduce a gap of 2 bytes in the data representation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type due to the 4byte alignment of the integer on 32bit systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I now try to use MPI_File_write to write these data to a file and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SHORT_INT as mpi_datatype this leads to a data los.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I located the problem at the combined use of &quot;write&quot; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_size in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_write.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So MPI_Type_size(MPI_SHORT_INT) returns 6 bytes where the struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses 8 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in memory as there is a gap of 2 bytes. The write function in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ad_write.c now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leads to the los of the data because the gaps are not within the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calculation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the complete data size to be written into the file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This problem occures also in the other io functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I could find out the problem seems not to be present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; derived
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data types.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The question is now how to &quot;fix&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i) Either the MPI_Standard is not clear in this point and the data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SHORT_INT, MPI_DOUBLE_INT, ... should be forbidden to be used  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structs of these types,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ii) Or the implementation of the MPI_Type_size function has to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modified to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return the value of eg. true_ub which contains the correct value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iii) Or the MPI_File_write function has not to use the write
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;continues&quot; way on the data and should take care of the gaps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt; HLRS                          Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Germany                             AIM/Skype:rusraink
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3173/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Previous message:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
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
