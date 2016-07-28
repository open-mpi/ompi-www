<?
$subject_val = "Re: [OMPI devel] Nearly unlimited growth of pml free list";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 11:12:20 2013" -->
<!-- isoreceived="20130911151220" -->
<!-- sent="Wed, 11 Sep 2013 08:12:17 -0700" -->
<!-- isosent="20130911151217" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nearly unlimited growth of pml free list" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360068DEB2F_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52307CA7.4030300_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Nearly unlimited growth of pml free list<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 11:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12885.php">Iliev, Hristo: "[OMPI devel] Possible bug: rdma OSC does not progress RMA operations"</a>
<li><strong>Previous message:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Max:
<br>
You say that that the function keeps &quot;allocating memory in the pml free list.&quot;  How do you know that is happening? 
<br>
Do you know which free list it is happening on?  There are something like 8 free lists associated with the pml ob1 so it would be interesting to know which one you observe is growing.
<br>
<p>Rolf 
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Max Staufer
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, September 11, 2013 10:23 AM
</span><br>
<span class="quotelev1">&gt;To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     as I already asked in the users list, I was told thats not the right place to ask,
</span><br>
<span class="quotelev1">&gt;I came across a &quot;missbehaviour&quot; of openmpi version 1.4.5 and 1.6.5 alike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the mca_pml_ob1_send function keeps allocating memory in the pml free list.
</span><br>
<span class="quotelev1">&gt;It does that indefinitly. In my case the list grew to about 100Gb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can controll the maximum using the pml_ob1_free_list_max parameter, but
</span><br>
<span class="quotelev1">&gt;then the application just stops working when this number of entries in the list
</span><br>
<span class="quotelev1">&gt;is reached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The interesting part is that the growth only happens in a single place in the
</span><br>
<span class="quotelev1">&gt;code, which is RECURSIVE SUBROUTINE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;And the called function is an MPI_ALLREDUCE(... MPI_SUM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Apparently its not easy to create a test program that shows the same
</span><br>
<span class="quotelev1">&gt;behaviour, just recursion is not enought.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a mca parameter that allows to limit the total list size without making
</span><br>
<span class="quotelev1">&gt;the app. stop ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;or is there a way to enforce the lock on the free list entries ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for all the help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Max
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12885.php">Iliev, Hristo: "[OMPI devel] Possible bug: rdma OSC does not progress RMA operations"</a>
<li><strong>Previous message:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
