<?
$subject_val = "[OMPI devel] sbgp problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 14:57:03 2012" -->
<!-- isoreceived="20121030185703" -->
<!-- sent="Tue, 30 Oct 2012 13:57:03 -0500" -->
<!-- isosent="20121030185703" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] sbgp problem" -->
<!-- id="509022FF.2050909_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] sbgp problem<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 14:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
<li><strong>Reply:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so the sbgp problem that I mentioned on the call this morning
<br>
unfortunately is not resolved by just adding the common/verbs directory
<br>
into the 1.7 branch.
<br>
<p>We looked a bit into it, and the problem/difference between in the file
<br>
ompi/sbgp/ibnet/sbgp_ibnet_component.c which has the following include
<br>
statement:
<br>
<p>#include &quot;ompi/mca/common/ofautils/common_ofautils.h&quot;
<br>
<p>The same file on trunk includes however
<br>
<p>#include &quot;ompi/mca/common/verbs/common_verbs.h&quot;
<br>
<p>If I make this change in the 1.7, things compile properly, otherwise we
<br>
still have the error message
<br>
<p>bgp_ibnet_component.c: In function 'ibnet_load_devices':
<br>
sbgp_ibnet_component.c:527:5: error: implicit declaration of function
<br>
'ompi_ibv_get_device_list'
<br>
sbgp_ibnet_component.c:527:13: warning: assignment makes pointer from
<br>
integer without a cast
<br>
sbgp_ibnet_component.c:553:5: error: implicit declaration of function
<br>
'ompi_ibv_free_device_list'
<br>
make[2]: *** [sbgp_ibnet_component.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Thanks
<br>
Edgar
<br>
<pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11678/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
<li><strong>Reply:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
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
