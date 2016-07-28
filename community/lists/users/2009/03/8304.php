<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 21:06:14 2009" -->
<!-- isoreceived="20090305020614" -->
<!-- sent="Thu, 05 Mar 2009 13:06:03 +1100" -->
<!-- isosent="20090305020603" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="1236218763.5834.144.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="49AE9EF3.6040505_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma under ompi 1.3<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 21:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to everyone who contributed.
<br>
<p>I no longer think this is Open MPI's problem.  This system is just
<br>
stupid.  Everything's 64 bit (which various probes with file confirm).
<br>
<p>There's no icc, so I can't test with that.  gcc finds libnuma without
<br>
-L.  (Though a simple gcc -lnuma -Wl,-t reports that libnuma is found
<br>
through the rather convoluted
<br>
path /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.4/../../../../lib64/libnuma.so.)
<br>
<p>ifort -lnuma can't find libnuma.so, but then ifort -L/usr/lib64 -lnuma
<br>
can't find it either!  While everything else points to some mix up with
<br>
linking search paths, that last result confuses me greatly.  (Unless
<br>
there's some subtlety with libnuma.so being a link to libnuma.so.1.)
<br>
<p>I can compile my app by replicating mpif90's --showme output directly on
<br>
the command line, with -lnuma replaced explicitly
<br>
with /usr/lib64/libnuma.so.  Then, even though I've told ifort -static,
<br>
ldd gives the three lines:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00002b3f58a3c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00002b3f58b42000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld64.so.1 =&gt; /lib/ld64.so.1 (0x00002b3f58925000)
<br>
<p>While I don't understand what's going on here, I now have a working
<br>
binary.  It's the only app I use on this machine, so I'm no longer
<br>
concerned.  All other machines on which I use Open MPI work as expected
<br>
out of the box.  My workaround here is sufficient.
<br>
<p>Once more, thanks for the suggestions.  I think this machine is just
<br>
pathological.
<br>
<p>Ciao
<br>
Terry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
