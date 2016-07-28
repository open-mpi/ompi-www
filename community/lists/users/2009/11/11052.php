<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 10:34:06 2009" -->
<!-- isoreceived="20091102153406" -->
<!-- sent="Mon, 2 Nov 2009 10:34:02 -0500" -->
<!-- isosent="20091102153402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="4FE0A281-D3EC-46AF-B9A8-0B413D45750B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AEED3F7.9060501_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error while running mpirun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 10:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2009, at 7:43 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Because you were building Open MPI with libtool support, probably the
</span><br>
<span class="quotelev1">&gt; problem could be that libtool is not loaded correctly. Could you check
</span><br>
<span class="quotelev1">&gt; that libtool bin directory is in the PATH environment variable? If  
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev1">&gt; MPI can't find correct libtool library to call, it can't load any mca
</span><br>
<span class="quotelev1">&gt; libraries for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>One quick clarification on this thread -- I think Shiqing meant  
<br>
&quot;libltdl support&quot;, which is a sub-component of the overall Libtool  
<br>
project.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
