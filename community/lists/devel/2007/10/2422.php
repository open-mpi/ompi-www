<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 10:34:25 2007" -->
<!-- isoreceived="20071011143425" -->
<!-- sent="Thu, 11 Oct 2007 10:33:51 -0400" -->
<!-- isosent="20071011143351" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] update to ompi_request_t" -->
<!-- id="05D15F86-CA3C-4A66-A04A-FDC8654453A7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 10:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the duplication in devel-core. As suggested, this RFC is  
<br>
now posted on devel.
<br>
<p>Deadline: October 19th 2007.
<br>
<p>Short version: We need one additional field in the ompi_request_t  
<br>
struct which contain a callback to be called when a request complete.  
<br>
This callback is not intended for the PML layer, but for any other  
<br>
component inside Open MPI. It will provide them a event based  
<br>
progress (based on requests completion).
<br>
<p>Long version: During the Open MPI meeting in Paris, we talked about  
<br>
revamping the progress engine. It's not a complete rewrite, it's more  
<br>
related to performance improvement and supporting a blocking mode. In  
<br>
order to be able to reach our goal, we need to get rid of all  
<br>
progress functions that are not related to the BTL/MTL. Therefore, we  
<br>
propose another mechanism for progressing components inside Open MPI,  
<br>
based on the completion event for requests. ROMIO and OSC can use it  
<br>
without problems, instead of the progress function they use today (we  
<br>
talked with Brian about this and he agreed).
<br>
<p>This RFC is not about the progress engine, it's about the  
<br>
modifications we need in order to allow any component to have a event  
<br>
based progress. This affect only the ompi_request_t structure, and  
<br>
add one if in the critical path (cost minimal). The base request will  
<br>
have one more field, which contain a callback for completion. This  
<br>
callback, if not NULL, will be called every time the PML complete a  
<br>
request. However, the PML is not allowed to add it's own completion  
<br>
callback (it should use instead the req_free callback as it does  
<br>
today). As stated in the &quot;short version&quot;, the new completion callback  
<br>
is only intended for non-devices layers such as OSC and IO.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2422/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
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
