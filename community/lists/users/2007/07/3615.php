<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 11:06:50 2007" -->
<!-- isoreceived="20070710150650" -->
<!-- sent="Tue, 10 Jul 2007 11:06:36 -0400" -->
<!-- isosent="20070710150636" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="1FE84985-4AFD-45A6-B6F0-F70180CC23B4_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0707100753s8cefc39w1d1daa6bd5912cc7_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 11:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3614.php">jody: "[OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3614.php">jody: "[OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_LB and MPI_UB is what you're looking for. Or better, for MPI-2  
<br>
compliant libraries such as Open MPI and MPICH2, you can use  
<br>
MPI_Type_create_resized. This will allow you to create the gap at the  
<br>
beginning and/or the end of a data-type description.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 10, 2007, at 10:53 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; hi
</span><br>
<span class="quotelev1">&gt; I want to create datatypes of the form
</span><br>
<span class="quotelev1">&gt; XX000000...
</span><br>
<span class="quotelev1">&gt; 00XX0000...
</span><br>
<span class="quotelev1">&gt; 0000XX00...
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried MPI_Type_indexed(1, ais, ait, MPI_SHORT, &amp;dtNewType)
</span><br>
<span class="quotelev1">&gt; where ais= {2} and ait = {2} but this only gives me a datatype of  
</span><br>
<span class="quotelev1">&gt; the form
</span><br>
<span class="quotelev1">&gt; 00XX, i.e. no holes at the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess MPI_Type_vector won't work, because there seems to be
</span><br>
<span class="quotelev1">&gt; no way to create holes at the beginning of the datatype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need these datatypes to let each process write its data into the  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; in the following way:
</span><br>
<span class="quotelev1">&gt; XXYYZZXXYYZZXXYYZZ....
</span><br>
<span class="quotelev1">&gt; (X is data from proc 0, Y is data from proc 1,  Z is data from proc 2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My intended approach was to define  datatypes of the form XX0000,  
</span><br>
<span class="quotelev1">&gt; 00XX00, 0000XX
</span><br>
<span class="quotelev1">&gt; for the respective processors, and then  call  MPI_File_set_view
</span><br>
<span class="quotelev1">&gt; with displacement 0 and the respective datatypes fo the &quot;filetype&quot;  
</span><br>
<span class="quotelev1">&gt; parameter,
</span><br>
<span class="quotelev1">&gt; and finally let each  processor write its stuff to file  
</span><br>
<span class="quotelev1">&gt; sequentially using MPI_File_write.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, my plan failed since i am unable to create datatypes with  
</span><br>
<span class="quotelev1">&gt; holes in front and at the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What function should i use to create the desired datatypes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Jody
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
<li><strong>Next message:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3614.php">jody: "[OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3614.php">jody: "[OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
