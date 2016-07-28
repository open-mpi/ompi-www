<?
$subject_val = "Re: [OMPI users] HAMSTER MPI+Yarn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 13:37:50 2014" -->
<!-- isoreceived="20141027173750" -->
<!-- sent="Mon, 27 Oct 2014 10:37:46 -0700" -->
<!-- isosent="20141027173746" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HAMSTER MPI+Yarn" -->
<!-- id="FB32ECA5-6653-474A-9CAE-01BF08749BC2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="268BDC3A-7CC8-41C6-A597-B51A038A0F69_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] HAMSTER MPI+Yarn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 13:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>In reply to:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: the &#226;&#128;&#156;better&#226;&#128;&#157; solution is to move Hadoop to an HPC-like RM such as Slurm. We did this as Pivotal as well as at Intel, but in both cases business moves at the very end of the project (Greenplum becoming Pivotal, and Intel moving its Hadoop work into Cloudera) blocked its release. Frustrating, as all the work was done in both cases :-(
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 27, 2014, at 10:28 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks this is good feedback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was worried with the dynamic nature of Yarn containers that it would be hard to coordinate wire up, and you have confirmed that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2014, at 11:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 26, 2014, at 9:56 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are starting to look at supporting MPI on our Hadoop/Spark YARN based cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You poor soul&#226;&#128;&#166;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found a bunch of referneces to Hamster, but what I don't find is if it was ever merged into regular OpenMPI, and if so is it just another RM integration?  Or does it need more setup?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I left Pivotal, it was based on a copy of the OMPI trunk that sat somewhere in the 1.7 series, I believe. Last contact I had indicated they were trying to update, but I&#226;&#128;&#153;m not sure they were successful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html">http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Didn&#226;&#128;&#153;t know they had actually (finally) released it, so good to know. Just so you are aware, there are major problems running MPI under Yarn as it just isn&#226;&#128;&#153;t designed for MPI support. What we did back then was add a JNI layer so that ORTE could run underneath it, and then added a PMI-like service to provide the wireup support (since Yarn couldn&#226;&#128;&#153;t be used to exchange the info itself). You also have the issue that Yarn doesn&#226;&#128;&#153;t understand the need for all the procs to be launched together, and so you have to modify Yarn so it will ensure that the MPI procs are all running or else you&#226;&#128;&#153;ll hang in MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which appears to imply extra setup required.  Is this documented anywhere for OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m afraid you&#226;&#128;&#153;ll just have to stick with the Pivotal-provided version as the integration is rather complicated. Don&#226;&#128;&#153;t expect much in the way of performance! This was purely intended as a way for &#226;&#128;&#156;casual&#226;&#128;&#157; MPI users to make use of &#226;&#128;&#156;free&#226;&#128;&#157; time on their Hadoop cluster, not for any serious technical programming.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25593.php">http://www.open-mpi.org/community/lists/users/2014/10/25593.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25613.php">http://www.open-mpi.org/community/lists/users/2014/10/25613.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25616.php">http://www.open-mpi.org/community/lists/users/2014/10/25616.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>In reply to:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
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
