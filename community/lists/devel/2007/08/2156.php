<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 08:49:55 2007" -->
<!-- isoreceived="20070816124955" -->
<!-- sent="Thu, 16 Aug 2007 08:49:53 -0400" -->
<!-- isosent="20070816124953" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with group code" -->
<!-- id="46C447F1.3040207_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C4473B.60202_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-08-16 08:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2157.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Previous message:</strong> <a href="2155.php">Tim Prins: "[OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2155.php">Tim Prins: "[OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I pushed the wrong button and sent this before it was ready....
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running into a problem with the ibm test 'group'. I will try to 
</span><br>
<span class="quotelev1">&gt; explain what I think is going on, but I do not really understand the 
</span><br>
<span class="quotelev1">&gt; group code so please forgive me if it is wrong...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test creates a group based on MPI_COMM_WORLD (group1), and a group 
</span><br>
<span class="quotelev1">&gt; that has half the procs in group1 (newgroup). Next, all the processes do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Group_intersection(newgroup,group1,&amp;group2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_group_intersection figures out what procs are needed for group2, 
</span><br>
<span class="quotelev1">&gt; then calls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_group_incl, passing 'newgroup' and '&amp;group2'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This then calls (since I am not using sparse groups) ompi_group_incl_plist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, ompi_group_plist assumes that the current process is a member 
</span><br>
<span class="quotelev1">&gt; of the passed group ('newgroup'). Thus when it calls 
</span><br>
<span class="quotelev1">&gt; ompi_group_peer_lookup on 'newgroup', half of the processes get garbage 
</span><br>
<span class="quotelev1">&gt; back since they are not in 'newgroup'. In most cases, memory is 
</span><br>
<span class="quotelev1">&gt; initialized to \0 and things fall through, but we get intermittent 
</span><br>
<span class="quotelev1">&gt; segfaults in optimized builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Here is a patch to a error check which highlights the problem:
<br>
Index: group/group.h
<br>
===================================================================
<br>
--- group/group.h       (revision 15869)
<br>
+++ group/group.h       (working copy)
<br>
@@ -308,7 +308,7 @@
<br>
&nbsp;&nbsp;static inline struct ompi_proc_t* ompi_group_peer_lookup(ompi_group_t
<br>
*group, int peer_id)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;#if OMPI_ENABLE_DEBUG
<br>
-    if (peer_id &gt;= group-&gt;grp_proc_count) {
<br>
+    if (peer_id &gt;= group-&gt;grp_proc_count || peer_id &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;ompi_group_lookup_peer: invalid peer index
<br>
(%d)&quot;, peer_id);
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="2157.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Previous message:</strong> <a href="2155.php">Tim Prins: "[OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2155.php">Tim Prins: "[OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
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
