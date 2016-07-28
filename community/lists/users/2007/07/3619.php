<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 12:44:03 2007" -->
<!-- isoreceived="20070710164403" -->
<!-- sent="Tue, 10 Jul 2007 12:43:48 -0400" -->
<!-- isosent="20070710164348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="0FA8BC20-3509-47CF-B96D-653973C75549_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707101708380.11323_at_localhost" -->
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
<strong>Date:</strong> 2007-07-10 12:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa -- if you are failing here, something is definitely wrong: this  
<br>
is failing when accessing stack memory!
<br>
<p>Are you able to compile/run other trivial and non-trivial C++  
<br>
applications using your Intel compiler installation?
<br>
<p><p>On Jul 10, 2007, at 12:10 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 9 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, that unfortunately doesn't make much sense -- I don't know what
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_set() inside opal_event_init() would cause a segv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you recompile OMPI with -g and re-run this test?  The &quot;where&quot;
</span><br>
<span class="quotelev2">&gt;&gt; information from gdb will then give us more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've recompiled with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/share/openmpi-1.2.3.icc.ifort  
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc FC=ifort F77=ifort CFLAGS=-g CXXFLAGS=-g FCFLAGS=-g  
</span><br>
<span class="quotelev1">&gt; FFLAGS=-g --enable-mem-debug --enable-trace --enable-debug --enable- 
</span><br>
<span class="quotelev1">&gt; mem-debug --enable-picky  --without-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and here is the result from gdb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;  |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5017.0 $ gdb ompi_info
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.6-debian
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License,  
</span><br>
<span class="quotelev1">&gt; and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain  
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for  
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;i486-linux-gnu&quot;...
</span><br>
<span class="quotelev1">&gt; Using host libthread_db library &quot;/lib/i686/cmov/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/share/openmpi-1.2.3.icc.ifort/bin/ 
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread -1215739504 (LWP 26073)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread -1215739504 (LWP 26073)]
</span><br>
<span class="quotelev1">&gt; 0xb7dbdb4a in opal_init_util () at runtime/opal_init.c:130
</span><br>
<span class="quotelev1">&gt; 130         if( ++opal_initialized != 1 ) {
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently c
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0xb7dbdb4a in opal_init_util () at runtime/opal_init.c:130
</span><br>
<span class="quotelev1">&gt; #1  0x08054769 in main (argc=1, argv=0xbfc7aa14) at ompi_info.cc:83
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
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;  |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  greets,
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
<li><strong>Next message:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<li><strong>Previous message:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
