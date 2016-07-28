<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as a sharedlibrary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 07:26:30 2009" -->
<!-- isoreceived="20090911112630" -->
<!-- sent="Fri, 11 Sep 2009 13:26:12 +0200" -->
<!-- isosent="20090911112612" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as a sharedlibrary" -->
<!-- id="54E496B4-9EF2-4BE9-9C07-1C3839A9E23D_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 07:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10615.php">Ake Sandgren: "[OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.09.2009 um 12:14 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Sep 10, 2009, at 9:42 PM, Ashika Umanga Umagiliya wrote:
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
<span class="quotelev1">&gt; DSO's) are loaded.  When a DSO is loaded into a Linux process, it  
</span><br>
<span class="quotelev1">&gt; has the option of making all the public symbols in that DSO public  
</span><br>
<span class="quotelev1">&gt; to the rest of the process or private within its own scope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's back up.  Remember that Open MPI is based on plugins  
</span><br>
<span class="quotelev1">&gt; (DSO's).  It loads lots and lots of plugins during execution  
</span><br>
<span class="quotelev1">&gt; (mostly during MPI_INIT).  These plugins call functions in OMPI's  
</span><br>
<span class="quotelev1">&gt; public libraries (e.g., they call functions in libmpi.so).  Hence,  
</span><br>
<span class="quotelev1">&gt; when the plugin DSO's are loaded, they need to be able to resolve  
</span><br>
<span class="quotelev1">&gt; these symbols into actual code that can be invoked.  If the symbols  
</span><br>
<span class="quotelev1">&gt; cannot be resolved, the DSO load fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If libParallel.so is loaded into a private scope, then its linked  
</span><br>
<span class="quotelev1">&gt; libraries (e.g., libmpi.so) are also loaded into that same private  
</span><br>
<span class="quotelev1">&gt; scope.  Hence, all of libmpi.so's public symbols are only public  
</span><br>
<span class="quotelev1">&gt; within that single, private scope.  Then, when OMPI goes to load  
</span><br>
<span class="quotelev1">&gt; its own DSOs, since libmpi.so's public symbols are in a private  
</span><br>
<span class="quotelev1">&gt; scope, OMPI's DSO's can't find them -- and therefore they refuse to  
</span><br>
<span class="quotelev1">&gt; load.  (private scopes are not inherited -- a new DSO load cannot  
</span><br>
<span class="quotelev1">&gt; &quot;see&quot; libParallel.so/libmpi.so's private scope).
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
<span class="quotelev1">&gt; different way.
</span><br>
<p>Aha - this might also explain what I faced some time ago. I tried to  
<br>
compile an application called Molpro with GlobalArrays which I  
<br>
compiled with Open MPI. I faced similar errors - the compilation  
<br>
worked without any problem, but I couldn't run the application, as it  
<br>
resulted in a similar error. Finally I gave up and stayed with mpich 
<br>
(1) for this.
<br>
<p>I will try to build it with this switch in the next days - maybe it  
<br>
will also solve this issue.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;   Instead of building all of OMPI's plugins as DSOs, they are  
</span><br>
<span class="quotelev1">&gt; &quot;slurped&quot; up into libmpi.so (etc.).  So there's no &quot;loading&quot; of  
</span><br>
<span class="quotelev1">&gt; DSOs at MPI_INIT time -- the plugin code actually resides *in*  
</span><br>
<span class="quotelev1">&gt; libmpi.so itself.  Hence, resolution of all symbols is done when  
</span><br>
<span class="quotelev1">&gt; libParallel.so loads libmpi.so.  Additionally, there's no secondary  
</span><br>
<span class="quotelev1">&gt; private scope created when DSOs are loaded -- they're all self- 
</span><br>
<span class="quotelev1">&gt; contained within libmpi.so (etc.).  And therefore all the libmpi.so  
</span><br>
<span class="quotelev1">&gt; symbols that are required for the plugins are all able to be found/ 
</span><br>
<span class="quotelev1">&gt; resolved at load time.
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
<span class="quotelev3">&gt;&gt; &gt; I'm guessing that this has to do with deep, dark voodoo involved  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the run time linker.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you try configuring/building Open MPI with --disable-dlopen
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure option, and rebuilding your libParallel.so against the  
</span><br>
<span class="quotelev2">&gt;&gt; new
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libmpi.so?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; See if that fixes the problem for you.  If it does, I can  
</span><br>
<span class="quotelev2">&gt;&gt; explain in
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
<span class="quotelev4">&gt;&gt; &gt;&gt;  A webservice is used to dynamically load libParallel.so and  
</span><br>
<span class="quotelev2">&gt;&gt; inturn
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10615.php">Ake Sandgren: "[OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>Reply:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
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
