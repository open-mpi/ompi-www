<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 10:36:21 2007" -->
<!-- isoreceived="20071006143621" -->
<!-- sent="Sat, 6 Oct 2007 09:36:14 -0500" -->
<!-- isosent="20071006143614" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18183.40286.468259.793804_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71D306F6-7AC0-4E3F-97DE-FC789F32BF81_at_open-mpi.org" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 10:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Previous message:</strong> <a href="4158.php">Amit Kumar Saha: "[OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>In reply to:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5 October 2007 at 21:31, Brian Barrett wrote:
<br>
| On Oct 5, 2007, at 8:48 PM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; With the (Debian package of the) current 1.2.4 release, I am seeing  
<br>
| &gt; a lot of
<br>
| &gt;
<br>
| &gt;   mca: base: component_find: unable to open osc pt2pt: file not  
<br>
| &gt; found (ignored)
<br>
| &gt;
<br>
| &gt; that I'd like to suppress.
<br>
| &gt;
<br>
| &gt; For these Debian packages, we added a (commented-out by default)  
<br>
| &gt; entry to
<br>
| &gt; suppress the Infiniband noise when no Infiniband hardware is to be  
<br>
| &gt; found. I
<br>
| &gt; would like to suppress this 'osc pt2pt' message too.
<br>
| &gt;
<br>
| &gt; But all attempts at guestimating parameters for
<br>
| &gt;   /etc/openmpi/openmpi-mca-params.conf
<br>
| &gt; based on what
<br>
| &gt;   ompi_info all all
<br>
| &gt; shows failed.  Could someone help me along?
<br>
| 
<br>
| This is a bit different, and points to something bad going on.  The  
<br>
| error message is that for some reason, a library that the pt2pt  
<br>
| component depends on was not found.  The pt2pt osc component is  
<br>
<p>Uh-oh. Doesn't sound good.
<br>
<p>| entirely built on the MPI layer -- it shouldn't have any external  
<br>
| dependencies.  Can you run ldd on the library and see if there's  
<br>
| anything obvious?
<br>
<p>edd_at_ron:~&gt; ldd /usr/lib/openmpi/mca_osc_pt2pt.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/i686/cmov/libnsl.so.1 (0xb7f9a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/i686/cmov/libutil.so.1 (0xb7f96000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/i686/cmov/libm.so.6 (0xb7f70000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/i686/cmov/libpthread.so.0 (0xb7f59000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/i686/cmov/libc.so.6 (0xb7e11000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x80000000)
<br>
<p>Not that I can tell.  What else could I test?  The build-logs don't reveal
<br>
anything fishy -- all pt2pt occurrences look fine.  The build itself
<br>
proceeded fine (and this was the Debian package build I then uplod)
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Previous message:</strong> <a href="4158.php">Amit Kumar Saha: "[OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>In reply to:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
