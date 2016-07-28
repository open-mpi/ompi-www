<?
$subject_val = "Re: [OMPI devel] The hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 23:07:53 2012" -->
<!-- isoreceived="20120731030753" -->
<!-- sent="Mon, 30 Jul 2012 20:07:45 -0700" -->
<!-- isosent="20120731030745" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The hostfile option" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8ABE5F87_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C46ACB94-50A0-4033-B9A4-CDC47BDBA04E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The hostfile option<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 23:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11342.php">Jeff Squyres: "[OMPI devel] 1.6.1rc2"</a>
<li><strong>In reply to:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11346.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt;Sent: Monday, July 30, 2012 9:29 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] The hostfile option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 30, 2012, at 2:37 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that as long as there is a single home area per cluster the difference
</span><br>
<span class="quotelev1">&gt;between the different approaches might seem irrelevant to most of the
</span><br>
<span class="quotelev1">&gt;people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yeah, I agree - after thinking about it, it probably didn't accomplish much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is twofold. First, I have a common home area across several
</span><br>
<span class="quotelev1">&gt;different development clusters. Thus I have direct access through ssh to any
</span><br>
<span class="quotelev1">&gt;machine. If I create a single large machinefile, it turns out that every mpirun
</span><br>
<span class="quotelev1">&gt;will spawn a daemon on every single node, even if I only run a ping-pong test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That shouldn't happen if you specify the hosts you want to use, either via -
</span><br>
<span class="quotelev1">&gt;host or -hostfile. I assume you are specifying nothing and so you get that
</span><br>
<span class="quotelev1">&gt;behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second, while I usually run my apps on the same set of resources I need on
</span><br>
<span class="quotelev1">&gt;a regular base to switch my nodes for few tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I was hoping to achieve is a machinefile containing the &quot;default&quot;
</span><br>
<span class="quotelev1">&gt;development cluster (aka. the cluster where I'm almost alone so my deamons
</span><br>
<span class="quotelev1">&gt;have minimal chances to disturb other people experiences), and then use a
</span><br>
<span class="quotelev1">&gt;machinefile to sporadicly change the cluster where I run for smaller tests.
</span><br>
<span class="quotelev1">&gt;Unfortunately, this doesn't work due to the filtering behavior described in my
</span><br>
<span class="quotelev1">&gt;original email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Why not just set the default hostfile to point to the new machinefile via the &quot;-
</span><br>
<span class="quotelev1">&gt;-default-hostfile foo&quot; option to mpirun, or you can use the corresponding
</span><br>
<span class="quotelev1">&gt;MCA param?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not trying to re-open the hostfile discussion, but I would be interested to
</span><br>
<span class="quotelev1">&gt;hear how you feel -hostfile should work. I kinda gather you feel it should
</span><br>
<span class="quotelev1">&gt;override the default hostfile instead of filter it, yes? My point being that I
</span><br>
<span class="quotelev1">&gt;don't particularly know if anyone would disagree with that behavior, so we
</span><br>
<span class="quotelev1">&gt;might decide to modify things if you want to propose it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I wrote up the whole description in the Wiki a long while ago because there was a lot of confusion about
<br>
how things should behave with a resource manager.   The general thought was that folks thought of hostfile
<br>
and host as a filter when running with a resource manager. 
<br>
<p>I never wrote anything about the case you are describing, with the hostfile filtering the default hostfile.
<br>
I would have assumed that the precedence of hostfile that you desire would be the way things work.
<br>
Therefore, I am fine if we change it with respect to default hostfile and hostfile.
<br>
<p>The wiki reference is here: <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2012, at 19:24 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's been awhile, but I vaguely remember the discussion. IIRC, the rationale
</span><br>
<span class="quotelev1">&gt;was that the default hostfile was equivalent to an RM allocation and should be
</span><br>
<span class="quotelev1">&gt;treated the same. So hostfile and -host become filters in that case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, I believe the discussion was split on that question. I added a &quot;none&quot;
</span><br>
<span class="quotelev1">&gt;option to the default hostfile MCA param so it would be ignored in the case
</span><br>
<span class="quotelev1">&gt;where (a) the sys admin has given a default hostfile, but (b) someone wants
</span><br>
<span class="quotelev1">&gt;to use hosts outside of it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA orte: parameter &quot;orte_default_hostfile&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         Name of the default hostfile (relative or absolute path, &quot;none&quot;
</span><br>
<span class="quotelev1">&gt;to ignore environmental or default MCA param setting)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That said, I can see a use-case argument for behaving somewhat
</span><br>
<span class="quotelev1">&gt;differently. We've even had cases where users have gotten an allocation from
</span><br>
<span class="quotelev1">&gt;an RM, but want to add hosts that are external to the cluster to the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be rather trivial to modify the logic:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. read the default hostfile or RM allocation for our baseline
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. remove any hosts on that list that are *not* in the given hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. add any hosts that are in the given hostfile, but weren't in the default
</span><br>
<span class="quotelev1">&gt;hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And subsequently do the same for -host. I think that would retain the spirit
</span><br>
<span class="quotelev1">&gt;of the discussion, but provide more flexibility and provide a tad more
</span><br>
<span class="quotelev1">&gt;&quot;expected&quot; behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have an iron in this fire as I don't use hostfiles, so I'm happy to
</span><br>
<span class="quotelev1">&gt;implement whatever the community would like to see.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 27, 2012, at 6:30 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm somewhat puzzled by the behavior of the -hostfile in Open MPI.
</span><br>
<span class="quotelev1">&gt;Based on the FAQ it is supposed to provide a list of resources to be used by
</span><br>
<span class="quotelev1">&gt;the launcher (in my case ssh) to start the processes. Make sense so far.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, if the configuration file contain a value for
</span><br>
<span class="quotelev1">&gt;orte_default_hostfile, then the behavior of the hostfile option change
</span><br>
<span class="quotelev1">&gt;drastically, and the option become a filter (the machines must be on the
</span><br>
<span class="quotelev1">&gt;original list or a cryptic error message is displayed).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Overall, we have a well defined [mostly] consistent behavior for
</span><br>
<span class="quotelev1">&gt;parameters in Open MPI. We have an order of precedence of sources of MCA
</span><br>
<span class="quotelev1">&gt;parameters, clearly defined which make understanding where a value comes
</span><br>
<span class="quotelev1">&gt;straightforward. I'm absolutely certain there was a group discussion about this
</span><br>
<span class="quotelev1">&gt;unique &quot;eccentricity&quot; regarding the hostfile option, but I fail to remember
</span><br>
<span class="quotelev1">&gt;what was the reason we decided to go this way. Can I have a quick refresh
</span><br>
<span class="quotelev1">&gt;please?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11342.php">Jeff Squyres: "[OMPI devel] 1.6.1rc2"</a>
<li><strong>In reply to:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11346.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
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
