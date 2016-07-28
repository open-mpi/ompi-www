<?
$subject_val = "Re: [OMPI users] MPI_SCAN";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 19 13:36:47 2012" -->
<!-- isoreceived="20120519173647" -->
<!-- sent="Sun, 20 May 2012 01:36:43 +0800" -->
<!-- isosent="20120519173643" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SCAN" -->
<!-- id="CAFAE9jgC41SdWZ+FZnZ61O059UoJ0t_6AEj-fzNjC6Wz51bEdw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="78C2CA98-4760-4A5C-A927-6D93192FD292_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SCAN<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-19 13:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeffy,
<br>
<p>Thanks for your reply.
<br>
<p>I am not understanding how MPI_Reduce would be useful.
<br>
<p>Say I have 3 processes and each process has array [1,2,3,4]
<br>
<p>When each process calculates the prefix sum using cuda each process will
<br>
have array as [1,3,6,10]
<br>
<p>so if I use MPI_Reduce to gather results it returns me sum as 30.
<br>
<p>but the original array is [1,2,3,4,1,2,3,4,1,2,3,4] and the prefix sum of
<br>
this array should be
<br>
<p>[1,3,6,10,11,13,16,20,21,23,26,30]
<br>
<p>Is my understanding wrong somewhere?
<br>
<p>On Fri, May 18, 2012 at 7:05 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably want MPI_Reduce, instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/doc/v1.6/man3/MPI_Reduce.3.php">http://www.open-mpi.org/doc/v1.6/man3/MPI_Reduce.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2012, at 11:27 PM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am performing Prefix scan operation on cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have 3 MPI tasks and master task is responsible for distributing the
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, each task calculates sum of its own part of array using GPUs and
</span><br>
<span class="quotelev1">&gt; returns the results to master task.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Master task also calculates its own part of array using GPU.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When each task returns its result (which would be array) master task
</span><br>
<span class="quotelev1">&gt; needs to combine all the results to get the final result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can I use MPI_SCAN to combine the results?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
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
