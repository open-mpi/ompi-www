<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 22:42:32 2009" -->
<!-- isoreceived="20090519024232" -->
<!-- sent="Mon, 18 May 2009 20:42:26 -0600" -->
<!-- isosent="20090519024226" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A121C92.2010105_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A11F628.2080205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bug in 1.3.2 sm transport<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 22:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6070.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6070.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bryan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have seen similar issues on LANL clusters when message sizes were  
</span><br>
<span class="quotelev2">&gt;&gt; fairly large. How big are your buffers when you call Allreduce? Can  
</span><br>
<span class="quotelev2">&gt;&gt; you send us your Allreduce call params (e.g., the reduce operation,  
</span><br>
<span class="quotelev2">&gt;&gt; datatype, num elements)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you don't want to send that to the list, you can send it to me at  
</span><br>
<span class="quotelev2">&gt;&gt; LANL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't seen any updates on this.  Please tell me Bryan sent info to 
</span><br>
<span class="quotelev1">&gt; Ralph at LANL and Ralph nailed this one.  Please!  :^)
</span><br>
<p>Ralph and I took this off line.
<br>
<p>I'm so far unable to reproduce the problem on a node of roadrunner, 
<br>
which is 4 x86_64 cores, openmpi 1.3.2, and sm for transport.  That 
<br>
openmpi was built with some special platform files, not a configure run 
<br>
without the platform files.  Ralph sent me the platform files and I'm 
<br>
about to build my own version on the small 8 core machine where the 
<br>
problem first showed up.
<br>
<p>I'll report more as soon as I know more.  Hopefully in the morning.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bryan
<br>
<p><pre>
-- 
Bryan Lally, lally_at_[hidden]
505.667.9954
CCS-2
Los Alamos National Laboratory
Los Alamos, New Mexico
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6070.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6070.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
