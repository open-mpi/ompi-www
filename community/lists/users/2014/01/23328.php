<?
$subject_val = "Re: [OMPI users] Regression: Fortran derived types with newer MPI module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 22:09:09 2014" -->
<!-- isoreceived="20140108030909" -->
<!-- sent="Wed, 8 Jan 2014 03:09:08 +0000" -->
<!-- isosent="20140108030908" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression: Fortran derived types with newer MPI module" -->
<!-- id="D67B125C-F83F-4ADE-9AB8-6BDF51243286_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zjn8flzy.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression: Fortran derived types with newer MPI module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 22:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23327.php">Jed Brown: "[OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23327.php">Jed Brown: "[OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I can explain what's going on here.  The short version is that a change was made with the intent to provide maximum Fortran code safety, but with a possible backwards compatibility issue.  If this change is causing real problems, we can probably change this, but I'd like a little feedback from the Fortran MPI dev community first.
<br>
<p>It's a complex issue, and requires a little background and discussion, sorry...
<br>
<p>a) Back in the 1.6.x series, we allowed users to build multiple variants of the &quot;use mpi&quot; Fortran interface:
<br>
<p>- tiny: only the MPI_SIZEOF subroutine
<br>
- small: tiny + all MPI subroutines that did not take choice buffers, and the MPI functions (WTICK, WTIME)
<br>
- medium: small + all MPI subroutines that take 1 choice buffer (e.g., MPI_SEND)
<br>
- large: all MPI subroutines (even those that take 2 choice buffers, such as collectives)
<br>
&nbsp;&nbsp;--&gt; Note: the &quot;large&quot; size never really worked for uninteresting reasons.  It won't be fixed.
<br>
<p>See the OMPI 1.6.x README for more details.
<br>
<p>The default is &quot;small&quot; in the 1.6.x series.  This means that when you call MPI_SEND (and any other function that takes a choice buffer), you are not getting an MPI-implementation-provided prototype for that function -- it's essentially the same as how everyone has implemented mpif.h (i.e., no prototypes).
<br>
<p>This is why you are able to compile your code in OMPI 1.6.x with &quot;use mpi&quot; -- because there is no prototype for MPI_SEND in the mpi module.  Heck, you could even:
<br>
<p>&nbsp;&nbsp;! Don't pass enough params to MPI_SEND
<br>
&nbsp;&nbsp;call MPI_Send(bogus)
<br>
<p>and it would compile and link.  It will likely segv at run time, but that's a different issue.
<br>
<p>b) I *believe* that MPICH does the equivalent of &quot;tiny&quot;, but I'm not going to swear to that (meaning: you're not getting any prototypes for any MPI subroutines other than MPI_SIZEOF).
<br>
<p>This is why you are able to compile your code with MPICH and &quot;use mpi&quot; -- same disclaimers as a) (i.e., you get no compile-time protection for when you don't call MPI subroutines properly).
<br>
<p>c) The design of the MPI-2 &quot;mpi&quot; module has multiple flaws that are identified in the MPI-3 text (but were not recognized back in MPI-2.x days).  Here's one: until F2008+addendums, there was no Fortran equivalent of &quot;void *&quot;.  Hence, the mpi module has to overload MPI_Send() and have a prototype *for every possible type and dimension*.
<br>
<p>The OMPI &quot;medium&quot; implementation actually provides overloaded prototypes for all pre-defined Fortran datatypes (INTEGER, REAL, ...etc.), for scalars and, by default, array ranks up to 4.  Fortran &lt;2003 allows up to... er... I think ?7?... dimensional arrays, but providing an overloaded interface for each scalar type and all array dimensions for each type explodes the number of overloaded prototypes in the mpi module; most compilers that we tested several years ago would segv with this many interfaces in a single module.
<br>
<p>It gets worse with the MPI subroutines that take multiple choice buffers: you get an exponential explosion of interfaces.  IIRC, a fully-populated mpi &quot;large&quot; module would contain over 5 million interfaces.
<br>
<p>Craig Rasmussen and I wrote a paper about this in EuroMPI 2005 (<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/</a>).  It was one of the issues that eventually led to the creation of the MPI-3 mpi_f08 module.
<br>
<p>Here's another fatal flaw: it's not possible for an MPI implementation to provide MPI_Send() prototypes for user-defined Fortran datatypes.  Hence, the example you cite is a pipe dream for the &quot;mpi&quot; module because there's no way to specify a (void*)-like argument for the choice buffer.  
<br>
<p>Meaning: Fortran MPI apps can either have compile-time safety or user-defined datatypes as choice buffers.  Pick one.
<br>
<p>d) A solution to the problems listed in c) is to use non-standard, compiler-specific &quot;ignore TKR&quot; functionality in the mpi module implementation, which effectively provides (void*) functionality.  Hence, an implementation can have a *single* MPI_SEND subroutine interface, and use a pragma to ignore the type, kind, and rank of the choice buffer parameter.
<br>
<p>OMPI 1.7 and beyond actually has 2 different implementations of the mpi module:
<br>
<p>- the old tiny/small/medium-based interface for compilers that do not support &quot;ignore TKR&quot; pragmas (i.e., gfortran)
<br>
- a new ignore-TKR-based module that prototypes all MPI subroutines and functions
<br>
<p>Meaning: OMPI 1.7 with non-gfortran works great (i.e., your sample code compiles).  OMPI 1.7 with gfortran is *mostly* the same as it was in 1.6, except that we changed the default from &quot;small&quot; to &quot;medium&quot;.
<br>
<p>*** This is what is causing your problem.  In OMPI 1.6, we didn't provide an interface for MPI_SEND by default.  In OMPI 1.7, we do.
<br>
<p>Craig Rasmussen and I debated long and hard about whether to change the default from &quot;small&quot; to &quot;medium&quot; or not.  We finally ended up doing it with the following rationale:
<br>
<p>- very few codes use the &quot;mpi&quot; module
<br>
- but those who do should have the maximum amount of compile-time protection
<br>
<p>...but we always knew that someone may come complaining some day.  And that day has now come.
<br>
<p>So my question to you / the Fortran MPI dev community is: what do you want (for gfortran)?  
<br>
<p>Do you want us to go back to the &quot;small&quot; size by default, or do you want more compile-time protection by default?  (with the obvious caveat that you can't use user-defined Fortran datatypes as choice buffers; you might be able to use something like c_loc, but I haven't thought deeply about this and don't know offhand if that works)
<br>
<p><p><p>On Jan 6, 2014, at 11:34 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The attached code is from the example on page 629-630 (17.1.15 Fortran
</span><br>
<span class="quotelev1">&gt; Derived Types) of MPI-3.  This compiles cleanly with MPICH and with OMPI
</span><br>
<span class="quotelev1">&gt; 1.6.5, but not with the latest OMPI.  Arrays higher than rank 4 would
</span><br>
<span class="quotelev1">&gt; have a similar problem since they are not enumerated.  Did someone
</span><br>
<span class="quotelev1">&gt; decide that a necessarily-incomplete enumeration of types was &quot;good
</span><br>
<span class="quotelev1">&gt; enough&quot; and that other users should use some other workaround?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ~/usr/ompi/bin/mpifort -c struct.f90 
</span><br>
<span class="quotelev1">&gt; struct.f90:40.55:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_SEND(foo, 1, newtype, dest, tag, comm, ierr)
</span><br>
<span class="quotelev1">&gt;                                                       1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_send' at (1)
</span><br>
<span class="quotelev1">&gt; struct.f90:43.48:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(fooarr(1), disp(1), ierr)
</span><br>
<span class="quotelev1">&gt;                                                1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_get_address' at (1)
</span><br>
<span class="quotelev1">&gt; struct.f90:44.48:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(fooarr(2), disp(2), ierr)
</span><br>
<span class="quotelev1">&gt;                                                1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_get_address' at (1)
</span><br>
<span class="quotelev1">&gt; struct.f90:50.61:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_SEND(fooarr, 5, newarrtype, dest, tag, comm, ierr)
</span><br>
<span class="quotelev1">&gt;                                                             1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_send' at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ~/usr/ompi/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI jed_at_batura Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: r29531M
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Oct 26, 2013
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.9a1
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: r29531M
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Oct 26, 2013
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.9a1
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: r29531M
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Oct 26, 2013
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.2
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.9a1
</span><br>
<span class="quotelev1">&gt;                  Prefix: /home/jed/usr/ompi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: batura
</span><br>
<span class="quotelev1">&gt;           Configured by: jed
</span><br>
<span class="quotelev1">&gt;           Configured on: Mon Jan  6 19:38:01 CST 2014
</span><br>
<span class="quotelev1">&gt;          Configure host: batura
</span><br>
<span class="quotelev1">&gt;                Built by: jed
</span><br>
<span class="quotelev1">&gt;                Built on: Mon Jan  6 19:49:41 CST 2014
</span><br>
<span class="quotelev1">&gt;              Built host: batura
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: no
</span><br>
<span class="quotelev1">&gt;             Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;            Fort use mpi: yes (limited: overloading)
</span><br>
<span class="quotelev1">&gt;       Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;        Fort use mpi_f08: no
</span><br>
<span class="quotelev1">&gt; Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;           Java bindings: no
</span><br>
<span class="quotelev1">&gt;  Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.8.2
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;           Fort compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fort compiler abs: 
</span><br>
<span class="quotelev1">&gt;         Fort ignore TKR: no
</span><br>
<span class="quotelev1">&gt;   Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;      Fort optional args: no
</span><br>
<span class="quotelev1">&gt;            Fort BIND(C): no
</span><br>
<span class="quotelev1">&gt;            Fort PRIVATE: no
</span><br>
<span class="quotelev1">&gt;           Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;       Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;          Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt; Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: no
</span><br>
<span class="quotelev1">&gt;   Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;  Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;  MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;   Host topology support: yes
</span><br>
<span class="quotelev1">&gt;          MPI extensions: 
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;   C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;     VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA compress: bzip (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA compress: gzip (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: none (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA db: hash (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA db: print (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA hwloc: external (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;          MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA pstat: linux (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: app (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dfs: test (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_orted (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v3.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA filem: raw (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: simulator (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: app (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: hnp (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: novm (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA state: tool (MCA v2.0, API v1.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: vader (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: ml (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: static (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA fs: ufs (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA io: ompio (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                 MCA rte: orte (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;            MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt;                MCA topo: basic (MCA v2.0, API v2.1, Component v1.9)
</span><br>
<span class="quotelev1">&gt;           MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.9)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine foobar
</span><br>
<span class="quotelev1">&gt;  use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  type, BIND(C) :: mytype
</span><br>
<span class="quotelev1">&gt;     integer :: i
</span><br>
<span class="quotelev1">&gt;     real :: x
</span><br>
<span class="quotelev1">&gt;     double precision :: d
</span><br>
<span class="quotelev1">&gt;     logical :: l
</span><br>
<span class="quotelev1">&gt;  end type mytype
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  type(mytype) :: foo, fooarr(5)
</span><br>
<span class="quotelev1">&gt;  integer :: blocklen(4), type(4)
</span><br>
<span class="quotelev1">&gt;  integer(KIND=MPI_ADDRESS_KIND) :: disp(4), base, lb, extent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(foo%i, disp(1), ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(foo%x, disp(2), ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(foo%d, disp(3), ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(foo%l, disp(4), ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  base = disp(1)
</span><br>
<span class="quotelev1">&gt;  disp(1) = disp(1) - base
</span><br>
<span class="quotelev1">&gt;  disp(2) = disp(2) - base
</span><br>
<span class="quotelev1">&gt;  disp(3) = disp(3) - base
</span><br>
<span class="quotelev1">&gt;  disp(4) = disp(4) - base
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  blocklen(1) = 1
</span><br>
<span class="quotelev1">&gt;  blocklen(2) = 1
</span><br>
<span class="quotelev1">&gt;  blocklen(3) = 1
</span><br>
<span class="quotelev1">&gt;  blocklen(4) = 1
</span><br>
<span class="quotelev1">&gt;  type(1) = MPI_INTEGER
</span><br>
<span class="quotelev1">&gt;  type(2) = MPI_REAL
</span><br>
<span class="quotelev1">&gt;  type(3) = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;  type(4) = MPI_LOGICAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_CREATE_STRUCT(4, blocklen, disp, type, newtype, ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_COMMIT(newtype, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ! call MPI_SEND(foo%i, 1, newtype, dest, tag, comm, ierr)
</span><br>
<span class="quotelev1">&gt;  ! or
</span><br>
<span class="quotelev1">&gt;  call MPI_SEND(foo, 1, newtype, dest, tag, comm, ierr)
</span><br>
<span class="quotelev1">&gt;  ! expects that base == address(foo%i) == address(foo)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(fooarr(1), disp(1), ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_GET_ADDRESS(fooarr(2), disp(2), ierr)
</span><br>
<span class="quotelev1">&gt;  extent = disp(2) - disp(1)
</span><br>
<span class="quotelev1">&gt;  lb = 0
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_CREATE_RESIZED(newtype, lb, extent, newarrtype, ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_COMMIT(newarrtype, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call MPI_SEND(fooarr, 5, newarrtype, dest, tag, comm, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end subroutine foobar
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23327.php">Jed Brown: "[OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23327.php">Jed Brown: "[OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
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
