<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  4 20:29:29 2013" -->
<!-- isoreceived="20130505002929" -->
<!-- sent="Sat, 4 May 2013 17:29:21 -0700" -->
<!-- isosent="20130505002921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers" -->
<!-- id="00B42741-1FB7-44A9-A4FF-E1FCA7E9F5BB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="yegehdmmhd3.fsf_at_carro.ll.iac.es" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-04 20:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2013, at 4:54 PM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have used OpenMPI before without any troubles, and configured MPICH,
</span><br>
<span class="quotelev1">&gt; MPICH2 and OpenMPI in many different machines before, but recently we
</span><br>
<span class="quotelev1">&gt; upgraded the OS to Fedora 17, and now I'm having trouble running an MPI
</span><br>
<span class="quotelev1">&gt; code in two of our machines connected via a switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought perhaps the old installation was giving problems, so I
</span><br>
<span class="quotelev1">&gt; reinstalled OpenMPI (1.6.4) and I have no trouble when running a
</span><br>
<span class="quotelev1">&gt; parallel code in just one node. I also don't have any trouble ssh'ing
</span><br>
<span class="quotelev1">&gt; (without need for password) between these machines, but when I try to
</span><br>
<span class="quotelev1">&gt; run a parallel job spanning both machines, I get a hanged mpiexec
</span><br>
<span class="quotelev1">&gt; process in the submitting machine, and an &quot;orted&quot; process in the other
</span><br>
<span class="quotelev1">&gt; machine, but nothing moves. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess it is an issue with libraries and/or different MPI versions (the
</span><br>
<span class="quotelev1">&gt; machines have other site-wide MPI libraries installed), but I'm not sure
</span><br>
<span class="quotelev1">&gt; how to debug the issue. I looked in the FAQ, but I didn't find anything
</span><br>
<span class="quotelev1">&gt; relevant. Issue
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#intel-compilers-static">http://www.open-mpi.org/faq/?category=running#intel-compilers-static</a> is
</span><br>
<span class="quotelev1">&gt; different, since I don't get any warning or errors when running, just
</span><br>
<span class="quotelev1">&gt; all processes stuck. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to dump details of what OpenMPI is trying to do in each
</span><br>
<span class="quotelev1">&gt; node, so I can see if it is looking for different libraries in each
</span><br>
<span class="quotelev1">&gt; node, or something similar?
</span><br>
<p>What I do is simply &quot;ssh ompi_info -V&quot; to each remote node and compare results - you should get the same answer everywhere.
<br>
<p>Another option in these situations is to configure --enable-orterun-prefix-by-default. If you install in the same location on each node (e.g., on an NSF mount), then this will ensure you get that same library.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#193;ngel de Vicente
</span><br>
<span class="quotelev1">&gt; <a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21841.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
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
