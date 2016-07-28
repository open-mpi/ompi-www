<?
$subject_val = "Re: [OMPI users] max buffer size";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 13:07:46 2016" -->
<!-- isoreceived="20160605170746" -->
<!-- sent="Sun, 5 Jun 2016 10:07:45 -0700" -->
<!-- isosent="20160605170745" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max buffer size" -->
<!-- id="CAGKz=uLPK2Gg7saouh_LakzCP+pRJsNU3vVCnxdKCmO+HhBmJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="df9ff97d-9609-09d0-7efe-cb3e9237ca7b_at_googlemail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-05 13:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out the BigMPI project for details on this topic.
<br>
<p>Some (many?) MPI implementations still have internal limitations that
<br>
prevent one from sending more than 2 gigabytes using MPI datatypes. You can
<br>
use the BigMPI tests to identify these.
<br>
<p><a href="https://github.com/jeffhammond/BigMPI">https://github.com/jeffhammond/BigMPI</a>
<br>
<a href="https://github.com/jeffhammond/BigMPI-paper">https://github.com/jeffhammond/BigMPI-paper</a>
<br>
<p>Jeff
<br>
<p>On Sunday, June 5, 2016, Alexander Droste &lt;
<br>
alexander.ra.droste_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot for the intro, that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05.06.16 18:30, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2016, at 12:03 PM, Alexander Droste wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to know what the maximum buffer size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for sends/receives is. Besides the count being limited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to INT_MAX, how is the max buffer size limited?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Alexander
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know, the usual solution to circumvent
</span><br>
<span class="quotelev2">&gt;&gt; this type of large count problem is to declare an MPI user type to hold
</span><br>
<span class="quotelev2">&gt;&gt; a large number of MPI native types (say,
</span><br>
<span class="quotelev2">&gt;&gt; an MPI_Type_Contiguous or MPI_Type_Vector to hold a bunch of floating
</span><br>
<span class="quotelev2">&gt;&gt; point numbers).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, an OMPI pro may correct me for saying foolish things on the list,
</span><br>
<span class="quotelev2">&gt;&gt; but AFAIK, not all sends/receives are buffered, and the buffer size is
</span><br>
<span class="quotelev2">&gt;&gt; set by the default eager/rendevous message threshold (or the value that you
</span><br>
<span class="quotelev2">&gt;&gt; set it to be at runtime with OMPI mca parameters). That buffer size may
</span><br>
<span class="quotelev2">&gt;&gt; also vary according to the btl (sm,vader, tcp, openib, etc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Search for &quot;eager&quot; and &quot;rendevous&quot; on the FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/faq/?category=all">https://www.open-mpi.org/faq/?category=all</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29371.php">http://www.open-mpi.org/community/lists/users/2016/06/29371.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29372.php">http://www.open-mpi.org/community/lists/users/2016/06/29372.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29372.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>Reply:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
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
