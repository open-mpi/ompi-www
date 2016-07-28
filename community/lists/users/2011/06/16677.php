<?
$subject_val = "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 02:57:47 2011" -->
<!-- isoreceived="20110606065747" -->
<!-- sent="Mon, 6 Jun 2011 08:57:41 +0200" -->
<!-- isosent="20110606065741" -->
<!-- name="Marcin Zielinski" -->
<!-- email="Marcin.Zielinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3" -->
<!-- id="4DEC7A65.7010802_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DE3628A.2000900_at_sara.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3<br>
<strong>From:</strong> Marcin Zielinski (<em>Marcin.Zielinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 02:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16678.php">Troels Haugboelle: "[OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16655.php">Marcin Zielinski: "[OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Did anyone try to fiddle with this riddle of mine ?
<br>
<p><span class="quotelev1"> &gt; $&gt; mpirun -n 2 -am ft-enable-cr ./myapp &lt; &lt;inputfile for
</span><br>
<span class="quotelev1"> &gt; myapp&gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; $&gt; ompi-checkpoint -s --term &lt;MPIRUN PID&gt;
</span><br>
<span class="quotelev1"> &gt; produces the following error for myapp (in case of -n 2):
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1"> &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1"> &gt; [hostname:29664] local) Error: Unable to read state from named pipe
</span><br>
<span class="quotelev1"> &gt; (/global_dir/opal_cr_prog_write.29666). 0
</span><br>
<span class="quotelev1"> &gt; [hostname:29664] [[27518,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1"> &gt; snapc_full_local.c at line 1602
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; mpirun has exited due to process rank 1 with PID 29666 on
</span><br>
<span class="quotelev1"> &gt; node hostname exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1"> &gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1"> &gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1"> &gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1"> &gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1"> &gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1"> &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; The /global_dir/, /local_dir/ and /tmp_dir/ are all write/readable by
</span><br>
<span class="quotelev1"> &gt; the user which invokes the mpirun myapp.
</span><br>
<p>best regards,
<br>
<p>On 05/30/2011 11:25 AM, Marcin Zielinski wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After looking for various topics to solve my problem, I'm forced to turn
</span><br>
<span class="quotelev1">&gt; to You all in here. Tho I have to say, I did not find the following
</span><br>
<span class="quotelev1">&gt; problem yet. Could be something amazingly easy to solve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, I'm running a MPI application, compiled with an OpenMPI 1.5.3.
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.5.3 been compiled with BLCR support. BLCR been compiled with
</span><br>
<span class="quotelev1">&gt; no errors and works fine. The configure looks like this:
</span><br>
<span class="quotelev1">&gt; export CC='icc'
</span><br>
<span class="quotelev1">&gt; export CXX='icpc'
</span><br>
<span class="quotelev1">&gt; export F77='ifort'
</span><br>
<span class="quotelev1">&gt; export FC='ifort'
</span><br>
<span class="quotelev1">&gt; export F90='ifort'
</span><br>
<span class="quotelev1">&gt; export FCFLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; export FFLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; export CFLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS='1'
</span><br>
<span class="quotelev1">&gt; # export CPP='cpp'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_RUNPATH=$installdir/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$installdir \
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt; --with-openib=$ofed \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread \
</span><br>
<span class="quotelev1">&gt; --with-ft=cr \
</span><br>
<span class="quotelev1">&gt; --with-blcr=/path_to_blcr_0.8.2_build_dir/ \
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/path_to_blcr_lib_dir/ \
</span><br>
<span class="quotelev1">&gt; --disable-dlopen \
</span><br>
<span class="quotelev1">&gt; &amp;&amp; \
</span><br>
<span class="quotelev1">&gt; make &amp;&amp; make install || exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort and icc are:
</span><br>
<span class="quotelev1">&gt; $ ifort --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 11.0 20080930 / 11.0.069 64bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ icc --version
</span><br>
<span class="quotelev1">&gt; icc (ICC) 11.0 20080930 / 11.0.074 64bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI application (let's skip the name and what it does) runs
</span><br>
<span class="quotelev1">&gt; perfectly fine when invoking:
</span><br>
<span class="quotelev1">&gt; mpirun ./myapp &lt; &lt;inputfile for myapp&gt; (running serial on parallel code)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when invoking:
</span><br>
<span class="quotelev1">&gt; mpirun -n &lt;nr of cores&gt; ./myapp &lt; &lt;inputfile for myapp&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In both cases it always produces the right results from calculations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, enabling C/R works for one case only:
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr ./myapp &lt; &lt;inputfile for myapp&gt; (running serial
</span><br>
<span class="quotelev1">&gt; on parallel code with C/R enabled)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; later on, invoking ompi-checkpoint -s --term &lt;MPIRUN PID&gt;
</span><br>
<span class="quotelev1">&gt; produces a nice global snapshot and
</span><br>
<span class="quotelev1">&gt; ompi-restart &lt;GLOBAL SNAPSHOT NAME&gt;
</span><br>
<span class="quotelev1">&gt; re-runs the calculations from the checkpointed point perfectly fine,
</span><br>
<span class="quotelev1">&gt; finishing it to the end with a proper results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, invoking
</span><br>
<span class="quotelev1">&gt; mpirun -n &lt;nr of cores &gt; 1&gt; -am ft-enable-cr ./myapp &lt; &lt;inputfile for
</span><br>
<span class="quotelev1">&gt; myapp&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and checkpointing:
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint -s --term &lt;MPIRUN PID&gt;
</span><br>
<span class="quotelev1">&gt; produces the following error for myapp (in case of -n 2):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; [hostname:29664] local) Error: Unable to read state from named pipe
</span><br>
<span class="quotelev1">&gt; (/global_dir/opal_cr_prog_write.29666). 0
</span><br>
<span class="quotelev1">&gt; [hostname:29664] [[27518,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; snapc_full_local.c at line 1602
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 29666 on
</span><br>
<span class="quotelev1">&gt; node hostname exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The /global_dir/, /local_dir/ and /tmp_dir/ are all write/readable by
</span><br>
<span class="quotelev1">&gt; the user which invokes the mpirun myapp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions on top of You heads ?
</span><br>
<span class="quotelev1">&gt; I would appreciate any help on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16678.php">Troels Haugboelle: "[OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16676.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16655.php">Marcin Zielinski: "[OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
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
