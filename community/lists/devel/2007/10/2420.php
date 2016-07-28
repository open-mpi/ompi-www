<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 07:43:39 2007" -->
<!-- isoreceived="20071011114339" -->
<!-- sent="Thu, 11 Oct 2007 07:43:28 -0400" -->
<!-- isosent="20071011114328" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Create a new component (for btl)" -->
<!-- id="18A76E63-5080-4805-8E25-97A2D130D92D_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 07:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can always start from scratch using the template in the btl  
<br>
directory ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 11, 2007, at 6:46 AM, Aurelien Bouteiller wrote:
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2420/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2419.php">Aurelien Bouteiller: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
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
