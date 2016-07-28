<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 16:03:39 2006" -->
<!-- isoreceived="20061010200339" -->
<!-- sent="Tue, 10 Oct 2006 14:55:10 -0400" -->
<!-- isosent="20061010185510" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Missing data" -->
<!-- id="20061010185510.GA62067_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061010182843.GA64456_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-10 14:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is configure_arguments is not large enough to
<br>
hold:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug --disable-mpi-f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CXX=CC FC=f90 F77=f77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-xarch=v8plusa -xO5 -xmemalign=8s&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;-xarch=v8plusa -xO5 -xmemalign=8s&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS=&quot;-xarch=v8plusa -xO5 -xmemalign=8s&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-xarch=v8plusa -xO5 -xmemalign=8s -KPIC&quot;
<br>
<p>Though isn't the above only 245 characters long? Anyhow, do
<br>
we want an upper bound on this column?  I will make it an
<br>
unbound text for now (like stdout/stderr).
<br>
<p>-Ethan
<br>
<p><p>On Tue, Oct/10/2006 02:28:44PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; I'm missing some data. I see the following in my --debug
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Build was a success
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret =
</span><br>
<span class="quotelev1">&gt; &amp;MTT::Reporter::MTTDatabase::Submit(@args)
</span><br>
<span class="quotelev1">&gt; MTTDatabase reporter
</span><br>
<span class="quotelev1">&gt; Submitting to MTTDatabase...
</span><br>
<span class="quotelev1">&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev1">&gt; Writing to MTTDatabase debug file:
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/cron/ompi-core-testers/sparc/32/trunk/mttdatabase_debug.burl-ct-v440-4.20061010.111631.0.txt
</span><br>
<span class="quotelev1">&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1 successful submit, 0 failed submits (total of 1 result)
</span><br>
<span class="quotelev1">&gt;    Completed MPI install successfully
</span><br>
<span class="quotelev1">&gt; *** MPI install phase complete
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The debug file contains a success for a sparc/32-bit/trunk
</span><br>
<span class="quotelev1">&gt; MPI Install, but curiously this result doesn't seem to have
</span><br>
<span class="quotelev1">&gt; arrived in the 'mtt' db (around Tue Oct 10 15:48:39 2006).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtt=&gt; SELECT platform_hardware, os_name, mpi_name,
</span><br>
<span class="quotelev1">&gt;   mpi_version, platform_id, (CASE WHEN success='t' THEN
</span><br>
<span class="quotelev1">&gt;   'pass_case_installs' END) as pass, (CASE WHEN success='f'
</span><br>
<span class="quotelev1">&gt;   THEN 'fail_case_installs' END) as fail FROM installs JOIN
</span><br>
<span class="quotelev1">&gt;   once USING (run_index) WHERE start_test_timestamp &gt;
</span><br>
<span class="quotelev1">&gt;   date_trunc('day', now()) AND os_name = 'SunOS';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  platform_hardware | os_name |      mpi_name      | mpi_version | platform_id |pass|fail
</span><br>
<span class="quotelev1">&gt; -------------------+---------+--------------------+-------------+-------------+----+-----
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 32-bit  |    | 1
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 64-bit  |    | 1
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 32-bit  | 1  |
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 64-bit  | 1  |
</span><br>
<span class="quotelev1">&gt;  sun4u             | SunOS   | ompi-nightly-trunk | 1.3a1r12066 | Sun 64-bit  |    | 1
</span><br>
<span class="quotelev1">&gt;  sun4u             | SunOS   | ompi-nightly-v1.2  | 1.2a1r12050 | Sun 64-bit  | 1  |
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 32-bit  |    | 1
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 32-bit  | 1  |
</span><br>
<span class="quotelev1">&gt;  i86pc             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 64-bit  | 1  |
</span><br>
<span class="quotelev1">&gt;  sun4u             | SunOS   | ompi-nightly-trunk | 1.3a1r12069 | Sun 64-bit  | 1  |
</span><br>
<span class="quotelev1">&gt; (10 rows)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtt=&gt; select timestamp without time zone 'now()';
</span><br>
<span class="quotelev1">&gt;          timestamp
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;  2006-10-10 14:06:22.251253
</span><br>
<span class="quotelev1">&gt; (1 row)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the missing sparc/32-bit/trunk result. Oddly, the Test
</span><br>
<span class="quotelev1">&gt; Builds and Test Runs for this submission did go through.
</span><br>
<span class="quotelev1">&gt; I've put in a request to get access to /var/log/pgsql to see
</span><br>
<span class="quotelev1">&gt; if I can see a failed INSERT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Ethan Mallove: "[MTT users] Missing data"</a>
<!-- nextthread="start" -->
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
