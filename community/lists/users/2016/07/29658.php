<?
$subject_val = "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 10:06:42 2016" -->
<!-- isoreceived="20160713140642" -->
<!-- sent="Wed, 13 Jul 2016 10:06:02 -0400" -->
<!-- isosent="20160713140602" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory" -->
<!-- id="CAFb48S-m1ZLYj0YmJLZOwyQwMBSyh4Xtf=gehY4OGoEAS6u-NQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4499A2ED-17FE-46E7-8016-CA96CF8917C7_at_me.com" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 10:06:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 13, 2016 at 9:50 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As of 2.0.0 we now support experimental verbs. It looks like one of the
</span><br>
<span class="quotelev1">&gt; calls is failing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if HAVE_DECL_IBV_EXP_QUERY_DEVICE
</span><br>
<span class="quotelev1">&gt;     device-&gt;ib_exp_dev_attr.comp_mask = IBV_EXP_DEVICE_ATTR_RESERVED - 1;
</span><br>
<span class="quotelev1">&gt;     if(ibv_exp_query_device(device-&gt;ib_dev_context,
</span><br>
<span class="quotelev1">&gt; &amp;device-&gt;ib_exp_dev_attr)){
</span><br>
<span class="quotelev1">&gt;         BTL_ERROR((&quot;error obtaining device attributes for %s errno says
</span><br>
<span class="quotelev1">&gt; %s&quot;,
</span><br>
<span class="quotelev1">&gt;                     ibv_get_device_name(device-&gt;ib_dev), strerror(errno)));
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what OFED or MOFED version you are running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Per one of our gurus, answers from your IB page:
<br>
<p>1. Which OpenFabrics version are you running? Please specify where you got
<br>
the software from (e.g., from the OpenFabrics community web site, from a
<br>
vendor, or it was already included in your Linux distribution).
<br>
&nbsp;&nbsp;&nbsp;Mellanox OFED 3.1-1.0.3 (soon to be 3.3-1.0.0)
<br>
<p>2. What distro and version of Linux are you running? What is your kernel
<br>
version?
<br>
&nbsp;&nbsp;&nbsp;SLES11 SP3 (LTSS); 3.0.101-0.47.71-default (soon to be
<br>
3.0.101-0.47.79-default)
<br>
<p>3. Which subnet manager are you running? (e.g., OpenSM, a vendor-specific
<br>
subnet manager, etc.)
<br>
&nbsp;&nbsp;&nbsp;Mellanox UFM (OpenSM under the covers)
<br>
<p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
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
