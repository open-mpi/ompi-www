<?
$subject_val = "Re: [OMPI devel] heterogeneous OpenFabrics adapters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 20:38:09 2008" -->
<!-- isoreceived="20080513003809" -->
<!-- sent="Mon, 12 May 2008 20:37:54 -0400" -->
<!-- isosent="20080513003754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous OpenFabrics adapters" -->
<!-- id="E3CD2D33-5876-4CF5-BB04-C3B40ED9DCA2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7D448302-3A40-4A2C-950B-28D1BDDB09DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] heterogeneous OpenFabrics adapters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 20:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3897.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>I propose that we should disallow multiple different  
<br>
mca_btl_openib_receive_queues values (or receive_queues values from  
<br>
the INI file) to be used in a single MPI job for the v1.3 series.
<br>
<p>More details:
<br>
-------------
<br>
<p>The reason I'm looking into this heterogeneity stuff is to help  
<br>
Chelsio support their iWARP NIC in OMPI.  Their NIC needs a specific  
<br>
value for mca_btl_openib_receive_queues (specifically: it does not  
<br>
support SRQ and it has the wireup race condition that we discussed  
<br>
before).
<br>
<p>The major problem is that all the BSRQ information is currently stored  
<br>
in on the openib component -- it is *not* maintained on a per-HCA (or  
<br>
per port) basis.  We *could* move all the BSRQ info to live on the  
<br>
hca_t struct (or even the openib module struct), but it has at least 3  
<br>
big consequences:
<br>
<p>1. It would touch a lot of code.  But touching all this code is  
<br>
relatively low risk; it will be easy to check for correctness because  
<br>
the changes will either compile or not.
<br>
<p>2. There are functions (some of which are static inline) that read the  
<br>
BSRQ data.  These functions would have to take an additional (hca_t*)  
<br>
(or (btl_openib_module_t*)) parameter.
<br>
<p>3. Getting to the BSRQ info will take at least 1 or 2 more  
<br>
dereferences (e.g., module-&gt;hca-&gt;bsrq_info or module-&gt;bsrq_info...).
<br>
<p>I'm not too concerned about #1 (it's grunt work), but I am a bit  
<br>
concerned about #2 and #3 since at least some of these places are in  
<br>
the critical performance path.
<br>
<p>Given these concerns, I propose the following v1.3:
<br>
<p>- Add a &quot;receive_queues&quot; field to the INI file so that the Chelsio  
<br>
adapter can run out of the box (i.e., &quot;mpirun -np 4 a.out&quot; with hosts  
<br>
containing Chelsio NICs will get a value for btl_openib_receive_queues  
<br>
that will work).
<br>
<p>- NetEffect NICs will also require overriding  
<br>
btl_openib_receive_queues, but will likely have a different value than  
<br>
Chelsio NICs (they don't have the wireup race condition that Chelsio  
<br>
does).
<br>
<p>- Because the BSRQ info is on the component (i.e., global), we should  
<br>
detect when multiple different receive_queues values are specified and  
<br>
gracefully abort.
<br>
<p>I think it'll be quite uncommon to have a need for two different  
<br>
receive_queues values, and that this proposal will be fine for v1.3
<br>
<p>Comments?
<br>
<p><p><p>On May 12, 2008, at 6:44 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; After looking at the code a bit, I realized that I completely forgot
</span><br>
<span class="quotelev1">&gt; that the INI file was invented to solve at least the heterogeneous-
</span><br>
<span class="quotelev1">&gt; adapters-in-a-host problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I amended the ticket to reflect that that problem is already
</span><br>
<span class="quotelev1">&gt; solved.  The other part is not, though -- consider two MPI procs on
</span><br>
<span class="quotelev1">&gt; different hosts, each with an iWARP NIC, but one NIC supports SRQs and
</span><br>
<span class="quotelev1">&gt; one does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2008, at 5:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that this issue has come up before, but I filed a ticket
</span><br>
<span class="quotelev2">&gt;&gt; about it because at least one developer (Jon) has a system with both
</span><br>
<span class="quotelev2">&gt;&gt; IB and iWARP adapters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1282">https://svn.open-mpi.org/trac/ompi/ticket/1282</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question: do we care about the heterogeneous adapter scenarios?
</span><br>
<span class="quotelev2">&gt;&gt; For v1.3?  For v1.4?  For ...some version in the future?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the first issue I identified in the ticket is grunt work to
</span><br>
<span class="quotelev2">&gt;&gt; fix (annoying and tedious, but not difficult), but the second one
</span><br>
<span class="quotelev2">&gt;&gt; will be a little dicey -- it has scalability issues (e.g., sending
</span><br>
<span class="quotelev2">&gt;&gt; around all info in the modex, etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3897.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
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
