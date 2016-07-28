<?
$subject_val = "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 25 23:38:07 2010" -->
<!-- isoreceived="20100426033807" -->
<!-- sent="Sun, 25 Apr 2010 20:38:54 -0700" -->
<!-- isosent="20100426033854" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to &amp;quot;guess&amp;quot; the incoming data type ?" -->
<!-- id="4BD50ACE.7050807_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1272203168.4867.8257.camel_at_zlarin" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-25 23:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12774.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12772.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvestre Ledru wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am currently extending an application with MPI capabilities. 
</span><br>
<span class="quotelev1">&gt;This high-level application allows users to use dynamic types. Therefor,
</span><br>
<span class="quotelev1">&gt;on the slaves, I have no way to know what the master will send me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Therefor, in the slave side, I need to &quot;guess&quot; what I am receiving.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For example, I am using contiguous data on the master defined this way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Datatype matrixOfDouble;
</span><br>
<span class="quotelev1">&gt;MPI_Type_contiguous(size, MPI_DOUBLE, &amp;matrixOfDouble);
</span><br>
<span class="quotelev1">&gt;MPI_Type_commit(&amp;matrixOfDouble);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;sent this way:
</span><br>
<span class="quotelev1">&gt;double A[] = {1,3,3,2,3,4};
</span><br>
<span class="quotelev1">&gt;MPI_Send(&amp;A, 1, matrixOfDouble, i, TAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On the slave, in my example, since I know I am going to receive a
</span><br>
<span class="quotelev1">&gt;matrixOfDouble, I can do the following:
</span><br>
<span class="quotelev1">&gt;MPI_Probe( MPI_ANY_SOURCE, TAG, MPI_COMM_WORLD, &amp;stat );
</span><br>
<span class="quotelev1">&gt;MPI_Get_elements( &amp;stat, matrixOfDouble, &amp;count);
</span><br>
<span class="quotelev1">&gt;double BRecv[count];
</span><br>
<span class="quotelev1">&gt;MPI_Recv(BRecv, BUFSIZE, matrixOfDouble, i, TAG, MPI_COMM_WORLD, &amp;stat)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would like to know if (and how) it is possible on the slave side to
</span><br>
<span class="quotelev1">&gt;know that the received type is matrixOfDouble ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If it is not possible, is there any other way in MPI ?
</span><br>
<span class="quotelev1">&gt;(I would like to avoid a extra master=&gt; slave message to send the type).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Could you encode it into the tag?  Or, append a data type to the front 
<br>
of each message?  Basically, you need to add this information somehow.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12774.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12772.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12795.php">Jed Brown: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
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
