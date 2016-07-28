<?
$subject_val = "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 09:34:56 2008" -->
<!-- isoreceived="20080312133456" -->
<!-- sent="Wed, 12 Mar 2008 15:34:48 +0200" -->
<!-- isosent="20080312133448" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?" -->
<!-- id="47D7DBF8.3080002_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47D742F8.9010709_at_uark.edu" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 09:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Jeff Pummill: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; Haha, yeah we found out about that one when trying to run Linpack with 
</span><br>
<span class="quotelev1">&gt; threaded BLAS implementations.
</span><br>
BTW Goto BLAS threaded implementation doesn't use any MPI calls. So you 
<br>
may build Linpack with Goto_thread + OMPI non-threaded and it will run
<br>
without any problem.
<br>
<p>Pasha.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the MPI-2 note, anyone running MATLAB and the parallel toolkit 
</span><br>
<span class="quotelev1">&gt; under Open MPI? They are unreasonably obscure about what MPI they need 
</span><br>
<span class="quotelev1">&gt; although I do believe they need MPI-2 functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it will work with Open MPI, and is not a nightmare to set up, I may 
</span><br>
<span class="quotelev1">&gt; try it as some of my users would be elated. If there are excessive 
</span><br>
<span class="quotelev1">&gt; problems, I may opt for SciLab which is supposed to be an &quot;equivalent&quot; 
</span><br>
<span class="quotelev1">&gt; and open source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev1">&gt; (479) 575 - 4590
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In theory, there is no difference between theory and
</span><br>
<span class="quotelev1">&gt; practice. But in practice, there is!&quot; /-- anonymous/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Budge wrote:
</span><br>
<span class="quotelev2">&gt;&gt; One small (or to some, not so small) note is that full 
</span><br>
<span class="quotelev2">&gt;&gt; multi-threading with OpenMPI is very unlikely to work with infiniband 
</span><br>
<span class="quotelev2">&gt;&gt; right now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Mar 10, 2008 at 6:24 AM, Michael &lt;mklus_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:mklus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Quick answer, till you get a complete answer, Yes, OpenMPI has long
</span><br>
<span class="quotelev2">&gt;&gt;     supported most of the MPI-2 features.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mar 7, 2008, at 7:44 AM, Jeff Pummill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Just a quick question...
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Does Open MPI 1.2.5 support most or all of the MPI-2 directives and
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; features?
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I have a user who specified MVAPICH2 as he needs some features like
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; extra task spawning, but I am trying to standardize on Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; compiled against Infiniband for my primary software stack.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Jeff F. Pummill
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; University of Arkansas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Jeff Pummill: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
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
