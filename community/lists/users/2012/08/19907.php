<?
$subject_val = "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 22:11:19 2012" -->
<!-- isoreceived="20120808021119" -->
<!-- sent="Tue, 7 Aug 2012 22:11:14 -0400" -->
<!-- isosent="20120808021114" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?" -->
<!-- id="CAHwLALMbqqsuJSDH_nfPi_Ydy=E+KWP-aDQpT8+qVTJS9HY+uQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18D32E940D8E4FF1964C55153B213BF9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 22:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I originally thought that it was an issue related to 32-bit
<br>
executables, but it seems to affect 64-bit as well...
<br>
<p>I found references to this problem -- it was reported back in 2007:
<br>
<p><a href="http://lists.mcs.anl.gov/pipermail/mpich-discuss/2007-July/002600.html">http://lists.mcs.anl.gov/pipermail/mpich-discuss/2007-July/002600.html</a>
<br>
<p><p>If you look at the code, you will find that MPI_File_read() calls the
<br>
special I/O driver implementation if one's available, but if not then
<br>
there's also the generic ad_ufs device (POSIX) implementation.
<br>
<p>IIRC, SciNet is using IBM GPFS (BTW, a few years ago when Chris gave
<br>
me a tour of the machine room at MP, the cluster he was managing was
<br>
using Lustre). Since there is no specific implementation for GPFS,
<br>
then ROMIO would default back to ad_ufs, and calls
<br>
ADIOI_GEN_ReadContig().
<br>
<p>In ADIOI_GEN_ReadContig(), we have code:
<br>
<p>ADIO_Offset len;
<br>
<p>len  = (ADIO_Offset)datatype_size * (ADIO_Offset)count;
<br>
<p>And ADIO_Offset is typdef'ed to MPI_Offset, which is 64-bit on 64-bit.
<br>
So far so good.
<br>
<p><p>However, the way len is used... hmm, can be an issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ADIOI_Assert(len == (unsigned int) len); /* read takes an unsigned
<br>
int parm */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = read(fd-&gt;fd_sys, buf, (unsigned int)len);
<br>
<p><p>So wait... read takes an unsigned int?? From the manpage:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssize_t read(int fd, void *buf, size_t count);
<br>
<p>size_t is not unsigned int... it could be if it is 32-bit, but not
<br>
when we are LP64.
<br>
<p><p>Other places in ompi/mca/io/romio/romio/mpi-io/read.c also need to be
<br>
updated (those are really easy as they are sanity checks). But at
<br>
least someone can try to fix the root cause by changing 2 lines of
<br>
code mentioned above, or the ROMIO guys can comment on why an unsigned
<br>
int should be passed to read(2)... (Internally, the file offset
<br>
(fp_sys_posn) is of type ADIO_Offset, so it should be fine.)
<br>
<p>However, I've only spent less than 2 hours on this as I found it
<br>
interesting -- 12 years ago I was fixing 32-bit file offset issues in
<br>
a supercomputer middleware company, and there are still issues with
<br>
32-bit vs 64-bit file pointers today! :-O So I guess 30 years from now
<br>
when we run out of space of 64-bit, we will be fixing 32-bit, 64-bit
<br>
offset issues for 128-bit applications (that's when we have quantum
<br>
computers!)! :-D . Also take the suggestions above at your own risk!
<br>
(And I still need to read the &quot;An Abstract-Device Interface for
<br>
Implementing Portable Parallel-I/O Interfaces&quot; to understand more
<br>
about the internal structures of ROMIO!)
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Tue, Aug 7, 2012 at 6:02 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tuesday, 7 August, 2012 at 12:21 PM, Rob Latham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi. Known problem in the ROMIO MPI-IO implementation (which OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; uses). Been on my list of &quot;things to fix&quot; for a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks. I'm glad it's not just us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a timescale for this being fixed? Because if it's a long term thing, I would suggest it might be worth putting a FAQ entry on it or something similar? Especially as it's quite contradictory to most peoples interpretation of the specification. Maybe it's already listed as a known problem somewhere, and I just missed it - it took quite a while before I stopped thinking it was an issue with my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better workaround than just splitting the MPI_File_read up into multiple reads of  &lt;2^31 bytes? We're actually trying to read in a distributed array, and the workaround awkwardly requires the creation and reading of multiple darray types, each designed to read in the correct number of blocks less than 2^31 bytes. This seems like it could be a bit fragile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Richard
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
<p><a href="http://blogs.scalablelogic.com/">http://blogs.scalablelogic.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
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
