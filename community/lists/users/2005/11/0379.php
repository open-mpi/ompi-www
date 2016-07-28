<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 00:50:01 2005" -->
<!-- isoreceived="20051122055001" -->
<!-- sent="Mon, 21 Nov 2005 23:49:53 -0600 (CST)" -->
<!-- isosent="20051122054953" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="[O-MPI users] MPI_F_STATUS(ES)_IGNORE" -->
<!-- id="Pine.LNX.4.58.0511212327020.23510_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-11-22 00:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Linking the following program with mpicc from openmpi-1.0 compiled
<br>
with gcc-4.0 on a IA32 linux box
<br>
<p>*************************
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main() {
<br>
<p>int argc; char **argv;
<br>
<p>MPI_Fint *f_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>f_status = MPI_F_STATUS_IGNORE;
<br>
f_status = MPI_F_STATUSES_IGNORE;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;; return 0; }
<br>
**************************
<br>
<p>with command &quot;&lt;openmpi-1.0&gt;/bin/mpicc ts_MPI_F_STATUS_IGNORE.c&quot; produces
<br>
unresolved references of MPI_F_STATUS(ES)_IGNORE (which are both defined
<br>
in mpi.h).
<br>
<p>Here is ompi_info:
<br>
<p>Open MPI: 1.0r8189    Open MPI SVN revision: r8189
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0r8189
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r8189
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0r8189
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r8189
<br>
...
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/gcc-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /soft/apps/packages/gcc-4.0.0/bin/g++-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /soft/apps/packages/gcc-4.0.0/bin/gfortran-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
...
<br>
<p><p>A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0380.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
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
