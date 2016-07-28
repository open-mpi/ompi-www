<?
$subject_val = "Re: [OMPI devel] Still bothered / cannot run an application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 13 20:02:52 2012" -->
<!-- isoreceived="20120714000252" -->
<!-- sent="Fri, 13 Jul 2012 20:02:49 -0400" -->
<!-- isosent="20120714000249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still bothered / cannot run an application" -->
<!-- id="650E7DF9-C64B-4FAE-B532-F5019225863C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FFEF577.9090708_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still bothered / cannot run an application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-13 20:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11294.php">Jeff Squyres: "[OMPI devel] SVN write access annual cleaning"</a>
<li><strong>Previous message:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2012, at 12:04 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; a long time ago, I reported about an error in Open MPI:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/02/18565.php">http://www.open-mpi.org/community/lists/users/2012/02/18565.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, in the 1.6 the behaviour has changed: the test case don't hang forever and block an InfiniBand interface, but seem to run through, and now this error message is printed:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to register memory in the driver.
</span><br>
<span class="quotelev1">&gt; Please check /var/log/messages or dmesg for driver specific failure
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<p>We updated our mechanism, but accidentally left this warning message in (it has since been removed).
<br>
<p>Here's what's happening: Mellanox changed the default amount of registered memory that is available -- they dramatically reduced it.  We haven't gotten a good answer yet as to *why* this change was made.
<br>
<p>You can change some kernel-level parameters to increase it again, and then OMPI should work fine.  Here's an IBM article about it:
<br>
<p><a href="http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB">http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB</a>
<br>
<p>And here's some comments that Mellanox made on a ticket about this issue (including some corrections/clarifications to that IBM article):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3134#comment:12">https://svn.open-mpi.org/trac/ompi/ticket/3134#comment:12</a>
<br>
<p>-----
<br>
<p>Basically, what's happening is that OMPI is behaving badly when it runs out of registered memory.  We have tried two things to make this better (i.e., still perform *correctly*, albeit at a lower performance level), and we're not sure yet whether they work properly.
<br>
<p>1. When OMPI tries to register more memory for an RDMA message transaction and fails, it falls back to send-receive (where we already have pre-registered memory available to use).  However, this can still end up hanging because of OMPI's &quot;lazy connection&quot; scheme -- where OMPI doesn't open IB connections between MPI processes until the first time each pair of processes communicate.  So if OMPI runs out of registered memory and then tries to open a new IB connection to a new peer -- kaboom.
<br>
<p>2. When OMPI starts it, it guesstimates how much memory can be registered and equally divides it between all the OMPI processes *in that job* on the same node.  We had mixed reports of this working or not.  I made a 1.6.x tarball with this fix in it, if you could give it a whirl (with the default low registered memory kernel parameters, to ensure that you can invoke the &quot;out of registered memory&quot; issue):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Use the openmpi-1.6.1ticket3131r26612M.tar.bz2 tarball
<br>
<p>#2 is the latest attempt to fix it, but we haven't had good testing of it.  Could you give it a whirl and let us know what happens?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11294.php">Jeff Squyres: "[OMPI devel] SVN write access annual cleaning"</a>
<li><strong>Previous message:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11282.php">Paul Kapinos: "[OMPI devel] Still bothered / cannot run an application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
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
