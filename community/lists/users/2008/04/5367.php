<?
$subject_val = "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 11:41:02 2008" -->
<!-- isoreceived="20080410154102" -->
<!-- sent="Thu, 10 Apr 2008 10:40:43 -0500" -->
<!-- isosent="20080410154043" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..." -->
<!-- id="47FE34FB.90908_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E91872E4-A082-41A7-B95F-71A0BC1C5C1F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator...<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 11:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
done...
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Edgar --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you file a CMR for v1.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2008, at 8:10 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; thanks for reporting the bug, it is fixed on the trunk. The problem  
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt; this time not in the algorithm, but in the checking of the
</span><br>
<span class="quotelev2">&gt;&gt; preconditions. If recvcount was zero and the rank not equal to the  
</span><br>
<span class="quotelev2">&gt;&gt; rank
</span><br>
<span class="quotelev2">&gt;&gt; of the root, than we did not even start the scatter, assuming that  
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; was nothing to do. For inter-communicators the check has to be however
</span><br>
<span class="quotelev2">&gt;&gt; extended to accept recvcount=0 for root=MPI_ROOT. The fix is in the
</span><br>
<span class="quotelev2">&gt;&gt; trunk in rev. 18123.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think that anybody answered to your email so far, I'll have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look at it on thursday...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Audet, Martin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if it is my sample code or if it is a problem whit  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Scatter() on inter-communicator (maybe similar to the problem  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we found with MPI_Allgather() on inter-communicator a few weeks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ago) but a simple program I wrote freeze during its second  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iteration of a loop doing an MPI_Scatter() over an inter- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example if I compile as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpicc -Wall scatter_bug.c -o scatter_bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get no error or warning. Then if a start it with np=2 as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    mpiexec -n 2 ./scatter_bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it prints:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   beginning Scatter i_root_group=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ending Scatter i_root_group=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   beginning Scatter i_root_group=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then hang...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note also that if I change the for loop to execute only the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Scatter() of the second iteration (e.g. replacing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;i_root_group=0;&quot; by &quot;i_root_group=1;&quot;), it prints:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    beginning Scatter i_root_group=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then hang...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem therefore seems to be related with the second  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iteration itself.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please note that this program run fine with mpich2 1.0.7rc2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ch3:sock device) for many different number of process (np) when  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the executable is ran with or without valgrind.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The OpenMPI version I use is 1.2.6rc3 and was configured as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ./configure --prefix=/usr/local/openmpi-1.2.6rc3 --disable-mpi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; f77 --disable-mpi-f90 --disable-mpi-cxx --disable-cxx-exceptions -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with-io-romio-flags=--with-file-system=ufs+nfs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note also that all process (when using OpenMPI or mpich2) were  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; started on the same machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also if you look at source code, you will notice that some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arguments to MPI_Scatter() are NULL or 0. This may look strange  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and problematic when using a normal intra-communicator. However  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; according to the book &quot;MPI - The complete reference&quot; vol 2 about  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI-2, for MPI_Scatter() with an inter-communicator:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &quot;The sendbuf, sendcount and sendtype arguments are significant  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only at the root process. The recvbuf, recvcount, and recvtype  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arguments are significant only at the processes of the leaf group.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If anyone else can have a look at this program and try it it would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be helpful.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Martin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int ret_code = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int comm_size, comm_rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   if (comm_size &gt; 1) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm subcomm, intercomm;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      const int group_id = comm_rank % 2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      int i_root_group;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* split process in two groups:  even and odd comm_ranks. */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm_split(MPI_COMM_WORLD, group_id, 0, &amp;subcomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* The remote leader comm_rank for even and odd groups are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; respectively: 1 and 0 */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Intercomm_create(subcomm, 0, MPI_COMM_WORLD, 1-group_id,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0, &amp;intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* for i_root_group==0 process with comm_rank==0 scatter data  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to all process with odd  comm_rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* for i_root_group==1 process with comm_rank==1 scatter data  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to all process with even comm_rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      for (i_root_group=0; i_root_group &lt; 2; i_root_group++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if (comm_rank == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            printf(&quot;beginning Scatter i_root_group=%d 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \n&quot;,i_root_group);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if (group_id == i_root_group) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            const int  is_root  = (comm_rank == i_root_group);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            int       *send_buf = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if (is_root) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               const int nbr_other = (comm_size+i_root_group)/2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               int       ii;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               send_buf = malloc(nbr_other*sizeof(*send_buf));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               for (ii=0; ii &lt; nbr_other; ii++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   send_buf[ii] = ii;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MPI_Scatter(send_buf, 1, MPI_INT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                        NULL,     0, MPI_INT, (is_root ? MPI_ROOT :  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_PROC_NULL), intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if (is_root) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               free(send_buf);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            int an_int;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MPI_Scatter(NULL,    0, MPI_INT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                        &amp;an_int, 1, MPI_INT, 0, intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if (comm_rank == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            printf(&quot;ending Scatter i_root_group=%d\n&quot;,i_root_group);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm_free(&amp;intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm_free(&amp;subcomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      fprintf(stderr, &quot;%s: error this program must be started np &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1\n&quot;, argv[0]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      ret_code = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   return ret_code;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
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
