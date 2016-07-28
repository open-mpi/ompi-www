<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 12:57:04 2008" -->
<!-- isoreceived="20080130175704" -->
<!-- sent="Wed, 30 Jan 2008 18:56:45 +0100" -->
<!-- isosent="20080130175645" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="20080130175645.GY11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0801301231230.5953_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 12:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3095.php">Aurélien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2008 at 03:38:00PM +0100, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; The results is that, with the default Linux kernel settings, there is 
</span><br>
<span class="quotelev1">&gt; no way to tell which way a connection will take in a multi-rail TCP/IP 
</span><br>
<span class="quotelev1">&gt; setup. Even more, when the ARP cache expires and a new ARP request is 
</span><br>
<span class="quotelev1">&gt; made, the answer (MAC address) from the target/destination could be 
</span><br>
<span class="quotelev1">&gt; different, so that from that moment on the connection could switch to 
</span><br>
<span class="quotelev1">&gt; a different media. I've tested this recently with the RHEL5 kernels 
</span><br>
<span class="quotelev1">&gt; with one gigabit and one Myri-10G connection, seeing a TCP stream 
</span><br>
<span class="quotelev1">&gt; switching randomly between the gigabit and the Myri-10G connection.
</span><br>
<p>That's weird. I've never seen this, but according to the various ARP
<br>
settings in the Linux kernel, I could imagine such a scenario.
<br>
<p>IPv6 doesn't use ARP, but neighbourhood discovery. It's completely
<br>
different, and I hope it behaves &quot;link local&quot;. It's a whole protocol
<br>
(&quot;ICMPv6&quot;), so things might be better.
<br>
<p><p>JFTR: <a href="http://www-uxsup.csx.cam.ac.uk/courses/ipv6_basics/x84.html">http://www-uxsup.csx.cam.ac.uk/courses/ipv6_basics/x84.html</a>
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3095.php">Aurélien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
