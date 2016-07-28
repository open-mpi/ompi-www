<?
$subject_val = "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 12:31:46 2013" -->
<!-- isoreceived="20130624163146" -->
<!-- sent="Mon, 24 Jun 2013 18:31:39 +0200" -->
<!-- isosent="20130624163139" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup" -->
<!-- id="9389B8AA-52D5-428F-9AD6-DB8571C29ACB_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C847FB.1050905_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 12:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>In reply to:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
<li><strong>Reply:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>I tried your test with the current svn version of the 1.6 (to be 1.6.5 I guess), and your test pass without any issues.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jun 24, 2013, at 15:22 , Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the following code exposes a problem we are experiencing with our OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.6.[24] installations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My colleague Moritz Hanke isolated the problem to an interaction of
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_struct with a previous MPI_Type_dup. When MPI_Type_dup on line
</span><br>
<span class="quotelev1">&gt; 67 of the example is replaced with a straight assignment of MPI_INT to sends[0],
</span><br>
<span class="quotelev1">&gt; the problem goes away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using a patched version of OpenMPI which includes the changes from r28319.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, Thomas Jahns
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev1">&gt; Bundesstra&#223;e 45a
</span><br>
<span class="quotelev1">&gt; D-20146 Hamburg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: +49-40-460094-151
</span><br>
<span class="quotelev1">&gt; Fax: +49-40-460094-270
</span><br>
<span class="quotelev1">&gt; Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_dup.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>In reply to:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
<li><strong>Reply:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
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
