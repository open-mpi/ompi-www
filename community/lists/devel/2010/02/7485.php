<?
$subject_val = "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 07:14:49 2010" -->
<!-- isoreceived="20100225121449" -->
<!-- sent="Thu, 25 Feb 2010 20:14:43 +0800" -->
<!-- isosent="20100225121443" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?" -->
<!-- id="632a27d11002250414h791f8b0dsdb7996b781326368_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="983D3795-44FB-4F10-8984-FA53DDE19920_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 07:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7486.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7484.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Reply:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot! i got it.Could you introduce some more materials for me to get
<br>
better understood of the following functions:
<br>
(1):/ompi/mca/pml/ob1/pml_ob1.c/mca_pml_ob1_add_procs
<br>
(2):/ompi/mca/bml/r2/bml_r2.c/mca_bml_r2_add_procs
<br>
(3):/ompi/mca/btl/tcp/btl_tcp.c/mca_btl_tcp_add_procs
<br>
especially the second function, it's really hard to totally understand these
<br>
functions.
<br>
Thanks &amp; Regards
<br>
Yaohui Hu
<br>
On Thu, Feb 25, 2010 at 10:34 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 24, 2010, at 12:16 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl is the component responsible for a particular type of fabric.
</span><br>
<span class="quotelev1">&gt; Endpoint is somewhat the instantiation of a btl to reach a particular
</span><br>
<span class="quotelev1">&gt; destination on a particular fabric, proc is the generic name and properties
</span><br>
<span class="quotelev1">&gt; of a destination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few more words here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl = Byte Transfer Layer.  It's our name for the framework that governs
</span><br>
<span class="quotelev1">&gt; one flavor of point-to-point communications in the MPI layer.  Components in
</span><br>
<span class="quotelev1">&gt; this framework are used by the ob1 and csum PMLs to effect MPI
</span><br>
<span class="quotelev1">&gt; point-to-point communications (they're used in other ways, too, but let's
</span><br>
<span class="quotelev1">&gt; start at the beginning here...).  There are several btl components: tcp, sm
</span><br>
<span class="quotelev1">&gt; (shared memory), self (process loopback), openib (OpenFabrics), ...etc.
</span><br>
<span class="quotelev1">&gt;  Each one of these effects communications over a different network type.
</span><br>
<span class="quotelev1">&gt;  For purposes of this discussion, &quot;component&quot; == &quot;plugin&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The btl plugin is loaded into an MPI process and its component open/query
</span><br>
<span class="quotelev1">&gt; functions are called.  If the btl component determines that it wants to run,
</span><br>
<span class="quotelev1">&gt; it returns one or more modules.  Typically, btls return a module for every
</span><br>
<span class="quotelev1">&gt; interface that they find.  For example, if the openib module finds 2
</span><br>
<span class="quotelev1">&gt; OpenFabrics device ports, it'll return 2 modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, we typically describe components as analogous to a C++ class;
</span><br>
<span class="quotelev1">&gt; modules are analogous to instances of that C++ class.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that in many BTL component comments and variables/fields, they
</span><br>
<span class="quotelev1">&gt; typically use shorthand language such as, &quot;The btl then does this...&quot;  Such
</span><br>
<span class="quotelev1">&gt; language almost always refers to a specific module of that btl component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modules are marshalled by the bml and ob1/csum to make an ordered list of
</span><br>
<span class="quotelev1">&gt; who can talk to whom.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Endpoints are data structures used to represent a module's connection to a
</span><br>
<span class="quotelev1">&gt; remote MPI process (proc).  Hence, a BTL component can create multiple
</span><br>
<span class="quotelev1">&gt; modules; each module can create lots of endpoints.  Each endpoint is tied to
</span><br>
<span class="quotelev1">&gt; a specific remote proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 24 f&#233;vr. 2010 &#224; 09:59, hu yaohui a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could someone tell me the relationship between proc,endpoint and btl?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  thanks &amp; regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7486.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7484.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Reply:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
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
