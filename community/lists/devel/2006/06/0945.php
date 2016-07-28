<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 14:41:14 2006" -->
<!-- isoreceived="20060619184114" -->
<!-- sent="Mon, 19 Jun 2006 20:39:45 +0200" -->
<!-- isosent="20060619183945" -->
<!-- name="Matthijs Richard Koot" -->
<!-- email="matthijs.richard.koot_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?" -->
<!-- id="25205A0A0D598D4DB80DECB9D4D622D3194F20_at_cernxchg04.cern.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AD31CE99-4A9D-4CDD-B2DF-5D564E73C33A_at_cs.utk.edu" -->
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
<strong>From:</strong> Matthijs Richard Koot (<em>matthijs.richard.koot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-19 14:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">Sushant Sharma: "[OMPI devel] xcpu"</a>
<li><strong>Previous message:</strong> <a href="0944.php">George Bosilca: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<li><strong>In reply to:</strong> <a href="0944.php">George Bosilca: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for clearing that up, George!
<br>
<p>Best regards,
<br>
Matthijs
<br>
<p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] on behalf of George Bosilca
<br>
Sent: Mon 6/19/2006 3:19 PM
<br>
To: Open MPI Developers
<br>
Cc: rjong_at_[hidden]
<br>
Subject: Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?
<br>
&nbsp;
<br>
We support &quot;simple&quot; heterogeneous executions. Here simple is defined  
<br>
as no internal conversions on the floating point has to be done. In  
<br>
other words it will work as long as the floating number have the same  
<br>
representation, which imply they have the same length (both for the  
<br>
exponent and mantissa). Currently, we can deal with all kind of  
<br>
integers (including booleans and the C++/Fortran variants), we are  
<br>
able to convert them from little to big endian, we can change their  
<br>
size. All operations on integers/bools should be safe.
<br>
<p>Full heterogeneous support will come before the 1.2 release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 19, 2006, at 5:31 AM, Matthijs Richard Koot wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the IMPI protocol solve cross-platform endian/size issues? I'm  
</span><br>
<span class="quotelev1">&gt; not sure if this is implied by what's stated in the OpenMPI support- 
</span><br>
<span class="quotelev1">&gt; systems FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=supported-systems">http://www.open-mpi.org/faq/?category=supported-systems</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;8. Does Open MPI support execution in heterogeneous environments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI currently requires that the representation of C, C++, and  
</span><br>
<span class="quotelev1">&gt; Fortran datatypes be the same on all platforms within a single  
</span><br>
<span class="quotelev1">&gt; parallel application. Endian and size difference between nodes in a  
</span><br>
<span class="quotelev1">&gt; parallel job will cause undefined behavior in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support for heterogeneous run-time environments is on the to-do  
</span><br>
<span class="quotelev1">&gt; list, but has not yet been implemented.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Matthijs Koot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0945/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">Sushant Sharma: "[OMPI devel] xcpu"</a>
<li><strong>Previous message:</strong> <a href="0944.php">George Bosilca: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<li><strong>In reply to:</strong> <a href="0944.php">George Bosilca: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
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
