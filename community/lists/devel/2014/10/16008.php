<?
$subject_val = "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 18:49:02 2014" -->
<!-- isoreceived="20141003224902" -->
<!-- sent="Fri, 3 Oct 2014 15:48:59 -0700" -->
<!-- isosent="20141003224859" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()" -->
<!-- id="CAAvDA16UbHuOGN7mKPxvqdmAnsZJLW4XNsHJzx6YfQyTxMfNiQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C0C8F46-AA20-4DA9-8F40-849AABAB53DE_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 18:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16009.php">Gilles Gouaillardet: "[OMPI devel] ompi github repository is NOT up to date"</a>
<li><strong>Previous message:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>In reply to:</strong> <a href="16006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Using calloc() only subject to --with-valgrind sounds good to me.
<br>
If I'd known such a option exists, I'd not have suggested the MCA param
<br>
idea.
<br>
<p>-Paul
<br>
<p>On Fri, Oct 3, 2014 at 3:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; How about a compromise -- how about enabling calloc() when --with-valgrind
</span><br>
<span class="quotelev1">&gt; is specified on the command line?
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
<span class="quotelev2">&gt; &gt; I agree with George that zeroing memory only in the debug builds could
</span><br>
<span class="quotelev1">&gt; hide bugs, and thus would want to see the debug and non-debug builds have
</span><br>
<span class="quotelev1">&gt; the same behavior (both malloc or both calloc).  So, I also agree this
</span><br>
<span class="quotelev1">&gt; looks initially like a hard choice.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What about using malloc() in non-debug builds and having a MCA param
</span><br>
<span class="quotelev1">&gt; control malloc-vs-calloc in a debug build (with malloc being the default)?
</span><br>
<span class="quotelev1">&gt; The param name could be something with &quot;valgrind&quot; in it to allow it to
</span><br>
<span class="quotelev1">&gt; control any other &quot;paranoid code&quot; that may be introduced just to silence
</span><br>
<span class="quotelev1">&gt; valgrind warnings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 3, 2014 at 3:02 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It's a tough call. This proposal will create significant differences
</span><br>
<span class="quotelev1">&gt; between the debug and fast builds. As the entire objects will be set to
</span><br>
<span class="quotelev1">&gt; zero this might reduce bugs in the debug build, bugs that will be horribly
</span><br>
<span class="quotelev1">&gt; difficult to track in any non-debug builds. Moreover, if the structures are
</span><br>
<span class="quotelev1">&gt; carefully accessed in our code, adding such a disruptive initialization
</span><br>
<span class="quotelev1">&gt; just to prevent valgrind from reporting false-positive about uninitialized
</span><br>
<span class="quotelev1">&gt; reads in memcpy is too costly as a solution (I am also conscient that it
</span><br>
<span class="quotelev1">&gt; will be almost impossible to write a valgrind suppression rule for the
</span><br>
<span class="quotelev1">&gt; specific case you mention).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some parts of the code have (or at least had) some level of cleanness
</span><br>
<span class="quotelev1">&gt; for the gaps in the structures. The solution was to minimally zero-fy the
</span><br>
<span class="quotelev1">&gt; gaps, maintaining the same behavior between debug and non-debug builds.
</span><br>
<span class="quotelev1">&gt; However, in order to do this one need to know the layout of the structure,
</span><br>
<span class="quotelev1">&gt; so this is not a completely generic solution...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 3, 2014, at 16:54 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHAT: change the malloc() to calloc() in opal_obj_new() (perhaps only
</span><br>
<span class="quotelev1">&gt; in debug builds?)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHY: Drastically reduces valgrind output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHERE: see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467">https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467</a>
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
<span class="quotelev3">&gt; &gt; &gt; I was debugging some code today and came across a bunch of places
</span><br>
<span class="quotelev1">&gt; where we write structs down various IPC mechanisms, and the structs contain
</span><br>
<span class="quotelev1">&gt; holes.  In most places, the performance doesn't matter / the readability of
</span><br>
<span class="quotelev1">&gt; struct members is more important, so we haven't re-ordered the structs to
</span><br>
<span class="quotelev1">&gt; remove holes.  But consequently, those holes end up uninitialized, and
</span><br>
<span class="quotelev1">&gt; therefore memcpy()ing or write()ing instances of these structs causes
</span><br>
<span class="quotelev1">&gt; valgrind to emit warnings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The patch below eliminates most (all?) of these valgrind warnings --
</span><br>
<span class="quotelev1">&gt; in debug builds, it changes the malloc() inside OBJ_NEW to a calloc().
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Upon a little more thought, however, I wonder if we use OBJ_NEW in any
</span><br>
<span class="quotelev1">&gt; fast code paths (other than in bulk, such as when we need to grow a free
</span><br>
<span class="quotelev1">&gt; list).  Specifically: would it be terrible to *always* calloc -- not just
</span><br>
<span class="quotelev1">&gt; for debug builds?
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
<span class="quotelev3">&gt; &gt; &gt; @@ -464,7 +464,11 @@ static inline opal_object_t
</span><br>
<span class="quotelev1">&gt; *opal_obj_new(opal_class_t * cl
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
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16001.php">http://www.open-mpi.org/community/lists/devel/2014/10/16001.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16004.php">http://www.open-mpi.org/community/lists/devel/2014/10/16004.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16005.php">http://www.open-mpi.org/community/lists/devel/2014/10/16005.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16006.php">http://www.open-mpi.org/community/lists/devel/2014/10/16006.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16009.php">Gilles Gouaillardet: "[OMPI devel] ompi github repository is NOT up to date"</a>
<li><strong>Previous message:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>In reply to:</strong> <a href="16006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
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
