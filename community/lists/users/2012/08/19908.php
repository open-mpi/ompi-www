<?
$subject_val = "Re: [OMPI users] Using MPI derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 05:00:12 2012" -->
<!-- isoreceived="20120808090012" -->
<!-- sent="Wed, 8 Aug 2012 11:00:22 +0200" -->
<!-- isosent="20120808090022" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI derived datatypes" -->
<!-- id="59295D71-6380-4ECA-889A-F0EEE6206A30_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGYuqpZgWL15YrQeY2m7yTkGnCvLA07059xBCasH_0skhprwvg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-08 05:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19890.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The example 4.17 in the MPI 2.2 standard (page 114) is addressing exactly this type of datatypes. Once you define the suitable datatype, you can use it in any type of communications, including collectives.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Aug 3, 2012, at 13:36 , Grzegorz Maj wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I would like my MPI processes to exchange some structural data. That
</span><br>
<span class="quotelev1">&gt; data is represented by plain structures containing basic datatypes. I
</span><br>
<span class="quotelev1">&gt; would like to use MPI derived datatypes, because of its portability
</span><br>
<span class="quotelev1">&gt; and good performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to be able to send/receive any of my structures in the
</span><br>
<span class="quotelev1">&gt; same part of code. In the low-level network programming it is usually
</span><br>
<span class="quotelev1">&gt; done by having each struct of this pattern:
</span><br>
<span class="quotelev1">&gt; struct S1 {
</span><br>
<span class="quotelev1">&gt;  int structType;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; And then you first read structType and know what bytes to expect next.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a good way to do it using MPI derived datatypes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was thinking of having separate MPI_Request for each of my
</span><br>
<span class="quotelev1">&gt; structures and calling multiple MPI_Irecv + MPI_Waitany. But then, how
</span><br>
<span class="quotelev1">&gt; to do this for MPI_Bcast?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My second question is about having arbitrary size structures, i.e. the
</span><br>
<span class="quotelev1">&gt; ones having 'char buf[0]' as the last field, where you allocate memory
</span><br>
<span class="quotelev1">&gt; of size 'sizeof(S) + bufLen'. Is there a way to convert such a struct
</span><br>
<span class="quotelev1">&gt; into MPI derived datatype?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19890.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
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
