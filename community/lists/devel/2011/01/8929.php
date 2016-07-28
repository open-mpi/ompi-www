<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 04:32:35 2011" -->
<!-- isoreceived="20110126093235" -->
<!-- sent="Wed, 26 Jan 2011 10:32:29 +0100" -->
<!-- isosent="20110126093229" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="AANLkTikS3sQ3AriOJSikWyDac95QwVAU8ZEr+Ker0sPc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA2CB89F-0D79-41E5-91DC-614673515DCA_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 04:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8928.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh.
<br>
<p>I've already check te prelink and is set to &quot;no&quot;.
<br>
<p>I'm going to try with the trunk head, and then i'll let you know how it
<br>
goes.
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p>2011/1/25 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Can you try with the current trunk head (r24296)?
</span><br>
<span class="quotelev1">&gt; I just committed a fix for the C/R functionality in which restarts were
</span><br>
<span class="quotelev1">&gt; getting stuck. This will likely affect the migration functionality, but I
</span><br>
<span class="quotelev1">&gt; have not had an opportunity to test just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another thing to check is that prelink is turned off on all of your
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;  <a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if the problem persists, and I'll dig into a bit more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2011, at 11:37 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello @ll
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've got a problem when i try to use the ompi-migrate command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What i'm doing is execute for example the next application in one node of
</span><br>
<span class="quotelev1">&gt; a cluster (both process wil run on the same node):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -am ft-enable-cr ./whoami 10 10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then in the same node i try to migrate the processes to another node:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi-migrate -x node9 -t node3 14914
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And then i get this message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]
</span><br>
<span class="quotelev2">&gt; &gt; [clus9:15620] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I assume that maybe there is something wrong with the thread level, but i
</span><br>
<span class="quotelev1">&gt; have configured the open-mpi like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread
</span><br>
<span class="quotelev1">&gt; --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The checkpoint and restart works fine, but when i restore an application
</span><br>
<span class="quotelev1">&gt; that has more than one process, this one is restored and executed until the
</span><br>
<span class="quotelev1">&gt; last line before MPI_FINALIZE(), but the processes never finalize, i assume
</span><br>
<span class="quotelev1">&gt; that they never call the MPI_FINALIZE(), but with one process
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint and ompi-restart work great.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8928.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8930.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
