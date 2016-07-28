<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 15:14:04 2007" -->
<!-- isoreceived="20070405191404" -->
<!-- sent="Thu, 5 Apr 2007 15:13:44 -0400" -->
<!-- isosent="20070405191344" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="A37E179A-278F-4045-9989-26242FCEF6D9_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16F3723E-1C57-4818-9702-09AFCBBC3588_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-04-05 15:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you didn't get the idea. I'm absolutely not volunteering. I'm  
<br>
just stating that it get into the trunk way to early in a stage where  
<br>
it shouldn't. And that's starting to become a very common problem in  
<br>
Open MPI nowadays.
<br>
<p>Moreover, as it is supposed to be a generic aggregate file why should  
<br>
we copy&amp;paste (even 10 lines of code)? It shouldn't be in any of the  
<br>
components, if it's general then it should go in the base.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 5, 2007, at 1:25 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Discriminate we did. Not intentionally, but you are correct that it
</span><br>
<span class="quotelev1">&gt; is not supported by all the launchers yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are not removing it, but I don't have the cycles at the moment to
</span><br>
<span class="quotelev1">&gt; add the support to all the different launchers. It is about 10 lines
</span><br>
<span class="quotelev1">&gt; that need to be added to the launchers, and shouldn't take much time.
</span><br>
<span class="quotelev1">&gt; Are you volunteering?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2007, at 1:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm coming back on this feature. Whatever it does, it doesn't do it
</span><br>
<span class="quotelev2">&gt;&gt; right. If we support a new feature, then at least it should be
</span><br>
<span class="quotelev2">&gt;&gt; supported by all launchers (HINT it should go somewhere in the
</span><br>
<span class="quotelev2">&gt;&gt; base). As I read the PLS code, only the RSH PLS can have this
</span><br>
<span class="quotelev2">&gt;&gt; feature. That's called discrimination !!! Either we support it
</span><br>
<span class="quotelev2">&gt;&gt; everywhere, or we completely remove it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 2, 2007, at 3:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 2, 2007, at 3:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Certainly the end user could specify another file to use in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addition
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the default MCA parameter files (mca_param_files), but then they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; must also specify the other locations that already exist in that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., $HOME/.openmpi/mca-params.conf:$SYSCONFDIR/openmpi-mca-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; params.conf). This is a short cut in a sense, so the end user
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have to know all of this uglyness every time they want to run a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; benchmark, or ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the main point of AMCA's: user convenience.  Yes, you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supply 20 MCA params on the command line, or set them in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment, or add them to your $HOME/.openmpi .conf file, or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; individual file to your MCA param file list, or ...  The --amca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is effectively syntactic sugar for adding a .conf file to the MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param file list.  It seemed a whole lot easier to do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --amca my_benchmark_settings.conf ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Than
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; foo=`ompi_info --param mca base --parsable | grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_param_files:value | cut -d: -f7-`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca mca_base_path my_benchmark_settings.conf:$foo ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The intent is that various AMCA files can be introduced and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around the code base (I have one for the openib BTL for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmarking,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example -- settings that you wouldn't use in production, but you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would use with netpipe).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1405/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1404.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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
