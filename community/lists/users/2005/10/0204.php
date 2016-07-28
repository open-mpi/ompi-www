<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 18 08:31:57 2005" -->
<!-- isoreceived="20051018133157" -->
<!-- sent="Tue, 18 Oct 2005 09:31:49 -0400" -->
<!-- isosent="20051018133149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI hang issue" -->
<!-- id="59721a80f5f1eb4933c21d683e1dff2c_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4353F4EE.4000007_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-10-18 08:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0205.php">Tim S. Woodall: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RC4 has been released with this fix and some others that should help  
<br>
(<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>).  Please let us know if it  
<br>
fixes your problem.
<br>
<p><p>On Oct 17, 2005, at 3:01 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Hello Chris,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please give the next release candidate a try. There was an issue
</span><br>
<span class="quotelev1">&gt; w/ the GM port that was likely causing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parrott, Chris wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been testing OpenMPI 1.0rc3 on a rack of 8 2-processor (single
</span><br>
<span class="quotelev2">&gt;&gt; core) Opteron systems connected via both Gigabit Ethernet and Myrinet.
</span><br>
<span class="quotelev2">&gt;&gt; My testing has been mostly successful, although I have run into a
</span><br>
<span class="quotelev2">&gt;&gt; recurring issue on a few MPI applications.  The symptom is that the
</span><br>
<span class="quotelev2">&gt;&gt; computation seems to progress nearly to completion, and then suddenly
</span><br>
<span class="quotelev2">&gt;&gt; just hangs without terminating.  One code that demonstrates this is  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; Tachyon parallel raytracer, available at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://jedi.ks.uiuc.edu/~johns/raytracer/">http://jedi.ks.uiuc.edu/~johns/raytracer/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using PGI 6.0-5 to compile OpenMPI, so that may be part of the  
</span><br>
<span class="quotelev2">&gt;&gt; root
</span><br>
<span class="quotelev2">&gt;&gt; cause of this particular problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the output of config.log to this message.  Here is the
</span><br>
<span class="quotelev2">&gt;&gt; output from ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.0rc3r7730
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r7730
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.0rc3r7730
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r7730
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.0rc3r7730
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r7730
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /opt/openmpi-1.0rc3-pgi-6.0
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Mon Oct 17 10:10:28 PDT 2005
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: castor00
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Mon Oct 17 10:29:20 PDT 2005
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: castor00
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: pgcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute:
</span><br>
<span class="quotelev2">&gt;&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgcc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute:
</span><br>
<span class="quotelev2">&gt;&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgCC
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev2">&gt;&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf77
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev2">&gt;&gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf90
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: gm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the command-line I am using to invoke OpenMPI for my build of
</span><br>
<span class="quotelev2">&gt;&gt; Tachyon:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.0rc3-pgi-6.0/bin/mpirun --prefix
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.0rc3-pgi-6.0 --mca pls_rsh_agent rsh --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfile.gigeth -np 16 tachyon_base.mpi -o scene.tga scene.dat
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attaching gdb to one of the hung processes, I get the following stack
</span><br>
<span class="quotelev2">&gt;&gt; trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x0000002a95d6b87d in opal_sys_timer_get_cycles ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x0000002a95d83509 in opal_timer_base_get_cycles ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0000002a95d8370c in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x0000002a95a6d8a5 in opal_condition_wait ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x0000002a95a6de49 in ompi_request_wait_all ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x0000002a95937602 in PMPI_Waitall ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00000000004092d4 in rt_waitscanlines (voidhandle=0x635a60)
</span><br>
<span class="quotelev2">&gt;&gt;     at parallel.c:229
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x000000000040b515 in renderscene (scene=0x6394d0) at render.c:285
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x0000000000404f75 in rt_renderscene (voidscene=0x6394d0) at
</span><br>
<span class="quotelev2">&gt;&gt; api.c:95
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000000000418ac7 in main (argc=6, argv=0x7fbfffec38) at  
</span><br>
<span class="quotelev2">&gt;&gt; main.c:431
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So based on this stack trace, it appears that the application is  
</span><br>
<span class="quotelev2">&gt;&gt; hanging
</span><br>
<span class="quotelev2">&gt;&gt; on an MPI_Waitall call for some reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any ideas as to why this might be happening?  If this
</span><br>
<span class="quotelev2">&gt;&gt; is covered in the FAQ somewhere, then please accept my apologies in
</span><br>
<span class="quotelev2">&gt;&gt; advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +chris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Chris Parrott                    5204 E. Ben White Blvd., M/S 628
</span><br>
<span class="quotelev2">&gt;&gt; Product Development Engineer     Austin, TX 78741
</span><br>
<span class="quotelev2">&gt;&gt; Computational Products Group     (512) 602-8710 / (512) 602-7745 (fax)
</span><br>
<span class="quotelev2">&gt;&gt; Advanced Micro Devices           chris.parrott_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<li><strong>Next message:</strong> <a href="0205.php">Tim S. Woodall: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Allan Menezes: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
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
