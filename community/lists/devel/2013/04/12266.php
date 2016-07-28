<?
$subject_val = "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  8 09:50:11 2013" -->
<!-- isoreceived="20130408135011" -->
<!-- sent="Mon, 8 Apr 2013 15:50:05 +0200" -->
<!-- isosent="20130408135005" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout" -->
<!-- id="97C824FE-5DEC-44B3-B3A6-715CDE9655F8_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="515F3DCD.4050505_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-08 09:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12262.php">Eric Chamberland: "[OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>Thanks for the report. I used your example to replicate the issue and I confirm it appears in all versions in debug mode. However, the assert in the convertor code is correct and your code as well. The issue is more complex, and it is triggered by a usage of the convertor which should have been prevented.
<br>
<p>If I'm not mistaken, Edgar (CC'ed on this email) is the maintainer of that particular code path. Hopefully, he will be able to fix the code based on the following analysis.
<br>
<p>The underlying issue is that when the convertor is created with no data to convert, it is automatically marked as COMPLETED. Once in this state, no further conversion calls should be made, or they will trigger the issue you encountered. Unfortunately, the code in the OMPIIO doesn't check if there is more data to handle before going into the opal_convertor_raw function (function which as I said above is not supposed to be called on a completed convertor). The function ompi_io_ompio_decode_datatype, assume that there is at least one segment in the file, fact that explain the call to opal_convertor_raw. 
<br>
<p>I modified the ompi_convertor_raw to accept he case where the convertor is already completed and return the same value as opal_convertor_pack/unpack (r28305), so now we have a consistent interface for the convertor. However, this lead to a division with zero in the OMPIIO layer as the number of iovecs returned by opal_convertor_raw is now zero, and this is not handled. I hope Edgar will be able to fix that part.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 5, 2013, at 23:10 , Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Sorry, I have sent this to &quot;users&quot; but I should have sent it to &quot;devel&quot; list instead.  Sorry for the mess...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached a very small example which raise an assertion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is arising from a process which does not have any element to write in a file (and then in the MPI_File_set_view)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see this &quot;bug&quot; with openmpi 1.6.3, 1.6.4 and 1.7.0 configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mem-debug --enable-mem-profile --enable-memchecker
</span><br>
<span class="quotelev1">&gt; --with-mpi-param-check --enable-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just compile the given example (idx_null.cc) as-is with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicxx -o idx_null idx_null.cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and run with 3 processes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 3 idx_null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can modify the example by commenting &quot;#define WITH_ZERO_ELEMNT_BUG&quot; to see that everything is going well when all processes have something to write.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no &quot;bug&quot; if you use openmpi 1.6.3 (and higher) without the debugging options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, all is working well with mpich-3.0.3 configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-g=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, is this a wrong &quot;assert&quot; in openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a real problem to use this example in a &quot;release&quot; mode?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; &lt;idx_null.cc&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12262.php">Eric Chamberland: "[OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
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
