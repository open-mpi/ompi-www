<?
$subject_val = "Re: [OMPI users] Using MPI derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 15:18:14 2012" -->
<!-- isoreceived="20120807191814" -->
<!-- sent="Tue, 7 Aug 2012 15:18:09 -0400" -->
<!-- isosent="20120807191809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI derived datatypes" -->
<!-- id="942B2F4A-F89E-4CA6-98D0-69E0D88F7AD2_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 15:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19890.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2012, at 7:36 AM, Grzegorz Maj wrote:
<br>
<p><span class="quotelev1">&gt; I would like my MPI processes to exchange some structural data. That
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
<p>No.  MPI is about atomic messages -- not streams.  So if you're going to send a struct, you send the whole struct.  You could choose to send the first int/enum and then do a second send with the rest of the struct, but that's a different pattern.
<br>
<p>Alternatively, you might want to explore using that first int/enum as the tag in your MPI_SEND/MPI_RECV.  I.e., you can use the tag to indicate the type of data to receive.
<br>
<p><span class="quotelev1">&gt; I was thinking of having separate MPI_Request for each of my
</span><br>
<span class="quotelev1">&gt; structures and calling multiple MPI_Irecv + MPI_Waitany.
</span><br>
<p>Yes, that would probably work fine (i.e., one MPI_Irecv for each tag/struct type).
<br>
<p><span class="quotelev1">&gt; But then, how
</span><br>
<span class="quotelev1">&gt; to do this for MPI_Bcast?
</span><br>
<p>You can't currently do this with MPI_Bcast -- OMPI currently only has blocking versions of the collectives.  MPI-3.0 defines non-blocking collectives (e.g., MPI_Ibcast and friends), but they still have no tags (for very complicated reasons :-) ).  You might need a different communicators to be able to post a non-blocking, receiving MPI_Ibcast for different struct types.
<br>
<p>These non-blocking collectives will be included in the upcoming Open MPI v1.7 -- probably in a few months.
<br>
<p><span class="quotelev1">&gt; My second question is about having arbitrary size structures, i.e. the
</span><br>
<span class="quotelev1">&gt; ones having 'char buf[0]' as the last field, where you allocate memory
</span><br>
<span class="quotelev1">&gt; of size 'sizeof(S) + bufLen'. Is there a way to convert such a struct
</span><br>
<span class="quotelev1">&gt; into MPI derived datatype?
</span><br>
<p>Not really.  MPI datatypes represent fixed sizes.  That being said, if your last data member is &quot;large enough&quot;, you could just send that as a blob in a 2nd send, and latency difference wouldn't matter (i.e., the blob is large enough such that the overhead of a 2nd send is dwarfed by the transmission / receipt time).
<br>
<p>Alternatively, if you're looking to send blobs of unknown sizes without associated meta data, you might want to look at MPI_MPROBE.  MPROBE was specifically introduced in MPI-3.0 for, among other reasons, receiving messages of unknown size.  See <a href="http://blogs.cisco.com/performance/mpi-forum-roundup/">http://blogs.cisco.com/performance/mpi-forum-roundup/</a> for an explanation of MPROBE.  
<br>
<p>MPROBE, too, will be included in the upcoming OMPI v1.7 release.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19890.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
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
