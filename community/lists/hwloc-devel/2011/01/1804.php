<?
$subject_val = "Re: [hwloc-devel] Docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 19:00:38 2011" -->
<!-- isoreceived="20110107000038" -->
<!-- sent="Fri, 07 Jan 2011 11:00:30 +1100" -->
<!-- isosent="20110107000030" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs updates" -->
<!-- id="4D26579E.3000606_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="601D2BF3-542D-4913-AB53-F0B4A9E38533_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs updates<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 19:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Samuel Thibault: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1803.php">Brice Goglin: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1805.php">Samuel Thibault: "Re: [hwloc-devel] Docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 07/01/11 05:46, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please review:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3046">https://svn.open-mpi.org/trac/hwloc/changeset/3046</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Some possible tweaks:
<br>
<p># Some operating systems do not systematically provide separate
<br>
# functions for CPU and Memory binding.
<br>
<p>Is &quot;systematically&quot; meant to be there ?  I'm not quite
<br>
sure what you mean by it in this context, sorry!
<br>
<p># Conversely, some operating systems support the notion of a
<br>
# &quot;current&quot; memory binding policy
<br>
<p>Can I suggest adding &quot;do&quot; before &quot;support&quot;, and..
<br>
<p>#  and do not permit allocating data on a specific node
<br>
<p>change that &quot;and&quot; to a &quot;but&quot;.
<br>
<p># without changing the current policy and allocate the data.
<br>
<p>Should that &quot;allocate&quot; be &quot;allocating&quot; ?
<br>
<p># Hwloc provides both functions that set the current memory
<br>
# binding policies (if supported), and functions that allocate
<br>
# memory bound to specific node set.
<br>
<p>Can I suggest either dropping &quot;both&quot; or instead saying:
<br>
<p>$ Hwloc provides functions that both set the current memory
<br>
$ binding policies (if supported) and that allocate memory
<br>
$ bound to specific node set.
<br>
<p>Hope that's useful!
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk0mV54ACgkQO2KABBYQAh+NegCeMKGa9PEHk92JIaJLNcCkRpWj
<br>
loYAn3kUfjpqd/bhIgJ1ppPAf7rgr7k2
<br>
=WSgE
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Samuel Thibault: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1803.php">Brice Goglin: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1805.php">Samuel Thibault: "Re: [hwloc-devel] Docs updates"</a>
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
