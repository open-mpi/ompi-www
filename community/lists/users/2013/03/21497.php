<?
$subject_val = "Re: [OMPI users] Should order of implementation matter for MPI_reduce?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 17:48:45 2013" -->
<!-- isoreceived="20130304224845" -->
<!-- sent="Mon, 4 Mar 2013 22:48:40 +0000" -->
<!-- isosent="20130304224840" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Should order of implementation matter for MPI_reduce?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F6B142_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Should order of implementation matter for MPI_reduce?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 17:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21496.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21495.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on your description, it sounds like there might be something else wrong in your code (George's point was that you need to call all collectives with the same signature in all processes on the communicator, but just lipping the output buffer from intensity to intensity2 -- or vice versa -- shouldn't affect that).
<br>
<p>Perhaps try with a memory-checking debugger...?
<br>
<p><p>On Mar 4, 2013, at 5:16 PM, Andrew J Gomes &lt;a-gomes_at_[hidden]&gt; wrote:
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21496.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21495.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
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
