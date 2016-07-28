<?
$subject_val = "Re: [OMPI devel] OSHMEM out-of-date?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 17 23:35:00 2016" -->
<!-- isoreceived="20160718033500" -->
<!-- sent="Sun, 17 Jul 2016 20:34:56 -0700" -->
<!-- isosent="20160718033456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OSHMEM out-of-date?" -->
<!-- id="3F027ACC-8A7C-4895-8F3A-B7B5D90D3381_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2Qj5pqMhf49BeMKkOBrDV3Jiv09Fv0Zq2z30or60pGX7MoeA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OSHMEM out-of-date?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-17 23:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>In reply to:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19241.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - this is on today&#226;&#128;&#153;s master
<br>
<p><span class="quotelev1">&gt; On Jul 17, 2016, at 8:31 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is it? What repository?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#208;&#191;&#208;&#190;&#208;&#189;&#208;&#181;&#208;&#180;&#208;&#181;&#208;&#187;&#209;&#140;&#208;&#189;&#208;&#184;&#208;&#186;, 18 &#208;&#184;&#209;&#142;&#208;&#187;&#209;&#143; 2016 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Ralph Castain &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../oshmem/shmem/fortran/prototypes_shmem.h:14:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../../../oshmem/shmem/fortran/bindings.h:15,
</span><br>
<span class="quotelev1">&gt;                  from pshmem_put_f.c:13:
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c: In function &#226;&#128;&#152;shmem_put_f&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/fortran/shmem_fortran_pointer.h:15:28: warning: passing argument 2 of &#226;&#128;&#152;mca_spml.spml_put&#226;&#128;&#153; makes integer from pointer without a cast [-Wint-conversion]
</span><br>
<span class="quotelev1">&gt;  #define FPTR_2_VOID_PTR(a) ((void *)(a))
</span><br>
<span class="quotelev1">&gt;                             ^
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/mca/spml/spml.h:329:44: note: in expansion of macro &#226;&#128;&#152;FPTR_2_VOID_PTR&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;  #define MCA_SPML_CALL(a) mca_spml.spml_ ## a
</span><br>
<span class="quotelev1">&gt;                                             ^
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;      MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
</span><br>
<span class="quotelev1">&gt;      ^~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/fortran/shmem_fortran_pointer.h:15:28: note: expected &#226;&#128;&#152;size_t {aka long unsigned int}&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;void *&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;  #define FPTR_2_VOID_PTR(a) ((void *)(a))
</span><br>
<span class="quotelev1">&gt;                             ^
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/mca/spml/spml.h:329:44: note: in expansion of macro &#226;&#128;&#152;FPTR_2_VOID_PTR&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;  #define MCA_SPML_CALL(a) mca_spml.spml_ ## a
</span><br>
<span class="quotelev1">&gt;                                             ^
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;      MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
</span><br>
<span class="quotelev1">&gt;      ^~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../oshmem/shmem/fortran/bindings.h:16:0,
</span><br>
<span class="quotelev1">&gt;                  from pshmem_put_f.c:13:
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:38:25: warning: passing argument 3 of &#226;&#128;&#152;mca_spml.spml_put&#226;&#128;&#153; makes pointer from integer without a cast [-Wint-conversion]
</span><br>
<span class="quotelev1">&gt;          OMPI_FINT_2_INT(*length),
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/mpi/fortran/base/fint_2_int.h:41:30: note: in definition of macro &#226;&#128;&#152;OMPI_FINT_2_INT&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;    #define OMPI_FINT_2_INT(a) a
</span><br>
<span class="quotelev1">&gt;                               ^
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;      MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
</span><br>
<span class="quotelev1">&gt;      ^~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:38:25: note: expected &#226;&#128;&#152;void *&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;int&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;          OMPI_FINT_2_INT(*length),
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/mpi/fortran/base/fint_2_int.h:41:30: note: in definition of macro &#226;&#128;&#152;OMPI_FINT_2_INT&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;    #define OMPI_FINT_2_INT(a) a
</span><br>
<span class="quotelev1">&gt;                               ^
</span><br>
<span class="quotelev1">&gt; pshmem_put_f.c:36:5: note: in expansion of macro &#226;&#128;&#152;MCA_SPML_CALL&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;      MCA_SPML_CALL(put(FPTR_2_VOID_PTR(target),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Polyakov
</span><br>
<span class="quotelev1">&gt; (Mobile mail)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19228.php">http://www.open-mpi.org/community/lists/devel/2016/07/19228.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Previous message:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>In reply to:</strong> <a href="19228.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19230.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
<li><strong>Reply:</strong> <a href="19241.php">Artem Polyakov: "Re: [OMPI devel] OSHMEM out-of-date?"</a>
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
