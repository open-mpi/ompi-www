<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 02:14:33 2015" -->
<!-- isoreceived="20150330061433" -->
<!-- sent="Mon, 30 Mar 2015 09:14:31 +0300" -->
<!-- isosent="20150330061431" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl" -->
<!-- id="CAAO1KyasJ45C4Z=KDZKemcSuDAkPxjkUZv7nnOTZgRUHuRW8iQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAATkYOW73OJBo5uTYWJoeirzJ_MwEds-9OiMYMC7BZriM+6jBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 02:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
openib btl does not support this thread model.
<br>
You can use OMPI w/ mxm (-mca mtl mxm) and multiple thread mode lin 1.8 x
<br>
series or (-mca pml yalla) in the master branch.
<br>
<p>M
<br>
<p>On Mon, Mar 30, 2015 at 9:09 AM, Subhra Mazumdar &lt;subhramazumdar1_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can MPI_THREAD_MULTIPLE and openib btl work together in open mpi 1.8.4?
</span><br>
<span class="quotelev1">&gt; If so are there any command line options needed during run time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Subhra.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26574.php">http://www.open-mpi.org/community/lists/users/2015/03/26574.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
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
