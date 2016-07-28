<?
$subject_val = "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 12:17:00 2015" -->
<!-- isoreceived="20150422161700" -->
<!-- sent="Wed, 22 Apr 2015 10:16:59 -0600" -->
<!-- isosent="20150422161659" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low" -->
<!-- id="CAF1Cqj6M=O_MqiykzkYvcUqGvPRF=v1wtQQZZdztFpXf_x0N9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5537B67D.1070701_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 12:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Raphael,
<br>
<p>Thanks very much for the patches.
<br>
<p>Would one of the developers on the list have a system where they
<br>
can make these kernel limit changes and which have HCAs installed?
<br>
<p>I don't have access to any system where I have such permissions.
<br>
<p>Howard
<br>
<p><p>2015-04-22 8:55 GMT-06:00 Rapha&#195;&#171;l Fouassier &lt;raphael.fouassier_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; We are experiencing a bug in OpenMPI in 1.8.4 which happens also on
</span><br>
<span class="quotelev1">&gt; master: if locked memory limits are too low, a segfault happens
</span><br>
<span class="quotelev1">&gt; in openib/udcm because some memory is not correctly deallocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To reproduce it, modify /etc/security/limits.conf with:
</span><br>
<span class="quotelev1">&gt; * soft memlock 64
</span><br>
<span class="quotelev1">&gt; * hard memlock 64
</span><br>
<span class="quotelev1">&gt; and launch with mpirun (not in a slurm allocation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I propose 2 patches for 1.8.4 and master (because of the btl move to
</span><br>
<span class="quotelev1">&gt; opal) which:
</span><br>
<span class="quotelev1">&gt; - free all allocated ressources
</span><br>
<span class="quotelev1">&gt; - print the limits error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17305.php">http://www.open-mpi.org/community/lists/devel/2015/04/17305.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
