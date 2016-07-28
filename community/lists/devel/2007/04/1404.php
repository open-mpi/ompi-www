<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 13:25:46 2007" -->
<!-- isoreceived="20070405172546" -->
<!-- sent="Thu, 5 Apr 2007 13:25:41 -0400" -->
<!-- isosent="20070405172541" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="16F3723E-1C57-4818-9702-09AFCBBC3588_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8DE7788E-BBDF-4A8E-BD89-C270359082C1_at_cs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-05 13:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Discriminate we did. Not intentionally, but you are correct that it  
<br>
is not supported by all the launchers yet.
<br>
<p>We are not removing it, but I don't have the cycles at the moment to  
<br>
add the support to all the different launchers. It is about 10 lines  
<br>
that need to be added to the launchers, and shouldn't take much time.  
<br>
Are you volunteering?
<br>
<p>-- Josh
<br>
<p>On Apr 5, 2007, at 1:10 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm coming back on this feature. Whatever it does, it doesn't do it  
</span><br>
<span class="quotelev1">&gt; right. If we support a new feature, then at least it should be  
</span><br>
<span class="quotelev1">&gt; supported by all launchers (HINT it should go somewhere in the  
</span><br>
<span class="quotelev1">&gt; base). As I read the PLS code, only the RSH PLS can have this  
</span><br>
<span class="quotelev1">&gt; feature. That's called discrimination !!! Either we support it  
</span><br>
<span class="quotelev1">&gt; everywhere, or we completely remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2007, at 3:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 2, 2007, at 3:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Certainly the end user could specify another file to use in addition
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the default MCA parameter files (mca_param_files), but then they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must also specify the other locations that already exist in that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., $HOME/.openmpi/mca-params.conf:$SYSCONFDIR/openmpi-mca-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; params.conf). This is a short cut in a sense, so the end user  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to know all of this uglyness every time they want to run a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmark, or ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the main point of AMCA's: user convenience.  Yes, you could
</span><br>
<span class="quotelev2">&gt;&gt; supply 20 MCA params on the command line, or set them in the
</span><br>
<span class="quotelev2">&gt;&gt; environment, or add them to your $HOME/.openmpi .conf file, or add an
</span><br>
<span class="quotelev2">&gt;&gt; individual file to your MCA param file list, or ...  The --amca param
</span><br>
<span class="quotelev2">&gt;&gt; is effectively syntactic sugar for adding a .conf file to the MCA
</span><br>
<span class="quotelev2">&gt;&gt; param file list.  It seemed a whole lot easier to do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --amca my_benchmark_settings.conf ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Than
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; foo=`ompi_info --param mca base --parsable | grep
</span><br>
<span class="quotelev2">&gt;&gt; mca_param_files:value | cut -d: -f7-`
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca mca_base_path my_benchmark_settings.conf:$foo ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The intent is that various AMCA files can be introduced and installed
</span><br>
<span class="quotelev2">&gt;&gt; around the code base (I have one for the openib BTL for benchmarking,
</span><br>
<span class="quotelev2">&gt;&gt; for example -- settings that you wouldn't use in production, but you
</span><br>
<span class="quotelev2">&gt;&gt; would use with netpipe).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1405.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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
