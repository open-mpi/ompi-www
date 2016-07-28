<?
$subject_val = "Re: [OMPI users] MPI_Bcast from OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 20:32:42 2009" -->
<!-- isoreceived="20090424003242" -->
<!-- sent="Thu, 23 Apr 2009 17:32:37 -0700 (PDT)" -->
<!-- isosent="20090424003237" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast from OpenMPI" -->
<!-- id="835039.14504.qm_at_web62005.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49F096A6.9090800_at_sun.com" -->
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
<strong>Date:</strong> 2009-04-23 20:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But, exactly the same program gets different result in another cluster.
I mean the result doent have any spike at all.
Second cluster is almost the same features with the previous one except little 
small memory capacity and little low frequency.
First cluster: 3.0 GHz Intel Xeon, 4GB memory, centOS 4.6, 
Second cluster: 2.8 GHz Intel Xeon, 3GBmemory, Fedora core5
Openmpi1.3 is used in both cluster.






________________________________
From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Friday, April 24, 2009 1:26:14 AM
Subject: Re: [OMPI users] MPI_Bcast from OpenMPI

Okay.  So, going back to Jeff's second surprise, we have 256 Mbyte/2.5
sec = 100 Mbyte/sec = 1 Gbit/sec (sloppy math).  So, without getting
into details of what we're measuring/reporting here, there doesn't on
the face of it appear to be anything wrong with the baseline
performance.  Jeff was right that 256K doubles should have been faster,
but 256 Mbyte... seems reasonable.

So, the remaining mystery is the 6x or so spike at 128 Mbyte.  Dunno. 
How important is it to resolve that mystery?

shan axida wrote: 
Sorry, I had a mistake in calculation.
Not 131072 (double) but 131072 KB.
It means around 128 MB.
 
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Thursday, April 23, 2009 8:23:52 PM
Subject: Re: [OMPI users] MPI_Bcast from OpenMPI


Very strange; 6 seconds for a 1MB broadcast over 64 processes is *way*
too long.  Even 2.5 sec at 2MB seems too long


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
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
