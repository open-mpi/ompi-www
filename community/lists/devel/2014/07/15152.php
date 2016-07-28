<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 15:49:42 2014" -->
<!-- isoreceived="20140715194942" -->
<!-- sent="Tue, 15 Jul 2014 19:49:40 +0000" -->
<!-- isosent="20140715194940" -->
<!-- name="Pritchard, Howard r" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05AB3663_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="etPan.53c576b5.5bd062c2.407_at_alander" -->
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
<strong>From:</strong> Pritchard, Howard r (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 15:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>

<br>
Is the opal library explicitly closed by a dlclose?  
<br>

<br>
I don't think there's anything wrong with using ctor/dtors in shared libraries,
<br>
but one does need to make sure that in these functions there's no assumptions
<br>
about ordering of them wrt to other ctors/dtors.    shared libraries explicitly
<br>
loaded/unloaded by the executable should have less of an issue with respect
<br>
to these ordering issues. 
<br>

<br>
Also, for static linking, care needs to be taken.  It may be necessary to use
<br>
whole-archive etc. on the ld line to get the ctor/dtors actually loaded in the
<br>
executable.  
<br>

<br>
Howard
<br>

<br>

<br>
-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Tuesday, July 15, 2014 12:45 PM
<br>
To: Open MPI Developers; Hjelm, Nathan Thomas
<br>
Subject: Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal
<br>

<br>
I withdraw my comment on this, it turns out I &#226;&#128;&#156;misspoke&#226;&#128;&#157; (or in other words I was wrong about the class cleanup). The base class structures are stored as objects in the corresponding shared library memory region, and these regions become unavailable once a shared library is unloaded. As a result we are utterly unable to cleanup the classes at the OPAL layer after the other shared libraries have been unloaded.
<br>

<br>
Moreover, Nathan was right in his proposal, the only possible cleanup approach is to use the destructor attribute of the OPAL library to cleanup the mess once all libraries are unloaded.
<br>

<br>
&#194;&#160; George.
<br>

<br>

<br>

<br>
On July 15, 2014 at 1:17:26 AM, George Bosilca (bosilca_at_[hidden]) wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fixing the classes to correctly tear down everything was a two lines 
</span><br>
<span class="quotelev1">&gt; patch. However, this doesn&#226;&#128;&#153;t fix the bigger issue, which is related to 
</span><br>
<span class="quotelev1">&gt; the fact that not all frameworks are correctly teared down, and when 
</span><br>
<span class="quotelev1">&gt; they are they leave behind char* parameters not set to NULL, and that 
</span><br>
<span class="quotelev1">&gt; the framework infrastructure is not keen of being reinitialized due to too many globals not correctly handled.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I correctly understand the meaning of the proposed destructor 
</span><br>
<span class="quotelev1">&gt; approach, it is only called when the library is being unloaded or when 
</span><br>
<span class="quotelev1">&gt; the application exit. Thus, adding the destructor is a bandaid, 
</span><br>
<span class="quotelev1">&gt; addressing a marginal annoyance (partially keeping valgrind
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
<span class="quotelev2">&gt; &gt; What: Add a library destructor function to OPAL. The new function 
</span><br>
<span class="quotelev2">&gt; &gt; would take care of cleaning up some of OPAL's state (closing 
</span><br>
<span class="quotelev2">&gt; &gt; frameworks, shutting down MCA, etc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why: OPAL can not currently be re-initialized. There are numerous 
</span><br>
<span class="quotelev2">&gt; &gt; problems throughout the project that will make it difficult (but not
</span><br>
<span class="quotelev2">&gt; &gt; impossible) to get opal in a state where we can allow 
</span><br>
<span class="quotelev2">&gt; &gt; re-initialization. Additionally, there are probably arguments 
</span><br>
<span class="quotelev2">&gt; &gt; against making opal re-initable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal not being re-initializable would not normally be a problem 
</span><br>
<span class="quotelev2">&gt; &gt; except that the following code sequence always crashes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_T_Init_thread (); &lt;-- Calls opal_init_util() MPI_T_Finalize (); 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;-- Calls opal_finalize_util()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init (); &lt;-- SEGV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This happens because MPI_T_Finalize() calls opal_finalize_util() to 
</span><br>
<span class="quotelev2">&gt; &gt; ensure maximum valgrind cleanness. This call causes OPAL to tear 
</span><br>
<span class="quotelev2">&gt; &gt; down OPAL classes (among other things) leading to the SEGV on the 
</span><br>
<span class="quotelev2">&gt; &gt; next call to opal_init()/opal_init_util(). There is an open ticket on this issue:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4490">https://svn.open-mpi.org/trac/ompi/ticket/4490</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To fix this problem I want to add a destructor function to OPAL. 
</span><br>
<span class="quotelev2">&gt; &gt; This function would take on some of the current functionality of 
</span><br>
<span class="quotelev2">&gt; &gt; opal_finalize_util(). This would solve the above issue without 
</span><br>
<span class="quotelev2">&gt; &gt; having to update OPAL to allow re-initialization.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For those not familiar with destructor functions. They are always 
</span><br>
<span class="quotelev2">&gt; &gt; called at the end of execution or when the library is closed 
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15140.php">http://www.open-mpi.org/community/lists/devel/2014/07/15140.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15150.php">http://www.open-mpi.org/community/lists/devel/2014/07/15150.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
