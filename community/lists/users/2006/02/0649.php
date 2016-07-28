<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 07:36:01 2006" -->
<!-- isoreceived="20060213123601" -->
<!-- sent="Mon, 13 Feb 2006 07:35:52 -0500" -->
<!-- isosent="20060213123552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="29AF5067-3DB2-4B79-97C6-0B9D6BBF3790_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7C50D951-13FD-41BB-815E-28452145A4A2_at_pitt.edu" -->
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
<strong>Date:</strong> 2006-02-13 07:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2006, at 7:28 PM, James Conway wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Have you absolutely entirely disabled all firewalling between the
</span><br>
<span class="quotelev2">&gt;&gt; two hosts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know - simply, hit the &quot;Stop&quot; button on Mac OSX Sharing
</span><br>
<span class="quotelev1">&gt; pref-panel for Firewall, on the local and remote systems both (one is
</span><br>
<span class="quotelev1">&gt; my PowerBook G4, the other my PowerMac G5).
</span><br>
<p>Sounds like this should be sufficient.
<br>
<p><span class="quotelev2">&gt;&gt; - Do you have only one TCP interface on both machines?  If you have
</span><br>
<span class="quotelev2">&gt;&gt; more than one, we can try telling Open MPI to ignore one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting idea. The remote machine has two ethernet ports
</span><br>
<span class="quotelev1">&gt; (PowerMac) and the local machine has ethernet and airport. Only one
</span><br>
<span class="quotelev1">&gt; port should be enabled on each, but the PowerBook airport is what I
</span><br>
<span class="quotelev1">&gt; use at home so maybe it didn't get properly disabled when I switched
</span><br>
<span class="quotelev1">&gt; to my work settings. Since the call to MPI-send seems to hand on the
</span><br>
<span class="quotelev1">&gt; local host, it may be an attempt to use the airport (wireless)
</span><br>
<span class="quotelev1">&gt; connection. How to I tell Open MPI to ignore a particular interface?
</span><br>
<p>Check out <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a> --  
<br>
it talks about the MCA parameters you can use to specify different  
<br>
networks.  For example, on my powerbook, en0 appears to be my wired  
<br>
connection.
<br>
<p>Let us know what happens.
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
<li><strong>Next message:</strong> <a href="0650.php">Peter Beerli: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0652.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
