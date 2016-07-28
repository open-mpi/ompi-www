<?
$subject_val = "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2	...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 11:13:08 2010" -->
<!-- isoreceived="20100610151308" -->
<!-- sent="Thu, 10 Jun 2010 11:12:38 -0400" -->
<!-- isosent="20100610151238" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Address not mapped segmentation fault with 1.4.2	..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E258E50D3E8EA_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A442E463-611B-40EF-BD6A-09B98B73C37C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Address not mapped segmentation fault with 1.4.2	...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 11:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>In reply to:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph/Jeff,
<br>
<p>Yes, the change was intentional.  I have upgraded PBS as well and built
<br>
1.4.2 pointing to the new PBS via a symbolic link to 'default' which allows one
<br>
to control the actual default without changing the path.  I did the same thing
<br>
on the non-IB system which seems to be working fine with 1.4.2.  This would
<br>
suggest that this is not the issue.
<br>
<p>It is possible that the PBS build in the IB system was flawed, but it looked
<br>
normal.  I could rebuild it.  The PBS libraries (as well as MPI) are in a shared
<br>
location that is NFS mounted on the compute nodes so things should be in
<br>
sync, but I will verify this.
<br>
<p>Any other suggestions ... ??
<br>
<p>rbw
<br>
<p><p>&nbsp;&nbsp;&nbsp;Richard Walsh
<br>
&nbsp;&nbsp;&nbsp;Parallel Applications and Systems Manager
<br>
&nbsp;&nbsp;&nbsp;CUNY HPC Center, Staten Island, NY
<br>
&nbsp;&nbsp;&nbsp;718-982-3319
<br>
&nbsp;&nbsp;&nbsp;612-382-4620
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Jeff Squyres [jsquyres_at_[hidden]]
<br>
Sent: Thursday, June 10, 2010 11:00 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Address not mapped segmentation fault with 1.4.2      ...
<br>
<p>On Jun 10, 2010, at 10:57 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; That error would indicate something wrong with the pbs connection - it is tm_init that is crashing. I note that you did --with-tm pointing to a different location - was that intentional? Could be something wrong with that pbs build
</span><br>
<p>...and make sure that the support libs for TM/PBS are the same between the node you're building on and all the nodes where OMPI will be running.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Think green before you print this email.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>In reply to:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
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
