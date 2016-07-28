<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 12:55:12 2010" -->
<!-- isoreceived="20100302175512" -->
<!-- sent="Tue, 2 Mar 2010 10:55:07 -0700" -->
<!-- isosent="20100302175507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="71d2d8cc1003020955v47f488e8ve8430633b668edbd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D0AF2F4409_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 12:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you say &quot;it fails&quot;, what do you mean? That it doesn't run at all, or
<br>
that it still fills each node, or...?
<br>
<p><p>On Tue, Mar 2, 2010 at 9:49 AM, Addepalli, Srirangam V &lt;
<br>
srirangam.v.addepalli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All.
</span><br>
<span class="quotelev1">&gt; I am trying to run a parallel application that should use one core less
</span><br>
<span class="quotelev1">&gt; than the no of cores that are available on the system. Are there any flags
</span><br>
<span class="quotelev1">&gt; that i can use to specify this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i tried using the following syntax with machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.4-BM/bin/mpirun -np 14 -npernode 7 -machinefile machinefile
</span><br>
<span class="quotelev1">&gt; ven_nw.e &lt;coll.dt5.  This fails. Is there any other way around this. When i
</span><br>
<span class="quotelev1">&gt; get two nodes (with 16 cores) allocated from SGE
</span><br>
<span class="quotelev1">&gt; and we want to use only 14 cores out of the 16 allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My machine file has
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-8.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt; compute-9-6.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
