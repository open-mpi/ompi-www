<?
$subject_val = "Re: [OMPI users] error mesages appeared but program runs successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 12 22:14:09 2010" -->
<!-- isoreceived="20101213031409" -->
<!-- sent="Mon, 13 Dec 2010 11:14:01 +0800" -->
<!-- isosent="20101213031401" -->
<!-- name="Daofeng Li" -->
<!-- email="lidaof_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error mesages appeared but program runs successfully?" -->
<!-- id="AANLkTinnB0gtVvY_jQ-2RU9wLY9WAJjm5C3x=eynOOu3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC03F173-4892-469B-8458-BD305B08D17D_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-12-12 22:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus Correa,
<br>
<p>Thank you so much for such a detail explanation:)
<br>
i understand that now.
<br>
<p>Best wishes ^_^
<br>
<p>On Mon, Dec 6, 2010 at 7:41 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Daofeng
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is hard to tell what is happening in the Infiniband side of the problem.
</span><br>
<span class="quotelev1">&gt; Did somebody perhaps remove the Infiniband card from this machine?
</span><br>
<span class="quotelev1">&gt; Was it ever there?
</span><br>
<span class="quotelev1">&gt; Did somebody perhaps changed the Linux kernel modules that are loaded
</span><br>
<span class="quotelev1">&gt; (perhaps changing /etc/module.config or similar)?
</span><br>
<span class="quotelev1">&gt; Maybe other people in your organization know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is a single computer, not a cluster, you don't loose anything by
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; having Infinband.
</span><br>
<span class="quotelev1">&gt; In this case, you can reinstall OpenMPI without Infiniband support, by just
</span><br>
<span class="quotelev1">&gt; doing &quot;make distclean&quot; in the OpenMPI build directory (to cleanup what is
</span><br>
<span class="quotelev1">&gt; there),
</span><br>
<span class="quotelev1">&gt; then &quot;./configure --prefix=/wherever/you/want/to/install --without-openib&quot;,
</span><br>
<span class="quotelev1">&gt; then &quot;make&quot;, and &quot;make install&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you can continue to use what you already have with the &quot;-mca
</span><br>
<span class="quotelev1">&gt; btl ^openib&quot; flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is a cluster, of course you would benefit from Infiniband, which is
</span><br>
<span class="quotelev1">&gt; a faster
</span><br>
<span class="quotelev1">&gt; network than Ethernet or Gigabit Ethernet.
</span><br>
<span class="quotelev1">&gt; In this case you need to ask for help of somebody that knows more about
</span><br>
<span class="quotelev1">&gt; your cluster
</span><br>
<span class="quotelev1">&gt; hardware, to restore the Infiniband to a sane and healthy state.
</span><br>
<span class="quotelev1">&gt; Or, if there is no Infinband hardware, or if it is broken, just reinstall
</span><br>
<span class="quotelev1">&gt; OpenMPi following
</span><br>
<span class="quotelev1">&gt; the little recipe above.  You will be able to run your programs using
</span><br>
<span class="quotelev1">&gt; Ethernet (I assume
</span><br>
<span class="quotelev1">&gt; the cluster would have Ethernet).  Not very fast, but will work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2010, at 4:47 AM, Daofeng Li wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thank you for your response.
</span><br>
<span class="quotelev2">&gt; &gt; i think this is much about hardware which i know little about them:)
</span><br>
<span class="quotelev2">&gt; &gt; might be the machine i used dont have the card you mentioned as i run:
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt; &gt; ibwarn: [4260] umad_init: can't read ABI version from
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_mad/abi_version (No such file or directory): is
</span><br>
<span class="quotelev1">&gt; ib_umad module loaded?
</span><br>
<span class="quotelev2">&gt; &gt; ibpanic: [4260] main: can't init UMAD library: (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but you really helped me as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -mca btl ^openib -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that's really cool~
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thank you all:)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Wishes.
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Dec 4, 2010 at 11:12 AM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Daofeng
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have an Infiniband card in the machine where you are
</span><br>
<span class="quotelev2">&gt; &gt; running the program?
</span><br>
<span class="quotelev2">&gt; &gt; (Open Fabrics / OFED is the software support for Infiniband.
</span><br>
<span class="quotelev2">&gt; &gt; I guess you need the same version installed in all machines.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does the directory referred in the error message actually
</span><br>
<span class="quotelev2">&gt; &gt; exist in your machine (i.e,  /dev/infiniband) ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you running it in the same machine where you installed OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What output do you get from:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt; &gt; ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you compile the programs with the mpicc,mpiCC, mpif77
</span><br>
<span class="quotelev2">&gt; &gt; from the same OpenMPI that you built?
</span><br>
<span class="quotelev2">&gt; &gt; (Some Linux distributions and compilers come with
</span><br>
<span class="quotelev2">&gt; &gt; their own flavors of MPI, or you may also
</span><br>
<span class="quotelev2">&gt; &gt; have installed MPICH or MVAPICH, so it is not uncommon to mix up.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried to suppress the use of Infinband, i.e.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -mca btl ^openib -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Well, &quot;openib&quot; is the OpenMPI support for Infiniband.
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;^&quot; means &quot;don't use it&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Daofeng Li wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;  actually i didnot understand this....can you or anyone tell me what to
</span><br>
<span class="quotelev1">&gt; do?
</span><br>
<span class="quotelev2">&gt; &gt;  Thx.
</span><br>
<span class="quotelev2">&gt; &gt;  Best.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Dec 3, 2010 at 9:41 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    It means that you probably have a version mismatch with your
</span><br>
<span class="quotelev2">&gt; &gt;    OpenFabrics drivers and or you have no OpenFabrics hardware and you
</span><br>
<span class="quotelev2">&gt; &gt;    should probably disable those drivers.
</span><br>
<span class="quotelev2">&gt; &gt;    Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;    On Dec 3, 2010, at 4:56 AM, &quot;Daofeng Li&quot; &lt;lidaof_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;mailto:lidaof_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Dear list,
</span><br>
<span class="quotelev2">&gt; &gt;         i am currently try to use the OpenMPI package
</span><br>
<span class="quotelev2">&gt; &gt;    i install it at my home directory
</span><br>
<span class="quotelev2">&gt; &gt;    ./configure --prefix=$HOME --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt; &gt;    make
</span><br>
<span class="quotelev2">&gt; &gt;    make install
</span><br>
<span class="quotelev2">&gt; &gt;         and the i add the ~/bin to the path and ~/lib to the
</span><br>
<span class="quotelev2">&gt; &gt;    ld_library_path to my .bashrc file
</span><br>
<span class="quotelev2">&gt; &gt;         everything seems normal as i can run the example programs:
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -n 8 hello_f77
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -n 8 hello_c
</span><br>
<span class="quotelev2">&gt; &gt;    etc...
</span><br>
<span class="quotelev2">&gt; &gt;         but error messages appeas:
</span><br>
<span class="quotelev2">&gt; &gt;         $ mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    [[32727,1],1]: A high-performance Open MPI point-to-point
</span><br>
<span class="quotelev2">&gt; &gt;    messaging module
</span><br>
<span class="quotelev2">&gt; &gt;    was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt; &gt;    Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt; &gt;      Host: localhost.localdomain
</span><br>
<span class="quotelev2">&gt; &gt;    Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt; &gt;    lower performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt;    [localhost.localdomain:30503] 7 more processes have sent help
</span><br>
<span class="quotelev2">&gt; &gt;    message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt; &gt;    [localhost.localdomain:30503] Set MCA parameter
</span><br>
<span class="quotelev2">&gt; &gt;    &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;         i am wondering whether i install openmpi the right way
</span><br>
<span class="quotelev2">&gt; &gt;    anyone would give some suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;         thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;         Best Regards.
</span><br>
<span class="quotelev2">&gt; &gt;    --     Daofeng Li
</span><br>
<span class="quotelev2">&gt; &gt;    College of Biological Science
</span><br>
<span class="quotelev2">&gt; &gt;    China Agricultural University
</span><br>
<span class="quotelev2">&gt; &gt;    Beijing
</span><br>
<span class="quotelev2">&gt; &gt;    China
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;    users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;    users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Daofeng Li
</span><br>
<span class="quotelev2">&gt; &gt; College of Biological Science
</span><br>
<span class="quotelev2">&gt; &gt; China Agricultural University
</span><br>
<span class="quotelev2">&gt; &gt; Beijing
</span><br>
<span class="quotelev2">&gt; &gt; China
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Daofeng Li
</span><br>
<span class="quotelev2">&gt; &gt; College of Biological Science
</span><br>
<span class="quotelev2">&gt; &gt; China Agricultural University
</span><br>
<span class="quotelev2">&gt; &gt; Beijing
</span><br>
<span class="quotelev2">&gt; &gt; China
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
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
