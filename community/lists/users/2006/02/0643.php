<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 12 15:29:09 2006" -->
<!-- isoreceived="20060212202909" -->
<!-- sent="Sun, 12 Feb 2006 15:29:12 -0500 (Eastern Standard Time)" -->
<!-- isosent="20060212202912" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes" -->
<!-- id="Pine.WNT.4.64.0602121524450.3856_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="75EDDAED-CDA3-4051-994E-02E13AA70F51_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-02-12 15:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Strange errors when using open-mpi"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yvan,
<br>
<p>It's now corrected. Please use the trunk (nightly builds) starting from 
<br>
revision 8997 or wait 'til monday when we will update the next stable 
<br>
candidate. If you are in a hurry and feel like playing around with the MPI 
<br>
code, you can apply the attached patch to the latest stable.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Fri, 10 Feb 2006, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Yvan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm looking into this one. So far I cannot reproduce it with the
</span><br>
<span class="quotelev1">&gt; current version from the trunk. I will look into the stable versions.
</span><br>
<span class="quotelev1">&gt; Until I figure out what's wrong, can you please use the nightly
</span><br>
<span class="quotelev1">&gt; builds to run your test. Once the problem get fixed it will be
</span><br>
<span class="quotelev1">&gt; included in the 1.0.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, which interconnect are you using ? Ethernet ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2006, at 5:06 PM, Yvan Fournier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I seem to have encountered a bug in Open MPI 1.0 using indexed
</span><br>
<span class="quotelev2">&gt;&gt; datatypes
</span><br>
<span class="quotelev2">&gt;&gt; with MPI_Recv (which seems to be of the &quot;off by one&quot; sort). I have
</span><br>
<span class="quotelev2">&gt;&gt; joined a test case, which is briefly explained below (as well as in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; source file). This case should run on two processes. I observed the
</span><br>
<span class="quotelev2">&gt;&gt; bug
</span><br>
<span class="quotelev2">&gt;&gt; on 2 different Linux systems (single processor Centrino under Suse
</span><br>
<span class="quotelev2">&gt;&gt; 10.0
</span><br>
<span class="quotelev2">&gt;&gt; with gcc 4.0.2, dual-processor Xeon under Debian Sarge with gcc 3.4)
</span><br>
<span class="quotelev2">&gt;&gt; with Open MPI 1.0.1, and do not observe it using LAM 7.1.1 or MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a summary of the case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each processor reads a file (&quot;data_p0&quot; or &quot;data_p1&quot;) giving a list of
</span><br>
<span class="quotelev2">&gt;&gt; global element ids. Some elements (vertices from a partitionned mesh)
</span><br>
<span class="quotelev2">&gt;&gt; may belong to both processors, so their id's may appear on both
</span><br>
<span class="quotelev2">&gt;&gt; processors: we have 7178 global vertices, 3654 and 3688 of them being
</span><br>
<span class="quotelev2">&gt;&gt; known by ranks 0 and 1 respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this simplified version, we assign coordinates {x, y, z} to each
</span><br>
<span class="quotelev2">&gt;&gt; vertex equal to it's global id number for rank 1, and the negative of
</span><br>
<span class="quotelev2">&gt;&gt; that for rank 0 (assigning the same values to x, y, and z). After
</span><br>
<span class="quotelev2">&gt;&gt; finishing the &quot;ordered gather&quot;, rank 0 prints the global id and
</span><br>
<span class="quotelev2">&gt;&gt; coordinates of each vertex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lines should print (for example) as:
</span><br>
<span class="quotelev2">&gt;&gt;   6456 ;   6455.00000   6455.00000   6456.00000
</span><br>
<span class="quotelev2">&gt;&gt;   6457 ;  -6457.00000  -6457.00000  -6457.00000
</span><br>
<span class="quotelev2">&gt;&gt; depending on whether a vertex belongs only to rank 0 (negative
</span><br>
<span class="quotelev2">&gt;&gt; coordinates) or belongs to rank 1 (positive coordinates).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the OMPI 1.0.1 bug (observed on Suse Linux 10.0 with gcc 4.0
</span><br>
<span class="quotelev2">&gt;&gt; and on
</span><br>
<span class="quotelev2">&gt;&gt; Debian sarge with gcc 3.4), we have for example for the last vertices:
</span><br>
<span class="quotelev2">&gt;&gt;   7176 ;   7175.00000   7175.00000   7176.00000
</span><br>
<span class="quotelev2">&gt;&gt;   7177 ;   7176.00000   7176.00000   7177.00000
</span><br>
<span class="quotelev2">&gt;&gt; seeming to indicate an &quot;off by one&quot; type bug in datatype handling
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not using an indexed datatype (i.e. not defining USE_INDEXED_DATATYPE
</span><br>
<span class="quotelev2">&gt;&gt; in the gather_test.c file), the bug dissapears. Using the indexed
</span><br>
<span class="quotelev2">&gt;&gt; datatype with LAM MPI 7.1.1 or MPICH2, we do not reproduce the bug
</span><br>
<span class="quotelev2">&gt;&gt; either, so it does seem to be an Open MPI issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	Yvan Fournier
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_datatype_bug.tar.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                   Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<p>
<br><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0643/ompi-branch-ddt.patch">ompi-branch-ddt.patch</a>
</ul>
<!-- attachment="ompi-branch-ddt.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Strange errors when using open-mpi"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
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
