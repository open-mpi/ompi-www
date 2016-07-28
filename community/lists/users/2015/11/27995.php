<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:24:20 2015" -->
<!-- isoreceived="20151105002420" -->
<!-- sent="Thu, 5 Nov 2015 09:24:13 +0900" -->
<!-- isosent="20151105002413" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="563AA1AD.6070004_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPj7QknV3rL+-XaL4fV_eG3FuHMHL39PXesKXo2YzdW2QCxQQg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-11-04 19:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier,
<br>
<p>i just forgot ompi was offilically shipping .src.rpm (and there is no 
<br>
binary x86_64.rpm)
<br>
<p>please use the .spec i sent in a previous email (assuming you want ompi 
<br>
in /usr)
<br>
an other option is to
<br>
rpmbuild -ba --define 'install_in_opt 1' SPECS/openmpi-1.10.0.spec
<br>
and ompi will be installed in /opt
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 11/5/2015 7:58 AM, Oliver wrote:
<br>
<span class="quotelev1">&gt; hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I got the src rpm from the OMPI official site. I am not sure what 
</span><br>
<span class="quotelev1">&gt; you meant by &quot;related x86_64.rpm&quot;, as far as I can tell, only the src 
</span><br>
<span class="quotelev1">&gt; rpm is distributed&#239;&#188;&#154; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpm -qlp of newly built rpm sure have files that in in /usr/bin:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc
</span><br>
<span class="quotelev1">&gt; /etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; /etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; /etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt; /etc/vtsetup-config.dtd
</span><br>
<span class="quotelev1">&gt; /etc/vtsetup-config.xml
</span><br>
<span class="quotelev1">&gt; /usr
</span><br>
<span class="quotelev1">&gt; /usr/bin
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpiCC
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpiCC-vt
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpic++
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oliver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Nov 1, 2015 at 8:20 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Olivier,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     where did you get the src.rpm from ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     assuming you downloaded it, can you also download the related
</span><br>
<span class="quotelev1">&gt;     x86_64.rpm, run rpm -qlp open-mpi-xxx.x86_64.rpm and check if
</span><br>
<span class="quotelev1">&gt;     there are files in /usr/bin and /usr/lib64 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 10/31/2015 9:09 PM, Oliver wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     hi all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am trying to rebuild 1.10 RPM from the src rpm on Cent OS 7.
</span><br>
<span class="quotelev2">&gt;&gt;     The build process went fine without problem. Whiling trying to
</span><br>
<span class="quotelev2">&gt;&gt;     install the rpm, I encountered the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Examining openmpi-1.10.0-1.x86_64.rpm: openmpi-1.10.0-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     Marking openmpi-1.10.0-1.x86_64.rpm to be installed
</span><br>
<span class="quotelev2">&gt;&gt;     Resolving Dependencies
</span><br>
<span class="quotelev2">&gt;&gt;     --&gt; Running transaction check
</span><br>
<span class="quotelev2">&gt;&gt;     ---&gt; Package openmpi.x86_64 0:1.10.0-1 will be installed
</span><br>
<span class="quotelev2">&gt;&gt;     --&gt; Finished Dependency Resolution
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Transaction check error:
</span><br>
<span class="quotelev2">&gt;&gt;       file /usr/bin from install of openmpi-1.10.0-1.x86_64 conflicts
</span><br>
<span class="quotelev2">&gt;&gt;     with file from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;       file /usr/lib64 from install of openmpi-1.10.0-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     conflicts with file from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     what am I missing, is there a fix?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     TIA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Oliver
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">http://www.open-mpi.org/community/lists/users/2015/10/27965.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">http://www.open-mpi.org/community/lists/users/2015/11/27969.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27992.php">http://www.open-mpi.org/community/lists/users/2015/11/27992.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27995/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
