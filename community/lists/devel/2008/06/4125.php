<?
$subject_val = "Re: [OMPI devel] SM BTL NUMA awareness patches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 10:36:03 2008" -->
<!-- isoreceived="20080612143603" -->
<!-- sent="Thu, 12 Jun 2008 17:35:50 +0300" -->
<!-- isosent="20080612143550" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL NUMA awareness patches" -->
<!-- id="453d39990806120735m3de57efj30bddd5376f319b6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44079e5f0806111500n70bc8004k7d7d1e8e8fb5b03d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM BTL NUMA awareness patches<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 10:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4126.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK,
<br>
I will commit it next week.
<br>
I did saw performance improvement in the worst scenario. I believe that with
<br>
increasing numbers of CPUs the improvement will more noticable.
<br>
<p>On Thu, Jun 12, 2008 at 1:00 AM, Brad Benton &lt;bradford.benton_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked over the code more and did some initial tests with it.  It
</span><br>
<span class="quotelev1">&gt; didn't seem to hurt anything in the default case.  I also consulted with
</span><br>
<span class="quotelev1">&gt; George and he would like to see these patches get in for 1.3.  Since it
</span><br>
<span class="quotelev1">&gt; seems to do no harm in the default case, I am okay with that as well.  So,
</span><br>
<span class="quotelev1">&gt; unless anyone else has objections, please go ahead and apply this to the
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, in your testing, were you able to measure any noticeable performance
</span><br>
<span class="quotelev1">&gt; improvements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; --brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 10, 2008 at 2:32 PM, Brad Benton &lt;bradford.benton_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Lenny,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My apologies for not replying sooner.  I would like to look at these
</span><br>
<span class="quotelev2">&gt;&gt; patches a bit more.  Since this adds a feature (NUMA awareness in the SM
</span><br>
<span class="quotelev2">&gt;&gt; BTL) as well as introduces interface changes to the maffinity framework, I
</span><br>
<span class="quotelev2">&gt;&gt; would also like to get George's opinion before deciding whether or not go
</span><br>
<span class="quotelev2">&gt;&gt; bring this into the trunk before branching for 1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --Brad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 10, 2008 at 10:52 AM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev2">&gt;&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't want to bring it on the teleconference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I want to commit Gleb's NUMA awareness patch before you branching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I didn't get any objection / response about it I guess it's OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, Jun 3, 2008 at 2:38 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] SM BTL NUMA awareness patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there are no comments for this patch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can commit it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Gleb Natapov &lt;glebn_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008/5/28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] SM BTL NUMA awareness patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached two patches implement NUMA awareness in SM BTL. The first one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adds two new functions to maffinity framework required by the second
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch. The functions are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_maffinity_base_node_name_to_id() - gets a string that represents a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         memory node name and translates
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         it to memory node id.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_maffinity_base_bind()            - binds an address range to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         memory node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bind() function cannot be implemented by all maffinity components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (There is no way first_use maffinity component can implement such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality). In this case this function can be set to NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The second one adds NUMA awareness support to SM BTL and SM MPOOL. Each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process determines what CPU it is running on and exchange this info with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other local processes. Each process creates separate MPOOL for every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory node available and use them to allocate memory on specific memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes if needed. For instance circular buffer memory is always allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on memory node local to receiver process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To use this on a Linux machine carto file with HW topology description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be provided. Processes should be bound to specific CPU (by specifying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank file for instance) and session directory should be created on tmpfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file system (otherwise Linux ignores memory binding commands) by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting orte_tmpdir_base parameter to point to tmpfs mount point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Questions and suggestion are alway welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4126.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4055.php">Gleb Natapov: "[OMPI devel] SM BTL NUMA awareness patches"</a>
<!-- nextthread="start" -->
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
