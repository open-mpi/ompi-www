<?
$subject_val = "Re: [OMPI users] ipath_userinit errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 17:55:48 2014" -->
<!-- isoreceived="20141105225548" -->
<!-- sent="Wed, 5 Nov 2014 22:51:59 +0000" -->
<!-- isosent="20141105225159" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipath_userinit errors" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C5F01A_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABOsP2NoX1ZJO1C3b4qgOA8ruMJ057m2Acuj9gWhtB3fQW990A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-05 17:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>
<p><span class="quotelev1">&gt;From what I understand, this is an issue with the qib driver and PSM from RHEL 6.5 and 6.6, and will be fixed for 6.7.  There is no functional change between qib-&gt;PSM API versions 11 and 12, so the message is harmless.  I presume you're using the RHEL sourced package for a reason, but using an IFS release would fix the problem until RHEL 6.7 is ready.
</span><br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Di
</span><br>
<span class="quotelev1">&gt; Domenico
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 4, 2014 8:35 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ipath_userinit errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting the below message on my cluster(s).  It seems to only happen
</span><br>
<span class="quotelev1">&gt; when I try to use more then 64 nodes (16-cores each).  The clusters are
</span><br>
<span class="quotelev1">&gt; running RHEL 6.5 with Slurm and Openmpi-1.6.5 with PSM.
</span><br>
<span class="quotelev1">&gt; I'm using the OFED versions included with RHEL for infiniband support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ipath_userinit: Mismatched user minor version (12) and driver minor version
</span><br>
<span class="quotelev1">&gt; (11) while context sharing. Ensure that driver and library are from the same
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already realize this is a warning message and the jobs complete.
</span><br>
<span class="quotelev1">&gt; Another user a little over a year ago had a similar issue that was tracked to
</span><br>
<span class="quotelev1">&gt; mismatched ofed versions.  Since i have a diskless cluster all my nodes are
</span><br>
<span class="quotelev1">&gt; identical.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not adverse to thinking there might not be something unique about my
</span><br>
<span class="quotelev1">&gt; machine, but since i have two separate machines doing it, I'm not really sure
</span><br>
<span class="quotelev1">&gt; where to look to triage the issue and see what might be set incorrectly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts on where to start checking would be helpful, thanks...
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
<span class="quotelev1">&gt; mpi.org/community/lists/users/2014/11/25667.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
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
