<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 13 03:26:58 2007" -->
<!-- isoreceived="20070513072658" -->
<!-- sent="Sun, 13 May 2007 09:32:44 +0200" -->
<!-- isosent="20070513073244" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="4646BF1C.7080608_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="601825.31978.qm_at_web33303.mail.mud.yahoo.com" -->
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
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-13 03:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more question with respect to running OpenMPI on my AlphaServers
</span><br>
<span class="quotelev1">&gt; and other PCs in my lab.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version 1.2.1 fails to build on the AlphaServers, but miraculously the
</span><br>
<span class="quotelev1">&gt; nightly snapshot openmpi-1.3a1r14639 works fine. Now, I need to have
</span><br>
<span class="quotelev1">&gt; OpenMPI set up on a production cluster, but openmpi-1.3XXX is under
</span><br>
<span class="quotelev1">&gt; active development.....
</span><br>
<span class="quotelev1">&gt; What is recommended to use in this case for my cluster system?
</span><br>
<span class="quotelev1">&gt; I would prefer that the appropriate fix also be applied to 1.2.x series,
</span><br>
<span class="quotelev1">&gt; so that I can rely on the a stable version ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob.
</span><br>
<span class="quotelev1">&gt; *** &lt;<a href="http://www.open-mpi.org/nightly/v1.2/">http://www.open-mpi.org/nightly/v1.2/</a>&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Be a better Heartthrob. Get better relationship answers
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://us.rd.yahoo.com/evt=48255/*http://answers.yahoo.com/dir/_ylc=X3oDMTI5MGx2aThyBF9TAzIxMTU1MDAzNTIEX3MDMzk2NTQ1MTAzBHNlYwNCQUJwaWxsYXJfTklfMzYwBHNsawNQcm9kdWN0X3F1ZXN0aW9uX3BhZ2U-?link=list&amp;sid=396545433">http://us.rd.yahoo.com/evt=48255/*http://answers.yahoo.com/dir/_ylc=X3oDMTI5MGx2aThyBF9TAzIxMTU1MDAzNTIEX3MDMzk2NTQ1MTAzBHNlYwNCQUJwaWxsYXJfTklfMzYwBHNsawNQcm9kdWN0X3F1ZXN0aW9uX3BhZ2U-?link=list&amp;sid=396545433</a>&gt;from
</span><br>
<span class="quotelev1">&gt; someone who knows.
</span><br>
<span class="quotelev1">&gt; Yahoo! Answers - Check it out.
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
your 1.2.1 build error seems to be the one I bumped into.
<br>
Try to avoid to give an absolute path to CC macro when you run configure
<br>
(check the archives)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
