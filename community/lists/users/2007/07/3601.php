<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:00:58 2007" -->
<!-- isoreceived="20070709140058" -->
<!-- sent="Mon, 9 Jul 2007 09:54:28 -0400" -->
<!-- isosent="20070709135428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="01FA93A3-7A30-46E0-93BA-D0550AA991AE_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707051737490.23306_at_localhost" -->
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
<strong>Date:</strong> 2007-07-09 09:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that unfortunately doesn't make much sense -- I don't know what  
<br>
opal_event_set() inside opal_event_init() would cause a segv.
<br>
<p>Can you recompile OMPI with -g and re-run this test?  The &quot;where&quot;  
<br>
information from gdb will then give us more information.
<br>
<p><p>On Jul 5, 2007, at 12:38 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has requested:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread -1214711408 (LWP 23581)]
</span><br>
<span class="quotelev1">&gt; 0xb7eb9d98 in opal_event_set ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0xb7eb9d98 in opal_event_set ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0xb7ebb86f in opal_evsignal_init ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00000006 in ?? ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000002 in ?? ()
</span><br>
<span class="quotelev1">&gt; #4  0xb7ebb78a in opal_evsignal_add ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00000800 in ?? ()
</span><br>
<span class="quotelev1">&gt; #6  0xb7ed44b8 in ?? ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #7  0xb7ebc577 in opal_poll_init ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00000023 in ?? ()
</span><br>
<span class="quotelev1">&gt; #9  0xb7eb9f61 in opal_event_init ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x0804d22a in ompi_info::open_components ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame inner to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) shared
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/ld-linux.so.2
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /usr/local/share/openmpi-1.2.3.icc.ifort/ 
</span><br>
<span class="quotelev1">&gt; lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /usr/local/share/openmpi-1.2.3.icc.ifort/ 
</span><br>
<span class="quotelev1">&gt; lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /usr/local/share/openmpi-1.2.3.icc.ifort/ 
</span><br>
<span class="quotelev1">&gt; lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libutil.so.1
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libm.so.6
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /opt/intel/cc/10.0.023/lib/libcxaguard.so.5
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libc.so.6
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /lib/i686/cmov/libdl.so.2
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /opt/intel/cc/10.0.023/lib/libimf.so
</span><br>
<span class="quotelev1">&gt; Symbols already loaded for /opt/intel/cc/10.0.023/lib/libintlc.so.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PhD student @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  http:// 
</span><br>
<span class="quotelev1">&gt; radio.ist.utl.pt_______________________________________________
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
<li><strong>Next message:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
