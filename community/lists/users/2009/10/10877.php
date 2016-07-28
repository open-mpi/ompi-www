<?
$subject_val = "Re: [OMPI users] Is Iprobe fast when there is no message to recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 07:05:36 2009" -->
<!-- isoreceived="20091003110536" -->
<!-- sent="Sat, 3 Oct 2009 07:05:30 -0400" -->
<!-- isosent="20091003110530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is Iprobe fast when there is no message to recieve" -->
<!-- id="5593931F-BB40-401B-900A-8ED3D0EC1FD2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1254451433.15684.34.camel_at_peter-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is Iprobe fast when there is no message to recieve<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 07:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Reply:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Keep in mind that MPI says you do have to eventually receive the  
<br>
message -- so just checking if it's there is not enough (eventually).   
<br>
Iprobe is definitely one way.  You could also post a non-blocking  
<br>
receive (persistent or not) and MPI_TEST to see if it has completed.
<br>
<p>However, if the message is long, MPI implementations like Open MPI  
<br>
*may* require multiple invocations of the progression engine to  
<br>
actually receive the entire message (e.g., it may get fragmented by  
<br>
the sender and use a rendezvous protocol, therefore having multiple  
<br>
states in the progression logic, each of which may only advance one or  
<br>
two states in each call to MPI_TEST).
<br>
<p>That being said, if you just want to send a quick &quot;notify&quot; that an  
<br>
event has occurred, you might want to use a specific tag and/or  
<br>
communicator for these extraordinary messages.  Then, when the event  
<br>
occurs, send a very short message on this special tag/communicator  
<br>
(potentially even a 0-byte message).  Open MPI will send short  
<br>
messages eagerly and not require multiple states through a progression  
<br>
machine (heck, just about all MPI's do this).  You can MPI_TEST for  
<br>
the completion of this short/0-byte receive very quickly.  You can  
<br>
then send the actual data of the event in a different non-blocking  
<br>
receive that is only checked if the short &quot;alert&quot; message is received.
<br>
<p>There are a small number of cases (e.g., resource exhaustion) where  
<br>
Open MPI will have to fall back out of the eager send mode for short  
<br>
messages, but in general, sending a short message with an alert and a  
<br>
larger message with the actual data to be processed might be a good  
<br>
choice.
<br>
<p><p>On Oct 1, 2009, at 10:43 PM, Peter Lonjers wrote:
<br>
<p><span class="quotelev1">&gt; I am not sure if this is the right place the ask this question but  
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev1">&gt; it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simplified abstract version of the question.
</span><br>
<span class="quotelev1">&gt; I have 2 MPI processes and I want one to make an occasional signal to
</span><br>
<span class="quotelev1">&gt; the other process.  These signals will not happen at predictable  
</span><br>
<span class="quotelev1">&gt; times.
</span><br>
<span class="quotelev1">&gt; I want the other process sitting in some kind of work loop to be  
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; make a very fast check to see if a signal has been sent to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the best way to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actual problem
</span><br>
<span class="quotelev1">&gt; I am working on a realistic neural net simulator. The neurons are  
</span><br>
<span class="quotelev1">&gt; split
</span><br>
<span class="quotelev1">&gt; into groups with one group to each processor to simulate them.
</span><br>
<span class="quotelev1">&gt; Occasionally a neuron will spike and have to send that message to
</span><br>
<span class="quotelev1">&gt; neurons on a different processor. This is a relatively rare event. The
</span><br>
<span class="quotelev1">&gt; receiving neurons need to be able to make a very fast check to see if
</span><br>
<span class="quotelev1">&gt; there is a message from neurons on another processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The way I am doing it now is to use simple send and receive commands.
</span><br>
<span class="quotelev1">&gt; The receiving cell does an iprobe check on every loop through  the
</span><br>
<span class="quotelev1">&gt; simulation for every cell that connects to it to see if there is a
</span><br>
<span class="quotelev1">&gt; message(spike) from that cell. If the iprobe says there is a message  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; does a receive on that message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems convoluted though. I do not actually need to receive the
</span><br>
<span class="quotelev1">&gt; message just know that a message is there. And it seems like depending
</span><br>
<span class="quotelev1">&gt; on how Iprobe works there might be a faster method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is Iprobe fast if there is no message to receive?
</span><br>
<span class="quotelev1">&gt; Would persistent connections work better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway any help would be greatly appreciated.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Reply:</strong> <a href="10882.php">Ashley Pittman: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
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
