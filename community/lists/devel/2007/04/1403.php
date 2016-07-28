<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 13:10:27 2007" -->
<!-- isoreceived="20070405171027" -->
<!-- sent="Thu, 5 Apr 2007 13:10:15 -0400" -->
<!-- isosent="20070405171015" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="8DE7788E-BBDF-4A8E-BD89-C270359082C1_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A539F789-B51B-4A97-9FAE-8AA95AE1CE5C_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-05 13:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1402.php">Jeff Squyres: "Re: [OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/03/1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm coming back on this feature. Whatever it does, it doesn't do it  
<br>
right. If we support a new feature, then at least it should be  
<br>
supported by all launchers (HINT it should go somewhere in the base).  
<br>
As I read the PLS code, only the RSH PLS can have this feature.  
<br>
That's called discrimination !!! Either we support it everywhere, or  
<br>
we completely remove it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mar 2, 2007, at 3:58 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 2, 2007, at 3:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Certainly the end user could specify another file to use in addition
</span><br>
<span class="quotelev2">&gt;&gt; to the default MCA parameter files (mca_param_files), but then they
</span><br>
<span class="quotelev2">&gt;&gt; must also specify the other locations that already exist in that path
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., $HOME/.openmpi/mca-params.conf:$SYSCONFDIR/openmpi-mca-
</span><br>
<span class="quotelev2">&gt;&gt; params.conf). This is a short cut in a sense, so the end user doesn't
</span><br>
<span class="quotelev2">&gt;&gt; have to know all of this uglyness every time they want to run a
</span><br>
<span class="quotelev2">&gt;&gt; benchmark, or ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the main point of AMCA's: user convenience.  Yes, you could
</span><br>
<span class="quotelev1">&gt; supply 20 MCA params on the command line, or set them in the
</span><br>
<span class="quotelev1">&gt; environment, or add them to your $HOME/.openmpi .conf file, or add an
</span><br>
<span class="quotelev1">&gt; individual file to your MCA param file list, or ...  The --amca param
</span><br>
<span class="quotelev1">&gt; is effectively syntactic sugar for adding a .conf file to the MCA
</span><br>
<span class="quotelev1">&gt; param file list.  It seemed a whole lot easier to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --amca my_benchmark_settings.conf ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Than
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foo=`ompi_info --param mca base --parsable | grep
</span><br>
<span class="quotelev1">&gt; mca_param_files:value | cut -d: -f7-`
</span><br>
<span class="quotelev1">&gt; mpirun --mca mca_base_path my_benchmark_settings.conf:$foo ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent is that various AMCA files can be introduced and installed
</span><br>
<span class="quotelev1">&gt; around the code base (I have one for the openib BTL for benchmarking,
</span><br>
<span class="quotelev1">&gt; for example -- settings that you wouldn't use in production, but you
</span><br>
<span class="quotelev1">&gt; would use with netpipe).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1403/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1402.php">Jeff Squyres: "Re: [OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/03/1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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
