<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 09:06:54 2007" -->
<!-- isoreceived="20070512130654" -->
<!-- sent="Sat, 12 May 2007 09:06:36 -0400" -->
<!-- isosent="20070512130636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="E35C214D-97EF-46F8-A608-5A5F9BECC4BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="501091.83374.qm_at_web33307.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2007-05-12 09:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3256.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2007, at 8:49 AM, Rob wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What version of OFED do you have installed, 1.0? We can probably add
</span><br>
<span class="quotelev2">&gt; &gt; a proper configure test for IBV_EVENT_CLIENT_REREGISTER and
</span><br>
<span class="quotelev2">&gt; &gt; protect those sections of the code for OFED installations that do  
</span><br>
<span class="quotelev1">&gt; not have it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OFED? Protect sections?
</span><br>
<span class="quotelev1">&gt; No idea what you are talking about here.
</span><br>
<span class="quotelev1">&gt; I checked the available packages for CentOS-alpha, but there's nothing
</span><br>
<span class="quotelev1">&gt; which has &quot;ofed&quot; or &quot;fabric&quot; in its name. I myself never heard of  
</span><br>
<span class="quotelev1">&gt; such a
</span><br>
<span class="quotelev1">&gt; thing, so I don't know what to do next.
</span><br>
<p>OFED is the OpenFabrics Enterprise Distribution; the open source  
<br>
InfiniBand and iWARP network driver stack that is jointly developers  
<br>
by a consortium of vendors.  The OFED software is included in several  
<br>
Linux distributions, although it tends to release a bit faster than  
<br>
the Linux distros release.
<br>
<p>For example, OFED is just about to release v1.2, although some  
<br>
distros are still shipping OFED v1.0.  I don't know what version of  
<br>
OFED CentOS includes.
<br>
<p><span class="quotelev1">&gt; I even have no idea what you mean
</span><br>
<span class="quotelev1">&gt; by &quot;protect sections of the code&quot;.
</span><br>
<p>I'm referring to the fact that we need to setup the code so that it  
<br>
can correctly compile even if you have an older version of the OFED  
<br>
libraries that do not provide the IBV_EVENT_CLIENT_REREGISTER  
<br>
functionality.
<br>
<p>If you do not have InfiniBand or iWARP hardware, you can disable this  
<br>
whole code path with:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --without-openib ...
<br>
<p><span class="quotelev1">&gt; CentOS follows the RedHat enterprise editions closely. My version  
</span><br>
<span class="quotelev1">&gt; is 4.4,
</span><br>
<span class="quotelev1">&gt; which is the latest for AlphaServer systems (CentOS 5 is recently  
</span><br>
<span class="quotelev1">&gt; released,
</span><br>
<span class="quotelev1">&gt; but not for AlphaServers). So I wonder if this OFED thing is  
</span><br>
<span class="quotelev1">&gt; something too
</span><br>
<span class="quotelev1">&gt; recent....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be a better Heartthrob. Get better relationship answers from  
</span><br>
<span class="quotelev1">&gt; someone who knows.
</span><br>
<span class="quotelev1">&gt; Yahoo! Answers - Check it out.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3252.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3256.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
