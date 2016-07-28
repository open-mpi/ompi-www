<?
$subject_val = "Re: [OMPI users] Error message when using MPI_Type_struct()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 10:53:53 2009" -->
<!-- isoreceived="20090109155353" -->
<!-- sent="Fri, 9 Jan 2009 10:53:42 -0500" -->
<!-- isosent="20090109155342" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message when using MPI_Type_struct()" -->
<!-- id="50160776-4F1A-4C54-AE7D-D9F589C227E8_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4965D1D4.30703_at_irisa.fr" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-09 10:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7671.php">Jeff Squyres: "Re: [OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7669.php">Brock Palen: "[OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7676.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="7676.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas,
<br>
<p>The message you get comes from the convertor. The convertor is in  
<br>
charge of packing/unpacking the data. As you add yourself an extra   
<br>
int to the wire data, the convertor gets confused on the receiver  
<br>
side, as it gets a message that's not in the expected format.
<br>
<p>What you should do in my opinion is to create a new convertor (there  
<br>
is an mca framework for this) that allocates this extra int for you.  
<br>
Then, because you will use the same convertor at both ends, you will  
<br>
be able to unpack correctly what you sent. As a free benefit, you will  
<br>
be able to use the mpool instead of malloc, which should moderate the  
<br>
overhead of creating the intermediate buffer.
<br>
<p>Aurelien
<br>
<p><p>Le 8 janv. 09 &#224; 05:13, Thomas Ropars a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I submit again this old question because I didn't get any answer  
</span><br>
<span class="quotelev1">&gt; last time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is the following one:
</span><br>
<span class="quotelev1">&gt; I try to implement piggyback mechanisms. In fact I want to piggyback  
</span><br>
<span class="quotelev1">&gt; an integer on every message.
</span><br>
<span class="quotelev1">&gt; To do that, I dynamically create new datatype for each send.
</span><br>
<span class="quotelev1">&gt; The code I use to do that is described below. This code works fine.
</span><br>
<span class="quotelev1">&gt; But if the integer I piggyback (named &quot;pigg&quot; in the code) is  
</span><br>
<span class="quotelev1">&gt; allocated using malloc,I still get the good result, but I get the  
</span><br>
<span class="quotelev1">&gt; following kind of message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../ompi/datatype/datatype_pack.h:38
</span><br>
<span class="quotelev1">&gt;   Pointer 0xbff25fbc size 4 is outside [0xbff25fbc,0x911300c] for
</span><br>
<span class="quotelev1">&gt;   base ptr (nil) count 1 and data
</span><br>
<span class="quotelev1">&gt; Datatype 0x9183be8[] size 8 align 4 id 0 length 3 used 2
</span><br>
<span class="quotelev1">&gt; true_lb -1074634820 true_ub 152121356 (true_extent 1226756176) lb  
</span><br>
<span class="quotelev1">&gt; -1074634820 ub 152121356 (extent 1226756176)
</span><br>
<span class="quotelev1">&gt; nbElems 2 loops 0 flags 102 (commited )-c-----GD--[---][---]
</span><br>
<span class="quotelev1">&gt;  contain MPI_INT
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][INT]        MPI_INT count 1 disp 0xbff25fbc  
</span><br>
<span class="quotelev1">&gt; (-1074634820) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[ C ][INT]        MPI_INT count 1 disp 0x9113008  
</span><br>
<span class="quotelev1">&gt; (152121352) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]   MPI_END_LOOP prev 2 elements first elem  
</span><br>
<span class="quotelev1">&gt; displacement -1074634820 size of data 8
</span><br>
<span class="quotelev1">&gt; Optimized description
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]        MPI_INT count 1 disp 0xbff25fbc  
</span><br>
<span class="quotelev1">&gt; (-1074634820) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]        MPI_INT count 1 disp 0x9113008  
</span><br>
<span class="quotelev1">&gt; (152121352) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]   MPI_END_LOOP prev 2 elements first elem  
</span><br>
<span class="quotelev1">&gt; displacement -1074634820 size of data 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is : what does this message means ? Is there an error in  
</span><br>
<span class="quotelev1">&gt; my code ? and what can I do to avoid this message ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Ropars wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently implementing a mechanism to piggyback information on  
</span><br>
<span class="quotelev2">&gt;&gt; messages. On message sending, I dynamically create a new datatype  
</span><br>
<span class="quotelev2">&gt;&gt; composed of the original buffer and of the data to piggyback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, if I want to piggyback an integer on each message, I  
</span><br>
<span class="quotelev2">&gt;&gt; use the following code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int send(void *buf,
</span><br>
<span class="quotelev2">&gt;&gt;         size_t count,
</span><br>
<span class="quotelev2">&gt;&gt;         struct ompi_datatype_t* datatype,
</span><br>
<span class="quotelev2">&gt;&gt;         int dst,
</span><br>
<span class="quotelev2">&gt;&gt;         int tag,
</span><br>
<span class="quotelev2">&gt;&gt;         mca_pml_base_send_mode_t sendmode,
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_communicator_t* comm )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Datatype type[2];
</span><br>
<span class="quotelev2">&gt;&gt;    int blocklen[2];
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Aint disp[2];
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Datatype datatype_out;
</span><br>
<span class="quotelev2">&gt;&gt;    int piggy=0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    type[0]=datatype;
</span><br>
<span class="quotelev2">&gt;&gt;    type[1]=MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    blocklen[0]=count;
</span><br>
<span class="quotelev2">&gt;&gt;    blocklen[1]=1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Address(buf,disp);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Address(&amp;piggy,disp+1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Type_struct(2, blocklen, disp, type, datatype_out);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Type_commit(datatype_out);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* then I call the original send function and send my new  
</span><br>
<span class="quotelev2">&gt;&gt; datatype */
</span><br>
<span class="quotelev2">&gt;&gt;    original_send(MPI_BOTTOM, 1, datatype_out, dst, tag, sendmode,
</span><br>
<span class="quotelev2">&gt;&gt;                  comm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This code works well. But if the data I want to piggyback is  
</span><br>
<span class="quotelev2">&gt;&gt; dynamically allocated. I get this kind of error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h:40
</span><br>
<span class="quotelev2">&gt;&gt;        Pointer 0x823fab0 size 4 is outside [0xbfef8920,0x823fab4] for
</span><br>
<span class="quotelev2">&gt;&gt;        base ptr (nil) count 1 and data
</span><br>
<span class="quotelev2">&gt;&gt; Datatype 0x8240b90[] size 8 align 4 id 0 length 3 used 2
</span><br>
<span class="quotelev2">&gt;&gt; true_lb -1074820832 true_ub 136575668 (true_extent 1211396500) lb  
</span><br>
<span class="quotelev2">&gt;&gt; -1074820832 ub 136575668 (extent 1211396500)
</span><br>
<span class="quotelev2">&gt;&gt; nbElems 2 loops 0 flags 102 (commited )-c-----GD--[---][---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Despite this message, the function works well too ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone explain me what this message means ? It seems that in  
</span><br>
<span class="quotelev2">&gt;&gt; the first part of the error message, the lower bound and the upper  
</span><br>
<span class="quotelev2">&gt;&gt; bound of the datatype are switched, but I don't know why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas Ropars
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7671.php">Jeff Squyres: "Re: [OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7669.php">Brock Palen: "[OMPI users] RCE Interview of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7676.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<li><strong>Reply:</strong> <a href="7676.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
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
