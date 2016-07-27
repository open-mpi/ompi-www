<?
$subject_val = "Re: [MTT devel] OTF testing tool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 14:28:00 2009" -->
<!-- isoreceived="20090710182800" -->
<!-- sent="Fri, 10 Jul 2009 14:27:53 -0400" -->
<!-- isosent="20090710182753" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] OTF testing tool" -->
<!-- id="20090710182753.GA34886_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21F070FD-1E95-4497-99B7-684CE161796A_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 14:27:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
<li><strong>Previous message:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<li><strong>In reply to:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul/10/2009 09:51:35AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ethan - have you seen this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/1967">https://svn.open-mpi.org/trac/ompi/ticket/1967</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any cycles to try to integrate it into MTT?  I was slammed this 
</span><br>
<span class="quotelev1">&gt; past week and am out on vacation last week.  But I would very much like to 
</span><br>
<span class="quotelev1">&gt; get this into regular MTT testing...
</span><br>
<p>I think there's a simpler way to do this without having to create
<br>
another Analyze/Correctness_VampirTrace.pm module. E.g., I have some
<br>
vampirtrace stuff in my INI that look like this:
<br>
<p>&nbsp;&nbsp;[MPI details: Open MPI]
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;exec:vampir_trace = &amp;test_executable() --host &amp;env_hosts() --prefix &amp;test_prefix() &amp;test_argv()
<br>
&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;[Test get: trivial]
<br>
&nbsp;&nbsp;module = Trivial
<br>
<p>&nbsp;&nbsp;[Test build: trivial-VampirTrace]
<br>
&nbsp;&nbsp;test_get = trivial
<br>
&nbsp;&nbsp;module = Trivial
<br>
<p>&nbsp;&nbsp;# Use the VampirTrace wrapper compilers, instead of 
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
<p>&nbsp;&nbsp;[Test run: trivial-VampirTrace]
<br>
&nbsp;&nbsp;test_build = trivial-vampirtrace
<br>
&nbsp;&nbsp;pass = &amp;and(&amp;eq(&amp;test_wexitstatus(), 0), &amp;vampir_trace_files_exist())
<br>
<p>&nbsp;&nbsp;module = Simple
<br>
&nbsp;&nbsp;specify_module = Simple
<br>
&nbsp;&nbsp;simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
&nbsp;&nbsp;simple_only_if_exec_exists = 1
<br>
&nbsp;&nbsp;mpi_details_exec = vampir_trace
<br>
<p>The above just gets and builds Trivial tests. Then instead of running
<br>
them via &quot;mpirun&quot;, MTT executes them directly to create the trace
<br>
files:
<br>
<p>&nbsp;&nbsp;$ c_hello --host foo,bar --prefix /ompi/installation &lt;argv&gt;
<br>
<p>If files with the .events.z or .def.z extensions have been created,
<br>
then &amp;vampir_trace_files_exist() evaluates to true.
<br>
<p>Why don't we create another funclet to run &quot;otfinfo&quot; on the trace
<br>
files? I can create it, I just need to know what &quot;otfinfo&quot; does to
<br>
confirm that the trace files are good.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
<li><strong>Previous message:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<li><strong>In reply to:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
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
