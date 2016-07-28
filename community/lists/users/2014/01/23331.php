<?
$subject_val = "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 00:45:39 2014" -->
<!-- isoreceived="20140108054539" -->
<!-- sent="Wed, 8 Jan 2014 14:45:33 +0900" -->
<!-- isosent="20140108054533" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1" -->
<!-- id="OF4C135302.72C38F0F-ON49257C5A.001D0485-49257C5A.001FA49F_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFD7A445F2.75F3D24E-ON49257C43.00812B1F-49257C43.0081B6C6_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20btl_tcp_use_nagle%20is%20negated%20in%20openmpi-1.7.4rc1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-08 00:45:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23332.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<li><strong>Previous message:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Reply:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I found that btl_tcp_use_nagle was negated in openmpi-1.7.4rc1, which
<br>
causes severe slowdown of tcp-network for smaller size(&lt; 1024) in our
<br>
environment as show at the bottom.
<br>
<p>This happened in SVN r28719, where new MCA variable system was added.
<br>
The flag of tcp_not_use_nodelay was newly introduced as the negation of
<br>
tcp_use_nodelay in r28719(btl_tcp_component.c).
<br>
<p>&nbsp;&nbsp;r28361(btl_tcp_component.c):
<br>
&nbsp;&nbsp;218       mca_btl_tcp_component.tcp_use_nodelay =
<br>
&nbsp;&nbsp;219           !mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to
<br>
use Nagle's algorithm or not (using Nagle's algo
<br>
rithm may increase short message latency)&quot;, 0);
<br>
<p>&nbsp;&nbsp;r28719(btl_tcp_component.c):
<br>
&nbsp;&nbsp;242     mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to use
<br>
Nagle's algorithm or not (using Nagle's algorithm
<br>
&nbsp;may increase short message latency)&quot;, 0,
<br>
&amp;mca_btl_tcp_component.tcp_not_use_nodelay);
<br>
<p>In spite of this negation, the socket option was set by tcp_not_use_nodelay
<br>
as same as before in btl_tcp_endpoint.c. I think the line 515 should be:
<br>
<p>&nbsp;&nbsp;optval = !mca_btl_tcp_component.tcp_not_use_nodelay; /* tmishima */
<br>
<p>I already confirmed that this fix worked well with openmpi-1.7.4rc1.
<br>
<p>&nbsp;&nbsp;btl_tcp_endpoint.c @ 28719 :
<br>
&nbsp;&nbsp;514 #if defined(TCP_NODELAY)
<br>
&nbsp;&nbsp;515     optval = mca_btl_tcp_component.tcp_not_use_nodelay;
<br>
&nbsp;&nbsp;516     if(setsockopt(sd, IPPROTO_TCP, TCP_NODELAY, (char *)&amp;optval,
<br>
sizeof(optval)) &lt; 0) {
<br>
&nbsp;&nbsp;517         BTL_ERROR((&quot;setsockopt(TCP_NODELAY) failed: %s (%d)&quot;,
<br>
&nbsp;&nbsp;518                    strerror(opal_socket_errno), opal_socket_errno));
<br>
&nbsp;&nbsp;519     }
<br>
&nbsp;&nbsp;520 #endif
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>[mishima_at_manage OMB-3.1.1]$ mpirun -np 2 -host manage,node05 -mca btl
<br>
self,tcp osu_bw
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.00
<br>
2                         0.01
<br>
4                         0.01
<br>
8                         0.03
<br>
16                        0.05
<br>
32                        0.10
<br>
64                        0.16
<br>
128                       0.35
<br>
256                       0.74
<br>
512                      20.30
<br>
1024                    149.89
<br>
2048                    182.88
<br>
4096                    203.17
<br>
8192                    217.08
<br>
16384                   228.58
<br>
32768                   232.21
<br>
65536                   169.81
<br>
131072                  232.67
<br>
262144                  207.03
<br>
524288                  224.22
<br>
1048576                 233.30
<br>
2097152                 233.51
<br>
4194304                 234.64
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23332.php">Johanna Schauer: "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<li><strong>Previous message:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Reply:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
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
