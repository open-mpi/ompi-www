<?
$subject_val = "Re: [OMPI users] Issues with MPI_Type_create_darray";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 09:45:05 2008" -->
<!-- isoreceived="20081031134505" -->
<!-- sent="Fri, 31 Oct 2008 09:44:58 -0400" -->
<!-- isosent="20081031134458" -->
<!-- name="Antonio Molins" -->
<!-- email="amolins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with MPI_Type_create_darray" -->
<!-- id="5274115E-C3E5-413A-BF45-8BCA1A340944_at_mit.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F35E2972-6135-49F9-A491-53DBAACA39BC_at_mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with MPI_Type_create_darray<br>
<strong>From:</strong> Antonio Molins (<em>amolins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 09:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>In reply to:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Using MPI_Type_get_true_extent(), I changed the way of reporting type  
<br>
size and extent to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int typesize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long typeextent, typelb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_size(this-&gt;datatype,&amp;typesize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_true_extent(this-&gt;datatype,&amp;typelb,&amp;typeextent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Type_lb(this-&gt;datatype,&amp;typelb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Type_extent(this-&gt;datatype,&amp;typeextent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\ntype size for process rank (%d,%d) is %d doubles, type  
<br>
extent is %d doubles (up to %d), range is [%d, %d].\n&quot;,pr,pc,typesize/ 
<br>
(int)sizeof(double),(int)(typeextent/sizeof(double)),nx*ny,(int) 
<br>
(typelb/sizeof(double)),(int)((typelb+typeextent)/sizeof(double)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Which now is giving me the correct answers for both situations. For  
<br>
the first one (works):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,0) is 20 doubles, type extent is 60  
<br>
doubles (up to 91), range is [28, 88].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,0) is 32 doubles, type extent is 81  
<br>
doubles (up to 91), range is [0, 81].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,1) is 24 doubles, type extent is 80  
<br>
doubles (up to 91), range is [4, 84].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,1) is 15 doubles, type extent is 59  
<br>
doubles (up to 91), range is [32, 91].
<br>
<p>For the second one (before getting the same double free error with  
<br>
MPI_File_set_view):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,0) is 20 doubles, type extent is 48  
<br>
doubles (up to 91), range is [4, 52].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,0) is 32 doubles, type extent is 51  
<br>
doubles (up to 91), range is [0, 51].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (0,1) is 24 doubles, type extent is 38  
<br>
doubles (up to 91), range is [52, 90].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type size for process rank (1,1) is 15 doubles, type extent is 35  
<br>
doubles (up to 91), range is [56, 91].
<br>
<p>Can anybody give me a hint here? Is there a bug in  
<br>
MPI_Type_create_darray I should be aware of?
<br>
<p>Best,
<br>
A
<br>
<p>On Oct 30, 2008, at 5:21 PM, Antonio Molins wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having some trouble with this function. I want to map data to a  
</span><br>
<span class="quotelev1">&gt; 2x2 block-cyclic configuration in C, using the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(blacs_comm);
</span><br>
<span class="quotelev1">&gt; 	// size of each matrix
</span><br>
<span class="quotelev1">&gt; 	int *array_of_gsizes = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_gsizes[0]=this-&gt;nx;
</span><br>
<span class="quotelev1">&gt; 	array_of_gsizes[1]=this-&gt;ny;
</span><br>
<span class="quotelev1">&gt; 	// block-cyclic distritution used by ScaLAPACK
</span><br>
<span class="quotelev1">&gt; 	int *array_of_distrs = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_distrs[0]=MPI_DISTRIBUTE_CYCLIC;
</span><br>
<span class="quotelev1">&gt; 	array_of_distrs[1]=MPI_DISTRIBUTE_CYCLIC;
</span><br>
<span class="quotelev1">&gt; 	int *array_of_dargs = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_dargs[0]=BLOCK_SIZE;
</span><br>
<span class="quotelev1">&gt; 	array_of_dargs[1]=BLOCK_SIZE;
</span><br>
<span class="quotelev1">&gt; 	int *array_of_psizes = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_psizes[0]=Pr;
</span><br>
<span class="quotelev1">&gt; 	array_of_psizes[1]=Pc;
</span><br>
<span class="quotelev1">&gt; 	int rank = pc+pr*Pc;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_create_darray(Pr*Pc,rank, 
</span><br>
<span class="quotelev1">&gt; 2,array_of_gsizes,array_of_distrs,array_of_dargs,
</span><br>
<span class="quotelev1">&gt; 							array_of_psizes,MPI_ORDER_C,MPI_DOUBLE,&amp;this-&gt;datatype);
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_commit(&amp;this-&gt;datatype);
</span><br>
<span class="quotelev1">&gt; 	int typesize;
</span><br>
<span class="quotelev1">&gt; 	long typeextent;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_size(this-&gt;datatype,&amp;typesize);
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_extent(this-&gt;datatype,&amp;typeextent);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;type size for process rank (%d,%d) is %d doubles, type  
</span><br>
<span class="quotelev1">&gt; extent is %d doubles (up to %d).&quot;,pr,pc,typesize/(int)sizeof(double), 
</span><br>
<span class="quotelev1">&gt; (int)(typeextent/sizeof(double)),nx*ny);
</span><br>
<span class="quotelev1">&gt; 	MPI_File_open(blacs_comm,(char*)filename, MPI_MODE_RDWR,  
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;this-&gt;fid);
</span><br>
<span class="quotelev1">&gt; 	MPI_File_set_view(this-&gt;fid,this-&gt;offset 
</span><br>
<span class="quotelev1">&gt; +i*nx*ny*sizeof(double),MPI_DOUBLE,this- 
</span><br>
<span class="quotelev2">&gt; &gt;datatype,&quot;native&quot;,MPI_INFO_NULL);	
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works well when used like this, but problem is that the matrix  
</span><br>
<span class="quotelev1">&gt; itself is written in disk column-major fashion, so I would want to  
</span><br>
<span class="quotelev1">&gt; use the code as if I was reading it transposed, that is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(blacs_comm);
</span><br>
<span class="quotelev1">&gt; 	// size of each matrix
</span><br>
<span class="quotelev1">&gt; 	int *array_of_gsizes = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_gsizes[0]=this-&gt;ny;
</span><br>
<span class="quotelev1">&gt; 	array_of_gsizes[1]=this-&gt;nx;
</span><br>
<span class="quotelev1">&gt; 	// block-cyclic distritution used by ScaLAPACK
</span><br>
<span class="quotelev1">&gt; 	int *array_of_distrs = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_distrs[0]=MPI_DISTRIBUTE_CYCLIC;
</span><br>
<span class="quotelev1">&gt; 	array_of_distrs[1]=MPI_DISTRIBUTE_CYCLIC;
</span><br>
<span class="quotelev1">&gt; 	int *array_of_dargs = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_dargs[0]=BLOCK_SIZE;
</span><br>
<span class="quotelev1">&gt; 	array_of_dargs[1]=BLOCK_SIZE;
</span><br>
<span class="quotelev1">&gt; 	int *array_of_psizes = new int[2];
</span><br>
<span class="quotelev1">&gt; 	array_of_psizes[0]=Pr;
</span><br>
<span class="quotelev1">&gt; 	array_of_psizes[1]=Pc;
</span><br>
<span class="quotelev1">&gt; 	int rank = pr+pc*Pr;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_create_darray(Pr*Pc,rank, 
</span><br>
<span class="quotelev1">&gt; 2,array_of_gsizes,array_of_distrs,array_of_dargs,
</span><br>
<span class="quotelev1">&gt; 							array_of_psizes,MPI_ORDER_C,MPI_DOUBLE,&amp;this-&gt;datatype);
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_commit(&amp;this-&gt;datatype);
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_size(this-&gt;datatype,&amp;typesize);
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_extent(this-&gt;datatype,&amp;typeextent);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;type size for process rank (%d,%d) is %d doubles, type  
</span><br>
<span class="quotelev1">&gt; extent is %d doubles (up to %d).&quot;,pr,pc,typesize/(int)sizeof(double), 
</span><br>
<span class="quotelev1">&gt; (int)(typeextent/sizeof(double)),nx*ny);
</span><br>
<span class="quotelev1">&gt; 	MPI_File_open(blacs_comm,(char*)filename, MPI_MODE_RDWR,  
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;this-&gt;fid);
</span><br>
<span class="quotelev1">&gt; 	MPI_File_set_view(this-&gt;fid,this-&gt;offset 
</span><br>
<span class="quotelev1">&gt; +i*nx*ny*sizeof(double),MPI_DOUBLE,this- 
</span><br>
<span class="quotelev2">&gt; &gt;datatype,&quot;native&quot;,MPI_INFO_NULL);	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To my surprise, this code crashes while calling  
</span><br>
<span class="quotelev1">&gt; MPI_File_set_view()!!! And before you ask, I did try switching  
</span><br>
<span class="quotelev1">&gt; MPI_ORDER_C to MPI_ORDER_FORTRAN, I got the same results I am  
</span><br>
<span class="quotelev1">&gt; reporting here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I am quite intrigued by the text output of each of these  
</span><br>
<span class="quotelev1">&gt; programs: the first one will report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (0,0) is 32 doubles, type extent is 91  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (1,0) is 20 doubles, type extent is 119  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (0,1) is 24 doubles, type extent is 95  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (1,1) is 15 doubles, type extent is 123  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody know why the extents are not equal???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even weirder, the second one will report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (0,0) is 32 doubles, type extent is 91  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (1,0) is 20 doubles, type extent is 95  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (0,1) is 24 doubles, type extent is 143  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt; 	type size for process rank (1,1) is 15 doubles, type extent is 147  
</span><br>
<span class="quotelev1">&gt; doubles (up to 91).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The extent changed! I think this is somehow related to the posterior  
</span><br>
<span class="quotelev1">&gt; crash of MPI_File_set_view(), but that's as far as I can understand...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clue about what is happening? I attach the trace below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Antonio Molins, PhD Candidate
</span><br>
<span class="quotelev1">&gt; Medical Engineering and Medical Physics
</span><br>
<span class="quotelev1">&gt; Harvard - MIT Division of Health Sciences and Technology
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &quot;When a traveler reaches a fork in the road,
</span><br>
<span class="quotelev1">&gt; the &#226;&#132;&#147;1 -norm tells him to take either one way or the other,
</span><br>
<span class="quotelev1">&gt; but the &#226;&#132;&#147;2 -norm instructs him to head off into the bushes. &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			John F. Claerbout and Francis Muir, 1973
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** double free or corruption (!prev):  
</span><br>
<span class="quotelev1">&gt; 0x0000000000cf4130 ***
</span><br>
<span class="quotelev1">&gt; [login4:26709] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [login4:26708] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [login4:26708] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [login4:26708] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [login4:26709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [login4:26709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [login4:26709] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 1] /lib64/tls/libc.so.6(gsignal+0x3d) [0x36fe62e26d]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 2] /lib64/tls/libc.so.6(abort+0xfe) [0x36fe62fa6e]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 3] /lib64/tls/libc.so.6 [0x36fe6635f1]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 4] /lib64/tls/libc.so.6 [0x36fe6691fe]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 5] /lib64/tls/libc.so.6(__libc_free+0x76)  
</span><br>
<span class="quotelev1">&gt; [0x36fe669596]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a962cc4ae]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(MPI_Type_free+0x5b) [0x2a962f654f]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIOI_Flatten+0x1804) [0x2aa4603612]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [10] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
</span><br>
<span class="quotelev1">&gt; [0x2aa46088a9]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so [0x2aa45ec288]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [14] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(MPI_File_set_view+0x53) [0x2a963002ff]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [15] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
</span><br>
<span class="quotelev1">&gt; +0xc3) [0x42a50b]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [16] ./bin/test2(main+0xc2e) [0x43014a]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [17] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev1">&gt; [0x36fe61c40b]
</span><br>
<span class="quotelev1">&gt; [login4:26708] [18] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42)  
</span><br>
<span class="quotelev1">&gt; [0x41563a]
</span><br>
<span class="quotelev1">&gt; [login4:26708] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 1] /lib64/tls/libc.so.6 [0x36fe66882b]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 2] /lib64/tls/libc.so.6 [0x36fe668f8d]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 3] /lib64/tls/libc.so.6(__libc_free+0x76)  
</span><br>
<span class="quotelev1">&gt; [0x36fe669596]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 4] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a962cc4ae]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 5] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_ddt_release_args+0x93) [0x2a962d5641]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a962cc514]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_ddt_release_args+0x93) [0x2a962d5641]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a962cc514]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [10] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(MPI_Type_free+0x5b) [0x2a962f654f]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIOI_Flatten+0x147) [0x2aa4601f55]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIOI_Flatten+0x1569) [0x2aa4603377]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [14] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [15] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
</span><br>
<span class="quotelev1">&gt; [0x2aa46088a9]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [16] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_io_romio.so [0x2aa45ec288]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [17] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(MPI_File_set_view+0x53) [0x2a963002ff]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [18] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
</span><br>
<span class="quotelev1">&gt; +0xc3) [0x42a50b]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [19] ./bin/test2(main+0xc2e) [0x43014a]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [20] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev1">&gt; [0x36fe61c40b]
</span><br>
<span class="quotelev1">&gt; [login4:26709] [21] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42)  
</span><br>
<span class="quotelev1">&gt; [0x41563a]
</span><br>
<span class="quotelev1">&gt; [login4:26709] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 26708 on node  
</span><br>
<span class="quotelev1">&gt; login4.ranger.tacc.utexas.edu exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
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
&quot;Y as&#195;&#173; del poco dormir y del mucho leer,
se le sec&#195;&#179; el cerebro de manera que vino
a perder el juicio&quot;.
                                        Miguel de Cervantes
--------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>In reply to:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
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
