<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 11:55:43 2010" -->
<!-- isoreceived="20100525155543" -->
<!-- sent="Tue, 25 May 2010 11:55:40 -0400" -->
<!-- isosent="20100525155540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="EC12CBA9-2A85-4327-BD39-C01AD9C97B70_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1005071816460.6629_at_magnesium-2.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpi_comm_spawn_multiple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 11:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<li><strong>In reply to:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(somehow I apparently never sent this mail!  It's been sitting in my drafts folder for weeks.  To followup what I said below: I sent a question about this issue to the MPI-3 Fortran working group -- to see exactly what *should* be the right thing to do: <a href="http://lists.mpi-forum.org/mpi3-fortran/2010/05/0830.php">http://lists.mpi-forum.org/mpi3-fortran/2010/05/0830.php</a>)
<br>
<p><p>On May 7, 2010, at 6:30 PM, Noam Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; As with every array in Fortran, arrays of strings
</span><br>
<span class="quotelev1">&gt; are contiguous in memory, and presumably the end of string (1,1)
</span><br>
<span class="quotelev1">&gt; is right before the beginning of string(2,1), etc.
</span><br>
<p>Yep -- got all that -- we have some f2c string translation routines in OMPI for just this purpose.
<br>
<p>But MPI_COMM_SPAWN_MULTIPLE is a little unique in that it takes a 2D array of character strings.  We know the first dimension; it has to be the same as the &quot;count&quot; argument to MPI_COMM_SPAWN_MULTIPLE.  And by the hidden argument, we know the length of all of the strings.  But we don't know the 2nd dimension of the array.
<br>
<p>So OMPI searches for it by looking for an empty string (i.e., all spaces).  My gfortran 4.1 isn't doing that, although my ifort 11.1 and pgf90 10.0 are.  In my small example that I sent, it *is* apparently doing that for Andrew's ifort 9.0, but it (apparently) isn't in his production tests.  Sigh.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<li><strong>In reply to:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
