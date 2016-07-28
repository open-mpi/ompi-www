<?
$subject_val = "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 08:08:05 2008" -->
<!-- isoreceived="20080312120805" -->
<!-- sent="Wed, 12 Mar 2008 07:07:35 -0500" -->
<!-- isosent="20080312120735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?" -->
<!-- id="3992AEA1-C95F-47A5-9722-513169998ECA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5b7094580803111731x18acf7bdxa6cca77d230acb2c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 08:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_THREAD_MULTIPLE is unlikely to work at all (regardless of network)  
<br>
in the v1.2 series.
<br>
<p>On Mar 11, 2008, at 7:31 PM, Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt; One small (or to some, not so small) note is that full multi- 
</span><br>
<span class="quotelev1">&gt; threading with OpenMPI is very unlikely to work with infiniband  
</span><br>
<span class="quotelev1">&gt; right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 10, 2008 at 6:24 AM, Michael &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Quick answer, till you get a complete answer, Yes, OpenMPI has long
</span><br>
<span class="quotelev1">&gt; supported most of the MPI-2 features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 7, 2008, at 7:44 AM, Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Just a quick question...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does Open MPI 1.2.5 support most or all of the MPI-2 directives and
</span><br>
<span class="quotelev2">&gt; &gt; features?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a user who specified MVAPICH2 as he needs some features like
</span><br>
<span class="quotelev2">&gt; &gt; extra task spawning, but I am trying to standardize on Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; compiled against Infiniband for my primary software stack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt; &gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt; &gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
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
