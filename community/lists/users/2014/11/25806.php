<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 13:36:18 2014" -->
<!-- isoreceived="20141113183618" -->
<!-- sent="Thu, 13 Nov 2014 13:36:12 -0500" -->
<!-- isosent="20141113183612" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="5464FA1C.6090509_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F4289C3-454A-4A7D-A2CA-6F4BFFAEF197_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 13:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25805.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25801.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/13/2014 11:14 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#133;I&#146;m beginning to grok the issue. It is a tad unusual for people to
</span><br>
<span class="quotelev1">&gt; assign different hostnames to their interfaces - I&#146;ve seen it in the
</span><br>
<span class="quotelev1">&gt; Hadoop world, but not in HPC. Still, no law against it.
</span><br>
<p>No, not so unusual.
<br>
I have clusters from respectable vendors that come with
<br>
/etc/hosts for name resolution of the various interfaces.
<br>
If I remember right, Rocks clusters also does that (or actually
<br>
allow the sys admin to setup additional networks and at that point
<br>
will append /etc/hosts with the additional names, or perhaps put those
<br>
names in DHCP).
<br>
I am not so familiar to xcat, but I think it has similar DHCP 
<br>
functionality, or maybe DNS on the head node.
<br>
<p>Having said that, I don't think this is an obstacle to setting up the 
<br>
right &quot;if_include/if_exlculde&quot; choices (along with the btl, oob, etc),
<br>
for each particular cluster in the mca parameter configuration file.
<br>
That is what my parallel conversation with Reuti was about.
<br>
<p>I believe the current approach w.r.t. interfaces:
<br>
&quot;use everythint, let the sysadmin/user restrict as
<br>
(s)he sees fit&quot; is both a wise and flexible way to do it.
<br>
Guessing the &quot;right interface to use&quot; sounds risky to me (wrong choices 
<br>
may happen), and a bit of a cast.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will take a little thought to figure out a solution. One problem
</span><br>
<span class="quotelev1">&gt; that immediately occurs is if someone includes a hostfile that has lines
</span><br>
<span class="quotelev1">&gt; which refer to the same physical server, but using different interface
</span><br>
<span class="quotelev1">&gt; names. We&#146;ll think those are completely distinct servers, and so the
</span><br>
<span class="quotelev1">&gt; process placement will be totally messed up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sure, and besides this, there will be machines with
<br>
inconsistent/wrong/conflicting name resolution schemes
<br>
that the current OMPI approach simply (and wisely) ignores.
<br>
<p><p><span class="quotelev1">&gt; We&#146;ll also encounter issues with the daemon when it reports back, as the
</span><br>
<span class="quotelev1">&gt; hostname it gets will almost certainly differ from the hostname we were
</span><br>
<span class="quotelev1">&gt; expecting. Not as critical, but need to check to see where that will
</span><br>
<span class="quotelev1">&gt; impact the code base
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm sure that will happen.
<br>
Torque uses hostname by default for several things, and it can be a 
<br>
configuration nightmare to workaround that when what hostname reports is 
<br>
not what you want.
<br>
<p>IMHO, you may face a daunting guesswork task to get this right,
<br>
to pick the
<br>
interfaces that are best for a particular computer or cluster.
<br>
It is so much easier to let the sysadmin/user, who presumably knows 
<br>
his/her machine, to write an MCA parameter config file,
<br>
as it is now in OMPI.
<br>
<p><span class="quotelev1">&gt; We can look at the hostfile changes at that time - no real objection to
</span><br>
<span class="quotelev1">&gt; them, but would need to figure out how to pass that info to the
</span><br>
<span class="quotelev1">&gt; appropriate subsystems. I assume you want this to apply to both the oob
</span><br>
<span class="quotelev1">&gt; and tcp/btl?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, this won&#146;t make it for 1.8 as it is going to be fairly
</span><br>
<span class="quotelev1">&gt; intrusive, but we can probably do something for 1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The status quo is good.
<br>
Long life to the OMPI status quo.
<br>
(You don't know how reluctant I am to support the status quo, any status 
<br>
quo.  :) )
<br>
My vote (... well, I don't have voting rights on that, but I'll vote 
<br>
anyway ...) is to keeep the current approach.
<br>
It is wise and flexible, and easy to adjust and configure to specific 
<br>
machines with their own oddities, via MCA parameters, as I tried to 
<br>
explain in previous postings.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 13, 2014, at 4:23 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 13.11.2014 um 00:34 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 12, 2014, at 2:45 PM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Another thing you can do is (a) ensure you built with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  (without the tcp_if_include option) so we can watch the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connection handshake and see what it is doing. The &#151;hetero-nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; will have not affect here and can be ignored.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Done. It really tries to connect to the outside interface of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; headnode. But being there a firewall or not: the nodes have no clue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how to reach 137.248.0.0 - they have no gateway to this network at all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to revert this. They think that there is a gateway although
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it isn't. When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While I can do this on my own cluster I still have the 30 seconds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; delay on a cluster where I'm not root, while this can be because of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the firewall there. The gateway on this cluster is indeed going to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the outside world.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Personally I find this behavior a little bit too aggressive to use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all interfaces. If you don't check this carefully beforehand and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start a long running application one might even not notice the delay
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; during the startup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Agreed - do you have any suggestions on how we should choose the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order in which to try them? I haven&#146;t been able to come up with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything yet. Jeff has some fancy algo in his usnic BTL that we are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going to discuss after SC that I&#146;m hoping will help, but I&#146;d be open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to doing something better in the interim for 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The plain`mpiexec` should just use the specified interface it finds in
</span><br>
<span class="quotelev2">&gt;&gt; the hostfile. Being it hand crafted or prepared by any queuing system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option: could a single entry for a machine in the hostfile contain a
</span><br>
<span class="quotelev2">&gt;&gt; list of interfaces? I mean something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01,node01-extra-eth1,node01-extra-eth2 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01* slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Means: use exactly these interfaces or even try to find all available
</span><br>
<span class="quotelev2">&gt;&gt; interfaces on/between the machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In case all interfaces have the same name, then it's up to the admin
</span><br>
<span class="quotelev2">&gt;&gt; to correct this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It tries so independent from the internal or external name of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; headnode given in the machinefile - I hit ^C then. I attached the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25782.php">http://www.open-mpi.org/community/lists/users/2014/11/25782.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25800.php">http://www.open-mpi.org/community/lists/users/2014/11/25800.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25801.php">http://www.open-mpi.org/community/lists/users/2014/11/25801.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25805.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25801.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
