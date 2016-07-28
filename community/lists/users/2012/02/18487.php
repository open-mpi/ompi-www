<?
$subject_val = "Re: [OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 12:53:20 2012" -->
<!-- isoreceived="20120215175320" -->
<!-- sent="Wed, 15 Feb 2012 20:53:15 +0300" -->
<!-- isosent="20120215175315" -->
<!-- name="Tohiko Looka" -->
<!-- email="tohiko.looka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange OpenMPI messages" -->
<!-- id="CALd0-53arU1Cdai9=Wiw=odL9N8Mj3OkSyJ-h2p_H0z=XD-5Pw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1BD57395-F81D-4813-BCF7-E3BF15B40E86_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange OpenMPI messages<br>
<strong>From:</strong> Tohiko Looka (<em>tohiko.looka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 12:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo,
<br>
<p>I will definitely try to compile OpenMPI myself and see if the problem
<br>
persist
<br>
Regarding your note on homogeneous nodes; I tried to do that as much as
<br>
possible.
<br>
But I had no control over two nodes and each of them had different setup.
<br>
As Jeff suggested, using .bashrc seems to solve the issue
<br>
<p>Thanks
<br>
<p>On Wed, Feb 15, 2012 at 6:52 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tohiko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you compiled Open MPI in a computer with IB hardware,
</span><br>
<span class="quotelev1">&gt; then copied the installation tree to another machine,
</span><br>
<span class="quotelev1">&gt; or if you installed from an RPM or other package generated in a
</span><br>
<span class="quotelev1">&gt; machine with IB, your OpenMPI will have IB enabled,  I think, even if the
</span><br>
<span class="quotelev1">&gt; machine where it is running does not have IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a matter of taste, but here is what I think,
</span><br>
<span class="quotelev1">&gt; regarding a previous question you sent.
</span><br>
<span class="quotelev1">&gt; I would rather compile open MPI from source, in the machine[s] where it
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; run, and install it with the same path on all machines {or in a single NFS
</span><br>
<span class="quotelev1">&gt; shared directory},
</span><br>
<span class="quotelev1">&gt; to make things simpler.
</span><br>
<span class="quotelev1">&gt; I would use the most homogeneous set of machines possible,  to avoid too
</span><br>
<span class="quotelev1">&gt; many headaches.
</span><br>
<span class="quotelev1">&gt; I.e. use the least common denominator, so to speak.
</span><br>
<span class="quotelev1">&gt; Say, everything x86_64, all with Ethernet only [or all with IB + Ethernet,
</span><br>
<span class="quotelev1">&gt; but you
</span><br>
<span class="quotelev1">&gt; don't seem to have IB, at least not on all machines].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2012, at 1:27 AM, Tohiko Looka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mm... This is really strange
</span><br>
<span class="quotelev2">&gt; &gt; I don't have that service and there is no ib* output in 'ifconfig -a' or
</span><br>
<span class="quotelev1">&gt; 'Infinband' in 'lspci'
</span><br>
<span class="quotelev2">&gt; &gt; Which makes me believe that I don't have such a network. I also checked
</span><br>
<span class="quotelev1">&gt; on an identical computer on the same network with the same results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What's strange is that these messages didn't use to show up and they
</span><br>
<span class="quotelev1">&gt; don't show up on that identical computer; only on mine. Even though both
</span><br>
<span class="quotelev1">&gt; computers have the same hardware, openMPI version and on the same network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I can safely ignore these warnings and run on Ethernet, but it
</span><br>
<span class="quotelev1">&gt; would be nice to know what happened there, in case anybody has an idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 15, 2012 at 12:52 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Tohiko
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenFabrics network a.k.a. Infiniband a.k.a. IB.
</span><br>
<span class="quotelev2">&gt; &gt; To check if the compute nodes have IB interfaces, try:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lspci [and search the output for Infinband]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To see if the IB interface is configured try:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ifconfig -a  [and search the output for ib0, ib1, or similar]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To check if the OFED module is up try:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 'service openibd status'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As an alternative, you could also try to run your program over Ethernet,
</span><br>
<span class="quotelev1">&gt; avoiding Infinband,
</span><br>
<span class="quotelev2">&gt; &gt; in case you don't have IB or if somehow it is broken.
</span><br>
<span class="quotelev2">&gt; &gt; It is slower than Infiniband, though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -mca btl tcp,sm,self -np 4 ./my_mpi_program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 14, 2012, at 4:02 PM, Tohiko Looka wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry for the noob question, but how do I check my network type and if
</span><br>
<span class="quotelev1">&gt; OFED service is running correctly or not? And how do I run it
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, Feb 14, 2012 at 2:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you have an OpenFabrics-based network?  (e.g., InfiniBand or iWarp)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If so, this error message usually means that OFED is either installed
</span><br>
<span class="quotelev1">&gt; incorrectly, or is not running properly (e.g., its services didn't get
</span><br>
<span class="quotelev1">&gt; started properly upon boot).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you don't have an OpenFabrics-based network, then it usually means
</span><br>
<span class="quotelev1">&gt; that you have OpenFabrics services running when you really shouldn't
</span><br>
<span class="quotelev1">&gt; (because you don't have any OpenFabrics-based devices).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 14, 2012, at 4:48 AM, Tohiko Looka wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Greetings,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Until today I was running my openmpi applications with no
</span><br>
<span class="quotelev1">&gt; errors/warnings
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Today I restarted my computer (possibly after an automatic openmpi
</span><br>
<span class="quotelev1">&gt; update) and got these warnings when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; running my program
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [tohiko_at_kw12614 1d]$ mpirun -x LD_LIBRARY_PATH -hostfile hosts -np
</span><br>
<span class="quotelev1">&gt; 10 hello
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [[21652,1],0]: A high-performance Open MPI point-to-point messaging
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Host: kw12614
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; lower performance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [kw12614:03195] 10 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [kw12614:03195] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is this normal? And how come it happened now?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -- Tohiko
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
