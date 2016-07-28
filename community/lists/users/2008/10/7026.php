<?
$subject_val = "Re: [OMPI users] --mca btl_openib_if_include";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 18 07:48:35 2008" -->
<!-- isoreceived="20081018114835" -->
<!-- sent="Sat, 18 Oct 2008 07:48:29 -0400" -->
<!-- isosent="20081018114829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --mca btl_openib_if_include" -->
<!-- id="C8F51E19-897C-4D0E-9DB0-19BAA2D39229_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0810161806180.13210_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-18 07:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="7025.php">Allen Barnett: "[OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7006.php">Mostyn Lewis: "[OMPI users] --mca btl_openib_if_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2008, at 9:10 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI says for a:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /tools/openmpi/1.4a1r19757_svn/connectx/gcc64/4.1.2/ 
</span><br>
<span class="quotelev1">&gt; openib/rh_EL_4/x86_64/xeon -x LD_LIBRARY_PATH --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_verbose 1 --mca btl openib,self --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include &quot;mlx4_0:1,mlx4_1:1&quot; -np 4 -machinefile  
</span><br>
<span class="quotelev1">&gt; dhosts ./IMB-MPI1.openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: One or more nonexistent OpenFabrics devices/ports were
</span><br>
<span class="quotelev1">&gt; specified:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Host:                 r4450_3
</span><br>
<span class="quotelev1">&gt;  MCA parameter:        mca_btl_if_include
</span><br>
<span class="quotelev1">&gt;  Nonexistent entities: &quot;mlx4_0:1,mlx4_1:1&quot;
</span><br>
<p>I'm unable to replicate this problem.  There might be some kind of bug  
<br>
in the if_include parsing code, I guess, but I can't make it happen on  
<br>
my machines.  Can you dig into this code a bit?
<br>
<p>The code in question is in ompi/mca/btl/openib/ 
<br>
btl_openib_component.c:get_port_list().  The general scheme of that  
<br>
routine is as follows:
<br>
<p>- mca_btl_openib_component.if_list is an argv-style array of the items  
<br>
listed in btl_openib_if_include.
<br>
- we call get_port_list() for each device that is found
<br>
- we compare each item in .if_list to the device name and  
<br>
device_name:port combination to see if it matches
<br>
- if we match, we include/exclude the device or port
<br>
- we then remove the entry from the .if_list
<br>
<p>Later, if there are any entries left in .if_list (_component.c:2257),  
<br>
then we didn't find them and issue the warning.
<br>
<p>Can dig into why items are being left on the .if_list?
<br>
<p>One thing I will mention; it looks like the help message may be a  
<br>
little ambiguous -- the ports aren't necessarily nonexistent, they  
<br>
could also be non-ACTIVE.  From your ibstatus output, it doesn't look  
<br>
like this is the case, though (I assume the ibstatus output you showed  
<br>
was from the r4450_3 host, right?).
<br>
<p>I'll go update that help message to be a bit more clear.
<br>
<p>FWIW, OMPI should normally silently ignore the DOWN ports and just run  
<br>
over the ACTIVE ports if you don't specify an _if_include list.  But  
<br>
regardless, it would be good to solve this issue -- it's a bit  
<br>
troubling that you appear to be specifying ACTIVE ports and OMPI still  
<br>
issues a warning.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="7025.php">Allen Barnett: "[OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7006.php">Mostyn Lewis: "[OMPI users] --mca btl_openib_if_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
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
