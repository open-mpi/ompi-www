<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 27 07:09:02 2006" -->
<!-- isoreceived="20060927110902" -->
<!-- sent="Wed, 27 Sep 2006 06:08:49 -0500" -->
<!-- isosent="20060927110849" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some possible bugs" -->
<!-- id="451A5BC1.7050302_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C13F1B7B.28721%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-27 07:08:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Ralph H Castain: "[OMPI devel] ORTE Tutorial Materials"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>In reply to:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>do you have an example for the extended collective operations tests 
<br>
which fail? It would help track down the problem. I had a quick look at 
<br>
our implementation but I can not find an obvious problem, so an example 
<br>
would be extremely helpful.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev2">&gt;&gt;  - Some extended collective communications failed (not by raising
</span><br>
<span class="quotelev2">&gt;&gt;    errors, but instead aborting tracing to stdout) when using
</span><br>
<span class="quotelev2">&gt;&gt;    intercommunicators. Sometimes, the problems appeared when
</span><br>
<span class="quotelev2">&gt;&gt;    size(local_group) != size(remote_group). However, MPI_Barrier and
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Bcast worked well. I still could not get the reasons for those
</span><br>
<span class="quotelev2">&gt;&gt;    failures. I've found a similar problem in MPICH2 when configured
</span><br>
<span class="quotelev2">&gt;&gt;    with error-cheking enabled (they had a bug in some error-cheking
</span><br>
<span class="quotelev2">&gt;&gt;    macros, I reported this issue and next they told me I was right).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Ralph H Castain: "[OMPI devel] ORTE Tutorial Materials"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>In reply to:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
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
