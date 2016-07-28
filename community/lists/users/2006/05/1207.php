<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 12:05:51 2006" -->
<!-- isoreceived="20060503160551" -->
<!-- sent="Wed, 3 May 2006 18:05:45 +0200" -->
<!-- isosent="20060503160545" -->
<!-- name="Bernard Knaepen" -->
<!-- email="bknaepen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="220e12410605030905oa4fbc95r4d331b26ec48f5ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A7DB0_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Bernard Knaepen (<em>bknaepen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 12:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>In reply to:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian and Jeff,
<br>
I have downloaded the latest nightly snapshot (openmpi-1.0.3a1r9798) and the
<br>
problem is gone.
<br>
<p>Thanks a lot,
<br>
Bernard.
<br>
<p><p>On 5/3/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reporting this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have committed the fixes to the v1.0 and v1.1 branches; they will show
</span><br>
<span class="quotelev1">&gt; up in all of the snapshots for tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Bernard Knaepen
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 02, 2006 12:32 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] fortran mpi io malloc error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Brian,
</span><br>
<span class="quotelev1">&gt; yes I would be interested to test again when the patch is pushed in
</span><br>
<span class="quotelev1">&gt; the nightly snapshots.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bernard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/2/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to install/run open-mpi on a Macbook Pro running MacOSX
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 10.4.6, *with* fortran support.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using Intel Fortran Compiler 9.1 (professional edition).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Compilation/installation went fine, except that the ifort compiler was
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not recognized as the f90 compiler by the romio configure script.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Therefore, I explicitely set the F90 compiler to ifort in the romio
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure script.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I try to run the following simple mpi/io program,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It appears that we don't properly handle string arguments in the
</span><br>
<span class="quotelev2">&gt; &gt; Fortran bindings for the MPI-IO functions.  I've committed a fix for
</span><br>
<span class="quotelev2">&gt; &gt; this issue in our development trunk this morning.  It should be
</span><br>
<span class="quotelev2">&gt; &gt; included in both the upcoming 1.0.3 and 1.1 releases.  Unfortunately,
</span><br>
<span class="quotelev2">&gt; &gt; I can't think of a workaround to the issue.  If you are interested, I
</span><br>
<span class="quotelev2">&gt; &gt; can let you know when the patch has been pushed in our v1.0 release
</span><br>
<span class="quotelev2">&gt; &gt; branch and is available in our nightly snapshots of v1.0.3 (which are
</span><br>
<span class="quotelev2">&gt; &gt; generally quite stable).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>In reply to:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
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
