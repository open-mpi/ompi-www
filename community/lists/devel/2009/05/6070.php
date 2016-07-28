<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 23:49:51 2009" -->
<!-- isoreceived="20090519034951" -->
<!-- sent="Mon, 18 May 2009 21:49:46 -0600" -->
<!-- isosent="20090519034946" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A122C5A.7060907_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-05-18 23:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6071.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6069.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
<p>Eugene,
<br>
<p>I've got mostly good news ...
<br>
<p>Ralph sent me a platform file and a corresponding .conf file.  I built 
<br>
ompi from openmpi-1.3.3a1r21223.tar.gz, with these files.  I've been 
<br>
running my normal tests and have been unable to hang a job yet.  I've 
<br>
run enough that I don't expect to see a problem.
<br>
<p>So we're up and running, but with some extra voodoo in the platform 
<br>
files.  This is on a totally vanilla Fedora 9 installation (other than a 
<br>
couple of Fortran compilers, but we're not using the Fortran interface 
<br>
to mpi), running on a Dell workstation with 2 quad-core CPUs - vanilla 
<br>
hardware, too.  MPI isn't going out of the box.
<br>
<p>&nbsp;From a user's perspective, configure should be setting the right 
<br>
defaults on such a setup.  But the core code seems to be working - I'm 
<br>
giving it a good hammering.
<br>
<p>The allreduces in question were doing a logical or on 1 integer from 
<br>
each process - it was an error check.  Hence the buffers (on the 
<br>
application side) were 4 bytes.  There were only 4 processes involved.
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
<li><strong>Next message:</strong> <a href="6071.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6069.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
