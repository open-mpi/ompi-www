<?
$subject_val = "Re: [OMPI users] --mca btl_openib_if_include";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 18 21:17:55 2008" -->
<!-- isoreceived="20081019011755" -->
<!-- sent="Sat, 18 Oct 2008 18:17:29 -0700 (PDT)" -->
<!-- isosent="20081019011729" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --mca btl_openib_if_include" -->
<!-- id="Pine.GSO.4.64.0810181815390.66_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8F51E19-897C-4D0E-9DB0-19BAA2D39229_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --mca btl_openib_if_include<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-18 21:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I traced this and it was the quote marks in &quot;mlx4_0:1,mlx4_1:1&quot; - they were
<br>
passed in and caused the mismatch :-(
<br>
<p>Sorry about that.
<br>
<p>Regards,
<br>
DM
<br>
<p>On Sat, 18 Oct 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 16, 2008, at 9:10 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI says for a:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix 
</span><br>
<span class="quotelev2">&gt;&gt; /tools/openmpi/1.4a1r19757_svn/connectx/gcc64/4.1.2/openib/rh_EL_4/x86_64/xeon 
</span><br>
<span class="quotelev2">&gt;&gt; -x LD_LIBRARY_PATH --mca btl_openib_verbose 1 --mca btl openib,self --mca 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include &quot;mlx4_0:1,mlx4_1:1&quot; -np 4 -machinefile dhosts 
</span><br>
<span class="quotelev2">&gt;&gt; ./IMB-MPI1.openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: One or more nonexistent OpenFabrics devices/ports were
</span><br>
<span class="quotelev2">&gt;&gt; specified:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Host:                 r4450_3
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameter:        mca_btl_if_include
</span><br>
<span class="quotelev2">&gt;&gt; Nonexistent entities: &quot;mlx4_0:1,mlx4_1:1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unable to replicate this problem.  There might be some kind of bug in the 
</span><br>
<span class="quotelev1">&gt; if_include parsing code, I guess, but I can't make it happen on my machines. 
</span><br>
<span class="quotelev1">&gt; Can you dig into this code a bit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code in question is in 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:get_port_list().  The general 
</span><br>
<span class="quotelev1">&gt; scheme of that routine is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - mca_btl_openib_component.if_list is an argv-style array of the items listed 
</span><br>
<span class="quotelev1">&gt; in btl_openib_if_include.
</span><br>
<span class="quotelev1">&gt; - we call get_port_list() for each device that is found
</span><br>
<span class="quotelev1">&gt; - we compare each item in .if_list to the device name and device_name:port 
</span><br>
<span class="quotelev1">&gt; combination to see if it matches
</span><br>
<span class="quotelev1">&gt; - if we match, we include/exclude the device or port
</span><br>
<span class="quotelev1">&gt; - we then remove the entry from the .if_list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Later, if there are any entries left in .if_list (_component.c:2257), then we 
</span><br>
<span class="quotelev1">&gt; didn't find them and issue the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can dig into why items are being left on the .if_list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing I will mention; it looks like the help message may be a little 
</span><br>
<span class="quotelev1">&gt; ambiguous -- the ports aren't necessarily nonexistent, they could also be 
</span><br>
<span class="quotelev1">&gt; non-ACTIVE.  From your ibstatus output, it doesn't look like this is the 
</span><br>
<span class="quotelev1">&gt; case, though (I assume the ibstatus output you showed was from the r4450_3 
</span><br>
<span class="quotelev1">&gt; host, right?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll go update that help message to be a bit more clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, OMPI should normally silently ignore the DOWN ports and just run over 
</span><br>
<span class="quotelev1">&gt; the ACTIVE ports if you don't specify an _if_include list.  But regardless, 
</span><br>
<span class="quotelev1">&gt; it would be good to solve this issue -- it's a bit troubling that you appear 
</span><br>
<span class="quotelev1">&gt; to be specifying ACTIVE ports and OMPI still issues a warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
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
