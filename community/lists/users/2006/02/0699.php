<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 08:32:04 2006" -->
<!-- isoreceived="20060224133204" -->
<!-- sent="Fri, 24 Feb 2006 08:32:03 -0500" -->
<!-- isosent="20060224133203" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="E97CEF32-88F3-429B-B70E-F23457BD0ADE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1140787398.12267.2.camel_at_localhost.localdomain" -->
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
<strong>Date:</strong> 2006-02-24 08:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 8:23 AM, Emanuel Ziegler wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So, the question from the mpirun_debug.out-file is, what IP- 
</span><br>
<span class="quotelev2">&gt;&gt; addresses do
</span><br>
<span class="quotelev2">&gt;&gt; node01 and node02 have, is the local 10.0.0.1 node01, while  
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.0.1 is
</span><br>
<span class="quotelev2">&gt;&gt; node02?
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the route on node01 is not correct to node02?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I figured out the problem, but didn't solve it completely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node01 and node02 both have multiple IP addresses.
</span><br>
<span class="quotelev1">&gt; node01 has 10.0.0.1 for TCP (eth1) and 10.1.0.1 for IPoIB (ib0).
</span><br>
<span class="quotelev1">&gt; node02 has 10.0.0.2 for TCP (eth1) and 10.1.0.2 for IPoIB (ib0).
</span><br>
<span class="quotelev1">&gt; The latter addresses are useless, but don't affect the problem. I  
</span><br>
<span class="quotelev1">&gt; chose
</span><br>
<span class="quotelev1">&gt; eth1 on both machines b/c eth0 is only 10/100 MBit and I wanted to  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; GBit connections to the file server in the internal network. The  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; was, that I set up eth0 on node01 (golden client) using DHCP on the
</span><br>
<span class="quotelev1">&gt; external network for setup purposes. Hence, it also had an external
</span><br>
<span class="quotelev1">&gt; address (129.206.102.93) which was unaccessible from node02.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since orterun was started with the parameters
</span><br>
<span class="quotelev1">&gt;     --nsreplica &quot;0.0.0;tcp://129.206.102.93:54866;tcp:// 
</span><br>
<span class="quotelev1">&gt; 10.0.0.1:54866&quot;
</span><br>
<span class="quotelev1">&gt;     --gprreplica &quot;0.0.0;tcp://129.206.102.93:54866;tcp:// 
</span><br>
<span class="quotelev1">&gt; 10.0.0.1:54866&quot;
</span><br>
<span class="quotelev1">&gt; node02 first tried to communicate with 129.206.102.93 which was
</span><br>
<span class="quotelev1">&gt; impossible and hanged although it would have been able to access
</span><br>
<span class="quotelev1">&gt; 10.0.0.1 without any problems. But obviously it never got to this  
</span><br>
<span class="quotelev1">&gt; point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although disabling eth0 with &quot;ifdown eth0&quot; solves the problem, this is
</span><br>
<span class="quotelev1">&gt; not applicable to my cluster since this was just a test setup und I  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; the external address for my head node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I configure orterun/orted to use only eth1?
</span><br>
<p>Yes, start mpirun with the arguments &quot;-mca oob_tcp_include eth1 -mca  
<br>
btl_tcp_if_include eth1&quot; and it should work properly.  The paramaters  
<br>
can also be set in either the global or per-user configuration file  
<br>
for Open MPI (once you have it tested, of course).  See our FAQ item  
<br>
on this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>The second argument is because you'll probably run into the exact  
<br>
same problem when the TCP transport tries to start up (although it  
<br>
sounds like you're going to be using native IB for communicate, it  
<br>
never hurts to make sure TCP has a chance of working).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
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
