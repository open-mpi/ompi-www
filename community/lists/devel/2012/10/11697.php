<?
$subject_val = "[OMPI devel] 1.7.0rc5 - FOTRAN build failure with Open64 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 00:09:57 2012" -->
<!-- isoreceived="20121031040957" -->
<!-- sent="Tue, 30 Oct 2012 21:09:50 -0700" -->
<!-- isosent="20121031040950" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.0rc5 - FOTRAN build failure with Open64 compilers" -->
<!-- id="CAAvDA16ur0UtEsPFYZHp7swuX+af4PjorDpJuhmMJ3KV0VmzJA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.0rc5 - FOTRAN build failure with Open64 compilers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 00:09:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11698.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w/ XLF"</a>
<li><strong>Previous message:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linux/x86-64 host with Open64 compilers version 4.5.1 from AMD.
<br>
<p>Fortran 2008 support is failing to build as shown below.
<br>
My records show the ompi-1.5 branch was fine on this configuration.
<br>
<p>-Paul
<br>
<p>&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-855 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 15, Column = 8
<br>
&nbsp;&nbsp;The compiler has detected errors in module &quot;MPI_F08_TYPES&quot;.  No module
<br>
information file will be created for this module.
<br>
<p>&nbsp;&nbsp;type(MPI_Comm),       protected, bind(C, name=&quot;ompi_f08_mpi_comm_self&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_COMM_SELF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 98, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 99, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 101, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Errhandler), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_errors_return&quot;)    :: MPI_ERRORS_RETURN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 103, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 104, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 106, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 108, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_min&quot;     )  ::
<br>
&nbsp;MPI_MIN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 110, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_sum&quot;     )  ::
<br>
&nbsp;MPI_SUM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 111, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_prod&quot;    )  ::
<br>
&nbsp;MPI_PROD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 112, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_land&quot;    )  ::
<br>
&nbsp;MPI_LAND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 113, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_band&quot;    )  ::
<br>
&nbsp;MPI_BAND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 114, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_lor&quot;     )  ::
<br>
&nbsp;MPI_LOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 115, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_bor&quot;     )  ::
<br>
&nbsp;MPI_BOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 116, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_lxor&quot;    )  ::
<br>
&nbsp;MPI_LXOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 117, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_bxor&quot;    )  ::
<br>
&nbsp;MPI_BXOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 118, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_maxloc&quot;  )  ::
<br>
&nbsp;MPI_MAXLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 119, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_minloc&quot;  )  ::
<br>
&nbsp;MPI_MINLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 120, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op), protected, bind(C, name=&quot;ompi_f08_mpi_replace&quot; )  ::
<br>
&nbsp;MPI_REPLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 121, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 122, Column = 26
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype),   protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_datatype_null&quot;)   :: MPI_DATATYPE_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 128, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Errhandler), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_errhandler_null&quot;) :: MPI_ERRHANDLER_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 129, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Group),      protected, bind(C, name=&quot;ompi_f08_mpi_group_null&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_GROUP_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 130, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Info),       protected, bind(C, name=&quot;ompi_f08_mpi_info_null&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INFO_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 131, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Message),    protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_message_null&quot;)    :: MPI_MESSAGE_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 132, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Op),         protected, bind(C, name=&quot;ompi_f08_mpi_op_null&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_OP_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 133, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Request),    protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_request_null&quot;)    :: MPI_REQUEST_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 134, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Win),        protected, bind(C, name=&quot;ompi_f08_mpi_win_null&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_WIN_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 135, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>#if OMPI_PROVIDE_MPI_FILE_INTERFACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 136, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 138, Column = 34
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_packed&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_PACKED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 148, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_ub&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_UB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 149, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_lb&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 150, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_character&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_CHARACTER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 151, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_logical&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LOGICAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 152, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 153, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 154, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer2&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 155, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 156, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 157, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_integer16&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_INTEGER16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 158, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_real&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_REAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 159, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_real4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_REAL4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 160, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_real8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_REAL8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 161, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_real16&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_REAL16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 162, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_double_precision&quot;)  :: MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 163, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_complex&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_COMPLEX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 164, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_complex8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_COMPLEX8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 165, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_complex16&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_COMPLEX16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 166, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_complex32&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_COMPLEX32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 167, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_double_complex&quot;)    :: MPI_DOUBLE_COMPLEX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 168, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_2real&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_2REAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 169, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_2double_precision&quot;) :: MPI_2DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 170, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_2integer&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_2INTEGER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 171, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_2complex&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_2COMPLEX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 172, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C,
<br>
name=&quot;ompi_f08_mpi_2double_complex&quot;)   :: MPI_2DOUBLE_COMPLEX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 173, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_real2&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_REAL2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 174, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_logical1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LOGICAL1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 175, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_logical2&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LOGICAL2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 176, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_logical4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LOGICAL4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 177, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>&nbsp;&nbsp;type(MPI_Datatype), protected, bind(C, name=&quot;ompi_f08_mpi_logical8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: MPI_LOGICAL8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 178, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-197 openf90: ERROR MPI_F08_TYPES, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-open64/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-types.F90,
<br>
Line = 179, Column = 32
<br>
&nbsp;&nbsp;Unexpected syntax: &quot;attr-spec&quot; was expected but found &quot;,&quot;.
<br>
<p>openf95: Open64 Fortran Version 4.5.1 (f14) Tue Oct 30, 2012  20:50:34
<br>
openf95: 886 source lines
<br>
openf95: 63 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
<br>
openf95: &quot;explain openf95-message number&quot; gives more information about each
<br>
message
<br>
make[2]: *** [mpi-f08-types.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.7rc5-linux-x86_64-open64/BLD/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.7rc5-linux-x86_64-open64/BLD/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>On Tue, Oct 30, 2012 at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have posted the next release candidate (rc5) for the 1.7.0 release in
</span><br>
<span class="quotelev1">&gt; the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please put it thru the wringer to help us validate it prior to release
</span><br>
<span class="quotelev1">&gt; later this month. We think this looks pretty complete, pending someone
</span><br>
<span class="quotelev1">&gt; finding a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11698.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w/ XLF"</a>
<li><strong>Previous message:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
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
