<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 14:20:46 2014" -->
<!-- isoreceived="20140122192046" -->
<!-- sent="Wed, 22 Jan 2014 11:20:38 -0800" -->
<!-- isosent="20140122192038" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="801FB403-7584-4EBF-9A1B-1BAD0208CCA0_at_usgs.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 14:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13841.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My copy of the Fortran 2003 Standard (Adams, et al., The Fortran 203 Handbook), says Fortran Names (incl. procedures, section 3.2.2) are permitted to be up to 63 characters.  This is not phrased as a requirement, though.  It could be that a conforming processor could restrict this to fewer characters i.e., if the linker/loader does not support that many characters in an external symbol.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 22 Jan 2014, at 8:50 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 21, 2014, at 11:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like we may be getting closer, but are not quite there:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  PPFC     mpi-f08.lo
</span><br>
<span class="quotelev2">&gt;&gt;   BIND(C, name=&quot;ompi_type_create_hindexed_block_f&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                ^
</span><br>
<span class="quotelev2">&gt;&gt; pathf95-1690 pathf95: ERROR OMPI_TYPE_CREATE_HINDEXED_BLOCK_F, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h, Line = 605, Column = 17
</span><br>
<span class="quotelev2">&gt;&gt;  NAME= specifier in BIND clause requires scalar character constant
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wow.  Pulling on this thread turned up a whole pile of bugs :-\, including several other names that are &gt;=32 characters:
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
<span class="quotelev1">&gt; Can you do me a favor and cd into ompi/mpi/fortran/use-mpi-f08 and try to manually &quot;make type_create_indexed_block_f08.lo&quot; and see if it also complains?  That's a 32 character name -- let's see if the limit is &gt;=32 or &gt;=33...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pathf95-1044 pathf95: INTERNAL OMPI_COMM_CREATE_KEYVAL_F, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h, Line = 1242, Column = 38
</span><br>
<span class="quotelev2">&gt;&gt;  Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first error appears likely to be due to the 33-character name for the C binding.
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if that is a limitation allowed by the fortran spec, or an arbitrary limitation in this compiler.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;Internal&quot; may be a show-stopper (not OMPI's fault), unless it goes away once the prior error is resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll ask Pathscale; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13841.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
