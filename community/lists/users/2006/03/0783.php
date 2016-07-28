<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 08:21:55 2006" -->
<!-- isoreceived="20060306132155" -->
<!-- sent="Mon, 06 Mar 2006 14:11:23 +0100" -->
<!-- isosent="20060306131123" -->
<!-- name="Benoit Semelin" -->
<!-- email="benoit.semelin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 problem." -->
<!-- id="440C34FB.6040500_at_obspm.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B73C4A2-217C-46DA-A6F0-6A3D402DD3B7_at_open-mpi.org" -->
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
<strong>From:</strong> Benoit Semelin (<em>benoit.semelin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 08:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;Second topic:
</span><br>
<span class="quotelev2">&gt;&gt;I am using 3 processors
</span><br>
<span class="quotelev2">&gt;&gt;I am calling a series of MPI_SCATTER which work when I send  
</span><br>
<span class="quotelev2">&gt;&gt;messages of
</span><br>
<span class="quotelev2">&gt;&gt;5 ko to the other processors, fails at the second scatter if I sent
</span><br>
<span class="quotelev2">&gt;&gt;messages of ~10 ko, and fails at the first scatter for bigger  
</span><br>
<span class="quotelev2">&gt;&gt;messages.
</span><br>
<span class="quotelev2">&gt;&gt;The message is:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What is &quot;ko&quot; -- did you mean &quot;kb&quot;?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I meant kilobytes (not kilobits). Sorry for that. It comes from 
<br>
&quot;kilo-octet&quot; in french where &quot;octet&quot;=byte.
<br>
<p><span class="quotelev2">&gt;&gt;2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Could this be a problem of maximum allowed message size? Or of  
</span><br>
<span class="quotelev2">&gt;&gt;buffering
</span><br>
<span class="quotelev2">&gt;&gt;space?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;No, Open MPI should allow scattering of arbitrary sized messages.   
</span><br>
<span class="quotelev1">&gt;Can you verify that your arguments to MPI_SCATTER are correct, such  
</span><br>
<span class="quotelev1">&gt;as buffer length, the receive sizes on the clients, etc.?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Actually this part of the the code works fine with another mpi 
<br>
implementation for much larger messages...If it can help, here
<br>
are relevant parts of the codes. 
<br>
<p>INTEGER, PARAMETER :: nb_proc=4, master=0
<br>
INTEGER, PARAMETER :: message_size=1000
<br>
INTEGER, parameter :: part_array_size=message_size*nb_proc
<br>
<p>TYPE :: PART
<br>
&nbsp;&nbsp;integer :: p_type
<br>
&nbsp;&nbsp;real(KIND=8), dimension(3) :: POS
<br>
&nbsp;&nbsp;real(KIND=8), dimension(3) :: VEL
<br>
&nbsp;&nbsp;real(KIND=8) :: u
<br>
&nbsp;&nbsp;real(KIND=8) :: star_age
<br>
&nbsp;&nbsp;real(KIND=8) :: mass
<br>
&nbsp;&nbsp;real(KIND=8) :: frac_mass1
<br>
&nbsp;&nbsp;real(KIND=8) :: h
<br>
&nbsp;&nbsp;real(KIND=8) :: dens
<br>
END TYPE PART
<br>
<p>TYPE(PART), dimension(part_array_size) :: part_array
<br>
<p>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
! Declaration of the MPI type for PART !
<br>
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
<p>call MPI_TYPE_EXTENT(MPI_INTEGER,mpi_integer_length,mpi_err)
<br>
array_of_block_length(1:2) = (/1,12/)
<br>
array_of_types(1:2) = (/MPI_INTEGER,MPI_DOUBLE_PRECISION/)
<br>
array_of_displacement(1) = 0
<br>
array_of_displacement(2) = MPI_integer_length
<br>
call MPI_TYPE_CREATE_STRUCT(2,array_of_block_length,array_of_displacement &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,array_of_types,MPI_part,mpi_err)
<br>
call MPI_TYPE_COMMIT(MPI_part,mpi_err)
<br>
<p>call MPI_TYPE_EXTENT(MPI_PART,mpi_part_length,mpi_err)
<br>
<p>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
! The communication call...
<br>
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br>
<p>&lt; snip
<br>
&nbsp;
<br>
Here sone code filling part_array with data
<br>
<p>snip &gt;
<br>
<p>call MPI_SCATTER(part_array,nb_sent,MPI_PART,MPI_IN_PLACE,nb_sent, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_PART,root,MPI_COMM_WORLD,mpi_err)
<br>
<p>( I ensure nb_send &lt;= message_size)
<br>
<p><span class="quotelev1">&gt;Are any corefiles generated?  Do you know which processes die?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, it generates one core file in this case (message_size=1000). And in 
<br>
this case with 4 processes, 3 die:
<br>
&quot;3 processes killed (possibly by Open MPI)&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
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
