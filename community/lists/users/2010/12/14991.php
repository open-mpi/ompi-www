<?
$subject_val = "Re: [OMPI users] error mesages appeared but program runs successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 20:53:43 2010" -->
<!-- isoreceived="20101204015343" -->
<!-- sent="Sat, 4 Dec 2010 09:53:37 +0800" -->
<!-- isosent="20101204015337" -->
<!-- name="Daofeng Li" -->
<!-- email="lidaof_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error mesages appeared but program runs successfully?" -->
<!-- id="AANLkTim2xRJt0h352fbDGwBwPF+uPDsb6W=ED285c=zD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6CAF7296-D571-4CD3-9909-A86E6E2C2CD3_at_cisco.com" -->
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
<strong>Date:</strong> 2010-12-03 20:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>Previous message:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>Reply:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>actually i didnot understand this....can you or anyone tell me what to do?
<br>
<p>Thx.
<br>
<p>Best.
<br>
<p>On Fri, Dec 3, 2010 at 9:41 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  It means that you probably have a version mismatch with your OpenFabrics
</span><br>
<span class="quotelev1">&gt; drivers and or you have no OpenFabrics hardware and you should probably
</span><br>
<span class="quotelev1">&gt; disable those drivers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2010, at 4:56 AM, &quot;Daofeng Li&quot; &lt;lidaof_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Dear list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am currently try to use the OpenMPI package
</span><br>
<span class="quotelev1">&gt; i install it at my home directory
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the i add the ~/bin to the path and ~/lib to the ld_library_path to my
</span><br>
<span class="quotelev1">&gt; .bashrc file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; everything seems normal as i can run the example programs:
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 hello_f77
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 hello_c
</span><br>
<span class="quotelev1">&gt; etc...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but error messages appeas:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 8 hello_cxx
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[32727,1],1]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: localhost.localdomain
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to open /dev/infiniband/rdma_cm
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 3 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 2 of 8
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:30503] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:30503] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am wondering whether i install openmpi the right way
</span><br>
<span class="quotelev1">&gt; anyone would give some suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards.
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
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14991/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>Previous message:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
<li><strong>Reply:</strong> <a href="14992.php">Gus Correa: "Re: [OMPI users] error mesages appeared but program runs	successfully?"</a>
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
