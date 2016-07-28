<?
$subject_val = "Re: [hwloc-devel] python bindings testing help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 15:08:39 2013" -->
<!-- isoreceived="20130604190839" -->
<!-- sent="Tue, 04 Jun 2013 14:08:31 -0500" -->
<!-- isosent="20130604190831" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings testing help needed" -->
<!-- id="51AE3B2F.60908_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51ADAAE2.5040703_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] python bindings testing help needed<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 15:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3789.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/04/2013 03:52 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; (forgot to CC the list)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 04/06/2013 10:48, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are some slightly fixed tests. cuda/cudart/nvml look good.
</span><br>
<span class="quotelev2">&gt;&gt; intel-mic looks good but I couldn't test on a real machine (I used XML
</span><br>
<span class="quotelev2">&gt;&gt; instead), so the cpuset retrieving code wasn't tested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gl doesn't seem to find any GPU, but I don't know enough about Python to
</span><br>
<span class="quotelev2">&gt;&gt; debug things. If you have a debugging version, I can test it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the way, I couldn't find a &quot;libnuma&quot; python package so I used &quot;numa&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in hwloc.py instead (that's what PIP was able to install).
</span><br>
<p>I have python-libnuma at
<br>
&nbsp;git://git.fedorahosted.org/python-libnuma.git
<br>
or
<br>
&nbsp;<a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
<br>
<p>I should have included a reminder about that.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you working on OpenCL too?
</span><br>
<p>The hwloc_opencl_* functions are static function definitions in the opencl.h
<br>
file. I'd have to implement them in python instead of writing python
<br>
interfaces to the library routines, and I'd need python bindings for the
<br>
opencl libraries in order to do that.
<br>
<p>--Guy
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 03/06/2013 23:16, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting the hwloc-1.7 version of the python bindings ready to go. I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried to add GL, Intel MIC, NVML, and CUDA support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't implement much of CUDA or NVML for lack of python bindings for those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries, but I did what I could.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't test any of these for lack of hardware. If you have a Linux system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with some appropriate hardware and you can help, please either:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clone the git repo at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  git://git.fedorahosted.org/python-hwloc.git
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then checkout the 1.7-devel branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the tarball from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://people.redhat.com/streeter/python-hwloc-1.7.tar.bz2">http://people.redhat.com/streeter/python-hwloc-1.7.tar.bz2</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and unpack it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Export the PYTHONPATH environment variable to point to the top level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory, then run the various tests, like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; python tests/gl.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also cuda.py, cudart.py, intel_mic.py, nvml.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said, the CUDA and NVML tests are only partly implemented.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the other tests in the tests directory should match the output of the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test in the hwloc 1.7 source tree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know how it goes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Guy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3789.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
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
