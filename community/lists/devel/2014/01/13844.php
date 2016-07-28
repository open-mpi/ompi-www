<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 16:03:02 2014" -->
<!-- isoreceived="20140122210302" -->
<!-- sent="Wed, 22 Jan 2014 13:03:00 -0800" -->
<!-- isosent="20140122210300" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA15mMNCQ3Dftq_qrOyDXeJ9d3+4qtqUiocZwUqVkUk8-EA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFA4C479-3B75-4482-832B-5D527B4D77C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 16:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13845.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 22, 2014 at 8:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Wow.  Pulling on this thread turned up a whole pile of bugs :-\, including
</span><br>
<span class="quotelev1">&gt; several other names that are &gt;=32 characters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found long name: ompi_type_create_indexed_block_f (32)
</span><br>
<span class="quotelev1">&gt; Found long name: ompi_type_create_hindexed_block_f (33)
</span><br>
<span class="quotelev1">&gt; Found long name: pompi_type_create_indexed_block_f (33)
</span><br>
<span class="quotelev1">&gt; Found long name: pompi_type_create_hindexed_block_f (34)
</span><br>
<span class="quotelev1">&gt; Found long name: pompi_file_get_position_shared_f (32)
</span><br>
<span class="quotelev1">&gt; Found long name: pompi_file_write_ordered_begin_f (32)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>As Larry Baker has cast some doubt on the conformance of fortran compiler
<br>
applying a 32 (or 31?) char limit on the identifiers used for subroutines
<br>
(and/or in BIND), I would not suggest radical changes to OMPI to shorten
<br>
names - at least not for 1.7 (might there be a resulting ABI break?).
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you do me a favor and cd into ompi/mpi/fortran/use-mpi-f08 and try to
</span><br>
<span class="quotelev1">&gt; manually &quot;make type_create_indexed_block_f08.lo&quot; and see if it also
</span><br>
<span class="quotelev1">&gt; complains?  That's a 32 character name -- let's see if the limit is &gt;=32 or
</span><br>
<span class="quotelev2">&gt; &gt;=33...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Well that requested make command fails with the *original* complaint
<br>
because the 33-char &quot;ompi_type_create_hindexed_block_f&quot; is in the HEADER
<br>
file.
<br>
<p>So, I manually #if0'ed ompi_type_create_hindexed_block_f from the header.
<br>
&nbsp;That resolved ONE issue, but the Internal issue remains:
<br>
<p>$ make type_create_indexed_block_f08.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
pathf95-1044 pathf95: INTERNAL OMPI_COMM_CREATE_KEYVAL_F, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h,
<br>
Line = 1244, Column = 38
<br>
&nbsp;&nbsp;Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
<br>
make: *** [mpi-f08.lo] Error 1
<br>
<p><p>After the addition of 2-lines (&quot;#if 0&quot; and &quot;#endif&quot;) line 1244 is now:
<br>
&nbsp;&nbsp;1244  subroutine
<br>
ompi_comm_create_keyval_f(comm_copy_attr_fn,comm_delete_attr_fn, &amp;
<br>
&nbsp;&nbsp;1245
<br>
comm_keyval,extra_state,ierror) &amp;
<br>
&nbsp;&nbsp;1246     BIND(C, name=&quot;ompi_comm_create_keyval_f&quot;)
<br>
&nbsp;&nbsp;1247     use :: mpi_f08_types, only : MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;1248     use :: mpi_f08_interfaces_callbacks, only :
<br>
MPI_Comm_copy_attr_function
<br>
<p><p>Since PathScale and Open64 fortran compilers print the same errors, I am
<br>
guessing that this is from code both inherited from their common ancestor
<br>
(SGI's Pro64 was open sourced to create the original Open64).  So, in case
<br>
anybody wants to reverse-engineer the problem, below is the source from
<br>
Open64 that issues the error (though I can't say I gained any insight from
<br>
looking at it).
<br>
<p>-Paul
<br>
<p>/*
<br>
&nbsp;* Print error messages for constraint violations related to the BIND
<br>
attribute
<br>
&nbsp;*
<br>
&nbsp;* attr_idx AT_Tbl_Idx index for program unit
<br>
&nbsp;*/
<br>
static void
<br>
check_interoperable_pgm_unit(int attr_idx) {
<br>
&nbsp;&nbsp;switch (ATP_PGM_UNIT(attr_idx)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case Function:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_interoperable_data(ATP_RSLT_IDX(attr_idx));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_interoperable_procedure(attr_idx);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;case Subroutine:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_interoperable_procedure(attr_idx);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;case Program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case Blockdata:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case Module:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case Pgm_Unknown:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINTMSG(AT_DEF_LINE(attr_idx), 1044, Internal,
<br>
AT_DEF_COLUMN(attr_idx),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13845.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
