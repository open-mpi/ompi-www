<?
$subject_val = "[OMPI users] orte_grpcomm_modex failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 21 07:00:09 2011" -->
<!-- isoreceived="20111021110009" -->
<!-- sent="Fri, 21 Oct 2011 12:00:03 +0100 (BST)" -->
<!-- isosent="20111021110003" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] orte_grpcomm_modex failed" -->
<!-- id="1319194803.14577.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="78E5F008-0695-4FE3-81BC-0A013D864C78_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] orte_grpcomm_modex failed<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-21 07:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Previous message:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Reply:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community,

I have been struggling with this error for quite some time:

It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.&#160; There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or environment
problems.&#160; This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):

&#160; orte_grpcomm_modex failed
&#160; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpirun has exited due to process rank 1 with PID 18945 on
node tik35x.ethz.ch exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).

I am running this on a cluster and this has started happening only after a recent rebuild of openmpi-1.4.3. Interestingly, I have the same version of openmpi on my PC, and the same application works fine.

I have looked into this error on the web, but there is very little discussion, on the causes, or how to correct it. I asked the admin to attempt a re-install of openmpi, but I am not sure whether this will solve the problem.

Can some one please help?

Thanks a lot.

Best,

Devendra Rai

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Previous message:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Reply:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
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
