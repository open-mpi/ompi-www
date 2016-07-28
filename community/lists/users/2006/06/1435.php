<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 10:31:06 2006" -->
<!-- isoreceived="20060616143106" -->
<!-- sent="Fri, 16 Jun 2006 10:31:01 -0400" -->
<!-- isosent="20060616143101" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="4492C0A5.3040207_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200606160955.25107.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 10:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Previous message:</strong> <a href="1434.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?"</a>
<li><strong>In reply to:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I noticed your prefix set to the lib dir, can you try without the 
<br>
lib64 part and rerun?
<br>
<p>Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, first off, I hope this problem I am reporting is of some validity, 
</span><br>
<span class="quotelev1">&gt; I tried finding simmilar situations off Google and the mailing list but 
</span><br>
<span class="quotelev1">&gt; came up with only one reference [1] which seems invalid in my case since 
</span><br>
<span class="quotelev1">&gt; all executions are local (na&#239;ve assumptions that it makes a difference 
</span><br>
<span class="quotelev1">&gt; on the calling stack). I am trying to run asimple HelloWorld using 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.0.2 on an AMD64 machine and a Sun Enterprise (12 procs) 
</span><br>
<span class="quotelev1">&gt; machine. In both cases I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the mpirun -d trace when running my HelloWorld (on AMD64):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kyron_at_headless ~ $ mpirun -d --prefix 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] procdir: (null)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] universe default-universe-10461
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] user kyron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] host headless
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] jobid 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] procid 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0/0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: /usr/bin/ssh &lt;template&gt; orted --debug 
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe kyron_at_headless:default-universe-10461 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
</span><br>
<span class="quotelev1">&gt; to 1 (1 4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: reset PATH: 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/bin:/usr/local/bin:/usr/bin:/bin:/usr/x86_64-pc-linux-gnu/gcc-bin/4.1.1:/opt/c3-4:/usr/qt/3/bin:/usr/lib64/openmpi/1.0.2-gcc-4.1/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: reset LD_LIBRARY_PATH: 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: changing to directory /home/kyron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: executing: orted --debug --bootproxy 1 --name 
</span><br>
<span class="quotelev1">&gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe 
</span><br>
<span class="quotelev1">&gt; kyron_at_headless:default-universe-10461 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] ERROR: A daemon on node localhost failed to start as 
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [headless:10461] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The two platforms are very different, one is AMD64 (dual Opteron) with 
</span><br>
<span class="quotelev1">&gt; GCC 4.1.1 (Gentoo), the other is SUN OS 5.8 with GCC 3.4.2. OpenMPI was 
</span><br>
<span class="quotelev1">&gt; compiled with the following options (extracted from the config.status):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD64:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with options \&quot;'--prefix=/usr' '--host=x86_64-pc-linux-gnu' 
</span><br>
<span class="quotelev1">&gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info' 
</span><br>
<span class="quotelev1">&gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' 
</span><br>
<span class="quotelev1">&gt; '--prefix=/usr/lib64/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--program-suffix=-1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--enable-pretty-print-stacktrace' 
</span><br>
<span class="quotelev1">&gt; '--libdir=/usr/lib64/openmpi/1.0.2-gcc-4.1/lib64' 
</span><br>
<span class="quotelev1">&gt; '--build=x86_64-pc-linux-gnu' '--cache-file' 'config.cache' 
</span><br>
<span class="quotelev1">&gt; 'CFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays 
</span><br>
<span class="quotelev1">&gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 
</span><br>
<span class="quotelev1">&gt; 'CXXFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays 
</span><br>
<span class="quotelev1">&gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 'LDFLAGS= 
</span><br>
<span class="quotelev1">&gt; -Wl,-z,-noexecstack' 'build_alias=x86_64-pc-linux-gnu' 
</span><br>
<span class="quotelev1">&gt; 'host_alias=x86_64-pc-linux-gnu' --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUN 5.8:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with options 
</span><br>
<span class="quotelev1">&gt; \&quot;'--prefix=/export/lca/home/lca0/etudiants/ac38820/openmpi' 
</span><br>
<span class="quotelev1">&gt; '--enable-pretty-print-stacktrace' 'CFLAGS=-mv8plus' 'CXXFLAGS=-mv8plus' 
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; x86 (as a working reference, configure options should be close to 
</span><br>
<span class="quotelev1">&gt; identical as the AMD64):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with options \&quot;'--prefix=/usr' '--host=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev1">&gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info' 
</span><br>
<span class="quotelev1">&gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' 
</span><br>
<span class="quotelev1">&gt; '--prefix=/usr/lib/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--program-suffix=-1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev1">&gt; '--enable-pretty-print-stacktrace' '--build=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev1">&gt; '--cache-file' 'config.cache' 'CFLAGS=-march=nocona -O2 -pipe 
</span><br>
<span class="quotelev1">&gt; -fomit-frame-pointer' 'CXXFLAGS=-march=nocona -O2 -pipe 
</span><br>
<span class="quotelev1">&gt; -fomit-frame-pointer' 'LDFLAGS= -Wl,-z,-noexecstack' 
</span><br>
<span class="quotelev1">&gt; 'build_alias=i686-pc-linux-gnu' 'host_alias=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C. (514) 710-0517
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
<p><p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Previous message:</strong> <a href="1434.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?"</a>
<li><strong>In reply to:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
