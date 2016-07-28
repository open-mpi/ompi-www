<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  6 17:14:53 2011" -->
<!-- isoreceived="20111106221453" -->
<!-- sent="Mon, 07 Nov 2011 09:14:45 +1100" -->
<!-- isosent="20111106221445" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage" -->
<!-- id="4EB706D5.1090006_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18508_1320444896_4EB463DF_18508_3945_1_E9F276A0010AF44ABD2C03ED2EDAE7DB27C54CEB1F_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-06 17:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/05/2011 09:11 AM, Blosch, Edwin L wrote:
<br>
..
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know where you're coming from, and I probably didn't title the post correctly because I wasn't sure what to ask.  But I definitely saw it, and still see it, as an OpenMPI issue.  Having /tmp mounted over NFS on a stateless cluster is not a broken configuration, broadly speaking. The vendors made those decisions and presumably that's how they do it for other customers as well. There are two other (Platform/HP) MPI applications that apparently work normally. But OpenMPI doesn't work normally. So it's deficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm also concerned that there is a bit of an over-reaction to network
<br>
filesystems.  Stores to mmap'd files do not instantly turn into filesystem
<br>
writes - there are dirty_writeback parameters to control how often
<br>
writes occur and its typically 5-20 seconds.  Ideally, memory or a local
<br>
disk is used for session directories but, in many cases, you just wont
<br>
notice a performance hit from network filesystems - we didn't when we
<br>
tested session directories on Lustre.  If your app is one of those handful
<br>
that is slowed by OS jitter at megascale, then you may well notice.
<br>
Obviously, its something to test.
<br>
<p>For our 1.5 install, I removed Lustre from the list of filesystem types
<br>
that generate the warning message about network filesystems.  It would be
<br>
nice if it was a site choice whether or not to produce that message and
<br>
when.
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
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
