<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 08:24:20 2006" -->
<!-- isoreceived="20060224132420" -->
<!-- sent="Fri, 24 Feb 2006 14:23:18 +0100" -->
<!-- isosent="20060224132318" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="1140787398.12267.2.camel_at_localhost.localdomain" -->
<!-- inreplyto="200602241334.53134.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Emanuel Ziegler (<em>eziegler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 08:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; So, the question from the mpirun_debug.out-file is, what IP-addresses do 
</span><br>
<span class="quotelev1">&gt; node01 and node02 have, is the local 10.0.0.1 node01, while 10.1.0.1 is 
</span><br>
<span class="quotelev1">&gt; node02?
</span><br>
<span class="quotelev1">&gt; Maybe the route on node01 is not correct to node02?
</span><br>
<p>Ok, I figured out the problem, but didn't solve it completely.
<br>
<p>node01 and node02 both have multiple IP addresses.
<br>
node01 has 10.0.0.1 for TCP (eth1) and 10.1.0.1 for IPoIB (ib0).
<br>
node02 has 10.0.0.2 for TCP (eth1) and 10.1.0.2 for IPoIB (ib0).
<br>
The latter addresses are useless, but don't affect the problem. I chose
<br>
eth1 on both machines b/c eth0 is only 10/100 MBit and I wanted to have
<br>
GBit connections to the file server in the internal network. The problem
<br>
was, that I set up eth0 on node01 (golden client) using DHCP on the
<br>
external network for setup purposes. Hence, it also had an external
<br>
address (129.206.102.93) which was unaccessible from node02.
<br>
<p>Since orterun was started with the parameters
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--nsreplica &quot;0.0.0;tcp://129.206.102.93:54866;tcp://10.0.0.1:54866&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--gprreplica &quot;0.0.0;tcp://129.206.102.93:54866;tcp://10.0.0.1:54866&quot;
<br>
node02 first tried to communicate with 129.206.102.93 which was
<br>
impossible and hanged although it would have been able to access
<br>
10.0.0.1 without any problems. But obviously it never got to this point.
<br>
<p>Although disabling eth0 with &quot;ifdown eth0&quot; solves the problem, this is
<br>
not applicable to my cluster since this was just a test setup und I need
<br>
the external address for my head node.
<br>
<p>Can I configure orterun/orted to use only eth1?
<br>
<p>Thanks for Your help,
<br>
&nbsp;&nbsp;Emanuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
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
