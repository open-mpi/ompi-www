<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 11:23:35 2007" -->
<!-- isoreceived="20070625152335" -->
<!-- sent="Mon, 25 Jun 2007 17:23:55 +0200" -->
<!-- isosent="20070625152355" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467FDE0B.8030600_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="467FDB00.4000706_at_sun.com" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-25 11:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Are you referring to this SEGV error here? I am assuming this is OMPI 
</span><br>
<span class="quotelev1">&gt; 1.1.1 so you are using rsh PLS to launch your executables (using loose 
</span><br>
<span class="quotelev1">&gt; integration).
</span><br>
<p>oops, I wanted to compile ompi 1.2.3 against OFED 1.1 and these are the
<br>
errors. This problem has nothing to do with the SGE anymore (Jeff
<br>
suggested me to migrate to a &quot;slightly&quot; newer version, so I tried and
<br>
failed with these errors) Should I start a whole new thread on this,
<br>
since the SGE question is solved?
<br>
<p><span class="quotelev2">&gt;  &gt;-sh-3.00$ ompi/bin/mpirun -d -np 2 -H node03,node06 hostname
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178]        universe default-universe-23178
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178]        user me
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178]        host headnode
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178]        jobid 0
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178]        procid 0
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] procdir:
</span><br>
<span class="quotelev2">&gt;  &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0/0
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] jobdir:
</span><br>
<span class="quotelev2">&gt;  &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] unidir:
</span><br>
<span class="quotelev2">&gt;  &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] top: openmpi-sessions-me_at_headnode_0
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt;  &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/universe-
</span><br>
<span class="quotelev2">&gt;  &gt; setup.txt
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] Failing at address: 0x1
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 0] /lib64/tls/libpthread.so.0 [0x39ed80c430]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 1] /lib64/tls/libc.so.6(strcmp+0) [0x39ecf6ff00]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 2]
</span><br>
<span class="quotelev2">&gt;  &gt; /home/me/ompi/lib/openmpi/mca_pls_rsh.so(orte_pls_rsh_launch+0x24f)
</span><br>
<span class="quotelev2">&gt;  &gt; [0x2a9723cc7f]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 3] /home/me/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev2">&gt;  &gt; [0x2a9764fa90]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 4] /home/me/ompi/bin/mpirun(orterun+0x35b)
</span><br>
<span class="quotelev2">&gt;  &gt; [0x402ca3]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 5] /home/me/ompi/bin/mpirun(main+0x1b) [0x402943]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt;  &gt; [0x39ecf1c3fb]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] [ 7] /home/me/ompi/bin/mpirun [0x40289a]
</span><br>
<span class="quotelev2">&gt;  &gt; [headnode:23178] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;  &gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So is it true that SEGV only occurred under the SGE environment and not 
</span><br>
<span class="quotelev1">&gt; a normal environment? If it is then I am baffled because starting rsh 
</span><br>
<span class="quotelev1">&gt; pls under the SGE environment in 1.1.1 should be no different than 
</span><br>
<span class="quotelev1">&gt; starting rsh pls without SGE.
</span><br>
<p>nope the config.log and &quot;ompi_info --all&quot; output are attached some posts
<br>
before. Sorry for this topic confusion.
<br>
<p>thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
