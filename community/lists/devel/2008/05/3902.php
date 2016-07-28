<?
$subject_val = "Re: [OMPI devel] heterogeneous OpenFabrics adapters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 12:24:46 2008" -->
<!-- isoreceived="20080513162446" -->
<!-- sent="Tue, 13 May 2008 11:24:42 -0500" -->
<!-- isosent="20080513162442" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous OpenFabrics adapters" -->
<!-- id="200805131124.42397.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E3CD2D33-5876-4CF5-BB04-C3B40ED9DCA2_at_cisco.com" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 12:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3901.php">Jeff Squyres: "[OMPI devel] tickets for v1.3"</a>
<li><strong>In reply to:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 12 May 2008 07:37:54 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I propose that we should disallow multiple different
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_receive_queues values (or receive_queues values from
</span><br>
<span class="quotelev1">&gt; the INI file) to be used in a single MPI job for the v1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason I'm looking into this heterogeneity stuff is to help
</span><br>
<span class="quotelev1">&gt; Chelsio support their iWARP NIC in OMPI.  Their NIC needs a specific
</span><br>
<span class="quotelev1">&gt; value for mca_btl_openib_receive_queues (specifically: it does not
</span><br>
<span class="quotelev1">&gt; support SRQ and it has the wireup race condition that we discussed
</span><br>
<span class="quotelev1">&gt; before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The major problem is that all the BSRQ information is currently stored
</span><br>
<span class="quotelev1">&gt; in on the openib component -- it is *not* maintained on a per-HCA (or
</span><br>
<span class="quotelev1">&gt; per port) basis.  We *could* move all the BSRQ info to live on the
</span><br>
<span class="quotelev1">&gt; hca_t struct (or even the openib module struct), but it has at least 3
</span><br>
<span class="quotelev1">&gt; big consequences:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. It would touch a lot of code.  But touching all this code is
</span><br>
<span class="quotelev1">&gt; relatively low risk; it will be easy to check for correctness because
</span><br>
<span class="quotelev1">&gt; the changes will either compile or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. There are functions (some of which are static inline) that read the
</span><br>
<span class="quotelev1">&gt; BSRQ data.  These functions would have to take an additional (hca_t*)
</span><br>
<span class="quotelev1">&gt; (or (btl_openib_module_t*)) parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Getting to the BSRQ info will take at least 1 or 2 more
</span><br>
<span class="quotelev1">&gt; dereferences (e.g., module-&gt;hca-&gt;bsrq_info or module-&gt;bsrq_info...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not too concerned about #1 (it's grunt work), but I am a bit
</span><br>
<span class="quotelev1">&gt; concerned about #2 and #3 since at least some of these places are in
</span><br>
<span class="quotelev1">&gt; the critical performance path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given these concerns, I propose the following v1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Add a &quot;receive_queues&quot; field to the INI file so that the Chelsio
</span><br>
<span class="quotelev1">&gt; adapter can run out of the box (i.e., &quot;mpirun -np 4 a.out&quot; with hosts
</span><br>
<span class="quotelev1">&gt; containing Chelsio NICs will get a value for btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt; that will work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - NetEffect NICs will also require overriding
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues, but will likely have a different value than
</span><br>
<span class="quotelev1">&gt; Chelsio NICs (they don't have the wireup race condition that Chelsio
</span><br>
<span class="quotelev1">&gt; does).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Because the BSRQ info is on the component (i.e., global), we should
</span><br>
<span class="quotelev1">&gt; detect when multiple different receive_queues values are specified and
</span><br>
<span class="quotelev1">&gt; gracefully abort.
</span><br>
<p>How would we verify that the remote receive_queues values are the same?  By 
<br>
passing around the receive_queues values in the modex (which I thought we 
<br>
were trying to reduce) or would we pass this around during cpc setup (for 
<br>
those that can support this)?
<br>
<p><span class="quotelev1">&gt; I think it'll be quite uncommon to have a need for two different
</span><br>
<span class="quotelev1">&gt; receive_queues values, and that this proposal will be fine for v1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<p>Sounds reasonable to me.
<br>
<p><span class="quotelev1">&gt; On May 12, 2008, at 6:44 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; After looking at the code a bit, I realized that I completely forgot
</span><br>
<span class="quotelev2">&gt; &gt; that the INI file was invented to solve at least the heterogeneous-
</span><br>
<span class="quotelev2">&gt; &gt; adapters-in-a-host problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I amended the ticket to reflect that that problem is already
</span><br>
<span class="quotelev2">&gt; &gt; solved.  The other part is not, though -- consider two MPI procs on
</span><br>
<span class="quotelev2">&gt; &gt; different hosts, each with an iWARP NIC, but one NIC supports SRQs and
</span><br>
<span class="quotelev2">&gt; &gt; one does not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 12, 2008, at 5:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think that this issue has come up before, but I filed a ticket
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about it because at least one developer (Jon) has a system with both
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IB and iWARP adapters:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1282">https://svn.open-mpi.org/trac/ompi/ticket/1282</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My question: do we care about the heterogeneous adapter scenarios?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For v1.3?  For v1.4?  For ...some version in the future?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the first issue I identified in the ticket is grunt work to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fix (annoying and tedious, but not difficult), but the second one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will be a little dicey -- it has scalability issues (e.g., sending
</span><br>
<span class="quotelev3">&gt; &gt;&gt; around all info in the modex, etc.).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3901.php">Jeff Squyres: "[OMPI devel] tickets for v1.3"</a>
<li><strong>In reply to:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
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
