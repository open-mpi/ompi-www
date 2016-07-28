<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 10:09:31 2013" -->
<!-- isoreceived="20131217150931" -->
<!-- sent="Tue, 17 Dec 2013 10:09:28 -0500" -->
<!-- isosent="20131217150928" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="C4A024B6-549E-4BA1-B17A-B5ACD49128F6_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB79EFB4-9200-4E4E-8DC0-2AB48BA08D56_at_nrl.navy.mil" -->
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
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 10:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>In reply to:</strong> <a href="23204.php">Noam Bernstein: "[OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2013, at 5:40 PM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once I have some more detailed information I'll follow up.
</span><br>
<p>OK - I've tried to characterize the behavior with vasp, which accounts for
<br>
most of our cluster usage, and it's quite odd.  I ran my favorite benchmarking
<br>
job repeated 4 times. As you can see below, in some
<br>
cases using sm it's as fast as before (kernel 2.6.32-358.23.2.el6.x86_64),
<br>
but mostly it's a factor of 2 slower.  With openib and our older nodes it's always a 
<br>
factor of 2-4 slower.  With the newer nodes in a situation where using sm is
<br>
possible it's occasionally as fast as before, but sometimes it's 10-20 times
<br>
slower.  When using ib with the new nodes it's always much slower than before.
<br>
<p>openmpi is 1.7.3, recompiled with the new kernel.  vasp is 5.3.3, which we've
<br>
been using for months.  Everything is compiled with an older stable version
<br>
of the intel compiler, as we've been doing for a long time.
<br>
<p>More perhaps useful information - I don't have actual data from the previous
<br>
setup (perhaps I should roll back some nodes and check), but I generally
<br>
expect to see 100% cpu usage on all the processes, either because they're
<br>
doing numeric stuff, or doing a busy-wait for mpi.  However, now I see a few 
<br>
of the vasp processes at 100%, and the others at 50-70% (say 4-6 on a given
<br>
node at 100%, and the rest lower). 
<br>
<p>If anyone has any ideas on what's going on, or how to debug further, I'd
<br>
really appreciate some suggestions.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p>8 core nodes (dual Xeon X5550)
<br>
<p>8 MPI procs (single node)
<br>
used to be 5.74 s
<br>
now:
<br>
btl: default  or sm only or sm+openib: 5.5-9.3 s, mostly the larger times
<br>
btl: openib: 10.0-12.2 s
<br>
<p>16 MPI procs (2 nodes)
<br>
used to be 2.88 s
<br>
btl default or openib or sm+openib: 4.8 - 6.23 s
<br>
<p>32 MPI procs (4 nodes)
<br>
use to be 1.59 s
<br>
btl default or openib or sm+openib: 2.73-4.49 s, but sometimes just fails
<br>
<p>at least once gave the errors (stack trace is incomplete, but probably on mpi_comm_rank, mpi_comm_size, or mpi_barrier)
<br>
[compute-3-24:32566] [[59587,0],0]:route_callback trying to get message from [[59587,1],20] to [[59587,1],28]:102, routing loop
<br>
[0] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/libopen-pal.so.6(opal_backtrace_print+0x1f) [0x2b5940c2dd9f]
<br>
[1] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_rml_oob.so(+0x22b6) [0x2b5941f0f2b6]
<br>
[2] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x27f) [0x2b594333341f]
<br>
[3] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/openmpi/mca_oob_tcp.so(+0x9d3a) [0x2b5943334d3a]
<br>
[4] func:/usr/local/openmpi/1.7.3/x86_64/ib/gnu/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x8bc) [0x2b5940c3592c]
<br>
[5] func:mpirun(orterun+0xe25) [0x404565]
<br>
[6] func:mpirun(main+0x20) [0x403594]
<br>
[7] func:/lib64/libc.so.6(__libc_start_main+0xfd) [0x3091c1ed1d]
<br>
[8] func:mpirun() [0x4034b9]
<br>
<p><p>16 core nodes (dual Xeon E5-2670)
<br>
<p>8 MPI procs (single node)
<br>
not sure what it used to be, but 3.3 s is plausible
<br>
btl: default or sm or openib+sm: 3.3-3.4 s
<br>
btl: openib 3.9-4.14 s
<br>
<p>16 MPI procs (single node)
<br>
used to be 2.07 s
<br>
btl default or openib: 23.0-32.56 s
<br>
btl sm or sm+openib: 1.94 s - 39.27 s (mostly the slower times)
<br>
<p>32 MPI procs (2 nodes)
<br>
used to be 1.24 s
<br>
btl default or sm or openib or sm+openib: 30s - 97 s
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23207/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>In reply to:</strong> <a href="23204.php">Noam Bernstein: "[OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23208.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
