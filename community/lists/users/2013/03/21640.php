<?
$subject_val = "Re: [OMPI users] OpenMPI + BLCR + LSF integration";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 11:30:01 2013" -->
<!-- isoreceived="20130330153001" -->
<!-- sent="Sat, 30 Mar 2013 08:29:53 -0700" -->
<!-- isosent="20130330152953" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + BLCR + LSF integration" -->
<!-- id="FD3F0227-9842-4882-BC21-B714B7762A4B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACATR0aLpjXuO=OQOc0gNRLcdLbeHXBHejf1CCpQQcDDAb3X-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI + BLCR + LSF integration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 11:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21639.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21642.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is quite likely that the lsf integration on the 1.6 series is broken. We don't have a way to test it any more (all our LSF access is gone). I recently was briefly given access to an LSF machine and fixed it for the 1.7 series, but that series doesn't support checkpoint/restart.
<br>
<p><p>On Mar 30, 2013, at 1:01 AM, Jorge Naranjo Bouzas &lt;jonarbo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are having problems integrating BLCR + OpenMPI + LSF in a linux cluster with Infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We compiled OpenMPI version 1.6 with gcc version 4.6.0 ... The configure line was like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/share/mpi-openmpi/1.6-gcc-4.6.0/el6/x86_64 --with-lsf --with-openib --with-blcr=/opt/share/blcrv0.8.4.app/ --with-ft=cr --enable-ft-thread --enable-opal-multi-threads --with-psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem I am having is that for some reason the ft-enable-cr features freezes my mpi application when I use more that one node. The job is never started ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We narrowed the search down and we noticed that when mpirun is used out of the batch system, it works... but as soon as the mpirun detects the env variable LSB_JOBID and assumes it is under LSF environment, the problem arises... Additionally, if we use &quot;--mca plm rsh&quot; which should deactivate the LSF integration , it works again, as expected...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, or guess is: or there is something misconfigured in our LSF or there is a problem in the plm module inside openmpi ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hint???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jorge Naranjo
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21639.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21642.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
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
