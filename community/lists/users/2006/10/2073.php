<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 11:16:26 2006" -->
<!-- isoreceived="20061027151626" -->
<!-- sent="Fri, 27 Oct 2006 11:16:11 -0400" -->
<!-- isosent="20061027151611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how do i link to .la library files?" -->
<!-- id="E9B55920-B21F-4B21-90BD-CFD201517657_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061027150424.89945.qmail_at_web30314.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2006-10-27 11:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>In reply to:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2006, at 11:04 AM, shane kennedy wrote:
<br>
<p><span class="quotelev1">&gt; thank you for your reply.  i am using mpicc/mpif90.  i
</span><br>
<span class="quotelev1">&gt; am able to successfully compile, but during execution
</span><br>
<span class="quotelev1">&gt; i receive an &quot;error while loading shared libraries.&quot;
</span><br>
<p>See this FAQ category -- I believe your questions should be answered  
<br>
there:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><span class="quotelev1">&gt; i tried compiling/linking w/ -static flag to overcome
</span><br>
<span class="quotelev1">&gt; the shared library error.  however, linking w/ -static
</span><br>
<span class="quotelev1">&gt; gives me an error of &quot;ld: cannot find -lmpi.&quot;  i do
</span><br>
<span class="quotelev1">&gt; not have a libmpi.a file.  i do have a libmpi.la file
</span><br>
<span class="quotelev1">&gt; but don't know how to link to it.
</span><br>
<p>The .la files are Libtool Archive files (for GNU Libtool).  They are  
<br>
only useful if you are using GNU Libtool to build your application  
<br>
and you are not using our wrapper compilers (which is not  
<br>
recommended).  So -- you should probably just ignore them.
<br>
<p>As for compiling statically, OMPI defaults to building dynamically  
<br>
(and not statically).  You can choose to build OMPI statically by  
<br>
using the &quot;--enable-static&quot; (and potentially &quot;--disable-shared&quot;)  
<br>
options to OMPI's configure script.  This will then create and  
<br>
install libmpi.a (and others).
<br>
<p>Note that per mails earlier this month on this list, there are  
<br>
currently issues with creating *fully* static MPI executables with  
<br>
OpenIB / OFED networks (i.e., compiling with -static as opposed to  
<br>
just having libmpi.a so that MPI is statically included in your  
<br>
application).  Much discussion about this topic has occurred off this  
<br>
list; more information should be available shortly (probably on the  
<br>
FAQ).  Feel free to ping me off-list if you need further information  
<br>
before it becomes available on the FAQ.
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
<li><strong>Next message:</strong> <a href="2074.php">Tony Ladd: "[OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2072.php">Justin Bronder: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>In reply to:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
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
