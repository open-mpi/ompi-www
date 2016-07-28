<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:30:41 2010" -->
<!-- isoreceived="20101129213041" -->
<!-- sent="Mon, 29 Nov 2010 16:30:36 -0500" -->
<!-- isosent="20101129213036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="90B68C18-8E3E-4388-AD91-1A9CAD6FABDC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002801cb8c22$615f8de0$241ea9a0$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_split<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14929.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2010, at 4:55 PM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; The tree is not symmetrical in that the valid values for the 10th parameter
</span><br>
<span class="quotelev1">&gt; depends on the values selected in the 0th to 9th parameter (all the ancestry
</span><br>
<span class="quotelev1">&gt; in the tree), for e.g., we may have a lot of nodes in the left of the tree
</span><br>
<span class="quotelev1">&gt; than in the right, see attachment ( I hope they're allowed ) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The depth of the tree of course is the same everywhere, but not all nodes at
</span><br>
<span class="quotelev1">&gt; some level have the same number of children.
</span><br>
<span class="quotelev1">&gt; Is it better to just list vertically all the possible branches (n-tuples) at
</span><br>
<span class="quotelev1">&gt; the master level and split that list uniformly over the slaves?
</span><br>
<p>Yes, you certainly can MPI_COMM_SPLIT this way.  As Bill mentioned, if you do the splits at the beginning of a long computation, the cost of them is irrelevant.  I would expect for 128 MPI processes, doing 7-8 MPI_COMM_SPLITs will take far less than a second (although that's a total SWAG).  So if it helps your coding and you're going to be running for a little while, go ahead and do them.
<br>
<p>Bill mentioned one good reason for splitting communicators: distinct sub groups for MPI collectives.  Another good reason is for message separation.  If you want to do a parameter sweep in a specific set of procs, you can give them their own communicator in order to guarantee that you have &quot;private&quot; communications between them (e.g., that tag X will never collide with tag X on another process).
<br>
<p>That being said, if all your communications will solely be within that subset of processes, then making new communicators may not be necessary. I.e., you'll never have colliding tags, so you don't need to create a private communication space.
<br>
<p>That being said, it may be useful to have all your subgroups be able to have a starting rank of 0 and be able to use MPI_COMM_SIZE to find how many peers are in your subgroup.  Having distinct sub-communicators is helpful here.
<br>
<p>That being said... (this can go on ad nauseam -- it just depends on your app and whether you want to do the splitting or not; there's no universally right answer here)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14929.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
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
