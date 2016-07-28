<?
$subject_val = "Re: [OMPI devel] 1.8.5....going once...going twice...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 20:11:58 2015" -->
<!-- isoreceived="20150426001158" -->
<!-- sent="Sat, 25 Apr 2015 17:11:54 -0700" -->
<!-- isosent="20150426001154" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5....going once...going twice..." -->
<!-- id="26A0F9F1-74D9-48EA-99A3-FB92637BF11C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="553BA83B.6040502_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5....going once...going twice...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-25 20:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>In reply to:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marco - in master, scheduled for 1.8.5
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2015, at 7:44 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/24/2015 6:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Any last minute issues people need to report? Otherwise, this baby is going to ship
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul: I will include your README suggestions as they relate to 1.8.5. Thanks, as always!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; attached patch to avoid the link chains
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif77$(EXEEXT) -&gt; mpifort$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
</span><br>
<span class="quotelev1">&gt; mpif90$(EXEEXT) -&gt; mpifort$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and replace with just
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif77$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
</span><br>
<span class="quotelev1">&gt; mpif90$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is not a bug, but produces side effects with cygwin
</span><br>
<span class="quotelev1">&gt; build and package system when it drops the $(EXEEXT) from
</span><br>
<span class="quotelev1">&gt; the links and leaves with broken chains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be innocuous on every other system
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;avoid-double-link.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17366.php">http://www.open-mpi.org/community/lists/devel/2015/04/17366.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>In reply to:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
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
