<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 14:45:12 2014" -->
<!-- isoreceived="20140715184512" -->
<!-- sent="Tue, 15 Jul 2014 14:45:09 -0400" -->
<!-- isosent="20140715184509" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="etPan.53c576b5.5bd062c2.407_at_alander" -->
<!-- charset="utf-8" -->
<!-- inreplyto="etPan.53c4b964.41b71efb.407_at_alander" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 14:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I withdraw my comment on this, it turns out I &#226;&#128;&#156;misspoke&#226;&#128;&#157; (or in other words I was wrong about the class cleanup). The base class structures are stored as objects in the corresponding shared library memory region, and these regions become unavailable once a shared library is unloaded. As a result we are utterly unable to cleanup the classes at the OPAL layer after the other shared libraries have been unloaded.
<br>
<p>Moreover, Nathan was right in his proposal, the only possible cleanup approach is to use the destructor attribute of the OPAL library to cleanup the mess once all libraries are unloaded.
<br>
<p>&#194;&#160; George.
<br>
<p><p><p>On July 15, 2014 at 1:17:26 AM, George Bosilca (bosilca_at_[hidden]) wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fixing the classes to correctly tear down everything was a two lines patch. However,  
</span><br>
<span class="quotelev1">&gt; this doesn&#226;&#128;&#153;t fix the bigger issue, which is related to the fact that not all frameworks  
</span><br>
<span class="quotelev1">&gt; are correctly teared down, and when they are they leave behind char* parameters not set  
</span><br>
<span class="quotelev1">&gt; to NULL, and that the framework infrastructure is not keen of being reinitialized due  
</span><br>
<span class="quotelev1">&gt; to too many globals not correctly handled.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I correctly understand the meaning of the proposed destructor approach, it is only  
</span><br>
<span class="quotelev1">&gt; called when the library is being unloaded or when the application exit. Thus, adding  
</span><br>
<span class="quotelev1">&gt; the destructor is a bandaid, addressing a marginal annoyance (partially keeping valgrind  
</span><br>
<span class="quotelev1">&gt; happy) without addressing the real issue (being able to call MPI_Init after MPI_T_finalize).  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On July 14, 2014 at 6:07:08 PM, Nathan Hjelm (hjelmn_at_[hidden]) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What: Add a library destructor function to OPAL. The new function would
</span><br>
<span class="quotelev2">&gt; &gt; take care of cleaning up some of OPAL's state (closing frameworks,
</span><br>
<span class="quotelev2">&gt; &gt; shutting down MCA, etc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why: OPAL can not currently be re-initialized. There are numerous
</span><br>
<span class="quotelev2">&gt; &gt; problems throughout the project that will make it difficult (but not
</span><br>
<span class="quotelev2">&gt; &gt; impossible) to get opal in a state where we can allow
</span><br>
<span class="quotelev2">&gt; &gt; re-initialization. Additionally, there are probably arguments against
</span><br>
<span class="quotelev2">&gt; &gt; making opal re-initable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal not being re-initializable would not normally be a problem except
</span><br>
<span class="quotelev2">&gt; &gt; that the following code sequence always crashes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_T_Init_thread (); &lt;-- Calls opal_init_util()
</span><br>
<span class="quotelev2">&gt; &gt; MPI_T_Finalize (); &lt;-- Calls opal_finalize_util()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init (); &lt;-- SEGV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This happens because MPI_T_Finalize() calls opal_finalize_util() to
</span><br>
<span class="quotelev2">&gt; &gt; ensure maximum valgrind cleanness. This call causes OPAL to tear down
</span><br>
<span class="quotelev2">&gt; &gt; OPAL classes (among other things) leading to the SEGV on the next call
</span><br>
<span class="quotelev2">&gt; &gt; to opal_init()/opal_init_util(). There is an open ticket on this issue:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4490">https://svn.open-mpi.org/trac/ompi/ticket/4490</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To fix this problem I want to add a destructor function to OPAL. This
</span><br>
<span class="quotelev2">&gt; &gt; function would take on some of the current functionality of
</span><br>
<span class="quotelev2">&gt; &gt; opal_finalize_util(). This would solve the above issue without having to
</span><br>
<span class="quotelev2">&gt; &gt; update OPAL to allow re-initialization.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For those not familiar with destructor functions. They are always called
</span><br>
<span class="quotelev2">&gt; &gt; at the end of execution or when the library is closed
</span><br>
<span class="quotelev2">&gt; &gt; (dl_close). Multiple destructors functions can be defined. Marking a
</span><br>
<span class="quotelev2">&gt; &gt; function as a destructor is simple:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void __attribute__((destructor)) foo (void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When: Setting a timeout for next Friday (July 25).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15140.php">http://www.open-mpi.org/community/lists/devel/2014/07/15140.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
