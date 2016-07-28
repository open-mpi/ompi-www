<?
$subject_val = "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 22:13:38 2009" -->
<!-- isoreceived="20090823021338" -->
<!-- sent="Sat, 22 Aug 2009 22:14:04 -0400" -->
<!-- isosent="20090823021404" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather(): Which algorithm is used?" -->
<!-- id="200908222214.04349.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A90172C.7040200_at_umb.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather(): Which algorithm is used?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-22 22:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10459.php">George Markomanolis: "[OMPI users] question about algorithms for collective communication"</a>
<li><strong>Previous message:</strong> <a href="10457.php">Dr. Hans Ekkehard Plesser: "[OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>In reply to:</strong> <a href="10457.php">Dr. Hans Ekkehard Plesser: "[OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Saturday 22 August 2009 12:05:00 pm Dr. Hans Ekkehard Plesser wrote:
<br>
<span class="quotelev1">&gt; OpenMPI 1.3.3 comes with a range of algorithms for MPI_Allgather(), but I
</span><br>
<span class="quotelev1">&gt;  have not been able to find out how to check which algorithms is actually
</span><br>
<span class="quotelev1">&gt;  used.
</span><br>
You may get this information using the debug output using flag --mca 
<br>
coll_base_verbose 1, however this is turned on only, when build in debugging 
<br>
mode (aka configure --enable-debug), see variable ompi_coll_tuned_stream.
<br>
<p>So, e.g. with:
<br>
mpirun -np 4 --mca coll_base_verbose 1 --mca coll_tuned_use_dynamic_rules 1
<br>
Collective tests Allgather (31/1), comm MPI_COMM_WORLD (1/13), type MPI_INT 
<br>
(7/1)
<br>
[lap79756:05981] coll:tuned:allgather_intra_recursivedoubling rank 0, size 4
<br>
[lap79756:05981] ompi_coll_tuned_allgather_intra_dec_dynamic
<br>
[lap79756:05981] ompi_coll_tuned_allgather_intra_dec_fixed rank 0 com_size 4 
<br>
msg_length 16000
<br>
[lap79756:05982] coll:tuned:allgather_intra_recursivedoubling rank 1, size 4
<br>
[lap79756:05982] coll:tuned:allgather_intra_recursivedoubling rank 1, size 4
<br>
[lap79756:05982] coll:tuned:module_init called.
<br>
[lap79756:05982] coll:tuned:module_init MCW &amp; Dynamic
<br>
[lap79756:05982] coll:tuned:module_init Tuned is in use
<br>
[lap79756:05982] coll:tuned:module_query using intra_dynamic
<br>
[lap79756:05982] coll:tuned:module_tuned query called
<br>
[lap79756:05982] ompi_coll_tuned_allgather_intra_dec_dynamic
<br>
[lap79756:05982] ompi_coll_tuned_allgather_intra_dec_dynamic
<br>
[lap79756:05982] ompi_coll_tuned_allgather_intra_dec_fixed rank 1 com_size 4 
<br>
msg_length 16000
<br>
[lap79756:05982] ompi_coll_tuned_allgather_intra_dec_fixed rank 1 com_size 4 
<br>
msg_length 16000
<br>
[lap79756:05984] coll:tuned:allgather_intra_recursivedoubling rank 3, size 4
<br>
[lap79756:05984] coll:tuned:allgather_intra_recursivedoubling rank 3, size 4
<br>
[lap79756:05984] coll:tuned:module_init called.
<br>
[lap79756:05984] coll:tuned:module_init MCW &amp; Dynamic
<br>
[lap79756:05984] coll:tuned:module_init Tuned is in use
<br>
[lap79756:05984] coll:tuned:module_query using intra_dynamic
<br>
[lap79756:05984] coll:tuned:module_tuned query called
<br>
[lap79756:05984] ompi_coll_tuned_allgather_intra_dec_dynamic
<br>
[lap79756:05984] ompi_coll_tuned_allgather_intra_dec_dynamic
<br>
[lap79756:05984] ompi_coll_tuned_allgather_intra_dec_fixed rank 3 com_size 4 
<br>
msg_length 16000
<br>
[lap79756:05984] ompi_coll_tuned_allgather_intra_dec_fixed rank 3 com_size 4 
<br>
msg_length 16000
<br>
<p><p><span class="quotelev1">&gt; From the following message on the list I got an idea about how to select
</span><br>
<span class="quotelev1">&gt; the algoritm by hand
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/community/lists/users/2008/10/6847.php">http://www.open-mpi.org/community/lists/users/2008/10/6847.php</a>,
</span><br>
<span class="quotelev1">&gt; but I should like to be able to find out at runtime which algorithm Open
</span><br>
<span class="quotelev1">&gt;  MPI has chosen.
</span><br>
You want to use this information in Your application?
<br>
<p><p><span class="quotelev1">&gt; BTW, is one algorithm chosen the first time MPI_Allgather() is called, or
</span><br>
<span class="quotelev1">&gt;  is a new algorithm chosen for every call based on message properties?
</span><br>
If the user does not override the decision, it is done for every MPI_Allgather 
<br>
call.
<br>
With fixed rules using the tuned collectives, the decision is based on msg. 
<br>
size and whether the number of procs in the communicator is a power of 2.
<br>
With dynamic tuned collectives on, the application may even override the 
<br>
choice between calls to MPI_Allgathers...
<br>
George surely will elaborate on the details!
<br>
<p>With best regards,
<br>
Rainer
<br>
<p>PS: More information on the file format for file driven decision functions in
<br>
<a href="http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro">http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro</a>-
<br>
pvmmpi-2006.pdf
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10459.php">George Markomanolis: "[OMPI users] question about algorithms for collective communication"</a>
<li><strong>Previous message:</strong> <a href="10457.php">Dr. Hans Ekkehard Plesser: "[OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>In reply to:</strong> <a href="10457.php">Dr. Hans Ekkehard Plesser: "[OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
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
