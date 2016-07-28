<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 23:29:23 2006" -->
<!-- isoreceived="20060120042923" -->
<!-- sent="Thu, 19 Jan 2006 20:29:13 -0800" -->
<!-- isosent="20060120042913" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem" -->
<!-- id="xlslrjy12e.fsf_at_iris03.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-01-19 23:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using openmpi-1.0.1. attemping to launch programs via 'mpirun --mca
<br>
pls_rsh_agent ssh' fails if the user login shell is tcsh, and
<br>
LD_LIBRARY_PATH is unset at startup.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ($?FOO) setenv BAR $FOO
<br>
<p>is an error in tcsh if $FOO is unset, because it expands the whole
<br>
line at once. Instead one has to use:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ($?FOO) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv BAR $FOO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p>Hence the following patch to orte/mca/pls/rsh/pls_rsh_module.c seems
<br>
to fix things:
<br>
<p><p>*** pls_rsh_module.c	2005-11-11 11:22:33.000000000 -0800
<br>
--- /home/gmorris/pls_rsh_module.c	2006-01-17 14:15:44.000000000 -0800
<br>
***************
<br>
*** 806,815 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (remote_csh) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf (&amp;argv[local_exec_index],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;set path = ( %s/bin $path ) ; &quot;
<br>
!                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot; == 1 ) &quot;
<br>
!                                     &quot;setenv LD_LIBRARY_PATH %s/lib:$LD_LIBRARY_PATH ; &quot;
<br>
!                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot; == 0 ) &quot;
<br>
!                                     &quot;setenv LD_LIBRARY_PATH %s/lib ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s/bin/%s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir,
<br>
--- 806,816 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (remote_csh) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf (&amp;argv[local_exec_index],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;set path = ( %s/bin $path ) ; &quot;
<br>
!                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot; == 1 ) then\n&quot;
<br>
!                                     &quot;setenv LD_LIBRARY_PATH %s/lib:$LD_LIBRARY_PATH\n&quot;
<br>
!                                     &quot;else\n&quot;
<br>
!                                     &quot;setenv LD_LIBRARY_PATH %s/lib\n&quot;
<br>
!                                     &quot;endif ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s/bin/%s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
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
