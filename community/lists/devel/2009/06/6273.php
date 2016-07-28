<?
$subject_val = "Re: [OMPI devel] some question about OMPI communication infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 12:59:07 2009" -->
<!-- isoreceived="20090618165907" -->
<!-- sent="Thu, 18 Jun 2009 22:29:00 +0530 (IST)" -->
<!-- isosent="20090618165900" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some question about OMPI communication infrastructure" -->
<!-- id="267281.78749.qm_at_web8704.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some question about OMPI communication infrastructure<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 12:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6274.php">Eugene Loh: "[OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,

Thanks for the response.  And Yes, this give me a good starting point Thanks.

Leo.P




________________________________
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Thursday, 18 June, 2009 9:26:46 PM
Subject: Re: [OMPI devel] some question about OMPI communication infrastructure

Hi Leo

The MPI communications is contained in the ompi/mca/btl code area. The BTL's (Bit Transport Layer) actually moves the message data. Each BTL is responsible for opening its own connections - ORTE has nothing to do with it, except to transport out-of-band (OOB) messages to support creating the connection if that specific BTL requires it.

If you are interested in TCP communications, you will find all of that code in ompi/mca/btl/tcp. It can be confusing down there, so expect to spend a little time trying to understand it. I believe Jeff has some documentation on the OMPI web site about it (perhaps a video?).

The source/destination is embedded in the message, again done by each BTL since the receiver must be a BTL of the same type. Again, this has nothing to do with ORTE - it is purely up to the BTL. MPI communications are also coordinated by the PML, which is responsible for matching messages with posted receives. You might need to look at the ompi/mca/pml/ob1 code to understand how that works.

Hope that gives you a starting point
Ralph


On Jun 18, 2009, at 7:57 AM, Leo P. wrote:

Hi Everyone,

I wanted to ask some questions about things I am having trouble understanding.
	1. As far as my understanding of MPI_INIT function, I assumed MPI_INIT typically procedure resources required including the sockets. But now as I understand from the documentation that openMPI only allocated socket when the process has to send a message to a peer. If some one could let me where exactly in the code this is happening I would appreciate a lot. I guess this is happening in ORTE layer so I am spending time looking at it. But if some one could let me in which function this is happening it will help me a lot. 

	2. Also I think most of the MPI implementation embed source and destination address with the communication protocol. Am I right to assume openMPI does the same thing. Is this also happening in the ORTE layer.
Is there a documentation about this openMPI site? if there can someone please let me know the location of it.



Sincerely,
Leo.P
________________________________
ICC World Twenty20 England '09 exclusively on YAHOO! CRICKET_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



      Love Cricket? Check out live scores, photos, video highlights and more. Click here <a href="http://cricket.yahoo.com">http://cricket.yahoo.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6274.php">Eugene Loh: "[OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
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
