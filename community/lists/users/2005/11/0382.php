<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 11:58:35 2005" -->
<!-- isoreceived="20051122165835" -->
<!-- sent="Tue, 22 Nov 2005 11:58:23 -0500" -->
<!-- isosent="20051122165823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE" -->
<!-- id="e74ee5d54a0a010ab81cef2adb648f06_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0511221017400.23144_at_schwinn.mcs.anl.gov" -->
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
<strong>Date:</strong> 2005-11-22 11:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.  I actually announced last night on the devel list that 1.0.1 will 
<br>
be forthcoming shortly.  During the release process, I goofed and 
<br>
accidentally left out a shared memory bug fix (it's on the trunk; it 
<br>
didn't make it to the v1.0 branch before release).  The bug only shows 
<br>
up on specific platforms -- basically, if you can successfully complete 
<br>
MPI_INIT, everything is fine (i.e., the bug fix is not critical for 
<br>
you).  But if you seg fault in the shared memory setup during MPI_INIT, 
<br>
your platform needs the bug fix that is coming in 1.0.1.
<br>
<p>Here's what we have in the NEWS file for 1.0.1:
<br>
<p>- Fix missing MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;instanatiations.  Thanks to Anthony Chan for pointing this out.
<br>
- Add a missing value for MPI_WIN_NULL in mpif.h.
<br>
- Bring over some fixes for the sm btl that somehow didn't make it
<br>
&nbsp;&nbsp;&nbsp;over from the trunk before v1.0.  Thanks to Beth Tibbitts and Bill
<br>
&nbsp;&nbsp;&nbsp;Chung for helping identify this issue.
<br>
- Bring over some fixes for the iof that somehow didn't make it over
<br>
&nbsp;&nbsp;&nbsp;from the trunk before v1.0.
<br>
- Fix for --with-wrapper-ldflags handling.  Thanks to Dries Kimpe for
<br>
&nbsp;&nbsp;&nbsp;pointing this out to us.
<br>
<p><p><p>On Nov 22, 2005, at 11:42 AM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for fixing this.  Will there be a patched release of openmpi
</span><br>
<span class="quotelev1">&gt; that will contain this fix anytime soon ?  (In the meantime, I could 
</span><br>
<span class="quotelev1">&gt; do a
</span><br>
<span class="quotelev1">&gt; anonymous read on the svn repository.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 22 Nov 2005, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whoops!  We forgot to instantiate these -- thanks for catching that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have just committed fixes to both the trunk and the v1.0 branch.
</span><br>
<span class="quotelev2">&gt;&gt; This also prompted the addition of the following text in the README
</span><br>
<span class="quotelev2">&gt;&gt; file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; - Open MPI will build bindings suitable for all common forms of
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran 77 compiler symbol mangling on platforms that support it
</span><br>
<span class="quotelev2">&gt;&gt;    (e.g., Linux).  On platforms that do not support weak symbols 
</span><br>
<span class="quotelev2">&gt;&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;    OS X), Open MPI will build Fortran 77 bindings just for the 
</span><br>
<span class="quotelev2">&gt;&gt; compiler
</span><br>
<span class="quotelev2">&gt;&gt;    that Open MPI was configured with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Hence, on platforms that support it, if you configure Open MPI with
</span><br>
<span class="quotelev2">&gt;&gt;    a Fortran 77 compiler that uses one symbol mangling scheme, you can
</span><br>
<span class="quotelev2">&gt;&gt;    successfully compile and link MPI Fortran 77 applications with a
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran 77 compiler that uses a different symbol mangling scheme.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    NOTE: For platforms that support the multi-Fortran-compiler 
</span><br>
<span class="quotelev2">&gt;&gt; bindings
</span><br>
<span class="quotelev2">&gt;&gt;    (i.e., weak symbols are supported), due to limitations in the MPI
</span><br>
<span class="quotelev2">&gt;&gt;    standard and in Fortran compilers, it is not possible to hide these
</span><br>
<span class="quotelev2">&gt;&gt;    differences in all cases.  Specifically, the following two cases 
</span><br>
<span class="quotelev2">&gt;&gt; may
</span><br>
<span class="quotelev2">&gt;&gt;    not be portable between different Fortran compilers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
</span><br>
<span class="quotelev2">&gt;&gt;       will only compare properly to Fortran applications that were
</span><br>
<span class="quotelev2">&gt;&gt;       created with Fortran compilers that that use the same
</span><br>
<span class="quotelev2">&gt;&gt;       name-mangling scheme as the Fortran compiler that Open MPI was
</span><br>
<span class="quotelev2">&gt;&gt;       configured with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    2. Fortran compilers may have different values for the logical
</span><br>
<span class="quotelev2">&gt;&gt;       .TRUE. constant.  As such, any MPI function that uses the 
</span><br>
<span class="quotelev2">&gt;&gt; fortran
</span><br>
<span class="quotelev2">&gt;&gt;       LOGICAL type may only get .TRUE. values back that correspond to
</span><br>
<span class="quotelev2">&gt;&gt;       the the .TRUE. value of the Fortran compiler that Open MPI was
</span><br>
<span class="quotelev2">&gt;&gt;       configured with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    You can use the ompi_info command to see the Fortran compiler that
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI was configured with.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2005, at 12:49 AM, Anthony Chan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linking the following program with mpicc from openmpi-1.0 compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with gcc-4.0 on a IA32 linux box
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int argc; char **argv;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint *f_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f_status = MPI_F_STATUS_IGNORE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f_status = MPI_F_STATUSES_IGNORE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ; return 0; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with command &quot;&lt;openmpi-1.0&gt;/bin/mpicc ts_MPI_F_STATUS_IGNORE.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produces
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolved references of MPI_F_STATUS(ES)_IGNORE (which are both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in mpi.h).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is ompi_info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI: 1.0r8189    Open MPI SVN revision: r8189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.0r8189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r8189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.0r8189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r8189
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A.Chan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Anthony Chan: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
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
