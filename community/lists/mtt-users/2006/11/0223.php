<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 18:04:27 2006" -->
<!-- isoreceived="20061112230427" -->
<!-- sent="Sun, 12 Nov 2006 18:04:17 -0500" -->
<!-- isosent="20061112230417" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2CD8_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] Corrupted MTT database or incorrucet query" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 18:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Maybe in reply to:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I feel somewhat better now.  Ethan - can you fix?
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Tim Mattox [mailto:timattox_at_[hidden]]
<br>
Sent:	Sunday, November 12, 2006 05:34 PM Eastern Standard Time
<br>
To:	General user list for the MPI Testing Tool
<br>
Subject:	[MTT users] Corrupted MTT database or incorrucet query
<br>
<p>Hello,
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
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Maybe in reply to:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
