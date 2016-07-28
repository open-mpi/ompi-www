<?
$subject_val = "Re: [OMPI users] Error message when using MPI_Type_struct()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 05:13:45 2009" -->
<!-- isoreceived="20090108101345" -->
<!-- sent="Thu, 08 Jan 2009 11:13:40 +0100" -->
<!-- isosent="20090108101340" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message when using MPI_Type_struct()" -->
<!-- id="4965D1D4.30703_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47D50567.3000300_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error message when using MPI_Type_struct()<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 05:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5164.php">Thomas Ropars: "[OMPI users] Error message when using MPI_Datatype_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7670.php">Aurélien Bouteiller: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="7670.php">Aurélien Bouteiller: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I submit again this old question because I didn't get any answer last time.
<br>
<p>My problem is the following one:
<br>
I try to implement piggyback mechanisms. In fact I want to piggyback an 
<br>
integer on every message.
<br>
To do that, I dynamically create new datatype for each send.
<br>
The code I use to do that is described below. This code works fine.
<br>
But if the integer I piggyback (named &quot;pigg&quot; in the code) is allocated 
<br>
using malloc,I still get the good result, but I get the following kind 
<br>
of message:
<br>
<p>../../ompi/datatype/datatype_pack.h:38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pointer 0xbff25fbc size 4 is outside [0xbff25fbc,0x911300c] for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;base ptr (nil) count 1 and data
<br>
Datatype 0x9183be8[] size 8 align 4 id 0 length 3 used 2
<br>
true_lb -1074634820 true_ub 152121356 (true_extent 1226756176) lb 
<br>
-1074634820 ub 152121356 (extent 1226756176)
<br>
nbElems 2 loops 0 flags 102 (commited )-c-----GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain MPI_INT
<br>
--C---P-D--[ C ][INT]        MPI_INT count 1 disp 0xbff25fbc 
<br>
(-1074634820) extent 4 (size 4)
<br>
--C---P-D--[ C ][INT]        MPI_INT count 1 disp 0x9113008 (152121352) 
<br>
extent 4 (size 4)
<br>
-------G---[---][---]   MPI_END_LOOP prev 2 elements first elem 
<br>
displacement -1074634820 size of data 8
<br>
Optimized description
<br>
-cC---P-DB-[ C ][ERR]        MPI_INT count 1 disp 0xbff25fbc 
<br>
(-1074634820) extent 4 (size 4)
<br>
-cC---P-DB-[ C ][ERR]        MPI_INT count 1 disp 0x9113008 (152121352) 
<br>
extent 4 (size 4)
<br>
-------G---[---][---]   MPI_END_LOOP prev 2 elements first elem 
<br>
displacement -1074634820 size of data 8
<br>
<p>My question is : what does this message means ? Is there an error in my 
<br>
code ? and what can I do to avoid this message ?
<br>
<p>Regards,
<br>
<p>Thomas
<br>
<p>Thomas Ropars wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently implementing a mechanism to piggyback information on 
</span><br>
<span class="quotelev1">&gt; messages. On message sending, I dynamically create a new datatype 
</span><br>
<span class="quotelev1">&gt; composed of the original buffer and of the data to piggyback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, if I want to piggyback an integer on each message, I use 
</span><br>
<span class="quotelev1">&gt; the following code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int send(void *buf,
</span><br>
<span class="quotelev1">&gt;          size_t count,
</span><br>
<span class="quotelev1">&gt;          struct ompi_datatype_t* datatype,
</span><br>
<span class="quotelev1">&gt;          int dst,
</span><br>
<span class="quotelev1">&gt;          int tag,
</span><br>
<span class="quotelev1">&gt;          mca_pml_base_send_mode_t sendmode,
</span><br>
<span class="quotelev1">&gt;          ompi_communicator_t* comm )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype type[2];
</span><br>
<span class="quotelev1">&gt;     int blocklen[2];
</span><br>
<span class="quotelev1">&gt;     MPI_Aint disp[2];
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype datatype_out;
</span><br>
<span class="quotelev1">&gt;     int piggy=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type[0]=datatype;
</span><br>
<span class="quotelev1">&gt;     type[1]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;     blocklen[0]=count;
</span><br>
<span class="quotelev1">&gt;     blocklen[1]=1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Address(buf,disp);
</span><br>
<span class="quotelev1">&gt;     MPI_Address(&amp;piggy,disp+1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_struct(2, blocklen, disp, type, datatype_out);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_commit(datatype_out);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* then I call the original send function and send my new datatype */
</span><br>
<span class="quotelev1">&gt;     original_send(MPI_BOTTOM, 1, datatype_out, dst, tag, sendmode,
</span><br>
<span class="quotelev1">&gt;                   comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code works well. But if the data I want to piggyback is dynamically 
</span><br>
<span class="quotelev1">&gt; allocated. I get this kind of error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../ompi/datatype/datatype_pack.h:40
</span><br>
<span class="quotelev1">&gt;         Pointer 0x823fab0 size 4 is outside [0xbfef8920,0x823fab4] for
</span><br>
<span class="quotelev1">&gt;         base ptr (nil) count 1 and data
</span><br>
<span class="quotelev1">&gt; Datatype 0x8240b90[] size 8 align 4 id 0 length 3 used 2
</span><br>
<span class="quotelev1">&gt; true_lb -1074820832 true_ub 136575668 (true_extent 1211396500) lb 
</span><br>
<span class="quotelev1">&gt; -1074820832 ub 136575668 (extent 1211396500)
</span><br>
<span class="quotelev1">&gt; nbElems 2 loops 0 flags 102 (commited )-c-----GD--[---][---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Despite this message, the function works well too ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone explain me what this message means ? It seems that in the 
</span><br>
<span class="quotelev1">&gt; first part of the error message, the lower bound and the upper bound of 
</span><br>
<span class="quotelev1">&gt; the datatype are switched, but I don't know why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Ropars
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5164.php">Thomas Ropars: "[OMPI users] Error message when using MPI_Datatype_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7670.php">Aurélien Bouteiller: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="7670.php">Aurélien Bouteiller: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
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
