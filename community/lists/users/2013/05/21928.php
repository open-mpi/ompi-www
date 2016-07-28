<?
$subject_val = "[OMPI users] opening a file with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 05:00:40 2013" -->
<!-- isoreceived="20130517090040" -->
<!-- sent="Fri, 17 May 2013 11:00:36 +0200" -->
<!-- isosent="20130517090036" -->
<!-- name="Peter van Hoof" -->
<!-- email="p.vanhoof_at_[hidden]" -->
<!-- subject="[OMPI users] opening a file with MPI-IO" -->
<!-- id="5195F1B4.4030607_at_oma.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] opening a file with MPI-IO<br>
<strong>From:</strong> Peter van Hoof (<em>p.vanhoof_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 05:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21929.php">Qamar Nazir: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>I have been banging my head against the wall for some time to find a 
<br>
reliable and portable way to determine if a call to MPI::File::Open() 
<br>
was successful or not.
<br>
<p>Let me give some background information first. We develop an open-source 
<br>
astrophysical modeling code called Cloudy. This is used by many 
<br>
scientists on a variety of platforms. We obviously have no control over 
<br>
the MPI version that is installed on that platform, it may not even be 
<br>
open-MPI. So what we need is a method that is supported by all MPI distros.
<br>
<p>Our code is written in C++, so we use the C++ version of the MPI and 
<br>
MPI-IO libraries.
<br>
<p>Any help would be greatly appreciated.
<br>
<p><p>Cheers,
<br>
<p>Peter.
<br>
<p><pre>
-- 
Peter van Hoof
Royal Observatory of Belgium
Ringlaan 3
1180 Brussel
Belgium
<a href="http://homepage.oma.be/pvh">http://homepage.oma.be/pvh</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21929.php">Qamar Nazir: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
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
