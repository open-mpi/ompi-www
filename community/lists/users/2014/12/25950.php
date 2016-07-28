<?
$subject_val = "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 12:12:38 2014" -->
<!-- isoreceived="20141210171238" -->
<!-- sent="Wed, 10 Dec 2014 12:12:24 -0500" -->
<!-- isosent="20141210171224" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user" -->
<!-- id="54887EF8.8090707_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uPs+b6qdiMBvCSdoUzNkMe1qEECB1G8bgejBB8d3_N5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 12:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25951.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25949.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Luca
<br>
<p>Another possibility that comes to mind,
<br>
besides mixed versions mentioned by Gilles,
<br>
is the OS limits.
<br>
Limits may vary according to the user and user privileges.
<br>
<p>Large programs tend to require big stacksize (even unlimited),
<br>
and typically segfault when the stack is not large enough.
<br>
Max number of open files is yet another hurdle.
<br>
And if you're using Infinband, the max locked memory size should be 
<br>
unlimited.
<br>
Check /etc/security/limits.conf and &quot;ulimit -a&quot;.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 12/10/2014 08:28 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Luca,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your email mentions openmpi 1.6.5
</span><br>
<span class="quotelev1">&gt; but gdb output points to openmpi 1.8.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could the root cause be a mix of versions that does not occur with root
</span><br>
<span class="quotelev1">&gt; account ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which openmpi version are you expecting ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can run
</span><br>
<span class="quotelev1">&gt; pmap &lt;pid&gt;
</span><br>
<span class="quotelev1">&gt; when your binary is running and/or under gdb to confirm the openmpi
</span><br>
<span class="quotelev1">&gt; library that is really used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 10, 2014 at 7:21 PM, Luca Fini &lt;lfini_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:lfini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've a problem running a well tested MPI based application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The program has been used for years with no problems. Suddenly the
</span><br>
<span class="quotelev1">&gt;     executable which was run many times with no problems crashed with
</span><br>
<span class="quotelev1">&gt;     SIGSEGV. The very same executable if run with root privileges works
</span><br>
<span class="quotelev1">&gt;     OK. The same happens with other executables and across various
</span><br>
<span class="quotelev1">&gt;     recompilation attempts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We could not find any relevant difference in the O.S. since a few days
</span><br>
<span class="quotelev1">&gt;     ago when the program worked also under unprivileged user ID. Actually
</span><br>
<span class="quotelev1">&gt;     about in the same span of time we changed the GID of the user
</span><br>
<span class="quotelev1">&gt;     experiencing the fault, but we think this is not relevant because the
</span><br>
<span class="quotelev1">&gt;     same SIGSEGV happens to another user which was not modified. Moreover
</span><br>
<span class="quotelev1">&gt;     we cannot see how that change can affect the running executabe (we
</span><br>
<span class="quotelev1">&gt;     checked all file permissions in the directory tree where the program
</span><br>
<span class="quotelev1">&gt;     is used).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Running the program under GDB we get the trace reported below. The
</span><br>
<span class="quotelev1">&gt;     segfault happens at the very beginning during MPI initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We can use the program with sudo, but I'd like to find out what
</span><br>
<span class="quotelev1">&gt;     happened to go back to &quot;normal&quot; usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'd appreciate any hint on the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 Luca Fini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ==============================
</span><br>
<span class="quotelev1">&gt;     Here follows a few environment details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Program started with: mpirun -debug -debugger gdb  -np 1
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPEN-MPI 1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Linux 2.6.32-431.29.2.2.6.32-431.29.2.el6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Intel fortran Compiler: 2011.7.256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     =========================
</span><br>
<span class="quotelev1">&gt;     Here follows the stack trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Starting program:
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev1">&gt;     [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;     0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
</span><br>
<span class="quotelev1">&gt;     type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
</span><br>
<span class="quotelev1">&gt;     requested_component_names=0x0, include_mode=128, found_components=0x1,
</span><br>
<span class="quotelev1">&gt;     open_dso_components=16)
</span><br>
<span class="quotelev1">&gt;          at mca_base_component_find.c:162
</span><br>
<span class="quotelev1">&gt;     162        OBJ_CONSTRUCT(found_components, opal_list_t);
</span><br>
<span class="quotelev1">&gt;     Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt;     glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev1">&gt;     libgfortran-4.4.7-11.el6.x86_64 libtool-ltdl-2.2.6-15.5.el6.x86_64
</span><br>
<span class="quotelev1">&gt;     openmpi-1.8.1-1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;     (gdb) where
</span><br>
<span class="quotelev1">&gt;     #0  0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
</span><br>
<span class="quotelev1">&gt;     type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
</span><br>
<span class="quotelev1">&gt;     requested_component_names=0x0, include_mode=128, found_components=0x1,
</span><br>
<span class="quotelev1">&gt;     open_dso_components=16)
</span><br>
<span class="quotelev1">&gt;          at mca_base_component_find.c:162
</span><br>
<span class="quotelev1">&gt;     #1  0x0000003b90c4870a in mca_base_framework_components_register ()
</span><br>
<span class="quotelev1">&gt;     from /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;     #2  0x0000003b90c48c06 in mca_base_framework_register () from
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;     #3  0x0000003b90c48def in mca_base_framework_open () from
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;     #4  0x0000003b914407e7 in ompi_mpi_init () from
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/openmpi/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;     #5  0x0000003b91463200 in PMPI_Init () from
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/openmpi/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;     #6  0x00002aaaaacd9295 in mpi_init_f (ierr=0x7fffffffd268) at
</span><br>
<span class="quotelev1">&gt;     pinit_f.c:75
</span><br>
<span class="quotelev1">&gt;     #7  0x00000000005bb159 in MODE_MNH_WORLD::init_nmnh_comm_world
</span><br>
<span class="quotelev1">&gt;     (kinfo_ll=Cannot access memory at address 0x0
</span><br>
<span class="quotelev1">&gt;     ) at
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_mnh_world.f90:45
</span><br>
<span class="quotelev1">&gt;     #8  0x00000000005939d3 in MODE_IO_LL::initio_ll () at
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_io_ll.f90:107
</span><br>
<span class="quotelev1">&gt;     #9  0x000000000049d02f in prep_pgd () at
</span><br>
<span class="quotelev1">&gt;     /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_prep_pgd.f90:130
</span><br>
<span class="quotelev1">&gt;     #10 0x000000000049cf8c in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Luca Fini.  INAF - Oss. Astrofisico di Arcetri
</span><br>
<span class="quotelev1">&gt;     L.go E.Fermi, 5. 50125 Firenze. Italy
</span><br>
<span class="quotelev1">&gt;     Tel: +39 055 2752 307 &lt;tel:%2B39%20055%202752%20307&gt;     Fax: +39
</span><br>
<span class="quotelev1">&gt;     055 2752 292 &lt;tel:%2B39%20055%202752%20292&gt;
</span><br>
<span class="quotelev1">&gt;     Skype: l.fini
</span><br>
<span class="quotelev1">&gt;     Web: <a href="http://www.arcetri.inaf.it/~lfini">http://www.arcetri.inaf.it/~lfini</a>
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/12/25945.php">http://www.open-mpi.org/community/lists/users/2014/12/25945.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25946.php">http://www.open-mpi.org/community/lists/users/2014/12/25946.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25951.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25949.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25946.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
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
