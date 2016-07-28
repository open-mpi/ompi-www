<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 10:36:19 2005" -->
<!-- isoreceived="20051122153619" -->
<!-- sent="Tue, 22 Nov 2005 10:36:07 -0500" -->
<!-- isosent="20051122153607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE" -->
<!-- id="d2c0c8b04c267c93531f126e45155b2e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0511212327020.23510_at_schwinn.mcs.anl.gov" -->
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
<strong>Date:</strong> 2005-11-22 10:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops!  We forgot to instantiate these -- thanks for catching that.
<br>
<p>I have just committed fixes to both the trunk and the v1.0 branch.  
<br>
This also prompted the addition of the following text in the README 
<br>
file:
<br>
<p>-----
<br>
- Open MPI will build bindings suitable for all common forms of
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler symbol mangling on platforms that support it
<br>
&nbsp;&nbsp;&nbsp;(e.g., Linux).  On platforms that do not support weak symbols (e.g.,
<br>
&nbsp;&nbsp;&nbsp;OS X), Open MPI will build Fortran 77 bindings just for the compiler
<br>
&nbsp;&nbsp;&nbsp;that Open MPI was configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;Hence, on platforms that support it, if you configure Open MPI with
<br>
&nbsp;&nbsp;&nbsp;a Fortran 77 compiler that uses one symbol mangling scheme, you can
<br>
&nbsp;&nbsp;&nbsp;successfully compile and link MPI Fortran 77 applications with a
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler that uses a different symbol mangling scheme.
<br>
<p>&nbsp;&nbsp;&nbsp;NOTE: For platforms that support the multi-Fortran-compiler bindings
<br>
&nbsp;&nbsp;&nbsp;(i.e., weak symbols are supported), due to limitations in the MPI
<br>
&nbsp;&nbsp;&nbsp;standard and in Fortran compilers, it is not possible to hide these
<br>
&nbsp;&nbsp;&nbsp;differences in all cases.  Specifically, the following two cases may
<br>
&nbsp;&nbsp;&nbsp;not be portable between different Fortran compilers:
<br>
<p>&nbsp;&nbsp;&nbsp;1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will only compare properly to Fortran applications that were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;created with Fortran compilers that that use the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name-mangling scheme as the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;2. Fortran compilers may have different values for the logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. constant.  As such, any MPI function that uses the fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL type may only get .TRUE. values back that correspond to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the the .TRUE. value of the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;You can use the ompi_info command to see the Fortran compiler that
<br>
&nbsp;&nbsp;&nbsp;Open MPI was configured with.
<br>
-----
<br>
<p><p>On Nov 22, 2005, at 12:49 AM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linking the following program with mpicc from openmpi-1.0 compiled
</span><br>
<span class="quotelev1">&gt; with gcc-4.0 on a IA32 linux box
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int argc; char **argv;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Fint *f_status;
</span><br>
<span class="quotelev1">&gt;                        ;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; f_status = MPI_F_STATUS_IGNORE;
</span><br>
<span class="quotelev1">&gt; f_status = MPI_F_STATUSES_IGNORE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ; return 0; }
</span><br>
<span class="quotelev1">&gt; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with command &quot;&lt;openmpi-1.0&gt;/bin/mpicc ts_MPI_F_STATUS_IGNORE.c&quot; 
</span><br>
<span class="quotelev1">&gt; produces
</span><br>
<span class="quotelev1">&gt; unresolved references of MPI_F_STATUS(ES)_IGNORE (which are both 
</span><br>
<span class="quotelev1">&gt; defined
</span><br>
<span class="quotelev1">&gt; in mpi.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.0r8189    Open MPI SVN revision: r8189
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0r8189
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r8189
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0r8189
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r8189
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;               C compiler: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt;             C++ compiler: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: 
</span><br>
<span class="quotelev1">&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: 
</span><br>
<span class="quotelev1">&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: 
</span><br>
<span class="quotelev1">&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: 
</span><br>
<span class="quotelev1">&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
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
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
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
