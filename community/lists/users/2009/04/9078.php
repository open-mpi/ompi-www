<?
$subject_val = "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 15:03:42 2009" -->
<!-- isoreceived="20090423190342" -->
<!-- sent="Thu, 23 Apr 2009 15:03:24 -0400" -->
<!-- isosent="20090423190324" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..." -->
<!-- id="5958F6AC-E1D3-4961-9B31-23152D990EFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F2CFF26E6F_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 15:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9079.php">Alex Margolin: "[OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9077.php">Jeff Squyres: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>In reply to:</strong> <a href="9054.php">Katz, Jacob: "[OMPI users] Launching MPI app manually when rsh/ssh can't be used..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9084.php">Mariusz Mamoński: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<li><strong>Reply:</strong> <a href="9084.php">Mariusz Mamoński: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2009, at 3:51 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to start up an MPI app by some manual procedure, when  
</span><br>
<span class="quotelev1">&gt; rsh/ssh cannot be used to log into a machine where part of the app  
</span><br>
<span class="quotelev1">&gt; should run?
</span><br>
<span class="quotelev1">&gt; E.g. a set of commands that can be manually executed on the machines  
</span><br>
<span class="quotelev1">&gt; to start the run-time/daemons/actual executables?
</span><br>
<p>Not easily, no (meaning: no).  Is there some other parallel launching  
<br>
system that should be used?  It's fairly straightforward to write  
<br>
another plugin to use another launcher (that's kinda the point of our  
<br>
plugin system).
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
<li><strong>Next message:</strong> <a href="9079.php">Alex Margolin: "[OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9077.php">Jeff Squyres: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>In reply to:</strong> <a href="9054.php">Katz, Jacob: "[OMPI users] Launching MPI app manually when rsh/ssh can't be used..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9084.php">Mariusz Mamoński: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<li><strong>Reply:</strong> <a href="9084.php">Mariusz Mamoński: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
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
