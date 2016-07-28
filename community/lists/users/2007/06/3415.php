<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 14:21:02 2007" -->
<!-- isoreceived="20070608182102" -->
<!-- sent="Fri, 8 Jun 2007 14:20:50 -0400" -->
<!-- isosent="20070608182050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="FB0D09B0-A226-4EFD-97B5-690B47224DC9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA04C3FAE5_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>Date:</strong> 2007-06-08 14:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3414.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3414.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 8, 2007, at 2:06 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Yes.  But the /opt/torque directory is just the source, not the actual
</span><br>
<span class="quotelev1">&gt; installed directory.  The actual installed directory on the head  
</span><br>
<span class="quotelev1">&gt; node is
</span><br>
<span class="quotelev1">&gt; the default location of /usr/lib/something.  And that is not  
</span><br>
<span class="quotelev1">&gt; accessable
</span><br>
<span class="quotelev1">&gt; by every node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But should it matter if it's not accessable if I don't specify
</span><br>
<span class="quotelev1">&gt; --with-tm?  I was wondering if ./configure detects torque has been
</span><br>
<span class="quotelev1">&gt; installed, and then builds the associated components under the
</span><br>
<span class="quotelev1">&gt; assumption that it's available.
</span><br>
<p>This is what OMPI does.
<br>
<p>However, if you only have static libraries for Torque, the issue  
<br>
should be moot -- the relevant bits should be statically linked into  
<br>
the OMPI tm plugins.  But if your Torque libraries are shared, then  
<br>
you do need to have them available on all nodes for OMPI to be able  
<br>
to leverage native Torque/TM support.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3414.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3414.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
