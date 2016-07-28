<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 11:25:11 2007" -->
<!-- isoreceived="20070611152511" -->
<!-- sent="Mon, 11 Jun 2007 17:25:06 +0200" -->
<!-- isosent="20070611152506" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="466D6952.6050200_at_cs.vu.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.20.1181404806.6566.users_at_open-mpi.org" -->
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
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 11:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3453.php">Brock Palen: "[OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; A fix for this problem is now available on the trunk. Please use any 
</span><br>
<span class="quotelev1">&gt; revision after 14963 and your problem will vanish [I hope!]. There are 
</span><br>
<span class="quotelev1">&gt; now some additional parameters which allow you to select which Myrinet 
</span><br>
<span class="quotelev1">&gt; network you want to use in the case there are several available (--mca 
</span><br>
<span class="quotelev1">&gt; btl_mx_if_include and --mca btl_mx_if_exclude). Even multi-rails should 
</span><br>
<span class="quotelev1">&gt; now work over MX.
</span><br>
<p>I have tried nightly snapshot openmpi-1.3a1r14981 and it (almost)
<br>
seems to work.  The version as is, when run in combination with
<br>
MX-1.2.0j and the FMA mapper, currently results in the following
<br>
error on each node:
<br>
<p>mx_get_info(MX_LINE_SPEED) failed with status 35 (Bad info length)
<br>
<p>However, with the small patch below, multi-cluster jobs indeed seem
<br>
to be running fine (using MX locally). I'll do some more testing
<br>
later this week.
<br>
<p>Thanks a lot for the fix!
<br>
Kees
<br>
<p><p>*** ./ompi/mca/btl/mx/btl_mx_component.c.orig   2007-06-11 17:12:11.000000000 +0200
<br>
--- ./ompi/mca/btl/mx/btl_mx_component.c        2007-06-11 17:13:34.000000000 +0200
<br>
***************
<br>
*** 310,316 ****
<br>
&nbsp;&nbsp;&nbsp;#if defined(MX_HAS_NET_TYPE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int value;
<br>
!         if( (status = mx_get_info( mx_btl-&gt;mx_endpoint, MX_LINE_SPEED, NULL, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;value, sizeof(int))) != MX_SUCCESS ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output( 0, &quot;mx_get_info(MX_LINE_SPEED) failed with status %d 
<br>
(%s)\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, mx_strerror(status) );
<br>
--- 310,317 ----
<br>
&nbsp;&nbsp;&nbsp;#if defined(MX_HAS_NET_TYPE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int value;
<br>
!         if( (status = mx_get_info( mx_btl-&gt;mx_endpoint, MX_LINE_SPEED,
<br>
!                                    &amp;nic_id, sizeof(nic_id),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;value, sizeof(int))) != MX_SUCCESS ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output( 0, &quot;mx_get_info(MX_LINE_SPEED) failed with status %d 
<br>
(%s)\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, mx_strerror(status) );
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3453.php">Brock Palen: "[OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
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
