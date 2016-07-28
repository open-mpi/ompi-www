<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 08:11:54 2011" -->
<!-- isoreceived="20111110131154" -->
<!-- sent="Thu, 10 Nov 2011 05:11:49 -0800 (PST)" -->
<!-- isosent="20111110131149" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="1320930709.7857.YahooMailNeo_at_web121704.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="79404BE8-3885-40FA-B606-5FD3C4765CD5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Migration<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 08:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your reply. I am implementing a load balancing function for MPI, that will balance the computation load and the communication both at a time. So my algorithm assumes that all the cores may at the end get different number of processes to run. In the beginning (before that function will be called), each core will have equal number of processes. So I am thinking either to start more processes on each core (than needed) and run my function for load balancing and then block the remaining processes (on each core). In this way I will be able to achieve different number of processes per core.

I can explain you the complete problem if you want. 

regards,
Mudassar


________________________________
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Thursday, November 10, 2011 1:57 PM
Subject: Re: [OMPI users] Process Migration


I'm not sure what you mean by &quot;migrate&quot;. Are you talking about restarting a failed process at a different location? Or arbitrarily moving a process to another location upon command?



On Nov 10, 2011, at 5:18 AM, Mudassar Majeed wrote:


&gt;Dear MPI community, 
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Please inform me if it is possible to migrate MPI processes among the nodes or cores. By note I mean a machine having multiple cores. So the cluster can have several nodes and each node can have several cores. I want to know if it is the part of MPI model to migrate processes among nodes or cores.
&gt;
&gt;regards,
&gt;Mudassar
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
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
