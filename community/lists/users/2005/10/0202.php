<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 17 14:01:07 2005" -->
<!-- isoreceived="20051017190107" -->
<!-- sent="Mon, 17 Oct 2005 13:01:02 -0600" -->
<!-- isosent="20051017190102" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI hang issue" -->
<!-- id="4353F4EE.4000007_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A77E4BC05A4EF4D9DAA4C8CB5EEE51C0199F441_at_SAUSEXMB1.amd.com" -->
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
<strong>Date:</strong> 2005-10-17 14:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<li><strong>In reply to:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Chris,
<br>
<p>Please give the next release candidate a try. There was an issue
<br>
w/ the GM port that was likely causing this.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Parrott, Chris wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been testing OpenMPI 1.0rc3 on a rack of 8 2-processor (single
</span><br>
<span class="quotelev1">&gt; core) Opteron systems connected via both Gigabit Ethernet and Myrinet.
</span><br>
<span class="quotelev1">&gt; My testing has been mostly successful, although I have run into a
</span><br>
<span class="quotelev1">&gt; recurring issue on a few MPI applications.  The symptom is that the
</span><br>
<span class="quotelev1">&gt; computation seems to progress nearly to completion, and then suddenly
</span><br>
<span class="quotelev1">&gt; just hangs without terminating.  One code that demonstrates this is the
</span><br>
<span class="quotelev1">&gt; Tachyon parallel raytracer, available at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://jedi.ks.uiuc.edu/~johns/raytracer/">http://jedi.ks.uiuc.edu/~johns/raytracer/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using PGI 6.0-5 to compile OpenMPI, so that may be part of the root
</span><br>
<span class="quotelev1">&gt; cause of this particular problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the output of config.log to this message.  Here is the
</span><br>
<span class="quotelev1">&gt; output from ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.0rc3r7730
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r7730
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0rc3r7730
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r7730
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0rc3r7730
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r7730
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/openmpi-1.0rc3-pgi-6.0
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Oct 17 10:10:28 PDT 2005
</span><br>
<span class="quotelev1">&gt;           Configure host: castor00
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Oct 17 10:29:20 PDT 2005
</span><br>
<span class="quotelev1">&gt;               Built host: castor00
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;               C compiler: pgcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute:
</span><br>
<span class="quotelev1">&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute:
</span><br>
<span class="quotelev1">&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf90
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
<span class="quotelev1">&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0)
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
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: gm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.0)
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
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the command-line I am using to invoke OpenMPI for my build of
</span><br>
<span class="quotelev1">&gt; Tachyon:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.0rc3-pgi-6.0/bin/mpirun --prefix
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.0rc3-pgi-6.0 --mca pls_rsh_agent rsh --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile.gigeth -np 16 tachyon_base.mpi -o scene.tga scene.dat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attaching gdb to one of the hung processes, I get the following stack
</span><br>
<span class="quotelev1">&gt; trace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a95d6b87d in opal_sys_timer_get_cycles ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a95d83509 in opal_timer_base_get_cycles ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a95d8370c in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a95a6d8a5 in opal_condition_wait ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a95a6de49 in ompi_request_wait_all ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a95937602 in PMPI_Waitall ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x00000000004092d4 in rt_waitscanlines (voidhandle=0x635a60)
</span><br>
<span class="quotelev1">&gt;     at parallel.c:229
</span><br>
<span class="quotelev1">&gt; #7  0x000000000040b515 in renderscene (scene=0x6394d0) at render.c:285
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000404f75 in rt_renderscene (voidscene=0x6394d0) at
</span><br>
<span class="quotelev1">&gt; api.c:95
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000418ac7 in main (argc=6, argv=0x7fbfffec38) at main.c:431
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So based on this stack trace, it appears that the application is hanging
</span><br>
<span class="quotelev1">&gt; on an MPI_Waitall call for some reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas as to why this might be happening?  If this
</span><br>
<span class="quotelev1">&gt; is covered in the FAQ somewhere, then please accept my apologies in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Chris Parrott                    5204 E. Ben White Blvd., M/S 628
</span><br>
<span class="quotelev1">&gt; Product Development Engineer     Austin, TX 78741
</span><br>
<span class="quotelev1">&gt; Computational Products Group     (512) 602-8710 / (512) 602-7745 (fax)
</span><br>
<span class="quotelev1">&gt; Advanced Micro Devices           chris.parrott_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<li><strong>In reply to:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0204.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
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
