<?
$subject_val = "[OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 05:22:16 2014" -->
<!-- isoreceived="20141210102216" -->
<!-- sent="Wed, 10 Dec 2014 11:21:53 +0100" -->
<!-- isosent="20141210102153" -->
<!-- name="Luca Fini" -->
<!-- email="lfini_at_[hidden]" -->
<!-- subject="[OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user" -->
<!-- id="CA+uuo0nxwPqziKWmibM_Pvp1zcg1r+0tC9BN75BdMstzAPFW9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user<br>
<strong>From:</strong> Luca Fini (<em>lfini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 05:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Previous message:</strong> <a href="25944.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've a problem running a well tested MPI based application.
<br>
<p>The program has been used for years with no problems. Suddenly the
<br>
executable which was run many times with no problems crashed with
<br>
SIGSEGV. The very same executable if run with root privileges works
<br>
OK. The same happens with other executables and across various
<br>
recompilation attempts.
<br>
<p>We could not find any relevant difference in the O.S. since a few days
<br>
ago when the program worked also under unprivileged user ID. Actually
<br>
about in the same span of time we changed the GID of the user
<br>
experiencing the fault, but we think this is not relevant because the
<br>
same SIGSEGV happens to another user which was not modified. Moreover
<br>
we cannot see how that change can affect the running executabe (we
<br>
checked all file permissions in the directory tree where the program
<br>
is used).
<br>
<p>Running the program under GDB we get the trace reported below. The
<br>
segfault happens at the very beginning during MPI initialization.
<br>
<p>We can use the program with sudo, but I'd like to find out what
<br>
happened to go back to &quot;normal&quot; usage.
<br>
<p>I'd appreciate any hint on the issue.
<br>
<p>Many thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luca Fini
<br>
<p>==============================
<br>
Here follows a few environment details:
<br>
<p>Program started with: mpirun -debug -debugger gdb  -np 1
<br>
/home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
<br>
<p>OPEN-MPI 1.6.5
<br>
<p>Linux 2.6.32-431.29.2.2.6.32-431.29.2.el6.x86_64
<br>
<p>Intel fortran Compiler: 2011.7.256
<br>
<p>=========================
<br>
Here follows the stack trace:
<br>
<p>Starting program:
<br>
/home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
<br>
/home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
<br>
[Thread debugging using libthread_db enabled]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
<br>
type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
<br>
requested_component_names=0x0, include_mode=128, found_components=0x1,
<br>
open_dso_components=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mca_base_component_find.c:162
<br>
162        OBJ_CONSTRUCT(found_components, opal_list_t);
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
<br>
libgfortran-4.4.7-11.el6.x86_64 libtool-ltdl-2.2.6-15.5.el6.x86_64
<br>
openmpi-1.8.1-1.el6.x86_64
<br>
(gdb) where
<br>
#0  0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
<br>
type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
<br>
requested_component_names=0x0, include_mode=128, found_components=0x1,
<br>
open_dso_components=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mca_base_component_find.c:162
<br>
#1  0x0000003b90c4870a in mca_base_framework_components_register ()
<br>
from /usr/lib64/openmpi/lib/libopen-pal.so.6
<br>
#2  0x0000003b90c48c06 in mca_base_framework_register () from
<br>
/usr/lib64/openmpi/lib/libopen-pal.so.6
<br>
#3  0x0000003b90c48def in mca_base_framework_open () from
<br>
/usr/lib64/openmpi/lib/libopen-pal.so.6
<br>
#4  0x0000003b914407e7 in ompi_mpi_init () from
<br>
/usr/lib64/openmpi/lib/libmpi.so.1
<br>
#5  0x0000003b91463200 in PMPI_Init () from /usr/lib64/openmpi/lib/libmpi.so.1
<br>
#6  0x00002aaaaacd9295 in mpi_init_f (ierr=0x7fffffffd268) at pinit_f.c:75
<br>
#7  0x00000000005bb159 in MODE_MNH_WORLD::init_nmnh_comm_world
<br>
(kinfo_ll=Cannot access memory at address 0x0
<br>
) at /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_mnh_world.f90:45
<br>
#8  0x00000000005939d3 in MODE_IO_LL::initio_ll () at
<br>
/home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_io_ll.f90:107
<br>
#9  0x000000000049d02f in prep_pgd () at
<br>
/home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_prep_pgd.f90:130
<br>
#10 0x000000000049cf8c in main ()
<br>
<p><pre>
-- 
Luca Fini.  INAF - Oss. Astrofisico di Arcetri
L.go E.Fermi, 5. 50125 Firenze. Italy
Tel: +39 055 2752 307     Fax: +39 055 2752 292
Skype: l.fini
Web: <a href="http://www.arcetri.inaf.it/~lfini">http://www.arcetri.inaf.it/~lfini</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Previous message:</strong> <a href="25944.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
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
