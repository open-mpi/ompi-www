<?
$subject_val = "[OMPI users] Finalize() does not return";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 13 14:51:53 2013" -->
<!-- isoreceived="20130813185153" -->
<!-- sent="Tue, 13 Aug 2013 13:51:49 -0500" -->
<!-- isosent="20130813185149" -->
<!-- name="Hazelrig, Chris CTR (US)" -->
<!-- email="christopher.c.hazelrig.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] Finalize() does not return" -->
<!-- id="AC2A0FA9-B9AE-4A02-B3FE-A56D4070DA48_at_mimectl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BDE9EF6-C27E-4C7D-A63D-0D692DB8E324_at_mimectl" -->
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
<strong>Subject:</strong> [OMPI users] Finalize() does not return<br>
<strong>From:</strong> Hazelrig, Chris CTR (US) (<em>christopher.c.hazelrig.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-13 14:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22488.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22489/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22488.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22490.php">Gus Correa: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
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
