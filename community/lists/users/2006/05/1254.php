<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 18 17:57:56 2006" -->
<!-- isoreceived="20060518215756" -->
<!-- sent="Thu, 18 May 2006 17:57:41 -0400" -->
<!-- isosent="20060518215741" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tm interface" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF881148_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] tm interface" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-18 17:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Maybe in reply to:</strong> <a href="1243.php">Brock Palen: "[OMPI users] tm interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up for the web archives:
<br>
<p>1. I've updated the configure scripts to now check for libtorque as well
<br>
as libpbs -- whatever you've got, we'll find.  This will be included in
<br>
all new versions of Open MPI, and will start showing up in the nightly
<br>
snapshots tonight.
<br>
<p>2. There *may* be a bug in Torque 2.1.0p0 with regards to the TM system.
<br>
For those who care, I'm following up with the Torque developers -- see
<br>
<a href="http://www.clusterresources.com/pipermail/torquedev/2006-May/000216.html">http://www.clusterresources.com/pipermail/torquedev/2006-May/000216.html</a>
<br>
for the thread.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 16, 2006 5:00 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] tm interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh!  We weren't informed that they renamed their libraries 
</span><br>
<span class="quotelev1">&gt; nor that they had changed something internally such that our 
</span><br>
<span class="quotelev1">&gt; current support would not work.  That's somewhat disappointing.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll have to download the latest Torque and see what's up...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, May 16, 2006 4:53 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] tm interface
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is the status of updating OMPI for use with the new  
</span><br>
<span class="quotelev2">&gt; &gt; torque-2.1.0p0 ?  Their libs were redone,  you can edit the 
</span><br>
<span class="quotelev2">&gt; &gt; configure  
</span><br>
<span class="quotelev2">&gt; &gt; script to replace all the -lpbs with -ltorque  and ompi will build  
</span><br>
<span class="quotelev2">&gt; &gt; but when you try to run a job under tm you get this error.  
</span><br>
<span class="quotelev1">&gt; This was  
</span><br>
<span class="quotelev2">&gt; &gt; under OSX server 10.3.x
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [aon038.engin.umich.edu:02438] pls:tm: start_procs returned 
</span><br>
<span class="quotelev1">&gt; error -13
</span><br>
<span class="quotelev2">&gt; &gt; [aon038.engin.umich.edu:02438] [0,0,0] ORTE_ERROR_LOG: Not 
</span><br>
<span class="quotelev1">&gt; found in  
</span><br>
<span class="quotelev2">&gt; &gt; file rmgr_urm.c at line 177
</span><br>
<span class="quotelev2">&gt; &gt; [aon038.engin.umich.edu:02438] [0,0,0] ORTE_ERROR_LOG: Not 
</span><br>
<span class="quotelev1">&gt; found in  
</span><br>
<span class="quotelev2">&gt; &gt; file rmgr_urm.c at line 365
</span><br>
<span class="quotelev2">&gt; &gt; [aon038.engin.umich.edu:02438] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brock
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Maybe in reply to:</strong> <a href="1243.php">Brock Palen: "[OMPI users] tm interface"</a>
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
