<?
$subject_val = "Re: [OMPI users] Problems Using PVFS2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 12:24:45 2010" -->
<!-- isoreceived="20100113172445" -->
<!-- sent="Wed, 13 Jan 2010 11:24:34 -0600" -->
<!-- isosent="20100113172434" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Using PVFS2 with OpenMPI" -->
<!-- id="20100113172434.GG30456_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4CF49A.50103_at_dreamworks.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 12:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 12, 2010 at 02:15:54PM -0800, Evan Smyth wrote:
<br>
<span class="quotelev1">&gt; OpenMPI 1.4 (had same issue with 1.3.3) is configured with
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --with-io-romio-flags=&quot;--with-filesystems=pvfs2+ufs+nfs&quot;
</span><br>
<p><span class="quotelev1">&gt; PVFS 2.8.1 is configured to install in the default location (/usr/local) with
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs
</span><br>
<p>In addition to Jeff's request for the build logs, do you have
<br>
'pvfs2-config' in your path?   
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I build and install these (in this order) and setup my PVFS2 space using
</span><br>
<span class="quotelev1">&gt; instructions at pvfs.org. I am able to use this space using the
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/pvfs2-ls types of commands. I am simply running a 2-server
</span><br>
<span class="quotelev1">&gt; config (2 data servers and the same 2 hosts are metadata servers). As I say,
</span><br>
<span class="quotelev1">&gt; manually, this all seems fine (even when I'm not root). It may be
</span><br>
<span class="quotelev1">&gt; relevant that I am *not* using the kernel interface for PVFS2 as I
</span><br>
<span class="quotelev1">&gt; am just trying to get a
</span><br>
<span class="quotelev1">&gt; better understanding of how this works.
</span><br>
<p>That's a good piece of information.  I run in that configuration
<br>
often, so we should be able to make this work.
<br>
<p><span class="quotelev1">&gt; It is perhaps relevant that I have not had to explicitly tell
</span><br>
<span class="quotelev1">&gt; OpenMPI where I installed PVFS. I have told PVFS where I installed
</span><br>
<span class="quotelev1">&gt; OpenMPI, though. This does seem slightly odd but there does not
</span><br>
<span class="quotelev1">&gt; appear to be a way of telling OpenMPI this information. Perhaps it
</span><br>
<span class="quotelev1">&gt; is not needed.
</span><br>
<p>PVFS needs an MPI library only to build MPI-based testcases.  The
<br>
servers, client libraries, and utilities do not use MPI.
<br>
<p><span class="quotelev1">&gt; In any event, I then build my test program against this OpenMPI and
</span><br>
<span class="quotelev1">&gt; in that program I have the following call sequence (i is 0 and where
</span><br>
<span class="quotelev1">&gt; mntPoint is the path to my pvfs2 mount point -- I also tried
</span><br>
<span class="quotelev1">&gt; prefixing a &quot;pvfs2:&quot; in the front of this as I read somewhere that
</span><br>
<span class="quotelev1">&gt; that was optional).
</span><br>
<p>In this case, since you do not have the PVFS file system mounted, the
<br>
'pvfs2:' prefix is mandatory.  Otherwise, the MPI-IO library will try
<br>
to look for a directory that does not exist.
<br>
<p><span class="quotelev1">&gt; Which will only execute on one of my ranks (the way I'm running it).
</span><br>
<span class="quotelev1">&gt; No matter what I try, the MPI_File_open call fails with an
</span><br>
<span class="quotelev1">&gt; MPI_ERR_ACCESS error code.  This suggests a permission problem but I
</span><br>
<span class="quotelev1">&gt; am able to manually cp and rm from the pvfs2 space without problem
</span><br>
<span class="quotelev1">&gt; so I am not at all clear on what the permission problem is. My
</span><br>
<span class="quotelev1">&gt; access flags look fine to me (the MPI_MODE_UNIQUE_OPEN flag makes no
</span><br>
<span class="quotelev1">&gt; difference in this case as I'm only opening a single file anyway).
</span><br>
<span class="quotelev1">&gt; If I write this file to shared NFS storage, all is &quot;fine&quot;
</span><br>
<span class="quotelev1">&gt; (obviously, I do not consider that a permanent solution, though).
</span><br>
<p><span class="quotelev1">&gt; Does anyone have any idea why this is not working? Alternately or in
</span><br>
<span class="quotelev1">&gt; addition, does anyone have step-by-step instructions for how to
</span><br>
<span class="quotelev1">&gt; build and set up PVFS2 with OpenMPI as well as an example program
</span><br>
<span class="quotelev1">&gt; because this is the first time I've attempted this so I may well be
</span><br>
<span class="quotelev1">&gt; doing something wrong.
</span><br>
<p>It sounds like you're on the right track.  I should update the PVFS
<br>
quickstart for the OpenMPI specifics.  In addition to pvfs2-ping and
<br>
pvfs2-ls, make sure you can pvfs2-cp files to and from your volume.
<br>
If those 3 utilities work, then your OpenMPI installation should work
<br>
as well.  
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
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
