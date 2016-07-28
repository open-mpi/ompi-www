<?
$subject_val = "[OMPI devel] problems compiling new ROMIO with PVFS2 support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 12:44:39 2011" -->
<!-- isoreceived="20110520164439" -->
<!-- sent="Fri, 20 May 2011 11:44:41 -0500" -->
<!-- isosent="20110520164441" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] problems compiling new ROMIO with PVFS2 support" -->
<!-- id="4DD69A79.1060507_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] problems compiling new ROMIO with PVFS2 support<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 12:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
we recently encountered a problem here at UH when compiling the new
<br>
ROMIO version in the trunk with PVFS2 support. The error that we are
<br>
getting is a list of
<br>
<p>ad_pvfs2_io_dtype.c:581:13: error: switch quantity not an integer
<br>
ad_pvfs2_io_dtype.c:583:2: error: pointers are not permitted as case values
<br>
<p>(with a lot more similar error messages).
<br>
<p>The error is due to a code sequence in that file which does something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;switch (mpi_dtype)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_CHAR:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do something;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_BYTE:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do something;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_SHORT:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>This works for MPICH, but not for Open MPI since the datatypes are
<br>
pointers. Anyway, I have a fix which converts this switch statement in
<br>
the according ROMIO file to an
<br>
<p>&nbsp;&nbsp;&nbsp;if ( MPI_CHAR == mpi_dtype )
<br>
&nbsp;&nbsp;&nbsp;else if ( == mpi_dtype )
<br>
&nbsp;&nbsp;&nbsp;else if ...
<br>
&nbsp;&nbsp;&nbsp;else
<br>
<p><p>sequence. I was just wandering whether to commit the code to trunk,
<br>
since it modifies a package that has been brought in from outside..
<br>
<p>(There is btw. a second warning in the file which makes me a bit
<br>
nervous, but that is a warning and the file still compiles, while the
<br>
other one is an error and the compilation aborts...
<br>
<p>ad_pvfs2_io_dtype.c:264:6: warning: passing argument 6 of
<br>
&#226;PMPI_Type_get_contents&#226; from incompatible pointer type
<br>
../../../../../../../ompi/include/mpi.h:1985:20: note: expected
<br>
&#226;MPI_Aint *&#226; but argument is of type &#226;int *&#226;
<br>
<p>since an MPI_Aint really should be a long on this platform, not an int
<br>
)
<br>
<p>Thanks
<br>
Edgar
<br>
<pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9279/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9278.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
