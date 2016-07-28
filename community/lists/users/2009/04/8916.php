<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:39:54 2009" -->
<!-- isoreceived="20090414183954" -->
<!-- sent="Tue, 14 Apr 2009 11:39:25 -0700" -->
<!-- isosent="20090414183925" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4D85D.10908_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5223271-4BBC-4A2E-805E-5B627645BC69_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 14:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8917.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 14, 2009, at 12:02 PM, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming the problem is congestion and that messages are backing up, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'd check this assumption first before going too far down that path.  
<br>
You might be able to instrument your code to spit out sends and 
<br>
receives.  VampirTrace (and PERUSE) instrumentation are already in OMPI, 
<br>
but any of these instrumentation approaches require that you then 
<br>
analyze the data you generate... to see how many messages get caught &quot;in 
<br>
flight&quot; at any time.  Again, there are the various tools I mentioned 
<br>
earlier.  If I understand correctly, the problem you're looking for is 
<br>
*millions* of messages backing up (in order to induce memory imbalances 
<br>
of Gbytes).  Should be easy to spot.
<br>
<p>Maybe the real tool to use is some memory-tracing tool.  I don't know 
<br>
much about these.  Sun Studio?  Valgrind?  Sorry, but I'm really 
<br>
clueless about what tools to use there.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8917.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
