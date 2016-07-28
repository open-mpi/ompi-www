<?
$subject_val = "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 07:22:17 2012" -->
<!-- isoreceived="20120518112217" -->
<!-- sent="Fri, 18 May 2012 07:22:11 -0400" -->
<!-- isosent="20120518112211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="7CCE843E-D2BC-4D37-A95A-73956D57BA96_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1337328168.62570.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 07:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2012, at 4:02 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Community/Ralph=0A=0AI was told by the sysadmin that the firewall doe=
</span><br>
<span class="quotelev1">&gt; s not prevent communication between two machines (tik33x, tik34x) for insta=
</span><br>
<span class="quotelev1">&gt; nce. However, it will only block if OpenMPI is trying to open TCP/UDP ports=
</span><br>
<span class="quotelev1">&gt; lower than 1024, which require privileges.=0A=0AIs it possible to know whi=
</span><br>
<span class="quotelev1">&gt; ch port numbers does OpenMPI use?
</span><br>
<p>Open MPI uses random TCP ports above 1024 (i.e., we let the system assign which port numbers we use).
<br>
<p><span class="quotelev1">&gt; Specifically, is it possible to specify p=
</span><br>
<span class="quotelev1">&gt; ort numbers that OpenMPI must not use (OpenMPI-1.4.x)?=0A=0AHere is the rep=
</span><br>
<span class="quotelev1">&gt; ly I got from my sysadmin:=0A=0A&quot;There is a firewall, but it does not block=
</span><br>
<span class="quotelev1">&gt; internal=0Atraffic within the whole TIK network (I verified it for myself)=
</span><br>
<span class="quotelev1">&gt; .=0AThus, the connection problem must be somewhere else=0A(a service not ru=
</span><br>
<span class="quotelev1">&gt; nning or binding to the wrong interface=0Afor instance). Maybe the service =
</span><br>
<span class="quotelev1">&gt; wants to bind to a=0Atcp or udp port lower than 1024, which can only be=0Aa=
</span><br>
<span class="quotelev1">&gt; llocated by the system's superuser. First, check on=0Awhich ports and on wh=
</span><br>
<span class="quotelev1">&gt; ich network card interfaces=0Athe software listens and if it is configured =
</span><br>
<span class="quotelev1">&gt; correctly=0Aso that it will listen at all.&quot;=0A=0A=0AIs there a way out?=0A=
</span><br>
<p>You might try specifying exactly which interfaces Open MPI should use.  For example:
<br>
<p>mpirun --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 ...
<br>
<p>This would restrict Open MPI to only using the &quot;eth0&quot; interface (obviously, you should substitute in whatever is the relevant interface name for your machines -- hopefully, it's the same interface name across all of them).
<br>
<p>Also, we just released Open MPI 1.6.  You might want to upgrade when you can; the 1.6 series replaces the 1.4 series.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
