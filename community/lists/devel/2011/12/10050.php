<?
$subject_val = "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  5 11:35:15 2011" -->
<!-- isoreceived="20111205163515" -->
<!-- sent="Mon, 5 Dec 2011 11:35:06 -0500" -->
<!-- isosent="20111205163506" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header" -->
<!-- id="BD28D2BA-9D52-476B-B9C2-1E714B506DD4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EDC2D00.5040902_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-05 11:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Reply:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the patch!  
<br>
<p>Two minor points:
<br>
<p>1. I do not believe that MPI::Fint exists.  It's surprising, but I'm pretty sure we double checked this back in the MPI-2.2 timeframe and came to the conclusions that a) it does not exist, and b) it should not exist, because all C++ &lt;--&gt; Fortran interaction is supposed to go through the C translation routines.
<br>
<p>2. Grequest::Start is a static function on the MPI namespace -- it is not marked &quot;const&quot; in MPI 2.1 or 2.2 (I don't see it in the patch, either).
<br>
<p>On Dec 4, 2011, at 9:31 PM, Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We send next feed back.
</span><br>
<span class="quotelev1">&gt; It's about C++ header file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ompi/mpi/cxx/*.h, 
</span><br>
<span class="quotelev1">&gt; Some definitions of return code, type and function are lacked or incorrect.
</span><br>
<span class="quotelev1">&gt; Attached patch fixes them (This Patch is for V1.4.X).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following list is what is lacked and incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Undefined return code
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI::ERR_ACCESS
</span><br>
<span class="quotelev1">&gt; MPI::ERR_AMODE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_ASSERT
</span><br>
<span class="quotelev1">&gt; MPI::ERR_BAD_FILE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_CONVERSION
</span><br>
<span class="quotelev1">&gt; MPI::ERR_DISP
</span><br>
<span class="quotelev1">&gt; MPI::ERR_DUP_DATAREP
</span><br>
<span class="quotelev1">&gt; MPI::ERR_FILE_EXISTS
</span><br>
<span class="quotelev1">&gt; MPI::ERR_FILE_IN_USE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_FILE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_INFO
</span><br>
<span class="quotelev1">&gt; MPI::ERR_IO
</span><br>
<span class="quotelev1">&gt; MPI::ERR_LOCKTYPE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_NOT_SAME
</span><br>
<span class="quotelev1">&gt; MPI::ERR_NO_SPACE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_NO_SUCH_FILE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_PORT
</span><br>
<span class="quotelev1">&gt; MPI::ERR_QUOTA
</span><br>
<span class="quotelev1">&gt; MPI::ERR_READ_ONLY
</span><br>
<span class="quotelev1">&gt; MPI::ERR_RMA_CONFLICT
</span><br>
<span class="quotelev1">&gt; MPI::ERR_RMA_SYNC
</span><br>
<span class="quotelev1">&gt; MPI::ERR_SIZE
</span><br>
<span class="quotelev1">&gt; MPI::ERR_UNSUPPORTED_DATAREP
</span><br>
<span class="quotelev1">&gt; MPI::ERR_UNSUPPORTED_OPERATION
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *Undefined data type
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI::LONG_LONG_INT
</span><br>
<span class="quotelev1">&gt; MPI::Fint
</span><br>
<span class="quotelev1">&gt; MPI::F_DOUBLE_COMPLEX
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Undefined function
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Create_darray
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Pack_external
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Pack_external_size
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Unpack_external
</span><br>
<span class="quotelev1">&gt; MPI::Add_error_class
</span><br>
<span class="quotelev1">&gt; MPI::Add_error_code
</span><br>
<span class="quotelev1">&gt; MPI::Add_error_string
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Create_f90_complex
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Create_f90_integer
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Create_f90_real
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Match_size
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Incorrect of definitions
</span><br>
<span class="quotelev1">&gt; (MPI-2.1 standard defines these as &quot;const&quot;, but they are not &quot;const&quot; in code)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI::Intercomm::Merge
</span><br>
<span class="quotelev1">&gt; MPI::Cartcomm::Sub
</span><br>
<span class="quotelev1">&gt; MPI::Grequest::Start
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Incorrect of definitions
</span><br>
<span class="quotelev1">&gt; (MPI-2.1 standard defines these as not &quot;const&quot;, but they are &quot;const&quot; in code)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Set_errhandler
</span><br>
<span class="quotelev1">&gt; MPI::File::Set_errhandler
</span><br>
<span class="quotelev1">&gt; MPI::Win::Set_errhandler
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Cplusplus-header.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="10049.php">Y.MATSUMOTO: "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Reply:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
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
