<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 12:23:57 2007" -->
<!-- isoreceived="20070816162357" -->
<!-- sent="Thu, 16 Aug 2007 12:23:46 -0400" -->
<!-- isosent="20070816162346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="275880DA-C4D2-41D4-A8B7-F29C33A16A1D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C471B6.2070100_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-08-16 12:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2007, at 11:48 AM, Tim Prins wrote:
<br>
<p><span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_UDAPL                  25
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_OPENIB                 26
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_MVAPI                  27
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that UDAPL, OPENIB, MVAPI should not appear anywhere in the
</span><br>
<span class="quotelev2">&gt;&gt; ORTE layer ...
</span><br>
<span class="quotelev1">&gt; I tend to agree with you. However, the precedent has been set long ago
</span><br>
<span class="quotelev1">&gt; to put all these constants in this file (i.e. there is
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_WIREUP and ORTE_RML_TAG_SM_BACK_FILE_CREATED which are  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; used in OMPI), and it makes sense to have all tags defined in one  
</span><br>
<span class="quotelev1">&gt; place.
</span><br>
<p>I think George's point is that the names UDAPL, OPENIB, MVAPI are all  
<br>
specific to the OMPI layer and refer to specific components.  The  
<br>
generic action WIREUP was probably somewhat forgivable, but  
<br>
SM_BACK_FILE_CREATED is probably the same kind of abstraction break  
<br>
as UDAPL/OPENIB/MVAPI, which is your point.
<br>
<p>So you're both right.  :-)  But Tim's falling back on an older (and  
<br>
unfortunately bad) precedent.  It would be nice to not extend that  
<br>
bad precedent, IMHO...
<br>
<p><span class="quotelev1">&gt; If we end up doing the runtime services layer, all the ompi tags would
</span><br>
<span class="quotelev1">&gt; be defined in the RSL, and this will become moot.
</span><br>
<p>True.  We will need a robust tag reservation system, though, to  
<br>
guarantee that every process gets the same tag values (e.g., if udapl  
<br>
is available on some nodes but not others, will that cause openib to  
<br>
have different values on different nodes?  And so on).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2162.php">Brian Barrett: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
