<?
$subject_val = "[OMPI users] Error message when using MPI_Datatype_struct()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 09:03:56 2008" -->
<!-- isoreceived="20080310130356" -->
<!-- sent="Mon, 10 Mar 2008 10:54:47 +0100" -->
<!-- isosent="20080310095447" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI users] Error message when using MPI_Datatype_struct()" -->
<!-- id="47D50567.3000300_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error message when using MPI_Datatype_struct()<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 05:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5165.php">Michael: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently implementing a mechanism to piggyback information on 
<br>
messages. On message sending, I dynamically create a new datatype 
<br>
composed of the original buffer and of the data to piggyback.
<br>
<p>For instance, if I want to piggyback an integer on each message, I use 
<br>
the following code:
<br>
<p>int send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t* datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_base_send_mode_t sendmode,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t* comm )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype type[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int blocklen[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint disp[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype datatype_out;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int piggy=0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type[0]=datatype;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type[1]=MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;blocklen[0]=count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;blocklen[1]=1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(buf,disp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(&amp;piggy,disp+1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_struct(2, blocklen, disp, type, datatype_out);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(datatype_out);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* then I call the original send function and send my new datatype */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;original_send(MPI_BOTTOM, 1, datatype_out, dst, tag, sendmode,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm);
<br>
<p>}
<br>
<p>This code works well. But if the data I want to piggyback is dynamically 
<br>
allocated. I get this kind of error message:
<br>
<p>../../ompi/datatype/datatype_pack.h:40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pointer 0x823fab0 size 4 is outside [0xbfef8920,0x823fab4] for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base ptr (nil) count 1 and data
<br>
Datatype 0x8240b90[] size 8 align 4 id 0 length 3 used 2
<br>
true_lb -1074820832 true_ub 136575668 (true_extent 1211396500) lb 
<br>
-1074820832 ub 136575668 (extent 1211396500)
<br>
nbElems 2 loops 0 flags 102 (commited )-c-----GD--[---][---
<br>
<p>Despite this message, the function works well too ...
<br>
<p>Can someone explain me what this message means ? It seems that in the 
<br>
first part of the error message, the lower bound and the upper bound of 
<br>
the datatype are switched, but I don't know why.
<br>
<p><p>Regards.
<br>
<p>Thomas Ropars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5165.php">Michael: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5163.php">Justus Schwabedal: "Re: [OMPI users] Problem: openmpi using lam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
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
