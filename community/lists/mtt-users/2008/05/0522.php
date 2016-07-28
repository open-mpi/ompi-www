<?
$subject_val = "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 16:10:11 2008" -->
<!-- isoreceived="20080505201011" -->
<!-- sent="Mon, 5 May 2008 16:10:01 -0400" -->
<!-- isosent="20080505201001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue" -->
<!-- id="75EF7968-85AE-428F-A97A-8D13C1350C67_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080505184723.GP51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 16:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Ethan Mallove: "[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>In reply to:</strong> <a href="0521.php">Ethan Mallove: "[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2008, at 2:47 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Line 386 of MTT/Test/Run.pm sets LD_LIBRARY_PATH. This
</span><br>
<span class="quotelev1">&gt; appears to have masked a problem in my wrapper compiler
</span><br>
<span class="quotelev1">&gt; (missing -R/foo/lib flags).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if ($mpi_install-&gt;{libdir}) {
</span><br>
<span class="quotelev1">&gt;        if (exists($ENV{LD_LIBRARY_PATH})) {
</span><br>
<span class="quotelev1">&gt;            $ENV{LD_LIBRARY_PATH} = &quot;$mpi_install-&gt;{libdir}:&quot; .
</span><br>
<span class="quotelev1">&gt;                $ENV{LD_LIBRARY_PATH};
</span><br>
<span class="quotelev1">&gt;        } else {
</span><br>
<span class="quotelev1">&gt;            $ENV{LD_LIBRARY_PATH} = $mpi_install-&gt;{libdir};
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the rationale for setting LD_LIBRARY_PATH for the
</span><br>
<span class="quotelev1">&gt; mpirun's the same as the rationale described below (from
</span><br>
<span class="quotelev1">&gt; GNU_Install.pm)?
</span><br>
<p>No, it's set that way for other MPI's that may need to find  
<br>
their .so's, but weren't linked with -R.
<br>
<p><span class="quotelev1">&gt; If so, could we make MTT a little smarter. E.g., actually
</span><br>
<span class="quotelev1">&gt; check for a libmpi.so (and/or other possibly conflicting
</span><br>
<span class="quotelev1">&gt; DSOs), and if there's no conflict then skip the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH setting. (This way a wrapper compiler issue
</span><br>
<span class="quotelev1">&gt; is not masked.)
</span><br>
<p><p>I'd prefer an INI param to check whether you want to disable this  
<br>
behavior.  That is, the default should be enabled, but you can turn it  
<br>
off if you want to.
<br>
<p>The reason is that some MPI's don't have a libmpi.so -- it may be  
<br>
named something else (e.g., libmpich.so).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Ethan Mallove: "[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<li><strong>In reply to:</strong> <a href="0521.php">Ethan Mallove: "[MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
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
