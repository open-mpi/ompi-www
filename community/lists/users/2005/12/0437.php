<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 15 10:51:25 2005" -->
<!-- isoreceived="20051215155125" -->
<!-- sent="Thu, 15 Dec 2005 10:51:05 -0500" -->
<!-- isosent="20051215155105" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[O-MPI users] const_cast&amp;lt;&amp;gt;(), Alltoallw() and Spawn_multiple()" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820E4D3A_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-15 10:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Yaron Kretchmer: "[O-MPI users] MPI/C++ debugger?"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Brian Barrett: "Re: [O-MPI users] FT-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<li><strong>Reply:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just tried OpenMPI 1.0.1 and this time I had much less warnings related to the C++ API than I had with version 1.0.0 (I compile with g++ -Wall).
<br>
<p>I nonetheless looked at the C++ headers and found that those warnings were still related to the use of C-style cast.
<br>
<p>Some of them were simply casting away the const type qualifier to call the C API MPI functions. Those casts could easily be converted to the const_cast&lt;&gt;() operator specially designed to do this.
<br>
<p>I however found that some others were simply wrong and leading to faulty operations. Those casts are located in Intracomm::Alltoallw() and Intracomm::Spawn_multiple() methods.
<br>
<p>In the first method, a pointer to a table of const MPI::Datatype objects is casted into a pointer to a table of MPI_Datatype types and in the second one, a pointer to a table of const MPI::Info objects is casted into a pointer to a table of MPI_Info types.
<br>
<p>That is it is assumed that the MPI::Datatype and MPI::Info have respectively the same memory layout as the corresponding C types MPI_Datatype and MPI_Info.
<br>
<p>This assumption is incorrect in both cases even if MPI::Datatype class contains only a single data member of type MPI_Datatype and even if MPI::Info class contains only a single data member of type MPI_Info.
<br>
<p>It is incorrect because MPI::Datatype and MPI::Info classes are polymorphics. That is each of them contains at least one virtual method. Since polymorphic classes needs to access the virtual methods table (pointer to members and offset to adjust &quot;this&quot;), the C++ compiler needs to insert at least another member. In all the implementation I've seen this is done by adding a member pointing to the virtual table for the exact class (named &quot;__vtbl&quot;). The resulting classes are then larger than they appear (ex: on my IA32 Linux machine sizeof(MPI::Datatype)==8 and sizeof(MPI::Info)==8 even if sizeof(MPI_Datatype)==4 and sizeof(MPI_Info)==4), the memory layout differs and therefore corresponding pointers cannot be converted by simple type casts.
<br>
<p>A table of MPI::Datatype object have then to be converted into a table of MPI_Datatype by a temporary table and a small loop. The same is true for MPI::Info and MPI_Info.
<br>
<p>I modified errhandler.h, intracomm.h and intracomm_inln.h files to implement those corrections. As expected it removes the warnings during compilation and should correct the conversion problems in Intracomm::Alltoallw() and Intracomm::Spawn_multiple() methods.
<br>
<p>Bellow is the difference between my modified version of OpenMPI and the original one.
<br>
<p>Please consider this patch for your next release.
<br>
<p>Thanks,
<br>
<p>Martin Audet, Research Officer
<br>
E: martin.audet_at_[hidden]  T: 450-641-5034
<br>
Indstrial Material Institute, National Research Council
<br>
75 de Mortagne,
<br>
Boucherville, QC
<br>
J4B 6Y4, Canada 
<br>
<p><p><p><p><p>diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/errhandler.h openmpi-1.0.1ma/ompi/mpi/cxx/errhandler.h
<br>
--- openmpi-1.0.1/ompi/mpi/cxx/errhandler.h	2005-11-11 14:21:36.000000000 -0500
<br>
+++ openmpi-1.0.1ma/ompi/mpi/cxx/errhandler.h	2005-12-14 15:29:56.000000000 -0500
<br>
@@ -124,7 +124,7 @@
<br>
&nbsp;#if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// $%%@#%# AIX/POE 2.3.0.0 makes us put in this cast here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)MPI_Errhandler_create((MPI_Handler_function*) &amp;ompi_mpi_cxx_throw_excptn_fctn,
<br>
-				(MPI_Errhandler *) &amp;mpi_errhandler); 
<br>
+				const_cast&lt;MPI_Errhandler *&gt;(&amp;mpi_errhandler)); 
<br>
&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_errhandler.init();
<br>
&nbsp;#endif
<br>
@@ -134,7 +134,7 @@
<br>
&nbsp;&nbsp;&nbsp;//this is called from MPI::Finalize
<br>
&nbsp;&nbsp;&nbsp;inline void free() const {
<br>
&nbsp;#if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
<br>
-    (void)MPI_Errhandler_free((MPI_Errhandler *) &amp;mpi_errhandler); 
<br>
+    (void)MPI_Errhandler_free(const_cast&lt;MPI_Errhandler *&gt;(&amp;mpi_errhandler)); 
<br>
&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_errhandler.free();
<br>
&nbsp;#endif
<br>
diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/intracomm.h openmpi-1.0.1ma/ompi/mpi/cxx/intracomm.h
<br>
--- openmpi-1.0.1/ompi/mpi/cxx/intracomm.h	2005-11-11 14:21:36.000000000 -0500
<br>
+++ openmpi-1.0.1ma/ompi/mpi/cxx/intracomm.h	2005-12-14 16:09:29.000000000 -0500
<br>
@@ -228,6 +228,10 @@
<br>
&nbsp;&nbsp;&nbsp;PMPI::Intracomm pmpi_comm;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
+  // Convert an array of p_nbr Info object into an array of MPI_Info.
<br>
+  // A pointer to the allocated array is returned and must be eventually deleted.
<br>
+  static inline MPI_Info *convert_info_to_mpi_info(int p_nbr, const Info p_info_tbl[]);
<br>
+
<br>
&nbsp;public: // JGS see above about friend decls
<br>
&nbsp;#if ! 0 /* OMPI_ENABLE_MPI_PROFILING */
<br>
&nbsp;&nbsp;&nbsp;static Op* current_op;
<br>
diff --recursive --unified openmpi-1.0.1/ompi/mpi/cxx/intracomm_inln.h openmpi-1.0.1ma/ompi/mpi/cxx/intracomm_inln.h
<br>
--- openmpi-1.0.1/ompi/mpi/cxx/intracomm_inln.h	2005-11-30 06:06:07.000000000 -0500
<br>
+++ openmpi-1.0.1ma/ompi/mpi/cxx/intracomm_inln.h	2005-12-14 16:09:35.000000000 -0500
<br>
@@ -144,13 +144,26 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *recvbuf, const int recvcounts[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rdispls[], const Datatype recvtypes[]) const
<br>
&nbsp;{
<br>
+  const int comm_size = Get_size();
<br>
+  MPI_Datatype *const data_type_tbl = new MPI_Datatype [2*comm_size];
<br>
+
<br>
+  // This must be done because Datatype arrays cannot be converted directly into
<br>
+  // MPI_Datatype arrays. Since Datatype have virtual methods, Datatype is typically
<br>
+  // larger.
<br>
+  for (int i_rank=0; i_rank &lt; comm_size; i_rank++) {
<br>
+      data_type_tbl[i_rank            ] = sendtypes[i_rank];
<br>
+      data_type_tbl[i_rank + comm_size] = recvtypes[i_rank];
<br>
+  }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Alltoallw(const_cast&lt;void *&gt;(sendbuf), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;int *&gt;(sendcounts),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;int *&gt;(sdispls),
<br>
-                      (MPI_Datatype *)(sendtypes), recvbuf,
<br>
+                      data_type_tbl,recvbuf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;int *&gt;(recvcounts), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;int *&gt;(rdispls),
<br>
-		      (MPI_Datatype *)(recvtypes), mpi_comm);
<br>
+		      &amp;data_type_tbl[comm_size], mpi_comm);
<br>
+
<br>
+  delete [] data_type_tbl;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;inline void
<br>
@@ -158,7 +171,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, const MPI::Op&amp; op, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int root) const
<br>
&nbsp;{
<br>
-  current_op = (MPI::Op*)&amp;op;
<br>
+  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Reduce(const_cast&lt;void *&gt;(sendbuf), recvbuf, count, datatype, op, root, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;current_op = (Op*)0;
<br>
&nbsp;}
<br>
@@ -167,7 +180,7 @@
<br>
&nbsp;MPI::Intracomm::Allreduce(const void *sendbuf, void *recvbuf, int count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, const MPI::Op&amp; op) const
<br>
&nbsp;{
<br>
-  current_op = (MPI::Op*)&amp;op;
<br>
+  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Allreduce (const_cast&lt;void *&gt;(sendbuf), recvbuf, count, datatype,  op, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;current_op = (Op*)0;
<br>
&nbsp;}
<br>
@@ -178,7 +191,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Op&amp; op) const
<br>
&nbsp;{
<br>
-  current_op = (MPI::Op*)&amp;op;
<br>
+  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Reduce_scatter(const_cast&lt;void *&gt;(sendbuf), recvbuf, recvcounts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype, op, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;current_op = (Op*)0;
<br>
@@ -188,7 +201,7 @@
<br>
&nbsp;MPI::Intracomm::Scan(const void *sendbuf, void *recvbuf, int count, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, const MPI::Op&amp; op) const
<br>
&nbsp;{
<br>
-  current_op = (MPI::Op*)&amp;op;
<br>
+  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Scan(const_cast&lt;void *&gt;(sendbuf), recvbuf, count, datatype, op, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;current_op = (Op*)0;
<br>
&nbsp;}
<br>
@@ -198,7 +211,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Op&amp; op) const
<br>
&nbsp;{
<br>
-  current_op = (MPI::Op*)&amp;op;
<br>
+  current_op = const_cast&lt;MPI::Op*&gt;(&amp;op);
<br>
&nbsp;&nbsp;&nbsp;(void)MPI_Exscan(const_cast&lt;void *&gt;(sendbuf), recvbuf, count, datatype, op, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;current_op = (Op*)0;
<br>
&nbsp;}
<br>
@@ -328,6 +341,17 @@
<br>
&nbsp;&nbsp;&nbsp;return newcomm;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+inline MPI_Info *
<br>
+MPI::Intracomm::convert_info_to_mpi_info(int p_nbr, const Info p_info_tbl[])
<br>
+{
<br>
+   MPI_Info *const mpi_info_tbl = new MPI_Info [p_nbr];
<br>
+
<br>
+   for (int i_tbl=0; i_tbl &lt; p_nbr; i_tbl++) {
<br>
+       mpi_info_tbl[i_tbl] = p_info_tbl[i_tbl];
<br>
+   }
<br>
+
<br>
+   return mpi_info_tbl;
<br>
+}
<br>
&nbsp;
<br>
&nbsp;inline MPI::Intercomm
<br>
&nbsp;MPI::Intracomm::Spawn_multiple(int count, 
<br>
@@ -337,10 +361,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const Info array_of_info[], int root)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm newcomm;
<br>
+  MPI_Info *const array_of_mpi_info = convert_info_to_mpi_info(count, array_of_info); 
<br>
+
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_spawn_multiple(count, const_cast&lt;char **&gt;(array_of_commands), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;char ***&gt;(array_of_argv), const_cast&lt;int *&gt;(array_of_maxprocs),
<br>
-			  (MPI_Info *) array_of_info, root,
<br>
+			  array_of_mpi_info, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_comm, &amp;newcomm, (int *)MPI_ERRCODES_IGNORE);
<br>
+
<br>
+  delete [] array_of_mpi_info;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;return newcomm;
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -354,10 +383,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int array_of_errcodes[])
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm newcomm;
<br>
+  MPI_Info *const array_of_mpi_info = convert_info_to_mpi_info(count, array_of_info); 
<br>
+
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_spawn_multiple(count, const_cast&lt;char **&gt;(array_of_commands), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const_cast&lt;char ***&gt;(array_of_argv), const_cast&lt;int *&gt;(array_of_maxprocs),
<br>
-                          (MPI_Info *) array_of_info, root,
<br>
+                          array_of_mpi_info, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_comm, &amp;newcomm, array_of_errcodes);
<br>
+
<br>
+  delete [] array_of_mpi_info;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;return newcomm;
<br>
&nbsp;}
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Yaron Kretchmer: "[O-MPI users] MPI/C++ debugger?"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Brian Barrett: "Re: [O-MPI users] FT-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<li><strong>Reply:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
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
