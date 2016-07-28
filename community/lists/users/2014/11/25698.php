<?
$subject_val = "Re: [OMPI users] ipath_userinit errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 07:37:35 2014" -->
<!-- isoreceived="20141106123735" -->
<!-- sent="Thu, 6 Nov 2014 07:37:34 -0500" -->
<!-- isosent="20141106123734" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipath_userinit errors" -->
<!-- id="CABOsP2NqAOaeYwS=V4j5tRU2CbkYkpw7HtM97JO2sJjkiw5qOQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C5F01A_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 07:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>Thanks.  We're using the RHEL version because it was less complicated
<br>
for our environment in the past, but sounds like we might want to
<br>
reconsider that decision.
<br>
<p>Do you know why we don't see the message with lower node count
<br>
allocations?  It only seems to happen when the node count gets over a
<br>
certain point?
<br>
<p>thanks
<br>
<p>On Wed, Nov 5, 2014 at 5:51 PM, Friedley, Andrew
<br>
&lt;andrew.friedley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I understand, this is an issue with the qib driver and PSM from RHEL 6.5 and 6.6, and will be fixed for 6.7.  There is no functional change between qib-&gt;PSM API versions 11 and 12, so the message is harmless.  I presume you're using the RHEL sourced package for a reason, but using an IFS release would fix the problem until RHEL 6.7 is ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Di
</span><br>
<span class="quotelev2">&gt;&gt; Domenico
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, November 4, 2014 8:35 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] ipath_userinit errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting the below message on my cluster(s).  It seems to only happen
</span><br>
<span class="quotelev2">&gt;&gt; when I try to use more then 64 nodes (16-cores each).  The clusters are
</span><br>
<span class="quotelev2">&gt;&gt; running RHEL 6.5 with Slurm and Openmpi-1.6.5 with PSM.
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the OFED versions included with RHEL for infiniband support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ipath_userinit: Mismatched user minor version (12) and driver minor version
</span><br>
<span class="quotelev2">&gt;&gt; (11) while context sharing. Ensure that driver and library are from the same
</span><br>
<span class="quotelev2">&gt;&gt; release
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I already realize this is a warning message and the jobs complete.
</span><br>
<span class="quotelev2">&gt;&gt; Another user a little over a year ago had a similar issue that was tracked to
</span><br>
<span class="quotelev2">&gt;&gt; mismatched ofed versions.  Since i have a diskless cluster all my nodes are
</span><br>
<span class="quotelev2">&gt;&gt; identical.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not adverse to thinking there might not be something unique about my
</span><br>
<span class="quotelev2">&gt;&gt; machine, but since i have two separate machines doing it, I'm not really sure
</span><br>
<span class="quotelev2">&gt;&gt; where to look to triage the issue and see what might be set incorrectly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on where to start checking would be helpful, thanks...
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2014/11/25667.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25694.php">http://www.open-mpi.org/community/lists/users/2014/11/25694.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
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
