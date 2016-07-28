<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 13:10:59 2006" -->
<!-- isoreceived="20060413171059" -->
<!-- sent="Thu, 13 Apr 2006 11:10:57 -0600" -->
<!-- isosent="20060413171057" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running a job problem" -->
<!-- id="6579AA95-7FBC-4ACA-8DA8-E734A54260E0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1195.164.107.248.223.1144854582.squirrel_at_www.stat.ohio-state.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-13 13:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2006, at 9:09 AM, liuliang_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; We have a Mac network running xgrid and we have successfully installed
</span><br>
<span class="quotelev1">&gt; mpi. We want to run a parallell version of mrbayes. It did not have  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; problem when we compiled mrbayes using mpicc. But when we tried to  
</span><br>
<span class="quotelev1">&gt; run the
</span><br>
<span class="quotelev1">&gt; compiled mrbayes, we got lots errror message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 4 ./mb -i  yeast_noclock_imp.txt
</span><br>
<span class="quotelev1">&gt;                               Parallel version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Parallel version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Parallel version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Parallel version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** An error occurred in
</span><br>
<span class="quotelev1">&gt; MPI_comm_size
</span><br>
<span class="quotelev1">&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** on communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERR_COMM: invalid
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev1">&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev1">&gt; (goodbye)
</span><br>
<p>This indicates that the application is calling an MPI function with  
<br>
an invalid communicator.  Unfortunately, this is a hard one to track  
<br>
down without more information.  What version of mrbayes are you using  
<br>
and can you share your input deck?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1058.php">liuliang_at_[hidden]: "Re: [OMPI users] running a job problem"</a>
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
