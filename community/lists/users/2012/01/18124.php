<?
$subject_val = "Re: [OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 12:10:09 2012" -->
<!-- isoreceived="20120110171009" -->
<!-- sent="Tue, 10 Jan 2012 18:10:05 +0100" -->
<!-- isosent="20120110171005" -->
<!-- name="Anas Al-Trad" -->
<!-- email="anas.altrad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="CA+H1izOJ=8eq7E7kE7GUGfjFB1=JbiNm4pWHVjYZ3JdYw8bn1A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23F6A326-CB15-4DAB-A8A1-56A7ECE88055_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Anas Al-Trad (<em>anas.altrad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 12:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>In reply to:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it is a good question I asked it myself at the first but then I said it
<br>
should be correct but anyway I want to confirm that:
<br>
her is the code snippet of the program:
<br>
...
<br>
int ranks[size];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i &lt; size; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
ranks[i] = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
...
<br>
<p>for(p=8; p &lt;= (size); p+=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!grid_init(p, 1)) continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( (p&gt;=m) || (p&gt;=k) || (p&gt;=n) )
<br>
break;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_incl(world_group, p, ranks, &amp;working_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_create(MPI_COMM_WORLD, working_group, &amp;working_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(working_comm != MPI_COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
...
<br>
variant_run(&amp;variant5, C, m, k, n, my_rank, p, working_comm);
<br>
...
<br>
MPI_Group_free(&amp;working_group);
<br>
MPI_Comm_free(&amp;working_comm);
<br>
}
<br>
<p>Inside variant_run, it calls this function where the error is:
<br>
void Compute_SUMMA1(Matrix* A, Matrix* B, Matrix *C, size_t M, size_t K,
<br>
size_t N, size_t my_rank, size_t size, MPI_Comm comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C-&gt;block_matrix = gsl_matrix_calloc(A-&gt;block_matrix-&gt;size1,
<br>
B-&gt;block_matrix-&gt;size2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C-&gt;distribution_type = TwoD_Block;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm grid_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int dim[2], period[2], reorder = 0, ndims = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int coord[2], id;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;dim[0] = global.PR; dim[1] = global.PC;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;period[0] = 0; period[1] = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int ss, rr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group comm_group;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_group(comm, &amp;comm_group );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_size( comm_group, &amp;ss);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_rank( comm_group, &amp;rr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(ss == 6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
//printf(&quot;M %d K %d N %d
<br>
//printf(&quot;my_rank in comm %d   my_rank in world_comm %d\n&quot;, rr, my_rank);
<br>
//printf(&quot; comm size %d  my_rank in comm %d   my_rank in world_comm %d\n&quot;,
<br>
ss, rr, my_rank);
<br>
//printf(&quot;SUMMA ... PR %d  PC %d\n&quot;, global.PR, global.PC);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Barrier(comm);
<br>
//     if(my_rank == 0)
<br>
//     printf(&quot;my_rank %d  ndims %d  dim[0] %d  dim[1] %d  period[0] %d
<br>
&nbsp;period[1] %d  reorder %d\n&quot;,
<br>
//    my_rank, ndims, dim[0], dim[1], period[0], period[1], reorder);
<br>
//     if(comm == MPI_COMM_NULL)
<br>
//       printf(&quot;my_rank %d  comm is empty\n&quot;, my_rank);
<br>
//
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_create(comm, ndims, dim, period, reorder, &amp;grid_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm Acomm, Bcomm;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// create column subgrids
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int remain[2]; //, mdims, dims[2], row_coords[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remain[0] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remain[1] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_sub(grid_comm, remain, &amp;Bcomm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;remain[0] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remain[1] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_sub(grid_comm, remain, &amp;Acomm);
<br>
...
<br>
}
<br>
<p><p>As you can see, all ranks will call grid_init which is a global func that
<br>
returns the grid dims, if it is executed for ranks 24 will produce 4X6 and
<br>
for 96 produce 8X12 and will store the result in global structure with PR
<br>
and PC. As it is executed by all prcesses and I checked for rank 0 and some
<br>
other processes and the result is correct so I assume it should be correct
<br>
for all other processes.
<br>
<p>So the grid_comm is correct which is an input to MPI_Cart_sub. The ranks in
<br>
the working_comm and in MPI_COMM_WORLD should be the same and this should
<br>
be correct and it is according to filling the rank array at the beginning
<br>
of this code snippet.
<br>
<p><p><p>On Tue, Jan 10, 2012 at 5:25 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This may be a dumb question, but are you 100% sure that the input values
</span><br>
<span class="quotelev1">&gt; are correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2012, at 8:16 AM, Anas Al-Trad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Hi Ralph, I changed the intel icc module from 12.1.0 to 11.1.069, the
</span><br>
<span class="quotelev1">&gt; previous default one used at a Neolith Cluster. I submitted the job and I
</span><br>
<span class="quotelev1">&gt; still waiting for the result. Here is the message of the segmentation fault:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] Signal: Floating point exception (8)
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] Failing at address: 0x2ba640e74627
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 0] /lib64/libc.so.6 [0x2ba641e162d0]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 1]
</span><br>
<span class="quotelev1">&gt; /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_coords+0x43)
</span><br>
<span class="quotelev1">&gt; [0x2ba640e74627]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 2]
</span><br>
<span class="quotelev1">&gt; /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_sub+0x1d5)
</span><br>
<span class="quotelev1">&gt; [0x2ba640e74acd]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 3]
</span><br>
<span class="quotelev1">&gt; /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(MPI_Cart_sub+0x35)
</span><br>
<span class="quotelev1">&gt; [0x2ba640e472d9]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(Compute_SUMMA1+0x226)
</span><br>
<span class="quotelev1">&gt; [0x4088da]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(variant_run+0xb2)
</span><br>
<span class="quotelev1">&gt; [0x409058]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(main+0xf90) [0x40eeba]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2ba641e03994]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] [ 8] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o
</span><br>
<span class="quotelev1">&gt; [0x403fd9]
</span><br>
<span class="quotelev2">&gt; &gt; [n764:29867] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when I run my application, sometimes I get this error and sometimes it
</span><br>
<span class="quotelev1">&gt; is stuck in the middle.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>In reply to:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
