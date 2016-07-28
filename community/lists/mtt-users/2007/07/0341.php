<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  1 21:37:22 2007" -->
<!-- isoreceived="20070702013722" -->
<!-- sent="Sun, 1 Jul 2007 21:37:17 -0400" -->
<!-- isosent="20070702013717" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[MTT users] Database insert errors" -->
<!-- id="200707012137.17907.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-01 21:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/06/0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<li><strong>Reply:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>For a while now we have been getting errors when MTT tries to submit its test 
<br>
results to the database. The weird thing is that it only happens on our 1.2 
<br>
runs, not our trunk runs. 
<br>
<p>Here is the first few lines of the error output:
<br>
*** WARNING: MTTDatabase server notice: fields is not in mtt3 database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: test_build_section_name is not in mtt3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: mpi_install_section_name is not in mtt3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: mtt_version_minor is not in mtt3 database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: stop_timestamp is not in mtt3 database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: mtt_version_major is not in mtt3 database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: number_of_results is not in mtt3 database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: test_run_section_name is not in mtt3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;database.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MTT submission for test run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SQL QUERY:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSERT INTO speedy_test_run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(np,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variant,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_build_id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;command,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_run_id)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VALUES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('8',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'1',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'20809',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpirun  -mca pml ob1 -mca btl_tcp_if_include eth0 -mca btl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tcp,sm,self -np 8 --prefix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/thor/20070630-Nightly/pb_0/installs/k1mL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/install collective/allgather ',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'allgather',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'14517807')
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;SQL ERROR: ERROR:  insert or update on table &quot;speedy_test_run&quot; violates
<br>
&nbsp;&nbsp;&nbsp;&nbsp;foreign key constraint &quot;$1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DETAIL:  Key (test_build_id)=(20809) is not present in table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;speedy_test_build&quot;.
<br>
<p>Another strange thing is that the output says that the build information and 
<br>
some test results have been submitted, but I do not see them in the reporter. 
<br>
Any ideas?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/06/0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<li><strong>Reply:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
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
