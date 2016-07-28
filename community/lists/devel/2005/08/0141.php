<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 16:30:11 2005" -->
<!-- isoreceived="20050812213011" -->
<!-- sent="Fri, 12 Aug 2005 17:30:08 -0400" -->
<!-- isosent="20050812213008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="22621f0a0eb06b58253aef27cab960c4_at_lam-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="da5d5f91b08ce5a2c0942b8aec55524e_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-12 16:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Brian Barrett: "Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, Brian just pointed out the problem -- you also need to set 
<br>
CXXFLAGS=-m32.
<br>
<p><p>On Aug 12, 2005, at 5:15 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That's a neat one.  mpicc shouldn't care about any of this stuff --
</span><br>
<span class="quotelev1">&gt; it's a trivial C++ program that invokes none of the MCA framework
</span><br>
<span class="quotelev1">&gt; stuff, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to replicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just out of curiosity -- do other C++ applications work nicely in 32
</span><br>
<span class="quotelev1">&gt; bit on that machine?  (particularly ones that use std::vector and
</span><br>
<span class="quotelev1">&gt; std::string)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2005, at 5:02 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, so I reconfigured, made, etc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    137  14:29   ./configure CFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --build=i586-suse-linux --enable-static --disable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-devel-headers --disable-io-romio --disable-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    138  14:48   make clean all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But mpicc now segfaults immediately:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sparkplug]~/ompi &gt; gdb /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb 6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;x86_64-suse-linux&quot;...DW_FORM_strp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outside of .debug_str section [in module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/ndebard/local/ompi/bin/mpicc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (no debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging symbols found)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot access memory at address 0xbfffecf8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpic++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Nathan
</span><br>
<span class="quotelev2">&gt;&gt; Correspondence
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev2">&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev2">&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 12, 2005, at 3:22 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, trying that now.  While I'd like those things in the long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they're not needed right now to test what I'm trying to test.  Will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; let
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you know how it goes!  (What's the problem, by the way?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that I key off the target host string to decide what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assembly to use for the atomic operations.  For most 64 bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platforms, the architecture string is the same for 32/64 bit and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you use sizeof(long) to determine whether to use 32 or 64 bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instructions.  So what I need to add to the configure script is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check if we're on x86_64 that if sizeof(long) == 4, we use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assembly for x86, not x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} jsquyres_at_[hidden]
{+} <a href="http://www.lam-mpi.org/">http://www.lam-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Brian Barrett: "Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0140.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
