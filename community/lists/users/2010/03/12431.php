<?
$subject_val = "Re: [OMPI users] Multi-rail support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 09:41:56 2010" -->
<!-- isoreceived="20100325134156" -->
<!-- sent="Thu, 25 Mar 2010 21:41:29 +0800" -->
<!-- isosent="20100325134129" -->
<!-- name="PN" -->
<!-- email="poknam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-rail support" -->
<!-- id="92daa7bf1003250641j41efe103r473bd89bf524cded_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4BAB590F.7010702_at_Sun.COM" -->
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
<strong>From:</strong> PN (<em>poknam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 09:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12432.php">luyang dong: "[OMPI users] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="12430.php">Romaric David: "Re: [OMPI users] mpi.h file is missing in openmpi]"</a>
<li><strong>In reply to:</strong> <a href="12429.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A quick question. Do I need to configure different IP for both IB ports
<br>
before running mpirun?
<br>
Or configure an IP and bond both IB ports? Or simply configure one IP for
<br>
ib0 is enough?
<br>
Thanks a lot.
<br>
<p>PN
<br>
<p><p>2010/3/25 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; They will automatically be used by the library.  There is nothing special
</span><br>
<span class="quotelev1">&gt; that you need to do.  Unfortunately, there is no simple way to tell if they
</span><br>
<span class="quotelev1">&gt; are being used.  I would suggest that you specifically call them out in
</span><br>
<span class="quotelev1">&gt; different calls to mpirun to make sure they are both working.  If they both
</span><br>
<span class="quotelev1">&gt; work individually, then you can assume they are both being used.  You will
</span><br>
<span class="quotelev1">&gt; only see better performance with larger messages.  Something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl_openib_if_include mlx4_0 a.out
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl_openib_if_include mlx4_1 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to find out your device names from the command ibv_devinfo or
</span><br>
<span class="quotelev1">&gt; ibv_devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/25/10 05:53, Dmitry Kuzmin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a cluster with 2 HCAs installed on each node (Mellanox ConnectX IB
</span><br>
<span class="quotelev2">&gt;&gt; QDR cards). It's not clear from the documentation how we could use both of
</span><br>
<span class="quotelev2">&gt;&gt; them for MPI communications.
</span><br>
<span class="quotelev2">&gt;&gt; What should we do to enable 2 cards and how we can check that both are
</span><br>
<span class="quotelev2">&gt;&gt; using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;   Dmitry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
Best Regards,
PN Lai
Storage Manager / HPC Specialist
Galactic Computng Corp.
Tel: 86-755-26733939 ext 826
Mobile: 86-13823161729 / 852-60333151
Fax: 86-755-26733780
URL: <a href="http://www.galactic.com.hk">http://www.galactic.com.hk</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12432.php">luyang dong: "[OMPI users] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="12430.php">Romaric David: "Re: [OMPI users] mpi.h file is missing in openmpi]"</a>
<li><strong>In reply to:</strong> <a href="12429.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
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
