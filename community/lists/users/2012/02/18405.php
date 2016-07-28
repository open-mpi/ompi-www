<?
$subject_val = "Re: [OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 12:52:14 2012" -->
<!-- isoreceived="20120206175214" -->
<!-- sent="Mon, 6 Feb 2012 17:52:09 +0000" -->
<!-- isosent="20120206175209" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO performance" -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE84754A9D1_at_mbox2.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1328546351.4286.17.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO performance<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 12:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom/All,
<br>
<p>In case it is not already obvious, the GPFS Linux kernel module
<br>
takes care of the interaction between the Linux IO stack, POSIX
<br>
and the GPFS under layer.  MPI-IO interacts with the thusly modified
<br>
kernel through the POSIX API.
<br>
<p>Another item that is perhaps slightly off topic, but is something that
<br>
provides a nice overview of some basic GPFS concepts and compares it
<br>
to Lustre.  It describes the mixed Lustre and GPFS storage architecture
<br>
in use at NERSC.
<br>
<p>Hope you find it useful:
<br>
<p><a href="http://www.cug.org/5-publications/proceedings_attendee_lists/CUG09CD/S09_Proceedings/pages/authors/01-5Monday/3A-Canon/canon-paper.pdf">http://www.cug.org/5-publications/proceedings_attendee_lists/CUG09CD/S09_Proceedings/pages/authors/01-5Monday/3A-Canon/canon-paper.pdf</a>
<br>
<p>Cheers,
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Miracles are delivered to order by great intelligence, or when it is
<br>
absent, through the passage of time and a series of mere chance
<br>
events. -- Max Headroom
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Tom Rosmond [rosmond_at_[hidden]]
<br>
Sent: Monday, February 06, 2012 11:39 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] IO performance
<br>
<p>Rob
<br>
<p>Thanks, these are the kind of suggestions I was looking for.  I will try
<br>
them.  But I will have to twist some arms to get the 1.5 upgrade.  I
<br>
might just install a private copy for my tests.
<br>
<p>T. Rosmond
<br>
<p><p>On Mon, 2012-02-06 at 10:21 -0600, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Fri, Feb 03, 2012 at 10:46:21AM -0800, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With all of this, here is my MPI related question.  I recently added an
</span><br>
<span class="quotelev2">&gt; &gt; option to use MPI-IO to do the heavy IO lifting in our applications.  I
</span><br>
<span class="quotelev2">&gt; &gt; would like to know what the relative importance of the dedicated MPI
</span><br>
<span class="quotelev2">&gt; &gt; network vis-a-vis the GPFS network for typical MPIIO collective reads
</span><br>
<span class="quotelev2">&gt; &gt; and writes.  I assume there must be some hand-off of data between the
</span><br>
<span class="quotelev2">&gt; &gt; networks during the process, but how is it done, and are there any rules
</span><br>
<span class="quotelev2">&gt; &gt; to help understand it.  Any insights would be welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's not really a handoff.  MPI-IO on GPFS will call a posix read()
</span><br>
<span class="quotelev1">&gt; or write() system call after possibly doing some data massaging.  That
</span><br>
<span class="quotelev1">&gt; system call sends data over the storage network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you've got a fast communication network but a slow storage network,
</span><br>
<span class="quotelev1">&gt; then some of the MPI-IO optimizations will need to be adjusted a bit.
</span><br>
<span class="quotelev1">&gt; Seems like you'd want to really beef up the &quot;cb_buffer_size&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For GPFS, the big thing MPI-IO can do for you is align writes to
</span><br>
<span class="quotelev1">&gt; GPFS.  see my next point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S.  I am running with Open-mpi 1.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you upgrade to something in the 1.5 series you will get some nice
</span><br>
<span class="quotelev1">&gt; ROMIO optimizations that will help you out with writes to GPFS if
</span><br>
<span class="quotelev1">&gt; you set the &quot;striping_unit&quot; hint to the GPFS block size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>________________________________
<br>
<p>Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
<br>
Tobacco-Free Campus as of July 1, 2012.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
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
