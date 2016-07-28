<?
$subject_val = "Re: [OMPI users] build trouble";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 16:50:58 2008" -->
<!-- isoreceived="20080229215058" -->
<!-- sent="Fri, 29 Feb 2008 16:50:48 -0500" -->
<!-- isosent="20080229215048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build trouble" -->
<!-- id="C01B094B-0212-49D3-BCF9-C2BDBCAF0865_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.0.9999.0802141230260.11436_at_krasner" -->
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
<strong>Subject:</strong> Re: [OMPI users] build trouble<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 16:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>In reply to:</strong> <a href="5032.php">Anze Slosar: "Re: [OMPI users] build trouble"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anze --
<br>
<p>Sorry for the delay in replying; I've been on travel for 2 weeks.
<br>
<p>I tried a few different ways, but I simply cannot reproduce your  
<br>
error.  It looks like you're running something like:
<br>
<p>./configure --enable-static ...
<br>
<p>And therefore OMPI is building both static and shared libraries, which  
<br>
causes a different build path (building objects with prefixes and in  
<br>
subdirectories and the like).  However, this works fine for me on my  
<br>
systems.  :-\
<br>
<p>If you want both shared and static builds, perhaps try building OMPI  
<br>
first static (--enable-static and --disable-shared) and then again  
<br>
shared (no flags necessary; this is the default).  Does this work for  
<br>
you?
<br>
<p><p>On Feb 14, 2008, at 4:27 PM, Anze Slosar wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2008, at 9:59 PM, Anze Slosar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/group/cosmos/slosar/openmpi-1.2.4/opal/libltdl'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** No rule to make target `lt__strl/home/slosar/util.lo',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by `libltdlc.la'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a very odd error -- I'm assuming /home/slosar is your $HOME.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, very odd error, indeed. I attach outputs of configure and make.  
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anze
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .out.gz&gt;&lt;make.out.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>In reply to:</strong> <a href="5032.php">Anze Slosar: "Re: [OMPI users] build trouble"</a>
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
