<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 11:04:21 2013" -->
<!-- isoreceived="20131217160421" -->
<!-- sent="Tue, 17 Dec 2013 08:04:16 -0800" -->
<!-- isosent="20131217160416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="385F2DFA-8E5C-4550-85F8-73164F8EC147_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C4A024B6-549E-4BA1-B17A-B5ACD49128F6_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 11:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23213.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you binding the procs? We don't bind by default (this will change in 1.7.4), and binding can play a significant role when comparing across kernels.
<br>
<p>add &quot;--bind-to-core&quot; to your cmd line
<br>
<p><p>On Dec 17, 2013, at 7:09 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 16, 2013, at 5:40 PM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once I have some more detailed information I'll follow up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK - I've tried to characterize the behavior with vasp, which accounts for
</span><br>
<span class="quotelev1">&gt; most of our cluster usage, and it's quite odd.  I ran my favorite benchmarking
</span><br>
<span class="quotelev1">&gt; job repeated 4 times. As you can see below, in some
</span><br>
<span class="quotelev1">&gt; cases using sm it's as fast as before (kernel 2.6.32-358.23.2.el6.x86_64),
</span><br>
<span class="quotelev1">&gt; but mostly it's a factor of 2 slower.  With openib and our older nodes it's always a 
</span><br>
<span class="quotelev1">&gt; factor of 2-4 slower.  With the newer nodes in a situation where using sm is
</span><br>
<span class="quotelev1">&gt; possible it's occasionally as fast as before, but sometimes it's 10-20 times
</span><br>
<span class="quotelev1">&gt; slower.  When using ib with the new nodes it's always much slower than before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi is 1.7.3, recompiled with the new kernel.  vasp is 5.3.3, which we've
</span><br>
<span class="quotelev1">&gt; been using for months.  Everything is compiled with an older stable version
</span><br>
<span class="quotelev1">&gt; of the intel compiler, as we've been doing for a long time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More perhaps useful information - I don't have actual data from the previous
</span><br>
<span class="quotelev1">&gt; setup (perhaps I should roll back some nodes and check), but I generally
</span><br>
<span class="quotelev1">&gt; expect to see 100% cpu usage on all the processes, either because they're
</span><br>
<span class="quotelev1">&gt; doing numeric stuff, or doing a busy-wait for mpi.  However, now I see a few 
</span><br>
<span class="quotelev1">&gt; of the vasp processes at 100%, and the others at 50-70% (say 4-6 on a given
</span><br>
<span class="quotelev1">&gt; node at 100%, and the rest lower). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone has any ideas on what's going on, or how to debug further, I'd
</span><br>
<span class="quotelev1">&gt; really appreciate some suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 												Noam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8 core nodes (dual Xeon X5550)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8 MPI procs (single node)
</span><br>
<span class="quotelev1">&gt; used to be 5.74 s
</span><br>
<span class="quotelev1">&gt; now:
</span><br>
<span class="quotelev1">&gt; btl: default  or sm only or sm+openib: 5.5-9.3 s, mostly the larger times
</span><br>
<span class="quotelev1">&gt; btl: openib: 10.0-12.2 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 16 MPI procs (2 nodes)
</span><br>
<span class="quotelev1">&gt; used to be 2.88 s
</span><br>
<span class="quotelev1">&gt; btl default or openib or sm+openib: 4.8 - 6.23 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 32 MPI procs (4 nodes)
</span><br>
<span class="quotelev1">&gt; use to be 1.59 s
</span><br>
<span class="quotelev1">&gt; btl default or openib or sm+openib: 2.73-4.49 s, but sometimes just fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at least once gave the errors (stack trace is incomplete, but probably on mpi_comm_rank, mpi_comm_size, or mpi_barrier)
</span><br>
<span class="quotelev1">&gt; [compute-3-24:32566] [[59587,0],0]:route_callback trying to get message from [[59587,1],20] to [[59587,1],28]:102, routing loop
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/libopen-pal.so.6(opal_backtrace_print+0x1f) [0x2b5940c2dd9f]
</span><br>
<span class="quotelev1">&gt; [1] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_rml_oob.so(+0x22b6) [0x2b5941f0f2b6]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x27f) [0x2b594333341f]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_oob_tcp.so(+0x9d3a) [0x2b5943334d3a]
</span><br>
<span class="quotelev1">&gt; [4] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x8bc) [0x2b5940c3592c]
</span><br>
<span class="quotelev1">&gt; [5] func:mpirun(orterun+0xe25) [0x404565]
</span><br>
<span class="quotelev1">&gt; [6] func:mpirun(main+0x20) [0x403594]
</span><br>
<span class="quotelev1">&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xfd) [0x3091c1ed1d]
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun() [0x4034b9]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 16 core nodes (dual Xeon E5-2670)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8 MPI procs (single node)
</span><br>
<span class="quotelev1">&gt; not sure what it used to be, but 3.3 s is plausible
</span><br>
<span class="quotelev1">&gt; btl: default or sm or openib+sm: 3.3-3.4 s
</span><br>
<span class="quotelev1">&gt; btl: openib 3.9-4.14 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 16 MPI procs (single node)
</span><br>
<span class="quotelev1">&gt; used to be 2.07 s
</span><br>
<span class="quotelev1">&gt; btl default or openib: 23.0-32.56 s
</span><br>
<span class="quotelev1">&gt; btl sm or sm+openib: 1.94 s - 39.27 s (mostly the slower times)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 32 MPI procs (2 nodes)
</span><br>
<span class="quotelev1">&gt; used to be 1.24 s
</span><br>
<span class="quotelev1">&gt; btl default or sm or openib or sm+openib: 30s - 97 s_______________________________________________
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
<li><strong>Next message:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23209.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23213.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
