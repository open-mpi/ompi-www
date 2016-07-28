<?
$subject_val = "[OMPI devel] some question about OMPI communication infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 09:57:30 2009" -->
<!-- isoreceived="20090618135730" -->
<!-- sent="Thu, 18 Jun 2009 19:27:24 +0530 (IST)" -->
<!-- isosent="20090618135724" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="[OMPI devel] some question about OMPI communication infrastructure" -->
<!-- id="627914.39222.qm_at_web8702.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="66FBD794-4275-4252-848B-8BE777145939_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] some question about OMPI communication infrastructure<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 09:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;
Hi Everyone, 

I wanted to ask some questions about things I am having trouble understanding. 
	1. As far as my understanding of MPI_INIT function, I assumed MPI_INIT typically procedure resources required including the sockets. But now as I understand from the documentation that openMPI only allocated socket when the process has to send a message to a peer. If some one could let me where exactly in the code this is happening I would appreciate a lot. I guess this is happening in ORTE layer so I am spending time looking at it. But if some one could let me in which function this is happening it will help me a lot. 

	2. Also I think most of the MPI implementation embed source and destination address with the communication protocol. Am I right to assume openMPI does the same thing. Is this also happening in the ORTE layer.
Is there a documentation about this openMPI site? if there can someone please let me know the location of it.



Sincerely,
Leo.P 


      ICC World Twenty20 England &amp;#39;09 exclusively on YAHOO! CRICKET <a href="http://cricket.yahoo.com">http://cricket.yahoo.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
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
