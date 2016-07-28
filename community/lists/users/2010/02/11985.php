<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 03:49:07 2010" -->
<!-- isoreceived="20100203084907" -->
<!-- sent="Wed, 03 Feb 2010 09:49:05 +0100" -->
<!-- isosent="20100203084905" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows" -->
<!-- id="4B693881.5070505_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B68F537.5080703_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 03:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11986.php">Iain Bason: "Re: [OMPI users] OpenMPI Suspend/Resume"</a>
<li><strong>Previous message:</strong> <a href="11984.php">Damien Hocking: "[OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>In reply to:</strong> <a href="11984.php">Damien Hocking: "[OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Reply:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>r22405 was the fix for the trunk, it hasn't been patched into 1.4 branch 
<br>
yet, see the open ticket for v1.4 branch: 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2169">https://svn.open-mpi.org/trac/ompi/ticket/2169</a>, it's RM approved, so it 
<br>
will be moved very soon. And please note that the patch will be in 
<br>
1.4.2, but not in 1.4.1 release, which means you can update your CMake 
<br>
to 2.8 for the upcoming Open MPI 1.4.2 release.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice in the last couple of weeks there was a patch with 
</span><br>
<span class="quotelev1">&gt; ALL_DEPENDENCIES to fix CMake 2.8 builds with on Windows.  With CMake 
</span><br>
<span class="quotelev1">&gt; 2.8 I'm getting exactly the same build errors in r22504 as in the 
</span><br>
<span class="quotelev1">&gt; 1.4.1 release. Has that patch made it into the snapshots yet, or is 
</span><br>
<span class="quotelev1">&gt; there a regression?  I can keep going with CMake 2.6.4 if need be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11986.php">Iain Bason: "Re: [OMPI users] OpenMPI Suspend/Resume"</a>
<li><strong>Previous message:</strong> <a href="11984.php">Damien Hocking: "[OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>In reply to:</strong> <a href="11984.php">Damien Hocking: "[OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Reply:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
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
