<?
$subject_val = "Re: [OMPI users] max buffer size";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 12:30:53 2016" -->
<!-- isoreceived="20160605163053" -->
<!-- sent="Sun, 5 Jun 2016 12:30:46 -0400" -->
<!-- isosent="20160605163046" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max buffer size" -->
<!-- id="27D7424D-58BD-49BD-B285-F958458D2615_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="eb3a2e71-7fce-01e5-e01a-0294e7fdf880_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] max buffer size<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-05 12:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2016, at 12:03 PM, Alexander Droste wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to know what the maximum buffer size
</span><br>
<span class="quotelev1">&gt; for sends/receives is. Besides the count being limited
</span><br>
<span class="quotelev1">&gt; to INT_MAX, how is the max buffer size limited?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Hi Alexander
<br>
<p>As far as I know, the usual solution to circumvent 
<br>
this type of large count problem is to declare an MPI user type to hold 
<br>
a large number of MPI native types (say,
<br>
an MPI_Type_Contiguous or MPI_Type_Vector to hold a bunch of floating point numbers).
<br>
<p><a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php</a>
<br>
<p>Also, an OMPI pro may correct me for saying foolish things on the list, 
<br>
but AFAIK, not all sends/receives are buffered, and the buffer size is set by the default eager/rendevous message threshold (or the value that you set it to be at runtime with OMPI mca parameters). That buffer size may also vary according to the btl (sm,vader, tcp, openib, etc).
<br>
<p>Search for &quot;eager&quot; and &quot;rendevous&quot; on the FAQ:
<br>
<p><a href="https://www.open-mpi.org/faq/?category=all">https://www.open-mpi.org/faq/?category=all</a>
<br>
<p><p>I hope this helps,
<br>
Gus Correa<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
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
