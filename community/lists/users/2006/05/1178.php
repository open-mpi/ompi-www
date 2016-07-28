<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 15:20:28 2006" -->
<!-- isoreceived="20060501192028" -->
<!-- sent="Mon, 1 May 2006 21:20:20 +0200" -->
<!-- isosent="20060501192020" -->
<!-- name="Bernard Knaepen" -->
<!-- email="bknaepen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="220e12410605011220h5a029b53g698a1838909398dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8515434-B0BB-4836-ACFB-F8C7B5443874_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-01 15:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>In reply to:</strong> <a href="1173.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am in fact trying to use Open Mpi. In order to prepare my previous
<br>
email, I saved the different outputs but from the wrong
<br>
directory...sorry!
<br>
<p>I attached here the correct files.
<br>
<p>I also made sure today I am not mixing LAM/MPI and Open MPI.
<br>
<p>Thanks,
<br>
Bernard.
<br>
<p><p>On 5/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you trying to use Open MPI or LAM/MPI?  You said Open MPI in your
</span><br>
<span class="quotelev1">&gt; mail, but all the attached files were for LAM/MPI.  You might want to
</span><br>
<span class="quotelev1">&gt; make sure you aren't mixing the two when trying to build your
</span><br>
<span class="quotelev1">&gt; application -- using mpi.h from LAM/MPI and the libraries from Open
</span><br>
<span class="quotelev1">&gt; MPI (or building against one and running against the other) would
</span><br>
<span class="quotelev1">&gt; result in bad things happening.
</span><br>
<span class="quotelev1">&gt;
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
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1178/ompi.tar.gz">ompi.tar.gz</a>
</ul>
<!-- attachment="ompi.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>In reply to:</strong> <a href="1173.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
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
