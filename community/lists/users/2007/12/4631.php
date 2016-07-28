<?
$subject_val = "Re: [OMPI users] what is MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 06:10:15 2007" -->
<!-- isoreceived="20071211111015" -->
<!-- sent="Tue, 11 Dec 2007 06:10:06 -0500" -->
<!-- isosent="20071211111006" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is MPI_IN_PLACE" -->
<!-- id="6030A00A-374C-4856-8E3D-A9CCEC691231_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071211105630.20938.qmail_at_webmail8.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is MPI_IN_PLACE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 06:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4630.php">Neeraj Chourasia: "[OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="4630.php">Neeraj Chourasia: "[OMPI users] what is MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Neeraj,
<br>
<p>MPI_IN_PLACE is defined by the MPI standard in order to allow the  
<br>
users to specify that the input and output buffers for the collectives  
<br>
are the same. Moreover, not all collectives support MPI_IN_PLACE and  
<br>
for those that support it some strict rules apply. Please read the  
<br>
collective section in the MPI standard to see all the restrictions.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 11, 2007, at 5:56 AM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     While going through collective algorithms, I came across  
</span><br>
<span class="quotelev1">&gt; preprocessor directive MPI_IN_PLACE which is (void *)1. Its always  
</span><br>
<span class="quotelev1">&gt; being compared against source buffer(sbuf). My question is when  
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE == sbuf condition would be true. As far as i  
</span><br>
<span class="quotelev1">&gt; understand, sbuf is the address of source buffer, which every node  
</span><br>
<span class="quotelev1">&gt; has to transfer to remaining nodes based on recursive doubling or  
</span><br>
<span class="quotelev1">&gt; say bruck algo. And it can never be equal to (void *)1. Any help is  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Neeraj
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4631/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4632.php">Neeraj Chourasia: "[OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4630.php">Neeraj Chourasia: "[OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="4630.php">Neeraj Chourasia: "[OMPI users] what is MPI_IN_PLACE"</a>
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
