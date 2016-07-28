<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 12:51:22 2005" -->
<!-- isoreceived="20051206175122" -->
<!-- sent="Tue, 6 Dec 2005 10:51:11 -0700" -->
<!-- isosent="20051206175111" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[O-MPI users] MCA paffinity_linux warning" -->
<!-- id="20051206175111.GB17042_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 12:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Reply:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm running OMPI 1.1a1r8378 and get the following warnings every time I
<br>
run.  I'm not setting any such value at runtime:
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;WARNING: A user-supplied value attempted to override the read-only MCA
<br>
&nbsp;&nbsp;&nbsp;parameter named &quot;paffinity_linux_have_cpu_set_t&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;The user-supplied value was ignored.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;WARNING: A user-supplied value attempted to override the read-only MCA
<br>
&nbsp;&nbsp;&nbsp;parameter named &quot;paffinity_linux_have_cpu_set_t&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;The user-supplied value was ignored.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>Do I need to specify a compile-time flag to silence this?  I tried to set
<br>
paffinity_linux_have_cpu_set_t = 0 in ~/.openmpi/mca-params.conf to no
<br>
avail.  Thanks,
<br>
<p>Daryl
<br>
<p><pre>
-- 
			***** Correspondence *****
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Reply:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
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
