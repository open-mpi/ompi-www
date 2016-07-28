<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 12:40:29 2007" -->
<!-- isoreceived="20070705164029" -->
<!-- sent="Thu, 5 Jul 2007 17:38:47 +0100 (WEST)" -->
<!-- isosent="20070705163847" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="alpine.DEB.0.99.0707051737490.23306_at_localhost" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="7C37B99E-CF6D-41AA-ADE9-FF45E2934278_at_cs.utk.edu" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 12:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3580.php">SLIM H.A.: "[OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has requested:
<br>
<p><p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread -1214711408 (LWP 23581)]
<br>
0xb7eb9d98 in opal_event_set ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
<p>(gdb) where
<br>
#0  0xb7eb9d98 in opal_event_set ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#1  0xb7ebb86f in opal_evsignal_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#2  0x00000006 in ?? ()
<br>
#3  0x00000002 in ?? ()
<br>
#4  0xb7ebb78a in opal_evsignal_add ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#5  0x00000800 in ?? ()
<br>
#6  0xb7ed44b8 in ?? ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#7  0xb7ebc577 in opal_poll_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#8  0x00000023 in ?? ()
<br>
#9  0xb7eb9f61 in opal_event_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
#10 0x0804d22a in ompi_info::open_components ()
<br>
Backtrace stopped: previous frame inner to this frame (corrupt stack?)
<br>
<p>(gdb) shared
<br>
Symbols already loaded for /lib/ld-linux.so.2
<br>
Symbols already loaded for 
<br>
/usr/local/share/openmpi-1.2.3.icc.ifort/lib/libmpi.so.0
<br>
Symbols already loaded for 
<br>
/usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-rte.so.0
<br>
Symbols already loaded for 
<br>
/usr/local/share/openmpi-1.2.3.icc.ifort/lib/libopen-pal.so.0
<br>
Symbols already loaded for /lib/i686/cmov/libnsl.so.1
<br>
Symbols already loaded for /lib/i686/cmov/libutil.so.1
<br>
Symbols already loaded for /lib/i686/cmov/libm.so.6
<br>
Symbols already loaded for /usr/lib/libstdc++.so.6
<br>
Symbols already loaded for /lib/libgcc_s.so.1
<br>
Symbols already loaded for /opt/intel/cc/10.0.023/lib/libcxaguard.so.5
<br>
Symbols already loaded for /lib/i686/cmov/libpthread.so.0
<br>
Symbols already loaded for /lib/i686/cmov/libc.so.6
<br>
Symbols already loaded for /lib/i686/cmov/libdl.so.2
<br>
Symbols already loaded for /opt/intel/cc/10.0.023/lib/libimf.so
<br>
Symbols already loaded for /opt/intel/cc/10.0.023/lib/libintlc.so.5
<br>
<p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD student @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;&lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
<br>
<p>&nbsp;&nbsp;&amp;
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://radio.ist.utl.pt">http://radio.ist.utl.pt</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3580.php">SLIM H.A.: "[OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3578.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
