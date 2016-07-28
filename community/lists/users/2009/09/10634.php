<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as a sharedlibrary";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 21:33:02 2009" -->
<!-- isoreceived="20090914013302" -->
<!-- sent="Mon, 14 Sep 2009 10:32:50 +0900" -->
<!-- isosent="20090914013250" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as a sharedlibrary" -->
<!-- id="4AAD9D42.9090108_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0629EB4-67F4-442C-A3DE-7CBEA5C3D966_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol error when built as a sharedlibrary<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-13 21:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks jeff, that clears everything .
<br>
Now I remember,few time ago I came up with a issue like this when using 
<br>
Dynamic loading  (dlopen,dlsym..etc) and later I had to use shared 
<br>
libraries.. I think ,this is same as that.
<br>
<p>thanks again
<br>
umanga
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 9:42 PM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That fixed the problem !
</span><br>
<span class="quotelev2">&gt;&gt; You are indeed a voodoo master... could you explain the spell behind
</span><br>
<span class="quotelev2">&gt;&gt; your magic :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem has to do with how plugins (aka dynamic shared objects, 
</span><br>
<span class="quotelev1">&gt; DSO's) are loaded.  When a DSO is loaded into a Linux process, it has 
</span><br>
<span class="quotelev1">&gt; the option of making all the public symbols in that DSO public to the 
</span><br>
<span class="quotelev1">&gt; rest of the process or private within its own scope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's back up.  Remember that Open MPI is based on plugins (DSO's).  
</span><br>
<span class="quotelev1">&gt; It loads lots and lots of plugins during execution (mostly during 
</span><br>
<span class="quotelev1">&gt; MPI_INIT).  These plugins call functions in OMPI's public libraries 
</span><br>
<span class="quotelev1">&gt; (e.g., they call functions in libmpi.so).  Hence, when the plugin 
</span><br>
<span class="quotelev1">&gt; DSO's are loaded, they need to be able to resolve these symbols into 
</span><br>
<span class="quotelev1">&gt; actual code that can be invoked.  If the symbols cannot be resolved, 
</span><br>
<span class="quotelev1">&gt; the DSO load fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If libParallel.so is loaded into a private scope, then its linked 
</span><br>
<span class="quotelev1">&gt; libraries (e.g., libmpi.so) are also loaded into that same private 
</span><br>
<span class="quotelev1">&gt; scope.  Hence, all of libmpi.so's public symbols are only public 
</span><br>
<span class="quotelev1">&gt; within that single, private scope.  Then, when OMPI goes to load its 
</span><br>
<span class="quotelev1">&gt; own DSOs, since libmpi.so's public symbols are in a private scope, 
</span><br>
<span class="quotelev1">&gt; OMPI's DSO's can't find them -- and therefore they refuse to load.  
</span><br>
<span class="quotelev1">&gt; (private scopes are not inherited -- a new DSO load cannot &quot;see&quot; 
</span><br>
<span class="quotelev1">&gt; libParallel.so/libmpi.so's private scope).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's an educated guess from your description that this is what was 
</span><br>
<span class="quotelev1">&gt; happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's --disable-dlopen configure option has Open MPI build in a 
</span><br>
<span class="quotelev1">&gt; different way.  Instead of building all of OMPI's plugins as DSOs, 
</span><br>
<span class="quotelev1">&gt; they are &quot;slurped&quot; up into libmpi.so (etc.).  So there's no &quot;loading&quot; 
</span><br>
<span class="quotelev1">&gt; of DSOs at MPI_INIT time -- the plugin code actually resides *in* 
</span><br>
<span class="quotelev1">&gt; libmpi.so itself.  Hence, resolution of all symbols is done when 
</span><br>
<span class="quotelev1">&gt; libParallel.so loads libmpi.so.  Additionally, there's no secondary 
</span><br>
<span class="quotelev1">&gt; private scope created when DSOs are loaded -- they're all 
</span><br>
<span class="quotelev1">&gt; self-contained within libmpi.so (etc.).  And therefore all the 
</span><br>
<span class="quotelev1">&gt; libmpi.so symbols that are required for the plugins are all able to be 
</span><br>
<span class="quotelev1">&gt; found/resolved at load time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm guessing that this has to do with deep, dark voodoo involved with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the run time linker.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you try configuring/building Open MPI with --disable-dlopen
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure option, and rebuilding your libParallel.so against the new
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libmpi.so?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; See if that fixes the problem for you.  If it does, I can explain in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; more detail (if you care).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 10, 2009, at 3:24 AM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Greetings all,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; My parallel application is build as a shared library 
</span><br>
<span class="quotelev2">&gt;&gt; (libParallel.so).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (I use Debian Lenny 64bit).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  A webservice is used to dynamically load libParallel.so and inturn
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; execute the parallel process .
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; But during runtime I get the error :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; webservicestub: symbol lookup error:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /usr/local/lib/openmpi/mca_paffinity_linux.so: undefined symbol:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mca_base_param_reg_int
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; which I cannot figure out.I followed every 'ldd' and 'nm' seems
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; everything is fine.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; So I compiled and tested my parallel code as an executable and 
</span><br>
<span class="quotelev2">&gt;&gt; then it
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; worked fine.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; What could be the reason for this?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; umanga
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
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
