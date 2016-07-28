<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 07:46:01 2014" -->
<!-- isoreceived="20140528114601" -->
<!-- sent="Wed, 28 May 2014 20:45:59 +0900" -->
<!-- isosent="20140528114559" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5vZ5e_Xi5nL8sTKbn60briWyVxCvcDtE+rVJ0Z6ma0SxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3590E241-3888-4C3F-93DD-604525C5BA25_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 07:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>On Wed, May 28, 2014 at 8:31 PM, Jeff Squyres (jsquyres)
<br>
<span class="quotelev1">&gt; To be totally clear: MPI says it is erroneous for only some (not all)
</span><br>
processes in a communicator to call MPI_COMM_FREE.  So if that's the real
<br>
problem, then the discussion about why the parent(s) is(are) trying to
<br>
contact the children is moot -- the test is erroneous, and erroneous
<br>
application behavior is undefined.
<br>
<p>This is definetly what happens : only some tasks call MPI_Comm_free()
<br>
i will commit my changes and the initially reported issue is solved :-)
<br>
<p><p><p>about the &quot;bonus points&quot; :
<br>
<p>v1.8 does not have this issue
<br>
<p>i digged it and bottom line, the parent (who did not call MPI_Comm_free
<br>
unlike the children) calls ompi_dpm_base_dyn_finalize, which tries to isend
<br>
the already exited tasks.
<br>
<p><p>bottom line, in pml_ob1_sendreq.h line 450
<br>
<p>with v1,8
<br>
mca_bml_base_btl_array_get_size(&amp;endpoint-&gt;btl_eager) = 0
<br>
nothing is sent but isend is reported successful
<br>
<p>with trunk
<br>
mca_bml_base_btl_array_get_size(&amp;endpoint-&gt;btl_eager) = 1
<br>
and then try to send the message =&gt; BOUM
<br>
<p>i found various things that seem counter intuitive to me and will summarize
<br>
all this tomorrow.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
