<?
$subject_val = "Re: [OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 13:08:05 2009" -->
<!-- isoreceived="20090803170805" -->
<!-- sent="Mon, 3 Aug 2009 13:08:00 -0400" -->
<!-- isosent="20090803170800" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="c19fcadc0908031008g7c8e55e2k25ac4d0630d6196e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908030647i3d78c003hbf64bd4190045343_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two remote machines - asymmetric behavior<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 13:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 3, 2009 at 9:47 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You are both correct. If you simply type &quot;mpirun pvserver&quot;, then we will
</span><br>
<span class="quotelev1">&gt; execute pvserver on whatever machine is local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you type &quot;mpirun -n 1 -H host1 pvserver&quot;, then we will start
</span><br>
<span class="quotelev1">&gt; pvserver on the specified host. Note that mpirun will still be executing on
</span><br>
<span class="quotelev1">&gt; your local machine - but pvserver will be running on the specified host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph,
<br>
<p>Does anything change based on where mpirun is executing?
<br>
<p>Can you shed any light on the initial question of asymmetric behavior?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
