<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 10:43:51 2009" -->
<!-- isoreceived="20090623144351" -->
<!-- sent="Tue, 23 Jun 2009 10:42:38 -0400" -->
<!-- isosent="20090623144238" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="4A40E9DE.9010604_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800906230546r1e5a53e4i63c4b789bd7e9b46_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-23 10:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I've been fighting with myself on whether providing a new 
<br>
interface that combines the two  makes sense or just muddies the water 
<br>
more.  I also been wondering if providing a generalized method/option to 
<br>
describe binding patterns would also mitigate this issue by removing the 
<br>
need for a rankfile at all.
<br>
<p>--td
<br>
<p>Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; just an idea, maybe it is worse to provide brand new cmd line option 
</span><br>
<span class="quotelev1">&gt; to mpirun. This option will  accept filename and support combined 
</span><br>
<span class="quotelev1">&gt; syntax for machinefile/hostfile (to define allocations) and rankfile 
</span><br>
<span class="quotelev1">&gt; (to define placement).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; YAML syntax can be used in order to describe file primitives 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.yaml.org/start.html">http://www.yaml.org/start.html</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -clusterfile /path/to/clusterfile
</span><br>
<span class="quotelev1">&gt; $ cat clusterfile
</span><br>
<span class="quotelev1">&gt; hostX:
</span><br>
<span class="quotelev1">&gt;        slots       : int
</span><br>
<span class="quotelev1">&gt;        maxslots : int
</span><br>
<span class="quotelev1">&gt;        ranks      : rankid[@socket:core]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; example of clusterfile
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostX:
</span><br>
<span class="quotelev1">&gt;        slots       : 4
</span><br>
<span class="quotelev1">&gt;        maxslots : 4
</span><br>
<span class="quotelev1">&gt;        ranks      : 1,16,22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostY:
</span><br>
<span class="quotelev1">&gt;       slots       : 8
</span><br>
<span class="quotelev1">&gt;       maxslots : 8
</span><br>
<span class="quotelev1">&gt;       ranks      : 1_at_0:*, 3_at_2-3,  4_at_0:1, 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By doing so, we keep backwards compatability.
</span><br>
<span class="quotelev1">&gt; after reading clusterfile, code should perform *hostfile* and 
</span><br>
<span class="quotelev1">&gt; *rankfile* parts as today.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; what do you think?
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 22, 2009 at 1:30 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Terry.Dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Let us think about this some more.  We'll try and reply later today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Had a chance to think about how this might be done, and looked
</span><br>
<span class="quotelev1">&gt;         at it for awhile after getting home. I -think- I found a way
</span><br>
<span class="quotelev1">&gt;         to do it, but there are a couple of caveats:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1. Len's point about oversubscribing without warning would
</span><br>
<span class="quotelev1">&gt;         definitely hold true - this would positively be a &quot;user
</span><br>
<span class="quotelev1">&gt;         beware&quot; option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2. there could be no RM-provided allocation, hostfile, or
</span><br>
<span class="quotelev1">&gt;         -host options specified. Basically, I would be adding the
</span><br>
<span class="quotelev1">&gt;         &quot;read rankfile&quot; option to the end of the current allocation
</span><br>
<span class="quotelev1">&gt;         determination procedure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I would still allow more procs than shown in the rankfile
</span><br>
<span class="quotelev1">&gt;         (mapping the rest bynode on the nodes specified in the
</span><br>
<span class="quotelev1">&gt;         rankfile - can't do byslot because I don't know how many slots
</span><br>
<span class="quotelev1">&gt;         are on each node), which means the only change in behavior
</span><br>
<span class="quotelev1">&gt;         would be the forced bynode mapping of unspecified procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         So use of this option will entail some risks and a slight
</span><br>
<span class="quotelev1">&gt;         difference in behavior, but would relieve you from the burden
</span><br>
<span class="quotelev1">&gt;         of having to provide a hostfile. I'm not personally convinced
</span><br>
<span class="quotelev1">&gt;         it is worth the risk and probable user complaints of &quot;it
</span><br>
<span class="quotelev1">&gt;         didn't work&quot;, but since we don't use this option, I don't have
</span><br>
<span class="quotelev1">&gt;         a strong opinion on the matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Let's just avoid going back-and-forth over wanting it, or how
</span><br>
<span class="quotelev1">&gt;         it should be implemented - let's get it all ironed out, and
</span><br>
<span class="quotelev1">&gt;         then implement it once, like we finally did at the end with
</span><br>
<span class="quotelev1">&gt;         the whole hostfile thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Let me know if you want me to do this - it obviously isn't at
</span><br>
<span class="quotelev1">&gt;         the top of my priority list, but still could be done in the
</span><br>
<span class="quotelev1">&gt;         next few weeks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Jun 21, 2009, at 9:00 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Sorry for the delay in response, I totally agree with
</span><br>
<span class="quotelev1">&gt;             Ralph that it's not as easy as it seems, 1. rankfile
</span><br>
<span class="quotelev1">&gt;             mapper uses already allocated machines ( by scheduler or
</span><br>
<span class="quotelev1">&gt;             hostfile ), by using rankfile as a hostfile we can run
</span><br>
<span class="quotelev1">&gt;             into problem where trying to use unallocated nodes, what
</span><br>
<span class="quotelev1">&gt;             can hang the run.
</span><br>
<span class="quotelev1">&gt;             2. we can't define in rankfile number of slots on each
</span><br>
<span class="quotelev1">&gt;             machine, which means oversubscribing can take place
</span><br>
<span class="quotelev1">&gt;             without any warning.
</span><br>
<span class="quotelev1">&gt;             3. I personally dont see any problem using hostfile, even
</span><br>
<span class="quotelev1">&gt;             if it has redundant info, hostfile and rankfile belong to
</span><br>
<span class="quotelev1">&gt;             different layers in the system and solve different
</span><br>
<span class="quotelev1">&gt;             problems. The original hostfile ( if I recall correctly )
</span><br>
<span class="quotelev1">&gt;             could bind rank to the node, but the syntax wasn't very
</span><br>
<span class="quotelev1">&gt;             flexible and clear.
</span><br>
<span class="quotelev1">&gt;             Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Sun, Jun 21, 2009 at 5:15 PM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;             &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Let me suggest a two-step process, then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                1. let's change the error message as this is easily
</span><br>
<span class="quotelev1">&gt;             done and thus
</span><br>
<span class="quotelev1">&gt;                can be done now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                2. I can look at how to eat the rankfile as a hostfile.
</span><br>
<span class="quotelev1">&gt;             This may
</span><br>
<span class="quotelev1">&gt;                not even be possible - the problem is that the entire
</span><br>
<span class="quotelev1">&gt;             system is
</span><br>
<span class="quotelev1">&gt;                predicated on certain ordering due to our framework
</span><br>
<span class="quotelev1">&gt;             architecture.
</span><br>
<span class="quotelev1">&gt;                So we get an allocation, and then do a mapping against that
</span><br>
<span class="quotelev1">&gt;                allocation, filtering the allocation through hostfiles,
</span><br>
<span class="quotelev1">&gt;             -host,
</span><br>
<span class="quotelev1">&gt;                and other options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                By the time we reach the rankfile mapper, we have already
</span><br>
<span class="quotelev1">&gt;                determined that we don't have an allocation and have to
</span><br>
<span class="quotelev1">&gt;             abort. It
</span><br>
<span class="quotelev1">&gt;                is the rankfile mapper itself that looks for the -rankfile
</span><br>
<span class="quotelev1">&gt;                option, so the system can have no knowledge that
</span><br>
<span class="quotelev1">&gt;             someone has
</span><br>
<span class="quotelev1">&gt;                specified that option before that point - and thus,
</span><br>
<span class="quotelev1">&gt;             even if I
</span><br>
<span class="quotelev1">&gt;                could parse the rankfile, I don't know it was given!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                What will take time is to figure out a way to either:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                (a) allow us to run the mapper even though we don't
</span><br>
<span class="quotelev1">&gt;             have any
</span><br>
<span class="quotelev1">&gt;                nodes we know about, and allow the mapper to insert the
</span><br>
<span class="quotelev1">&gt;             nodes
</span><br>
<span class="quotelev1">&gt;                itself - without causing non-rankfile uses to break
</span><br>
<span class="quotelev1">&gt;             (which could
</span><br>
<span class="quotelev1">&gt;                be a major feat); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                (b) have the overall system check for the rankfile
</span><br>
<span class="quotelev1">&gt;             option and
</span><br>
<span class="quotelev1">&gt;                pass it as a hostfile as well, assuming that a hostfile
</span><br>
<span class="quotelev1">&gt;             wasn't
</span><br>
<span class="quotelev1">&gt;                also given, no RM-based allocation exists, etc. - which
</span><br>
<span class="quotelev1">&gt;             breaks
</span><br>
<span class="quotelev1">&gt;                our abstraction rules and also opens a possible can of
</span><br>
<span class="quotelev1">&gt;             worms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Either way, I also then have to teach the hostfile
</span><br>
<span class="quotelev1">&gt;             parser how to
</span><br>
<span class="quotelev1">&gt;                realize it is a rankfile format and convert the info in
</span><br>
<span class="quotelev1">&gt;             it into
</span><br>
<span class="quotelev1">&gt;                what we expected to receive from a hostfile - another
</span><br>
<span class="quotelev1">&gt;             non-trivial
</span><br>
<span class="quotelev1">&gt;                problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                I'm willing to give it a try - just trying to make
</span><br>
<span class="quotelev1">&gt;             clear why my
</span><br>
<span class="quotelev1">&gt;                response was negative. It isn't as simple as it
</span><br>
<span class="quotelev1">&gt;             sounds...which is
</span><br>
<span class="quotelev1">&gt;                why Len and I didn't pursue it when this was originally
</span><br>
<span class="quotelev1">&gt;             developed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                On Sun, Jun 21, 2009 at 5:28 AM, Terry Dontje
</span><br>
<span class="quotelev1">&gt;                &lt;Terry.Dontje_at_[hidden] &lt;mailto:Terry.Dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Terry.Dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Terry.Dontje_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Being a part of these discussions I can understand your
</span><br>
<span class="quotelev1">&gt;                    reticence to reopen this discussion.  However, I
</span><br>
<span class="quotelev1">&gt;             think this
</span><br>
<span class="quotelev1">&gt;                    is a major usability issue with this feature which
</span><br>
<span class="quotelev1">&gt;             actually
</span><br>
<span class="quotelev1">&gt;                    is fairly important in order to get things to run
</span><br>
<span class="quotelev1">&gt;             performant.
</span><br>
<span class="quotelev1">&gt;                    Which IMO is important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    That being said I think there are one of two things
</span><br>
<span class="quotelev1">&gt;             that
</span><br>
<span class="quotelev1">&gt;                    could be done to mitigate the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    1.  To eliminate the element of surprise by
</span><br>
<span class="quotelev1">&gt;             changing mpirun
</span><br>
<span class="quotelev1">&gt;                    to eat rankfile without the hostfile.
</span><br>
<span class="quotelev1">&gt;                    2.  To change the error message to something
</span><br>
<span class="quotelev1">&gt;             understandable
</span><br>
<span class="quotelev1">&gt;                    by the user such that they
</span><br>
<span class="quotelev1">&gt;                    know they might be missing the hostfile option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Again I understand this topic is frustrating and
</span><br>
<span class="quotelev1">&gt;             there are
</span><br>
<span class="quotelev1">&gt;                    some boundaries with the design that make these two
</span><br>
<span class="quotelev1">&gt;             option
</span><br>
<span class="quotelev1">&gt;                    orthogonal to each other but I really believe we
</span><br>
<span class="quotelev1">&gt;             need to make
</span><br>
<span class="quotelev1">&gt;                    the rankfile option something that is easily usable
</span><br>
<span class="quotelev1">&gt;             by our users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        Having gone around in circles on
</span><br>
<span class="quotelev1">&gt;             hostfile-related issues
</span><br>
<span class="quotelev1">&gt;                        for over five years now, I honestly have little
</span><br>
<span class="quotelev1">&gt;                        motivation to re-open the entire discussion
</span><br>
<span class="quotelev1">&gt;             again. It
</span><br>
<span class="quotelev1">&gt;                        doesn't seem to be that daunting a requirement
</span><br>
<span class="quotelev1">&gt;             for those
</span><br>
<span class="quotelev1">&gt;                        who are using it, so I'm inclined to just leave
</span><br>
<span class="quotelev1">&gt;             well
</span><br>
<span class="quotelev1">&gt;                        enough alone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh
</span><br>
<span class="quotelev1">&gt;                        &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                        &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt; &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               The two files have a slightly different
</span><br>
<span class="quotelev1">&gt;             format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               and completely different meaning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           Somewhat agreed.  They're both related to
</span><br>
<span class="quotelev1">&gt;             mapping
</span><br>
<span class="quotelev1">&gt;                        processes onto a
</span><br>
<span class="quotelev1">&gt;                           cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               The hostfile specifies how many slots
</span><br>
<span class="quotelev1">&gt;             are on a
</span><br>
<span class="quotelev1">&gt;                            node. The rankfile
</span><br>
<span class="quotelev1">&gt;                               specifies a rank and what node/slot it
</span><br>
<span class="quotelev1">&gt;             is to be
</span><br>
<span class="quotelev1">&gt;                            mapped onto.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Rankfiles can use relative node indexing
</span><br>
<span class="quotelev1">&gt;             and refer
</span><br>
<span class="quotelev1">&gt;                            to nodes
</span><br>
<span class="quotelev1">&gt;                               received from a resource manager - i.e.,
</span><br>
<span class="quotelev1">&gt;             without
</span><br>
<span class="quotelev1">&gt;                            any hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           This is the main part I'm concerned about.
</span><br>
<span class="quotelev1">&gt;              E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           % cat rankfile
</span><br>
<span class="quotelev1">&gt;                           rank 0=node0 slot=0
</span><br>
<span class="quotelev1">&gt;                           rank 1=node1 slot=0
</span><br>
<span class="quotelev1">&gt;                           % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;                                    
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                           Rankfile claimed host node1 that was not
</span><br>
<span class="quotelev1">&gt;             allocated or
</span><br>
<span class="quotelev1">&gt;                           oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                    
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                           [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;                        parameter in file
</span><br>
<span class="quotelev1">&gt;                           rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev1">&gt;                           [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;                        parameter in file
</span><br>
<span class="quotelev1">&gt;                           base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt;                           [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;                        parameter in file
</span><br>
<span class="quotelev1">&gt;                           base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt;                           [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;                        parameter in file
</span><br>
<span class="quotelev1">&gt;                           plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;                           % mpirun -np 2 -host node0,node1 -rf
</span><br>
<span class="quotelev1">&gt;             rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;                           0 on node0
</span><br>
<span class="quotelev1">&gt;                           1 on node1
</span><br>
<span class="quotelev1">&gt;                           done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           It seems to me that the rankfile has sufficient
</span><br>
<span class="quotelev1">&gt;                        information to
</span><br>
<span class="quotelev1">&gt;                           express what I want it to do.  But mpirun
</span><br>
<span class="quotelev1">&gt;             won't accept
</span><br>
<span class="quotelev1">&gt;                        this.  To
</span><br>
<span class="quotelev1">&gt;                           fix this, I have to, e.g.,
</span><br>
<span class="quotelev1">&gt;             supply/maintain/specify
</span><br>
<span class="quotelev1">&gt;                        redundant
</span><br>
<span class="quotelev1">&gt;                           information in a hostfile or host list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               So the files are intentionally quite
</span><br>
<span class="quotelev1">&gt;             different.
</span><br>
<span class="quotelev1">&gt;                            Trying to combine
</span><br>
<span class="quotelev1">&gt;                               them would be rather ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           Right.  And my issue is that I'm forced to
</span><br>
<span class="quotelev1">&gt;             use both
</span><br>
<span class="quotelev1">&gt;                        when I only
</span><br>
<span class="quotelev1">&gt;                           want rankfile functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh
</span><br>
<span class="quotelev1">&gt;                            &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt; &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                               &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                            &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   In order to use &quot;mpirun --rankfile&quot;,
</span><br>
<span class="quotelev1">&gt;             I also
</span><br>
<span class="quotelev1">&gt;                            need to specify
</span><br>
<span class="quotelev1">&gt;                                   hosts/hostlist.  But that information is
</span><br>
<span class="quotelev1">&gt;                            redundant with what
</span><br>
<span class="quotelev1">&gt;                                   I provide in the rankfile.  So, from
</span><br>
<span class="quotelev1">&gt;             a user's
</span><br>
<span class="quotelev1">&gt;                            point of view,
</span><br>
<span class="quotelev1">&gt;                                   this strikes me as broken.  Yes?
</span><br>
<span class="quotelev1">&gt;              Should I
</span><br>
<span class="quotelev1">&gt;                            file a ticket, or
</span><br>
<span class="quotelev1">&gt;                                   am I missing something here about this
</span><br>
<span class="quotelev1">&gt;                            functionality?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           _______________________________________________
</span><br>
<span class="quotelev1">&gt;                           devel mailing list
</span><br>
<span class="quotelev1">&gt;                           devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                        &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      
</span><br>
<span class="quotelev1">&gt;              ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        _______________________________________________
</span><br>
<span class="quotelev1">&gt;                        devel mailing list
</span><br>
<span class="quotelev1">&gt;                        devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;                        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    _______________________________________________
</span><br>
<span class="quotelev1">&gt;                    devel mailing list
</span><br>
<span class="quotelev1">&gt;                    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                devel mailing list
</span><br>
<span class="quotelev1">&gt;                devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
