<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 11:31:22 2008" -->
<!-- isoreceived="20081030153122" -->
<!-- sent="Thu, 30 Oct 2008 11:27:14 -0400" -->
<!-- isosent="20081030152714" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="CE435A53-CD13-4CE3-9127-5C7267758E50_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71ec5a370810300811n6147f5efob9230b7d6b6bb457_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 11:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using the module  'use mpi'  then don't have &quot;include  
<br>
'mpif.h'&quot;
<br>
<p>use only one of those.
<br>
<p>Make sure you use 'mpif90'  to compile. Also make sure to read the  
<br>
other reply on this list. about include paths for headers and modules.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Oct 30, 2008, at 11:11 AM, Benjamin Lamptey wrote:
<br>
<p><span class="quotelev1">&gt; Brock,
</span><br>
<span class="quotelev1">&gt; I am using the g95 compiler on Mac OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I got the message &quot;could not open mpif.h&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At your suggestion, I have added
</span><br>
<span class="quotelev1">&gt; USE mpi
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the message &quot;Can't open module file 'mpi.mod'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 30, 2008 at 2:38 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If your using fortran 90 the mpi module is best:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If 77 (or don't have a working module)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just like any other MPI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2008, at 10:33 AM, Benjamin Lamptey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is  
</span><br>
<span class="quotelev1">&gt; normally &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
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
<li><strong>Next message:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
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
