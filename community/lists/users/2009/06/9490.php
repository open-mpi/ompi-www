<?
$subject_val = "Re: [OMPI users] mpi trace visualization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 18:18:02 2009" -->
<!-- isoreceived="20090601221802" -->
<!-- sent="Mon, 01 Jun 2009 15:18:01 -0700" -->
<!-- isosent="20090601221801" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi trace visualization" -->
<!-- id="4A245399.3060700_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d21ea44c0905300527y5b17b2d5kd762a3c4bb2e5e76_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi trace visualization<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 18:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9470.php">Roman Martonak: "[OMPI users] mpi trace visualization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roman Martonak wrote:
<br>
<p><span class="quotelev1">&gt;I would like to profile the MPI code using the vampir trace integrated
</span><br>
<span class="quotelev1">&gt;in openmpi-1.3.2. In order to visualize
</span><br>
<span class="quotelev1">&gt;the trace files, apart from commercial vampir, is there some free
</span><br>
<span class="quotelev1">&gt;viewer for the OTF files ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm rusty on this stuff.
<br>
<p>If you go to <a href="http://www.paratools.com/otf.php">http://www.paratools.com/otf.php</a> there is an &quot;OTF 
<br>
Tutorial&quot;.  On slide 5, there is a diagram showing tools, formats, 
<br>
convertors, etc.  The diagram is colorful, but it's a few years old and 
<br>
represents a particular community of tool developers/users.  The 
<br>
implication seems to be that the answer to your question is &quot;TAU&quot;.  Best 
<br>
to check since I have never used TAU myself.  That same URL has a link 
<br>
to TAU.
<br>
<p>Depending on what you want to do, otfdump could also help.  At least 
<br>
it's free!
<br>
<p>One last option:  Sun Studio tools are available for free on SPARC and 
<br>
x64 and on Solaris and Linux.  You can use OMPI or Sun ClusterTools (Sun 
<br>
MPI, based on OMPI).  You can collect MPI tracing data (which uses the 
<br>
VampirTrace instrumentation inside OMPI) and then view the data (MPI 
<br>
timelines and all sorts of statistical analyses of the data).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9470.php">Roman Martonak: "[OMPI users] mpi trace visualization"</a>
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
