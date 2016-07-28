<?
$subject_val = "Re: [OMPI users] Problem with linking on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 15:04:37 2009" -->
<!-- isoreceived="20090819190437" -->
<!-- sent="Wed, 19 Aug 2009 12:04:31 -0700" -->
<!-- isosent="20090819190431" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with linking on OS X" -->
<!-- id="846B5410-F1F7-45FF-9B36-897E6F8ED401_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="791FC700-9A96-41EC-9F3F-6B0166C81B42_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with linking on OS X<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 15:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tomek,
<br>
<p>I'm using 10.5.7, and just went through a painful process that we  
<br>
thought was library related (but it wasn't), so I'll give my less-than- 
<br>
learned response, and if you sill have difficulties hopefully others  
<br>
will chime in:
<br>
<p>What is the result of &quot;which mpicc&quot; (or whatever you are using for  
<br>
your compiling/linking?  I'm pretty sure that's where the library  
<br>
paths get set, and if you are calling /usr/bin/mpicc you will get the  
<br>
wrong library paths in the executable.
<br>
<p>On Aug 19, 2009, at  10:57 AM, tomek wrote:
<br>
<p><span class="quotelev1">&gt; 1. Using DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 2. passing some ./configure --with-wrapper-ldflags=&quot;-L/opt/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib&quot;
</span><br>
<span class="quotelev1">&gt; 3. passing some ./configure --with-wrapper-ldflags=&quot;-rpath /opt/ 
</span><br>
<span class="quotelev1">&gt; openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt; 4. hand compilation with cc -L/opt/openmpi/lib -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 and 3 did not work (ld error=22)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1 and 2 my code still gets linked with /usr/lib/libmpi...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, that the /opt/openmpi/bin path is properly set and ompi_info  
</span><br>
<span class="quotelev1">&gt; does outputs the right info.
</span><br>
<p>You do not need to set DYLD_LIBRARY_PATH.  I don't have it set and my  
<br>
mpi applications run fine.
<br>
<p>Did 4 work?
<br>
<p>Cheers,  Jody
<br>
<p><p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
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
