<?
$subject_val = "Re: [OMPI users] error mesages appeared but program runs successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  4 04:47:38 2010" -->
<!-- isoreceived="20101204094738" -->
<!-- sent="Sat, 4 Dec 2010 17:47:31 +0800" -->
<!-- isosent="20101204094731" -->
<!-- name="Daofeng Li" -->
<!-- email="lidaof_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error mesages appeared but program runs successfully?" -->
<!-- id="AANLkTi=CQ2PrfxPHCdtTPH-X0N3Y61T16kr5tvmc6BMd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF9B191.9060101_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Daofeng Li (<em>lidaof_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-04 04:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>In reply to:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>thank you for your response.
<br>
i think this is much about hardware which i know little about them:)
<br>
might be the machine i used dont have the card you mentioned as i run:
<br>
&nbsp;/usr/sbin/ibstat
<br>
ibwarn: [4260] umad_init: can't read ABI version from
<br>
/sys/class/infiniband_mad/abi_version (No such file or directory): is
<br>
ib_umad module loaded?
<br>
ibpanic: [4260] main: can't init UMAD library: (No such file or directory)
<br>
<p>but you really helped me as:
<br>
<p>$ mpirun -mca btl ^openib -n 8 hello_cxx
<br>
Hello, world!  I am 6 of 8
<br>
Hello, world!  I am 0 of 8
<br>
Hello, world!  I am 4 of 8
<br>
Hello, world!  I am 7 of 8
<br>
Hello, world!  I am 5 of 8
<br>
Hello, world!  I am 2 of 8
<br>
Hello, world!  I am 1 of 8
<br>
Hello, world!  I am 3 of 8
<br>
<p>that's really cool~
<br>
<p>thank you all:)
<br>
<p>Best Wishes.
<br>
On Sat, Dec 4, 2010 at 11:12 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Daofeng
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;  actually i didnot understand this....can you or anyone tell me what to
</span><br>
<span class="quotelev2">&gt;&gt; do?
</span><br>
<span class="quotelev2">&gt;&gt;  Thx.
</span><br>
<span class="quotelev2">&gt;&gt;  Best.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 3, 2010 at 9:41 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    It means that you probably have a version mismatch with your
</span><br>
<span class="quotelev2">&gt;&gt;    OpenFabrics drivers and or you have no OpenFabrics hardware and you
</span><br>
<span class="quotelev2">&gt;&gt;    should probably disable those drivers.
</span><br>
<span class="quotelev2">&gt;&gt;    Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;    On Dec 3, 2010, at 4:56 AM, &quot;Daofeng Li&quot; &lt;lidaof_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:lidaof_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Dear list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         i am currently try to use the OpenMPI package
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    i install it at my home directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ./configure --prefix=$HOME --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and the i add the ~/bin to the path and ~/lib to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ld_library_path to my .bashrc file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         everything seems normal as i can run the example programs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -n 8 hello_f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -n 8 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    etc...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         but error messages appeas:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         $ mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [[32727,1],1]: A high-performance Open MPI point-to-point
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    messaging module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Module: OpenFabrics (openib)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Host: localhost.localdomain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [localhost.localdomain:30503] 7 more processes have sent help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [localhost.localdomain:30503] Set MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         i am wondering whether i install openmpi the right way
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    anyone would give some suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --     Daofeng Li
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    College of Biological Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    China Agricultural University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Beijing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    China
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Daofeng Li
</span><br>
<span class="quotelev2">&gt;&gt; College of Biological Science
</span><br>
<span class="quotelev2">&gt;&gt; China Agricultural University
</span><br>
<span class="quotelev2">&gt;&gt; Beijing
</span><br>
<span class="quotelev2">&gt;&gt; China
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Daofeng Li
College of Biological Science
China Agricultural University
Beijing
China
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>In reply to:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
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
