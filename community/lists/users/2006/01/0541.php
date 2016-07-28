<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 30 16:18:44 2006" -->
<!-- isoreceived="20060130211844" -->
<!-- sent="Mon, 30 Jan 2006 11:03:20 -0500" -->
<!-- isosent="20060130160320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem" -->
<!-- id="940B250D-DEBB-4195-B765-615EDAF19126_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="xlslrjy12e.fsf_at_iris03.slac.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-30 11:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0542.php">Brian Barrett: "Re: [O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Previous message:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>In reply to:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0545.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the lengthy delay on this reply -- thanks for submitting  
<br>
this bug report.  I can confirm that it is broken.
<br>
<p>That's a neat trick -- I didn't know that you could embed \n's in an  
<br>
ssh command line.  Thanks!
<br>
<p>I'll commit this to the trunk and v1.0 branch shortly; it'll be  
<br>
included in v1.0.2.
<br>
<p><p><p>On Jan 19, 2006, at 11:29 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.0.1. attemping to launch programs via 'mpirun --mca
</span><br>
<span class="quotelev1">&gt; pls_rsh_agent ssh' fails if the user login shell is tcsh, and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is unset at startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if ($?FOO) setenv BAR $FOO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is an error in tcsh if $FOO is unset, because it expands the whole
</span><br>
<span class="quotelev1">&gt; line at once. Instead one has to use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if ($?FOO) then
</span><br>
<span class="quotelev1">&gt;       setenv BAR $FOO
</span><br>
<span class="quotelev1">&gt;     endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence the following patch to orte/mca/pls/rsh/pls_rsh_module.c seems
</span><br>
<span class="quotelev1">&gt; to fix things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** pls_rsh_module.c	2005-11-11 11:22:33.000000000 -0800
</span><br>
<span class="quotelev1">&gt; --- /home/gmorris/pls_rsh_module.c	2006-01-17 14:15:44.000000000 -0800
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; *** 806,815 ****
</span><br>
<span class="quotelev1">&gt;                           if (remote_csh) {
</span><br>
<span class="quotelev1">&gt;                               asprintf (&amp;argv[local_exec_index],
</span><br>
<span class="quotelev1">&gt;                                       &quot;set path = ( %s/bin $path ) ; &quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot;  
</span><br>
<span class="quotelev1">&gt; == 1 ) &quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;setenv LD_LIBRARY_PATH %s/ 
</span><br>
<span class="quotelev1">&gt; lib:$LD_LIBRARY_PATH ; &quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot;  
</span><br>
<span class="quotelev1">&gt; == 0 ) &quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;setenv LD_LIBRARY_PATH %s/ 
</span><br>
<span class="quotelev1">&gt; lib ; &quot;
</span><br>
<span class="quotelev1">&gt;                                       &quot;%s/bin/%s&quot;,
</span><br>
<span class="quotelev1">&gt;                                       prefix_dir,
</span><br>
<span class="quotelev1">&gt;                                       prefix_dir,
</span><br>
<span class="quotelev1">&gt; --- 806,816 ----
</span><br>
<span class="quotelev1">&gt;                           if (remote_csh) {
</span><br>
<span class="quotelev1">&gt;                               asprintf (&amp;argv[local_exec_index],
</span><br>
<span class="quotelev1">&gt;                                       &quot;set path = ( %s/bin $path ) ; &quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;if ( \&quot;$?LD_LIBRARY_PATH\&quot;  
</span><br>
<span class="quotelev1">&gt; == 1 ) then\n&quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;setenv LD_LIBRARY_PATH %s/ 
</span><br>
<span class="quotelev1">&gt; lib:$LD_LIBRARY_PATH\n&quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;else\n&quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;setenv LD_LIBRARY_PATH %s/lib 
</span><br>
<span class="quotelev1">&gt; \n&quot;
</span><br>
<span class="quotelev1">&gt; !                                     &quot;endif ; &quot;
</span><br>
<span class="quotelev1">&gt;                                       &quot;%s/bin/%s&quot;,
</span><br>
<span class="quotelev1">&gt;                                       prefix_dir,
</span><br>
<span class="quotelev1">&gt;                                       prefix_dir,
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0542.php">Brian Barrett: "Re: [O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>Previous message:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<li><strong>In reply to:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0544.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0545.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
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
