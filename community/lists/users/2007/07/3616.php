<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 12:10:41 2007" -->
<!-- isoreceived="20070710161041" -->
<!-- sent="Tue, 10 Jul 2007 17:10:21 +0100 (WEST)" -->
<!-- isosent="20070710161021" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="alpine.DEB.0.99.0707101708380.11323_at_localhost" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="01FA93A3-7A30-46E0-93BA-D0550AA991AE_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-10 12:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 9 Jul 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok, that unfortunately doesn't make much sense -- I don't know what
</span><br>
<span class="quotelev1">&gt; opal_event_set() inside opal_event_init() would cause a segv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you recompile OMPI with -g and re-run this test?  The &quot;where&quot;
</span><br>
<span class="quotelev1">&gt; information from gdb will then give us more information.
</span><br>
<p>I've recompiled with
<br>
<p>./configure --prefix=/usr/local/share/openmpi-1.2.3.icc.ifort CC=icc 
<br>
CXX=icpc FC=ifort F77=ifort CFLAGS=-g CXXFLAGS=-g FCFLAGS=-g FFLAGS=-g 
<br>
--enable-mem-debug --enable-trace --enable-debug --enable-mem-debug 
<br>
--enable-picky  --without-memory-manager
<br>
<p>and here is the result from gdb:
<br>
<p>| ---------------------------------------------------------------------- |
<br>
<p>5017.0 $ gdb ompi_info
<br>
GNU gdb 6.6-debian
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you 
<br>
are
<br>
welcome to change it and/or distribute copies of it under certain 
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for 
<br>
details.
<br>
This GDB was configured as &quot;i486-linux-gnu&quot;...
<br>
Using host libthread_db library &quot;/lib/i686/cmov/libthread_db.so.1&quot;.
<br>
(gdb) run
<br>
Starting program: /usr/local/share/openmpi-1.2.3.icc.ifort/bin/ompi_info
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread -1215739504 (LWP 26073)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread -1215739504 (LWP 26073)]
<br>
0xb7dbdb4a in opal_init_util () at runtime/opal_init.c:130
<br>
130         if( ++opal_initialized != 1 ) {
<br>
Current language:  auto; currently c
<br>
(gdb) where
<br>
#0  0xb7dbdb4a in opal_init_util () at runtime/opal_init.c:130
<br>
#1  0x08054769 in main (argc=1, argv=0xbfc7aa14) at ompi_info.cc:83
<br>
(gdb) shared
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
(gdb)
<br>
<p>| ---------------------------------------------------------------------- |
<br>
<p>&nbsp;&nbsp;greets,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
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
<li><strong>Next message:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
