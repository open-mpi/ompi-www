<?
$subject_val = "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 22:42:10 2008" -->
<!-- isoreceived="20080312024210" -->
<!-- sent="Tue, 11 Mar 2008 21:42:00 -0500" -->
<!-- isosent="20080312024200" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?" -->
<!-- id="47D742F8.9010709_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 22:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Haha, yeah we found out about that one when trying to run Linpack with 
<br>
threaded BLAS implementations.
<br>
<p>On the MPI-2 note, anyone running MATLAB and the parallel toolkit under 
<br>
Open MPI? They are unreasonably obscure about what MPI they need 
<br>
although I do believe they need MPI-2 functions.
<br>
<p>If it will work with Open MPI, and is not a nightmare to set up, I may 
<br>
try it as some of my users would be elated. If there are excessive 
<br>
problems, I may opt for SciLab which is supposed to be an &quot;equivalent&quot; 
<br>
and open source.
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>&quot;In theory, there is no difference between theory and
<br>
practice. But in practice, there is!&quot; /-- anonymous/
<br>
<p><p>Brian Budge wrote:
<br>
<span class="quotelev1">&gt; One small (or to some, not so small) note is that full multi-threading 
</span><br>
<span class="quotelev1">&gt; with OpenMPI is very unlikely to work with infiniband right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 10, 2008 at 6:24 AM, Michael &lt;mklus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:mklus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Quick answer, till you get a complete answer, Yes, OpenMPI has long
</span><br>
<span class="quotelev1">&gt;     supported most of the MPI-2 features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mar 7, 2008, at 7:44 AM, Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Just a quick question...
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Does Open MPI 1.2.5 support most or all of the MPI-2 directives and
</span><br>
<span class="quotelev2">&gt;     &gt; features?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I have a user who specified MVAPICH2 as he needs some features like
</span><br>
<span class="quotelev2">&gt;     &gt; extra task spawning, but I am trying to standardize on Open MPI
</span><br>
<span class="quotelev2">&gt;     &gt; compiled against Infiniband for my primary software stack.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks!
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt;     &gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt;     &gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Brian Budge: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
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
