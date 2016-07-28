<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 02:08:49 2015" -->
<!-- isoreceived="20151006060849" -->
<!-- sent="Tue, 6 Oct 2015 15:08:45 +0900" -->
<!-- isosent="20151006060845" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user program" -->
<!-- id="CAAkFZ5shc+Fn3O2t8XW-PfQSJdWoPjSoBQC=YYLivpSG5wg=FA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1967424425.108084.1443924742940.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trace the openmpi internal function calls in MPI user program<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 02:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
at first, you can check the priorities of the various coll modules
<br>
with ompi_info
<br>
<p>$ ompi_info --all | grep \&quot;coll_ | grep priority
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_basic_priority&quot; (current
<br>
value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_inter_priority&quot; (current
<br>
value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_libnbc_priority&quot; (current
<br>
value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_ml_priority&quot; (current value:
<br>
&quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_self_priority&quot; (current
<br>
value: &quot;75&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
<br>
&quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_tuned_priority&quot; (current
<br>
value: &quot;30&quot;, data source: default, level: 6 tuner/all, type: int)
<br>
<p><p>coll_tuned_priority likely the collective module you will be using.
<br>
then you can check the various ompi_coll_tuned_*_intra_dec_fixed functions in
<br>
ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
<br>
this is how the tuned collective module selects algorithms based on
<br>
communicator size and message size.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sun, Oct 4, 2015 at 11:12 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks, Jeff. I am trying to understand in detail how Open MPI works in the
</span><br>
<span class="quotelev1">&gt; run time. What main functions does it call to select and initialize the coll
</span><br>
<span class="quotelev1">&gt; components? Using the &quot;helloworld&quot; as an example,  how does it select and
</span><br>
<span class="quotelev1">&gt; initialize the MPI_Barrier algorithm?  which C functions are involved and
</span><br>
<span class="quotelev1">&gt; used in the process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dahai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to trace open mpi internal function calls in a MPI user
</span><br>
<span class="quotelev2">&gt;&gt; program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, not easily -- other than using a debugger, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, can any one explain it with an example? such as helloworld?  I
</span><br>
<span class="quotelev2">&gt;&gt; build open MPI with the VampirTrace options, and compile the following
</span><br>
<span class="quotelev2">&gt;&gt; program with picc-vt,. but I didn't get any tracing info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is a giant state machine -- MPI_INIT, for example, invokes slightly
</span><br>
<span class="quotelev1">&gt; fewer than a bazillion functions (e.g., it initializes every framework and
</span><br>
<span class="quotelev1">&gt; many components/plugins).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something in particular that you're looking for / want to know
</span><br>
<span class="quotelev1">&gt; about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D. G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18138.php">http://www.open-mpi.org/community/lists/devel/2015/10/18138.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18140.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
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
