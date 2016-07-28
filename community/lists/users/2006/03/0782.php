<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar  4 14:24:43 2006" -->
<!-- isoreceived="20060304192443" -->
<!-- sent="Sat, 4 Mar 2006 14:24:36 -0500" -->
<!-- isosent="20060304192436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards" -->
<!-- id="C25A7F6B-F27A-4190-8CEE-254E9FCE4BFC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b0ce60610603030607y28a8fcfag24a2cb232f03141a_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-04 14:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Previous message:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Jose Pedro Garcia Mahedero: "[OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2006, at 9:07 AM, Jose Pedro Garcia Mahedero wrote:
<br>
<p><span class="quotelev1">&gt; cluster master machine
</span><br>
<span class="quotelev1">&gt; eth0 mpihosts_out --&gt; for outside use (getting its own ip via dhcp)
</span><br>
<span class="quotelev1">&gt; eth1,  mpihosts_cluster --&gt;  for cluster use (serves ip's to  
</span><br>
<span class="quotelev1">&gt; cluster nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -------  TESTS  1,2  -openmpi-1.0.2a9 ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.- cd openmpi-1.0.1
</span><br>
<span class="quotelev1">&gt; 2.- make clean
</span><br>
<span class="quotelev1">&gt; 3.- cd openmpi-1.0.2a9
</span><br>
<span class="quotelev1">&gt; 4.- ./configure
</span><br>
<span class="quotelev1">&gt; 5.- make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no parameters  /usr/local/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; mpirun -np 2  --hostfile mpihosts_cluster ping_pong
</span><br>
<span class="quotelev1">&gt; mpirun -np 2  --hostfile mpihosts_out ping_pong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GIve the same results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0 (Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x6
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/lib/libopal.so.0 [0x40101cb2]
</span><br>
<span class="quotelev1">&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/local/lib/openmpi/mca_btl_tcp.so [0x404541d6]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/local/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs 
</span><br>
<span class="quotelev1">&gt; +0x149) [0x404502f9]
</span><br>
<p>Yoinks -- whatever we do, we should not be seg faulting.  :-(  It is  
<br>
apparently dying in the mca_btl_tcp_add_procs() function, which is  
<br>
where we're creating MPI networking mappings from one TCP peer to  
<br>
another.
<br>
<p>I am unable to repeat this error (I tried it on a cluster with a  
<br>
similar setup to yours).  Can you recompile the TCP BTL with  
<br>
debugging symbols so that we can get a little more information?
<br>
<p>Do the following:
<br>
<p>cd top_of_your_open_mpi_source_tree
<br>
cd ompi/mca/btl/tcp
<br>
make CFLAGS=-g clean all install
<br>
<p>Then run the test again (you shouldn't need to recompile your  
<br>
application; this just recompiled and re-installed the TCP BTL  
<br>
plugin).  The output stack trace for the mca_btl_tcp stuff should now  
<br>
include line numbers, and tell us exactly where it is dying.  If you  
<br>
get a corefile, can you load that up in gdb and send the output of  
<br>
&quot;bt full&quot;?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Previous message:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Jose Pedro Garcia Mahedero: "[OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
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
