<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 15:31:07 2006" -->
<!-- isoreceived="20060711193107" -->
<!-- sent="Tue, 11 Jul 2006 15:30:56 -0400" -->
<!-- isosent="20060711193056" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 328, Issue 1" -->
<!-- id="73742328-3CE1-4835-8A54-F9E88E9AF2E0_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1152566873.5376.8.camel_at_newhon.site" -->
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
<strong>Date:</strong> 2006-07-11 15:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1612.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Yvan Fournier: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yvan,
<br>
<p>Shame on me for bringing this bug back into the 1.1. Until we release  
<br>
the 1.1.1 please use the nightly build or the beta from our web site.  
<br>
Starting with the revision 10710 this bug was removed. Forever I hope :)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 10, 2006, at 5:27 PM, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just retried replicating the datatype bug on a SUSE Linux 10.1  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; (on a 32-bit Pentium-M system). Actually, I even get a segmentation
</span><br>
<span class="quotelev1">&gt; fault at some point. I attach the logfile for the test case
</span><br>
<span class="quotelev1">&gt; compiled in debug mode, run once directly, the again with valgrind,
</span><br>
<span class="quotelev1">&gt; as well as my ompi_info output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also encountered the bug on the &quot;parent&quot; case (similar, but
</span><br>
<span class="quotelev1">&gt; more complex) on my work machine (dual Xeon under Debian Sarge),
</span><br>
<span class="quotelev1">&gt; but I'll check this simpler test on it just in case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Yvan Fournier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, 2006-07-09 at 12:00 -0400, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. Re: Datatype bug regression from Open MPI 1.0.2 to Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;       1.1 (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 8 Jul 2006 13:47:05 -0400 (Eastern Daylight Time)
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; 	to Open MPI 1.1
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;Pine.WNT.4.64.0607081344080.2944_at_bosilca&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: TEXT/PLAIN; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yvan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm unable to replicate this one with the latest Open MPI trunk  
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev2">&gt;&gt; As there is no difference between the trunk and the latest 1.1  
</span><br>
<span class="quotelev2">&gt;&gt; version on
</span><br>
<span class="quotelev2">&gt;&gt; the datatype, I think the bug cannot be reproduced using the 1.1  
</span><br>
<span class="quotelev2">&gt;&gt; either. I
</span><br>
<span class="quotelev2">&gt;&gt; compiled the test twice once using the indexed datatype and once  
</span><br>
<span class="quotelev2">&gt;&gt; without
</span><br>
<span class="quotelev2">&gt;&gt; and the output is exactly the same. I run it on my Apple G5  
</span><br>
<span class="quotelev2">&gt;&gt; desktop as
</span><br>
<span class="quotelev2">&gt;&gt; well as on a cluster of AMD 64, over shared memory and TCP. Can  
</span><br>
<span class="quotelev2">&gt;&gt; you please
</span><br>
<span class="quotelev2">&gt;&gt; recheck that your error is comming from the type indexed please.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, 1 Jul 2006, Yvan Fournier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had encountered a bug in Open MPI 1.0.1 using indexed datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with MPI_Recv (which seems to be of the &quot;off by one&quot; sort), which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was corrected in Open MPI 1.0.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to have resurfaced in Open MPI 1.1 (I encountered it using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different data and did not recognize it immediately, but it seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it can reproduced using the same simplified test I had sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first time, which I re-attach here just in case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a summary of the case:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Each processor reads a file (&quot;data_p0&quot; or &quot;data_p1&quot;) giving a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global element ids. Some elements (vertices from a partitionned  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mesh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may belong to both processors, so their id's may appear on both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors: we have 7178 global vertices, 3654 and 3688 of them  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; known by ranks 0 and 1 respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this simplified version, we assign coordinates {x, y, z} to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vertex equal to it's global id number for rank 1, and the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negative of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that for rank 0 (assigning the same values to x, y, and z). After
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finishing the &quot;ordered gather&quot;, rank 0 prints the global id and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coordinates of each vertex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lines should print (for example) as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  6456 ;   6455.00000   6455.00000   6456.00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  6457 ;  -6457.00000  -6457.00000  -6457.00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depending on whether a vertex belongs only to rank 0 (negative
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coordinates) or belongs to rank 1 (positive coordinates).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the OMPI 1.0.1 bug (observed on Suse Linux 10.0 with gcc 4.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debian sarge with gcc 3.4), we have for example for the last  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vertices:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  7176 ;   7175.00000   7175.00000   7176.00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  7177 ;   7176.00000   7176.00000   7177.00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeming to indicate an &quot;off by one&quot; type bug in datatype handling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not using an indexed datatype (i.e. not defining  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; USE_INDEXED_DATATYPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the gather_test.c file), the bug dissapears.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Yvan Fournier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Martin Luther King
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 328, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;logfile.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;logfile_valgrind.gz&gt;
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
<li><strong>Next message:</strong> <a href="1612.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Yvan Fournier: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
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
