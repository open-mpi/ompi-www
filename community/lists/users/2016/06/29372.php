<?
$subject_val = "Re: [OMPI users] max buffer size";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 12:58:09 2016" -->
<!-- isoreceived="20160605165809" -->
<!-- sent="Sun, 5 Jun 2016 18:58:15 +0200" -->
<!-- isosent="20160605165815" -->
<!-- name="Alexander Droste" -->
<!-- email="alexander.ra.droste_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max buffer size" -->
<!-- id="df9ff97d-9609-09d0-7efe-cb3e9237ca7b_at_googlemail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="27D7424D-58BD-49BD-B285-F958458D2615_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Alexander Droste (<em>alexander.ra.droste_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-05 12:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29371.php">Gustavo Correa: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29371.php">Gustavo Correa: "Re: [OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>thanks a lot for the intro, that helps.
<br>
<p>Best regards,
<br>
Alex
<br>
<p>On 05.06.16 18:30, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2016, at 12:03 PM, Alexander Droste wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to know what the maximum buffer size
</span><br>
<span class="quotelev2">&gt;&gt; for sends/receives is. Besides the count being limited
</span><br>
<span class="quotelev2">&gt;&gt; to INT_MAX, how is the max buffer size limited?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Alexander
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know, the usual solution to circumvent
</span><br>
<span class="quotelev1">&gt; this type of large count problem is to declare an MPI user type to hold
</span><br>
<span class="quotelev1">&gt; a large number of MPI native types (say,
</span><br>
<span class="quotelev1">&gt; an MPI_Type_Contiguous or MPI_Type_Vector to hold a bunch of floating point numbers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, an OMPI pro may correct me for saying foolish things on the list,
</span><br>
<span class="quotelev1">&gt; but AFAIK, not all sends/receives are buffered, and the buffer size is set by the default eager/rendevous message threshold (or the value that you set it to be at runtime with OMPI mca parameters). That buffer size may also vary according to the btl (sm,vader, tcp, openib, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Search for &quot;eager&quot; and &quot;rendevous&quot; on the FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=all">https://www.open-mpi.org/faq/?category=all</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29371.php">http://www.open-mpi.org/community/lists/users/2016/06/29371.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29371.php">Gustavo Correa: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29371.php">Gustavo Correa: "Re: [OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
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
