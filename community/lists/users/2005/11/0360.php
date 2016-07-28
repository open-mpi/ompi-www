<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 12:20:18 2005" -->
<!-- isoreceived="20051117172018" -->
<!-- sent="Thu, 17 Nov 2005 09:20:10 -0800" -->
<!-- isosent="20051117172010" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="6E3F2F6A-FB69-4879-A2B1-E286B5DB7738_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051117161707.GA6886_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 12:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0359.php">Daryl W. Grunau: "Re: [O-MPI users] users Digest, Vol 138, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daryl -
<br>
<p>I'm unable to replicate your problem.  I was testing on a Fedora Core  
<br>
3 system with Clustermatic 5.  Is is possible that you have a random  
<br>
dso from a previous build in your installation path?  How are you  
<br>
running mpirun -- maybe I'm just not hitting the same code path you   
<br>
are...
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>On Nov 17, 2005, at 8:17 AM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Date: Tue, 15 Nov 2005 08:43:58 -0800
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;de7cd3a86b5a3e18ca88a83925c587ca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daryl --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that anyone directly replied to you, but I saw some
</span><br>
<span class="quotelev2">&gt;&gt; commits fixing this yesterday (actually, they were already on the
</span><br>
<span class="quotelev2">&gt;&gt; trunk; we forgot to bring them over to the v1.0 branch).  Could you
</span><br>
<span class="quotelev2">&gt;&gt; give this morning's nightly snapshot tarball a whirl?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2005, at 10:30 AM, Daryl W. Grunau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[ snip ]]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, thanks for the reply.  I was able to compile rc7 but now am  
</span><br>
<span class="quotelev1">&gt; getting a
</span><br>
<span class="quotelev1">&gt; core dump from orterun.  Here's the gdb output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bluesteel&gt;  gdb /opt/OpenMPI/openmpi-1.0rc7/ib/bin/orterun core.11247
</span><br>
<span class="quotelev1">&gt; GNU gdb Red Hat Linux (6.1post-1.20040607.43.0.1rh)
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License,  
</span><br>
<span class="quotelev1">&gt; and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain  
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for  
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;...Using host  
</span><br>
<span class="quotelev1">&gt; libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Core was generated by `orterun -H  
</span><br>
<span class="quotelev1">&gt; 200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215 -np'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/lib64/libbproc.so.4...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/lib64/libbproc.so.4
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libdl.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libdl.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/lib64/libaio.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/lib64/libaio.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libm.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libm.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libutil.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libutil.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libnsl.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libpthread.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libc.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libnss_files.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libnss_files.so.2
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000418de8 in orte_totalview_init_after_spawn (jobid=1)  
</span><br>
<span class="quotelev1">&gt; at totalview.c:267
</span><br>
<span class="quotelev1">&gt; 267     totalview.c: No such file or directory.
</span><br>
<span class="quotelev1">&gt;         in totalview.c
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000418de8 in orte_totalview_init_after_spawn (jobid=1)  
</span><br>
<span class="quotelev1">&gt; at totalview.c:267
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000417158 in job_state_callback (jobid=1, state=3  
</span><br>
<span class="quotelev1">&gt; '\003') at orterun.c:582
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000463c21 in orte_rmgr_urm_callback (data=0x7a9440,  
</span><br>
<span class="quotelev1">&gt; cbdata=Variable &quot;cbdata&quot; is not available.
</span><br>
<span class="quotelev1">&gt; ) at rmgr_urm.c:253
</span><br>
<span class="quotelev1">&gt; #3  0x0000000000420d28 in orte_gpr_replica_deliver_notify_msg  
</span><br>
<span class="quotelev1">&gt; (msg=0x7a94a0)
</span><br>
<span class="quotelev1">&gt;     at gpr_replica_deliver_notify_msg_api.c:141
</span><br>
<span class="quotelev1">&gt; #4  0x00000000004269f1 in orte_gpr_replica_process_callbacks () at  
</span><br>
<span class="quotelev1">&gt; gpr_replica_messaging_fn.c:78
</span><br>
<span class="quotelev1">&gt; #5  0x000000000042d7a5 in orte_gpr_replica_recv (status=Variable  
</span><br>
<span class="quotelev1">&gt; &quot;status&quot; is not available.
</span><br>
<span class="quotelev1">&gt; ) at gpr_replica_recv_proxy_msgs.c:85
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000451e59 in mca_oob_recv_callback (status=2326,  
</span><br>
<span class="quotelev1">&gt; peer=0x812f90, msg=0x758c80, count=Variable &quot;count&quot; is not available.
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;     at oob_base_recv_nb.c:159
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000456308 in mca_oob_tcp_msg_recv_complete  
</span><br>
<span class="quotelev1">&gt; (msg=0x5e7210, peer=Variable &quot;peer&quot; is not available.
</span><br>
<span class="quotelev1">&gt; ) at oob_tcp_msg.c:461
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000457e9f in mca_oob_tcp_peer_recv_handler  
</span><br>
<span class="quotelev1">&gt; (sd=Variable &quot;sd&quot; is not available.
</span><br>
<span class="quotelev1">&gt; ) at oob_tcp_peer.c:733
</span><br>
<span class="quotelev1">&gt; #9  0x000000000047795d in opal_event_loop (flags=1) at event.c:428
</span><br>
<span class="quotelev1">&gt; #10 0x000000000047ceb3 in opal_progress () at opal_progress.c:256
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000416b45 in opal_condition_wait (c=0x5d0700,  
</span><br>
<span class="quotelev1">&gt; m=0x5d06c0) at condition.h:74
</span><br>
<span class="quotelev1">&gt; #12 0x000000000041687e in orterun (argc=6, argv=0x7ffffffff3c8) at  
</span><br>
<span class="quotelev1">&gt; orterun.c:384
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000416223 in main (argc=6, argv=0x7ffffffff3c8) at  
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm presently trying to build/run rc8 to see if it also has  
</span><br>
<span class="quotelev1">&gt; problems - I'll
</span><br>
<span class="quotelev1">&gt; report what I find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
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
<li><strong>Next message:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0359.php">Daryl W. Grunau: "Re: [O-MPI users] users Digest, Vol 138, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
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
