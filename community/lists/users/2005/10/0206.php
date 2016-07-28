<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 18 13:24:40 2005" -->
<!-- isoreceived="20051018182440" -->
<!-- sent="Tue, 18 Oct 2005 13:24:55 -0500" -->
<!-- isosent="20051018182455" -->
<!-- name="Parrott, Chris" -->
<!-- email="chris.parrott_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI hang issue" -->
<!-- id="4A77E4BC05A4EF4D9DAA4C8CB5EEE51C0199F444_at_SAUSEXMB1.amd.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[O-MPI users] OpenMPI hang issue" -->
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
<strong>From:</strong> Parrott, Chris (<em>chris.parrott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-18 13:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0207.php">Hugh Merz: "[O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Tim S. Woodall: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,
<br>
<p>I just tried this same code again with 1.0rc4, and I still see the same
<br>
symptom.  The gdb stack trace for a hung process looks a bit different
<br>
this time, however:
<br>
<p>(gdb) bt
<br>
#0  0x0000002a98a085e1 in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/openmpi/mca_bml_r2.so
<br>
#1  0x0000002a986c3080 in mca_pml_ob1_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/openmpi/mca_pml_ob1.so
<br>
#2  0x0000002a95d8378c in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/libopal.so.0
<br>
#3  0x0000002a95a6d8a5 in opal_condition_wait ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/libmpi.so.0
<br>
#4  0x0000002a95a6de49 in ompi_request_wait_all ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/libmpi.so.0
<br>
#5  0x0000002a95937602 in PMPI_Waitall ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc4-pgi-6.0/lib/libmpi.so.0
<br>
#6  0x00000000004092d4 in rt_waitscanlines (voidhandle=0x635e10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at parallel.c:229
<br>
#7  0x000000000040b515 in renderscene (scene=0x6394d0) at render.c:285
<br>
#8  0x0000000000404f75 in rt_renderscene (voidscene=0x6394d0) at
<br>
api.c:95
<br>
#9  0x0000000000418ac7 in main (argc=6, argv=0x7fbfffec38) at main.c:431
<br>
(gdb)
<br>
<p><p>It still seems to be stuck in the MPI_Waitall call, for some reason.
<br>
<p>Any ideas?  If you need any additional information from me, please let
<br>
me know.
<br>
<p>Thanks in advance,
<br>
<p>+chris
<br>
<p><pre>
--
Chris Parrott                    5204 E. Ben White Blvd., M/S 628
Product Development Engineer     Austin, TX 78741
Computational Products Group     (512) 602-8710 / (512) 602-7745 (fax)
Advanced Micro Devices           chris.parrott_at_[hidden]
&gt; -----Original Message-----
&gt; From: Tim S. Woodall [mailto:twoodall_at_[hidden]] 
&gt; Sent: Monday, October 17, 2005 2:01 PM
&gt; To: Open MPI Users
&gt; Cc: Parrott, Chris
&gt; Subject: Re: [O-MPI users] OpenMPI hang issue
&gt; 
&gt; 
&gt; Hello Chris,
&gt; 
&gt; Please give the next release candidate a try. There was an 
&gt; issue w/ the GM port that was likely causing this.
&gt; 
&gt; Thanks,
&gt; Tim
&gt; 
&gt; 
&gt; Parrott, Chris wrote:
&gt; &gt; Greetings,
&gt; &gt; 
&gt; &gt; I have been testing OpenMPI 1.0rc3 on a rack of 8 
&gt; 2-processor (single
&gt; &gt; core) Opteron systems connected via both Gigabit Ethernet 
&gt; and Myrinet. 
&gt; &gt; My testing has been mostly successful, although I have run into a 
&gt; &gt; recurring issue on a few MPI applications.  The symptom is that the 
&gt; &gt; computation seems to progress nearly to completion, and 
&gt; then suddenly 
&gt; &gt; just hangs without terminating.  One code that demonstrates this is 
&gt; &gt; the Tachyon parallel raytracer, available at:
&gt; &gt; 
&gt; &gt;   <a href="http://jedi.ks.uiuc.edu/~johns/raytracer/">http://jedi.ks.uiuc.edu/~johns/raytracer/</a>
&gt; &gt; 
&gt; &gt; I am using PGI 6.0-5 to compile OpenMPI, so that may be part of the 
&gt; &gt; root cause of this particular problem.
&gt; &gt; 
&gt; &gt; I have attached the output of config.log to this message.  
&gt; Here is the 
&gt; &gt; output from ompi_info:
&gt; &gt; 
&gt; &gt;                 Open MPI: 1.0rc3r7730
&gt; &gt;    Open MPI SVN revision: r7730
&gt; &gt;                 Open RTE: 1.0rc3r7730
&gt; &gt;    Open RTE SVN revision: r7730
&gt; &gt;                     OPAL: 1.0rc3r7730
&gt; &gt;        OPAL SVN revision: r7730
&gt; &gt;                   Prefix: /opt/openmpi-1.0rc3-pgi-6.0  Configured 
&gt; &gt; architecture: x86_64-unknown-linux-gnu
&gt; &gt;            Configured by: root
&gt; &gt;            Configured on: Mon Oct 17 10:10:28 PDT 2005
&gt; &gt;           Configure host: castor00
&gt; &gt;                 Built by: root
&gt; &gt;                 Built on: Mon Oct 17 10:29:20 PDT 2005
&gt; &gt;               Built host: castor00
&gt; &gt;               C bindings: yes
&gt; &gt;             C++ bindings: yes
&gt; &gt;       Fortran77 bindings: yes (all)
&gt; &gt;       Fortran90 bindings: yes
&gt; &gt;               C compiler: pgcc
&gt; &gt;      C compiler absolute: 
&gt; &gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgcc
&gt; &gt;             C++ compiler: pgCC
&gt; &gt;    C++ compiler absolute: 
&gt; &gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgCC
&gt; &gt;       Fortran77 compiler: pgf77
&gt; &gt;   Fortran77 compiler abs: 
&gt; &gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf77
&gt; &gt;       Fortran90 compiler: pgf90
&gt; &gt;   Fortran90 compiler abs: 
&gt; &gt; /net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf90
&gt; &gt;              C profiling: yes
&gt; &gt;            C++ profiling: yes
&gt; &gt;      Fortran77 profiling: yes
&gt; &gt;      Fortran90 profiling: yes
&gt; &gt;           C++ exceptions: no
&gt; &gt;           Thread support: posix (mpi: no, progress: no)
&gt; &gt;   Internal debug support: no
&gt; &gt;      MPI parameter check: runtime
&gt; &gt; Memory profiling support: no
&gt; &gt; Memory debugging support: no
&gt; &gt;          libltdl support: 1
&gt; &gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0, 
&gt; Component
&gt; &gt; v1.0)
&gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;            MCA allocator: bucket (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA ptl: gm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA gpr: replica (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                   MCA ns: replica (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA ras: localhost (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA rds: resfile (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
&gt; &gt; v1.0)
&gt; &gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pls: daemon (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt;                  MCA sds: singleton (MCA v1.0, API v1.0, 
&gt; Component v1.0)
&gt; &gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
&gt; &gt; 
&gt; &gt; 
&gt; &gt; Here is the command-line I am using to invoke OpenMPI for 
&gt; my build of
&gt; &gt; Tachyon:
&gt; &gt; 
&gt; &gt; /opt/openmpi-1.0rc3-pgi-6.0/bin/mpirun --prefix 
&gt; &gt; /opt/openmpi-1.0rc3-pgi-6.0 --mca pls_rsh_agent rsh --hostfile 
&gt; &gt; hostfile.gigeth -np 16 tachyon_base.mpi -o scene.tga scene.dat
&gt; &gt; 
&gt; &gt; Attaching gdb to one of the hung processes, I get the 
&gt; following stack
&gt; &gt; trace:
&gt; &gt; 
&gt; &gt; (gdb) bt
&gt; &gt; #0  0x0000002a95d6b87d in opal_sys_timer_get_cycles ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
&gt; &gt; #1  0x0000002a95d83509 in opal_timer_base_get_cycles ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
&gt; &gt; #2  0x0000002a95d8370c in opal_progress ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
&gt; &gt; #3  0x0000002a95a6d8a5 in opal_condition_wait ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
&gt; &gt; #4  0x0000002a95a6de49 in ompi_request_wait_all ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
&gt; &gt; #5  0x0000002a95937602 in PMPI_Waitall ()
&gt; &gt;    from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
&gt; &gt; #6  0x00000000004092d4 in rt_waitscanlines (voidhandle=0x635a60)
&gt; &gt;     at parallel.c:229
&gt; &gt; #7  0x000000000040b515 in renderscene (scene=0x6394d0) at 
&gt; render.c:285 
&gt; &gt; #8  0x0000000000404f75 in rt_renderscene (voidscene=0x6394d0) at 
&gt; &gt; api.c:95 #9  0x0000000000418ac7 in main (argc=6, 
&gt; argv=0x7fbfffec38) at 
&gt; &gt; main.c:431
&gt; &gt; (gdb)
&gt; &gt; 
&gt; &gt; So based on this stack trace, it appears that the application is 
&gt; &gt; hanging on an MPI_Waitall call for some reason.
&gt; &gt; 
&gt; &gt; Does anyone have any ideas as to why this might be 
&gt; happening?  If this 
&gt; &gt; is covered in the FAQ somewhere, then please accept my apologies in 
&gt; &gt; advance.
&gt; &gt; 
&gt; &gt; Many thanks,
&gt; &gt; 
&gt; &gt; +chris
&gt; &gt; 
&gt; &gt; --
&gt; &gt; Chris Parrott                    5204 E. Ben White Blvd., M/S 628
&gt; &gt; Product Development Engineer     Austin, TX 78741
&gt; &gt; Computational Products Group     (512) 602-8710 / (512) 
&gt; 602-7745 (fax)
&gt; &gt; Advanced Micro Devices           chris.parrott_at_[hidden]
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; ----------------------------------------------------------------------
&gt; &gt; --
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden] 
&gt; <a href="http://www.open">http://www.open</a>-&gt; mpi.org/mailman/listinfo.cgi/users
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0207.php">Hugh Merz: "[O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Tim S. Woodall: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3 (Jeff Squyres)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0201.php">Parrott, Chris: "[O-MPI users] OpenMPI hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
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
