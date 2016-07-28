<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 14:19:44 2011" -->
<!-- isoreceived="20111103181944" -->
<!-- sent="Thu, 03 Nov 2011 12:19:31 -0600" -->
<!-- isosent="20111103181931" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5480D36_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EB2D528.7060902_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 14:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't tell OpenMPI what BTLs to use. The default uses sm and puts a session file on /tmp, which is NFS-mounted and thus not a good choice.
<br>
<p>Are you suggesting something like --mca ^sm?
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Eugene Loh
<br>
Sent: Thursday, November 03, 2011 12:54 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage
<br>
<p>I've not been following closely.  Why must one use shared-memory 
<br>
communications?  How about using other BTLs in a &quot;loopback&quot; fashion?
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17686.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
