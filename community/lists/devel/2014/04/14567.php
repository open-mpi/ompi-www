<?
$subject_val = "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 12:44:50 2014" -->
<!-- isoreceived="20140421164450" -->
<!-- sent="Mon, 21 Apr 2014 12:44:46 -0400" -->
<!-- isosent="20140421164446" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults" -->
<!-- id="00D76B1A-5C19-4350-8CB2-B987228FDA23_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBww6mVvdAFYUdF0V0hzQarx8Ef5jCOYRfd8NTxGPKwuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 12:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Previous message:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. Commit r31466.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Apr 21, 2014, at 07:56 , Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe the problem is in the following source code line
</span><br>
<span class="quotelev1">&gt; (file:ompi_datatype_args.c, line:221):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/datatype/ompi_datatype_args.c?at=v1.8#cl-221">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/datatype/ompi_datatype_args.c?at=v1.8#cl-221</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you should just remove that bogus line, and that's all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat type_hindexed_block.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Aint disps[] = {0};
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype datatype;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_create_hindexed_block(1, 1, disps, MPI_BYTE, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc type_hindexed_block.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] Failing at address: 0x6a
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 0] /lib64/libpthread.so.0[0x327c40f750]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 1] /lib64/libc.so.6[0x327bc94126]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/1.8.0/lib/libmpi.so.1(ompi_datatype_set_args+0x7f1)[0x7f8f0158b62a]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/1.8.0/lib/libmpi.so.1(MPI_Type_create_hindexed_block+0x24d)[0x7f8f015cedc8]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 4] ./a.out[0x40080c]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 5] /lib64/libc.so.6(__libc_start_main+0xf5)[0x327bc21d65]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] [ 6] ./a.out[0x4006f9]
</span><br>
<span class="quotelev1">&gt; [kw2060:20304] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14563.php">http://www.open-mpi.org/community/lists/devel/2014/04/14563.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Previous message:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
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
