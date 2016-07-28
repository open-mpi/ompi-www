<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  2 10:21:05 2013" -->
<!-- isoreceived="20130802142105" -->
<!-- sent="Fri, 2 Aug 2013 07:15:20 -0700" -->
<!-- isosent="20130802141520" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="CAE6A368-9445-4FAB-8723-F5BB024662F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4b0d716f.e854.14039306fd0.Coremail.qsmeng_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-02 10:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22425.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>Previous message:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>In reply to:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a local sys admin, or someone else nearby who is more familiar with Unix/Linux? It would be far more efficient for someone to just show you than to try doing this remotely
<br>
<p><p>On Aug 1, 2013, at 2:23 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; dear Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt;I was assuming that you are using bash, for csh it would be different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Yes, I use bash shell. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;The command:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;$ ssh c2 which orted
</span><br>
<span class="quotelev1">&gt;  it displays:
</span><br>
<span class="quotelev1">&gt; which : no orted in (......). Indeed (.........) contains no openmpi.
</span><br>
<span class="quotelev1">&gt; so I run ssh c2 first and then run which orted, it displays: /usr/local/openmpi-1.6.5/bin/orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt;must succeed. Does:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;$ ssh c2 echo \$PATH
</span><br>
<span class="quotelev2">&gt; &gt;show the path(s) you added in ~/.bashrc on the other machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the command doesnt show the path I added in .bashrc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; meng 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22425.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>Previous message:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>In reply to:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
