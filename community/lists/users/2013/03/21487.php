<?
$subject_val = "Re: [OMPI users] Should order of implementation matter for MPI_reduce?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 18:05:34 2013" -->
<!-- isoreceived="20130304230534" -->
<!-- sent="Tue, 5 Mar 2013 00:05:29 +0100" -->
<!-- isosent="20130304230529" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Should order of implementation matter for MPI_reduce?" -->
<!-- id="A5E72DB6-1572-4390-A2E0-DF59F77D4E21_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F6B142_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-03-04 18:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21488.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Previous message:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the MPI_Reduce are using datatypes with the same signature (1 x MPI_DOUBLE), so this code should not generate any MPI related errors. However, based on the fact that in the else branch the code is summing intensity with intensity2 (and the  ice-versa), that's the place I would start investigating&#133;
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: The result of the code you posted, is to sum on rank 0 the local intensity with all the intensity2 of all the other nodes. With the change you propose in the else branch you will be summing intensity on rank 0 with intensity on all the other ranks.
<br>
<p><p>On Mar 4, 2013, at 23:48 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Based on your description, it sounds like there might be something else wrong in your code (George's point was that you need to call all collectives with the same signature in all processes on the communicator, but just lipping the output buffer from intensity to intensity2 -- or vice versa -- shouldn't affect that).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps try with a memory-checking debugger...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2013, at 5:16 PM, Andrew J Gomes &lt;a-gomes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have the following code which does not give the expected result:
</span><br>
<span class="quotelev2">&gt;&gt; if (mpi_rank!=0)                                                      
</span><br>
<span class="quotelev2">&gt;&gt; { MPI_Reduce(&amp;intensity,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);                 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce(&amp;intensity2,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD); }
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; { 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However if I change the the order of the else block (reduction of intensity variable before intensity2 variable) to :
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; { 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the expected result. This surprised me. Is there a reason the order of the else block should match the order of the if block? Is there a more robust way of implementing this type of code. Thank you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21488.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Previous message:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>In reply to:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
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
