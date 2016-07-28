<?
$subject_val = "Re: [OMPI users] MPI_Bcast from OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 08:24:19 2009" -->
<!-- isoreceived="20090423122419" -->
<!-- sent="Thu, 23 Apr 2009 05:24:14 -0700 (PDT)" -->
<!-- isosent="20090423122414" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast from OpenMPI" -->
<!-- id="172351.88821.qm_at_web62006.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="98268ADF-E5C7-4887-BCCC-0111B74B7C97_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast from OpenMPI<br>
<strong>From:</strong> shan axida (<em>axida2009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 08:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9066.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9064.php">Katz, Jacob: "[OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>In reply to:</strong> <a href="9059.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I had a mistake in calculation.
Not 131072 (double) but 131072 KB.
It means around 128 MB.
 



________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Thursday, April 23, 2009 8:23:52 PM
Subject: Re: [OMPI users] MPI_Bcast from OpenMPI

Very strange; 6 seconds for a 1MB broadcast over 64 processes is *way* too long.  Even 2.5 sec at 2MB seems too long -- what is your network speed?  I'm not entirely sure what you mean by &quot;4 link&quot; on your graph.

Without more information, I would first check your hardware setup to see if there's some kind of network buffering / congestion issue occurring.  Here's a total guess: your ethernet switch(es) are low quality (from an HPC perspective, at least) such that you're incurring congestion and/or retransmission at that size for some reason.

You could also be running up against memory bus congestion (I assume you mean 4 cores per node; are they NUMA or UMA?).  But that wouldn't account for the huge spike at 1MB.


On Apr 23, 2009, at 1:32 AM, shan axida wrote:

&gt; Hi,
&gt; One more question:
&gt; I have executed the MPI_Bcast() in 64 processes in 16 nodes Ethernet multiple links cluster.
&gt; The result is shown in the file attached on this E-mail.
&gt; What is going on at 131072 double message size?
&gt; I have executed it many times but the result is still the same.
&gt; 
&gt; THANK YOU!
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; &lt;openmpi.pdf&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


--Jeff Squyres
Cisco Systems

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9066.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9064.php">Katz, Jacob: "[OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>In reply to:</strong> <a href="9059.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
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
