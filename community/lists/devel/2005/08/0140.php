<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 16:15:06 2005" -->
<!-- isoreceived="20050812211506" -->
<!-- sent="Fri, 12 Aug 2005 17:15:03 -0400" -->
<!-- isosent="20050812211503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="da5d5f91b08ce5a2c0942b8aec55524e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42FD0E56.30609_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-08-12 16:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a neat one.  mpicc shouldn't care about any of this stuff -- 
<br>
it's a trivial C++ program that invokes none of the MCA framework 
<br>
stuff, etc.
<br>
<p>I'll try to replicate.
<br>
<p>Just out of curiosity -- do other C++ applications work nicely in 32 
<br>
bit on that machine?  (particularly ones that use std::vector and 
<br>
std::string)
<br>
<p><p><p>On Aug 12, 2005, at 5:02 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; OK, so I reconfigured, made, etc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    137  14:29   ./configure CFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --build=i586-suse-linux --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers --disable-io-romio --disable-f77
</span><br>
<span class="quotelev2">&gt;&gt;    138  14:48   make clean all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But mpicc now segfaults immediately:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; gdb /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb 6.1
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev2">&gt;&gt; you are
</span><br>
<span class="quotelev2">&gt;&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev2">&gt;&gt; conditions.
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev2">&gt;&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev2">&gt;&gt; details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;x86_64-suse-linux&quot;...DW_FORM_strp pointing
</span><br>
<span class="quotelev2">&gt;&gt; outside of .debug_str section [in module
</span><br>
<span class="quotelev2">&gt;&gt; /home/ndebard/local/ompi/bin/mpicc]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /home/ndebard/local/ompi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; (no debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev2">&gt;&gt; debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev2">&gt;&gt; debugging symbols found)...(no debugging symbols found)...(no
</span><br>
<span class="quotelev2">&gt;&gt; debugging symbols found)...
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x0000000000408d4a in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; Cannot access memory at address 0xbfffecf8
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt; /home/ndebard/local/ompi/bin/mpic++
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2005, at 3:22 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, trying that now.  While I'd like those things in the long 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they're not needed right now to test what I'm trying to test.  Will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you know how it goes!  (What's the problem, by the way?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that I key off the target host string to decide what
</span><br>
<span class="quotelev2">&gt;&gt; assembly to use for the atomic operations.  For most 64 bit
</span><br>
<span class="quotelev2">&gt;&gt; platforms, the architecture string is the same for 32/64 bit and then
</span><br>
<span class="quotelev2">&gt;&gt; you use sizeof(long) to determine whether to use 32 or 64 bit
</span><br>
<span class="quotelev2">&gt;&gt; instructions.  So what I need to add to the configure script is a
</span><br>
<span class="quotelev2">&gt;&gt; check if we're on x86_64 that if sizeof(long) == 4, we use the
</span><br>
<span class="quotelev2">&gt;&gt; assembly for x86, not x86_64.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
