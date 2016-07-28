<?
$subject_val = "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 21:01:32 2008" -->
<!-- isoreceived="20080729010132" -->
<!-- sent="Mon, 28 Jul 2008 20:01:24 -0500" -->
<!-- isosent="20080729010124" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2" -->
<!-- id="18574.27620.309852.566386_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 21:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6176.php">Martin Horvat: "[OMPI users] TEST UPPER MATRIX -- NOT PASSED"</a>
<li><strong>Previous message:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Reply:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24 July 2008 at 14:39, Adam C Powell IV wrote:
<br>
| Greetings,
<br>
| 
<br>
| I'm seeing a segfault in a code on Ubuntu 8.04 with gcc 4.2.  I
<br>
| recompiled the Debian lenny openmpi 1.2.7~rc2 package on Ubuntu, and
<br>
| compiled the Debian lenny petsc and libmesh packages against that.
<br>
| 
<br>
| Everything works just fine in Debian lenny (gcc 4.3), but in Ubuntu
<br>
| hardy it fails during MPI_Init:
<br>
| 
<br>
| [Thread debugging using libthread_db enabled]
<br>
| [New Thread 0x7faceea6f6f0 (LWP 5376)]
<br>
| 
<br>
| Program received signal SIGSEGV, Segmentation fault.
<br>
| [Switching to Thread 0x7faceea6f6f0 (LWP 5376)]
<br>
| 0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen-pal.so.0
<br>
| (gdb) backtrace
<br>
| #0  0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen-pal.so.0
<br>
| #1  0x00007faceb266e58 in malloc () from /usr/lib/libopen-pal.so.0
<br>
| #2  0x00007faceb248bfb in opal_class_initialize ()
<br>
|    from /usr/lib/libopen-pal.so.0
<br>
| #3  0x00007faceb25ce2b in opal_malloc_init () from /usr/lib/libopen-pal.so.0
<br>
| #4  0x00007faceb249d97 in opal_init_util () from /usr/lib/libopen-pal.so.0
<br>
| #5  0x00007faceb249e76 in opal_init () from /usr/lib/libopen-pal.so.0
<br>
| #6  0x00007faced05a723 in ompi_mpi_init () from /usr/lib/libmpi.so.0
<br>
| #7  0x00007faced07c106 in PMPI_Init () from /usr/lib/libmpi.so.0
<br>
| #8  0x00007facee144d92 in libMesh::init () from /usr/lib/libmesh.so.0.6.2
<br>
| #9  0x0000000000411f61 in main ()
<br>
| 
<br>
| libMesh::init() just has an assertion and command line check before
<br>
| MPI_Init, so I think it's safe to conclude this is an OpenMPI problem.
<br>
| 
<br>
| How can I help to test and fix this?
<br>
| 
<br>
| This might be related to Vincent Rotival's problem in
<br>
| <a href="http://www.open-mpi.org/community/lists/users/2008/04/5427.php">http://www.open-mpi.org/community/lists/users/2008/04/5427.php</a> or maybe
<br>
| <a href="http://www.open-mpi.org/community/lists/users/2008/05/5668.php">http://www.open-mpi.org/community/lists/users/2008/05/5668.php</a> .  On the
<br>
| latter, I'm building the Debian package, which should have the
<br>
| LDFLAGS=&quot;&quot; fix.  Hmm, nope, no LDFLAGS anywhere in the .diff.gz...  The
<br>
| OpenMPI top-level Makefile has
<br>
| &quot;LDFLAGS = -export-dynamic -Wl,-Bsymbolic-functions&quot;
<br>
<p>What bit us in the second bug report you refer to there was that _Ubuntu_ set
<br>
this LDFLAGS value in their binutils settings for hardy.  We do (did?) not
<br>
(or at least not yet) do that in Debian -- the binutils there do not add
<br>
LDFLAGS which is why do not unset anything in the debian/rules for ompi.
<br>
<p>As I recall, updated packages for Ubuntu hardy have been fix, i.e. have been
<br>
built without the bad LDFLAGS value.
<br>
<p>Hope this helps,  Dirk
<br>
<p>| 
<br>
| -Adam
<br>
| -- 
<br>
| GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
<br>
| 
<br>
| Engineering consulting with open source tools
<br>
| <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6176.php">Martin Horvat: "[OMPI users] TEST UPPER MATRIX -- NOT PASSED"</a>
<li><strong>Previous message:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Reply:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
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
