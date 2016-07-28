<?
$subject_val = "[hwloc-devel] python bindings testing help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 17:16:22 2013" -->
<!-- isoreceived="20130603211622" -->
<!-- sent="Mon, 03 Jun 2013 16:16:17 -0500" -->
<!-- isosent="20130603211617" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] python bindings testing help needed" -->
<!-- id="51AD07A1.7080500_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] python bindings testing help needed<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 17:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3773.php">Jeff Squyres (jsquyres): "[hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Maybe reply:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the hwloc-1.7 version of the python bindings ready to go. I've
<br>
tried to add GL, Intel MIC, NVML, and CUDA support.
<br>
I can't implement much of CUDA or NVML for lack of python bindings for those
<br>
libraries, but I did what I could.
<br>
I can't test any of these for lack of hardware. If you have a Linux system
<br>
with some appropriate hardware and you can help, please either:
<br>
<p>clone the git repo at
<br>
&nbsp;git://git.fedorahosted.org/python-hwloc.git
<br>
and then checkout the 1.7-devel branch
<br>
<p>or
<br>
<p>get the tarball from
<br>
&nbsp;<a href="http://people.redhat.com/streeter/python-hwloc-1.7.tar.bz2">http://people.redhat.com/streeter/python-hwloc-1.7.tar.bz2</a>
<br>
and unpack it.
<br>
<p>Export the PYTHONPATH environment variable to point to the top level
<br>
directory, then run the various tests, like:
<br>
<p>python tests/gl.py
<br>
<p>also cuda.py, cudart.py, intel_mic.py, nvml.py
<br>
<p>As I said, the CUDA and NVML tests are only partly implemented.
<br>
All the other tests in the tests directory should match the output of the same
<br>
test in the hwloc 1.7 source tree.
<br>
<p>Let me know how it goes.
<br>
thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3773.php">Jeff Squyres (jsquyres): "[hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Maybe reply:</strong> <a href="3776.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
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
