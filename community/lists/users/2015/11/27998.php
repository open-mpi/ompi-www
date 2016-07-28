<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 21:07:21 2015" -->
<!-- isoreceived="20151105020721" -->
<!-- sent="Wed, 4 Nov 2015 21:07:16 -0500" -->
<!-- isosent="20151105020716" -->
<!-- name="Oliver" -->
<!-- email="python152_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="CAPj7QkmU7=nFZ6V7fbyRy_2dj92f+saad9c_qY-=oJGKDQUDuA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="563AA1AD.6070004_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-11-04 21:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Upon close look, the previous errors of spec file are caused by CRLF line
<br>
terminators (it seems the file is prepared on windows(?) ). Once converted
<br>
to Unix, everything seems to fine.
<br>
<p>Thanks for your spec.
<br>
<p>Oliver
<br>
<p><p>On Wed, Nov 4, 2015 at 7:24 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Olivier,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just forgot ompi was offilically shipping .src.rpm (and there is no
</span><br>
<span class="quotelev1">&gt; binary x86_64.rpm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please use the .spec i sent in a previous email (assuming you want ompi in
</span><br>
<span class="quotelev1">&gt; /usr)
</span><br>
<span class="quotelev1">&gt; an other option is to
</span><br>
<span class="quotelev1">&gt; rpmbuild -ba --define 'install_in_opt 1' SPECS/openmpi-1.10.0.spec
</span><br>
<span class="quotelev1">&gt; and ompi will be installed in /opt
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
