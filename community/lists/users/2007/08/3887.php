<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 19:11:36 2007" -->
<!-- isoreceived="20070817231136" -->
<!-- sent="Fri, 17 Aug 2007 20:11:31 -0300" -->
<!-- isosent="20070817231131" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split" -->
<!-- id="e7ba66e40708171611l15fc0261xc04c0aa7b9e6e9b8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9B9ADE22-3649-4428-A108-53408E6B91A2_at_eecs.utk.edu" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 19:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3888.php">Sven Stork: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>In reply to:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/16/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Well, finally someone discovered it :) I know about this problem for
</span><br>
<span class="quotelev1">&gt; quite a while now, it pop up during our own valgrind test of the
</span><br>
<span class="quotelev1">&gt; collective module in Open MPI. However, it never create any problems
</span><br>
<span class="quotelev1">&gt; in the applications, at least not as far as I know. That's why I'm
</span><br>
<span class="quotelev1">&gt; reticent to replace the memcpy by a memmove (where the arguments are
</span><br>
<span class="quotelev1">&gt; allowed to overlap) as there is a performance penalty.
</span><br>
<p>George, I believe I also reported this some time ago, and your
<br>
comments were the same :-).
<br>
<p>No time to dive into the internals, but for my the question is: What's
<br>
going on in Comm::Split() that it falls to copy everlapping memory? It
<br>
is expected, or it is perhaps a bug?
<br>
<p>Regards,
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 9:31 AM, Allen Barnett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi:
</span><br>
<span class="quotelev2">&gt; &gt; I was running my OpenMPI 1.2.3 application under Valgrind and I
</span><br>
<span class="quotelev2">&gt; &gt; observed
</span><br>
<span class="quotelev2">&gt; &gt; this error message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==14322== Source and destination overlap in memcpy(0x41F5BD0,
</span><br>
<span class="quotelev2">&gt; &gt; 0x41F5BD8,
</span><br>
<span class="quotelev2">&gt; &gt; 16)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    at 0x49070AD: memcpy (mc_replace_strmem.c:116)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    by 0x4A45CF4: ompi_ddt_copy_content_same_ddt
</span><br>
<span class="quotelev2">&gt; &gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    by 0x7A6C386: ompi_coll_tuned_allgather_intra_bruck
</span><br>
<span class="quotelev2">&gt; &gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    by 0x4A29FFE: ompi_comm_split
</span><br>
<span class="quotelev2">&gt; &gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    by 0x4A4E322: MPI_Comm_split
</span><br>
<span class="quotelev2">&gt; &gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==14322==    by 0x400A26: main
</span><br>
<span class="quotelev2">&gt; &gt; (in /home/scratch/DMP/severian_tests/ompi/a.out)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached is a reduced code example. I run it like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 3 valgrind ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I only see this error if there are an odd number of processes! I don't
</span><br>
<span class="quotelev2">&gt; &gt; know if this is really a problem or not, though. My OMPI application
</span><br>
<span class="quotelev2">&gt; &gt; seems to work OK. However, the linux man page for memcpy says
</span><br>
<span class="quotelev2">&gt; &gt; overlapping range copying is undefined.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other details: x86_64 (one box, two dual-core opterons), RHEL 4.5,
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI-1.2.3 compiled with the RHEL-supplied GCC 4 (gcc4 (GCC) 4.1.1
</span><br>
<span class="quotelev2">&gt; &gt; 20070105 (Red Hat 4.1.1-53)), valgrind 3.2.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Allen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Allen Barnett
</span><br>
<span class="quotelev2">&gt; &gt; Transpire, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; e-mail: allen_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Ph: 518-887-2930
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;main.c&gt;&lt;info.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3888.php">Sven Stork: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>In reply to:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
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
