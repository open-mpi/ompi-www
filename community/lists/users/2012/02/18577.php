<?
$subject_val = "Re: [OMPI users] mpirun fails with no allocated resources";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 09:30:54 2012" -->
<!-- isoreceived="20120228143054" -->
<!-- sent="Tue, 28 Feb 2012 07:30:47 -0700" -->
<!-- isosent="20120228143047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails with no allocated resources" -->
<!-- id="CD1954D3-51DB-46C3-9CAF-D2C59BAFA489_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23707914.115365.1330439075004.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails with no allocated resources<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 09:30:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18578.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18576.php">Muhammad Wahaj Sethi: "[OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>In reply to:</strong> <a href="18576.php">Muhammad Wahaj Sethi: "[OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2012, at 7:24 AM, Muhammad Wahaj Sethi wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;     I am trying run following command using trunk version 1.7a1r25984.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -H localhost,localhost /bin/hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It fails with following error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev1">&gt;  /bin/hostname
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every thing works fine if I use trunk version 1.5.5rc3r26063.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas, how it can be fixed?
</span><br>
<p>Sure - update your trunk version. It's been fixed for awhile.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Wahaj
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
<li><strong>Next message:</strong> <a href="18578.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18576.php">Muhammad Wahaj Sethi: "[OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>In reply to:</strong> <a href="18576.php">Muhammad Wahaj Sethi: "[OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
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
