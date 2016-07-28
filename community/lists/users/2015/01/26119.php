<?
$subject_val = "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 21:47:29 2015" -->
<!-- isoreceived="20150108024729" -->
<!-- sent="Thu, 08 Jan 2015 11:47:28 +0900" -->
<!-- isosent="20150108024728" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4" -->
<!-- id="54ADEFC0.6050708_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="12E1CEC5-AD0F-4D9A-A947-2E23CCAAF28D_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 21:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26118.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26125.php">Bernard Secher: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, per the source code, this is not a bug but a feature :
<br>
<p><p>from publish function from ompi/mca/pubsub/orte/pubsub_orte.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_info_get_bool(info, &quot;ompi_unique&quot;, &amp;unique, &amp;flag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (0 == flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* uniqueness not specified - overwrite by default */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unique = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>fwiw, and at first glance, i would have expected the default behaviour
<br>
is to *not* overwrite (e.g. unique = true;).
<br>
<p>anyway, in order to get the expected result, the user program can be
<br>
modified like this :
<br>
<p>MPI_Info info;
<br>
MPI_Info_create(&amp;info);
<br>
MPI_Info_set(info, &quot;ompi_unique&quot;, &quot;true&quot;);
<br>
<p>and then invoke MPI_Publish_name() with info instead of MPI_INFO_NULL
<br>
<p>an updated version of the program
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/08 10:12, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;I confess this API gets little, if any, testing as it is so seldom used, so it is quite possible that a buglet has crept into it. I&#226;&#128;&#153;ll take a look and try to have something in 1.8.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 7, 2015, at 3:14 AM, Bernard Secher &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the version openmpi-1.4.5 I got an error  when I tried to publish the same name twice with the MPI_Publish_name routine
</span><br>
<span class="quotelev2">&gt;&gt; With the version openmpi-1.8.4 I got no error when I published the same name twice with the MPI_Publish_name routine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used the attached script and source code to perform the test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this test, it works well with openmpi-1.4.5, but I get a deadlock with openmpi-1.8.4. I can suppress the deadlock with openmpi-1.8.4 if I modify the shell script and add a &quot;sleep 1&quot; command between the 2 mpirun commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt; &lt;testMPI2.cxx&gt;&lt;launch_testMPI2.csh&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26114.php">http://www.open-mpi.org/community/lists/users/2015/01/26114.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26117.php">http://www.open-mpi.org/community/lists/users/2015/01/26117.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26119/testMPI2.cxx">testMPI2.cxx</a>
</ul>
<!-- attachment="testMPI2.cxx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26118.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26120.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26125.php">Bernard Secher: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
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
