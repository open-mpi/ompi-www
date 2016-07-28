<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 19:42:15 2009" -->
<!-- isoreceived="20090629234215" -->
<!-- sent="Mon, 29 Jun 2009 16:42:23 -0700" -->
<!-- isosent="20090629234223" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="4A49515F.3030800_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0906291618k1e42e66ct436df671ca7adb32_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-29 19:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt;That sounds good; I'm glad there are a variety of tools out there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, this now brings me back to my origional problem.  I was
</span><br>
<span class="quotelev1">&gt;successful at compiling openmpi after disabling vt, but if I want to
</span><br>
<span class="quotelev1">&gt;use (some of) these tools, I'll need that enabled...
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, it depends...
<br>
<p><span class="quotelev1">&gt;On Mon, Jun 29, 2009 at 2:28 PM, Eugene Loh&lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Open MPI *does* have VampirTrace in it...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Okay, yeah.  You'd want to build OMPI with VT, but then need to find a 
<br>
tool to read the data.
<br>
<p><span class="quotelev2">&gt;&gt;I thought I had sent e-mail out on this subject before, but cannot find it.
</span><br>
<span class="quotelev2">&gt;&gt;Other open source performance tools supposedly include Jumpshot (associated
</span><br>
<span class="quotelev2">&gt;&gt;with MPICH, but usable with OMPI), mpiP, FPMPI, and IPM.  (I'm just dropping
</span><br>
<span class="quotelev2">&gt;&gt;a bunch of acronyms on you here.  I'm not that familiar with any of these
</span><br>
<span class="quotelev2">&gt;&gt;tools.)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
None of these need VT.
<br>
<p><span class="quotelev2">&gt;&gt;If you're not so much interested in open source as in &quot;free download&quot;, then
</span><br>
<span class="quotelev2">&gt;&gt;another option is Sun Studio Performance Analyzer, which uses VT tracing and
</span><br>
<span class="quotelev2">&gt;&gt;provides a GUI and command-line tool to look at the data.  Use was described
</span><br>
<span class="quotelev2">&gt;&gt;in this message:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6234.php">http://www.open-mpi.org/community/lists/devel/2009/06/6234.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
This doesn't need the VT in OMPI... it has its own.  So, you could build 
<br>
OMPI without VT and still be able to use Sun Analyzer.  In fact, you 
<br>
could use Sun Analyzer with a number of MPI implementations that don't 
<br>
have VT in them at all.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
