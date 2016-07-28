<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep  3 19:39:32 2007" -->
<!-- isoreceived="20070903233932" -->
<!-- sent="Tue, 4 Sep 2007 09:39:28 +1000" -->
<!-- isosent="20070903233928" -->
<!-- name="Corey Putkunz" -->
<!-- email="coreysemail_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Read_file and MPI_Write_file fails" -->
<!-- id="96c562740709031639g609fd5bcpff498fe995022bd2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46DC5771.2060500_at_cs.uh.edu" -->
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
<strong>From:</strong> Corey Putkunz (<em>coreysemail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-03 19:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3975.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3973.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3972.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>Yeah I finally figured out that by MPI_2DOUBLE_COMPLEX they didn't
<br>
mean it was two doubles side my side (real and imag) to make a
<br>
complex. Once I sorted things out with MPI_DOUBLE_COMPLEX it seems to
<br>
work great. Thanks!
<br>
<p>Corey
<br>
<p>On 9/4/07, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; you are probably using the wrong data type. MPI_2DOUBLE_COMPLEX is like
</span><br>
<span class="quotelev1">&gt; a structure of two 'double complex' data types for MPI_MINLOC/MAXLOC
</span><br>
<span class="quotelev1">&gt; operations in MPI_Reduce/Allreduce.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should try MPI_DOUBLE_COMPLEX. Resp, if this still doesn't work,
</span><br>
<span class="quotelev1">&gt; compare the size of your complex data type from complex.h (e.g. using
</span><br>
<span class="quotelev1">&gt; the sizeof operator) and the size of the MPI_DOUBLE_COMPLEX data type
</span><br>
<span class="quotelev1">&gt; (e.g. using MPI_Type_size). If they don't match you probably need to use
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Corey Putkunz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; An interesting problem I've discovered with MPI_Read_file (part of the
</span><br>
<span class="quotelev2">&gt; &gt; MPI I/O interface). When trying to read a 256^3 complex array (by
</span><br>
<span class="quotelev2">&gt; &gt; complex I mean &quot;complex&quot; defined in complex.h) into a single
</span><br>
<span class="quotelev2">&gt; &gt; dynamically allocated array (whos memory is successfully allocated).
</span><br>
<span class="quotelev2">&gt; &gt; To read I call:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_read ( file_in, data, S, MPI_2DOUBLE_COMPLEX, &amp;status );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (where S=256x256x256)     though the call fails and I can't figure out
</span><br>
<span class="quotelev2">&gt; &gt; why. If I reduce the amount of data MPI_File_read attempts to read the
</span><br>
<span class="quotelev2">&gt; &gt; call works. I can find this issue anywhere else on the net. Please
</span><br>
<span class="quotelev2">&gt; &gt; help anyone!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (System is running on an Intel machine, Fedora 7)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks. Corey
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3975.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3973.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3972.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
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
