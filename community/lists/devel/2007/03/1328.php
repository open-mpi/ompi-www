<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  2 15:59:22 2007" -->
<!-- isoreceived="20070302205922" -->
<!-- sent="Fri, 2 Mar 2007 15:58:25 -0500" -->
<!-- isosent="20070302205825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="A539F789-B51B-4A97-9FAE-8AA95AE1CE5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B55AA595-F398-46FE-9BFB-43C713B5A408_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-03-02 15:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2007, at 3:37 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Certainly the end user could specify another file to use in addition
</span><br>
<span class="quotelev1">&gt; to the default MCA parameter files (mca_param_files), but then they
</span><br>
<span class="quotelev1">&gt; must also specify the other locations that already exist in that path
</span><br>
<span class="quotelev1">&gt; (e.g., $HOME/.openmpi/mca-params.conf:$SYSCONFDIR/openmpi-mca-
</span><br>
<span class="quotelev1">&gt; params.conf). This is a short cut in a sense, so the end user doesn't
</span><br>
<span class="quotelev1">&gt; have to know all of this uglyness every time they want to run a
</span><br>
<span class="quotelev1">&gt; benchmark, or ...
</span><br>
<p>This is the main point of AMCA's: user convenience.  Yes, you could  
<br>
supply 20 MCA params on the command line, or set them in the  
<br>
environment, or add them to your $HOME/.openmpi .conf file, or add an  
<br>
individual file to your MCA param file list, or ...  The --amca param  
<br>
is effectively syntactic sugar for adding a .conf file to the MCA  
<br>
param file list.  It seemed a whole lot easier to do:
<br>
<p>mpirun --amca my_benchmark_settings.conf ...
<br>
<p>Than
<br>
<p>foo=`ompi_info --param mca base --parsable | grep  
<br>
mca_param_files:value | cut -d: -f7-`
<br>
mpirun --mca mca_base_path my_benchmark_settings.conf:$foo ...
<br>
<p>The intent is that various AMCA files can be introduced and installed  
<br>
around the code base (I have one for the openib BTL for benchmarking,  
<br>
for example -- settings that you wouldn't use in production, but you  
<br>
would use with netpipe).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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
