<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 18:09:28 2006" -->
<!-- isoreceived="20060210230928" -->
<!-- sent="Fri, 10 Feb 2006 18:10:38 -0500" -->
<!-- isosent="20060210231038" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes" -->
<!-- id="75EDDAED-CDA3-4051-994E-02E13AA70F51_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139609203.17594.9.camel_at_newhon.site" -->
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
<strong>Date:</strong> 2006-02-10 18:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Reply:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yvan,
<br>
<p>I'm looking into this one. So far I cannot reproduce it with the  
<br>
current version from the trunk. I will look into the stable versions.  
<br>
Until I figure out what's wrong, can you please use the nightly  
<br>
builds to run your test. Once the problem get fixed it will be  
<br>
included in the 1.0.2 release.
<br>
<p>BTW, which interconnect are you using ? Ethernet ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 10, 2006, at 5:06 PM, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to have encountered a bug in Open MPI 1.0 using indexed  
</span><br>
<span class="quotelev1">&gt; datatypes
</span><br>
<span class="quotelev1">&gt; with MPI_Recv (which seems to be of the &quot;off by one&quot; sort). I have
</span><br>
<span class="quotelev1">&gt; joined a test case, which is briefly explained below (as well as in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; source file). This case should run on two processes. I observed the  
</span><br>
<span class="quotelev1">&gt; bug
</span><br>
<span class="quotelev1">&gt; on 2 different Linux systems (single processor Centrino under Suse  
</span><br>
<span class="quotelev1">&gt; 10.0
</span><br>
<span class="quotelev1">&gt; with gcc 4.0.2, dual-processor Xeon under Debian Sarge with gcc 3.4)
</span><br>
<span class="quotelev1">&gt; with Open MPI 1.0.1, and do not observe it using LAM 7.1.1 or MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a summary of the case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each processor reads a file (&quot;data_p0&quot; or &quot;data_p1&quot;) giving a list of
</span><br>
<span class="quotelev1">&gt; global element ids. Some elements (vertices from a partitionned mesh)
</span><br>
<span class="quotelev1">&gt; may belong to both processors, so their id's may appear on both
</span><br>
<span class="quotelev1">&gt; processors: we have 7178 global vertices, 3654 and 3688 of them being
</span><br>
<span class="quotelev1">&gt; known by ranks 0 and 1 respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this simplified version, we assign coordinates {x, y, z} to each
</span><br>
<span class="quotelev1">&gt; vertex equal to it's global id number for rank 1, and the negative of
</span><br>
<span class="quotelev1">&gt; that for rank 0 (assigning the same values to x, y, and z). After
</span><br>
<span class="quotelev1">&gt; finishing the &quot;ordered gather&quot;, rank 0 prints the global id and
</span><br>
<span class="quotelev1">&gt; coordinates of each vertex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lines should print (for example) as:
</span><br>
<span class="quotelev1">&gt;   6456 ;   6455.00000   6455.00000   6456.00000
</span><br>
<span class="quotelev1">&gt;   6457 ;  -6457.00000  -6457.00000  -6457.00000
</span><br>
<span class="quotelev1">&gt; depending on whether a vertex belongs only to rank 0 (negative
</span><br>
<span class="quotelev1">&gt; coordinates) or belongs to rank 1 (positive coordinates).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the OMPI 1.0.1 bug (observed on Suse Linux 10.0 with gcc 4.0  
</span><br>
<span class="quotelev1">&gt; and on
</span><br>
<span class="quotelev1">&gt; Debian sarge with gcc 3.4), we have for example for the last vertices:
</span><br>
<span class="quotelev1">&gt;   7176 ;   7175.00000   7175.00000   7176.00000
</span><br>
<span class="quotelev1">&gt;   7177 ;   7176.00000   7176.00000   7177.00000
</span><br>
<span class="quotelev1">&gt; seeming to indicate an &quot;off by one&quot; type bug in datatype handling
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not using an indexed datatype (i.e. not defining USE_INDEXED_DATATYPE
</span><br>
<span class="quotelev1">&gt; in the gather_test.c file), the bug dissapears. Using the indexed
</span><br>
<span class="quotelev1">&gt; datatype with LAM MPI 7.1.1 or MPICH2, we do not reproduce the bug
</span><br>
<span class="quotelev1">&gt; either, so it does seem to be an Open MPI issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Yvan Fournier
</span><br>
<span class="quotelev1">&gt; &lt;ompi_datatype_bug.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Reply:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
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
