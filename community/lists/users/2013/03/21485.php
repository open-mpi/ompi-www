<?
$subject_val = "Re: [OMPI users] Should order of implementation matter for MPI_reduce?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 17:38:13 2013" -->
<!-- isoreceived="20130304223813" -->
<!-- sent="Mon, 4 Mar 2013 23:38:07 +0100" -->
<!-- isosent="20130304223807" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Should order of implementation matter for MPI_reduce?" -->
<!-- id="17822E8F-A006-4D83-8300-986C80632E0F_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46BF464AC9CF974FB46E457BFE1FB38D49552D_at_evcspmbx4.ads.northwestern.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 17:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21484.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21484.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard is quite clear about this. All collective communications should be entered in exactly the same order by all participants. If I'm not mistaken there is an entire subsection (5.13) addressing the correctness of calling the MPI collectives.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mar 4, 2013, at 23:16 , Andrew J Gomes &lt;a-gomes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have the following code which does not give the expected result:
</span><br>
<span class="quotelev1">&gt; if (mpi_rank!=0)                                                      
</span><br>
<span class="quotelev1">&gt; { MPI_Reduce(&amp;intensity,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);                 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(&amp;intensity2,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD); }
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However if I change the the order of the else block (reduction of intensity variable before intensity2 variable) to :
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the expected result. This surprised me. Is there a reason the order of the else block should match the order of the if block? Is there a more robust way of implementing this type of code. Thank you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21484.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21484.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
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
