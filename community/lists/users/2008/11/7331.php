<?
$subject_val = "Re: [OMPI users] how to get openMPI working, someone help me.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 08:24:10 2008" -->
<!-- isoreceived="20081118132410" -->
<!-- sent="Tue, 18 Nov 2008 07:24:02 -0600" -->
<!-- isosent="20081118132402" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get openMPI working, someone help me." -->
<!-- id="18722.49650.821590.475942_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="82b4d5c90811180506n7e28c4c8n16413cac3dfa9ead_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to get openMPI working, someone help me.<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-18 08:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Previous message:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>In reply to:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Reply:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 November 2008 at 17:06, Venu Gopal wrote:
<br>
| Hello,
<br>
| 
<br>
| I am new into this mailing list, and am trying to install openMPI on Ubuntu
<br>
| 8.0.4.1
<br>
<p>(That's not an existing version number.)
<br>
&nbsp;
<br>
| Basically my idea is to build a beowulf. Well right now i even dont have
<br>
| lots of PC's for this purpose.
<br>
| 
<br>
| So I am planning to first use virtual machines on VmWare. I have installed
<br>
| around four Virtual machines on my PC. And all of them can talk to each
<br>
| other. I mean they are all networked together without any firewalls in
<br>
| between.
<br>
| 
<br>
| I downloaded openmpi-1.2.8.tar.gz, extracted it and executed the configure
<br>
| script file.
<br>
| 
<br>
| This gave me lots of errors, and didnt suceed. How do I get this working
<br>
| now.
<br>
<p>Open MPi is packaged for Debian and hence part of Ubuntu. So just do:
<br>
<p>&nbsp;&nbsp;&nbsp;$ sudo apt-get install libopenmpi1 linopenmpi-dev openmpi-bin openmpi-doc
<br>
<p>In Ubuntu 8.10, this gives you Open MPI 1.2.7. In Ubuntu 8.4, you're at a
<br>
slightly older version so I suggest upgrading.
<br>
<p>In case you really want 1.2.8, by far the easiest way (and also most general)
<br>
is to just grab the Debian source from 'Debian unstable' and rebuild on your
<br>
system to match your libraries. That can be quasi-automated, see 'apt-get
<br>
source' and use google as this is getting off-topic for this list.
<br>
<p>Hope this helps, 
<br>
<p>Dirk
<br>
(one of severap Debian Open MPI maintainers)
<br>
&nbsp;
<br>
<pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Previous message:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>In reply to:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Reply:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
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
