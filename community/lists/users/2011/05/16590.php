<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 07:28:34 2011" -->
<!-- isoreceived="20110520112834" -->
<!-- sent="Fri, 20 May 2011 07:28:28 -0400" -->
<!-- isosent="20110520112828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..." -->
<!-- id="CAEF632E-757B-49EE-B545-5CCCBC712247_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB5DD14.7040207_at_princeton.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 07:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16344.php">Wei Hao: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the super-late reply.  :-\
<br>
<p>Yes, ERR_TRUNCATE means that the receiver didn't have a large enough buffer.
<br>
<p>Have you tried upgrading to a newer version of Open MPI?  1.4.3 is the current stable release (I have a very dim and not guaranteed to be correct recollection that we fixed something in the internals of collectives somewhere with regards to ERR_TRUNCATE...?).
<br>
<p><p>On Apr 25, 2011, at 4:44 PM, Wei Hao wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running openmpi 1.2.8. I'm working on a project where one part involves communicating an integer, representing the number of data points I'm keeping track of, to all the processors. The line is simple:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Allreduce(&amp;np,&amp;geo_N,1,MPI_INT,MPI_MAX,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where np and geo_N are integers, np is the result of a local calculation, and geo_N has been declared on all the processors. geo_N is nondecreasing. This line works the first time I call it (geo_N goes from 0 to some other integer), but if I call it later in the program, I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [woodhen-039:26189] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt;    [woodhen-039:26189] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;    [woodhen-039:26189] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;    [woodhen-039:26189] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand it, MPI_ERR_TRUNCATE means that the output buffer is too small, but I'm not sure where I've made a mistake. It's particularly frustrating because it seems to work fine the first time. Does anyone have any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Wei
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16344.php">Wei Hao: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
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
