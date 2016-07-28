<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 20 05:48:52 2005" -->
<!-- isoreceived="20050720104852" -->
<!-- sent="Wed, 20 Jul 2005 06:48:48 -0400" -->
<!-- isosent="20050720104848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="f595cea48dcfc970101779a3bb123793_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1121840806.6157.618.camel_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-20 05:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Jeff Squyres: "next week - schedule/list of topics"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">bmchapman_at_[hidden]: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2005, at 2:26 AM, Matt Leininger wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Any advice here from the Open MP community would also be 
</span><br>
<span class="quotelev2">&gt;&gt; appreciated...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;   Please keep in mind we need this to work for both MPI+OpenMP and MPI
</span><br>
<span class="quotelev1">&gt; +pthread hybrid apps.
</span><br>
<p>Yes, I think what we loosely concluded here is:
<br>
<p>1. We'll have a framework for process affinity (should be pretty easy 
<br>
to do) to accommodate the different available APIs.
<br>
2. We'll discuss next week where this framework will fit in the 
<br>
opal/orte/ompi stack.  I imagine it'll do some kind of default 
<br>
processor affinity with user-overridable options.
<br>
3. We'll probably have a second framework for memory affinity (it's a 
<br>
fundamentally different beast than process affinity).  Haven't really 
<br>
discussed this much yet -- we'll start those discussions next week.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Jeff Squyres: "next week - schedule/list of topics"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">bmchapman_at_[hidden]: "Re:  processor affinity"</a>
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
