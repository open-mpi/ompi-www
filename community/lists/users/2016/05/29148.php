<?
$subject_val = "Re: [OMPI users] 'AINT' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 22:11:18 2016" -->
<!-- isoreceived="20160510021118" -->
<!-- sent="Tue, 10 May 2016 11:11:16 +0900" -->
<!-- isosent="20160510021116" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'AINT' undeclared" -->
<!-- id="4f2b10f2-ffcd-ff3b-c5b2-2e1cc279a85b_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1462812092244.41560_at_umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'AINT' undeclared<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 22:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>i was able to build openmpi 1.10.2 with the same configure command line 
<br>
(after i quoted the LDFLAGS parameters)
<br>
<p><p>can you please run
<br>
<p>grep SIZEOF_PTRDIFF_T config.status
<br>
<p><p>it should be 4 or 8, but it seems different in your environment (!)
<br>
<p><p>are you running 32 or 64 bit kernel ? on which processor ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/10/2016 1:41 AM, Ilias Miroslav wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install OpenMPI 1.10.1/1.10.2 with gcc (GCC) 5.2.1 
</span><br>
<span class="quotelev1">&gt; 20150902 (Red Hat 5.2.1-2) statically,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/ilias/bin/openmpi-1.10.1_gnu_static 
</span><br>
<span class="quotelev1">&gt; CXX=g++ CC=gcc F77=gfortran FC=gfortran LDFLAGS=--static -ldl -lrt 
</span><br>
<span class="quotelev1">&gt; --disable-shared --enable-static --disable-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I am getting this error below. Any help, please ? Am I 
</span><br>
<span class="quotelev1">&gt; missing something in my GNU installation ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi/datatype'
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_args.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_contiguous.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_indexed.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_struct.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_vector.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_darray.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_create_subarray.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_external32.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_match_size.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_module.lo
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_sndrcv.lo
</span><br>
<span class="quotelev1">&gt; ompi_datatype_module.c:280:44: warning: implicit declaration of 
</span><br>
<span class="quotelev1">&gt; function 'OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE' 
</span><br>
<span class="quotelev1">&gt; [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;  ompi_predefined_datatype_t ompi_mpi_aint = 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
</span><br>
<span class="quotelev1">&gt;                                             ^
</span><br>
<span class="quotelev1">&gt; ompi_datatype_module.c:280:86: error: 'INT64_T' undeclared here (not 
</span><br>
<span class="quotelev1">&gt; in a function)
</span><br>
<span class="quotelev1">&gt;  ompi_predefined_datatype_t ompi_mpi_aint = 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; ompi_datatype_module.c:280:95: error: 'AINT' undeclared here (not in a 
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt;  ompi_predefined_datatype_t ompi_mpi_aint = 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_INIT_UNAVAILABLE_BASIC_TYPE(INT64_T, AINT, 
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_FLAG_DATA_C | OMPI_DATATYPE_FLAG_DATA_INT);
</span><br>
<span class="quotelev1">&gt;                                  ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_datatype_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi/datatype'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/ilias/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi-1.10.1_gnu_static/openmpi-1.10.2/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29142.php">http://www.open-mpi.org/community/lists/users/2016/05/29142.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
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
