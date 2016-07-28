<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 14:28:47 2006" -->
<!-- isoreceived="20061010182847" -->
<!-- sent="Tue, 10 Oct 2006 14:28:44 -0400" -->
<!-- isosent="20061010182844" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Missing data" -->
<!-- id="20061010182843.GA64456_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-10 14:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>Reply:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm missing some data. I see the following in my --debug
<br>
output:
<br>
<p>...
<br>
Build was a success
<br>
Evaluating: require MTT::Reporter::MTTDatabase
<br>
Evaluating: $ret =
<br>
&amp;MTT::Reporter::MTTDatabase::Submit(@args)
<br>
MTTDatabase reporter
<br>
Submitting to MTTDatabase...
<br>
MTTDatabase submit complete
<br>
Writing to MTTDatabase debug file:
<br>
/workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/trunk/mttdatabase_debug.burl-ct-v440-4.20061010.111631.0.txt
<br>
Debug MTTDatabase file write complete
<br>
<span class="quotelev2">&gt;&gt; 1 successful submit, 0 failed submits (total of 1 result)
</span><br>
&nbsp;&nbsp;&nbsp;Completed MPI install successfully
<br>
*** MPI install phase complete
<br>
...
<br>
<p>The debug file contains a success for a sparc/32-bit/trunk
<br>
MPI Install, but curiously this result doesn't seem to have
<br>
arrived in the 'mtt' db (around Tue Oct 10 15:48:39 2006).
<br>
<p>mtt=&gt; SELECT platform_hardware, os_name, mpi_name,
<br>
&nbsp;&nbsp;mpi_version, platform_id, (CASE WHEN success='t' THEN
<br>
&nbsp;&nbsp;'pass_case_installs' END) as pass, (CASE WHEN success='f'
<br>
&nbsp;&nbsp;THEN 'fail_case_installs' END) as fail FROM installs JOIN
<br>
&nbsp;&nbsp;once USING (run_index) WHERE start_test_timestamp &gt;
<br>
&nbsp;&nbsp;date_trunc('day', now()) AND os_name = 'SunOS';
<br>
<p>&nbsp;platform_hardware | os_name |      mpi_name      | mpi_version | platform_id |pass|fail
<br>
-------------------+---------+--------------------+-------------+-------------+----+-----
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 32-bit  |    | 1
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 64-bit  |    | 1
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 32-bit  | 1  |
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 64-bit  | 1  |
<br>
&nbsp;sun4u             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 64-bit  |    | 1
<br>
&nbsp;sun4u             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 64-bit  | 1  |
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 32-bit  |    | 1
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 32-bit  | 1  |
<br>
&nbsp;i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 64-bit  | 1  |
<br>
&nbsp;sun4u             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 64-bit  | 1  |
<br>
(10 rows)
<br>
<p>mtt=&gt; select timestamp without time zone 'now()';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timestamp
<br>
----------------------------
<br>
&nbsp;2006-10-10 14:06:22.251253
<br>
(1 row)
<br>
<p>Note the missing sparc/32-bit/trunk result. Oddly, the Test
<br>
Builds and Test Runs for this submission did go through.
<br>
I've put in a request to get access to /var/log/pgsql to see
<br>
if I can see a failed INSERT.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
<li><strong>Reply:</strong> <a href="0140.php">Ethan Mallove: "Re: [MTT users] Missing data"</a>
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
