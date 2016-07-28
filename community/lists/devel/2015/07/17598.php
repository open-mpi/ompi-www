<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 12:59:55 2015" -->
<!-- isoreceived="20150706165955" -->
<!-- sent="Mon, 6 Jul 2015 16:59:53 +0000" -->
<!-- isosent="20150706165953" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="B4A01233-147F-450A-8F38-9EB0E55FEC27_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVXAMTaLLpHq5dVknHp5W=kPCeVV9KL4AhnXeC11s2JnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 12:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17594.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the heads up.  Fixed -- sorry about that.
<br>
<p><p><span class="quotelev1">&gt; On Jul 4, 2015, at 12:11 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On OS X the generating the MPI library fails with the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; duplicate symbol _ompi_buffer_detach_f08 in:
</span><br>
<span class="quotelev1">&gt;     .libs/buffer_detach_f.o
</span><br>
<span class="quotelev1">&gt;     profile/.libs/libmpi_mpifh_pmpi.a(pbuffer_detach_f.o)
</span><br>
<span class="quotelev1">&gt; ld: 1 duplicate symbol for architecture x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I came up with the following patch, but I'm not sure this is the real fix. It does fix the issue in my particular configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mpi/fortran/mpif-h/buffer_detach_f.c b/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
</span><br>
<span class="quotelev1">&gt; index e2114d7..5d2c530 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
</span><br>
<span class="quotelev1">&gt; @@ -88,6 +88,7 @@ void ompi_buffer_detach_f(char *buffer, MPI_Fint *size, MPI_Fint *ierr)
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Per above, this is the mpi_f08 module implementation of
</span><br>
<span class="quotelev1">&gt;   * MPI_BUFFER_DETACH.  It handles the buffer arugment just like the C
</span><br>
<span class="quotelev1">&gt; @@ -107,3 +108,4 @@ void ompi_buffer_detach_f08(char *buffer, MPI_Fint *size, MPI_Fint *ierr)
</span><br>
<span class="quotelev1">&gt;          OMPI_SINGLE_INT_2_FINT(size);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +#endif  /* !OMPI_PROFILE_LAYER */ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17594.php">http://www.open-mpi.org/community/lists/devel/2015/07/17594.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17594.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
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
