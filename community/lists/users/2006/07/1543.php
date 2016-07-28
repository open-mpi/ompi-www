<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 10:03:17 2006" -->
<!-- isoreceived="20060704140317" -->
<!-- sent="Tue, 4 Jul 2006 08:02:42 -0600" -->
<!-- isosent="20060704140242" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where can I get mpi api reference" -->
<!-- id="477232E3-BABE-4265-9735-F5ED6BF03475_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1151995872.4956.8.camel_at_localhost" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 10:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
<li><strong>In reply to:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2006, at 12:51 AM, Manal Helal wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to compile a code that was done for MPICH2 to openmpi 1.1,
</span><br>
<span class="quotelev1">&gt; and I am getting a warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  warning: passing argument 3 of &#145;MPI_Irecv&#146; makes pointer from integer
</span><br>
<span class="quotelev1">&gt; without a cast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv takes the third parameter (the buffer type) as integer
</span><br>
<span class="quotelev1">&gt; (MPI_Datatype), and I am using constants declared with (#define) and
</span><br>
<span class="quotelev1">&gt; these used to work fine with me on MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the MPI APIs interfaces different in open-mpi? if so, where can I
</span><br>
<span class="quotelev1">&gt; get this reference?
</span><br>
<p>Your problem is the assumption that a datatype is an integer.  The  
<br>
standard does not define the type of MPI_DATATYPE.  MPICH uses  
<br>
integers, but Open MPI uses pointers to structures.  Instead of using  
<br>
your own #defines for datatypes, you need to use the defined MPI  
<br>
datatypes (MPI_INT, MPI_DOUBLE, etc.) or derived datatypes.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
<li><strong>In reply to:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
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
