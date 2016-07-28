<?
$subject_val = "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 21:34:43 2010" -->
<!-- isoreceived="20100225023443" -->
<!-- sent="Wed, 24 Feb 2010 21:34:37 -0500" -->
<!-- isosent="20100225023437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] what's the relationship between proc, endpoint and btl?" -->
<!-- id="983D3795-44FB-4F10-8984-FA53DDE19920_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DF5BE0D1-C576-4AC5-A47C-CCF04C04D588_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] what's the relationship between proc, endpoint and btl?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 21:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7482.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7480.php">Jeff Squyres: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>In reply to:</strong> <a href="7477.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Reply:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2010, at 12:16 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; btl is the component responsible for a particular type of fabric. Endpoint is somewhat the instantiation of a btl to reach a particular destination on a particular fabric, proc is the generic name and properties of a destination.
</span><br>
<p>A few more words here...
<br>
<p>btl = Byte Transfer Layer.  It's our name for the framework that governs one flavor of point-to-point communications in the MPI layer.  Components in this framework are used by the ob1 and csum PMLs to effect MPI point-to-point communications (they're used in other ways, too, but let's start at the beginning here...).  There are several btl components: tcp, sm (shared memory), self (process loopback), openib (OpenFabrics), ...etc.  Each one of these effects communications over a different network type.  For purposes of this discussion, &quot;component&quot; == &quot;plugin&quot;.  
<br>
<p>The btl plugin is loaded into an MPI process and its component open/query functions are called.  If the btl component determines that it wants to run, it returns one or more modules.  Typically, btls return a module for every interface that they find.  For example, if the openib module finds 2 OpenFabrics device ports, it'll return 2 modules.  
<br>
<p>Hence, we typically describe components as analogous to a C++ class; modules are analogous to instances of that C++ class.
<br>
<p>Note that in many BTL component comments and variables/fields, they typically use shorthand language such as, &quot;The btl then does this...&quot;  Such language almost always refers to a specific module of that btl component.
<br>
<p>Modules are marshalled by the bml and ob1/csum to make an ordered list of who can talk to whom.
<br>
<p>Endpoints are data structures used to represent a module's connection to a remote MPI process (proc).  Hence, a BTL component can create multiple modules; each module can create lots of endpoints.  Each endpoint is tied to a specific remote proc.
<br>
<p><span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 24 f&#233;vr. 2010 &#224; 09:59, hu yaohui a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could someone tell me the relationship between proc,endpoint and btl?
</span><br>
<span class="quotelev2">&gt; &gt;                  thanks &amp; regards
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7482.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7480.php">Jeff Squyres: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>In reply to:</strong> <a href="7477.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Reply:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
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
