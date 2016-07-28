<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 17:53:39 2011" -->
<!-- isoreceived="20110125225339" -->
<!-- sent="Tue, 25 Jan 2011 17:53:32 -0500" -->
<!-- isosent="20110125225332" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="EA2CB89F-0D79-41E5-91DC-614673515DCA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikxFz1EvU=RM=ZRnft_rp=wK8RZj_6YPhksuEmu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI-MIGRATE error<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 17:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8917.php">Hugo Meyer: "[OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try with the current trunk head (r24296)?
<br>
I just committed a fix for the C/R functionality in which restarts were getting stuck. This will likely affect the migration functionality, but I have not had an opportunity to test just yet.
<br>
<p>Another thing to check is that prelink is turned off on all of your machines.
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>Let me know if the problem persists, and I'll dig into a bit more.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Jan 24, 2011, at 11:37 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello @ll
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got a problem when i try to use the ompi-migrate command.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What i'm doing is execute for example the next application in one node of a cluster (both process wil run on the same node):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr ./whoami 10 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then in the same node i try to migrate the processes to another node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi-migrate -x node9 -t node3 14914
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then i get this message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [clus9:15620] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [clus9:15620] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [clus9:15620] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [clus9:15620] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]
</span><br>
<span class="quotelev1">&gt; [clus9:15620] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that maybe there is something wrong with the thread level, but i have configured the open-mpi like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/ --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/ --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The checkpoint and restart works fine, but when i restore an application that has more than one process, this one is restored and executed until the last line before MPI_FINALIZE(), but the processes never finalize, i assume that they never call the MPI_FINALIZE(), but with one process ompi-checkpoint and ompi-restart work great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8917.php">Hugo Meyer: "[OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
