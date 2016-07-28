<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 18:49:50 2007" -->
<!-- isoreceived="20070208234950" -->
<!-- sent="Thu, 8 Feb 2007 18:49:45 -0500" -->
<!-- isosent="20070208234945" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NetPipe benchmark &amp;amp; spanning multiple interconnects" -->
<!-- id="2453e2900702081549n49190b18wc776da5ddfcc7468_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7506225A-2519-4D8C-B471-338639195FC5_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-02-08 18:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2647.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your insight George.
<br>
<p><span class="quotelev1">&gt; Strange, the latency is supposed to be there too. Anyway, the latency
</span><br>
<span class="quotelev1">&gt; is only used to determine which one is faster, in order to use it for
</span><br>
<span class="quotelev1">&gt; small messages.
</span><br>
<p>I searched the code base for mca parameter registering and did indeed
<br>
discover that latency setting is possible for tcp and tcp alone:
<br>
------------------------------------------------------------------------------------------------------
<br>
[OMPISRCDIR]# grep -r param_register * |egrep -i &quot;latency|bandwidth&quot;
<br>
ompi/mca/btl/openib/btl_openib_component.c:
<br>
mca_btl_openib_param_register_int(&quot;bandwidth&quot;, &quot;Approximate maximum
<br>
bandwidth of interconnect&quot;,
<br>
ompi/mca/btl/tcp/btl_tcp_component.c:    btl-&gt;super.btl_bandwidth =
<br>
mca_btl_tcp_param_register_int(param, 0);
<br>
ompi/mca/btl/tcp/btl_tcp_component.c:    btl-&gt;super.btl_latency =
<br>
mca_btl_tcp_param_register_int(param, 0);
<br>
ompi/mca/btl/gm/btl_gm_component.c:
<br>
mca_btl_gm_param_register_int(&quot;bandwidth&quot;, 250);
<br>
ompi/mca/btl/mvapi/btl_mvapi_component.c:
<br>
mca_btl_mvapi_param_register_int(&quot;bandwidth&quot;, &quot;Approximate maximum
<br>
bandwidth of interconnect&quot;,
<br>
------------------------------------------------------------------------------------------------------
<br>
For all others, btl_latency appears to be set to zero when the btl
<br>
module gets constructed. Would zero latency prevent message striping?
<br>
<p>An interesting side-issue that surfaces as a result of this little
<br>
investigation is the inconsistency between the ompi_info output and
<br>
the actual mca param availability for tcp_latency:
<br>
<p>[OMPISRCDIR]# ompi_info --param all all |egrep -i &quot;latency|bandwidth&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current value: &quot;250&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_mvapi_bandwidth&quot; (current value: &quot;800&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approximate maximum bandwidth of interconnect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
<br>
value: &quot;800&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approximate maximum bandwidth of interconnect
<br>
<p>You also mentioned the exclusivity factor. I looked through the code
<br>
for that, and it appears that interconnect btl module developers are
<br>
setting exclusivity to various different integer values. In one place,
<br>
the comment suggests that exclusivity is what gets used to prioritize
<br>
interconnects... So a) I'm not sure what to set exclusivity to, and b)
<br>
it's unclear whether its latency or exclusivity that determines the
<br>
order. According to btl.h and you - it's the latency, according to the
<br>
following - exclusivity has something to do with it as well:
<br>
<p>btl/mx/btl_mx_component.c :  mca_base_param_reg_int(
<br>
(mca_base_component_t*)&amp;mca_btl_mx_component, &quot;exclusivity&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Priority compared with the others devices
<br>
(used only when several devices are available&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, 50, (int*)
<br>
&amp;mca_btl_mx_module.super.btl_exclusivity );
<br>
<p>What should exclusivity be set to in order to allow using multiple
<br>
interconnects?
<br>
<p>Finally,
<br>
<span class="quotelev1">&gt; For bandwidth, what
</span><br>
<span class="quotelev1">&gt; really matters is the relative ratio. We sum all bandwidths and they
</span><br>
<span class="quotelev1">&gt; we divide by the device bandwidth to find out how much data we should
</span><br>
<span class="quotelev1">&gt; send over each interconnect (that's really close with what happens
</span><br>
<span class="quotelev1">&gt; there).
</span><br>
That's precisely how I would've done it and makes perfect sense. Since
<br>
it's the relative ratio that matters and not the absolute value, why
<br>
then my openib+gm test failed to deliver better bandwidth performance
<br>
than just openib? I had bandwidth values set for both of those btls.
<br>
The expected behavior in my case would be to send roughly 1/4
<br>
(250/1050) across gm and 3/4 (800/1050) across openib? My hunch is
<br>
that there's something else preventing message striping other than
<br>
incorrect absolute values for the bandwidth here...
<br>
<p>Thanks a lot for your feedback on this one. It gave me good pointers
<br>
to follow. Please do let me know if you can think of anything else
<br>
that I need to check.
<br>
<p>Sincerely,
<br>
Alex.
<br>
<p><span class="quotelev2">&gt; &gt; On 2/8/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In order to get any performance improvement from stripping the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages over multiple interconnects one has to specify the latency
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and bandwidth for these interconnects, and to make sure that any of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; them don't ask for exclusivity. I'm usually running over multiple TCP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interconnects and here is my mca-params.conf file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_if_include = eth0,eth1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_max_rdma_size = 524288
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_latency_eth0 = 47
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_bandwidth_eth0 = 587
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_latency_eth1 = 51
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_bandwidth_eth1 = 233
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Something similar has to be done for openib and gm, in order to allow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; us to strip the messages correctly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 8, 2007, at 12:02 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello Jeff. Thanks for pointing out NetPipe to me. I've played
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; around
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with it a little in hope to see clear evidence/effect of message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; striping in OpenMPI. Unfortunately, what I saw is that the result of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; running NPmpi over several interconnects is identical to running it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; over a single fastest one :-( That was not the expected behavior,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm hoping that I'm doing something wrong. I'm using NetPIPE_3.6.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; over OMPI 1.1.4. NetPipe was compiled by making sure Open MPI's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can be found and simply  running 'make mpi' under NetPIPE_3.6.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; directory.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I experimented with 3 interconnects: openib, gm, and gig-e.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Specifically, I found that the times (and, correspondingly,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bandwidth)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; reported for openib+gm is pretty much identical to the times
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; reported
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for just openib. Here are the commands I used to initiate the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; benchmark:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,gm,self
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ~/NPmpi &gt; ~/testdir/ompi/netpipe/ompi_netpipe_openib+gm.log 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,self ~/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; NPmpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi_netpipe_openib.log 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Similarly, for tcp+gm the reported times were identical to just
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; running the benchmark over gm alone. The commands were:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl tcp,gm,self --mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_tcp_if_exclude lo,ib0,ib1 ~/NPmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl gm,self ~/NPmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Orthogonally, I've also observed that trying to use any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; combination of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; interconnects that includes openib (except using it exclusively)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fails
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as soon as the benchmark reaches trials with 1.5MB message sizes. In
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fact the CPU load remained at 100% on the headnode, but no further
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; output is sent to the log file or the screen (see the tails below).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This behavior is fairly consistent and may be of interest to Open
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; development community. If anybody has tried using openib in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; combination with other interconnects please let me know what issues
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you've encountered and what tips and tricks you could share in this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; regard.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Many thanks. Keep up the good work!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Alex.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2647.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
