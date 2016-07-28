<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 11:35:07 2007" -->
<!-- isoreceived="20071009153507" -->
<!-- sent="Tue, 9 Oct 2007 17:35:56 +0200" -->
<!-- isosent="20071009153556" -->
<!-- name="Torsten Hoefler" -->
<!-- email="htor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnbc compilation" -->
<!-- id="20071009153556.GC3651_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EC65BE6-C84C-4806-B5E7-208268D8DF1E_at_cisco.com" -->
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
<strong>From:</strong> Torsten Hoefler (<em>htor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 11:35:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4184.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4163.php">Jeff Squyres: "Re: [OMPI users] libnbc compilation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct 06, 2007 at 09:29:25PM +0200, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm CC'ing Torsten Hoefler -- he's the main developer of libnbc and  
</span><br>
<span class="quotelev1">&gt; will answer your question (he just realized he was not subscribed to  
</span><br>
<span class="quotelev1">&gt; this list :-) ).
</span><br>
thanks Jeff!
<br>
<p><span class="quotelev1">&gt; On Oct 1, 2007, at 10:43 AM, Neeraj Chourasia wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hello Everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I was checking the development version from svn and found that  
</span><br>
<span class="quotelev2">&gt; &gt;support for libnbc is going to come in next release.
</span><br>
<span class="quotelev2">&gt; &gt;I thought of compiling it, but failed to do.
</span><br>
<span class="quotelev2">&gt; &gt;Could some one suggest me how to get it compiled.
</span><br>
<span class="quotelev2">&gt; &gt;When i made changes to configure script(Basically added some  
</span><br>
<span class="quotelev2">&gt; &gt;flags), its giving output saying, libnbc can't be compiled.
</span><br>
Yes, we are working on integrating LibNBC into Open MPI 1.3 . Until
<br>
then, you might want to download and compile LibNBC separately. This is
<br>
a relatively easy task:
<br>
<p>- configure, compile and install Open MPI as usual
<br>
- grab the newest version from:
<br>
<a href="https://www.unixer.de/research/nbcoll/libnbc/">https://www.unixer.de/research/nbcoll/libnbc/</a>
<br>
- modify the Makefile accordingly (or use &quot;cmake .&quot;)
<br>
- &quot;make&quot;
<br>
... and link programs using LibNBC against libnbc.a 
<br>
<p>Thanks &amp; Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
The biggest impediment to making decisions is too much knowledge.  --
Bill Camp
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4184.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4163.php">Jeff Squyres: "Re: [OMPI users] libnbc compilation"</a>
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
