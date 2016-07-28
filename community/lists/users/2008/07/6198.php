<?
$subject_val = "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 14:22:13 2008" -->
<!-- isoreceived="20080729182213" -->
<!-- sent="Tue, 29 Jul 2008 14:21:38 -0400" -->
<!-- isosent="20080729182138" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2" -->
<!-- id="1217355698.17104.78.camel_at_workhorse" -->
<!-- inreplyto="18574.27620.309852.566386_at_ron.nulle.part" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 14:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6197.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2008-07-28 at 20:01 -0500, Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; On 24 July 2008 at 14:39, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; | Greetings,
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | I'm seeing a segfault in a code on Ubuntu 8.04 with gcc 4.2.  I
</span><br>
<span class="quotelev1">&gt; | recompiled the Debian lenny openmpi 1.2.7~rc2 package on Ubuntu, and
</span><br>
<span class="quotelev1">&gt; | compiled the Debian lenny petsc and libmesh packages against that.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Everything works just fine in Debian lenny (gcc 4.3), but in Ubuntu
</span><br>
<span class="quotelev1">&gt; | hardy it fails during MPI_Init:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; | [New Thread 0x7faceea6f6f0 (LWP 5376)]
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; | [Switching to Thread 0x7faceea6f6f0 (LWP 5376)]
</span><br>
<span class="quotelev1">&gt; | 0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; | #0  0x00007faceb265b8b in _int_malloc () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #1  0x00007faceb266e58 in malloc () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #2  0x00007faceb248bfb in opal_class_initialize ()
</span><br>
<span class="quotelev1">&gt; |    from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #3  0x00007faceb25ce2b in opal_malloc_init () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #4  0x00007faceb249d97 in opal_init_util () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #5  0x00007faceb249e76 in opal_init () from /usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; | #6  0x00007faced05a723 in ompi_mpi_init () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; | #7  0x00007faced07c106 in PMPI_Init () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; | #8  0x00007facee144d92 in libMesh::init () from /usr/lib/libmesh.so.0.6.2
</span><br>
<span class="quotelev1">&gt; | #9  0x0000000000411f61 in main ()
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | libMesh::init() just has an assertion and command line check before
</span><br>
<span class="quotelev1">&gt; | MPI_Init, so I think it's safe to conclude this is an OpenMPI problem.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | How can I help to test and fix this?
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | This might be related to Vincent Rotival's problem in
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/community/lists/users/2008/04/5427.php">http://www.open-mpi.org/community/lists/users/2008/04/5427.php</a> or maybe
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/community/lists/users/2008/05/5668.php">http://www.open-mpi.org/community/lists/users/2008/05/5668.php</a> .  On the
</span><br>
<span class="quotelev1">&gt; | latter, I'm building the Debian package, which should have the
</span><br>
<span class="quotelev1">&gt; | LDFLAGS=&quot;&quot; fix.  Hmm, nope, no LDFLAGS anywhere in the .diff.gz...  The
</span><br>
<span class="quotelev1">&gt; | OpenMPI top-level Makefile has
</span><br>
<span class="quotelev1">&gt; | &quot;LDFLAGS = -export-dynamic -Wl,-Bsymbolic-functions&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What bit us in the second bug report you refer to there was that _Ubuntu_ set
</span><br>
<span class="quotelev1">&gt; this LDFLAGS value in their binutils settings for hardy.  We do (did?) not
</span><br>
<span class="quotelev1">&gt; (or at least not yet) do that in Debian -- the binutils there do not add
</span><br>
<span class="quotelev1">&gt; LDFLAGS which is why do not unset anything in the debian/rules for ompi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I recall, updated packages for Ubuntu hardy have been fix, i.e. have been
</span><br>
<span class="quotelev1">&gt; built without the bad LDFLAGS value.
</span><br>
<p>Great.
<br>
<p>I rebuilt 1.2.7 with LDFLAGS=&quot;&quot; and that fixed libMesh.
<br>
<p>Thanks,
<br>
-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6198/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6197.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
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
