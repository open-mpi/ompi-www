<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 14:43:45 2011" -->
<!-- isoreceived="20110523184345" -->
<!-- sent="Mon, 23 May 2011 11:43:40 -0700" -->
<!-- isosent="20110523184340" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="9C9B8353-5C77-47AF-91F1-0332B450DD33_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-23 14:43:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I get the following warning from &quot;make&quot; using the Intel 2011.3.174  
<br>
compilers on OpenMPI 1.4.3:
<br>
<p><span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa -I../.. -DNDEBUG -g -O3 -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -restrict -pthread -fvisibility=hidden -MT  
</span><br>
<span class="quotelev1">&gt; dt_module.lo -MD -MP -MF .deps/dt_module.Tpo -c dt_module.c  -fPIC - 
</span><br>
<span class="quotelev1">&gt; DPIC -o .libs/dt_module.o
</span><br>
<span class="quotelev1">&gt; dt_module.c(709): warning #1224: #warning directive: &quot;No proper C  
</span><br>
<span class="quotelev1">&gt; type found for COMPLEX32&quot;
</span><br>
<span class="quotelev1">&gt;   #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<p>The code in ompi/datatype/dt_module.c (lines 705-713; exactly the same  
<br>
in 1.4.4rc2) is:
<br>
<p><span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev1">&gt; #if OMPI_REAL16_MATCHES_C &amp;&amp; (OMPI_SIZEOF_FORTRAN_COMPLEX32 ==  
</span><br>
<span class="quotelev1">&gt; 2*SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev1">&gt;     DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex32.dt,  
</span><br>
<span class="quotelev1">&gt; &quot;MPI_COMPLEX32&quot;, &amp;ompi_mpi_ldblcplex.dt );
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev1">&gt;     DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex32.dt,  
</span><br>
<span class="quotelev1">&gt; &quot;MPI_COMPLEX32&quot;, &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     ompi_mpi_complex32.dt.flags |= DT_FLAG_DATA_FORTRAN |  
</span><br>
<span class="quotelev1">&gt; DT_FLAG_DATA_COMPLEX;
</span><br>
<span class="quotelev1">&gt; #endif /* OMPI_HAVE_FORTRAN_COMPLEX32 */
</span><br>
<p><p>I see from configure, that the Intel compilers support REAL*16 and  
<br>
COMPLEX*32, but the representations are different between the C and  
<br>
Fortran compilers:
<br>
<p><span class="quotelev1">&gt; checking if REAL*16 matches bit representation of long double... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been  
</span><br>
<span class="quotelev1">&gt; disabled
</span><br>
<p>I have two observations:
<br>
<p>1) Despite the message saying so, configure does not in fact disable  
<br>
MPI_REAL16 and MPI_COMPLEX32 support; the code in ompi/datatype/ 
<br>
dt_module.c happens to catch the error.  From opal/include/ 
<br>
opal_config.h:
<br>
<p><span class="quotelev1">&gt; #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 1
</span><br>
<p><span class="quotelev1">&gt; #define OMPI_ALIGNMENT_FORTRAN_REAL16 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_F90_COMPLEX32 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_F90_REAL16 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_COMPLEX32 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_REAL16 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_REAL16_MATCHES_C 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
</span><br>
<span class="quotelev1">&gt; #define OMPI_SIZEOF_FORTRAN_REAL16 16
</span><br>
<p><p>2) ompi/datatype/dt_module.c does not catch the same error for the  
<br>
incompatible REAL*16 datatype (lines 609-617):
<br>
<p><span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev1">&gt; #if (OMPI_SIZEOF_FORTRAN_REAL16 == SIZEOF_LONG_DOUBLE) &lt;-- should be  
</span><br>
<span class="quotelev1">&gt; #if OMPI_REAL16_MATCHES_C &amp;&amp; (OMPI_SIZEOF_FORTRAN_REAL16 ==  
</span><br>
<span class="quotelev1">&gt; SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev1">&gt;     DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real16.dt, &quot;MPI_REAL16&quot;,  
</span><br>
<span class="quotelev1">&gt; &amp;ompi_mpi_long_double.dt );
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #   warning &quot;No proper C type found for REAL16&quot;
</span><br>
<span class="quotelev1">&gt;     DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real16.dt, &quot;MPI_REAL16&quot;,  
</span><br>
<span class="quotelev1">&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     ompi_mpi_real16.dt.flags |= DT_FLAG_DATA_FORTRAN |  
</span><br>
<span class="quotelev1">&gt; DT_FLAG_DATA_FLOAT;
</span><br>
<span class="quotelev1">&gt; #endif /* OMPI_HAVE_FORTRAN_REAL16 */
</span><br>
<p><p>I do not like make warnings.  configure determines that the REAL*16  
<br>
and COMPLEX*32 datatypes are incompatible, but then does not actually  
<br>
disable them, despite saying it did.  I like defensive code.  The  
<br>
COMPLEX*32 datatype protection needs to be applied to the REAL*16  
<br>
datatype as well in ompi/datatype/dt_module.c.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
