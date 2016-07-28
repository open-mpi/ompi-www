<?
$subject_val = "Re: [OMPI users] MTT -trivial :All tests are not getting passed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 09:12:44 2009" -->
<!-- isoreceived="20091222141244" -->
<!-- sent="Tue, 22 Dec 2009 09:12:34 -0500" -->
<!-- isosent="20091222141234" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MTT -trivial :All tests are not getting passed" -->
<!-- id="20091222141234.GE53342_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B309E48.4070008_at_chelsio.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MTT -trivial :All tests are not getting passed<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 09:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11626.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vishal,
<br>
<p>This is an MTT question for mtt-users_at_[hidden] (see comments
<br>
below).
<br>
<p>On Tue, Dec/22/2009 03:54:08PM, vishal shorghar wrote:
<br>
<span class="quotelev1">&gt;    Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have one issue with MTT trivial tests.All tests are not getting
</span><br>
<span class="quotelev1">&gt;    passed,Please read below for detailed description.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Today I ran mtt trivial tests with latest ofed package
</span><br>
<span class="quotelev1">&gt;    OFED-1.5-20091217-0600 (ompi-1.4), between two machines,I was  able to run
</span><br>
<span class="quotelev1">&gt;    the MTT trivial tests manually but not through MTT framework. I think we
</span><br>
<span class="quotelev1">&gt;    are missing some configuration steps since it is unable to find the test
</span><br>
<span class="quotelev1">&gt;    executables in the test run phase of the MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -&gt; When we ran it through MTT it gave us the error and exits.
</span><br>
<span class="quotelev1">&gt;    I ran the test as  &quot;cat developer.ini trivial.ini | ../client/mtt
</span><br>
<span class="quotelev1">&gt;    --verbose - &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -&gt; When we analyzed error from
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt file we
</span><br>
<span class="quotelev1">&gt;    found it is not getting the executable files of the different test to
</span><br>
<span class="quotelev1">&gt;    execute.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -&gt; Then we found that those executables were being generated only on one
</span><br>
<span class="quotelev1">&gt;    of the machine out of two machines. So, we manually copied the tests  from
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring
</span><br>
<span class="quotelev1">&gt;    to another machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -&gt; And we ran it manually as shown below and it worked fine:
</span><br>
<span class="quotelev1">&gt;    mpirun --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt;    --prefix
</span><br>
<span class="quotelev1">&gt;    /usr/mpi/gcc/openmpi-1.4/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -&gt; I am attaching file trivial.ini,developer.ini and
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Let us know if I am  missing some configuration steps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You need to set your scratch directory (via the --scratch option) to
<br>
an NFS share that is accessible to all nodes in your hostlist.  MTT
<br>
won't copy local files onto each node for you.
<br>
<p>Regards,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt;    NOTE:
</span><br>
<span class="quotelev1">&gt;    ====
</span><br>
<span class="quotelev1">&gt;    It gave me following output at the end of execution of test command and
</span><br>
<span class="quotelev1">&gt;    the same is saved in /root/mtt-svn/samples/All_phase-summary.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    hostname: nizam
</span><br>
<span class="quotelev1">&gt;    uname: Linux nizam 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009
</span><br>
<span class="quotelev1">&gt;    x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    who am i:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    +-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;    | Phase       | Section         | MPI Version | Duration | Pass | Fail |
</span><br>
<span class="quotelev1">&gt;    Time out | Skip | Detailed report                                      |
</span><br>
<span class="quotelev1">&gt;    +-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;    | MPI Install | my installation | 1.4         | 00:00    | 1    |
</span><br>
<span class="quotelev1">&gt;    |          |      | MPI_Install-my_installation-my_installation-1.4.html |
</span><br>
<span class="quotelev1">&gt;    | Test Build  | trivial         | 1.4         | 00:01    | 1    |
</span><br>
<span class="quotelev1">&gt;    |          |      | Test_Build-trivial-my_installation-1.4.html          |
</span><br>
<span class="quotelev1">&gt;    | Test Run    | trivial         | 1.4         | 00:10    |      | 8
</span><br>
<span class="quotelev1">&gt;    |          |      | Test_Run-trivial-my_installation-1.4.html            |
</span><br>
<span class="quotelev1">&gt;    +-------------+-----------------+-------------+----------+------+------+----------+------+------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Total Tests:    10
</span><br>
<span class="quotelev1">&gt;        Total Failures: 8
</span><br>
<span class="quotelev1">&gt;        Total Passed:   2
</span><br>
<span class="quotelev1">&gt;        Total Duration: 11 secs. (00:11)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks  &amp; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Vishal shorghar
</span><br>
<span class="quotelev1">&gt;    MTS
</span><br>
<span class="quotelev1">&gt;    Chelsio Communication
</span><br>
<p><span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2007 Sun Microystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Template MTT configuration file for Open MPI developers.  The intent
</span><br>
<span class="quotelev1">&gt; # for this template file is to establish at least some loose
</span><br>
<span class="quotelev1">&gt; # guidelines for what Open MPI core developers should be running
</span><br>
<span class="quotelev1">&gt; # before committing changes to the OMPI repository. This file is not
</span><br>
<span class="quotelev1">&gt; # intended to be an exhaustive sample of all possible fields and
</span><br>
<span class="quotelev1">&gt; # values that MTT offers. Each developer will undoubtedly have to
</span><br>
<span class="quotelev1">&gt; # edit this template for their own needs (e.g., pick compilers to use,
</span><br>
<span class="quotelev1">&gt; # etc.), but this file provides a baseline set of configurations that
</span><br>
<span class="quotelev1">&gt; # we intend for you to run.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Sample usage:
</span><br>
<span class="quotelev1">&gt; #   cat developer.ini intel.ini   | client/mtt - alreadyinstalled_dir=/your/install
</span><br>
<span class="quotelev1">&gt; #   cat developer.ini trivial.ini | client/mtt - alreadyinstalled_dir=/your/install
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; # No overrides to defaults
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Fill this field in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #hostlist = 102.77.77.63 102.77.77.54 102.77.77.64 102.77.77.68 
</span><br>
<span class="quotelev1">&gt; #hostlist = 102.77.77.66 102.77.77.68 102.77.77.63 102.77.77.64 102.77.77.53 102.77.77.54 102.77.77.243 102.77.77.65
</span><br>
<span class="quotelev1">&gt; hostlist = 102.77.77.64 102.77.77.68 
</span><br>
<span class="quotelev1">&gt; hostlist_max_np = 2 
</span><br>
<span class="quotelev1">&gt; max_np = 2
</span><br>
<span class="quotelev1">&gt; force = 1
</span><br>
<span class="quotelev1">&gt; #prefix = /usr/mpi/gcc/openmpi-1.3.4/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec = mpirun @hosts@ -np &amp;test_np() @mca@ --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca = --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hosts = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt;     &amp;if(
</span><br>
<span class="quotelev1">&gt;         &amp;have_hostfile(),
</span><br>
<span class="quotelev1">&gt;         &amp;stringify(&quot;--hostfile &quot;, &amp;hostfile()),
</span><br>
<span class="quotelev1">&gt;         &amp;if(
</span><br>
<span class="quotelev1">&gt;             &amp;have_hostlist(),
</span><br>
<span class="quotelev1">&gt;             &amp;stringify(&quot;--host &quot;, &amp;hostlist()),
</span><br>
<span class="quotelev1">&gt;             &quot;&quot;
</span><br>
<span class="quotelev1">&gt;         )
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Here is a good place to put any cleanup commands (e.g.,
</span><br>
<span class="quotelev1">&gt; # kill a stale process, remove a leftover file, etc.)
</span><br>
<span class="quotelev1">&gt; after_all_exec = &amp;shell(&quot;echo done.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: My Installation]
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev1">&gt; # Leave this parameter blank to
</span><br>
<span class="quotelev1">&gt; # have MTT search your path for an MPI
</span><br>
<span class="quotelev1">&gt; # alreadyinstalled_dir = /your/installation
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: My Installation]
</span><br>
<span class="quotelev1">&gt; mpi_get = My Installation
</span><br>
<span class="quotelev1">&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # User-defined report headers/footers
</span><br>
<span class="quotelev1">&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; textfile_detail_header  =
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer  =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +--------------------------+-------------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | Field                    | Value                                                                         |
</span><br>
<span class="quotelev1">&gt; +--------------------------+-------------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | description              |                                                                               |
</span><br>
<span class="quotelev1">&gt; | environment              |                                                                               |
</span><br>
<span class="quotelev1">&gt; | exit_signal              | -1                                                                            |
</span><br>
<span class="quotelev1">&gt; | launcher                 | mpirun                                                                        |
</span><br>
<span class="quotelev1">&gt; | mpi_install_section_name | my installation                                                               |
</span><br>
<span class="quotelev1">&gt; | mpi_name                 | my installation                                                               |
</span><br>
<span class="quotelev1">&gt; | mpi_version              | 1.4                                                                           |
</span><br>
<span class="quotelev1">&gt; | network                  |                                                                               |
</span><br>
<span class="quotelev1">&gt; | np                       | 2                                                                             |
</span><br>
<span class="quotelev1">&gt; | parameters               |                                                                               |
</span><br>
<span class="quotelev1">&gt; | phase                    | Test Run                                                                      |
</span><br>
<span class="quotelev1">&gt; | resource_manager         | none                                                                          |
</span><br>
<span class="quotelev1">&gt; | result_stderr            |                                                                               |
</span><br>
<span class="quotelev1">&gt; | test_build_section_name  | trivial                                                                       |
</span><br>
<span class="quotelev1">&gt; | variant                  | 1                                                                             |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_ring                                   |
</span><br>
<span class="quotelev1">&gt; | duration                 | 1 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./c_ring                                                          |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107371                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:11 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | c_ring                                                                        |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_ring                                 |
</span><br>
<span class="quotelev1">&gt; | duration                 | 2 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./cxx_ring                                                        |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107372                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:12 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | cxx_ring                                                                      |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_hello                                |
</span><br>
<span class="quotelev1">&gt; | duration                 | 2 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./cxx_hello                                                       |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107374                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:14 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | cxx_hello                                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_hello                                |
</span><br>
<span class="quotelev1">&gt; | duration                 | 2 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./f90_hello                                                       |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107376                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:16 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | f90_hello                                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_ring                                 |
</span><br>
<span class="quotelev1">&gt; | duration                 | 1 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./f90_ring                                                        |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107378                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:18 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | f90_ring                                                                      |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_hello                                  |
</span><br>
<span class="quotelev1">&gt; | duration                 | 4 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 0                                                                             |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; timeout expired (2 seconds) )                                         |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./c_hello                                                         |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107379                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:19 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | c_hello                                                                       |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_hello                                |
</span><br>
<span class="quotelev1">&gt; | duration                 | 1 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./f77_hello                                                       |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107383                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:23 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | f77_hello                                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; | command                  | mpirun	   --host 102.77.77.64,102.77.77.68 -np 2 --mca btl openib,sm,self     |
</span><br>
<span class="quotelev1">&gt; |                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_ring                                 |
</span><br>
<span class="quotelev1">&gt; | duration                 | 1 seconds                                                                     |
</span><br>
<span class="quotelev1">&gt; | exit_value               | 131                                                                           |
</span><br>
<span class="quotelev1">&gt; | result_message           | Failed; exit status: 131                                                      |
</span><br>
<span class="quotelev1">&gt; | result_stdout            | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; |                          | mpirun was unable to launch the specified application as it could not access  |
</span><br>
<span class="quotelev1">&gt; |                          | or execute an executable:                                                     |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | Executable: ./f77_ring                                                        |
</span><br>
<span class="quotelev1">&gt; |                          | Node: 102.77.77.64                                                            |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; |                          | while attempting to start process rank 0.                                     |
</span><br>
<span class="quotelev1">&gt; |                          | --------------------------------------------------------------------------    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp          | 1261107385                                                                    |
</span><br>
<span class="quotelev1">&gt; | start_timestamp_human    | Fri Dec 18 03:36:25 2009                                                      |
</span><br>
<span class="quotelev1">&gt; | test_name                | f77_ring                                                                      |
</span><br>
<span class="quotelev1">&gt; |                          |                                                                               |
</span><br>
<span class="quotelev1">&gt; +--------------------------+-------------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2007 Sun Microystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # This INI file is an addendum to samples/developer.ini (which only
</span><br>
<span class="quotelev1">&gt; # contains Trivial tests).
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Sample usage:
</span><br>
<span class="quotelev1">&gt; # cat developer.ini trivial.ini | client/mtt - alreadyinstalled_dir=/your/install
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: trivial]
</span><br>
<span class="quotelev1">&gt; module = Trivial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: trivial]
</span><br>
<span class="quotelev1">&gt; test_get = trivial
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Trivial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: trivial]
</span><br>
<span class="quotelev1">&gt; test_build = trivial
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;test_np()
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = 100
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_only:tests = &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11626.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
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
