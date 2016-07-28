<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 03:16:42 2015" -->
<!-- isoreceived="20151102081642" -->
<!-- sent="Mon, 2 Nov 2015 17:16:32 +0900" -->
<!-- isosent="20151102081632" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="56371BE0.50004_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPj7QkmjCcrJMnQYj0cXKsCG_1ADjKBXYxDSGLFwYVRV=fn9Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rebuild RPM for CentOS 7.1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-02 03:16:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier,
<br>
<p>here is attached an updated spec file that works on Cent OS 7
<br>
<p>i will double think about it before a permanent fix
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/31/2015 9:09 PM, Oliver wrote:
<br>
<span class="quotelev1">&gt; hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to rebuild 1.10 RPM from the src rpm on Cent OS 7. The 
</span><br>
<span class="quotelev1">&gt; build process went fine without problem. Whiling trying to install the 
</span><br>
<span class="quotelev1">&gt; rpm, I encountered the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examining openmpi-1.10.0-1.x86_64.rpm: openmpi-1.10.0-1.x86_64
</span><br>
<span class="quotelev1">&gt; Marking openmpi-1.10.0-1.x86_64.rpm to be installed
</span><br>
<span class="quotelev1">&gt; Resolving Dependencies
</span><br>
<span class="quotelev1">&gt; --&gt; Running transaction check
</span><br>
<span class="quotelev1">&gt; ---&gt; Package openmpi.x86_64 0:1.10.0-1 will be installed
</span><br>
<span class="quotelev1">&gt; --&gt; Finished Dependency Resolution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Transaction check error:
</span><br>
<span class="quotelev1">&gt;   file /usr/bin from install of openmpi-1.10.0-1.x86_64 conflicts with 
</span><br>
<span class="quotelev1">&gt; file from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev1">&gt;   file /usr/lib64 from install of openmpi-1.10.0-1.x86_64 conflicts 
</span><br>
<span class="quotelev1">&gt; with file from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what am I missing, is there a fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oliver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">http://www.open-mpi.org/community/lists/users/2015/10/27965.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27970/openmpi-1.10.0.spec">openmpi-1.10.0.spec</a>
</ul>
<!-- attachment="openmpi-1.10.0.spec" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
