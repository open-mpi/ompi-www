<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 16:03:33 2009" -->
<!-- isoreceived="20090611200333" -->
<!-- sent="Thu, 11 Jun 2009 22:05:00 +0200" -->
<!-- isosent="20090611200500" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="4A31636C.2070501_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA08D3DC-7730-421E-A25E-068F8A093BA9_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 16:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9610.php">Nick Collier: "[OMPI users] Intermittent corruption"</a>
<li><strong>Previous message:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops. Here's the trace using the BTL.
<br>
<p>Francois
<br>
<p>Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; By specifying --mca pml cm, both traces are using the MTL. To use the 
</span><br>
<span class="quotelev1">&gt; BTL, try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --mca btl mx,sm,self -machinefile ./joe -np 2 ./concurrent_ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or simply:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -machinefile ./joe -np 2 ./concurrent_ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<p><p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9609/backtrace_btl.log">backtrace_btl.log</a>
</ul>
<!-- attachment="backtrace_btl.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9610.php">Nick Collier: "[OMPI users] Intermittent corruption"</a>
<li><strong>Previous message:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9608.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
