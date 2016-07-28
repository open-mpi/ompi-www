<?
$subject_val = "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 12:35:32 2008" -->
<!-- isoreceived="20080208173532" -->
<!-- sent="Fri, 8 Feb 2008 18:26:54 +0100" -->
<!-- isosent="20080208172654" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!" -->
<!-- id="200802081826.55262.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7E2723F0-312B-4F44-B4B4-345AB7C510F2_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 12:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3173.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
Good, if You come to the same conclusion with regard to romio using 
<br>
MPI_Type_size internally in RomIO...
<br>
<p><p>So taking iscontig.c ,-]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* This function needs more work. It should check for contiguity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in other cases as well.*/
<br>
and mail to the romio list or have a specialized version of 
<br>
ADIOI_Datatype_iscontig for ompi ,-]
<br>
<p>Either way, the mpi_test_suite in that regard is sane.
<br>
<p><p>Thanks,
<br>
Rainer
<br>
<p><p>On Friday 08 February 2008 18:22, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; MPI_Type_size is supposed to return only the size of useful data,
</span><br>
<span class="quotelev1">&gt; which apparently it does (MPI_SHORT_INT is 6 bytes). What I think it
</span><br>
<span class="quotelev1">&gt; happens is that the MPI_SHORT_INT type is a predefined one, but it's a
</span><br>
<span class="quotelev1">&gt; really strange predefined type. It's one of the few that are not
</span><br>
<span class="quotelev1">&gt; contiguous. The problem seems to come from the fact that the
</span><br>
<span class="quotelev1">&gt; MPI_File_write do a contiguous write for the predefined data types,
</span><br>
<span class="quotelev1">&gt; making the assumption that they are all contiguous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tracked the problem down in the romio/adio/common/is_contig.c file.
</span><br>
<span class="quotelev1">&gt; For Open MPI the last #else branch is used. The first case in the
</span><br>
<span class="quotelev1">&gt; switch check for the MPI_COMBINER_NAMED (which is what an MPI is
</span><br>
<span class="quotelev1">&gt; supposed to return for predefined data types) and set the flag to 1
</span><br>
<span class="quotelev1">&gt; (which means contiguous). This is obviously wrong for MPI_SHORT_INT.
</span><br>
<span class="quotelev1">&gt; It really look like a ROMIO problem, so I guess this email should be
</span><br>
<span class="quotelev1">&gt; redirected to their mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2008, at 12:50 PM, Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested openMPI at HLRS for some time without detecting new
</span><br>
<span class="quotelev2">&gt; &gt; problems in the
</span><br>
<span class="quotelev2">&gt; &gt; implementation but now I recognized some awful ones with MPI_Write
</span><br>
<span class="quotelev2">&gt; &gt; which can
</span><br>
<span class="quotelev2">&gt; &gt; lead to data los:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When creating a struct for a mixed datatype like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; struct {
</span><br>
<span class="quotelev2">&gt; &gt;  short a;
</span><br>
<span class="quotelev2">&gt; &gt;  int b;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the C-compiler introduce a gap of 2 bytes in the data representation
</span><br>
<span class="quotelev2">&gt; &gt; for this
</span><br>
<span class="quotelev2">&gt; &gt; type due to the 4byte alignment of the integer on 32bit systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I now try to use MPI_File_write to write these data to a file and
</span><br>
<span class="quotelev2">&gt; &gt; use
</span><br>
<span class="quotelev2">&gt; &gt; MPI_SHORT_INT as mpi_datatype this leads to a data los.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I located the problem at the combined use of &quot;write&quot; and
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Type_size in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_write.
</span><br>
<span class="quotelev2">&gt; &gt; So MPI_Type_size(MPI_SHORT_INT) returns 6 bytes where the struct
</span><br>
<span class="quotelev2">&gt; &gt; uses 8 bytes
</span><br>
<span class="quotelev2">&gt; &gt; in memory as there is a gap of 2 bytes. The write function in
</span><br>
<span class="quotelev2">&gt; &gt; ad_write.c now
</span><br>
<span class="quotelev2">&gt; &gt; leads to the los of the data because the gaps are not within the
</span><br>
<span class="quotelev2">&gt; &gt; calculation
</span><br>
<span class="quotelev2">&gt; &gt; of the complete data size to be written into the file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This problem occures also in the other io functions.
</span><br>
<span class="quotelev2">&gt; &gt; As far as I could find out the problem seems not to be present with
</span><br>
<span class="quotelev2">&gt; &gt; derived
</span><br>
<span class="quotelev2">&gt; &gt; data types.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The question is now how to &quot;fix&quot;:
</span><br>
<span class="quotelev2">&gt; &gt; i) Either the MPI_Standard is not clear in this point and the data
</span><br>
<span class="quotelev2">&gt; &gt; types
</span><br>
<span class="quotelev2">&gt; &gt; MPI_SHORT_INT, MPI_DOUBLE_INT, ... should be forbidden to be used with
</span><br>
<span class="quotelev2">&gt; &gt; structs of these types,
</span><br>
<span class="quotelev2">&gt; &gt; ii) Or the implementation of the MPI_Type_size function has to be
</span><br>
<span class="quotelev2">&gt; &gt; modified to
</span><br>
<span class="quotelev2">&gt; &gt; return the value of eg. true_ub which contains the correct value
</span><br>
<span class="quotelev2">&gt; &gt; iii) Or the MPI_File_write function has not to use the write
</span><br>
<span class="quotelev2">&gt; &gt; function in
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;continues&quot; way on the data and should take care of the gaps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Christoph Niethammer
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3172.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3173.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
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
