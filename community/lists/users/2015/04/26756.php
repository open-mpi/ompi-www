<?
$subject_val = "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 07:35:59 2015" -->
<!-- isoreceived="20150418113559" -->
<!-- sent="Sat, 18 Apr 2015 11:35:54 +0000" -->
<!-- isosent="20150418113554" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php" -->
<!-- id="030FDD56-77F8-4212-8B85-EF5DADE68DC1_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4ckW79Y20x+6oJ5QOj2NyJ+duQjFL91nFyh_cX01H56A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 07:35:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Previous message:</strong> <a href="26755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26635.php">Howard Pritchard: "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas: this was queued up for inclusion in the upcoming v1.8.5 release (<a href="https://github.com/open-mpi/ompi-release/pull/245">https://github.com/open-mpi/ompi-release/pull/245</a>).
<br>

<br>
Specifically: the v1.8.4 version of the man page is automatically generated, so we won't fix it.  But it'll be fixed in the v1.8.5 version of the man page.
<br>

<br>
Thank you!
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 7, 2015, at 9:57 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Thomas,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks very much for pointing this out. Will fix shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2015 5:35 AM, &quot;Thomas Jahns&quot; &lt;jahns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think above web site lists the Fortran syntax section incorrectly as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INCLUDE &#226;&#128;&#153;mpif.h&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; MPI_WIN_LOCK(ASSERT, WIN, IERROR)
</span><br>
<span class="quotelev1">&gt;     INTEGER ASSERT, WIN, IERROR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when there should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_WIN_LOCK_ALL(ASSERT, WIN, IERROR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26633.php">http://www.open-mpi.org/community/lists/users/2015/04/26633.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26635.php">http://www.open-mpi.org/community/lists/users/2015/04/26635.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Previous message:</strong> <a href="26755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26635.php">Howard Pritchard: "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
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
