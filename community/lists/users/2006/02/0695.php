<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 07:34:57 2006" -->
<!-- isoreceived="20060224123457" -->
<!-- sent="Fri, 24 Feb 2006 13:34:52 +0100" -->
<!-- isosent="20060224123452" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="200602241334.53134.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 07:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Emanual,
<br>
can you actually log in using rsh without submitting a password?
<br>
I would rather use the ssh-based login using public-keys to login. This is 
<br>
definitely more secure but in Your first mail, You said, ssh wouldn't work 
<br>
either?
<br>
<p>So, the question from the mpirun_debug.out-file is, what IP-addresses do 
<br>
node01 and node02 have, is the local 10.0.0.1 node01, while 10.1.0.1 is 
<br>
node02?
<br>
Maybe the route on node01 is not correct to node02?
<br>
<p>Hope, this helps.
<br>
<p>Thanks,
<br>
Rainer
<br>
<p>On Friday 24 February 2006 13:02, Emanuel Ziegler wrote:
<br>
<span class="quotelev3">&gt; &gt; &gt;From /usr/include/asm/errno.h:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define	EHOSTUNREACH	113	/* No route to host */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I thought it was an internal openMPI error number and 'grep'ed the
</span><br>
<span class="quotelev1">&gt; source code without success. So &quot;No rout to host&quot; means that the TCP
</span><br>
<span class="quotelev1">&gt; package could not be sent (usually host down, broken routing table,
</span><br>
<span class="quotelev1">&gt; network interface down, ...). But it's 'ping'able and even rsh works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, /etc/hosts.allow says &quot;ALL : ALL&quot;, so there should be no trouble.
</span><br>
<span class="quotelev1">&gt; Do I have to modify /etc/securetty in order to allow orterun to access
</span><br>
<span class="quotelev1">&gt; the machines or is the rsh/rlogin entry sufficient?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Emanuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
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
