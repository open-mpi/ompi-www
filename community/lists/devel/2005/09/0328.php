<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 11:14:20 2005" -->
<!-- isoreceived="20050912161420" -->
<!-- sent="Mon, 12 Sep 2005 11:14:18 -0500" -->
<!-- isosent="20050912161418" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="A148A0F0-4C8C-4DF6-9347-47911C3E1C08_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126538610.17629.27.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-12 11:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the heads up.  We are not seeing this on other platforms,  
<br>
so it might be a Sparc-specific issue.  Any chance you could compile  
<br>
with debugging symbols and generate a backtrace?  Also, could you  
<br>
send the contents of /proc/cpuinfo (long story...)?
<br>
<p>Thanks!
<br>
<p>Brian
<br>
<p>On Sep 12, 2005, at 10:23 AM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; Sorry if this is old news, configuration problem, or whatever.  I have
</span><br>
<span class="quotelev1">&gt; been tied up with other things, and have not been able to follow ompi
</span><br>
<span class="quotelev1">&gt; very closely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just built openmpi-1.0a1r7305 for testing, and notice that ompi_info
</span><br>
<span class="quotelev1">&gt; (and all other ompi tests) give
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component linux open function failed
</span><br>
<span class="quotelev1">&gt; and eventually terminate with a Seg Fault.  Interestingly, the  
</span><br>
<span class="quotelev1">&gt; programs
</span><br>
<span class="quotelev1">&gt; do seem to run pretty much correctly otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System is sparc/linux (sparc64 in 32-bit user mode, SB1000).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output from 'ompi_info -a' is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Developer, Gentoo Linux (Sparc, Devrel)
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component linux open function failed
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.0a1r7305
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r7305
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0a1r7305
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r7305
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0a1r7305
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r7305
</span><br>
<span class="quotelev1">&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev1">&gt; Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
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
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev1">&gt; Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /homes/cache
</span><br>
<span class="quotelev1">&gt;                   Bindir: /homes/cache/bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /homes/cache/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /homes/cache/include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /homes/cache/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /homes/cache/etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: sparc64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: fmccor
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Sep 12 14:24:23 UTC 2005
</span><br>
<span class="quotelev1">&gt;           Configure host: polylepis
</span><br>
<span class="quotelev1">&gt;                 Built by: ferris
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Sep 12 14:42:46 UTC 2005
</span><br>
<span class="quotelev1">&gt;               Built host: polylepis
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 4
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 4
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -DNDEBUG -O2 -pipe -mcpu=ultrasparc3 -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -DNDEBUG -O2 -pipe -mcpu=ultrasparc3 - 
</span><br>
<span class="quotelev1">&gt; finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -O2 -pipe   -mcpu=ultrasparc3
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lm  -lutil -lnsl
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:  -lutil -lnsl  -ldl  -Wl,--export-dynamic  
</span><br>
<span class="quotelev1">&gt; -lm -lutil -lnsl -ldl
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
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/homes/home0/ferris/.openmpi/mca-params.conf:/homes/cache/ 
</span><br>
<span class="quotelev1">&gt; etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files  
</span><br>
<span class="quotelev1">&gt; containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/homes/cache/lib/openmpi:/homes/home0/ferris/.openmpi/ 
</span><br>
<span class="quotelev1">&gt; components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components  
</span><br>
<span class="quotelev1">&gt; that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening  
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters  
</span><br>
<span class="quotelev1">&gt; checked at run-time or not.  Possible values are 0 (no checking)  
</span><br>
<span class="quotelev1">&gt; and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_signal&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the  
</span><br>
<span class="quotelev1">&gt; stack trace frame
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI  
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when  
</span><br>
<span class="quotelev1">&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications  
</span><br>
<span class="quotelev1">&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI  
</span><br>
<span class="quotelev1">&gt; handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when  
</span><br>
<span class="quotelev1">&gt; their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value  
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting  
</span><br>
<span class="quotelev1">&gt; this string to a valid filename tells Open MPI to dump all the MCA  
</span><br>
<span class="quotelev1">&gt; parameter values into a file suitable for reading via the  
</span><br>
<span class="quotelev1">&gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the  
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes  
</span><br>
<span class="quotelev1">&gt; to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           leave_pinned
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output  
</span><br>
<span class="quotelev1">&gt; for all ORTE components (0 or 1)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           memory
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;memory_malloc_hooks_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           paffinity
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           maffinity
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           timer
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           allocator
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           coll
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request  
</span><br>
<span class="quotelev1">&gt; freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           io
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_size&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           pml
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_teg_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_teg_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_teg_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_teg_poll_iterations&quot; (current value: &quot;100000&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_teg_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_uniq_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_uniq_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_uniq_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_uniq_poll_iterations&quot; (current value: &quot;100000&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_uniq_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &quot;ob1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ptl
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_self_buffer_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_self_nonblocking&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_first_frag_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_first_frag_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_first_frag_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_second_frag_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_second_frag_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_second_frag_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_first_fragment_size&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_max_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_fragment_alignment&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_first_frag_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_min_frag_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ptl_tcp_max_frag_size&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_frag_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_base_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: parameter &quot;ptl_base_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is  
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           btl
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_num&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;256&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_max&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           topo
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           errmgr
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           gpr
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           iof
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ns
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           oob
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ras
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_host_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_host_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_base_schedule_policy&quot; (current value: &quot;slot&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_tm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           rds
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/homes/cache/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           rmaps
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_base&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           rmgr
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           rml
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_fork_reap&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_fork_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_fork_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output  
</span><br>
<span class="quotelev1">&gt; for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to  
</span><br>
<span class="quotelev1">&gt; invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls  
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of  
</span><br>
<span class="quotelev1">&gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is  
</span><br>
<span class="quotelev1">&gt; true, or the top-level MCA debugging is enabled (otherwise this  
</span><br>
<span class="quotelev1">&gt; value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes  
</span><br>
<span class="quotelev1">&gt; to complete before exiting.  Otherwise, quit immediately -- without  
</span><br>
<span class="quotelev1">&gt; waiting for confirmation that all other processes in the job have  
</span><br>
<span class="quotelev1">&gt; completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the  
</span><br>
<span class="quotelev1">&gt; remote node is the same as the shell on the local node.  Otherwise,  
</span><br>
<span class="quotelev1">&gt; probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;ssh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on  
</span><br>
<span class="quotelev1">&gt; remote nodes (typically either &quot;rsh&quot; or &quot;ssh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_tm_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of TM pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_tm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_tm_orted&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           sds
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA soh: parameter &quot;soh_base&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           soh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
