<?
$subject_val = "[OMPI users] Error building openmpi-1.6 from copy";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 14:16:54 2012" -->
<!-- isoreceived="20120601181654" -->
<!-- sent="Fri, 1 Jun 2012 14:16:49 -0400" -->
<!-- isosent="20120601181649" -->
<!-- name="Jeremy" -->
<!-- email="spritzydog_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-1.6 from copy" -->
<!-- id="CA+tOgLEaXUaPCL1kypGqc=B2aUF-e91gODVF7AQ52eUKRkZRag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-1.6 from copy<br>
<strong>From:</strong> Jeremy (<em>spritzydog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 14:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Reply:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am having trouble building Open MPI 1.6 with RHEL 6.2 and gcc from a
<br>
copy of the openmpi-1.6 directory.
<br>
<p>Everything works OK if I do a simple build like:
<br>
tar xvf openmpi-1.6.tar
<br>
cd openmpi-1.6
<br>
configure --prefix=/opt/local/mpi
<br>
make
<br>
make install
<br>
<p>However, if I do an intermediate copy of the opempi-1.6 directory then
<br>
make fails (details attached):
<br>
tar xvf openmpi-1.6.tar
<br>
cp -r openmpi-1.6 openmpi-1.6.try
<br>
cd openmpi-1.6.try
<br>
configure --prefix=/opt/local/mpi
<br>
make   fails with errors like:
<br>
sh: config/ompi_get_version.sh: No such file or directory
<br>
ompi/mca/bml/Makefile.am:31: WANT_INSTALL_HEADERS does not appear in
<br>
AM_CONDITIONAL
<br>
<p>I can get it work only if I preserve timestamps when I do the copy:
<br>
tar xvf openmpi-1.6.tar
<br>
cp -r --preserve=timestamps openmpi-1.6 openmpi-1.6.try
<br>
cd openmpi-1.6.try
<br>
configure --prefix=/opt/local/mpi
<br>
make  (OK)
<br>
make install
<br>
<p>So it seems like there is some dependency or configuration problem.
<br>
I've attached the build output.  Please let me know if you have any
<br>
suggestions or if there is any other information I can provide.
<br>
<p>Thanks,
<br>
<p>-Jeremy
<br>
<p>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19426/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19426/config.out.gz">config.out.gz</a>
</ul>
<!-- attachment="config.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19426/make.out.gz">make.out.gz</a>
</ul>
<!-- attachment="make.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Reply:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
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
