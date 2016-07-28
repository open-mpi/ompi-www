<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 15:42:12 2010" -->
<!-- isoreceived="20101108204212" -->
<!-- sent="Mon, 8 Nov 2010 15:42:07 -0500" -->
<!-- isosent="20101108204207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="079475AE-B2ED-421A-98CB-11B603F0860D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD6C035.6010109_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] Best way to run ftb_database_server and ftb_agent<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 15:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Jeff Squyres: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>In reply to:</strong> <a href="0529.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for jumping in late -- been swamped recently...
<br>
<p>In the MPI details section, there's 4 fields that should let you do what you want.
<br>
<p>before_any_exec -- run once before all the tests in a given Test Run
<br>
before_each_exec -- run once before every single exec (including all variants)
<br>
after_each_exec -- run after after every single exec (include all variants)
<br>
after_all_exec -- run after all tests in a given Test Run section have completed
<br>
<p>So you can use the before_any_exec / after_all_exec to launch the daemons once at the beginning and then take them down, or you can use before_each_exec / after_each_exec to launch the daemons before each test and then take them down at the end of that test.
<br>
<p>I'm assuming that the *each* variants will cause your tests to run much slower.
<br>
<p>I see that we don't have an MPI Details section on the wiki describing these parameters.  Sorry!  :-(
<br>
<p><p>On Nov 7, 2010, at 10:05 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, I still can not define &quot;mpi_details&quot; in the ini file. Is there something wrong with my ini file?
</span><br>
<span class="quotelev1">&gt;  DB&lt;32&gt; p $mpi_install-&gt;{mpi_details}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  DB&lt;33&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  DB&lt;33&gt; p Dumper($mpi_install)
</span><br>
<span class="quotelev1">&gt; $VAR1 = {
</span><br>
<span class="quotelev1">&gt;          'ftb_get_full_section_name' =&gt; 'ftb get: ftb-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;          'prepend_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'mpi_name' =&gt; 'ftb-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;          'compiler_version' =&gt; 'unknown',
</span><br>
<span class="quotelev1">&gt;          'pid' =&gt; 23511,
</span><br>
<span class="quotelev1">&gt;          'elapsed_iters' =&gt; '0.02',
</span><br>
<span class="quotelev1">&gt;          'bindir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/installs/c1aD/install/bin',
</span><br>
<span class="quotelev1">&gt;          'merge_stdout_stderr' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'elapsed_user' =&gt; '0',
</span><br>
<span class="quotelev1">&gt;          'unsetenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'cxx_bindings' =&gt; '0',
</span><br>
<span class="quotelev1">&gt;          'description' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'f90_bindings' =&gt; '0',
</span><br>
<span class="quotelev1">&gt;          'exit_status' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'libdir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/installs/c1aD/install/lib',
</span><br>
<span class="quotelev1">&gt;          'mpi_get_simple_section_name' =&gt; 'ftb-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;          'elapsed_real' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'f77_bindings' =&gt; '0',
</span><br>
<span class="quotelev1">&gt;          'source_dir' =&gt; 'ftb-0.6.2',
</span><br>
<span class="quotelev1">&gt;          'mpi_version' =&gt; '0.6.2',
</span><br>
<span class="quotelev1">&gt;          'sym_link_name' =&gt; 'ftb-nightly-trunk--platform--0.6.2',
</span><br>
<span class="quotelev1">&gt;          'c_bindings' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;          'full_section_name' =&gt; 'ftb install: platform',
</span><br>
<span class="quotelev1">&gt;          'vpath_mode' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'elapsed_children_system' =&gt; '0.02',
</span><br>
<span class="quotelev1">&gt;          'timed_out' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'refcount' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'env_modules' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'elapsed_children_user' =&gt; '0',
</span><br>
<span class="quotelev1">&gt;          'start_benchmark' =&gt; bless( [
</span><br>
<span class="quotelev1">&gt;                                        1289110689,
</span><br>
<span class="quotelev1">&gt;                                        '0.4',
</span><br>
<span class="quotelev1">&gt;                                        '0.12',
</span><br>
<span class="quotelev1">&gt;                                        '2.48',
</span><br>
<span class="quotelev1">&gt;                                        '1.8',
</span><br>
<span class="quotelev1">&gt;                                        0
</span><br>
<span class="quotelev1">&gt;                                      ], 'Benchmark' ),
</span><br>
<span class="quotelev1">&gt;          'version_dir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/installs/c1aD',
</span><br>
<span class="quotelev1">&gt;          'build_version_dir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/ftb-install/ohiy',
</span><br>
<span class="quotelev1">&gt;          'ftb_get_simple_section_name' =&gt; 'ftb-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;          'ftb_version' =&gt; '0.6.2',
</span><br>
<span class="quotelev1">&gt;          'result_message' =&gt; 'Success',
</span><br>
<span class="quotelev1">&gt;          'append_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'configure_arguments' =&gt; '&quot;CFLAGS=-g -pipe&quot; --enable-debug ',
</span><br>
<span class="quotelev1">&gt;          'installdir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/installs/c1aD/install',
</span><br>
<span class="quotelev1">&gt;          'test_result' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;          'compiler_name' =&gt; 'unknown',
</span><br>
<span class="quotelev1">&gt;          'build_dir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/ftb-install/ohiy/src/ftb-0.6.2',
</span><br>
<span class="quotelev1">&gt;          'simple_section_name' =&gt; 'platform',
</span><br>
<span class="quotelev1">&gt;          'setenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'start_timestamp' =&gt; 1289110690,
</span><br>
<span class="quotelev1">&gt;          'stop_benchmark' =&gt; bless( [
</span><br>
<span class="quotelev1">&gt;                                       1289110689,
</span><br>
<span class="quotelev1">&gt;                                       '0.4',
</span><br>
<span class="quotelev1">&gt;                                       '0.12',
</span><br>
<span class="quotelev1">&gt;                                       '2.5',
</span><br>
<span class="quotelev1">&gt;                                       '1.82',
</span><br>
<span class="quotelev1">&gt;                                       0
</span><br>
<span class="quotelev1">&gt;                                     ], 'Benchmark' )
</span><br>
<span class="quotelev1">&gt;        };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  DB&lt;34&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ini files that I used are 
</span><br>
<span class="quotelev1">&gt; general_ini_base = $HOME/iu-ftt/odin/etc/general                                                                      
</span><br>
<span class="quotelev1">&gt; general_ini = generic-subs2.config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specific_ini_base = $HOME/iu-ftt/etc/ftt2
</span><br>
<span class="quotelev1">&gt; specific_ini = BEGIN
</span><br>
<span class="quotelev1">&gt; g-br-trunk,i-32gccFT,ftb
</span><br>
<span class="quotelev1">&gt; END
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that mtt does not pickup the entries that I put in generic-sub2.config.
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;IU SUB - OMPI DETAILS COMMON FTB TEST&gt;
</span><br>
<span class="quotelev1">&gt; [FTB Details: ftb]
</span><br>
<span class="quotelev1">&gt; exec = ./run-ftb-tests.pl -test &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;IU SUB - OMPI DETAILS COMMON FTB TEST&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I manually added the line &quot;exec = ./run-ftb-tests.pl -test &amp;test_executable()&quot; into the auto-generated ini file &quot;20101107-Nightly/ini/g-br-trunk_i-32gccFT_ftb-gen&quot; and I did not put &quot;mpi_details&quot; entry to it because it does not seem to be added there and it should be defined in generic-sub2.config.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, this tweak did not work either. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any helps would be really appreciated. I attached the current ftb.ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the &quot;test run&quot; hash entry in Dumper($ini). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          'test run: ftb' =&gt; {
</span><br>
<span class="quotelev1">&gt;                                               'simple_pass:tests' =&gt; '&amp;enumerate(                     &quot;ftb_eventhandle_example&quot;,                     &quot;ftb_example_callback_unsubscribe&quot;,                     &quot;ftb_multiplecomp&quot;,           
</span><br>
<span class="quotelev1">&gt;          &quot;ftb_notify_logger&quot;,                     &quot;ftb_pingpong&quot;,                     &quot;ftb_polling_logger&quot;,                     &quot;ftb_simple_publisher&quot;,                     &quot;ftb_simple_subscriber&quot;,                     &quot;ftb_watchdog&quot;)',
</span><br>
<span class="quotelev1">&gt;                                               'np' =&gt; '&amp;env_max_procs()',
</span><br>
<span class="quotelev1">&gt;                                               'simple_fail:exclusive' =&gt; '1',
</span><br>
<span class="quotelev1">&gt;                                               'include_section' =&gt; 'Test run',
</span><br>
<span class="quotelev1">&gt;                                               'test_build' =&gt; 'ftb',
</span><br>
<span class="quotelev1">&gt;                                               'specify_module' =&gt; 'Simple',
</span><br>
<span class="quotelev1">&gt;                                               'ini_section_name' =&gt; 'ftb',
</span><br>
<span class="quotelev1">&gt;                                               'timeout' =&gt; '&amp;max(30, &amp;multiply(10, &amp;test_np()))',
</span><br>
<span class="quotelev1">&gt;                                               'merge_stdout_stderr' =&gt; '1',
</span><br>
<span class="quotelev1">&gt;                                               'exec' =&gt; './run-ftb-tests.pl -test &amp;test_executable()',
</span><br>
<span class="quotelev1">&gt;                                               'pass' =&gt; '&amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))',
</span><br>
<span class="quotelev1">&gt;                                               'simple_fail:tests' =&gt; 'environment/abort environment/final',
</span><br>
<span class="quotelev1">&gt;                                               'program_dir' =&gt; '/u/ftbteam/projects/mtt/client',
</span><br>
<span class="quotelev1">&gt;                                               'simple_fail:np' =&gt; '&amp;env_max_procs()',
</span><br>
<span class="quotelev1">&gt;                                               'program_name' =&gt; '/u/ftbteam/projects/mtt/client/ftt',
</span><br>
<span class="quotelev1">&gt;                                               'skipped' =&gt; '&amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 77))',
</span><br>
<span class="quotelev1">&gt;                                               'simple_fail:pass' =&gt; '&amp;and(&amp;cmd_wifexited(), &amp;ne(&amp;cmd_wexitstatus(), 0))',
</span><br>
<span class="quotelev1">&gt;                                               'ini_name' =&gt; '/u/ftbteam/ftt-runs/odin/20101107-Nightly/ini/g-br-trunk_i-32gccFT_ftb-gen',
</span><br>
<span class="quotelev1">&gt;                                               'stdout_save_lines' =&gt; '100',
</span><br>
<span class="quotelev1">&gt;                                               'save_stdout_on_pass' =&gt; '1'
</span><br>
<span class="quotelev1">&gt;                                             },
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the hash entry of $test_build during the &quot;Test Run&quot; phase.
</span><br>
<span class="quotelev1">&gt;  DB&lt;22&gt; p Dumper($test_build)
</span><br>
<span class="quotelev1">&gt; $VAR1 = {
</span><br>
<span class="quotelev1">&gt;          'full_section_name' =&gt; 'test build: ftb',
</span><br>
<span class="quotelev1">&gt;          'prepend_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'refcount' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'env_modules' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'ftb_get_simple_section_name' =&gt; 'ftb-nightly-trunk',
</span><br>
<span class="quotelev1">&gt;          'ftb_install_id' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'ftb_version' =&gt; '0.6.2',
</span><br>
<span class="quotelev1">&gt;          'unsetenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'result_message' =&gt; 'Success',
</span><br>
<span class="quotelev1">&gt;          'append_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'ftb_name' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'ftb_install_simple_section_name' =&gt; 'platform',
</span><br>
<span class="quotelev1">&gt;          'test_result' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;          'description' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'exit_status' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;          'simple_section_name' =&gt; 'ftb',
</span><br>
<span class="quotelev1">&gt;          'setenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;          'srcdir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101107-Nightly/pb_0/installs/c1aD/tests/ftb/components',
</span><br>
<span class="quotelev1">&gt;          'start_timestamp' =&gt; 1289110730,
</span><br>
<span class="quotelev1">&gt;          'test_get_simple_section_name' =&gt; 'ftb'
</span><br>
<span class="quotelev1">&gt;        };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sorry for all the bulky copy and pastes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/6/10 2:31 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Josh, thanks but actually I don't know how to set the base directory of the test suite in the Test Get/Build phase. Is it setup in the ini file or somewhere? and how?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/5/10 11:32 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 5, 2010, at 10:11 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh, I have another question.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How can mtt find the script to run?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exec = ./run-cr-correctness.pl -test ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can write a similar script like run-correctness.pl but if I put my script(e.g., run-ftb-tests.pl) to ftb-tests/iu/ftt/ftb/, how can I make mtt recognize this path and file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file is in the ompi-tests repo, under:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi-tests/iu/ft/correctness/run-correctness.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember that the Test Run phase will 'cd' into the base directory of the test suite that you specify in the Test Get/Build phase. So you can reference a relative path with respect to the test suite. So just put the script in with the test suite, and the Test Get phase will grab it for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; - DongInn
</span><br>
<span class="quotelev1">&gt; &lt;ftb.ini&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0530.php">Jeff Squyres: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>In reply to:</strong> <a href="0529.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
