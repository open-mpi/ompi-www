<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 11:50:17 2014" -->
<!-- isoreceived="20140122165017" -->
<!-- sent="Wed, 22 Jan 2014 16:50:15 +0000" -->
<!-- isosent="20140122165015" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="BFA4C479-3B75-4482-832B-5D527B4D77C5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14=H3B3KOLqX=g-aZ-MQysh9Czy7PudZXipb1FbtkPW_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 11:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 21, 2014, at 11:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like we may be getting closer, but are not quite there:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt;    BIND(C, name=&quot;ompi_type_create_hindexed_block_f&quot;)
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; pathf95-1690 pathf95: ERROR OMPI_TYPE_CREATE_HINDEXED_BLOCK_F, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h, Line = 605, Column = 17
</span><br>
<span class="quotelev1">&gt;   NAME= specifier in BIND clause requires scalar character constant
</span><br>
<p>Wow.  Pulling on this thread turned up a whole pile of bugs :-\, including several other names that are &gt;=32 characters:
<br>
<p>Found long name: ompi_type_create_indexed_block_f (32)
<br>
Found long name: ompi_type_create_hindexed_block_f (33)
<br>
Found long name: pompi_type_create_indexed_block_f (33)
<br>
Found long name: pompi_type_create_hindexed_block_f (34)
<br>
Found long name: pompi_file_get_position_shared_f (32)
<br>
Found long name: pompi_file_write_ordered_begin_f (32)
<br>
<p>Can you do me a favor and cd into ompi/mpi/fortran/use-mpi-f08 and try to manually &quot;make type_create_indexed_block_f08.lo&quot; and see if it also complains?  That's a 32 character name -- let's see if the limit is &gt;=32 or &gt;=33...
<br>
<p><span class="quotelev1">&gt; pathf95-1044 pathf95: INTERNAL OMPI_COMM_CREATE_KEYVAL_F, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h, Line = 1242, Column = 38
</span><br>
<span class="quotelev1">&gt;   Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first error appears likely to be due to the 33-character name for the C binding.
</span><br>
<span class="quotelev1">&gt; Not sure if that is a limitation allowed by the fortran spec, or an arbitrary limitation in this compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;Internal&quot; may be a show-stopper (not OMPI's fault), unless it goes away once the prior error is resolved.
</span><br>
<p>I'll ask Pathscale; thanks.
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
<li><strong>Next message:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
