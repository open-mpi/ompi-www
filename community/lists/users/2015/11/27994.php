<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:12:56 2015" -->
<!-- isoreceived="20151105001256" -->
<!-- sent="Wed, 4 Nov 2015 19:12:51 -0500" -->
<!-- isosent="20151105001251" -->
<!-- name="Oliver" -->
<!-- email="python152_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="CAPj7Qk=56FDFsT8hdO+3tu51Jngin8azkWm8nvs5992vgaSeOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56371BE0.50004_at_rist.or.jp" -->
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
<strong>From:</strong> Oliver (<em>python152_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 19:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>The new spec file has some issues:
<br>
<p><p>f7b_at_ct0 ~/rpmbuild/SPECS$ rpmbuild -ba openmpi-1.10.0.spec
<br>
Executing(%prep): /bin/sh -e /var/tmp/rpm-tmp.gDGUNx
<br>
+ umask 022
<br>
+ cd /home/f7b/rpmbuild/BUILD
<br>
+ rm -rf $'/home/f7b/rpmbuild/BUILDROOT/openmpi-1.10.0-1.x86_64\r'
<br>
+ $'\r'
<br>
/var/tmp/rpm-tmp.gDGUNx: line 33: $'\r': command not found
<br>
error: Bad exit status from /var/tmp/rpm-tmp.gDGUNx (%prep)
<br>
<p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bad exit status from /var/tmp/rpm-tmp.gDGUNx (%prep)
<br>
<p>On Mon, Nov 2, 2015 at 3:16 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Olivier,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached an updated spec file that works on Cent OS 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will double think about it before a permanent fix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/31/2015 9:09 PM, Oliver wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to rebuild 1.10 RPM from the src rpm on Cent OS 7. The build
</span><br>
<span class="quotelev1">&gt; process went fine without problem. Whiling trying to install the rpm, I
</span><br>
<span class="quotelev1">&gt; encountered the following error:
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
<span class="quotelev1">&gt;   file /usr/lib64 from install of openmpi-1.10.0-1.x86_64 conflicts with
</span><br>
<span class="quotelev1">&gt; file from package filesystem-3.2-18.el7.x86_64
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">http://www.open-mpi.org/community/lists/users/2015/10/27965.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27970.php">http://www.open-mpi.org/community/lists/users/2015/11/27970.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Oliver
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
