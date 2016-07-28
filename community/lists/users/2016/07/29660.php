<?
$subject_val = "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 21:31:48 2016" -->
<!-- isoreceived="20160714013148" -->
<!-- sent="Wed, 13 Jul 2016 21:31:27 -0400" -->
<!-- isosent="20160714013127" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory" -->
<!-- id="CAEufm7+Ok6XiBh7NCMfKcwBKnXsT6VhYxdnUdDghSaDnCmqQnw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEufm7JFz--HAxhEeDuWF-htUWvMjEPXo_t+QrdcODCvdHso8A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-13 21:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29661.php">larkym: "[OMPI users] Ssh launch code"</a>
<li><strong>Previous message:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well son of a gun. I just compiled the code with pgcc (version 16.5.0)
<br>
instead of gcc and lo and behold:
<br>
<p># pgcc -libverbs ./ib_verbs_q.c -o ib_verbs_q
<br>
# ./ib_verbs_q
<br>
error obtaining device attributes for mlx5_0 errno says Cannot allocate
<br>
memory
<br>
<p># gcc -libverbs ./ib_verbs_q.c -o ib_verbs_q
<br>
# ./ib_verbs_q
<br>
hca_id: mlx5_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw ver: 10.12.1100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node guid: f452:1403:006c:99e0
<br>
<p>I'm pretty stumped, but I'm gonna do some more digging. Suffice it to say
<br>
I'm pretty sure this isn't an OpenMPI problem.
<br>
<p>-Aaron
<br>
<p>On Wed, Jul 13, 2016 at 9:28 PM, Aaron Knister &lt;aaron.knister_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Matt, you're far too kind :) I put together a test program that uses the
</span><br>
<span class="quotelev1">&gt; block of code in question and... it works for me? I've attached the
</span><br>
<span class="quotelev1">&gt; reproducer here. A compile should be just a &quot;gcc -libverbs ib_verbs_q.c&quot;.
</span><br>
<span class="quotelev1">&gt; I'm a little perplexed. I truthfully didn't expect it to work given that
</span><br>
<span class="quotelev1">&gt; the same block called from inside of openmpi on the same node(s) where Matt
</span><br>
<span class="quotelev1">&gt; had it fail earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Aaron
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 13, 2016 at 9:17 PM, Aaron Knister &lt;aaron.s.knister_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 13, 2016 at 9:50 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As of 2.0.0 we now support experimental verbs. It looks like one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls is failing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if HAVE_DECL_IBV_EXP_QUERY_DEVICE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     device-&gt;ib_exp_dev_attr.comp_mask = IBV_EXP_DEVICE_ATTR_RESERVED - 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if(ibv_exp_query_device(device-&gt;ib_dev_context,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;device-&gt;ib_exp_dev_attr)){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BTL_ERROR((&quot;error obtaining device attributes for %s errno says
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strerror(errno)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know what OFED or MOFED version you are running?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per one of our gurus, answers from your IB page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Which OpenFabrics version are you running? Please specify where you
</span><br>
<span class="quotelev2">&gt;&gt; got the software from (e.g., from the OpenFabrics community web site, from
</span><br>
<span class="quotelev2">&gt;&gt; a vendor, or it was already included in your Linux distribution).
</span><br>
<span class="quotelev2">&gt;&gt;    Mellanox OFED 3.1-1.0.3 (soon to be 3.3-1.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. What distro and version of Linux are you running? What is your kernel
</span><br>
<span class="quotelev2">&gt;&gt; version?
</span><br>
<span class="quotelev2">&gt;&gt;    SLES11 SP3 (LTSS); 3.0.101-0.47.71-default (soon to be
</span><br>
<span class="quotelev2">&gt;&gt; 3.0.101-0.47.79-default)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Which subnet manager are you running? (e.g., OpenSM, a vendor-specific
</span><br>
<span class="quotelev2">&gt;&gt; subnet manager, etc.)
</span><br>
<span class="quotelev2">&gt;&gt;    Mellanox UFM (OpenSM under the covers)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29661.php">larkym: "[OMPI users] Ssh launch code"</a>
<li><strong>Previous message:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
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
