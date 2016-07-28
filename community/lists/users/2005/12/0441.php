<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 15 16:25:12 2005" -->
<!-- isoreceived="20051215212512" -->
<!-- sent="Thu, 15 Dec 2005 16:25:03 -0500" -->
<!-- isosent="20051215212503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] const_cast&amp;lt;&amp;gt;(), Alltoallw() and Spawn_multiple()" -->
<!-- id="79F8FA85-FC6F-439F-AC4A-B5081C38578D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820E4D3A_at_webmail.imi.nrc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-15 16:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Konstantin Karganov: "Re: [O-MPI users] MPI/C++ debugger?"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Audet, Martin: "[O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't believe I missed the Op's and Errhandlers.  Doh!
<br>
<p>And I'm equally embarrassed that I goofed on the converting the  
<br>
arrays -- I'm fully aware of the difference between the C and C++  
<br>
types.  In my defense, it's been a *long* time since I've done any  
<br>
serious C++ programming, so I thought I could just cast it away  
<br>
and... well, never mind.  :-)
<br>
<p>Thanks for catching all this -- it's committed to the trunk and will  
<br>
shortly be moved over to 1.0 branch for an eventual 1.0.2 release.
<br>
<p><p>On Dec 15, 2005, at 10:51 AM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried OpenMPI 1.0.1 and this time I had much less warnings  
</span><br>
<span class="quotelev1">&gt; related to the C++ API than I had with version 1.0.0 (I compile  
</span><br>
<span class="quotelev1">&gt; with g++ -Wall).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I nonetheless looked at the C++ headers and found that those  
</span><br>
<span class="quotelev1">&gt; warnings were still related to the use of C-style cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of them were simply casting away the const type qualifier to  
</span><br>
<span class="quotelev1">&gt; call the C API MPI functions. Those casts could easily be converted  
</span><br>
<span class="quotelev1">&gt; to the const_cast&lt;&gt;() operator specially designed to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I however found that some others were simply wrong and leading to  
</span><br>
<span class="quotelev1">&gt; faulty operations. Those casts are located in Intracomm::Alltoallw 
</span><br>
<span class="quotelev1">&gt; () and Intracomm::Spawn_multiple() methods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the first method, a pointer to a table of const MPI::Datatype  
</span><br>
<span class="quotelev1">&gt; objects is casted into a pointer to a table of MPI_Datatype types  
</span><br>
<span class="quotelev1">&gt; and in the second one, a pointer to a table of const MPI::Info  
</span><br>
<span class="quotelev1">&gt; objects is casted into a pointer to a table of MPI_Info types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is it is assumed that the MPI::Datatype and MPI::Info have  
</span><br>
<span class="quotelev1">&gt; respectively the same memory layout as the corresponding C types  
</span><br>
<span class="quotelev1">&gt; MPI_Datatype and MPI_Info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This assumption is incorrect in both cases even if MPI::Datatype  
</span><br>
<span class="quotelev1">&gt; class contains only a single data member of type MPI_Datatype and  
</span><br>
<span class="quotelev1">&gt; even if MPI::Info class contains only a single data member of type  
</span><br>
<span class="quotelev1">&gt; MPI_Info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is incorrect because MPI::Datatype and MPI::Info classes are  
</span><br>
<span class="quotelev1">&gt; polymorphics. That is each of them contains at least one virtual  
</span><br>
<span class="quotelev1">&gt; method. Since polymorphic classes needs to access the virtual  
</span><br>
<span class="quotelev1">&gt; methods table (pointer to members and offset to adjust &quot;this&quot;), the  
</span><br>
<span class="quotelev1">&gt; C++ compiler needs to insert at least another member. In all the  
</span><br>
<span class="quotelev1">&gt; implementation I've seen this is done by adding a member pointing  
</span><br>
<span class="quotelev1">&gt; to the virtual table for the exact class (named &quot;__vtbl&quot;). The  
</span><br>
<span class="quotelev1">&gt; resulting classes are then larger than they appear (ex: on my IA32  
</span><br>
<span class="quotelev1">&gt; Linux machine sizeof(MPI::Datatype)==8 and sizeof(MPI::Info)==8  
</span><br>
<span class="quotelev1">&gt; even if sizeof(MPI_Datatype)==4 and sizeof(MPI_Info)==4), the  
</span><br>
<span class="quotelev1">&gt; memory layout differs and therefore corresponding pointers cannot  
</span><br>
<span class="quotelev1">&gt; be converted by simple type casts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A table of MPI::Datatype object have then to be converted into a  
</span><br>
<span class="quotelev1">&gt; table of MPI_Datatype by a temporary table and a small loop. The  
</span><br>
<span class="quotelev1">&gt; same is true for MPI::Info and MPI_Info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified errhandler.h, intracomm.h and intracomm_inln.h files to  
</span><br>
<span class="quotelev1">&gt; implement those corrections. As expected it removes the warnings  
</span><br>
<span class="quotelev1">&gt; during compilation and should correct the conversion problems in  
</span><br>
<span class="quotelev1">&gt; Intracomm::Alltoallw() and Intracomm::Spawn_multiple() methods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bellow is the difference between my modified version of OpenMPI and  
</span><br>
<span class="quotelev1">&gt; the original one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please consider this patch for your next release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Audet, Research Officer
</span><br>
<span class="quotelev1">&gt; E: martin.audet_at_[hidden]  T: 450-641-5034
</span><br>
<span class="quotelev1">&gt; Indstrial Material Institute, National Research Council
</span><br>
<span class="quotelev1">&gt; 75 de Mortagne,
</span><br>
<span class="quotelev1">&gt; Boucherville, QC
</span><br>
<span class="quotelev1">&gt; J4B 6Y4, Canada
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/errhandler.h  
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.1ma/ompi/mpi/cxx/errhandler.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.0.1/ompi/mpi/cxx/errhandler.h     2005-11-11  
</span><br>
<span class="quotelev1">&gt; 14:21:36.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.0.1ma/ompi/mpi/cxx/errhandler.h   2005-12-14  
</span><br>
<span class="quotelev1">&gt; 15:29:56.000000000 -0500
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +124,7 @@
</span><br>
<span class="quotelev1">&gt;  #if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
</span><br>
<span class="quotelev1">&gt;      // $%%@#%# AIX/POE 2.3.0.0 makes us put in this cast here
</span><br>
<span class="quotelev1">&gt;      (void)MPI_Errhandler_create((MPI_Handler_function*)  
</span><br>
<span class="quotelev1">&gt; &amp;ompi_mpi_cxx_throw_excptn_fctn,
</span><br>
<span class="quotelev1">&gt; -                               (MPI_Errhandler *) &amp;mpi_errhandler);
</span><br>
<span class="quotelev1">&gt; +                               const_cast&lt;MPI_Errhandler *&gt; 
</span><br>
<span class="quotelev1">&gt; (&amp;mpi_errhandler));
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;      pmpi_errhandler.init();
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; @@ -134,7 +134,7 @@
</span><br>
<span class="quotelev1">&gt;    //this is called from MPI::Finalize
</span><br>
<span class="quotelev1">&gt;    inline void free() const {
</span><br>
<span class="quotelev1">&gt;  #if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
</span><br>
<span class="quotelev1">&gt; -    (void)MPI_Errhandler_free((MPI_Errhandler *) &amp;mpi_errhandler);
</span><br>
<span class="quotelev1">&gt; +    (void)MPI_Errhandler_free(const_cast&lt;MPI_Errhandler *&gt; 
</span><br>
<span class="quotelev1">&gt; (&amp;mpi_errhandler));
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;      pmpi_errhandler.free();
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/intracomm.h  
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.1ma/ompi/mpi/cxx/intracomm.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.0.1/ompi/mpi/cxx/intracomm.h      2005-11-11  
</span><br>
<span class="quotelev1">&gt; 14:21:36.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.0.1ma/ompi/mpi/cxx/intracomm.h    2005-12-14  
</span><br>
<span class="quotelev1">&gt; 16:09:29.000000000 -0500
</span><br>
<span class="quotelev1">&gt; @@ -228,6 +228,10 @@
</span><br>
<span class="quotelev1">&gt;    PMPI::Intracomm pmpi_comm;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +  // Convert an array of p_nbr Info object into an array of MPI_Info.
</span><br>
<span class="quotelev1">&gt; +  // A pointer to the allocated array is returned and must be  
</span><br>
<span class="quotelev1">&gt; eventually deleted.
</span><br>
<span class="quotelev1">&gt; +  static inline MPI_Info *convert_info_to_mpi_info(int p_nbr,  
</span><br>
<span class="quotelev1">&gt; const Info p_info_tbl[]);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  public: // JGS see above about friend decls
</span><br>
<span class="quotelev1">&gt;  #if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
</span><br>
<span class="quotelev1">&gt;    static Op* current_op;
</span><br>
<span class="quotelev1">&gt; diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/ 
</span><br>
<span class="quotelev1">&gt; intracomm_inln.h openmpi-1.0.1ma/ompi/mpi/cxx/intracomm_inln.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.0.1/ompi/mpi/cxx/intracomm_inln.h 2005-11-30  
</span><br>
<span class="quotelev1">&gt; 06:06:07.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.0.1ma/ompi/mpi/cxx/intracomm_inln.h       2005-12-14  
</span><br>
<span class="quotelev1">&gt; 16:09:35.000000000 -0500
</span><br>
<span class="quotelev1">&gt; @@ -144,13 +144,26 @@
</span><br>
<span class="quotelev1">&gt;         void *recvbuf, const int recvcounts[],
</span><br>
<span class="quotelev1">&gt;         const int rdispls[], const Datatype recvtypes[]) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +  const int comm_size = Get_size();
</span><br>
<span class="quotelev1">&gt; +  MPI_Datatype *const data_type_tbl = new MPI_Datatype [2*comm_size];
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  // This must be done because Datatype arrays cannot be converted  
</span><br>
<span class="quotelev1">&gt; directly into
</span><br>
<span class="quotelev1">&gt; +  // MPI_Datatype arrays. Since Datatype have virtual methods,  
</span><br>
<span class="quotelev1">&gt; Datatype is typically
</span><br>
<span class="quotelev1">&gt; +  // larger.
</span><br>
<span class="quotelev1">&gt; +  for (int i_rank=0; i_rank &lt; comm_size; i_rank++) {
</span><br>
<span class="quotelev1">&gt; +      data_type_tbl[i_rank            ] = sendtypes[i_rank];
</span><br>
<span class="quotelev1">&gt; +      data_type_tbl[i_rank + comm_size] = recvtypes[i_rank];
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Alltoallw(const_cast&lt;void *&gt;(sendbuf),
</span><br>
<span class="quotelev1">&gt;                        const_cast&lt;int *&gt;(sendcounts),
</span><br>
<span class="quotelev1">&gt;                       const_cast&lt;int *&gt;(sdispls),
</span><br>
<span class="quotelev1">&gt; -                      (MPI_Datatype *)(sendtypes), recvbuf,
</span><br>
<span class="quotelev1">&gt; +                      data_type_tbl,recvbuf,
</span><br>
<span class="quotelev1">&gt;                       const_cast&lt;int *&gt;(recvcounts),
</span><br>
<span class="quotelev1">&gt;                        const_cast&lt;int *&gt;(rdispls),
</span><br>
<span class="quotelev1">&gt; -                     (MPI_Datatype *)(recvtypes), mpi_comm);
</span><br>
<span class="quotelev1">&gt; +                     &amp;data_type_tbl[comm_size], mpi_comm);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  delete [] data_type_tbl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  inline void
</span><br>
<span class="quotelev1">&gt; @@ -158,7 +171,7 @@
</span><br>
<span class="quotelev1">&gt;         const MPI::Datatype &amp; datatype, const MPI::Op&amp; op,
</span><br>
<span class="quotelev1">&gt;         int root) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  current_op = (MPI::Op*)&amp;op;
</span><br>
<span class="quotelev1">&gt; +  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Reduce(const_cast&lt;void *&gt;(sendbuf), recvbuf, count,  
</span><br>
<span class="quotelev1">&gt; datatype, op, root, mpi_comm);
</span><br>
<span class="quotelev1">&gt;    current_op = (Op*)0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -167,7 +180,7 @@
</span><br>
<span class="quotelev1">&gt;  MPI::Intracomm::Allreduce(const void *sendbuf, void *recvbuf, int  
</span><br>
<span class="quotelev1">&gt; count,
</span><br>
<span class="quotelev1">&gt;           const MPI::Datatype &amp; datatype, const MPI::Op&amp; op) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  current_op = (MPI::Op*)&amp;op;
</span><br>
<span class="quotelev1">&gt; +  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Allreduce (const_cast&lt;void *&gt;(sendbuf), recvbuf,  
</span><br>
<span class="quotelev1">&gt; count, datatype,  op, mpi_comm);
</span><br>
<span class="quotelev1">&gt;    current_op = (Op*)0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -178,7 +191,7 @@
</span><br>
<span class="quotelev1">&gt;                const MPI::Datatype &amp; datatype,
</span><br>
<span class="quotelev1">&gt;                const MPI::Op&amp; op) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  current_op = (MPI::Op*)&amp;op;
</span><br>
<span class="quotelev1">&gt; +  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Reduce_scatter(const_cast&lt;void *&gt;(sendbuf), recvbuf,  
</span><br>
<span class="quotelev1">&gt; recvcounts,
</span><br>
<span class="quotelev1">&gt;                            datatype, op, mpi_comm);
</span><br>
<span class="quotelev1">&gt;    current_op = (Op*)0;
</span><br>
<span class="quotelev1">&gt; @@ -188,7 +201,7 @@
</span><br>
<span class="quotelev1">&gt;  MPI::Intracomm::Scan(const void *sendbuf, void *recvbuf, int count,
</span><br>
<span class="quotelev1">&gt;       const MPI::Datatype &amp; datatype, const MPI::Op&amp; op) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  current_op = (MPI::Op*)&amp;op;
</span><br>
<span class="quotelev1">&gt; +  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Scan(const_cast&lt;void *&gt;(sendbuf), recvbuf, count,  
</span><br>
<span class="quotelev1">&gt; datatype, op, mpi_comm);
</span><br>
<span class="quotelev1">&gt;    current_op = (Op*)0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -198,7 +211,7 @@
</span><br>
<span class="quotelev1">&gt;                               const MPI::Datatype &amp; datatype,
</span><br>
<span class="quotelev1">&gt;                               const MPI::Op&amp; op) const
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  current_op = (MPI::Op*)&amp;op;
</span><br>
<span class="quotelev1">&gt; +  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Exscan(const_cast&lt;void *&gt;(sendbuf), recvbuf, count,  
</span><br>
<span class="quotelev1">&gt; datatype, op, mpi_comm);
</span><br>
<span class="quotelev1">&gt;    current_op = (Op*)0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -328,6 +341,17 @@
</span><br>
<span class="quotelev1">&gt;    return newcomm;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +inline MPI_Info *
</span><br>
<span class="quotelev1">&gt; +MPI::Intracomm::convert_info_to_mpi_info(int p_nbr, const Info  
</span><br>
<span class="quotelev1">&gt; p_info_tbl[])
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +   MPI_Info *const mpi_info_tbl = new MPI_Info [p_nbr];
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   for (int i_tbl=0; i_tbl &lt; p_nbr; i_tbl++) {
</span><br>
<span class="quotelev1">&gt; +       mpi_info_tbl[i_tbl] = p_info_tbl[i_tbl];
</span><br>
<span class="quotelev1">&gt; +   }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   return mpi_info_tbl;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  inline MPI::Intercomm
</span><br>
<span class="quotelev1">&gt;  MPI::Intracomm::Spawn_multiple(int count,
</span><br>
<span class="quotelev1">&gt; @@ -337,10 +361,15 @@
</span><br>
<span class="quotelev1">&gt;                                       const Info array_of_info[],  
</span><br>
<span class="quotelev1">&gt; int root)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Comm newcomm;
</span><br>
<span class="quotelev1">&gt; +  MPI_Info *const array_of_mpi_info = convert_info_to_mpi_info 
</span><br>
<span class="quotelev1">&gt; (count, array_of_info);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_spawn_multiple(count, const_cast&lt;char **&gt; 
</span><br>
<span class="quotelev1">&gt; (array_of_commands),
</span><br>
<span class="quotelev1">&gt;                           const_cast&lt;char ***&gt;(array_of_argv),  
</span><br>
<span class="quotelev1">&gt; const_cast&lt;int *&gt;(array_of_maxprocs),
</span><br>
<span class="quotelev1">&gt; -                         (MPI_Info *) array_of_info, root,
</span><br>
<span class="quotelev1">&gt; +                         array_of_mpi_info, root,
</span><br>
<span class="quotelev1">&gt;                           mpi_comm, &amp;newcomm, (int *) 
</span><br>
<span class="quotelev1">&gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  delete [] array_of_mpi_info;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    return newcomm;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -354,10 +383,15 @@
</span><br>
<span class="quotelev1">&gt;                                       int array_of_errcodes[])
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Comm newcomm;
</span><br>
<span class="quotelev1">&gt; +  MPI_Info *const array_of_mpi_info = convert_info_to_mpi_info 
</span><br>
<span class="quotelev1">&gt; (count, array_of_info);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_spawn_multiple(count, const_cast&lt;char **&gt; 
</span><br>
<span class="quotelev1">&gt; (array_of_commands),
</span><br>
<span class="quotelev1">&gt;                            const_cast&lt;char ***&gt;(array_of_argv),  
</span><br>
<span class="quotelev1">&gt; const_cast&lt;int *&gt;(array_of_maxprocs),
</span><br>
<span class="quotelev1">&gt; -                          (MPI_Info *) array_of_info, root,
</span><br>
<span class="quotelev1">&gt; +                          array_of_mpi_info, root,
</span><br>
<span class="quotelev1">&gt;                            mpi_comm, &amp;newcomm, array_of_errcodes);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  delete [] array_of_mpi_info;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    return newcomm;
</span><br>
<span class="quotelev1">&gt;  }
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
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Konstantin Karganov: "Re: [O-MPI users] MPI/C++ debugger?"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Audet, Martin: "[O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
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
