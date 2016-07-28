<?
$subject_val = "Re: [OMPI users] error mesages appeared but program runs successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  5 18:41:49 2010" -->
<!-- isoreceived="20101205234149" -->
<!-- sent="Sun, 5 Dec 2010 18:41:29 -0500" -->
<!-- isosent="20101205234129" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error mesages appeared but program runs successfully?" -->
<!-- id="FC03F173-4892-469B-8458-BD305B08D17D_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=CQ2PrfxPHCdtTPH-X0N3Y61T16kr5tvmc6BMd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error mesages appeared but program runs successfully?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-05 18:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14998.php">Tim Prince: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14996.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daofeng
<br>
<p>It is hard to tell what is happening in the Infiniband side of the problem.
<br>
Did somebody perhaps remove the Infiniband card from this machine?
<br>
Was it ever there?
<br>
Did somebody perhaps changed the Linux kernel modules that are loaded
<br>
(perhaps changing /etc/module.config or similar)?
<br>
Maybe other people in your organization know.
<br>
<p>If this is a single computer, not a cluster, you don't loose anything by not
<br>
having Infinband.
<br>
In this case, you can reinstall OpenMPI without Infiniband support, by just
<br>
doing &quot;make distclean&quot; in the OpenMPI build directory (to cleanup what is there),
<br>
then &quot;./configure --prefix=/wherever/you/want/to/install --without-openib&quot;,
<br>
then &quot;make&quot;, and &quot;make install&quot;.
<br>
<p>Alternatively, you can continue to use what you already have with the &quot;-mca btl ^openib&quot; flag.
<br>
<p>If this is a cluster, of course you would benefit from Infiniband, which is a faster
<br>
network than Ethernet or Gigabit Ethernet.
<br>
In this case you need to ask for help of somebody that knows more about your cluster
<br>
hardware, to restore the Infiniband to a sane and healthy state.
<br>
Or, if there is no Infinband hardware, or if it is broken, just reinstall OpenMPi following
<br>
the little recipe above.  You will be able to run your programs using Ethernet (I assume  
<br>
the cluster would have Ethernet).  Not very fast, but will work.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><p>On Dec 4, 2010, at 4:47 AM, Daofeng Li wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thank you for your response.
</span><br>
<span class="quotelev1">&gt; i think this is much about hardware which i know little about them:)
</span><br>
<span class="quotelev1">&gt; might be the machine i used dont have the card you mentioned as i run:
</span><br>
<span class="quotelev1">&gt;  /usr/sbin/ibstat
</span><br>
<span class="quotelev1">&gt; ibwarn: [4260] umad_init: can't read ABI version from /sys/class/infiniband_mad/abi_version (No such file or directory): is ib_umad module loaded?
</span><br>
<span class="quotelev1">&gt; ibpanic: [4260] main: can't init UMAD library: (No such file or directory)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but you really helped me as:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl ^openib -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; that's really cool~
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thank you all:)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Wishes.
</span><br>
<span class="quotelev1">&gt; On Sat, Dec 4, 2010 at 11:12 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Daofeng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have an Infiniband card in the machine where you are
</span><br>
<span class="quotelev1">&gt; running the program?
</span><br>
<span class="quotelev1">&gt; (Open Fabrics / OFED is the software support for Infiniband.
</span><br>
<span class="quotelev1">&gt; I guess you need the same version installed in all machines.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the directory referred in the error message actually
</span><br>
<span class="quotelev1">&gt; exist in your machine (i.e,  /dev/infiniband) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you running it in the same machine where you installed OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What output do you get from:
</span><br>
<span class="quotelev1">&gt; /usr/sbin/ibstat
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you compile the programs with the mpicc,mpiCC, mpif77
</span><br>
<span class="quotelev1">&gt; from the same OpenMPI that you built?
</span><br>
<span class="quotelev1">&gt; (Some Linux distributions and compilers come with
</span><br>
<span class="quotelev1">&gt; their own flavors of MPI, or you may also
</span><br>
<span class="quotelev1">&gt; have installed MPICH or MVAPICH, so it is not uncommon to mix up.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried to suppress the use of Infinband, i.e.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl ^openib -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Well, &quot;openib&quot; is the OpenMPI support for Infiniband.
</span><br>
<span class="quotelev1">&gt; The &quot;^&quot; means &quot;don't use it&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daofeng Li wrote:
</span><br>
<span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt;  actually i didnot understand this....can you or anyone tell me what to do?
</span><br>
<span class="quotelev1">&gt;  Thx.
</span><br>
<span class="quotelev1">&gt;  Best.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 3, 2010 at 9:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It means that you probably have a version mismatch with your
</span><br>
<span class="quotelev1">&gt;    OpenFabrics drivers and or you have no OpenFabrics hardware and you
</span><br>
<span class="quotelev1">&gt;    should probably disable those drivers.  
</span><br>
<span class="quotelev1">&gt;    Sent from my PDA. No type good. 
</span><br>
<span class="quotelev1">&gt;    On Dec 3, 2010, at 4:56 AM, &quot;Daofeng Li&quot; &lt;lidaof_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    &lt;mailto:lidaof_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Dear list,
</span><br>
<span class="quotelev1">&gt;         i am currently try to use the OpenMPI package
</span><br>
<span class="quotelev1">&gt;    i install it at my home directory
</span><br>
<span class="quotelev1">&gt;    ./configure --prefix=$HOME --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;    make install
</span><br>
<span class="quotelev1">&gt;         and the i add the ~/bin to the path and ~/lib to the
</span><br>
<span class="quotelev1">&gt;    ld_library_path to my .bashrc file
</span><br>
<span class="quotelev1">&gt;         everything seems normal as i can run the example programs:
</span><br>
<span class="quotelev1">&gt;    mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt;    mpirun -n 8 hello_f77
</span><br>
<span class="quotelev1">&gt;    mpirun -n 8 hello_c
</span><br>
<span class="quotelev1">&gt;    etc...
</span><br>
<span class="quotelev1">&gt;         but error messages appeas:
</span><br>
<span class="quotelev1">&gt;         $ mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    [[32727,1],1]: A high-performance Open MPI point-to-point
</span><br>
<span class="quotelev1">&gt;    messaging module
</span><br>
<span class="quotelev1">&gt;    was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;    Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;      Host: localhost.localdomain
</span><br>
<span class="quotelev1">&gt;    Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt;    lower performance.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev1">&gt;    Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev1">&gt;    [localhost.localdomain:30503] 7 more processes have sent help
</span><br>
<span class="quotelev1">&gt;    message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt;    [localhost.localdomain:30503] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;    &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;         i am wondering whether i install openmpi the right way
</span><br>
<span class="quotelev1">&gt;    anyone would give some suggestions?
</span><br>
<span class="quotelev1">&gt;         thanks in advance.
</span><br>
<span class="quotelev1">&gt;         Best Regards.
</span><br>
<span class="quotelev1">&gt;    --     Daofeng Li
</span><br>
<span class="quotelev1">&gt;    College of Biological Science
</span><br>
<span class="quotelev1">&gt;    China Agricultural University
</span><br>
<span class="quotelev1">&gt;    Beijing
</span><br>
<span class="quotelev1">&gt;    China
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14998.php">Tim Prince: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14996.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
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
