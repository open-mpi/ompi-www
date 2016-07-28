<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 15:21:03 2006" -->
<!-- isoreceived="20060524192103" -->
<!-- sent="Wed, 24 May 2006 15:20:57 -0400" -->
<!-- isosent="20060524192057" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="[OMPI users] Compile issue on ppc64" -->
<!-- id="d2403b0605241220t5a33dc84i6cbf821a01eb13d0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul (<em>paul.lundin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 15:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Reply:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Maybe reply:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been trying to get openmpi to install (./configure
<br>
--prefix=/opt/ompi --with-openib=/usr/local/ofed)  using various methods on
<br>
rhel4 u3 ppc64. No matter what method I use when I try to build 64bit (32bit
<br>
works) it fails while searching for sysfs. I know that redhat only
<br>
distributes sysfsutils (which supplies libsysfs.so.1.0.2) in 32bit format. I
<br>
was wondering if there was a workaround for this problem. I have been unable
<br>
to find a ppc64 version of libsysfs. The error is contained in the attached
<br>
log. Here is a summary:
<br>
<p>--- MCA component btl:openib (m4 configuration macro)
<br>
checking for MCA component btl:openib compile mode... dso
<br>
checking for sysfs_open_class in -lsysfs... no
<br>
configure: error: OpenIB support requested but required sysfs not found.
<br>
Aborting
<br>
<p><p>Regards.
<br>
Paul
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1275/config.out.tar.gz">config.out.tar.gz</a>
</ul>
<!-- attachment="config.out.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Reply:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Maybe reply:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
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
