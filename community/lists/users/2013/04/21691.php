<?
$subject_val = "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 15:19:03 2013" -->
<!-- isoreceived="20130405191903" -->
<!-- sent="Fri, 05 Apr 2013 15:18:50 -0400" -->
<!-- isosent="20130405191850" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout" -->
<!-- id="515F239A.5070603_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="515F0286.9030900_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 15:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I have attached a very small example which raise the assertion.
<br>
<p>The problem is arising from a process which does not have any element to 
<br>
write in the file (and then in the MPI_File_set_view)...
<br>
<p>You can see this &quot;bug&quot; with openmpi 1.6.3, 1.6.4 and 1.7.0 configured with:
<br>
<p>./configure --enable-mem-debug --enable-mem-profile --enable-memchecker
<br>
&nbsp;&nbsp;--with-mpi-param-check --enable-debug
<br>
<p>Just compile the given example (idx_null.cc) as-is with
<br>
<p>mpicxx -o idx_null idx_null.cc
<br>
<p>and run with 3 processes:
<br>
<p>mpirun -n 3 idx_null
<br>
<p>You can modify the example by commenting &quot;#define WITH_ZERO_ELEMNT_BUG&quot; 
<br>
to see that everything is going well when all processes have something 
<br>
to write.
<br>
<p>There is no &quot;bug&quot; if you use openmpi 1.6.3 (and higher) without the 
<br>
debugging options.
<br>
<p>Also, all is working well with mpich-3.0.3 configured with:
<br>
<p>./configure --enable-g=yes
<br>
<p><p>So, is this a wrong &quot;assert&quot; in openmpi?
<br>
<p>Is there a real problem to use this code in a &quot;release&quot; mode?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>On 04/05/2013 12:57 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a well working (large) code which is using openmpi 1.6.3 (see
</span><br>
<span class="quotelev1">&gt; config.log here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I have used it for reading with MPI I/O with success over 1500 procs
</span><br>
<span class="quotelev1">&gt; with very large files)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I use openmpi compiled with &quot;debug&quot; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mem-debug --enable-mem-profile --enable-memchecker
</span><br>
<span class="quotelev1">&gt; --with-mpi-param-check --enable-debug --prefix=/opt/openmpi-1.6.3_debug
</span><br>
<span class="quotelev1">&gt; (se other config.log here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug</a>) the code
</span><br>
<span class="quotelev1">&gt; is aborting with an assertion on a very small example on 2 processors.
</span><br>
<span class="quotelev1">&gt; (the same very small example is working well without the debug mode)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the assertion causing an abort:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.3/opal/datatype/opal_datatype.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline int32_t
</span><br>
<span class="quotelev1">&gt; opal_datatype_is_contiguous_memory_layout( const opal_datatype_t*
</span><br>
<span class="quotelev1">&gt; datatype, int32_t count )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      if( !(datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_CONTIGUOUS) ) return 0;
</span><br>
<span class="quotelev1">&gt;      if( (count == 1) || (datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_NO_GAPS)
</span><br>
<span class="quotelev1">&gt; ) return 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* This is the assertion:  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      assert( (OPAL_PTRDIFF_TYPE)datatype-&gt;size != (datatype-&gt;ub -
</span><br>
<span class="quotelev1">&gt; datatype-&gt;lb) );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone can tell me what does this mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It happens while writing a file with MPI I/O when I am calling for the
</span><br>
<span class="quotelev1">&gt; fourth time a &quot;MPI_File_set_view&quot;... with different types of
</span><br>
<span class="quotelev1">&gt; MPI_Datatype created with &quot;MPI_Type_indexed&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to reproduce the bug with a very small example to be send
</span><br>
<span class="quotelev1">&gt; here, but if anyone has a hint to give me...
</span><br>
<span class="quotelev1">&gt; (I would like: this assert is not good! just ignore it ;-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21691/idx_null.cc">idx_null.cc</a>
</ul>
<!-- attachment="idx_null.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21692.php">Siegmar Gross: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
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
