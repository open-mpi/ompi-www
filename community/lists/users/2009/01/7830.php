<?
$subject_val = "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 13:26:44 2009" -->
<!-- isoreceived="20090126182644" -->
<!-- sent="Mon, 26 Jan 2009 13:26:35 -0500" -->
<!-- isosent="20090126182635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend" -->
<!-- id="138CC7BD-BB81-4F81-9BEC-1FA66E2D85AB_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="01B49D24DCA6104D925B3BCAC891D08C118C93_at_XMBTX133.northgrum.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 13:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7829.php">Ralph Castain: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>In reply to:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 2:36 PM, Hartzman, Leslie D (MS) wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m trying to modify some code that is involved in point-to-point  
</span><br>
<span class="quotelev1">&gt; communications. Process A has a one way mode of communication with  
</span><br>
<span class="quotelev1">&gt; Process B. &#145;A&#146; checks to see if its rank is zero and if so will send  
</span><br>
<span class="quotelev1">&gt; a &#147;command&#148; to &#145;B&#146; (MPI_Issend) about what kind of data is going to  
</span><br>
<span class="quotelev1">&gt; be coming next. After sending the command to &#145;B&#146;, &#145;A&#146; then issues an  
</span><br>
<span class="quotelev1">&gt; Issend, sending a block of data to &#145;B&#146;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process &#145;B&#146; sets up a number of request instances via MPI_Recv_init  
</span><br>
<span class="quotelev1">&gt; and then issues an MPI_Startall on the requests. &#145;B&#146; sits in a  
</span><br>
<span class="quotelev1">&gt; &#147;while (1)&#148; loop, where the basic processing is a switch statement  
</span><br>
<span class="quotelev1">&gt; based on the content of the command being sent from &#145;A&#146;. At the top  
</span><br>
<span class="quotelev1">&gt; of the loop, &#145;B&#146; sits at an MPI_Wait until a command comes in. Then  
</span><br>
<span class="quotelev1">&gt; at each case in the switch, &#145;B&#146; sits in a MPI_Waitall to make sure  
</span><br>
<span class="quotelev1">&gt; that all &#145;A&#146;s have sent their data. &#145;B&#146; then processes the received  
</span><br>
<span class="quotelev1">&gt; data, issues an MPI_Startall on the receive requests instances,  
</span><br>
<span class="quotelev1">&gt; exits the switch statement and then issues an MPI_Start on the &#145;B&#146;  
</span><br>
<span class="quotelev1">&gt; command request so it can go back to waiting at the top of the loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the original process &#145;A&#146; code, prior to sending out a command,  
</span><br>
<span class="quotelev1">&gt; &#145;A&#146; will issue an MPI_Wait to make sure that the command request  
</span><br>
<span class="quotelev1">&gt; instance is free.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not quite sure I understand that statement.  Can't you just  
<br>
compare the request to MPI_REQUEST_NULL?  From your description, it  
<br>
sounds like if you get to this point and the request is not  
<br>
REQUEST_NULL, there's something else wrong.   However, this may simply  
<br>
be a side-effect from the short description of complex code...?
<br>
<p><span class="quotelev1">&gt; After which it sends out the command, followed by the data. So I&#146;ve  
</span><br>
<span class="quotelev1">&gt; taken this infrastructure and have tried to add a new command from  
</span><br>
<span class="quotelev1">&gt; within a function called in &#145;A&#146;. The function is passed the command  
</span><br>
<span class="quotelev1">&gt; request instance to be used for the MPI_Wait. I check the status of  
</span><br>
<span class="quotelev1">&gt; this MPI_Wait, and all is good. I then issue my own MPI_Issend (have  
</span><br>
<span class="quotelev1">&gt; also tried MPI_Ssend) to process &#145;B&#146;. The status coming back from  
</span><br>
<span class="quotelev1">&gt; the send is good. At the end of this function I added in another  
</span><br>
<span class="quotelev1">&gt; MPI_Wait because this function sends several commands from within a  
</span><br>
<span class="quotelev1">&gt; loop. None of the commands are received by &#145;B&#146; &#150; at least not at the  
</span><br>
<span class="quotelev1">&gt; beginning. After process &#145;A&#146; goes through an outer loop a few times  
</span><br>
<span class="quotelev1">&gt; (each time calling my new function with the MPI calls in it),  
</span><br>
<span class="quotelev1">&gt; process &#145;B&#146; suddenly gets some of the commands for one pass through  
</span><br>
<span class="quotelev1">&gt; the function. After that it never comes back from the MPI_Wait at  
</span><br>
<span class="quotelev1">&gt; the end of the inner function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It's pretty hard to say without looking at your code.
<br>
<p>But one warning is that depending on your network type, progress on  
<br>
MPI message passing may not occur unless you are in MPI function  
<br>
calls.  So if you MPI_Isend (or MPI_Issend or any other non-blocking  
<br>
call), the message may or may not go out at that instant (or perhaps  
<br>
only the first part of it goes out at that instant).  It may require  
<br>
another call into OMPI's progression engine to continue sending the  
<br>
message.  Hence, on the receiver, it may not look like messages have  
<br>
arrived, but only because they haven't *fully* arrived yet (because  
<br>
the sender hasn't finished sending them yet).
<br>
<p>That being said, I assume that your A process will block in an  
<br>
MPI_WAITANY, or somesuch, waiting for replies from the B process(es).   
<br>
Blocking in MPI_WAIT* will trip OMPI's progression engine such that  
<br>
whatever sends/receives are pending will get progressed as they can.
<br>
<p>One clarifying question: why are you using synchronous sends?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7829.php">Ralph Castain: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>In reply to:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
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
