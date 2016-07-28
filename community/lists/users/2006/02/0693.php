<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 07:03:20 2006" -->
<!-- isoreceived="20060224120320" -->
<!-- sent="Fri, 24 Feb 2006 13:02:18 +0100" -->
<!-- isosent="20060224120218" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="1140782538.11380.4.camel_at_localhost.localdomain" -->
<!-- inreplyto="Pine.LNX.4.64.0602241232240.3554_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2006-02-24 07:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt;From /usr/include/asm/errno.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	EHOSTUNREACH	113	/* No route to host */
</span><br>
<p>Ah, I thought it was an internal openMPI error number and 'grep'ed the
<br>
source code without success. So &quot;No rout to host&quot; means that the TCP
<br>
package could not be sent (usually host down, broken routing table,
<br>
network interface down, ...). But it's 'ping'able and even rsh works
<br>
fine.
<br>
<p>BTW, /etc/hosts.allow says &quot;ALL : ALL&quot;, so there should be no trouble.
<br>
Do I have to modify /etc/securetty in order to allow orterun to access
<br>
the machines or is the rsh/rlogin entry sufficient?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Emanuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
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
