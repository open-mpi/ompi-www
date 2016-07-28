<?
$subject_val = "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 11:56:15 2008" -->
<!-- isoreceived="20080204165615" -->
<!-- sent="Mon, 04 Feb 2008 16:56:06 +0000" -->
<!-- isosent="20080204165606" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck" -->
<!-- id="47A743A6.8050300_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1BE5CE3D-53EB-4409-84A6-697C2F968150_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 11:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, the overlapping case is a real exception. Obviously, it happened 
</span><br>
<span class="quotelev1">&gt; for at least two peoples (as per mailing list search) in about 4 years, 
</span><br>
<span class="quotelev1">&gt; but without affecting the correctness of the application. Is that a 
</span><br>
<span class="quotelev1">&gt; reason good enough to effect the overall performance of all parallel 
</span><br>
<span class="quotelev1">&gt; applications using Open MPI ? You can already guess my stance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for the reply. I agree with your pragmatic approach in general, 
<br>
and the lack of widespread problems certainly puts this low priority. 
<br>
However, there *is* a reason for the memmove/memcpy distinction, 
<br>
otherwise there'd only be a single API point in libc. And, as you state, 
<br>
that reason is performance. One day someone will write some optimized 
<br>
memcpy that *isn't* a simple forward copy.
<br>
<p>I'm old enough to remember the Z80 instructions LDDR and LDIR 
<br>
(<a href="http://www.sincuser.f9.co.uk/044/mcode.htm">http://www.sincuser.f9.co.uk/044/mcode.htm</a>) for assembly-level memory 
<br>
copying. A memmove would have to choose between the two; memcpy could 
<br>
legitimately use either and would corrupt overlapping memory 50% of the 
<br>
time.
<br>
<p><span class="quotelev1">&gt; However, I can imagine a way to rewrite the last step of the bruck 
</span><br>
<span class="quotelev1">&gt; algorithm to avoid this problem, and without affecting the overall 
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<p>Totally agree. The vast majority of OpenMPI stuff uses memcpy fine. It 
<br>
would just be a local bug fix. Can I volunteer?
<br>
<p>Regards,
<br>
Simon
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 9:41 AM, Number Cruncher wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting many &quot;Source and destination overlap in memcpy&quot; errors when
</span><br>
<span class="quotelev2">&gt;&gt; running my application on an odd number of procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is because the Allgather collective is using Bruck's
</span><br>
<span class="quotelev2">&gt;&gt; algorithm and doing a shift on the buffer as a finalisation step
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_allgather.c):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tmprecv = (char*) rbuf;
</span><br>
<span class="quotelev2">&gt;&gt; tmpsend = (char*) rbuf + (size - rank) * rcount * rext;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; err = ompi_ddt_copy_content_same_ddt(rdtype, rank * rcount,
</span><br>
<span class="quotelev2">&gt;&gt;                                               tmprecv, tmpsend);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately ompi_ddt_copy_content_same_ddt does a memcpy, instead of
</span><br>
<span class="quotelev2">&gt;&gt; the memmove which is needed here. For this buffer-left-shift, any
</span><br>
<span class="quotelev2">&gt;&gt; forward-copying memcpy should actually be OK as it won't overwrite
</span><br>
<span class="quotelev2">&gt;&gt; itself during the copy, but this violates the precondition of memcpy and
</span><br>
<span class="quotelev2">&gt;&gt; may break for some implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this issue was dismissed too lightly previously:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/08/3873.php">http://www.open-mpi.org/community/lists/users/2007/08/3873.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Simon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
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
