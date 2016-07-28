<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 11:01:03 2009" -->
<!-- isoreceived="20090621150103" -->
<!-- sent="Sun, 21 Jun 2009 18:00:53 +0300" -->
<!-- isosent="20090621150053" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="453d39990906210800kfb6c323wde837c563c85fe55_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906210715x5219e23dr147e263b6bc3973e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-21 11:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in response,
<br>
I totally agree with Ralph that it's not as easy as it seems,
<br>
1. rankfile mapper uses already allocated machines ( by scheduler or
<br>
hostfile ), by using rankfile as a hostfile we can run into problem where
<br>
trying to use unallocated nodes, what can hang the run.
<br>
2. we can't define in rankfile number of slots on each machine, which means
<br>
oversubscribing can take place without any warning.
<br>
3. I personally dont see any problem using hostfile, even if it has
<br>
redundant info, hostfile and rankfile belong to different layers in the
<br>
system and solve different problems. The original hostfile ( if I recall
<br>
correctly ) could bind rank to the node, but the syntax wasn't very flexible
<br>
and clear.
<br>
Lenny.
<br>
<p>On Sun, Jun 21, 2009 at 5:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me suggest a two-step process, then:
</span><br>
<span class="quotelev1">&gt; 1. let's change the error message as this is easily done and thus can be
</span><br>
<span class="quotelev1">&gt; done now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I can look at how to eat the rankfile as a hostfile. This may not even
</span><br>
<span class="quotelev1">&gt; be possible - the problem is that the entire system is predicated on certain
</span><br>
<span class="quotelev1">&gt; ordering due to our framework architecture. So we get an allocation, and
</span><br>
<span class="quotelev1">&gt; then do a mapping against that allocation, filtering the allocation through
</span><br>
<span class="quotelev1">&gt; hostfiles, -host, and other options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the time we reach the rankfile mapper, we have already determined that
</span><br>
<span class="quotelev1">&gt; we don't have an allocation and have to abort. It is the rankfile mapper
</span><br>
<span class="quotelev1">&gt; itself that looks for the -rankfile option, so the system can have no
</span><br>
<span class="quotelev1">&gt; knowledge that someone has specified that option before that point - and
</span><br>
<span class="quotelev1">&gt; thus, even if I could parse the rankfile, I don't know it was given!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What will take time is to figure out a way to either:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) allow us to run the mapper even though we don't have any nodes we know
</span><br>
<span class="quotelev1">&gt; about, and allow the mapper to insert the nodes itself - without causing
</span><br>
<span class="quotelev1">&gt; non-rankfile uses to break (which could be a major feat); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) have the overall system check for the rankfile option and pass it as a
</span><br>
<span class="quotelev1">&gt; hostfile as well, assuming that a hostfile wasn't also given, no RM-based
</span><br>
<span class="quotelev1">&gt; allocation exists, etc. - which breaks our abstraction rules and also opens
</span><br>
<span class="quotelev1">&gt; a possible can of worms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I also then have to teach the hostfile parser how to realize it
</span><br>
<span class="quotelev1">&gt; is a rankfile format and convert the info in it into what we expected to
</span><br>
<span class="quotelev1">&gt; receive from a hostfile - another non-trivial problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm willing to give it a try - just trying to make clear why my response
</span><br>
<span class="quotelev1">&gt; was negative. It isn't as simple as it sounds...which is why Len and I
</span><br>
<span class="quotelev1">&gt; didn't pursue it when this was originally developed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 21, 2009 at 5:28 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Being a part of these discussions I can understand your reticence to
</span><br>
<span class="quotelev2">&gt;&gt; reopen this discussion.  However, I think this is a major usability issue
</span><br>
<span class="quotelev2">&gt;&gt; with this feature which actually is fairly important in order to get things
</span><br>
<span class="quotelev2">&gt;&gt; to run performant. Which IMO is important.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said I think there are one of two things that could be done to
</span><br>
<span class="quotelev2">&gt;&gt; mitigate the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.  To eliminate the element of surprise by changing mpirun to eat
</span><br>
<span class="quotelev2">&gt;&gt; rankfile without the hostfile.
</span><br>
<span class="quotelev2">&gt;&gt; 2.  To change the error message to something understandable by the user
</span><br>
<span class="quotelev2">&gt;&gt; such that they
</span><br>
<span class="quotelev2">&gt;&gt; know they might be missing the hostfile option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again I understand this topic is frustrating and there are some boundaries
</span><br>
<span class="quotelev2">&gt;&gt; with the design that make these two option orthogonal to each other but I
</span><br>
<span class="quotelev2">&gt;&gt; really believe we need to make the rankfile option something that is easily
</span><br>
<span class="quotelev2">&gt;&gt; usable by our users.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having gone around in circles on hostfile-related issues for over five
</span><br>
<span class="quotelev3">&gt;&gt;&gt; years now, I honestly have little motivation to re-open the entire
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussion again. It doesn't seem to be that daunting a requirement for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those who are using it, so I'm inclined to just leave well enough alone.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The two files have a slightly different format
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Agreed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and completely different meaning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Somewhat agreed.  They're both related to mapping processes onto a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The hostfile specifies how many slots are on a node. The rankfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    specifies a rank and what node/slot it is to be mapped onto.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Agreed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Rankfiles can use relative node indexing and refer to nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    received from a resource manager - i.e., without any hostfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % cat rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rank 0=node0 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rank 1=node1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Rankfile claimed host node1 that was not allocated or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    oversubscribed it's slots:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    0 on node0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 on node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    It seems to me that the rankfile has sufficient information to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    express what I want it to do.  But mpirun won't accept this.  To
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    fix this, I have to, e.g., supply/maintain/specify redundant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    information in a hostfile or host list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     So the files are intentionally quite different. Trying to combine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    them would be rather ugly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Right.  And my issue is that I'm forced to use both when I only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    want rankfile functionality.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        In order to use &quot;mpirun --rankfile&quot;, I also need to specify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        hosts/hostlist.  But that information is redundant with what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        I provide in the rankfile.  So, from a user's point of view,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        this strikes me as broken.  Yes?  Should I file a ticket, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        am I missing something here about this functionality?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
