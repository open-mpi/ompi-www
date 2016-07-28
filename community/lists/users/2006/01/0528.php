<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 21:38:07 2006" -->
<!-- isoreceived="20060127023807" -->
<!-- sent="Thu, 26 Jan 2006 18:38:00 -0800" -->
<!-- isosent="20060127023800" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="tfacdigzuf.fsf_at_iris02.slac.stanford.edu" -->
<!-- inreplyto="CADB558C-3E5E-402B-93CB-FA48C841557F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-01-26 21:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your suggestions.
<br>
<p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; From the stack trace, it looks like you're in the middle of a
</span><br>
<span class="quotelev1">&gt; complex deallocation of some C++ objects, so I really can't tell
</span><br>
<span class="quotelev1">&gt; (i.e., not in an MPI function at all).
</span><br>
<p>Well, not intentionally! I'm just calling &quot;deallocate&quot; in a purely
<br>
Fortran program. No C++ around anywhere.
<br>
<p><span class="quotelev1">&gt; - configure your Open MPI --with-memory-manager=none and see if the
</span><br>
<span class="quotelev1">&gt; problem goes away. This tells Open MPI to not intercept memory
</span><br>
<span class="quotelev1">&gt; manager functions, so if you still have the problem, it's more
</span><br>
<span class="quotelev1">&gt; likely to be a problem in your application than in OMPI.
</span><br>
<p>If I compile with --with-memory-manager=none the program runs to
<br>
completion with no problems.
<br>
<p><span class="quotelev1">&gt; - run your application through a memory-checking debugger (such as
</span><br>
<span class="quotelev1">&gt; valgrind) and see if it identifies any memory faults within your
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<p>I've tried, but I'm not convinced valgrind understands Fortran 90. I
<br>
certainly don't understand valgrind... It spat out a lot of
<br>
information, but I don't think any of it was especially relevant to
<br>
this issue.
<br>
<p><span class="quotelev1">&gt; - send the additional information for run-time problems listed on  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<p>tar.gz attached as requested.
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0528/ompi-info.tar.gz">OpenMPI config.log and ompi_info output</a>
</ul>
<!-- attachment="ompi-info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0529.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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
