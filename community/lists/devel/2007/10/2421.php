<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 08:49:33 2007" -->
<!-- isoreceived="20071011124933" -->
<!-- sent="Thu, 11 Oct 2007 08:49:10 -0400" -->
<!-- isosent="20071011124910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Create a new component (for btl)" -->
<!-- id="A4C74983-4C2F-45EA-AF30-C9343BDEACB4_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CE0E369B-2F6A-446B-9000-2C679DD36E12_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-11 08:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2422.php">George Bosilca: "[OMPI devel] [RFC] update to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you copy the sm btl, be sure to change all function names /  
<br>
variables from &quot;*btl_sm_...&quot; to &quot;*btl_&lt;your_name_name&gt;_...&quot;.  The  
<br>
OMPI configure/build/run system requires that the name of the  
<br>
component be the same as:
<br>
<p>- the directory that it lives in under ompi/mca/btl
<br>
- the well-known component struct
<br>
- the filename of the DSO
<br>
<p>That's how the infrastructure finds your component and all the  
<br>
relevant parts.
<br>
<p>Also, since no one answered this question directly: the shared memory  
<br>
code is only in two directories:
<br>
<p>- ompi/mca/btl/sm
<br>
- ompi/mca/common/sm
<br>
<p>It's split between those two because it was envisioned that a coll  
<br>
component may also want to share some data between the sm btl and  
<br>
itself.  Hence, the stuff in &quot;common&quot; can be shared.
<br>
<p><p>On Oct 11, 2007, at 6:46 AM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; The elegant way is to go the way you are going. Basically you need to
</span><br>
<span class="quotelev1">&gt; provide open and close to  the mca framework, init and finalize to
</span><br>
<span class="quotelev1">&gt; the btl framework and populate all the functions defined in btl.h and
</span><br>
<span class="quotelev1">&gt; btl/base/base.h. Copying an already existing btl is the best way not
</span><br>
<span class="quotelev1">&gt; to forget anybody in that process. You also need to change names in
</span><br>
<span class="quotelev1">&gt; makefile.am. The autogen.sh will do all the smart things and
</span><br>
<span class="quotelev1">&gt; recognize and configure your new component. This is that simple :]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aurelien Bouteiller, PhD
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev1">&gt; +1 865 974 6321
</span><br>
<span class="quotelev1">&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11 oct. 07 &#224; 10:39, Torje Henriksen a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to make my own btl component for shared memory, and
</span><br>
<span class="quotelev2">&gt;&gt; use that
</span><br>
<span class="quotelev2">&gt;&gt; instead of the sm component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First off I would just copy the current sm component, give it
</span><br>
<span class="quotelev2">&gt;&gt; another name
</span><br>
<span class="quotelev2">&gt;&gt; and see if I can get that to load instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an elegant way of adding components, any documentation on
</span><br>
<span class="quotelev2">&gt;&gt; this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to grep for mca_btl_sm etc, but the number of files
</span><br>
<span class="quotelev2">&gt;&gt; returned is
</span><br>
<span class="quotelev2">&gt;&gt; daunting. Do I have to make changes all around ompi, or is there
</span><br>
<span class="quotelev2">&gt;&gt; something
</span><br>
<span class="quotelev2">&gt;&gt; I'm missing? Some automagical goodness, maybe? ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Torje
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2422.php">George Bosilca: "[OMPI devel] [RFC] update to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
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
