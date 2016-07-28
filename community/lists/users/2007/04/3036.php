<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 12:19:03 2007" -->
<!-- isoreceived="20070406161903" -->
<!-- sent="Fri, 6 Apr 2007 12:18:53 -0400" -->
<!-- isosent="20070406161853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="2E5EE5E5-EE7D-4A2D-A295-0617A53E0635_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F7E552A0-A74C-4B71-B2B8-FBCB96DB2116_at_sara.nl" -->
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
<strong>Date:</strong> 2007-04-06 12:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2007, at 12:14 PM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Have you run into a situation where OMPI gets the wrong flags because
</span><br>
<span class="quotelev2">&gt;&gt; it's not using pbs-config?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, We install the torque header files in /usr/include/torque and
</span><br>
<span class="quotelev1">&gt; the libraries in /usr/lib. This setup does not work with openmpi
</span><br>
<span class="quotelev1">&gt; configure script. When i use the --with-tm option and set it to /usr/
</span><br>
<span class="quotelev1">&gt; include/torque the configiure script appends &quot;include&quot; to it, so it
</span><br>
<span class="quotelev1">&gt; becomes /usr/include/torque/include.
</span><br>
<p>Ah.  Well, that probably raises the priority a bit.  :-)
<br>
<p>Do you know anything about configure scripts / m4?  I can't guarantee  
<br>
that I will be able to look at this in the immediate future, but the  
<br>
place to put this stuff would be in config/ompi_check_tm.m4.
<br>
<p>First gut reaction (hardly thinking about the issues much) is that  
<br>
we'd want to skip OMPI_CHECK_PACKAGE if pbs-config is used.
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
<li><strong>Next message:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
