<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 16:50:52 2007" -->
<!-- isoreceived="20070201215052" -->
<!-- sent="Thu, 1 Feb 2007 16:50:44 -0500" -->
<!-- isosent="20070201215044" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="2453e2900702011350n53c4c9c3gfdc9ceaef2600344_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2453e2900702011106gc8abc2ew37b556e0f1b9374e_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-01 16:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>In reply to:</strong> <a href="2577.php">Alex Tumanov: "[OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have kept doing my own investigation and recompiled OpenMPI to have
<br>
only the barebones functionality with no support for any interconnects
<br>
other than ethernet:
<br>
# rpmbuild --rebuild --define=&quot;configure_options
<br>
--prefix=/opt/openmpi/1.1.4&quot; --define=&quot;install_in_opt 1&quot;
<br>
--define=&quot;mflags all&quot; openmpi-1.1.4-1.src.rpm
<br>
<p>The error detailed in my previous message persisted, which eliminates
<br>
the possibility of interconnect support interfering with ethernet
<br>
support. Here's an excerpt from ompi_info:
<br>
# ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1.4
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r13362
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1.4
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r13362
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r13362
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/openmpi/1.1.4
<br>
&nbsp;Configured architecture: x86_64-redhat-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. . .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. . .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>Again, to replicate the error, I ran
<br>
# mpirun -hostfile ~/testdir/hosts  --mca btl tcp,self ~/testdir/hello
<br>
In this case, you can even omit the runtime mca param specifications:
<br>
# mpirun -hostfile ~/testdir/hosts  ~/testdir/hello
<br>
<p>Thanks for reading this. I hope I've provided enough information.
<br>
<p>Sincerely,
<br>
Alex.
<br>
<p>On 2/1/07, Alex Tumanov &lt;atumanov_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried a very basic test on a 2 node &quot;cluster&quot; consisting of 2
</span><br>
<span class="quotelev1">&gt; dell boxes. One of them is dual CPU Intel(R) Xeon(TM) CPU 2.80GHz with
</span><br>
<span class="quotelev1">&gt; 1GB of RAM and the slave node is quad-CPU Intel(R) Xeon(TM) CPU
</span><br>
<span class="quotelev1">&gt; 3.40GHz with 2GB of RAM. Both have Infiniband cards and Gig-E. The
</span><br>
<span class="quotelev1">&gt; slave node is connected directly to the headnode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.1.4 was compiled with support for the following
</span><br>
<span class="quotelev1">&gt; btl's: openib,mx,gm, and mvapi. I got it to work over openib, but,
</span><br>
<span class="quotelev1">&gt; ironically, the same trivial hello world job fails over tcp (please
</span><br>
<span class="quotelev1">&gt; see the log below). I found that the same problem was already
</span><br>
<span class="quotelev1">&gt; discussed on this list here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1347.php">http://www.open-mpi.org/community/lists/users/2006/06/1347.php</a>
</span><br>
<span class="quotelev1">&gt; The discussion mentioned that there could be something wrong with the
</span><br>
<span class="quotelev1">&gt; TCP setup of the nodes. Unfortunately it was taken offline. Could
</span><br>
<span class="quotelev1">&gt; someone help me with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -hostfile ~/testdir/hosts --mca btl tcp,self ~/testdir/hello
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 0 on headnode out of 2
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 1 on compute-0-0.local out of 2
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xdebdf8
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a9587e0e5]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3d1a00c430]
</span><br>
<span class="quotelev1">&gt; [2] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a95880729]
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/openmpi/1.1.4/lib/libopal.so.0(_int_free+0x24a) [0x2a95880d7a]
</span><br>
<span class="quotelev1">&gt; [4] func:/opt/openmpi/1.1.4/lib/libopal.so.0(free+0xbf) [0x2a9588303f]
</span><br>
<span class="quotelev1">&gt; [5] func:/opt/openmpi/1.1.4/lib/libmpi.so.0 [0x2a955949ca]
</span><br>
<span class="quotelev1">&gt; [6] func:/opt/openmpi/1.1.4/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_close+0x34f)
</span><br>
<span class="quotelev1">&gt; [0x2a988ee8ef]
</span><br>
<span class="quotelev1">&gt; [7] func:/opt/openmpi/1.1.4/lib/libopal.so.0(mca_base_components_close+0xde)
</span><br>
<span class="quotelev1">&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev1">&gt; [8] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_btl_base_close+0xe9)
</span><br>
<span class="quotelev1">&gt; [0x2a955e5159]
</span><br>
<span class="quotelev1">&gt; [9] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_bml_base_close+0x9)
</span><br>
<span class="quotelev1">&gt; [0x2a955e5029]
</span><br>
<span class="quotelev1">&gt; [10] func:/opt/openmpi/1.1.4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_close+0x25)
</span><br>
<span class="quotelev1">&gt; [0x2a97f4dc55]
</span><br>
<span class="quotelev1">&gt; [11] func:/opt/openmpi/1.1.4/lib/libopal.so.0(mca_base_components_close+0xde)
</span><br>
<span class="quotelev1">&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev1">&gt; [12] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_pml_base_close+0x69)
</span><br>
<span class="quotelev1">&gt; [0x2a955ea3e9]
</span><br>
<span class="quotelev1">&gt; [13] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(ompi_mpi_finalize+0xfe)
</span><br>
<span class="quotelev1">&gt; [0x2a955ab57e]
</span><br>
<span class="quotelev1">&gt; [14] func:/root/testdir/hello(main+0x7b) [0x4009d3]
</span><br>
<span class="quotelev1">&gt; [15] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3d1951c3fb]
</span><br>
<span class="quotelev1">&gt; [16] func:/root/testdir/hello [0x4008ca]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 15573 on node &quot;dr11.local&quot;
</span><br>
<span class="quotelev1">&gt; exited on signal 11.
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>In reply to:</strong> <a href="2577.php">Alex Tumanov: "[OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
