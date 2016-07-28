<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 15:43:16 2007" -->
<!-- isoreceived="20070205204316" -->
<!-- sent="Mon, 5 Feb 2007 13:42:37 -0700" -->
<!-- isosent="20070205204237" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)" -->
<!-- id="77B0E714-0FE5-4D93-9C2C-F36E23F38E39_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98170fa20702051222n62dc5eabpb5d231a8737ad5c4_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 15:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Reply:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was fixed in 1.1.4, along with some shared memory performance  
<br>
issues on Intel Macs (32 or 64 bit builds).
<br>
<p>Brian
<br>
<p>On Feb 5, 2007, at 1:22 PM, Jason Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.1.3b3, I've been attempting to build Open-MPI in
</span><br>
<span class="quotelev1">&gt; 64-bit bit mode on a Mac Pro (dual Xeon 5150 2.66GHz with 1G RAM).
</span><br>
<span class="quotelev1">&gt; Using the following configuration options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-1.1.3b3 \
</span><br>
<span class="quotelev1">&gt; --build=x86_64-apple-darwin \
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m64 CXXFLAGS=-m64 \
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The make goes fine, but in &quot;make check&quot; it hits an error in the  
</span><br>
<span class="quotelev1">&gt; &quot;opal_if&quot; test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching the source code in opal/util/if.c shows that the error is
</span><br>
<span class="quotelev1">&gt; occuring with the
</span><br>
<span class="quotelev1">&gt;    ioctl(sd, SIOCGIFCONF, &amp;ifconf)
</span><br>
<span class="quotelev1">&gt; call never returning a valid result (I tried increasing
</span><br>
<span class="quotelev1">&gt; MAX_IFCONF_SIZE, but that didn't help).  There's a comment at the top
</span><br>
<span class="quotelev1">&gt; of the file that mentions some compiler magic (align=power, etc.) for
</span><br>
<span class="quotelev1">&gt; the 64-bit PPC version, but I'm at a loss about using it on a 64-bit
</span><br>
<span class="quotelev1">&gt; Intel platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else had any experience with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Note that 32-bit binaries compile and pass make check.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; jason
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jason Worth Martin
</span><br>
<span class="quotelev1">&gt; Asst. Prof. of Mathematics
</span><br>
<span class="quotelev1">&gt; James Madison University
</span><br>
<span class="quotelev1">&gt; <a href="http://www.math.jmu.edu/~martin">http://www.math.jmu.edu/~martin</a>
</span><br>
<span class="quotelev1">&gt; phone: (+1) 540-568-5101
</span><br>
<span class="quotelev1">&gt; fax: (+1) 540-568-6857
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Ever my heart rises as we draw near the mountains.
</span><br>
<span class="quotelev1">&gt; There is good rock here.&quot; -- Gimli, son of Gloin
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
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Reply:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
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
