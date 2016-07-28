<?
$subject_val = "Re: [OMPI users] openmpi multi-lib torque support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 21:41:07 2008" -->
<!-- isoreceived="20080516014107" -->
<!-- sent="Thu, 15 May 2008 21:40:48 -0400" -->
<!-- isosent="20080516014048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi multi-lib torque support" -->
<!-- id="4F436383-0C5F-48ED-B13F-6FFEA2165420_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DBF70CFF-C6E3-4809-B583-6436024F6285_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi multi-lib torque support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 21:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5652.php">Karolis Eigelis: "[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, my mailer incorrectly classified this message as spam (gotta  
<br>
love Outlook!) and I didn't see this message until today.
<br>
<p><p>On May 12, 2008, at 5:24 AM, Karolis Eigelis wrote:
<br>
<p><span class="quotelev1">&gt; ello,
</span><br>
<span class="quotelev1">&gt; I have Rocks 4.3 installed. Frontend 32bit and nodes with 64bit.
</span><br>
<span class="quotelev1">&gt; Traying to run openmpi with torque support using multilib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local shared among nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CONFIGURING and INSTALL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [from frontend 32bit]
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=/opt/torque/ --prefix=/usr/local/openmpi-1.2.6  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; includedir='${prefix}/include/32' --libdir='${prefix}/lib32' &amp;&amp; make
</span><br>
<span class="quotelev1">&gt; &amp;&amp; make install &amp;&amp; make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.6/bin/ompi_info |grep tm
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.6)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.6)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [form node 64bit]
</span><br>
<span class="quotelev1">&gt; ./configure --disable-binaries --with-tm=/opt/torque/ --prefix=/usr/
</span><br>
<span class="quotelev1">&gt; local/openmpi-1.2.6 --includedir='${prefix}/include/64' --libdir='$
</span><br>
<span class="quotelev1">&gt; {prefix}/lib64' &amp;&amp; make &amp;&amp; make install &amp;&amp; make check
</span><br>
<p>Note OMPI doesn't directly support being installed this way -- you  
<br>
effectively replaced your 32 bit build with a 64 bit build because  
<br>
the /usr/local/openmpi-1.2.6/bin/&lt;ompi_tools&gt; will be looking in the  
<br>
64 bit directories for their support. I don't think you'll get what  
<br>
you want this way (both a 32 and 64 bit build).
<br>
<p>Maybe one of the Sun guys can chime in here -- they make 32+64 bit Sun  
<br>
builds with a little trickery after the build (e.g., frob our wrapper  
<br>
compiler scripts, etc.)...
<br>
<p>But a better / easier solution would be just to have 2 different  
<br>
installs for OMPI.  Or just abandon the 32 bit version (unless you  
<br>
really, really need it).  In a perfect world, &quot;mpicc -32 ...&quot; (or  
<br>
something like that) would Just Work.  But we honestly haven't had  
<br>
enough demand from users to spend the time to make it so for general /  
<br>
community Linux builds.
<br>
<p><span class="quotelev1">&gt; /usr/local/openmpi-1.2.6/bin/ompi_info |grep tm
</span><br>
<span class="quotelev1">&gt; [compute-0-16.local:18284] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; ras tm: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [compute-0-16.local:18284] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; pls tm: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.6)
</span><br>
<p><p>It's likely that you don't have the torque support library installed  
<br>
on the back-end ROCKS nodes.
<br>
<p>There could be some 32/64 funkyness going on here with your install  
<br>
form above, but the lack of libtm on the compute nodes is the first  
<br>
thing I'd check.
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
<li><strong>Next message:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5652.php">Karolis Eigelis: "[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support"</a>
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
