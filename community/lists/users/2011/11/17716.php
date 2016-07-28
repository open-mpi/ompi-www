<?
$subject_val = "Re: [OMPI users] Problem with openmpi-default-hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  6 22:12:00 2011" -->
<!-- isoreceived="20111107031200" -->
<!-- sent="Sun, 6 Nov 2011 20:11:47 -0700" -->
<!-- isosent="20111107031147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi-default-hostfile" -->
<!-- id="DC28CB02-2257-439D-BDCA-A2942F120E60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1320628614.84643.YahooMailNeo_at_web24716.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi-default-hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-06 22:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>In reply to:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Reply:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Where did you install OMPI? If you check &quot;which mpirun&quot;, does it point to the same installation where you edited the default hostfile?
<br>
<p>On Nov 6, 2011, at 6:16 PM, Lukas Razik wrote:
<br>
<p><span class="quotelev1">&gt; Hello together!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've built v1.4.3 (which was in OFED-1.5.3.2) and v1.4.4 (from you website).
</span><br>
<span class="quotelev1">&gt; But in both versions I've the following problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I write some hosts into '/usr/mpi/gcc/openmpi-1.4.4/etc/openmpi-default-hostfile':
</span><br>
<span class="quotelev1">&gt; cluster1
</span><br>
<span class="quotelev1">&gt; cluster2
</span><br>
<span class="quotelev1">&gt; cluster3
</span><br>
<span class="quotelev1">&gt; cluster4
</span><br>
<span class="quotelev1">&gt; and execute 'mpirun -np 4 &lt;app&gt;&quot; then only the local host is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I execute 'mpirun -hostfile /.../openmpi-default-hostfile -np 4 &lt;app&gt;' all works fine.
</span><br>
<span class="quotelev1">&gt; So have I done something wrong or is there another possibility to set a system-wide list of default hosts (i.e. for all users)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for any help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Lukas
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
<li><strong>Next message:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>In reply to:</strong> <a href="17715.php">Lukas Razik: "[OMPI users] Problem with openmpi-default-hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Reply:</strong> <a href="17717.php">Lukas Razik: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
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
