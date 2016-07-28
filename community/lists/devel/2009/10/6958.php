<?
$subject_val = "Re: [OMPI devel] segv in coll tuned";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 09:48:16 2009" -->
<!-- isoreceived="20091012134816" -->
<!-- sent="Mon, 12 Oct 2009 15:48:10 +0200" -->
<!-- isosent="20091012134810" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segv in coll tuned" -->
<!-- id="453d39990910120648w5b656d15mf1775492c67e9bf1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990910120637x57f1f76emb9f6d84c55b2c086_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segv in coll tuned<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 09:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
well, I see that it returnes 0 at this line,
<br>
since base_com_rule-&gt;n_msg_sizes==0
<br>
coll_tuned_dynamic_rules.c +359
<br>
if( (NULL == base_com_rule) || (0 == base_com_rule-&gt;n_msg_sizes)) {
<br>
&nbsp;&nbsp;return (0);
<br>
&nbsp;&nbsp;}
<br>
<p>Sometimes it passes if I tell IMB -npmin 4.
<br>
On Mon, Oct 12, 2009 at 3:37 PM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; not since I started testing it :)
</span><br>
<span class="quotelev1">&gt; it failes somewhere in ompi_coll_tuned_get_target_method_params function, I
</span><br>
<span class="quotelev1">&gt; am taking a look right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 12, 2009 at 3:33 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does that test also pass sometimes?  I am seeing some random set of tests
</span><br>
<span class="quotelev2">&gt;&gt; segv'ing in the SM btl, using a v1.3 derivative.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I experience the following error with current trunk r22090. It also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occures in 1.3 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #~/work/svn/ompi/branches/1.3//build_x86-64/install/bin/mpirun -H witch21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -mca coll_tuned_use_dynamic_rules 1 ./IMB-MPI1 Sometimes it's error,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and sometimes it's segv. It recreates with np&gt;4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch21:26540] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch21:26540] *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch21:26540] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch21:26540] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 26540 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node witch21 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
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
