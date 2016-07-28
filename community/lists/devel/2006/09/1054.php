<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 18:21:04 2006" -->
<!-- isoreceived="20060907222104" -->
<!-- sent="Fri, 8 Sep 2006 00:21:16 +0200" -->
<!-- isosent="20060907222116" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="20060907222116.GU6454_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060907175128.GQ6454_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 18:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 07, 2006 at 07:51:28PM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; No problem, just two hours ago, Christian and me decided to drop
</span><br>
<span class="quotelev1">&gt; the idea of oob/tcp6 and go on with only one oob-tcp-component.
</span><br>
<span class="quotelev1">&gt; It shouldn't be that hard and I'll try it tonight or tomorrow.
</span><br>
<p>Looks quite promising:
<br>
<p>adi_at_ipc654:~/ompi/trunk/test$ (orterun -np 2 -host amun,ipc654 netstat -tpln) 2&gt; /dev/null | grep orte
<br>
tcp        0      0 0.0.0.0:44012           0.0.0.0:*               LISTEN     1332/orted          
<br>
tcp        0      0 0.0.0.0:42706           0.0.0.0:*               LISTEN     1329/orterun        
<br>
tcp        0      0 0.0.0.0:36376           0.0.0.0:*               LISTEN     27961/orted         
<br>
tcp6       0      0 :::56783                :::*                    LISTEN     27961/orted         
<br>
tcp6       0      0 :::34615                :::*                    LISTEN     1329/orterun        
<br>
tcp6       0      0 :::39837                :::*                    LISTEN     1332/orted 
<br>
<p><p>This is one component with two listening sockets.
<br>
<p>The main work isn't done yet: the mca_oob_tcp_peer_start_connect.
<br>
<p>I've extended it a little bit:
<br>
<p>static int  mca_oob_tcp_peer_start_connect(mca_oob_tcp_peer_t* peer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t af_family);
<br>
<p>where af_family is one of {AF_INET, AF_INET6}. I start with AF_INET
<br>
and within mca_oob_tcp_peer_start_connect, I call this function
<br>
again with AF_INET6 (one level of recursion) to try the other
<br>
address family.
<br>
<p>This approach (coded last week when I still had a single component)
<br>
is bad (long timeouts before trying AF_INET6) and probably wrong:
<br>
<p>for the accepting sockets, I've added
<br>
<p>&nbsp;&nbsp;&nbsp;opal_event_t       tcp6_send_event;
<br>
&nbsp;&nbsp;&nbsp;opal_event_t       tcp6_recv_event;
<br>
<p>and perhaps something like this is necessary for peers, too (don't
<br>
know this, yet. I'll have a look at it tomorrow).
<br>
<p><p>So long
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Frauen verstehen entweder gar nichts oder alles falsch
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1055.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
