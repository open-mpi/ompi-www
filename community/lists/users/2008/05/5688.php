<?
$subject_val = "Re: [OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 15:07:39 2008" -->
<!-- isoreceived="20080516190739" -->
<!-- sent="Fri, 16 May 2008 15:07:24 -0400" -->
<!-- isosent="20080516190724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling from source from svn" -->
<!-- id="7B1B4A87-9DA7-49DA-AA0B-207082008E59_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080516185710.GB21182_at_dbmail.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling from source from svn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 15:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Truly weird.  Can you send all the information here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On May 16, 2008, at 2:57 PM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; just did a clean check-out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn$ svn update
</span><br>
<span class="quotelev1">&gt; At revision 18449.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get the same problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -o .libs/orted orted.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm  -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/openmpi-svn//lib
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `mca_base_select'
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ubuntu/hardy: Linux gate 2.6.24-16-server #1 SMP
</span><br>
<span class="quotelev1">&gt; subversion: 1.4.6dfsg1-2ubuntu1
</span><br>
<span class="quotelev1">&gt; autoconf: 2.61-4
</span><br>
<span class="quotelev1">&gt; automake: 1:1.10.1-2
</span><br>
<span class="quotelev1">&gt; libtool: 1.5.26-1ubuntu1
</span><br>
<span class="quotelev1">&gt; ifort: Version 10.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Karsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 16, 2008 at 12:02:34 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I just committed this feature to the trunk the other day.   
</span><br>
<span class="quotelev2">&gt;&gt; Could
</span><br>
<span class="quotelev2">&gt;&gt; you perchance have gotten an intermediate r number that didn't want  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; compile?  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What r number did you get?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, my SVN HEAD compiles fine today: r18448.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Karsten Bolding                    Bolding &amp; Burchard ApS
</span><br>
<span class="quotelev1">&gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev1">&gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev1">&gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5689.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
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
