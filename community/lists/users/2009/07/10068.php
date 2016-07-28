<?
$subject_val = "[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 14:48:46 2009" -->
<!-- isoreceived="20090723184846" -->
<!-- sent="Thu, 23 Jul 2009 14:48:34 -0400 (EDT)" -->
<!-- isosent="20090723184834" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set." -->
<!-- id="93d41fe9c23518fef2319d5bb197b42a.squirrel_at_mail.neuralbs.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set.<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 14:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;(this _might_ be related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1505">https://svn.open-mpi.org/trac/ompi/ticket/1505</a>)
<br>
<p>&nbsp;&nbsp;&nbsp;I just compiled and installed 1.3.3 ins a CentOS 5 environment and we noticed the
<br>
processes would deadlock as soon as they would start using TCP communications. The
<br>
test program is one that has been running on other clusters for years with no
<br>
problems. Furthermore, using local cores doesn't deadlock the process whereas forcing
<br>
inter-node communications (-bynode scheduling), immediately causes the problem.
<br>
<p>Symptoms:
<br>
- processes don't crash or die, the use 100% CPU in system space (as opposed to user space)
<br>
- stracing one of the processes will show it is freewheeling in a polling loop.
<br>
- executing with --mca btl_base_verbose 30 will show weird port assignments, either they
<br>
are wrong or should be interpreted as being an offset from the default
<br>
btl_tcp_port_min_v4 (1024).
<br>
- The error &quot;mca_btl_tcp_endpoint_complete_connect] connect() to &lt;IP ADDR&gt; failed: No
<br>
route to host (113)&quot; _may_ be seen. We noticed it only showed up if we had vmnet
<br>
interfaces up and running on certain nodes. Note that setting
<br>
<p>&nbsp;oob_tcp_listen_mode=listen_thread
<br>
&nbsp;oob_tcp_if_include=eth0
<br>
&nbsp;btl_tcp_if_include=eth0
<br>
<p>was one of our first reaction to this to no avail.
<br>
<p>Workaround we found:
<br>
<p>While keeping the above mentioned MCA parameters, we added btl_tcp_port_min_v4=2000 due
<br>
to some firewall rules (which we had obviously disabled as part of the trouble shooting
<br>
process) and noticed everything seemed to start working correctly from here on.
<br>
<p>This seems to work but I can find no logical explanation as the code seems to be clean
<br>
in that respect.
<br>
<p>Some pasting for people searching frantically for a solution:
<br>
<p>[cluster-srv2:20379] btl: tcp: attempting to connect() to address 10.194.32.113 on port
<br>
2052
<br>
[cluster-srv2:20381] btl: tcp: attempting to connect() to address 10.194.32.113 on port
<br>
3076
<br>
[cluster-srv2:20377] btl: tcp: attempting to connect() to address 10.194.32.113 on port 260
<br>
[cluster-srv2:20383] btl: tcp: attempting to connect() to address 10.194.32.113 on port
<br>
3588
<br>
[cluster-srv1:19900] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
1540
<br>
[cluster-srv2:20377] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
2052
<br>
[cluster-srv2:20383] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
3076
<br>
[cluster-srv1:19894] btl: tcp: attempting to connect() to address 10.194.32.117 on port 516
<br>
[cluster-srv2:20379] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
3588
<br>
[cluster-srv1:19898] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
1028
<br>
[cluster-srv2:20381] btl: tcp: attempting to connect() to address 10.194.32.117 on port
<br>
2564
<br>
[cluster-srv1:19896] btl: tcp: attempting to connect() to address 10.194.32.117 on port 4
<br>
[cluster-srv3:13665] btl: tcp: attempting to connect() to address 10.194.32.115 on port
<br>
1028
<br>
[cluster-srv3:13663] btl: tcp: attempting to connect() to address 10.194.32.115 on port 4
<br>
[cluster-srv2][[44096,1],9][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
[cluster-srv2][[44096,1],13][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 10.194.32.117 failed: No route to host (113)
<br>
connect() to 10.194.32.117 failed: No route to host (113)
<br>
[cluster-srv3][[44096,1],20][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 10.194.32.115 failed: No route to host (113)
<br>
<p>Cheers!
<br>
<p>Eric Thiboedau
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<!-- nextthread="start" -->
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
