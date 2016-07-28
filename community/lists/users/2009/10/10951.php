<?
$subject_val = "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 19:37:36 2009" -->
<!-- isoreceived="20091022233736" -->
<!-- sent="Thu, 22 Oct 2009 17:37:25 -0600" -->
<!-- isosent="20091022233725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque integration when tm ras/plm isn't compiled in." -->
<!-- id="F58629AA-6491-43A4-85D3-DF123269B056_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200910230118.38810.roy.dragseth_at_uit.no" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 19:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI_MCA_orte_leave_session_attached=1
<br>
<p>Note: this does set limits on scale, though, if the system uses an ssh  
<br>
launcher. There are system limits on the number of open ssh sessions  
<br>
you can have at any one time.
<br>
<p>For all other launchers, no limit issues exist that I know about.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Oct 22, 2009, at 5:18 PM, Roy Dragseth wrote:
<br>
<p><span class="quotelev1">&gt; On Friday 23 October 2009 00:50:00 Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Why not just
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv OMPI_MCA_orte_default_hostfile $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; assuming you are using 1.3.x, of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not, then you can use the equivalent for 1.2 - ompi_info would  
</span><br>
<span class="quotelev2">&gt;&gt; tell
</span><br>
<span class="quotelev2">&gt;&gt; you the name of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THANKS!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just what I was looking for.  Been looking up and down for it, but  
</span><br>
<span class="quotelev1">&gt; couldn't
</span><br>
<span class="quotelev1">&gt; find the right swear words.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it also possible to disable the backgrounding of the orted  
</span><br>
<span class="quotelev1">&gt; daemons?  When
</span><br>
<span class="quotelev1">&gt; they fork into background one looses the feedback about cpu usage in  
</span><br>
<span class="quotelev1">&gt; the job.
</span><br>
<span class="quotelev1">&gt; Not really a big issue though...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; r.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
</span><br>
<span class="quotelev1">&gt;              phone:+47 77 64 41 07, fax:+47 77 64 41 00
</span><br>
<span class="quotelev1">&gt;     Roy Dragseth, Team Leader, High Performance Computing
</span><br>
<span class="quotelev1">&gt;         Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>In reply to:</strong> <a href="10950.php">Roy Dragseth: "Re: [OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
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
