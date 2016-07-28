<?
$subject_val = "[OMPI devel] Improvement of openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 11:52:14 2009" -->
<!-- isoreceived="20090731155214" -->
<!-- sent="Fri, 31 Jul 2009 17:51:59 +0200 (CEST)" -->
<!-- isosent="20090731155159" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Improvement of openmpi.spec" -->
<!-- id="alpine.DEB.2.00.0907311728470.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Improvement of openmpi.spec<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 11:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We had to apply a little set of modifications to the openmpi.spec file to 
<br>
help us integrate openmpi in our cluster distribution.
<br>
<p>So here is a patch which, as the changelog suggests, does a couple of 
<br>
&quot;improvements&quot; :
<br>
&nbsp;&nbsp;- Fix a typo in Summary
<br>
&nbsp;&nbsp;- Replace openmpi by %{name} in a couple of places
<br>
&nbsp;&nbsp;- Add an %{opt_prefix} option to be able to install in a specific path 
<br>
(e.g. in /opt/&lt;vendor&gt;/mpi/&lt;mpilib&gt;-&lt;version&gt;/ instead of 
<br>
/opt/&lt;mpilib&gt;-&lt;version&gt;)
<br>
<p>The patch is done with &quot;hg extract&quot; but should apply on the SVN trunk.
<br>
<p>Sylvain
<br>

<br><hr>
<ul>
<li>TEXT/X-DIFF attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6547/openmpi.spec.patch">openmpi.spec.patch</a>
</ul>
<!-- attachment="openmpi.spec.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
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
