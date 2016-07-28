<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  2 12:07:18 2007" -->
<!-- isoreceived="20070702160718" -->
<!-- sent="Mon, 2 Jul 2007 12:06:34 -0400" -->
<!-- isosent="20070702160634" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Database insert errors" -->
<!-- id="20070702160633.GA49781_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707012137.17907.tprins_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-07-02 12:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0341.php">Tim Prins: "[MTT users] Database insert errors"</a>
<li><strong>In reply to:</strong> <a href="0341.php">Tim Prins: "[MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>Reply:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>I see some of these FOREIGN KEY constraint errors every
<br>
night. There's a system of speedy and archive tables to keep
<br>
short-term queries fast, but it has bugs. There are rows in
<br>
the archive tables that should be mirrored in the speedy
<br>
tables, but this is not always the case. We (well, mostly
<br>
Josh) are working on an improved system of &quot;partitioning&quot;
<br>
the huge Postgres tables to keep queries fast which will
<br>
hopefully also resolve these referential integrity problems.
<br>
<p>-Ethan
<br>
<p><p>On Sun, Jul/01/2007 09:37:17PM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For a while now we have been getting errors when MTT tries to submit its test 
</span><br>
<span class="quotelev1">&gt; results to the database. The weird thing is that it only happens on our 1.2 
</span><br>
<span class="quotelev1">&gt; runs, not our trunk runs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the first few lines of the error output:
</span><br>
<span class="quotelev1">&gt; *** WARNING: MTTDatabase server notice: fields is not in mtt3 database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: test_build_section_name is not in mtt3
</span><br>
<span class="quotelev1">&gt;     database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: mpi_install_section_name is not in mtt3
</span><br>
<span class="quotelev1">&gt;     database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: mtt_version_minor is not in mtt3 database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: stop_timestamp is not in mtt3 database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: mtt_version_major is not in mtt3 database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: number_of_results is not in mtt3 database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: test_run_section_name is not in mtt3
</span><br>
<span class="quotelev1">&gt;     database.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MTT submission for test run
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev1">&gt;     SQL QUERY:
</span><br>
<span class="quotelev1">&gt;              INSERT INTO speedy_test_run
</span><br>
<span class="quotelev1">&gt;              (np,
</span><br>
<span class="quotelev1">&gt;             variant,
</span><br>
<span class="quotelev1">&gt;             test_build_id,
</span><br>
<span class="quotelev1">&gt;             command,
</span><br>
<span class="quotelev1">&gt;             test_name,
</span><br>
<span class="quotelev1">&gt;             test_run_id)
</span><br>
<span class="quotelev1">&gt;              VALUES
</span><br>
<span class="quotelev1">&gt;              ('8',
</span><br>
<span class="quotelev1">&gt;             '1',
</span><br>
<span class="quotelev1">&gt;             '20809',
</span><br>
<span class="quotelev1">&gt;             'mpirun  -mca pml ob1 -mca btl_tcp_if_include eth0 -mca btl
</span><br>
<span class="quotelev1">&gt;     tcp,sm,self -np 8 --prefix
</span><br>
<span class="quotelev1">&gt;     /san/homedirs/mpiteam/mtt-runs/thor/20070630-Nightly/pb_0/installs/k1mL
</span><br>
<span class="quotelev1">&gt;     /install collective/allgather ',
</span><br>
<span class="quotelev1">&gt;             'allgather',
</span><br>
<span class="quotelev1">&gt;             '14517807')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     SQL ERROR: ERROR:  insert or update on table &quot;speedy_test_run&quot; violates
</span><br>
<span class="quotelev1">&gt;     foreign key constraint &quot;$1&quot;
</span><br>
<span class="quotelev1">&gt;     DETAIL:  Key (test_build_id)=(20809) is not present in table
</span><br>
<span class="quotelev1">&gt;     &quot;speedy_test_build&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another strange thing is that the output says that the build information and 
</span><br>
<span class="quotelev1">&gt; some test results have been submitted, but I do not see them in the reporter. 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
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
<li><strong>Next message:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0341.php">Tim Prins: "[MTT users] Database insert errors"</a>
<li><strong>In reply to:</strong> <a href="0341.php">Tim Prins: "[MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>Reply:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
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
