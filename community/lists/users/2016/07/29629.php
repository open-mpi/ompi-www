<?
$subject_val = "Re: [OMPI users] Using Open MPI as a communication library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 18:36:01 2016" -->
<!-- isoreceived="20160708223601" -->
<!-- sent="Fri, 8 Jul 2016 15:35:57 -0700" -->
<!-- isosent="20160708223557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Open MPI as a communication library" -->
<!-- id="6E5910FB-32D2-4C1E-B87B-8C555F0B8DB8_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPytMej2QCdHq76bAMOVNN8U=CRQR53z1uxSaCKRova08nMYCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using Open MPI as a communication library<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 18:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29628.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29628.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You still need a rendezvous of some kind for comm_connect to work. If you want to try using the file-based method from early MPI days, you can try it - haven&#226;&#128;&#153;t seen anyone test it in some time, and so I honestly don&#226;&#128;&#153;t know if it will work.
<br>
<p>You&#226;&#128;&#153;d still require some way of telling the application how many procs are involved and where they are located&#226;&#128;&#166;
<br>
<p><p><span class="quotelev1">&gt; On Jul 8, 2016, at 2:53 PM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess this is client server. Can we do communications collective communications with this approach?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Supun..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 8, 2016 at 5:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Why wouldn't <a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_connect.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_connect.3.php</a> &lt;<a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_connect.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Comm_connect.3.php</a>&gt; and friends work after MPI_Init is called, regardless of how the process is spawned?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 8, 2016 at 9:55 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You&#226;&#128;&#153;d need to have some rendezvous mechanism. I suppose one option would be to launch a set of PMIx servers on the nodes (and ensure they know about each other) to support these things, but that&#226;&#128;&#153;s all mpirun really does anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  What did you have in mind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2016, at 9:49 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick response. Is there a way for extending OpenMPI so that it can discover the processes using other means?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Supun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul 8, 2016 at 12:45 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If not spawned by mpirun, and not spawned by a resource manager, then it won&#226;&#128;&#153;t work. There is no way for the procs to wireup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2016, at 9:42 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, the processes are not spawned by MPI and they are not spawned by something like Slurm/PBS. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does MPI get to know what processes running in what nodes in a general sense? Do we need to write some plugin so that it can figure out this information? I guess this must be the way it is supporting Slurm/PBS etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supun.. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jul 8, 2016 at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You mean you didn&#226;&#128;&#153;t launch those procs via mpirun, yes? If you started them via some resource manager, then you might just be able to call MPI_Init and have them wireup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jul 8, 2016, at 8:55 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have a set of processes running and these are not managed/spawned by Open MPI. Is it possible to use Open MPI as a pure communication library among these processes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Supun..
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29616.php">http://www.open-mpi.org/community/lists/users/2016/07/29616.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29616.php">http://www.open-mpi.org/community/lists/users/2016/07/29616.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29617.php">http://www.open-mpi.org/community/lists/users/2016/07/29617.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29617.php">http://www.open-mpi.org/community/lists/users/2016/07/29617.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29627.php">http://www.open-mpi.org/community/lists/users/2016/07/29627.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29627.php">http://www.open-mpi.org/community/lists/users/2016/07/29627.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29628.php">http://www.open-mpi.org/community/lists/users/2016/07/29628.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29630.php">Mahmood Naderan: "[OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29628.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29628.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
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
