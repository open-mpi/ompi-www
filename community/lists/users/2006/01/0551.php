<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 31 20:09:54 2006" -->
<!-- isoreceived="20060201010954" -->
<!-- sent="Tue, 31 Jan 2006 17:09:31 -0800" -->
<!-- isosent="20060201010931" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem" -->
<!-- id="pjhd7jrik4.fsf_at_iris01.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A058DF61-D55F-416F-B8E4-A243A6470D99_at_open-mpi.org" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-31 20:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; After sending this reply, I thought about this issue a bit more --
</span><br>
<span class="quotelev1">&gt; do you have any idea how portable the embedding of \n's in an ssh
</span><br>
<span class="quotelev1">&gt; command is? I.e., will this work everywhere?
</span><br>
<p>On further reflection, if worried about portability, you could just
<br>
reverse the order of the &quot;$?LD_LIBRARY_PATH&quot; == &quot;1&quot; and == &quot;0&quot; tests
<br>
in the original (no newline) format. If L_L_P is unset, two copies of
<br>
the OpenMPI lib directory will get added; which is a little ugly, but
<br>
harmless.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Brian Granger: "[O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
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
