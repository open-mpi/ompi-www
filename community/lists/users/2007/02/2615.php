<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 19:14:28 2007" -->
<!-- isoreceived="20070206001428" -->
<!-- sent="Mon, 5 Feb 2007 18:37:15 -0500" -->
<!-- isosent="20070205233715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application porting guide or hints?" -->
<!-- id="E2DB5AB7-0273-4215-B9B8-BDC33532F2FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30343113.1170442748452.JavaMail.root_at_mswamui-andean.atl.sa.earthlink.net" -->
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
<strong>Date:</strong> 2007-02-05 18:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve --
<br>
<p>Hypothetically, there shouldn't be much you need to do.  Open MPI and  
<br>
the other MPI's all conform to the same user-level API, so  
<br>
recompiling your app with Open MPI *should* be sufficient.
<br>
<p>That being said, there's a few disclaimers...
<br>
<p>1. Command line syntax for certain tools will likely be different.   
<br>
So be sure to check out the differences between mpirun, etc.
<br>
<p>2. Even though the MPI's are source compatible, sometimes you can run  
<br>
into an issue of performance portability or performance  
<br>
characteristics.  For example, different MPI's tend block *sometimes*  
<br>
when you use MPI_SEND.  The exact conditions for when each MPI  
<br>
implementation blocks during MPI_SEND are, well, implementation- 
<br>
specific.  :-)  That being said, a truly conformant MPI application  
<br>
will never assume that MPI_SEND *doesn't* block, so this shouldn't be  
<br>
an issue -- but I've seen many real-world apps that *do* assume that  
<br>
MPI_SEND doesn't block (hope you can parse that sentence ok :-) ).   
<br>
Also, OMPI uses pointers for MPI handles (e.g., the C type  
<br>
&quot;MPI_Comm&quot;, under the covers, is actually a pointer).  Other MPI  
<br>
implementations use integers.  Some applications assume that MPI  
<br>
handles are integers, and this can create problems.  The MPI_SEND and  
<br>
handles issues is just two  of several that you may run into -- every  
<br>
application is different, so it's hard to say exactly what will happen.
<br>
<p>Your best bet is simply to recompile your app with Open MPI, fix any  
<br>
warnings that come up, and then try to run and see what happens.  If  
<br>
it doesn't work right out of the box, you *should* be darn close;  
<br>
hopefully it'll just be a few minor issues that need to get  
<br>
straightened out.
<br>
<p>For those on this list who write portable MPI software, it would be  
<br>
great to hear what your experiences have been...
<br>
<p><p><p>On Feb 2, 2007, at 1:59 PM, Steven A. DuChene wrote:
<br>
<p><span class="quotelev1">&gt; Is there any available documentation or write-ups of hints or  
</span><br>
<span class="quotelev1">&gt; general information on
</span><br>
<span class="quotelev1">&gt; the task of porting an existing MPI application from a different  
</span><br>
<span class="quotelev1">&gt; MPI implementation to
</span><br>
<span class="quotelev1">&gt; OpenMPI? We have an app using mpich1 and it needs some updating or  
</span><br>
<span class="quotelev1">&gt; porting to
</span><br>
<span class="quotelev1">&gt; run on a new platform so I figured it would be a good time to  
</span><br>
<span class="quotelev1">&gt; convert it over to a
</span><br>
<span class="quotelev1">&gt; better MPI implementation.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Steve
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2614.php">Jason Martin: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
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
