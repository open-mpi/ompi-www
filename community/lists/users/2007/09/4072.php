<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 10:24:53 2007" -->
<!-- isoreceived="20070927142453" -->
<!-- sent="Thu, 27 Sep 2007 10:24:37 -0400" -->
<!-- isosent="20070927142437" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] Bundling OpenMPI" -->
<!-- id="DC733DD7-DC93-4FED-962E-40FB831FF71A_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 10:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">Dino Rossegger: "[OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4071.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>We would like to distribute OpenMPI along with our software  to  
<br>
customers, is there any legal issue we need to know about?
<br>
<p>We can successfully build OpenMPI using
<br>
./configure --prefix=/some_path;make;make install
<br>
<p>However, if we do
<br>
<p>cp -r /some_path /other_path
<br>
<p>and try to run
<br>
/other_path/bin/orterun,
<br>
below error message is thrown:
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Sorry!  You were supposed to get help about:
     orterun:usage
from the file:
     help-orterun.txt
But I couldn't find any file matching that name.  Sorry!
------------------------------------------------------------------------ 
--
Apparently, the path is hard-coded in the executable. Is there any  
way to fix it (such as using an environment variable etc)?
Thanks,
Teng
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">Dino Rossegger: "[OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4071.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
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
