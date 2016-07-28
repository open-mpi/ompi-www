<?
$subject_val = "Re: [MTT devel] OTF testing tool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 18:30:57 2009" -->
<!-- isoreceived="20090710223057" -->
<!-- sent="Fri, 10 Jul 2009 18:30:51 -0400" -->
<!-- isosent="20090710223051" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] OTF testing tool" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004CC97_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[MTT devel] OTF testing tool" -->
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
<strong>Subject:</strong> Re: [MTT devel] OTF testing tool<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 18:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/08/0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Ethan Mallove: "Re: [MTT devel] OTF testing tool"</a>
<li><strong>Maybe in reply to:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds yummy - andreas can you help out with how to invoke the otf tool?
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: mtt-devel-bounces_at_[hidden] &lt;mtt-devel-bounces_at_[hidden]&gt;
<br>
To: Development list for the MPI Testing Tool &lt;mtt-devel_at_[hidden]&gt;
<br>
Cc: Andreas Kn?pfer &lt;andreas.knuepfer_at_[hidden]&gt;
<br>
Sent: Fri Jul 10 14:27:53 2009
<br>
Subject: Re: [MTT devel] OTF testing tool
<br>

<br>
On Fri, Jul/10/2009 09:51:35AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ethan - have you seen this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/1967">https://svn.open-mpi.org/trac/ompi/ticket/1967</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any cycles to try to integrate it into MTT?  I was slammed this 
</span><br>
<span class="quotelev1">&gt; past week and am out on vacation last week.  But I would very much like to 
</span><br>
<span class="quotelev1">&gt; get this into regular MTT testing...
</span><br>

<br>
I think there's a simpler way to do this without having to create
<br>
another Analyze/Correctness_VampirTrace.pm module. E.g., I have some
<br>
vampirtrace stuff in my INI that look like this:
<br>

<br>
&nbsp;&nbsp;[MPI details: Open MPI]
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;exec:vampir_trace = &amp;test_executable() --host &amp;env_hosts() --prefix &amp;test_prefix() &amp;test_argv()
<br>
&nbsp;&nbsp;...
<br>

<br>
&nbsp;&nbsp;[Test get: trivial]
<br>
&nbsp;&nbsp;module = Trivial
<br>

<br>
&nbsp;&nbsp;[Test build: trivial-VampirTrace]
<br>
&nbsp;&nbsp;test_get = trivial
<br>
&nbsp;&nbsp;module = Trivial
<br>

<br>
&nbsp;&nbsp;# Use the VampirTrace wrapper compilers, instead of 
<br>
&nbsp;&nbsp;# the plain vanilla MPI wrappers
<br>
&nbsp;&nbsp;trivial_tests_mpicc  = mpicc-vt
<br>
&nbsp;&nbsp;trivial_tests_mpicxx = mpicxx-vt
<br>
&nbsp;&nbsp;trivial_tests_mpif77 = mpif77-vt
<br>
&nbsp;&nbsp;trivial_tests_mpif90 = mpif90-vt
<br>

<br>
&nbsp;&nbsp;[Test run: trivial-VampirTrace]
<br>
&nbsp;&nbsp;test_build = trivial-vampirtrace
<br>
&nbsp;&nbsp;pass = &amp;and(&amp;eq(&amp;test_wexitstatus(), 0), &amp;vampir_trace_files_exist())
<br>

<br>
&nbsp;&nbsp;module = Simple
<br>
&nbsp;&nbsp;specify_module = Simple
<br>
&nbsp;&nbsp;simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
&nbsp;&nbsp;simple_only_if_exec_exists = 1
<br>
&nbsp;&nbsp;mpi_details_exec = vampir_trace
<br>

<br>
The above just gets and builds Trivial tests. Then instead of running
<br>
them via &quot;mpirun&quot;, MTT executes them directly to create the trace
<br>
files:
<br>

<br>
&nbsp;&nbsp;$ c_hello --host foo,bar --prefix /ompi/installation &lt;argv&gt;
<br>

<br>
If files with the .events.z or .def.z extensions have been created,
<br>
then &amp;vampir_trace_files_exist() evaluates to true.
<br>

<br>
Why don't we create another funclet to run &quot;otfinfo&quot; on the trace
<br>
files? I can create it, I just need to know what &quot;otfinfo&quot; does to
<br>
confirm that the trace files are good.
<br>

<br>
-Ethan
<br>

<br>

<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
_______________________________________________
<br>
mtt-devel mailing list
<br>
mtt-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/08/0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Ethan Mallove: "Re: [MTT devel] OTF testing tool"</a>
<li><strong>Maybe in reply to:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
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
