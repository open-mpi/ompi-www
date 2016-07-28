<?
$subject_val = "[OMPI users] design advice for multi-threaded load balancing application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 17:10:29 2013" -->
<!-- isoreceived="20130612211029" -->
<!-- sent="Wed, 12 Jun 2013 14:10:25 -0700" -->
<!-- isosent="20130612211025" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] design advice for multi-threaded load balancing application" -->
<!-- id="CANjXV6-LiJiwLYsFJK=R9VH+xc+t1ybp6oHE-jaLeQv+e4YsMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] design advice for multi-threaded load balancing application<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 17:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I have an application where the master node will spawn slaves to
<br>
perform computation (using the singleton Comm_spawn_multiple paradigm
<br>
available in OpenMPI) .  The master will only decide the work to do,
<br>
and also provide data common to all the computations.
<br>
<p>The slaves are multi-threaded, and locally handle load balancing via a
<br>
non-blocking thread-safe queue.
<br>
<p>Work is load balanced between nodes like so:
<br>
<p>1) The master doles out half the work in a round-robin fashion
<br>
2) The master will replace work when it receives completed work from a slave
<br>
<p>I currently have a paradigm where I have build OpenMPI with
<br>
multi-threading enabled, and I allow any thread to send (work) or
<br>
broadcast (common data and control messages) to the other nodes.  I
<br>
have a dedicated thread handling receives which can also handle the
<br>
receive end of broadcast.  The receive thread will hand the work data
<br>
off to the local load balancing mechanism, and set the common data in
<br>
a thread-safe fashion.
<br>
<p>When worker threads complete work quickly, they pound MPI with sends.
<br>
This leads to a ton of lock contention.  Another issue I'm facing is
<br>
that sometimes the messages are very small, but there are a lot of
<br>
them, and I think this may have a lot of overhead in MPI and/or
<br>
various network layers.
<br>
<p>I'm thinking of going to a THREAD_FUNNELED design instead of a
<br>
THREAD_MULTIPLE design, but I'm unsure of the best way to accomplish
<br>
this.  For example, is it advisable to multiple Isend and/or multiple
<br>
Irecv in flight at once (essentially allowing the data to be staged
<br>
concurrently), or is it better to only have one Isend at a time?  If I
<br>
Iprobe and then Irecv, and then I Iprobe again, presumably I will not
<br>
get the same message because that message retrieval was started
<br>
already?
<br>
<p>Currently, I Isend data to all receiving nodes to describe the details
<br>
of a broadcast, but I Waitall before calling Bcast.  Is there anything
<br>
to be careful of if I move to more asynchronous communication (if I
<br>
don't Waitall are there cases where I can deadlock?  I haven't thought
<br>
of cases).
<br>
<p>All my communication will be somewhat generic in the sense that
<br>
Probe/Iprobe accept MPI_ANY_SOURCE and MPI_ANY_TAG, and Bcast is only
<br>
initiated on the receiver side if it has received a control message
<br>
saying the source of the sender and the size of the message.
<br>
<p>Thanks for any and all suggestions and comments,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
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
