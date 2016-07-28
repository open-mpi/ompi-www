<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 17 13:27:58 2005" -->
<!-- isoreceived="20051017182758" -->
<!-- sent="Mon, 17 Oct 2005 13:28:00 -0500" -->
<!-- isosent="20051017182800" -->
<!-- name="Parrott, Chris" -->
<!-- email="chris.parrott_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenMPI hang issue" -->
<!-- id="4A77E4BC05A4EF4D9DAA4C8CB5EEE51C0199F441_at_SAUSEXMB1.amd.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2005-10-17 13:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Maybe reply:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I have been testing OpenMPI 1.0rc3 on a rack of 8 2-processor (single
<br>
core) Opteron systems connected via both Gigabit Ethernet and Myrinet.
<br>
My testing has been mostly successful, although I have run into a
<br>
recurring issue on a few MPI applications.  The symptom is that the
<br>
computation seems to progress nearly to completion, and then suddenly
<br>
just hangs without terminating.  One code that demonstrates this is the
<br>
Tachyon parallel raytracer, available at:
<br>
<p>&nbsp;&nbsp;<a href="http://jedi.ks.uiuc.edu/~johns/raytracer/">http://jedi.ks.uiuc.edu/~johns/raytracer/</a>
<br>
<p>I am using PGI 6.0-5 to compile OpenMPI, so that may be part of the root
<br>
cause of this particular problem.
<br>
<p>I have attached the output of config.log to this message.  Here is the
<br>
output from ompi_info:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0rc3r7730
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r7730
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0rc3r7730
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r7730
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0rc3r7730
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r7730
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/openmpi-1.0rc3-pgi-6.0
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Oct 17 10:10:28 PDT 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: castor00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Oct 17 10:29:20 PDT 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: castor00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute:
<br>
/net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: pgCC
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute:
<br>
/net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: pgf77
<br>
&nbsp;&nbsp;Fortran77 compiler abs:
<br>
/net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: pgf90
<br>
&nbsp;&nbsp;Fortran90 compiler abs:
<br>
/net/lisbon/opt/pgi-6.0-5/linux86-64/6.0/bin/pgf90
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component
<br>
v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: gm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: gm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
<br>
v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
<p><p>Here is the command-line I am using to invoke OpenMPI for my build of
<br>
Tachyon:
<br>
<p>/opt/openmpi-1.0rc3-pgi-6.0/bin/mpirun --prefix
<br>
/opt/openmpi-1.0rc3-pgi-6.0 --mca pls_rsh_agent rsh --hostfile
<br>
hostfile.gigeth -np 16 tachyon_base.mpi -o scene.tga scene.dat
<br>
<p>Attaching gdb to one of the hung processes, I get the following stack
<br>
trace:
<br>
<p>(gdb) bt
<br>
#0  0x0000002a95d6b87d in opal_sys_timer_get_cycles ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
<br>
#1  0x0000002a95d83509 in opal_timer_base_get_cycles ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
<br>
#2  0x0000002a95d8370c in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libopal.so.0
<br>
#3  0x0000002a95a6d8a5 in opal_condition_wait ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
<br>
#4  0x0000002a95a6de49 in ompi_request_wait_all ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
<br>
#5  0x0000002a95937602 in PMPI_Waitall ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc3-pgi-6.0/lib/libmpi.so.0
<br>
#6  0x00000000004092d4 in rt_waitscanlines (voidhandle=0x635a60)
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
<p>So based on this stack trace, it appears that the application is hanging
<br>
on an MPI_Waitall call for some reason.
<br>
<p>Does anyone have any ideas as to why this might be happening?  If this
<br>
is covered in the FAQ somewhere, then please accept my apologies in
<br>
advance.
<br>
<p>Many thanks,
<br>
<p>+chris
<br>
<p><pre>
--
Chris Parrott                    5204 E. Ben White Blvd., M/S 628
Product Development Engineer     Austin, TX 78741
Computational Products Group     (512) 602-8710 / (512) 602-7745 (fax)
Advanced Micro Devices           chris.parrott_at_[hidden]

</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0201/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Jeff Squyres: "Re: [O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Reply:</strong> <a href="0202.php">Tim S. Woodall: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Maybe reply:</strong> <a href="0206.php">Parrott, Chris: "Re: [O-MPI users] OpenMPI hang issue"</a>
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
