<?
$subject_val = "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 07:29:23 2013" -->
<!-- isoreceived="20130313112923" -->
<!-- sent="Wed, 13 Mar 2013 12:29:18 +0100" -->
<!-- isosent="20130313112918" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'" -->
<!-- id="5140630E.5020204_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FA43FC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'<br>
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 07:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21534.php">David Turner: "[OMPI users] current release?"</a>
<li><strong>Previous message:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
perfect, thanks!
<br>
<p>On 03/13/2013 12:21 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Fair point; the &quot;don't do that&quot; aspect of changing compilers with middleware is exactly the type of information that you want to be able to google for.  I've added the following paragraph to the FAQ entry <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Note that changing the underlying compiler may not work at all. For example, C++ and Fortran compilers are notoriously binary incompatible with each other (sometimes even within multiple releases of the same compiler). If you compile/install Open MPI with C++ compiler XYZ and then use the OMPI_CXX environment variable to change the mpicxx wrapper compiler to use the ABC C++ compiler, your application code may not compile and/or link. The traditional method of using multiple different compilers with Open MPI is to install Open MPI multiple times; each installation should be built/installed with a different compiler. This is annoying, but it is beyond the scope of Open MPI to be able to fix.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2013, at 5:44 AM, Dominik Goeddeke &lt;dominik.goeddeke_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, sure. My point is just that &quot;strongly discouraged&quot; (as per the FAQ) is different from &quot;simply       will not work at all&quot;. I find that a bit confusing, especially since in other areas of the FAQ, explicit workarounds are stated, e.g. on how to build a Makefile rule to extract flags from an mpiwrapper to pass them to the compiler manually (which is in exactly the same way &quot;strongly discouraged&quot;. Maybe adding something like &quot;is strongly discouraged and may not even work in certain cases, especially with Fortran&quot; can help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dominik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/13/2013 11:37 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AFAIK the GNU people change the Fotran Module syntax every time they get any chance for doing it :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So openmpi compiled with  4.4.6 (sys-default for RHEL 6.x) definitely does not work with 4.5, 4.6, 4.7 versions of gfortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel 'ifort' compiler build modules which are compatible from 11.x through 13.x versions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the recommended solution is to build an own  version of Open MPI with any compiler you use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. As Hristo said, changing the Fortran compiler vendor and using the precompiled Fortran header would never work: the syntax of these .mod files is not standatised at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/13/13 11:05, Iliev, Hristo wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, it works if for example you configure Open MPI with the system supplied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version of gfortran and then specify a later gfortran version, e.g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_FC=gfortran-4.7 (unless the module format has changed in the meantime).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev2">&gt;&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
</span><br>
<span class="quotelev2">&gt;&gt; Institut f&#252;r Angewandte Mathematik (LS III)
</span><br>
<span class="quotelev2">&gt;&gt; Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21534.php">David Turner: "[OMPI users] current release?"</a>
<li><strong>Previous message:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
