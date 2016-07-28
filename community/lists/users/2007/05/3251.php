<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 08:31:51 2007" -->
<!-- isoreceived="20070512123151" -->
<!-- sent="Sat, 12 May 2007 08:31:38 -0400" -->
<!-- isosent="20070512123138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="C45BE9D7-0B1D-44B0-A86E-14318ED4E63A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18754.90980.qm_at_web33315.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 08:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2007, at 8:25 AM, Rob wrote:
<br>
<p><span class="quotelev2">&gt; &gt; This specific problem may be due to a bug that Brian just found/ 
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev2">&gt; &gt; in the configure script last night (due to a bug report from Paul  
</span><br>
<span class="quotelev1">&gt; Van
</span><br>
<span class="quotelev2">&gt; &gt; Allsburg). Could you try any nightly trunk tarball after r14600 (the
</span><br>
<span class="quotelev2">&gt; &gt; fix hasn't made its way over to the 1.2 release branch yet; I assume
</span><br>
<span class="quotelev2">&gt; &gt; it will soon)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the nightly built tarball from version 1.3a1r14639, but now  
</span><br>
<span class="quotelev1">&gt; the make
</span><br>
<span class="quotelev1">&gt; ends with:
</span><br>
<p>Woo hoo!  You got significantly farther along than you did last time.
<br>
<p><span class="quotelev1">&gt; libtool: compile:  /opt/gcc/bin/gcc -DHAVE_CONFIG_H -I. - 
</span><br>
<span class="quotelev1">&gt; I../../../../opal/include -I../../../../orte/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include -DPKGDATADIR=\&quot;/opt/openmpi/share/openmpi\&quot; - 
</span><br>
<span class="quotelev1">&gt; I../../../.. -O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread -MT btl_openib_component.lo -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF .deps/btl_openib_component.Tpo -c btl_openib_component.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o .libs/btl_openib_component.o
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c: In function 'btl_openib_async_thread':
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:1203: error: 'IBV_EVENT_CLIENT_REREGISTER'  
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<p>This stuff was just added the other day (remember: trunk = active  
<br>
development).  I suspect that this is using an OpenFabrics interface  
<br>
that was not always available.
<br>
<p>What version of OFED do you have installed, 1.0?  We can probably add  
<br>
a proper configure test for IBV_EVENT_CLIENT_REREGISTER and protect  
<br>
those sections of the code for OFED installations that do not have it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
