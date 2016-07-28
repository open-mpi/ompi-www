<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 14:18:45 2008" -->
<!-- isoreceived="20081125191845" -->
<!-- sent="Tue, 25 Nov 2008 20:18:39 +0100" -->
<!-- isosent="20081125191839" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="492C4F8F.6030200_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081120175302.GA20093_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-25 14:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4957.php">Brad Benton: "Re: [OMPI devel] IOF round 2"</a>
<li><strong>In reply to:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralf,
<br>
<p>Sorry for replying late.
<br>
<p><span class="quotelev1">&gt; what keeps you from using the autotools-based build system
</span><br>
<span class="quotelev1">&gt; with MSVC?  All you should need is a wrapper like cccl.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I didn't know this 'cccl' before, but I did give a try last weekend with 
<br>
Cygwin.
<br>
<p>Unfortunately, I couldn't make it work for Open MPI (latest trunk). I 
<br>
think cccl might work for small projects, but for large and complicated 
<br>
project, it couldn't work easily. By simply replacing compiler name and 
<br>
flags cannot make it go trough compilation and build phase, something 
<br>
has to be done manually with some other scripts. Maybe there's some good 
<br>
way to cope it with Open MPI, if anyone has succeeded with that, please 
<br>
let me know about it, it's very interesting for me anyway. :-)
<br>
<p>On the other hand, there are more advantages to use CMake on Windows, 
<br>
e.g. easy to use with a GUI, better integration with Visual Studio IDE, 
<br>
automatically produce installer(tarballs) with CPACK, make tests with 
<br>
CTEST, etc.
<br>
<p><p><p>Regards,
<br>
Shiqing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4957.php">Brad Benton: "Re: [OMPI devel] IOF round 2"</a>
<li><strong>In reply to:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4959.php">George Bosilca: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
