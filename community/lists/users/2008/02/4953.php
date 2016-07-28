<?
$subject_val = "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  3 22:53:48 2008" -->
<!-- isoreceived="20080204035348" -->
<!-- sent="Sun, 3 Feb 2008 22:53:41 -0500" -->
<!-- isosent="20080204035341" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck" -->
<!-- id="1BE5CE3D-53EB-4409-84A6-697C2F968150_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A08CB7.4060808_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-03 22:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4918.php">Number Cruncher: "[OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason behind the overlapping restriction on the memcpy, is that  
<br>
the memcpy is supposed to use the fastest available algorithm on the  
<br>
particular architecture, without restricting itself to a specific copy  
<br>
direction (forward or backward). On the other side, memmove is  
<br>
supposed to choose the direction that guarantee the correctness of the  
<br>
copy.
<br>
<p>As you discovered, as long as memcpy do the copy in the forward  
<br>
direction, there will be no problems with in the  
<br>
ompi_ddt_copy_content_same_ddt. Do you know any operating system where  
<br>
memcpy is done backward ?
<br>
<p>Now, the overlapping case is a real exception. Obviously, it happened  
<br>
for at least two peoples (as per mailing list search) in about 4  
<br>
years, but without affecting the correctness of the application. Is  
<br>
that a reason good enough to effect the overall performance of all  
<br>
parallel applications using Open MPI ? You can already guess my stance.
<br>
<p>However, I can imagine a way to rewrite the last step of the bruck  
<br>
algorithm to avoid this problem, and without affecting the overall  
<br>
performance.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Jan 30, 2008, at 9:41 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting many &quot;Source and destination overlap in memcpy&quot; errors  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; running my application on an odd number of procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is because the Allgather collective is using Bruck's
</span><br>
<span class="quotelev1">&gt; algorithm and doing a shift on the buffer as a finalisation step
</span><br>
<span class="quotelev1">&gt; (coll_tuned_allgather.c):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tmprecv = (char*) rbuf;
</span><br>
<span class="quotelev1">&gt; tmpsend = (char*) rbuf + (size - rank) * rcount * rext;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; err = ompi_ddt_copy_content_same_ddt(rdtype, rank * rcount,
</span><br>
<span class="quotelev1">&gt;                                               tmprecv, tmpsend);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately ompi_ddt_copy_content_same_ddt does a memcpy, instead of
</span><br>
<span class="quotelev1">&gt; the memmove which is needed here. For this buffer-left-shift, any
</span><br>
<span class="quotelev1">&gt; forward-copying memcpy should actually be OK as it won't overwrite
</span><br>
<span class="quotelev1">&gt; itself during the copy, but this violates the precondition of memcpy  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; may break for some implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this issue was dismissed too lightly previously:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/08/3873.php">http://www.open-mpi.org/community/lists/users/2007/08/3873.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Simon
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4953/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4918.php">Number Cruncher: "[OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Reply:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
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
