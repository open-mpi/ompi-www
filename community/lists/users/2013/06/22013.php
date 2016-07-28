<?
$subject_val = "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  2 19:32:17 2013" -->
<!-- isoreceived="20130602233217" -->
<!-- sent="Sun, 2 Jun 2013 19:32:01 -0400" -->
<!-- isosent="20130602233201" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90" -->
<!-- id="53315815-204C-453D-9103-9092C0B127BB_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="75484C17-46E4-498F-AF99-14A6F7AA1951_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-02 19:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22012.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>In reply to:</strong> <a href="22012.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Derek
<br>
<p>Since your mpif90 is installed in /opt/local/lib/openmpi/bin/mpif90
<br>
shouldn't the openmpi libraries be located in /opt/local/lib/openmpi/lib,
<br>
rather than /opt/local/lib that your &quot;--showme&quot; shows?
<br>
I wonder if this is an environment variable problem 
<br>
(PATH and LD_LIBRARY_PATH/DYLD_LIBRARY_PATH),
<br>
in a system with multiple versions of OpenMPI installed.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On Jun 2, 2013, at 5:21 PM, Derek Teaney wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) 
</span><br>
<span class="quotelev1">&gt;     I am getting a frustrating message having to 
</span><br>
<span class="quotelev1">&gt;     do with  linking a simple  fortran program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typing 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/openmpi/bin/mpif90 tmp.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yields with gfortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;  &quot;_mpi_get_address0dr4_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      _MAIN__ in ccGWs06E.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the program, which runs fine on a linux box
</span><br>
<span class="quotelev1">&gt; &lt;test_usempi.f&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2)  The --showme gives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/local/bin/gfortran-mp-4.8 -I/opt/local/include/openmpi -Wl,-commons,use_dylibs -I/opt/local/lib -L/opt/local/lib -lmpi_usempi -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using gfortran-4.7 makes no difference.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3)  Examining the file  /opt/local/lib/libmpi_usempi.dylib with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nm libmpi_usempi.dylib | grep 'address0dr4_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0000000000000bf0 T _mpi_address0dr4_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something I'm missing &#133;. but shouldn't that be mpi_get_address0dr4_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4/  Changing the USE mpi   command to 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include 'mpif.h' works just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't they be identical.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test_mpifh.f&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Derek Teaney
</span><br>
<span class="quotelev1">&gt; Dept. of Physics &amp; Astronomy
</span><br>
<span class="quotelev1">&gt; SUNY at Stony Brook
</span><br>
<span class="quotelev1">&gt; Stony Brook, NY 11794-3800
</span><br>
<span class="quotelev1">&gt; Tel: (631) 632-4489
</span><br>
<span class="quotelev1">&gt; Fax: (631) 632-9718
</span><br>
<span class="quotelev1">&gt; e-mail: Derek.Teaney_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22012.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>In reply to:</strong> <a href="22012.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
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
