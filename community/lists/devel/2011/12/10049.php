<?
$subject_val = "[OMPI devel] Incorrect and undefined return code/function/data type at C++ header";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  4 21:31:41 2011" -->
<!-- isoreceived="20111205023141" -->
<!-- sent="Mon, 05 Dec 2011 11:31:28 +0900" -->
<!-- isosent="20111205023128" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] Incorrect and undefined return code/function/data type at C++ header" -->
<!-- id="4EDC2D00.5040902_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Incorrect and undefined return code/function/data type at C++ header<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-04 21:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Reply:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>We send next feed back.
<br>
It's about C++ header file.
<br>
<p>In ompi/mpi/cxx/*.h, 
<br>
Some definitions of return code, type and function are lacked or incorrect.
<br>
Attached patch fixes them (This Patch is for V1.4.X).
<br>
<p>Following list is what is lacked and incorrect.
<br>
<p>*Undefined return code
<br>
--------------------------------------------------
<br>
MPI::ERR_ACCESS
<br>
MPI::ERR_AMODE
<br>
MPI::ERR_ASSERT
<br>
MPI::ERR_BAD_FILE
<br>
MPI::ERR_CONVERSION
<br>
MPI::ERR_DISP
<br>
MPI::ERR_DUP_DATAREP
<br>
MPI::ERR_FILE_EXISTS
<br>
MPI::ERR_FILE_IN_USE
<br>
MPI::ERR_FILE
<br>
MPI::ERR_INFO
<br>
MPI::ERR_IO
<br>
MPI::ERR_LOCKTYPE
<br>
MPI::ERR_NOT_SAME
<br>
MPI::ERR_NO_SPACE
<br>
MPI::ERR_NO_SUCH_FILE
<br>
MPI::ERR_PORT
<br>
MPI::ERR_QUOTA
<br>
MPI::ERR_READ_ONLY
<br>
MPI::ERR_RMA_CONFLICT
<br>
MPI::ERR_RMA_SYNC
<br>
MPI::ERR_SIZE
<br>
MPI::ERR_UNSUPPORTED_DATAREP
<br>
MPI::ERR_UNSUPPORTED_OPERATION
<br>
--------------------------------------------------
<br>
*Undefined data type
<br>
--------------------------------------------------
<br>
MPI::LONG_LONG_INT
<br>
MPI::Fint
<br>
MPI::F_DOUBLE_COMPLEX
<br>
--------------------------------------------------
<br>
<p>*Undefined function
<br>
--------------------------------------------------
<br>
MPI::Datatype::Create_darray
<br>
MPI::Datatype::Pack_external
<br>
MPI::Datatype::Pack_external_size
<br>
MPI::Datatype::Unpack_external
<br>
MPI::Add_error_class
<br>
MPI::Add_error_code
<br>
MPI::Add_error_string
<br>
MPI::Datatype::Create_f90_complex
<br>
MPI::Datatype::Create_f90_integer
<br>
MPI::Datatype::Create_f90_real
<br>
MPI::Datatype::Match_size
<br>
--------------------------------------------------
<br>
<p>*Incorrect of definitions
<br>
(MPI-2.1 standard defines these as &quot;const&quot;, but they are not &quot;const&quot; in code)
<br>
--------------------------------------------------
<br>
MPI::Intercomm::Merge
<br>
MPI::Cartcomm::Sub
<br>
MPI::Grequest::Start
<br>
--------------------------------------------------
<br>
<p>*Incorrect of definitions
<br>
(MPI-2.1 standard defines these as not &quot;const&quot;, but they are &quot;const&quot; in code)
<br>
--------------------------------------------------
<br>
MPI::Comm::Set_errhandler
<br>
MPI::File::Set_errhandler
<br>
MPI::Win::Set_errhandler
<br>
--------------------------------------------------
<br>
<p>Best regards.
<br>
--------------
<br>
Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10049/Cplusplus-header.patch">Cplusplus-header.patch</a>
</ul>
<!-- attachment="Cplusplus-header.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Reply:</strong> <a href="10050.php">Jeff Squyres: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
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
