<?
$subject_val = "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 10:18:16 2014" -->
<!-- isoreceived="20140108151816" -->
<!-- sent="Wed, 8 Jan 2014 07:15:40 -0800" -->
<!-- isosent="20140108151540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1" -->
<!-- id="A715EABF-5C6B-4AF5-B504-FCD6518E9114_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF4C135302.72C38F0F-ON49257C5A.001D0485-49257C5A.001FA49F_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 10:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23334.php">Axel Viðarsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23332.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<li><strong>In reply to:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are quite correct - r29719 did indeed reverse the logic of that param. Thanks for tracking it down!
<br>
<p>I pushed a fix to the trunk and scheduled it for 1.7.4
<br>
<p><p>On Jan 7, 2014, at 9:45 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found that btl_tcp_use_nagle was negated in openmpi-1.7.4rc1, which
</span><br>
<span class="quotelev1">&gt; causes severe slowdown of tcp-network for smaller size(&lt; 1024) in our
</span><br>
<span class="quotelev1">&gt; environment as show at the bottom.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happened in SVN r28719, where new MCA variable system was added.
</span><br>
<span class="quotelev1">&gt; The flag of tcp_not_use_nodelay was newly introduced as the negation of
</span><br>
<span class="quotelev1">&gt; tcp_use_nodelay in r28719(btl_tcp_component.c).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  r28361(btl_tcp_component.c):
</span><br>
<span class="quotelev1">&gt;  218       mca_btl_tcp_component.tcp_use_nodelay =
</span><br>
<span class="quotelev1">&gt;  219           !mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to
</span><br>
<span class="quotelev1">&gt; use Nagle's algorithm or not (using Nagle's algo
</span><br>
<span class="quotelev1">&gt; rithm may increase short message latency)&quot;, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  r28719(btl_tcp_component.c):
</span><br>
<span class="quotelev1">&gt;  242     mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to use
</span><br>
<span class="quotelev1">&gt; Nagle's algorithm or not (using Nagle's algorithm
</span><br>
<span class="quotelev1">&gt; may increase short message latency)&quot;, 0,
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_tcp_component.tcp_not_use_nodelay);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In spite of this negation, the socket option was set by tcp_not_use_nodelay
</span><br>
<span class="quotelev1">&gt; as same as before in btl_tcp_endpoint.c. I think the line 515 should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  optval = !mca_btl_tcp_component.tcp_not_use_nodelay; /* tmishima */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already confirmed that this fix worked well with openmpi-1.7.4rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  btl_tcp_endpoint.c @ 28719 :
</span><br>
<span class="quotelev1">&gt;  514 #if defined(TCP_NODELAY)
</span><br>
<span class="quotelev1">&gt;  515     optval = mca_btl_tcp_component.tcp_not_use_nodelay;
</span><br>
<span class="quotelev1">&gt;  516     if(setsockopt(sd, IPPROTO_TCP, TCP_NODELAY, (char *)&amp;optval,
</span><br>
<span class="quotelev1">&gt; sizeof(optval)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;  517         BTL_ERROR((&quot;setsockopt(TCP_NODELAY) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;  518                    strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev1">&gt;  519     }
</span><br>
<span class="quotelev1">&gt;  520 #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage OMB-3.1.1]$ mpirun -np 2 -host manage,node05 -mca btl
</span><br>
<span class="quotelev1">&gt; self,tcp osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.00
</span><br>
<span class="quotelev1">&gt; 2                         0.01
</span><br>
<span class="quotelev1">&gt; 4                         0.01
</span><br>
<span class="quotelev1">&gt; 8                         0.03
</span><br>
<span class="quotelev1">&gt; 16                        0.05
</span><br>
<span class="quotelev1">&gt; 32                        0.10
</span><br>
<span class="quotelev1">&gt; 64                        0.16
</span><br>
<span class="quotelev1">&gt; 128                       0.35
</span><br>
<span class="quotelev1">&gt; 256                       0.74
</span><br>
<span class="quotelev1">&gt; 512                      20.30
</span><br>
<span class="quotelev1">&gt; 1024                    149.89
</span><br>
<span class="quotelev1">&gt; 2048                    182.88
</span><br>
<span class="quotelev1">&gt; 4096                    203.17
</span><br>
<span class="quotelev1">&gt; 8192                    217.08
</span><br>
<span class="quotelev1">&gt; 16384                   228.58
</span><br>
<span class="quotelev1">&gt; 32768                   232.21
</span><br>
<span class="quotelev1">&gt; 65536                   169.81
</span><br>
<span class="quotelev1">&gt; 131072                  232.67
</span><br>
<span class="quotelev1">&gt; 262144                  207.03
</span><br>
<span class="quotelev1">&gt; 524288                  224.22
</span><br>
<span class="quotelev1">&gt; 1048576                 233.30
</span><br>
<span class="quotelev1">&gt; 2097152                 233.51
</span><br>
<span class="quotelev1">&gt; 4194304                 234.64
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23334.php">Axel Viðarsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23332.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<li><strong>In reply to:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
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
