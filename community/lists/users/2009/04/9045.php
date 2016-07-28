<?
$subject_val = "Re: [OMPI users] SHARED Memory----------------";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 01:01:53 2009" -->
<!-- isoreceived="20090423050153" -->
<!-- sent="Wed, 22 Apr 2009 22:01:48 -0700 (PDT)" -->
<!-- isosent="20090423050148" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SHARED Memory----------------" -->
<!-- id="783934.81376.qm_at_web62007.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49EFEC75.60806_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SHARED Memory----------------<br>
<strong>From:</strong> shan axida (<em>axida2009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 01:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
What I am asking is if I use MPI_Send and MPI_Recv between processes in 
a node, does it mean using shared memory or not? if not, how to use 
shared memory among processes which are runing in a node?


Thank you!




________________________________
From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Thursday, April 23, 2009 1:20:05 PM
Subject: Re: [OMPI users] SHARED Memory----------------

Just to clarify (since &quot;send to self&quot; strikes me as confusing)...

If you're talking about using shared memory for point-to-point MPI
message passing, OMPI typically uses it automatically between two
processes on the same node.  It is *not* used for a process sending to
itself.  There is a well-written FAQ (in my arrogant opinion!) at
<a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> -- e.g.,
<a href="http://www.open-mpi.org/faq/?category=sm#sm-btl">http://www.open-mpi.org/faq/?category=sm#sm-btl</a> .

If you're talking about some other use of shared memory, let us know
what you had in mind.

Elvedin Trnjanin wrote: 
Shared memory is used for send-to-self scenarios such as if you're
making use of multiple slots on the same machine.

shan axida wrote: 
Any body know how to make use of shared memory in OpenMPI
implementation?


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9044.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9046.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
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
