<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 15:44:02 2007" -->
<!-- isoreceived="20071024194402" -->
<!-- sent="Wed, 24 Oct 2007 15:43:51 -0400" -->
<!-- isosent="20071024194351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="C52F506E-3D07-4E2C-B395-761D5F2346DD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18207.19908.697447.777233_at_ron.nulle.part" -->
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
<strong>Date:</strong> 2007-10-24 15:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4302.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<li><strong>In reply to:</strong> <a href="4296.php">Dirk Eddelbuettel: "[OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite likely because of a &quot;feature&quot; in how the OMPI v1.2  
<br>
series handles its plugins.  In OMPI &lt;=v1.2.x, Open MPI opens all  
<br>
plugins that it can find and *then* applies the filter that you  
<br>
provide (e.g., via the &quot;btl&quot; MCA param) to close / ignore certain  
<br>
plugins.
<br>
<p>In OMPI &gt;=v1.3, we [effectively] apply the filter *before* opening  
<br>
plugins.  So &quot;--mca btl ^openib&quot; will actually prevent the openib BTL  
<br>
plugin from being loaded.
<br>
<p>I'm guessing that what you're seeing today is because we're opening  
<br>
the openib BTL on a system where the OpenFabrics support libraries  
<br>
are not available, and therefore the dlopen() fails.  The error  
<br>
string that we get back from libltdl is the somewhat-misleading &quot;file  
<br>
not found (ignored)&quot;, and that's what we print (note that ltdl is  
<br>
referring to the fact that a dependent library is not found).
<br>
<p><p><p>On Oct 24, 2007, at 9:51 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been scratching my head over this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lnx01:/usr/lib&gt; orterun -n 2  --mca btl ^openib  ~/c++/tests/mpitest
</span><br>
<span class="quotelev1">&gt; [lnx01:14417] mca: base: component_find: unable to open btl openib:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [lnx01:14418] mca: base: component_find: unable to open btl openib:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; Hello world, I'm process 0
</span><br>
<span class="quotelev1">&gt; Hello world, I'm process 1
</span><br>
<span class="quotelev1">&gt; lnx01:/usr/lib&gt; grep openib /etc/openmpi/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; #   btl = ^openib
</span><br>
<span class="quotelev1">&gt; btl = ^openib
</span><br>
<span class="quotelev1">&gt; lnx01:/usr/lib&gt; orterun -n 2   ~/c++/tests/mpitest
</span><br>
<span class="quotelev1">&gt; [lnx01:14429] mca: base: component_find: unable to open btl openib:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [lnx01:14430] mca: base: component_find: unable to open btl openib:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; Hello world, I'm process 0
</span><br>
<span class="quotelev1">&gt; Hello world, I'm process 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when I strace it, I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;lnx01&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/openmpi/openmpi-mca-params.conf&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf820698) = -1 ENOTTY  
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; fstat64(3, {st_mode=S_IFREG|0644, st_size=2877, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS,  
</span><br>
<span class="quotelev1">&gt; -1, 0) = 0xb7f72000
</span><br>
<span class="quotelev1">&gt; read(3, &quot;#\n# Copyright (c) 2004-2005 The &quot;..., 8192) = 2877
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 8192)                       = 0
</span><br>
<span class="quotelev1">&gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf8205f8) = -1 ENOTTY  
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0xb7f72000, 4096)                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why can't I suppress the dreaded Infinityband message?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System is Ubuntu 7.04 with 'ported' (ie locally recompiled) current  
</span><br>
<span class="quotelev1">&gt; Open MPI packages
</span><br>
<span class="quotelev1">&gt; from Debian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
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
<li><strong>Next message:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4302.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<li><strong>In reply to:</strong> <a href="4296.php">Dirk Eddelbuettel: "[OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4304.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
