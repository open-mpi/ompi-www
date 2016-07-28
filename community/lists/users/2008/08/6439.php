<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 14:52:28 2008" -->
<!-- isoreceived="20080827185228" -->
<!-- sent="Wed, 27 Aug 2008 14:52:17 -0400" -->
<!-- isosent="20080827185217" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="OF10DF4469.1F88ECDE-ON852574B2.0062B767-852574B2.0067AA32_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A52B3DC5-459D-409A-BAB8-36FB7EB7710F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 14:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Previous message:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/27/2008 11:55:58 AM:
<br>
<p>&lt;&lt; snip &gt;&gt;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However from an application point of view I see an odd result here.
</span><br>
<span class="quotelev1">&gt; On the sender side I can use a buffered send to &quot;queue&quot; messages for
</span><br>
<span class="quotelev1">&gt; delivery and decide how many messages my buffer should contain
</span><br>
<span class="quotelev1">&gt; before the MPI_Bsend blocks if it's running out of space.
</span><br>
The BSEND should not be assumed to block if the attached buffer is full.
<br>
It may raise an error which is fatal by default. The user is expected
<br>
to make sure he does not stack up more BSEND data than his attached buffer&gt;
<br>
can hold. MPI provides guidelines on doing this and it is not hard to
<br>
get right.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the receiving side I have no control over the number of messages
</span><br>
<span class="quotelev1">&gt; that MPI can buffer. This is basically left to the implementation
</span><br>
<span class="quotelev1">&gt; details as you very well described. Shouldn't the user be allowed to
</span><br>
<span class="quotelev1">&gt; specify a memory space to buffer messages on the receiving side,
</span><br>
<span class="quotelev1">&gt; just like on the send?
</span><br>
On the receive side, the buffer space could be filled by messages from
<br>
multiple sources so managing it in the application can be very complex
<br>
and a semantic that said the MPI job can fail if the buffer overflows is
<br>
pretty nasty when it is so hard for applications to prevent overflow.
<br>
<p>So, the MPI Forum chose to require that the MPI_SEND only ship data
<br>
eagerly if it &quot;knows&quot; there is space in the libmpi managed buffer at
<br>
the destination. If the MPI_SEND side cannot &quot;know&quot; there is space at
<br>
the destination, the SEND is required to block until a matching
<br>
receive is posted.
<br>
<p>The MPI Forum concluded there are so many options in how an MPI
<br>
implementation
<br>
might do this efficiently that there is no reasonable, portable way to let
<br>
the
<br>
user control it.  Also, an amount of buffer a user might decide to set
<br>
aside
<br>
for one platform may be most of the memory on another so the application
<br>
will
<br>
not port to the second platform well. User interest in having control was
<br>
recognized as MPI was developed but the Forum decided it would cause more
<br>
potential for harm that it was worth.
<br>
<p>Many MPI implementations have a default buffer and some nonstandard way to
<br>
specify how much buffer is to be provided if you do not like the default.
<br>
Typically there is an environment variable.
<br>
<span class="quotelev1">&gt;
</span><br>
&lt;&lt; snip &gt;&gt;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Previous message:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
