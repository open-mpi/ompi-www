<?
$subject_val = "Re: [OMPI devel] race condition in grpcomm/rcd";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 10:06:46 2014" -->
<!-- isoreceived="20140912140646" -->
<!-- sent="Fri, 12 Sep 2014 10:06:44 -0400" -->
<!-- isosent="20140912140644" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in grpcomm/rcd" -->
<!-- id="CAG4F6z9otcfEsCgDTJz05GfUNBS7J=juEGPXstN3cUu-JkmW3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2A937D25-4BFE-478E-9AA8-C939C72317A8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in grpcomm/rcd<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 10:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15819.php">Brad Benton: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15817.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>In reply to:</strong> <a href="15817.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me know if Nadia can help here, Ralph.
<br>
<p>Josh
<br>
<p><p>On Fri, Sep 12, 2014 at 9:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2014, at 5:45 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 12, 2014 at 10:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The design is supposed to be that each node knows precisely how many
</span><br>
<span class="quotelev2">&gt;&gt; daemons are involved in each collective, and who is going to talk to them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, but in the design does not ensure that things will happen in the right
</span><br>
<span class="quotelev1">&gt; order :
</span><br>
<span class="quotelev1">&gt; - enter the allgather
</span><br>
<span class="quotelev1">&gt; - receive data from the daemon at distance 1
</span><br>
<span class="quotelev1">&gt; - receive data from the daemon at distance 2
</span><br>
<span class="quotelev1">&gt; - and so on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with current implementation when 2 daemons are involved, if a daemon
</span><br>
<span class="quotelev1">&gt; enters the allgather after it received data from the peer, then the mpi
</span><br>
<span class="quotelev1">&gt; processes local to this daemon will hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with 4 nodes, it got trickier :
</span><br>
<span class="quotelev1">&gt; 0 enter allgather and send a message to 1
</span><br>
<span class="quotelev1">&gt; 1 receive the message and send to 2 but with data from 0 only
</span><br>
<span class="quotelev1">&gt; /* 1 did not enter the allgather, so its data cannot be sent to 2 */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's just a bug in the rcd logic, Gilles. I'll take a look and get it
</span><br>
<span class="quotelev1">&gt; fixed - just don't have time right now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this issue did not occur before the persistent receive :
</span><br>
<span class="quotelev1">&gt; no receive was posted if the daemon did not enter the allgather
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The signature contains the info required to ensure the receiver knows
</span><br>
<span class="quotelev2">&gt;&gt; which collective this message relates to, and just happens to also allow
</span><br>
<span class="quotelev2">&gt;&gt; them to lookup the number of daemons involved (the base function takes care
</span><br>
<span class="quotelev2">&gt;&gt; of that for them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ok too, this issue was solved with the persistent receive
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is no need for a &quot;pending&quot; list - if you receive a message about
</span><br>
<span class="quotelev2">&gt;&gt; a collective you don't yet know about, you just put it on the ongoing
</span><br>
<span class="quotelev2">&gt;&gt; collective list. You should only receive it if you are going to be involved
</span><br>
<span class="quotelev2">&gt;&gt; - i.e., you have local procs that are going to participate. So you wait
</span><br>
<span class="quotelev2">&gt;&gt; until your local procs participate, and then pass your collected bucket
</span><br>
<span class="quotelev2">&gt;&gt; along.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok, i did something similar
</span><br>
<span class="quotelev1">&gt; (e.g. pass all the available data)
</span><br>
<span class="quotelev1">&gt; some data might be passed twice, but that might not be an issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the link to the local procs isn't being correctly dealt with,
</span><br>
<span class="quotelev2">&gt;&gt; else you couldn't be hanging. Or the rcd isn't correctly passing incoming
</span><br>
<span class="quotelev2">&gt;&gt; messages to the base functions to register the collective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll look at it over the weekend and can resolve it then.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  the attached patch is an illustration of what i was trying to explain.
</span><br>
<span class="quotelev1">&gt; coll-&gt;nreported is used by rcd as a bitmask of the received messages
</span><br>
<span class="quotelev1">&gt; (bit 0 is for the local daemon, bit n for the daemon at distance n)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was still debugging a race condition :
</span><br>
<span class="quotelev1">&gt; if daemons 2 and 3 enter the allgather at the send time, they will sent a
</span><br>
<span class="quotelev1">&gt; message to each other at the same time and rml fails establishing the
</span><br>
<span class="quotelev1">&gt; connection.  i could not find whether this is linked to my changes...
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2014, at 5:23 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you are right, this was definetly not the right fix (at least with 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nodes or more)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i finally understood what is going wrong here :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to make it simple, the allgather recursive doubling algo is not
</span><br>
<span class="quotelev3">&gt;&gt; &gt; implemented with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Recv(...,peer,...) like functions but with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Recv(...,MPI_ANY_SOURCE,...) like functions
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and that makes things slightly more complicated :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; right now :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - with two nodes : if node 1 is late, it gets stuck in the allgather
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - with four nodes : if node 0 is first, then node 2 and 3 while node 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is still late, then node 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; will likely leaves the allgather though it did not receive anything
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from  node 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - and so on
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i think i can fix that from now
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 2014/09/11 23:47, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Yeah, that's not the right fix, I'm afraid. I've made the direct
</span><br>
<span class="quotelev2">&gt;&gt; component the default again until I have time to dig into this deeper.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Sep 11, 2014, at 4:02 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; the root cause is when the second orted/mpirun runs rcd_finalize_coll,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; it does not invoke pmix_server_release
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; because allgather_stub was not previously invoked since the the fence
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; was not yet entered.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; /* in rcd_finalize_coll, coll-&gt;cbfunc is NULL */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; the attached patch is likely not the right fix, it was very lightly
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; tested, but so far, it works for me ...
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On 2014/09/11 16:11, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; things got worst indeed :-(
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; now a simple hello world involving two hosts hang in mpi_init.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; there is still a race condition : if a tasks a call fence long after
</span><br>
<span class="quotelev2">&gt;&gt; task b,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; then task b will never leave the fence
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; i ll try to debug this ...
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On 2014/09/11 2:36, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; I think I now have this fixed - let me know what you see.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; On Sep 9, 2014, at 6:15 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Yeah, that's not the correct fix. The right way to fix it is for
</span><br>
<span class="quotelev2">&gt;&gt; all three components to have their own RML tag, and for each of them to
</span><br>
<span class="quotelev2">&gt;&gt; establish a persistent receive. They then can use the signature to tell
</span><br>
<span class="quotelev2">&gt;&gt; which collective the incoming message belongs to.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'll fix it, but it won't be until tomorrow I'm afraid as today is
</span><br>
<span class="quotelev2">&gt;&gt; shot.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Sep 9, 2014, at 3:10 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Since r32672 (trunk), grpcomm/rcd is the default module.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the attached spawn.c test program is a trimmed version of the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_with_env_vars.c test case
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; from the ibm test suite.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; when invoked on two nodes :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; - the program hangs with -np 2
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; - the program can crash with np &gt; 2
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; error message is
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node0:30701] [[42913,0],0] TWO RECEIVES WITH SAME PEER
</span><br>
<span class="quotelev2">&gt;&gt; [[42913,0],1]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; AND TAG -33 - ABORTING
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; here is my full command line (from node0) :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -host node0,node1 -np 2 --oversubscribe --mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; --mca
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; coll ^ml ./spawn
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a simple workaround is to add the following extra parameter to the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun command line :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca grpcomm_rcd_priority 0
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; my understanding it that the race condition occurs when all the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processes call MPI_Finalize()
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; internally, the pmix module will have mpirun/orted issue two
</span><br>
<span class="quotelev2">&gt;&gt; ALLGATHER
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; involving mpirun and orted
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (one job 1 aka the parent, and one for job 2 aka the spawned
</span><br>
<span class="quotelev2">&gt;&gt; tasks)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the error message is very explicit : this is not (currently)
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; i wrote the attached rml.patch which is really a workaround and
</span><br>
<span class="quotelev2">&gt;&gt; not a fix :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in this case, each job will invoke an ALLGATHER but with a
</span><br>
<span class="quotelev2">&gt;&gt; different tag
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /* that works for a limited number of jobs only */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; i did not commit this patch since this is not a fix, could someone
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (Ralph ?) please review the issue and comment ?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;spawn.c&gt;&lt;rml.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15780.php">http://www.open-mpi.org/community/lists/devel/2014/09/15780.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15794.php">http://www.open-mpi.org/community/lists/devel/2014/09/15794.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15804.php">http://www.open-mpi.org/community/lists/devel/2014/09/15804.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &lt;rml2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15805.php">http://www.open-mpi.org/community/lists/devel/2014/09/15805.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15810.php">http://www.open-mpi.org/community/lists/devel/2014/09/15810.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15814.php">http://www.open-mpi.org/community/lists/devel/2014/09/15814.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15815.php">http://www.open-mpi.org/community/lists/devel/2014/09/15815.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;rml3.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15816.php">http://www.open-mpi.org/community/lists/devel/2014/09/15816.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15817.php">http://www.open-mpi.org/community/lists/devel/2014/09/15817.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15819.php">Brad Benton: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15817.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>In reply to:</strong> <a href="15817.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
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
