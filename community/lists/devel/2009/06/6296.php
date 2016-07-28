<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 04:22:38 2009" -->
<!-- isoreceived="20090622082238" -->
<!-- sent="Mon, 22 Jun 2009 11:22:32 +0300" -->
<!-- isosent="20090622082232" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="453d39990906220122i16817ad6g674fe6033e23874d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-06-22 04:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I personally prefer the way it's now.
<br>
This way guaranties me total control over mapping and allocating slots.
<br>
When I am using rankfile mapper, I know exactly what and where I am putting,
<br>
OS can easily oversubscribe my CPU with unmapped by rankfile processes. I am
<br>
also not sure how it will effect users that have schedulers.
<br>
I am also not sure that users, who got used to work with hostfile would
<br>
change their scripts according to the mapper.
<br>
Lenny.
<br>
<p>On Mon, Jun 22, 2009 at 1:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Had a chance to think about how this might be done, and looked at it for
</span><br>
<span class="quotelev1">&gt; awhile after getting home. I -think- I found a way to do it, but there are a
</span><br>
<span class="quotelev1">&gt; couple of caveats:
</span><br>
<span class="quotelev1">&gt; 1. Len's point about oversubscribing without warning would definitely hold
</span><br>
<span class="quotelev1">&gt; true - this would positively be a &quot;user beware&quot; option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. there could be no RM-provided allocation, hostfile, or -host options
</span><br>
<span class="quotelev1">&gt; specified. Basically, I would be adding the &quot;read rankfile&quot; option to the
</span><br>
<span class="quotelev1">&gt; end of the current allocation determination procedure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would still allow more procs than shown in the rankfile (mapping the rest
</span><br>
<span class="quotelev1">&gt; bynode on the nodes specified in the rankfile - can't do byslot because I
</span><br>
<span class="quotelev1">&gt; don't know how many slots are on each node), which means the only change in
</span><br>
<span class="quotelev1">&gt; behavior would be the forced bynode mapping of unspecified procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So use of this option will entail some risks and a slight difference in
</span><br>
<span class="quotelev1">&gt; behavior, but would relieve you from the burden of having to provide a
</span><br>
<span class="quotelev1">&gt; hostfile. I'm not personally convinced it is worth the risk and probable
</span><br>
<span class="quotelev1">&gt; user complaints of &quot;it didn't work&quot;, but since we don't use this option, I
</span><br>
<span class="quotelev1">&gt; don't have a strong opinion on the matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's just avoid going back-and-forth over wanting it, or how it should be
</span><br>
<span class="quotelev1">&gt; implemented - let's get it all ironed out, and then implement it once, like
</span><br>
<span class="quotelev1">&gt; we finally did at the end with the whole hostfile thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you want me to do this - it obviously isn't at the top of my
</span><br>
<span class="quotelev1">&gt; priority list, but still could be done in the next few weeks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 21, 2009, at 9:00 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in response,
</span><br>
<span class="quotelev1">&gt; I totally agree with Ralph that it's not as easy as it seems,
</span><br>
<span class="quotelev1">&gt; 1. rankfile mapper uses already allocated machines ( by scheduler or
</span><br>
<span class="quotelev1">&gt; hostfile ), by using rankfile as a hostfile we can run into problem where
</span><br>
<span class="quotelev1">&gt; trying to use unallocated nodes, what can hang the run.
</span><br>
<span class="quotelev1">&gt; 2. we can't define in rankfile number of slots on each machine, which means
</span><br>
<span class="quotelev1">&gt; oversubscribing can take place without any warning.
</span><br>
<span class="quotelev1">&gt; 3. I personally dont see any problem using hostfile, even if it has
</span><br>
<span class="quotelev1">&gt; redundant info, hostfile and rankfile belong to different layers in the
</span><br>
<span class="quotelev1">&gt; system and solve different problems. The original hostfile ( if I recall
</span><br>
<span class="quotelev1">&gt; correctly ) could bind rank to the node, but the syntax wasn't very flexible
</span><br>
<span class="quotelev1">&gt; and clear.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 21, 2009 at 5:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me suggest a two-step process, then:
</span><br>
<span class="quotelev2">&gt;&gt; 1. let's change the error message as this is easily done and thus can be
</span><br>
<span class="quotelev2">&gt;&gt; done now
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I can look at how to eat the rankfile as a hostfile. This may not even
</span><br>
<span class="quotelev2">&gt;&gt; be possible - the problem is that the entire system is predicated on certain
</span><br>
<span class="quotelev2">&gt;&gt; ordering due to our framework architecture. So we get an allocation, and
</span><br>
<span class="quotelev2">&gt;&gt; then do a mapping against that allocation, filtering the allocation through
</span><br>
<span class="quotelev2">&gt;&gt; hostfiles, -host, and other options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the time we reach the rankfile mapper, we have already determined that
</span><br>
<span class="quotelev2">&gt;&gt; we don't have an allocation and have to abort. It is the rankfile mapper
</span><br>
<span class="quotelev2">&gt;&gt; itself that looks for the -rankfile option, so the system can have no
</span><br>
<span class="quotelev2">&gt;&gt; knowledge that someone has specified that option before that point - and
</span><br>
<span class="quotelev2">&gt;&gt; thus, even if I could parse the rankfile, I don't know it was given!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What will take time is to figure out a way to either:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) allow us to run the mapper even though we don't have any nodes we know
</span><br>
<span class="quotelev2">&gt;&gt; about, and allow the mapper to insert the nodes itself - without causing
</span><br>
<span class="quotelev2">&gt;&gt; non-rankfile uses to break (which could be a major feat); or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) have the overall system check for the rankfile option and pass it as a
</span><br>
<span class="quotelev2">&gt;&gt; hostfile as well, assuming that a hostfile wasn't also given, no RM-based
</span><br>
<span class="quotelev2">&gt;&gt; allocation exists, etc. - which breaks our abstraction rules and also opens
</span><br>
<span class="quotelev2">&gt;&gt; a possible can of worms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either way, I also then have to teach the hostfile parser how to realize
</span><br>
<span class="quotelev2">&gt;&gt; it is a rankfile format and convert the info in it into what we expected to
</span><br>
<span class="quotelev2">&gt;&gt; receive from a hostfile - another non-trivial problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm willing to give it a try - just trying to make clear why my response
</span><br>
<span class="quotelev2">&gt;&gt; was negative. It isn't as simple as it sounds...which is why Len and I
</span><br>
<span class="quotelev2">&gt;&gt; didn't pursue it when this was originally developed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jun 21, 2009 at 5:28 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Being a part of these discussions I can understand your reticence to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reopen this discussion.  However, I think this is a major usability issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with this feature which actually is fairly important in order to get things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run performant. Which IMO is important.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said I think there are one of two things that could be done to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mitigate the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.  To eliminate the element of surprise by changing mpirun to eat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rankfile without the hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.  To change the error message to something understandable by the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know they might be missing the hostfile option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again I understand this topic is frustrating and there are some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boundaries with the design that make these two option orthogonal to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other but I really believe we need to make the rankfile option something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is easily usable by our users.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Having gone around in circles on hostfile-related issues for over five
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; years now, I honestly have little motivation to re-open the entire
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussion again. It doesn't seem to be that daunting a requirement for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those who are using it, so I'm inclined to just leave well enough alone.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    The two files have a slightly different format
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Agreed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    and completely different meaning.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Somewhat agreed.  They're both related to mapping processes onto a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The hostfile specifies how many slots are on a node. The rankfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    specifies a rank and what node/slot it is to be mapped onto.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Agreed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Rankfiles can use relative node indexing and refer to nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    received from a resource manager - i.e., without any hostfile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    % cat rankfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    rank 0=node0 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    rank 1=node1 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Rankfile claimed host node1 that was not allocated or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    oversubscribed it's slots:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    0 on node0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1 on node1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    It seems to me that the rankfile has sufficient information to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    express what I want it to do.  But mpirun won't accept this.  To
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    fix this, I have to, e.g., supply/maintain/specify redundant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    information in a hostfile or host list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     So the files are intentionally quite different. Trying to combine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    them would be rather ugly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Right.  And my issue is that I'm forced to use both when I only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    want rankfile functionality.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        In order to use &quot;mpirun --rankfile&quot;, I also need to specify
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        hosts/hostlist.  But that information is redundant with what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I provide in the rankfile.  So, from a user's point of view,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        this strikes me as broken.  Yes?  Should I file a ticket, or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        am I missing something here about this functionality?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
