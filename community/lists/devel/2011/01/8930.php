<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 08:40:21 2011" -->
<!-- isoreceived="20110126134021" -->
<!-- sent="Wed, 26 Jan 2011 14:40:13 +0100" -->
<!-- isosent="20110126134013" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="AANLkTinaAePmd=v1741BzAv7nZZmPP08WVjyY94yRUNt_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikS3sQ3AriOJSikWyDac95QwVAU8ZEr+Ker0sPc_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-01-26 08:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh.
<br>
<p>The ompi-checkpoint with his restart now are working great, but the same
<br>
error persist with ompi-migrate. I've also tried using &quot;-r&quot;, but i get the
<br>
same error.
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p>2011/1/26 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thanks Josh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've already check te prelink and is set to &quot;no&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to try with the trunk head, and then i'll let you know how it
</span><br>
<span class="quotelev1">&gt; goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/1/25 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try with the current trunk head (r24296)?
</span><br>
<span class="quotelev2">&gt;&gt; I just committed a fix for the C/R functionality in which restarts were
</span><br>
<span class="quotelev2">&gt;&gt; getting stuck. This will likely affect the migration functionality, but I
</span><br>
<span class="quotelev2">&gt;&gt; have not had an opportunity to test just yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another thing to check is that prelink is turned off on all of your
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if the problem persists, and I'll dig into a bit more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2011, at 11:37 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello @ll
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've got a problem when i try to use the ompi-migrate command.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What i'm doing is execute for example the next application in one node
</span><br>
<span class="quotelev2">&gt;&gt; of a cluster (both process wil run on the same node):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 2 -am ft-enable-cr ./whoami 10 10
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Then in the same node i try to migrate the processes to another node:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi-migrate -x node9 -t node3 14914
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And then i get this message:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:15620] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I assume that maybe there is something wrong with the thread level, but
</span><br>
<span class="quotelev2">&gt;&gt; i have configured the open-mpi like this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread
</span><br>
<span class="quotelev2">&gt;&gt; --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The checkpoint and restart works fine, but when i restore an application
</span><br>
<span class="quotelev2">&gt;&gt; that has more than one process, this one is restored and executed until the
</span><br>
<span class="quotelev2">&gt;&gt; last line before MPI_FINALIZE(), but the processes never finalize, i assume
</span><br>
<span class="quotelev2">&gt;&gt; that they never call the MPI_FINALIZE(), but with one process
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint and ompi-restart work great.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
