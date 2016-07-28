<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 17:33:12 2006" -->
<!-- isoreceived="20060720213312" -->
<!-- sent="Thu, 20 Jul 2006 17:33:10 -0400" -->
<!-- isosent="20060720213310" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] nightly results format" -->
<!-- id="44BFF696.7050007_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44BEACA6.1010408_at_Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 17:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0051.php">Andrew Friedley: "Re: [MTT users] nightly results format"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a draft for a nightly test results email format. One
<br>
will receive reports through mtt-results_at_open-mpi.org.
<br>
Note: The following is a faux-report. Just pretend there is
<br>
nothing non-sensical about the data.
<br>
<p>This might be better sent as an attachment, or a link to a
<br>
webpage as lots of email clients have default textwidth
<br>
settings that will make the formatted tables look like
<br>
gobbledygook.
<br>
<p>We are also planning a webpage frontend (e.g.,
<br>
www.open-mpi.org/mtt-results.php) to the test results with
<br>
more flexibility in generating reports than this static
<br>
email report. In other words, we're leaving out lots of
<br>
bells and whistles here as those will be implemented in the
<br>
webpage frontend.
<br>
<p>-Ethan
<br>
<p><p>======
<br>
<p>Subject: Test results for &lt;datestamp&gt;
<br>
Body:
<br>
<p>* Failed MPI Install(s)
<br>
<p>os_version: SunOS 5.10
<br>
platform_hardware: i86pc
<br>
platform_id: Sun's Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p><a href="http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp</a>&gt;
<br>
<a href="http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp</a>&gt;
<br>
<p>* Failed Test Build(s)
<br>
<p>os_version: SunOS 5.10
<br>
platform_hardware: i86pc
<br>
platform_id: Sun's Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p>+----+------------+---------+------------------------+
<br>
| #  |    time    |   cat   |          name          |
<br>
+----+------------+---------+------------------------+
<br>
| 1  | 2006-07-20 | ibm     | test_abc               |
<br>
| 2  | 2006-07-20 | ibm     | test_xyz               |
<br>
| 3  | 2006-07-20 | intel   | test_123               |
<br>
<p>[snip] ...
<br>
<p>[1]
<br>
<p>environment: foo = bar
<br>
compiler_flags: -g -fugly-complex -fno-globals -Wno-globals -Isrc -I.
<br>
stderr: blah blah blah
<br>
stdout: blah blah blah
<br>
<p>* Failed Test Run(s)
<br>
<p>os_version: SunOS 5.10
<br>
platform_hardware: i86pc
<br>
platform_id: Sun's Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p>+----+------------+---------+------------------------+
<br>
| #  |    time    |   cat   |          name          |
<br>
+----+------------+---------+------------------------+
<br>
| 1  | 2006-07-20 | ibm     | zero1                  |
<br>
| 2  | 2006-07-20 | ibm     | spawn                  |
<br>
| 3  | 2006-07-20 | ibm     | spawn_multiple         |
<br>
| 4  | 2006-07-20 | ibm     | abort                  |
<br>
| 5  | 2006-07-20 | ibm     | final                  |
<br>
| 6  | 2006-07-20 | intel   | init_thread_funneled   |
<br>
| 7  | 2006-07-20 | intel   | init_thread_serialized |
<br>
| 8  | 2006-07-20 | intel   | init_thread_multiple   |
<br>
| 9  | 2006-07-20 | imb     | range                  |
<br>
| 10 | 2006-07-20 | imb     | cart                   |
<br>
| 11 | 2006-07-20 | imb     | graph                  |
<br>
| 12 | 2006-07-20 | imb     | sub                    |
<br>
<p>[snip] ...
<br>
<p>* Failed Test Run Details
<br>
<p>[1]
<br>
<p>environment: foo = bar
<br>
test_command: mpirun -np 2 --prefix
<br>
/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
<br>
./zero1
<br>
stderr: blah blah blah
<br>
stdout: blah blah blah
<br>
<p>[2]
<br>
<p>environment: foo = bar
<br>
test_command: mpirun -np 2 --prefix
<br>
/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
<br>
./spawn
<br>
stderr: blah blah blah
<br>
stdout: blah blah blah
<br>
<p>[snip] ...
<br>
<p>* Failed Test(s)
<br>
<p>os_version: Linux
<br>
platform_hardware: i86pc
<br>
platform_id: IU Odin Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p>+----+------------+---------+------------------------+
<br>
| #  |    time    |   cat   |          name          |
<br>
+----+------------+---------+------------------------+
<br>
| 1  | 2006-07-20 | ibm     | zero1                  |
<br>
| 2  | 2006-07-20 | ibm     | spawn                  |
<br>
| 3  | 2006-07-20 | ibm     | spawn_multiple         |
<br>
| 9  | 2006-07-20 | imb     | range                  |
<br>
| 12 | 2006-07-20 | imb     | sub                    |
<br>
<p>[snip] ...
<br>
<p>* Failed Test Details
<br>
<p>[1]
<br>
<p>environment: foo = bar
<br>
test_command: mpirun -np 2 --prefix
<br>
/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
<br>
./zero1
<br>
stderr: blah blah blah
<br>
stdout: blah blah blah
<br>
<p>[2]
<br>
<p>environment: foo = bar
<br>
test_command: mpirun -np 2 --prefix
<br>
/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
<br>
./spawn
<br>
stderr: blah blah blah
<br>
stdout: blah blah blah
<br>
<p>[snip] ...
<br>
<p>======
<br>
<p>* Passed Test Run(s)
<br>
<p>os_version: SunOS 5.10
<br>
platform_hardware: i86pc
<br>
platform_id: Sun's Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p>+----+------------+---------+-------------------------+
<br>
|  # |    time    |   cat   |          name           |
<br>
+----+------------+---------+-------------------------+
<br>
|  3 | 2006-07-17 | trivial | f77_hello               |
<br>
| 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
<br>
| 33 | 2006-07-20 | ibm     | allreduce               |
<br>
| 34 | 2006-07-20 | ibm     | allreduce_in_place      |
<br>
| 35 | 2006-07-20 | ibm     | alltoall                |
<br>
| 36 | 2006-07-20 | intel   | alltoallw               |
<br>
| 37 | 2006-07-20 | intel   | barrier                 |
<br>
| 38 | 2006-07-20 | intel   | bcast                   |
<br>
| 39 | 2006-07-20 | imb     | bcast_struct            |
<br>
| 40 | 2006-07-20 | imb     | exscan                  |
<br>
| 41 | 2006-07-20 | imb     | gather                  |
<br>
| 42 | 2006-07-20 | imb     | gather_in_place         |
<br>
| 43 | 2006-07-20 | imb     | gatherv                 |
<br>
| 44 | 2006-07-20 | imb     | gatherv_in_place        |
<br>
<p>[snip] ...
<br>
<p>os_version: Linux
<br>
platform_hardware: i86pc
<br>
platform_id: IU Odin Cluster
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
<p>+----+------------+---------+-------------------------+
<br>
|  # |    time    |   cat   |          name           |
<br>
+----+------------+---------+-------------------------+
<br>
|  3 | 2006-07-17 | trivial | f77_hello               |
<br>
| 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
<br>
| 33 | 2006-07-20 | ibm     | allreduce               |
<br>
| 34 | 2006-07-20 | ibm     | allreduce_in_place      |
<br>
| 35 | 2006-07-20 | ibm     | alltoall                |
<br>
| 36 | 2006-07-20 | intel   | alltoallw               |
<br>
| 37 | 2006-07-20 | intel   | barrier                 |
<br>
| 38 | 2006-07-20 | intel   | bcast                   |
<br>
| 39 | 2006-07-20 | imb     | bcast_struct            |
<br>
| 40 | 2006-07-20 | imb     | exscan                  |
<br>
| 41 | 2006-07-20 | imb     | gather                  |
<br>
| 42 | 2006-07-20 | imb     | gather_in_place         |
<br>
| 43 | 2006-07-20 | imb     | gatherv                 |
<br>
| 44 | 2006-07-20 | imb     | gatherv_in_place        |
<br>
<p>[snip] ...
<br>
<p>_______________________________________________
<br>
mtt-results mailing list
<br>
mtt-results_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0051.php">Andrew Friedley: "Re: [MTT users] nightly results format"</a>
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
