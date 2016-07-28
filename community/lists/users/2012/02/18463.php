<?
$subject_val = "Re: [OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 16:02:35 2012" -->
<!-- isoreceived="20120214210235" -->
<!-- sent="Wed, 15 Feb 2012 00:02:31 +0300" -->
<!-- isosent="20120214210231" -->
<!-- name="Tohiko Looka" -->
<!-- email="tohiko.looka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange OpenMPI messages" -->
<!-- id="CALd0-52uvb3BShYZO9Nzs463=bdw79B=6=D0B4foqq2ZsHtqpw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC3593BC-BD7F-4CA6-882C-58C84AD6C458_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-14 16:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18464.php">Tohiko Looka: "[OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18462.php">George Bosilca: "[OMPI users] EuroMPI 2012 CALL FOR PAPERS"</a>
<li><strong>In reply to:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the noob question, but how do I check my network type and if OFED
<br>
service is running correctly or not? And how do I run it
<br>
<p>Thank you,
<br>
<p>On Tue, Feb 14, 2012 at 2:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you have an OpenFabrics-based network?  (e.g., InfiniBand or iWarp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, this error message usually means that OFED is either installed
</span><br>
<span class="quotelev1">&gt; incorrectly, or is not running properly (e.g., its services didn't get
</span><br>
<span class="quotelev1">&gt; started properly upon boot).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't have an OpenFabrics-based network, then it usually means that
</span><br>
<span class="quotelev1">&gt; you have OpenFabrics services running when you really shouldn't (because
</span><br>
<span class="quotelev1">&gt; you don't have any OpenFabrics-based devices).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2012, at 4:48 AM, Tohiko Looka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Until today I was running my openmpi applications with no errors/warnings
</span><br>
<span class="quotelev2">&gt; &gt; Today I restarted my computer (possibly after an automatic openmpi
</span><br>
<span class="quotelev1">&gt; update) and got these warnings when
</span><br>
<span class="quotelev2">&gt; &gt; running my program
</span><br>
<span class="quotelev2">&gt; &gt; [tohiko_at_kw12614 1d]$ mpirun -x LD_LIBRARY_PATH -hostfile hosts -np 10
</span><br>
<span class="quotelev1">&gt; hello
</span><br>
<span class="quotelev2">&gt; &gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt; &gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt; &gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [[21652,1],0]: A high-performance Open MPI point-to-point messaging
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev2">&gt; &gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt; &gt;   Host: kw12614
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt; &gt; lower performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [kw12614:03195] 10 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt; &gt; [kw12614:03195] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this normal? And how come it happened now?
</span><br>
<span class="quotelev2">&gt; &gt; -- Tohiko
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18464.php">Tohiko Looka: "[OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18462.php">George Bosilca: "[OMPI users] EuroMPI 2012 CALL FOR PAPERS"</a>
<li><strong>In reply to:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18465.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
