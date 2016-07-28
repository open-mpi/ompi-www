<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 17:34:30 2006" -->
<!-- isoreceived="20061112223430" -->
<!-- sent="Sun, 12 Nov 2006 17:34:23 -0500" -->
<!-- isosent="20061112223423" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="ea86ce220611121434w134102cdu4aa35a5a8e12315_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 17:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #132: Print BIG WARNING in client if	MTTDatabase fails to submit properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Maybe reply:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I just noticed that the MTT summary page is presenting incorrect information
<br>
for our recent runs at IU.
<br>
It is showing failures for the 1.2b1 that actaully came from the trunk!
<br>
See the first entry in this table:
<br>
<a href="http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=2006-11-12%2019:12:02%20through%202006-11-12%2022:12:02&amp;ft_platform_id=contains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_test_case&amp;go=Table&amp;maf_agg_timestamp=-&amp;mef_mpi_name=A">http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=2006-11-12%2019:12:02%20through%202006-11-12%2022:12:02&amp;ft_platform_id=contains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_test_case&amp;go=Table&amp;maf_agg_timestamp=-&amp;mef_mpi_name=A</a>ll&amp;mef_mpi_version=All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_platform_hardware=All&amp;mef_platform_id=All&amp;agg_platform_id=off&amp;1-page=off&amp;no_bookmarks&amp;no_bookmarks
<br>
<p>Click on the [i] in the upper right (the first entry) to get the popup
<br>
window which shows the MPIRrun cmd as:
<br>
<p>mpirun -mca btl tcp,sm,self -np 6 --prefix
<br>
/san/homedirs/mpiteam/mtt-runs/odin/20061112-Testing-NOCLN/parallel-block-3/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install
<br>
dynamic/spawn
<br>
<p>Note the path has &quot;1.3a1r12559&quot; in the name... it's a run from the trunk,
<br>
yet the table showed this as a 1.2b1 run.
<br>
<p>There are several of these missattributed errors.
<br>
<p>This would explain why Jeff saw some ddt errors on the 1.2 brach yesterday, but
<br>
was unable to reproduce them.  They were from the trunk!
<br>
<pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #132: Print BIG WARNING in client if	MTTDatabase fails to submit properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Maybe reply:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
