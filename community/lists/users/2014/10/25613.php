<?
$subject_val = "Re: [OMPI users] HAMSTER MPI+Yarn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 11:25:30 2014" -->
<!-- isoreceived="20141027152530" -->
<!-- sent="Mon, 27 Oct 2014 08:25:26 -0700" -->
<!-- isosent="20141027152526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HAMSTER MPI+Yarn" -->
<!-- id="F99603D3-73E4-4597-854C-71FEAA199BE1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B780875-AFCB-40DC-B026-1785B3082D4C_at_umich.edu" -->
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
<strong>Date:</strong> 2014-10-27 11:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25593.php">Brock Palen: "[OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Reply:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 26, 2014, at 9:56 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are starting to look at supporting MPI on our Hadoop/Spark YARN based cluster.
</span><br>
<p>You poor soul&#226;&#128;&#166;
<br>
<p><span class="quotelev1">&gt;  I found a bunch of referneces to Hamster, but what I don't find is if it was ever merged into regular OpenMPI, and if so is it just another RM integration?  Or does it need more setup?
</span><br>
<p>When I left Pivotal, it was based on a copy of the OMPI trunk that sat somewhere in the 1.7 series, I believe. Last contact I had indicated they were trying to update, but I&#226;&#128;&#153;m not sure they were successful.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found this:
</span><br>
<span class="quotelev1">&gt; <a href="http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html">http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html</a> &lt;<a href="http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html">http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html</a>&gt;
</span><br>
<p>Didn&#226;&#128;&#153;t know they had actually (finally) released it, so good to know. Just so you are aware, there are major problems running MPI under Yarn as it just isn&#226;&#128;&#153;t designed for MPI support. What we did back then was add a JNI layer so that ORTE could run underneath it, and then added a PMI-like service to provide the wireup support (since Yarn couldn&#226;&#128;&#153;t be used to exchange the info itself). You also have the issue that Yarn doesn&#226;&#128;&#153;t understand the need for all the procs to be launched together, and so you have to modify Yarn so it will ensure that the MPI procs are all running or else you&#226;&#128;&#153;ll hang in MPI_Init.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which appears to imply extra setup required.  Is this documented anywhere for OpenMPI?
</span><br>
<p>I&#226;&#128;&#153;m afraid you&#226;&#128;&#153;ll just have to stick with the Pivotal-provided version as the integration is rather complicated. Don&#226;&#128;&#153;t expect much in the way of performance! This was purely intended as a way for &#226;&#128;&#156;casual&#226;&#128;&#157; MPI users to make use of &#226;&#128;&#156;free&#226;&#128;&#157; time on their Hadoop cluster, not for any serious technical programming.
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25593.php">http://www.open-mpi.org/community/lists/users/2014/10/25593.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25612.php">Nathan Hjelm: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25593.php">Brock Palen: "[OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Reply:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
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
