<?
$subject_val = "[OMPI users] Issues with MPI_Type_create_darray";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 17:21:07 2008" -->
<!-- isoreceived="20081030212107" -->
<!-- sent="Thu, 30 Oct 2008 17:21:01 -0400" -->
<!-- isosent="20081030212101" -->
<!-- name="Antonio Molins" -->
<!-- email="amolins_at_[hidden]" -->
<!-- subject="[OMPI users] Issues with MPI_Type_create_darray" -->
<!-- id="F35E2972-6135-49F9-A491-53DBAACA39BC_at_mit.edu" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Issues with MPI_Type_create_darray<br>
<strong>From:</strong> Antonio Molins (<em>amolins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 17:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Previous message:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Reply:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am having some trouble with this function. I want to map data to a  
<br>
2x2 block-cyclic configuration in C, using the code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(blacs_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// size of each matrix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_gsizes = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_gsizes[0]=this-&gt;nx;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_gsizes[1]=this-&gt;ny;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// block-cyclic distritution used by ScaLAPACK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_distrs = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_distrs[0]=MPI_DISTRIBUTE_CYCLIC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_distrs[1]=MPI_DISTRIBUTE_CYCLIC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_dargs = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_dargs[0]=BLOCK_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_dargs[1]=BLOCK_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_psizes = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes[0]=Pr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes[1]=Pc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank = pc+pr*Pc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_darray(Pr*Pc,rank, 
<br>
2,array_of_gsizes,array_of_distrs,array_of_dargs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes,MPI_ORDER_C,MPI_DOUBLE,&amp;this-&gt;datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;this-&gt;datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int typesize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long typeextent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_size(this-&gt;datatype,&amp;typesize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_extent(this-&gt;datatype,&amp;typeextent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;type size for process rank (%d,%d) is %d doubles, type extent  
<br>
is %d doubles (up to %d).&quot;,pr,pc,typesize/(int)sizeof(double),(int) 
<br>
(typeextent/sizeof(double)),nx*ny);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(blacs_comm,(char*)filename, MPI_MODE_RDWR,  
<br>
MPI_INFO_NULL, &amp;this-&gt;fid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(this-&gt;fid,this-&gt;offset 
<br>
+i*nx*ny*sizeof(double),MPI_DOUBLE,this- 
<br>
<span class="quotelev1"> &gt;datatype,&quot;native&quot;,MPI_INFO_NULL);	
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>This works well when used like this, but problem is that the matrix  
<br>
itself is written in disk column-major fashion, so I would want to use  
<br>
the code as if I was reading it transposed, that is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(blacs_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// size of each matrix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_gsizes = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_gsizes[0]=this-&gt;ny;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_gsizes[1]=this-&gt;nx;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// block-cyclic distritution used by ScaLAPACK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_distrs = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_distrs[0]=MPI_DISTRIBUTE_CYCLIC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_distrs[1]=MPI_DISTRIBUTE_CYCLIC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_dargs = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_dargs[0]=BLOCK_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_dargs[1]=BLOCK_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *array_of_psizes = new int[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes[0]=Pr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes[1]=Pc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank = pr+pc*Pr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_darray(Pr*Pc,rank, 
<br>
2,array_of_gsizes,array_of_distrs,array_of_dargs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_psizes,MPI_ORDER_C,MPI_DOUBLE,&amp;this-&gt;datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;this-&gt;datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_size(this-&gt;datatype,&amp;typesize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_extent(this-&gt;datatype,&amp;typeextent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;type size for process rank (%d,%d) is %d doubles, type extent  
<br>
is %d doubles (up to %d).&quot;,pr,pc,typesize/(int)sizeof(double),(int) 
<br>
(typeextent/sizeof(double)),nx*ny);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(blacs_comm,(char*)filename, MPI_MODE_RDWR,  
<br>
MPI_INFO_NULL, &amp;this-&gt;fid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(this-&gt;fid,this-&gt;offset 
<br>
+i*nx*ny*sizeof(double),MPI_DOUBLE,this- 
<br>
<span class="quotelev1"> &gt;datatype,&quot;native&quot;,MPI_INFO_NULL);	
</span><br>
<p>To my surprise, this code crashes while calling MPI_File_set_view()!!!  
<br>
And before you ask, I did try switching MPI_ORDER_C to  
<br>
MPI_ORDER_FORTRAN, I got the same results I am reporting here.
<br>
<p>Also, I am quite intrigued by the text output of each of these  
<br>
programs: the first one will report:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,0) is 32 doubles, type extent is 91  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,0) is 20 doubles, type extent is 119  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,1) is 24 doubles, type extent is 95  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,1) is 15 doubles, type extent is 123  
<br>
doubles (up to 91).
<br>
<p>Anybody know why the extents are not equal???
<br>
<p>Even weirder, the second one will report:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,0) is 32 doubles, type extent is 91  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,0) is 20 doubles, type extent is 95  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,1) is 24 doubles, type extent is 143  
<br>
doubles (up to 91).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,1) is 15 doubles, type extent is 147  
<br>
doubles (up to 91).
<br>
<p>The extent changed! I think this is somehow related to the posterior  
<br>
crash of MPI_File_set_view(), but that's as far as I can understand...
<br>
<p>Any clue about what is happening? I attach the trace below.
<br>
<p>Best,
<br>
A
<br>
<p>--------------------------------------------------------------------------------
<br>
Antonio Molins, PhD Candidate
<br>
Medical Engineering and Medical Physics
<br>
Harvard - MIT Division of Health Sciences and Technology
<br>
<pre>
--
&quot;When a traveler reaches a fork in the road,
the &#226;&#132;&#147;1 -norm tells him to take either one way or the other,
but the &#226;&#132;&#147;2 -norm instructs him to head off into the bushes. &quot;
			John F. Claerbout and Francis Muir, 1973
