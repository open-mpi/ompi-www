<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 16:17:16 2007" -->
<!-- isoreceived="20071024201716" -->
<!-- sent="Wed, 24 Oct 2007 15:16:51 -0500" -->
<!-- isosent="20071024201651" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="18207.43059.497937.906605_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C52F506E-3D07-4E2C-B395-761D5F2346DD_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 16:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On 24 October 2007 at 15:43, Jeff Squyres wrote:
<br>
| This is quite likely because of a &quot;feature&quot; in how the OMPI v1.2  
<br>
| series handles its plugins.  In OMPI &lt;=v1.2.x, Open MPI opens all  
<br>
| plugins that it can find and *then* applies the filter that you  
<br>
| provide (e.g., via the &quot;btl&quot; MCA param) to close / ignore certain  
<br>
| plugins.
<br>
| 
<br>
| In OMPI &gt;=v1.3, we [effectively] apply the filter *before* opening  
<br>
| plugins.  So &quot;--mca btl ^openib&quot; will actually prevent the openib BTL  
<br>
| plugin from being loaded.
<br>
| 
<br>
| I'm guessing that what you're seeing today is because we're opening  
<br>
| the openib BTL on a system where the OpenFabrics support libraries  
<br>
| are not available, and therefore the dlopen() fails.  The error  
<br>
| string that we get back from libltdl is the somewhat-misleading &quot;file  
<br>
| not found (ignored)&quot;, and that's what we print (note that ltdl is  
<br>
| referring to the fact that a dependent library is not found).
<br>
<p>I buy that explanation any day, but what is funny is that the 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl = ^openib
<br>
does suppress the warning on some of my systems (all running 1.2.4) but not
<br>
others (also running 1.2.4).
<br>
<p>Hm.
<br>
<p>Dirk
<br>
&nbsp;
<br>
| On Oct 24, 2007, at 9:51 AM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt;
<br>
| &gt; I've been scratching my head over this:
<br>
| &gt;
<br>
| &gt; lnx01:/usr/lib&gt; orterun -n 2  --mca btl ^openib  ~/c++/tests/mpitest
<br>
| &gt; [lnx01:14417] mca: base: component_find: unable to open btl openib:  
<br>
| &gt; file not found (ignored)
<br>
| &gt; [lnx01:14418] mca: base: component_find: unable to open btl openib:  
<br>
| &gt; file not found (ignored)
<br>
| &gt; Hello world, I'm process 0
<br>
| &gt; Hello world, I'm process 1
<br>
| &gt; lnx01:/usr/lib&gt; grep openib /etc/openmpi/openmpi-mca-params.conf
<br>
| &gt; #   btl = ^openib
<br>
| &gt; btl = ^openib
<br>
| &gt; lnx01:/usr/lib&gt; orterun -n 2   ~/c++/tests/mpitest
<br>
| &gt; [lnx01:14429] mca: base: component_find: unable to open btl openib:  
<br>
| &gt; file not found (ignored)
<br>
| &gt; [lnx01:14430] mca: base: component_find: unable to open btl openib:  
<br>
| &gt; file not found (ignored)
<br>
| &gt; Hello world, I'm process 0
<br>
| &gt; Hello world, I'm process 1
<br>
| &gt;
<br>
| &gt; and when I strace it, I get
<br>
| &gt;
<br>
| &gt; uname({sys=&quot;Linux&quot;, node=&quot;lnx01&quot;, ...}) = 0
<br>
| &gt; open(&quot;/etc/openmpi/openmpi-mca-params.conf&quot;, O_RDONLY) = 3
<br>
| &gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf820698) = -1 ENOTTY  
<br>
| &gt; (Inappropriate ioctl for device)
<br>
| &gt; fstat64(3, {st_mode=S_IFREG|0644, st_size=2877, ...}) = 0
<br>
| &gt; mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS,  
<br>
| &gt; -1, 0) = 0xb7f72000
<br>
| &gt; read(3, &quot;#\n# Copyright (c) 2004-2005 The &quot;..., 8192) = 2877
<br>
| &gt; read(3, &quot;&quot;, 4096)                       = 0
<br>
| &gt; read(3, &quot;&quot;, 8192)                       = 0
<br>
| &gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf8205f8) = -1 ENOTTY  
<br>
| &gt; (Inappropriate ioctl for device)
<br>
| &gt; close(3)                                = 0
<br>
| &gt; munmap(0xb7f72000, 4096)                = 0
<br>
| &gt;
<br>
| &gt; Why can't I suppress the dreaded Infinityband message?
<br>
| &gt;
<br>
| &gt; System is Ubuntu 7.04 with 'ported' (ie locally recompiled) current  
<br>
| &gt; Open MPI packages
<br>
| &gt; from Debian.
<br>
| &gt;
<br>
| &gt; Dirk
<br>
| &gt;
<br>
| &gt; -- 
<br>
| &gt; Three out of two people have difficulties with fractions.
<br>
| &gt; _______________________________________________
<br>
| &gt; users mailing list
<br>
| &gt; users_at_[hidden]
<br>
| &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
| 
<br>
| 
<br>
| -- 
<br>
| Jeff Squyres
<br>
| Cisco Systems
<br>
| 
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
