<?
$subject_val = "Re: [OMPI users] Multi-rail support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 10:31:48 2010" -->
<!-- isoreceived="20100325143148" -->
<!-- sent="Thu, 25 Mar 2010 10:31:42 -0400" -->
<!-- isosent="20100325143142" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-rail support" -->
<!-- id="4BAB73CE.2020804_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="92daa7bf1003250641j41efe103r473bd89bf524cded_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-rail support<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 10:31:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12434.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12432.php">luyang dong: "[OMPI users] process migration on openmpi"</a>
<li><strong>In reply to:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to ensure your cluster has some type of TCP connectivity.  That 
<br>
can be via a non-IB interface if you have that, or configure one of your 
<br>
IB interfaces with IP.  It is needed so the run-time environment can 
<br>
start the job and exchange endpoint information to all the processes. 
<br>
You do not need to configure both IB ports or do IB bonding.
<br>
Rolf
<br>
<p>On 03/25/10 09:41, PN wrote:
<br>
<span class="quotelev1">&gt; A quick question. Do I need to configure different IP for both IB ports 
</span><br>
<span class="quotelev1">&gt; before running mpirun?
</span><br>
<span class="quotelev1">&gt; Or configure an IP and bond both IB ports? Or simply configure one IP 
</span><br>
<span class="quotelev1">&gt; for ib0 is enough?
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/3/25 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Rolf.Vandevaart_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     They will automatically be used by the library.  There is nothing
</span><br>
<span class="quotelev1">&gt;     special that you need to do.  Unfortunately, there is no simple way
</span><br>
<span class="quotelev1">&gt;     to tell if they are being used.  I would suggest that you
</span><br>
<span class="quotelev1">&gt;     specifically call them out in different calls to mpirun to make sure
</span><br>
<span class="quotelev1">&gt;     they are both working.  If they both work individually, then you can
</span><br>
<span class="quotelev1">&gt;     assume they are both being used.  You will only see better
</span><br>
<span class="quotelev1">&gt;     performance with larger messages.  Something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun -mca btl_openib_if_include mlx4_0 a.out
</span><br>
<span class="quotelev1">&gt;     mpirun -mca btl_openib_if_include mlx4_1 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You need to find out your device names from the command ibv_devinfo
</span><br>
<span class="quotelev1">&gt;     or ibv_devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On 03/25/10 05:53, Dmitry Kuzmin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         We have a cluster with 2 HCAs installed on each node (Mellanox
</span><br>
<span class="quotelev1">&gt;         ConnectX IB QDR cards). It's not clear from the documentation
</span><br>
<span class="quotelev1">&gt;         how we could use both of them for MPI communications.
</span><br>
<span class="quotelev1">&gt;         What should we do to enable 2 cards and how we can check that
</span><br>
<span class="quotelev1">&gt;         both are using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thanks in advance!
</span><br>
<span class="quotelev1">&gt;           Dmitry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     =========================
</span><br>
<span class="quotelev1">&gt;     rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     781-442-3043
</span><br>
<span class="quotelev1">&gt;     =========================
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
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; PN Lai
</span><br>
<span class="quotelev1">&gt; Storage Manager / HPC Specialist
</span><br>
<span class="quotelev1">&gt; Galactic Computng Corp.
</span><br>
<span class="quotelev1">&gt; Tel: 86-755-26733939 ext 826
</span><br>
<span class="quotelev1">&gt; Mobile: 86-13823161729 / 852-60333151
</span><br>
<span class="quotelev1">&gt; Fax: 86-755-26733780
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.galactic.com.hk">http://www.galactic.com.hk</a>
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12434.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12432.php">luyang dong: "[OMPI users] process migration on openmpi"</a>
<li><strong>In reply to:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
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
