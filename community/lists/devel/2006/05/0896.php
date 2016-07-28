<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 05:12:03 2006" -->
<!-- isoreceived="20060526091203" -->
<!-- sent="Fri, 26 May 2006 11:12:02 +0200" -->
<!-- isosent="20060526091202" -->
<!-- name="Andre Lichei" -->
<!-- email="andre.lichei_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] behavior of the r2 component" -->
<!-- id="20060526111202.bus4i2uw7wg0kco0_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EADBF657-82FF-43B7-9050-AE430631CD3F_at_cs.utk.edu" -->
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
<strong>From:</strong> Andre Lichei (<em>andre.lichei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 05:12:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0895.php">Galen M. Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10072"</a>
<li><strong>In reply to:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the fast reply!!!
<br>
I checked again, but it doesn't become clear.:(
<br>
<p><span class="quotelev1">&gt; Look like you miss the bitmap.
</span><br>
I ignored the bitmap by purpose. The only lines were the bitmap is 
<br>
change are in the loop were all btl-modules are iterated. Something 
<br>
like that.
<br>
<p>for each btl{
<br>
ompi_bitmap_clear_all_bits(reachable);[line 229]
<br>
rc = btl-&gt;btl_add_procs(btl, n_new_procs, new_procs, btl_endpoints, 
<br>
reachable); [line 232]
<br>
}
<br>
So when the add_proc function of the r2 component returns, the bitmap 
<br>
holds the information which process is reachable by the last btl. Here 
<br>
it is the btl with the lowest exclusivity. I could not imaging what 
<br>
purpose that should have so I ignored it.
<br>
<p><span class="quotelev1">&gt; Every time, one of the endpoint is reacheable the corresponding bit 
</span><br>
<span class="quotelev1">&gt; in the bitmap is set to one.
</span><br>
With &quot;endpoint is reachable&quot; you meant that the process is reachable? I 
<br>
belive the r2 function shows a different behavior, the bitmap only 
<br>
holds the information from the last btl. I want to add here that I'm 
<br>
not too familiar with C so I think I made a mistake in my last mail. 
<br>
mca_bml_r2_add_proc() creates a new array of processes, only holding 
<br>
the processes which are really new. But does NOT return it.(I was 
<br>
confused by the pointers. Sorry.) The endpoints in the bml_endpoints 
<br>
array correspond to the processes in the new array, so they do not 
<br>
correspond to the processes in the array the upper level holds. With 
<br>
the bitmap it is the same.
<br>
<p><span class="quotelev1">&gt; The upper level reparse the bitmap and it will detect the number of 
</span><br>
<span class="quotelev1">&gt; registered BTL.
</span><br>
Sorry, but I don't understand this.
<br>
<p>The more I think about it the more I believe that the behaviour of the 
<br>
add_proc function in the bml_framework should be something like this:
<br>
When the function returns,
<br>
procs holds all processes.
<br>
bml_endpoint holds the endpoints, each corresponding to one process in 
<br>
the procs array.
<br>
The corresponding bit in the bitmap is set when the bml can reach the process.
<br>
Is that right?
<br>
<p>Many thanks!!
<br>
<p>Andr&#233;
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2006, at 6:12 AM, Andre Lichei wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently I'm working at the r2 component of the bml framework. When I
</span><br>
<span class="quotelev2">&gt;&gt; tried to get an deeper understanding of the component I experienced
</span><br>
<span class="quotelev2">&gt;&gt; difficulties to figure out how the add_proc function should behave. So
</span><br>
<span class="quotelev2">&gt;&gt; my question is how should the function behave, and what is the purpose
</span><br>
<span class="quotelev2">&gt;&gt; of the bml_endpoint array? An explanation of my difficulties follows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The add_proc function is implemented in bml_r2.c and starts at line
</span><br>
<span class="quotelev2">&gt;&gt; 164
</span><br>
<span class="quotelev2">&gt;&gt; mca_bml_r2_add_procs(size_t nprocs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         struct ompi_proc_t** procs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         struct mca_bml_base_endpoint_t**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bml_endpoints,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         struct ompi_bitmap_t* reachable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I first read it, it seems that the function accepts an array of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_proc_t structs and return an array of the same size which
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt; one bml_endpoint for every process in the procs array.
</span><br>
<span class="quotelev2">&gt;&gt; At the beginning of the function (line 193 to 204) is a loop checking
</span><br>
<span class="quotelev2">&gt;&gt; if there are processes which are not new. If this is the case the
</span><br>
<span class="quotelev2">&gt;&gt; existing bml_endpoint is selected and stored in the endpoint array.
</span><br>
<span class="quotelev2">&gt;&gt; New
</span><br>
<span class="quotelev2">&gt;&gt; processes are stored in an different array. This means if all
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; are known the function behaves like described above.
</span><br>
<span class="quotelev2">&gt;&gt; When there are new processes the procs array is overwritten with the
</span><br>
<span class="quotelev2">&gt;&gt; newly created array of new processes.(line 210) This array may be
</span><br>
<span class="quotelev2">&gt;&gt; shorter. (When there was at least one known process) So the number of
</span><br>
<span class="quotelev2">&gt;&gt; elements in nprocs is overwritten too. (line 211) But this nummber is
</span><br>
<span class="quotelev2">&gt;&gt; no pointer so the calling function couldn't notice it.
</span><br>
<span class="quotelev2">&gt;&gt; Now new bml_endpoints are created an stored in the bml_endpoints
</span><br>
<span class="quotelev2">&gt;&gt; array.
</span><br>
<span class="quotelev2">&gt;&gt; But they are stored at the  position the process has in the new
</span><br>
<span class="quotelev2">&gt;&gt; array!(line 271) So existing entries may be overwritten.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example:
</span><br>
<span class="quotelev2">&gt;&gt; The function receives an array with 4 processes (process 0 to 3).
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 is already known. So in the first loop the bml_endpoint of
</span><br>
<span class="quotelev2">&gt;&gt; process 2 is stored at bml_endpoints[2]. Also a new array is created
</span><br>
<span class="quotelev2">&gt;&gt; containing process 0,1,3. This new array replaces the procs array.
</span><br>
<span class="quotelev2">&gt;&gt; Then
</span><br>
<span class="quotelev2">&gt;&gt; for all three processes bml_endpoints are created and stored at
</span><br>
<span class="quotelev2">&gt;&gt; bml_endpoint[0,1,2]. So the existing entry (bml_endpoint[2]) is
</span><br>
<span class="quotelev2">&gt;&gt; overwritten.
</span><br>
<span class="quotelev2">&gt;&gt; So the bml_endpoint array contains only three elements, but the
</span><br>
<span class="quotelev2">&gt;&gt; calling
</span><br>
<span class="quotelev2">&gt;&gt; function has as number 4, because the new number can't be returned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question again. Is this the intended behavior or is it a bug?
</span><br>
<span class="quotelev2">&gt;&gt; How
</span><br>
<span class="quotelev2">&gt;&gt; should the function behave?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Andr&#233;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0895.php">Galen M. Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10072"</a>
<li><strong>In reply to:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
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
