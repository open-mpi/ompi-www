<?
$subject_val = "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 03:40:35 2014" -->
<!-- isoreceived="20141211084035" -->
<!-- sent="Thu, 11 Dec 2014 09:40:14 +0100" -->
<!-- isosent="20141211084014" -->
<!-- name="Luca Fini" -->
<!-- email="lfini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user" -->
<!-- id="CA+uuo0kerrtpSiZjGAy2hJUEyX0mNT+VRviij874OHiNGwYuDA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54887EF8.8090707_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Luca Fini (<em>lfini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 03:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25960.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Deadline January 15: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25950.php">Gus Correa: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the replies.
<br>
<p>The mismatch in OpeMPI version is my fault: while writing the request
<br>
for help I looked at the name of the directory where OpenMPI was built
<br>
(I did not build it myself) and did not notice that the name of the
<br>
directory did not reflect the version actually compiled.
<br>
<p>I had already checked the ulimits defined for the account where the
<br>
SIGSEGV happens and they seems OK.
<br>
<p>Moreover I have a further result: I created a brand new account with
<br>
default privileges and tried to run the program under that one, and it
<br>
works!
<br>
<p>I'm still trying to spot out the differences between the two
<br>
unprivileged accounts.
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l.
<br>
<p>On Wed, Dec 10, 2014 at 6:12 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Luca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another possibility that comes to mind,
</span><br>
<span class="quotelev1">&gt; besides mixed versions mentioned by Gilles,
</span><br>
<span class="quotelev1">&gt; is the OS limits.
</span><br>
<span class="quotelev1">&gt; Limits may vary according to the user and user privileges.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Large programs tend to require big stacksize (even unlimited),
</span><br>
<span class="quotelev1">&gt; and typically segfault when the stack is not large enough.
</span><br>
<span class="quotelev1">&gt; Max number of open files is yet another hurdle.
</span><br>
<span class="quotelev1">&gt; And if you're using Infinband, the max locked memory size should be
</span><br>
<span class="quotelev1">&gt; unlimited.
</span><br>
<span class="quotelev1">&gt; Check /etc/security/limits.conf and &quot;ulimit -a&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/10/2014 08:28 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Luca,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your email mentions openmpi 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; but gdb output points to openmpi 1.8.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could the root cause be a mix of versions that does not occur with root
</span><br>
<span class="quotelev2">&gt;&gt; account ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which openmpi version are you expecting ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can run
</span><br>
<span class="quotelev2">&gt;&gt; pmap &lt;pid&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when your binary is running and/or under gdb to confirm the openmpi
</span><br>
<span class="quotelev2">&gt;&gt; library that is really used
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 10, 2014 at 7:21 PM, Luca Fini &lt;lfini_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:lfini_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I've a problem running a well tested MPI based application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The program has been used for years with no problems. Suddenly the
</span><br>
<span class="quotelev2">&gt;&gt;     executable which was run many times with no problems crashed with
</span><br>
<span class="quotelev2">&gt;&gt;     SIGSEGV. The very same executable if run with root privileges works
</span><br>
<span class="quotelev2">&gt;&gt;     OK. The same happens with other executables and across various
</span><br>
<span class="quotelev2">&gt;&gt;     recompilation attempts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We could not find any relevant difference in the O.S. since a few days
</span><br>
<span class="quotelev2">&gt;&gt;     ago when the program worked also under unprivileged user ID. Actually
</span><br>
<span class="quotelev2">&gt;&gt;     about in the same span of time we changed the GID of the user
</span><br>
<span class="quotelev2">&gt;&gt;     experiencing the fault, but we think this is not relevant because the
</span><br>
<span class="quotelev2">&gt;&gt;     same SIGSEGV happens to another user which was not modified. Moreover
</span><br>
<span class="quotelev2">&gt;&gt;     we cannot see how that change can affect the running executabe (we
</span><br>
<span class="quotelev2">&gt;&gt;     checked all file permissions in the directory tree where the program
</span><br>
<span class="quotelev2">&gt;&gt;     is used).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Running the program under GDB we get the trace reported below. The
</span><br>
<span class="quotelev2">&gt;&gt;     segfault happens at the very beginning during MPI initialization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We can use the program with sudo, but I'd like to find out what
</span><br>
<span class="quotelev2">&gt;&gt;     happened to go back to &quot;normal&quot; usage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'd appreciate any hint on the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Luca Fini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ==============================
</span><br>
<span class="quotelev2">&gt;&gt;     Here follows a few environment details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Program started with: mpirun -debug -debugger gdb  -np 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OPEN-MPI 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Linux 2.6.32-431.29.2.2.6.32-431.29.2.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Intel fortran Compiler: 2011.7.256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     =========================
</span><br>
<span class="quotelev2">&gt;&gt;     Here follows the stack trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Starting program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/M51b2_OT_2POINT_RH_v1_mod/PREP_PGD
</span><br>
<span class="quotelev2">&gt;&gt;     [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;     0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
</span><br>
<span class="quotelev2">&gt;&gt;     type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
</span><br>
<span class="quotelev2">&gt;&gt;     requested_component_names=0x0, include_mode=128, found_components=0x1,
</span><br>
<span class="quotelev2">&gt;&gt;     open_dso_components=16)
</span><br>
<span class="quotelev2">&gt;&gt;          at mca_base_component_find.c:162
</span><br>
<span class="quotelev2">&gt;&gt;     162        OBJ_CONSTRUCT(found_components, opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt;     Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev2">&gt;&gt;     glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     libgfortran-4.4.7-11.el6.x86_64 libtool-ltdl-2.2.6-15.5.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     openmpi-1.8.1-1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt;     #0  0x00002aaaaaf652c7 in mca_base_component_find (directory=0x0,
</span><br>
<span class="quotelev2">&gt;&gt;     type=0x3b914a7fb5 &quot;rte&quot;, static_components=0x3b916cb040,
</span><br>
<span class="quotelev2">&gt;&gt;     requested_component_names=0x0, include_mode=128, found_components=0x1,
</span><br>
<span class="quotelev2">&gt;&gt;     open_dso_components=16)
</span><br>
<span class="quotelev2">&gt;&gt;          at mca_base_component_find.c:162
</span><br>
<span class="quotelev2">&gt;&gt;     #1  0x0000003b90c4870a in mca_base_framework_components_register ()
</span><br>
<span class="quotelev2">&gt;&gt;     from /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt;&gt;     #2  0x0000003b90c48c06 in mca_base_framework_register () from
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt;&gt;     #3  0x0000003b90c48def in mca_base_framework_open () from
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/lib/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt;&gt;     #4  0x0000003b914407e7 in ompi_mpi_init () from
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;     #5  0x0000003b91463200 in PMPI_Init () from
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;     #6  0x00002aaaaacd9295 in mpi_init_f (ierr=0x7fffffffd268) at
</span><br>
<span class="quotelev2">&gt;&gt;     pinit_f.c:75
</span><br>
<span class="quotelev2">&gt;&gt;     #7  0x00000000005bb159 in MODE_MNH_WORLD::init_nmnh_comm_world
</span><br>
<span class="quotelev2">&gt;&gt;     (kinfo_ll=Cannot access memory at address 0x0
</span><br>
<span class="quotelev2">&gt;&gt;     ) at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_mnh_world.f90:45
</span><br>
<span class="quotelev2">&gt;&gt;     #8  0x00000000005939d3 in MODE_IO_LL::initio_ll () at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_mode_io_ll.f90:107
</span><br>
<span class="quotelev2">&gt;&gt;     #9  0x000000000049d02f in prep_pgd () at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/lascaux/MNH-V5-1-2/src/dir_obj-LXifortI4-MNH-V5-1-2-OMPI12X-O2/MASTER/spll_prep_pgd.f90:130
</span><br>
<span class="quotelev2">&gt;&gt;     #10 0x000000000049cf8c in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Luca Fini.  INAF - Oss. Astrofisico di Arcetri
</span><br>
<span class="quotelev2">&gt;&gt;     L.go E.Fermi, 5. 50125 Firenze. Italy
</span><br>
<span class="quotelev2">&gt;&gt;     Tel: +39 055 2752 307 &lt;tel:%2B39%20055%202752%20307&gt;     Fax: +39
</span><br>
<span class="quotelev2">&gt;&gt;     055 2752 292 &lt;tel:%2B39%20055%202752%20292&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Skype: l.fini
</span><br>
<span class="quotelev2">&gt;&gt;     Web: <a href="http://www.arcetri.inaf.it/~lfini">http://www.arcetri.inaf.it/~lfini</a>
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/12/25945.php">http://www.open-mpi.org/community/lists/users/2014/12/25945.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25946.php">http://www.open-mpi.org/community/lists/users/2014/12/25946.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25950.php">http://www.open-mpi.org/community/lists/users/2014/12/25950.php</a>
</span><br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="25960.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Deadline January 15: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25950.php">Gus Correa: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Reply:</strong> <a href="25961.php">Gilles Gouaillardet: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
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
