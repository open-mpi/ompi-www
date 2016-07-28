<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 21:25:41 2009" -->
<!-- isoreceived="20090305022541" -->
<!-- sent="Wed, 4 Mar 2009 18:25:34 -0800" -->
<!-- isosent="20090305022534" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="379CC814-EC75-4D44-9077-BD91CAFCE421_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1236218763.5834.144.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 21:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>Is there a libnuma.a on your system. If not the -static flag to ifort  
<br>
won't do any thing because there isn't a static library for it to link  
<br>
against.
<br>
<p>Doug Reeder
<br>
On Mar 4, 2009, at 6:06 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to everyone who contributed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I no longer think this is Open MPI's problem.  This system is just
</span><br>
<span class="quotelev1">&gt; stupid.  Everything's 64 bit (which various probes with file confirm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no icc, so I can't test with that.  gcc finds libnuma without
</span><br>
<span class="quotelev1">&gt; -L.  (Though a simple gcc -lnuma -Wl,-t reports that libnuma is found
</span><br>
<span class="quotelev1">&gt; through the rather convoluted
</span><br>
<span class="quotelev1">&gt; path /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.4/../../../../lib64/ 
</span><br>
<span class="quotelev1">&gt; libnuma.so.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort -lnuma can't find libnuma.so, but then ifort -L/usr/lib64 -lnuma
</span><br>
<span class="quotelev1">&gt; can't find it either!  While everything else points to some mix up  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; linking search paths, that last result confuses me greatly.  (Unless
</span><br>
<span class="quotelev1">&gt; there's some subtlety with libnuma.so being a link to libnuma.so.1.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can compile my app by replicating mpif90's --showme output  
</span><br>
<span class="quotelev1">&gt; directly on
</span><br>
<span class="quotelev1">&gt; the command line, with -lnuma replaced explicitly
</span><br>
<span class="quotelev1">&gt; with /usr/lib64/libnuma.so.  Then, even though I've told ifort - 
</span><br>
<span class="quotelev1">&gt; static,
</span><br>
<span class="quotelev1">&gt; ldd gives the three lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00002b3f58a3c000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00002b3f58b42000)
</span><br>
<span class="quotelev1">&gt; 	/lib/ld64.so.1 =&gt; /lib/ld64.so.1 (0x00002b3f58925000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I don't understand what's going on here, I now have a working
</span><br>
<span class="quotelev1">&gt; binary.  It's the only app I use on this machine, so I'm no longer
</span><br>
<span class="quotelev1">&gt; concerned.  All other machines on which I use Open MPI work as  
</span><br>
<span class="quotelev1">&gt; expected
</span><br>
<span class="quotelev1">&gt; out of the box.  My workaround here is sufficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once more, thanks for the suggestions.  I think this machine is just
</span><br>
<span class="quotelev1">&gt; pathological.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ciao
</span><br>
<span class="quotelev1">&gt; Terry
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
