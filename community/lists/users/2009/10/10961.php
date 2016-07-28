<?
$subject_val = "Re: [OMPI users] bug in MPI_Cart_create?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 06:40:02 2009" -->
<!-- isoreceived="20091026104002" -->
<!-- sent="Mon, 26 Oct 2009 11:40:24 +0100" -->
<!-- isosent="20091026104024" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Cart_create?" -->
<!-- id="1256553624.6607.63.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4AD4242A.8080705_at_anu.edu.au" -->
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
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 06:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Previous message:</strong> <a href="10960.php">Steve Kargl: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>In reply to:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Reply:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David, 
<br>
<p>I believe this particular bug was fixed in the trunk some weeks ago
<br>
shortly before your post. 
<br>
<p>Regards,
<br>
Kiril
<br>
<p>On Tue, 2009-10-13 at 17:54 +1100, David Singleton wrote:
<br>
<span class="quotelev1">&gt; Looking back through the archives, a lot of people have hit error
</span><br>
<span class="quotelev1">&gt; messages like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; [bl302:26556] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev2">&gt;  &gt; [bl302:26556] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;  &gt; [bl302:26556] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;  &gt; [bl302:26556] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of the reasons people *may* be hitting this is what I believe to
</span><br>
<span class="quotelev1">&gt; be an incorrect test in MPI_Cart_create():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          if (0 &gt; reorder || 1 &lt; reorder) {
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERRHANDLER_INVOKE (old_comm, MPI_ERR_ARG,
</span><br>
<span class="quotelev1">&gt;                                            FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; reorder is a &quot;logical&quot; argument and &quot;2.5.2 C bindings&quot; in the MPI 1.3
</span><br>
<span class="quotelev1">&gt; standard says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Logical flags are integers with value 0 meaning &#226;&#128;&#156;false&#226;&#128;&#157; and a
</span><br>
<span class="quotelev1">&gt;      non-zero value meaning &#226;&#128;&#156;true.&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'm not sure there should be any argument test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We hit this because we (sorta erroneously) were trying to use a GNU build
</span><br>
<span class="quotelev1">&gt; of Open MPI with Intel compilers.  gfortran has true=1 while ifort has
</span><br>
<span class="quotelev1">&gt; true=-1.  It seems to all work (by luck, I know) except this test.  Are
</span><br>
<span class="quotelev1">&gt; there any other tests like this in Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Previous message:</strong> <a href="10960.php">Steve Kargl: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>In reply to:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Reply:</strong> <a href="10962.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_Cart_create?"</a>
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
