<?
$subject_val = "Re: [OMPI devel] querying Op commutativity for predefined reduction operations.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 13:01:21 2014" -->
<!-- isoreceived="20140421170121" -->
<!-- sent="Mon, 21 Apr 2014 13:01:17 -0400" -->
<!-- isosent="20140421170117" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] querying Op commutativity for predefined reduction operations." -->
<!-- id="5C0780E7-48E1-4D54-8C74-540A824F87F9_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwAbSHzFt4yZPDSk69yOOU=_80nmiRDO8ubCiDbOQLLPGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] querying Op commutativity for predefined reduction operations.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 13:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>In reply to:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report (r31467).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 21, 2014, at 06:05 , Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; IMHO, MPI_Op_commutative() should not fail for predefined reduced operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ompi_info --version
</span><br>
<span class="quotelev1">&gt; Open MPI v1.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat op_commutative.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int flag;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Op_commutative(MPI_SUM,&amp;flag);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc op_commutative.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] *** An error occurred in MPI_Op_commutative
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] *** reported by process [140737157201921,140239272148992]
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:19303] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14561.php">http://www.open-mpi.org/community/lists/devel/2014/04/14561.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14569.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>In reply to:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
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
