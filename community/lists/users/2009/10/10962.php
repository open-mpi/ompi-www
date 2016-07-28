<?
$subject_val = "Re: [OMPI users] bug in MPI_Cart_create?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 09:11:12 2009" -->
<!-- isoreceived="20091026131112" -->
<!-- sent="Mon, 26 Oct 2009 09:11:08 -0400" -->
<!-- isosent="20091026131108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Cart_create?" -->
<!-- id="407AA74F-A8E5-4E0E-BC6E-AFB9DA070F53_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1256553624.6607.63.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_Cart_create?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 09:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10963.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>In reply to:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that it is fixed on both the trunk and will be included  
<br>
in the upcoming 1.3.4 release.  The code now reads:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;re_order = (0 == reorder)? false : true;
<br>
<p>Thanks for the heads-up!
<br>
<p><p>On Oct 26, 2009, at 6:40 AM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this particular bug was fixed in the trunk some weeks ago
</span><br>
<span class="quotelev1">&gt; shortly before your post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-10-13 at 17:54 +1100, David Singleton wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Looking back through the archives, a lot of people have hit error
</span><br>
<span class="quotelev2">&gt; &gt; messages like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; [bl302:26556] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; [bl302:26556] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; [bl302:26556] *** MPI_ERR_ARG: invalid argument of some other  
</span><br>
<span class="quotelev1">&gt; kind
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; [bl302:26556] *** MPI_ERRORS_ARE_FATAL (your MPI job will now  
</span><br>
<span class="quotelev1">&gt; abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One of the reasons people *may* be hitting this is what I believe to
</span><br>
<span class="quotelev2">&gt; &gt; be an incorrect test in MPI_Cart_create():
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          if (0 &gt; reorder || 1 &lt; reorder) {
</span><br>
<span class="quotelev2">&gt; &gt;              return OMPI_ERRHANDLER_INVOKE (old_comm, MPI_ERR_ARG,
</span><br>
<span class="quotelev2">&gt; &gt;                                            FUNC_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; reorder is a &quot;logical&quot; argument and &quot;2.5.2 C bindings&quot; in the MPI  
</span><br>
<span class="quotelev1">&gt; 1.3
</span><br>
<span class="quotelev2">&gt; &gt; standard says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Logical flags are integers with value 0 meaning &#147;false&#148; and a
</span><br>
<span class="quotelev2">&gt; &gt;      non-zero value meaning &#147;true.&#148;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I'm not sure there should be any argument test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We hit this because we (sorta erroneously) were trying to use a  
</span><br>
<span class="quotelev1">&gt; GNU build
</span><br>
<span class="quotelev2">&gt; &gt; of Open MPI with Intel compilers.  gfortran has true=1 while ifort  
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev2">&gt; &gt; true=-1.  It seems to all work (by luck, I know) except this  
</span><br>
<span class="quotelev1">&gt; test.  Are
</span><br>
<span class="quotelev2">&gt; &gt; there any other tests like this in Open MPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev1">&gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev1">&gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Stuttgart
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10963.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>In reply to:</strong> <a href="10961.php">Kiril Dichev: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
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
