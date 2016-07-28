<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 07:44:03 2007" -->
<!-- isoreceived="20070821114403" -->
<!-- sent="Tue, 21 Aug 2007 13:43:56 +0200" -->
<!-- isosent="20070821114356" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="[OMPI users] MX/BTL eager_limit/min_send_size" -->
<!-- id="46CACFFC.3020502_at_cs.vu.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-21 07:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
<li><strong>Previous message:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am currently working on a parallel app that shows some
<br>
issues using MX/BTL (not MTL) with the current trunk version
<br>
of OpenMPI.
<br>
<p>Basically, for its communication the app needs to do a lot
<br>
of random &lt;= 8KB MPI_Isend()s which are polled away using
<br>
MPI_Iprobe() and MPI_Recv().  The async send requests are
<br>
put into a ring, currently 64 entries, from which they are
<br>
MPI_Wait()ed.
<br>
<p>The thing is, this works perfectly fine using OpenMPI with
<br>
both TCP and MX/MTL, but given a sufficient number of cpus
<br>
(currently close to 96), the app hangs quite reproducibly at
<br>
some phase when using the trunk's MX/BTL implementation.
<br>
<p>[As an aside, the reason for using the BTL here is that I am
<br>
actually interested in experimenting with the app over multiple
<br>
clusters, in mixed mode MX+TCP, which recently has become
<br>
possible using the BTL.  For that mixed version the issue
<br>
also pops up.]
<br>
<p>As the same issue did not occur with the 1.2 released versions
<br>
of OpenMPI, I started to do some digging with the trunk revisions.
<br>
Since I had no clue where to begin, basically I did a binary
<br>
search of revisions between early 12000 and the most recent one.
<br>
It turned out that the issue started to arise at revision 12931,
<br>
where (amongst others) the mca_btl_mx_module.super.btl_eager_limit
<br>
and mca_btl_mx_module.super.btl_min_send_size were moved to 4K.
<br>
If I change these back to the original values (just below 16K
<br>
and 32K respectively), the problem goes away (in both r12931
<br>
as well as the very recent ones).  Given the max 8K message size
<br>
used, this indeed influences the low-level communication behavior.
<br>
<p>I am sure some OpenMPI developer knows what to do with the above:-)
<br>
If you need more feedback from me, or want me to try alternative
<br>
options or configs, just let me know.
<br>
<p>Regards,
<br>
Kees Verstoep
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3892.php">Sefa Arslan: "[OMPI users] mpi broadcast"</a>
<li><strong>Previous message:</strong> <a href="3890.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
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
