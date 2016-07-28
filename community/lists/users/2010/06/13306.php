<?
$subject_val = "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 19:59:45 2010" -->
<!-- isoreceived="20100610235945" -->
<!-- sent="Thu, 10 Jun 2010 19:59:13 -0400" -->
<!-- isosent="20100610235913" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E258E50D3E8F3_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="879CDE8F-8D5C-43AF-8969-52FADF7D6079_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 19:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>OK ... I rebuilt without --with-tm= and as predicted my test case
<br>
runs (I left the IB flags in).  I then ran a job with just:
<br>
<p>pbsdsh hostname
<br>
<p>on 16 nodes and that also worked.  I know that 1.4.1 works although
<br>
it was build pointing into the old PBS Pro version tree explicitly.  I
<br>
have checked and rechecked the environmental variables and everything
<br>
else that could lead to some mixed-up version cross referencing.
<br>
I am tempted to build 1.4.2 with the explicit -with-tm= version path
<br>
instead of using the symlink to default, but I cannot think of a logical
<br>
reason why that should do anything.
<br>
<p>I have also reported this to the PBS Pro support folks.
<br>
<p>Thanks for the suggestions,
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
Sent: Thursday, June 10, 2010 6:34 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Address not mapped segmentation fault with1.4.2       ...
<br>
<p>On Jun 10, 2010, at 5:49 PM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt; OK ... so if I follow your lead and build a version without PBS --tm= integration
</span><br>
<span class="quotelev1">&gt; and it works, I should be able to report this as an incompatibility bug between
</span><br>
<span class="quotelev1">&gt; the latest version of PBS Pro (10.2.0.93147) and the latest version of OpenMPI
</span><br>
<span class="quotelev1">&gt; (1.4.2). right?  Do I report that you to my friends at OpenMPI or my friends at
</span><br>
<span class="quotelev1">&gt; PBS Pro (Altair), or both?
</span><br>
<p>I'd say both.
<br>
<p>But it would be quite surprising if tm_init() it wholly broken -- it's the very first function that has to be invoked.
<br>
<p>I'm not a PBS user, so I don't know/remember the PBS commands offhand, but I have a dim recollection of a few PBS-provided TM-using tools (pbsdsh or somesuch?).  You might want to try those, too, and see if they work/fail.
<br>
<p>If it really is a problem, I'm guessing it'll be a compiler/linker issue somehow... (e.g., how we're compiling/linking is not matching the compilation/linker style of the TM library)  That's a SWAG.  :-)
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
<li><strong>Next message:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
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
