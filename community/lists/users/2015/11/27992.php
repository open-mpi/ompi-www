<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 17:58:36 2015" -->
<!-- isoreceived="20151104225836" -->
<!-- sent="Wed, 4 Nov 2015 17:58:31 -0500" -->
<!-- isosent="20151104225831" -->
<!-- name="Oliver" -->
<!-- email="python152_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="CAPj7QknV3rL+-XaL4fV_eG3FuHMHL39PXesKXo2YzdW2QCxQQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5636BA52.1090000_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-11-04 17:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Gilles,
<br>
<p>Yes, I got the src rpm from the OMPI official site. I am not sure what you
<br>
meant by &quot;related x86_64.rpm&quot;, as far as I can tell, only the src rpm is
<br>
distributed&#239;&#188;&#154; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
<br>
<p>rpm -qlp of newly built rpm sure have files that in in /usr/bin:
<br>
<p>etc
<br>
/etc/openmpi-default-hostfile
<br>
/etc/openmpi-mca-params.conf
<br>
/etc/openmpi-totalview.tcl
<br>
/etc/vtsetup-config.dtd
<br>
/etc/vtsetup-config.xml
<br>
/usr
<br>
/usr/bin
<br>
/usr/bin/mpiCC
<br>
/usr/bin/mpiCC-vt
<br>
/usr/bin/mpic++
<br>
....
<br>
<p>Best,
<br>
<p>Oliver
<br>
<p><p><p>On Sun, Nov 1, 2015 at 8:20 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Olivier,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where did you get the src.rpm from ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; assuming you downloaded it, can you also download the related x86_64.rpm,
</span><br>
<span class="quotelev1">&gt; run rpm -qlp open-mpi-xxx.x86_64.rpm and check if there are files in
</span><br>
<span class="quotelev1">&gt; /usr/bin and /usr/lib64 ?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">http://www.open-mpi.org/community/lists/users/2015/11/27969.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Oliver
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
