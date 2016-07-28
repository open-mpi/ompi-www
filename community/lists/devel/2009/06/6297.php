<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 06:31:01 2009" -->
<!-- isoreceived="20090622103101" -->
<!-- sent="Mon, 22 Jun 2009 06:30:07 -0400" -->
<!-- isosent="20090622103007" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="4A3F5D2F.1060308_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 06:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let us think about this some more.  We'll try and reply later today.
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Had a chance to think about how this might be done, and looked at it 
</span><br>
<span class="quotelev1">&gt; for awhile after getting home. I -think- I found a way to do it, but 
</span><br>
<span class="quotelev1">&gt; there are a couple of caveats:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Len's point about oversubscribing without warning would definitely 
</span><br>
<span class="quotelev1">&gt; hold true - this would positively be a &quot;user beware&quot; option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. there could be no RM-provided allocation, hostfile, or -host 
</span><br>
<span class="quotelev1">&gt; options specified. Basically, I would be adding the &quot;read rankfile&quot; 
</span><br>
<span class="quotelev1">&gt; option to the end of the current allocation determination procedure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would still allow more procs than shown in the rankfile (mapping the 
</span><br>
<span class="quotelev1">&gt; rest bynode on the nodes specified in the rankfile - can't do byslot 
</span><br>
<span class="quotelev1">&gt; because I don't know how many slots are on each node), which means the 
</span><br>
<span class="quotelev1">&gt; only change in behavior would be the forced bynode mapping of 
</span><br>
<span class="quotelev1">&gt; unspecified procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So use of this option will entail some risks and a slight difference 
</span><br>
<span class="quotelev1">&gt; in behavior, but would relieve you from the burden of having to 
</span><br>
<span class="quotelev1">&gt; provide a hostfile. I'm not personally convinced it is worth the risk 
</span><br>
<span class="quotelev1">&gt; and probable user complaints of &quot;it didn't work&quot;, but since we don't 
</span><br>
<span class="quotelev1">&gt; use this option, I don't have a strong opinion on the matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's just avoid going back-and-forth over wanting it, or how it 
</span><br>
<span class="quotelev1">&gt; should be implemented - let's get it all ironed out, and then 
</span><br>
<span class="quotelev1">&gt; implement it once, like we finally did at the end with the whole 
</span><br>
<span class="quotelev1">&gt; hostfile thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you want me to do this - it obviously isn't at the top 
</span><br>
<span class="quotelev1">&gt; of my priority list, but still could be done in the next few weeks.
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
<span class="quotelev2">&gt;&gt; Sorry for the delay in response, 
</span><br>
<span class="quotelev2">&gt;&gt; I totally agree with Ralph that it's not as easy as it seems, 
</span><br>
<span class="quotelev2">&gt;&gt; 1. rankfile mapper uses already allocated machines ( by scheduler or 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile ), by using rankfile as a hostfile we can run into problem 
</span><br>
<span class="quotelev2">&gt;&gt; where trying to use unallocated nodes, what can hang the run.
</span><br>
<span class="quotelev2">&gt;&gt; 2. we can't define in rankfile number of slots on each machine, which 
</span><br>
<span class="quotelev2">&gt;&gt; means oversubscribing can take place without any warning.
</span><br>
<span class="quotelev2">&gt;&gt; 3. I personally dont see any problem using hostfile, even if it has 
</span><br>
<span class="quotelev2">&gt;&gt; redundant info, hostfile and rankfile belong to different layers in 
</span><br>
<span class="quotelev2">&gt;&gt; the system and solve different problems. The original hostfile ( if I 
</span><br>
<span class="quotelev2">&gt;&gt; recall correctly ) could bind rank to the node, but the syntax wasn't 
</span><br>
<span class="quotelev2">&gt;&gt; very flexible and clear.
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jun 21, 2009 at 5:15 PM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Let me suggest a two-step process, then:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1. let's change the error message as this is easily done and thus
</span><br>
<span class="quotelev2">&gt;&gt;     can be done now
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2. I can look at how to eat the rankfile as a hostfile. This may
</span><br>
<span class="quotelev2">&gt;&gt;     not even be possible - the problem is that the entire system is
</span><br>
<span class="quotelev2">&gt;&gt;     predicated on certain ordering due to our framework architecture.
</span><br>
<span class="quotelev2">&gt;&gt;     So we get an allocation, and then do a mapping against that
</span><br>
<span class="quotelev2">&gt;&gt;     allocation, filtering the allocation through hostfiles, -host,
</span><br>
<span class="quotelev2">&gt;&gt;     and other options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     By the time we reach the rankfile mapper, we have already
</span><br>
<span class="quotelev2">&gt;&gt;     determined that we don't have an allocation and have to abort. It
</span><br>
<span class="quotelev2">&gt;&gt;     is the rankfile mapper itself that looks for the -rankfile
</span><br>
<span class="quotelev2">&gt;&gt;     option, so the system can have no knowledge that someone has
</span><br>
<span class="quotelev2">&gt;&gt;     specified that option before that point - and thus, even if I
</span><br>
<span class="quotelev2">&gt;&gt;     could parse the rankfile, I don't know it was given!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     What will take time is to figure out a way to either:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     (a) allow us to run the mapper even though we don't have any
</span><br>
<span class="quotelev2">&gt;&gt;     nodes we know about, and allow the mapper to insert the nodes
</span><br>
<span class="quotelev2">&gt;&gt;     itself - without causing non-rankfile uses to break (which could
</span><br>
<span class="quotelev2">&gt;&gt;     be a major feat); or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     (b) have the overall system check for the rankfile option and
</span><br>
<span class="quotelev2">&gt;&gt;     pass it as a hostfile as well, assuming that a hostfile wasn't
</span><br>
<span class="quotelev2">&gt;&gt;     also given, no RM-based allocation exists, etc. - which breaks
</span><br>
<span class="quotelev2">&gt;&gt;     our abstraction rules and also opens a possible can of worms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Either way, I also then have to teach the hostfile parser how to
</span><br>
<span class="quotelev2">&gt;&gt;     realize it is a rankfile format and convert the info in it into
</span><br>
<span class="quotelev2">&gt;&gt;     what we expected to receive from a hostfile - another non-trivial
</span><br>
<span class="quotelev2">&gt;&gt;     problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm willing to give it a try - just trying to make clear why my
</span><br>
<span class="quotelev2">&gt;&gt;     response was negative. It isn't as simple as it sounds...which is
</span><br>
<span class="quotelev2">&gt;&gt;     why Len and I didn't pursue it when this was originally developed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sun, Jun 21, 2009 at 5:28 AM, Terry Dontje
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;Terry.Dontje_at_[hidden] &lt;mailto:Terry.Dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Being a part of these discussions I can understand your
</span><br>
<span class="quotelev2">&gt;&gt;         reticence to reopen this discussion.  However, I think this
</span><br>
<span class="quotelev2">&gt;&gt;         is a major usability issue with this feature which actually
</span><br>
<span class="quotelev2">&gt;&gt;         is fairly important in order to get things to run performant.
</span><br>
<span class="quotelev2">&gt;&gt;         Which IMO is important.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         That being said I think there are one of two things that
</span><br>
<span class="quotelev2">&gt;&gt;         could be done to mitigate the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1.  To eliminate the element of surprise by changing mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         to eat rankfile without the hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;         2.  To change the error message to something understandable
</span><br>
<span class="quotelev2">&gt;&gt;         by the user such that they
</span><br>
<span class="quotelev2">&gt;&gt;         know they might be missing the hostfile option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Again I understand this topic is frustrating and there are
</span><br>
<span class="quotelev2">&gt;&gt;         some boundaries with the design that make these two option
</span><br>
<span class="quotelev2">&gt;&gt;         orthogonal to each other but I really believe we need to make
</span><br>
<span class="quotelev2">&gt;&gt;         the rankfile option something that is easily usable by our users.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Having gone around in circles on hostfile-related issues
</span><br>
<span class="quotelev2">&gt;&gt;             for over five years now, I honestly have little
</span><br>
<span class="quotelev2">&gt;&gt;             motivation to re-open the entire discussion again. It
</span><br>
<span class="quotelev2">&gt;&gt;             doesn't seem to be that daunting a requirement for those
</span><br>
<span class="quotelev2">&gt;&gt;             who are using it, so I'm inclined to just leave well
</span><br>
<span class="quotelev2">&gt;&gt;             enough alone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    The two files have a slightly different format
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Agreed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    and completely different meaning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Somewhat agreed.  They're both related to mapping
</span><br>
<span class="quotelev2">&gt;&gt;             processes onto a
</span><br>
<span class="quotelev2">&gt;&gt;                cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    The hostfile specifies how many slots are on a
</span><br>
<span class="quotelev2">&gt;&gt;                 node. The rankfile
</span><br>
<span class="quotelev2">&gt;&gt;                    specifies a rank and what node/slot it is to be
</span><br>
<span class="quotelev2">&gt;&gt;                 mapped onto.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Agreed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    Rankfiles can use relative node indexing and refer
</span><br>
<span class="quotelev2">&gt;&gt;                 to nodes
</span><br>
<span class="quotelev2">&gt;&gt;                    received from a resource manager - i.e., without
</span><br>
<span class="quotelev2">&gt;&gt;                 any hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                % cat rankfile
</span><br>
<span class="quotelev2">&gt;&gt;                rank 0=node0 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;                rank 1=node1 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;                % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;              
</span><br>
<span class="quotelev2">&gt;&gt;              --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                Rankfile claimed host node1 that was not allocated or
</span><br>
<span class="quotelev2">&gt;&gt;                oversubscribed it's slots:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              
</span><br>
<span class="quotelev2">&gt;&gt;              --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev2">&gt;&gt;             parameter in file
</span><br>
<span class="quotelev2">&gt;&gt;                rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev2">&gt;&gt;                [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev2">&gt;&gt;             parameter in file
</span><br>
<span class="quotelev2">&gt;&gt;                base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev2">&gt;&gt;                [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev2">&gt;&gt;             parameter in file
</span><br>
<span class="quotelev2">&gt;&gt;                base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev2">&gt;&gt;                [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev2">&gt;&gt;             parameter in file
</span><br>
<span class="quotelev2">&gt;&gt;                plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev2">&gt;&gt;                % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;                0 on node0
</span><br>
<span class="quotelev2">&gt;&gt;                1 on node1
</span><br>
<span class="quotelev2">&gt;&gt;                done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                It seems to me that the rankfile has sufficient
</span><br>
<span class="quotelev2">&gt;&gt;             information to
</span><br>
<span class="quotelev2">&gt;&gt;                express what I want it to do.  But mpirun won't accept
</span><br>
<span class="quotelev2">&gt;&gt;             this.  To
</span><br>
<span class="quotelev2">&gt;&gt;                fix this, I have to, e.g., supply/maintain/specify
</span><br>
<span class="quotelev2">&gt;&gt;             redundant
</span><br>
<span class="quotelev2">&gt;&gt;                information in a hostfile or host list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    So the files are intentionally quite different.
</span><br>
<span class="quotelev2">&gt;&gt;                 Trying to combine
</span><br>
<span class="quotelev2">&gt;&gt;                    them would be rather ugly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Right.  And my issue is that I'm forced to use both
</span><br>
<span class="quotelev2">&gt;&gt;             when I only
</span><br>
<span class="quotelev2">&gt;&gt;                want rankfile functionality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        In order to use &quot;mpirun --rankfile&quot;, I also
</span><br>
<span class="quotelev2">&gt;&gt;                 need to specify
</span><br>
<span class="quotelev2">&gt;&gt;                        hosts/hostlist.  But that information is
</span><br>
<span class="quotelev2">&gt;&gt;                 redundant with what
</span><br>
<span class="quotelev2">&gt;&gt;                        I provide in the rankfile.  So, from a user's
</span><br>
<span class="quotelev2">&gt;&gt;                 point of view,
</span><br>
<span class="quotelev2">&gt;&gt;                        this strikes me as broken.  Yes?  Should I
</span><br>
<span class="quotelev2">&gt;&gt;                 file a ticket, or
</span><br>
<span class="quotelev2">&gt;&gt;                        am I missing something here about this
</span><br>
<span class="quotelev2">&gt;&gt;                 functionality?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;              
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
