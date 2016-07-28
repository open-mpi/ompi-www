<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 09:56:30 2014" -->
<!-- isoreceived="20141114145630" -->
<!-- sent="Fri, 14 Nov 2014 14:56:28 +0000" -->
<!-- isosent="20141114145628" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="A35CE611-CC62-460B-9518-0B7F236C449D_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="54656631.7060704_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-14 09:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25811.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25812.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25812.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I lurked on this thread for a while, but I have some thoughts on the many issues that were discussed on this thread (sorry, I'm still pretty under water trying to get ready for SC next week...).  These points are in no particular order...
<br>
<p>0. Two fundamental points have been missed in this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;- A hostname technically has nothing to do with the resolvable name of an IP interface.  By convention, many people set the hostname to be the same as some &quot;primary&quot; IP interface (for some definition of &quot;primary&quot;, e.g., eth0).  But they are actually unrelated concepts.
<br>
<p>&nbsp;&nbsp;&nbsp;- Open MPI uses host specifications only to specify a remote server, *NOT* an interface.  E.g., when you list names in a hostile or the --host CLI option, those only specify the server -- not the interface(s).  This was an intentional design choice because there tends to be confusion and different schools of thought about the question &quot;What's the [resolvable] name of that remote server?&quot;  Hence, OMPI will take any old name you throw at it to identify that remote server, but then we have separate controls for specifying which interface(s) to use to communicate with that server.
<br>
<p>1. Remember that there is at least one, and possibly two, uses of TCP communications in Open MPI -- and they are used differently:
<br>
<p>&nbsp;&nbsp;&nbsp;- Command/control (sometimes referred to as &quot;oob&quot;): used for things like mpirun control messages, shuttling IO from remote processes back to mpirun, etc.  Generally, unless you have a mountain of stdout/stderr from your launched processes, this isn't a huge amount of traffic.
<br>
<p>&nbsp;&nbsp;&nbsp;- MPI messages: kernel-based TCP is the fallback if you don't have some kind of faster off-server network -- i.e., the TCP BTL.  Like all BTLs, the TCP BTL carries all MPI traffic when it is used.  How much traffic is sent/received depends on your application.
<br>
<p>2. For OOB, I believe that the current ORTE mechanism is that it will try all available IP interfaces and use the *first* one that succeeds.  Meaning: after some negotiation, only one IP interface will be used to communicate with a given peer.
<br>
<p>3. The TCP BTL will examine all local IP interfaces and determine all that can be used to reach each peer according to the algorithm described here: <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>.  It will use *all* IP interfaces to reach a given peer in order to maximize the available bandwidth.
<br>
<p>4. The usNIC BTL uses UDP as its wire transport, and therefore has the same reachability issues as both the TCP OOB and BTL.  However, we use a different mechanism than the algorithm described in the above-cited FAQ item: we simply query the Linux routing table.  This can cause ARP requests, but the kernel caches them (e.g., for multiple MPI procs on the same server making the same/similar requests), and for a properly-segmented L3 network, each MPI process will effectively end up querying about its local gateway (vs. the actual peer), and therefore the chances of having that ARP already cached are quite high.
<br>
<p>--&gt; I want to make this clear: there's nothing magic our the usNIC/check-the-routing-table approach.  It's actually a very standard IP/datacenter method.  With a proper routing table, you can know fairly quickly whether local IP interface X can reach remote IP interface Y.
<br>
<p>5. The original problem cited in this thread was about the TCP OOB, not the TCP BTL.  It's important to keep straight that the OOB, with no guidance from the user, was trying to probe the different IP interfaces and find one that would reach a peer.  Using the check-the-routing-table approach cited in #4, we might be able to make this better (that's what Ralph and I are going to talk about in December / post-SC / post-US Thanksgiving holiday).
<br>
<p>6. As a sidenote to #5, the TCP OOB and TCP BTL determine reachability in different ways.  Remember that the TCP BTL has the benefit of having all the ORTE infrastructure up and running.  Meaning: MPI processes can exchange IP interface information and then use that information to compute which peer IP interfaces can be reached.  The TCP OOB doesn't have this benefit -- it's being used to establish initial connectivity.  Hence, it probes each IP interface to see if it can reach a given peer.
<br>
<p>--&gt; We apparently need to do that probe better (vs. blocking in a serial fashion, and eventually timing out on &quot;bad&quot; interfaces and then trying the next one). 
<br>
<p>Having a bad route or gateway listed in a server's IP setup, however, will make the process take an artificially long time.  This is a user error that Open MPI cannot compensate for.  If prior versions of OMPI tried interfaces in a different order that luckily worked nicely, cool.  But as Gilles mentioned, that was luck -- there was still a user config error that was the real underlying issue.
<br>
<p>7. Someone asked: does it matter in which order you specify interfaces in btl_tcp_if_include?  No, it effectively does not.  Open MPI will use both interfaces.  If you only send one short MPI message to a peer, then yes, OMPI will only use one of those interfaces, but that's not the usual case.  Open MPI will effectively round robin multiplex across all the interfaces that you list (or all the interfaces that are not excluded).  They're all used equally unless you specify a weighting factor (i.e., bandwidth) for each interface.
<br>
<p>8. Don't forget that you can use CIDR notation to specify which interfaces to use, too.  E.g., &quot;--mca btl_tcp_if_include 10.10.10.0/24&quot;.  That way, you don't have to know which interface a given network uses (and it might even be different on different servers).  Same goes for the oob_tcp_if_*clude MCA params, too.
<br>
<p>9. If I followed the thread properly (and I might not have?), I think Reuti eliminated a bad route/gateway and reduced the dead time during startup to be much shorter.  But there still seems to be a 30 second timeout in there when no sysadmin-specified oob_tcp_if_include param is provided.  If this is correct, Reuti, can you send the full &quot;ifconfig -a&quot; output from two servers in question (i.e., 2 servers where you can reproduce the problem), and the full routing tables between those two servers?  (make sure to show all routing tables on each server - fun fact, did you know that you can have a different routing table for each IP interface in Linux?)  Include any relevant network routing tables (e.g., from intermediate switches), if they're not just pass thru.
<br>
<p><p><p><p>On Nov 13, 2014, at 9:17 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My 0.02 US$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first, the root cause of the problem was a default gateway was
</span><br>
<span class="quotelev1">&gt; configured on the node,
</span><br>
<span class="quotelev1">&gt; but this gateway was unreachable.
</span><br>
<span class="quotelev1">&gt; imho, this is incorrect system setting that can lead to unpredictable
</span><br>
<span class="quotelev1">&gt; results :
</span><br>
<span class="quotelev1">&gt; - openmpi 1.8.1 works (you are lucky, good for you)
</span><br>
<span class="quotelev1">&gt; - openmpi 1.8.3 fails (no luck this time, too bad)
</span><br>
<span class="quotelev1">&gt; so i believe it is incorrect to blame openmpi for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said, you raise some good points of how to improve user
</span><br>
<span class="quotelev1">&gt; friendliness for end users
</span><br>
<span class="quotelev1">&gt; that have limited skills and/or interest in OpenMPI and system
</span><br>
<span class="quotelev1">&gt; administration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, i agree with Gus. HPC is complex, not every clusters are the same
</span><br>
<span class="quotelev1">&gt; and imho some minimal config/tuning might not be avoided to get OpenMPI
</span><br>
<span class="quotelev1">&gt; working,
</span><br>
<span class="quotelev1">&gt; or operating at full speed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; let me give a few examples :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you recommend OpenMPI uses only the interfaces that matches the
</span><br>
<span class="quotelev1">&gt; hostnames in the machinefile.
</span><br>
<span class="quotelev1">&gt; what if you submit from the head node ? should you use the interface
</span><br>
<span class="quotelev1">&gt; that matches the hostname ?
</span><br>
<span class="quotelev1">&gt; what if this interface is the public interface, there is a firewall
</span><br>
<span class="quotelev1">&gt; and/or compute nodes have no default gateway ?
</span><br>
<span class="quotelev1">&gt; that will simply not work ...
</span><br>
<span class="quotelev1">&gt; so mpirun needs to pass orted all its interfaces.
</span><br>
<span class="quotelev1">&gt; which one should be picked by orted ?
</span><br>
<span class="quotelev1">&gt; - the first one ? it might be the unreachable public interface ...
</span><br>
<span class="quotelev1">&gt; - the one on the same subnet ? what if none is on the same subnet ?
</span><br>
<span class="quotelev1">&gt;  on the cluster i am working, eth0 are in different subnets, ib0 is on
</span><br>
<span class="quotelev1">&gt; a single subnet
</span><br>
<span class="quotelev1">&gt;  and i do *not* want to use ib0. but on some other clusters, the
</span><br>
<span class="quotelev1">&gt; ethernet network is so cheap
</span><br>
<span class="quotelev1">&gt;  they *want* to use ib0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on your cluster, you want to use eth0 for oob and mpi, and eth1 for NFS.
</span><br>
<span class="quotelev1">&gt; that is legitimate.
</span><br>
<span class="quotelev1">&gt; in my case, i want to use eth0 (gigE) for oob and eth2 (10gigE) for MPI.
</span><br>
<span class="quotelev1">&gt; that is legitimate too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we both want OpenMPI works *and* with best performance out of the box.
</span><br>
<span class="quotelev1">&gt; it is a good thing to have high expectations, but they might not all be met.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'd rather implement some pre-defined policies that rules how ethernet
</span><br>
<span class="quotelev1">&gt; interfaces should be picked up,
</span><br>
<span class="quotelev1">&gt; and add a FAQ that mentions : if it does not work (or does not work as
</span><br>
<span class="quotelev1">&gt; fast as expected) out of the box, you should
</span><br>
<span class="quotelev1">&gt; at first try an other policy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then the next legitimate question will be &quot;what is the default policy&quot; ?
</span><br>
<span class="quotelev1">&gt; regardless the answer, it will be good for some and bad for others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imho, posting a mail to the OMPI users mailing list was the right thing
</span><br>
<span class="quotelev1">&gt; to do :
</span><br>
<span class="quotelev1">&gt; - you got help on how to troubleshot and fix the issue
</span><br>
<span class="quotelev1">&gt; - we got some valuable feedback on endusers expectations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/14 3:36, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 11/13/2014 11:14 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm&#133;I&#146;m beginning to grok the issue. It is a tad unusual for people to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assign different hostnames to their interfaces - I&#146;ve seen it in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hadoop world, but not in HPC. Still, no law against it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, not so unusual.
</span><br>
<span class="quotelev2">&gt;&gt; I have clusters from respectable vendors that come with
</span><br>
<span class="quotelev2">&gt;&gt; /etc/hosts for name resolution of the various interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; If I remember right, Rocks clusters also does that (or actually
</span><br>
<span class="quotelev2">&gt;&gt; allow the sys admin to setup additional networks and at that point
</span><br>
<span class="quotelev2">&gt;&gt; will append /etc/hosts with the additional names, or perhaps put those
</span><br>
<span class="quotelev2">&gt;&gt; names in DHCP).
</span><br>
<span class="quotelev2">&gt;&gt; I am not so familiar to xcat, but I think it has similar DHCP
</span><br>
<span class="quotelev2">&gt;&gt; functionality, or maybe DNS on the head node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Having said that, I don't think this is an obstacle to setting up the
</span><br>
<span class="quotelev2">&gt;&gt; right &quot;if_include/if_exlculde&quot; choices (along with the btl, oob, etc),
</span><br>
<span class="quotelev2">&gt;&gt; for each particular cluster in the mca parameter configuration file.
</span><br>
<span class="quotelev2">&gt;&gt; That is what my parallel conversation with Reuti was about.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe the current approach w.r.t. interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;use everythint, let the sysadmin/user restrict as
</span><br>
<span class="quotelev2">&gt;&gt; (s)he sees fit&quot; is both a wise and flexible way to do it.
</span><br>
<span class="quotelev2">&gt;&gt; Guessing the &quot;right interface to use&quot; sounds risky to me (wrong
</span><br>
<span class="quotelev2">&gt;&gt; choices may happen), and a bit of a cast.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will take a little thought to figure out a solution. One problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that immediately occurs is if someone includes a hostfile that has lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which refer to the same physical server, but using different interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names. We&#146;ll think those are completely distinct servers, and so the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process placement will be totally messed up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure, and besides this, there will be machines with
</span><br>
<span class="quotelev2">&gt;&gt; inconsistent/wrong/conflicting name resolution schemes
</span><br>
<span class="quotelev2">&gt;&gt; that the current OMPI approach simply (and wisely) ignores.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We&#146;ll also encounter issues with the daemon when it reports back, as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname it gets will almost certainly differ from the hostname we were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expecting. Not as critical, but need to check to see where that will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; impact the code base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure that will happen.
</span><br>
<span class="quotelev2">&gt;&gt; Torque uses hostname by default for several things, and it can be a
</span><br>
<span class="quotelev2">&gt;&gt; configuration nightmare to workaround that when what hostname reports
</span><br>
<span class="quotelev2">&gt;&gt; is not what you want.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IMHO, you may face a daunting guesswork task to get this right,
</span><br>
<span class="quotelev2">&gt;&gt; to pick the
</span><br>
<span class="quotelev2">&gt;&gt; interfaces that are best for a particular computer or cluster.
</span><br>
<span class="quotelev2">&gt;&gt; It is so much easier to let the sysadmin/user, who presumably knows
</span><br>
<span class="quotelev2">&gt;&gt; his/her machine, to write an MCA parameter config file,
</span><br>
<span class="quotelev2">&gt;&gt; as it is now in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can look at the hostfile changes at that time - no real objection to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them, but would need to figure out how to pass that info to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriate subsystems. I assume you want this to apply to both the oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and tcp/btl?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Obviously, this won&#146;t make it for 1.8 as it is going to be fairly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intrusive, but we can probably do something for 1.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The status quo is good.
</span><br>
<span class="quotelev2">&gt;&gt; Long life to the OMPI status quo.
</span><br>
<span class="quotelev2">&gt;&gt; (You don't know how reluctant I am to support the status quo, any
</span><br>
<span class="quotelev2">&gt;&gt; status quo.  :) )
</span><br>
<span class="quotelev2">&gt;&gt; My vote (... well, I don't have voting rights on that, but I'll vote
</span><br>
<span class="quotelev2">&gt;&gt; anyway ...) is to keeep the current approach.
</span><br>
<span class="quotelev2">&gt;&gt; It is wise and flexible, and easy to adjust and configure to specific
</span><br>
<span class="quotelev2">&gt;&gt; machines with their own oddities, via MCA parameters, as I tried to
</span><br>
<span class="quotelev2">&gt;&gt; explain in previous postings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My two cents,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2014, at 4:23 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 13.11.2014 um 00:34 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2014, at 2:45 PM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Another thing you can do is (a) ensure you built with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (without the tcp_if_include option) so we can watch the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection handshake and see what it is doing. The &#151;hetero-nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will have not affect here and can be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Done. It really tries to connect to the outside interface of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; headnode. But being there a firewall or not: the nodes have no clue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; how to reach 137.248.0.0 - they have no gateway to this network
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; at all.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have to revert this. They think that there is a gateway although
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it isn't. When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; While I can do this on my own cluster I still have the 30 seconds
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; delay on a cluster where I'm not root, while this can be because of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the firewall there. The gateway on this cluster is indeed going to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the outside world.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Personally I find this behavior a little bit too aggressive to use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all interfaces. If you don't check this carefully beforehand and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start a long running application one might even not notice the delay
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; during the startup.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Agreed - do you have any suggestions on how we should choose the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; order in which to try them? I haven&#146;t been able to come up with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything yet. Jeff has some fancy algo in his usnic BTL that we are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; going to discuss after SC that I&#146;m hoping will help, but I&#146;d be open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to doing something better in the interim for 1.8.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The plain`mpiexec` should just use the specified interface it finds in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hostfile. Being it hand crafted or prepared by any queuing system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Option: could a single entry for a machine in the hostfile contain a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list of interfaces? I mean something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node01,node01-extra-eth1,node01-extra-eth2 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node01* slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Means: use exactly these interfaces or even try to find all available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfaces on/between the machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In case all interfaces have the same name, then it's up to the admin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to correct this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It tries so independent from the internal or external name of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; headnode given in the machinefile - I hit ^C then. I attached the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25782.php">http://www.open-mpi.org/community/lists/users/2014/11/25782.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25800.php">http://www.open-mpi.org/community/lists/users/2014/11/25800.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25801.php">http://www.open-mpi.org/community/lists/users/2014/11/25801.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25806.php">http://www.open-mpi.org/community/lists/users/2014/11/25806.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25809.php">http://www.open-mpi.org/community/lists/users/2014/11/25809.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25811.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25812.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25812.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
