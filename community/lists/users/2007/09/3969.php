<?
$subject_val = "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 14:50:35 2007" -->
<!-- isoreceived="20070903185035" -->
<!-- sent="Mon, 03 Sep 2007 13:50:25 -0500" -->
<!-- isosent="20070903185025" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Read_file and MPI_Write_file fails" -->
<!-- id="46DC5771.2060500_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96c562740709022248t4543028as424f9a9c144aaeb0_at_mail.gmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-03 14:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3970.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3968.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="3968.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3971.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Reply:</strong> <a href="3971.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you are probably using the wrong data type. MPI_2DOUBLE_COMPLEX is like 
<br>
a structure of two 'double complex' data types for MPI_MINLOC/MAXLOC 
<br>
operations in MPI_Reduce/Allreduce.
<br>
<p>You should try MPI_DOUBLE_COMPLEX. Resp, if this still doesn't work, 
<br>
compare the size of your complex data type from complex.h (e.g. using 
<br>
the sizeof operator) and the size of the MPI_DOUBLE_COMPLEX data type 
<br>
(e.g. using MPI_Type_size). If they don't match you probably need to use 
<br>
MPI_COMPLEX.
<br>
<p><p>Corey Putkunz wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An interesting problem I've discovered with MPI_Read_file (part of the
</span><br>
<span class="quotelev1">&gt; MPI I/O interface). When trying to read a 256^3 complex array (by
</span><br>
<span class="quotelev1">&gt; complex I mean &quot;complex&quot; defined in complex.h) into a single
</span><br>
<span class="quotelev1">&gt; dynamically allocated array (whos memory is successfully allocated).
</span><br>
<span class="quotelev1">&gt; To read I call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_File_read ( file_in, data, S, MPI_2DOUBLE_COMPLEX, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (where S=256x256x256)     though the call fails and I can't figure out
</span><br>
<span class="quotelev1">&gt; why. If I reduce the amount of data MPI_File_read attempts to read the
</span><br>
<span class="quotelev1">&gt; call works. I can find this issue anywhere else on the net. Please
</span><br>
<span class="quotelev1">&gt; help anyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (System is running on an Intel machine, Fedora 7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. Corey
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
<li><strong>Next message:</strong> <a href="3970.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3968.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="3968.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3971.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Reply:</strong> <a href="3971.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
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
