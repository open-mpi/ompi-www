<?
$subject_val = "Re: [MTT users] Installation on MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 22 02:38:51 2013" -->
<!-- isoreceived="20131222073851" -->
<!-- sent="Sun, 22 Dec 2013 15:38:50 +0800" -->
<!-- isosent="20131222073850" -->
<!-- name="caohaijun" -->
<!-- email="amao.chj_at_[hidden]" -->
<!-- subject="Re: [MTT users] Installation on MTT" -->
<!-- id="CAJZ1kLEjBeej_LeoNVeViJaNvva0Apgz41jzHktEHY8HARjL3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="11B48532-158F-4583-A473-B2FAC4A073FD_at_cisco.com" -->
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
<strong>From:</strong> caohaijun (<em>amao.chj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-22 02:38:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Previous message:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Jeff Squyres (jsquyres): "Re: [MTT users] Installation on MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now I have a INI file as the following attached, and with which I can
<br>
successfully run the first several phases, but the TEST RUN can not be
<br>
passed and no error reported.
<br>

<br>
I thinks it might be because the executables for tests can not be found.
<br>

<br>
Would you please take a look on my INI file for what's wrong in it?
<br>

<br>
Best,
<br>

<br>
Jimmy
<br>

<br>
#======================================================================
<br>
# Generic OMPI core performance testing template configuration
<br>
#======================================================================
<br>
[MTT]
<br>
description = [testbake]
<br>
trial = 1
<br>
min_disk_free = 5000
<br>

<br>
# Put other values here as relevant to your environment.
<br>
hostfile = /root/hostfile
<br>
max_np = 8
<br>
textwrap = 76
<br>
#drain_timeout = 5
<br>
scratch = /usr/local/hamster/mtt-build
<br>
logfile =/usr/local/hamster/m/log.file
<br>

<br>
#======================================================================
<br>
# MPI details
<br>
#======================================================================
<br>
[MPI Details: OMPI]
<br>

<br>
exec    = &amp;test_prefix_pretty()/bin/mpirun @hosts@ -np &amp;test_np()
<br>
@mca@&amp;test_executable_abspath() &amp;test_argv()
<br>
hosts  = &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; .
<br>
&amp;hostfile(),&amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
<br>

<br>
#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
[MPI get: OMPI]
<br>
mpi_details = OMPI
<br>
module = Download
<br>
download_url = <a href="http://hdsh020.lss.emc.com/hamster/mtt/openmpi-1.7.2.tar.gz">http://hdsh020.lss.emc.com/hamster/mtt/openmpi-1.7.2.tar.gz</a>
<br>
download_version = 1.7.2
<br>

<br>
#======================================================================
<br>
# Install MPI phase
<br>
#======================================================================
<br>
[MPI install: OMPI/GNU-standard]
<br>
mpi_get = OMPI
<br>
mpi_details = OMPI
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>

<br>
module = OMPI
<br>
ompi_make_all_arguments = -j 2
<br>
ompi_compiler_name = gnu
<br>
ompi_compiler_version = &amp;get_gcc_version()
<br>
ompi_configure_arguments = &lt;&lt;EOT
<br>
--with-devel-headers -disable-heterogeneous
<br>
EOT
<br>
ompi_autogen = 0
<br>

<br>
#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
[Test get: testsuite]
<br>
module = Download
<br>
download_url =
<br>
<a href="http://hdsh020.lss.emc.com/hamster/mtt/osu-micro-benchmarks-4.2.tar.gz">http://hdsh020.lss.emc.com/hamster/mtt/osu-micro-benchmarks-4.2.tar.gz</a>
<br>

<br>
#======================================================================
<br>
# Test build phase
<br>
#======================================================================
<br>
[Test build: testsuite]
<br>
test_get = testsuite
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 1000
<br>

<br>
module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make CC=&amp;test_prefix_pretty()/bin/mpicc
<br>
EOT
<br>

<br>
#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
<br>
[Test run]
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
#timeout = 5:00
<br>
timeout = &amp;max(10, &amp;multiply(50, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
stderr_save_lines = 100
<br>

<br>
[Test run: testsuite]
<br>
include_section = Test run
<br>
test_build = testsuite
<br>

<br>
specify_module = Simple
<br>
#simple_pass:tests = osu-micro-benchmarks-4.2/mpi/pt2pt/osu_bw
<br>
#simple_pass:tests = osu_bw osu_latency osu_bibw
<br>
simple_pass:tests = &amp;find_executables(&quot;mpi/pt2pt&quot;)
<br>
#np = &amp;env_max_hosts()
<br>
np = 2
<br>

<br>

<br>
#======================================================================
<br>
# Reporter
<br>
#======================================================================
<br>
[Reporter: text file backup]
<br>
module = TextFile
<br>

<br>
textfile_filename = report-$phase-$section-$mpi_name-$mpi_version.txt
<br>

<br>
# User-defined report headers/footers
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

<br>
textfile_summary_footer =
<br>
textfile_detail_header  = Debug Report
<br>
textfile_detail_footer  =
<br>
textfile_textwrap = 78
<br>

<br>
# Send digested summary of mtt execution by email
<br>
email_to = jcao_at_[hidden]
<br>
email_subject = OMPI test has completed, status: $overall_mtt_status
<br>
email_detailed_report = 1
<br>
email_footer = &lt;&lt;EOT
<br>
Test Scratch Directory is &amp;scratch_root()
<br>
EOT
<br>

<br>

<br>
On Wed, Dec 18, 2013 at 9:58 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>

<br>
<span class="quotelev1">&gt; (adding the mtt-users mailing list; see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt.php">http://www.open-mpi.org/community/lists/mtt.php</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use MTT, you do not need to be a core member of Open MPI.  The wiki
</span><br>
<span class="quotelev1">&gt; page you listed simply describes how core Open MPI members use MTT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to use MTT, it is easiest to first setup the client to do some
</span><br>
<span class="quotelev1">&gt; simple test and output to a text file (vs. submitting results to a server).
</span><br>
<span class="quotelev1">&gt;  Get that working first.  Then expand the client to run more and more tests
</span><br>
<span class="quotelev1">&gt; (while still outputting results to text files).  You can run any tests you
</span><br>
<span class="quotelev1">&gt; want -- there's nothing special about the MPI tests that we use internally
</span><br>
<span class="quotelev1">&gt; to the Open MPI project.  You just need to be able to describe them in the
</span><br>
<span class="quotelev1">&gt; MTT client INI file, and specify conditions for passing/failing/skipping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you have all the tests working in the way that you want, you can
</span><br>
<span class="quotelev1">&gt; choose to install an MTT database server if you wish.  This will give you
</span><br>
<span class="quotelev1">&gt; web pages like we have at <a href="http://mtt.open-mpi.org/.">http://mtt.open-mpi.org/.</a>
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
<span class="quotelev2">&gt; &gt; From the webpage (<a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>),
</span><br>
<span class="quotelev1">&gt; it seems only on how to install MTT client, it also needs Open MPI core
</span><br>
<span class="quotelev1">&gt; membership.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there some guide on how to install MTT on my cluster (both server and
</span><br>
<span class="quotelev1">&gt; client)?
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>

<br>

<br>
-- 
<br>
&nbsp;&nbsp;&nbsp;Best Regards!
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
<br>
-----------------------------------------------------------
<br>
Tel:   +86-188 1787 9959
<br>
Email:amao.chj_at_[hidden]
<br>
-----------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Previous message:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Jeff Squyres (jsquyres): "Re: [MTT users] Installation on MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0784.php">Ralph Castain: "Re: [MTT users] Installation on MTT"</a>
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
