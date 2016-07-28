<?
$subject_val = "Re: [OMPI devel] some question about OMPI communicationinfrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 18:06:07 2009" -->
<!-- isoreceived="20090618220607" -->
<!-- sent="Thu, 18 Jun 2009 18:05:59 -0400" -->
<!-- isosent="20090618220559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some question about OMPI communicationinfrastructure" -->
<!-- id="D3936C75-1349-4576-822B-AAB555937401_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="607C5CFA-CF93-4608-A458-DB6006CC129E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some question about OMPI communicationinfrastructure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 18:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6275.php">Jeff Squyres: "[OMPI devel] rcache/rb component: defunct?"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>Reply:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few addendums in no particular order...
<br>
<p>1. The ompi/ tree is the MPI layer.  It's the top layer in the stack.   
<br>
It uses ORTE and OPAL for various things.
<br>
<p>2. The PML (point-to-point messagging layer) is the stuff right behind  
<br>
MPI_SEND, MPI_RECV, and friends.  We have two main PMLs: OB1 and CM  
<br>
(and some other similar ones, but not important here).  OB1 is  
<br>
probably the only one you care about.
<br>
<p>3. OB1 effects the majority of the MPI rules and behavior.  It makes  
<br>
MPI_Requests, processes them, potentially segments and re-assembles  
<br>
individual messages, etc.
<br>
<p>4. OB1 uses BTLs (Byte Transfer Layers) to actually move bytes between  
<br>
processes.  Each BTL is for a different kind of transport; OB1 uses  
<br>
the BML (BTL multiplexing layer; &quot;layer&quot; is a generous term here;  
<br>
think of it as trivial BTL pointer array management functionality) to  
<br>
manage all the BTLs that it is currently using.
<br>
<p>5. OB1 and some of the BTLs use the ORTE layer for &quot;out of band&quot;  
<br>
communications, usually for initialization and finalization.  The  
<br>
&quot;OOB&quot; ORTE framework is more-or-less equivalent to the BTL framework,  
<br>
but it's *only* used for ORTE-level communications (not MPI  
<br>
communications).  The RML (routing message layer) ORTE framework is a  
<br>
layer on top of the OOB that has the potential to route messages as  
<br>
necessary.  To be clear, the OMPI layer always uses the RML, not the  
<br>
OOB directly (the RML uses the OOB underneath).
<br>
<p>6. A bunch of OOB connections are made during the startup of the MPI  
<br>
job.  BTL connections are generally made on an &quot;as needed&quot; basis  
<br>
(e.g., during the first MPI_SEND to a given peer).  Ralph will have to  
<br>
fill you in on the details of how/when/where OOB connections are made.
<br>
<p>7. There is unfortunately little documentation on the OMPI source code  
<br>
except comments in the code.  :-\  However, there was a nice writeup  
<br>
recently that may be helpful to you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/trinity-btl-2009/">http://www.open-mpi.org/papers/trinity-btl-2009/</a>
<br>
<p>8. Once TCP BTL connections are made, IP addressing is no longer  
<br>
necessary in the OMPI-level messages that are sent because the sockets  
<br>
are connected point-to-point -- i.e., the peer process is already  
<br>
known because we have a socket to them.  The MPI layer messaging more  
<br>
contains things like the communicator ID, tag, ...etc.
<br>
<p>Hope that helps!
<br>
<p><p>On Jun 18, 2009, at 10:26 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Leo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI communications is contained in the ompi/mca/btl code area.  
</span><br>
<span class="quotelev1">&gt; The BTL's (Bit Transport Layer) actually moves the message data.  
</span><br>
<span class="quotelev1">&gt; Each BTL is responsible for opening its own connections - ORTE has  
</span><br>
<span class="quotelev1">&gt; nothing to do with it, except to transport out-of-band (OOB)  
</span><br>
<span class="quotelev1">&gt; messages to support creating the connection if that specific BTL  
</span><br>
<span class="quotelev1">&gt; requires it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are interested in TCP communications, you will find all of  
</span><br>
<span class="quotelev1">&gt; that code in ompi/mca/btl/tcp. It can be confusing down there, so  
</span><br>
<span class="quotelev1">&gt; expect to spend a little time trying to understand it. I believe  
</span><br>
<span class="quotelev1">&gt; Jeff has some documentation on the OMPI web site about it (perhaps a  
</span><br>
<span class="quotelev1">&gt; video?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source/destination is embedded in the message, again done by  
</span><br>
<span class="quotelev1">&gt; each BTL since the receiver must be a BTL of the same type. Again,  
</span><br>
<span class="quotelev1">&gt; this has nothing to do with ORTE - it is purely up to the BTL. MPI  
</span><br>
<span class="quotelev1">&gt; communications are also coordinated by the PML, which is responsible  
</span><br>
<span class="quotelev1">&gt; for matching messages with posted receives. You might need to look  
</span><br>
<span class="quotelev1">&gt; at the ompi/mca/pml/ob1 code to understand how that works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that gives you a starting point
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2009, at 7:57 AM, Leo P. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to ask some questions about things I am having trouble  
</span><br>
<span class="quotelev2">&gt;&gt; understanding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	&#149;
</span><br>
<span class="quotelev2">&gt;&gt; As far as my understanding of MPI_INIT function, I assumed MPI_INIT  
</span><br>
<span class="quotelev2">&gt;&gt; typically procedure resources required including the sockets. But  
</span><br>
<span class="quotelev2">&gt;&gt; now as I understand from the documentation that openMPI only  
</span><br>
<span class="quotelev2">&gt;&gt; allocated socket when the process has to send a message to a peer.  
</span><br>
<span class="quotelev2">&gt;&gt; If some one could let me where exactly in the code this is  
</span><br>
<span class="quotelev2">&gt;&gt; happening I would appreciate a lot. I guess this is happening in  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE layer so I am spending time looking at it. But if some one  
</span><br>
<span class="quotelev2">&gt;&gt; could let me in which function this is happening it will help me a  
</span><br>
<span class="quotelev2">&gt;&gt; lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	&#149;
</span><br>
<span class="quotelev2">&gt;&gt; Also I think most of the MPI implementation embed source and  
</span><br>
<span class="quotelev2">&gt;&gt; destination address with the communication protocol. Am I right to  
</span><br>
<span class="quotelev2">&gt;&gt; assume openMPI does the same thing. Is this also happening in the  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a documentation about this openMPI site? if there can  
</span><br>
<span class="quotelev2">&gt;&gt; someone please let me know the location of it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leo.P
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ICC World Twenty20 England '09 exclusively on YAHOO!  
</span><br>
<span class="quotelev2">&gt;&gt; CRICKET_______________________________________________
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6275.php">Jeff Squyres: "[OMPI devel] rcache/rb component: defunct?"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>Reply:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
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
