<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 14:33:35 2006" -->
<!-- isoreceived="20060413183335" -->
<!-- sent="Thu, 13 Apr 2006 14:33:29 -0400 (EDT)" -->
<!-- isosent="20060413183329" -->
<!-- name="liuliang_at_[hidden]" -->
<!-- email="liuliang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running a job problem" -->
<!-- id="1122.164.107.248.223.1144953209.squirrel_at_www.stat.ohio-state.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6579AA95-7FBC-4ACA-8DA8-E734A54260E0_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:liuliang_at_[hidden]?Subject=Re:%20[OMPI%20users]%20running%20a%20job%20problem"><em>liuliang_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-04-13 14:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
It worked when I used the latest version of Mrbayes. Thanks. By the way,
<br>
do  you have any idea to submit an ompi job on xgrid? Thanks again.
<br>
Liang
<br>
<p><span class="quotelev1">&gt; On Apr 12, 2006, at 9:09 AM, liuliang_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a Mac network running xgrid and we have successfully installed
</span><br>
<span class="quotelev2">&gt;&gt; mpi. We want to run a parallell version of mrbayes. It did not have
</span><br>
<span class="quotelev2">&gt;&gt; any
</span><br>
<span class="quotelev2">&gt;&gt; problem when we compiled mrbayes using mpicc. But when we tried to
</span><br>
<span class="quotelev2">&gt;&gt; run the
</span><br>
<span class="quotelev2">&gt;&gt; compiled mrbayes, we got lots errror message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 4 ./mb -i  yeast_noclock_imp.txt
</span><br>
<span class="quotelev2">&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** An error occurred in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_comm_size
</span><br>
<span class="quotelev2">&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** on communicator
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERR_COMM: invalid
</span><br>
<span class="quotelev2">&gt;&gt; communicator
</span><br>
<span class="quotelev2">&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev2">&gt;&gt; (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This indicates that the application is calling an MPI function with
</span><br>
<span class="quotelev1">&gt; an invalid communicator.  Unfortunately, this is a hard one to track
</span><br>
<span class="quotelev1">&gt; down without more information.  What version of mrbayes are you using
</span><br>
<span class="quotelev1">&gt; and can you share your input deck?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Borenstein, Bernard S: "[OMPI users] how can I tell for sure that I'm using mvapi"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
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
