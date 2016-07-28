<?
$subject_val = "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 20:34:49 2015" -->
<!-- isoreceived="20151115013449" -->
<!-- sent="Sun, 15 Nov 2015 10:34:45 +0900" -->
<!-- isosent="20151115013445" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster" -->
<!-- id="CAAkFZ5tJ09658EXGnM7By8HsoJb9cWEHQPAORc-POdjkz3FEVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2551E330-EBD2-4AD7-9728-FE0D3012D866_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-14 20:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18372.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>In reply to:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>there is no rdma osc component in v2.x, so I doubt the issue occurs here.
<br>
<p>I will double check this anyway on Monday
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, November 15, 2015, Howard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you check whether you also see this problem with v2.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Von meinem iPhone gesendet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 10.11.2015 um 19:57 schrieb Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a simple MPI_Win_create test hangs on my non uniform cluster
</span><br>
<span class="quotelev1">&gt; (ibm/onesided/c_create)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; one node has an IB card but not the other one.
</span><br>
<span class="quotelev2">&gt; &gt; the node with the IB card select the rdma osc module, but the other node
</span><br>
<span class="quotelev1">&gt; select the pt2pt module.
</span><br>
<span class="quotelev2">&gt; &gt; and then it hangs because both ends do no try to initialize the same
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if i understand correctly, the rdma osc component is selected if at
</span><br>
<span class="quotelev1">&gt; least a rdma capable btl is initialized,
</span><br>
<span class="quotelev2">&gt; &gt; imho, the logic should be :
</span><br>
<span class="quotelev2">&gt; &gt; the rdma osc component is selected for a given communicator if all the
</span><br>
<span class="quotelev1">&gt; btls involved in this communicator
</span><br>
<span class="quotelev2">&gt; &gt; (maybe except the self btl) are rdma capable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can you please have a look at this ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18356.php">http://www.open-mpi.org/community/lists/devel/2015/11/18356.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18370.php">http://www.open-mpi.org/community/lists/devel/2015/11/18370.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18371/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18372.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>In reply to:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
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
