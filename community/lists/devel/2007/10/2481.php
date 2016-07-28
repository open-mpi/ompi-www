<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 16:45:41 2007" -->
<!-- isoreceived="20071022204541" -->
<!-- sent="Mon, 22 Oct 2007 16:45:21 -0400" -->
<!-- isosent="20071022204521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="8FC453C1-61E6-4D3B-B703-14EB150B97B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710222028270.32007_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 16:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2482.php">Jeff Squyres: "[OMPI devel] updating libevent"</a>
<li><strong>Previous message:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>In reply to:</strong> <a href="2479.php">Bogdan Costescu: "[OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 22, 2007, at 2:49 PM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; &lt;short version&gt;
</span><br>
<span class="quotelev1">&gt; Is there some known incompatibility of the latest stable versions with
</span><br>
<span class="quotelev1">&gt; the PathScale 3.0 compilers ?
</span><br>
<span class="quotelev1">&gt; &lt;/short version&gt;
</span><br>
<p>There is in the openib BTL.  We've had an open issue with PathScale  
<br>
for many months.  They're able to reproduce the error and have  
<br>
narrowed it down to a single .o file, but have not yet found the  
<br>
specific problem (that was the last I heard a few months ago).
<br>
<p>To be honest, I removed the pathscale suite from my regular  
<br>
regression testing many months ago because of this long-standing  
<br>
problem; I don't know if any other pathscale-specific issues have  
<br>
crept in since then.
<br>
<p><span class="quotelev1">&gt; &lt;long version&gt;
</span><br>
<span class="quotelev1">&gt; I have a very puzzling problem with the following combination:
</span><br>
<span class="quotelev1">&gt; - PathScale 3.0 suite
</span><br>
<span class="quotelev1">&gt; - Open MPI 1.2.3 and 1.2.4 (both behave the same)
</span><br>
<span class="quotelev1">&gt; - Debian etch, kernel 2.6.22.9/x86_64 running on AMD Opteron
</span><br>
<p>I just recompiled the OMPI 1.2 branch with pathscale 3.0 on RHEL4U4  
<br>
and I do not see the problems that you are seeing.  :-\  Is Debian  
<br>
etch a supported pathscale platform?
<br>
<p>[13:44] svbu-mpi:/home/jsquyres/openmpi-1.2.4 % ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r16187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/jsquyres/bogus
<br>
Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: jsquyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Oct 22 13:34:17 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: svbu-mpi.cisco.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: jsquyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Oct 22 13:40:55 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: svbu-mpi.cisco.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: pathcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/pathscale/3.0/bin/pathcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: pathCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /opt/pathscale/3.0/bin/pathCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: pathf90
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /opt/pathscale/3.0/bin/pathf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: pathf90
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /opt/pathscale/3.0/bin/pathf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
....etc.
<br>
<p><p><span class="quotelev1">&gt; Upon invoking any installed binary (opmi_info, mpif90 --showinfo), I
</span><br>
<span class="quotelev1">&gt; get a segmentation fault. The trace looks strange (to me, at  
</span><br>
<span class="quotelev1">&gt; least ;-)):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x00000000004430d9 in _int_free (av=0x5b1ea0, mem=0x5b40b0) at / 
</span><br>
<span class="quotelev1">&gt; home/thor1/costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/ 
</span><br>
<span class="quotelev1">&gt; malloc.c:4416
</span><br>
<span class="quotelev1">&gt; 4416	        fwd-&gt;bk = p;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000000004430d9 in _int_free (av=0x5b1ea0, mem=0x5b40b0) at / 
</span><br>
<span class="quotelev1">&gt; home/thor1/costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/ 
</span><br>
<span class="quotelev1">&gt; malloc.c:4416
</span><br>
<span class="quotelev1">&gt; #1  0x000000000044141b in free (mem=0x5b40b0) at /home/thor1/ 
</span><br>
<span class="quotelev1">&gt; costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/malloc.c:3513
</span><br>
<span class="quotelev1">&gt; #2  0x00002b27dc920590 in vasprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002b27dc906588 in asprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000421274 in opal_output_init () at /home/thor1/ 
</span><br>
<span class="quotelev1">&gt; costescu/build/openmpi-1.2.4/opal/util/output.c:130
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000421c83 in do_open (output_id=-1, lds=0x591530) at / 
</span><br>
<span class="quotelev1">&gt; home/thor1/costescu/build/openmpi-1.2.4/opal/util/output.c:422
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000421529 in opal_output_open (lds=0x591530) at /home/ 
</span><br>
<span class="quotelev1">&gt; thor1/costescu/build/openmpi-1.2.4/opal/util/output.c:176
</span><br>
<span class="quotelev1">&gt; #7  0x00000000004201e4 in opal_malloc_init () at /home/thor1/ 
</span><br>
<span class="quotelev1">&gt; costescu/build/openmpi-1.2.4/opal/util/malloc.c:67
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040e6ac in opal_init_util () at runtime/opal_init.c:137
</span><br>
<span class="quotelev1">&gt; #9  0x000000000040932e in main (argc=2, argv=0x7fffceb02608) at / 
</span><br>
<span class="quotelev1">&gt; home/thor1/costescu/build/openmpi-1.2.4/opal/tools/wrappers/ 
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:424
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens only with the PathScale 3.0 compilers; I have no problems
</span><br>
<span class="quotelev1">&gt; when using the default gcc and friends version 4.1.2 compilers; I also
</span><br>
<span class="quotelev1">&gt; have no problems in using the PathScale 3.0 compilers either alone or
</span><br>
<span class="quotelev1">&gt; with Myricom's MPICH/MX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem build was obtained after:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/thor1/costescu/openmpi-1.2.4-ps30 -- 
</span><br>
<span class="quotelev1">&gt; enable-static --disable-shared --with-mx=/opt_local/mx --disable-io- 
</span><br>
<span class="quotelev1">&gt; romio --enable-debug --enable-pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (configure and make logs available on request)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought about asking here first to avoid any 'this is known' or
</span><br>
<span class="quotelev1">&gt; embarassing errors that I might have made, before filling a bug
</span><br>
<span class="quotelev1">&gt; report. The existing bugs related to PathScale compilers don't seem
</span><br>
<span class="quotelev1">&gt; to describe the symptoms that I'm seeing, unless it's some kind of
</span><br>
<span class="quotelev1">&gt; threading issue which seems to have no resolution yet...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance !
</span><br>
<span class="quotelev1">&gt; &lt;/long version&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
</span><br>
<span class="quotelev1">&gt; Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
</span><br>
<span class="quotelev1">&gt; Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
</span><br>
<span class="quotelev1">&gt; E-mail: Bogdan.Costescu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2482.php">Jeff Squyres: "[OMPI devel] updating libevent"</a>
<li><strong>Previous message:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>In reply to:</strong> <a href="2479.php">Bogdan Costescu: "[OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
