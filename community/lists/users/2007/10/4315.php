<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 21:00:15 2007" -->
<!-- isoreceived="20071025010015" -->
<!-- sent="Wed, 24 Oct 2007 20:59:30 -0400" -->
<!-- isosent="20071025005930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] xcode and ompi" -->
<!-- id="6039B2CF-ADB8-4816-B380-4C56CA86A567_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F9EA32D-80A1-40DD-AD62-6E609C3FFE16_at_umich.edu" -->
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
<strong>Date:</strong> 2007-10-24 20:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>In reply to:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those are the three libraries that are typically required.  I don't  
<br>
know anything about xcode, so I don't know if there's any other  
<br>
secret sauce that you need to use.
<br>
<p>Warner -- can you shed any light here?
<br>
<p>To verify your Open MPI installation, you might want to try compiling  
<br>
a trivial MPI application outside of xcode with the simple &quot;mpicc&quot;  
<br>
wrapper compiler, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc mpi_hello_world.c -o mpi_hello_world
<br>
<p>You can also see what underlying command mpicc is invoking with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc mpi_hello_world.c -o mpi_hello_world --showme
<br>
<p>But I will pretty much guarantee that if you have mixed multiple MPI  
<br>
implementations (LAM and Open MPI) in the same directory tree, things  
<br>
won't work.  It would be best to fully uninstall one (e.g., LAM) and  
<br>
then re-install the other (e.g., Open MPI).  If you've lost the build  
<br>
directory for LAM, you can download a new source tarball from www.lam- 
<br>
mpi.org.
<br>
<p><p><p><p>On Oct 21, 2007, at 11:13 PM, Tony Sheh wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working in xcode and i'm trying to build an application that
</span><br>
<span class="quotelev1">&gt; links against the OMPI libraries. So far i've included the following
</span><br>
<span class="quotelev1">&gt; files in the build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.dylib
</span><br>
<span class="quotelev1">&gt; libopen-pal.dylib
</span><br>
<span class="quotelev1">&gt; libopen-rte.dylib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the errors i get are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt; .... all the MPI functions you can think of......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as well as a warning: &quot;suggest use of -bind_at_load, as lazy binding
</span><br>
<span class="quotelev1">&gt; may result in errors or different symbols being used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled and linked to the static libraries (using ./configure --
</span><br>
<span class="quotelev1">&gt; enable-static) and i get the same errors. Also, i previously the
</span><br>
<span class="quotelev1">&gt; latest version of lam/mpi installed. I didn't uninstall it since i
</span><br>
<span class="quotelev1">&gt; lost the original directory as well as the make and configure
</span><br>
<span class="quotelev1">&gt; settings. If that is the conflict then any information about how to
</span><br>
<span class="quotelev1">&gt; resolve it would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Tony
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
<li><strong>Next message:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>In reply to:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
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
