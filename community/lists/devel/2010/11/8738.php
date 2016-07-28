<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 06:00:13 2010" -->
<!-- isoreceived="20101130110013" -->
<!-- sent="30 Nov 2010 11:00:08 +0000" -->
<!-- isosent="20101130110008" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="Prayer.1.3.3.1011301100080.681_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="443AD0B2-512C-4D61-A302-194B9D844F46_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 06:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8739.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8737.php">ananda.mudar_at_[hidden]: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30 2010, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what one IB vendor says about the issue on their web site 
</span><br>
<span class="quotelev1">&gt; (redacted to protect the innocent):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;At the time of this release, the (redacted-openib) driver has issues 
</span><br>
<span class="quotelev1">&gt; with buffers sharing pages when fork( ) is used. Pinned (locked in 
</span><br>
<span class="quotelev1">&gt; memory) pages are normally marked copy-on-write during a fork.
</span><br>
<p>That is TRULY demented!  It is almost always precisely the wrong thing
<br>
to do.
<br>
<p><span class="quotelev1">&gt; If a page 
</span><br>
<span class="quotelev1">&gt; is pinned before a fork and subsequently written to while RDMA operations 
</span><br>
<span class="quotelev1">&gt; are being performed on the same page, silent data corruption can occur as 
</span><br>
<span class="quotelev1">&gt; RDMA operations continue to stream data to a page that has moved. To 
</span><br>
<span class="quotelev1">&gt; avoid this, the (redacted-openib) driver does not use copy-on-write 
</span><br>
<span class="quotelev1">&gt; behavior during a fork for pinned pages. Instead, access to these pages 
</span><br>
<span class="quotelev1">&gt; by the child process will result in a segmentation violation.&quot;
</span><br>
<p>That is sane.  Not user-friendly, but at least sane.
<br>
<p><span class="quotelev1">&gt; While there is some variation, I believe you will find that all IB comm 
</span><br>
<span class="quotelev1">&gt; shares this problem. So it is wise to avoid using fork if you want to use 
</span><br>
<span class="quotelev1">&gt; the openib transport.
</span><br>
<p>Yes and no.  Some such communication may allow RDMA only to shared memory,
<br>
which solves the problem in another way.  Several specialist HPC networks
<br>
were (are?) like that, and I can see no reason why an IB driver should not
<br>
use the same design.  That, of course, means that most MPI transfers need
<br>
a copy.
<br>
<p><span class="quotelev1">&gt; Hence the warning. Ignoring it is purely a &quot;user beware&quot; situation, but 
</span><br>
<span class="quotelev1">&gt; we provide that mechanism for the truly adventurous...or IB developers 
</span><br>
<span class="quotelev1">&gt; who want to someday resolve the problem.
</span><br>
<p>Well, there is a much simpler case where it will &quot;just work&quot;, which is
<br>
very probably what the OP was doing.  When the fork is immediately
<br>
followed by an exec in the child process, there isn't an issue.  We all
<br>
know the history, but the mainframe designs of having a proper spawn
<br>
primitive were much cleaner.  However, that's not what we've got.
<br>
<p>It might be worth adding to the note that this is the ONLY case when the
<br>
ordinary user is advised to use that facility.  Or it might not, depending
<br>
on the level of Clue that readers are expected to have.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<p><p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8739.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8737.php">ananda.mudar_at_[hidden]: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
