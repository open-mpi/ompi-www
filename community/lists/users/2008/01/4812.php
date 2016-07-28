<?
$subject_val = "Re: [OMPI users] how to select a specific network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 07:34:33 2008" -->
<!-- isoreceived="20080111123433" -->
<!-- sent="Fri, 11 Jan 2008 13:34:16 +0100" -->
<!-- isosent="20080111123416" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to select a specific network" -->
<!-- id="20080111123416.GQ11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.GSO.4.53.0801111131190.19557_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to select a specific network<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 07:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4813.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 787, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>In reply to:</strong> <a href="4810.php">Lydia Heck: "[OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 11, 2008 at 11:36:23AM +0000, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt; I have a setup which contains one set of machines
</span><br>
<span class="quotelev1">&gt; with one nge and one e1000g network and of machines
</span><br>
<span class="quotelev1">&gt; with two e1000g networks configured. I am planning a
</span><br>
<p>Are we talking about shared filesystems or can you place different
<br>
~/.openmpi/mca-params.confs across different machines? If so, just
<br>
specify the interfaces you want to exclude/include on each machine.
<br>
<p>If nothing helps, either shutdown the unnecessary interfaces or use
<br>
interface renaming.
<br>
<p>nge sounds like Solaris, unfortunately I'm not common with it. Under
<br>
Linux, one would rename either the required or the unwanted interfaces,
<br>
depending if you include or exclude.
<br>
<p>We have something like this:
<br>
<p>adi_at_amun:~$ ip r s
<br>
192.168.4.0/24 dev ethmp  proto kernel  scope link  src 192.168.4.130 
<br>
192.168.3.0/24 dev ethmp  proto kernel  scope link  src 192.168.3.130 
<br>
192.168.1.0/24 dev ethsvc  proto kernel  scope link  src 192.168.1.130 
<br>
default via 192.168.1.12 dev ethsvc 
<br>
<p>The &quot;ethmp&quot; is &quot;ethernet message passing&quot;, &quot;ethsvc&quot; is &quot;ethernet service
<br>
network&quot;. That's more or less the same you want: a dedicated network for
<br>
message passing.
<br>
<p>So you would obviously include ethmp in your mca-params.conf file.
<br>
<p><p>Under Linux, the tool to rename interfaces is called &quot;nameif&quot;, but I
<br>
guess it cannot be used for Solaris (interface names are kernel space,
<br>
and Linux kernel != Solaris kernel). 
<br>
<p><p>HTH
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
<li><strong>Next message:</strong> <a href="4813.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 787, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>In reply to:</strong> <a href="4810.php">Lydia Heck: "[OMPI users] how to select a specific network"</a>
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
