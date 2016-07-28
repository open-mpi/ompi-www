<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 07:56:02 2006" -->
<!-- isoreceived="20060224125602" -->
<!-- sent="Fri, 24 Feb 2006 13:55:59 +0100 (CET)" -->
<!-- isosent="20060224125559" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="Pine.LNX.4.64.0602241346040.3554_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1140782538.11380.4.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 07:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 24 Feb 2006, Emanuel Ziegler wrote:
<br>
<p><span class="quotelev1">&gt; So &quot;No rout to host&quot; means that the TCP package could not be sent 
</span><br>
<span class="quotelev1">&gt; (usually host down, broken routing table, network interface down, 
</span><br>
<span class="quotelev1">&gt; ...). But it's 'ping'able and even rsh works fine.
</span><br>
<p>... or some packet filtering is enabled. Check with 'iptables -L -n' 
<br>
run as root. Open MPI and port-based blocking are not compatible, 
<br>
search the archives of either this list or the LAM/MPI users list for 
<br>
discussions.
<br>
<p><span class="quotelev1">&gt; BTW, /etc/hosts.allow says &quot;ALL : ALL&quot;, so there should be no 
</span><br>
<span class="quotelev1">&gt; trouble. Do I have to modify /etc/securetty in order to allow 
</span><br>
<span class="quotelev1">&gt; orterun to access the machines or is the rsh/rlogin entry 
</span><br>
<span class="quotelev1">&gt; sufficient?
</span><br>
<p>If running commands on remote nodes with rsh is already working (as 
<br>
you showed in the first message), there shouldn't be any additional 
<br>
settings needed.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
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
