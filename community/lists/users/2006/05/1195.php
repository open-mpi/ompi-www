<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 12:31:37 2006" -->
<!-- isoreceived="20060502163137" -->
<!-- sent="Tue, 2 May 2006 18:31:30 +0200" -->
<!-- isosent="20060502163130" -->
<!-- name="Bernard Knaepen" -->
<!-- email="bknaepen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="220e12410605020931r12c5458fi2942e4c2fecfd98_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEAF7E1D-5AA1-4ADE-8897-F3ABF02D6A10_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-02 12:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>In reply to:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
yes I would be interested to test again when the patch is pushed in
<br>
the nightly snapshots.
<br>
Thanks,
<br>
Bernard.
<br>
<p><p><p>On 5/2/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to install/run open-mpi on a Macbook Pro running MacOSX
</span><br>
<span class="quotelev2">&gt; &gt; 10.4.6, *with* fortran support.
</span><br>
<span class="quotelev2">&gt; &gt; I am using Intel Fortran Compiler 9.1 (professional edition).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compilation/installation went fine, except that the ifort compiler was
</span><br>
<span class="quotelev2">&gt; &gt; not recognized as the f90 compiler by the romio configure script.
</span><br>
<span class="quotelev2">&gt; &gt; Therefore, I explicitely set the F90 compiler to ifort in the romio
</span><br>
<span class="quotelev2">&gt; &gt; configure script.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I try to run the following simple mpi/io program,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that we don't properly handle string arguments in the
</span><br>
<span class="quotelev1">&gt; Fortran bindings for the MPI-IO functions.  I've committed a fix for
</span><br>
<span class="quotelev1">&gt; this issue in our development trunk this morning.  It should be
</span><br>
<span class="quotelev1">&gt; included in both the upcoming 1.0.3 and 1.1 releases.  Unfortunately,
</span><br>
<span class="quotelev1">&gt; I can't think of a workaround to the issue.  If you are interested, I
</span><br>
<span class="quotelev1">&gt; can let you know when the patch has been pushed in our v1.0 release
</span><br>
<span class="quotelev1">&gt; branch and is available in our nightly snapshots of v1.0.3 (which are
</span><br>
<span class="quotelev1">&gt; generally quite stable).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>In reply to:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
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
