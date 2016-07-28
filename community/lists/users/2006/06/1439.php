<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 11:47:16 2006" -->
<!-- isoreceived="20060616154716" -->
<!-- sent="Fri, 16 Jun 2006 11:47:08 -0400" -->
<!-- isosent="20060616154708" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="200606161147.08457.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4492D1C6.8090301_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-06-16 11:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>In reply to:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for pointing out the LD_LIBRARY_PATH64 ...that explains much. As for the original error, I am still &quot;a duck out of watter&quot;. I will try the 1.1rxxx trunck though (creating an ebuild for it as we speak)
<br>
<p>Eric
<br>
<p>Le vendredi 16 juin 2006 11:44, Pak Lui a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started to see what you are saying. You tried to point out that you 
</span><br>
<span class="quotelev1">&gt; are using the libdir to lib64 instead of just lib and somehow it doesn't 
</span><br>
<span class="quotelev1">&gt; get picked up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I personally have not tried this option though, so I don't think I can 
</span><br>
<span class="quotelev1">&gt; help you much here. But I saw that there are changes in the rsh pls 
</span><br>
<span class="quotelev1">&gt; module for the trunk and 1.1 versions (r9930, 9931, 10207, 10214) that 
</span><br>
<span class="quotelev1">&gt; may solve your lib64 issue. If you do ldd on a.out, it'd show the 
</span><br>
<span class="quotelev1">&gt; libraries it linked to. Other than that, setting should the 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH64 shouldn't make a different either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if others can help you on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't want to get too much off topic in this reply but you're brigning 
</span><br>
<span class="quotelev2">&gt; &gt; out a point here. I am unable to run mpi apps on the AMD64 platform with 
</span><br>
<span class="quotelev2">&gt; &gt; the regular exporting of $LD_LIBRARY_PATH and $PATH, this is why I have 
</span><br>
<span class="quotelev2">&gt; &gt; no choice but to revert to using the --prefix approach. Here are a few 
</span><br>
<span class="quotelev2">&gt; &gt; execution examples to demonstrate my point:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/ -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./a.out: error while loading shared libraries: libmpi.so.0: cannot open 
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10827] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10827] ERROR: A daemon on node localhost failed to start as 
</span><br>
<span class="quotelev2">&gt; &gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10827] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10827] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [headless:10827] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ cat opmpi64.sh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_BASE='/usr/lib64/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=$PATH:${MPI_BASE}/bin
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=${MPI_BASE}/lib64
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ . opmpi64.sh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./a.out: error while loading shared libraries: libmpi.so.0: cannot open 
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~ $
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eric
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le vendredi 16 juin 2006 10:31, Pak Lui a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Hi, I noticed your prefix set to the lib dir, can you try without the
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; lib64 part and rerun?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; Well, first off, I hope this problem I am reporting is of some 
</span><br>
<span class="quotelev2">&gt; &gt; validity,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; I tried finding simmilar situations off Google and the mailing list 
</span><br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; came up with only one reference [1] which seems invalid in my case 
</span><br>
<span class="quotelev2">&gt; &gt; since
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; all executions are local (na&#239;ve assumptions that it makes a difference
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; on the calling stack). I am trying to run asimple HelloWorld using
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; OpenMPI 1.0.2 on an AMD64 machine and a Sun Enterprise (12 procs)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; machine. In both cases I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; Here is the mpirun -d trace when running my HelloWorld (on AMD64):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; kyron_at_headless ~ $ mpirun -d --prefix
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 4 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; [headless:10461] procdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; [headless:10461] jobdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; [headless:10461] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;  &gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] tmpdir /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] universe default-universe-10461
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] user kyron
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] host headless
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] procid 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0/0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/universe-setup.txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; &lt;template&gt; --universe kyron_at_headless:default-universe-10461 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: oversubscribed -- setting mpi_yield_when_idle
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; to 1 (1 4)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: reset PATH:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/bin:/usr/local/bin:/usr/bin:/bin:/usr/x86_64-pc-linux-gnu/gcc-bin/4.1.1:/opt/c3-4:/usr/qt/3/bin:/usr/lib64/openmpi/1.0.2-gcc-4.1/bin
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: reset LD_LIBRARY_PATH:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/lib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: changing to directory /home/kyron
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: executing: orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; kyron_at_headless:default-universe-10461 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --mpi-call-yield 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found proc session dir empty - 
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found job session dir empty - 
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found univ session dir empty - 
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; The two platforms are very different, one is AMD64 (dual Opteron) with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; GCC 4.1.1 (Gentoo), the other is SUN OS 5.8 with GCC 3.4.2. OpenMPI was
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; compiled with the following options (extracted from the config.status):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; AMD64:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; with options \&quot;'--prefix=/usr' '--host=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--prefix=/usr/lib64/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--program-suffix=-1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--libdir=/usr/lib64/openmpi/1.0.2-gcc-4.1/lib64'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--build=x86_64-pc-linux-gnu' '--cache-file' 'config.cache'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 'CFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 'CXXFLAGS=-march=opteron -O2 -pipe -ftracer -fprefetch-loop-arrays
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2' 'LDFLAGS=
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; -Wl,-z,-noexecstack' 'build_alias=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 'host_alias=x86_64-pc-linux-gnu' --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; SUN 5.8:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; with options
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; \&quot;'--prefix=/export/lca/home/lca0/etudiants/ac38820/openmpi'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace' 'CFLAGS=-mv8plus' 
</span><br>
<span class="quotelev2">&gt; &gt; 'CXXFLAGS=-mv8plus'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; x86 (as a working reference, configure options should be close to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; identical as the AMD64):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; with options \&quot;'--prefix=/usr' '--host=i686-pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--datadir=/usr/share' '--sysconfdir=/etc' '--localstatedir=/var/lib'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--prefix=/usr/lib/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--program-suffix=-1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace' '--build=i686-pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; '--cache-file' 'config.cache' 'CFLAGS=-march=nocona -O2 -pipe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; -fomit-frame-pointer' 'CXXFLAGS=-march=nocona -O2 -pipe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; -fomit-frame-pointer' 'LDFLAGS= -Wl,-z,-noexecstack'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; 'build_alias=i686-pc-linux-gnu' 'host_alias=i686-pc-linux-gnu'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; [1] 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=15775</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; T. (514) 736-1436
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; C. (514) 710-0517
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>In reply to:</strong> <a href="1438.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
