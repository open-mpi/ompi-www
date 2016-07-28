<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 13 00:44:41 2006" -->
<!-- isoreceived="20061113054441" -->
<!-- sent="Mon, 13 Nov 2006 00:44:22 -0500" -->
<!-- isosent="20061113054422" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()" -->
<!-- id="7E7AA3BF-D185-423F-9B56-E60647EACD22_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061113020032.GA12220_at_hex.inf-ra.uni-jena.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-13 00:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1177.php">Tim Mattox: "[OMPI devel] IU's OMPI services will be down Dec. 19th 2006"</a>
<li><strong>Previous message:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>In reply to:</strong> <a href="1174.php">Andreas Sch&#228;fer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas,
<br>
<p>Thanks for the patch and the example. You're right, we should avoid  
<br>
copying the ref count of the old datatype. The new datatype need a  
<br>
ref count set to one when it get out of the dup function. I will  
<br>
commit the patch to the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 12, 2006, at 9:00 PM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one of our projects recently exposed severe memory leakage when using
</span><br>
<span class="quotelev1">&gt; ROMIO to write a complex derived datatype (a struct made of other
</span><br>
<span class="quotelev1">&gt; structs) to a file. From our code we distilled the attached short
</span><br>
<span class="quotelev1">&gt; program to reproduce the leak.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After some Valgrind sessions, it appears as if the memcpy in
</span><br>
<span class="quotelev1">&gt; ompi_ddt_duplicate() is a bit overhasty, as it does copy the old
</span><br>
<span class="quotelev1">&gt; type's reference counter, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this is the right way to fix it, but if I apply the
</span><br>
<span class="quotelev1">&gt; patch below to ompi the leak is fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.1.1/ompi/datatype/dt_create_dup.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.1-fixed/ompi/datatype/dt_create_dup.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.1.1/ompi/datatype/dt_create_dup.c 2006-06-14
</span><br>
<span class="quotelev1">&gt; 21:56:41.000000000 +0200
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.1.1-fixed/ompi/datatype/dt_create_dup.c   2006-11-13
</span><br>
<span class="quotelev1">&gt; 00:35:03.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev1">&gt;      int32_t old_index = pdt-&gt;d_f_to_c_index;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      memcpy( pdt, oldType, sizeof(ompi_datatype_t) );
</span><br>
<span class="quotelev1">&gt; +    ((opal_object_t *)pdt)-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt;      pdt-&gt;desc.desc = temp;
</span><br>
<span class="quotelev1">&gt;      pdt-&gt;flags &amp;= (~DT_FLAG_PREDEFINED);
</span><br>
<span class="quotelev1">&gt;      /* ompi_ddt_create() creates a new f_to_c index that was saved
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;memleak_fileio.cc&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="1177.php">Tim Mattox: "[OMPI devel] IU's OMPI services will be down Dec. 19th 2006"</a>
<li><strong>Previous message:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>In reply to:</strong> <a href="1174.php">Andreas Sch&#228;fer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
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
