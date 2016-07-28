<?
$subject_val = "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 06:48:04 2007" -->
<!-- isoreceived="20071211114804" -->
<!-- sent="Tue, 11 Dec 2007 06:47:57 -0500" -->
<!-- isosent="20071211114757" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE" -->
<!-- id="3FF0DDE3-47BA-4677-8939-BE7641408D87_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1197371363.S.7968.2005.webmail80.rediffmail.com.1197371604.27542_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 06:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4634.php">Thomas Ropars: "[OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Neeraj,
<br>
<p>The rationale is clearly explained in the MPI standard. Here is the  
<br>
relevant paragraph from section 7.3.2:
<br>
<p>The ``in place'' operations are provided to reduce unnecessary memory  
<br>
motion by both the MPI implementation and by the user. Note that while  
<br>
the simple check of testing whether the send and receive buffers have  
<br>
the same address will work for some cases (e.g., MPI_ALLREDUCE), they  
<br>
are inadequate in others (e.g., MPI_GATHER, with root not equal to  
<br>
zero). Further, Fortran explicitly prohibits aliasing of arguments;  
<br>
the approach of using a special value to denote ``in place'' operation  
<br>
eliminates that difficulty.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 11, 2007, at 6:13 AM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt; Thanks  George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      But what is the need for user to specify it. The api can check  
</span><br>
<span class="quotelev1">&gt; the address of  input buffers and output buffers. Is there some  
</span><br>
<span class="quotelev1">&gt; extra advantage of MPI_IN_PLACE over automatically detecting it  
</span><br>
<span class="quotelev1">&gt; using pointers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 11 Dec 2007 06:10:06 -0500 Open MPI Users wrote
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE is defined by the MPI standard in order to allow the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users to specify that the input and output buffers for the collectives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are the same. Moreover, not all collectives support MPI_IN_PLACE and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for those that support it some strict rules apply. Please read the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collective section in the MPI standard to see all the restrictions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2007, at 5:56 AM, Neeraj Chourasia wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; While going through collective algorithms, I came across
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; preprocessor directive MPI_IN_PLACE which is (void *)1. Its always
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; being compared against source buffer(sbuf). My question is when
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IN_PLACE == sbuf condition would be true. As far as i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; understand, sbuf is the address of source buffer, which every node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; has to transfer to remaining nodes based on recursive doubling or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; say bruck algo. And it can never be equal to (void *)1. Any help is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Neeraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4633/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4634.php">Thomas Ropars: "[OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
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
