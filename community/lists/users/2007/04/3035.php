<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 12:14:25 2007" -->
<!-- isoreceived="20070406161425" -->
<!-- sent="Fri, 6 Apr 2007 18:14:12 +0200" -->
<!-- isosent="20070406161412" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="F7E552A0-A74C-4B71-B2B8-FBCB96DB2116_at_sara.nl" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="399B1E0B-E3F0-40F6-851A-41FBACFE1C5A_at_cisco.com" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-06 12:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>In reply to:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2007, at 2:14 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 5, 2007, at 3:50 PM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am just try to enable  PBS /Torque support in Open MPI with  
</span><br>
<span class="quotelev2">&gt;&gt; the --
</span><br>
<span class="quotelev2">&gt;&gt; with-tm option.  My question is why the utility 'pbs-config' is not
</span><br>
<span class="quotelev2">&gt;&gt; used to determine the location of the include/library directory.  It
</span><br>
<span class="quotelev2">&gt;&gt; is standard included in the torque software.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # pbs-config ---cflags
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/include/torque
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # pbs-config --libs
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; -ltorque
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably because we weren't aware that that script was available.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should probably incorporate its use in future releases; I'll
</span><br>
<span class="quotelev1">&gt; create a ticket for a future enhancement.  Thanks for the heads-up!
</span><br>
<span class="quotelev1">&gt;
</span><br>
No thanks
<br>
<p><span class="quotelev1">&gt; Have you run into a situation where OMPI gets the wrong flags because
</span><br>
<span class="quotelev1">&gt; it's not using pbs-config?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, We install the torque header files in /usr/include/torque and  
<br>
the libraries in /usr/lib. This setup does not work with openmpi  
<br>
configure script. When i use the --with-tm option and set it to /usr/ 
<br>
include/torque the configiure script appends &quot;include&quot; to it, so it  
<br>
becomes /usr/include/torque/include.
<br>
<p><pre>
--
Bas van der Vlies
basv_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>In reply to:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
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
