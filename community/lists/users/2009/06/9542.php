<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 10:27:58 2009" -->
<!-- isoreceived="20090604142758" -->
<!-- sent="Thu, 4 Jun 2009 10:27:50 -0400" -->
<!-- isosent="20090604142750" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="20090604102750.8d51b4b3.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.7733.1244091645.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving MPI messages of unknown size<br>
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 10:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Thu, 4 Jun 2009 11:14:16 +1000
</span><br>
<span class="quotelev1">&gt; From: Lars Andersson &lt;larsand_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Receiving MPI messages of unknown size
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using blocking message passing, I have simply solved the problem
</span><br>
<span class="quotelev1">&gt; by first sending a small, fixed size header containing the size of
</span><br>
<span class="quotelev1">&gt; rest of the data, sent in the following mpi message. When using
</span><br>
<span class="quotelev1">&gt; non-blocking message passing, this doesn't seem to be such a good
</span><br>
<span class="quotelev1">&gt; idea, since we cant post the main data transfer until we have received
</span><br>
<span class="quotelev1">&gt; the message header... It seems to take away most of the advantages on
</span><br>
<span class="quotelev1">&gt; non-blocking io in the first place.
</span><br>
<p>If enough messages are small enough, a medium sized message with
<br>
fixed header and variable data eliminates most of the second message
<br>
overhead.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9543.php">Jeff Squyres: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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
