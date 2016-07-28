<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 07:50:49 2006" -->
<!-- isoreceived="20060104125049" -->
<!-- sent="Wed, 4 Jan 2006 07:50:41 -0500" -->
<!-- isosent="20060104125041" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="5B6503A5-5D67-4270-8945-A638E494519A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200512301015.55166.giuliani_at_lamma.rete.toscana.it" -->
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
<strong>Date:</strong> 2006-01-04 07:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 30, 2005, at 4:15 AM, Graziano Giuliani wrote:
<br>
<p><span class="quotelev1">&gt; #0  0xb7ca2599 in orte_pls_rsh_launch (jobid=1) at pls_rsh_module.c: 
</span><br>
<span class="quotelev1">&gt; 716
</span><br>
<span class="quotelev1">&gt; 716                         if (mca_pls_rsh_component.debug) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which means we have a memory corruption somewhere else...
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; Investigating from outside on what may cause the problem, I have  
</span><br>
<span class="quotelev1">&gt; found that I
</span><br>
<span class="quotelev1">&gt; can make the job run also changing the hostname in my hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -) No localhost in hostfile -&gt; run
</span><br>
<span class="quotelev1">&gt; -) &quot;wowbagger&quot; or &quot;localhost&quot; in hostfile -&gt; run
</span><br>
<span class="quotelev1">&gt; -) FQDN wowbagger.cluster in hostfile -&gt; SIGSEGV
</span><br>
<p>LOL -- I did a double take there because one of our machines is named  
<br>
wowbagger; I had a horrid moment where I was wondering if that name  
<br>
somehow accidentally got hard-coded in the OMPI code base.  :-)
<br>
<p>Ok, I think that I am able to reproduce this -- got to love these  
<br>
Heisenbugs.  :-(
<br>
<p>Let me see what I can dig up...
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
<li><strong>Next message:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
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
