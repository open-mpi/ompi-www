<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 19:09:03 2006" -->
<!-- isoreceived="20060720230903" -->
<!-- sent="Thu, 20 Jul 2006 16:10:44 -0700" -->
<!-- isosent="20060720231044" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] nightly results format" -->
<!-- id="44C00D74.80109_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44BFF696.7050007_at_Sun.COM" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 19:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/08/0052.php">Terry D. Dontje: "[MTT users] Use of multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>In reply to:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Here's a draft for a nightly test results email format. One
</span><br>
<span class="quotelev1">&gt; will receive reports through mtt-results_at_open-mpi.org.
</span><br>
<span class="quotelev1">&gt; Note: The following is a faux-report. Just pretend there is
</span><br>
<span class="quotelev1">&gt; nothing non-sensical about the data.
</span><br>
<p>Looks better than what I had come up with :)  some comments inline below.
<br>
<p>Are you planning on one big report per night, or breaking it up somehow 
<br>
into several smaller reports (ie per site, platform, or some other 
<br>
criteria)?
<br>
<p><span class="quotelev1">&gt; This might be better sent as an attachment, or a link to a
</span><br>
<span class="quotelev1">&gt; webpage as lots of email clients have default textwidth
</span><br>
<span class="quotelev1">&gt; settings that will make the formatted tables look like
</span><br>
<span class="quotelev1">&gt; gobbledygook.
</span><br>
<p>I personally would lean towards inline plain text with minimal fancy 
<br>
formatting, and just enough information to go dig in the source code 
<br>
when I see a problem in one of these emails.  Then having url's to a 
<br>
full report would certainly be nice as well.
<br>
<p><span class="quotelev1">&gt; We are also planning a webpage frontend (e.g.,
</span><br>
<span class="quotelev1">&gt; www.open-mpi.org/mtt-results.php) to the test results with
</span><br>
<span class="quotelev1">&gt; more flexibility in generating reports than this static
</span><br>
<span class="quotelev1">&gt; email report. In other words, we're leaving out lots of
</span><br>
<span class="quotelev1">&gt; bells and whistles here as those will be implemented in the
</span><br>
<span class="quotelev1">&gt; webpage frontend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Test results for &lt;datestamp&gt;
</span><br>
<p>Something Brian requested was that the subject indicate whether there 
<br>
are any failure reports in the email, so that he can choose not to read 
<br>
the email when everything works, possibly by using procmail for example.
<br>
<p><span class="quotelev1">&gt; Body:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed MPI Install(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: SunOS 5.10
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: Sun's Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp</a>&gt;
</span><br>
<p>I forget if MTT submits the full configure/make logs - I'm guessing yes. 
<br>
&nbsp;&nbsp;Posting say the last 10-15 lines here in addition to the links might 
<br>
be useful.  Same idea for stdout/stderr in other places as well.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed Test Build(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: SunOS 5.10
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: Sun's Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | 1  | 2006-07-20 | ibm     | test_abc               |
</span><br>
<span class="quotelev1">&gt; | 2  | 2006-07-20 | ibm     | test_xyz               |
</span><br>
<span class="quotelev1">&gt; | 3  | 2006-07-20 | intel   | test_123               |
</span><br>
<p><p><span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<p>Wasn't sure what these numbers meant at first :)  Maybe you could add 
<br>
the test name or something as well here?
<br>
<p><span class="quotelev1">&gt; environment: foo = bar
</span><br>
<span class="quotelev1">&gt; compiler_flags: -g -fugly-complex -fno-globals -Wno-globals -Isrc -I.
</span><br>
<span class="quotelev1">&gt; stderr: blah blah blah
</span><br>
<span class="quotelev1">&gt; stdout: blah blah blah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed Test Run(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: SunOS 5.10
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: Sun's Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | 1  | 2006-07-20 | ibm     | zero1                  |
</span><br>
<span class="quotelev1">&gt; | 2  | 2006-07-20 | ibm     | spawn                  |
</span><br>
<span class="quotelev1">&gt; | 3  | 2006-07-20 | ibm     | spawn_multiple         |
</span><br>
<span class="quotelev1">&gt; | 4  | 2006-07-20 | ibm     | abort                  |
</span><br>
<span class="quotelev1">&gt; | 5  | 2006-07-20 | ibm     | final                  |
</span><br>
<span class="quotelev1">&gt; | 6  | 2006-07-20 | intel   | init_thread_funneled   |
</span><br>
<span class="quotelev1">&gt; | 7  | 2006-07-20 | intel   | init_thread_serialized |
</span><br>
<span class="quotelev1">&gt; | 8  | 2006-07-20 | intel   | init_thread_multiple   |
</span><br>
<span class="quotelev1">&gt; | 9  | 2006-07-20 | imb     | range                  |
</span><br>
<span class="quotelev1">&gt; | 10 | 2006-07-20 | imb     | cart                   |
</span><br>
<span class="quotelev1">&gt; | 11 | 2006-07-20 | imb     | graph                  |
</span><br>
<span class="quotelev1">&gt; | 12 | 2006-07-20 | imb     | sub                    |
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed Test Run Details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; environment: foo = bar
</span><br>
<span class="quotelev1">&gt; test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
</span><br>
<span class="quotelev1">&gt; ./zero1
</span><br>
<span class="quotelev1">&gt; stderr: blah blah blah
</span><br>
<span class="quotelev1">&gt; stdout: blah blah blah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; environment: foo = bar
</span><br>
<span class="quotelev1">&gt; test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
</span><br>
<span class="quotelev1">&gt; ./spawn
</span><br>
<span class="quotelev1">&gt; stderr: blah blah blah
</span><br>
<span class="quotelev1">&gt; stdout: blah blah blah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed Test(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: Linux
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: IU Odin Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+------------------------+
</span><br>
<span class="quotelev1">&gt; | 1  | 2006-07-20 | ibm     | zero1                  |
</span><br>
<span class="quotelev1">&gt; | 2  | 2006-07-20 | ibm     | spawn                  |
</span><br>
<span class="quotelev1">&gt; | 3  | 2006-07-20 | ibm     | spawn_multiple         |
</span><br>
<span class="quotelev1">&gt; | 9  | 2006-07-20 | imb     | range                  |
</span><br>
<span class="quotelev1">&gt; | 12 | 2006-07-20 | imb     | sub                    |
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Failed Test Details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; environment: foo = bar
</span><br>
<span class="quotelev1">&gt; test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
</span><br>
<span class="quotelev1">&gt; ./zero1
</span><br>
<span class="quotelev1">&gt; stderr: blah blah blah
</span><br>
<span class="quotelev1">&gt; stdout: blah blah blah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; environment: foo = bar
</span><br>
<span class="quotelev1">&gt; test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
</span><br>
<span class="quotelev1">&gt; ./spawn
</span><br>
<span class="quotelev1">&gt; stderr: blah blah blah
</span><br>
<span class="quotelev1">&gt; stdout: blah blah blah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Passed Test Run(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: SunOS 5.10
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: Sun's Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+-------------------------+
</span><br>
<span class="quotelev1">&gt; |  # |    time    |   cat   |          name           |
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+-------------------------+
</span><br>
<span class="quotelev1">&gt; |  3 | 2006-07-17 | trivial | f77_hello               |
</span><br>
<span class="quotelev1">&gt; | 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
</span><br>
<span class="quotelev1">&gt; | 33 | 2006-07-20 | ibm     | allreduce               |
</span><br>
<span class="quotelev1">&gt; | 34 | 2006-07-20 | ibm     | allreduce_in_place      |
</span><br>
<span class="quotelev1">&gt; | 35 | 2006-07-20 | ibm     | alltoall                |
</span><br>
<span class="quotelev1">&gt; | 36 | 2006-07-20 | intel   | alltoallw               |
</span><br>
<span class="quotelev1">&gt; | 37 | 2006-07-20 | intel   | barrier                 |
</span><br>
<span class="quotelev1">&gt; | 38 | 2006-07-20 | intel   | bcast                   |
</span><br>
<span class="quotelev1">&gt; | 39 | 2006-07-20 | imb     | bcast_struct            |
</span><br>
<span class="quotelev1">&gt; | 40 | 2006-07-20 | imb     | exscan                  |
</span><br>
<span class="quotelev1">&gt; | 41 | 2006-07-20 | imb     | gather                  |
</span><br>
<span class="quotelev1">&gt; | 42 | 2006-07-20 | imb     | gather_in_place         |
</span><br>
<span class="quotelev1">&gt; | 43 | 2006-07-20 | imb     | gatherv                 |
</span><br>
<span class="quotelev1">&gt; | 44 | 2006-07-20 | imb     | gatherv_in_place        |
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os_version: Linux
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_id: IU Odin Cluster
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+-------------------------+
</span><br>
<span class="quotelev1">&gt; |  # |    time    |   cat   |          name           |
</span><br>
<span class="quotelev1">&gt; +----+------------+---------+-------------------------+
</span><br>
<span class="quotelev1">&gt; |  3 | 2006-07-17 | trivial | f77_hello               |
</span><br>
<span class="quotelev1">&gt; | 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
</span><br>
<span class="quotelev1">&gt; | 33 | 2006-07-20 | ibm     | allreduce               |
</span><br>
<span class="quotelev1">&gt; | 34 | 2006-07-20 | ibm     | allreduce_in_place      |
</span><br>
<span class="quotelev1">&gt; | 35 | 2006-07-20 | ibm     | alltoall                |
</span><br>
<span class="quotelev1">&gt; | 36 | 2006-07-20 | intel   | alltoallw               |
</span><br>
<span class="quotelev1">&gt; | 37 | 2006-07-20 | intel   | barrier                 |
</span><br>
<span class="quotelev1">&gt; | 38 | 2006-07-20 | intel   | bcast                   |
</span><br>
<span class="quotelev1">&gt; | 39 | 2006-07-20 | imb     | bcast_struct            |
</span><br>
<span class="quotelev1">&gt; | 40 | 2006-07-20 | imb     | exscan                  |
</span><br>
<span class="quotelev1">&gt; | 41 | 2006-07-20 | imb     | gather                  |
</span><br>
<span class="quotelev1">&gt; | 42 | 2006-07-20 | imb     | gather_in_place         |
</span><br>
<span class="quotelev1">&gt; | 43 | 2006-07-20 | imb     | gatherv                 |
</span><br>
<span class="quotelev1">&gt; | 44 | 2006-07-20 | imb     | gatherv_in_place        |
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-results mailing list
</span><br>
<span class="quotelev1">&gt; mtt-results_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/08/0052.php">Terry D. Dontje: "[MTT users] Use of multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>In reply to:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
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
