<?
$subject_val = "Re: [OMPI users] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 17:01:50 2009" -->
<!-- isoreceived="20090105220150" -->
<!-- sent="Mon, 5 Jan 2009 23:01:44 +0100" -->
<!-- isosent="20090105220144" -->
<!-- name="Maciej Kazulak" -->
<!-- email="kazulakm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="492f5c190901051401u4249a7cfq8c302fa1dcd4c44_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="492f5c190901030256r15258261ia79f476d49a454a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs<br>
<strong>From:</strong> Maciej Kazulak (<em>kazulakm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 17:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7623.php">Maciej Kazulak: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/1/3 Maciej Kazulak &lt;kazulakm_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a weird problem. After a fresh install mpirun refuses to work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; box% ./hello
</span><br>
<span class="quotelev1">&gt; Process 0 on box out of 1
</span><br>
<span class="quotelev1">&gt; box% mpirun -np 1 ./hello
</span><br>
<span class="quotelev1">&gt; # hangs here, no output, nothing at all; on another terminal:
</span><br>
<span class="quotelev1">&gt; box% ps axl | egrep 'mpirun|orted'
</span><br>
<span class="quotelev1">&gt; 0  1000 24162  7687  20   0  86704  2744 -      Sl+  pts/2      0:00 mpirun
</span><br>
<span class="quotelev1">&gt; -np 1 ./hello
</span><br>
<span class="quotelev1">&gt; 1  1000 24165     1  20   0  76016  2088 -      Ss   ?          0:00 orted
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename box
</span><br>
<span class="quotelev1">&gt; --universe ncl_at_box:default-universe-24162 --nsreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 192.168.1.8:21500&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.8:21500&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; 0  1000 24171 23924  20   0   6020   732 pipe_w S+   pts/3      0:00 egrep
</span><br>
<span class="quotelev1">&gt; mpirun|orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some post-install configuration i forgot to do? I couldn't find
</span><br>
<span class="quotelev1">&gt; anything useful in the faq nor the docs that come with the package.
</span><br>
<span class="quotelev1">&gt; Following advice in this thread
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/08/3845.php">http://www.open-mpi.org/community/lists/users/2007/08/3845.php</a> i tried
</span><br>
<span class="quotelev1">&gt; --debug-daemons but no output whatsoever as above.
</span><br>
<span class="quotelev1">&gt; Also tried MTT:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; box% cat developer.ini trivial.ini| ../client/mtt -
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_dir=/usr
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.2.8
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: cxx_hello, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: c_ring, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: cxx_ring, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: c_hello, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: c_ring, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: c_hello, np=2, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT Results Summary
</span><br>
<span class="quotelev1">&gt; hostname: box
</span><br>
<span class="quotelev1">&gt; uname: Linux box 2.6.28-gentoo #2 SMP Thu Jan 1 15:27:59 CET 2009 x86_64
</span><br>
<span class="quotelev1">&gt; Intel(R) Core(TM)2 Duo CPU E6550 @ 2.33GHz GenuineIntel GNU/Linux
</span><br>
<span class="quotelev1">&gt; who am i:
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | Phase       | Section         | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | MPI install | my installation | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | MPI install | my installation | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | trivial         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | trivial         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | trivial         | 0    | 0    | 4        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | trivial         | 0    | 0    | 2        | 0    |
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; box% ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.8
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.8
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Sat Jan  3 01:03:53 CET 2009
</span><br>
<span class="quotelev1">&gt;           Configure host: box
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: sob, 3 sty 2009, 01:06:54 CET
</span><br>
<span class="quotelev1">&gt;               Built host: box
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: x86_64-pc-linux-gnu-gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/x86_64-pc-linux-gnu-gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: x86_64-pc-linux-gnu-g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/x86_64-pc-linux-gnu-g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: x86_64-pc-linux-gnu-gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/x86_64-pc-linux-gnu-gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
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
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Compone
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.8)nt v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried 1.2.6-r1 earlier with same results which only leads me to the
</span><br>
<span class="quotelev1">&gt; assumption I must be doing something wrong but I'm out of ideas for now.
</span><br>
<span class="quotelev1">&gt; Anyone?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nevermind.
<br>
<p>Interesting though. I thought in such a simple scenario shared memory would
<br>
be used for IPC (or whatever's fastest) . But nope. Even with one process
<br>
still it wants to use TCP/IP to communicate between mpirun and orted. What's
<br>
even more surprising to me it won't use loopback for that. Hence my maybe a
<br>
little bit over-restrictive iptables rules were the problem. I allowed
<br>
traffic from 127.0.0.1 to 127.0.0.1 on lo but not from &lt;eth0_addr&gt; to
<br>
&lt;eth0_addr&gt; on eth0 and both processes ended up waiting for IO.
<br>
<p>Can I somehow configure it to use something other than TCP/IP here? Or at
<br>
least switch it to loopback?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7623.php">Maciej Kazulak: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
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
