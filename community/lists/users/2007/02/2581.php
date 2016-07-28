<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 21:09:31 2007" -->
<!-- isoreceived="20070202020931" -->
<!-- sent="Thu, 1 Feb 2007 19:09:23 -0700" -->
<!-- isosent="20070202020923" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="18A834C9-5ECB-459E-B6C4-DD9E2D7E56A2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702011350n53c4c9c3gfdc9ceaef2600344_at_mail.gmail.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-01 21:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What does ifconfig report on both nodes?
<br>
<p>- Galen
<br>
<p>On Feb 1, 2007, at 2:50 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have kept doing my own investigation and recompiled OpenMPI to have
</span><br>
<span class="quotelev1">&gt; only the barebones functionality with no support for any interconnects
</span><br>
<span class="quotelev1">&gt; other than ethernet:
</span><br>
<span class="quotelev1">&gt; # rpmbuild --rebuild --define=&quot;configure_options
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.1.4&quot; --define=&quot;install_in_opt 1&quot;
</span><br>
<span class="quotelev1">&gt; --define=&quot;mflags all&quot; openmpi-1.1.4-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error detailed in my previous message persisted, which eliminates
</span><br>
<span class="quotelev1">&gt; the possibility of interconnect support interfering with ethernet
</span><br>
<span class="quotelev1">&gt; support. Here's an excerpt from ompi_info:
</span><br>
<span class="quotelev1">&gt; # ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r13362
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r13362
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r13362
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/openmpi/1.1.4
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt;              . . .
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;              . . .
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, to replicate the error, I ran
</span><br>
<span class="quotelev1">&gt; # mpirun -hostfile ~/testdir/hosts  --mca btl tcp,self ~/testdir/hello
</span><br>
<span class="quotelev1">&gt; In this case, you can even omit the runtime mca param specifications:
</span><br>
<span class="quotelev1">&gt; # mpirun -hostfile ~/testdir/hosts  ~/testdir/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reading this. I hope I've provided enough information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/1/07, Alex Tumanov &lt;atumanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried a very basic test on a 2 node &quot;cluster&quot; consisting of 2
</span><br>
<span class="quotelev2">&gt;&gt; dell boxes. One of them is dual CPU Intel(R) Xeon(TM) CPU 2.80GHz  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; 1GB of RAM and the slave node is quad-CPU Intel(R) Xeon(TM) CPU
</span><br>
<span class="quotelev2">&gt;&gt; 3.40GHz with 2GB of RAM. Both have Infiniband cards and Gig-E. The
</span><br>
<span class="quotelev2">&gt;&gt; slave node is connected directly to the headnode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI version 1.1.4 was compiled with support for the following
</span><br>
<span class="quotelev2">&gt;&gt; btl's: openib,mx,gm, and mvapi. I got it to work over openib, but,
</span><br>
<span class="quotelev2">&gt;&gt; ironically, the same trivial hello world job fails over tcp (please
</span><br>
<span class="quotelev2">&gt;&gt; see the log below). I found that the same problem was already
</span><br>
<span class="quotelev2">&gt;&gt; discussed on this list here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1347.php">http://www.open-mpi.org/community/lists/users/2006/06/1347.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; The discussion mentioned that there could be something wrong with the
</span><br>
<span class="quotelev2">&gt;&gt; TCP setup of the nodes. Unfortunately it was taken offline. Could
</span><br>
<span class="quotelev2">&gt;&gt; someone help me with this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -hostfile ~/testdir/hosts --mca btl tcp,self ~/testdir/hello
</span><br>
<span class="quotelev2">&gt;&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on headnode out of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on compute-0-0.local out of 2
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xdebdf8
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a9587e0e5]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3d1a00c430]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a95880729]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/opt/openmpi/1.1.4/lib/libopal.so.0(_int_free+0x24a)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a95880d7a]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/opt/openmpi/1.1.4/lib/libopal.so.0(free+0xbf)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a9588303f]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/opt/openmpi/1.1.4/lib/libmpi.so.0 [0x2a955949ca]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:/opt/openmpi/1.1.4/lib/openmpi/mca_btl_tcp.so 
</span><br>
<span class="quotelev2">&gt;&gt; (mca_btl_tcp_component_close+0x34f)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a988ee8ef]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/opt/openmpi/1.1.4/lib/libopal.so.0 
</span><br>
<span class="quotelev2">&gt;&gt; (mca_base_components_close+0xde)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_btl_base_close+0xe9)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a955e5159]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_bml_base_close+0x9)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a955e5029]
</span><br>
<span class="quotelev2">&gt;&gt; [10] func:/opt/openmpi/1.1.4/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev2">&gt;&gt; (mca_pml_ob1_component_close+0x25)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a97f4dc55]
</span><br>
<span class="quotelev2">&gt;&gt; [11] func:/opt/openmpi/1.1.4/lib/libopal.so.0 
</span><br>
<span class="quotelev2">&gt;&gt; (mca_base_components_close+0xde)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev2">&gt;&gt; [12] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_pml_base_close+0x69)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a955ea3e9]
</span><br>
<span class="quotelev2">&gt;&gt; [13] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(ompi_mpi_finalize+0xfe)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a955ab57e]
</span><br>
<span class="quotelev2">&gt;&gt; [14] func:/root/testdir/hello(main+0x7b) [0x4009d3]
</span><br>
<span class="quotelev2">&gt;&gt; [15] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3d1951c3fb]
</span><br>
<span class="quotelev2">&gt;&gt; [16] func:/root/testdir/hello [0x4008ca]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 15573 on node &quot;dr11.local&quot;
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11.
</span><br>
<span class="quotelev2">&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
