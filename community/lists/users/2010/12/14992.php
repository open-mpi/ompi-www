<?
$subject_val = "Re: [OMPI users] error mesages appeared but program runs	successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 22:12:27 2010" -->
<!-- isoreceived="20101204031227" -->
<!-- sent="Fri, 03 Dec 2010 22:12:17 -0500" -->
<!-- isosent="20101204031217" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error mesages appeared but program runs	successfully?" -->
<!-- id="4CF9B191.9060101_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim2xRJt0h352fbDGwBwPF+uPDsb6W=ED285c=zD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error mesages appeared but program runs	successfully?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 22:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daofeng
<br>
<p>Do you have an Infiniband card in the machine where you are
<br>
running the program?
<br>
(Open Fabrics / OFED is the software support for Infiniband.
<br>
I guess you need the same version installed in all machines.)
<br>
<p>Does the directory referred in the error message actually
<br>
exist in your machine (i.e,  /dev/infiniband) ?
<br>
<p>Are you running it in the same machine where you installed OpenMPI?
<br>
<p>What output do you get from:
<br>
/usr/sbin/ibstat
<br>
?
<br>
<p>Did you compile the programs with the mpicc,mpiCC, mpif77
<br>
from the same OpenMPI that you built?
<br>
(Some Linux distributions and compilers come with
<br>
their own flavors of MPI, or you may also
<br>
have installed MPICH or MVAPICH, so it is not uncommon to mix up.)
<br>
<p>Have you tried to suppress the use of Infinband, i.e.:
<br>
<p>mpirun -mca btl ^openib -n 8 hello_cxx
<br>
<p>(Well, &quot;openib&quot; is the OpenMPI support for Infiniband.
<br>
The &quot;^&quot; means &quot;don't use it&quot;)
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>Daofeng Li wrote:
<br>
<span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; actually i didnot understand this....can you or anyone tell me what to do?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thx.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 3, 2010 at 9:41 PM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     It means that you probably have a version mismatch with your
</span><br>
<span class="quotelev1">&gt;     OpenFabrics drivers and or you have no OpenFabrics hardware and you
</span><br>
<span class="quotelev1">&gt;     should probably disable those drivers.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Sent from my PDA. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Dec 3, 2010, at 4:56 AM, &quot;Daofeng Li&quot; &lt;lidaof_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:lidaof_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Dear list,
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     i am currently try to use the OpenMPI package
</span><br>
<span class="quotelev2">&gt;&gt;     i install it at my home directory
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure --prefix=$HOME --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;     make
</span><br>
<span class="quotelev2">&gt;&gt;     make install
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     and the i add the ~/bin to the path and ~/lib to the
</span><br>
<span class="quotelev2">&gt;&gt;     ld_library_path to my .bashrc file
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     everything seems normal as i can run the example programs:
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -n 8 hello_f77
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -n 8 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;     etc...
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     but error messages appeas:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     $ mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     [[32727,1],1]: A high-performance Open MPI point-to-point
</span><br>
<span class="quotelev2">&gt;&gt;     messaging module
</span><br>
<span class="quotelev2">&gt;&gt;     was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;     Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt;&gt;       Host: localhost.localdomain
</span><br>
<span class="quotelev2">&gt;&gt;     Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt;     lower performance.
</span><br>
<span class="quotelev2">&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev2">&gt;&gt;     [localhost.localdomain:30503] 7 more processes have sent help
</span><br>
<span class="quotelev2">&gt;&gt;     message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt;&gt;     [localhost.localdomain:30503] Set MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     i am wondering whether i install openmpi the right way
</span><br>
<span class="quotelev2">&gt;&gt;     anyone would give some suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;     Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Daofeng Li
</span><br>
<span class="quotelev2">&gt;&gt;     College of Biological Science
</span><br>
<span class="quotelev2">&gt;&gt;     China Agricultural University
</span><br>
<span class="quotelev2">&gt;&gt;     Beijing
</span><br>
<span class="quotelev2">&gt;&gt;     China
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; Daofeng Li
</span><br>
<span class="quotelev1">&gt; College of Biological Science
</span><br>
<span class="quotelev1">&gt; China Agricultural University
</span><br>
<span class="quotelev1">&gt; Beijing
</span><br>
<span class="quotelev1">&gt; China
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
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
