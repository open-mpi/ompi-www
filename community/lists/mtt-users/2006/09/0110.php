<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 28 14:50:53 2006" -->
<!-- isoreceived="20060928185053" -->
<!-- sent="Thu, 28 Sep 2006 14:50:43 -0400" -->
<!-- isosent="20060928185043" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Post run result submission" -->
<!-- id="91F4F340-7E99-4E86-BA84-7900EFEF3C35_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060926222639.GD12177_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-09-28 14:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally getting a chance to try this out.
<br>
<p>I am trying to use the script as perscribed on the webpage and am  
<br>
getting some errors apparently from the 'eval $buf;' on line 39:
<br>
mmmmmmmmmmmmmmmmmmmmm
<br>
mpiteam_at_BigRed:&gt; ./local/bin/post-mtt-results.pl -d -f bigred- 
<br>
Test_Build-trivial-ompi-nightly-trunk-1.3a1r11860.txt
<br>
Number found where operator expected at (eval 8) line 3, near &quot;Linux  
<br>
2.6.5&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Do you need to predeclare Linux?)
<br>
Number found where operator expected at (eval 8) line 6, near &quot;28 14&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  14?)
<br>
Number found where operator expected at (eval 8) line 6, near &quot;30 2006&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  2006?)
<br>
Bareword found where operator expected at (eval 8) line 7, near &quot;2006
<br>
submit_test_timestamp&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before submit_test_timestamp?)
<br>
Number found where operator expected at (eval 8) line 7, near &quot;28 14&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  14?)
<br>
Number found where operator expected at (eval 8) line 7, near &quot;40 2006&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  2006?)
<br>
Bareword found where operator expected at (eval 8) line 8, near &quot;2006
<br>
submitting_local_username&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before submitting_local_username?)
<br>
Bareword found where operator expected at (eval 8) line 11, near &quot;3.3.3
<br>
mpi_get_section_name&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before mpi_get_section_name?)
<br>
Bareword found where operator expected at (eval 8) line 14, near  
<br>
&quot;1.3a1r11860&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before a1r11860?)
<br>
Bareword found where operator expected at (eval 8) line 16, near &quot;6
<br>
perfbase_xml&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before perfbase_xml?)
<br>
Number found where operator expected at (eval 8) line 19, near &quot;28 14&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  14?)
<br>
Number found where operator expected at (eval 8) line 19, near &quot;37 2006&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before  2006?)
<br>
Bareword found where operator expected at (eval 8) line 20, near &quot;2006
<br>
success&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before success?)
<br>
Bareword found where operator expected at (eval 8) line 21, near &quot;1
<br>
test_build_section_name&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before test_build_section_name?)
<br>
Bareword found where operator expected at (eval 8) line 22, near &quot;3  
<br>
seconds&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Missing operator before seconds?)
<br>
posting the following:
<br>
hostname: s9c4b2
<br>
os_name: Linux
<br>
os_version: Linux 2.6.5-7.276-pseries64
<br>
platform_hardware: ppc64
<br>
platform_type: linux-sles9-ppc64
<br>
start_run_timestamp: Thu Sep 28 14:56:30 2006
<br>
submit_test_timestamp: Thu Sep 28 14:56:40 2006
<br>
submitting_local_username: mpiteam
<br>
compiler_name: gnu
<br>
compiler_version: 3.3.3
<br>
mpi_get_section_name: ompi-nightly-trunk
<br>
mpi_install_section_name: bigred gcc warnings
<br>
mpi_name: ompi-nightly-trunk
<br>
mpi_version: 1.3a1r11860
<br>
mtt_version_minor: 6
<br>
perfbase_xml: inp_test_build.xml
<br>
phase: Test Build
<br>
result_message: Success
<br>
start_test_timestamp: Thu Sep 28 14:56:37 2006
<br>
success: 1
<br>
test_build_section_name: trivial
<br>
test_duration_interval: 3 seconds
<br>
to <a href="http://www.open-mpi.org/mtt/submit/index.php">http://www.open-mpi.org/mtt/submit/index.php</a>
<br>
Need a field name at (eval 10) line 1
<br>
mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
<p>On Sep 26, 2006, at 6:26 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I've posted the helper script here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper">http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know how it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep/26/2006 04:06:01PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For the moment, that might be sufficient.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What HLRS does is open ssh tunnels back to the head node and then  
</span><br>
<span class="quotelev2">&gt;&gt; http put's
</span><br>
<span class="quotelev2">&gt;&gt; through those back to the IU database.  Icky, but it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that there are some other higher-priority items  
</span><br>
<span class="quotelev2">&gt;&gt; that we need
</span><br>
<span class="quotelev2">&gt;&gt; to get done in MTT (performane measurements, for example) that,  
</span><br>
<span class="quotelev2">&gt;&gt; since there
</span><br>
<span class="quotelev2">&gt;&gt; are [icky] workarounds for http puts, we put the whole &quot;disconnected
</span><br>
<span class="quotelev2">&gt;&gt; scenario&quot; stuff at a lower priority.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/26/06 3:51 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an unpretty solution that maybe could serve as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stopgap between now and when we implement the &quot;disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenarios&quot; feature.  I have a very simple and easy-to-use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perl script that just HTTP POSTs a debug file (what *would*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have gone to the database). E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./poster.pl -f 'mttdatabase_debug*.txt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Where mttdatabase_debug would be what you supply to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug_filename ini param in the &quot;IU Database&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; section.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this would fill in your missing * step below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does that sound okay, Jeff?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Sep/26/2006 03:25:08PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the login node is the only one that has a window to the outside
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; world. I can't access the outside world from within an allocation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So my script does:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1) Get MPI Tarballs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - 1 Compute node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     0) Allocate a compute node to compile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1) Build/Install MPI builds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2) Deallocate compute node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1) Get MPI Test sources
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - N Compute Nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     0) Allocate N compute Nodes to run the tests on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1) Build/Install Tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2) Run the tests...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Login Node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     0) Check to make sure we are all done (scheduler didn't kill  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        job, etc.).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1) Report results to MTT *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * This is what I am missing currently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I currently have the &quot;Reporter: IU Database&quot; section commented  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that once the tests finish they don't try to post the database,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they can't see the outside world.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 26, 2006, at 3:17 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Sep/26/2006 02:01:41PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm setting up MTT on BigRed at IU, and due to some visibility
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requirements of the compute nodes I segment the MTT operations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Currently I have a perl script that does all the svn and wget
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; interactions from the login node, then compiles and runs on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute nodes. This all seems to work fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now I am wondering how to get the textfile results that were
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; generated back to the MTT database once the run has finished.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you run the &quot;MPI Install&quot;, &quot;Test build&quot;, and &quot;Test run&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sections from the same machine (call it the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Install-Build-Run&quot; node), I would think you could then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additionaly run the &quot;Reporter: IU Database&quot; section. Or can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you not do the HTTP POST from Install-Build-Run node?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I know HLRS deals with this situation, is there a supported  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; way of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doing this yet or is it a future work item still?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Currently I have a method to send a summary email to our team  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; after
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the results are generated, so this isn't a show stopper for IU or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anything, just something so we can share our results with the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rest of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the team.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
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
