<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 02:57:09 2007" -->
<!-- isoreceived="20070614065709" -->
<!-- sent="Thu, 14 Jun 2007 08:56:58 +0200" -->
<!-- isosent="20070614065658" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="20070614065657.GC25815_at_creus.mpi.zmaw.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EE2968C-A27C-4B03-9628-CB403F786D88_at_cisco.com" -->
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
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 02:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it is such a general bug in the PGI compiler it might be worthwhile
<br>
to get it PGI fixed fast and distribute that to the users affected.
<br>
Usually they are pretty responsive.
<br>
<p><span class="quotelev1">&gt; On Jun 13, 2007, at 8:47 PM, Julian Cummings wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I did some quick tests with my little hello example that indicate that
</span><br>
<span class="quotelev2">&gt; &gt; the application code only needs to be *linked* with -fpic, not  
</span><br>
<span class="quotelev2">&gt; &gt; compiled
</span><br>
<span class="quotelev2">&gt; &gt; with it.  The -fpic flag on the mpicxx link line points the linker  
</span><br>
<span class="quotelev2">&gt; &gt; to a
</span><br>
<span class="quotelev2">&gt; &gt; PGI &quot;libso&quot; subdirectory that contains dynamic versions of the  
</span><br>
<span class="quotelev2">&gt; &gt; compiler
</span><br>
<span class="quotelev2">&gt; &gt; libraries.  In this case, probably libC.so is most important.  Anyway,
</span><br>
<span class="quotelev2">&gt; &gt; at least you do not have to potentially degrade the performance of the
</span><br>
<span class="quotelev2">&gt; &gt; application code by compiling all of it with -fpic.  I would recommend
</span><br>
<span class="quotelev2">&gt; &gt; that the OpenMPI configuration be modified to insert this flag (or  
</span><br>
<span class="quotelev2">&gt; &gt; some
</span><br>
<span class="quotelev2">&gt; &gt; equivalent) as an LCXXFLAGS or even an LDFLAGS component in the  
</span><br>
<span class="quotelev2">&gt; &gt; compiler
</span><br>
<span class="quotelev2">&gt; &gt; driver scripts whenever PGI is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've had debates about this internally.  There was pushabck from  
</span><br>
<span class="quotelev1">&gt; some of the developers that we don't want to handle every single  
</span><br>
<span class="quotelev1">&gt; compiler bug that's out there (there are many).  It can be a never- 
</span><br>
<span class="quotelev1">&gt; ending battle.  This is a big enough compiler bug, however (it spans  
</span><br>
<span class="quotelev1">&gt; the 6.2 and 7.0 PGI series) that if someone contributes a patch, we  
</span><br>
<span class="quotelev1">&gt; might be able to make a big enough case to fix it.  The functionality  
</span><br>
<span class="quotelev1">&gt; I'd like to see in such a patch is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - in the C++ section of configure, try to compile and run a simple C+ 
</span><br>
<span class="quotelev1">&gt; + (non-MPI) program
</span><br>
<span class="quotelev1">&gt; - if it works, fine
</span><br>
<span class="quotelev1">&gt; - if it doesn't work, try again but link it with -fpic
</span><br>
<span class="quotelev1">&gt; - if that works, then add -fpic to the C++ compiler wrapper flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All with appropriate comments describing why this check is there (so  
</span><br>
<span class="quotelev1">&gt; that someone doesn't look at it in 6 months and wonder why the heck  
</span><br>
<span class="quotelev1">&gt; we're checking for that).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, you can easily modify the wrapper scripts to automatically put  
</span><br>
<span class="quotelev1">&gt; this flag in after Open MPI is installed (see <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev1">&gt; faq/?category=mpi-apps#override-wrappers-after-v1.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
-- 
                             \\\\\\
                             (-0^0-)
--------------------------oOO--(_)--OOo-----------------------------
 Luis Kornblueh                           Tel. : +49-40-41173289
 Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
 Bundesstr. 53              
 D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
 Federal Republic of Germany                                               
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3491.php">Julian Cummings: "Re: [OMPI users] C++ error: static object marked for destruction	more than once"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
