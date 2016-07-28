<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 09:18:42 2009" -->
<!-- isoreceived="20090620131842" -->
<!-- sent="Sat, 20 Jun 2009 09:18:37 -0400" -->
<!-- isosent="20090620131837" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="82dde0906200618m307a6e3el5dd2b0f27b666447_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3C041A.1090105_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-20 09:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that at least explains what is going on. Because I have an
<br>
unbalanced work load (at least for now) I assume that I'll need to poll. If
<br>
I replace the compositor loop with the following, it appears that I prevent
<br>
the serialization/starvation and service the servers equally. I can think of
<br>
edge cases where it isn't very efficient, so I'll explore different options
<br>
(perhaps instead of looping I can probe one higher and increment on each
<br>
receive).
<br>
<p>Thanks again.
<br>
<p>Here's the new output:
<br>
...
<br>
Sending buffer 3 from 3
<br>
Sending buffer 3 from 2
<br>
Sending buffer 4 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 0 time
<br>
&nbsp;-- Probing for 2
<br>
&nbsp;-- Found a message
<br>
Sending buffer 4 from 3
<br>
Sending buffer 4 from 2
<br>
Receiving buffer from 2, buffer = hello from 2 for the 0 time
<br>
&nbsp;-- Probing for 3
<br>
&nbsp;-- Found a message
<br>
Receiving buffer from 3, buffer = hello from 3 for the 0 time
<br>
&nbsp;-- Probing for 1
<br>
&nbsp;-- Found a message
<br>
Sending buffer 5 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 1 time
<br>
&nbsp;-- Probing for 2
<br>
&nbsp;-- Found a message
<br>
Sending buffer 5 from 2
<br>
Sending buffer 5 from 3
<br>
Receiving buffer from 2, buffer = hello from 2 for the 1 time
<br>
&nbsp;-- Probing for 3
<br>
&nbsp;-- Found a message
<br>
Receiving buffer from 3, buffer = hello from 3 for the 1 time
<br>
...
<br>
and the replacement code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int last = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; LOOPS * ( size - 1 ); i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int which_source, which_tag, flag;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Probe( MPI_ANY_SOURCE, MPI_ANY_TAG, comp_comm, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_source = status.MPI_SOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_tag = status.MPI_TAG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( which_source &lt;= last )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status probe_status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size - 1; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int probe_id = ( ( last + j ) % ( size - 1)  ) + 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot; -- Probing for %d\n&quot;, probe_id );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iprobe( probe_id, MPI_ANY_TAG, comp_comm, &amp;flag, &amp;probe_status
<br>
);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( flag )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot; -- Found a message\n&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_source = probe_status.MPI_SOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_tag = probe_status.MPI_TAG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Receiving buffer from %d, buffer = &quot;, which_source );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buffer, BUFLEN, MPI_CHAR, which_source, which_tag,
<br>
comp_comm, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;%s\n&quot;, buffer );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;last = which_source;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Mark
<br>
<p>On Fri, Jun 19, 2009 at 5:33 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI does not impose any global order on the messages. The only
</span><br>
<span class="quotelev2">&gt;&gt;  requirement is that between two peers on the same communicator the
</span><br>
<span class="quotelev2">&gt;&gt;  messages (or at least the part required for the matching) is delivered  in
</span><br>
<span class="quotelev2">&gt;&gt; order. This make both execution traces you sent with your original  email
</span><br>
<span class="quotelev2">&gt;&gt; (shared memory and TCP) valid from the MPI perspective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, MPI doesn't impose any order in the matching when ANY_SOURCE  is
</span><br>
<span class="quotelev2">&gt;&gt; used. In Open MPI we do the matching _ALWAYS_ starting from rank 0  to n in
</span><br>
<span class="quotelev2">&gt;&gt; the specified communicator. BEWARE: The remaining of this  paragraph is deep
</span><br>
<span class="quotelev2">&gt;&gt; black magic of an MPI implementation internals. The  main difference between
</span><br>
<span class="quotelev2">&gt;&gt; the behavior of SM and TCP here directly  reflect their eager size, 4K for
</span><br>
<span class="quotelev2">&gt;&gt; SM and 64K for TCP. Therefore, for  your example, for TCP all your messages
</span><br>
<span class="quotelev2">&gt;&gt; are eager messages (i.e. are  completely transfered to the destination
</span><br>
<span class="quotelev2">&gt;&gt; process in just one go),  while for SM they all require a rendez-vous. This
</span><br>
<span class="quotelev2">&gt;&gt; directly impact the  ordering of the messages on the receiver, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; the order of  the matching. However, I have to insist on this, this behavior
</span><br>
<span class="quotelev2">&gt;&gt; is  correct based on the MPI standard specifications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to try a technical explanation of what's going on inside OMPI and
</span><br>
<span class="quotelev1">&gt; then words of advice to Mark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, the technical explanation.  As George says, what's going on is
</span><br>
<span class="quotelev1">&gt; legal.  The &quot;servers&quot; all queue up sends to the &quot;compositor&quot;.  These are
</span><br>
<span class="quotelev1">&gt; long, rendezvous sends (at least when they're on-node).  So, none of these
</span><br>
<span class="quotelev1">&gt; sends completes.  The compositor looks for an in-coming message.  It's gets
</span><br>
<span class="quotelev1">&gt; the header of the message and sends back an acknowledgement that the rest of
</span><br>
<span class="quotelev1">&gt; the message can be sent.  The &quot;server&quot; gets the acknowledgement and starts
</span><br>
<span class="quotelev1">&gt; sending more of the message.  The compositor, in order to get to the
</span><br>
<span class="quotelev1">&gt; remainder of the message, keeps draining all the other stuff servers are
</span><br>
<span class="quotelev1">&gt; sending it.  Once the first message is completely received, the compositor
</span><br>
<span class="quotelev1">&gt; looks for the next message to process and happens to pick up the first
</span><br>
<span class="quotelev1">&gt; server again.  It won't go to anyone else under server 1 is exhausted.
</span><br>
<span class="quotelev1">&gt;  Legal, but from Mark's point of view not desirable.  The compositor is busy
</span><br>
<span class="quotelev1">&gt; all the time.  Mark just wants it to employ a different order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receives are &quot;serialized&quot;.  Of course they must be since the receiver
</span><br>
<span class="quotelev1">&gt; is a single process.  But Mark's performance issue is that the servers
</span><br>
<span class="quotelev1">&gt; aren't being serviced equally.  So, they back up while server unfairly gets
</span><br>
<span class="quotelev1">&gt; all the attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark, your test code has a set of buffers it cycles through on each server.
</span><br>
<span class="quotelev1">&gt;  Could you do something similar on the compositor side?  Have a set of
</span><br>
<span class="quotelev1">&gt; resources for each server.  If you want the compositor to service all
</span><br>
<span class="quotelev1">&gt; servers equally/fairly, you're going to have to prescribe this behavior in
</span><br>
<span class="quotelev1">&gt; your MPI code.  The MPI implementation can't be relied on to do this for
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this doesn't make sense, let me know and I'll try to sketch is out more
</span><br>
<span class="quotelev1">&gt; explicitly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
