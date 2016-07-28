<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 21:17:06 2014" -->
<!-- isoreceived="20141114021706" -->
<!-- sent="Fri, 14 Nov 2014 11:17:21 +0900" -->
<!-- isosent="20141114021721" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="54656631.7060704_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5464FA1C.6090509_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 21:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25806.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My 0.02 US$
<br>
<p>first, the root cause of the problem was a default gateway was
<br>
configured on the node,
<br>
but this gateway was unreachable.
<br>
imho, this is incorrect system setting that can lead to unpredictable
<br>
results :
<br>
- openmpi 1.8.1 works (you are lucky, good for you)
<br>
- openmpi 1.8.3 fails (no luck this time, too bad)
<br>
so i believe it is incorrect to blame openmpi for this.
<br>
<p>that being said, you raise some good points of how to improve user
<br>
friendliness for end users
<br>
that have limited skills and/or interest in OpenMPI and system
<br>
administration.
<br>
<p>basically, i agree with Gus. HPC is complex, not every clusters are the same
<br>
and imho some minimal config/tuning might not be avoided to get OpenMPI
<br>
working,
<br>
or operating at full speed.
<br>
<p><p>let me give a few examples :
<br>
<p>you recommend OpenMPI uses only the interfaces that matches the
<br>
hostnames in the machinefile.
<br>
what if you submit from the head node ? should you use the interface
<br>
that matches the hostname ?
<br>
what if this interface is the public interface, there is a firewall
<br>
and/or compute nodes have no default gateway ?
<br>
that will simply not work ...
<br>
so mpirun needs to pass orted all its interfaces.
<br>
which one should be picked by orted ?
<br>
- the first one ? it might be the unreachable public interface ...
<br>
- the one on the same subnet ? what if none is on the same subnet ?
<br>
&nbsp;&nbsp;on the cluster i am working, eth0 are in different subnets, ib0 is on
<br>
a single subnet
<br>
&nbsp;&nbsp;and i do *not* want to use ib0. but on some other clusters, the
<br>
ethernet network is so cheap
<br>
&nbsp;&nbsp;they *want* to use ib0.
<br>
<p>on your cluster, you want to use eth0 for oob and mpi, and eth1 for NFS.
<br>
that is legitimate.
<br>
in my case, i want to use eth0 (gigE) for oob and eth2 (10gigE) for MPI.
<br>
that is legitimate too.
<br>
<p>we both want OpenMPI works *and* with best performance out of the box.
<br>
it is a good thing to have high expectations, but they might not all be met.
<br>
<p>i'd rather implement some pre-defined policies that rules how ethernet
<br>
interfaces should be picked up,
<br>
and add a FAQ that mentions : if it does not work (or does not work as
<br>
fast as expected) out of the box, you should
<br>
at first try an other policy.
<br>
<p>then the next legitimate question will be &quot;what is the default policy&quot; ?
<br>
regardless the answer, it will be good for some and bad for others.
<br>
<p><p>imho, posting a mail to the OMPI users mailing list was the right thing
<br>
to do :
<br>
- you got help on how to troubleshot and fix the issue
<br>
- we got some valuable feedback on endusers expectations.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
&nbsp;
<br>
On 2014/11/14 3:36, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; On 11/13/2014 11:14 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;I&#146;m beginning to grok the issue. It is a tad unusual for people to
</span><br>
<span class="quotelev2">&gt;&gt; assign different hostnames to their interfaces - I&#146;ve seen it in the
</span><br>
<span class="quotelev2">&gt;&gt; Hadoop world, but not in HPC. Still, no law against it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, not so unusual.
</span><br>
<span class="quotelev1">&gt; I have clusters from respectable vendors that come with
</span><br>
<span class="quotelev1">&gt; /etc/hosts for name resolution of the various interfaces.
</span><br>
<span class="quotelev1">&gt; If I remember right, Rocks clusters also does that (or actually
</span><br>
<span class="quotelev1">&gt; allow the sys admin to setup additional networks and at that point
</span><br>
<span class="quotelev1">&gt; will append /etc/hosts with the additional names, or perhaps put those
</span><br>
<span class="quotelev1">&gt; names in DHCP).
</span><br>
<span class="quotelev1">&gt; I am not so familiar to xcat, but I think it has similar DHCP
</span><br>
<span class="quotelev1">&gt; functionality, or maybe DNS on the head node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having said that, I don't think this is an obstacle to setting up the
</span><br>
<span class="quotelev1">&gt; right &quot;if_include/if_exlculde&quot; choices (along with the btl, oob, etc),
</span><br>
<span class="quotelev1">&gt; for each particular cluster in the mca parameter configuration file.
</span><br>
<span class="quotelev1">&gt; That is what my parallel conversation with Reuti was about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the current approach w.r.t. interfaces:
</span><br>
<span class="quotelev1">&gt; &quot;use everythint, let the sysadmin/user restrict as
</span><br>
<span class="quotelev1">&gt; (s)he sees fit&quot; is both a wise and flexible way to do it.
</span><br>
<span class="quotelev1">&gt; Guessing the &quot;right interface to use&quot; sounds risky to me (wrong
</span><br>
<span class="quotelev1">&gt; choices may happen), and a bit of a cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will take a little thought to figure out a solution. One problem
</span><br>
<span class="quotelev2">&gt;&gt; that immediately occurs is if someone includes a hostfile that has lines
</span><br>
<span class="quotelev2">&gt;&gt; which refer to the same physical server, but using different interface
</span><br>
<span class="quotelev2">&gt;&gt; names. We&#146;ll think those are completely distinct servers, and so the
</span><br>
<span class="quotelev2">&gt;&gt; process placement will be totally messed up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, and besides this, there will be machines with
</span><br>
<span class="quotelev1">&gt; inconsistent/wrong/conflicting name resolution schemes
</span><br>
<span class="quotelev1">&gt; that the current OMPI approach simply (and wisely) ignores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We&#146;ll also encounter issues with the daemon when it reports back, as the
</span><br>
<span class="quotelev2">&gt;&gt; hostname it gets will almost certainly differ from the hostname we were
</span><br>
<span class="quotelev2">&gt;&gt; expecting. Not as critical, but need to check to see where that will
</span><br>
<span class="quotelev2">&gt;&gt; impact the code base
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sure that will happen.
</span><br>
<span class="quotelev1">&gt; Torque uses hostname by default for several things, and it can be a
</span><br>
<span class="quotelev1">&gt; configuration nightmare to workaround that when what hostname reports
</span><br>
<span class="quotelev1">&gt; is not what you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO, you may face a daunting guesswork task to get this right,
</span><br>
<span class="quotelev1">&gt; to pick the
</span><br>
<span class="quotelev1">&gt; interfaces that are best for a particular computer or cluster.
</span><br>
<span class="quotelev1">&gt; It is so much easier to let the sysadmin/user, who presumably knows
</span><br>
<span class="quotelev1">&gt; his/her machine, to write an MCA parameter config file,
</span><br>
<span class="quotelev1">&gt; as it is now in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We can look at the hostfile changes at that time - no real objection to
</span><br>
<span class="quotelev2">&gt;&gt; them, but would need to figure out how to pass that info to the
</span><br>
<span class="quotelev2">&gt;&gt; appropriate subsystems. I assume you want this to apply to both the oob
</span><br>
<span class="quotelev2">&gt;&gt; and tcp/btl?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, this won&#146;t make it for 1.8 as it is going to be fairly
</span><br>
<span class="quotelev2">&gt;&gt; intrusive, but we can probably do something for 1.9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The status quo is good.
</span><br>
<span class="quotelev1">&gt; Long life to the OMPI status quo.
</span><br>
<span class="quotelev1">&gt; (You don't know how reluctant I am to support the status quo, any
</span><br>
<span class="quotelev1">&gt; status quo.  :) )
</span><br>
<span class="quotelev1">&gt; My vote (... well, I don't have voting rights on that, but I'll vote
</span><br>
<span class="quotelev1">&gt; anyway ...) is to keeep the current approach.
</span><br>
<span class="quotelev1">&gt; It is wise and flexible, and easy to adjust and configure to specific
</span><br>
<span class="quotelev1">&gt; machines with their own oddities, via MCA parameters, as I tried to
</span><br>
<span class="quotelev1">&gt; explain in previous postings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 13, 2014, at 4:23 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 13.11.2014 um 00:34 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 12, 2014, at 2:45 PM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Another thing you can do is (a) ensure you built with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  (without the tcp_if_include option) so we can watch the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection handshake and see what it is doing. The &#151;hetero-nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will have not affect here and can be ignored.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Done. It really tries to connect to the outside interface of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; headnode. But being there a firewall or not: the nodes have no clue
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how to reach 137.248.0.0 - they have no gateway to this network
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at all.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have to revert this. They think that there is a gateway although
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it isn't. When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; While I can do this on my own cluster I still have the 30 seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delay on a cluster where I'm not root, while this can be because of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the firewall there. The gateway on this cluster is indeed going to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the outside world.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Personally I find this behavior a little bit too aggressive to use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all interfaces. If you don't check this carefully beforehand and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start a long running application one might even not notice the delay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; during the startup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Agreed - do you have any suggestions on how we should choose the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; order in which to try them? I haven&#146;t been able to come up with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything yet. Jeff has some fancy algo in his usnic BTL that we are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; going to discuss after SC that I&#146;m hoping will help, but I&#146;d be open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to doing something better in the interim for 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The plain`mpiexec` should just use the specified interface it finds in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hostfile. Being it hand crafted or prepared by any queuing system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option: could a single entry for a machine in the hostfile contain a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of interfaces? I mean something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01,node01-extra-eth1,node01-extra-eth2 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01* slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Means: use exactly these interfaces or even try to find all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces on/between the machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In case all interfaces have the same name, then it's up to the admin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to correct this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It tries so independent from the internal or external name of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; headnode given in the machinefile - I hit ^C then. I attached the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25782.php">http://www.open-mpi.org/community/lists/users/2014/11/25782.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25800.php">http://www.open-mpi.org/community/lists/users/2014/11/25800.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25801.php">http://www.open-mpi.org/community/lists/users/2014/11/25801.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25806.php">http://www.open-mpi.org/community/lists/users/2014/11/25806.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25808.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25806.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25810.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
