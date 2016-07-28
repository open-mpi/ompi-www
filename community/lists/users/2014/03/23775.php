<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 17:48:26 2014" -->
<!-- isoreceived="20140304224826" -->
<!-- sent="Tue, 4 Mar 2014 22:48:25 +0000" -->
<!-- isosent="20140304224825" -->
<!-- name="Latham, Robert J." -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="1393973306.6889.3.camel_at_cobb" -->
<!-- charset="utf-8" -->
<!-- inreplyto="68C2B951-804F-41B6-B4E5-79CC28834F43_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OrangeFS ROMIO support<br>
<strong>From:</strong> Latham, Robert J. (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 17:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23776.php">Vince Grimes: "[OMPI users] LOCAL QP OPERATION ERROR"</a>
<li><strong>Previous message:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2014-02-28 at 12:20 -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did you see the note I forwarded to you about SLES issues? Not sure if that is on your side or ours
</span><br>

<br>
It looks like a strange interaction between SLES header files and the
<br>
SLES compiler: odd that it would carp about one system call that's not
<br>
invoked in those files. 
<br>

<br>
==rob
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2014, at 12:05 PM, Latham, Robert J. &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2014-02-26 at 17:14 -0600, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that was my fault, I did not follow up the time, got probably side
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tracked by something. Anyway, I suspect that you actually have the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; patch, otherwise the current Open MPI trunk and the 1.7 release series
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would not have the patch after the last ROMIO update  - at least I did
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not reapply it, not sure whether Nathan did.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, thanks for apologizing for not following up.  I was about to get
</span><br>
<span class="quotelev2">&gt; &gt; good and angry, but you've taken away my righteous fury! :&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've gone through six years worth of OpenMPI romio changes: everything
</span><br>
<span class="quotelev2">&gt; &gt; since 
</span><br>
<span class="quotelev2">&gt; &gt; r16693 | adi | 2007-11-08 06:54:48 -0600 (Thu, 08 Nov 2007) | 2 lines
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and picked up a few changes.  I'm sure everyone will be happy that I
</span><br>
<span class="quotelev2">&gt; &gt; found the &quot;fix a catamount build warning&quot; change, that was never sent
</span><br>
<span class="quotelev2">&gt; &gt; upstream to us :&gt;  .   Do you know of any other old patches I should
</span><br>
<span class="quotelev2">&gt; &gt; look at?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've also done a diff of the two source trees.   OpenMPI ROMIO is
</span><br>
<span class="quotelev2">&gt; &gt; missing 
</span><br>
<span class="quotelev2">&gt; &gt; - some Blue Gene fixes (probably not relevant?) 
</span><br>
<span class="quotelev2">&gt; &gt; - some large-datatype processing fixes (probably more interesting).
</span><br>
<span class="quotelev2">&gt; &gt; - better (any) handling of retrying write(2) and read(2) system calls
</span><br>
<span class="quotelev2">&gt; &gt; when they return less than requested
</span><br>
<span class="quotelev2">&gt; &gt; - better memory cleanup in error cases
</span><br>
<span class="quotelev2">&gt; &gt; - a configure-time check for the need for constification of bindings.
</span><br>
<span class="quotelev2">&gt; &gt; (not relevant: openmpi is constified)
</span><br>
<span class="quotelev2">&gt; &gt; - external32 support routines (but external32 is only &quot;mostly there&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; Dave knows the details)
</span><br>
<span class="quotelev2">&gt; &gt; - 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I saw mentions in the SVN logs of a pending &quot;updated PanFS driver&quot; but
</span><br>
<span class="quotelev2">&gt; &gt; that was several years ago, and the two drivers are the same right now.
</span><br>
<span class="quotelev2">&gt; &gt; Is there a secret PanFS repository I should raid?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There are still a good deal of Ompi-specific changes that I don't want
</span><br>
<span class="quotelev2">&gt; &gt; to pull into ROMIO, especially anything dealing with the build system. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I should bring this up on openmpi-devel, but I pushed these changes to a
</span><br>
<span class="quotelev2">&gt; &gt; review branch:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://git.mpich.org/mpich-dev.git/shortlog/refs/heads/romio_sync_from_ompi">http://git.mpich.org/mpich-dev.git/shortlog/refs/heads/romio_sync_from_ompi</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ==rob
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23776.php">Vince Grimes: "[OMPI users] LOCAL QP OPERATION ERROR"</a>
<li><strong>Previous message:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
