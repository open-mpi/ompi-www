<?
$subject_val = "Re: [OMPI users] The --with-sge option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 12:24:29 2008" -->
<!-- isoreceived="20081016162429" -->
<!-- sent="Thu, 16 Oct 2008 11:24:24 -0500" -->
<!-- isosent="20081016162424" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The --with-sge option" -->
<!-- id="16AE1027F52DD64CB278BD8950529B63021000DF_at_UABEXMB5.ad.uab.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16AE1027F52DD64CB278BD8950529B63021000DE_at_UABEXMB5.ad.uab.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] The --with-sge option<br>
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 12:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did find the following in ompi_info:
<br>
<p>&nbsp;
<br>
<p>MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
<p>MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
<p>&nbsp;
<br>
<p>However I see that in an ompi_info built without using the --with-sge
<br>
switch.
<br>
<p>&nbsp;
<br>
<p>Also, since I'm building 1.2.8, shouldn't those versions after Component
<br>
reflect 1.2.8?
<br>
<p>&nbsp;
<br>
<p>I set the PATH and LD_LIBRARY_PATH to point to the temp location of my
<br>
new build and it still reports 1.2.7.
<br>
<p>&nbsp;
<br>
<p>Mike
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Mike Hanby
<br>
Sent: Thursday, October 16, 2008 11:07 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] The --with-sge option
<br>
<p>&nbsp;
<br>
<p>Howdy,
<br>
<p>&nbsp;
<br>
<p>I'm compiling 1.2.8 on a system with SGE 6.1u4 and came across the
<br>
&quot;--with-sge&quot; option on a Grid Engine posting.
<br>
<p>&nbsp;
<br>
<p>A couple questions:
<br>
<p>1.  I don't see --with-sge mentioned in the &quot;./configure --help&quot; output,
<br>
nor can I find much reference to it on the open-mpi site, is this option
<br>
really implemented? What does it do?
<br>
<p>2.  After compiling openmpi providing the --with-sge switch I ran the
<br>
ompi_info binary and grep'd for sge in the output, there isn't any
<br>
reference, should there be if the option was successfully passed to
<br>
configure?
<br>
<p>&nbsp;
<br>
<p>Thanks, Mike
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
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
