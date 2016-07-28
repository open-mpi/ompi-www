<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 11:09:48 2006" -->
<!-- isoreceived="20060412150948" -->
<!-- sent="Wed, 12 Apr 2006 11:09:42 -0400 (EDT)" -->
<!-- isosent="20060412150942" -->
<!-- name="liuliang_at_[hidden]" -->
<!-- email="liuliang_at_[hidden]" -->
<!-- subject="[OMPI users] running a job problem" -->
<!-- id="1195.164.107.248.223.1144854582.squirrel_at_www.stat.ohio-state.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2006-04-12 11:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Previous message:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
We have a Mac network running xgrid and we have successfully installed
<br>
mpi. We want to run a parallell version of mrbayes. It did not have any
<br>
problem when we compiled mrbayes using mpicc. But when we tried to run the
<br>
compiled mrbayes, we got lots errror message
<br>
<p>mpiexec -np 4 ./mb -i  yeast_noclock_imp.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel version of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel version of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel version of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel version of
<br>
<p>[ea285fltprinter.scc.ohio-state.edu:03327] *** An error occurred in
<br>
MPI_comm_size
<br>
[ea285fltprinter.scc.ohio-state.edu:03327] *** on communicator
<br>
MPI_COMM_WORLD
<br>
[ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERR_COMM: invalid
<br>
communicator
<br>
[ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERRORS_ARE_FATAL
<br>
(goodbye)
<br>
[ea285fltprinter.scc.ohio-state.edu:03325] *** An error occurred in
<br>
MPI_comm_size
<br>
[ea285fltprinter.scc.ohio-state.edu:03325] *** on communicator
<br>
MPI_COMM_WORLD
<br>
[ea285fltprinter.scc.ohio-state.edu:03325] *** MPI_ERR_COMM: invalid
<br>
communicator
<br>
[ea285fltprinter.scc.ohio-state.edu:03325] *** MPI_ERRORS_ARE_FATAL
<br>
(goodbye)
<br>
[ea285fltprinter.scc.ohio-state.edu:03321] *** An error occurred in
<br>
MPI_comm_size
<br>
[ea285fltprinter.scc.ohio-state.edu:03321] *** on communicator
<br>
MPI_COMM_WORLD
<br>
[ea285fltprinter.scc.ohio-state.edu:03321] *** MPI_ERR_COMM: invalid
<br>
communicator
<br>
[ea285fltprinter.scc.ohio-state.edu:03321] *** MPI_ERRORS_ARE_FATAL
<br>
(goodbye)
<br>
[ea285fltprinter.scc.ohio-state.edu:03323] *** An error occurred in
<br>
MPI_comm_size
<br>
[ea285fltprinter.scc.ohio-state.edu:03323] *** on communicator
<br>
MPI_COMM_WORLD
<br>
[ea285fltprinter.scc.ohio-state.edu:03323] *** MPI_ERR_COMM: invalid
<br>
communicator
<br>
[ea285fltprinter.scc.ohio-state.edu:03323] *** MPI_ERRORS_ARE_FATAL
<br>
(goodbye)
<br>
1 process killed (possibly by Open MPI)
<br>
<p>Anyone can help me out? Thank you very much.
<br>
Liang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Previous message:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>Reply:</strong> <a href="1057.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
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
