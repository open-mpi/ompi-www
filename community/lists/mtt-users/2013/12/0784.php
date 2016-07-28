<?
$subject_val = "Re: [MTT users] Installation on MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 22 10:33:46 2013" -->
<!-- isoreceived="20131222153346" -->
<!-- sent="Sun, 22 Dec 2013 07:33:08 -0800" -->
<!-- isosent="20131222153308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] Installation on MTT" -->
<!-- id="74F998BB-9E07-4E02-8A5E-45488DEA9818_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJZ1kLEjBeej_LeoNVeViJaNvva0Apgz41jzHktEHY8HARjL3Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Installation on MTT<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-22 10:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/01/0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Previous message:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>In reply to:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see anything obviously wrong - the text output should tell you how many tests it found. Does it say that it didn't find anything?
<br>
<p><p>On Dec 21, 2013, at 11:38 PM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Now I have a INI file as the following attached, and with which I can successfully run the first several phases, but the TEST RUN can not be passed and no error reported. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thinks it might be because the executables for tests can not be found. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you please take a look on my INI file for what's wrong in it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jimmy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; description = [testbake]
</span><br>
<span class="quotelev1">&gt; trial = 1
</span><br>
<span class="quotelev1">&gt; min_disk_free = 5000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt; hostfile = /root/hostfile
</span><br>
<span class="quotelev1">&gt; max_np = 8
</span><br>
<span class="quotelev1">&gt; textwrap = 76
</span><br>
<span class="quotelev1">&gt; #drain_timeout = 5
</span><br>
<span class="quotelev1">&gt; scratch = /usr/local/hamster/mtt-build
</span><br>
<span class="quotelev1">&gt; logfile =/usr/local/hamster/m/log.file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI details
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec    = &amp;test_prefix_pretty()/bin/mpirun @hosts@ -np &amp;test_np() @mca@ &amp;test_executable_abspath() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; hosts 	= &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; . &amp;hostfile(),&amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [MPI get: OMPI]
</span><br>
<span class="quotelev1">&gt; mpi_details = OMPI
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://hdsh020.lss.emc.com/hamster/mtt/openmpi-1.7.2.tar.gz">http://hdsh020.lss.emc.com/hamster/mtt/openmpi-1.7.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; download_version = 1.7.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [MPI install: OMPI/GNU-standard]
</span><br>
<span class="quotelev1">&gt; mpi_get = OMPI
</span><br>
<span class="quotelev1">&gt; mpi_details = OMPI
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt; ompi_make_all_arguments = -j 2
</span><br>
<span class="quotelev1">&gt; ompi_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; ompi_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; ompi_configure_arguments = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; --with-devel-headers -disable-heterogeneous 
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; ompi_autogen = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [Test get: testsuite]
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://hdsh020.lss.emc.com/hamster/mtt/osu-micro-benchmarks-4.2.tar.gz">http://hdsh020.lss.emc.com/hamster/mtt/osu-micro-benchmarks-4.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [Test build: testsuite]
</span><br>
<span class="quotelev1">&gt; test_get = testsuite
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make CC=&amp;test_prefix_pretty()/bin/mpicc
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [Test run]
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; #timeout = 5:00
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(10, &amp;multiply(50, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = 100 
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: testsuite]
</span><br>
<span class="quotelev1">&gt; include_section = Test run
</span><br>
<span class="quotelev1">&gt; test_build = testsuite
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; #simple_pass:tests = osu-micro-benchmarks-4.2/mpi/pt2pt/osu_bw 
</span><br>
<span class="quotelev1">&gt; #simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = &amp;find_executables(&quot;mpi/pt2pt&quot;)
</span><br>
<span class="quotelev1">&gt; #np = &amp;env_max_hosts()
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Reporter 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_filename = report-$phase-$section-$mpi_name-$mpi_version.txt
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
<span class="quotelev1">&gt; textfile_detail_header  = Debug Report
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer  =
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Send digested summary of mtt execution by email
</span><br>
<span class="quotelev1">&gt; email_to = jcao_at_[hidden]
</span><br>
<span class="quotelev1">&gt; email_subject = OMPI test has completed, status: $overall_mtt_status
</span><br>
<span class="quotelev1">&gt; email_detailed_report = 1
</span><br>
<span class="quotelev1">&gt; email_footer = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; Test Scratch Directory is &amp;scratch_root()
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 18, 2013 at 9:58 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; (adding the mtt-users mailing list; see <a href="http://www.open-mpi.org/community/lists/mtt.php">http://www.open-mpi.org/community/lists/mtt.php</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To use MTT, you do not need to be a core member of Open MPI.  The wiki page you listed simply describes how core Open MPI members use MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to use MTT, it is easiest to first setup the client to do some simple test and output to a text file (vs. submitting results to a server).  Get that working first.  Then expand the client to run more and more tests (while still outputting results to text files).  You can run any tests you want -- there's nothing special about the MPI tests that we use internally to the Open MPI project.  You just need to be able to describe them in the MTT client INI file, and specify conditions for passing/failing/skipping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you have all the tests working in the way that you want, you can choose to install an MTT database server if you wish.  This will give you web pages like we have at <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2013, at 11:07 PM, jimmy cao &lt;jcao_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to deploy MTT in my cluster.
</span><br>
<span class="quotelev2">&gt; &gt; From the webpage (<a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>), it seems only on how to install MTT client, it also needs Open MPI core membership.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there some guide on how to install MTT on my cluster (both server and client)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Jimmy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Best Regards!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev1">&gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/01/0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Previous message:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>In reply to:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
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
