<?
$subject_val = "Re: [OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 10:56:56 2012" -->
<!-- isoreceived="20120416145656" -->
<!-- sent="Mon, 16 Apr 2012 08:56:49 -0600" -->
<!-- isosent="20120416145649" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="799A6715-E8E6-4AA0-8CC7-36544E18A1B6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGdS31eMng2aaPX3hRYxAWb9291OsdmzRdRLTToY4vndEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sharing (not copying) data with OpenMPI?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 10:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19018.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19016.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19015.php">jody: "[OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>I don't believe we have exposed our shared memory system for general use - it's pretty deeply buried in the messaging system. We do have a branch where some of us are playing with an ORTE-level shared memory system for precisely this kind of use-case, but it isn't ready yet.
<br>
<p><p>On Apr 16, 2012, at 7:52 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my application i have to generate a large block of data (several
</span><br>
<span class="quotelev1">&gt; gigs) which subsequently has to be accessed by all processes (read
</span><br>
<span class="quotelev1">&gt; only),
</span><br>
<span class="quotelev1">&gt; Because of its size, it would take quite some time to serialize and
</span><br>
<span class="quotelev1">&gt; send the data to the different processes. Furthermore, i risk
</span><br>
<span class="quotelev1">&gt; running out of memory if this data is instantiated more than once on
</span><br>
<span class="quotelev1">&gt; one machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OpenMPI offer some way of sharing data between processes (on the
</span><br>
<span class="quotelev1">&gt; same machine) without needing to send (and therefore copy) it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or would i have to do this by means of creating shared memory, writing
</span><br>
<span class="quotelev1">&gt; to it, and then make it accessible for reading by the processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19018.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19016.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19015.php">jody: "[OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
