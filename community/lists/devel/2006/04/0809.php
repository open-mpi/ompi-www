<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 11:35:00 2006" -->
<!-- isoreceived="20060403153500" -->
<!-- sent="Mon, 3 Apr 2006 17:34:56 +0200 (CEST)" -->
<!-- isosent="20060403153456" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="Pine.LNX.4.64.0604031655440.1558_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060403122455.GA27967_at_ipc256.inf.uni-jena.de" -->
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
<strong>Date:</strong> 2006-04-03 11:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0808.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 3 Apr 2006, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; This would result in an enormous amount of duplicated code, since 
</span><br>
<span class="quotelev1">&gt; the IPv4-&gt;IPv6 transition would only affect a small fraction of the 
</span><br>
<span class="quotelev1">&gt; total tcp BTL codebase. This is clearly a violation of the DRY 
</span><br>
<span class="quotelev1">&gt; principle (don't repeat yourself).
</span><br>
<p>IMHO code can simply be shared and only the really different part 
<br>
should be made independent. This is more a question of whether the 
<br>
build system would allow such a scheme and of the runtime behaviour 
<br>
(for static linking only one copy of the common part should be linked, 
<br>
for dynamic loading maybe some module dependency to load the common 
<br>
code only once could achieve the same result).
<br>
<p><span class="quotelev1">&gt; If rsh/ssh cannot handle or authenticate IPv6 connections, the admin 
</span><br>
<span class="quotelev1">&gt; must keep the IPv6 addresses out of the resolver, so that 
</span><br>
<span class="quotelev1">&gt; getaddrbyhost() never returns an IPv6 address. That's it.
</span><br>
<p>I beg to disagree. In a setup like the one mentioned, after orted is 
<br>
started via an IPv4-only rsh/ssh, OpenMPI applications could use IPv6 
<br>
without problems, just like they could use f.e. GM if Myrinet cards 
<br>
would be present. I see this very much like your past experience with 
<br>
the non-IPv6 rsh - it worked for you because the rsh client 
<br>
automatically tried the IPv4 address after the IPv6 failure, but the 
<br>
ssh client might not (be able to) do this. Please note that this is 
<br>
also a matter of homogeneity of the cluster that you can't know in 
<br>
advance, before starting the daemons - each host (including the one 
<br>
where the rsh/ssh clients are run) can have its own level of IPv6 
<br>
awareness.
<br>
<p>On a side note, I think that the discussion can also be extended to 
<br>
the batch/queueing systems that might be used to start the OpenMPI job 
<br>
and would pass a list of machines to OpenMPI. If the machines are 
<br>
given as IPs (either v4 or v6), OpenMPI should probably assume that 
<br>
the address as given can be passed further to the underlying mechanism 
<br>
for starting the job (for example, for SGE this would be its own rsh 
<br>
client, not the system rsh client); but how about machines given as 
<br>
names ?
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
<li><strong>Next message:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0808.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0810.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0811.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
