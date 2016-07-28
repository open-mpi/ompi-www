<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 10:32:08 2010" -->
<!-- isoreceived="20101206153208" -->
<!-- sent="Mon, 06 Dec 2010 07:31:40 -0800" -->
<!-- isosent="20101206153140" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4CFD01DC.1090005_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CFCED21.1040604_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 10:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15009.php">Peter Kjellstr&#246;m: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; Nevertheless, one can observed some differences between MPICH and 
</span><br>
<span class="quotelev1">&gt; OpenMPI from 25% to 100% depending on the options we are using into 
</span><br>
<span class="quotelev1">&gt; our software. Tests are lead on a single SGI node on 6 or 12 
</span><br>
<span class="quotelev1">&gt; processes, and thus, I am focused on the sm option.
</span><br>
<p>Is it possible to narrow our focus here a little?  E.g., are there 
<br>
particular MPI calls that are much more expensive with OMPI than MPICH?  
<br>
Is the performance difference observable with simple ping-pong tests?
<br>
<p><span class="quotelev1">&gt; So, I have two questions:
</span><br>
<span class="quotelev1">&gt; 1/ does the option--mca mpool_sm_max_size=XXXX can change something (I 
</span><br>
<span class="quotelev1">&gt; am wondering if the value is not too small and, as consequence, a set 
</span><br>
<span class="quotelev1">&gt; of small messages is sent instead of a big one)
</span><br>
<p>There was recent related discussion on this mail list.
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14910.php">http://www.open-mpi.org/community/lists/users/2010/11/14910.php</a>
<br>
<p>Check the OMPI FAQ for more info.  E.g.,
<br>
<a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
<br>
<p>This particular parameter disappeared with OMPI 1.3.2.
<br>
<a href="http://www.open-mpi.org/faq/?category=sm#how-much-use">http://www.open-mpi.org/faq/?category=sm#how-much-use</a>
<br>
<p>To move messages as bigger chunks, try btl_sm_eager_limit and 
<br>
btl_sm_max_send_size:
<br>
<a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
<br>
<p><span class="quotelev1">&gt; 2/ is there a difference between --mca btl tcp,sm,self and --mca btl 
</span><br>
<span class="quotelev1">&gt; self,sm,tcp (or not put any explicit mca option)?
</span><br>
<p>I think tcp,sm,self and self,sm,tcp will be the same.  Without an 
<br>
explicit MCA btl choice, it depends on what BTL choices are available.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15009.php">Peter Kjellstr&#246;m: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
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
