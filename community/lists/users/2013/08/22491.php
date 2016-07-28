<?
$subject_val = "Re: [OMPI users] Finalize() does not return";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 09:23:48 2013" -->
<!-- isoreceived="20130814132348" -->
<!-- sent="Wed, 14 Aug 2013 08:23:40 -0500" -->
<!-- isosent="20130814132340" -->
<!-- name="Hazelrig, Chris CTR (US)" -->
<!-- email="christopher.c.hazelrig.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Finalize() does not return" -->
<!-- id="F0E6578D-1566-49D6-84EA-5A2CDA3FFBC5_at_mimectl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AC2A0FA9-B9AE-4A02-B3FE-A56D4070DA48_at_mimectl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Finalize() does not return<br>
<strong>From:</strong> Hazelrig, Chris CTR (US) (<em>christopher.c.hazelrig.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 09:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22492.php">Ray Sheppard: "[OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus,
<br>
<p>Thanks for your suggestions.  I had already tested for which threads were reaching the Finalize() call and all of them are.  Also, the Finalize() call is not inside a conditional.  This seems to suggest there may be a prior communication left unfinished, but based on the documentation I have read I would think the Finalize() routine would error/exception out in that situation.  It seems significant that the software was performing as expected under the previous OS and OpenMPI versions (although, the older OpenMPI version is only slightly older than what is being used now), but I don't know yet what the differences are.
<br>
<p>Is there any other information I could provide that might be useful?
<br>
<p>Thanks,
<br>
Chris Hazelrig
<br>
<p>&nbsp;
<br>
<p><p><p>From: Hazelrig, Chris CTR (US)
<br>
Sent: Tue 8/13/2013 1:51 PM
<br>
To: users_at_[hidden]
<br>
Subject: Finalize() does not return
<br>
<p><p>Greetings,
<br>
<p>I am using OpenMPI 1.4.3-1.1.el6 on RedHawk Linux 6.0.1 (Glacier) / RedHat Enterprise Linux Workstation Release 6.1 (Santiago).  I am currently working through some issues that I encountered after upgrading from RedHawk 5.2 / RHEL 5.2 and OpenMPI 1.4.3-1 (openmpi-gcc_1.4.3-1).  It seems that since the upgrades my software does not return from the call to the Finalize() routine.  All threads enter the Finalize() routine and never return.  I wrote a simple test program to try to simplify troubleshooting and Finalize() works as expected, i.e., all threads return from the Finalize() call.  This suggests the problem is in my code.  I have searched the man pages and user forums to no avail.  Has anyone else encountered this problem?  What could cause such behavior?  I wondered if maybe there is still some prior communication that was left unfinished, but I believe I have verified that is not the case, plus my understanding of how Finalize() works is that it would error/exception out in such a situation rather than just sit there, but I could be wrong.
<br>
<p>Not sure what additional information may be needed by the community to aid in troubleshooting, but will be happy to provide whatever else is needed.
<br>
<p>Kind regards,
<br>
Chris Hazelrig
<br>
SimTech
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22491/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22492.php">Ray Sheppard: "[OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
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
