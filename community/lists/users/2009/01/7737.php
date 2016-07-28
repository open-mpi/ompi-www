<?
$subject_val = "Re: [OMPI users] Open-MPI 1.3 and environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 09:27:08 2009" -->
<!-- isoreceived="20090120142708" -->
<!-- sent="Tue, 20 Jan 2009 07:26:59 -0700" -->
<!-- isosent="20090120142659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.3 and environment variables" -->
<!-- id="B9AB7E8D-7FA3-459C-A43F-12AA3FA9A471_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0901200343x2885c638vcda0dcfacdc6de3e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI 1.3 and environment variables<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 09:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
<li><strong>In reply to:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Reply:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was never an envar for public use, but rather one that was used  
<br>
internal to OMPI and therefore subject to change (which it did). There  
<br>
are a number of such variables in the system - we try to indicate this  
<br>
by not exposing them via ompi_info. Of course, you can independently  
<br>
discover them with a printenv, but we would not recommend relying on  
<br>
them.
<br>
<p>The list of reliable envars is provided here:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
<br>
<p>Note that this begins with 1.3 and does not apply to any prior releases.
<br>
<p>Ralph
<br>
<p><p>On Jan 20, 2009, at 4:43 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Under 1.2.8 i could check
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev1">&gt; to find out the process rank.
</span><br>
<span class="quotelev1">&gt; Under 1.3 that variable does not seem to exist anymore.
</span><br>
<span class="quotelev1">&gt; Is there an equivalent to hat variable in 1.3?
</span><br>
<span class="quotelev1">&gt; Have any other environment variables changed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
<li><strong>In reply to:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Reply:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
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
