<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 13:25:38 2007" -->
<!-- isoreceived="20070913172538" -->
<!-- sent="Thu, 13 Sep 2007 19:25:26 +0200" -->
<!-- isosent="20070913172526" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect failed with errno=111" -->
<!-- id="20070913172526.GR28396_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="36AA0B11-AA1E-4E8C-BEEF-7E103FD0E787_at_nrlssc.navy.mil" -->
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
<strong>Date:</strong> 2007-09-13 13:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 13, 2007 at 11:15:47AM -0500, Tim Campbell wrote:
<br>
<p><span class="quotelev1">&gt; workstations.  When mpirun tries to start the processes on certain  
</span><br>
<span class="quotelev1">&gt; nodes I get the following error output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sr70][0,1,2][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; [sr71][0,1,3][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using perl -e 'die$!=111' I see that the error message is &quot;Connection  
</span><br>
<span class="quotelev1">&gt; refused&quot;.  I am able to connect to both nodes in question via ssh and/ 
</span><br>
<p>This sounds pretty much like an IP setup issue. Perhaps some nodes have
<br>
more than one interface, i.e. internal and external network,
<br>
IP-over-FireWire, ppp-Devices or something else. Exporting these
<br>
addresses would clearly cause other nodes to be unable to connect.
<br>
<p>If so, use btl_tcp_if_exclude (or _include) to specify the right
<br>
interface.
<br>
<p>Second problem: local firewalls. Though ssh connections might be
<br>
allowed, the sysadmin could block almost any other (destination) port,
<br>
thus causing the same error messages. (in case of
<br>
icmp-port-unreachable).
<br>
<p><span class="quotelev1">&gt; What are some possible issues that might be causing this?  What can I  
</span><br>
<span class="quotelev1">&gt; do to get more information?
</span><br>
<p>I agree that you surely need more information. Can you recompile with
<br>
--enable-debug and change 
<br>
<p>#define WANT_PEER_DUMP 0
<br>
<p>in file ompi/mca/btl/tcp/btl_tcp_endpoint.c from &quot;0&quot; to &quot;1&quot; before
<br>
recompiling?
<br>
<p>This should give you detailed information.
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
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
