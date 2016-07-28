<?
$subject_val = "Re: [OMPI users] HAMSTER MPI+Yarn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 13:28:32 2014" -->
<!-- isoreceived="20141027172832" -->
<!-- sent="Mon, 27 Oct 2014 13:28:27 -0400" -->
<!-- isosent="20141027172827" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HAMSTER MPI+Yarn" -->
<!-- id="268BDC3A-7CC8-41C6-A597-B51A038A0F69_at_umich.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F99603D3-73E4-4597-854C-71FEAA199BE1_at_open-mpi.org" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 13:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25615.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25613.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Reply:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks this is good feedback.
<br>
<p>I was worried with the dynamic nature of Yarn containers that it would be hard to coordinate wire up, and you have confirmed that.
<br>
<p>Thanks
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 27, 2014, at 11:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 26, 2014, at 9:56 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are starting to look at supporting MPI on our Hadoop/Spark YARN based cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You poor soul&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I found a bunch of referneces to Hamster, but what I don't find is if it was ever merged into regular OpenMPI, and if so is it just another RM integration?  Or does it need more setup?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I left Pivotal, it was based on a copy of the OMPI trunk that sat somewhere in the 1.7 series, I believe. Last contact I had indicated they were trying to update, but I&#226;&#128;&#153;m not sure they were successful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found this:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html">http://pivotalhd.docs.pivotal.io/doc/2100/Hamster.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Didn&#226;&#128;&#153;t know they had actually (finally) released it, so good to know. Just so you are aware, there are major problems running MPI under Yarn as it just isn&#226;&#128;&#153;t designed for MPI support. What we did back then was add a JNI layer so that ORTE could run underneath it, and then added a PMI-like service to provide the wireup support (since Yarn couldn&#226;&#128;&#153;t be used to exchange the info itself). You also have the issue that Yarn doesn&#226;&#128;&#153;t understand the need for all the procs to be launched together, and so you have to modify Yarn so it will ensure that the MPI procs are all running or else you&#226;&#128;&#153;ll hang in MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which appears to imply extra setup required.  Is this documented anywhere for OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid you&#226;&#128;&#153;ll just have to stick with the Pivotal-provided version as the integration is rather complicated. Don&#226;&#128;&#153;t expect much in the way of performance! This was purely intended as a way for &#226;&#128;&#156;casual&#226;&#128;&#157; MPI users to make use of &#226;&#128;&#156;free&#226;&#128;&#157; time on their Hadoop cluster, not for any serious technical programming.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25593.php">http://www.open-mpi.org/community/lists/users/2014/10/25593.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25613.php">http://www.open-mpi.org/community/lists/users/2014/10/25613.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25615.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25613.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Reply:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
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
