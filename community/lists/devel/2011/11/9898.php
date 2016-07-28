<?
$subject_val = "Re: [OMPI devel] ibm/io/file_status_get_count";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 12:06:08 2011" -->
<!-- isoreceived="20111104160608" -->
<!-- sent="Fri, 04 Nov 2011 09:05:56 -0700" -->
<!-- isosent="20111104160556" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/io/file_status_get_count" -->
<!-- id="4EB40D64.10804_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="269FFA85-F1AF-4118-9CC6-6702CA9F9163_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm/io/file_status_get_count<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 12:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9899.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9897.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/4/2011 5:56 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 28, 2011, at 1:59 AM, Eugene Loh wrote
</span><br>
<span class="quotelev2">&gt;&gt; In our MTT testing, we see ibm/io/file_status_get_count fail occasionally with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File locking failed in ADIOI_Set_lock(fd A,cmd F_SETLKW/7,type F_RDLCK/0,whence 0) with return value
</span><br>
<span class="quotelev2">&gt;&gt; FFFFFFFF and errno 5.
</span><br>
<span class="quotelev2">&gt;&gt; - If the file system is NFS, you need to use NFS version 3, ensure that the lockd daemon is running
</span><br>
<span class="quotelev2">&gt;&gt; on all the machines, and mount the directory with the 'noac' option (no attribute caching).
</span><br>
<span class="quotelev2">&gt;&gt; - If the file system is LUSTRE, ensure that the directory is mounted with the 'flock' option.
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_Set_lock:: Input/output error
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_Set_lock:offset 0, length 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One of the curious things (to us) about this test is that no one else appears to run it.  Looking back through a lot of MTT results, essentially the only results reported are Oracle.  Almost no non-Oracle results for this test have been reported in the last few months.  Is there something special about this test we should know about?
</span><br>
<span class="quotelev1">&gt; Not that I'm aware of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see why Cisco skipped it -- I didn't have the &quot;io&quot; directory listed in my list of IBM directories to traverse.  Doh!  That's been fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Cisco's MTT runs look like they need a bit of TLC -- I'm guessing IB is down on a node or two, resulting in a lot of false failures, but I likely won't have time to look at them until after SC :-( )
</span><br>
Yeah.  In our recent experience, everyone's MTT runs seem to need lots 
<br>
of TLC.  Anyhow, thanks for the feedback:  it appears there is no 
<br>
general intentional avoidance of this particular test that we were 
<br>
simply unaware of.
<br>
<span class="quotelev2">&gt;&gt; P.S.  We're also interested in understanding the error message better.  I suppose that's more appropriately taken up with ROMIO folks, which I will do, but if anyone on this list has useful information I'd love to hear it.  The error apparently comes when MPI_File_get_size sets a lock.  Each process has its own file and the test usually passes, so it's unclear to me what the problem is.  Further, the error message discussing NFS and Lustre strikes me as rather speculative.  We tend to run these tests repeatedly on the same file systems from the same test nodes.  Anyone have any idea how sound the NFSv3/lockd/noac advice is or what the real issue is here?
</span><br>
<span class="quotelev1">&gt; No.  You'll need to ask Rob Latham.
</span><br>
Thanks.  He replied to my inquiry on the MPICH list.  Main answer is 
<br>
that robustness bets are off on NFS and the message might be a little 
<br>
misleading.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9899.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9897.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
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
