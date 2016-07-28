<?
$subject_val = "Re: [OMPI users] Debian package of open mpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 11:15:56 2008" -->
<!-- isoreceived="20080130161556" -->
<!-- sent="Wed, 30 Jan 2008 09:52:48 -0600" -->
<!-- isosent="20080130155248" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debian package of open mpi?" -->
<!-- id="20080130155248.GA861_at_eddelbuettel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="33f36270801300613l7622cbc6m3e5f1cb00eeba339_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debian package of open mpi?<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 10:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4926.php">Francisco Jesús Martínez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4914.php">Sang Chul Choi: "[OMPI users] Debian package of open mpi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2008 at 09:13:28AM -0500, Sang Chul Choi wrote:
<br>
<span class="quotelev1">&gt; I am wondering which version of open mpi I should install. I am using the
</span><br>
<span class="quotelev1">&gt; latest version of Ubuntu. Is debian package 1.1-2.5 the relatively latest
</span><br>
<span class="quotelev1">&gt; version of open mpi?
</span><br>
<p>No -- and a simple way of getting selected packages from Debian
<br>
up-to-date on Ubuntu is to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) add a deb-src entry to /etc/apt/sources.list that points
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to Debian unstable (or testing)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) apt-get update &amp;&amp; apt-get source $packageYouWant
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) make the changes you need to make, it any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) rebuild, eg via 'dpkg-buildpackage -us -uc -tc -rfakeroot'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
which is what I don on the Ubuntu machines at work.
<br>
<p>Steps b) to d) can be combined by adding --compile to the apt-get
<br>
source invocation, but I like to at least mark the local build in the
<br>
changelog / version number.
<br>
<p>Hope this helps,
<br>
<p>Dirk (one of the Debian Open MPI maintainers)
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4926.php">Francisco Jesús Martínez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4914.php">Sang Chul Choi: "[OMPI users] Debian package of open mpi?"</a>
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
