<?
$subject_val = "Re: [OMPI users] openmpi 1.4 and pgi 10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 17:45:38 2010" -->
<!-- isoreceived="20100104224538" -->
<!-- sent="Mon, 4 Jan 2010 16:36:14 -0600" -->
<!-- isosent="20100104223614" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4 and pgi 10" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056670_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] openmpi 1.4 and pgi 10" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4 and pgi 10<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 17:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Maybe in reply to:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep - been fixed in the upcoming 1.4.1 (but there's a problem with the rsh launcher in the 14 nightly tarballs right now). 
<br>

<br>
A fix has also been submitted upstream to libtool. 
<br>

<br>
Thanks for noticing!
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Sent: Mon Jan 04 10:21:31 2010
<br>
Subject: [OMPI users] openmpi 1.4 and pgi 10
<br>

<br>
Hi!
<br>

<br>
config/libtool.m4 has a bug when pgi 10 is used.
<br>

<br>
The lines:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC* | pgcpp*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Portland Group C++ compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case `$CC -V` in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*pgCC\ [[1-5]]* | *pgcpp\ [[1-5]]*)
<br>
matches pgi 10.0 but 10.0 doesn't have the --instantiation_dir flag.
<br>

<br>
-- 
<br>
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
<br>
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
<br>
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Maybe in reply to:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
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
