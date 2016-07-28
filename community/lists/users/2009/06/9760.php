<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 17:28:49 2009" -->
<!-- isoreceived="20090629212849" -->
<!-- sent="Mon, 29 Jun 2009 14:28:50 -0700" -->
<!-- isosent="20090629212850" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="4A493212.1060606_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0906291402x124a70dfpc0b8fd3d89657bee_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 17:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt;Ok, trying now.  This does bring up a question I've been meaning to
</span><br>
<span class="quotelev1">&gt;ask.  I need to find a way to analyze the efficiency of parallel jobs,
</span><br>
<span class="quotelev1">&gt;and the only way I've known about in the past is through vampire.  I
</span><br>
<span class="quotelev1">&gt;do not have the software license presently (and last I looked, it was
</span><br>
<span class="quotelev1">&gt;a commercial licensed product).  Does this configure flag suggest that
</span><br>
<span class="quotelev1">&gt;openmpi has native support for generating vampire trace files?  Is
</span><br>
<span class="quotelev1">&gt;there any open source tools for analyzing them (or another route I
</span><br>
<span class="quotelev1">&gt;should be looking at)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Writing up a FAQ entry on this subject remains on my &quot;to do&quot; list.  
<br>
(Hasn't gotten dropped off the list, but hasn't gotten done either.)
<br>
<p>Open MPI *does* have VampirTrace in it, but then VampirTrace is 
<br>
available freely anyhow.  The question is what you're going to do with 
<br>
the trace data.  You can get a Vampir license.  If you want an 
<br>
open-source tool for analyzing VT traces, I *think* you can use TAU, but 
<br>
am not sure.  There are also crude tools like otfprofile and otfdump.  
<br>
Leo P recently raised some number of these issues on the &quot;devel&quot; alias 
<br>
and was told by the Vampir people (per e-mail not reported to the devel 
<br>
archives) that to look at VT data, you really need to get Vampir.  
<br>
Evaluation licenses are apparently available.
<br>
<p>I thought I had sent e-mail out on this subject before, but cannot find 
<br>
it.  Other open source performance tools supposedly include Jumpshot 
<br>
(associated with MPICH, but usable with OMPI), mpiP, FPMPI, and IPM.  
<br>
(I'm just dropping a bunch of acronyms on you here.  I'm not that 
<br>
familiar with any of these tools.)
<br>
<p>If you're not so much interested in open source as in &quot;free download&quot;, 
<br>
then another option is Sun Studio Performance Analyzer, which uses VT 
<br>
tracing and provides a GUI and command-line tool to look at the data.  
<br>
Use was described in this message:  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/06/6234.php">http://www.open-mpi.org/community/lists/devel/2009/06/6234.php</a>
<br>
<p>Personally, I'd recommend Sun Studio.  (Fair disclosure:  I'm a Sun 
<br>
employee.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
