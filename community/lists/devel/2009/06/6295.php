<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 18:23:34 2009" -->
<!-- isoreceived="20090621222334" -->
<!-- sent="Sun, 21 Jun 2009 16:23:19 -0600" -->
<!-- isosent="20090621222319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990906210800kfb6c323wde837c563c85fe55_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-21 18:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6294.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6294.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Had a chance to think about how this might be done, and looked at it  
<br>
for awhile after getting home. I -think- I found a way to do it, but  
<br>
there are a couple of caveats:
<br>
<p>1. Len's point about oversubscribing without warning would definitely  
<br>
hold true - this would positively be a &quot;user beware&quot; option
<br>
<p>2. there could be no RM-provided allocation, hostfile, or -host  
<br>
options specified. Basically, I would be adding the &quot;read rankfile&quot;  
<br>
option to the end of the current allocation determination procedure
<br>
<p>I would still allow more procs than shown in the rankfile (mapping the  
<br>
rest bynode on the nodes specified in the rankfile - can't do byslot  
<br>
because I don't know how many slots are on each node), which means the  
<br>
only change in behavior would be the forced bynode mapping of  
<br>
unspecified procs.
<br>
<p>So use of this option will entail some risks and a slight difference  
<br>
in behavior, but would relieve you from the burden of having to  
<br>
provide a hostfile. I'm not personally convinced it is worth the risk  
<br>
and probable user complaints of &quot;it didn't work&quot;, but since we don't  
<br>
use this option, I don't have a strong opinion on the matter.
<br>
<p>Let's just avoid going back-and-forth over wanting it, or how it  
<br>
should be implemented - let's get it all ironed out, and then  
<br>
implement it once, like we finally did at the end with the whole  
<br>
hostfile thing.
<br>
<p>Let me know if you want me to do this - it obviously isn't at the top  
<br>
of my priority list, but still could be done in the next few weeks.
<br>
<p>Ralph
<br>
<p><p>On Jun 21, 2009, at 9:00 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in response,
</span><br>
<span class="quotelev1">&gt; I totally agree with Ralph that it's not as easy as it seems,
</span><br>
<span class="quotelev1">&gt; 1. rankfile mapper uses already allocated machines ( by scheduler or  
</span><br>
<span class="quotelev1">&gt; hostfile ), by using rankfile as a hostfile we can run into problem  
</span><br>
<span class="quotelev1">&gt; where trying to use unallocated nodes, what can hang the run.
</span><br>
<span class="quotelev1">&gt; 2. we can't define in rankfile number of slots on each machine,  
</span><br>
<span class="quotelev1">&gt; which means oversubscribing can take place without any warning.
</span><br>
<span class="quotelev1">&gt; 3. I personally dont see any problem using hostfile, even if it has  
</span><br>
<span class="quotelev1">&gt; redundant info, hostfile and rankfile belong to different layers in  
</span><br>
<span class="quotelev1">&gt; the system and solve different problems. The original hostfile ( if  
</span><br>
<span class="quotelev1">&gt; I recall correctly ) could bind rank to the node, but the syntax  
</span><br>
<span class="quotelev1">&gt; wasn't very flexible and clear.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 21, 2009 at 5:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Let me suggest a two-step process, then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. let's change the error message as this is easily done and thus  
</span><br>
<span class="quotelev1">&gt; can be done now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I can look at how to eat the rankfile as a hostfile. This may not  
</span><br>
<span class="quotelev1">&gt; even be possible - the problem is that the entire system is  
</span><br>
<span class="quotelev1">&gt; predicated on certain ordering due to our framework architecture. So  
</span><br>
<span class="quotelev1">&gt; we get an allocation, and then do a mapping against that allocation,  
</span><br>
<span class="quotelev1">&gt; filtering the allocation through hostfiles, -host, and other options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the time we reach the rankfile mapper, we have already determined  
</span><br>
<span class="quotelev1">&gt; that we don't have an allocation and have to abort. It is the  
</span><br>
<span class="quotelev1">&gt; rankfile mapper itself that looks for the -rankfile option, so the  
</span><br>
<span class="quotelev1">&gt; system can have no knowledge that someone has specified that option  
</span><br>
<span class="quotelev1">&gt; before that point - and thus, even if I could parse the rankfile, I  
</span><br>
<span class="quotelev1">&gt; don't know it was given!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What will take time is to figure out a way to either:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) allow us to run the mapper even though we don't have any nodes  
</span><br>
<span class="quotelev1">&gt; we know about, and allow the mapper to insert the nodes itself -  
</span><br>
<span class="quotelev1">&gt; without causing non-rankfile uses to break (which could be a major  
</span><br>
<span class="quotelev1">&gt; feat); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) have the overall system check for the rankfile option and pass  
</span><br>
<span class="quotelev1">&gt; it as a hostfile as well, assuming that a hostfile wasn't also  
</span><br>
<span class="quotelev1">&gt; given, no RM-based allocation exists, etc. - which breaks our  
</span><br>
<span class="quotelev1">&gt; abstraction rules and also opens a possible can of worms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I also then have to teach the hostfile parser how to  
</span><br>
<span class="quotelev1">&gt; realize it is a rankfile format and convert the info in it into what  
</span><br>
<span class="quotelev1">&gt; we expected to receive from a hostfile - another non-trivial problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm willing to give it a try - just trying to make clear why my  
</span><br>
<span class="quotelev1">&gt; response was negative. It isn't as simple as it sounds...which is  
</span><br>
<span class="quotelev1">&gt; why Len and I didn't pursue it when this was originally developed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 21, 2009 at 5:28 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Being a part of these discussions I can understand your reticence to  
</span><br>
<span class="quotelev1">&gt; reopen this discussion.  However, I think this is a major usability  
</span><br>
<span class="quotelev1">&gt; issue with this feature which actually is fairly important in order  
</span><br>
<span class="quotelev1">&gt; to get things to run performant. Which IMO is important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said I think there are one of two things that could be  
</span><br>
<span class="quotelev1">&gt; done to mitigate the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  To eliminate the element of surprise by changing mpirun to eat  
</span><br>
<span class="quotelev1">&gt; rankfile without the hostfile.
</span><br>
<span class="quotelev1">&gt; 2.  To change the error message to something understandable by the  
</span><br>
<span class="quotelev1">&gt; user such that they
</span><br>
<span class="quotelev1">&gt; know they might be missing the hostfile option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again I understand this topic is frustrating and there are some  
</span><br>
<span class="quotelev1">&gt; boundaries with the design that make these two option orthogonal to  
</span><br>
<span class="quotelev1">&gt; each other but I really believe we need to make the rankfile option  
</span><br>
<span class="quotelev1">&gt; something that is easily usable by our users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; Having gone around in circles on hostfile-related issues for over  
</span><br>
<span class="quotelev1">&gt; five years now, I honestly have little motivation to re-open the  
</span><br>
<span class="quotelev1">&gt; entire discussion again. It doesn't seem to be that daunting a  
</span><br>
<span class="quotelev1">&gt; requirement for those who are using it, so I'm inclined to just  
</span><br>
<span class="quotelev1">&gt; leave well enough alone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;    The two files have a slightly different format
</span><br>
<span class="quotelev1">&gt;    Agreed.
</span><br>
<span class="quotelev1">&gt;    and completely different meaning.
</span><br>
<span class="quotelev1">&gt;    Somewhat agreed.  They're both related to mapping processes onto a
</span><br>
<span class="quotelev1">&gt;    cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The hostfile specifies how many slots are on a node. The rankfile
</span><br>
<span class="quotelev1">&gt;    specifies a rank and what node/slot it is to be mapped onto.
</span><br>
<span class="quotelev1">&gt;    Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Rankfiles can use relative node indexing and refer to nodes
</span><br>
<span class="quotelev1">&gt;    received from a resource manager - i.e., without any hostfile.
</span><br>
<span class="quotelev1">&gt;    This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    % cat rankfile
</span><br>
<span class="quotelev1">&gt;    rank 0=node0 slot=0
</span><br>
<span class="quotelev1">&gt;    rank 1=node1 slot=0
</span><br>
<span class="quotelev1">&gt;    % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Rankfile claimed host node1 that was not allocated or
</span><br>
<span class="quotelev1">&gt;    oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev1">&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;    base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;    base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt;    [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;    plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;    % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;    0 on node0
</span><br>
<span class="quotelev1">&gt;    1 on node1
</span><br>
<span class="quotelev1">&gt;    done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    It seems to me that the rankfile has sufficient information to
</span><br>
<span class="quotelev1">&gt;    express what I want it to do.  But mpirun won't accept this.  To
</span><br>
<span class="quotelev1">&gt;    fix this, I have to, e.g., supply/maintain/specify redundant
</span><br>
<span class="quotelev1">&gt;    information in a hostfile or host list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    So the files are intentionally quite different. Trying to combine
</span><br>
<span class="quotelev1">&gt;    them would be rather ugly.
</span><br>
<span class="quotelev1">&gt;    Right.  And my issue is that I'm forced to use both when I only
</span><br>
<span class="quotelev1">&gt;    want rankfile functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        In order to use &quot;mpirun --rankfile&quot;, I also need to specify
</span><br>
<span class="quotelev1">&gt;        hosts/hostlist.  But that information is redundant with what
</span><br>
<span class="quotelev1">&gt;        I provide in the rankfile.  So, from a user's point of view,
</span><br>
<span class="quotelev1">&gt;        this strikes me as broken.  Yes?  Should I file a ticket, or
</span><br>
<span class="quotelev1">&gt;        am I missing something here about this functionality?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    devel mailing list
</span><br>
<span class="quotelev1">&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6294.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6294.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6296.php">Lenny Verkhovsky: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6297.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
