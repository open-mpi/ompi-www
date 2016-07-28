<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 13:13:21 2007" -->
<!-- isoreceived="20070816171321" -->
<!-- sent="Thu, 16 Aug 2007 13:13:26 -0400" -->
<!-- isosent="20070816171326" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="46C485B6.9080801_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="275880DA-C4D2-41D4-A8B7-F29C33A16A1D_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 13:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 11:48 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define ORTE_RML_TAG_UDAPL                  25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define ORTE_RML_TAG_OPENIB                 26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define ORTE_RML_TAG_MVAPI                  27
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that UDAPL, OPENIB, MVAPI should not appear anywhere in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE layer ...
</span><br>
<span class="quotelev2">&gt;&gt; I tend to agree with you. However, the precedent has been set long ago
</span><br>
<span class="quotelev2">&gt;&gt; to put all these constants in this file (i.e. there is
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_WIREUP and ORTE_RML_TAG_SM_BACK_FILE_CREATED which are  
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; used in OMPI), and it makes sense to have all tags defined in one  
</span><br>
<span class="quotelev2">&gt;&gt; place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think George's point is that the names UDAPL, OPENIB, MVAPI are all  
</span><br>
<span class="quotelev1">&gt; specific to the OMPI layer and refer to specific components.  The  
</span><br>
<span class="quotelev1">&gt; generic action WIREUP was probably somewhat forgivable, but  
</span><br>
<span class="quotelev1">&gt; SM_BACK_FILE_CREATED is probably the same kind of abstraction break  
</span><br>
<span class="quotelev1">&gt; as UDAPL/OPENIB/MVAPI, which is your point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you're both right.  :-)  But Tim's falling back on an older (and  
</span><br>
<span class="quotelev1">&gt; unfortunately bad) precedent.  It would be nice to not extend that  
</span><br>
<span class="quotelev1">&gt; bad precedent, IMHO...
</span><br>
<p>I really don't care where the constants are defined, but they do need to 
<br>
be unique. I think it is easiest if all the constants are stored in one 
<br>
file, but if someone else wants to chop them up, that's fine with me. We 
<br>
would just have to be more careful when adding new constants to check 
<br>
both files.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we end up doing the runtime services layer, all the ompi tags would
</span><br>
<span class="quotelev2">&gt;&gt; be defined in the RSL, and this will become moot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; True.  We will need a robust tag reservation system, though, to  
</span><br>
<span class="quotelev1">&gt; guarantee that every process gets the same tag values (e.g., if udapl  
</span><br>
<span class="quotelev1">&gt; is available on some nodes but not others, will that cause openib to  
</span><br>
<span class="quotelev1">&gt; have different values on different nodes?  And so on).
</span><br>
Not really. All that is needed is a list of constants (similar to the 
<br>
one in rml_types.h). If a rsl component doesn't like the particular 
<br>
constant tag values, they can do whatever they want in their 
<br>
implementation, as long as a messages sent on a tag is received on the 
<br>
same tag.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Alexander Margolin: "[OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
