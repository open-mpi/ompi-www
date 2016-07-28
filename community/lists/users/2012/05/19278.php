<?
$subject_val = "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 12:15:59 2012" -->
<!-- isoreceived="20120515161559" -->
<!-- sent="Tue, 15 May 2012 12:15:54 -0400" -->
<!-- isosent="20120515161554" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory" -->
<!-- id="41FDE154-97B7-43D8-8077-4ACF35D90150_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACd6u-rv5Qo4tB57YqrXeNB0sU+qnGzbW+ZquQ-8s4fAPN686A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 12:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19277.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19268.php">G&#246;tz Waschk: "[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely correct -- doh!
<br>
<p>I've fixed it on the trunk and submitted the fix for the v1.6 branch.
<br>
<p>Thanks!
<br>
<p><p>On May 14, 2012, at 9:14 AM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built my own package of openmpi 1.6 based on the RHEL6 package
</span><br>
<span class="quotelev1">&gt; on my SL6 test machine. My tests fail like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;    /usr/lib64/openmpi-intel/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is because I have configured openmpi with ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/lib64/openmpi-intel/
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/etc/openmpi-x86_64-intel/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default hostfile was placed by 'make install' to
</span><br>
<span class="quotelev1">&gt; /etc/openmpi-x86_64-intel/openmpi-default-hostfile, but
</span><br>
<span class="quotelev1">&gt; orte/runtime/orte_mca_params.c wants a file in etc under the
</span><br>
<span class="quotelev1">&gt; configured prefix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz Waschk
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19277.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19268.php">G&#246;tz Waschk: "[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
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
