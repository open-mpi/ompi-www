<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 11:42:23 2005" -->
<!-- isoreceived="20051122164223" -->
<!-- sent="Tue, 22 Nov 2005 10:42:14 -0600 (CST)" -->
<!-- isosent="20051122164214" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE" -->
<!-- id="Pine.LNX.4.58.0511221017400.23144_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d2c0c8b04c267c93531f126e45155b2e_at_open-mpi.org" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-22 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for fixing this.  Will there be a patched release of openmpi
<br>
that will contain this fix anytime soon ?  (In the meantime, I could do a
<br>
anonymous read on the svn repository.)
<br>
<p>A.Chan
<br>
<p>On Tue, 22 Nov 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Whoops!  We forgot to instantiate these -- thanks for catching that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just committed fixes to both the trunk and the v1.0 branch.
</span><br>
<span class="quotelev1">&gt; This also prompted the addition of the following text in the README
</span><br>
<span class="quotelev1">&gt; file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; - Open MPI will build bindings suitable for all common forms of
</span><br>
<span class="quotelev1">&gt;    Fortran 77 compiler symbol mangling on platforms that support it
</span><br>
<span class="quotelev1">&gt;    (e.g., Linux).  On platforms that do not support weak symbols (e.g.,
</span><br>
<span class="quotelev1">&gt;    OS X), Open MPI will build Fortran 77 bindings just for the compiler
</span><br>
<span class="quotelev1">&gt;    that Open MPI was configured with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Hence, on platforms that support it, if you configure Open MPI with
</span><br>
<span class="quotelev1">&gt;    a Fortran 77 compiler that uses one symbol mangling scheme, you can
</span><br>
<span class="quotelev1">&gt;    successfully compile and link MPI Fortran 77 applications with a
</span><br>
<span class="quotelev1">&gt;    Fortran 77 compiler that uses a different symbol mangling scheme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    NOTE: For platforms that support the multi-Fortran-compiler bindings
</span><br>
<span class="quotelev1">&gt;    (i.e., weak symbols are supported), due to limitations in the MPI
</span><br>
<span class="quotelev1">&gt;    standard and in Fortran compilers, it is not possible to hide these
</span><br>
<span class="quotelev1">&gt;    differences in all cases.  Specifically, the following two cases may
</span><br>
<span class="quotelev1">&gt;    not be portable between different Fortran compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
</span><br>
<span class="quotelev1">&gt;       will only compare properly to Fortran applications that were
</span><br>
<span class="quotelev1">&gt;       created with Fortran compilers that that use the same
</span><br>
<span class="quotelev1">&gt;       name-mangling scheme as the Fortran compiler that Open MPI was
</span><br>
<span class="quotelev1">&gt;       configured with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    2. Fortran compilers may have different values for the logical
</span><br>
<span class="quotelev1">&gt;       .TRUE. constant.  As such, any MPI function that uses the fortran
</span><br>
<span class="quotelev1">&gt;       LOGICAL type may only get .TRUE. values back that correspond to
</span><br>
<span class="quotelev1">&gt;       the the .TRUE. value of the Fortran compiler that Open MPI was
</span><br>
<span class="quotelev1">&gt;       configured with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    You can use the ompi_info command to see the Fortran compiler that
</span><br>
<span class="quotelev1">&gt;    Open MPI was configured with.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2005, at 12:49 AM, Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Linking the following program with mpicc from openmpi-1.0 compiled
</span><br>
<span class="quotelev2">&gt; &gt; with gcc-4.0 on a IA32 linux box
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *************************
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main() {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int argc; char **argv;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Fint *f_status;
</span><br>
<span class="quotelev2">&gt; &gt;                        ;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; f_status = MPI_F_STATUS_IGNORE;
</span><br>
<span class="quotelev2">&gt; &gt; f_status = MPI_F_STATUSES_IGNORE;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ; return 0; }
</span><br>
<span class="quotelev2">&gt; &gt; **************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with command &quot;&lt;openmpi-1.0&gt;/bin/mpicc ts_MPI_F_STATUS_IGNORE.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt; produces
</span><br>
<span class="quotelev2">&gt; &gt; unresolved references of MPI_F_STATUS(ES)_IGNORE (which are both
</span><br>
<span class="quotelev2">&gt; &gt; defined
</span><br>
<span class="quotelev2">&gt; &gt; in mpi.h).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is ompi_info:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI: 1.0r8189    Open MPI SVN revision: r8189
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.0r8189
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE SVN revision: r8189
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.0r8189
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL SVN revision: r8189
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 compiler:
</span><br>
<span class="quotelev2">&gt; &gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev2">&gt; &gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 compiler:
</span><br>
<span class="quotelev2">&gt; &gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev2">&gt; &gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: 1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A.Chan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
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
