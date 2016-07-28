<?
$subject_val = "Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 27 18:39:02 2008" -->
<!-- isoreceived="20080727223902" -->
<!-- sent="Sun, 27 Jul 2008 18:38:50 -0400" -->
<!-- isosent="20080727223850" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp" -->
<!-- id="C8B897F4-EAA2-4DBF-9F20-6F66299B54A5_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F207B7588B_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-27 18:38:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6141.php">Borenstein, Bernard S: "[OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add the following flags to your configure line.
<br>
<p>--disable-dlopen --disable-shared --enable-static --with-mx=/some/path/ 
<br>
to/mx/lib
<br>
<p>Even if everything is compiled static, the selection logic (as well as  
<br>
the mca parameters --mca btl=tcp,mx,self...) will continue working as  
<br>
usual.
<br>
<p>Last, there is no clear benefit in compiling static on systems  
<br>
supporting dynamic.
<br>
<p><p>Aurelien
<br>
Le 27 juil. 08 &#224; 13:20, Borenstein, Bernard S a &#233;crit :
<br>
<p><span class="quotelev1">&gt; We now have a cluster with myrinet and another cluster with tcp.  I  
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt; to build a static OPENMPI that will detect if there is myrinet on the
</span><br>
<span class="quotelev1">&gt; cluster and use that, if myrinet is not available, run with tcp.  I  
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev1">&gt; the --enable-mca-static option but am confused as to how to use
</span><br>
<span class="quotelev1">&gt; it for what I want to do.  Could someone please provide an example of
</span><br>
<span class="quotelev1">&gt; the configure command to do what I want??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
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
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6141.php">Borenstein, Bernard S: "[OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
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
