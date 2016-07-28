<?
$subject_val = "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 21:51:50 2015" -->
<!-- isoreceived="20150108025150" -->
<!-- sent="Wed, 7 Jan 2015 18:51:46 -0800" -->
<!-- isosent="20150108025146" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4" -->
<!-- id="1EDE53AB-61D1-45CC-A2DA-191C0FD36A5C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54ADEFC0.6050708_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 21:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26119.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26119.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does the standard say anything about the default behavior? IIRC, we set it this way because (a) we had no direction, and (b) it seemed just as reasonable as the alternative (I believe we flipped a coin)
<br>
<p><p><span class="quotelev1">&gt; On Jan 7, 2015, at 6:47 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, per the source code, this is not a bug but a feature :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from publish function from ompi/mca/pubsub/orte/pubsub_orte.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ompi_info_get_bool(info, &quot;ompi_unique&quot;, &amp;unique, &amp;flag);
</span><br>
<span class="quotelev1">&gt;    if (0 == flag) {
</span><br>
<span class="quotelev1">&gt;        /* uniqueness not specified - overwrite by default */
</span><br>
<span class="quotelev1">&gt;        unique = false;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fwiw, and at first glance, i would have expected the default behaviour
</span><br>
<span class="quotelev1">&gt; is to *not* overwrite (e.g. unique = true;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; anyway, in order to get the expected result, the user program can be
</span><br>
<span class="quotelev1">&gt; modified like this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Info info;
</span><br>
<span class="quotelev1">&gt; MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;ompi_unique&quot;, &quot;true&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then invoke MPI_Publish_name() with info instead of MPI_INFO_NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an updated version of the program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/01/08 10:12, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;I confess this API gets little, if any, testing as it is so seldom used, so it is quite possible that a buglet has crept into it. I&#146;ll take a look and try to have something in 1.8.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 7, 2015, at 3:14 AM, Bernard Secher &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the version openmpi-1.4.5 I got an error  when I tried to publish the same name twice with the MPI_Publish_name routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the version openmpi-1.8.4 I got no error when I published the same name twice with the MPI_Publish_name routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used the attached script and source code to perform the test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this test, it works well with openmpi-1.4.5, but I get a deadlock with openmpi-1.8.4. I can suppress the deadlock with openmpi-1.8.4 if I modify the shell script and add a &quot;sleep 1&quot; command between the 2 mpirun commands.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;testMPI2.cxx&gt;&lt;launch_testMPI2.csh&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26114.php">http://www.open-mpi.org/community/lists/users/2015/01/26114.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26117.php">http://www.open-mpi.org/community/lists/users/2015/01/26117.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;testMPI2.cxx&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26119.php">http://www.open-mpi.org/community/lists/users/2015/01/26119.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26119.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26119.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26121.php">Gilles Gouaillardet: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
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
