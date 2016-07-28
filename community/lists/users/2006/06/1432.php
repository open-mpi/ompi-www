<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 09:55:34 2006" -->
<!-- isoreceived="20060616135534" -->
<!-- sent="Fri, 16 Jun 2006 09:55:25 -0400" -->
<!-- isosent="20060616135525" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="200606160955.25107.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2006-06-16 09:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Previous message:</strong> <a href="1431.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe reply:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Well, first off, I hope this problem I am reporting is of some validity, I tried finding simmilar situations off Google and the mailing list but came up with only one reference [1] which seems invalid in my case since all executions are local (na&#239;ve assumptions that it makes a difference on the calling stack). I am trying to run asimple HelloWorld using OpenMPI 1.0.2 on an AMD64 machine and a Sun Enterprise (12 procs) machine. In both cases I get the following error:
<br>
<p>pls:rsh: execv failed with errno=2
<br>
<p>Here is the mpirun -d trace when running my HelloWorld (on AMD64):
<br>
<p>kyron_at_headless ~ $ mpirun -d --prefix /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 4 ./hello
<br>
[headless:10461] procdir: (null)
<br>
[headless:10461] jobdir: (null)
<br>
[headless:10461] unidir: /tmp/openmpi-sessions-kyron_at_headless_0/default-universe
<br>
[headless:10461] top: openmpi-sessions-kyron_at_headless_0
<br>
[headless:10461] tmp: /tmp
<br>
[headless:10461] [0,0,0] setting up session dir with
<br>
[headless:10461]        tmpdir /tmp
<br>
[headless:10461]        universe default-universe-10461
<br>
[headless:10461]        user kyron
<br>
[headless:10461]        host headless
<br>
[headless:10461]        jobid 0
<br>
[headless:10461]        procid 0
<br>
[headless:10461] procdir: /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0/0
<br>
[headless:10461] jobdir: /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0
<br>
[headless:10461] unidir: /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461
<br>
[headless:10461] top: openmpi-sessions-kyron_at_headless_0
<br>
[headless:10461] tmp: /tmp
<br>
[headless:10461] [0,0,0] contact_file /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/universe-setup.txt
<br>
[headless:10461] [0,0,0] wrote setup file
<br>
[headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[headless:10461] pls:rsh: local csh: 0, local bash: 1
<br>
[headless:10461] pls:rsh: assuming same remote shell as local shell
<br>
[headless:10461] pls:rsh: remote csh: 0, remote bash: 1
<br>
[headless:10461] pls:rsh: final template argv:
<br>
[headless:10461] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt; --universe kyron_at_headless:default-universe-10461 --nsreplica &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --mpi-call-yield 0
<br>
[headless:10461] pls:rsh: launching on node localhost
<br>
[headless:10461] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1 (1 4)
<br>
[headless:10461] pls:rsh: localhost is a LOCAL node
<br>
[headless:10461] pls:rsh: reset PATH: /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/bin:/usr/local/bin:/usr/bin:/bin:/usr/x86_64-pc-linux-gnu/gcc-bin/4.1.1:/opt/c3-4:/usr/qt/3/bin:/usr/lib64/openmpi/1.0.2-gcc-4.1/bin
<br>
[headless:10461] pls:rsh: reset LD_LIBRARY_PATH: /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/lib
<br>
[headless:10461] pls:rsh: changing to directory /home/kyron
<br>
[headless:10461] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe kyron_at_headless:default-universe-10461 --nsreplica &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --gprreplica &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; --mpi-call-yield 1
<br>
[headless:10461] pls:rsh: execv failed with errno=2
<br>
[headless:10461] sess_dir_finalize: proc session dir not empty - leaving
<br>
[headless:10461] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
[headless:10461] sess_dir_finalize: proc session dir not empty - leaving
<br>
[headless:10461] sess_dir_finalize: proc session dir not empty - leaving
<br>
[headless:10461] sess_dir_finalize: proc session dir not empty - leaving
<br>
[headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
[headless:10461] ERROR: A daemon on node localhost failed to start as expected.
<br>
[headless:10461] ERROR: There may be more information available from
<br>
[headless:10461] ERROR: the remote shell (see above).
<br>
[headless:10461] ERROR: The daemon exited unexpectedly with status 255.
<br>
[headless:10461] sess_dir_finalize: found proc session dir empty - deleting
<br>
[headless:10461] sess_dir_finalize: found job session dir empty - deleting
<br>
[headless:10461] sess_dir_finalize: found univ session dir empty - deleting
<br>
[headless:10461] sess_dir_finalize: top session dir not empty - leaving
<br>
<p>The two platforms are very different, one is AMD64 (dual Opteron) with GCC 4.1.1 (Gentoo), the other is SUN OS 5.8 with GCC 3.4.2. OpenMPI was compiled with the following options (extracted from the config.status):
<br>
<p>AMD64: 
<br>
Open MPI config.status 1.0.2
<br>
configured by ./configure, generated by GNU Autoconf 2.59,
<br>
&nbsp;&nbsp;with options \&quot;'--prefix=/usr' '--host=x86_64-pc-linux-gnu' '--mandir=/usr/share/man' '--infodir=/usr/share/info' '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' '--prefix=/usr/lib64/openmpi/1.0.2-gcc-4.1' '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' '--program-suffix=-1.0.2-gcc-4.1' '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' '--enable-pretty-print-stacktrace' '--libdir=/usr/lib64/openmpi/1.0.2-gcc-4.1/lib64' '--build=x86_64-pc-linux-gnu' '--cache-file' 'config.cache' 'CFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 'CXXFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 'LDFLAGS= -Wl,-z,-noexecstack' 'build_alias=x86_64-pc-linux-gnu' 'host_alias=x86_64-pc-linux-gnu' --enable-ltdl-convenience\&quot;
<br>
<p>SUN 5.8:
<br>
Open MPI config.status 1.0.2
<br>
configured by ./configure, generated by GNU Autoconf 2.59,
<br>
&nbsp;&nbsp;with options \&quot;'--prefix=/export/lca/home/lca0/etudiants/ac38820/openmpi' '--enable-pretty-print-stacktrace' 'CFLAGS=-mv8plus' 'CXXFLAGS=-mv8plus' --enable-ltdl-convenience\&quot;
<br>
<p>x86 (as a working reference, configure options should be close to identical as the AMD64):
<br>
Open MPI config.status 1.0.2
<br>
configured by ./configure, generated by GNU Autoconf 2.59,
<br>
&nbsp;&nbsp;with options \&quot;'--prefix=/usr' '--host=i686-pc-linux-gnu' '--mandir=/usr/share/man' '--infodir=/usr/share/info' '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib' '--prefix=/usr/lib/openmpi/1.0.2-gcc-4.1' '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1' '--program-suffix=-1.0.2-gcc-4.1' '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1' '--enable-pretty-print-stacktrace' '--build=i686-pc-linux-gnu' '--cache-file' 'config.cache' 'CFLAGS=-march=nocona -O2 -pipe -fomit-frame-pointer' 'CXXFLAGS=-march=nocona -O2 -pipe -fomit-frame-pointer' 'LDFLAGS= -Wl,-z,-noexecstack' 'build_alias=i686-pc-linux-gnu' 'host_alias=i686-pc-linux-gnu' --enable-ltdl-convenience\&quot;
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Thanks.
<br>
<p>[1] <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775</a>
<br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Previous message:</strong> <a href="1431.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe reply:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
