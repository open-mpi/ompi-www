<?
$subject_val = "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 21:28:24 2016" -->
<!-- isoreceived="20160714012824" -->
<!-- sent="Wed, 13 Jul 2016 21:28:03 -0400" -->
<!-- isosent="20160714012803" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory" -->
<!-- id="CAEufm7JFz--HAxhEeDuWF-htUWvMjEPXo_t+QrdcODCvdHso8A_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a90366aa-a41f-8f67-30d6-12454015afa6_at_nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 21:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt, you're far too kind :) I put together a test program that uses the
<br>
block of code in question and... it works for me? I've attached the
<br>
reproducer here. A compile should be just a &quot;gcc -libverbs ib_verbs_q.c&quot;.
<br>
I'm a little perplexed. I truthfully didn't expect it to work given that
<br>
the same block called from inside of openmpi on the same node(s) where Matt
<br>
had it fail earlier.
<br>
<p>-Aaron
<br>
<p>On Wed, Jul 13, 2016 at 9:17 PM, Aaron Knister &lt;aaron.s.knister_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 13, 2016 at 9:50 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As of 2.0.0 we now support experimental verbs. It looks like one of the
</span><br>
<span class="quotelev2">&gt;&gt; calls is failing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if HAVE_DECL_IBV_EXP_QUERY_DEVICE
</span><br>
<span class="quotelev2">&gt;&gt;     device-&gt;ib_exp_dev_attr.comp_mask = IBV_EXP_DEVICE_ATTR_RESERVED - 1;
</span><br>
<span class="quotelev2">&gt;&gt;     if(ibv_exp_query_device(device-&gt;ib_dev_context,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;device-&gt;ib_exp_dev_attr)){
</span><br>
<span class="quotelev2">&gt;&gt;         BTL_ERROR((&quot;error obtaining device attributes for %s errno says
</span><br>
<span class="quotelev2">&gt;&gt; %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                     ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; strerror(errno)));
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know what OFED or MOFED version you are running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per one of our gurus, answers from your IB page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Which OpenFabrics version are you running? Please specify where you got
</span><br>
<span class="quotelev1">&gt; the software from (e.g., from the OpenFabrics community web site, from a
</span><br>
<span class="quotelev1">&gt; vendor, or it was already included in your Linux distribution).
</span><br>
<span class="quotelev1">&gt;    Mellanox OFED 3.1-1.0.3 (soon to be 3.3-1.0.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. What distro and version of Linux are you running? What is your kernel
</span><br>
<span class="quotelev1">&gt; version?
</span><br>
<span class="quotelev1">&gt;    SLES11 SP3 (LTSS); 3.0.101-0.47.71-default (soon to be
</span><br>
<span class="quotelev1">&gt; 3.0.101-0.47.79-default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Which subnet manager are you running? (e.g., OpenSM, a vendor-specific
</span><br>
<span class="quotelev1">&gt; subnet manager, etc.)
</span><br>
<span class="quotelev1">&gt;    Mellanox UFM (OpenSM under the covers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29659/ib_verbs_q.c">ib_verbs_q.c</a>
</ul>
<!-- attachment="ib_verbs_q.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29660.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
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
