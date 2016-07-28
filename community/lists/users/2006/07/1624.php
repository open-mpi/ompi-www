<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 15 16:58:58 2006" -->
<!-- isoreceived="20060715205858" -->
<!-- sent="Sat, 15 Jul 2006 16:58:26 -0400" -->
<!-- isosent="20060715205826" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR" -->
<!-- id="200607151658.27094.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2006-07-15 16:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've been trying to set up a small test cluster with a dual Opteron head and Athlon nodes. My environment in both cases is Gentoo and the nodes boot off PXE using an image built and stored on the master node. I chroot into the node's environment using:
<br>
<p>linux32 chroot ${ROOT} /bin/bash
<br>
<p>To cross over the 64/32bit barrier. My user's home direcory is loop-mounted into that environment and NFS exported to the nodes. I build OpenMPI in the following way:
<br>
<p>In the build folder of OpenMPI-1.1:
<br>
./configure --cache-file=config_`uname -m`.cache --enable-pretty-print-stacktrace --prefix=$HOME/openmpi_`uname -m`
<br>
make -j4 &amp;&amp; make install
<br>
<p>I perform this exact same command in the Opteron and chrooted environment for the Athlon machines. This then gives me the following folders in my $HOME:
<br>
/home/kyron/openmpi_i686
<br>
/home/kyron/openmpi_x86_64
<br>
<p>But, for some reason, on the Athlon node (in their image on the server I should say) OpenMPI still doesn't seem to be built correctly since it crashes as follows:
<br>
<p>kyron_at_node0 ~ $ mpirun -np 1 uptime
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
[0] func:/home/kyron/openmpi_i686/lib/libopal.so.0 [0xb7f6258f]
<br>
[1] func:[0xffffe440]
<br>
[2] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init_stage1+0x1d7) [0xb7fa0227]
<br>
[3] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_system_init+0x23) [0xb7fa3683]
<br>
[4] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init+0x5f) [0xb7f9ff7f]
<br>
[5] func:mpirun(orterun+0x255) [0x804a015]
<br>
[6] func:mpirun(main+0x22) [0x8049db6]
<br>
[7] func:/lib/tls/libc.so.6(__libc_start_main+0xdb) [0xb7de8f0b]
<br>
[8] func:mpirun [0x8049d11]
<br>
*** End of error message ***
<br>
Segmentation fault
<br>
<p>The crash happens both in the chrooted env and on the  nodes. I configured both systems to have Linux and POSIX threads, though I see openmpi is calling the POSIX version (a message on the mailling list had hinted on keeping the Linux threads around...I have to anyways since sone apps like Matlab extensions still depend on this...). The following is the output for the libc info.
<br>
<p>kyron_at_headless ~ $ /lib/tls/libc.so.6
<br>
GNU C Library stable release version 2.3.6, by Roland McGrath et al.
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Compiled by GNU CC version 4.1.1 (Gentoo 4.1.1).
<br>
Compiled on a Linux 2.6.11 system on 2006-07-14.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The C stubs add-on version 2.1.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>I am attaching the config.log and ompi_info for both platforms. Before sending this e-mail I tried compiling OpenMPI on one of the nodes (booted off the image) and I am getting the exact same problem (so chroot vs local build doesn't seem to be a factor). The attached file contains:
<br>
<p>config.log.x86_64	&lt;--config log for the Opteron build (works locally)
<br>
config.log_node0	&lt;--config log for the Athlon build (on the node)
<br>
ompi_info.i686	&lt;--ompi_info on the Athlon node
<br>
ompi_info.x86_64	&lt;--ompi_info on the Opteron Master
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tbz attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1624/ENV_info.tbz">ENV_info.tbz</a>
</ul>
<!-- attachment="ENV_info.tbz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
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
