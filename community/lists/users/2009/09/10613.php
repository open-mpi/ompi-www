<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as a sharedlibrary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 06:14:07 2009" -->
<!-- isoreceived="20090911101407" -->
<!-- sent="Fri, 11 Sep 2009 06:14:01 -0400" -->
<!-- isosent="20090911101401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as a sharedlibrary" -->
<!-- id="E0629EB4-67F4-442C-A3DE-7CBEA5C3D966_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA9AB01.5070702_at_biggjapan.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 06:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10614.php">jody: "Re: [OMPI users] Timers"</a>
<li><strong>Previous message:</strong> <a href="10612.php">amjad ali: "[OMPI users] Timers"</a>
<li><strong>In reply to:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 10, 2009, at 9:42 PM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; That fixed the problem !
</span><br>
<span class="quotelev1">&gt; You are indeed a voodoo master... could you explain the spell behind
</span><br>
<span class="quotelev1">&gt; your magic :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The problem has to do with how plugins (aka dynamic shared objects,  
<br>
DSO's) are loaded.  When a DSO is loaded into a Linux process, it has  
<br>
the option of making all the public symbols in that DSO public to the  
<br>
rest of the process or private within its own scope.
<br>
<p>Let's back up.  Remember that Open MPI is based on plugins (DSO's).   
<br>
It loads lots and lots of plugins during execution (mostly during  
<br>
MPI_INIT).  These plugins call functions in OMPI's public libraries  
<br>
(e.g., they call functions in libmpi.so).  Hence, when the plugin  
<br>
DSO's are loaded, they need to be able to resolve these symbols into  
<br>
actual code that can be invoked.  If the symbols cannot be resolved,  
<br>
the DSO load fails.
<br>
<p>If libParallel.so is loaded into a private scope, then its linked  
<br>
libraries (e.g., libmpi.so) are also loaded into that same private  
<br>
scope.  Hence, all of libmpi.so's public symbols are only public  
<br>
within that single, private scope.  Then, when OMPI goes to load its  
<br>
own DSOs, since libmpi.so's public symbols are in a private scope,  
<br>
OMPI's DSO's can't find them -- and therefore they refuse to load.   
<br>
(private scopes are not inherited -- a new DSO load cannot &quot;see&quot;  
<br>
libParallel.so/libmpi.so's private scope).
<br>
<p>It's an educated guess from your description that this is what was  
<br>
happening.
<br>
<p>OMPI's --disable-dlopen configure option has Open MPI build in a  
<br>
different way.  Instead of building all of OMPI's plugins as DSOs,  
<br>
they are &quot;slurped&quot; up into libmpi.so (etc.).  So there's no &quot;loading&quot;  
<br>
of DSOs at MPI_INIT time -- the plugin code actually resides *in*  
<br>
libmpi.so itself.  Hence, resolution of all symbols is done when  
<br>
libParallel.so loads libmpi.so.  Additionally, there's no secondary  
<br>
private scope created when DSOs are loaded -- they're all self- 
<br>
contained within libmpi.so (etc.).  And therefore all the libmpi.so  
<br>
symbols that are required for the plugins are all able to be found/ 
<br>
resolved at load time.
<br>
<p>Does that make sense?
<br>
<p><p><p><span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm guessing that this has to do with deep, dark voodoo involved  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt; the run time linker.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you try configuring/building Open MPI with --disable-dlopen
</span><br>
<span class="quotelev2">&gt; &gt; configure option, and rebuilding your libParallel.so against the new
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See if that fixes the problem for you.  If it does, I can explain in
</span><br>
<span class="quotelev2">&gt; &gt; more detail (if you care).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 10, 2009, at 3:24 AM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My parallel application is build as a shared library  
</span><br>
<span class="quotelev1">&gt; (libParallel.so).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (I use Debian Lenny 64bit).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  A webservice is used to dynamically load libParallel.so and inturn
</span><br>
<span class="quotelev3">&gt; &gt;&gt; execute the parallel process .
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But during runtime I get the error :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; webservicestub: symbol lookup error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/local/lib/openmpi/mca_paffinity_linux.so: undefined symbol:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which I cannot figure out.I followed every 'ldd' and 'nm' seems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; everything is fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I compiled and tested my parallel code as an executable and  
</span><br>
<span class="quotelev1">&gt; then it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; worked fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What could be the reason for this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; umanga
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10614.php">jody: "Re: [OMPI users] Timers"</a>
<li><strong>Previous message:</strong> <a href="10612.php">amjad ali: "[OMPI users] Timers"</a>
<li><strong>In reply to:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
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
