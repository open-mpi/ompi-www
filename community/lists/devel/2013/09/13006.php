<?
$subject_val = "Re: [OMPI devel] neighborhood collectives issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 11:44:33 2013" -->
<!-- isoreceived="20130927154433" -->
<!-- sent="Fri, 27 Sep 2013 17:44:31 +0200" -->
<!-- isosent="20130927154431" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] neighborhood collectives issues" -->
<!-- id="208BFDED-5ABF-4ECE-BBC8-ACD640444AF1_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130927153247.GC64809_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] neighborhood collectives issues<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 11:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13007.php">Joshua Ladd: "[OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="13005.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>In reply to:</strong> <a href="13004.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13005.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patch looks good. Thanks for the fix.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Sep 27, 2013, at 17:32 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would help to attach the workaround. Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 27, 2013 at 09:31:08AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 27, 2013 at 01:01:01PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 27, 2013, at 3:27 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The addition of the neighborhood collectives to the mca_coll_base_comm_coll_t structure increased the size of the ompi_communicator_t structure over the limit of the predefined padding (PREDEFINED_COMMUNICATOR_PAD). This is not a small change, it will break the ABI with all past version of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is going to be problematic for putting this in 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan: is there another way?  Perhaps even just a stopgap way for the 1.7/1.8 series, and we can keep the &quot;real&quot; way for 1.9+?  I.e., perhaps:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. keep PREDEFINED_COMMUNICATOR_PAD at current value for v1.7.x/1.8, but use a secondary pointer system (which won't be *too* painful; the algorithms are all simple/not optimized, anyway)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. increase PREDEFINED_COMMUNICATOR_PAD on the trunk for v1.9+ (we might want to increase it more than it is already increased, so that we actually have some breathing room for 1.9+)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I pushed a temporary commit to allow the trunk to be built, but we might want a better solution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, it looks like the structure was exactly 128 * sizeof (void *) without peruse. So enabling peruse
</span><br>
<span class="quotelev2">&gt;&gt; would make it go over the max. Attached is a work around so we don't have to increase the size of
</span><br>
<span class="quotelev2">&gt;&gt; the communicator for 1.7.x. George, let me know if you think this solution is acceptable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There a re a new warnings:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c: In function 'libnbc_comm_query':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:196:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:197:49: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:198:47: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:199:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:200:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan: please fix.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok. Will commit a fix an add a comment to coll.h that increasing the size of mca_coll_base_comm_coll_t might
</span><br>
<span class="quotelev2">&gt;&gt; require PREDEFINED_COMMUNICATOR_PAD to be increased. I didn't see an issue with the communicator size because
</span><br>
<span class="quotelev2">&gt;&gt; I never modified the communicator directly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &lt;0001-Prepare-the-neighborhood-collectives-for-1.7.x.patch.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13007.php">Joshua Ladd: "[OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="13005.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>In reply to:</strong> <a href="13004.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13005.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
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
