<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 10:48:16 2006" -->
<!-- isoreceived="20060616144816" -->
<!-- sent="Fri, 16 Jun 2006 10:48:00 -0400" -->
<!-- isosent="20060616144800" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="200606161048.01095.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4492C0A5.3040207_at_Sun.COM" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 10:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1436.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>In reply to:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't want to get too much off topic in this reply but you're brigning out a point here. I am unable to run mpi apps on the AMD64 platform with the regular exporting of $LD_LIBRARY_PATH and $PATH, this is why I have no choice but to revert to using the --prefix approach. Here are a few execution examples to demonstrate my point:
<br>
<p>kyron_at_headless ~ $ /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix /usr/lib64/openmpi/1.0.2-gcc-4.1/ -np 2 ./a.out
<br>
./a.out: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
<br>
kyron_at_headless ~ $ /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 2 ./a.out
<br>
[headless:10827] pls:rsh: execv failed with errno=2
<br>
[headless:10827] ERROR: A daemon on node localhost failed to start as expected.
<br>
[headless:10827] ERROR: There may be more information available from
<br>
[headless:10827] ERROR: the remote shell (see above).
<br>
[headless:10827] ERROR: The daemon exited unexpectedly with status 255.
<br>
kyron_at_headless ~ $ cat opmpi64.sh
<br>
#!/bin/bash
<br>
MPI_BASE='/usr/lib64/openmpi/1.0.2-gcc-4.1'
<br>
export PATH=$PATH:${MPI_BASE}/bin
<br>
LD_LIBRARY_PATH=${MPI_BASE}/lib64
<br>
kyron_at_headless ~ $ . opmpi64.sh
<br>
kyron_at_headless ~ $ mpirun -np 2 ./a.out
<br>
./a.out: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
<br>
kyron_at_headless ~ $
<br>
<p>Eric
<br>
<p>Le vendredi 16 juin 2006 10:31, Pak Lui a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Hi, I noticed your prefix set to the lib dir, can you try without the 
</span><br>
<span class="quotelev1">&gt; lib64 part and rerun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, first off, I hope this problem I am reporting is of some validity, 
</span><br>
<span class="quotelev2">&gt; &gt; I tried finding simmilar situations off Google and the mailing list but 
</span><br>
<span class="quotelev2">&gt; &gt; came up with only one reference [1] which seems invalid in my case since 
</span><br>
<span class="quotelev2">&gt; &gt; all executions are local (na&#239;ve assumptions that it makes a difference 
</span><br>
<span class="quotelev2">&gt; &gt; on the calling stack). I am trying to run asimple HelloWorld using 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.0.2 on an AMD64 machine and a Sun Enterprise (12 procs) 
</span><br>
<span class="quotelev2">&gt; &gt; machine. In both cases I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is the mpirun -d trace when running my HelloWorld (on AMD64):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ mpirun -d --prefix 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 4 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] procdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] jobdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] unidir: 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] tmpdir /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] universe default-universe-10461
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] user kyron
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] host headless
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] procid 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] procdir: 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0/0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] jobdir: 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] unidir: 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] [0,0,0] contact_file 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/universe-setup.txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: /usr/bin/ssh &lt;template&gt; orted --debug 
</span><br>
<span class="quotelev2">&gt; &gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;template&gt; --universe kyron_at_headless:default-universe-10461 --nsreplica 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
</span><br>
<span class="quotelev2">&gt; &gt; to 1 (1 4)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: reset PATH: 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/bin:/usr/local/bin:/usr/bin:/bin:/usr/x86_64-pc-linux-gnu/gcc-bin/4.1.1:/opt/c3-4:/usr/qt/3/bin:/usr/lib64/openmpi/1.0.2-gcc-4.1/bin
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: reset LD_LIBRARY_PATH: 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/lib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: changing to directory /home/kyron
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: executing: orted --debug --bootproxy 1 --name 
</span><br>
<span class="quotelev2">&gt; &gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless:default-universe-10461 --nsreplica 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; --mpi-call-yield 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] ERROR: A daemon on node localhost failed to start as 
</span><br>
<span class="quotelev2">&gt; &gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10461] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The two platforms are very different, one is AMD64 (dual Opteron) with 
</span><br>
<span class="quotelev2">&gt; &gt; GCC 4.1.1 (Gentoo), the other is SUN OS 5.8 with GCC 3.4.2. OpenMPI was 
</span><br>
<span class="quotelev2">&gt; &gt; compiled with the following options (extracted from the config.status):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; AMD64:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; with options \&quot;'--prefix=/usr' '--host=x86_64-pc-linux-gnu' 
</span><br>
<span class="quotelev2">&gt; &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info' 
</span><br>
<span class="quotelev2">&gt; &gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' 
</span><br>
<span class="quotelev2">&gt; &gt; '--prefix=/usr/lib64/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--program-suffix=-1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--enable-pretty-print-stacktrace' 
</span><br>
<span class="quotelev2">&gt; &gt; '--libdir=/usr/lib64/openmpi/1.0.2-gcc-4.1/lib64' 
</span><br>
<span class="quotelev2">&gt; &gt; '--build=x86_64-pc-linux-gnu' '--cache-file' 'config.cache' 
</span><br>
<span class="quotelev2">&gt; &gt; 'CFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays 
</span><br>
<span class="quotelev2">&gt; &gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 
</span><br>
<span class="quotelev2">&gt; &gt; 'CXXFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays 
</span><br>
<span class="quotelev2">&gt; &gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 'LDFLAGS= 
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,-z,-noexecstack' 'build_alias=x86_64-pc-linux-gnu' 
</span><br>
<span class="quotelev2">&gt; &gt; 'host_alias=x86_64-pc-linux-gnu' --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; SUN 5.8:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; with options 
</span><br>
<span class="quotelev2">&gt; &gt; \&quot;'--prefix=/export/lca/home/lca0/etudiants/ac38820/openmpi' 
</span><br>
<span class="quotelev2">&gt; &gt; '--enable-pretty-print-stacktrace' 'CFLAGS=-mv8plus' 'CXXFLAGS=-mv8plus' 
</span><br>
<span class="quotelev2">&gt; &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; x86 (as a working reference, configure options should be close to 
</span><br>
<span class="quotelev2">&gt; &gt; identical as the AMD64):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; with options \&quot;'--prefix=/usr' '--host=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev2">&gt; &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info' 
</span><br>
<span class="quotelev2">&gt; &gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' 
</span><br>
<span class="quotelev2">&gt; &gt; '--prefix=/usr/lib/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--program-suffix=-1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' 
</span><br>
<span class="quotelev2">&gt; &gt; '--enable-pretty-print-stacktrace' '--build=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev2">&gt; &gt; '--cache-file' 'config.cache' 'CFLAGS=-march=nocona -O2 -pipe 
</span><br>
<span class="quotelev2">&gt; &gt; -fomit-frame-pointer' 'CXXFLAGS=-march=nocona -O2 -pipe 
</span><br>
<span class="quotelev2">&gt; &gt; -fomit-frame-pointer' 'LDFLAGS= -Wl,-z,-noexecstack' 
</span><br>
<span class="quotelev2">&gt; &gt; 'build_alias=i686-pc-linux-gnu' 'host_alias=i686-pc-linux-gnu' 
</span><br>
<span class="quotelev2">&gt; &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; T. (514) 736-1436
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; C. (514) 710-0517
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1436.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>In reply to:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
