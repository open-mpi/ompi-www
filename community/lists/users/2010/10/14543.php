<?
$subject_val = "[OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 04:58:35 2010" -->
<!-- isoreceived="20101022085835" -->
<!-- sent="Fri, 22 Oct 2010 12:58:29 +0400" -->
<!-- isosent="20101022085829" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="[OMPI users] dinamic spawn process on remote node" -->
<!-- id="1287737909.9030.13.camel_at_vase" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] dinamic spawn process on remote node<br>
<strong>From:</strong> Vasiliy G Tolstov (<em>v.tolstov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 04:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14544.php">Jeff Squyres: "Re: [OMPI users] Some problems"</a>
<li><strong>Previous message:</strong> <a href="14542.php">&#233;&#130;&#181;&#230;&#128;&#157;&#231;&#157;&#191;: "[OMPI users] Some problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. May be this question already answered, but i can't see it in list
<br>
archive.
<br>
<p>I'm running about 60 Xen nodes with about 7-20 virtual machines under
<br>
it. I want to gather disk,cpu,memory,network utilisation from virtual
<br>
machines and get it into database for later processing.
<br>
<p>As i see, my architecture like this - One or two master servers with mpi
<br>
process with rank 0, that can insert data into database. This master
<br>
servers spawns on each Xen node mpi process, that gather statistics from
<br>
virtual machines on that node and send it to masters (may be with
<br>
multicast request). On each virtual machine i have process (mpi) that
<br>
can get and send data to mpi process on each Xen node. Virtual machine
<br>
have ability to migrate on other Xen node....
<br>
<p><p>Please, Can You help me with architecture of this system (is my thoughts
<br>
right) ?
<br>
And one more qeustion - that is the best way, to attach mpi process to
<br>
already running group? (for example, virtual machine is rebooted, or may
<br>
be Xen node rebooted)....
<br>
<p>Than You for any answers...
<br>
<p><pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14544.php">Jeff Squyres: "Re: [OMPI users] Some problems"</a>
<li><strong>Previous message:</strong> <a href="14542.php">&#233;&#130;&#181;&#230;&#128;&#157;&#231;&#157;&#191;: "[OMPI users] Some problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
