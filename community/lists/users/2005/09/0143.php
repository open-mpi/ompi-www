<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 15:44:30 2005" -->
<!-- isoreceived="20050914204430" -->
<!-- sent="Wed, 14 Sep 2005 14:44:26 -0600" -->
<!-- isosent="20050914204426" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] attempt to override read-only MCA parameter	&amp;quot;orte_infrastructure&amp;quot;" -->
<!-- id="43288BAA.6050105_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050914193923.GA24727_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 15:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Daryl,
<br>
<p>I believe there is a problem w/ the latest version of the bproc launcher...
<br>
<p>Try running w/ the following to use an older version:
<br>
<p>mpirun -mca pls_bproc_seed_priority 101 &lt;rest-of-args&gt;
<br>
<p>This could also be set in your system default or local MCA
<br>
parameter file.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Daryl W. Grunau wrote:
<br>
<span class="quotelev1">&gt; Hi, I downloaded/installed version 1.0a1r7337 configured to run on my BProcV4
</span><br>
<span class="quotelev1">&gt; IB cluster (mvapi, for now).  Upon execution, I get the following warning
</span><br>
<span class="quotelev1">&gt; message, however the app appears to run to completion afterwards:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    WARNING: A user-supplied value attempted to override the read-only MCA
</span><br>
<span class="quotelev1">&gt;    parameter named &quot;orte_infrastructure&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The user-supplied value was ignored.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't set any MCA parameters in ~/.openmpi/* and the system default
</span><br>
<span class="quotelev1">&gt; contains nothing but comments.  Any information about this warning greatly
</span><br>
<span class="quotelev1">&gt; appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.s.  My configure line consisted of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --disable-shared --enable-static --enable-io-romio --with-bproc --with-mvapi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; together with the defaults provided during the configuration stage.  Output
</span><br>
<span class="quotelev1">&gt; of ompi_info is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    %  ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.0a1r7337
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r7337
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0a1r7337
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r7337
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0a1r7337
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r7337
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/OpenMPI/openmpi-1.0a1r7337/ib
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Sep 14 09:04:33 MDT 2005
</span><br>
<span class="quotelev1">&gt;           Configure host: bluesteel.lanl.gov
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Sep 14 09:20:21 MDT 2005
</span><br>
<span class="quotelev1">&gt;               Built host: bluesteel.lanl.gov
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: 1
</span><br>
<span class="quotelev1">&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: host (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: bjs (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: lsf_bproc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: bproc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: bproc_orted (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: bproc_seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: bproc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA soh: bproc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the output of 'ompi_info --param all all':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %  ompi_info --param all all
</span><br>
<span class="quotelev1">&gt;    MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt; 	   &quot;/users/dwg/.openmpi/mca-params.conf:/opt/OpenMPI/openmpi-1.0a1r7337/ib/etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Path for MCA configuration files containing default parameter values
</span><br>
<span class="quotelev1">&gt;    MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt; 	   &quot;/opt/OpenMPI/openmpi-1.0a1r7337/ib/lib64/openmpi:/users/dwg/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;    MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;    MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;    MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether you want MPI API parameters checked at run-time or not.  Possible
</span><br>
<span class="quotelev1">&gt; 	   values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_signal&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   If a signal is received, display the stack trace frame
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Yield the processor when waiting for MPI communication (for MPI processes,
</span><br>
<span class="quotelev1">&gt; 	   will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   How often to progress TCP communications (0 = never, otherwise specified
</span><br>
<span class="quotelev1">&gt; 	   in microseconds)
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether to show all MCA parameter value during MPI_INIT or not (good for
</span><br>
<span class="quotelev1">&gt; 	   reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   If mpi_show_mca_params is true, setting this string to a valid filename
</span><br>
<span class="quotelev1">&gt; 	   tells Open MPI to dump all the MCA parameter values into a file suitable
</span><br>
<span class="quotelev1">&gt; 	   for reading via the mca_param_files parameter (good for reproducability of
</span><br>
<span class="quotelev1">&gt; 	   MPI jobs)
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If nonzero, assume that this job is the only (set of) process(es) running
</span><br>
<span class="quotelev1">&gt; 	   on each node and bind processes to processors, starting with processor ID
</span><br>
<span class="quotelev1">&gt; 	   0
</span><br>
<span class="quotelev1">&gt;    MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   leave_pinned
</span><br>
<span class="quotelev1">&gt;    MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether or not to enable debugging output for all ORTE components (0 or
</span><br>
<span class="quotelev1">&gt; 	   1)
</span><br>
<span class="quotelev1">&gt;    MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the memory framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA memory: parameter &quot;memory_malloc_hooks_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the paffinity framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt; 	   means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;    MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the maffinity framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt; 	   means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;    MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the timer framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the allocator framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt; 	   means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the coll framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the io framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;    MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the mpool framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool_sm_size&quot; (current value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA mpool: parameter &quot;mpool_mvapi_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml&quot; (current value: &quot;ob1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the pml framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the pml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_teg_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_teg_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_teg_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_teg_poll_iterations&quot; (current value: &quot;100000&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_teg_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_uniq_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_uniq_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_uniq_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_uniq_poll_iterations&quot; (current value: &quot;100000&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pml: parameter &quot;pml_uniq_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the ptl framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the ptl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_self_buffer_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_self_nonblocking&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_first_frag_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_first_frag_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_first_frag_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_second_frag_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_second_frag_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_second_frag_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_first_fragment_size&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_max_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_fragment_alignment&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_first_frag_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_min_frag_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_max_frag_size&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_frag_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA ptl: parameter &quot;ptl_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is
</span><br>
<span class="quotelev1">&gt; 	   output
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the btl framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_hints_log_size&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_mpool&quot; (current value: &quot;mvapi&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_rr_buf_max&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_rr_buf_min&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_reg_mru_len&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_use_srq&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_cq_size&quot; (current value: &quot;40000&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_wq_size&quot; (current value: &quot;10000&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_sg_list_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_pkey_ix&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_psn&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_mtu&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_min_rnr_timer&quot; (current value: &quot;24&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_retry_count&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_rnr_retry&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_max_rdma_dst_ops&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_service_level&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_static_rate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_ib_src_path_bits&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_rd_per_peer&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_eager_limit&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_min_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_max_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_flags&quot; (current value: &quot;6&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_max_wr_sq_tokens&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Maximum number of send/rdma work request tokens
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_mvapi_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the topo framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the errmgr framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the gpr framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_base_window_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the iof framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_proxy_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the ns framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the oob framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;    MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the ras framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_host_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_host_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_base_schedule_policy&quot; (current value: &quot;slot&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_bjs_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_bjs_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_lsf_bproc_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA ras: parameter &quot;ras_lsf_bproc_priority&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the rds framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_hostfile_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt; 	   &quot;/opt/OpenMPI/openmpi-1.0a1r7337/ib/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt; 	   ORTE Host filename
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;    MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the rmaps framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the rmgr framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the rml framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the pls framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection priority
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_slurm_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_slurm_args&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If &gt; 0 prints library debugging information
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_terminate_sig&quot; (current value: &quot;9&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Signal sent to processes to terminate them
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Path to where orted is installed
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_orted_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_orted_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If &gt; 0 prints library debugging information
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_seed_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_seed_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_seed_image_frag_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_seed_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_bproc_seed_terminate_sig&quot; (current value: &quot;9&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_fork_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_fork_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_fork_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Whether or not to enable debugging output for the rsh pls component (0 or
</span><br>
<span class="quotelev1">&gt; 	   1)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt; 	   How many pls_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt; 	   The command name that the rsh pls component will invoke for the ORTE
</span><br>
<span class="quotelev1">&gt; 	   daemon
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Delay (in seconds) between invocations of the remote agent, but only used
</span><br>
<span class="quotelev1">&gt; 	   when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is
</span><br>
<span class="quotelev1">&gt; 	   enabled (otherwise this value is ignored)
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If set to 1, wait for all the processes to complete before exiting. 
</span><br>
<span class="quotelev1">&gt; 	   Otherwise, quit immediately -- without waiting for confirmation that all
</span><br>
<span class="quotelev1">&gt; 	   other processes in the job have completed.
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	   If set to 1, assume that the shell on the remote node is the same as the
</span><br>
<span class="quotelev1">&gt; 	   shell on the local node.  Otherwise, probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;    MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh&quot;)
</span><br>
<span class="quotelev1">&gt; 	   The command used to launch executables on remote nodes (typically either
</span><br>
<span class="quotelev1">&gt; 	   &quot;rsh&quot; or &quot;ssh&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the sds framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	   Verbosity level for the sds framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_slurm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_bproc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA soh: parameter &quot;soh&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; 	   Default selection set of components for the soh framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; 	   &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA soh: parameter &quot;soh_bproc_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;    MCA soh: parameter &quot;soh_bproc_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
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
