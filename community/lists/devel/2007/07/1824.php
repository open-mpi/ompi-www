<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 07:28:52 2007" -->
<!-- isoreceived="20070710112852" -->
<!-- sent="Tue, 10 Jul 2007 07:28:40 -0400" -->
<!-- isosent="20070710112840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="67483DC4-4670-4089-976F-3EA0457D38AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070710064259.GA28481_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2007-07-10 07:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 2:42 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. The most obvious one (to me, at least) is to require that  
</span><br>
<span class="quotelev2">&gt;&gt; people provide
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--with-xx&quot; when they build the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll throw in another one for good measure: If --with-xx is given,
</span><br>
<span class="quotelev1">&gt; build with the component.  If --without-xx is given, disable it.
</span><br>
<span class="quotelev1">&gt; If neither is given, do as you currently do: enable it if you find
</span><br>
<span class="quotelev1">&gt; suitable libraries.
</span><br>
<p>FWIW, we have this already:
<br>
<p>1. If a particular component needs some additional libraries such  
<br>
that we added a &quot;--with-foo&quot; switch to specify where those libraries  
<br>
can be found, there is also an implicit &quot;--without-foo&quot; switch that  
<br>
will disable that component.  E.g., &quot;--without-tm&quot; will inhibit the  
<br>
building of the TM RAS and PLS components.
<br>
<p>2. The &quot;--enable-mca-no-build&quot; option takes a comma-delimited list of  
<br>
components that will then not be built.  Granted, this option isn't  
<br>
exactly intuitive, but it was the best that we could think of at the  
<br>
time to present a general solution for inhibiting the build of a  
<br>
selected list of components.  Hence, &quot;--enable-mca-no-build=pls- 
<br>
slurm,ras-slurm&quot; would inhibit building the SLURM RAS and PLS  
<br>
components (note that the SLURM components currently do not require  
<br>
any additional libraries, so a) there is no corresponding --with[out]- 
<br>
slurm option, and b) they are usually always built).
<br>
<p><span class="quotelev1">&gt; In case the number of components gets too large, have a switch to
</span><br>
<span class="quotelev1">&gt; turn off automatic discovery even in the nonpresence of --with* flags.
</span><br>
<p>Did you mean the equivalent of the --enable-mca-no-build switch, or  
<br>
disable *all* automatic discovery?  I'm not sure that disabling all  
<br>
automatic discovery will be useful -- you'd have to specifically list  
<br>
each component that would be built, and that list would be pretty  
<br>
darn long...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1825.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
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
