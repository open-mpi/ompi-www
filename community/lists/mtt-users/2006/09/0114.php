<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 28 17:35:34 2006" -->
<!-- isoreceived="20060928213534" -->
<!-- sent="Thu, 28 Sep 2006 17:35:22 -0400" -->
<!-- isosent="20060928213522" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Post run result submission" -->
<!-- id="58B9C631-846A-4636-84C3-2AD62DC39FED_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060928212157.GD53413_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-28 17:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0113.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2006, at 5:21 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Sep/28/2006 03:46:38PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So I have a section that looks like:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I prefer this:
</span><br>
<p>Will that try to contact the DB via the url and dump the file? Is  
<br>
there a way to keep it from trying to contact the server?
<br>
<p>I'm afraid that we will wait a long time for the server to come back  
<br>
to us and not error out (that's how wget behaves on the remote nodes).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev2">&gt;&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_username = username
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_password = password
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev2">&gt;&gt; # cluster.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_platform = TESTING BigRed at IU (mx,sm,self)
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_debug_filename = &amp;shell(&quot;echo mttdatabase_debug.bigred&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or should it just be:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_debug_filename = &amp;shell(&quot;echo mttdatabase_debug.bigred&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That reminds me, I forgot to have a -u and -p options to poster.pl
</span><br>
<span class="quotelev1">&gt; (username and password). I added it to the wiki.
</span><br>
<p>Awesome thanks.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2006, at 3:38 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, you're using the ''other'' .txt output file (from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Reporter: write to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; text file] section).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the &quot;Reporter: IU&quot; section of the ini, there's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug_filename
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param. Mine is set like so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug_filename = &amp;shell(&quot;echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.`hostname`&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So in my mtt workspace I have a bunch of these after an MTT run,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g.,:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.burl-ct-v440-2.5.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.burl-ct-v440-2.6.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.burl-ct-v440-2.7.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.burl-ct-v440-2.8.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug.burl-ct-v440-2.9.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poster.pl expects one of these files. (The difference between the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two is a little subtle. The mttdatabase_debug files contain a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ready to be eval'd perl variable, which poster.pl can use.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep/28/2006 02:50:43PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Finally getting a chance to try this out.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to use the script as perscribed on the webpage and am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting some errors apparently from the 'eval $buf;' on line 39:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiteam_at_BigRed:&gt; ./local/bin/post-mtt-results.pl -d -f bigred-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test_Build-trivial-ompi-nightly-trunk-1.3a1r11860.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 3, near  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.6.5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Do you need to predeclare Linux?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 6, near  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;28 14&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  14?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 6, near &quot;30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2006&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  2006?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 7, near  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submit_test_timestamp&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before submit_test_timestamp?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 7, near  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;28 14&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  14?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 7, near &quot;40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2006&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  2006?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 8, near  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submitting_local_username&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before submitting_local_username?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 11, near
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;3.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_get_section_name&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before mpi_get_section_name?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 14, near
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;1.3a1r11860&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before a1r11860?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 16, near &quot;6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perfbase_xml&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before perfbase_xml?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 19, near &quot;28
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  14?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number found where operator expected at (eval 8) line 19, near &quot;37
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2006&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before  2006?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 20, near
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; success&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before success?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 21, near &quot;1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_build_section_name&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before test_build_section_name?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bareword found where operator expected at (eval 8) line 22, near &quot;3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seconds&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (Missing operator before seconds?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; posting the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname: s9c4b2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; os_name: Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; os_version: Linux 2.6.5-7.276-pseries64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; platform_hardware: ppc64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; platform_type: linux-sles9-ppc64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_run_timestamp: Thu Sep 28 14:56:30 2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submit_test_timestamp: Thu Sep 28 14:56:40 2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submitting_local_username: mpiteam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_name: gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_version: 3.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_get_section_name: ompi-nightly-trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_install_section_name: bigred gcc warnings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_name: ompi-nightly-trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_version: 1.3a1r11860
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt_version_minor: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perfbase_xml: inp_test_build.xml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phase: Test Build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result_message: Success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_test_timestamp: Thu Sep 28 14:56:37 2006
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; success: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_build_section_name: trivial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_duration_interval: 3 seconds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to <a href="http://www.open-mpi.org/mtt/submit/index.php">http://www.open-mpi.org/mtt/submit/index.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Need a field name at (eval 10) line 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 26, 2006, at 6:26 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've posted the helper script here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper">http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me know how it works.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Sep/26/2006 04:06:01PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the moment, that might be sufficient.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What HLRS does is open ssh tunnels back to the head node and then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; http put's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; through those back to the IU database.  Icky, but it works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The problem is that there are some other higher-priority items
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that we need
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to get done in MTT (performane measurements, for example) that,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since there
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are [icky] workarounds for http puts, we put the whole
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;disconnected
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scenario&quot; stuff at a lower priority.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 9/26/06 3:51 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have an unpretty solution that maybe could serve as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stopgap between now and when we implement the &quot;disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; scenarios&quot; feature.  I have a very simple and easy-to-use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; perl script that just HTTP POSTs a debug file (what *would*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have gone to the database). E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ./poster.pl -f 'mttdatabase_debug*.txt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Where mttdatabase_debug would be what you supply to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mttdatabase_debug_filename ini param in the &quot;IU Database&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; section.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think this would fill in your missing * step below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does that sound okay, Jeff?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Sep/26/2006 03:25:08PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So the login node is the only one that has a window to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; outside
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; world. I can't access the outside world from within an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So my script does:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    1) Get MPI Tarballs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - 1 Compute node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    0) Allocate a compute node to compile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    1) Build/Install MPI builds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    2) Deallocate compute node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    1) Get MPI Test sources
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - N Compute Nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    0) Allocate N compute Nodes to run the tests on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    1) Build/Install Tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    2) Run the tests...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    0) Check to make sure we are all done (scheduler didn't kill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       job, etc.).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    1) Report results to MTT *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * This is what I am missing currently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I currently have the &quot;Reporter: IU Database&quot; section commented
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; out so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that once the tests finish they don't try to post the database,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; they can't see the outside world.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 26, 2006, at 3:17 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Sep/26/2006 02:01:41PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm setting up MTT on BigRed at IU, and due to some  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; visibility
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; requirements of the compute nodes I segment the MTT  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; operations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Currently I have a perl script that does all the svn and wget
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; interactions from the login node, then compiles and runs  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute nodes. This all seems to work fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I am wondering how to get the textfile results that were
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; generated back to the MTT database once the run has finished.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you run the &quot;MPI Install&quot;, &quot;Test build&quot;, and &quot;Test run&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sections from the same machine (call it the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Install-Build-Run&quot; node), I would think you could then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; additionaly run the &quot;Reporter: IU Database&quot; section. Or can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you not do the HTTP POST from Install-Build-Run node?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know HLRS deals with this situation, is there a supported
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; way of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doing this yet or is it a future work item still?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Currently I have a method to send a summary email to our team
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; after
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the results are generated, so this isn't a show stopper for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IU or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anything, just something so we can share our results with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rest of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the team.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0113.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
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
