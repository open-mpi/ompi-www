<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 10:25:04 2013" -->
<!-- isoreceived="20130820142504" -->
<!-- sent="Tue, 20 Aug 2013 09:25:07 -0500" -->
<!-- isosent="20130820142507" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="001201ce9db1$11b12f80$35138e80$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000e01ce9dae$7956e010$6c04a030$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 10:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah:
<br>
<p>Here's the config.log:
<br>
<p>configure:133950: checking whether IBV_LINK_LAYER_ETHERNET is declared
<br>
configure:133950: gcc -std=gnu99 -c -g -Wall -Wundef -Wno-long-long -Wsign-compare
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration
<br>
-finline-functions -fno-strict-aliasing -pthread
<br>
-I/usr/local/src/ompi-trunk/opal/mca/hwloc/hwloc152/hwloc/include
<br>
-I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent
<br>
-I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent/include  conftest.c &gt;&amp;5
<br>
conftest.c:611: warning: function declaration isn't a prototype
<br>
configure:133950: $? = 0
<br>
configure:133950: result: yes
<br>
<p>And I see it in opal_config.h:
<br>
<p>/* Define to 1 if you have the declaration of `IBV_LINK_LAYER_ETHERNET', and
<br>
&nbsp;&nbsp;&nbsp;to 0 if you don't. */
<br>
#define HAVE_DECL_IBV_LINK_LAYER_ETHERNET 1
<br>
<p>Note the #define is HAVE_DECL_IBV_LINK_LAYER_ETHERNET but the code is checking for
<br>
HAVE_IBV_LINK_LAYER_ETHERNET!
<br>
<p>No _DECL_...
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 20, 2013 9:07 AM
</span><br>
<span class="quotelev1">&gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Open MPI Developers'; 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, August 20, 2013 8:59 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Steve Wise
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 20, 2013, at 9:51 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I checked in the correct fix,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Er, no.  Please re-read my email -- your fix was incorrect (you're overriding the output of an
</span><br>
AC
<br>
<span class="quotelev1">&gt; macro).
</span><br>
<span class="quotelev2">&gt; &gt; :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the correct fix then?  I've never worked with any of this AC stuff...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the existing code (prior to my broken fix), HAVE_IBV_LINK_LAYER_ETHERNET does not get
</span><br>
defined.
<br>
<span class="quotelev1">&gt; Yet the enum and the link_type field are in verbs.h...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
