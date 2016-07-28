<?
$subject_val = "[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 14:47:33 2008" -->
<!-- isoreceived="20080505184733" -->
<!-- sent="Mon, 5 May 2008 14:47:23 -0400" -->
<!-- isosent="20080505184723" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue" -->
<!-- id="20080505184723.GP51303_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 14:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/04/0520.php">Tim Mattox: "Re: [MTT users] New &quot;split graphs&quot; feature in MTT Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>Reply:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Line 386 of MTT/Test/Run.pm sets LD_LIBRARY_PATH. This
<br>
appears to have masked a problem in my wrapper compiler
<br>
(missing -R/foo/lib flags).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ($mpi_install-&gt;{libdir}) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (exists($ENV{LD_LIBRARY_PATH})) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH} = &quot;$mpi_install-&gt;{libdir}:&quot; . 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH} = $mpi_install-&gt;{libdir};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Is the rationale for setting LD_LIBRARY_PATH for the
<br>
mpirun's the same as the rationale described below (from
<br>
GNU_Install.pm)?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;my %ENV_SAVE = %ENV;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ENV{TMPDIR} = &quot;$config-&gt;{installdir}/tmp&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mkdir($ENV{TMPDIR}, 0777);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# The intent here is just to ensure that the LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# in the environment does not point to shared libraries
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# outside of MTT's scope that would interfere with &quot;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# check&quot; (e.g., another libmpi.so outside of MTT).  Just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# prepend our own $libdir to LD_LIBRARY_PATH and hope that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# that's Good Enough.  :-)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (exists($ENV{LD_LIBRARY_PATH})) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}:$ENV{LD_LIBRARY_PATH}&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ENV{LD_LIBRARY_PATH} = &quot;$config-&gt;{libdir}&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>If so, could we make MTT a little smarter. E.g., actually
<br>
check for a libmpi.so (and/or other possibly conflicting
<br>
DSOs), and if there's no conflict then skip the
<br>
LD_LIBRARY_PATH setting. (This way a wrapper compiler issue
<br>
is not masked.)
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/04/0520.php">Tim Mattox: "Re: [MTT users] New &quot;split graphs&quot; feature in MTT Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>Reply:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
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
