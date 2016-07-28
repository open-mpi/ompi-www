<?
$subject_val = "Re: [OMPI devel] ORTE headers in OPAL source";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 22:48:11 2014" -->
<!-- isoreceived="20141020024811" -->
<!-- sent="Sun, 19 Oct 2014 21:48:10 -0500" -->
<!-- isosent="20141020024810" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE headers in OPAL source" -->
<!-- id="CAANzjEmWJDg-iB6VvD5XdMwXkRQWq-0txS_8F6WcGrF4Po8mmA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141017141521.GW25348_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE headers in OPAL source<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-19 22:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16074.php">Paul Hargrove: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15607.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The first variable can probably be moved to opal pretty easily. That is
<br>
used when we need to fully shutdown the BTLs and re-init them on continue.
<br>
We do not have to do that for tcp (since we leave the sockets open), but do
<br>
have to do that for IB, for example.
<br>
<p>The second call is a bit tricky since this is leaving a 'note' about a file
<br>
that needs to be created (touch'ed) on restart in order for the sm BTL
<br>
component to restart properly. For sm we leave the share memory file open
<br>
and inplace when we checkpoint since on 'continue' we just keep using it.
<br>
But on restart the file will no longer be there and can cause the process
<br>
to crash when restarted. So just before restart we touch the file, then
<br>
cleanup the old reference and the old (newly touch'ed) file during the
<br>
restart INC when the process is being rebuilt.
<br>
<p>So that is what that call is doing, just writing the name of the file into
<br>
the metadata for the snapshot. Then opal_restart will touch the file just
<br>
before calling the CRS component to restart the process. So we just need to
<br>
replace it with a call that sets this data in the metadata file. Take a
<br>
look in the CRS components and the CR infrastructure to see how they are
<br>
writing to the snapshot metadata (they might do it directly).
<br>
<p>Unfortunately, I have been away from that code long enough to not easily
<br>
remember how to do it. Let me know if that gives you enough to move forward
<br>
on.
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p><p>On Fri, Oct 17, 2014 at 9:15 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a look at the code (e.g., opal/mca/btl/sm/btl_sm.c) and there are
</span><br>
<span class="quotelev1">&gt; two uses of orte code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (orte_cr_continue_like_restart)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* On restart we need the old file names to exist (not necessarily
</span><br>
<span class="quotelev1">&gt;   * contain content) so the CRS component does not fail when  searching
</span><br>
<span class="quotelev1">&gt;   * for these old file handles. The restart procedure will make sure
</span><br>
<span class="quotelev1">&gt;   * these files get cleaned up appropriately.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  orte_sstore.set_attr(orte_sstore_handle_current,
</span><br>
<span class="quotelev1">&gt;                       SSTORE_METADATA_LOCAL_TOUCH,
</span><br>
<span class="quotelev1">&gt;                       mca_btl_sm_component.sm_seg-&gt;shmem_ds.seg_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have an idea how to fix those two? The first variable
</span><br>
<span class="quotelev1">&gt; orte_cr_continue_like_restart could probably be moved but I am not sure
</span><br>
<span class="quotelev1">&gt; how to handle the sstore call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 09, 2014 at 08:46:31AM -0500, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Those calls should be protected with the CR FT #define - If I remember
</span><br>
<span class="quotelev2">&gt; &gt; correctly. We were using the sstore to track the shared memory file names
</span><br>
<span class="quotelev2">&gt; &gt; so we could clean them up on restart.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if the sstore framework is necessary in this location, since
</span><br>
<span class="quotelev2">&gt; &gt; we should be able to tell opal_crs and it will do the right thing. I can
</span><br>
<span class="quotelev2">&gt; &gt; try to look at it early next week if someone doesn't get to it before
</span><br>
<span class="quotelev1">&gt; then.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Aug 9, 2014 at 7:06 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think you're making a joke, right...?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I see direct calls to ORTE sstore functionality in all three.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 8, 2014, at 5:42 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; These are harmless. They are only used when FT is enabled which
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rarely be the case.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   George.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Fri, Aug 8, 2014 at 4:36 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Here's a few ORTE headers in OPAL source -- can respective owners
</span><br>
<span class="quotelev1">&gt; clean
</span><br>
<span class="quotelev3">&gt; &gt; &gt; these up?  Thanks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -----
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 63:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 62:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 34:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -----
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15570.php">http://www.open-mpi.org/community/lists/devel/2014/08/15570.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15571.php">http://www.open-mpi.org/community/lists/devel/2014/08/15571.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15587.php">http://www.open-mpi.org/community/lists/devel/2014/08/15587.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15588.php">http://www.open-mpi.org/community/lists/devel/2014/08/15588.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev1">&gt; ink, n.:
</span><br>
<span class="quotelev1">&gt;         A villainous compound of tannogallate of iron, gum-arabic,
</span><br>
<span class="quotelev1">&gt;         and water, chiefly used to facilitate the infection of
</span><br>
<span class="quotelev1">&gt;         idiocy and promote intellectual crime.
</span><br>
<span class="quotelev1">&gt;                 -- H.L. Mencken
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16061.php">http://www.open-mpi.org/community/lists/devel/2014/10/16061.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16074.php">Paul Hargrove: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15607.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
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
