<?
$subject_val = "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 13:01:52 2014" -->
<!-- isoreceived="20141007170152" -->
<!-- sent="Tue, 7 Oct 2014 17:01:50 +0000" -->
<!-- isosent="20141007170150" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()" -->
<!-- id="A9693E26-BC3E-4B2F-A75D-1880E62CF1DE_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAvDA16UbHuOGN7mKPxvqdmAnsZJLW4XNsHJzx6YfQyTxMfNiQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 13:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16008.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now done:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/commit/a422d893b8e63347deb71bbaaa14ca25ddb1f192">https://github.com/open-mpi/ompi/commit/a422d893b8e63347deb71bbaaa14ca25ddb1f192</a>
<br>
<p><p>On Oct 3, 2014, at 6:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using calloc() only subject to --with-valgrind sounds good to me.
</span><br>
<span class="quotelev1">&gt; If I'd known such a option exists, I'd not have suggested the MCA param idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 3, 2014 at 3:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; How about a compromise -- how about enabling calloc() when --with-valgrind is specified on the command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., don't tie it to debug builds, but to valgrind-enabled builds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2014, at 6:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I agree with George that zeroing memory only in the debug builds could hide bugs, and thus would want to see the debug and non-debug builds have the same behavior (both malloc or both calloc).  So, I also agree this looks initially like a hard choice.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What about using malloc() in non-debug builds and having a MCA param control malloc-vs-calloc in a debug build (with malloc being the default)?  The param name could be something with &quot;valgrind&quot; in it to allow it to control any other &quot;paranoid code&quot; that may be introduced just to silence valgrind warnings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 3, 2014 at 3:02 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It&#146;s a tough call. This proposal will create significant differences between the debug and fast builds. As the entire objects will be set to zero this might reduce bugs in the debug build, bugs that will be horribly difficult to track in any non-debug builds. Moreover, if the structures are carefully accessed in our code, adding such a disruptive initialization just to prevent valgrind from reporting false-positive about uninitialized reads in memcpy is too costly as a solution (I am also conscient that it will be almost impossible to write a valgrind suppression rule for the specific case you mention).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some parts of the code have (or at least had) some level of cleanness for the gaps in the structures. The solution was to minimally zero-fy the gaps, maintaining the same behavior between debug and non-debug builds. However, in order to do this one need to know the layout of the structure, so this is not a completely generic solution&#133;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 3, 2014, at 16:54 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHAT: change the malloc() to calloc() in opal_obj_new() (perhaps only in debug builds?)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHY: Drastically reduces valgrind output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHERE: see <a href="https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467">https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TIMEOUT: teleconf, Tue, Oct 14 (there's no rush)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I was debugging some code today and came across a bunch of places where we write structs down various IPC mechanisms, and the structs contain holes.  In most places, the performance doesn't matter / the readability of struct members is more important, so we haven't re-ordered the structs to remove holes.  But consequently, those holes end up uninitialized, and therefore memcpy()ing or write()ing instances of these structs causes valgrind to emit warnings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The patch below eliminates most (all?) of these valgrind warnings -- in debug builds, it changes the malloc() inside OBJ_NEW to a calloc().
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Upon a little more thought, however, I wonder if we use OBJ_NEW in any fast code paths (other than in bulk, such as when we need to grow a free list).  Specifically: would it be terrible to *always* calloc -- not just for debug builds?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; diff --git a/opal/class/opal_object.h b/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; index 7012bac..585f13e 100644
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- a/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ b/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -464,7 +464,11 @@ static inline opal_object_t *opal_obj_new(opal_class_t * cl
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     opal_object_t *object;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +#if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    object = (opal_object_t *) calloc(1, cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +#else
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +#endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         opal_class_initialize(cls);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16001.php">http://www.open-mpi.org/community/lists/devel/2014/10/16001.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16004.php">http://www.open-mpi.org/community/lists/devel/2014/10/16004.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16005.php">http://www.open-mpi.org/community/lists/devel/2014/10/16005.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16006.php">http://www.open-mpi.org/community/lists/devel/2014/10/16006.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16008.php">http://www.open-mpi.org/community/lists/devel/2014/10/16008.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16008.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
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
