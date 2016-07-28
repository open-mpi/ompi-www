<?
$subject_val = "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:18:59 2008" -->
<!-- isoreceived="20080728191859" -->
<!-- sent="Mon, 28 Jul 2008 15:18:53 -0400" -->
<!-- isosent="20080728191853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2" -->
<!-- id="A1ADD153-7C87-4C49-AF89-17A01669C8C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1216924753.22356.151.camel_at_workhorse.home.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 15:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6162.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are not using iWARP or InfiniBand networking, try configuring  
<br>
Open MPI --without-memory-manager and see if that solves your  
<br>
problem.  Issues like this can come up, especially in C++ codes, when  
<br>
the application (or supporting libraries) have their own memory  
<br>
managers that conflict with Open MPI's.  We *only* use an internal  
<br>
memory manager for optimizing benchmark performance on iWARP and IB  
<br>
networks, so if you're not using iWARP or IB, and/or your application  
<br>
doesn't re-use the same buffers repeatedly to MPI_SEND/MPI_RECV, then  
<br>
you don't need our memory manager.
<br>
<p>To be 100% clear: OMPI's internal memory manager is only used for the  
<br>
&quot;mpi_leave_pinned&quot; behavior.  OMPI runs fine without it, but will  
<br>
definitely see degraded performance in apps that continually re-use  
<br>
the same buffers for MPI_SEND/MPI_RECV (i.e., benchmarks).
<br>
<p>FYI: for these kinds of reasons, we're changing how we do  
<br>
mpi_leave_pinned in the upcoming v1.3 series so that you hopefully  
<br>
shouldn't have these issues.
<br>
<p><p>On Jul 24, 2008, at 2:39 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm seeing a segfault in a code on Ubuntu 8.04 with gcc 4.2.  I
</span><br>
<span class="quotelev1">&gt; recompiled the Debian lenny openmpi 1.2.7~rc2 package on Ubuntu, and
</span><br>
<span class="quotelev1">&gt; compiled the Debian lenny petsc and libmesh packages against that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works just fine in Debian lenny (gcc 4.3), but in Ubuntu
</span><br>
<span class="quotelev1">&gt; hardy it fails during MPI_Init:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 0x7faceea6f6f0 (LWP 5376)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0x7faceea6f6f0 (LWP 5376)]
</span><br>
<span class="quotelev1">&gt; 0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; #0  0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007faceb266e58 in malloc () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007faceb248bfb in opal_class_initialize ()
</span><br>
<span class="quotelev1">&gt;   from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007faceb25ce2b in opal_malloc_init () from /usr/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007faceb249d97 in opal_init_util () from /usr/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00007faceb249e76 in opal_init () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x00007faced05a723 in ompi_mpi_init () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x00007faced07c106 in PMPI_Init () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00007facee144d92 in libMesh::init () from /usr/lib/libmesh.so. 
</span><br>
<span class="quotelev1">&gt; 0.6.2
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000411f61 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libMesh::init() just has an assertion and command line check before
</span><br>
<span class="quotelev1">&gt; MPI_Init, so I think it's safe to conclude this is an OpenMPI problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I help to test and fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might be related to Vincent Rotival's problem in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/04/5427.php">http://www.open-mpi.org/community/lists/users/2008/04/5427.php</a> or  
</span><br>
<span class="quotelev1">&gt; maybe
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/05/5668.php">http://www.open-mpi.org/community/lists/users/2008/05/5668.php</a> .  On  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; latter, I'm building the Debian package, which should have the
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;&quot; fix.  Hmm, nope, no LDFLAGS anywhere in the .diff.gz...   
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; OpenMPI top-level Makefile has
</span><br>
<span class="quotelev1">&gt; &quot;LDFLAGS = -export-dynamic -Wl,-Bsymbolic-functions&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Engineering consulting with open source tools
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
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
<li><strong>Next message:</strong> <a href="6162.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
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
