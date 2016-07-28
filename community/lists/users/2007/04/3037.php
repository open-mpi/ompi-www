<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 12:43:11 2007" -->
<!-- isoreceived="20070406164311" -->
<!-- sent="Fri, 6 Apr 2007 18:42:59 +0200" -->
<!-- isosent="20070406164259" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="1FB840A5-3CAA-4363-8E01-DD81ADA447ED_at_sara.nl" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2E5EE5E5-EE7D-4A2D-A295-0617A53E0635_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-06 12:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2007, at 6:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 6, 2007, at 12:14 PM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you run into a situation where OMPI gets the wrong flags  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not using pbs-config?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, We install the torque header files in /usr/include/torque and
</span><br>
<span class="quotelev2">&gt;&gt; the libraries in /usr/lib. This setup does not work with openmpi
</span><br>
<span class="quotelev2">&gt;&gt; configure script. When i use the --with-tm option and set it to /usr/
</span><br>
<span class="quotelev2">&gt;&gt; include/torque the configiure script appends &quot;include&quot; to it, so it
</span><br>
<span class="quotelev2">&gt;&gt; becomes /usr/include/torque/include.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah.  Well, that probably raises the priority a bit.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
;-)
<br>
<p><span class="quotelev1">&gt; Do you know anything about configure scripts / m4?  I can't guarantee
</span><br>
<span class="quotelev1">&gt; that I will be able to look at this in the immediate future, but the
</span><br>
<span class="quotelev1">&gt; place to put this stuff would be in config/ompi_check_tm.m4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Oke i can check it. I know a little bit about configure/m4 scripts.   
<br>
I have seen that one but did not find why include was appended
<br>
to the --with-tm value. I could find that code in configure script.
<br>
<p><span class="quotelev1">&gt; First gut reaction (hardly thinking about the issues much) is that
</span><br>
<span class="quotelev1">&gt; we'd want to skip OMPI_CHECK_PACKAGE if pbs-config is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I use the same approach for my pbs_python package.
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
<li><strong>Next message:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3036.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
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
