<?
$subject_val = "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:15:55 2012" -->
<!-- isoreceived="20121109181555" -->
<!-- sent="Fri, 9 Nov 2012 10:15:48 -0800" -->
<!-- isosent="20121109181548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated" -->
<!-- id="45CB665A-B436-40D1-9DEC-9EB28B9258CE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALQst9hmWv8c6iCuatitLSKXDmS18Mswh0eZVieD50cnDKiLPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 13:15:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Reply:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try configuring --without-threads
<br>
<p><p>On Nov 9, 2012, at 10:05 AM, Craig Tierney &lt;craig.tierney_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just built OpenMPI 1.6.3 with ifort 12.1.4.  When running ifort I am
</span><br>
<span class="quotelev1">&gt; getting the warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ifort: command line remark #10010: open '-pthread' is depreciated and
</span><br>
<span class="quotelev1">&gt; will be removed in a future release.  See '-help deprecated'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is -pthread really needed?  Is there a configure option to change this
</span><br>
<span class="quotelev1">&gt; or should have intel not changed from how other compilers work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
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
<li><strong>Next message:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Reply:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
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
