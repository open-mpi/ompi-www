<?
$subject_val = "[OMPI users] MTT -trivial :All tests are not getting passed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 05:24:22 2009" -->
<!-- isoreceived="20091222102422" -->
<!-- sent="Tue, 22 Dec 2009 15:54:08 +0530" -->
<!-- isosent="20091222102408" -->
<!-- name="vishal shorghar" -->
<!-- email="vshorrghar_at_[hidden]" -->
<!-- subject="[OMPI users] MTT -trivial :All tests are not getting passed" -->
<!-- id="4B309E48.4070008_at_chelsio.com" -->
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
<strong>Subject:</strong> [OMPI users] MTT -trivial :All tests are not getting passed<br>
<strong>From:</strong> vishal shorghar (<em>vshorrghar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 05:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11627.php">Roy Dragseth: "[OMPI users] Memory corruption?"</a>
<li><strong>Previous message:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>Reply:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Hi All,*
<br>
<p>I have one issue with MTT trivial tests.All tests are not getting 
<br>
passed,Please read below for detailed description.
<br>
<p><p>Today I ran mtt trivial tests with latest ofed package 
<br>
OFED-1.5-20091217-0600 (ompi-1.4), between two machines,I was  able to 
<br>
run the MTT trivial tests manually but not through MTT framework. I 
<br>
think we are missing some configuration steps since it is unable to find 
<br>
the test executables in the test run phase of the MTT.
<br>
<p>-&gt; When we ran it through MTT it gave us the error and exits.
<br>
I ran the test as  &quot;cat developer.ini trivial.ini | ../client/mtt 
<br>
--verbose - &quot;
<br>
<p>-&gt; When we analyzed error from 
<br>
/root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt file we 
<br>
found it is not getting the executable files of the different test to 
<br>
execute.
<br>
<p>-&gt; Then we found that those executables were being generated only on one 
<br>
of the machine out of two machines. So, we manually copied the tests  from
<br>
/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring 
<br>
to another machine.
<br>
<p>-&gt; And we ran it manually as shown below and it worked fine:
<br>
mpirun --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self 
<br>
--prefix 
<br>
/usr/mpi/gcc/openmpi-1.4/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring
<br>
<p>-&gt; I am attaching file trivial.ini,developer.ini and 
<br>
/root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt.
<br>
<p>Let us know if I am  missing some configuration steps.
<br>
<p>NOTE:
<br>
====
<br>
It gave me following output at the end of execution of test command and 
<br>
the same is saved in /root/mtt-svn/samples/All_phase-summary.txt
<br>
<p>hostname: nizam
<br>
uname: Linux nizam 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
who am i:
<br>
<p>+-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
<br>
| Phase       | Section         | MPI Version | Duration | Pass | Fail | 
<br>
Time out | Skip | Detailed report                                      |
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
<br>
| MPI Install | my installation | 1.4         | 00:00    | 1    |      
<br>
|          |      | MPI_Install-my_installation-my_installation-1.4.html |
<br>
| Test Build  | trivial         | 1.4         | 00:01    | 1    |      
<br>
|          |      | Test_Build-trivial-my_installation-1.4.html          |
<br>
| Test Run    | trivial         | 1.4         | 00:10    |      | 8    
<br>
|          |      | Test_Run-trivial-my_installation-1.4.html            |
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;Total Tests:    10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Failures: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Passed:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Duration: 11 secs. (00:11)
<br>
<p>Thanks  &amp; Regards,
<br>
<p>Vishal shorghar
<br>
MTS
<br>
Chelsio Communication
<br>
<p><p><p>
<p>
<br><p>
#
<br>
# Copyright (c) 2007 Sun Microystems, Inc.  All rights reserved.
<br>
#
<br>
<p># Template MTT configuration file for Open MPI developers.  The intent
<br>
# for this template file is to establish at least some loose
<br>
# guidelines for what Open MPI core developers should be running
<br>
# before committing changes to the OMPI repository. This file is not
<br>
# intended to be an exhaustive sample of all possible fields and
<br>
# values that MTT offers. Each developer will undoubtedly have to
<br>
# edit this template for their own needs (e.g., pick compilers to use,
<br>
# etc.), but this file provides a baseline set of configurations that
<br>
# we intend for you to run.
<br>
#
<br>
# Sample usage:
<br>
#   cat developer.ini intel.ini   | client/mtt - alreadyinstalled_dir=/your/install
<br>
#   cat developer.ini trivial.ini | client/mtt - alreadyinstalled_dir=/your/install
<br>
#
<br>
<p>[MTT]
<br>
# No overrides to defaults
<br>
<p># Fill this field in
<br>
<p>#hostlist = 102.77.77.63 102.77.77.54 102.77.77.64 102.77.77.68 
<br>
#hostlist = 102.77.77.66 102.77.77.68 102.77.77.63 102.77.77.64 102.77.77.53 102.77.77.54 102.77.77.243 102.77.77.65
<br>
hostlist = 102.77.77.64 102.77.77.68 
<br>
hostlist_max_np = 2 
<br>
max_np = 2
<br>
force = 1
<br>
#prefix = /usr/mpi/gcc/openmpi-1.3.4/bin
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: Open MPI]
<br>
<p>exec = mpirun @hosts@ -np &amp;test_np() @mca@ --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p>mca = --mca btl openib,sm,self
<br>
<p>hosts = &lt;&lt;EOT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp;if(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;have_hostfile(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;stringify(&quot;--hostfile &quot;, &amp;hostfile()),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;if(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;have_hostlist(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;stringify(&quot;--host &quot;, &amp;hostlist()),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
EOT
<br>
<p># Here is a good place to put any cleanup commands (e.g.,
<br>
# kill a stale process, remove a leftover file, etc.)
<br>
after_all_exec = &amp;shell(&quot;echo done.&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: My Installation]
<br>
mpi_details = Open MPI
<br>
# Leave this parameter blank to
<br>
# have MTT search your path for an MPI
<br>
# alreadyinstalled_dir = /your/installation
<br>
module = AlreadyInstalled
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: My Installation]
<br>
mpi_get = My Installation
<br>
module = Analyze::OMPI
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Reporter: text file backup]
<br>
module = TextFile
<br>
<p>textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
<br>
<p># User-defined report headers/footers
<br>
textfile_summary_header = &lt;&lt;EOT
<br>
hostname: &amp;shell(&quot;hostname&quot;)
<br>
uname: &amp;shell(&quot;uname -a&quot;)
<br>
who am i: &amp;shell(&quot;who am i&quot;)
<br>
EOT
<br>
<p>textfile_summary_footer =
<br>
textfile_detail_header  =
<br>
textfile_detail_footer  =
<br>
<p>textfile_textwrap = 78
<br>
<p>
<br><p>
<p><p>+--------------------------+-------------------------------------------------------------------------------+
<br>
| Field                    | Value                                                                         |
<br>
+--------------------------+-------------------------------------------------------------------------------+
<br>
| description              |                                                                               |
<br>
| environment              |                                                                               |
<br>
| exit_signal              | -1                                                                            |
<br>
| launcher                 | mpirun                                                                        |
<br>
| mpi_install_section_name | my installation                                                               |
<br>
| mpi_name                 | my installation                                                               |
<br>
| mpi_version              | 1.4                                                                           |
<br>
| network                  |                                                                               |
<br>
| np                       | 2                                                                             |
<br>
| parameters               |                                                                               |
<br>
| phase                    | Test Run                                                                      |
<br>
| resource_manager         | none                                                                          |
<br>
| result_stderr            |                                                                               |
<br>
| test_build_section_name  | trivial                                                                       |
<br>
| variant                  | 1                                                                             |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_ring                                   |
<br>
| duration                 | 1 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./c_ring                                                          |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107371                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:11 2009                                                      |
<br>
| test_name                | c_ring                                                                        |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_ring                                 |
<br>
| duration                 | 2 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./cxx_ring                                                        |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107372                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:12 2009                                                      |
<br>
| test_name                | cxx_ring                                                                      |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_hello                                |
<br>
| duration                 | 2 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./cxx_hello                                                       |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107374                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:14 2009                                                      |
<br>
| test_name                | cxx_hello                                                                     |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_hello                                |
<br>
| duration                 | 2 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./f90_hello                                                       |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107376                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:16 2009                                                      |
<br>
| test_name                | f90_hello                                                                     |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_ring                                 |
<br>
| duration                 | 1 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./f90_ring                                                        |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107378                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:18 2009                                                      |
<br>
| test_name                | f90_ring                                                                      |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_hello                                  |
<br>
| duration                 | 4 seconds                                                                     |
<br>
| exit_value               | 0                                                                             |
<br>
| result_message           | Failed; timeout expired (2 seconds) )                                         |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./c_hello                                                         |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
|                          | mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate |
<br>
| start_timestamp          | 1261107379                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:19 2009                                                      |
<br>
| test_name                | c_hello                                                                       |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_hello                                |
<br>
| duration                 | 1 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./f77_hello                                                       |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107383                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:23 2009                                                      |
<br>
| test_name                | f77_hello                                                                     |
<br>
|                          |                                                                               |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_ring                                 |
<br>
| duration                 | 1 seconds                                                                     |
<br>
| exit_value               | 131                                                                           |
<br>
| result_message           | Failed; exit status: 131                                                      |
<br>
| result_stdout            | --------------------------------------------------------------------------    |
<br>
|                          | mpirun was unable to launch the specified application as it could not access  |
<br>
|                          | or execute an executable:                                                     |
<br>
|                          |                                                                               |
<br>
|                          | Executable: ./f77_ring                                                        |
<br>
|                          | Node: 102.77.77.64                                                            |
<br>
|                          |                                                                               |
<br>
|                          | while attempting to start process rank 0.                                     |
<br>
|                          | --------------------------------------------------------------------------    |
<br>
| start_timestamp          | 1261107385                                                                    |
<br>
| start_timestamp_human    | Fri Dec 18 03:36:25 2009                                                      |
<br>
| test_name                | f77_ring                                                                      |
<br>
|                          |                                                                               |
<br>
+--------------------------+-------------------------------------------------------------------------------+
<br>
<p><p>
<br><p>
#
<br>
# Copyright (c) 2007 Sun Microystems, Inc.  All rights reserved.
<br>
#
<br>
<p>#
<br>
# This INI file is an addendum to samples/developer.ini (which only
<br>
# contains Trivial tests).
<br>
#
<br>
# Sample usage:
<br>
# cat developer.ini trivial.ini | client/mtt - alreadyinstalled_dir=/your/install
<br>
#
<br>
<p>[Test get: trivial]
<br>
module = Trivial
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: trivial]
<br>
test_get = trivial
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Trivial
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: trivial]
<br>
test_build = trivial
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;test_np()
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
<p>specify_module = Simple
<br>
simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11627.php">Roy Dragseth: "[OMPI users] Memory corruption?"</a>
<li><strong>Previous message:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<li><strong>Reply:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
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
