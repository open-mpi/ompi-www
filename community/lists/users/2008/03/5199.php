<?
$subject_val = "Re: [OMPI users] Problem: openmpi using lam";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 19:37:32 2008" -->
<!-- isoreceived="20080314233732" -->
<!-- sent="Fri, 14 Mar 2008 19:37:22 -0400" -->
<!-- isosent="20080314233722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem: openmpi using lam" -->
<!-- id="BD108467-5ADB-4134-9B9A-A438B2557864_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DC413648-BBFB-48CB-AF40-C84B5F452AEC_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem: openmpi using lam<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-14 19:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>In reply to:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5162.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2008, at 5:39 PM, Justus Schwabedal wrote:
<br>
<p><span class="quotelev1">&gt; I got it. The answer I was looking for was: lam deamons are
</span><br>
<span class="quotelev1">&gt; not in use anymore. mpirun does everything byitself as soon
</span><br>
<span class="quotelev1">&gt; as all the path variables are set up correctly. However, what
</span><br>
<span class="quotelev1">&gt; are the openIB and uDAPL warnings good for? E.g:
</span><br>
<p>Sorry for the delay in replying.
<br>
<p><span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: OpenIB on host neutrino was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: uDAPL on host neutrino was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>The &quot;couldn't read uverbs ABI&quot; message *usually* means that you have a  
<br>
busted OFED installation.  Do you know if other InfiniBand  
<br>
applications work on that(those) node(s)?  Does the ibv_devinfo  
<br>
application return any HCAs with active ports?
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
<li><strong>Next message:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>In reply to:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5162.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
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
