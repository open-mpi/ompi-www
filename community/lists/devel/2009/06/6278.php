<?
$subject_val = "Re: [OMPI devel] some question about OMPI communicationinfrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 01:16:05 2009" -->
<!-- isoreceived="20090619051605" -->
<!-- sent="Fri, 19 Jun 2009 10:45:58 +0530 (IST)" -->
<!-- isosent="20090619051558" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some question about OMPI communicationinfrastructure" -->
<!-- id="655452.54361.qm_at_web8705.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D3936C75-1349-4576-822B-AAB555937401_at_cisco.com" -->
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
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 01:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6279.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,

All the information provided here helps me a lot.

Thank you, really really really appreciate it.  :)

Regards,
Leo P.




________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Friday, 19 June, 2009 5:05:59 AM
Subject: Re: [OMPI devel] some question about OMPI communicationinfrastructure

A few addendums in no particular order...

1. The ompi/ tree is the MPI layer.  It's the top layer in the stack.  It uses ORTE and OPAL for various things.

2. The PML (point-to-point messagging layer) is the stuff right behind MPI_SEND, MPI_RECV, and friends.  We have two main PMLs: OB1 and CM (and some other similar ones, but not important here).  OB1 is probably the only one you care about.

3. OB1 effects the majority of the MPI rules and behavior.  It makes MPI_Requests, processes them, potentially segments and re-assembles individual messages, etc.

4. OB1 uses BTLs (Byte Transfer Layers) to actually move bytes between processes.  Each BTL is for a different kind of transport; OB1 uses the BML (BTL multiplexing layer; &quot;layer&quot; is a generous term here; think of it as trivial BTL pointer array management functionality) to manage all the BTLs that it is currently using.

5. OB1 and some of the BTLs use the ORTE layer for &quot;out of band&quot; communications, usually for initialization and finalization.  The &quot;OOB&quot; ORTE framework is more-or-less equivalent to the BTL framework, but it's *only* used for ORTE-level communications (not MPI communications).  The RML (routing message layer) ORTE framework is a layer on top of the OOB that has the potential to route messages as necessary.  To be clear, the OMPI layer always uses the RML, not the OOB directly (the RML uses the OOB underneath).

6. A bunch of OOB connections are made during the startup of the MPI job.  BTL connections are generally made on an &quot;as needed&quot; basis (e.g., during the first MPI_SEND to a given peer).  Ralph will have to fill you in on the details of how/when/where OOB connections are made.

7. There is unfortunately little documentation on the OMPI source code except comments in the code.  :-\  However, there was a nice writeup recently that may be helpful to you:

    <a href="http://www.open-mpi.org/papers/trinity-btl-2009/">http://www.open-mpi.org/papers/trinity-btl-2009/</a>

8. Once TCP BTL connections are made, IP addressing is no longer necessary in the OMPI-level messages that are sent because the sockets are connected point-to-point -- i.e., the peer process is already known because we have a socket to them.  The MPI layer messaging more contains things like the communicator ID, tag, ...etc.

Hope that helps!


On Jun 18, 2009, at 10:26 AM, Ralph Castain wrote:

&gt; Hi Leo
&gt; 
&gt; The MPI communications is contained in the ompi/mca/btl code area. The BTL's (Bit Transport Layer) actually moves the message data. Each BTL is responsible for opening its own connections - ORTE has nothing to do with it, except to transport out-of-band (OOB) messages to support creating the connection if that specific BTL requires it.
&gt; 
&gt; If you are interested in TCP communications, you will find all of that code in ompi/mca/btl/tcp. It can be confusing down there, so expect to spend a little time trying to understand it. I believe Jeff has some documentation on the OMPI web site about it (perhaps a video?).
&gt; 
&gt; The source/destination is embedded in the message, again done by each BTL since the receiver must be a BTL of the same type. Again, this has nothing to do with ORTE - it is purely up to the BTL. MPI communications are also coordinated by the PML, which is responsible for matching messages with posted receives. You might need to look at the ompi/mca/pml/ob1 code to understand how that works.
&gt; 
&gt; Hope that gives you a starting point
&gt; Ralph
&gt; 
&gt; On Jun 18, 2009, at 7:57 AM, Leo P. wrote:
&gt; 
&gt;&gt; Hi Everyone,
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I wanted to ask some questions about things I am having trouble understanding.
&gt;&gt; 
&gt;&gt;     &#226;&#128;&#162;
&gt;&gt; As far as my understanding of MPI_INIT function, I assumed MPI_INIT typically procedure resources required including the sockets. But now as I understand from the documentation that openMPI only allocated socket when the process has to send a message to a peer. If some one could let me where exactly in the code this is happening I would appreciate a lot. I guess this is happening in ORTE layer so I am spending time looking at it. But if some one could let me in which function this is happening it will help me a lot.
&gt;&gt; 
&gt;&gt;     &#226;&#128;&#162;
&gt;&gt; Also I think most of the MPI implementation embed source and destination address with the communication protocol. Am I right to assume openMPI does the same thing. Is this also happening in the ORTE layer.
&gt;&gt; 
&gt;&gt; Is there a documentation about this openMPI site? if there can someone please let me know the location of it.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Sincerely,
&gt;&gt; 
&gt;&gt; Leo.P
&gt;&gt; 
&gt;&gt; 
&gt;&gt; ICC World Twenty20 England '09 exclusively on YAHOO! CRICKET_______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>


--Jeff Squyres
Cisco Systems


_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



      Love Cricket? Check out live scores, photos, video highlights and more. Click here <a href="http://cricket.yahoo.com">http://cricket.yahoo.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6279.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
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
