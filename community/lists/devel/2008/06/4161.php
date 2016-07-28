<?
$subject_val = "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 09:43:33 2008" -->
<!-- isoreceived="20080619134333" -->
<!-- sent="Thu, 19 Jun 2008 09:43:22 -0400" -->
<!-- isosent="20080619134322" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress" -->
<!-- id="485A627A.8040803_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B8288FA-A8C3-496E-8ECB-5D4D00DBA7B6_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 09:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had a discussion about this few weeks ago. I have a version that 
</span><br>
<span class="quotelev1">&gt; modify this behavior (SM progress will not return as long as there are 
</span><br>
<span class="quotelev1">&gt; pending acks). There was no benefit from doing so (even if one might 
</span><br>
<span class="quotelev1">&gt; think that less calls to opal_progress might improve the performances).
</span><br>
<span class="quotelev1">&gt;
</span><br>
But my concern is not the raw performance of MPI_Iprobe in this case but 
<br>
more of an interaction between MPI and an application.  The concern is 
<br>
if it takes 2 MPI_Iprobes to get to the real message (instead of one) 
<br>
then could this induce a synchronization delay in an application?   That 
<br>
is by the application not receiving the &quot;real&quot; message in the first 
<br>
MPI_Iprobe  it may decide to do other work while the other processes 
<br>
are  potentially blocked waiting for it to do some communications.
<br>
<span class="quotelev1">&gt; In fact TCP has the potential to exhibit the same behavior. However, 
</span><br>
<span class="quotelev1">&gt; TCP after each successful poll it empty the socket, so it might read 
</span><br>
<span class="quotelev1">&gt; more than one message. As we have to empty the temporary buffer, we 
</span><br>
<span class="quotelev1">&gt; interpret most of the messages inside, and this is why TCP exhibit a 
</span><br>
<span class="quotelev1">&gt; different behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess this difference in behavior between the SM BTL and TCP BTL is 
<br>
disturbing to me.  Does just processing one fifo entry per sm_progress 
<br>
call per connection buying us performance?  Would draining the acks be 
<br>
detrimental to performance?  Wouldn't providing the messages at the time 
<br>
they arrived meet the rule of obviousness to application writers?
<br>
<p>I know there is a slippery slope here of saying ok you've read one 
<br>
message should read more until there is none on the fifo.   I believe 
<br>
that is really debatable and could go either way depending on the 
<br>
application.  But ack messages are not visible to the users.  Which is 
<br>
why I was only asking about draining the ack packets.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2008, at 2:16 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen, George and others that might have SM BTL interest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my quest of looking at MPI_Iprobe performance I found what I think 
</span><br>
<span class="quotelev2">&gt;&gt; is an issue.  If you have an application that is using the SM BTL and 
</span><br>
<span class="quotelev2">&gt;&gt; does a small message send &lt;=256 followed by an MPI_Iprobe the 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_component function that is eventually called as a result 
</span><br>
<span class="quotelev2">&gt;&gt; of the opal_progress will receive and ack message from its send and 
</span><br>
<span class="quotelev2">&gt;&gt; then return.  The net affect is that the real message is after the 
</span><br>
<span class="quotelev2">&gt;&gt; ack message doesn't get read until a second MPI_Iprobe is made.
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that mca_btl_sm_component should read all Ack messages 
</span><br>
<span class="quotelev2">&gt;&gt; from a particular fifo until it either finds a real send fragment or 
</span><br>
<span class="quotelev2">&gt;&gt; no more messages on the fifo.  Otherwise, we are forcing calls like 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Iprobe to not return messages that are really there.  I am not 
</span><br>
<span class="quotelev2">&gt;&gt; sure by IB but I know that the TCP BTL does not show this issue 
</span><br>
<span class="quotelev2">&gt;&gt; (which doesn't surprise me since I imagine the BTL is relying on TCP 
</span><br>
<span class="quotelev2">&gt;&gt; to handle this type of protocol stuff).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before I go munging with the code I wanted to make sure I am not 
</span><br>
<span class="quotelev2">&gt;&gt; overlooking something here.  One concern is if I change the code to 
</span><br>
<span class="quotelev2">&gt;&gt; drain all the ack messages is that going to disrupt performance 
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
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
