<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 15:05:14 2014" -->
<!-- isoreceived="20140228200514" -->
<!-- sent="Fri, 28 Feb 2014 20:05:13 +0000" -->
<!-- isosent="20140228200513" -->
<!-- name="Latham, Robert J." -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="1393617916.5762.43.camel_at_cobb" -->
<!-- charset="utf-8" -->
<!-- inreplyto="530E753A.6070404_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2014-02-28 15:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23719.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23677.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2014-02-26 at 17:14 -0600, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; that was my fault, I did not follow up the time, got probably side
</span><br>
<span class="quotelev1">&gt; tracked by something. Anyway, I suspect that you actually have the
</span><br>
<span class="quotelev1">&gt; patch, otherwise the current Open MPI trunk and the 1.7 release series
</span><br>
<span class="quotelev1">&gt; would not have the patch after the last ROMIO update  - at least I did
</span><br>
<span class="quotelev1">&gt; not reapply it, not sure whether Nathan did.
</span><br>

<br>
Well, thanks for apologizing for not following up.  I was about to get
<br>
good and angry, but you've taken away my righteous fury! :&gt;
<br>

<br>
I've gone through six years worth of OpenMPI romio changes: everything
<br>
since 
<br>
r16693 | adi | 2007-11-08 06:54:48 -0600 (Thu, 08 Nov 2007) | 2 lines
<br>

<br>
and picked up a few changes.  I'm sure everyone will be happy that I
<br>
found the &quot;fix a catamount build warning&quot; change, that was never sent
<br>
upstream to us :&gt;  .   Do you know of any other old patches I should
<br>
look at?
<br>

<br>
I've also done a diff of the two source trees.   OpenMPI ROMIO is
<br>
missing 
<br>
- some Blue Gene fixes (probably not relevant?) 
<br>
- some large-datatype processing fixes (probably more interesting).
<br>
- better (any) handling of retrying write(2) and read(2) system calls
<br>
when they return less than requested
<br>
- better memory cleanup in error cases
<br>
- a configure-time check for the need for constification of bindings.
<br>
(not relevant: openmpi is constified)
<br>
- external32 support routines (but external32 is only &quot;mostly there&quot;.
<br>
Dave knows the details)
<br>
- 
<br>

<br>
I saw mentions in the SVN logs of a pending &quot;updated PanFS driver&quot; but
<br>
that was several years ago, and the two drivers are the same right now.
<br>
Is there a secret PanFS repository I should raid?
<br>

<br>
There are still a good deal of Ompi-specific changes that I don't want
<br>
to pull into ROMIO, especially anything dealing with the build system. 
<br>

<br>
I should bring this up on openmpi-devel, but I pushed these changes to a
<br>
review branch:
<br>
<a href="http://git.mpich.org/mpich-dev.git/shortlog/refs/heads/romio_sync_from_ompi">http://git.mpich.org/mpich-dev.git/shortlog/refs/heads/romio_sync_from_ompi</a>
<br>

<br>
==rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23719.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23677.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23721.php">Ralph Castain: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
