<?
$subject_val = "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 17:20:45 2013" -->
<!-- isoreceived="20130425212045" -->
<!-- sent="Thu, 25 Apr 2013 21:20:34 +0000" -->
<!-- isosent="20130425212034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC44052667_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="515F239A.5070603_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 17:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up for the web archives...
<br>
<p>We fixed this bug off-list.  It will be included in 1.6.5 and (likely) 1.7.2.
<br>
<p><p>On Apr 5, 2013, at 3:18 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached a very small example which raise the assertion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is arising from a process which does not have any element to write in the file (and then in the MPI_File_set_view)...
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
<span class="quotelev1">&gt; Is there a real problem to use this code in a &quot;release&quot; mode?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/05/2013 12:57 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a well working (large) code which is using openmpi 1.6.3 (see
</span><br>
<span class="quotelev2">&gt;&gt; config.log here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug</a>)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (I have used it for reading with MPI I/O with success over 1500 procs
</span><br>
<span class="quotelev2">&gt;&gt; with very large files)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I use openmpi compiled with &quot;debug&quot; options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-mem-debug --enable-mem-profile --enable-memchecker
</span><br>
<span class="quotelev2">&gt;&gt; --with-mpi-param-check --enable-debug --prefix=/opt/openmpi-1.6.3_debug
</span><br>
<span class="quotelev2">&gt;&gt; (se other config.log here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug</a>) the code
</span><br>
<span class="quotelev2">&gt;&gt; is aborting with an assertion on a very small example on 2 processors.
</span><br>
<span class="quotelev2">&gt;&gt; (the same very small example is working well without the debug mode)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the assertion causing an abort:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.6.3/opal/datatype/opal_datatype.h:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static inline int32_t
</span><br>
<span class="quotelev2">&gt;&gt; opal_datatype_is_contiguous_memory_layout( const opal_datatype_t*
</span><br>
<span class="quotelev2">&gt;&gt; datatype, int32_t count )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     if( !(datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_CONTIGUOUS) ) return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     if( (count == 1) || (datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_NO_GAPS)
</span><br>
<span class="quotelev2">&gt;&gt; ) return 1;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* This is the assertion:  */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     assert( (OPAL_PTRDIFF_TYPE)datatype-&gt;size != (datatype-&gt;ub -
</span><br>
<span class="quotelev2">&gt;&gt; datatype-&gt;lb) );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone can tell me what does this mean?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It happens while writing a file with MPI I/O when I am calling for the
</span><br>
<span class="quotelev2">&gt;&gt; fourth time a &quot;MPI_File_set_view&quot;... with different types of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype created with &quot;MPI_Type_indexed&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to reproduce the bug with a very small example to be send
</span><br>
<span class="quotelev2">&gt;&gt; here, but if anyone has a hint to give me...
</span><br>
<span class="quotelev2">&gt;&gt; (I would like: this assert is not good! just ignore it ;-) )
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;idx_null.cc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
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
