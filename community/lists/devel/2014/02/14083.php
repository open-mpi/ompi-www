<?
$subject_val = "[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 19:14:15 2014" -->
<!-- isoreceived="20140211001415" -->
<!-- sent="Tue, 11 Feb 2014 00:14:14 +0000" -->
<!-- isosent="20140211001414" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset" -->
<!-- id="F8708667-FBE7-48FE-8ADD-F89D91564C4C_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 19:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Reply:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Reply:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: On trunk, force MPI_Count/MPI_Offset to be 32 bits when building in 32 bit mode (they are currently 64 bit, even in a 32 bit build).  On v1.7, leave the sizes at 64 bit (for ABI reasons), but put error checking in the MPI API layer to ensure we won't over/underflow 32 bits.
<br>
<p>WHY: See ticket #4205 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/4205">https://svn.open-mpi.org/trac/ompi/ticket/4205</a>)
<br>
<p>WHERE: On trunk, this can be solved entirely in configury.  In v1.7/v1.8, make changes in the MPI API layer (e.g., check MPI_Send to ensure (count*size_of_datatype)&lt;2B)
<br>
<p>TIMEOUT: I'll tentatively say next Tuesday teleconf, Feb 18, 2014, but it can be pushed back -- there's no real rush; this isn't a hot issue (but it is wrong and should be fixed).
<br>
<p>MORE DETAIL:
<br>
<p>I noticed that MPI_Get_elements_x() and MPI_Type_size_x() were giving wrong answers when compiled in 32 bit mode on a 64 bit machine.  This is because in that build:
<br>
<p>- size_t: 4 bytes
<br>
- ptrdiff_t: 4 bytes
<br>
- MPI_Aint: 4 bytes
<br>
- MPI_Offset: 8 bytes
<br>
- MPI_Count: 8 bytes
<br>
<p>Some data points:
<br>
<p>1. MPI-3 says that MPI_Count must be big enough to hold both an MPI_Aint and MPI_Offset.
<br>
<p>2. The entire PML/BML/BTL/convertor infrastructure uses size_t as its underlying computation type.
<br>
<p>3. The _x tests were failing in 32 bit builds because they take (count,datatype) input that intentionally results in a number of bytes that is larger than 2 billion, assigned that value to a size_t (which is 32 bits), caused an overflow, and therefore got the wrong answer.
<br>
<p>To solve this:
<br>
<p>- On the trunk, we can just not allow MPI_Count (and therefore MPI_Offset) to be larger than size_t.  This means that on 32 bit builds -- on both 32 and 64 bit systems -- sizeof(MPI_Aint) == sizeof(MPI_Offset) == sizeof(MPI_Count) == 4.  There is a patch for this on #4205.
<br>
<p>- Because of ABI issues, we cannot change the size of MPI_Count/MPI_Offset on v1.7, so we can just check for over/underflow in the MPI API.  For example, we can check that (count * size_of_datatype) &lt; 2 billion (other checks will also be necessary; this is just an example).  I have no patch for this yet.
<br>
<p>As a side effect, this means that -- for 32 bit builds -- we will not support large filesystems well (e.g., filesystems with 64 bit offsets).  BlueGene is an example of such a system (not that OMPI supports BlueGene, but...).  Specifically: for 32 bit builds, we'll only allow MPI_Offset to be 32 bits.  I don't think that this is a major issue, because 32 bit builds are not a huge issue for the OMPI community, but I raise the point in the spirit of full disclosure.  Fixing it to allow 32 bit MPI_Aint but 64 bit MPI_Offset and MPI_Count would likely mean re-tooling the PML/BML/BTL/convertor infrastructure to use something other than size_t, and I have zero desire to do that!  (please, no OMPI vendor reveal that they're going to seriously build giant 32 bit systems...)
<br>
<p>Also, while investigating this issue, I discovered that the configury for determining the Fortran MPI_ADDRESS_KIND, MPI_OFFSET_KIND, and MPI_COUNT_KIND values were unrelated to the C types that we discovered for these concepts.  The patch on #4205 fixes this issue as well -- the Fortran MPI_*_KIND value are now directly correlated with the C types that were discovered.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14084.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Reply:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>Reply:</strong> <a href="14180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
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
