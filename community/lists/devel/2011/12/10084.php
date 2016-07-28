<?
$subject_val = "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 21:20:30 2011" -->
<!-- isoreceived="20111214022030" -->
<!-- sent="Wed, 14 Dec 2011 11:17:54 +0900" -->
<!-- isosent="20111214021754" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header" -->
<!-- id="4EE80752.1090301_at_jp.fujitsu.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE173F3.4070201_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 21:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I fixed the patch.
<br>
(MPI::Fint etc.)
<br>
<p>So, please replace the patch.
<br>
<p>Best regards.
<br>
---------------
<br>
Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>(2011/12/09 11:35), Y.MATSUMOTO wrote:
<br>
<span class="quotelev1">&gt; Dear Jeff and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your comment.
</span><br>
<span class="quotelev1">&gt; I'm sorry for not replying sooner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1:MPI::Fint
</span><br>
<span class="quotelev1">&gt; We checked C++ header using MPI-2.1 standard.
</span><br>
<span class="quotelev1">&gt; So, it doesn't need MPI::Fint definition.
</span><br>
<span class="quotelev1">&gt; (Please remove it!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2:MPI::Grequest::Start
</span><br>
<span class="quotelev1">&gt; Sorry! I send you incorrect list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2011/12/06 1:35), Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for the patch!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two minor points:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. I do not believe that MPI::Fint exists. It's surprising, but I'm pretty sure we double checked this back in the MPI-2.2 timeframe and came to the conclusions that a) it does not exist, and b) it should not exist, because all C++&lt;--&gt; Fortran interaction is supposed to go through the C translation routines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Grequest::Start is a static function on the MPI namespace -- it is not marked &quot;const&quot; in MPI 2.1 or 2.2 (I don't see it in the patch, either).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 4, 2011, at 9:31 PM, Y.MATSUMOTO wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We send next feed back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's about C++ header file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In ompi/mpi/cxx/*.h,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some definitions of return code, type and function are lacked or incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached patch fixes them (This Patch is for V1.4.X).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following list is what is lacked and incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Undefined return code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_ACCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_AMODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_ASSERT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_BAD_FILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_CONVERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_DISP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_DUP_DATAREP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_FILE_EXISTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_FILE_IN_USE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_FILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_INFO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_IO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_LOCKTYPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_NOT_SAME
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_NO_SPACE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_NO_SUCH_FILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_PORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_QUOTA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_READ_ONLY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_RMA_CONFLICT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_RMA_SYNC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_SIZE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_UNSUPPORTED_DATAREP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::ERR_UNSUPPORTED_OPERATION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Undefined data type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::LONG_LONG_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::F_DOUBLE_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Undefined function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Create_darray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Pack_external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Pack_external_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Unpack_external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Add_error_class
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Add_error_code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Add_error_string
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Create_f90_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Create_f90_integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Create_f90_real
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Datatype::Match_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Incorrect of definitions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (MPI-2.1 standard defines these as &quot;const&quot;, but they are not &quot;const&quot; in code)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Intercomm::Merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Cartcomm::Sub
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Grequest::Start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Incorrect of definitions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (MPI-2.1 standard defines these as not &quot;const&quot;, but they are &quot;const&quot; in code)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Comm::Set_errhandler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::File::Set_errhandler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Win::Set_errhandler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI development team,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fujitsu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Cplusplus-header.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10084/Cplusplus-header2.patch">Cplusplus-header2.patch</a>
</ul>
<!-- attachment="Cplusplus-header2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
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
