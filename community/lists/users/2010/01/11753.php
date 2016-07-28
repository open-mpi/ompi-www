<?
$subject_val = "Re: [OMPI users] Problems Using PVFS2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 12:55:55 2010" -->
<!-- isoreceived="20100113175555" -->
<!-- sent="Wed, 13 Jan 2010 11:55:51 -0600" -->
<!-- isosent="20100113175551" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Using PVFS2 with OpenMPI" -->
<!-- id="4B4E0927.1040304_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100113172434.GG30456_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Using PVFS2 with OpenMPI<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 12:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know whether its relevant for this problem or not, but a couple 
<br>
of weeks ago we also found that we had to apply the following patch to 
<br>
to compile ROMIO with OpenMPI over pvfs2. There is an additional header 
<br>
pvfs2-compat.h included in the ROMIO version of MPICH, but is somehow 
<br>
missing in the OpenMPI version....
<br>
<p>ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h
<br>
--- a/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Thu Sep 03
<br>
11:55:51 2009 -0500
<br>
+++ b/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Mon Sep 21
<br>
10:16:27 2009 -0500
<br>
@@ -11,6 +11,10 @@
<br>
&nbsp;&nbsp;#include &quot;adio.h&quot;
<br>
&nbsp;&nbsp;#ifdef HAVE_PVFS2_H
<br>
&nbsp;&nbsp;#include &quot;pvfs2.h&quot;
<br>
+#endif
<br>
+
<br>
+#ifdef PVFS2_VERSION_MAJOR
<br>
+#include &quot;pvfs2-compat.h&quot;
<br>
&nbsp;&nbsp;#endif
<br>
<p><p>Thanks
<br>
Edgar
<br>
<p><p>Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2010 at 02:15:54PM -0800, Evan Smyth wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4 (had same issue with 1.3.3) is configured with
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads --with-io-romio-flags=&quot;--with-filesystems=pvfs2+ufs+nfs&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PVFS 2.8.1 is configured to install in the default location (/usr/local) with
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to Jeff's request for the build logs, do you have
</span><br>
<span class="quotelev1">&gt; 'pvfs2-config' in your path?   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I build and install these (in this order) and setup my PVFS2 space using
</span><br>
<span class="quotelev2">&gt;&gt; instructions at pvfs.org. I am able to use this space using the
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/pvfs2-ls types of commands. I am simply running a 2-server
</span><br>
<span class="quotelev2">&gt;&gt; config (2 data servers and the same 2 hosts are metadata servers). As I say,
</span><br>
<span class="quotelev2">&gt;&gt; manually, this all seems fine (even when I'm not root). It may be
</span><br>
<span class="quotelev2">&gt;&gt; relevant that I am *not* using the kernel interface for PVFS2 as I
</span><br>
<span class="quotelev2">&gt;&gt; am just trying to get a
</span><br>
<span class="quotelev2">&gt;&gt; better understanding of how this works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a good piece of information.  I run in that configuration
</span><br>
<span class="quotelev1">&gt; often, so we should be able to make this work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is perhaps relevant that I have not had to explicitly tell
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI where I installed PVFS. I have told PVFS where I installed
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, though. This does seem slightly odd but there does not
</span><br>
<span class="quotelev2">&gt;&gt; appear to be a way of telling OpenMPI this information. Perhaps it
</span><br>
<span class="quotelev2">&gt;&gt; is not needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PVFS needs an MPI library only to build MPI-based testcases.  The
</span><br>
<span class="quotelev1">&gt; servers, client libraries, and utilities do not use MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In any event, I then build my test program against this OpenMPI and
</span><br>
<span class="quotelev2">&gt;&gt; in that program I have the following call sequence (i is 0 and where
</span><br>
<span class="quotelev2">&gt;&gt; mntPoint is the path to my pvfs2 mount point -- I also tried
</span><br>
<span class="quotelev2">&gt;&gt; prefixing a &quot;pvfs2:&quot; in the front of this as I read somewhere that
</span><br>
<span class="quotelev2">&gt;&gt; that was optional).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, since you do not have the PVFS file system mounted, the
</span><br>
<span class="quotelev1">&gt; 'pvfs2:' prefix is mandatory.  Otherwise, the MPI-IO library will try
</span><br>
<span class="quotelev1">&gt; to look for a directory that does not exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which will only execute on one of my ranks (the way I'm running it).
</span><br>
<span class="quotelev2">&gt;&gt; No matter what I try, the MPI_File_open call fails with an
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERR_ACCESS error code.  This suggests a permission problem but I
</span><br>
<span class="quotelev2">&gt;&gt; am able to manually cp and rm from the pvfs2 space without problem
</span><br>
<span class="quotelev2">&gt;&gt; so I am not at all clear on what the permission problem is. My
</span><br>
<span class="quotelev2">&gt;&gt; access flags look fine to me (the MPI_MODE_UNIQUE_OPEN flag makes no
</span><br>
<span class="quotelev2">&gt;&gt; difference in this case as I'm only opening a single file anyway).
</span><br>
<span class="quotelev2">&gt;&gt; If I write this file to shared NFS storage, all is &quot;fine&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (obviously, I do not consider that a permanent solution, though).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any idea why this is not working? Alternately or in
</span><br>
<span class="quotelev2">&gt;&gt; addition, does anyone have step-by-step instructions for how to
</span><br>
<span class="quotelev2">&gt;&gt; build and set up PVFS2 with OpenMPI as well as an example program
</span><br>
<span class="quotelev2">&gt;&gt; because this is the first time I've attempted this so I may well be
</span><br>
<span class="quotelev2">&gt;&gt; doing something wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like you're on the right track.  I should update the PVFS
</span><br>
<span class="quotelev1">&gt; quickstart for the OpenMPI specifics.  In addition to pvfs2-ping and
</span><br>
<span class="quotelev1">&gt; pvfs2-ls, make sure you can pvfs2-cp files to and from your volume.
</span><br>
<span class="quotelev1">&gt; If those 3 utilities work, then your OpenMPI installation should work
</span><br>
<span class="quotelev1">&gt; as well.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
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
