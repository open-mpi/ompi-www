<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 29 08:34:29 2007" -->
<!-- isoreceived="20070729123429" -->
<!-- sent="Sun, 29 Jul 2007 08:34:11 -0400" -->
<!-- isosent="20070729123411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] freeing GROUP_EMPTY" -->
<!-- id="C0F33C90-285D-41C0-87B7-F4FEAFDA5B6D_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707281540r53425244y6411cfa31e624e61_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-29 08:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2047.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="2043.php">Lisandro Dalcin: "[OMPI devel] freeing GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like an explicit check for MPI_GROUP_EMPTY was removed from  
<br>
group_free.c in r2623 by Edgar.  I suspect that there is some subtle  
<br>
reason for this.
<br>
<p>Edgar: do you have any recollection why this is?  And how we can  
<br>
otherwise avoid the segv?
<br>
<p><p>On Jul 28, 2007, at 6:40 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; A simple test trying to free GROUP_EMPTY failed with the following  
</span><br>
<span class="quotelev1">&gt; trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a.out: ../opal/class/opal_object.h:403: opal_obj_run_destructors:
</span><br>
<span class="quotelev1">&gt; Assertion `((void *)0) != object-&gt;obj_class' failed.
</span><br>
<span class="quotelev1">&gt; [trantor:19821] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [trantor:19821] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [trantor:19821] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 0] [0xcf5440]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 1] /lib/libc.so.6(abort+0x101) [0x4fe3c591]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 2] /lib/libc.so.6(__assert_fail+0xfb) [0x4fe3438b]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 3] /usr/local/openmpi/dev/lib/libmpi.so.0 [0xe554e2]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/dev/lib/libmpi.so.0(ompi_group_finalize+0x66)
</span><br>
<span class="quotelev1">&gt; [0xe55b69]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/dev/lib/libmpi.so.0(ompi_mpi_finalize+0x37a)
</span><br>
<span class="quotelev1">&gt; [0xe62ab6]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/dev/lib/libmpi.so.0(PMPI_Finalize+0x5f) [0xe9ca6f]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 7] a.out(main+0x2f) [0x804877d]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 8] /lib/libc.so.6(__libc_start_main+0xdc)  
</span><br>
<span class="quotelev1">&gt; [0x4fe27f2c]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] [ 9] a.out [0x8048661]
</span><br>
<span class="quotelev1">&gt; [trantor:19821] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2047.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="2043.php">Lisandro Dalcin: "[OMPI devel] freeing GROUP_EMPTY"</a>
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
