<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 08:14:20 2007" -->
<!-- isoreceived="20070406121420" -->
<!-- sent="Fri, 6 Apr 2007 08:14:10 -0400" -->
<!-- isosent="20070406121410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="399B1E0B-E3F0-40F6-851A-41FBACFE1C5A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DF87BF78-6578-405C-A947-4DD990320946_at_sara.nl" -->
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
<strong>Date:</strong> 2007-04-06 08:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3032.php">Jeff Squyres: "Re: [OMPI users] Grid launcher question."</a>
<li><strong>In reply to:</strong> <a href="3028.php">Bas van der Vlies: "[OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 5, 2007, at 3:50 PM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev1">&gt;   I am just try to enable  PBS /Torque support in Open MPI with the --
</span><br>
<span class="quotelev1">&gt; with-tm option.  My question is why the utility 'pbs-config' is not
</span><br>
<span class="quotelev1">&gt; used to determine the location of the include/library directory.  It
</span><br>
<span class="quotelev1">&gt; is standard included in the torque software.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # pbs-config ---cflags
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; -I/usr/include/torque
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # pbs-config --libs
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; -ltorque
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<p>Probably because we weren't aware that that script was available.  :-)
<br>
<p>We should probably incorporate its use in future releases; I'll  
<br>
create a ticket for a future enhancement.  Thanks for the heads-up!
<br>
<p>Have you run into a situation where OMPI gets the wrong flags because  
<br>
it's not using pbs-config?
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
<li><strong>Next message:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3032.php">Jeff Squyres: "Re: [OMPI users] Grid launcher question."</a>
<li><strong>In reply to:</strong> <a href="3028.php">Bas van der Vlies: "[OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
