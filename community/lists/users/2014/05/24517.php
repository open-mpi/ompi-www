<?
$subject_val = "Re: [OMPI users] MPI installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 08:33:31 2014" -->
<!-- isoreceived="20140530123331" -->
<!-- sent="Fri, 30 May 2014 12:33:29 +0000" -->
<!-- isosent="20140530123329" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI installation problem" -->
<!-- id="4EF46A68-888A-48CC-B646-E7F9EC499691_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="261408A6-AE5F-422D-866A-975407793C49_at_yahoo.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI installation problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 08:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>In reply to:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These messages are normal for RPM.
<br>
<p>Keep in mind that you're installing the source RPM -- not a binary RPM. Most people use the source RPM in an rpmbuild command (to build a binary RPM for their environment), not installing directly.
<br>
<p><p>On May 30, 2014, at 7:43 AM, Fernando Cruz &lt;fjalcruz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to install openmpi-1.8.1 using it&#146;s source rpm I get a strange message :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TITAN:/home/fcruz # rpm -i openmpi-1.8.1-1.src.rpm
</span><br>
<span class="quotelev1">&gt; warning: user jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt; warning: group jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt; warning: user jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt; warning: group jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It happens either I&#146;m logged in as a user or as superuser.
</span><br>
<span class="quotelev1">&gt; Can you please advice?
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FCruz
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
<li><strong>Next message:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>In reply to:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
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
