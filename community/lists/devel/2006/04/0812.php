<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 05:16:50 2006" -->
<!-- isoreceived="20060404091650" -->
<!-- sent="Tue, 4 Apr 2006 11:16:41 +0200 (CEST)" -->
<!-- isosent="20060404091641" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="Pine.LNX.4.64.0604041101330.2887_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060403171332.GA2921_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-04 05:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 3 Apr 2006, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; 1. Put IPv[46] addresses into the machinefile. Since they are
</span><br>
<span class="quotelev1">&gt;   protocol-specific, both rsh/ssh uses them just the way they are.
</span><br>
<p>Yes, this would work. The machinefile could come from the user or from 
<br>
a batch/queueing system, but this should signify that the producer 
<br>
knows about the configuration of the machines and wants these specific 
<br>
addresses to be used.
<br>
<p><span class="quotelev1">&gt; 2. Put hostnames into the machinefile. Both rsh/ssh and OpenMPI perform
</span><br>
<span class="quotelev1">&gt;   their own resolver lookup.
</span><br>
<p><span class="quotelev1">&gt;From what I understand, OpenMPI wants to have its daemons running on 
</span><br>
the machines and then the interface configuration and communication 
<br>
channel establishment follows, so the 2 phases are not connected to 
<br>
each other.
<br>
<p>The question is then what to do about the names given in the 
<br>
machinefile ? Should they just be passed to the rsh/ssh client hoping 
<br>
that they would work ? Should there be an option for resolving the 
<br>
names to a user (or maybe admin) specific version of IP which should 
<br>
then be passed to rsh/ssh ? Or should there be a list of IP addresses 
<br>
that are tried in sequence ? Hmm, maybe all of the above, with some 
<br>
means to choose between them ?
<br>
<p><span class="quotelev1">&gt; Your setup (IPv6 addresses given by the resolver, but no IPv6-aware ssh)
</span><br>
<span class="quotelev1">&gt; could be handled in both ways: either by putting numeric IPv4-addresses
</span><br>
<span class="quotelev1">&gt; into the machinefile, or by specifying 'ssh -4'.
</span><br>
<p>Yes. Please keep in mind however that the opposite situation might 
<br>
also occur (starting via IPv6, MPI communication via IPv4).
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
