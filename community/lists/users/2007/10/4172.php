<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 00:06:10 2007" -->
<!-- isoreceived="20071009040610" -->
<!-- sent="Mon, 8 Oct 2007 22:06:04 -0600" -->
<!-- isosent="20071009040604" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710082106h50038903uf1160d117d9b76ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18184.4566.423107.97790_at_ron.nulle.part" -->
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
<strong>From:</strong> Brian Granger (<em>ellisonbg.net_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 00:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also seeing this problem on Fedora Core 5.  Any resolution yet?
<br>
<p>Brian
<br>
<p>On 10/6/07, Dirk Eddelbuettel &lt;edd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6 October 2007 at 09:36, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | On 5 October 2007 at 21:31, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; | | On Oct 5, 2007, at 8:48 PM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; | |
</span><br>
<span class="quotelev1">&gt; | | &gt; With the (Debian package of the) current 1.2.4 release, I am seeing
</span><br>
<span class="quotelev1">&gt; | | &gt; a lot of
</span><br>
<span class="quotelev1">&gt; | | &gt;
</span><br>
<span class="quotelev1">&gt; | | &gt;   mca: base: component_find: unable to open osc pt2pt: file not
</span><br>
<span class="quotelev1">&gt; | | &gt; found (ignored)
</span><br>
<span class="quotelev1">&gt; | | &gt;
</span><br>
<span class="quotelev1">&gt; | | &gt; that I'd like to suppress.
</span><br>
<span class="quotelev1">&gt; | | &gt;
</span><br>
<span class="quotelev1">&gt; | | &gt; For these Debian packages, we added a (commented-out by default)
</span><br>
<span class="quotelev1">&gt; | | &gt; entry to
</span><br>
<span class="quotelev1">&gt; | | &gt; suppress the Infiniband noise when no Infiniband hardware is to be
</span><br>
<span class="quotelev1">&gt; | | &gt; found. I
</span><br>
<span class="quotelev1">&gt; | | &gt; would like to suppress this 'osc pt2pt' message too.
</span><br>
<span class="quotelev1">&gt; | | &gt;
</span><br>
<span class="quotelev1">&gt; | | &gt; But all attempts at guestimating parameters for
</span><br>
<span class="quotelev1">&gt; | | &gt;   /etc/openmpi/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; | | &gt; based on what
</span><br>
<span class="quotelev1">&gt; | | &gt;   ompi_info all all
</span><br>
<span class="quotelev1">&gt; | | &gt; shows failed.  Could someone help me along?
</span><br>
<span class="quotelev1">&gt; | |
</span><br>
<span class="quotelev1">&gt; | | This is a bit different, and points to something bad going on.  The
</span><br>
<span class="quotelev1">&gt; | | error message is that for some reason, a library that the pt2pt
</span><br>
<span class="quotelev1">&gt; | | component depends on was not found.  The pt2pt osc component is
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Uh-oh. Doesn't sound good.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | | entirely built on the MPI layer -- it shouldn't have any external
</span><br>
<span class="quotelev1">&gt; | | dependencies.  Can you run ldd on the library and see if there's
</span><br>
<span class="quotelev1">&gt; | | anything obvious?
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | edd_at_ron:~&gt; ldd /usr/lib/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev1">&gt; |         libnsl.so.1 =&gt; /lib/i686/cmov/libnsl.so.1 (0xb7f9a000)
</span><br>
<span class="quotelev1">&gt; |         libutil.so.1 =&gt; /lib/i686/cmov/libutil.so.1 (0xb7f96000)
</span><br>
<span class="quotelev1">&gt; |         libm.so.6 =&gt; /lib/i686/cmov/libm.so.6 (0xb7f70000)
</span><br>
<span class="quotelev1">&gt; |         libpthread.so.0 =&gt; /lib/i686/cmov/libpthread.so.0 (0xb7f59000)
</span><br>
<span class="quotelev1">&gt; |         libc.so.6 =&gt; /lib/i686/cmov/libc.so.6 (0xb7e11000)
</span><br>
<span class="quotelev1">&gt; |         /lib/ld-linux.so.2 (0x80000000)
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Not that I can tell.  What else could I test?  The build-logs don't reveal
</span><br>
<span class="quotelev1">&gt; | anything fishy -- all pt2pt occurrences look fine.  The build itself
</span><br>
<span class="quotelev1">&gt; | proceeded fine (and this was the Debian package build I then uplod)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two more observations:
</span><br>
<span class="quotelev1">&gt; -- the message does not appear on my Ubuntu system
</span><br>
<span class="quotelev1">&gt; -- but it appears on Hao's Debian machine which does not use the Debian package
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be some dynamic loading issue?  How can we go about solving this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