--------------------------------------------------------------------------------
*** glibc detected *** double free or corruption (!prev):  
0x0000000000cf4130 ***
[login4:26709] *** Process received signal ***
[login4:26708] *** Process received signal ***
[login4:26708] Signal: Aborted (6)
[login4:26708] Signal code:  (-6)
[login4:26709] Signal: Segmentation fault (11)
[login4:26709] Signal code: Address not mapped (1)
[login4:26709] Failing at address: 0x18
[login4:26708] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
[login4:26708] [ 1] /lib64/tls/libc.so.6(gsignal+0x3d) [0x36fe62e26d]
[login4:26708] [ 2] /lib64/tls/libc.so.6(abort+0xfe) [0x36fe62fa6e]
[login4:26708] [ 3] /lib64/tls/libc.so.6 [0x36fe6635f1]
[login4:26708] [ 4] /lib64/tls/libc.so.6 [0x36fe6691fe]
[login4:26708] [ 5] /lib64/tls/libc.so.6(__libc_free+0x76)  
[0x36fe669596]
[login4:26708] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
[0x2a962cc4ae]
[login4:26708] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
[login4:26708] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(MPI_Type_free+0x5b) [0x2a962f654f]
[login4:26708] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIOI_Flatten+0x1804) [0x2aa4603612]
[login4:26708] [10] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
[login4:26708] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
[login4:26708] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
[0x2aa46088a9]
[login4:26708] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so [0x2aa45ec288]
[login4:26708] [14] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(MPI_File_set_view+0x53) [0x2a963002ff]
[login4:26708] [15] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
+0xc3) [0x42a50b]
[login4:26708] [16] ./bin/test2(main+0xc2e) [0x43014a]
[login4:26708] [17] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
[0x36fe61c40b]
[login4:26708] [18] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42) [0x41563a]
[login4:26708] *** End of error message ***
[login4:26709] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
[login4:26709] [ 1] /lib64/tls/libc.so.6 [0x36fe66882b]
[login4:26709] [ 2] /lib64/tls/libc.so.6 [0x36fe668f8d]
[login4:26709] [ 3] /lib64/tls/libc.so.6(__libc_free+0x76)  
[0x36fe669596]
[login4:26709] [ 4] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
[0x2a962cc4ae]
[login4:26709] [ 5] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(ompi_ddt_release_args+0x93) [0x2a962d5641]
[login4:26709] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
[0x2a962cc514]
[login4:26709] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(ompi_ddt_release_args+0x93) [0x2a962d5641]
[login4:26709] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
[0x2a962cc514]
[login4:26709] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
[login4:26709] [10] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(MPI_Type_free+0x5b) [0x2a962f654f]
[login4:26709] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIOI_Flatten+0x147) [0x2aa4601f55]
[login4:26709] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIOI_Flatten+0x1569) [0x2aa4603377]
[login4:26709] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
[login4:26709] [14] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
[login4:26709] [15] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
[0x2aa46088a9]
[login4:26709] [16] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
mca_io_romio.so [0x2aa45ec288]
[login4:26709] [17] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
0(MPI_File_set_view+0x53) [0x2a963002ff]
[login4:26709] [18] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
+0xc3) [0x42a50b]
[login4:26709] [19] ./bin/test2(main+0xc2e) [0x43014a]
[login4:26709] [20] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
[0x36fe61c40b]
[login4:26709] [21] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42) [0x41563a]
[login4:26709] *** End of error message ***
--------------------------------------------------------------------------
mpirun noticed that process rank 2 with PID 26708 on node  
login4.ranger.tacc.utexas.edu exited on signal 6 (Aborted).
--------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Previous message:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Reply:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
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
