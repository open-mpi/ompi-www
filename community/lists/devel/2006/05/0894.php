<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 11:27:02 2006" -->
<!-- isoreceived="20060524152702" -->
<!-- sent="Thu, 25 May 2006 09:26:47 -0400" -->
<!-- isosent="20060525132647" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] behavior of the r2 component" -->
<!-- id="EADBF657-82FF-43B7-9050-AE430631CD3F_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060524121227.0iezybg7k8cc40ww_at_mail.tu-chemnitz.de" -->
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
<strong>Date:</strong> 2006-05-25 09:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0895.php">Galen M. Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10072"</a>
<li><strong>Previous message:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0891.php">Andre Lichei: "[OMPI devel] behavior of the r2 component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Reply:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look like you miss the bitmap. Every time, one of the endpoint is  
<br>
reacheable the corresponding bit in the bitmap is set to one. The  
<br>
upper level reparse the bitmap and it will detect the number of  
<br>
registered BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 24, 2006, at 6:12 AM, Andre Lichei wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; currently I'm working at the r2 component of the bml framework. When I
</span><br>
<span class="quotelev1">&gt; tried to get an deeper understanding of the component I experienced
</span><br>
<span class="quotelev1">&gt; difficulties to figure out how the add_proc function should behave. So
</span><br>
<span class="quotelev1">&gt; my question is how should the function behave, and what is the purpose
</span><br>
<span class="quotelev1">&gt; of the bml_endpoint array? An explanation of my difficulties follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The add_proc function is implemented in bml_r2.c and starts at line  
</span><br>
<span class="quotelev1">&gt; 164
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_add_procs(size_t nprocs,
</span><br>
<span class="quotelev2">&gt;&gt;                         struct ompi_proc_t** procs,
</span><br>
<span class="quotelev2">&gt;&gt;                         struct mca_bml_base_endpoint_t**  
</span><br>
<span class="quotelev2">&gt;&gt; bml_endpoints,
</span><br>
<span class="quotelev2">&gt;&gt;                         struct ompi_bitmap_t* reachable
</span><br>
<span class="quotelev2">&gt;&gt;                     )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I first read it, it seems that the function accepts an array of
</span><br>
<span class="quotelev1">&gt; ompi_proc_t structs and return an array of the same size which  
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt; one bml_endpoint for every process in the procs array.
</span><br>
<span class="quotelev1">&gt; At the beginning of the function (line 193 to 204) is a loop checking
</span><br>
<span class="quotelev1">&gt; if there are processes which are not new. If this is the case the
</span><br>
<span class="quotelev1">&gt; existing bml_endpoint is selected and stored in the endpoint array.  
</span><br>
<span class="quotelev1">&gt; New
</span><br>
<span class="quotelev1">&gt; processes are stored in an different array. This means if all  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; are known the function behaves like described above.
</span><br>
<span class="quotelev1">&gt; When there are new processes the procs array is overwritten with the
</span><br>
<span class="quotelev1">&gt; newly created array of new processes.(line 210) This array may be
</span><br>
<span class="quotelev1">&gt; shorter. (When there was at least one known process) So the number of
</span><br>
<span class="quotelev1">&gt; elements in nprocs is overwritten too. (line 211) But this nummber is
</span><br>
<span class="quotelev1">&gt; no pointer so the calling function couldn't notice it.
</span><br>
<span class="quotelev1">&gt; Now new bml_endpoints are created an stored in the bml_endpoints  
</span><br>
<span class="quotelev1">&gt; array.
</span><br>
<span class="quotelev1">&gt; But they are stored at the  position the process has in the new
</span><br>
<span class="quotelev1">&gt; array!(line 271) So existing entries may be overwritten.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; The function receives an array with 4 processes (process 0 to 3).
</span><br>
<span class="quotelev1">&gt; Process 2 is already known. So in the first loop the bml_endpoint of
</span><br>
<span class="quotelev1">&gt; process 2 is stored at bml_endpoints[2]. Also a new array is created
</span><br>
<span class="quotelev1">&gt; containing process 0,1,3. This new array replaces the procs array.  
</span><br>
<span class="quotelev1">&gt; Then
</span><br>
<span class="quotelev1">&gt; for all three processes bml_endpoints are created and stored at
</span><br>
<span class="quotelev1">&gt; bml_endpoint[0,1,2]. So the existing entry (bml_endpoint[2]) is
</span><br>
<span class="quotelev1">&gt; overwritten.
</span><br>
<span class="quotelev1">&gt; So the bml_endpoint array contains only three elements, but the  
</span><br>
<span class="quotelev1">&gt; calling
</span><br>
<span class="quotelev1">&gt; function has as number 4, because the new number can't be returned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question again. Is this the intended behavior or is it a bug?  
</span><br>
<span class="quotelev1">&gt; How
</span><br>
<span class="quotelev1">&gt; should the function behave?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andr&#233;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0895.php">Galen M. Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10072"</a>
<li><strong>Previous message:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0891.php">Andre Lichei: "[OMPI devel] behavior of the r2 component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Reply:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
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
