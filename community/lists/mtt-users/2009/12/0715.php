<?
$subject_val = "[MTT users] [Fwd: MTT -trivial :All tests are not getting passed]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 00:45:28 2009" -->
<!-- isoreceived="20091230054528" -->
<!-- sent="Wed, 30 Dec 2009 11:15:18 +0530" -->
<!-- isosent="20091230054518" -->
<!-- name="vishal shorghar" -->
<!-- email="vshorrghar_at_[hidden]" -->
<!-- subject="[MTT users] [Fwd: MTT -trivial :All tests are not getting passed]" -->
<!-- id="4B3AE8EE.3040009_at_chelsio.com" -->
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
<strong>Subject:</strong> [MTT users] [Fwd: MTT -trivial :All tests are not getting passed]<br>
<strong>From:</strong> vishal shorghar (<em>vshorrghar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-30 00:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0716.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 18/01/2010)"</a>
<li><strong>Previous message:</strong> <a href="0714.php">Ethan Mallove: "Re: [MTT users] [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<p><strong>attached mail follows:</strong><hr><p>
HI All,
<br>
<p>Today I reran the trivial test on two nodes with (via the --scratch 
<br>
option) to a NFS share that is accessible to all nodes in  hostlist (as 
<br>
suggested by Ethan).But still no luck.
<br>
I have shared  
<br>
&quot;/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial&quot; on 
<br>
my head node which is accessible to client node.
<br>
Then I ran test as &quot;cat samples/developer.ini samples/trivial.ini | 
<br>
client/mtt --scratch 
<br>
/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial 
<br>
--verbose - &quot; but still its giving me the same error which I was getting 
<br>
earlier.
<br>
<p>We copied 
<br>
/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial 
<br>
directory on the client node and changed the trivial.ini as follows:
<br>
-- simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
++ simple_only:tests = 
<br>
&amp;find_executables(&quot;/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial&quot;)
<br>
<p>and after this we ran the test and we were able to run it successfully.
<br>
<p>Does this mean we manually have to either copy the test executables to 
<br>
client nodes or we have to mount the test executables directory?
<br>
<p>Can you please guide us on this to proceed further.
<br>
<p>Regards,
<br>
Vishal
<br>
<p><p><p><p><p><p><span class="quotelev1"> &gt;    Hi All,
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    I have one issue with MTT trivial tests.All tests are not getting
</span><br>
<span class="quotelev2"> &gt; &gt;    passed,Please read below for detailed description.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    Today I ran mtt trivial tests with latest ofed package
</span><br>
<span class="quotelev2"> &gt; &gt;    OFED-1.5-20091217-0600 (ompi-1.4), between two machines,I was  
</span><br>
able to run
<br>
<span class="quotelev2"> &gt; &gt;    the MTT trivial tests manually but not through MTT framework. I 
</span><br>
think we
<br>
<span class="quotelev2"> &gt; &gt;    are missing some configuration steps since it is unable to find 
</span><br>
the test
<br>
<span class="quotelev2"> &gt; &gt;    executables in the test run phase of the MTT.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    -&gt; When we ran it through MTT it gave us the error and exits.
</span><br>
<span class="quotelev2"> &gt; &gt;    I ran the test as  &quot;cat developer.ini trivial.ini | ../client/mtt
</span><br>
<span class="quotelev2"> &gt; &gt;    --verbose - &quot;
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    -&gt; When we analyzed error from
</span><br>
<span class="quotelev2"> &gt; &gt;    /root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt 
</span><br>
file we
<br>
<span class="quotelev2"> &gt; &gt;    found it is not getting the executable files of the different 
</span><br>
test to
<br>
<span class="quotelev2"> &gt; &gt;    execute.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    -&gt; Then we found that those executables were being generated 
</span><br>
only on one
<br>
<span class="quotelev2"> &gt; &gt;    of the machine out of two machines. So, we manually copied the 
</span><br>
tests  from
<br>
<span class="quotelev2"> &gt; &gt;    
</span><br>
/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring
<br>
<span class="quotelev2"> &gt; &gt;    to another machine.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    -&gt; And we ran it manually as shown below and it worked fine:
</span><br>
<span class="quotelev2"> &gt; &gt;    mpirun --host 102.77.77.64,102.77.77.68 -np 2 --mca btl 
</span><br>
openib,sm,self
<br>
<span class="quotelev2"> &gt; &gt;    --prefix
</span><br>
<span class="quotelev2"> &gt; &gt;    
</span><br>
/usr/mpi/gcc/openmpi-1.4/root/mtt-svn/samples/installs/nRpF/tests/trivial/test_get__trivial/c_ring
<br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    -&gt; I am attaching file trivial.ini,developer.ini and
</span><br>
<span class="quotelev2"> &gt; &gt;    /root/mtt-svn/samples/Test_Run-trivial-my_installation-1.4.txt.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt;    Let us know if I am  missing some configuration steps.
</span><br>
<span class="quotelev2"> &gt; &gt;
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
<p><p>
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
hostlist = 102.77.77.64 102.77.77.63 
<br>
hostlist_max_np = 2 
<br>
max_np = 2
<br>
force = 1
<br>
#prefix = /usr/mpi/gcc/openmpi-1.4/bin
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
<p><p>+--------------------------+------------------------------------------------------------------------------+
<br>
| Field                    | Value                                                                        |
<br>
+--------------------------+------------------------------------------------------------------------------+
<br>
| description              |                                                                              |
<br>
| environment              |                                                                              |
<br>
| exit_signal              | -1                                                                           |
<br>
| exit_value               | 131                                                                          |
<br>
| launcher                 | mpirun                                                                       |
<br>
| mpi_install_section_name | my installation                                                              |
<br>
| mpi_name                 | my installation                                                              |
<br>
| mpi_version              | 1.4                                                                          |
<br>
| network                  |                                                                              |
<br>
| np                       | 2                                                                            |
<br>
| parameters               |                                                                              |
<br>
| phase                    | Test Run                                                                     |
<br>
| resource_manager         | none                                                                         |
<br>
| result_message           | Failed; exit status: 131                                                     |
<br>
| result_stderr            |                                                                              |
<br>
| test_build_section_name  | trivial                                                                      |
<br>
| variant                  | 1                                                                            |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_hello                               |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./f77_hello                                                      |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064675                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:15 2009                                                     |
<br>
| test_name                | f77_hello                                                                    |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_ring                                |
<br>
| duration                 | 2 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./f90_ring                                                       |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064676                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:16 2009                                                     |
<br>
| test_name                | f90_ring                                                                     |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f90_hello                               |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./f90_hello                                                      |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064678                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:18 2009                                                     |
<br>
| test_name                | f90_hello                                                                    |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./f77_ring                                |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./f77_ring                                                       |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064679                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:19 2009                                                     |
<br>
| test_name                | f77_ring                                                                     |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_ring                                |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./cxx_ring                                                       |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064680                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:20 2009                                                     |
<br>
| test_name                | cxx_ring                                                                     |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./cxx_hello                               |
<br>
| duration                 | 2 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./cxx_hello                                                      |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064681                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:21 2009                                                     |
<br>
| test_name                | cxx_hello                                                                    |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_hello                                 |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./c_hello                                                        |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064683                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:23 2009                                                     |
<br>
| test_name                | c_hello                                                                      |
<br>
|                          |                                                                              |
<br>
| command                  | mpirun	   --host 102.77.77.64,102.77.77.63 -np 2 --mca btl openib,sm,self    |
<br>
|                          | --prefix /usr/mpi/gcc/openmpi-1.4/ ./c_ring                                  |
<br>
| duration                 | 1 seconds                                                                    |
<br>
| result_stdout            | --------------------------------------------------------------------------   |
<br>
|                          | mpirun was unable to launch the specified application as it could not access |
<br>
|                          | or execute an executable:                                                    |
<br>
|                          |                                                                              |
<br>
|                          | Executable: ./c_ring                                                         |
<br>
|                          | Node: 102.77.77.63                                                           |
<br>
|                          |                                                                              |
<br>
|                          | while attempting to start process rank 1.                                    |
<br>
|                          | --------------------------------------------------------------------------   |
<br>
| start_timestamp          | 1262064684                                                                   |
<br>
| start_timestamp_human    | Tue Dec 29 05:31:24 2009                                                     |
<br>
| test_name                | c_ring                                                                       |
<br>
|                          |                                                                              |
<br>
+--------------------------+------------------------------------------------------------------------------+
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0716.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 18/01/2010)"</a>
<li><strong>Previous message:</strong> <a href="0714.php">Ethan Mallove: "Re: [MTT users] [OMPI users] MTT -trivial :All tests are not getting passed"</a>
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
