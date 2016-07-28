<?
$subject_val = "Re: [OMPI users] hostfiles";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 18:51:52 2010" -->
<!-- isoreceived="20100204235152" -->
<!-- sent="Thu, 4 Feb 2010 16:51:44 -0700" -->
<!-- isosent="20100204235144" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hostfiles" -->
<!-- id="71d2d8cc1002041551x5b97c78fy13c9082096fed826_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B6B5A2C.5020302_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hostfiles<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 18:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Reply:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is correct and has always been the behavior. If you want OMPI to
<br>
respect host order, you have to use the sequential mapper instead of the
<br>
default round-robin mapper.
<br>
<p><p>On Thu, Feb 4, 2010 at 4:37 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'd check the man page, but since I just rewrote it I don't think that's
</span><br>
<span class="quotelev1">&gt; going to help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two nodes, A and B, and I run &quot;mpirun -hostfile myhostfile
</span><br>
<span class="quotelev1">&gt; -tag-output hostname&quot; with five different hostfiles.  Here is what I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B B B B A A A A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B B B B A A A A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A A A A B B B B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; A slots=2
</span><br>
<span class="quotelev1">&gt; B slots=2
</span><br>
<span class="quotelev1">&gt; A A A A B B B B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A slots=1
</span><br>
<span class="quotelev1">&gt; B slots=1
</span><br>
<span class="quotelev1">&gt; A slots=1
</span><br>
<span class="quotelev1">&gt; B slots=1
</span><br>
<span class="quotelev1">&gt; A slots=1
</span><br>
<span class="quotelev1">&gt; B slots=1
</span><br>
<span class="quotelev1">&gt; A slots=1
</span><br>
<span class="quotelev1">&gt; B slots=1
</span><br>
<span class="quotelev1">&gt; A A A A B B B B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with openmpi-1.7a1r22109.  After each hostfile, I list the nodes I
</span><br>
<span class="quotelev1">&gt; get in MPI rank order.  So, it appears the hostfile cannot be used to
</span><br>
<span class="quotelev1">&gt; control in what order processes are mapped to nodes.  It can only be used to
</span><br>
<span class="quotelev1">&gt; specify the total number of slots per node.  Slots are filled up one node at
</span><br>
<span class="quotelev1">&gt; a time.  I assume we don't want to make any claims about the node order?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Reply:</strong> <a href="12016.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
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
