<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 11:23:20 2007" -->
<!-- isoreceived="20070416152320" -->
<!-- sent="Mon, 16 Apr 2007 09:22:37 -0600" -->
<!-- isosent="20070416152237" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS!! Run-time error" -->
<!-- id="EA4F1752-D6EF-481A-9949-1DEAB833316B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6cc08a440704151040r2e84ca9bi25e5cb4f15a977fb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-16 11:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1414.php">chaitali dherange: "[OMPI devel] SOS!! Run-time error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, it appears everything aborts when opal_event_loop() is called.   
<br>
Did you make any changes to the event library code in opal/event/?   
<br>
If not, that might indicate a mismatch between the binaries and  
<br>
libraries (ie, binaries from one build vs. libraries from another).   
<br>
This will cause random segfaults, possibly like this.
<br>
<p>If that's no help, can you run ompi_info under gdb and generate a  
<br>
detailed stack trace?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Apr 15, 2007, at 11:40 AM, chaitali dherange wrote:
<br>
<p><span class="quotelev1">&gt;   I have downloaded the developer version of source code by  
</span><br>
<span class="quotelev1">&gt; downloading a
</span><br>
<span class="quotelev1">&gt; nightly Subversion snapshot tarball.And have installed the openmpi.
</span><br>
<span class="quotelev1">&gt; Using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/net/hc293/chaitali/openmpi_dev
</span><br>
<span class="quotelev1">&gt; (lots of output... without errors)
</span><br>
<span class="quotelev1">&gt; make all install.
</span><br>
<span class="quotelev1">&gt; (lots of output... without errors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I have tried to run the example provided in this version of  
</span><br>
<span class="quotelev1">&gt; source code... the ring_c.c file... I first copied it to my home  
</span><br>
<span class="quotelev1">&gt; directory... /net/hc293/chaitali
</span><br>
<span class="quotelev1">&gt; now when inside my home directory... i did
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set path=($path /net.hc293/chaitali/openmpi_dev/bin)
</span><br>
<span class="quotelev1">&gt; set $LD_LIBRARY_PATH = ( /net/hc293/chaitali/dev_openmpi/lib )
</span><br>
<span class="quotelev1">&gt; mpicc -o chaitali_test ring_c.c
</span><br>
<span class="quotelev1">&gt; (This gave no errors at all)
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /net/hc293/chaitali/openmpi_dev -np 3 --hostfile / 
</span><br>
<span class="quotelev1">&gt; net/hc293/chaitali/machinefile ./test_chaitali
</span><br>
<span class="quotelev1">&gt; (This gave foll errors..)
</span><br>
<span class="quotelev1">&gt; [oolong:09783] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oolong:09783] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oolong:09783] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [oolong:09783] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 0] /lib64/tls/libpthread.so.0 [0x2a95e01430]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 1] /net/hc293/chaitali/openmpi_dev/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_event_init+0x166) [0x2a957d9e16]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 2] /net/hc293/chaitali/openmpi_dev/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_init_stage1+0x168) [0x2a95680638]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 3] /net/hc293/chaitali/openmpi_dev/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_system_init+0xa) [0x2a9568375a]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 4] /net/hc293/chaitali/openmpi_dev/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_init+0x49) [0x2a95680329]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 5] mpirun(orterun+0x155) [0x4029fd]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 6] mpirun(main+0x1b) [0x4028a3]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 7] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev1">&gt; [0x2a95f273fb]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] [ 8] mpirun [0x4027fa]
</span><br>
<span class="quotelev1">&gt; [oolong:09783] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that the [5] and [6] are the actual errors. But dont  
</span><br>
<span class="quotelev1">&gt; understand why? or how to overcome this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find attached the foll files:
</span><br>
<span class="quotelev1">&gt; - 'ring_c.c' file which I am trying to run.
</span><br>
<span class="quotelev1">&gt; - 'config.log' file from the openmpi-1.2.1a0r14362 folder
</span><br>
<span class="quotelev1">&gt; - 'ompi_info --all.txt' which is the the output of ompi_info -- 
</span><br>
<span class="quotelev1">&gt; all... This contains the above mentioned errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Chaitali
</span><br>
<span class="quotelev1">&gt; &lt;doubt.rar&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1414.php">chaitali dherange: "[OMPI devel] SOS!! Run-time error"</a>
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
