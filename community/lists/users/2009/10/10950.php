<?
$subject_val = "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 19:18:45 2009" -->
<!-- isoreceived="20091022231845" -->
<!-- sent="Fri, 23 Oct 2009 01:18:38 +0200" -->
<!-- isosent="20091022231838" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque integration when tm ras/plm isn't compiled in." -->
<!-- id="200910230118.38810.roy.dragseth_at_uit.no" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B33CDC8C-B1BD-4F3D-8987-A713D618BC31_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque integration when tm ras/plm isn't compiled in.<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 19:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 23 October 2009 00:50:00 Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Why not just
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_orte_default_hostfile $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; assuming you are using 1.3.x, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, then you can use the equivalent for 1.2 - ompi_info would tell
</span><br>
<span class="quotelev1">&gt; you the name of it.
</span><br>
<p>THANKS!
<br>
<p>Just what I was looking for.  Been looking up and down for it, but couldn't 
<br>
find the right swear words.
<br>
<p>Is it also possible to disable the backgrounding of the orted daemons?  When 
<br>
they fork into background one looses the feedback about cpu usage in the job.  
<br>
Not really a big issue though...
<br>
<p>Regards,
<br>
r.
<br>
<p><p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
              phone:+47 77 64 41 07, fax:+47 77 64 41 00
     Roy Dragseth, Team Leader, High Performance Computing
         Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10949.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Reply:</strong> <a href="10951.php">Ralph Castain: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
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
