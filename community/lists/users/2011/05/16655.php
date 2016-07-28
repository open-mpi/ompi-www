<?
$subject_val = "[OMPI users] running MPI application and using C/R OpenMPI 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 05:25:36 2011" -->
<!-- isoreceived="20110530092536" -->
<!-- sent="Mon, 30 May 2011 11:25:30 +0200" -->
<!-- isosent="20110530092530" -->
<!-- name="Marcin Zielinski" -->
<!-- email="Marcin.Zielinski_at_[hidden]" -->
<!-- subject="[OMPI users] running MPI application and using C/R OpenMPI 1.5.3" -->
<!-- id="4DE3628A.2000900_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] running MPI application and using C/R OpenMPI 1.5.3<br>
<strong>From:</strong> Marcin Zielinski (<em>Marcin.Zielinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-30 05:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16656.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16654.php">Yevgeny Kliteynik: "Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>After looking for various topics to solve my problem, I'm forced to turn 
<br>
to You all in here. Tho I have to say, I did not find the following 
<br>
problem yet. Could be something amazingly easy to solve.
<br>
<p>Anyways, I'm running a MPI application, compiled with an OpenMPI 1.5.3. 
<br>
OpenMPI 1.5.3 been compiled with BLCR support. BLCR been compiled with 
<br>
no errors and works fine. The configure looks like this:
<br>
export CC='icc'
<br>
export CXX='icpc'
<br>
export F77='ifort'
<br>
export FC='ifort'
<br>
export F90='ifort'
<br>
export FCFLAGS='-O2'
<br>
export FFLAGS='-O2'
<br>
export CFLAGS='-O2'
<br>
export CXXFLAGS='-O2'
<br>
export OMP_NUM_THREADS='1'
<br>
# export CPP='cpp'
<br>
<p>export LD_RUNPATH=$installdir/lib
<br>
<p>make clean
<br>
./configure --prefix=$installdir \
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;--with-openib=$ofed \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;--enable-ft-thread \
<br>
&nbsp;&nbsp;&nbsp;--with-ft=cr \
<br>
&nbsp;&nbsp;&nbsp;--with-blcr=/path_to_blcr_0.8.2_build_dir/ \
<br>
&nbsp;&nbsp;&nbsp;--with-blcr-libdir=/path_to_blcr_lib_dir/ \
<br>
&nbsp;&nbsp;&nbsp;--disable-dlopen      \
<br>
&nbsp;&nbsp;&nbsp;&amp;&amp;                     \
<br>
make &amp;&amp; make install || exit
<br>
<p>ifort and icc are:
<br>
$ ifort --version
<br>
ifort (IFORT) 11.0 20080930 / 11.0.069 64bit
<br>
<p>$ icc --version
<br>
icc (ICC) 11.0 20080930 / 11.0.074 64bit
<br>
<p>The MPI application (let's skip the name and what it does) runs 
<br>
perfectly fine when invoking:
<br>
mpirun ./myapp &lt; &lt;inputfile for myapp&gt; (running serial on parallel code)
<br>
<p>and when invoking:
<br>
mpirun -n &lt;nr of cores&gt; ./myapp &lt; &lt;inputfile for myapp&gt;
<br>
<p>In both cases it always produces the right results from calculations.
<br>
<p>Now, enabling C/R works for one case only:
<br>
mpirun -am ft-enable-cr ./myapp &lt; &lt;inputfile for myapp&gt; (running serial 
<br>
on parallel code with C/R enabled)
<br>
<p>later on, invoking ompi-checkpoint -s --term &lt;MPIRUN PID&gt;
<br>
produces a nice global snapshot and
<br>
ompi-restart &lt;GLOBAL SNAPSHOT NAME&gt;
<br>
re-runs the calculations from the checkpointed point perfectly fine, 
<br>
finishing it to the end with a proper results.
<br>
<p>Now, invoking
<br>
mpirun -n &lt;nr of cores &gt; 1&gt; -am ft-enable-cr ./myapp &lt; &lt;inputfile for myapp&gt;
<br>
<p>and checkpointing:
<br>
ompi-checkpoint -s --term &lt;MPIRUN PID&gt;
<br>
produces the following error for myapp (in case of -n 2):
<br>
<p>forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
[hostname:29664] local) Error: Unable to read state from named pipe 
<br>
(/global_dir/opal_cr_prog_write.29666). 0
<br>
[hostname:29664] [[27518,0],0] ORTE_ERROR_LOG: Error in file 
<br>
snapc_full_local.c at line 1602
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 29666 on
<br>
node hostname exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>The /global_dir/, /local_dir/ and /tmp_dir/ are all write/readable by 
<br>
the user which invokes the mpirun myapp.
<br>
<p>Any suggestions on top of You heads ?
<br>
I would appreciate any help on this.
<br>
<p>Best regards,
<br>
<pre>
-- 
Marcin Zielinski
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16656.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16654.php">Yevgeny Kliteynik: "Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
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
