<?
$subject_val = "[OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 16:24:07 2012" -->
<!-- isoreceived="20120215212407" -->
<!-- sent="Wed, 15 Feb 2012 13:21:01 -0800" -->
<!-- isosent="20120215212101" -->
<!-- name="Brian McNally" -->
<!-- email="bmcnally_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="4F3C21BD.9090709_at_uw.edu" -->
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
<strong>Subject:</strong> [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Brian McNally (<em>bmcnally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 16:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI community,
<br>
<p>I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise 
<br>
Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted 
<br>
gets spawned via qrsh and under RHEL 6 orted gets spanwed via SSH. This 
<br>
is happening in the same cluster environment with the same parallel 
<br>
environment setup. I want orted to get spawned via qrsh because we 
<br>
impose memory limits if a job is spawned through SSH.
<br>
<p>I cannot determine WHY the behavior is different from RHEL 5 to RHEL 6. 
<br>
In the former I'm using the openmpi 1.4.3 package, in the latter I'm 
<br>
using openmpi 1.5.3. Both are supposedly built to support the gridengine 
<br>
ras.
<br>
<p>MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.3)
<br>
MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.3)
<br>
<p>Any thoughts? The documentation indicates that &quot;Open MPI will 
<br>
automatically detect when it is running inside SGE and will just 'do the 
<br>
Right Thing.'&quot; In my case that isn't the case!
<br>
<p><pre>
-- 
Brian McNally
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
