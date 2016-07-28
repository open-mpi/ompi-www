<?
$subject_val = "[OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 19:22:41 2013" -->
<!-- isoreceived="20130220002241" -->
<!-- sent="Wed, 20 Feb 2013 00:22:35 +0000" -->
<!-- isosent="20130220002235" -->
<!-- name="Steve Angelovich" -->
<!-- email="SAngelovich_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi/java question" -->
<!-- id="7884BCDCDF0B084E9B380CD8AB04D786138529_at_NP1EXMB025.corp.halliburton.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpi/java question<br>
<strong>From:</strong> Steve Angelovich (<em>SAngelovich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-19 19:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12127.php">Bhagya Raju K: "[OMPI devel] Invitation to connect on LinkedIn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12130.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>We ran into a  problem using openmpi from java with a Java data type of long when doing bcast and reduce operations.
<br>
<p>*** An error occurred in MPI_Allreduce: the reduction operation MPI_MIN is not defined on the MPI_LONG_INT datatype
<br>
*** reported by process [211105480705,0]
<br>
*** on communicator MPI COMMUNICATOR 4 DUP FROM 0
<br>
*** MPI_ERR_OP: invalid reduce operation
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>Looking at ompi/mpi/java/c/mpi_Datatype.c it looks like an MPI_LONG_INT type is being used.  It seems this should be an MPI_LONG_LONG.  If I change this data type I'm able to do bcast and reduce operations via the java interface.  Does this look like a bug or am I missing something else?
<br>
<p><p><p>--- openmpi-1.7rc6/ompi/mpi/java/c/mpi_Datatype.c       2013-02-19 15:44:13.299046000 -0600
<br>
+++ openmpi-1.9a1r28069/ompi/mpi/java/c/mpi_Datatype.c  2013-02-17 20:00:14.000000000 -0600
<br>
@@ -60,7 +60,7 @@
<br>
<p>MPI_Datatype Dts[] = { MPI_DATATYPE_NULL, MPI_BYTE,  MPI_SHORT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SHORT,         MPI_BYTE,  MPI_INT,
<br>
-                       MPI_LONG_LONG,      MPI_FLOAT, MPI_DOUBLE,
<br>
+                       MPI_LONG_INT,      MPI_FLOAT, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_PACKED,        MPI_LB,    MPI_UB,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_BYTE };
<br>
<p><p>Thanks,
<br>
Steve
<br>
<p>----------------------------------------------------------------------
<br>
This e-mail, including any attached files, may contain confidential and privileged information for the sole use of the intended recipient.  Any review, use, distribution, or disclosure by others is strictly prohibited.  If you are not the intended recipient (or authorized to receive information for the intended recipient), please contact the sender by reply e-mail and delete all copies of this message.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12127.php">Bhagya Raju K: "[OMPI devel] Invitation to connect on LinkedIn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12130.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
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
