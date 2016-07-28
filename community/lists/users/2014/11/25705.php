<?
$subject_val = "Re: [OMPI users] ipath_userinit errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 17:39:20 2014" -->
<!-- isoreceived="20141106223920" -->
<!-- sent="Thu, 6 Nov 2014 22:39:19 +0000" -->
<!-- isosent="20141106223919" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipath_userinit errors" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C5F6C3_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABOsP2NqAOaeYwS=V4j5tRU2CbkYkpw7HtM97JO2sJjkiw5qOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ipath_userinit errors<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 17:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25706.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25704.php">Rolf vandeVaart: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of	MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>I can only guess, but perhaps it is due to some nodes with differing software installations, or not all nodes using context sharing?
<br>
<p>You might try contacting Redhat support to see if they know more since the RPMs are sourced from them, or even try Intel support via ibsupport_at_intel.com.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Di
</span><br>
<span class="quotelev1">&gt; Domenico
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 6, 2014 4:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ipath_userinit errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.  We're using the RHEL version because it was less complicated for our
</span><br>
<span class="quotelev1">&gt; environment in the past, but sounds like we might want to reconsider that
</span><br>
<span class="quotelev1">&gt; decision.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know why we don't see the message with lower node count
</span><br>
<span class="quotelev1">&gt; allocations?  It only seems to happen when the node count gets over a
</span><br>
<span class="quotelev1">&gt; certain point?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 5, 2014 at 5:51 PM, Friedley, Andrew
</span><br>
<span class="quotelev1">&gt; &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Michael,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From what I understand, this is an issue with the qib driver and PSM from
</span><br>
<span class="quotelev1">&gt; RHEL 6.5 and 6.6, and will be fixed for 6.7.  There is no functional change
</span><br>
<span class="quotelev1">&gt; between qib-&gt;PSM API versions 11 and 12, so the message is harmless.  I
</span><br>
<span class="quotelev1">&gt; presume you're using the RHEL sourced package for a reason, but using an
</span><br>
<span class="quotelev1">&gt; IFS release would fix the problem until RHEL 6.7 is ready.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Di Domenico
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, November 4, 2014 8:35 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] ipath_userinit errors
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm getting the below message on my cluster(s).  It seems to only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; happen when I try to use more then 64 nodes (16-cores each).  The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; clusters are running RHEL 6.5 with Slurm and Openmpi-1.6.5 with PSM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using the OFED versions included with RHEL for infiniband support.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ipath_userinit: Mismatched user minor version (12) and driver minor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (11) while context sharing. Ensure that driver and library are from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the same release
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I already realize this is a warning message and the jobs complete.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another user a little over a year ago had a similar issue that was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tracked to mismatched ofed versions.  Since i have a diskless cluster
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all my nodes are identical.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not adverse to thinking there might not be something unique about
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my machine, but since i have two separate machines doing it, I'm not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; really sure where to look to triage the issue and see what might be set
</span><br>
<span class="quotelev1">&gt; incorrectly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any thoughts on where to start checking would be helpful, thanks...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi.org/community/lists/users/2014/11/25667.php
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25694.php">http://www.open-mpi.org/community/lists/users/2014/11/25694.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/users/2014/11/25698.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25706.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25704.php">Rolf vandeVaart: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of	MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
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
