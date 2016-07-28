<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 12 07:44:24 2013" -->
<!-- isoreceived="20130712114424" -->
<!-- sent="Fri, 12 Jul 2013 12:44:13 +0100 (BST)" -->
<!-- isosent="20130712114413" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="alpine.GSO.2.00.1307121232500.2549_at_sunserv3" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7152DA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-12 07:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22322.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22322.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 12 Jul 2013, Jeff Squyres (jsquyres) wrote:
<br>
...
<br>
<span class="quotelev1">&gt; In short: doing 1 memcopy consumes half the memory bandwidth of 2 mem 
</span><br>
<span class="quotelev1">&gt; copies.  So when you have lots of MPI processes competing for memory 
</span><br>
<span class="quotelev1">&gt; bandwidth, it turns out that having each MPI process use half the 
</span><br>
<span class="quotelev1">&gt; bandwidth is a Really Good Idea.  :-)  This allows more MPI processes to 
</span><br>
<span class="quotelev1">&gt; do shared memory communications before you hit the memory bandwidth 
</span><br>
<span class="quotelev1">&gt; bottleneck.
</span><br>
<p>Hi Jeff,
<br>
<p>Lots of useful detail in there - thanks. We have plenty of memory-bound 
<br>
applications in use, so hopefully there's some good news in this.
<br>
<p>I was hoping that someone might have some examples of real application 
<br>
behaviour rather than micro benchmarks. It can be crazy hard to get that 
<br>
information from users.
<br>
<p>Unusually for us, we're putting in a second cluster with the same 
<br>
architecture, CPUs, memory and OS as the last one. I might be able to use 
<br>
this as a bigger stick to get some better feedback. If so, I'll pass it 
<br>
on.
<br>
<p><span class="quotelev1">&gt; Darius Buntinas, Brice Goglin, et al. wrote an excellent paper about 
</span><br>
<span class="quotelev1">&gt; exactly this set of issues; see <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>. 
</span><br>
...
<br>
<p>I'll definitely take a look - thanks again.
<br>
<p>All the best,
<br>
<p>Mark
<br>
<pre>
-- 
-----------------------------------------------------------------
Mark Dixon                       Email    : m.c.dixon_at_[hidden]
HPC/Grid Systems Support         Tel (int): 35429
Information Systems Services     Tel (ext): +44(0)113 343 5429
University of Leeds, LS2 9JT, UK
-----------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22322.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22322.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
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
