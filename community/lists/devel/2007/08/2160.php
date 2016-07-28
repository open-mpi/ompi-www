<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 11:53:32 2007" -->
<!-- isoreceived="20070816155332" -->
<!-- sent="Thu, 16 Aug 2007 11:53:35 -0400" -->
<!-- isosent="20070816155335" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with group code" -->
<!-- id="46C472FF.4050600_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20269.128.107.248.220.1187279029.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Date:</strong> 2007-08-16 11:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mohamad,
<br>
<p>2 process was plenty. Like I said, when running in debug mode, it tends 
<br>
to 'work' since memory is initialized to \0 and we fall through. In an 
<br>
optimized build, looking at the mtt results it looks like it segfaults 
<br>
about 10% of the time.
<br>
<p>But if you apply the patch I sent, it will tell you when an invaild 
<br>
lookup happens, which should be every time it runs.
<br>
<p>Tim
<br>
<p>Mohamad Chaarawi wrote:
<br>
<span class="quotelev1">&gt; Hey Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand what you are talking about.
</span><br>
<span class="quotelev1">&gt; Im trying to reproduce the problem. How many processes are your running
</span><br>
<span class="quotelev1">&gt; with, because with the default (4 for the group) it's passing..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mohamad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, August 16, 2007 7:49 am, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I pushed the wrong button and sent this before it was ready....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running into a problem with the ibm test 'group'. I will try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explain what I think is going on, but I do not really understand the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group code so please forgive me if it is wrong...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test creates a group based on MPI_COMM_WORLD (group1), and a group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that has half the procs in group1 (newgroup). Next, all the processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Group_intersection(newgroup,group1,&amp;group2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_group_intersection figures out what procs are needed for group2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_group_incl, passing 'newgroup' and '&amp;group2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This then calls (since I am not using sparse groups)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_group_incl_plist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, ompi_group_plist assumes that the current process is a member
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the passed group ('newgroup'). Thus when it calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_group_peer_lookup on 'newgroup', half of the processes get garbage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back since they are not in 'newgroup'. In most cases, memory is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialized to \0 and things fall through, but we get intermittent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfaults in optimized builds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a patch to a error check which highlights the problem:
</span><br>
<span class="quotelev2">&gt;&gt; Index: group/group.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- group/group.h       (revision 15869)
</span><br>
<span class="quotelev2">&gt;&gt; +++ group/group.h       (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -308,7 +308,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   static inline struct ompi_proc_t* ompi_group_peer_lookup(ompi_group_t
</span><br>
<span class="quotelev2">&gt;&gt; *group, int peer_id)
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;   #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -    if (peer_id &gt;= group-&gt;grp_proc_count) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (peer_id &gt;= group-&gt;grp_proc_count || peer_id &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;           opal_output(0, &quot;ompi_group_lookup_peer: invalid peer index
</span><br>
<span class="quotelev2">&gt;&gt; (%d)&quot;, peer_id);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2161.php">George Bosilca: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2164.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
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
