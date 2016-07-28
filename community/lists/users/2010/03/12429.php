<?
$subject_val = "Re: [OMPI users] Multi-rail support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 08:37:41 2010" -->
<!-- isoreceived="20100325123741" -->
<!-- sent="Thu, 25 Mar 2010 08:37:35 -0400" -->
<!-- isosent="20100325123735" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-rail support" -->
<!-- id="4BAB590F.7010702_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b46abf721003250253t13363a19vc7eafe9345073bf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-25 08:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12430.php">Romaric David: "Re: [OMPI users] mpi.h file is missing in openmpi]"</a>
<li><strong>Previous message:</strong> <a href="12428.php">Reuti: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>In reply to:</strong> <a href="12425.php">Dmitry Kuzmin: "[OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They will automatically be used by the library.  There is nothing 
<br>
special that you need to do.  Unfortunately, there is no simple way to 
<br>
tell if they are being used.  I would suggest that you specifically call 
<br>
them out in different calls to mpirun to make sure they are both 
<br>
working.  If they both work individually, then you can assume they are 
<br>
both being used.  You will only see better performance with larger 
<br>
messages.  Something like this:
<br>
<p>mpirun -mca btl_openib_if_include mlx4_0 a.out
<br>
mpirun -mca btl_openib_if_include mlx4_1 a.out
<br>
<p>You need to find out your device names from the command ibv_devinfo or 
<br>
ibv_devices.
<br>
<p>Rolf
<br>
<p>On 03/25/10 05:53, Dmitry Kuzmin wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a cluster with 2 HCAs installed on each node (Mellanox ConnectX 
</span><br>
<span class="quotelev1">&gt; IB QDR cards). It's not clear from the documentation how we could use 
</span><br>
<span class="quotelev1">&gt; both of them for MPI communications.
</span><br>
<span class="quotelev1">&gt; What should we do to enable 2 cards and how we can check that both are 
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt;    Dmitry
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
<li><strong>Next message:</strong> <a href="12430.php">Romaric David: "Re: [OMPI users] mpi.h file is missing in openmpi]"</a>
<li><strong>Previous message:</strong> <a href="12428.php">Reuti: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>In reply to:</strong> <a href="12425.php">Dmitry Kuzmin: "[OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Reply:</strong> <a href="12431.php">PN: "Re: [OMPI users] Multi-rail support"</a>
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
