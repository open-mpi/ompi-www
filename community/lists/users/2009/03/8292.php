<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 14:54:38 2009" -->
<!-- isoreceived="20090304195438" -->
<!-- sent="Wed, 04 Mar 2009 11:54:34 -0800" -->
<!-- isosent="20090304195434" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="49AEDC7A.309_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1236135631.5834.123.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma under ompi 1.3<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 14:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8293.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Having just downloaded and installed Open MPI 1.3 with ifort and gcc, I
</span><br>
<span class="quotelev1">&gt; merrily went off to compile my application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my final link with mpif90 I get the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding --showme reveals that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is added to the compile early in the aggregated ifort command, and 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is added to the end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I note than when compiling Open MPI -lnuma was visible in the gcc
</span><br>
<span class="quotelev1">&gt; arguments, with no added -L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
</span><br>
<span class="quotelev1">&gt; configure command was
</span><br>
<p>You shouldn't have to. The runtime loader should look inside of /usr/lib64 by 
<br>
itself. Unless of course, you've built either your application or OpenMPI using 
<br>
a 32-bit Intel complier instead (say fc instead of fce). In that case the 
<br>
runtime loader would look inside of /usr/lib to find libnuma, rather then 
<br>
/usr/lib64.
<br>
<p>Are you sure you are using the 64-bit version of the Intel compilier? If you 
<br>
intend to use the 32-bit version of the compilier, and OpenMPI is 32-bits you 
<br>
may just need to install the numactl.i386 and numactl.x86_64 RPMS.
<br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8293.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
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
