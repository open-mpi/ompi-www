<?
$subject_val = "[OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 09:32:01 2015" -->
<!-- isoreceived="20150428133201" -->
<!-- sent="Tue, 28 Apr 2015 09:31:48 -0400" -->
<!-- isosent="20150428133148" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="[OMPI users] new hwloc error" -->
<!-- id="FD3C2360-A9DA-4503-A81F-BBD7FE599CB3_at_nrl.navy.mil" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] new hwloc error<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 09:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Previous message:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all - we&#226;&#128;&#153;re having a new error, despite the fact that as far as I can tell we haven&#226;&#128;&#153;t changed anything recently, and I was wondering if anyone had any ideas as to what might be going on. 
<br>
<p>The symptom is that we sometimes get an error when starting a new mpi job:
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        compute-1-19
<br>
&nbsp;&nbsp;Application name:  XXXXXXXXX
<br>
&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
<br>
&nbsp;&nbsp;Location:          odls_default_module.c:499
<br>
--------------------------------------------------------------------------
<br>
16 total processes failed to start
<br>
<p>This started happening with one particular node, although there&#226;&#128;&#153;s nothing obviously wrong with it.  Now it&#226;&#128;&#153;s happening with another, and again nothing is obviously wrong. I haven&#226;&#128;&#153;t quite determined whether it always happens on those nodes, but it doesn&#226;&#128;&#153;t seem to happen much at all on other nodes.
<br>
<p>We&#226;&#128;&#153;re running openmpi 1.7.4, which I know isn&#226;&#128;&#153;t the newest, but it&#226;&#128;&#153;s been working fine for months.  The kernel is 2.6.32-504.8.1.el6.x86_64 from RHEL6, and the CPUs are 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;model name	: Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz
<br>
<p>If anyone has any ideas, I&#226;&#128;&#153;d appreciate it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p>-----------------------------------------------------------
<br>
Noam Bernstein
<br>
Center for Computational Materials Science
<br>
Naval Research Laboratory Code 6390
<br>
<p>noam.bernstein_at_[hidden]
<br>
phone: 202 404 8628
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26803/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Previous message:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26807.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
