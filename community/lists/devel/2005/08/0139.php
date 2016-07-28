<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 16:02:18 2005" -->
<!-- isoreceived="20050812210218" -->
<!-- sent="Fri, 12 Aug 2005 15:02:14 -0600" -->
<!-- isosent="20050812210214" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="42FD0E56.30609_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8D9CE562-9B74-4975-A858-30C3BD05E0E3_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 16:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so I reconfigured, made, etc:
<br>
<p><span class="quotelev1">&gt;    137  14:29   ./configure CFLAGS=-m32 FFLAGS=-m32 
</span><br>
<span class="quotelev1">&gt; --build=i586-suse-linux --enable-static --disable-shared 
</span><br>
<span class="quotelev1">&gt; --without-threads --prefix=/home/ndebard/local/ompi 
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --disable-io-romio --disable-f77
</span><br>
<span class="quotelev1">&gt;    138  14:48   make clean all install
</span><br>
<p>But mpicc now segfaults immediately:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; gdb /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.1
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and 
</span><br>
<span class="quotelev1">&gt; you are
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
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-suse-linux&quot;...DW_FORM_strp pointing 
</span><br>
<span class="quotelev1">&gt; outside of .debug_str section [in module 
</span><br>
<span class="quotelev1">&gt; /home/ndebard/local/ompi/bin/mpicc]
</span><br>
<span class="quotelev1">&gt; Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; (no debugging symbols found)...(no debugging symbols found)...(no 
</span><br>
<span class="quotelev1">&gt; debugging symbols found)...(no debugging symbols found)...(no 
</span><br>
<span class="quotelev1">&gt; debugging symbols found)...(no debugging symbols found)...(no 
</span><br>
<span class="quotelev1">&gt; debugging symbols found)...
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0xbfffecf8
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpic++
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; 
</span><br>
<p><p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Aug 12, 2005, at 3:22 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks, trying that now.  While I'd like those things in the long run,
</span><br>
<span class="quotelev2">&gt;&gt;they're not needed right now to test what I'm trying to test.  Will  
</span><br>
<span class="quotelev2">&gt;&gt;let
</span><br>
<span class="quotelev2">&gt;&gt;you know how it goes!  (What's the problem, by the way?)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem is that I key off the target host string to decide what  
</span><br>
<span class="quotelev1">&gt;assembly to use for the atomic operations.  For most 64 bit  
</span><br>
<span class="quotelev1">&gt;platforms, the architecture string is the same for 32/64 bit and then  
</span><br>
<span class="quotelev1">&gt;you use sizeof(long) to determine whether to use 32 or 64 bit  
</span><br>
<span class="quotelev1">&gt;instructions.  So what I need to add to the configure script is a  
</span><br>
<span class="quotelev1">&gt;check if we're on x86_64 that if sizeof(long) == 4, we use the  
</span><br>
<span class="quotelev1">&gt;assembly for x86, not x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
