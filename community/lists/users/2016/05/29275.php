<?
$subject_val = "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 22 13:25:04 2016" -->
<!-- isoreceived="20160522172504" -->
<!-- sent="Sun, 22 May 2016 10:24:59 -0700" -->
<!-- isosent="20160522172459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?" -->
<!-- id="421C1EA8-12C1-4C26-9699-1047C76E6BE0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjXq7K9fr2KExZZ7fLTn6OW3F6bmwhkwoxo57cCD+iqnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-22 13:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29276.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because they are in the pmix framework - you need to set &quot;pmix_base_verbose 5&quot;
<br>
<p><p><span class="quotelev1">&gt; On May 22, 2016, at 9:46 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Gilles and Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for the answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason I asked this question is that I wanted to see the debug output from OPAL_MODEX_RECV()/OPAL_MODEX_SEND(). As I reported in an earlier mail, in my case, the modex data from OPAL_MODEX_RECV() is getting corrupted and I wanted to see how the other BTLs are doing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, setting the &lt;framework&gt;_base_verbose to 100 does not seem to include any debug message coming from modex exchange, either for tcp or for openib: please see the output below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [durga_at_bigMPI ~]$ mpirun --verbose -np 2 -hostfile ~/hostfile -mca btl_base_verbose 100 -mca pml_base_verbose 100 -mca bml_base_verbose 100 -mca btl self,tcp -mca btl_tcp_if_include enp35s0 -mca opal_base_verbose 100 ./hello_c 2&gt;&amp;1 | grep -i modex
</span><br>
<span class="quotelev1">&gt; [bigMPI:12791] check:select: modex data not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [durga_at_bigMPI ~]$ mpirun --verbose -np 2 -hostfile ~/hostfile -mca btl_base_verbose 100 -mca pml_base_verbose 100 -mca bml_base_verbose 100 -mca btl self,openib -mca btl_openib_if_include qib0 -mca opal_base_verbose 100 ./hello_c 2&gt;&amp;1 | grep -i modex
</span><br>
<span class="quotelev1">&gt; [bigMPI][[27674,1],1][connect/btl_openib_connect_udcm.c:743:udcm_module_init] my modex = LID: 2, Port: 1, QPN: 19
</span><br>
<span class="quotelev1">&gt; [smallMPI][[27674,1],0][connect/btl_openib_connect_udcm.c:743:udcm_module_init] my modex = LID: 1, Port: 1, QPN: 19
</span><br>
<span class="quotelev1">&gt; [bigMPI:13479] check:select: modex data not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note that the two lines coming from udcm_module_init are not part of OPAL_MODEX_SEND() or OPAL_MODEX_RECV()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why am I not able to see the debug output from the above two macros?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, May 22, 2016 at 10:55 AM, Nathan Hjelm &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You use the *_base_verbose MCA variables. For example, if you want to see output from the btl use -mca btl_base_verbose x. The number x controls the verbosity level. Starting with 2.x are named levels but now many components conform to the names yet. In general components use use numbers between 0 and 100 (inclusive) with 100 being very verbose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 22, 2016, at 12:36 AM, dpchoudh . &lt;dpchoudh_at_[hidden] &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have built and installed OMPI with --enable-debug set. What runtime parameter do I need to see the output from OPAL_DEBUG_OUTPUT?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29271.php">http://www.open-mpi.org/community/lists/users/2016/05/29271.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29271.php">http://www.open-mpi.org/community/lists/users/2016/05/29271.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29273.php">http://www.open-mpi.org/community/lists/users/2016/05/29273.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29273.php">http://www.open-mpi.org/community/lists/users/2016/05/29273.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29274.php">http://www.open-mpi.org/community/lists/users/2016/05/29274.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29276.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29274.php">dpchoudh .: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
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
