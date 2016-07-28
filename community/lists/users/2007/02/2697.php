<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 13:05:20 2007" -->
<!-- isoreceived="20070214180520" -->
<!-- sent="Wed, 14 Feb 2007 13:05:12 -0500" -->
<!-- isosent="20070214180512" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NetPipe benchmark &amp;amp; spanning multiple interconnects" -->
<!-- id="2453e2900702141005o2692edf0rb570911ba47e4ab4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDC33668-7B32-4ED1-9D13-16E8F052D40C_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-14 13:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2696.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2677.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; For OpenIB + GM you are probably going to be limited by the memory bus.
</span><br>
<span class="quotelev1">&gt; Take the InfiniBand Nic, it peaks at say 900 MBytes/Sec, the Myrinet
</span><br>
<span class="quotelev1">&gt; 2-G will peak at say 250 MBytes/Sec.
</span><br>
<span class="quotelev1">&gt; Unless you are doing direct DMAs from pre-registered host memory than
</span><br>
<span class="quotelev1">&gt; you will not see 900 + 250 MBytes/Sec bandwidth.
</span><br>
<span class="quotelev1">&gt; The reason is that either you copy into registered memory, so the
</span><br>
<span class="quotelev1">&gt; copy is the bottleneck, or you register/unregister memory on demand,
</span><br>
<span class="quotelev1">&gt; which would be the bottleneck.
</span><br>
<p>Good point, this may be affecting overall performance for openib+gm.
<br>
But I didn't see any performance improvement for gm+tcp over just
<br>
using gm (and there's definitely no memory bandwidth limitation
<br>
there). Please correct me if I'm wrong, but it appears that message
<br>
striping was implemented primarily having ethernet interfaces in mind.
<br>
I.e. one does not need to bother with eth0+eth1 bonding for instance
<br>
and simply use OMPI to span them both. It doesn't seem to have much
<br>
impact when combining more &quot;serious&quot; interconnects. If anybody has
<br>
tried this before and has evidence to the contrary, I'd love to hear
<br>
it.
<br>
<p><span class="quotelev1">&gt; So the &quot;solution&quot; for micro-benchmarks is to register the memory and
</span><br>
<span class="quotelev1">&gt; leave it registered. Probably the best way to do this is to use
</span><br>
<span class="quotelev1">&gt; MPI_ALLOC_MEM when allocating memory, this allows us to register the
</span><br>
<span class="quotelev1">&gt; memory with all the available NICs.
</span><br>
Unfortunately, when it comes to using industry-standard benchmarking,
<br>
it's undesirable to modify the source.
<br>
<p><span class="quotelev1">&gt; I would also say that this is a very uncommon mode of operation, our
</span><br>
<span class="quotelev1">&gt; architecture allows it, but certainly isn't optimized for this case.
</span><br>
I suspect, the issue also may be of purely business nature. The
<br>
developers of BTL modules for advanced interconnects are most likely
<br>
the employees of corresponding companies, which probably do not have
<br>
any vested interest in making their interconnects synergistically
<br>
coexist with the ones of their competitors or with interconnects the
<br>
companies are dropping support for.
<br>
<p>Many thanks,
<br>
Alex.
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 12, 2007, at 6:48 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone else who may provide some feedback/comments on this issue? How
</span><br>
<span class="quotelev2">&gt; &gt; typical/widespread is the use of multiple interconnects in the HPC
</span><br>
<span class="quotelev2">&gt; &gt; community? Judging from the feedback I'm getting in this thread, it
</span><br>
<span class="quotelev2">&gt; &gt; appears that this is fairly uncommon?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your attention to this thread.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alex.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/8/07, Alex Tumanov &lt;atumanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your insight George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Strange, the latency is supposed to be there too. Anyway, the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is only used to determine which one is faster, in order to use it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; small messages.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I searched the code base for mca parameter registering and did indeed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; discover that latency setting is possible for tcp and tcp alone:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [OMPISRCDIR]# grep -r param_register * |egrep -i &quot;latency|bandwidth&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_param_register_int(&quot;bandwidth&quot;, &quot;Approximate maximum
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bandwidth of interconnect&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/tcp/btl_tcp_component.c:    btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_tcp_param_register_int(param, 0);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/tcp/btl_tcp_component.c:    btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_tcp_param_register_int(param, 0);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/gm/btl_gm_component.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_gm_param_register_int(&quot;bandwidth&quot;, 250);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/mvapi/btl_mvapi_component.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_mvapi_param_register_int(&quot;bandwidth&quot;, &quot;Approximate maximum
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bandwidth of interconnect&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For all others, btl_latency appears to be set to zero when the btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; module gets constructed. Would zero latency prevent message striping?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; An interesting side-issue that surfaces as a result of this little
</span><br>
<span class="quotelev3">&gt; &gt;&gt; investigation is the inconsistency between the ompi_info output and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the actual mca param availability for tcp_latency:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [OMPISRCDIR]# ompi_info --param all all |egrep -i &quot;latency|bandwidth&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;250&quot;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: parameter &quot;btl_mvapi_bandwidth&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;800&quot;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interconnect
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value: &quot;800&quot;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interconnect
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You also mentioned the exclusivity factor. I looked through the code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for that, and it appears that interconnect btl module developers are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setting exclusivity to various different integer values. In one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; place,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the comment suggests that exclusivity is what gets used to prioritize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interconnects... So a) I'm not sure what to set exclusivity to,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and b)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it's unclear whether its latency or exclusivity that determines the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; order. According to btl.h and you - it's the latency, according to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following - exclusivity has something to do with it as well:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl/mx/btl_mx_component.c :  mca_base_param_reg_int(
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (mca_base_component_t*)&amp;mca_btl_mx_component, &quot;exclusivity&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                             &quot;Priority compared with the others
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devices
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (used only when several devices are available&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                             false, false, 50, (int*)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &amp;mca_btl_mx_module.super.btl_exclusivity );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What should exclusivity be set to in order to allow using multiple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interconnects?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Finally,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For bandwidth, what
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; really matters is the relative ratio. We sum all bandwidths and they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we divide by the device bandwidth to find out how much data we
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; send over each interconnect (that's really close with what happens
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; there).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's precisely how I would've done it and makes perfect sense.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it's the relative ratio that matters and not the absolute value, why
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then my openib+gm test failed to deliver better bandwidth performance
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than just openib? I had bandwidth values set for both of those btls.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The expected behavior in my case would be to send roughly 1/4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (250/1050) across gm and 3/4 (800/1050) across openib? My hunch is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that there's something else preventing message striping other than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; incorrect absolute values for the bandwidth here...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks a lot for your feedback on this one. It gave me good pointers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to follow. Please do let me know if you can think of anything else
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that I need to check.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Alex.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 2/8/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In order to get any performance improvement from stripping the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; messages over multiple interconnects one has to specify the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; latency
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and bandwidth for these interconnects, and to make sure that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; any of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; them don't ask for exclusivity. I'm usually running over
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; multiple TCP
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; interconnects and here is my mca-params.conf file:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_if_include = eth0,eth1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_max_rdma_size = 524288
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_latency_eth0 = 47
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_bandwidth_eth0 = 587
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_latency_eth1 = 51
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_tcp_bandwidth_eth1 = 233
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Something similar has to be done for openib and gm, in order to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; us to strip the messages correctly.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Feb 8, 2007, at 12:02 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello Jeff. Thanks for pointing out NetPipe to me. I've played
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; around
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; with it a little in hope to see clear evidence/effect of message
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; striping in OpenMPI. Unfortunately, what I saw is that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; result of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; running NPmpi over several interconnects is identical to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; running it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; over a single fastest one :-( That was not the expected behavior,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm hoping that I'm doing something wrong. I'm using
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; NetPIPE_3.6.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; over OMPI 1.1.4. NetPipe was compiled by making sure Open MPI's
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpicc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; can be found and simply  running 'make mpi' under NetPIPE_3.6.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I experimented with 3 interconnects: openib, gm, and gig-e.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Specifically, I found that the times (and, correspondingly,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; bandwidth)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; reported for openib+gm is pretty much identical to the times
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; reported
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; for just openib. Here are the commands I used to initiate the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; benchmark:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,gm,self
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ~/NPmpi &gt; ~/testdir/ompi/netpipe/ompi_netpipe_openib+gm.log 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,self ~/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; NPmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_netpipe_openib.log 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Similarly, for tcp+gm the reported times were identical to just
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; running the benchmark over gm alone. The commands were:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl tcp,gm,self
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; btl_tcp_if_exclude lo,ib0,ib1 ~/NPmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl gm,self ~/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; NPmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Orthogonally, I've also observed that trying to use any
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; combination of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; interconnects that includes openib (except using it exclusively)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; fails
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; as soon as the benchmark reaches trials with 1.5MB message
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; sizes. In
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; fact the CPU load remained at 100% on the headnode, but no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; further
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; output is sent to the log file or the screen (see the tails
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; below).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; This behavior is fairly consistent and may be of interest to Open
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; development community. If anybody has tried using openib in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; combination with other interconnects please let me know what
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; issues
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; you've encountered and what tips and tricks you could share in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; regard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Many thanks. Keep up the good work!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Alex.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2698.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2696.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2677.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
