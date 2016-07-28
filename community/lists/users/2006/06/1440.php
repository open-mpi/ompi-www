<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 17:33:02 2006" -->
<!-- isoreceived="20060616213302" -->
<!-- sent="Fri, 16 Jun 2006 17:32:48 -0400" -->
<!-- isosent="20060616213248" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43611_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] pls:rsh: execv failed with errno=2" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 17:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Previous message:</strong> <a href="1439.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe in reply to:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for jumping in late...
<br>
<p>The /lib vs. /lib64 thing as part of --prefix was definitely broken until recently.  This behavior has been fixed in the 1.1 series.  Specifically, OMPI will take the prefix that you provided and append the basename of the local $libdir.  So if you configured OMPI with something like:
<br>
<p>&nbsp;shell$ ./configure --libdir=/some/path/lib64 ...
<br>
<p>And then you run:
<br>
<p>&nbsp;shell$ mpirun --prefix /some/path ...
<br>
<p>Then OMPI will add /some/path/lib64 to the remote LD_LIBRARY_PATH.  The previous behavior would always add &quot;/lib&quot; to the remote LD_LIBRARY_PATH, regardless of what the local $libdir was (i.e., it ignored the basename of your $libdir).  
<br>
<p>If you have a situation more complicated than this (e.g., your $libdir is different than your prefix by more than just the basename), then --prefix is not the solution for you.  Instead, you'll need to set your $PATH and $LD_LIBRARY_PATH properly on all nodes (e.g., in your shell startup files). Specifically, --prefix is meant to be an easy workaround for common configurations where $libdir is a subdirectory under $prefix.
<br>
<p>Another random note: invoking mpirun with an absolute path (e.g., /path/to/bin/mpirun) is exactly the same as specifying --prefix /path/to -- so you don't have to do both.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 16, 2006 11:47 AM
</span><br>
<span class="quotelev1">&gt; To: Pak.Lui_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for pointing out the LD_LIBRARY_PATH64 ...that 
</span><br>
<span class="quotelev1">&gt; explains much. As for the original error, I am still &quot;a duck 
</span><br>
<span class="quotelev1">&gt; out of watter&quot;. I will try the 1.1rxxx trunck though 
</span><br>
<span class="quotelev1">&gt; (creating an ebuild for it as we speak)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le vendredi 16 juin 2006 11:44, Pak Lui a &#233;crit&#160;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Eric,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I started to see what you are saying. You tried to point 
</span><br>
<span class="quotelev1">&gt; out that you 
</span><br>
<span class="quotelev2">&gt; &gt; are using the libdir to lib64 instead of just lib and 
</span><br>
<span class="quotelev1">&gt; somehow it doesn't 
</span><br>
<span class="quotelev2">&gt; &gt; get picked up.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I personally have not tried this option though, so I don't 
</span><br>
<span class="quotelev1">&gt; think I can 
</span><br>
<span class="quotelev2">&gt; &gt; help you much here. But I saw that there are changes in the rsh pls 
</span><br>
<span class="quotelev2">&gt; &gt; module for the trunk and 1.1 versions (r9930, 9931, 10207, 
</span><br>
<span class="quotelev1">&gt; 10214) that 
</span><br>
<span class="quotelev2">&gt; &gt; may solve your lib64 issue. If you do ldd on a.out, it'd show the 
</span><br>
<span class="quotelev2">&gt; &gt; libraries it linked to. Other than that, setting should the 
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH64 shouldn't make a different either.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure if others can help you on this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't want to get too much off topic in this reply but 
</span><br>
<span class="quotelev1">&gt; you're brigning 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; out a point here. I am unable to run mpi apps on the 
</span><br>
<span class="quotelev1">&gt; AMD64 platform with 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the regular exporting of $LD_LIBRARY_PATH and $PATH, this 
</span><br>
<span class="quotelev1">&gt; is why I have 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; no choice but to revert to using the --prefix approach. 
</span><br>
<span class="quotelev1">&gt; Here are a few 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; execution examples to demonstrate my point:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $ 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/ -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./a.out: error while loading shared libraries: 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0: cannot open 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $ 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/bin/mpirun --prefix 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [headless:10827] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [headless:10827] ERROR: A daemon on node localhost failed 
</span><br>
<span class="quotelev1">&gt; to start as 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [headless:10827] ERROR: There may be more information 
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [headless:10827] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [headless:10827] ERROR: The daemon exited unexpectedly 
</span><br>
<span class="quotelev1">&gt; with status 255.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $ cat opmpi64.sh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_BASE='/usr/lib64/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; export PATH=$PATH:${MPI_BASE}/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; LD_LIBRARY_PATH=${MPI_BASE}/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $ . opmpi64.sh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./a.out: error while loading shared libraries: 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0: cannot open 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kyron_at_headless ~ $
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eric
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le vendredi 16 juin 2006 10:31, Pak Lui a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;  &gt; Hi, I noticed your prefix set to the lib dir, can you 
</span><br>
<span class="quotelev1">&gt; try without the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;  &gt; lib64 part and rerun?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;  &gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; Hello everyone,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; Well, first off, I hope this problem I am reporting 
</span><br>
<span class="quotelev1">&gt; is of some 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; validity,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; I tried finding simmilar situations off Google and 
</span><br>
<span class="quotelev1">&gt; the mailing list 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; came up with only one reference [1] which seems 
</span><br>
<span class="quotelev1">&gt; invalid in my case 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; since
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; all executions are local (na&#239;ve assumptions that it 
</span><br>
<span class="quotelev1">&gt; makes a difference
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; on the calling stack). I am trying to run asimple 
</span><br>
<span class="quotelev1">&gt; HelloWorld using
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; OpenMPI 1.0.2 on an AMD64 machine and a Sun 
</span><br>
<span class="quotelev1">&gt; Enterprise (12 procs)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; machine. In both cases I get the following error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; Here is the mpirun -d trace when running my 
</span><br>
<span class="quotelev1">&gt; HelloWorld (on AMD64):
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; kyron_at_headless ~ $ mpirun -d --prefix
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/ -np 4 ./hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; [headless:10461] procdir: (null)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; [headless:10461] jobdir: (null)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; [headless:10461] unidir:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;  &gt; &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] tmpdir /tmp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] universe default-universe-10461
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] user kyron
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] host headless
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] jobid 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] procid 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] procdir:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0/0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] jobdir:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] unidir:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] top: openmpi-sessions-kyron_at_headless_0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] tmp: /tmp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] contact_file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-kyron_at_headless_0/default-universe-10461/
</span><br>
<span class="quotelev1">&gt; universe-setup.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] [0,0,0] wrote setup file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 
</span><br>
<span class="quotelev1">&gt; 1, state = 0x1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: assuming same remote shell 
</span><br>
<span class="quotelev1">&gt; as local shell
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: /usr/bin/ssh &lt;template&gt; 
</span><br>
<span class="quotelev1">&gt; orted --debug
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 
</span><br>
<span class="quotelev1">&gt; --vpid_start 0 --nodename
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; &lt;template&gt; --universe 
</span><br>
<span class="quotelev1">&gt; kyron_at_headless:default-universe-10461 --nsreplica
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --gprreplica
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --mpi-call-yield 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; to 1 (1 4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: reset PATH:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/bin:/usr/local/bin:/usr
</span><br>
/bin:/bin:/usr/x86_64-pc-linux-gnu/gcc-&gt; bin/4.1.1:/opt/c3-4:/usr/qt/3/bin:/usr/lib64/openmpi/1.0.2-gcc-4.1/bin
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: reset LD_LIBRARY_PATH:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; /usr/lib64/openmpi/1.0.2-gcc-4.1/lib64/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: changing to directory /home/kyron
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: executing: orted --debug 
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev1">&gt; localhost --universe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; kyron_at_headless:default-universe-10461 --nsreplica
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --gprreplica
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; &quot;0.0.0;tcp://142.137.135.124:37657;tcp://192.168.1.1:37657&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --mpi-call-yield 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] pls:rsh: execv failed with errno=2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir 
</span><br>
<span class="quotelev1">&gt; not empty - leaving
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 
</span><br>
<span class="quotelev1">&gt; 1, state = 0xa)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir 
</span><br>
<span class="quotelev1">&gt; not empty - leaving
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir 
</span><br>
<span class="quotelev1">&gt; not empty - leaving
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: proc session dir 
</span><br>
<span class="quotelev1">&gt; not empty - leaving
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] spawn: in job_state_callback(jobid = 
</span><br>
<span class="quotelev1">&gt; 1, state = 0x9)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] ERROR: A daemon on node localhost 
</span><br>
<span class="quotelev1">&gt; failed to start as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] ERROR: There may be more information 
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] ERROR: The daemon exited 
</span><br>
<span class="quotelev1">&gt; unexpectedly with status 255.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found proc 
</span><br>
<span class="quotelev1">&gt; session dir empty - 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deleting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found job session 
</span><br>
<span class="quotelev1">&gt; dir empty - 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deleting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: found univ 
</span><br>
<span class="quotelev1">&gt; session dir empty - 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deleting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [headless:10461] sess_dir_finalize: top session dir 
</span><br>
<span class="quotelev1">&gt; not empty - leaving
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; The two platforms are very different, one is AMD64 
</span><br>
<span class="quotelev1">&gt; (dual Opteron) with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; GCC 4.1.1 (Gentoo), the other is SUN OS 5.8 with GCC 
</span><br>
<span class="quotelev1">&gt; 3.4.2. OpenMPI was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; compiled with the following options (extracted from 
</span><br>
<span class="quotelev1">&gt; the config.status):
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; AMD64:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; with options \&quot;'--prefix=/usr' '--host=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--datadir=/usr/share' '--sysconfdir=/etc' 
</span><br>
<span class="quotelev1">&gt; '--localstatedir=/var/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--prefix=/usr/lib64/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--program-suffix=-1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--libdir=/usr/lib64/openmpi/1.0.2-gcc-4.1/lib64'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--build=x86_64-pc-linux-gnu' '--cache-file' 'config.cache'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 'CFLAGS=-march=opteron -O2 -pipe -ftracer 
</span><br>
<span class="quotelev1">&gt; -fprefetch-loop-arrays
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; -mfpmath=sse -ffast-math -ftree-vectorize -floop-optimize2'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 'CXXFLAGS=-march=opteron -O2 -pipe -ftracer 
</span><br>
<span class="quotelev1">&gt; -fprefetch-loop-arrays
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; -mfpmath=sse -ffast-math -ftree-vectorize 
</span><br>
<span class="quotelev1">&gt; -floop-optimize2' 'LDFLAGS=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; -Wl,-z,-noexecstack' 'build_alias=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 'host_alias=x86_64-pc-linux-gnu' --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; SUN 5.8:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; with options
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; \&quot;'--prefix=/export/lca/home/lca0/etudiants/ac38820/openmpi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace' 'CFLAGS=-mv8plus' 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 'CXXFLAGS=-mv8plus'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; x86 (as a working reference, configure options should 
</span><br>
<span class="quotelev1">&gt; be close to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; identical as the AMD64):
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Open MPI config.status 1.0.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; with options \&quot;'--prefix=/usr' '--host=i686-pc-linux-gnu'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--datadir=/usr/share' '--sysconfdir=/etc' 
</span><br>
<span class="quotelev1">&gt; '--localstatedir=/var/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--prefix=/usr/lib/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--datadir=/usr/share/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--program-suffix=-1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--sysconfdir=/etc/openmpi/1.0.2-gcc-4.1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--enable-pretty-print-stacktrace' '--build=i686-pc-linux-gnu'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; '--cache-file' 'config.cache' 'CFLAGS=-march=nocona -O2 -pipe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; -fomit-frame-pointer' 'CXXFLAGS=-march=nocona -O2 -pipe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; -fomit-frame-pointer' 'LDFLAGS= -Wl,-z,-noexecstack'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 'build_alias=i686-pc-linux-gnu' 'host_alias=i686-pc-linux-gnu'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; [1] 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;ms">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;ms</a>
</span><br>
<span class="quotelev1">&gt; gNo=15775
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; T. (514) 736-1436
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; C. (514) 710-0517
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; T. (514) 736-1436
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; C. (514) 710-0517
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt; T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt; C. (514) 710-0517
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Previous message:</strong> <a href="1439.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe in reply to:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Reply:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
