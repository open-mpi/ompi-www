<?
$subject_val = "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 18:32:04 2008" -->
<!-- isoreceived="20080204233204" -->
<!-- sent="Mon, 4 Feb 2008 18:31:56 -0500" -->
<!-- isosent="20080204233156" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck" -->
<!-- id="13039C5F-31A1-461B-8878-19C8F63D372B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A743A6.8050300_at_ntlworld.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 18:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2008, at 11:56 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, the overlapping case is a real exception. Obviously, it happened
</span><br>
<span class="quotelev2">&gt;&gt; for at least two peoples (as per mailing list search) in about 4  
</span><br>
<span class="quotelev2">&gt;&gt; years,
</span><br>
<span class="quotelev2">&gt;&gt; but without affecting the correctness of the application. Is that a
</span><br>
<span class="quotelev2">&gt;&gt; reason good enough to effect the overall performance of all parallel
</span><br>
<span class="quotelev2">&gt;&gt; applications using Open MPI ? You can already guess my stance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. I agree with your pragmatic approach in general,
</span><br>
<span class="quotelev1">&gt; and the lack of widespread problems certainly puts this low priority.
</span><br>
<span class="quotelev1">&gt; However, there *is* a reason for the memmove/memcpy distinction,
</span><br>
<span class="quotelev1">&gt; otherwise there'd only be a single API point in libc. And, as you  
</span><br>
<span class="quotelev1">&gt; state,
</span><br>
<span class="quotelev1">&gt; that reason is performance. One day someone will write some optimized
</span><br>
<span class="quotelev1">&gt; memcpy that *isn't* a simple forward copy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm old enough to remember the Z80 instructions LDDR and LDIR
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.sincuser.f9.co.uk/044/mcode.htm">http://www.sincuser.f9.co.uk/044/mcode.htm</a>) for assembly-level memory
</span><br>
<span class="quotelev1">&gt; copying. A memmove would have to choose between the two; memcpy could
</span><br>
<span class="quotelev1">&gt; legitimately use either and would corrupt overlapping memory 50% of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<p>I did start with the Z80 too ... but now it looks like it was in the  
<br>
&quot;ice age&quot; :)
<br>
<p><span class="quotelev2">&gt;&gt; However, I can imagine a way to rewrite the last step of the bruck
</span><br>
<span class="quotelev2">&gt;&gt; algorithm to avoid this problem, and without affecting the overall
</span><br>
<span class="quotelev2">&gt;&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Totally agree. The vast majority of OpenMPI stuff uses memcpy fine. It
</span><br>
<span class="quotelev1">&gt; would just be a local bug fix. Can I volunteer?
</span><br>
<p>Of course, feel free to join the fun. Here is what I had in mind. The  
<br>
final step in the bruck algorithm can be completely discarded for the  
<br>
first half of the processes, if we compute the receive buffer smartly.  
<br>
For the other half, I guess we can do the copy one non overlapping  
<br>
piece of data at the time, eventually without the need or an  
<br>
additional buffer.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2008, at 9:41 AM, Number Cruncher wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting many &quot;Source and destination overlap in memcpy&quot; errors  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running my application on an odd number of procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe this is because the Allgather collective is using Bruck's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm and doing a shift on the buffer as a finalisation step
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (coll_tuned_allgather.c):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmprecv = (char*) rbuf;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmpsend = (char*) rbuf + (size - rank) * rcount * rext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; err = ompi_ddt_copy_content_same_ddt(rdtype, rank * rcount,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                              tmprecv, tmpsend);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately ompi_ddt_copy_content_same_ddt does a memcpy,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the memmove which is needed here. For this buffer-left-shift, any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forward-copying memcpy should actually be OK as it won't overwrite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself during the copy, but this violates the precondition of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memcpy and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may break for some implementations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this issue was dismissed too lightly previously:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/08/3873.php">http://www.open-mpi.org/community/lists/users/2007/08/3873.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4975/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
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
