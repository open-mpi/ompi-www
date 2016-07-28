<?
$subject_val = "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 06:44:21 2013" -->
<!-- isoreceived="20130313104421" -->
<!-- sent="Wed, 13 Mar 2013 11:44:16 +0100" -->
<!-- isosent="20130313104416" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'" -->
<!-- id="51405880.9030209_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7b1881dc-816c-4bf7-bdaf-d6ce54c5dab3_at_HUB1.rwth-ad.de" -->
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
<strong>Date:</strong> 2013-03-13 06:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21531.php">Alberto F. Martín-Huertas: "[OMPI users] Intel MKL PARDISO seg. faults wrapping it around MPI_INIT/MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, sure. My point is just that &quot;strongly discouraged&quot; (as per the FAQ) 
<br>
is different from &quot;simply will not work at all&quot;. I find that a bit 
<br>
confusing, especially since in other areas of the FAQ, explicit 
<br>
workarounds are stated, e.g. on how to build a Makefile rule to extract 
<br>
flags from an mpiwrapper to pass them to the compiler manually (which is 
<br>
in exactly the same way &quot;strongly discouraged&quot;. Maybe adding something 
<br>
like &quot;is strongly discouraged and may not even work in certain cases, 
<br>
especially with Fortran&quot; can help.
<br>
<p>Dominik
<br>
<p>On 03/13/2013 11:37 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK the GNU people change the Fotran Module syntax every time they 
</span><br>
<span class="quotelev1">&gt; get any chance for doing it :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So openmpi compiled with  4.4.6 (sys-default for RHEL 6.x) definitely 
</span><br>
<span class="quotelev1">&gt; does not work with 4.5, 4.6, 4.7 versions of gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel 'ifort' compiler build modules which are compatible from 11.x 
</span><br>
<span class="quotelev1">&gt; through 13.x versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the recommended solution is to build an own  version of Open MPI 
</span><br>
<span class="quotelev1">&gt; with any compiler you use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. As Hristo said, changing the Fortran compiler vendor and using 
</span><br>
<span class="quotelev1">&gt; the precompiled Fortran header would never work: the syntax of these 
</span><br>
<span class="quotelev1">&gt; .mod files is not standatised at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/13/13 11:05, Iliev, Hristo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; However, it works if for example you configure Open MPI with the 
</span><br>
<span class="quotelev2">&gt;&gt; system supplied
</span><br>
<span class="quotelev2">&gt;&gt; version of gfortran and then specify a later gfortran version, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_FC=gfortran-4.7 (unless the module format has changed in the 
</span><br>
<span class="quotelev2">&gt;&gt; meantime).
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21531.php">Alberto F. Martín-Huertas: "[OMPI users] Intel MKL PARDISO seg. faults wrapping it around MPI_INIT/MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
