<?
$subject_val = "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:19:46 2008" -->
<!-- isoreceived="20081031151946" -->
<!-- sent="Fri, 31 Oct 2008 11:19:39 -0400" -->
<!-- isosent="20081031151939" -->
<!-- name="Antonio Molins" -->
<!-- email="amolins_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&amp;gt;array_of_gsizes[1]" -->
<!-- id="D4A0263B-0703-4EAD-90F6-E24BEF9CB374_at_mit.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5274115E-C3E5-413A-BF45-8BCA1A340944_at_mit.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]<br>
<strong>From:</strong> Antonio Molins (<em>amolins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>The problem in a nutshell: it looks like, when I use  
<br>
MPI_Type_create_darray with an argument array_of_gsizes where  
<br>
array_of_gsizes[0]&gt;array_of_gsizes[1], the datatype returned goes  
<br>
through MPI_Type_commit() just fine, but then it causes  
<br>
MPI_File_set_view to crash!! Any idea as to why this is happening?
<br>
<p>A
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Antonio Molins, PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; Medical Engineering and Medical Physics
</span><br>
<span class="quotelev2">&gt;&gt; Harvard - MIT Division of Health Sciences and Technology
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &quot;When a traveler reaches a fork in the road,
</span><br>
<span class="quotelev2">&gt;&gt; the &#226;&#132;&#147;1 -norm tells him to take either one way or the other,
</span><br>
<span class="quotelev2">&gt;&gt; but the &#226;&#132;&#147;2 -norm instructs him to head off into the bushes. &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 			John F. Claerbout and Francis Muir, 1973
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** glibc detected *** double free or corruption (!prev):  
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000cf4130 ***
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] Failing at address: 0x18
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 1] /lib64/tls/libc.so.6(gsignal+0x3d) [0x36fe62e26d]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 2] /lib64/tls/libc.so.6(abort+0xfe) [0x36fe62fa6e]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 3] /lib64/tls/libc.so.6 [0x36fe6635f1]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 4] /lib64/tls/libc.so.6 [0x36fe6691fe]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 5] /lib64/tls/libc.so.6(__libc_free+0x76)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x36fe669596]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a962cc4ae]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(MPI_Type_free+0x5b) [0x2a962f654f]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIOI_Flatten+0x1804) [0x2aa4603612]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [10] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aa46088a9]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so [0x2aa45ec288]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [14] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(MPI_File_set_view+0x53) [0x2a963002ff]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [15] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
</span><br>
<span class="quotelev2">&gt;&gt; +0xc3) [0x42a50b]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [16] ./bin/test2(main+0xc2e) [0x43014a]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [17] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x36fe61c40b]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] [18] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x41563a]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26708] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 0] /lib64/tls/libpthread.so.0 [0x36ff10c5b0]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 1] /lib64/tls/libc.so.6 [0x36fe66882b]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 2] /lib64/tls/libc.so.6 [0x36fe668f8d]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 3] /lib64/tls/libc.so.6(__libc_free+0x76)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x36fe669596]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 4] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a962cc4ae]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 5] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(ompi_ddt_release_args+0x93) [0x2a962d5641]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 6] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a962cc514]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 7] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(ompi_ddt_release_args+0x93) [0x2a962d5641]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 8] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a962cc514]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [ 9] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(ompi_ddt_destroy+0x65) [0x2a962cd31d]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [10] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(MPI_Type_free+0x5b) [0x2a962f654f]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [11] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIOI_Flatten+0x147) [0x2aa4601f55]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [12] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIOI_Flatten+0x1569) [0x2aa4603377]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [13] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIOI_Flatten_datatype+0xe7) [0x2aa46017fd]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [14] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(ADIO_Set_view+0x14f) [0x2aa45ecb57]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [15] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x1dd)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aa46088a9]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [16] /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio.so [0x2aa45ec288]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [17] /opt/apps/intel10_1/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(MPI_File_set_view+0x53) [0x2a963002ff]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [18] ./bin/test2(_ZN14pMatCollection3getEiP7pMatrix 
</span><br>
<span class="quotelev2">&gt;&gt; +0xc3) [0x42a50b]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [19] ./bin/test2(main+0xc2e) [0x43014a]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [20] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x36fe61c40b]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] [21] ./bin/test2(_ZNSt8ios_base4InitD1Ev+0x42)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x41563a]
</span><br>
<span class="quotelev2">&gt;&gt; [login4:26709] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 2 with PID 26708 on node  
</span><br>
<span class="quotelev2">&gt;&gt; login4.ranger.tacc.utexas.edu exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &quot;Y as&#195;&#173; del poco dormir y del mucho leer,
</span><br>
<span class="quotelev1">&gt; se le sec&#195;&#179; el cerebro de manera que vino
</span><br>
<span class="quotelev1">&gt; a perder el juicio&quot;.
</span><br>
<span class="quotelev1">&gt;                                        Miguel de Cervantes
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
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
&quot;When a traveler reaches a fork in the road,
the &#226;&#132;&#147;1 -norm tells him to take either one way or the other,
but the &#226;&#132;&#147;2 -norm instructs him to head off into the bushes. &quot;
			John F. Claerbout and Francis Muir, 1973
--------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
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
