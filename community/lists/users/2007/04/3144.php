<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 20:42:22 2007" -->
<!-- isoreceived="20070426004222" -->
<!-- sent="Wed, 25 Apr 2007 20:42:05 -0400" -->
<!-- isosent="20070426004205" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Portland Group Compiler &amp;quot;-Msignextend&amp;quot; flag" -->
<!-- id="DBA7AFB8-B0AD-460B-8165-77E007475A05_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="p0624050bc255a0e8456f_at_[129.105.110.38]" -->
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
<strong>Date:</strong> 2007-04-25 20:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3147.php">Götz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in the trunk, and change move request filed for the v1.2 branch.
<br>
<p>Thanks!
<br>
<p><p>On Apr 25, 2007, at 8:30 PM, Bruce Foster wrote:
<br>
<p><span class="quotelev1">&gt; The README instructions for PGI compilation have a typo:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current context:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The Portland Group compilers require the &quot;-Msignextend&quot; compiler
</span><br>
<span class="quotelev1">&gt;    flag to extend the sign bit when converting from a shorter to  
</span><br>
<span class="quotelev1">&gt; longer
</span><br>
<span class="quotelev1">&gt;    integer.  This is is different than other compilers (such as GNU).
</span><br>
<span class="quotelev1">&gt;    When compiling Open MPI with the Portland compiler suite, the
</span><br>
<span class="quotelev1">&gt;    following flags should be passed to Open MPI's configure script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    shell$ ./configure CFLAGS=-Msignextend CXXFLAGS=-signextent \
</span><br>
<span class="quotelev1">&gt;          --with-wrapper-cflags=-Msignextend \
</span><br>
<span class="quotelev1">&gt;          --with-wrapper-cxxflags=-Msignextend ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This will both compile Open MPI with the proper compile flags and
</span><br>
<span class="quotelev1">&gt;    also automatically add &quot;-Msignextend&quot; when the C and C++ MPI  
</span><br>
<span class="quotelev1">&gt; wrapper
</span><br>
<span class="quotelev1">&gt;    compilers are used to compile user MPI applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    shell$ ./configure CFLAGS=-Msignextend CXXFLAGS=-Msignextend \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That fixes the CXXFLAGS definition.
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
<li><strong>Next message:</strong> <a href="3145.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3147.php">Götz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
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
