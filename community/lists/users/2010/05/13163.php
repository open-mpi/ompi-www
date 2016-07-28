<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 16:43:26 2010" -->
<!-- isoreceived="20100525204326" -->
<!-- sent="Tue, 25 May 2010 16:43:23 -0400" -->
<!-- isosent="20100525204323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="F6C1759F-6D72-48F3-AC6A-DABE04536514_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EC12CBA9-2A85-4327-BD39-C01AD9C97B70_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-25 16:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah ha!
<br>
<p>It turns out that the MPI spec specifically states that the user's code has to add a blank string at the end of the array to indicate the end.  Specifically (as was just quoted to me), MPI-2.2, p310:18-25 defines:
<br>
<p>&quot;The argv argument argv is an array of strings containing arguments that are passed to
<br>
the program. The first element of argv is the first argument passed to command, not, as
<br>
is conventional in some contexts, the command itself. The argument list is terminated by
<br>
NULL in C and C++ and an empty string in Fortran. In Fortran, leading and trailing spaces
<br>
are always stripped, so that a string consisting of all spaces is considered an empty string.
<br>
The constant MPI_ARGV_NULL may be used in C, C++ and Fortran to indicate an empty
<br>
argument list. In C and C++, this constant is the same as NULL.&quot;
<br>
<p>This definition is also valid for MPI_COMM_SPAWN_MULTIPLE.
<br>
<p>OMPI does mistakenly assume that all your argv have the same number of tokens; I'll fix that.
<br>
<p><p><p>On May 25, 2010, at 11:55 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; (somehow I apparently never sent this mail!  It's been sitting in my drafts folder for weeks.  To followup what I said below: I sent a question about this issue to the MPI-3 Fortran working group -- to see exactly what *should* be the right thing to do: <a href="http://lists.mpi-forum.org/mpi3-fortran/2010/05/0830.php">http://lists.mpi-forum.org/mpi3-fortran/2010/05/0830.php</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 7, 2010, at 6:30 PM, Noam Bernstein wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As with every array in Fortran, arrays of strings
</span><br>
<span class="quotelev2">&gt; &gt; are contiguous in memory, and presumably the end of string (1,1)
</span><br>
<span class="quotelev2">&gt; &gt; is right before the beginning of string(2,1), etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep -- got all that -- we have some f2c string translation routines in OMPI for just this purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But MPI_COMM_SPAWN_MULTIPLE is a little unique in that it takes a 2D array of character strings.  We know the first dimension; it has to be the same as the &quot;count&quot; argument to MPI_COMM_SPAWN_MULTIPLE.  And by the hidden argument, we know the length of all of the strings.  But we don't know the 2nd dimension of the array.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So OMPI searches for it by looking for an empty string (i.e., all spaces).  My gfortran 4.1 isn't doing that, although my ifort 11.1 and pgf90 10.0 are.  In my small example that I sent, it *is* apparently doing that for Andrew's ifort 9.0, but it (apparently) isn't in his production tests.  Sigh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
