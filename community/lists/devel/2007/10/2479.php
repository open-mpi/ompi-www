<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 14:49:56 2007" -->
<!-- isoreceived="20071022184956" -->
<!-- sent="Mon, 22 Oct 2007 20:49:48 +0200 (CEST)" -->
<!-- isosent="20071022184948" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="[OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="Pine.LNX.4.64.0710222028270.32007_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 14:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Previous message:</strong> <a href="2478.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;short version&gt;
<br>
Is there some known incompatibility of the latest stable versions with 
<br>
the PathScale 3.0 compilers ?
<br>
&lt;/short version&gt;
<br>
<p>&lt;long version&gt;
<br>
I have a very puzzling problem with the following combination:
<br>
- PathScale 3.0 suite
<br>
- Open MPI 1.2.3 and 1.2.4 (both behave the same)
<br>
- Debian etch, kernel 2.6.22.9/x86_64 running on AMD Opteron
<br>
<p>Upon invoking any installed binary (opmi_info, mpif90 --showinfo), I 
<br>
get a segmentation fault. The trace looks strange (to me, at least ;-)):
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00000000004430d9 in _int_free (av=0x5b1ea0, mem=0x5b40b0) at /home/thor1/costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/malloc.c:4416
<br>
4416	        fwd-&gt;bk = p;
<br>
(gdb) bt
<br>
#0  0x00000000004430d9 in _int_free (av=0x5b1ea0, mem=0x5b40b0) at /home/thor1/costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/malloc.c:4416
<br>
#1  0x000000000044141b in free (mem=0x5b40b0) at /home/thor1/costescu/build/openmpi-1.2.4/opal/mca/memory/ptmalloc2/malloc.c:3513
<br>
#2  0x00002b27dc920590 in vasprintf () from /lib/libc.so.6
<br>
#3  0x00002b27dc906588 in asprintf () from /lib/libc.so.6
<br>
#4  0x0000000000421274 in opal_output_init () at /home/thor1/costescu/build/openmpi-1.2.4/opal/util/output.c:130
<br>
#5  0x0000000000421c83 in do_open (output_id=-1, lds=0x591530) at /home/thor1/costescu/build/openmpi-1.2.4/opal/util/output.c:422
<br>
#6  0x0000000000421529 in opal_output_open (lds=0x591530) at /home/thor1/costescu/build/openmpi-1.2.4/opal/util/output.c:176
<br>
#7  0x00000000004201e4 in opal_malloc_init () at /home/thor1/costescu/build/openmpi-1.2.4/opal/util/malloc.c:67
<br>
#8  0x000000000040e6ac in opal_init_util () at runtime/opal_init.c:137
<br>
#9  0x000000000040932e in main (argc=2, argv=0x7fffceb02608) at /home/thor1/costescu/build/openmpi-1.2.4/opal/tools/wrappers/opal_wrapper.c:424
<br>
<p>This happens only with the PathScale 3.0 compilers; I have no problems 
<br>
when using the default gcc and friends version 4.1.2 compilers; I also 
<br>
have no problems in using the PathScale 3.0 compilers either alone or 
<br>
with Myricom's MPICH/MX.
<br>
<p>The problem build was obtained after:
<br>
<p>./configure --prefix=/home/thor1/costescu/openmpi-1.2.4-ps30 --enable-static --disable-shared --with-mx=/opt_local/mx --disable-io-romio --enable-debug --enable-pretty-print-stacktrace
<br>
<p>(configure and make logs available on request)
<br>
<p>I thought about asking here first to avoid any 'this is known' or 
<br>
embarassing errors that I might have made, before filling a bug 
<br>
report. The existing bugs related to PathScale compilers don't seem 
<br>
to describe the symptoms that I'm seeing, unless it's some kind of 
<br>
threading issue which seems to have no resolution yet...
<br>
<p>Thanks in advance !
<br>
&lt;/long version&gt;
<br>
<p><pre>
--
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Previous message:</strong> <a href="2478.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
