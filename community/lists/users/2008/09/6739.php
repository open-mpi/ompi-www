<?
$subject_val = "Re: [OMPI users] Compiling for portability to non-mpi systems.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 08:20:18 2008" -->
<!-- isoreceived="20080925122018" -->
<!-- sent="Thu, 25 Sep 2008 08:19:50 -0400" -->
<!-- isosent="20080925121950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling for portability to non-mpi systems." -->
<!-- id="9F7C00DE-CACD-462C-BB25-5857C2173308_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0809250457j25ac6989j8d38b2c355d1243c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling for portability to non-mpi systems.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-25 08:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6738.php">jody: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>In reply to:</strong> <a href="6738.php">jody: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The plugin idea is a good one, and probably your best option (e.g.,  
<br>
have an MPI plugin and a non-MPI plugin).  FWIW, plugins are the  
<br>
foundation of Open MPI -- we determine which functionality is  
<br>
available at run-time by opening plugins and querying them.  Plugins  
<br>
generally do one of the following:
<br>
<p>1. open and load successfully, and when queried, report that they can  
<br>
be used in the current environment (e.g., the OpenFabrics network  
<br>
plugin reports &quot;yes, I can be used&quot; if it finds OpenFabrics network  
<br>
devices on the host)
<br>
<p>2. open and load successfully, but then report that they cannot be  
<br>
used when queried
<br>
<p>3. open successfully, but do not load (e.g., shared library that they  
<br>
depend on cannot be found)
<br>
<p>4. do not open successfully (e.g., were compiled for a different  
<br>
architecture)
<br>
<p>Case 1 is the only scenario where you can use that functionality.  In  
<br>
case 2, you can just close the plugin and unload it.  In cases 3 and  
<br>
4, they didn't even load into your process space to begin with, so you  
<br>
can ignore them.
<br>
<p>In Open MPI, we call all case 1 plugins &quot;available&quot;.  For each type of  
<br>
plugin, we take all the available plugins and apply some kind of  
<br>
&quot;selection&quot; logic to determine which we want to use.  For some things,  
<br>
we only want the &quot;best&quot; 1 of N available plugins; for other things, we  
<br>
want to use all N of N available plugins (e.g., network transports for  
<br>
MPI).
<br>
<p>If you go the plugin route, you do end up divorcing the main  
<br>
executable from the back-end functionality, so your executable doesn't  
<br>
have dependencies on the back-end libraries (such as libmpi.so), which  
<br>
is nice.  I would strongly recommend using the libltdl library from  
<br>
GNU Libtool for doing all the dlopen() / dlsym() / dlclose()  
<br>
functionality.  Libltdl is a portable mechanism for doing all this  
<br>
kind of stuff and works across a variety of POSIX-like operating  
<br>
systems.
<br>
<p><p>On Sep 25, 2008, at 7:57 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I don't think there is an Open-MPI based solution for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would probably to the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - place all functions using MPI calls into a separate module and
</span><br>
<span class="quotelev1">&gt; create a shared-object dynamic library (so file).
</span><br>
<span class="quotelev1">&gt; - create another .so file which contains the non-MPI equivalents of
</span><br>
<span class="quotelev1">&gt; those functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At runtime, determine whether MPI is present. If yes, dynamically  
</span><br>
<span class="quotelev1">&gt; load the
</span><br>
<span class="quotelev1">&gt; MPI-functions .so, and otherwise load the Non-MPI-functions .so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However beware that you will have problems if you will use this
</span><br>
<span class="quotelev1">&gt; application on a system
</span><br>
<span class="quotelev1">&gt; whose Open-MPI has a different version than the one you compiled your
</span><br>
<span class="quotelev1">&gt; application with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 25, 2008 at 1:26 PM, Ali Copey &lt;alicopey158_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have created a piece of software that is designed to work under  
</span><br>
<span class="quotelev2">&gt;&gt; a variety
</span><br>
<span class="quotelev2">&gt;&gt; of conditions, one of which is using MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This application will preferably us a single executable and then  
</span><br>
<span class="quotelev2">&gt;&gt; load the
</span><br>
<span class="quotelev2">&gt;&gt; mpi communications interface as a library at runtime, however  
</span><br>
<span class="quotelev2">&gt;&gt; adding this
</span><br>
<span class="quotelev2">&gt;&gt; functionality by compiling using the mpi compile wrappers creates an
</span><br>
<span class="quotelev2">&gt;&gt; executable that will not run on a system without mpi installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to have the main executable not dependent upon the  
</span><br>
<span class="quotelev2">&gt;&gt; presence
</span><br>
<span class="quotelev2">&gt;&gt; of mpi but still able to load the mpi dependent library if mpi is  
</span><br>
<span class="quotelev2">&gt;&gt; required,
</span><br>
<span class="quotelev2">&gt;&gt; and how would this be achieved?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6738.php">jody: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>In reply to:</strong> <a href="6738.php">jody: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
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
