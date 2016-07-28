<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:50:35 2009" -->
<!-- isoreceived="20090723125035" -->
<!-- sent="Thu, 23 Jul 2009 08:50:30 -0400" -->
<!-- isosent="20090723125030" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="4A685C96.9030508_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC17109D-77A8-40F7-95B1-5E4661067448_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 08:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 22, 2009, at 10:05 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually requirement is how a C/C++ program running in &quot;master&quot; node
</span><br>
<span class="quotelev2">&gt;&gt; should find out whether &quot;slave&quot; node is reachable (as we check this
</span><br>
<span class="quotelev2">&gt;&gt; using &quot;ping&quot; command) or not ? Because IP address may change at any
</span><br>
<span class="quotelev2">&gt;&gt; time, that's why I am trying to achieve this using &quot;host name&quot; of the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slave&quot; node. How this can be done?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you asking to find out this information before issuing &quot;mpirun&quot;? 
</span><br>
<span class="quotelev1">&gt; Open MPI does assume that the nodes you are trying to use are reachable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>How about you start your MPI program from a shell script that does the
<br>
following:
<br>
<p>1. Reads a text file containing the names of all the possible candidates
<br>
&nbsp;for MPI nodes
<br>
<p>2. Loops through the list of names from (1) and pings each machine to
<br>
see if it's alive. If the host is pingable, then write it's name to a
<br>
different text file which will be host as the machine file for the
<br>
mpirun command
<br>
<p>3. Call mpirun using the machine file generated in (2).
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
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
