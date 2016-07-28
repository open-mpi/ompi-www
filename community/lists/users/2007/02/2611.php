<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 15:23:04 2007" -->
<!-- isoreceived="20070205202304" -->
<!-- sent="Mon, 5 Feb 2007 15:22:56 -0500" -->
<!-- isosent="20070205202256" -->
<!-- name="Jason Martin" -->
<!-- email="jason.worth.martin_at_[hidden]" -->
<!-- subject="[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)" -->
<!-- id="98170fa20702051222n62dc5eabpb5d231a8737ad5c4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-02-05 15:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Reply:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Using openmpi-1.1.3b3, I've been attempting to build Open-MPI in
<br>
64-bit bit mode on a Mac Pro (dual Xeon 5150 2.66GHz with 1G RAM).
<br>
Using the following configuration options:
<br>
<p>./configure --prefix=/usr/local/openmpi-1.1.3b3 \
<br>
--build=x86_64-apple-darwin \
<br>
CFLAGS=-m64 CXXFLAGS=-m64 \
<br>
LDFLAGS=-m64
<br>
<p>The make goes fine, but in &quot;make check&quot; it hits an error in the &quot;opal_if&quot; test.
<br>
<p>Searching the source code in opal/util/if.c shows that the error is
<br>
occuring with the
<br>
&nbsp;&nbsp;&nbsp;ioctl(sd, SIOCGIFCONF, &amp;ifconf)
<br>
call never returning a valid result (I tried increasing
<br>
MAX_IFCONF_SIZE, but that didn't help).  There's a comment at the top
<br>
of the file that mentions some compiler magic (align=power, etc.) for
<br>
the 64-bit PPC version, but I'm at a loss about using it on a 64-bit
<br>
Intel platform.
<br>
<p>Has anyone else had any experience with this?
<br>
<p>(Note that 32-bit binaries compile and pass make check.)
<br>
<p>Thanks,
<br>
jason
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Reply:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
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
