<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 15:51:08 2007" -->
<!-- isoreceived="20070205205108" -->
<!-- sent="Mon, 5 Feb 2007 15:51:04 -0500" -->
<!-- isosent="20070205205104" -->
<!-- name="Jason Martin" -->
<!-- email="jason.worth.martin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)" -->
<!-- id="98170fa20702051251l43aebaacmf297144a3ab0245d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77B0E714-0FE5-4D93-9C2C-F36E23F38E39_at_lanl.gov" -->
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
<strong>From:</strong> Jason Martin (<em>jason.worth.martin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 15:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Jeff Squyres: "Re: [OMPI users] Application porting guide or hints?"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow!  Thanks!!  I didn't even see that a new version was available.
<br>
<p>Thanks again!!
<br>
<p>--jason
<br>
<p>On 2/5/07, Brian Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This was fixed in 1.1.4, along with some shared memory performance
</span><br>
<span class="quotelev1">&gt; issues on Intel Macs (32 or 64 bit builds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2007, at 1:22 PM, Jason Martin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using openmpi-1.1.3b3, I've been attempting to build Open-MPI in
</span><br>
<span class="quotelev2">&gt; &gt; 64-bit bit mode on a Mac Pro (dual Xeon 5150 2.66GHz with 1G RAM).
</span><br>
<span class="quotelev2">&gt; &gt; Using the following configuration options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi-1.1.3b3 \
</span><br>
<span class="quotelev2">&gt; &gt; --build=x86_64-apple-darwin \
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=-m64 CXXFLAGS=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt; LDFLAGS=-m64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The make goes fine, but in &quot;make check&quot; it hits an error in the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;opal_if&quot; test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Searching the source code in opal/util/if.c shows that the error is
</span><br>
<span class="quotelev2">&gt; &gt; occuring with the
</span><br>
<span class="quotelev2">&gt; &gt;    ioctl(sd, SIOCGIFCONF, &amp;ifconf)
</span><br>
<span class="quotelev2">&gt; &gt; call never returning a valid result (I tried increasing
</span><br>
<span class="quotelev2">&gt; &gt; MAX_IFCONF_SIZE, but that didn't help).  There's a comment at the top
</span><br>
<span class="quotelev2">&gt; &gt; of the file that mentions some compiler magic (align=power, etc.) for
</span><br>
<span class="quotelev2">&gt; &gt; the 64-bit PPC version, but I'm at a loss about using it on a 64-bit
</span><br>
<span class="quotelev2">&gt; &gt; Intel platform.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone else had any experience with this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Note that 32-bit binaries compile and pass make check.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; jason
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jason Worth Martin
</span><br>
<span class="quotelev2">&gt; &gt; Asst. Prof. of Mathematics
</span><br>
<span class="quotelev2">&gt; &gt; James Madison University
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.math.jmu.edu/~martin">http://www.math.jmu.edu/~martin</a>
</span><br>
<span class="quotelev2">&gt; &gt; phone: (+1) 540-568-5101
</span><br>
<span class="quotelev2">&gt; &gt; fax: (+1) 540-568-6857
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Ever my heart rises as we draw near the mountains.
</span><br>
<span class="quotelev2">&gt; &gt; There is good rock here.&quot; -- Gimli, son of Gloin
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jason Worth Martin
Asst. Prof. of Mathematics
James Madison University
<a href="http://www.math.jmu.edu/~martin">http://www.math.jmu.edu/~martin</a>
phone: (+1) 540-568-5101
fax: (+1) 540-568-6857
&quot;Ever my heart rises as we draw near the mountains.
There is good rock here.&quot; -- Gimli, son of Gloin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Jeff Squyres: "Re: [OMPI users] Application porting guide or hints?"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
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
