<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 09:24:23 2006" -->
<!-- isoreceived="20060825132423" -->
<!-- sent="Fri, 25 Aug 2006 09:24:14 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20060825132414" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with ompi_info" -->
<!-- id="Pine.WNT.4.64.0608250920560.2040_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060825125037.rtcwlmsrcnk8c848_at_webmail.rz.uni-saarland.de" -->
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
<strong>Date:</strong> 2006-08-25 09:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1770.php">Christine Kreuzer: "[OMPI users] problem with ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The directory when the libmpi.so is have to be added to the 
<br>
LD_LIBRARY_PATH, and of course the bin directory have to be added to the 
<br>
PATH. For more information about how and why please read 
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Fri, 25 Aug 2006, Christine Kreuzer wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I tried to install  openmpi-1.1 on a AMD 64 OPTERON dual core (RHEL 4).
</span><br>
<span class="quotelev1">&gt; I got no error message from ./configure and make all install.
</span><br>
<span class="quotelev1">&gt; Not all tests passed (oob_test oob_test_self oob_test_packed and test_schema
</span><br>
<span class="quotelev1">&gt; were skipped)so I entered ompi_info in the bin directory and got the following
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_dhcp76-200 openmpi-1.1]# ompi_info
</span><br>
<span class="quotelev1">&gt; ompi_info: error while loading shared libraries: libmpi.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: Nosuch file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The library libmpi.so.0 exists in the lib directory and is linked to
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; Christine
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1770.php">Christine Kreuzer: "[OMPI users] problem with ompi_info"</a>
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
